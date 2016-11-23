<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from jesus.gallery/everest/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:45:12 GMT -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Everest Admin Panel" />
        <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap" />
        <meta name="author" content="Bootstrap Gallery" />
        <link rel="shortcut icon" href="common/img/favicon.ico">
        <title>WE Admin Panel</title>

        <!-- Bootstrap CSS -->
        <link href="common/css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- Animate CSS -->
        <link href="common/css/animate.css" rel="stylesheet" media="screen">

        <!-- Alertify CSS -->
        <link href="common/css/alertify/alertify.core.css" rel="stylesheet">
        <link href="common/css/alertify/alertify.default.css" rel="stylesheet">

        <!-- Main CSS -->
        <link href="common/css/main.css" rel="stylesheet" media="screen">

        <!-- Font Awesome -->
        <link href="common/fonts/font-awesome.min.css" rel="stylesheet">

        <link href="common/css/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                                <script src="common/js/html5shiv.js"></script>
                                <script src="common/js/respond.min.js"></script>
                        <![endif]-->

    </head>

    <body>
        
        
        <!-- Header Start -->
        <header> 

            <!-- Logo starts -->
            <div class="logo"> <a href="#"> <img src="common/img/logo.png" alt="logo"> <span class="menu-toggle hidden-xs"> <i class="fa fa-bars"></i> </span> </a> </div>
            <!-- Logo ends --> 

            <!-- Custom Search Starts -->
            <div class="custom-search pull-left hidden-xs hidden-sm">
                <input type="text" class="search-query" placeholder="Search here">
                <i class="fa fa-search"></i> </div>
            <!-- Custom Search Ends --> 

            <!-- Mini right nav starts -->
<!--            <div class="pull-right">
                <ul id="mini-nav" class="clearfix">
                    <li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav"> <a href="#"> <i class="fa fa-reorder"></i> </a> </li>
                    <li class="list-box dropdown hidden-xs"> <a id="drop7" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-image"></i> </a> <span class="info-label info-bg animated rubberBand">7+</span>
                        <ul class="blog-gallery dropdown-menu fadeInDown animated clearfix recent-tweets">
                            <li> <img src="common/img/user1.jpg" alt="User"> </li>
                            <li> <img src="common/img/user2.jpg" alt="User"> </li>
                            <li> <img src="common/img/user3.jpg" alt="User"> </li>
                            <li> <img src="common/img/user4.jpg" alt="User"> </li>
                            <li> <img src="common/img/user5.jpg" alt="User"> </li>
                            <li> <img src="common/img/user6.jpg" alt="User"> </li>
                            <li> <img src="common/img/user7.jpg" alt="User"> </li>
                            <li> <img src="common/img/user8.jpg" alt="User"> </li>
                            <li> <img src="common/img/user9.jpg" alt="User"> </li>
                            <li> <img src="common/img/user3.jpg" alt="User"> </li>
                        </ul>
                    </li>
                    <li class="list-box dropdown hidden-xs"> <a id="drop5" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-th"></i> </a> <span class="info-label success-bg animated rubberBand">6</span>
                        <ul class="dropdown-menu fadeInDown animated quick-actions">
                            <li class="plain">Recently Viewed</li>
                            <li> <a href="profile.html"> <i class="fa fa-user text-info"></i>
                                    <p>Users</p>
                                </a> </li>
                            <li> <a href="login.html"> <i class="fa fa-tasks text-warning"></i>
                                    <p>Tasks</p>
                                </a> </li>
                            <li> <a href="typography.html"> <i class="fa fa-font text-danger"></i>
                                    <p>Fonts</p>
                                </a> </li>
                            <li> <a href="graphs.html"> <i class="fa fa-globe text-success"></i>
                                    <p>Graphs</p>
                                </a> </li>
                            <li> <a href="graphs.html"> <i class="fa fa-bank text-danger"></i>
                                    <p>Home</p>
                                </a> </li>
                            <li> <a href="invoice.html"> <i class="fa fa-file-text text-success"></i>
                                    <p>Invoice</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="list-box dropdown hidden-xs"> <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i> </a> <span class="info-label danger-bg animated rubberBand">4</span>
                        <ul class="dropdown-menu bounceIn animated messages">
                            <li class="plain"> Messages </li>
                            <li>
                                <div class="user-pic"> <img src="common/img/user4.jpg" alt="User"> </div>
                                <div class="details"> <strong class="text-danger">Wilson</strong> <span>Uploaded 28 new files yesterday.</span> </div>
                            </li>
                            <li>
                                <div class="user-pic"> <img src="common/img/user1.jpg" alt="User"> </div>
                                <div class="details"> <strong class="text-danger">Adams</strong> <span>Got 12 new messages.</span> </div>
                            </li>
                            <li>
                                <div class="user-pic"> <img src="common/img/user3.jpg" alt="User"> </div>
                                <div class="details"> <strong class="text-info">Sam</strong> <span>Uploaded new project files today.</span> </div>
                            </li>
                            <li>
                                <div class="user-pic"> <img src="common/img/user5.jpg" alt="User"> </div>
                                <div class="details"> <strong class="text-info">Jennifer</strong> <span>128 new purchases last 3 hours.</span> </div>
                            </li>
                        </ul>
                    </li>
                    <li class="list-box user-profile hidden-xs"> <a href="login.html" class="user-avtar animated rubberBand"> <img src="common/img/user4.jpg" alt="user avatar"> </a> </li>
                </ul>
            </div>-->
            <!-- Mini right nav ends --> 

        </header>
        <!-- Header ends --> 

        <!-- Left sidebar starts -->
        <aside id="sidebar"> 

            <!-- Current User Starts -->
            <div class="current-user">
                <div class="user-avatar animated rubberBand"> <img src="common/img/img_6396.jpg" style="width: 55px; height: 55px" alt="Current User"> <span class="busy"></span> </div>
                <div class="user-name"></div>
                <ul class="user-links">
<!--                    <li> <a href="profile.html"> <i class="fa fa-user text-success"></i> </a> </li>
                    <li> <a href="invoice.html"> <i class="fa fa-file-pdf-o text-warning"></i> </a> </li>
                    <li> <a href="components.html"> <i class="fa fa-sliders text-info"></i> </a> </li>-->
                    <li> <a href="login.html"> <i class="fa fa-sign-out text-danger"></i> </a> </li>
                </ul>
            </div>
            <!-- Current User Ends --> 

            <!-- main menu-->
            <?php include 'common/main_menu.php'; ?>


        </aside>
        <!-- Left sidebar ends --> 