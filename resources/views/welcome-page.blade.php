@extends('templates/master')
@section('main-content')

    @if (Session('fail'))
        <div>
            asdfas
        </div>
        <script type="text/javascript">
            swal('Wrong Credentials','Wrong Username or Password!','error');
        </script>
    @endif
    <!-- Banner -->


    <div class="banner banner-3 banner-3-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h1>58,246 Job Listed</h1>
                        <p>Create free account to find thousands Jobs, Employment & Career Opportunities around you!</p>
                        <a href="add-resume.html" class="button">Upload Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Search and Filter -->
    <div class="searchAndFilter-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="searchAndFilter-block-3">
                        <div class="searchAndFilter-3">
                            <form action="#" class="search-form">
                                <div class="keyword">
                                    <label>What?</label>
                                    <input type="text" placeholder="Enter Your Keywords">
                                </div>
                                <div class="location-input">
                                    <label>Where?</label>
                                    <select class="selectpicker" id="search-location">
                                        <option value="" selected>All Locations</option>
                                        <option value="california">California</option>
                                        <option value="las-vegas">Las Vegas</option>
                                        <option value="new-work">New Work</option>
                                        <option value="carolina">Carolina</option>
                                        <option value="chicago">Chicago</option>
                                        <option value="silicon-vally">Silicon Vally</option>
                                        <option value="washington">Washington DC</option>
                                        <option value="neveda">Neveda</option>
                                    </select>
                                </div>
                                <div class="category-input">
                                    <label>Category</label>
                                    <select class="selectpicker" id="search-category">
                                        <option value="" selected>All Categories</option>
                                        <option value="real-state">Real State</option>
                                        <option value="vehicales">Vehicales</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="beauty">Beauty</option>
                                        <option value="furnitures">Furnitures</option>
                                    </select>
                                </div>
                                <button class="button primary-bg"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="filter-categories">
                                <h4><i data-feather="align-left"></i>Job Category</h4>
                                <ul>
                                    <li><a href="job-listing.html">Accounting / Finance <span>(233)</span></a></li>
                                    <li><a href="job-listing.html">Education <span>(46)</span></a></li>
                                    <li><a href="job-listing.html">Design & Creative <span>(156)</span></a></li>
                                    <li><a href="job-listing.html">Health Care <span>(98)</span></a></li>
                                    <li><a href="job-listing.html">Engineer & Architects <span>(188)</span></a></li>
                                    <li><a href="job-listing.html">Marketing & Sales <span>(124)</span></a></li>
                                    <li><a href="job-listing.html">Garments / Textile <span>(584)</span></a></li>
                                    <li><a href="job-listing.html">Customer Support <span>(233)</span></a></li>
                                    <li><a href="job-listing.html">Digital Media <span>(15)</span></a></li>
                                    <li><a href="job-listing.html">Telecommunication <span>(03)</span></a></li>
                                </ul>
                            </div>
                            <div class="filter-location">
                                <h4><i data-feather="map-pin"></i>Location Filter</h4>
                                <ul>
                                    <li><a href="job-listing.html">New York City <span>(233)</span></a></li>
                                    <li><a href="job-listing.html">Washington, D.C <span>(46)</span></a></li>
                                    <li><a href="job-listing.html">Chicago <span>(156)</span></a></li>
                                    <li><a href="job-listing.html">San Francisco <span>(98)</span></a></li>
                                    <li><a href="job-listing.html">Los Angeles <span>(188)</span></a></li>
                                    <li><a href="job-listing.html">Boston <span>(124)</span></a></li>
                                    <li><a href="job-listing.html">Seattle <span>(584)</span></a></li>
                                    <li><a href="job-listing.html">New Orleans <span>(233)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search and Filter End -->

    <!-- Jobs -->
    <div class="section-padding-bottom alice-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header section-header-2 section-header-with-right-content">
                        <h2>Recent Jobs</h2>
                        <a href="job-listing.html" class="header-right">+ Browse All Jobs</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Designer Required</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Project Manager</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                                    <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                                    <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">UI Designer</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                                    <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Land Development Marketer</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                                    <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="apply-popup">
                        <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i data-feather="edit"></i>APPLY FOR THIS JOB</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" placeholder="Full Name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Email Address" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group file-input-wrap">
                                                <label for="up-cv">
                                                    <input id="up-cv" type="file">
                                                    <i data-feather="upload-cloud"></i>
                                                    <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
                                                </label>
                                            </div>
                                            <div class="more-option">
                                                <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                                                <label for="radio-4">
                                                    <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                                                </label>
                                            </div>
                                            <button class="button primary-bg btn-block">Apply Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs End -->

    <!-- Top Companies -->
    <div class="section-padding-top padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header">
                        <h2>Top Companies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="company-carousel owl-carousel">
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('user/images/company/company-logo-1.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Digoin</a></h4>
                                <span>Kansas City, Missouri</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Orion Ltd.</a></h4>
                                <span>Sacramento, California</span>
                                <a href="job-listing.html" class="button">2 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Realhouse</a></h4>
                                <span>London, United Kingdom</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-4.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">BioPro</a></h4>
                                <span>Ajax, Ontarioland</span>
                                <a href="job-listing.html" class="button">1 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-1.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Digoin</a></h4>
                                <span>Kansas City, Missouri</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Orion Ltd.</a></h4>
                                <span>Sacramento, California</span>
                                <a href="job-listing.html" class="button">2 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">Realhouse</a></h4>
                                <span>London, United Kingdom</span>
                                <a href="job-listing.html" class="button">4 Open Positions</a>
                            </div>
                        </div>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="#">
                                    <img src="images/company/company-logo-4.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h4><a href="employer-details.html">BioPro</a></h4>
                                <span>Ajax, Ontarioland</span>
                                <a href="job-listing.html" class="button">1 Open Positions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Companies End -->



    <!-- NewsLetter -->
    <div class="newsletter-bg padding-top-90 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="newsletter-wrap">
                        <h3>Newsletter</h3>
                        <p>Get e-mail updates about our latest news and Special offers. We don’t send spam so don’t worry.</p>
                        <form action="#" class="newsletter-form form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email address...">
                            </div>
                            <button class="btn button">Submit<i class="fas fa-caret-right"></i></button>
                            <p class="newsletter-error">0 - Please enter a value</p>
                            <p class="newsletter-success">Thank you for subscribing!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NewsLetter End -->
@endsection
