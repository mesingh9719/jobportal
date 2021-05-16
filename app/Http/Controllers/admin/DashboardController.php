<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    //
    public function index(){
        return view("admin/home");
    }
    public function logout(){
        Session::forget('admin');
        return redirect('admin/login');
    }
}
