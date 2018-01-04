@extends('frontend.layouts.app') 

@section('content')

<!--banner-->
<div class="banner clearfix"></div>
<div class=" page-top clearfix">
    <div class="container">
        <!--page main heading-->
        <h1 class="entry-title">DOCTOR SERVICES</h1>
        <!--<nav class="bread-crumb">
            <ul class="breadcrumb clearfix">
                <li><a href="#">Medical Press</a><span class="divider"></span></li>
                <li class="active">3 Columns Services</li>
            </ul>
        </nav>-->
    </div>
</div>

<div class="services-page clearfix">
    <div class="container">
	
		<div class="col-sm-12" id="video_post">
			<article class="post format-gallery hentry clearfix">
				<div class="right-contents">
						<!--post video-->
						<div class="video clearfix">
							<div class="video-wrapper clearfix">

								<iframe src="http://player.vimeo.com/video/75594702?title=0&amp;byline=0&amp;portrait=0"
										frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="">
								 </iframe>

							</div>
						</div>
				</div>
			</article>
		</div>
		
		
		
        <div class="row ">
            <!--column start-->
            <div class="col-md-4 col-sm-6">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="#" title="Dental Implants">
                            <img src="images/temp-images/service-3.jpg"  alt="Dental Implants" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="#">MOBILE DIAGNOSTICS</a></h4>
                        <div class="entry-content">
                            <p>Using the SPF-NCS, our new pain diagnostics device, we can quickly, easily and accurately identify the source of a person's pain with statistical sensitivity approaching 100%. Our trained certified technician will locate the source of pain in patients with many types of chronic pain&hellip;</p>
                        </div>
                        <a class="read-more" href="/services/mobile_diagnosticks">FIND OUT MORE</a>
                    </div>
                </article>
            </div>
            <!--column end-->

            <!--column start-->
            <div class="col-md-4 col-sm-6">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="#" title="Blood Bank">
                            <img src="images/temp-images/service-2.jpg" class="attachment-service-gallery-thumb wp-post-image" alt="Blood Bank" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="#">DRUG FREE PAIN MANAGEMENT</a></h4>
                        <div class="entry-content">
                            <p>Our painless, non-invase pain diagnosis test(Small Pain Fiber Nerve Conduction Study) will accurately pinpoint where your pain is coming from anywhere in your body. It will percisely determine which nerve has the damage which means it can be properly and effectively treated. We provide a pinpoint of the test results with each diagnosis&hellip;</p>
                        </div>
                        <a class="read-more" href="#">FIND OUT MORE</a>
                    </div>
                </article>
            </div>
            <!--column end-->

            <!--column start-->
            <div class="visible-sm clearfix"></div>
            <div class="col-md-4 col-sm-6 ">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="#" title="Medicine Research">
                            <img src="images/temp-images/service-5.jpg" alt="Medicine Research" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="#">PIP SERVICES</a></h4>
                        <div class="entry-content">
                            <p>At FHC Neuropsychological Cunsultation, We provide neurocognitive and psychological assessment services for the purposes of diagnosis, treatment planning and consultation. Evaluations typically involve a detailed clinical interview along with objective assessment of cognitive, emotional, and behavioral functioning, including motivational factors that influence clinical presentation or test performance&hellip;</p>
                        </div>
                        <a class="read-more" href="#">FIND OUT MORE</a>
                    </div>
                </article>
            </div>
            <!--column end-->
		</div>
	</div>
</div>

@endsection
