<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
     <!-- loading all links from header file -->
     <!-- loading all links from header file -->
    <?php $this->load->view('elements/header');?>
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
                <a class="navbar-brand" href="<?php echo site_url();?>"><!--<img src="<?php echo base_url();?>application/views/images/logo.png" alt="logo">-->
                    <h3>iTechRoute</h3>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadAboutus">About Us</a></li>
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadServices">Services</a></li>
<!--                    <li><a href="<?php echo site_url();?>/loadViewsController/loadPortfolio">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url();?>/loadViewsController/loadFAQ">FAQ</a></li>
                        </ul>
                    </li>-->
<!--                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?//php echo base_url();?>application/views/career.html">Career</a></li>
                            <li><a href="<?//php echo base_url();?>application/views/blog-item.html">Blog Single</a></li>
                            <li><a href="<?//php echo base_url();?>application/views/pricing.html">Pricing</a></li>
                            <li><a href="<?//php echo base_url();?>application/views/404.html">404</a></li>
                            <li><a href="<?//php echo base_url();?>application/views/registration.html">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="<?//php echo base_url();?>application/views/privacy.html">Privacy Policy</a></li>
                            <li><a href="<?//php echo base_url();?>application/views/terms.html">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url();?>loadViewsController/loadServices">Blog</a></li> -->
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadContactus">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel big-slider slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url();?>application/views/images/slider/background1_c.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">Software excellence at your service</h2><br>
<!--                                    <p class="boxed animation animated-item-2" >Websites that make your business reach digitally.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo base_url();?>application/views/images/slider/background2_c.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center top">
                                    <h2 class="boxed animation animated-item-1">Androiding our Way</h2>
                                    <!--<p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
                                    <br>
<!--                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo base_url();?>application/views/images/slider/background3_c.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Aligning your business with current technology.</h2>
<!--                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>-->
                                </div>
                            </div>
<!--                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-twitter icon-md"></i>
                        </div>
                        <div class="media-body">
                            <a href="https://twitter.com/itechroute" target="_blank"><h3 class="media-heading">Twitter</h3></a>
                            <p>Stay up to date on trends, and to drive awareness to IT and tech related tweets and content that keeps you engaging, do follow us on twitter.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-facebook icon-md"></i>
                        </div>
                        <div class="media-body">
                            <a href="https://www.facebook.com/iTechRoute" target="_blank"><h3 class="media-heading">Facebook</h3></a>
                            <p>Make yourself more knowledgeable by reading our posts and new updates on our Facebook page, and also get to know about great opportunities waiting for you @ iTechRoute.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-linkedin-sign icon-md"></i>
                        </div>
                        <div class="media-body">
                            <a href="https://www.linkedin.com/company/itechroute" target="_blank"><h3 class="media-heading">Linkedin</h3></a>
                            <p>Know more about us and our corporate environment by following us on LinkedIn</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Latest Project</h3>
                    <p>Snapshots that showcase some projects that have evolved from out technological environment.</p>
<!--                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>-->
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>application/views/images/portfolio/recent/Community_App.png" alt="">
                                                <h5>
                                                    Android Application - Community App
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Android Application - Community App" href="<?php echo base_url();?>application/views/images/portfolio/full/Community_App.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>application/views/images/portfolio/recent/Hospital_ERP.png" alt="">
                                                <h5>
                                                    ERP System for Hospital.
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="ERP System for Hospital." href="<?php echo base_url();?>application/views/images/portfolio/full/Hospital_ERP.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>application/views/images/portfolio/recent/Shopping_Cart.png" alt="">
                                                <h5>
                                                    Shopping Cart Project.
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Shopping Cart Project." href="<?php echo base_url();?>application/views/images/portfolio/full/Shopping_Cart.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
<!--                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>application/views/images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>application/views/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>application/views/images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>application/views/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>application/views/images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>application/views/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>What our clients say</h2>
                        <p>Feedback from our clients.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>Very good co-ordination by the guys who effectively took all our problems by providing their technological solutions.<br></p>
<!--                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
                            </blockquote>
                            <blockquote>
                                <p>Many thanks for all of your work by the I.T team. <br><br></p>
<!--                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>It was business critical that these guys finished and it was down to the commitment of these individuals to achieve this.</p>
<!--                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
                            </blockquote>
                            <blockquote>
                                <p>The guys are so helpful and willing and that makes things much easier for us in technological sense.</p>
<!--                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <?php $this->load->view('elements/bottomsection');?>
    <!--/#bottom-->
   
    <?php $this->load->view('elements/footer');?>
    <!--/#footer-->
<?php $this->load->view('elements/scripts'); ?>
   <!-- <script>
            $(document).ready(function() {
                $('.big-slider').carousel({
                    interval: 3000
                });
            });

        </script>-->
</body>
</html>