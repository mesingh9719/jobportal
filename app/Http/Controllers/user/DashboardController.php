<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    //
    public function index(){
        $UserID = Session::get('user')->id;
        $userType = Session::get('user')->user_type_id;
        if ($userType == 1){
            return view("seeker/home");
        }elseif ($userType == 2){
            return view("employer/home");
        }
    }
    public function logout(){

    }
}
