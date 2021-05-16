
<header class="header-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-top">
                    <div class="logo-area">
                        <a href="/"><img src="{{ asset('user/images/logo-2.png') }}" alt=""></a>
                    </div>
                    <div class="header-top-toggler">
                        <div class="header-top-toggler-button"></div>
                    </div>
                    <div class="top-nav">

                        <div class="dropdown header-top-account login-modals">
                            <button title="Title" type="button" data-toggle="modal" data-target="#exampleModalLong">Login</button>
                            <button title="Title" type="button" data-toggle="modal" data-target="#exampleModalLong2">Registration</button>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg cp-nav-2">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="menu-item active"><a title="Home" href="/">Home</a></li>
                            <li class="menu-item dropdown">
                                <a href="/jobs">Jobs</a>

                            </li>
                            <li class="menu-item dropdown">
                                <a href="/candidates">Candidates</a>

                            </li>
                            <li class="menu-item dropdown">
                                <a title="" href="/employers">Employers</a>
{{--                                <ul  class="dropdown-menu">--}}
{{--                                    <li class="menu-item"><a  href="employer-listing.html">Employer Listing</a></li>--}}
{{--                                    <li class="menu-item"><a  href="employer-details.html">Employer Details</a></li>--}}
{{--                                    <li class="menu-item"><a  href="employer-dashboard-post-job.html">Post a Job</a></li>--}}
{{--                                </ul>--}}
                            </li>


                            <li class="menu-item"><a href="/about-us">About Us</a></li>
                            <li class="menu-item"><a href="/contact-us">Contact Us</a></li>
                            <li class="menu-item post-job"><a href="/post-job"><i class="fas fa-plus"></i>Post a Job</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<div class="account-entry">
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i data-feather="user"></i>Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="more-option">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember Me
                                </label>
                            </div>
                            <a href="#">Forget Password?</a>
                        </div>
                        <button class="button primary-bg btn-block">Login</button>
                    </form>
                    <div class="shortcut-login">
                        <span>Or connect with</span>
                        <div class="buttons">
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                            <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                        </div>
                        <p>Don't have an account? <a href="#">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/signup" method="post">
                        @csrf
                        <div class="account-type">
                            <label for="idRegisterCan">
                                <input id="idRegisterCan" type="radio" name="user_type" value="1">
                                <span>Candidate</span>
                            </label>
                            <label for="idRegisterEmp">
                                <input id="idRegisterEmp" type="radio" name="user_type" value="2">
                                <span>Employer</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="more-option terms">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    I accept the <a href="#">terms & conditions</a>
                                </label>
                            </div>
                        </div>
                        <button class="button primary-bg btn-block">Register</button>
                    </form>
                    <div class="shortcut-login">
                        <span>Or connect with</span>
                        <div class="buttons">
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                            <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                        </div>
                        <p>Already have an account? <a href="#">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
