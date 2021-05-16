<?php

namespace App\Http\Controllers\user\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signup(Request $request){
        $CheckUser = User::where('email',$request->email)->first();
        if ($CheckUser){
            return 'email already exists!';
        }else{
            $NewUser = new User;
            $NewUser->name = $request->name;
            $NewUser->email = $request->email;
            $NewUser->password = Hash::make($request->password);
            $NewUser->user_type_id = $request->user_type;
           $inserted =  $NewUser->save();
           if ($inserted){
               $UserData = User::where('email',$request->email)->first();
               if (!$UserData || !Hash::check($request->password,$UserData->password)){
                   return 'wrong username or password';
               }else{
                   $request->session()->put('user',$UserData);
                   return redirect("/users/dashboard");
               }
           }

        }
    }
    public function login(Request $request){
        $UserData = User::where('email',$request->email)->first();
        if (!$UserData || !Hash::check($request->password,$UserData->password)){
            $request->session()->flash('fail','done');
            return redirect('/');
        }else{
            $request->session()->put('user',$UserData);
            return redirect("/users/dashboard");
        }
    }
}
