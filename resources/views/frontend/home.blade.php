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
                            <p>is a global technology company developing Blockchain applications for the Healthcare industry.</p>
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
                            <h1><span>Doctzi Blockchain </span></h1>
                            <p>Blockchain technology offers a way for untrusted parties to reach agreement (consensus) on a common digital history. A common digital history is important because digital assets and transactions are in theory easily faked and/or duplicated. Blockchain technology solves this problem without using a trusted intermediary. </p>
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
<div class="blog-page clearfix abdsd">
<div class="container">
<div class="row">
    <div class="col-lg-12 col-md-12">
        
        <div class="blog-post-single clearfix">
            <div class="comments-wrapper">
                <!-- start of comments section -->
                <div id="comments-section">

                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">HOW IT WORKS</h3>
                        
						
						<p>Sending users creates a profile and uploads all their information.</p>
						<p>Receiving users created a profile and upload all their information.</p>
						
						<blockquote><p>Signing up for a website, mobile application and sending documents you attach in your email using our Blockchain will protect your personal information. This Blochchain would record critical information in a virtually incorruptible cryptographic database maintained by a network, that is accessible to anyone running the software that you send a link to sign in.</p></blockquote>
						
						<h3 id="reply-title" class="comment-reply-title">Example:</h3>
						
						<blockquote><p>In Ethereum a block is composed of transactions. Each transaction is a message from you to a destination address. For example, a simple transaction can be that you send 1 ether to another account, the network will remove 1 ether from your balance, and will add it to the destination. When the destination is a smart contract, your message can be much more complex. For example, if the smart contract is document registry, a message can be you send a document to register it as your property.</p></blockquote>
						
						<h3 id="reply-title" class="comment-reply-title">A few things to consider:</h3>
						
						<blockquote><li> Every data in the blockchain is public, and anybody can read it.</li><li> It is expensive to store large amount of data.</li></blockquote>
						
						<p>You can work around this limitations by storing the document with a specialized service like IPFS, Swarm or your own cloud provider. And only storing in the blockchain a fingerprint of your document. You can implement your own policy against the storage service to only allowing your users to download the document. Once downloaded the document you can calculate the fingerprint, and if it matches the blockchain info then you are confident the document was not altered. If the fingerprint does not match you can reject the document.</p>
						
						<p>Patients creates an account to book doctor’s appointments and read health care professional reviews. They will be required to upload their insurance card information for verification and fill out an intake form.</p>
						
						<blockquote><p>Patients using our system for booking we will cover 5 percent of the copay for the doctor’s office visit.So when the patients makes the appointment to see the doctor Via Doctzi. The doctor will receive the insurance information and the patient intake forms.</p></blockquote>
						
						<p>Pharmacies will be using Doctzia to prevent patients who go doctor shopping for pain medicine.  Pharmacies will use Doctzia for making sure they are not double prescribing to cash paying patients for narcotics using the block chain. Doctzia will use the Blockchain technology data base for the pharmacy to check. This Blochchain would record critical information in a virtually incorruptible cryptographic database maintained by a network, that is accessible to anyone running the software.</p>
						
						
                    </div><!-- #respond -->
                </div>
                <!-- end of comments -->
            </div>
        </div>
    </div>
</div>
</div>
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
