<?php

/**
 * Template Name: Home A/B TEST
 * Template Post Type: post, page
 */
get_header(); ?>

<style>
	@media only screen and (max-width:1000px){
		#section2 .section1-cards.mx-auto.p-3{
			position: relative;
			display: flex;
		}
		.display-none {
			display: none !important;
		}
		svg.Layer_1 {
			width: 30px;
			position: absolute;
			top: -180px;
			left: 0;
			right: 0;
			margin: auto;
			z-index:-1;
		}
		
		.card-body-mobile{
			margin-bottom: 50px;
		}
		.blue-bg{
			background-color:#94DAEC !important;
		}
		.section1-card {
			max-width: 342px;
			width: 100%;
			margin: auto;
			height: 90px;
			border: unset;
			box-shadow: 0 10px 35px 0 rgb(0 0 0 / 0.08);
		}
		img.center-block.img-fer.w-45 {
			height: 89px;
			width: 89px;
		}
		a.read.d-none.btn.p-0.display-inlineflex {
			position: absolute;
			bottom: 0;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			right: 0;
			margin: auto !important;
			display: flex;
			justify-content: center;
		}
		.whySection .button4{
			width: 100% !important;
			height: 100% !important;
			opacity: 0;
		}
		.section1-card:hover > .section1-cards h5 {
			color: #000000!important;
		}
		.section1-card:hover > .section1-cards {
			background-color: unset;
			height: 100%;
			color: black !important;
			box-shadow: 18px 18px 45px rgba(0,0,0,0.1);
			position: relative;
		}
		img.center-block.img-fer.w-45 {
			height: 89px;
			width: 89px;
			position: absolute;
			left: 22px;
			top: -30px;
			padding: 13px;
			background-color: #ED1068;
			border-radius: 15px;
		}

		.whySection:nth-child(2n) img.center-block.img-fer.w-45 {
			left: unset;
			right: 20px;
		}
		.whySection:nth-child(2n) .section1-card h5 {
			text-align: left;
			font-size: 16px;
			line-height: 25px;
			font-family: Poppins-Regular;
			color: #808080;
			padding-top: 0;
			margin-top: -3px;
			max-width: 200px;
		}
		.whySection:nth-child(2n+1) .section1-card h5 {
			text-align: left;
			font-size: 16px;
			line-height: 25px;
			font-family: Poppins-Regular;
			color: #808080;
			padding-top: 0;
			width: 213px;
			margin-left: auto;
			padding-left: 4px;
			box-sizing: border-box;
			position: relative;
			left: 4px;
		}
		.whySection .mb-sm-0, .whySection .my-sm-0 {
			margin-bottom: 3rem !important;
		}
	}
	@media only screen and (max-width:365px){
		.section1-card h5{
			    width: 180px !important;
    			margin-top: -10px !important;
		}
		svg.Layer_1{
			top: -155px;
		}
	}
</style>

<!-- Modal -->
<div class="modal fade" id="automodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php bloginfo('template_directory'); ?>/images/close.png" class="img-fer" data-imghover="closeb.svg" data-imgnonhover="close.png" >
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center" id="thankyou">Get up to 50% off Fertilligence! </h4>
                <p class="text-center" id="join">Join now and get 25% off your first month<br>PLUS 50% off your second month.</p>
                <form id="nbe-classic-form1">
                    <div class="form-group text-center">
                        <input type="email" class="form-control col-8 col-lg-5 mx-auto mt-4" id="popemail" aria-describedby="emailHelp" placeholder="Email address">
                        <p class="form-validate pt-3"></p>
                        <div class="checkbox mt-4">
                            <label><input type="checkbox" value="" id="checky"> By submitting my email address I agree to receive emails with more information about the Fertilligence platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and I understand I can unsubscribe at any time.</label>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-4 mb-4">
                        <input name="submit" type="submit" class="btn btn-primary btn-lg d-none" id="postme1" value="Submit"/>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>










<!--------------hero=------------------------>
<div id="header" class="mx-auto h-590" style="height: 730px;background: url('<?php bloginfo('template_directory'); ?>/images/headerbackground.png') bottom no-repeat;">
    <div class="col-12 p-0" style="height: 100%">
        <div class="bg-center" style="background: url('<?php bloginfo('template_directory'); ?>/images/hero.png') no-repeat;width: 100%;height: 100%;position: absolute">
            <div class="nbe-bg-hero">
                <div class="nbe-circle display-none"></div>
                <div class="nbe-square"></div>
                <div class="nbe-square2"></div>
            </div>
        </div>
        <div class="col-lg-10 display-flex mx-auto">
            <div class="col-lg-11 col-xl-9 text-center mx-auto">
                <h1 class="fs-25 hero mt-80">Looking to boost your chance of conceiving with a lifestyle-first approach designed for YOU?</h1>
                <h4 class="col-sm-11 mt-sm-2 mt-5 pt-5 fs-30 fs-45 padding-0 text-white mx-auto">Don't just Try.<br class="d-block d-sm-none"> Be Fertilligent.</h4>
            </div>
        </div>
    </div>
</div>

<!--------------hero2------------------------>
<!--<div id="header" class="mx-auto h-590" style="height: 730px;background: url('<?php bloginfo('template_directory'); ?>/images/headerbackground.png') bottom no-repeat;">
    <div class="col-12 p-0" style="height: 100%">
        <div class="bg-center" style="background: url('<?php bloginfo('template_directory'); ?>/images/hero2.png') no-repeat;width: 100%;height: 100%;position: absolute">
            <div class="nbe-bg-hero">
				<div class="nbe-circle display-none"></div>
				<div class="nbe-square"></div>
				<div class="nbe-square2"></div>
			</div>
        </div>
        <div class="col-12 display-flex mx-auto">
            <div class="col-7 text-left">
                <h1 class="fs-25 hero text-left" style="margin-top:30%!important;">Looking to boost your chance of conceiving with a lifestyle-first approach designed for YOU?</h1>
                <h4 class="col-sm-11 mt-sm-2 mt-5 pt-5 fs-30 fs-45 padding-0  mx-auto" style="color: #ED0F68!important">Don't just Try.<br class="d-block d-sm-none"> Be Fertilligent.</h4>
            </div>
        </div>
    </div>
</div>-->
<!------------------slidernew----------------->
<div class="col-12" id="slidernew" style="background-image: url('https://fertilligence.com/wp-content/themes/FTG/images/Group 7563.png');background-repeat: no-repeat;">
    <div class="col-12 col-sm-10 mx-auto d-flex p-0"  style="min-height:720px">
        <div class="col-4 d-none d-sm-flex" id="wrapper1" style="background:url('<?php bloginfo('template_directory'); ?>/images/mobile-slider.png') center no-repeat;background-size: cover;">
				
			<div style="" id="wrapper2">
	
				<div class="owl-carousel owl-theme" id="carouselhero">
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider1.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider2.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider3.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider4.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider5.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider6.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider7.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider8.png" alt="">
					</div>
				</div> 
				
			</div>
			<div class="ml-0 text-center" style="position: absolute;bottom: -18%;right: 7%;font-size:17px" id="sacaption">
                <p class="mb-0 ml-0 ml-lg-4 mobile-margin" style="margin-top:-100px">*Patent Pending*</p>
                <p class="mb-0 ml-0 ml-lg-4">*Available On iOS And Android Devices*</p>
			</div>
        </div>
			
			
		
        <div class="col-12 col-sm-8 pl-0 pl-sm-4 p-0" style="display: flex;align-items: center">
            <div>
                <h6 class="tac">
                    FERTILLIGENCE IS YOUR GO-TO FOR EVERYTHING WHEN YOU ARE TRYING TO CONCEIVE
                </h6>
                <ul class="mt-4" style="list-style-image:url('<?php bloginfo('template_directory'); ?>/images/dots-slider.svg')">
                    <li id="s1" class="sa">Single secure app</li>
                    <li id="s2" class="sa">One-on-one fertility coaching</li>
                    <li id="s3" class="sa">Personalized meal planner and recipes</li>
                    <li id="s4" class="sa">Dozens of fertility lifestyle classes</li>
                    <li id="s5" class="sa">Hundreds of on-demand strength, meditation, yoga workouts</li>
                    <li id="s6" class="sa">Live chat with certified nutritionists</li>
					<li id="s7" class="sa">Interactive mood, sleep, stress, nutrition trackers and more…</li>
					<li id="s8" class="sa">Personalized content on reproductive health topics</li>
                </ul>
                <p class="mt-4 tac" style="font-weight: 700;font-size:17px">
                    Boost your chances of conceiving naturally – and do it all with a single affordable app
                </p>

            </div>
        </div>

    </div>
</div>
<!---------takethequiz----------------------->

<div class="col-12 d-block d-sm-none" style="margin-top:20px">
    <div class="fit" style="">
        <div class="section1-cards mx-auto p-3">
            <img src="<?php bloginfo('template_directory'); ?>/images/hero-quiz.png" alt="" class="center-block">
            <h5 class="ttq">Take A Short Quiz To Learn What Fertilligence Can Do For You</h5>
        </div>
    </div>
    <a  href="quiz/" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
        <div class="button3 btn5" style="width: 177px;height: 50px">
            <p id="closechat" class="text-center">Take The Quiz</p>
        </div>
    </a>
</div>

<!------------section1----------------------->
<div class="col-12" id="section2" style="margin-top: 99px;">
    <div class="col-lg-11 p-sm-0  d-lg-flex mx-auto align-items-center overflow-hidden padding-0">
        <div class="col-sm-12 col-lg-7   m-lg-4 mt-5 mt-sm-0">
            <h2><span class="pink-color" style="font-size:33px">1 in 6</span> Couples Struggle to Conceive</h2>
            <div class="d-flex align-items-center mt-5">
                <!--                    <img src="--><?php //bloginfo('template_directory');
                                                        ?>
                <!--/images/tick2.svg">-->
                <h4 class="blue-color pey-title">If you're one of them, you're not alone. </h4>
            </div>
            <p class="mb-1 mb-sm-0 mt-3 mt-lg-4">Trying for a baby isn't always simple and can be a difficult and emotional experience. You might be tired of looking for answers, feel anxious, overwhelmed and excited all at the same time.</p>
            <p class="mb-5 mb-sm-0 mt-2">Whether you are trying to conceive naturally or already undergoing a medical treatment and need a trustful, knowledgeable partner to guide you, we will support you the whole way through.</p>
            <!--              <div class="col-lg-4 m-zero d-none display-packages-button" style="margin-left: -35px;">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/images/1in6.png">
                                <p class="m-0 text-center" style="margin-top: -40px!important;">*Patent Pending*</p>
                                <p class="m-0 text-center">*Available On iOS And Android Devices *</p>
                            </div> -->
            <div class="d-flex align-items-center  mb-3 mb-sm-0 mt-4">
                <!--                    <img src="--><?php //bloginfo('template_directory');
                                                        ?>
                <!--/images/tick2.svg" alt="">-->
                <h4 class="blue-color pey-title">What is Fertilligence?</h4>
            </div>
            <p class="mt-4 mb-0">We are a lifestyle-first solution from Nestlé Health Science combining the power of
                evidence-based research with warmth and care of personalized coaching to prepare your mind and body for pregnancy, all in a single App.</p>
            <p class="mt-2">Leaning on expert medical insights and proven lifestyle modifications, we show you exactly what to do to improve your chances of getting pregnant.</p>
        </div>
        <div class="col-lg-4 m-zero">
            <img class="max-width-100 tablet" src="<?php bloginfo('template_directory'); ?>/images/1in6.png">
           


        </div>
    </div>
</div>

<!------------section2----------------------->
<div class="col-12 mt-5" id="section1">
    <div class="col-lg-10 mx-auto text-center dash1">
        <p class="col-lg-11 mx-auto p-0">"Do you know that men and women are equally likely to contribute to fertility issues? We will be glad to assist both you and your partner."</p>

        <p class="blue-color m-0">- Your Fertilligence Team</p>
    </div>
    <h3 class="title text-center" style="margin-top: 80px;">Discover the Fertilligence Difference</h3>
    <div id="accordion1" class="h-fit col-lg-10 col-lg-12 col-xl-10 mx-auto mt-5 p-0" style="">
        <div class="d-lg-flex justify-content-between" style="min-height: 282px">
            <div class="whySection">
					<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/></svg>
                <div class="text-center button-out mb-5 mb-sm-0">
                    <div class="section1-card" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" role="button" data-toggle="collapse" class="read  btn p-0 display-inlineflex">
                        <div class="section1-cards mx-auto p-3">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Group%207574.svg" alt="" class="center-block img-fer w-45" data-imghover="doctor-w.svg" data-imgnonhover="Group%207574.svg">
                            <h5>Expert-Backed</h5>
						
                            <a href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                                <div class="button4  readmorebutton" style="width: 131px;height: 39px" data-id="1">
                                    <p class="text-center">Read
                                        More</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="d-none collapse mt-5 readmoremobile" id="collapseExample1" data-parent="#accordion1">
                    <a class="closebtn">
                        <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
                    </a>
                    <div class="card-body-mobile" id="card1">
                        <p><b>Expert-Backed</b></p>
                        <p>We co-developed FertilligenceTM in close collaboration with <b>hundreds of women</b> and men experiencing challenges to conceive and healthcare professionals from <b>top academic medical centers</b> across the U.S. who saw a real gap in the existing fertility support model.
                        </p>
                        <p>We worked tirelessly to account for known <b>fertility related conditions</b> like PCOS, Endometriosis, POI, IVF, multiple miscarriages, improper ovulation, Low T, Erectyle Disfunction, semen abnormalities, prostate issues.</p>
                        <p>We are well suited to support <b>your own fertility journey</b> or complement <b>the protocol provided by your healthcare professional</b>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="whySection">
				<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/></svg>
                <div class="text-center button-out mb-5 mb-sm-0">
                    <div class="section1-card" href="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                        <div class="section1-cards mx-auto p-3">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Group%207575.svg" alt="" class="center-block img-fer w-45" data-imghover="health-w.svg" data-imgnonhover="Group%207575.svg">
                            <h5>Evidence-Based Lifestyle Recommendations</h5>
							
                            <a href="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                                <div class="button4 readmorebutton" style="width: 131px;height: 39px" data-id="2">
                                    <p class="text-center">Read
                                        More</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="d-none collapse mt-3 readmoremobile" id="collapseExample2" data-parent="#accordion1">
                    <a class="closebtn">
                        <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
                    </a>
                    <div class="card-body-mobile" id="card2">
                        <p><b>Evidence-Based Lifestyle Recommendations</b></p>
                        <p>Our recommendations are based <b>on rigorous up-to-date research</b> of clinical studies and publications by top industry experts.</p>
                        <p><b>We will help you integrate new lifestyle choices</b> into your everyday routines to improve your overall health and chances for conception.</p>
                        <p><b>You will be empowered to embrace a healthier lifestyle</b>, including:</p>
                        <p>- Maintaining a healthy <b>weight</b>,<br>
                            - Optimizing <b>nutrition</b>,<br>
                            - Choosing an appropriate <b>exercise program</b>,<br>
                            - Improving the quality and length of <b>sleep</b>,<br>
                            - Eliminating fertility-damaging toxins from <b>environment</b>,<br>
                            - Managing the <b>emotional roller</b> coaster of the fertility journey,<br>
                            - Reducing <b>stress</b> level,<br>
                            - Strengthening <b>connection with your partner</b>,<br>
                            - Identifying suitable <b>vitamins and minerals</b> based on existing scientific evidence,<br>
                            - Maintaining <b>hydration</b> level,<br>
                            - Tracking <b>ovulation</b> and <b>sperm</b> with convenient at-home test kits.<br>
                        </p>


                    </div>
                </div>
            </div>
            <div class="whySection">
							<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/></svg>
                <div class="text-center button-out mb-5 mb-sm-0">
                    <div class="section1-card" href="#collapseExample3" aria-expanded="true" aria-controls="collapseExample3" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                        <div class="section1-cards mx-auto p-3">
                            <img src="<?php bloginfo('template_directory'); ?>/images/support.svg" alt="" class="center-block img-fer w-45" data-imghover="support-w.svg" data-imgnonhover="support.svg">
                            <h5>24/7 Personal Coaching</h5>
				
                            <a href="#collapseExample3" aria-expanded="true" aria-controls="collapseExample3" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                                <div class="button4 readmorebutton" style="width: 131px;height: 39px" data-id="3">
                                    <p class="text-center">Read
                                        More</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-none collapse mt-3 readmoremobile" id="collapseExample3" data-parent="#accordion1">
                    <a class="closebtn">
                        <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
                    </a>
                    <div class="card-body-mobile" id="card3">
                        <p><b>24/7 Personal Coaching</b></p>
                        <p><b>Open yourself to</b> a step-by-step guidance, emotional support, and expert knowledge of our <b>fertility coaches</b>, <b>nutritional specialists</b>, and <b>fitness instructors</b>.
                        </p>
                        <p><b>Experience a variety of 1-on-1 live </b>and <b>group</b> sessions, self-guided programs and <b>pre-recorded</b> classes.</p>
                        <p><b>Talk to us whenever you need it</b>, with our 24/7 messaging service always by your side.

                        </p>
                    </div>
                </div>
            </div>
            <div class="whySection">
					<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/></svg>
                <div class="text-center button-out mb-5 mb-sm-0">
                    <div class="section1-card"  href="#collapseExample4" aria-expanded="true" aria-controls="collapseExample4" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                        <div class="section1-cards mx-auto p-3">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Group%207577.svg" alt="" class="center-block img-fer w-45" data-imghover="checklist-w.svg" data-imgnonhover="Group%207577.svg">
                            <h5>Personalized
                                Content and Trackers </h5>
						
                            <a href="#collapseExample4" aria-expanded="true" aria-controls="collapseExample4" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                                <div class="button4 readmorebutton" style="width: 131px;height: 39px" data-id="4">
                                    <p class="text-center">Read
                                        More</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="d-none collapse mt-3 readmoremobile" id="collapseExample4" data-parent="#accordion1">
                    <a class="closebtn">
                        <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
                    </a>
                    <div class="card-body-mobile" id="card4">
                        <p><b>Personalized Content and Trackers</b></p>
                        <p><b>You will get access to a variety of personalized</b> services based on your responses to our health and wellness questionnaires:
                        </p>
                        <p>- <b>Curated reproductive health content</b> targeted to your specific conditions, needs and preferences;</p>
                        <p>- <b>Extensive media library</b> of educational articles and videos, including cooking demos, healthy living sessions, exercise classes designed for all levels of activity and interest;</p>
                        <p>- <b>Convenient FDA approved at-home ovulation and sperm testing kits providing</b> immediate results. No need to go or wait for lab results;
                        </p>
                        <p>- <b>Progress tracking tools</b> across FertilligenceTM lifestyle factors.
                        </p>
                    </div>
                </div>
            </div>
            <div class="whySection">
						<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg"><path id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/></svg>
                <div class="text-center button-out mb-5 mb-sm-0">
                    <div class="section1-card" href="#collapseExample5" aria-expanded="true" aria-controls="collapseExample5" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                        <div class="section1-cards mx-auto p-3">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Group%207578.svg" alt="" class="center-block img-fer w-45" data-imghover="salad-w.svg" data-imgnonhover="Group%207578.svg">
                            <h5>Interactive Meal Plans, Recipes and Supplements</h5>
					
                            <a href="#collapseExample5" aria-expanded="true" aria-controls="collapseExample5" role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
                                <div class="button4 readmorebutton" style="width: 131px;height: 39px" data-id="5">
                                    <p class="text-center">Read
                                        More</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="d-none collapse mt-3 readmoremobile" id="collapseExample5" data-parent="#accordion1">
                    <a class="closebtn">
                        <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
                    </a>
                    <div class="card-body-mobile" id="card5">
                        <p><b>Interactive Meal Plans, Recipes and Supplements</b></p>
                        <p><b>You will get auto-generate meal plans</b> and hundreds of personalized, delicious <b>recipes</b> for you and your partner from experts in nutrition tailored to your food preferences, sensitivities and conditions (obesity, high blood pressure, Celiac, high cholesterol, heartburn).
                        </p>
                        <p><b>You will become an expert in common vitamins</b>, minerals, and supplements that are associated with reproductive health.</p>
                        <p>
                            <b>You will get access to over 70 hypoallergenic dietary supplements</b> from Pure Encapsulations (Nestle Health Science) available for order on the platform and <b>delivery to you doors</b>.

                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="display-none collapse mt-5 readmore" id="collapseExample1" data-parent="#accordion1">
            <a class="closebtn">
                <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
            </a>
            <div class="card-body">
                <p><b>Expert-Backed</b></p>
                <p>We co-developed FertilligenceTM in close collaboration with <b>hundreds of women and men</b> experiencing challenges to conceive and healthcare professionals from <b>top academic medical centers</b> across the U.S. who saw a real gap in the existing fertility support model.</p>
                <p>We worked tirelessly to account for known <b>fertility related conditions</b> like PCOS, Endometriosis, POI, IVF, multiple miscarriages, improper ovulation, Low T, Erectyle Disfunction, semen abnormalities, prostate issues.</p>
                <p>We are well suited to support <b>your own fertility journey</b> or complement<b> the protocol provided by your healthcare professional.</b></p>
            </div>
        </div>

        <div class="display-none collapse mt-3 readmore" id="collapseExample2" data-parent="#accordion1">
            <a class="closebtn">
                <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
            </a>
            <div class="card-body">
                <p><b>Evidence-Based Lifestyle Recommendations</b></p>
                <p>Our recommendations are based <b>on rigorous up-to-date research</b> of clinical studies and publications by top industry experts.</p>
                <p><b>We will help you integrate new lifestyle choices</b> into your everyday routines to improve your overall health and chances for conception.</p>
                <p><b>You will be empowered to embrace a healthier lifestyle</b>, including:</p>
                <p>- Maintaining a healthy <b>weight</b>,<br>
                    - Optimizing <b>nutrition</b>,<br>
                    - Choosing an appropriate <b>exercise program</b>,<br>
                    - Improving the quality and length of <b>sleep</b>,<br>
                    - Eliminating fertility-damaging toxins from <b>environment</b>,<br>
                    - Managing the <b>emotional roller</b> coaster of the fertility journey,<br>
                    - Reducing <b>stress</b> level,<br>
                    - Strengthening <b>connection with your partner</b>,<br>
                    - Identifying suitable <b>vitamins and minerals</b> based on existing scientific evidence,<br>
                    - Maintaining <b>hydration</b> level,<br>
                    - Tracking <b>ovulation</b> and <b>sperm</b> with convenient at-home test kits.<br>
                </p>

            </div>
        </div>

        <div class="display-none collapse mt-3 readmore" id="collapseExample3" data-parent="#accordion1">
            <a class="closebtn">
                <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
            </a>
            <div class="card-body">
                <p><b>24/7 Personal Coaching</b></p>
                <p><b>Open yourself to</b> a step-by-step guidance, emotional support, and expert knowledge of our <b>fertility coaches</b>, <b>nutritional specialists</b>, and <b>fitness instructors</b>.
                </p>
                <p><b>Experience a variety of 1-on-1 live </b>and <b>group</b> sessions, self-guided programs and <b>pre-recorded</b> classes.</p>
                <p><b>Talk to us whenever you need it</b>, with our 24/7 messaging service always by your side.

                </p>
            </div>
        </div>

        <div class="display-none collapse mt-3 readmore" id="collapseExample4" data-parent="#accordion1">
            <a class="closebtn">
                <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
            </a>
            <div class="card-body">
                <p><b>Personalized Content and Trackers</b></p>
                <p><b>You will get access to a variety of personalized</b> services based on your responses to our health and wellness questionnaires:
                </p>
                <p>- <b>Curated reproductive health content</b> targeted to your specific conditions, needs and preferences;</p>
                <p>- <b>Extensive media library</b> of educational articles and videos, including cooking demos, healthy living sessions, exercise classes designed for all levels of activity and interest;</p>
                <p>- <b>Convenient FDA approved at-home ovulation and sperm testing kits providing</b> immediate results. No need to go or wait for lab results;
                </p>
                <p>- <b>Progress tracking tools</b> across FertilligenceTM lifestyle factors.
                </p>

            </div>
        </div>

        <div class="display-none collapse mt-3 readmore" id="collapseExample5" data-parent="#accordion1">
            <a class="closebtn">
                <img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
            </a>
            <div class="card-body">
                <p><b>Interactive Meal Plans, Recipes and Supplements</b></p>
                <p><b>You will get auto-generate meal plans</b> and hundreds of personalized, delicious <b>recipes</b> for you and your partner from experts in nutrition tailored to your food preferences, sensitivities and conditions (obesity, high blood pressure, Celiac, high cholesterol, heartburn).
                </p>
                <p><b>You will become an expert in common vitamins</b>, minerals, and supplements that are associated with reproductive health.</p>
                <p>
                    <b>You will get access to over 70 hypoallergenic dietary supplements</b> from Pure Encapsulations (Nestle Health Science) available for order on the platform and <b>delivery to you doors</b>.

                </p>
            </div>
        </div>

    </div>
  <div class="mx-auto col-9 p-0 mt-5 pt-5 pt-sm-0">
        <span class="blue-color pey-title">Consider us your conception concierge.</span><br>
		<p class="title-p" style="font-size:17px;line-height:35px;color:#000">
		Together, we'll personalize a holistic approach to conception based on your lifestyle, plans and pre-pregnancy challenges. Then, we'll ensure you have the insights, tools and hands-on support to maximize your chance of conceiving.</p>

    </div>
</div>









<!------------section5----------------------->
<div class="col-12" id="section5" style="margin-top: 100px;background: url('<?php bloginfo('template_directory'); ?>/images/appbg.png') no-repeat">
    <div class="col-10 col-lg-12 col-xl-10 d-lg-flex mx-auto p-0 mt-5" style="padding-top:50px!important">
        <div class="col-12 col-lg-3  padding-0 text-right d-flex item1 p0-rotate jc">
            <picture>
                <div id="s1" class="app-poster col-12 w100-rotate width-100 br0 border-rotate1" style="border-radius: 0 30px;width: 93%;">
                    <p class="col-12 text-left text-white">Lifestyle change tracker</p>
                </div>
                <source media="(max-width:415px)" srcset="<?php bloginfo('template_directory'); ?>/images/srcset1.jpg">
                <source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
                <source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
                <source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
                <source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
                <source media="(max-width:1024px)" srcset="<?php bloginfo('template_directory'); ?>/images/ipad1.png">
                <img src="<?php bloginfo('template_directory'); ?>/images/app1.jpg" alt="" class="width-100 max-w-100" >
            </picture>
            <!--       <div class="item1-hover" style="margin-top: 200px;margin-left: -120px;">
                    <p>appointments via video chat or phone call</p>
                </div>-->
        </div>
        <div class="col-lg-6 p-0 text-center mt-sm-3 mt-lg-0" style="display: grid;align-items: center">
            <div class="d-flex padding-0  item1 col-12 p0-rotate jc" style="align-items: flex-end">

                <picture>
                    <div id="s2" class="app-poster  col-12 width-100 w100-rotate" style="width: 94.7%;">
                        <p class="text-left text-white">1:1 Coaching Sessions with Fertility Coaches and Nutritionists via Video Chat, Phone Call or Messenger</p>
                    </div>
                    <source media="(max-width:415px )" srcset="<?php bloginfo('template_directory'); ?>/images/srcset2.jpg">
                    <source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
                    <source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
                    <source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
                    <source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
                    <source media="(max-width:1024px)" srcset="<?php bloginfo('template_directory'); ?>/images/ipad2.png">
                    <img src="<?php bloginfo('template_directory'); ?>/images/app2.jpg" alt="" class="mt-4 mt-sm-0 w-100  max-w-100">
                </picture>
                <!---->
                <!---->
                <!--                    <div class="item1-hover" style="margin-bottom: 140px;margin-left: -120px">-->
                <!--                        <p>appointments via video chat or phone call</p>-->
                <!--                    </div>-->
            </div>
            <div class="d-sm-flex" style="justify-content: space-evenly">

                <div class="d-flex item1 padding-0" style="align-items: flex-end;padding-top: 20px;">
                    <div class="col-12 p-0">
                        <picture>
                            <div class="app-poster">
                                <p class="text-left text-white col-10">Online group and prerecorded lifestyle and fitness classes</p>
                            </div>

                            <source media="(max-width:415px )" srcset="<?php bloginfo('template_directory'); ?>/images/srcset3.jpg">
                            <source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
                            <source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
                            <source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
                            <source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
                            <source media="(max-width:1024px)" srcset="<?php bloginfo('template_directory'); ?>/images/ipad3.png">
                            <img src="<?php bloginfo('template_directory'); ?>/images/app3.jpg" alt="" class="mt-4 mt-sm-0 img-fluid  max-w-100">
                        </picture>
                        <!---->
                        <!--                        <div class="item1-hover" style="margin-bottom: 100px;margin-left: -210px;">-->
                        <!--                            <p>appointments via video chat or phone call</p>-->
                        <!--                        </div>-->
                    </div>
                </div>
                <div class="d-flex item1 padding-0" style="align-items: flex-end;padding-top: 20px;">
                    <div class="col-12 p-0">
                        <picture>
                            <div class="app-poster">
                                <p class="text-left text-white col-12">Access to curated personalized knowledge base</p>
                            </div>

                            <source media="(max-width:415px )" srcset="<?php bloginfo('template_directory'); ?>/images/srcset4.jpg">
                            <source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
                            <source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
                            <source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
                            <source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
                            <source media="(max-width:1024px )" srcset="<?php bloginfo('template_directory'); ?>/images/ipad4.png">

                            <img src="<?php bloginfo('template_directory'); ?>/images/app4.jpg" alt="" class="mt-4 mt-sm-0 w-100  max-w-100">
                        </picture>
                        <!---->
                        <!--                        <div class="item1-hover" style="margin-bottom: 100px;margin-left: -210px;">-->
                        <!--                            <p>appointments via video chat or phone call</p>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 text-left d-flex item1 p-0  mt-sm-3 mt-lg-0 jc" style="align-items: flex-end">
            <picture>
                <div id="s3" class="app-poster col-12 border-radius width-100 w100-rotate border-rotate2" style="border-radius: 30px 0;width: 93.5%">
                    <p class="col-11 text-left text-white">Personalized meal plans and recipes</p>
                </div>
                <source media="(max-width:415px )" srcset="<?php bloginfo('template_directory'); ?>/images/srcset5.jpg">
                <source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
                <source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
                <source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
                <source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
                <source media="(max-width:1024px )" srcset="<?php bloginfo('template_directory'); ?>/images/ipad5.png">

                <img src="<?php bloginfo('template_directory'); ?>/images/app5.jpg" alt="" class="mt-4 mt-sm-0 width-100  max-w-100">
            </picture>
            <!--
                <div class="item1-hover" style="margin-bottom: 200px;margin-left: -150px">
                    <p>appointments via video chat or phone call</p>
                </div>-->
        </div>
    </div>

</div>
<!------------section12---------------------->
<div class="col-12 h-400 bg-size-cover-rotate bg-pos-y-rotate" id="section13" style="margin-top: 100px;height: 606px;padding: 0;width: 100%;background:url('<?php bloginfo('template_directory'); ?>/images/img10.png') center no-repeat">
    <div style="position: absolute;width: 100%;height: 100%;background-image:linear-gradient(rgba(10,9,9,0.4) 50%,rgba(255,255,255,0.1) 100%);">
        <div class="col-lg-11 mx-auto mt-5 mt-sm-0">
            <h2 class="lineheight-rotate">Wonder what the Fertilligence experience is like?</h2>
            <p class="mt-4 text-center col-lg-7 mx-auto">Welcome to your new fertility lifestyle! Watch the video to see how Fertilligence will support you on your journey.</p>
        </div>

        <a data-toggle="modal" data-target="#modalvideo">
            <div class="play-out play-icon-rotate">
                <div class="play-icon">
                      <img src="<?php bloginfo('template_directory'); ?>/images/playicon.svg" alt="" style="margin-left: 7px;">
                </div>
            </div>

        </a>
        <h6 class="watch">Watch the video</h6>




    </div>

</div>
<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close-video-rotate" data-dismiss="modal" aria-label="Close">
<!--                     <span aria-hidden="true">&times;</span> -->
					<img src="<?php bloginfo('template_directory'); ?>/images/close.png" >
                </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item autoplay-item" src="<?php bloginfo('template_directory'); ?>/videos/Fertilligence.mov" controls controlsList="nodownload" preload="none"></video>
                </div>
            </div>

        </div>
    </div>
</div>

<!------------section3(****d-none****)----------------------->
<div class="col-12 d-none" id="section6">
    <div class="col-6 mx-auto p-0" style="position:relative;background: url('<?php bloginfo('template_directory'); ?>/images/33.jpg');background-repeat: no-repeat;background-position-x: center!important;height: 800px;">
        <div class="phone-slide">
            <div id="carousel1" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="" class="center-block" style="width: 107px;height: 113px;margin-top: 100px;">
                    <h5 class="pt-5">weight</h5>
                    <p class="pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temp or
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="item">
                    <div class="col-6">
                        <h5>mood</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temp or
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-6">
                        <img src="" class="center-block">
                    </div>
                </div>
                <div class="item">
                    <img src="" class="center-block" style="width: 107px;height: 113px;margin-top: 100px;">
                    <h5 class="pt-5">exercise</h5>
                    <p class="pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temp or
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="item">
                    <img src="" class="center-block" style="width: 107px;height: 113px;margin-top: 100px;">
                    <h5 class="pt-5">sleep</h5>
                    <p class="pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temp or
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="item">
                    <img src="" class="center-block" style="width: 107px;height: 113px;margin-top: 100px;">
                    <h5 class="pt-5">ovulation</h5>
                    <p class="pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temp or
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <img src="" class="center-block">

    </div>
</div>
<!------------section4----------------------->
<div id="section4" style="background: url('<?php bloginfo('template_directory'); ?>/images/coachbg2.png') center no-repeat">
	  <div class="mx-auto col-11 col-sm-10 dash2" style="margin-top: 100px">
        <p class="mx-auto text-center m-0">
            "Do you know that some diets are more fertility-friendly than others? Mediterranean is a good example of a friendly diet. We will help you to design yours."<br>
            <span class="pink-color"> - Your Fertilligence Team </span>
        </p>
    </div>
    <h2 class="title text-center col-10 col-sm-12 mx-auto" style="margin-top:100px">Meet Your Personal Fertility Coach</h2>
    <p class="title-p col-9 mx-auto text-center">Central to the Fertilligence experience is direct, 1:1 private coaching and support from our dedicated fertility coaches. This isn't one-size-fits all conception counseling. This is personalized support, advice and planning designed exclusively for you and your unique journey. Get to know some of our coaches and their inspiring stories.
    </p>
    <div class="col-10 mx-auto d-lg-flex p-0 mt-5 coach-dir">
        <!--                <div class="col-9 mx-auto mt-5 coach">
                    <div class="d-flex">
                        <div class="col-3 pr-0">
                            <img src="
        <?php /*bloginfo('template_directory'); */ ?>/images/coach1.png" alt="">
                        </div>
                        <div class="col-9 pl-0">
                            <h3>Coach Kela</h3>
                            <h6 class="col-8 p-0">Certified Holistic Health & Wellness Coach, Fitness Trainer And Wellness Educator</h6>
                            <p class="title-p">The author of “The Complete Hormone Puzzle Cookbook” and “The Hormone Puzzle Method” for solving infertility, Kela helps her clients learn how to cycle sync so they have pleasant periods, boosted fertility, happy hormones, hotter sex lives, and greater creativity, productivity, and wellbeing at work.</p>
                        </div>
                    </div>
                    <a >
                        <div class="button1 ml-4 mt-3">
                            <p>Inspiring story</p>
                        </div>
                    </a>

                </div>
                <div class="col-9 mx-auto mt-5 coach">
                    <div class="d-flex">
                        <div class="col-3 pr-0">
                            <img src="
        <?php /*bloginfo('template_directory'); */ ?>/images/coach2.png" alt="">
                        </div>
                        <div class="col-9 pl-0">
                            <h3>Coach Aumatma</h3>
                            <h6 class="col-8 p-0">Masters In Nutrition, Doctor Of Naturopathic Medicine, Holistic Fertility Specialist</h6>
                            <p class="title-p">The author of “Fertility Secrets: What Your Doctor Didn’t Tell You About Baby-Making”, Aumatma works with client with diagnosed and unexplained infertility, miscarriages, optimizing health for egg transfer, hormonal issues. In her 10 years of practice, she has created an integrative and holistic approach for getting to the root of the inability to conceive and how to resolve it in a holistic way.</p>
                        </div>
                    </div>
                    <a >
                        <div class="button1 ml-4 mt-3">
                            <p>Inspiring story</p>
                        </div>
                    </a>

                </div>-->
        <div class="col-lg-5 coach mt-5 mt-sm-0">
            <div id="cover0" class="coach-cover d-none">
                <a class="closebtn3">
                    <img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
                </a>
                <div>
                    <h5 class="pink-color">Coach Aumatma :</h5>
                    <p>“First, we want to help you understand what is blocking your fertility. Then, we coach you on lifestyle recommendations to help improve your fertility so that you can get pregnant faster and easier! I have worked with a 44 year old client whose doctor was able to retrieve 23 eggs and achieve 15 healthy embryos. At that age, most doctors expect 2-3 embryos, not 15. The lifestyle you live, and the hormonal balance you achieve can potentially help you get pregnant faster.”</p>
                </div>
            </div>
            <div id="cover1" class="coach-cover d-none">
                <a class="closebtn3">
                    <img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
                </a>
                <div>
                    <h5 class="pink-color">Coach Sonia :</h5>
                    <p>
                        “Every success case is beautiful and unique, but my most special successful case is my very first one. In 2010, a yoga client reached out to me, asking for help. She was 40 years old and was diagnosed with infertility: she was devastated. Her AMH was undetectable and her FSH was through the roof. Her words “you’re the only person I trust” changed my life. I dove into studying everything I could find around Fertility and Women’s Health. I designed a nutrition and integrative lifestyle plan for her. Her hormones balanced, her heath improved dramatically…. and, 6 months later, she got pregnant. Believing in yourself is the first secret to success. With the right guidance and support, you will create an optimum environment to welcome a new life inside you.”
                    </p>
                </div>
            </div>
            <div id="cover2" class="coach-cover d-none">
                <a class="closebtn3">
                    <img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
                </a>
                <div>
                    <h5 class="pink-color">Coach Kela :</h5>
                    <p>
                        “I worked with a woman who hadn’t had her period in years, had PCOS, and was struggling with infertility. We began changing small things in her life, such as her diet, began cycle syncing to balance her hormones, and implemented a new exercise program. In about 2 months her period came back. In 3 months she was losing weight and her PCOS symptoms were beginning to disappear. And in 5 months she was pregnant. It is an amazing story. You can do this! It doesn’t matter what form of infertility or hormone issue you are struggling with. You can improve your chances of getting pregnant naturally by implementing the steps you find on this platform. The first step is believing you can and trusting your body. You got this!“
                    </p>
                </div>
            </div>
            <div id="carousel3" class="owl-carousel owl-theme">
                <div class="item coach-items" data-id="0">
                    <div>
                        <div class="d-lg-flex">
									<picture>
										<source media="(max-width:414px )" srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset1.png">
						<img src="<?php bloginfo('template_directory'); ?>/images/coach2.png" alt="" class="width-100" width="131" height="151">
									</picture>
                            <div class="p-3">
                                <h3 class="pink-color">Coach Aumatma</h3>
                                <h6>Masters In Nutrition, Doctor Of Naturopathic Medicine, Holistic Fertility Specialist</h6>
                            </div>
                        </div>
                        <div>
                            <p class="title-p">The author of “Fertility Secrets: What Your Doctor Didn’t Tell You About Baby-Making”, Aumatma works with client with diagnosed and unexplained infertility, miscarriages, optimizing health for egg transfer, hormonal issues. In her 10 years of practice, she has created an integrative and holistic approach for getting to the root of the inability to conceive and how to resolve it in a holistic way.</p>
                        </div>
                    </div>

                </div>
                <div class="item coach-items" data-id="1">
                    <div>
                        <div class="d-lg-flex">
                            									<picture>
										<source media="(max-width:414px )" srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset2.png">
										<img src="<?php bloginfo('template_directory'); ?>/images/coach4.png" alt="" class="width-100" width="140" height="158">
									</picture>
                            <div class="p-3">
                                <h3 class="pink-color">Coach Sonia</h3>
                                <h6>Certified Holistic Health Coach, Certified Yoga Teacher, Wellness Educator</h6>
                            </div>
                        </div>
                        <div>
                            <p class="title-p">A mother of three who personally overcame all sorts of fertility challenges. Through her 10 years of experience, Sonia has helped women with unexplained infertility, polycystic ovary syndrome (PCOS), bad quality eggs, endometriosis, fallopian tube disorder, hormonal imbalances… and today many of them are enjoying a new life as a mom.</p>
                        </div>
                    </div>

                </div>
                <div class="item coach-items" data-id="2">
                    <div>
                        <div class="d-lg-flex">
                            									<picture>
										<source media="(max-width:414px )" srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset3.png">
										<img src="<?php bloginfo('template_directory'); ?>/images/coach5.png" alt="" class="width-100" width="131" height="148">
									</picture>
                            <div class="p-3">
                                <h3 class="pink-color">Coach Kela</h3>
                                <h6>Certified Holistic Health & Wellness Coach, Fitness Trainer And Wellness Educator</h6>
                            </div>
                        </div>
                        <div>
                            <p class="title-p">The author of “The Complete Hormone Puzzle Cookbook” and “The Hormone Puzzle Method” for solving infertility, Kela helps her clients learn how to cycle sync so they have pleasant periods, boosted fertility, happy hormones, hotter sex lives, and greater creativity, productivity, and wellbeing at work.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
                <a class="story">
                    <div>
                        <p class="pink-color coach-arrow">Inspiring story</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-7 mt-3 mt-md-0 d-none d-sm-block" style="background: url('<?php bloginfo('template_directory'); ?>/images/coachbg.png') right no-repeat">
            <div class="coach2 col-lg-8 d-flex mx-auto justify-content-center mt-md-4 mt-lg-0">
                <p class="pey-coach">24/7 Messaging</p>
            </div>
            <div class="d-flex justify-content-end mt-4 mt-lg-0">
                <img src="<?php bloginfo('template_directory'); ?>/images/coach01.svg" alt="">
            </div>
            <div class="d-flex justify-content-end mt-5">
                <div class="coach2 col-lg-8 d-flex justify-content-center" style="border-radius: 40px 40px 40px 0px;">
                    <p class="pey-coach">1:1 Phone and video sessions</p>
                </div>
            </div>
            <div class="d-flex col-5 justify-content-center mt-4 mt-lg-0">
                <img src="<?php bloginfo('template_directory'); ?>/images/coach02.svg" alt="">
            </div>
            <div class="coach2 col-lg-8 d-flex mx-auto justify-content-center mt-5">
                <p class="pey-coach">Live group and prerecorded classes</p>
            </div>
            <div class="d-flex justify-content-end mt-4 mt-lg-0">
                <img src="<?php bloginfo('template_directory'); ?>/images/coach03.svg" alt="">
            </div>
        </div>

    </div>

    <div class="mx-auto col-11 col-sm-10 dash2" style="margin-top: 80px">
        <p class="text-center">
            "Women with higher stress levels took 29% longer to get pregnant compared to those who had less.<br>
            Let us help you take unnecessary stress away."<br>
            <span class="pink-color"> - Your Fertilligence Team </span>
        </p>
    </div>
</div>
<!------------section10(****d-none****)---------------------->
<div class="col-12 d-none" id="section10" style="margin-top: 116px">
    <div class="col-9 d-flex mx-auto align-items-center p-0">
        <div class="col-8 p-0">
            <h4 class="title">Are you a health care provider</h4>
            <h5 class="title-p col-8 p-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy</h5>
            <a>
                <div class="button1 mt-3">
                    <p>Contact us</p>
                </div>
            </a>
        </div>
        <div class="col-4 p-0">
            <img src="<?php bloginfo('template_directory'); ?>/images/care.png" alt="" class="img-fluid">
        </div>

    </div>
</div>
<!-----------------section14----------------->
<div class="col-12" id="section14" style="margin-top: 100px">

    <div class="col-lg-10 mx-auto p-0 d-none display-packages-button">
        <h4 class="title mt-5 ml text-center-mob">Is Fertilligence Right For You?</h4>
    </div>

    <div class="col-10 d-flex mx-auto align-items-center p-0 quiz">
        <div class="col-lg-8 p-0" style="background: url('<?php bloginfo('template_directory'); ?>/images/quizbg.png') no-repeat">
            <div class="col-lg-9 p-0 pt-0 pt-lg-4">
				<h4 class="title mt-5 ml display-none text-center-mob">Is Fertilligence Right For You?</h4>
                <p class="title-p mt-3">
					Everyone is unique—we get that. That's why our approach considers simple, powerful lifestyle modifications to improve your well-being and improve your chances of conceiving naturally.
				</p>
                <p class="title-p mt-3">Take our 2 - minute quiz to learn more about the lifestyle factors impacting conception and get your own Fertilligence<sup><small>TM</small></sup> Lifestyle Profile explained by our fertility coaches.</p>
            </div>
            <a href="quiz/" class="btn p-0 mt-5 mt-sm-3 button-center">
                <div class="button3 btn5">
                    <p>Take The Quiz</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 p-0">
            <picture>
                <source media="(max-width:414px )" srcset="<?php bloginfo('template_directory'); ?>/images/Group%2020219mobile.png">
                <img src="<?php bloginfo('template_directory'); ?>/images/Group%2020219.png" alt="" class="img-fluid wh-auto">
            </picture>
        </div>
    </div>
    <div class="col-lg-10 mx-auto text-center dash1" style="margin-top: 80px">
        <p class="mx-auto">"Do you know that the average cost of IVF cycle in the US is around $20,000 when account for all
            procedures, lab work, doctor visits and medications? Modern lifestyle-first approach could be an affordable alternative."
            <p class="blue-color m-0">- Your Fertilligence Team</p>
    </div>


</div>
<!------------section7----------------------->
<h1 class="text-center title" style="margin-bottom: 25px;margin-top: 80px">Choose The Fertilligence Package That's Right For You</h1>
<p class="title-p col-sm-8 col-10 p-0 mx-auto text-center" style="margin-bottom: 80px;">With three unique packages, start with the level of support that feels right for you.<br>You can always change it at the end of your month.</p>
<div class="col-10 d-none mx-auto display-packages-button p-0" id="section6">

    <div class="d-flex align-items-center shop mb-5">
        <img src="<?php bloginfo('template_directory'); ?>/images/shop.png" alt="">
        <h5 class="pink-color"><?=get_option('nxm_OngoingDiscount')?></h5>
    </div>

    <div class="col-lg-4 d-flex text-center mb-5">
        <div class="packages2-items" style="height: 213px">
            <div>
                <div class="packages2-type">
                    <h4 class="packages-font">Starter</h4>
                </div>
                <div class="d-flex justify-content-between packages2-off">
                    <h6>$<?=get_option('nxm_StarterRegularPrice')?></h6>
                    <div class="packages2-type">
                        <h4>$<?=get_option('nxm_StarterSalePrice')?></h4>
                    </div>
                </div>
                <a href="" data-toggle="modal" data-target="#modal1" class="learn-more">
                    <h5 class="pink-color text-center chevron-right">Learn More</h5>
                </a>
                <!--modal-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title packages-font" id="exampleModalLongTitle">Starter</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--                                     <span aria-hidden="true">&times;</span> -->
									<img src="<?php bloginfo('template_directory'); ?>/images/close.png" >
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                                    <div>
                                        <h6>$<?=get_option('nxm_StarterRegularPrice')?></h6>
                                    </div>
                                    <div class="packages2-type">
                                        <h4>$<?=get_option('nxm_StarterSalePrice')?></h4>
                                    </div>
                                </div>
                                <ul>
                                    <li><b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                                    <li><b>Included</b> Access to Supplements and Test Kits</li>
                                    <li><b>2</b> Live Monthly Nutrition Classes</li>
<!--                                     <li><b>2</b> Live Lifestyle Modification Classes</li> -->
                                    <li><b>2</b> Live Monthly Lifestyle Classes</li>
                                    <li><b>2</b> Live Monthly Fitness Classes</li>
                                    <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                                    <li style="border-bottom: none"><b>1 x 20</b> min Live 1:1 Sessions with Your Fertility Coach</li>
                                    <li><span class="pink-color">Bring your partner along</span></li>
                                </ul>
                            </div>
                            <a href="care-qualifier/" class="packages2-button">
                                <div class="btn packages2-button-style" style="margin-bottom: -25px">
                                    <p class="button-p m-0">Join Now</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <a href="care-qualifier/" class="packages2-button">
                <div class="btn packages2-button-style">
                    <p class="button-p m-0">Join Now</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 d-flex text-center mb-5">
        <div class="rec-mobile col-11">
            <h3>*Recommended for new members*</h3>
        </div>
        <div class="packages2-items" style="height: 213px;margin-top: 60px">
            <div>
                <div class="packages2-type">
                    <h4 class="packages-font">Care</h4>

                </div>
                <div class="d-flex justify-content-between packages2-off">
                    <h6>$<?=get_option('nxm_CareRegularPrice')?></h6>
                    <div class="packages2-type">
                        <h4>$<?=get_option('nxm_CareSalePrice')?></h4>
                    </div>
                </div>
                <a href="" data-toggle="modal" data-target="#modal2"  class="learn-more">
                    <h5 class="pink-color text-center chevron-right">Learn More</h5>
                </a>
                <!--modal-->
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border-radius: 0 0 30px 30px;">

                            <div class="rec-mobile" style="margin-top: -60px;">
                                <h3>*Recommended for new members*</h3>
                            </div>


                            <div class="modal-header">
                                <h5 class="modal-title packages-font" id="exampleModalLongTitle">Care</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--                                     <span aria-hidden="true">&times;</span> -->
									<img src="<?php bloginfo('template_directory'); ?>/images/close.png" >
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                                    <div>
                                        <h6>$<?=get_option('nxm_CareRegularPrice')?></h6>
                                    </div>
                                    <div class="packages2-type">
                                        <h4>$<?=get_option('nxm_CareSalePrice')?></h4>
                                    </div>
                                </div>
                                <ul>
                                    <li><b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                                    <li><b>Included</b> Access to Supplements and Test Kits</li>
                                    <li><b>2</b> Live Monthly Nutrition Classes</li>
                                    <li><b>2</b> Live Monthly Lifestyle Classes</li>
                                    <li><b>2</b> Live Monthly Fitness Classes</li>
                                    <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                                    <li style="border-bottom: none"><b>2 x 20 min</b> Live 1:1 Sessions with Your Fertility Coach</li>
                                    <li><span class="pink-color">Bring your partner along</span></li>
                                    <li><b>1 x 15 min</b> Live 1:1 Sessions with a Nutritionist</li>
                                   
                                </ul>
                            </div>
                            <a href="care-qualifier/" class="packages2-button">
                                <div class="btn packages2-button-style" style="margin-bottom: -25px">
                                    <p class="button-p m-0">Join Now</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <a href="care-qualifier/" class="packages2-button">
                <div class="btn packages2-button-style">
                    <p class="button-p m-0">Join Now</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 d-flex text-center mb-5">
        <div class="packages2-items" style="height: 213px">
            <div>
                <div class="packages2-type">
                    <h4 class="packages-font">Care +</h4>
                </div>
                <div class="d-flex justify-content-between packages2-off">
                    <h6>$<?=get_option('nxm_CarePlusRegularPrice')?></h6>
                    <div class="packages2-type">
                        <h4>$<?=get_option('nxm_CarePlusSalePrice')?></h4>
                    </div>
                </div>
                <a href="" data-toggle="modal" data-target="#modal3" class="learn-more">
                    <h5 class="pink-color text-center chevron-right">Learn More</h5>
                </a>

                <!--modal-->
                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title packages-font" id="exampleModalLongTitle">Care +</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<!--                                     <span aria-hidden="true">&times;</span> -->
									<img src="<?php bloginfo('template_directory'); ?>/images/close.png" >
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                                    <div>
                                        <h6>$<?=get_option('nxm_CarePlusRegularPrice')?></h6>
                                    </div>
                                    <div class="packages2-type">
                                        <h4>$<?=get_option('nxm_CarePlusSalePrice')?></h4>
                                    </div>
                                </div>
                                <ul>
                                    <li><b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                                    <li><b>Included</b> Access to Supplements and Test Kits</li>
                                    <li><b>2</b> Live Monthly Nutrition Classes</li>
                                    <li><b>2</b> Live Monthly Lifestyle Classes</li>
                                    <li><b>4</b> Live Monthly Fitness Classes</li>
                                    <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                                    <li style="border-bottom: none"><b>2 x 45 min</b> Live 1:1 Sessions with Your Fertility Coach</li>
                                    <li><span class="pink-color">Bring your partner along</span></li>
                                    <li><b>1 x 15 min</b> Live 1:1 Sessions with a Nutritionist</li>
                                </ul>
                            </div>
                            <a href="care-qualifier/" class="packages2-button">
                                <div class="btn packages2-button-style" style="margin-bottom: -25px">
                                    <p class="button-p m-0">Join Now</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>




            </div>

            <a href="care-qualifier/" class="packages2-button">
                <div class="btn packages2-button-style">
                    <p class="button-p m-0">Join Now</p>
                </div>
            </a>




        </div>
    </div>

    <p class="text-center" style="font-weight: 500;font-size: 20px">Fertilligence coaches are available for same day and next day appointments. Why wait?</p>

</div>
<div class="col-10 mx-auto p-0 display-none" id="section12">
    <table class="table table-bordered" style="">
        <thead>
            <tr>
                <th class="pink-color text-left p-2">
                    <img class="table-img-d-none" src="<?php bloginfo('template_directory'); ?>/images/table-icon.svg" alt="" class="m-2">
                    <?=get_option('nxm_OngoingDiscount')?>
                </th>
                <th>Starter</th>

                <th style="position: relative">
                    <div class="care">
                        <h6 class="fs-11 lh-14">*Recommended for new<br class="d-block d-lg-none"> members*</h6>
                    </div>
                    Care
                </th>
                <th>Care +</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Monthly Membership</td>
                <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?=get_option('nxm_StarterRegularPrice')?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?=get_option('nxm_StarterSalePrice')?></span></td>
                <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?=get_option('nxm_CareRegularPrice')?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?=get_option('nxm_CareSalePrice')?></span></td>
                <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?=get_option('nxm_CarePlusRegularPrice')?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?=get_option('nxm_CarePlusSalePrice')?></span></td>
            </tr>
            <tr>
                <td>Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</td>
                <td>Unlimited</td>
                <td>Unlimited</td>
                <td>Unlimited</td>
            </tr>
            <tr>
                <td>Access to Supplements and Test Kits</td>
                <td>Included</td>
                <td>Included</td>
                <td>Included</td>
            </tr>
            <tr>
                <td>Live Monthly Nutrition Classes</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Live Monthly Lifestyle Classes</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Live Monthly Fitness Classes</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr>
                <td>24/7 Messaging with Fertility Coaches & Nutritionists</td>
                <td>Unlimited</td>
                <td>Unlimited</td>
                <td>Unlimited</td>
            </tr>
            <tr>
                <td>Live 1:1 Sessions with Your Fertility Coach<br>
                    <span class="pink-color">Bring your partner along</span>
                </td>
                <td>1 x 20 min</td>
                <td>2 x 20 min</td>
                <td>2 x 45 min</td>
            </tr>
            <tr>
                <td>Live 1:1 Sessions with a Nutritionist
                </td>
                <td>-------</td>
                <td>1 x 15 min</td>
                <td>1 x 15 min</td>
            </tr>
            <tr>
                <td></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/"><b class="awesome">Join Now&nbsp&nbsp</b></a></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/"><b class="awesome">Join Now&nbsp&nbsp</b></a></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/"><b class="awesome">Join Now&nbsp&nbsp</b></a></td>
            </tr>
        </tbody>
    </table>
    <p class="text-center">Fertilligence coaches are available for same day and next day appointments. Why wait?</p>
</div>
<!------------------section8----------------->
<div class="col-12" id="section8" style="margin-top: 80px;background: url('<?php bloginfo('template_directory'); ?>/images/fitbg.png') no-repeat">
    <p class="title text-center">Got Questions? We’ve Got Answers?</p>

    <div class="col-lg-8 mt-5 d-lg-flex d-sm-flex justify-content-between mx-auto align-items-center p-0 h-fit" style="height: 330px">
        <div class="col-lg-5">
            <div class="fit" style="">
                <div class="section1-cards mx-auto p-3">
                    <img src="<?php bloginfo('template_directory'); ?>/images/Group%2020299.svg" alt="" class="center-block">
                    <h5 class="pt-4">Chat LIVE with our expert</h5>
                </div>
            </div>
            <a target="_blank" href="https://go.crisp.chat/chat/embed/?website_id=2e8e0603-a205-4b14-a8c1-539a01cf965e" id="crisp" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
                <div class="button3 btn5" style="width: 177px;height: 50px">
                    <p id="closechat" class="text-center">Chat Now</p>
                </div>
            </a>
        </div>
        <div class="col-lg-5">
            <div class="fit mt-50" style="    margin-top: 150px;">
                <div class="section1-cards mx-auto p-3">
                    <img src="<?php bloginfo('template_directory'); ?>/images/Group%2020300.svg" alt="" class="center-block">
                    <h5 class="pt-2">Browse frequently asked questions</h5>
                </div>
            </div>
            <a href="faq/" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
                <div class="button3 learnmore" style="width: 177px;height: 50px;background-color: #94DAEC;box-shadow: 0 8px 35px rgba(148,218,236,0.4);">
                    <p class="text-center">Learn More</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!------------section7----------------------->
<!-- <div class="col-12" id="section7">
        <div class="col-10 d-flex mx-auto align-items-center justify-content-center text-center"  style="background: url('<?php /*bloginfo('template_directory'); */ ?>/images/quizbackground.png') center no-repeat">
            <div class="col-9">
            <h4 class="title">Quiz</h4>
            <h5 class="title-p">Take our short quiz to find out if Fertiligence could be a effective solution to
                your condition</h5>
            <a href="http://ftgnew.wpengine.com/quiz/" class="btn button-title awesome">
                Take Your Quiz<i class="fas fa-arrow-right"></i>
            </a>
            </div>
        </div>
    </div>-->
<!------------section9(****d-none***)----------------------->
<div class="col-12 text-center d-none" id="section9">
    <h3>Our Advisory Board</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
    <div class="col-5 mx-auto align-items-center text-center" style="height: 238px;border-radius: 15px">
        <div id="carousel2" class="owl-carousel owl-theme">
            <div class="item">
                <div class="mt-5" style="width: 100%;height: 200px;box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.09);border: 1px solid rgba(238,238,238,0.6)">
                    <div class="d-flex justify-content-center">
                        <div class="team-icon" style="background: url('<?php bloginfo('template_directory'); ?>/images/icon1.png') center no-repeat;background-size: contain"></div>
                    </div>
                    <div class="mt-5">
                        <p>Chairman and Founder of Eco Fusion, Chairman
                            and Co-Founder of Medivizor</p>
                        <p>Oren Fuerst Phd</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <h4>2</h4>
            </div>
            <div class="item">
                <h4>3</h4>
            </div>
            <div class="item">
                <h4>4</h4>
            </div>
            <div class="item">
                <h4>5</h4>
            </div>
            <div class="item">
                <h4>6</h4>
            </div>
            <div class="item">
                <h4>7</h4>
            </div>
            <div class="item">
                <h4>8</h4>
            </div>
        </div>
		
    </div>
</div>
<!----------------section11------------------>
<div id="section11" class="bg-contain-rotate bg-contain col-12  mx-auto  align-content-center p-0" style="background: url('<?php bloginfo('template_directory'); ?>/images/babybg.png') top no-repeat;">
    <div class="bg-contain-rotate bg-contain bg-pos-top" style="background:url('<?php bloginfo('template_directory'); ?>/images/babybg2.png') no-repeat;width: 100%;height: 100%;position: absolute"></div>
    <div class="d-lg-flex d-sm-flex" style="padding-top: 150px">
        <div id="bab-img" class="col-lg-6 mw-100">
            <img src="<?php bloginfo('template_directory'); ?>/images/baby.png" alt="" class="mw-100" style="max-height: 80%;margin-left: 150px;">
        </div>
        <div class="col-lg-6  d-flex align-items-center justify-content-center">
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" alt="" class="mw-100 display-none">
                <p class="text-left">
                    Your Health.<br>
                    Your Body.<br>
                    Your Baby.<br>
                    <b><span class="pink-color">Don't just Try.<br>
                        Be Fertilligent.</span></b>
						</p>
            </div>
        </div>
    </div>
</div>










<?php get_footer(); ?>