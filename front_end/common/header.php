
<html lang="en"> 
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | WE-Shop</title>
        <link href="common/css/bootstrap.min.css" rel="stylesheet">
        <link href="common/css/font-awesome.min.css" rel="stylesheet">
        <link href="common/css/prettyPhoto.css" rel="stylesheet">
        <link href="common/css/price-range.css" rel="stylesheet">
        <link href="common/css/animate.css" rel="stylesheet">
        <link href="common/css/main.css" rel="stylesheet">
        <link href="common/css/responsive.css" rel="stylesheet">
        <link href="common/css/style.css" rel="stylesheet">
        <script src="common/jquery.js" type="text/javascript"></script>
        <script src="common/slideshow.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
        <script src="common/js/html5shiv.js"></script>
        <script src="common/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="common/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="common/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="common/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="common/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="common/images/ico/apple-touch-icon-57-precomposed.png">
        
    </head>
    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row" >
                        <div class="col-sm-8">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> 01668115501 </a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> nlbloc94@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Tài Khoản</a></li>
                           
                                <li><a href="index.php?action=giohang"><i class="fa fa-shopping-cart"></i> Giỏ Hàng </a></li>
                                <li><a href="index.php?action=login"><i class="fa fa-lock"></i> Đăng Nhập </a></li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row" style=" height: 20px; padding-top: 0px">
                        <div class="col-sm-10">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="common/images/home/logowe.png" alt="" /></a>
                            </div>
                           
                        </div>
                        <div class="col-sm-2">
                            <div class="col-sm-3">
                                <div class="search_box pull-right" style="">
                                  
                                    <label>
                                        <?php
//                                        session_start();
                                        if(isset($_SESSION['username'])){
                                            echo 'Xin Chao '.$_SESSION['username'];
                                        }
 else {
                                            
 }
                                        ?>

                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom" style="margin-top: 0px; padding-top: 0px; padding-bottom: 0px"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->

        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                          
                            <div class="slideshow">
                                <div><img src="common/images/home/hinh2.jpg"></div>
                                <div><img src="common/images/home/hinh1_1.jpg"></div>
                                <div><img src="common/images/home/hinh3.jpg"></div>
                            </div>

                         
                        </div>

                    </div>
                </div>
            </div>
        </section><!--/slider-->
       