<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\user\auth\UserAuthController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\JobController;
use App\Http\Controllers\user\ResumeController;
use App\Http\Controllers\admin\auth\AdminAuthController;
use App\Http\Controllers\admin\DashboardController as adminDashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/jobs', [WelcomeController::class, 'jobs']);

Route::post('/login', [UserAuthController::class, "login"]);
Route::post('/signup', [UserAuthController::class, "signup"]);

Route::get('/admin/login',[AdminAuthController::class,"login"])->middleware('checkAdminAuth');
Route::post('/admin/login',[AdminAuthController::class,"admin_loggedin"]);
Route::get('admin/logout',[adminDashboard::class,"logout"]);


Route::group(['middleware'=>['checkUserLogged']],function (){
    Route::get('/users/dashboard', [DashboardController::class, "index"]);
    Route::get('/users/logout', function () {
        Session::forget('user');
        return redirect('/');
    });
    Route::get('/users/jobs', [JobController::class, "myjobs_list"]);
    Route::get('/users/post-job', [JobController::class, "post_job"]);
    Route::post('/users/job-post', [JobController::class, "post_job_insert"]);
    Route::get('/users/resume', [ResumeController::class, "index"]);
    Route::post('/users/resume/add-experience', [ResumeController::class, "add_exp"]);
    Route::post('/users/resume/add-education', [ResumeController::class, "add_edu"]);
});


Route::group(['middleware' => ['checkAdminLogged']],function(){
    Route::get('admin',[adminDashboard::class,"index"]);
    Route::get('admin/dashboard',[adminDashboard::class,"index"]);
});
