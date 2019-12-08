<?php

namespace App\Http\Controllers\Admin;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Contracts\UserContract;
use App\Events\UserRegisteredEvent;
use App\Http\Controllers\BaseController;

class ApplicationController extends BaseController
{
    protected $userRepository;

    public function __construct(UserContract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() 
    {
        $applications = Application::where('status', 0)->get();
    
        $this->setPageTitle('Applications', 'List all applications');
        return view('admin.applications.index', compact('applications'));
    }

    public function dismiss($id)
    {
        $application = Application::find($id);
        $application->status = 2;
        $application->save();

        if (!$application) {
            return $this->responseRedirectBack('Error occoured while dimissing this Application', 'error', true, true);
        }
        return $this->responseRedirectBack('Application dismissed successfully.','success',false, false);
    }
    
    public function approve(Request $request)
    {
        $application = Application::find($request->id);
        $user = $this->userRepository->createUser($request);

        if (!$user) {           
            return $this->responseRedirectBack('Error occoured while approving this Application', 'error', true, true);
        } 

        $application->status = 1;
        $application->user_id = $user->id;
        $application->save();

        return $this->responseRedirectBack('Application approved and user account created successfully.','success',false, false);
    }
}
