<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $totalUsers = User::count();
        $totalRoles = Role::count();

        return view('admin.dashboard', compact('totalUsers', 'totalRoles'));    
    }
}
