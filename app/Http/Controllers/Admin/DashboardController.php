<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Payout;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct(){
        $this->middleware('auth:admin')->except('index');
    }

    public function index()
    {
        if (!Auth::guard('admin')->check()) {
            return view('admin.auth.login');
        }

        $totalAdmins = Admin::all()->count();
        $totalApplications = Application::where('status', 0)->get()->count();
        $totalUsers = User::all()->count();
        $totalProducts = Product::all()->count();
        $totalPackages = Package::all();
        $activePackages = $totalPackages->where('status', 1)->count();
        $pendingPayments = Payment::where('status', 0)->get();
        $pendingPayouts = Payout::where('status', 0)->get();
        
        $this->setPageTitle('Dashboard', 'Welcome '.Auth::guard('admin')->user()->name .'!');
        return view('admin.dashboard.index', compact(
            'totalAdmins',
            'totalApplications',
            'totalUsers',
            'totalProducts',
            'totalPackages',
            'activePackages',
            'pendingPayments',
            'pendingPayouts'
        ));
    }
}
