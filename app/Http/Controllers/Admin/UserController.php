<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Contracts\UserContract;
use Illuminate\Validation\Rule;
use App\Events\UserPasswordResetEvent;
use App\Events\ResendLoginDetailsEvent;
use App\Http\Controllers\BaseController;

class UserController extends BaseController
{
    /**
     * @var UserContract
     */
    protected $userRepository;

    /**
     * CategoryController constructor.
     * @param UserContract $userRepository
     */
    public function __construct(UserContract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->listUsers();

        $this->setPageTitle('Users', 'List of all users');
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $application = new Application();
        $this->setPageTitle('Users', 'Create User');
        
        return view('admin.users.create', compact('user', 'application'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required',
            'mobile' => 'required|string|min:11|max:11',
            'email' => 'nullable|email|unique:users',
            'credit_limit' => 'required',
        ]);
    
        $user = $this->userRepository->createUser($request);
    
        if (!$user) {
            return $this->responseRedirectBack('Error occurred while creating user.', 'error', true, true);
        }
        return $this->responseRedirect('admin.users.index', 'User added successfully' ,'success',false, false);
    }
    
    public function resend()
    {
        $users = User::where('username', null)->get();
        if ( count( $users ) > 0 ) {
            // notify user via sms, email
            $data = [
                'recipients' => $users,
                'sms' => trans('notify.sms_login', [
                            'domain' => config('settings.domain_name'),
                            ]),
                'subject' => 'Application Approved',
                'email' => trans('notify.email_login', [
                            'app' => config('settings.site_title'),
                            ]),
            ];
            event( new ResendLoginDetailsEvent($data) );
            return $this->responseRedirectBack('Login details resent successfully' ,'success',false, false);
        }
        return $this->responseRedirectBack('Error occurred while resending login details.', 'error', true, true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findUserById($id);

        $this->setPageTitle('Users', 'Edit User : '.$user->name);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $user = $this->userRepository->findUserById($request->id);
        
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required',
            'mobile' => 'required|string|min:11|max:11',
            'email'     =>  ['nullable','email', Rule::unique('users')->ignore($user->id)],
            'credit_limit' => 'required',
        ]);

        $user = $this->userRepository->updateUser($request);
    
    
        if (!$user) {
            return $this->responseRedirectBack('Error occurred while updating user.', 'error', true, true);
        }
        return $this->responseRedirectBack('User updated successfully' ,'success',false, false);
    }

    public function reset($id)
    {
        $user = $this->userRepository->findUserById($id);
        $user->password = bcrypt('12345678');
        $user->save();

        if ( $user->save() ) {
            // notify user via sms, email and timeline
            $data = [
                'recipients' => array($user),
                'sms' => trans('notify.sms_reset'),
                'subject' => 'Password Reset Successful',
                'email' => trans('notify.email_reset', [
                            'app' => config('settings.site_title'),
                            ])
            ];
            event( new UserPasswordResetEvent($data) );
            return $this->responseRedirectBack('User password reset was successful' ,'success',false, false);
        }
        return $this->responseRedirectBack('Error occurred while resetting user password.', 'error', true, true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = $this->userRepository->deleteUser($id);

        if (!$user) {
            return $this->responseRedirectBack('Error occurred while deleting user.', 'error', true, true);
        }
        return $this->responseRedirect('admin.users.index', 'User deleted successfully' ,'success',false, false);
    }
}
