<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use Illuminate\Http\Request;
use Session;

class JobController extends Controller
{

    //
    public function index()
    {
        $UserID = Session::get('user')->id;
        $userType = Session::get('user')->user_type_id;
        if ($userType == 1) {

        } elseif ($userType == 2) {
            return view("employer/jobs-list");
        }
    }

    public function post_job()
    {
        $UserID = Session::get('user')->id;
        $userType = Session::get('user')->user_type_id;
        if ($userType == 1) {

        } elseif ($userType == 2) {
            $jobCategories = JobCategory::all();
            $jobLocations = JobLocation::all();
            $jobType = JobType::all();
            return view("employer/post-job-form",compact('jobCategories','jobLocations','jobType'));
        }
    }

    public function post_job_insert(Request $request)
    {

        $UserID = Session::get('user')->id;
        $newJob = new Job;
        $newJob->employer_id = $UserID;
        $newJob->job_title = $request->job_title;
        $newJob->job_category = $request->job_category;
        $newJob->job_location = $request->job_city;
        $newJob->job_type = $request->job_type;
        $newJob->job_experience = $request->required_exp;
        $newJob->job_salary = $request->salary_range;
        $newJob->job_qualification = $request->required_qualification;
        $newJob->job_gender = $request->gender;
        $newJob->job_vacancy = $request->vacancy;
        $newJob->job_description = $request->description;
        $newJob->job_responsibilities = $request->responsiblities;
        $newJob->job_education = $request->educations;
        $newJob->job_benifits = $request->other_benefits;
        $newJob->job_company_name = $request->company_name;
        $newJob->job_company_website = $request->web_address;
        $newJob->job_about_company = $request->about_company;
        $newJob->status = 1;
        $newJob->save();
        $request->session()->flash('job_inserted','Job Post Successfully.');
        return redirect('/users/jobs');

    }
    public function myjobs_list(){
        $UserID = Session::get('user')->id;
        $jobs = Job::where('employer_id',$UserID)
            ->join('job_categories','jobs.job_category','=','job_categories.id')
            ->join('job_locations','jobs.job_location','=','job_locations.id')->get();
        return view("employer/jobs",compact('jobs'));
    }
}
