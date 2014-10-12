<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Services | Flat Theme</title>
    <link href="<?php echo base_url();?>application/views/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application/views/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application/views/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application/views/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application/views/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>application/views/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>application/views/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>application/views/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>application/views/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo base_url();?>application/views/images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadAboutus">About Us</a></li>
                    <li class="active"><a href="<?php echo site_url();?>/loadViewsController/loadServices">Services</a></li>
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadPortfolio">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url();?>/loadViewsController/loadFAQ">FAQ</a></li>
                        </ul>
                    </li>
<!--                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="career.html">Career</a></li>
                            <li><a href="blog-item.html">Blog Single</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="registration.html">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li> -->
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadContactus">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Services</h1>
                    <p></p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap">
                        <h2>What we do</h2>
                        <p>We Develop, Consult, Train and Research.</p>
                    </div>                
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-windows icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web-Application Development</h3>
                            <p>We provide corporate solutions related to their online needs by developing responsive websites or web-application on your dream portal. </p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-android icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Android App Development</h3>
                            <p>Our Enterprise Android App Development Team makes your mobile solution affordable.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
              </div><!--/.row-->
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-group icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Training</h3>
                            <p>Corporate IT skills training with certification , making you ready for the future IT Tech World.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-linux icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Academic Year Projects</h3>
                            <p>Projects that make you stand out of College crowd with all the learning.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
<!--                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-dribbble icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Graphic Design</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div>/.col-md-4
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-google-plus icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Services</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div>/.col-md-4-->
            </div><!--row-->
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>What our clients say</h2>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#services-->

    <?php $this->load->view('elements/bottomsection');?>
    <!--/#bottom-->
   
    <?php $this->load->view('elements/footer');?>
    <!--/#footer-->

    <script src="<?php echo base_url();?>application/views/js/jquery.js"></script>
    <script src="<?php echo base_url();?>application/views/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>application/views/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>application/views/js/main.js"></script>
</body>
</html>