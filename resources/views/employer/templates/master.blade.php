<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>firstjob</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/themify-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/et-line.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap-select.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/plyr.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/flag.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery.nstSlider.min.css') }}"/>

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/dashboard/css/dashboard.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


<!--[if lt IE 9]>
    <script src="{{ asset('user/assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>

{{ View::make('employer/templates/navbar') }}

<div class="alice-bg section-padding-bottom">
    <div class="container no-gliters">
        <div class="row no-gliters">
            <div class="col">
                <div class="dashboard-container">
                    <div class="dashboard-content-wrapper">
                        @yield('main-content')
                    </div>
                    <div class="dashboard-sidebar">
                        <div class="user-info">
                            <div class="thumb">
                                <img src="{{ asset('user/dashboard/images/user-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="user-body">
                                <h5>
                                    {{ Session::get('user')->name }}
                                </h5>
                                <span>
                                    {{ Session::get('user')->email }}
                                </span>
                            </div>
                        </div>

                        <div class="dashboard-menu">
                            <ul>
                                <li class="active"><i class="fas fa-home"></i><a href="/users/dashboard">Dashboard</a>
                                </li>
                                <li><i class="fas fa-user"></i><a href="/users/edit-profile">Applications</a>
                                </li>
                                <li><i class="fas fa-user"></i><a href="/users/edit-profile">Edit Profile</a>
                                </li>
                                <li><i class="fas fa-file-alt"></i><a href="/users/jobs">Manage Jobs</a></li>
                                <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Manage Candidates</a></li>
                                </li>
                                <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                                </li>
                            </ul>
                            <ul class="delete">
                                <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
                                <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal"
                                                                       data-target="#modal-delete">Delete Profile</a>
                                </li>
                            </ul>
                            <!-- Modal -->
                            <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4><i data-feather="trash-2"></i>Delete Account</h4>
                                            <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                                            <form action="#">
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                           placeholder="Enter password">
                                                </div>
                                                <div class="buttons">
                                                    <button class="delete-button">Save Update</button>
                                                    <button class="">Cancel</button>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" checked="">
                                                    <label class="form-check-label">You accepts our <a href="#">Terms
                                                            and Conditions</a> and <a href="#">Privacy
                                                            Policy</a></label>
                                                </div>
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
    </div>
</div>

{{ View::make('employer/templates/footer') }}
</body>
</html>
