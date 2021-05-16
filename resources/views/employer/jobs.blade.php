@extends('employer/templates/master')
@section('main-content')
    <div class="post-content-wrapper">
        <div class="manage-job-container">
            <table class="table">
                <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Applications</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th class="action">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr class="job-items">
                        <td class="title">
                            <h5><a href="#">{{ $job->job_title }}</a></h5>
                            <div class="info">
                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>
                                    {{ $job->city_name }}</a></span>
                                <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>
                                    {{ $job->job_type }}</a></span>
                            </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status active">Active</td>
                        <td class="action">
                            <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                            <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                            <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
