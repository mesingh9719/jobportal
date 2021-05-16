@extends("seeker/templates/master")
@section('main-content')
    <section class="experience-details">
        <div class="d-flex justify-content-between">
            <div>
                <h5>
                    Experience
                </h5>
            </div>
            <div>
                <button data-target="#experienceModal" data-toggle="modal" class="btn btn-primary p-3"
                        style="font-size: 12px;">Add Experience
                </button>
            </div>
        </div>
        <div>
            @foreach($MyExp as $myExperience)
                <div class="d-flex shadow-sm justify-content-between" style="border: 1px solid #ddd; padding: 10px; border-radius: 10px; margin-top: 10px; margin-bottom: 5px;">
                    <div class="text-capitalize">
                        <table>
                            <tr>
                                <th>Company &nbsp;</th>
                                <td>
                                    {{ $myExperience->company }}
                                </td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>{{ $myExperience->exp_role }}</td>
                            </tr>
                            <tr>
                                <th>From</th>
                                <td>
                                    {{ $myExperience->exp_from }}
                                </td>
                            </tr>
                            <tr>
                                <th>To</th>
                                <td>
                                    {{ $myExperience->exp_to }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div>

                        <div class="text-right">
                            <a href="#" data-toggle="modal" data-target="#editExpModal{{ $myExperience->id }}" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </div>
                        <div class="modal" id="editExpModal{{ $myExperience->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <b>
                                            Edit Experience
                                        </b>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">
                                                <b>Company</b>
                                            </label>
                                            <input type="text" name="exp_company" class="custom-form-control" value="{{ $myExperience->company }}">
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <div class="form-group">
                                                <label for="">
                                                    <b>From</b>
                                                </label>
                                                <input type="date" name="exp_from" class="custom-form-control" value="{{ $myExperience->exp_from }}">
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="">
                                                    <b>To</b>
                                                </label>
                                                <input type="date" name="exp_to" class="custom-form-control" value="{{ $myExperience->exp_to }}">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div>

                                                <b>I currently work here</b> <input type="radio" name="presnt_wrking"
                                                                                    @if($myExperience->exp_to)
                                                                                        checked
                                                                                    @endif
                                                                                    value="present">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <b>Designation</b><small>(optional)</small>
                                            </label>
                                            <input type="text" name="exp_designation" class="custom-form-control" value="{{ $myExperience->exp_d_or_p }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <b>Role</b><small>(optional)</small>
                                            </label>
                                            <input type="text" name="exp_role" class="custom-form-control" value="{{ $myExperience->exp_role }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="d-flex justify-content-end">
                                            <button style="padding:5px 10px; font-size: 14px; border-radius: 4px; border: none;"
                                                    class="bg-primary text-white">Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        <div class="d-flex justify-content-between mt-5">
            <div>
                <h5>
                    Qualification
                </h5>
            </div>
            <div>
                <button data-target="#qualificationModal" data-toggle="modal" class="btn btn-warning p-3"
                        style="font-size: 12px;">Add Qualification
                </button>
            </div>
        </div>
        <div>
            @foreach($MyEdu as $myQualification)
                <div class="d-flex shadow-sm justify-content-between" style="border: 1px solid #ddd; padding: 10px; border-radius: 10px; margin-top: 10px; margin-bottom: 5px;">
                    <div class="text-capitalize">
                        <table>
                            <tr>
                                <th>College or University&nbsp;&nbsp;</th>
                                <td>
                                    {{ $myQualification->edu_college_uni }}
                                </td>

                            </tr>
                            <tr>
                                <th>
                                    Level of Education
                                </th>
                                <td>
                                    {{ $myQualification->edu_level }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    From
                                </th>
                                <td>
                                    {{ $myQualification->edu_from }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    To
                                </th>
                                <td>
                                    {{ $myQualification->edu_to }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <form action="/users/resume/add-experience" method="post">
        @csrf
        <div class="modal fade" id="experienceModal">
            <div class="modal-dialog">
                <div class="modal-content border-0">
                    <div class="modal-header">
                        <strong>
                            Add Experience
                        </strong>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">
                                <b>Company</b>
                            </label>
                            <input type="text" name="exp_company" class="custom-form-control">
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="form-group">
                                <label for="">
                                    <b>From</b>
                                </label>
                                <input type="date" name="exp_from" class="custom-form-control">
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-group">
                                <label for="">
                                    <b>To</b>
                                </label>
                                <input type="date" name="exp_to" class="custom-form-control">
                            </div>

                        </div>
                        <div class="form-group">
                            <div>

                                <b>I currently work here</b> <input type="radio" name="presnt_wrking" value="present">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <b>Designation</b><small>(optional)</small>
                            </label>
                            <input type="text" name="exp_designation" class="custom-form-control">
                        </div>
                        <div class="form-group">
                            <label for="">
                                <b>Role</b><small>(optional)</small>
                            </label>
                            <input type="text" name="exp_role" class="custom-form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button style="padding:5px 10px; font-size: 14px; border-radius: 4px; border: none;"
                                    class="bg-primary text-white">Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="/users/resume/add-education" method="post">
        @csrf
        <div class="modal fade" id="qualificationModal">
            <div class="modal-dialog">
                <div class="modal-content border-0">
                    <div class="modal-header">
                        <b>Add Qualification</b>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">
                                <b>
                                    College or University
                                </b>
                            </label>
                            <input type="text" class="custom-form-control" name="edu_college">
                        </div>
                        <div class="form-group">
                            <label for="">
                                <b>Time period</b>
                            </label>
                            <div>
                                <input type="checkbox" name="current_enrolled" value="Currently enrolled"> Currently enrolled
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="form-group">
                                <label for="">
                                    <b>From</b>
                                </label>
                                <input type="date" name="edu_from" class="custom-form-control">
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-group">
                                <label for="">
                                    <b>To</b>
                                </label>
                                <input type="date" name="edu_to" class="custom-form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <b>Level of Education</b>
                            </label>
                            <select name="edu_level" class="custom-form-control">
                                <option value="">Select an option</option>
                                @foreach($LevelOfEducation as $eduLevel)
                                    <option value="{{ $eduLevel->education_level }}">{{ $eduLevel->education_level }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <b>
                                    Field of study
                                </b>
                            </label>
                            <select name="edu_fields" class="custom-form-control" id="">
                                <option value="">Select Stream</option>
                                @foreach($EducationaStreams as $edufields)
                                    <option value="{{ $edufields->streams_name }}">{{ $edufields->streams_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="padding:5px 10px; font-size: 14px; border-radius: 4px; border: none;"
                                class="bg-primary text-white">Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
