@extends('frontend.layouts.app') 

@section('content')
<div class="home-slider clearfix">
    <div class="flexslider loading">
        <ul class="slides">
            <!--slide start-->
            <li>
                <img src="images/temp-images/slide-one.jpg" alt="Medical Services <span>That You Can Trust</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1><span>Doctzi</span></h1>
                            <p>Our mission is to empower people to make the best medical decisions for their family by connecting theme directly to professionals and neighbors in their cimmunity. We are proud to have Folrida special needs attorney Stuart Hoffman introduce Florida Health Community</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->

            <!--slide start-->
            <li>
                <img src="images/temp-images/slide-two.jpg" alt="Medical Services <span>That You Can Trust</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1><span>Doctzi</span></h1>
                            <p>Our mission is to empower people to make the best medical decisions for their family by connecting theme directly to professionals and neighbors in their cimmunity. We are proud to have Folrida special needs attorney Stuart Hoffman introduce Florida Health Community</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->
        </ul>
    </div>

    <!--slider appointment form-->
    <div class="appointment appointment-two clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-md-offset-8 make-appoint-two ">
                    <span class="btn make-appoint">PHYSICIAN LOGIN <i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-8 variation-two">
                    <div class="appointment-form clearfix">
                        <h4>Our Medical and healthcare directory will help you find the right care for you and your family</h4>
                        <p>Doctors and medical professionals can log in to update their information and check all the upcoming events and services offered by FHC</p> <br>
                        <form class="clearfix" id="appointment_form_two" action="http://inspirythemes.biz/html-templates/medicalpress/appointment_form_handler.php" method="post" >
                            <div class="common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="User name" />
                            </div>
                            <div class="common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Password" />
                            </div>
<!--                             <div class="common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="User Name" />
                            </div>
                            <div class="common">
                                <input type="text" name="number" id="app-number" class="required number" placeholder="Phone Number"/>
                            </div>
                            <div class="common">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address"/>
                            </div>
                            <div class="common">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date"/>
                            </div>
                            <div class="common">
                                <textarea name="message" id="app-message" class="required"  placeholder="Appointment Message"></textarea>
                            </div> -->
                            <div class="common">
                                <input type="submit" name="Submit" class="btn form-submit-btn" value="Register here"/>
                                <input type="submit" name="Submit" class="btn form-login-btn" value="Login"/>
                                <br/>
                                <img src="images/white-loader.gif" class="ajax-loader" id="appointment-loader" alt="Loading...">
                                <div id="response-container"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider appointment form end -->
</div>

<!--home services start-->
<div class="home-features clearfix">
    <div class="container">
        <div class="row">



            <div class="col-md-12">
                <div class="row">
       

                    <div class="col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-medkit fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>BREAKING NEWS</h3>
                                <p>Want to find out more? Watch our video and learn more about the many benefits.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-user-md fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>EVENTS </h3>
                                <p>Want to find out more? Watch our video and learn more about the many benefits.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-ambulance fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>IN YOURE COMMUNITY</h3>
                                <p>Want to find out more? Watch our video and learn more about the many benefits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-plus-square fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>CALENDAR</h3>
                                <p>Want to find out more? Watch our video and learn more about the many benefits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--
                <div class="features-intro clearfix">
                    <h2><span>Health and Medical</span> WordPress Theme</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <a class="read-more" href="services-two-columns.html">View Our Services</a>
                </div>
            -->
            </div>
        </div>
    </div>
</div>

@endsection
