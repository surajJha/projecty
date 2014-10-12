<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
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

                    <li><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="active"><a href="<?php echo site_url();?>/loadViewsController/loadAboutus">About Us</a></li>
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
                    <h1>About Us</h1>
<!--                    <p></p>-->
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>What we do?</h2>
                <p>iTechRoute is a Software Training and Development Company providing services in Product Development, Application Development, Software Development, Web Development, Academic IT Projects, Training services to IT and Non-IT Clients.</p>
                <h2>What we are?</h2>
                <p>We are a team of young dynamic IT professionals; with our latest skill, we excel in making software products development and training is at par excellence with affordable cost.</p>
                <h2>Why Us?</h2>
                <p>We at iTechRoute believe in full custom and tailor made software products that suits individual organization lending its business to grow with an IT twist.</p>
                <p>Research work done over 7+ years on IEEE titles and projects developed under data mining, machine learning, image processing, security, mobile applications and much more…</p>
                <p>Our Team is experienced, young, dynamic under Veteran Leadership which specializes in understanding IT needs of an organization in all directions and versatile orientation.</p>
            </div><!--/.col-sm-6-->
            <div class="col-sm-6">
                <h2>We expertise in</h2>
                <div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span>Web Development</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            <span>IT Consultancy</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span>Software Development</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                            <span>Academic Research Projects</span>
                        </div>
                    </div>
                   
                    
                    
                </div>
                
            </div><!--/.col-sm-6-->
        </div><!--/.row-->
        
        <hr>
        <a class="anchor" name="meettheteam"></a>
        <div class="gap"></div>
        <h1 class="center">Meet the Team</h1>
        <p class="lead center"></p>
        <div class="gap"></div>

        <div id="meet-the-team" class="row">
            <div class="col-md-3 col-xs-6">
                <div class="center">

<!--                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>application/views/images/team-member.jpg" alt="" ></p>-->
                    <h5>Mrs. Ranjana Wankhade<small class="designation muted">Manager</small></h5>
                    <p>Dreams have only one owner at a time.</p>
                    <br>
                    <!--<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a>--> 
                    <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="center">

<!--                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>application/views/images/team-member.jpg" alt="" ></p>-->
                    <h5>Mr. Deepak Bhaktiani<small class="designation muted">Operations Excecutive</small></h5>
                    <p>Do celebrate milestones as you prepare for the road ahead.</p>
<!--                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> -->
                    <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
<!--                    <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>application/views/images/team-member.jpg" alt="" ></p>-->
                    <h5>Mr. Piyush Chandekar<small class="designation muted">Project Head</small></h5>
                    <p>As long as you’re going to be thinking anyway, think big.</p>

                    <!--<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a>--> 
                    <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <!--<p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url();?>application/views/images/team-member.jpg" alt="" ></p>-->
                    <h5>Mr. Laxman Maskar<small class="designation muted">Project Head</small></h5>
                    <p>Always deliver more than expected.</p>
                    <br>
                    <!--<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a>--> 
                    <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
        </div><!--/#meet-the-team-->
    </section><!--/#about-us-->

   <?php $this->load->view('elements/bottomsection');?>
   <!--/#bottom-->
   
   <?php $this->load->view('elements/footer');?>
   <!--/#footer-->
<?php $this->load->view('elements/scripts'); ?>
</body>
</html>

