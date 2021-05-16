<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\EducationalStream;
use App\Models\UserExperience;
use App\Models\UserQualification;
use Illuminate\Http\Request;
use Session;

class ResumeController extends Controller
{

    //
    public function index(){
        $UserID = Session::get('user')->id;
        $userType = Session::get('user')->user_type_id;
        if ($userType == 1){
            $MyExp = UserExperience::where('user_id',$UserID)->get();
            $MyEdu = UserQualification::where('user_id',$UserID)->get();
            $EducationaStreams =  EducationalStream::all();
            $LevelOfEducation = Education::all();
            return view("seeker/resume-view",compact('EducationaStreams','LevelOfEducation','MyExp','MyEdu'));
        }elseif ($userType == 2){
//            return view("employer/home");
        }
    }
    public function add_exp(Request $request){
        $addExp = new UserExperience;
        $addExp->user_id = $UserID = Session::get('user')->id;
        $addExp->company = $request->exp_company;
        $addExp->exp_from = $request->exp_from;
        if ($request->presnt_wrking){
            $addExp->exp_to = $request->presnt_wrking;
        }else{
            $addExp->exp_to = $request->exp_to;
        }
        $addExp->exp_d_or_p = $request->exp_designation;
        $addExp->exp_role = $request->exp_role;
        $addExp->save();
        return redirect('/users/resume');
    }
    public function add_edu(Request $request){
        $addEdu = new UserQualification;
        $addEdu->user_id = $UserID = Session::get('user')->id;
        $addEdu->edu_college_uni = $request->edu_college;
        $addEdu->edu_from = $request->edu_from;
        if ($request->current_enrolled){
            $addEdu->edu_to = $request->current_enrolled;
        }else{
            $addEdu->edu_to = $request->edu_to;
        }
        $addEdu->edu_level = $request->edu_level;
        $addEdu->edu_stream =  $request->edu_fields;
        $addEdu->save();
        return redirect('/users/resume');
    }
}
