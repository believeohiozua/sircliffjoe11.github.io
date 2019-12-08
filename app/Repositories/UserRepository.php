<?php

namespace App\Repositories;

use MediaUploader;
use App\Models\User;
use App\Traits\UploadAble;
use App\Contracts\UserContract;
use Illuminate\Http\UploadedFile;
use App\Events\UserRegisteredEvent;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class UserRepository
 *
 * @package \App\Repositories
 */
class UserRepository extends BaseRepository implements UserContract
{
    use UploadAble;

    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listUsers(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findUserById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return User|mixed
     */
    public function createUser($request)
    {
        try {
            $avatar = null;

            $params = $request->except(['_token', 'avatar', 'id']);
            $params['password']    = bcrypt('12345678');
            $params['source']    = is_null($request->id) ? 0 : 1;

            $user = new User($params);
            $user->save();

            if ($request->has('avatar') && ($request->avatar instanceof  UploadedFile)) {
                $avatar = MediaUploader::fromSource($request->avatar)
                    ->useFileName('user'.$user->id)
                    ->toDirectory('avatars')
                    ->onDuplicateReplace()
                    ->upload();
                    
                $user->syncMedia($avatar, 'avatar');
            }
            
            // notify user via sms, email and timeline
            $data = [ 
                'user' => $user,
                'recipients' => array($user),
                'sms' => trans('notify.sms_login', [
                            'domain' => config('settings.domain_name'),
                            ]),
                'subject' => 'Application Approved',
                'email' => trans('notify.email_login', [
                            'app' => config('settings.site_title'),
                            ]),
                'timeline' => 'Welcome to '.config('settings.site_title'),
                'details' => trans('notify.timeline_login_details', [
                            'app' => config('settings.site_title'),
                            'name' => $user->first_name,
                            ]),
                'type' => 0,
            ];
            
            event( new UserRegisteredEvent($data) );

            return $user;
        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateUser($request)
    {
        try {
            $user = $this->findUserById($request->id);
    
            $params = $request->except(['_token', 'avatar']);
            $user->update($params);
    
            if ($request->has('avatar') && ($request->avatar instanceof  UploadedFile)) {
                $avatar = MediaUploader::fromSource($request->avatar)
                    ->useFileName('user'.$user->id)
                    ->toDirectory('avatars')
                    ->onDuplicateReplace()
                    ->upload();
    
                $user->syncMedia($avatar, 'avatar');
            }
    
            return $user;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteUser($id)
    {
        try {
            $user = $this->findUserById($id);
    
            if ($user->hasMedia('avatar')) {
                $user->firstMedia('avatar')->delete();
            }
    
            $user->delete();
    
            return $user;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }
}