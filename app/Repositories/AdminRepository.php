<?php

namespace App\Repositories;

use MediaUploader;
use App\Models\Admin;
use App\Traits\UploadAble;
use App\Contracts\AdminContract;
use Illuminate\Http\UploadedFile;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;


/**
 * Class AdminRepository
 *
 * @package \App\Repositories
 */
class AdminRepository extends BaseRepository implements AdminContract
{
    use UploadAble;

    /**
     * AdminRepository constructor.
     * @param Admin $model
     */
    public function __construct(Admin $model)
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
    public function listAdmins(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findAdminById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Admin|mixed
     */
    public function createAdmin($request)
    {
        try {
            $avatar = null;

            $params = $request->except(['_token', 'avatar']);
            $params['password'] = bcrypt($request->password);

            $admin = new Admin($params);
            $admin->save();

            if ($request->has('avatar') && ($request->avatar instanceof  UploadedFile)) {
                $avatar = MediaUploader::fromSource($request->avatar)
                    ->useFileName('admin'.$admin->id)
                    ->toDirectory('avatars')
                    ->onDuplicateIncrement()
                    ->upload();
                    
                $admin->syncMedia($avatar, 'avatar');
            }


            return $admin;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateAdmin($request)
    {
        try {
            $admin = $this->findAdminById($request->id);
    
            if ($request->has('password') && $request->password !== "" && $request->password !== null) {  
                $params = $request->except(['_token', 'avatar']);  
                $params['password'] = bcrypt($request->password);
            } else {            
                $params = $request->except(['_token', 'avatar', 'password']);
            }
    
            $admin->update($params);
    
            if ($request->has('avatar') && ($request->avatar instanceof  UploadedFile)) {
                $avatar = MediaUploader::fromSource($request->avatar)
                    ->useFileName('admin'.$admin->id)
                    ->toDirectory('avatars')
                    ->onDuplicateReplace()
                    ->upload();
    
                $admin->syncMedia($avatar, 'avatar');
            }
    
            return $admin;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteAdmin($id)
    {
        try {
            $admin = $this->findAdminById($id);
    
            if ($admin->hasMedia('avatar')) {
                $admin->firstMedia('avatar')->delete();
            }
    
            $admin->delete();
    
            return $admin;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }
}