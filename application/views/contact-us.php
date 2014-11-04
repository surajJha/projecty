<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <!-- loading all links from header file -->
        <?php $this->load->view('elements/header'); ?>
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
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><a href="<?php echo site_url(); ?>/loadViewsController/loadAboutus">About Us</a></li>
                        <li><a href="<?php echo site_url(); ?>/loadViewsController/loadServices">Services</a></li>
<!--                        <li><a href="<?php echo site_url(); ?>/loadViewsController/loadPortfolio">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url(); ?>/loadViewsController/loadFAQ">FAQ</a></li>
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
                        <li class="active"><a href="<?php echo site_url(); ?>/loadViewsController/loadContactus">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header><!--/header-->

        <section id="title" class="emerald">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Us</h1>
                        <p></p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb pull-right">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--/#title-->    

        <section id="contact-page" class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h4>Contact Form</h4>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" role="form">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" name="first" id="first" class="form-control" required="required" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last" id="last" class="form-control" required="required" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" id="phone" class="form-control" required="required" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="message" id="message" class="btn btn-primary btn-lg submit-contact">Send Message</button>
                                </div>
                                <div class=" alert-success success-message"></div>
                                <div class=" alert-danger error-message"></div>

                            </div>
                            <div class="col-sm-7">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </form>
                </div><!--/.col-sm-8-->
                <div class="col-sm-4">
                    <h4>Our Location</h4>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:215px;width:400px;"><div id="gmap_canvas" style="height:215px;width:400px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">www.trivoo.net</a></div><script type="text/javascript"> function init_map() {
                                var myOptions = {zoom: 18, center: new google.maps.LatLng(19.159105547568213, 72.99137334813236), mapTypeId: google.maps.MapTypeId.ROADMAP};
                                        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                        marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(19.159105547568213, 72.99137334813236)});
                                        infowindow = new google.maps.InfoWindow({content: "<b>iTechRoute</b><br/>Ashapura Park, Near Shri Ganesh Mandir,Sector -19,Airoli<br/>400708 Navi Mumbai"});
                                        google.maps.event.addListener(marker, "click", function() {
                                        infowindow.open(map, marker);
                                        });
                                        infowindow.open(map, marker);
                                }
                        google.maps.event.addDomListener(window, 'load', init_map);</script>
    <!--                <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.co.in/mapmaker?ll=19.15899,72.991364&spn=0.000888,0.00206&z=20&lyt=large_map_v3"></iframe>-->
                </div><!--/.col-sm-4-->
            </div>
        </section><!--/#contact-page-->

        <?php $this->load->view('elements/bottomsection.php'); ?>
        <!--/#bottom-->

        <?php $this->load->view('elements/footer.php'); ?>
        <!--/#footer-->
        <?php $this->load->view('elements/scripts'); ?>
        <script>
            $(document).ready(function() {
                var firstnameflag= false;
                var lastnameflag= false;
                var emailflag= false;
                var phoneflag= false;
                var msgflag= false;
                
                //firstname validation
                $('#first').on("blur",function(){
                    if($('#first').val().length>0){
                        if(validatename($('#first').val())){
                            $('#first').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                           firstnameflag=true;
                        }
                        else
                        {
                             $('#first').css({'box-shadow': '0px 0px 7px red'});
                            firstnameflag=false;
                        }
                    }else{
                        $('#first').css({'box-shadow': '0px 0px 7px red'});
                        firstnameflag=false;
                    }
                    
                });
                
                //lastname validation
                $('#last').on("blur",function(){
                    if($('#last').val().length>0){
                        if(validatename($('#last').val())){
                             $('#last').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                            lastnameflag=true;
                        }
                        else
                        {
                             $('#last').css({'box-shadow': '0px 0px 7px red'});
                            lastnameflag=false;
                        }
                    }else{
                        $('#last').css({'box-shadow': '0px 0px 7px red'});
                        lastnameflag=false;
                    }
                });
                
                //number validation
                $('#phone').on("blur",function(){
                    if($('#phone').val().length>7){
                        if(validatenumber($('#phone').val())){
                             $('#phone').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                            phoneflag=true;
                        }
                        else
                        {
                             $('#phone').css({'box-shadow': '0px 0px 7px red'});
                            phoneflag=false;
                        }
                    }else{
                        $('#phone').css({'box-shadow': '0px 0px 7px red'});
                        phoneflag=false;
                    }
                });
                
                //email validation
                $('#email').on("blur",function(){
                    if(validateEmail($('#email').val())){
                         $('#email').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                        emailflag=true;
                    }
                    else
                    {
                         $('#email').css({'box-shadow': '0px 0px 7px red'});
                        emailflag=false;
                    }
                });
                    
                $(".submit-contact").on("click", function(e) {
                e.preventDefault();
                if (!firstnameflag && !lastnameflag &&!emailflag && !phoneflag && !msgflag){
                    $(".success-message").html("");
                    $(".error-message").html("Please fill in details properly.");
                } else{
                    var postData = $(".contact-form").serialize();
                            $.ajax(
                            {
                            url:"../submitContactController/submitContact",
                                    type: "POST",
                                    data: postData,
                                    success: function(data, textStatus, jqXHR)
                                    {
                                    if (data === "success"){
                                    $(".error-message").html("");    
                                    $(".success-message").html("Thank You!!");
                                    }
                                    else{
                                    $(".error-message").html("There was some error ! Please try again.");
                                    }
                                    //data: return data from server
                                    },
                                    error: function(jqXHR, textStatus, errorThrown)
                                    {
                                    //if fails      
                                    }
                            });
                }
                })
            })
            function validateEmail(email) {
            var re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                    return re.test(email);
                    }
            function validatename(name) {
            var re = /^[a-z0-9]+$/i;
                    return re.test(name);
                    }
            function validatenumber(number) {
            var re = /^\d+$/;
                    return re.test(number);
                    }
            </script>

    </body>
</html>
