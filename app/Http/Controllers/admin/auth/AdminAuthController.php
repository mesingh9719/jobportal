<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    //
    public function login(){
        return view("admin/auth/login");
    }
    public function admin_loggedin(Request $request){
        $AdminData = Admin::where('username',$request->username)->first();
        if (!$AdminData || !Hash::check($request->password,$AdminData->password)){
            return 'wrong username or password!';
        }else{
            $request->session()->put('admin',$AdminData);
            return redirect('admin/dashboard');
        }
    }
}
