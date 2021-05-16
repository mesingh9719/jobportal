<header class="header-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header-top">
                    <div class="logo-area">
                        <a href="/users/dashboard"><img src="{{ asset('user/images/logo-2.png') }}" alt=""></a>
                    </div>
                    <div class="header-top-toggler">
                        <div class="header-top-toggler-button"></div>
                    </div>
                    <div class="top-nav">
                        <div class="dropdown header-top-notification">
                            <a href="#" class="notification-button">Notification</a>
                            <div class="notification-card">
                                <div class="notification-head">
                                    <span>Notifications</span>
                                    <a href="#">Mark all as read</a>
                                </div>
                                <div class="notification-body">
                                    <a href="home-2.html" class="notification-list">
                                        <i class="fas fa-bolt"></i>
                                        <p>Your Resume Updated!</p>
                                        <span class="time">5 hours ago</span>
                                    </a>
                                    <a href="#" class="notification-list">
                                        <i class="fas fa-arrow-circle-down"></i>
                                        <p>Someone downloaded resume</p>
                                        <span class="time">11 hours ago</span>
                                    </a>
                                    <a href="#" class="notification-list">
                                        <i class="fas fa-check-square"></i>
                                        <p>You applied for Project Manager <span>@homeland</span></p>
                                        <span class="time">11 hours ago</span>
                                    </a>
                                    <a href="#" class="notification-list">
                                        <i class="fas fa-user"></i>
                                        <p>You changed password</p>
                                        <span class="time">5 hours ago</span>
                                    </a>
                                    <a href="#" class="notification-list">
                                        <i class="fas fa-arrow-circle-down"></i>
                                        <p>Someone downloaded resume</p>
                                        <span class="time">11 hours ago</span>
                                    </a>
                                </div>
                                <div class="notification-footer">
                                    <a href="#">See all notification</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown header-top-account">
                            <a href="#" class="account-button">My Account</a>
                            <div class="account-card">
                                <div class="header-top-account-info">
                                    <a href="#" class="account-thumb">
                                        <img src="{{ asset('user/images/account/thumb-1.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <div class="account-body">
                                        <h5><a href="#" class="text-capitalize">{{ Session::get('user')->name }}</a></h5>
                                        <span class="mail">{{ Session::get('user')->email }}</span>
                                    </div>
                                </div>
                                <ul class="account-item-list">
                                    <li><a href="#"><span class="ti-user"></span>Account</a></li>
                                    <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                                    <li><a href="/users/logout"><span class="ti-power-off"></span>Log Out</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <nav class="navbar navbar-expand-lg cp-nav-2">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="menu-item active"><a title="Home" href="/users/dashboard">Home</a></li>
                            <li class="menu-item dropdown">
                                <a href="/users/jobs">Jobs</a>
                            </li>
                            <li class="menu-item dropdown">
                                <a title="employers" href="users/candidates">Candidates</a>
                            </li>

                            <li class="menu-item"><a href="#">About Us</a></li>
                            <li class="menu-item"><a href="#">Contact Us</a></li>
                            <li class="menu-item post-job"><a href="/users/post-job"><i class="fas fa-plus"></i>Post Job</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumb-area">
                    <h1>Employer Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumb-form">
                    <form action="#">
                        <input type="text" placeholder="Enter Keywords">
                        <button><i data-feather="search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
