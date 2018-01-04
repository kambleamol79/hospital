<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Hospital Management' }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon-new.png">

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- bootstrap Style Sheet (caution ! - Do not edit this stylesheet) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="all">
    <!-- Flexslider stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all">
    <!-- Animations stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" type="text/css" media="all">
    <!-- Awesome Font stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css" media="all">
    <!-- Datepciker stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" type="text/css" media="all">
    <!-- Swipebox stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/swipebox.css') }}" type="text/css" media="all">
    <!-- meanmenu stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}" type="text/css" media="all">
	
	 <link rel="stylesheet" href="{{ asset('css/woocommerce.css') }}" type="text/css" media="all">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" media="all">
    <!-- Include the site responsive  stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/custom-responsive.css') }}" type="text/css" media="all">

	<link rel="stylesheet" href="{{ asset('css/cust.css') }}" type="text/css" media="all">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
</head>
<body >

<header id="header">
    <div class="container">

        <!-- Website Logo -->
        <div class="logo clearfix">
            <a href="/">
                <img src="{{ asset('images/temp-images/logo-two.png') }}" alt="Medicalpress">
            </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main-menu">
            <ul class="header-nav clearfix" id="menu-main-menu">
                <li class="{{ Request::is('/') ? 'current-menu-item page_item' : '' }}">
                    <a href="/">HOME</a>
                    <!-- <ul>
                        <li><a href="home-variation2.html">Home Variation 2</a></li>
                        <li><a href="home-variation3.html">Home Variation 3</a></li>
                        <li><a href="home-variation4.html">Home Variation 4</a></li>

                    </ul>-->
                </li>
                
                <li>
                    <a href="blog.html">ADVISORY BOARD</a>
                    <!-- <ul>
                        <li><a href="image-post-format.html">Image post format</a></li>
                        <li><a href="gallery-post-format.html">Gallery post format</a></li>
                        <li><a href="video-post-format.html">Video post format</a></li>
                    </ul>-->
                </li>
                <li class="{{ Request::is('services*') ? 'current-menu-item page_item' : '' }}">
                    <a href="/services">DOCTOR SERVICES</a>
                    <!-- <ul>
                        <li>
                            <a href="services-three-columns.html">3 Columns Services</a>
                        </li>
                        <li>
                            <a href="services-two-columns.html">2 Columns Services</a>
                        </li>
                        <li>
                            <a href="services-one-column.html">1 Column Services</a>
                        </li>
                        <li>
                            <a href="services-dental.html">Services Detail page</a>
                        </li>
                    </ul>-->
                </li>
                <li>
                    <a href="#">PHYSICIAN DIRECTORY</a>
                    <!-- <ul>
                        <li>
                            <a href="gallery-four-columns.html">4 Columns Gallery</a>
                        </li>
                        <li>
                            <a href="gallery-three-columns.html">3 Columns Gallery</a>
                        </li>
                        <li>
                            <a href="gallery-two-columns.html">2 Columns Gallery</a>
                        </li>
                    </ul>-->
                </li>
                <li>
                    <a href="shop.html">SUCCESSFUL CHILD</a>
                    <!-- <ul>
                         <li><a href="product-detail.html">Product Detail</a></li>                         <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>-->
                </li>
                <li class="{{ Request::is('products*') ? 'current-menu-item page_item' : '' }}">
                    <a href="/products">PRODUCTS</a>
                    <!-- <ul>
                        <li>
                            <a href="faq.html">FAQs</a>
                        </li>
                        <li>
                            <a href="faq-full-width.html">Full Width FAQs</a>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                        </li>
                        <li>
                            <a href="columns.html">Columns</a>
                        </li>
                        <li>
                            <a href="sample-page.html">Sample Page</a>
                        </li>
                    </ul>-->
                </li>
                <!-- <li>
                    <a href="appointment.html">Appointment</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>-->
				<li  class="{{ Request::is('login*') ? 'current-menu-item page_item' : '' }}">
                    <a href="/login">LOGIN</a>
                </li>
            </ul>
        </nav>


        <div id="responsive-menu-container"></div>
    </div>
</header>

 @yield('content')
    
<!--page footer-->
<footer id="main-footer" class="site-footer clearfix">
    <div class="container">
        <div class="row">


            <!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget">
                    <h3 class="title">About Doctzi</h3>
                    <div class="textwidget">
                        <p>Doctzi is established to help people make that decision and find the professionals and services that can best help them and their family. Our system and website will offer an in-depth description of local physicians and medical services including their credentials, insurance details, patient feedback and general information.</p>
						
                        <p>In addition to our directory, you can visit our website, www.Doctzi.com to see a video of the doctor at work in their office. Then click on a video reference for patient testimonials. Doctziis a must-have tool for all Florida residents.</p>
                    </div>
                </section>
            </div>
			
			<!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget">
                    <h3 class="title"></h3>
                    <div class="textwidget">
                        <p>We certainly encourage people to get referrals from friends andfamily, but that is not always possible. Our goal is to bridge-thegap between professionals and patients by making the healthcare professionals accessible and personable via our website. We at Doctzistrive to be in the forefront of offering media solutions so people can be empowered to make the best choice for a healthcare service or professional.</p>
						
                        <p>Our directories, guides and information solutions are a virtual gold mine of information. Offering our unique medical website service directory for each state. Residents can be confident that their needs will be addressed with the highest standards possible.</p> 
						
						
                    </div>
                </section>
            </div>
			
			
			<!--about widget-->
            <div class="col-md-3 col-sm-6">
                <section  class="widget">
                    <h3 class="title"></h3>
                    <div class="textwidget">
                        <p>Doctzi delivers highly specialized solutions for all medical professionals including:
						
							Medical Doctors, Doctors of Osteopathy, Dentists, Eye Care,Physical Therapy, Pharmacies and more. Additionally, Doctziwill include labs,radiology centers and all related services that your doctor mayrecommend. Each doctor and specialist are committed to wellness and the best care for the Doctzi community.</p>
						
                    </div>
                </section>
            </div>


            <!--general services-->
            <div class="col-md-3 col-sm-6  ">
                <section class="widget animated fadeInLeft ae-animation-fadeInLeft">
                    <h3 class="title">General Services</h3>
                    <ul>
                        <li>
                            <a href="#">ADVISORY BOARD</a>
                        </li>
                        <li>
                            <a href="/services">DOCTOR SERVICES</a>
                        </li>
                        <li>
                            <a href="#">PHYSICIAN DIRECTORY</a>
                        </li>
                        <li>
                            <a href="#">SUCCESSFUL CHILD</a>
                        </li>
                        <li>
                            <a href="#">PRODUCTS</a>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="clearfix visible-sm"></div>
            
            <!--subscription form-->
            <!--<div class="col-md-2 col-sm-6  ">
                <section  class="widget animated fadeInLeft">
                    <h3 class="title">Subscribe!</h3>
                    <div class="textwidget">Subscribe to my blog for updates</div>
                    <div>

                        <form name="subs-form" id="subs_form" class="subs-form" method="post" action="subscription-handler.php">


                            <label for="subs-name">Name:</label>
                            <input name="name" id="subs-name" class="required" type="text" title="* Please provide your name" /><br/>

                            <label for="subs-email">Email:</label>
                            <input name="email" class="required email" id="subs-email" type="text" title="* Please provide a valid email address" /><br/>

                            <input type="hidden" name="action" value="send_message">
                            <input type="hidden" name="nonce" value="">

                            <input id="subs-form-submit" name="Submit" type="submit" value="SUBMIT" />
                            <img src="images/loader3.gif" id="subs-loader" alt="Loading...">
                            <div id="subs-error-container"></div>
                            <div id="subs-response-container"></div>

                        </form>

                    </div>

                </section>
            </div>-->
        </div>
        <div class="footer-bottom animated fadeInDown clearfix">
            <div class="row">
                <div class="col-sm-7">
                    <p>&copy; Copyright 2017. All Rights Reserved by Doctzi</p>
                </div>
                <!--footer social icons-->
                <div class="col-sm-5 clearfix">
                    <ul class="footer-social-nav">
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#top" id="scroll-top"></a>

<script type='text/javascript' id='quick-js'></script>
<script type='text/javascript' src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.swipebox.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.appear.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.ui.core.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.ui.datepicker.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.form.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.autosize.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.velocity.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery-twitterFetcher.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/respond.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>
</body>
</html>