@extends('employer/templates/master')
@section('main-content')
    <div class="post-content-wrapper">
        <form action="/users/job-post" class="job-post-form" method="post">
            @csrf
            <div class="basic-info-input">
                <h4><i data-feather="plus-circle"></i>Post A Job</h4>
                <div id="job-title" class="form-group row">
                    <label class="col-md-3 col-form-label">Job Title</label>
                    <div class="col-md-9">
                        <input name="job_title" type="text" class="form-control" placeholder="Your job title here">
                        @error('job_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div id="job-summery" class="row">
                    <label class="col-md-3 col-form-label">Job Summery</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="job_category" class="form-control">
                                        <option>Select Category</option>
                                        @foreach($jobCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="job_city" class="form-control">
                                        <option>Select City</option>
                                        @foreach($jobLocations as $location)
                                            <option value="{{ $location->id }}">{{ $location->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="job_type" class="form-control">
                                        <option>Job Type</option>
                                        @foreach($jobType as $jType)
                                            <option value="{{ $jType->job_type }}">{{ $jType->job_type }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="required_exp" class="form-control">
                                        <option>Experience (Optional)</option>
                                        <option value="Less than 1 Year">Less than 1 Year</option>
                                        <option value="2 Year">2 Year</option>
                                        <option value="3 Year">3 Year</option>
                                        <option value="4 Year">4 Year</option>
                                        <option value="Over 5 Year">Over 5 Year</option>
                                    </select>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="salary_range" type="text" class="form-control" placeholder="Salary Range">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="required_qualification" class="form-control">
                                        <option value="Qualification">Qualification</option>
                                        <option value="Matriculation">Matriculation</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Gradute">Gradute</option>
                                    </select>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option>Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="vacancy" type="text" class="form-control" placeholder="Vacancy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="job-description" class="row">
                    <label class="col-md-3 col-form-label">Job Description</label>
                    <div class="col-md-9">
                        <textarea name="description" id="mytextarea" class="tinymce-editor tinymce-editor-1" placeholder="Description text here"></textarea>
                    </div>
                </div>
                <div id="response" class="row">
                    <label class="col-md-3 col-form-label">Responsibilities</label>
                    <div class="col-md-9">
                        <textarea name="responsiblities" id="mytextarea2" class="tinymce-editor tinymce-editor-2" placeholder="Responsibilities (Optional)"></textarea>
                    </div>
                </div>
                <div id="education" class="row">
                    <label class="col-md-3 col-form-label">Education</label>
                    <div class="col-md-9">
                        <textarea name="educations" id="mytextarea3" class="tinymce-editor tinymce-editor-2" placeholder="Education (Optional)"></textarea>
                    </div>
                </div>
                <div id="others" class="row">
                    <label class="col-md-3 col-form-label">Other Benefits</label>
                    <div class="col-md-9">
                        <textarea name="other_benefits" id="mytextarea4" class="tinymce-editor tinymce-editor-2" placeholder="Description text here"></textarea>
                    </div>
                </div>

                <div id="about-company" class="row">
                    <label class="col-md-3 col-form-label">About Company</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="company_name" type="text" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="web_address" type="text" class="form-control" placeholder="Web Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="about_company" class="form-control" placeholder="Company Profile"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 col-form-label"></label>
                    <div class="col-md-9">
                        <button class="button">Post Your Job</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
