<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request; 
use Illuminate\Validation\Rule;
use App\Contracts\AdminContract;
use App\Events\AdminHasBeenAddedEvent;
use App\Http\Controllers\BaseController;
use Auth;

class AdminController extends BaseController
{
    protected $adminRepository;

    public function __construct(AdminContract $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->adminRepository->listAdmins();
        $this->setPageTitle('Admin', 'List of All Admins');
        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $admin = new Admin();
        $this->setPageTitle('Admin', 'Add New Addmin');
        return view('admin.admins.create', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'access' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|string|min:8',
            'image'     =>  'sometimes|mimes:jpg,jpeg,png|max:1000',
        ]);
    
        $admin = $this->adminRepository->createAdmin($request); 
    
        if (!$admin) {
            return $this->responseRedirectBack('Error occurred while creating admin.', 'error', true, true);
        }

        return $this->responseRedirect('admin.admins.index', 'Admin added successfully' ,'success',false, false);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        $admin = Auth::guard('admin')->user();
        $this->setPageTitle($admin->name, 'Your Administrative Profile');
        return view('admin.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = $this->adminRepository->findAdminById($id);

        $this->setPageTitle('Admin', 'Edit Admin: '.$admin->name);
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'access' => 'required',
            'email' => ['required', 'email', Rule::unique('admins')->ignore($request->id)],
            'password' => 'nullable|string|min:8',
            'image'     =>  'sometimes|mimes:jpg,jpeg,png|max:1000',
        ]);
    
        $admin = $this->adminRepository->updateAdmin($request);
    
        if (!$admin) {
            return $this->responseRedirectBack('Error occurred while updating Admin.', 'error', true, true);
        }
        
        if ( $admin->id === Auth::guard('admin')->user()->id ) {            
            return $this->responseRedirectBack('Profile updated successfully' ,'success',false, false);
        }

        return $this->responseRedirectBack('Admin updated successfully' ,'success',false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        $admin = $this->adminRepository->deleteAdmin($id);

        if (!$admin) {
            return $this->responseRedirectBack('Error occurred while deleting Admin.', 'error', true, true);
        }
        return $this->responseRedirect('admin.admins.index', 'Admin deleted successfully' ,'success',false, false);
    }
}
