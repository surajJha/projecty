<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
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
                    <h2 class="animation animated-item-1">iTechRoute</h2>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadAboutus">About Us</a></li>
                    <li><a href="<?php echo site_url();?>/loadViewsController/loadServices">Services</a></li>
                    <li class="active"><a href="<?php echo site_url();?>/loadViewsController/loadPortfolio">Portfolio</a></li>
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
                    <h1>Portfolio</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Bootstrap</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">HTML</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-3">
            <li class="portfolio-item apps">
                <div class="item-inner">
                    <img src="<?php echo base_url();?>application/views/images/portfolio/thumb/item1.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="<?php echo base_url();?>application/views/images/portfolio/thumb/item2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>              
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item bootstrap wordpress">
                <div class="item-inner">
                    <img src="<?php echo base_url();?>application/views/images/portfolio/thumb/item3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>        
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla wordpress apps">
                <div class="item-inner">
                    <img src="<?php echo base_url();?>application/views/images/portfolio/thumb/item4.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="<?php echo base_url();?>application/views/images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="<?php echo base_url();?>application/views/images/portfolio/thumb/item5.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="<?php echo base_url();?>application/views/images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>    
                </div>       
            </li><!--/.portfolio-item-->
            <li class="portfolio-item wordpress html">
                <div class="item-inner">
                    <img src="<?php echo base_url();?>application/views/images/portfolio/thumb/item6.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="<?php echo base_url();?>application/views/images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>           
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
        </ul>
    </section><!--/#portfolio-->

        <?php $this->load->view('elements/bottomsection');?>
    <!--/#bottom-->
   
    <?php $this->load->view('elements/footer');?>
    <!--/#footer-->
<?php $this->load->view('elements/scripts'); ?>
</body>
</html>
