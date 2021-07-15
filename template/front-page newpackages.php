<?php

// $abTestCounter = intval(get_option('abtest'));
// $abTestCounter=$abTestCounter+1;
// update_option( 'abtest', $abTestCounter );
// if (fmod($abTestCounter, 2)==1){
//     //echo $abTestCounter;
//     exit( wp_redirect("https://fertilligence.com/home2/"));
// }

/**
 * Template Name: Homenewpackages
 * Template Post Type: post, page
 */
get_header();
function testimonialItemBox($name,$description){
	$url = get_template_directory_uri()."/images/testibg.png";

	$box='	<div class="item" style="background-image:url('.$url.');">
					<div class="d-flex">
						<svg xmlns="http://www.w3.org/2000/svg" width="17.405" height="15.347" viewBox="0 0 17.405 15.347">
							<g id="Group_1" data-name="Group 1" transform="translate(-157 -198.458)">
								<g id="left-quote" transform="translate(157 191.13)">
									<path id="Path_89701" data-name="Path 89701" d="M6.992,10.376a.837.837,0,0,0,.421-1.123L6.725,7.806A.839.839,0,0,0,5.63,7.4,9.673,9.673,0,0,0,2.6,9.365,7.336,7.336,0,0,0,.562,12.58,17.634,17.634,0,0,0,0,17.522v4.31a.845.845,0,0,0,.842.842H6.36a.845.845,0,0,0,.842-.842V16.315a.845.845,0,0,0-.842-.842H3.721A5.92,5.92,0,0,1,4.7,12.06,5.337,5.337,0,0,1,6.992,10.376Z" fill="#ed0f68"/>
									<path id="Path_89702" data-name="Path 89702" d="M77.678,10.462A.837.837,0,0,0,78.1,9.339l-.688-1.432a.839.839,0,0,0-1.1-.407A10.171,10.171,0,0,0,73.3,9.451a7.493,7.493,0,0,0-2.05,3.229,17.4,17.4,0,0,0-.547,4.928v4.31a.845.845,0,0,0,.842.842H77.06a.845.845,0,0,0,.842-.842V16.4a.845.845,0,0,0-.842-.842H74.407a5.921,5.921,0,0,1,.983-3.412A5.336,5.336,0,0,1,77.678,10.462Z" transform="translate(-60.773 -0.086)" fill="#ed0f68"/>
								</g>
							</g>
						</svg>
						<h6 class="pink-color pl-2" style="font-size:22px">
							'.$name.'
						</h6>

					</div>
					<p style="font-size:17px">
						“'.$description.'” 
					</p>

				</div>';
	return $box;
}


?>
<style>
	/* 	.owltesti .owl-stage-outer{
	min-height: 350px;
	min-width: 1080px;

	} */

	.owltesti .item{
		margin:10px;
		box-shadow:0 6px 11px rgba(0,0,0,0.1);
		background-repeat:no-repeat!important;
		padding:25px;
		background-position: bottom right;
		min-height:315px;
		border:1px solid #F5F5F5;
		border-radius:30px;
		/* 		box-shadow:0 15px 35px #000000; */
		background-position-y: 160px;
		background-position-x: 365px;
	}
	.owltesti .owl-dots{
		margin-top:10px;
	}
	.owltesti .owl-dots .owl-dot:focus{
		outline:none!important
	}
	.owltesti .owl-dots .owl-dot:hover span{
		background-color:#1098D6!important
	}
	.owltesti .owl-dots .owl-dot span{
		border:1px solid #1098D6;
		background-color:#fff;
	}
	.owltesti .owl-dots .active span{
		background-color:#1098D6!important;
		width:24px;
		/* 		height:12px; */
	}

	.sacoach h3{
		font-size: 20px;
		line-height: 41px;
	}
	.sacoach h6{
		font-size: 17px;
		line-height: 30px;
		color: #1098D6;
	}
	.sacoach p{
		margin: 0;
		padding: 10px;
		color: #000;		
	}

	/*#carouselpackages .item {*/
	/*    height: 870px!important;*/
	/*}*/

	/*         .packages2-button {
	bottom: 1.5%!important;
	} */

	mark{
		background-color:#94DAEC;
	}

	@keyframes arrow {
		from {
			top: -180px;
		}
		to {
			top: -183px;
		}
	}

	
/*  	@media only screen and (min-width:500px) and (max-width:1000px){
		.bg-center{
			background-size:contain!important	
		}
 		#header{
			height:386px!important;
			background-size:contain!important	
		}
		.hero{
			font-size:24px;
			margin-top:60px!important
		}
		.hero + h4{
			font-size:30px;
		}  
	}  */
	
	
	@media only screen and (max-width: 1000px) {
		#section5{
			max-width:440px;
			margin:auto;
		}
		#s1,#s2,#s3{
			width:100%!important
		}
		
		
		
		
		
		
		
		
		
		
		.whySection{
			width:100%;
		}
		.nbe-flex-wrap {
			flex-wrap: wrap;
		}

		#section2 .section1-cards.mx-auto.p-3 {
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
			z-index: -1;
		}

		.card-body-mobile {
			margin-bottom: 50px;
		}

		.blue-bg {
			background-color: #94DAEC !important;
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

		.home svg.Layer_1 {
			left: -207px;
			animation-name: bcfhdf;
			animation-direction: alternate;
			animation-iteration-count: infinite;
			animation-duration: .4s;
			animation-timing-function: linear;
			fill: #ed1068;
		}

		.home .whySection:nth-child(2n) svg.Layer_1 {
			left: 217px;
		}

		.blue-bg-svg path {
			fill: #94daec;
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

		.whySection .button4 {
			width: 100% !important;
			height: 100% !important;
			opacity: 0;
		}

		.section1-card:hover > .section1-cards h5 {
			color: #000000 !important;
		}

		.section1-card:hover > .section1-cards {
			background-color: unset;
			height: 100%;
			color: black !important;
			box-shadow: 18px 18px 45px rgba(0, 0, 0, 0.1);
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

	@media only screen and (max-width: 365px) {
		.section1-card h5 {
			width: 180px !important;
			margin-top: -10px !important;
		}

		svg.Layer_1 {
			top: -155px;
		}


	}
	@media only screen and (max-width: 425px) {
		.nbe-tab-content-whole {
            max-width: 342px;
            margin: 0 auto;
            padding-top: 80px;
        }
		.mainPagePackage{
/* 			max-width: 342px; */
			max-width: 350px;
			margin: -150px auto 0 auto;
			padding-top: 46px;
		}    

		.owltesti .item{
			min-height:400px;
			background-position-x: 150px;
			background-position-y: 240px;


		}	
		.showOnDesktopTestimonials{
			display:none!important;
		}		
	}
	@media only screen and (min-width: 426px) {
		.showOnMobileTestimonials{
			display:none!important;
		}
		
	}
	

</style>


<!-- Modal -->
<div class="modal fade" id="automodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style="min-height:289px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="<?php bloginfo('template_directory'); ?>/images/close.png" class="img-fer"
						 data-imghover="closeb.svg" data-imgnonhover="close.png">
				</button>
			</div>
			<div class="modal-body text-center">
				<h4 id="thankyou" style="font-size:25px;line-height:41px;color:#1098D6;font-weight:400">Not sure
					what Fertilligence is about? </h4>
				<!--                     <p class="text-center" id="join">Join now and get 25% off your first month<br>PLUS 50% off your second month.</p>
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

</form>-->
				<p class="col-12" style="font-size:20px;line-height:35px;color:#0A0909;margin-top:23px">
					Start with our quiz to see if Fertilligence can help you get pregnant faster naturally!
				</p>
				<a href="quiz/" class="btn p-0 mt-5 mt-sm-3 button-center">
					<div class="button3 btn5" style="height:56px">
						<p>Take The Quiz</p>
					</div>
				</a>

			</div>

		</div>
	</div>
</div>


<!--------------hero=------------------------>
<div id="header" class="mx-auto h-590"
	 style="height: 730px;background: url('<?php bloginfo('template_directory'); ?>/images/headerbackground.png') bottom no-repeat;">
	<div class="col-12 p-0" style="height: 100%">
		<div class="bg-center"
			 style="background: url('<?php bloginfo('template_directory'); ?>/images/hero.png') no-repeat;width: 100%;height: 100%;position: absolute">
			<div class="nbe-bg-hero">
				<div class="nbe-circle display-none"></div>
				<div class="nbe-square"></div>
				<div class="nbe-square2"></div>
			</div>
		</div>
		<div class="col-lg-10 display-flex mx-auto">
			<div class="col-lg-11 col-xl-9 text-center mx-auto">
				<h1 class="fs-25 hero mt-80">Looking to boost your pregnancy chances naturally with a personal fertility coach at a fraction of the cost of a doctor's visit?</h1>
				<h4 class="col-sm-11 mt-sm-2 mt-5 pt-5 fs-30 fs-45 padding-0 text-white mx-auto">Stop looking.<br
																												  class="d-block d-sm-none"> Be Fertilligent.</h4>
			</div>
		</div>
	</div>
</div>
<div class="col-12" id="slidernew"
	 style="background-image: url('https://fertilligence.com/wp-content/themes/FTG/images/Group 7563.png');background-repeat: no-repeat;">
	<div class="col-12 col-sm-10 mx-auto d-flex p-0" style="min-height:720px">
		<div class="col-4 d-none d-lg-flex" id="wrapper1"
			 style="background:url('<?php bloginfo('template_directory'); ?>/images/mobile-slider.png') center no-repeat;background-size: cover;">

			<div style="" id="wrapper2">

				<div class="owl-carousel owl-theme" id="carouselhero">
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider2.png" alt="">
					</div>
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/slider1.png" alt="">
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
			<div class="ml-0 text-center" style="position: absolute;bottom: -18%;right: 7%;font-size:17px"
				 id="sacaption">
				<p class="mb-0 ml-0 ml-lg-4 mobile-margin" style="margin-top:-100px">*Patent Pending*</p>
				<p class="mb-0 ml-0 ml-lg-4">*Available On iOS And Android Devices*</p>
			</div>
		</div>


		<div class="col-12 col-lg-8 pl-0 pl-sm-4 p-0" style="display: flex;align-items: center">
			<div>
				<h6 class="tac">
					FERTILLIGENCE IS YOUR GO-TO FOR EVERYTHING WHEN YOU ARE TRYING TO CONCEIVE
				</h6>
				<ul class="mt-4"
					style="list-style-image: url('<?php bloginfo('template_directory'); ?>/images/tick.png')">
					<li id="s1" class="sa">							
						One-on-one virtual <b>fertility coaching</b>
					</li>
					<li id="s2" class="sa">								
						<b>Single secure app</b>
					</li>                        
					<li id="s3" class="sa">								
						Personalized <b>meal planner</b> and recipes
					</li>
					<li id="s4" class="sa">								
						10x of fertility <b>lifestyle classes</b>
					</li>
					<li id="s5" class="sa">								
						100x of on-demand <b>strength, meditation, yoga workouts</b>
					</li>
					<li id="s6" class="sa">								
						<b>Live chat</b> with certified nutritionists
					</li>
					<li id="s7" class="sa">								
						Interactive mood, sleep, stress, nutrition <b>trackers</b>
					</li>
					<li id="s8" class="sa">								
						Personalized reproductive health <b>content</b>
					</li>
				</ul>
				<p class="mt-4 tac" style="font-weight: 700;font-size:17px">
					Boost your chances of conceiving naturally – and do it all with a single affordable app
				</p>

			</div>
		</div>

	</div>
</div>
<!---------takethequiz----------------------->

<div class="col-12 d-block d-sm-none p-0" style="margin-top:20px">
	<div class="fit" style="">
		<div class="section1-cards mx-auto p-3">
			<img src="<?php bloginfo('template_directory'); ?>/images/hero-quiz.png" alt="" class="center-block">
			<h5 class="ttq">Take A Short Quiz To Learn What Fertilligence Can Do For You</h5>
		</div>
	</div>
	<a href="quiz/" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
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
			<p class="mb-1 mb-sm-0 mt-3 mt-lg-4">Trying for a baby isn't always simple and can be a difficult and
				emotional experience. You might be tired of looking for answers, feel anxious, overwhelmed and
				excited all at the same time.</p>
			<p class="mb-5 mb-sm-0 mt-2">Whether you are trying to conceive naturally or already undergoing a
				medical treatment and need a trustful, knowledgeable partner to guide you, we will support you the
				whole way through.</p>
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
				evidence-based research with warmth and care of personalized coaching to prepare your mind and body
				for pregnancy, all in a single App.</p>
			<p class="mt-2">Leaning on expert medical insights and proven lifestyle modifications, we show you
				exactly what to do to improve your chances of getting pregnant.</p>
		</div>
		<div class="col-lg-4 m-zero d-md-none d-lg-block">
			<img class="max-width-100 tablet" src="<?php bloginfo('template_directory'); ?>/images/habits.jpg" width="344" height="450">


		</div>
	</div>
</div>

<!------------section2----------------------->
<div class="col-12 mt-5" id="section1">

	<h3 class="title text-center" style="margin-top: 80px;">Discover the Fertilligence Difference</h3>
	<div id="accordion1" class="h-fit col-lg-10 col-lg-12 col-xl-10 mx-auto mt-5 p-0" style="">
		<div class="d-sm-flex justify-content-between nbe-flex-wrap" style="min-height: 282px">
			<div class="whySection">
				<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512"
					 viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
					<path id="Down_Arrow_3_"
						  d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/>
				</svg>
				<div class="text-center button-out mb-5 mb-sm-0">
					<div class="section1-card" href="#collapseExample1" aria-expanded="true"
						 aria-controls="collapseExample1" role="button" data-toggle="collapse"
						 class="read  btn p-0 display-inlineflex">
						<div class="section1-cards mx-auto p-3">
							<img src="<?php bloginfo('template_directory'); ?>/images/Group%207574.svg" alt=""
								 class="center-block img-fer w-45" data-imghover="doctor-w.svg"
								 data-imgnonhover="Group%207574.svg">
							<h5>Expert-Backed</h5>
							<a href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1"
							   role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
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
						<p>We co-developed FertilligenceTM in close collaboration with <b>hundreds of women</b> and
							men experiencing challenges to conceive and healthcare professionals from <b>top
							academic medical centers</b> across the U.S. who saw a real gap in the existing
							fertility support model.
						</p>
						<p>We worked tirelessly to account for known <b>fertility related conditions</b> like PCOS,
							Endometriosis, POI, IVF, multiple miscarriages, improper ovulation, Low T, Erectyle
							Disfunction, semen abnormalities, prostate issues.</p>
						<p>We are well suited to support <b>your own fertility journey</b> or complement <b>the
							protocol provided by your healthcare professional</b>.
						</p>
					</div>
				</div>
			</div>
			<div class="whySection">
				<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512"
					 viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
					<path id="Down_Arrow_3_"
						  d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/>
				</svg>
				<div class="text-center button-out mb-5 mb-sm-0">
					<div class="section1-card" href="#collapseExample2" aria-expanded="true"
						 aria-controls="collapseExample2" role="button" data-toggle="collapse"
						 class="read d-none btn p-0 display-inlineflex">
						<div class="section1-cards mx-auto p-3">
							<img src="<?php bloginfo('template_directory'); ?>/images/Group%207575.svg" alt=""
								 class="center-block img-fer w-45" data-imghover="health-w.svg"
								 data-imgnonhover="Group%207575.svg">
							<h5>Evidence-Based Lifestyle Recommendations</h5>
							<a href="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2"
							   role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
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
						<p>Our recommendations are based <b>on rigorous up-to-date research</b> of clinical studies
							and publications by top industry experts.</p>
						<p><b>We will help you integrate new lifestyle choices</b> into your everyday routines to
							improve your overall health and chances for conception.</p>
						<p><b>You will be empowered to embrace a healthier lifestyle</b>, including:</p>
						<p>- Maintaining a healthy <b>weight</b>,<br>
							- Optimizing <b>nutrition</b>,<br>
							- Choosing an appropriate <b>exercise program</b>,<br>
							- Improving the quality and length of <b>sleep</b>,<br>
							- Eliminating fertility-damaging toxins from <b>environment</b>,<br>
							- Managing the <b>emotional roller</b> coaster of the fertility journey,<br>
							- Reducing <b>stress</b> level,<br>
							- Strengthening <b>connection with your partner</b>,<br>
							- Identifying suitable <b>vitamins and minerals</b> based on existing scientific
							evidence,<br>
							- Maintaining <b>hydration</b> level,<br>
							- Tracking <b>ovulation</b> and <b>sperm</b> with convenient at-home test kits.<br>
						</p>


					</div>
				</div>
			</div>
			<div class="whySection">
				<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512"
					 viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
					<path id="Down_Arrow_3_"
						  d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/>
				</svg>
				<div class="text-center button-out mb-5 mb-sm-0">
					<div class="section1-card" href="#collapseExample3" aria-expanded="true"
						 aria-controls="collapseExample3" role="button" data-toggle="collapse"
						 class="read d-none btn p-0 display-inlineflex">
						<div class="section1-cards mx-auto p-3">
							<img src="<?php bloginfo('template_directory'); ?>/images/support.svg" alt=""
								 class="center-block img-fer w-45" data-imghover="support-w.svg"
								 data-imgnonhover="support.svg">
							<h5>24/7 Personal Coaching</h5>
							<a href="#collapseExample3" aria-expanded="true" aria-controls="collapseExample3"
							   role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
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
						<p><b>Open yourself to</b> a step-by-step guidance, emotional support, and expert knowledge
							of our <b>fertility coaches</b>, <b>nutritional specialists</b>, and <b>fitness
							instructors</b>.
						</p>
						<p><b>Experience a variety of 1-on-1 live </b>and <b>group</b> sessions, self-guided
							programs and <b>pre-recorded</b> classes.</p>
						<p><b>Talk to us whenever you need it</b>, with our 24/7 messaging service always by your
							side.

						</p>
					</div>
				</div>
			</div>
			<div class="whySection">
				<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512"
					 viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
					<path id="Down_Arrow_3_"
						  d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/>
				</svg>
				<div class="text-center button-out mb-5 mb-sm-0">
					<div class="section1-card" href="#collapseExample4" aria-expanded="true"
						 aria-controls="collapseExample4" role="button" data-toggle="collapse"
						 class="read d-none btn p-0 display-inlineflex">
						<div class="section1-cards mx-auto p-3">
							<img src="<?php bloginfo('template_directory'); ?>/images/Group%207577.svg" alt=""
								 class="center-block img-fer w-45" data-imghover="checklist-w.svg"
								 data-imgnonhover="Group%207577.svg">
							<h5>Personalized
								Content and Trackers </h5>
							<a href="#collapseExample4" aria-expanded="true" aria-controls="collapseExample4"
							   role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
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
						<p><b>You will get access to a variety of personalized</b> services based on your responses
							to our health and wellness questionnaires:
						</p>
						<p>- <b>Curated reproductive health content</b> targeted to your specific conditions, needs
							and preferences;</p>
						<p>- <b>Extensive media library</b> of educational articles and videos, including cooking
							demos, healthy living sessions, exercise classes designed for all levels of activity and
							interest;</p>
						<p>- <b>Convenient FDA approved at-home ovulation and sperm testing kits providing</b>
							immediate results. No need to go or wait for lab results;
						</p>
						<p>- <b>Progress tracking tools</b> across FertilligenceTM lifestyle factors.
						</p>
					</div>
				</div>
			</div>
			<div class="whySection">
				<svg class="Layer_1 d-sm-block d-md-none d-lg-none" enable-background="new 0 0 128 128" height="512"
					 viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
					<path id="Down_Arrow_3_"
						  d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"/>
				</svg>
				<div class="text-center button-out mb-5 mb-sm-0">
					<div class="section1-card" href="#collapseExample5" aria-expanded="true"
						 aria-controls="collapseExample5" role="button" data-toggle="collapse"
						 class="read d-none btn p-0 display-inlineflex">
						<div class="section1-cards mx-auto p-3">
							<img src="<?php bloginfo('template_directory'); ?>/images/Group%207578.svg" alt=""
								 class="center-block img-fer w-45" data-imghover="salad-w.svg"
								 data-imgnonhover="Group%207578.svg">
							<h5>Interactive Meal Plans, Recipes and Supplements</h5>
							<a href="#collapseExample5" aria-expanded="true" aria-controls="collapseExample5"
							   role="button" data-toggle="collapse" class="read d-none btn p-0 display-inlineflex">
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
						<p><b>You will get auto-generate meal plans</b> and hundreds of personalized, delicious <b>recipes</b>
							for you and your partner from experts in nutrition tailored to your food preferences,
							sensitivities and conditions (obesity, high blood pressure, Celiac, high cholesterol,
							heartburn).
						</p>
						<p><b>You will become an expert in common vitamins</b>, minerals, and supplements that are
							associated with reproductive health.</p>
						<p>
							<b>You will get access to over 70 hypoallergenic dietary supplements</b> from Pure
							Encapsulations (Nestle Health Science) available for order on the platform and <b>delivery
							to you doors</b>.

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
				<p>We co-developed FertilligenceTM in close collaboration with <b>hundreds of women and men</b>
					experiencing challenges to conceive and healthcare professionals from <b>top academic medical
					centers</b> across the U.S. who saw a real gap in the existing fertility support model.</p>
				<p>We worked tirelessly to account for known <b>fertility related conditions</b> like PCOS,
					Endometriosis, POI, IVF, multiple miscarriages, improper ovulation, Low T, Erectyle Disfunction,
					semen abnormalities, prostate issues.</p>
				<p>We are well suited to support <b>your own fertility journey</b> or complement<b> the protocol
					provided by your healthcare professional.</b></p>
			</div>
		</div>

		<div class="display-none collapse mt-3 readmore" id="collapseExample2" data-parent="#accordion1">
			<a class="closebtn">
				<img src="<?php bloginfo('template_directory'); ?>/images/closewhite.svg" alt="">
			</a>
			<div class="card-body">
				<p><b>Evidence-Based Lifestyle Recommendations</b></p>
				<p>Our recommendations are based <b>on rigorous up-to-date research</b> of clinical studies and
					publications by top industry experts.</p>
				<p><b>We will help you integrate new lifestyle choices</b> into your everyday routines to improve
					your overall health and chances for conception.</p>
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
				<p><b>Open yourself to</b> a step-by-step guidance, emotional support, and expert knowledge of our
					<b>fertility coaches</b>, <b>nutritional specialists</b>, and <b>fitness instructors</b>.
				</p>
				<p><b>Experience a variety of 1-on-1 live </b>and <b>group</b> sessions, self-guided programs and
					<b>pre-recorded</b> classes.</p>
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
				<p><b>You will get access to a variety of personalized</b> services based on your responses to our
					health and wellness questionnaires:
				</p>
				<p>- <b>Curated reproductive health content</b> targeted to your specific conditions, needs and
					preferences;</p>
				<p>- <b>Extensive media library</b> of educational articles and videos, including cooking demos,
					healthy living sessions, exercise classes designed for all levels of activity and interest;</p>
				<p>- <b>Convenient FDA approved at-home ovulation and sperm testing kits providing</b> immediate
					results. No need to go or wait for lab results;
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
				<p><b>You will get auto-generate meal plans</b> and hundreds of personalized, delicious
					<b>recipes</b> for you and your partner from experts in nutrition tailored to your food
					preferences, sensitivities and conditions (obesity, high blood pressure, Celiac, high
					cholesterol, heartburn).
				</p>
				<p><b>You will become an expert in common vitamins</b>, minerals, and supplements that are
					associated with reproductive health.</p>
				<p>
					<b>You will get access to over 70 hypoallergenic dietary supplements</b> from Pure
					Encapsulations (Nestle Health Science) available for order on the platform and <b>delivery to
					you doors</b>.

				</p>
			</div>
		</div>

	</div>

	<!--------------------newlogo----------------------------------->
	<h3 class="title text-center mt-5 mb-5 mb-sm-0">Find Out More About Fertiligence</h3>
	<div class="col-lg-10 mx-auto text-center dash1 d-sm-flex mt-0 mt-sm-4 justify-content-around align-items-center">
		<div class="col-12 col-sm-3 mb-3 mb-sm-0">
			<a href="https://fertilligence.com/wp-content/uploads/2020/08/newlogopdf.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/ASRM2019-logo-slogan.jpg" id="nbe-logo-2019" ></a>
		</div>
		<div class="col-12 col-sm-3 mb-3 mb-sm-0">
			<svg id="nbe-logo-hippa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 507.2 216.4" style="enable-background:new 0 0 507.2 216.4;" xml:space="preserve">
<g>
	<g>
		<g>
			<path style="fill:#7ECEDA;" d="M110.1,20.8c-8.5-2-14,12-14,12v24.7c31.6,2.3,31.3-6.2,31.3-6.2c30.3-0.3,49.2-24.7,49.2-24.7
				C148.5,34.7,118.6,22.8,110.1,20.8z"/>
			<path style="fill:#7ECEDA;" d="M80.4,57.6V32.9c0,0-5.5-14-14-12C58,22.8,28,34.7,0,26.8c0,0,18.9,24.4,49.2,24.7
				C49.2,51.5,48.8,59.9,80.4,57.6z"/>
			<path style="fill:#7ECEDA;" d="M84,21.7v64.6c1.3,0.2,2.7,0.3,4.3,0.5c1.5-0.2,2.9-0.3,4.2-0.5V21.7c4.1-1.7,7-5.7,7-10.4
				C99.5,5,94.4,0,88.2,0C82,0,76.9,5,76.9,11.3C76.9,16,79.9,20,84,21.7z"/>
			<path style="fill:#7ECEDA;" d="M88.3,119.1c0.4-0.2,0.8-0.3,1.2-0.5c1-0.4,2-0.9,3-1.4v-12.6c-1.3-0.3-2.7-0.5-4.2-0.6
				c-1.5,0.1-2.9,0.3-4.3,0.6v12.6c1,0.5,2,1,3,1.4C87.4,118.8,87.8,119,88.3,119.1z"/>
			<path style="fill:#7ECEDA;" d="M92.3,165.2c0.1,0,0.1-0.1,0.2-0.1v-2.2c-0.5-0.3-1.4-0.6-2.5-0.9c-0.5-0.1-1.1-0.3-1.7-0.4
				c-0.6,0.1-1.1,0.2-1.6,0.4c-1.2,0.3-2.1,0.7-2.7,1v2.1c0.1,0.1,0.2,0.1,0.3,0.2c1.1,0.7,2.5,1.4,4,2.1
				C89.8,166.6,91.2,165.9,92.3,165.2z"/>
			<path style="fill:#7ECEDA;" d="M88.3,205.7c-1.2,0.4-2.5,0.8-3.9,1.1c-0.1,0-0.3,0.1-0.4,0.1l0.6,5.2c0.7,1.8,1.3,4.2,3.6,4.2
				c2.3,0,2.7-1.5,3.6-4.2l0.7-5.2c-0.1,0-0.2,0-0.3-0.1C90.8,206.5,89.5,206.1,88.3,205.7z"/>
			<path style="fill:#7ECEDA;" d="M92.3,186.1c-0.1-0.6-0.3-1.1-0.6-1.5c-0.3-0.5-1.2-1.4-3.5-2.6c-2.2,1.2-3.1,2.1-3.4,2.6
				c-0.3,0.5-0.5,0.9-0.6,1.5c0,0.1-0.1,0.2-0.1,0.3c0,0,0,0.1,0,0.2l0,0.4l0,0.7c0,0.1,0.1,0.3,0.1,0.4c0.2,0.9,0.9,1.9,2,2.8
				c0.6,0.5,1.4,1,2.1,1.4c0.7-0.4,1.4-0.9,2.1-1.4c1-0.9,1.8-1.9,2-2.8c0-0.1,0-0.3,0.1-0.4l0-0.7l0-0.4c0-0.1,0-0.1,0-0.2
				C92.4,186.3,92.3,186.2,92.3,186.1z"/>
			<path style="fill:#7ECEDA;" d="M88.3,147c0.1,0,0.1,0,0.2,0c0.7-0.1,1.3-0.3,2-0.4c0.7-0.2,1.4-0.3,2.1-0.5v-8.4
				c-1.3-0.7-2.7-1.3-4.2-1.8c-1.6,0.6-3.1,1.3-4.3,2.1v8.2c1.3,0.4,2.7,0.7,4.1,1C88.1,146.9,88.2,146.9,88.3,147z"/>
			<path style="fill:#7ECEDA;" d="M96.6,186.9C96.6,186.9,96.6,187,96.6,186.9l-0.1,1.1c0,0.2,0,0.4-0.1,0.6c0,0.1,0,0.1,0,0.1
				c-0.4,1.9-1.6,3.8-3.4,5.3c-0.1,0.1-0.2,0.1-0.2,0.2c0.9,0.3,1.7,0.6,2.5,0.8c0.7,0.2,1.4,0.4,2.1,0.5c1.4-1.4,2.7-3.4,3.3-5.9
				c0.1-0.4,0.2-0.9,0.2-1.4l0.1-1.4l0-1c0-0.4,0-0.7-0.1-1.2c-0.3-1.8-0.9-3.6-1.9-5c-0.5-0.7-0.9-1.3-1.5-1.8
				c-1.6,0.9-3.2,1.5-4.6,2.1c1,0.7,1.8,1.5,2.3,2.3c0.7,0.9,1.1,1.9,1.3,3.1c0,0.2,0.1,0.5,0.1,0.8c0,0.2,0.1,0.3,0.1,0.5
				C96.7,186.7,96.7,186.8,96.6,186.9L96.6,186.9z"/>
			<path style="fill:#7ECEDA;" d="M131.3,77.1l-0.1-1.4c-0.3-1.8-0.7-3.5-1.5-4.9c-0.8-1.6-2-3.1-3.4-4.2c-2.9-2.3-5.8-2.9-8.1-3.2
				c-2.1-0.2-4.5-0.1-5.9,0.1c-0.4,0-0.7,0.1-1,0.1c-3.8-1.2-9.6-1.7-13.6,3.9c-6.4,9,2.4,12.2,4.9,11.9c2.1-0.3,8.3-1.3,11.7-5.6
				c0.9-0.1,1.9-0.2,2.9-0.1c0.8,0,1.9,0.3,2.6,0.7c0.3,0.2,0.6,0.4,0.9,0.8c0,0.1,0.1,0.1,0.1,0.2c0.2,0.4,0.4,0.9,0.5,1.3
				c0.1,0.3,0.2,0.6,0.2,0.9c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.3l0,0.6c0,0.3,0,0.5,0,0.6c0,0.2-0.1,0.5-0.2,0.7
				c-0.1,0.4-0.4,0.7-0.6,1.1c-0.6,0.9-1.8,2-3.5,3c-0.5,0.3-1,0.6-1.6,0.9c-3.6,1.8-8.7,3.3-15,4.5c-0.8,0.1-1.6,0.3-2.4,0.4
				c-0.8,0.1-1.6,0.3-2.4,0.4c-1,0.2-2.1,0.3-3.2,0.4c-1.3,0.2-2.7,0.3-4.2,0.5c-0.2,0-0.3,0-0.5,0.1c-1.3,0.1-2.5,0.3-3.8,0.5
				c-2.9,0.5-5.7,1.3-8.2,2.2c-2.3,0.9-4.2,1.9-5.9,3.1c-0.1,0.1-0.3,0.2-0.4,0.3c-0.8,0.6-1.4,1.1-2,1.7c-0.6,0.6-1.1,1.2-1.6,1.8
				c-0.4,0.6-0.8,1.2-1.1,1.8c-0.6,1-1,2.2-1.2,3.3c-0.1,0.2-0.1,0.5-0.2,0.7c0,0.3-0.1,0.7-0.1,1.1l0,0.8c0,0,0,0,0,0l0.1,1.1
				c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0.1,0.4c0.1,0.8,0.3,1.7,0.4,2.2c0.1,0.2,0.1,0.4,0.2,0.6c0.1,0.5,0.3,0.9,0.4,1.2
				c0,0,0,0.1,0,0.1c0.5,1.1,1.1,2.2,1.8,3.3c2.5,3.5,5.6,5.8,8.5,7.6c2.6-1.8,5.3-3.1,7.8-4.2c-0.7-0.4-1.5-0.7-2.2-1.2
				c-3.5-2-6.3-4.4-7.7-6.7c-1.7-2.6-1.5-4.7-1.1-6c0.2-0.5,0.5-1.1,0.8-1.6h-0.2c0.8-1.1,2.3-2.1,3.8-3c0.1-0.1,0.2-0.1,0.3-0.2
				c0,0,0.1,0,0.1-0.1c0.3-0.1,0.5-0.3,0.8-0.4c0.1,0,0.2-0.1,0.3-0.1c0.4-0.2,0.8-0.3,1.2-0.5c0,0,0.1,0,0.1,0c0,0,0,0,0,0
				c0.5-0.2,1.1-0.4,1.7-0.5c1.1-0.3,2.3-0.6,3.5-0.8c0.7-0.1,1.5-0.3,2.2-0.3c0.7-0.1,1.4-0.2,2.1-0.2c0.1,0,0.2,0,0.3,0
				c1.4-0.1,2.7-0.2,3.9-0.3c2.6-0.2,4.9-0.5,7-0.8c2.5-0.4,5.1-0.8,7.6-1.3c0.9-0.2,1.8-0.4,2.6-0.6c0.8-0.2,1.6-0.4,2.4-0.6
				c2.5-0.7,5.1-1.6,7.5-2.7c3-1.4,6.1-3.2,8.7-6.6c0.2-0.2,0.3-0.5,0.5-0.7c1-1.5,1.8-3.2,2.1-4.7c0-0.1,0-0.1,0-0.2
				c0.1-0.3,0.2-0.9,0.2-1.4l0.1-2.3L131.3,77.1C131.3,77.1,131.3,77.1,131.3,77.1z"/>
			<path style="fill:#7ECEDA;" d="M106.8,137.6c-0.8-2.3-2.3-4.3-4.3-6.2c-0.4-0.3-0.7-0.6-1.1-0.9c-2.1,1.1-4.1,2-6.1,2.7
				c-0.4,0.1-0.7,0.3-1.1,0.4c2.3,1.2,4.4,2.9,5.7,5.3c0.2,0.4,0.3,0.7,0.5,1.1h0c0,0,0,0.1,0,0.1c0,0.1,0.1,0.2,0.1,0.2
				c0.1,0.4,0.2,0.8,0.2,1.3c0,0,0,0,0,0c0.1,0.8,0,1.7-0.3,2.6c0,0.1,0,0.1-0.1,0.2c-0.1,0.2-0.2,0.4-0.2,0.6
				c-0.1,0.2-0.1,0.4-0.2,0.5c0,0.1-0.1,0.2-0.1,0.3l-0.1,0.2h0l0,0.1c-0.1,0.1-0.2,0.2-0.3,0.3c-0.9,1.2-1.9,2-3.2,2.6
				c-0.1,0-0.1,0.1-0.2,0.1c-0.3,0.1-0.6,0.3-0.9,0.4c0,0,0,0,0,0c-0.7,0.2-1.5,0.5-2.2,0.7c-0.1,0-0.2,0.1-0.4,0.1c0,0,0,0,0,0
				c-1,0.2-2,0.5-3,0.7c0,0,0,0,0,0c-0.4,0.1-0.7,0.2-1.1,0.2c-1.4,0.3-2.8,0.6-4.3,1.1c0,0,0,0,0,0c-1.8,0.5-3.7,1.2-5.6,2.5
				c-0.1,0.1-0.2,0.1-0.3,0.2c-0.5,0.4-1,0.8-1.5,1.3c-0.4,0.4-0.8,0.9-1.1,1.3c-0.1,0.1-0.2,0.3-0.2,0.4c-0.5,0.9-0.9,1.9-1.2,3
				c-0.1,0.4-0.2,1.1-0.3,1.7l0,1.3l0,0.5l0,0.6c0.1,0.4,0.1,0.7,0.2,1.1c0.2,0.7,0.4,1.2,0.7,1.9c1,2.1,2.6,3.4,4,4.4
				c1.6-1.2,3.2-2.1,4.8-3c-0.5-0.3-1-0.6-1.5-0.9c-0.8-0.5-2.2-1.6-2.7-2.9c0,0,0-0.1,0-0.1c0-0.1-0.1-0.2-0.1-0.3
				c-0.1-0.2-0.1-0.5-0.1-0.8c0-0.1,0-0.2,0-0.3c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1h0c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2
				c0-0.2,0-0.3,0.1-0.5c0-0.2,0.1-0.4,0.1-0.6l0-0.1c0-0.1,0-0.2,0.1-0.3c0.3-1,0.8-1.6,1.5-2.2c0.2-0.1,0.3-0.3,0.5-0.4
				c0.6-0.4,1.4-0.8,2.3-1.1c0.1-0.1,0.3-0.1,0.4-0.1c0.5-0.2,1-0.3,1.6-0.5c0.8-0.2,1.7-0.4,2.7-0.6c0.6-0.1,1.2-0.2,1.8-0.3
				c0.8-0.1,1.6-0.3,2.4-0.5c1.4-0.3,2.9-0.6,4.5-1.1c0.4-0.1,0.8-0.3,1.2-0.4c0.7-0.3,1.5-0.6,2.2-1c0.6-0.3,1.3-0.7,1.9-1.2
				c0.3-0.2,0.6-0.5,0.9-0.8l0.7-0.7c0.3-0.3,0.5-0.6,0.8-0.9c0.2-0.3,0.3-0.4,0.4-0.5l0.6-1c0.6-1.1,1.1-2.3,1.4-3.4
				c0.5-1.7,0.6-3.6,0.3-5.4C107.3,139.2,107.1,138.3,106.8,137.6z"/>
			<path style="fill:#7ECEDA;" d="M77.8,200.2c-1.2,0.2-2.3,0.4-3.2,0.5c-1,0.1-2,0.3-2.7,0.3c0,0-0.1,0-0.1,0
				c-0.5,0-0.9,0.2-1.2,0.6c-0.3,0.3-0.5,0.8-0.4,1.2c0.1,0.9,0.8,1.6,1.7,1.6l0.1,0c0,0,0.3,0,0.8-0.1l2.2-0.2
				c1.8-0.2,4.1-0.5,7-1.2c-1.2-0.7-2.5-1.5-3.8-2.5C78.1,200.4,78,200.3,77.8,200.2z"/>
			<path style="fill:#7ECEDA;" d="M104.7,201L104.7,201C104.7,201,104.7,201,104.7,201L104.7,201C104.7,201,104.7,201,104.7,201
				c-0.5,0-1.5-0.1-2.8-0.3c-0.9-0.1-2-0.3-3.2-0.5c-0.8-0.2-1.7-0.4-2.7-0.6c-0.6-0.1-1.2-0.3-1.9-0.5c-0.3-0.1-0.6-0.2-0.9-0.3
				c-0.3-0.1-0.5-0.2-0.8-0.3c-1.3-0.4-2.8-1-4.2-1.6c-0.8-0.4-1.6-0.8-2.4-1.3c-0.6-0.4-1.3-0.8-1.9-1.3c-0.1-0.1-0.2-0.1-0.2-0.2
				c-0.1-0.1-0.2-0.1-0.3-0.2c-1.8-1.5-3-3.4-3.4-5.3c0,0,0-0.1,0-0.1c-0.1-0.2-0.1-0.4-0.1-0.6l0-1c0-0.3,0-0.6,0-0.8
				c0-0.4,0.1-0.7,0.1-0.9c0.2-1.1,0.6-2.2,1.3-3.1c0.5-0.8,1.3-1.5,2.3-2.2c0.1-0.1,0.2-0.2,0.4-0.2c0.5-0.4,1.1-0.8,1.8-1.1
				c0.7-0.4,1.4-0.7,2.2-1.1c0.1,0,0.2-0.1,0.3-0.1c0.8-0.4,1.7-0.7,2.6-1.1c0.5-0.2,1.1-0.5,1.6-0.7c0.5-0.2,0.9-0.4,1.4-0.6
				c0.7-0.3,1.4-0.7,2.2-1.1c0.5-0.3,0.9-0.5,1.4-0.8c0.2-0.1,0.4-0.2,0.5-0.4c1.4-0.9,3-2.3,4-4.4c0.3-0.6,0.5-1.1,0.6-1.8
				c0.1-0.4,0.2-0.7,0.2-1.1l0-0.6l0-0.5l-0.1-1.3c0-0.5-0.2-1.2-0.3-1.7c-0.3-1.1-0.7-2.1-1.2-2.9c-1.1,0.5-2.2,0.9-3.1,1.2
				c-0.8,0.3-1.6,0.5-2.4,0.7c0.8,0.6,1.2,1.3,1.5,2.3c0,0.1,0.1,0.2,0.1,0.3l0,0.2c0,0.2,0.1,0.4,0.1,0.6c0.1,0.3,0.1,0.5,0.1,0.7
				h0c0,0,0,0,0,0c0,0.1,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2l0,0.3l0,0.3c0,0.3-0.1,0.6-0.2,0.9l0,0c-0.5,1.3-1.9,2.4-2.7,2.9
				c-0.5,0.3-1,0.6-1.5,0.9c-0.2,0.1-0.4,0.2-0.7,0.4c-0.5,0.3-1.1,0.6-1.7,0.8c-0.6,0.3-1.2,0.6-1.8,0.8c-0.2,0.1-0.5,0.2-0.7,0.3
				c-0.8,0.4-1.6,0.7-2.4,1.1c-0.6,0.3-1.3,0.7-1.9,1c-0.4,0.2-0.9,0.5-1.3,0.7c-0.7,0.4-1.3,0.9-2,1.4c-0.6,0.5-1.1,1-1.7,1.5
				c-0.5,0.6-1,1.1-1.5,1.8c-1,1.5-1.7,3.2-1.9,5c-0.1,0.4-0.1,0.8-0.1,1.2l0,1l0.1,1.4c0.1,0.5,0.2,1,0.3,1.5
				c0.6,2.5,1.9,4.4,3.3,5.9c0.6,0.6,1.2,1.2,1.8,1.6c0,0,0.1,0.1,0.1,0.1c0.8,0.6,1.5,1.1,2.3,1.6c0.2,0.1,0.5,0.3,0.7,0.4
				c1.2,0.7,2.4,1.2,3.4,1.6c0.3,0.1,0.6,0.2,0.9,0.3c1,0.4,2,0.7,3.1,1c0.4,0.1,0.7,0.2,1.1,0.3c0.2,0.1,0.5,0.1,0.7,0.2
				c0.4,0.1,0.9,0.2,1.3,0.3c2.8,0.6,5.1,1,7,1.2c1,0.1,1.7,0.2,2.2,0.2l0.9,0.1c0.9,0,1.7-0.7,1.7-1.6
				C106.4,201.9,105.7,201.1,104.7,201z"/>
			<path style="fill:#7ECEDA;" d="M113.3,107.7c0-0.3-0.1-0.7-0.1-1.1c0-0.2-0.1-0.5-0.1-0.7c-0.3-1.1-0.7-2.2-1.2-3.3
				c-0.3-0.6-0.7-1.2-1.1-1.8c-3.5,0.8-7,1.4-10.3,1.9c1.8,0.9,3.2,2,4,3.2c0.3,0.4,0.6,0.9,0.8,1.4c0.5,1.2,0.7,3.1-0.6,5.4
				c-1.5,2.7-4.3,5.2-8.4,7.5c-0.8,0.4-1.5,0.8-2.2,1.2c-0.5,0.2-1,0.5-1.5,0.7c-0.4,0.2-0.8,0.4-1.2,0.5c0,0-0.1,0-0.1,0.1
				c-0.9,0.4-1.9,0.7-2.9,1.1c0,0-0.1,0-0.1,0.1c-0.8,0.3-1.6,0.6-2.6,1c-0.5,0.2-1,0.4-1.5,0.6c-1.6,0.7-3.2,1.5-4.9,2.4
				c-0.7,0.4-1.4,0.9-2.1,1.3c-0.6,0.4-1.3,0.9-1.9,1.4c-0.4,0.3-0.7,0.6-1.1,0.9c-2,1.9-3.5,3.9-4.3,6.1c-0.3,0.8-0.5,1.6-0.6,2.5
				c-0.3,1.8-0.2,3.7,0.3,5.3c0.3,1.2,0.8,2.3,1.4,3.4l0.3,0.5c0,0,0,0.1,0,0.1l0.3,0.5c0.1,0.1,0.2,0.3,0.4,0.5
				c0.2,0.3,0.5,0.7,0.8,0.9l0.8,0.8c0.3,0.2,0.6,0.5,0.9,0.7c0.4-0.4,0.9-0.8,1.3-1.1c1.6-1.2,3.3-1.9,4.8-2.5
				c-2.4-1.1-4.1-3.1-4.6-5.5c-0.2-1.2-0.1-2.4,0.3-3.6c0.5-1.3,1.3-2.6,2.6-3.7c1.2-1,2.5-1.9,3.9-2.7c0.5-0.3,1-0.5,1.5-0.8
				c0.4-0.2,0.8-0.4,1.2-0.6c1-0.4,2-0.8,2.8-1.1c0.1,0,0.2-0.1,0.2-0.1c0.5-0.2,1.2-0.4,1.9-0.6c0.7-0.2,1.5-0.5,2.3-0.8
				c0.4-0.2,0.9-0.3,1.3-0.5c1.2-0.4,2.4-1,3.6-1.5c0.7-0.3,1.5-0.7,2.2-1.1c0,0,0,0,0.1,0c0.6-0.4,1.3-0.7,2-1.1
				c2.9-1.8,6-4.1,8.5-7.6c0.7-1.1,1.4-2.2,1.8-3.3c0,0,0-0.1,0-0.1c0.2-0.3,0.3-0.8,0.4-1.2c0.1-0.2,0.1-0.4,0.2-0.6
				c0.2-0.5,0.3-1.4,0.4-2.2c0-0.3,0.1-0.4,0.1-0.5c0-0.1,0-0.2,0-0.4l0.1-1c0,0,0-0.1,0-0.1L113.3,107.7z"/>
			<path style="fill:#7ECEDA;" d="M67.4,93.6c2-1.4,4.2-2.6,6.8-3.6c0.6-0.2,1.2-0.4,1.8-0.6c-6.3-1.2-11.4-2.7-15-4.5
				c-0.6-0.3-1.1-0.6-1.6-0.9c-1.6-1-2.9-2.1-3.5-3.1c-0.2-0.3-0.4-0.6-0.6-1c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.3,0-0.5,0-0.7
				c0,0,0-0.1,0-0.1l0-0.4c0-0.1,0-0.2,0-0.3c0,0,0-0.1,0-0.1l0-0.1c0-0.3,0.1-0.5,0.2-0.7c0.1-0.5,0.3-1,0.5-1.4
				c0-0.1,0.1-0.1,0.1-0.2c0.3-0.3,0.5-0.6,0.9-0.8c0.7-0.4,1.8-0.6,2.6-0.7c0.3,0,0.6,0,0.9,0c0.6,0,1.3,0,1.9,0.1
				c3.4,4.4,9.6,5.4,11.7,5.6c2.4,0.3,11.3-2.9,4.9-11.9c-4-5.7-9.9-5.1-13.6-3.9c-0.3,0-0.6-0.1-1-0.1c-1.4-0.2-3.7-0.3-5.9-0.1
				c-2.2,0.3-5.2,0.9-8,3.2c-1.4,1.1-2.6,2.6-3.4,4.2c-0.7,1.5-1.2,3.1-1.5,5l-0.2,1.8l0.1,2.3c0.1,0.4,0.1,1.1,0.2,1.3
				c0,0.1,0,0.1,0,0.2c0.2,0.8,0.5,1.7,0.9,2.6c0.5,1,1,2,1.7,2.9c2.6,3.3,5.7,5.1,8.7,6.6c2.4,1.1,5,2,7.5,2.7
				C65.3,95.2,66.3,94.4,67.4,93.6z"/>
		</g>
	</g>
	<g>
		<g>
			<path style="fill:#30292A;" d="M196.7,141.2v-32h-32.3v32h-17.5V61.6h17.5v31.5h32.3V61.6h17.5v79.6H196.7z"/>
			<path style="fill:#30292A;" d="M234.1,141.2V61.6h17.5v79.6H234.1z"/>
			<path style="fill:#30292A;" d="M332,101.5c-1.7,3.5-4,6.4-6.9,8.8c-2.9,2.4-6.3,4.1-10.2,5.3c-3.9,1.2-8.1,1.8-12.6,1.8H289v23.9
				h-17.5V61.6H304c4.8,0,9,0.7,12.8,2c3.8,1.3,6.9,3.2,9.6,5.6c2.6,2.4,4.6,5.3,6,8.7c1.4,3.4,2.1,7.1,2.1,11.2v0.2
				C334.5,94,333.7,98,332,101.5z M316.8,89.5c0-3.9-1.3-6.9-3.8-9c-2.5-2-6-3.1-10.4-3.1H289v24.3h13.9c4.4,0,7.8-1.2,10.2-3.5
				c2.4-2.3,3.6-5.2,3.6-8.6V89.5z"/>
			<path style="fill:#30292A;" d="M397.6,141.2l-7.3-17.9h-33.7l-7.3,17.9h-17.9L365.7,61h16.1l34.1,80.2H397.6z M373.5,82.1
				L363,107.9h21.2L373.5,82.1z"/>
			<path style="fill:#30292A;" d="M487.5,141.2l-7.3-17.9h-33.7l-7.3,17.9h-17.9L455.5,61h16.1l34.1,80.2H487.5z M463.4,82.1
				l-10.6,25.8H474L463.4,82.1z"/>
		</g>
	</g>
	<g>
		<g>
			<path style="fill:#30292A;" d="M145.6,177.2v-0.1c0-11.7,8.8-21.5,20.8-21.5c7.4,0,11.9,2.7,16.1,6.6l-2.2,2.3
				c-3.6-3.5-7.8-6.1-14-6.1c-10,0-17.5,8.1-17.5,18.6v0.1c0,10.5,7.7,18.7,17.6,18.7c6,0,10.1-2.3,14.3-6.5l2.1,2
				c-4.4,4.3-9.1,7.2-16.5,7.2C154.3,198.6,145.6,189.1,145.6,177.2z"/>
			<path style="fill:#30292A;" d="M188.2,177.2v-0.1c0-11.3,8.4-21.5,20.9-21.5c12.6,0,20.8,10,20.8,21.4v0.1
				c0,11.3-8.4,21.5-20.9,21.5C196.4,198.6,188.2,188.6,188.2,177.2z M226.7,177.2v-0.1c0-10.3-7.5-18.7-17.7-18.7
				c-10.3,0-17.6,8.3-17.6,18.6v0.1c0,10.3,7.5,18.7,17.7,18.7C219.3,195.8,226.7,187.5,226.7,177.2z"/>
			<path style="fill:#30292A;" d="M240.4,156.3h2.9l16.7,24.6l16.7-24.6h2.9v41.5h-3.1v-36.1L260,185.7h-0.2l-16.4-23.9v36.1h-3
				V156.3z"/>
			<path style="fill:#30292A;" d="M291.9,156.3h15.1c9.1,0,15.4,4.7,15.4,12.7v0.1c0,8.7-7.5,13.2-16.2,13.2H295v15.5h-3.1V156.3z
				 M306.4,179.5c7.7,0,12.9-4,12.9-10.2v-0.1c0-6.6-5.1-10-12.6-10H295v20.3H306.4z"/>
			<path style="fill:#30292A;" d="M331.5,156.3h3.1V195H359v2.8h-27.5V156.3z"/>
			<path style="fill:#30292A;" d="M368.6,156.3h3.1v41.5h-3.1V156.3z"/>
			<path style="fill:#30292A;" d="M400.2,156h3l19.3,41.8h-3.4l-5.3-11.6h-24.5l-5.3,11.6h-3.2L400.2,156z M412.6,183.4l-10.9-24
				l-11,24H412.6z"/>
			<path style="fill:#30292A;" d="M431.3,156.3h2.9l28.6,36.1v-36.1h3v41.5h-2.3L434.3,161v36.9h-3V156.3z"/>
			<path style="fill:#30292A;" d="M489.7,159.2h-14.5v-2.8h32v2.8h-14.5v38.7h-3.1V159.2z"/>
		</g>
	</g>
</g>
</svg>
		</div>
		<div class="col-12 col-sm-3 mb-3 mb-sm-0">
			<a href="https://fertilligence.com/wp-content/uploads/2020/11/Holistic-Life-Magazien-2-pages.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/Best-Holistic-Life.png"  id="nbe-logo-holistic" ></a>
		</div>
	</div>

	<!--------------------------------------->








	<div class="d-block d-sm-none">
		<h2 class="title text-center col-10 col-sm-12 mx-auto" style="margin-top:85px">Meet Your Personal Fertility
			Coach</h2>
		<p class="title-p  mx-auto text-center"><span class="d-none d-sm-block">Central to the Fertilligence experience is direct, 1:1 private
			coaching and support from our dedicated fertility coaches.</span> This isn't one-size-fits-all conception counseling. This is privet and dedicated support, advice, and planning designed exclusively for you and your unique journey. Get to know some of our coaches and their inspiring stories.
		</p>
	</div>



	<div class="col-lg-5 coach mt-5 mt-sm-0 d-block d-sm-none">
		<div id="" class="coach-cover d-none cover0">
			<a class="closebtn3 m-0">
				<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
			</a>
			<div>
				<h5 class="pink-color">Coach Aumatma :</h5>
				<p>“First, we want to help you understand what is blocking your fertility. Then, we coach you on
					lifestyle recommendations to help improve your fertility so that you can get pregnant faster
					and easier! I have worked with a 44 year old client whose doctor was able to retrieve 23
					eggs and achieve 15 healthy embryos. At that age, most doctors expect 2-3 embryos, not 15.
					The lifestyle you live, and the hormonal balance you achieve can potentially help you get
					pregnant faster.”</p>
			</div>
		</div>
		<div id="" class="coach-cover d-none cover1">
			<a class="closebtn3 m-0">
				<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
			</a>
			<div>
				<h5 class="pink-color">Coach Sonia :</h5>
				<p>
					“Every success case is beautiful and unique, but my most special successful case is my very
					first one. In 2010, a yoga client reached out to me, asking for help. She was 40 years old
					and was diagnosed with infertility: she was devastated. Her AMH was undetectable and her FSH
					was through the roof. Her words “you’re the only person I trust” changed my life. I dove
					into studying everything I could find around Fertility and Women’s Health. I designed a
					nutrition and integrative lifestyle plan for her. Her hormones balanced, her heath improved
					dramatically…. and, 6 months later, she got pregnant. Believing in yourself is the first
					secret to success. With the right guidance and support, you will create an optimum
					environment to welcome a new life inside you.”
				</p>
			</div>
		</div>
		<div id="" class="coach-cover d-none cover2">
			<a class="closebtn3 m-0">
				<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
			</a>
			<div>
				<h5 class="pink-color">Coach Kela :</h5>
				<p>
					“I worked with a woman who hadn’t had her period in years, had PCOS, and was struggling with
					infertility. We began changing small things in her life, such as her diet, began cycle
					syncing to balance her hormones, and implemented a new exercise program. In about 2 months
					her period came back. In 3 months she was losing weight and her PCOS symptoms were beginning
					to disappear. And in 5 months she was pregnant. It is an amazing story. You can do this! It
					doesn’t matter what form of infertility or hormone issue you are struggling with. You can
					improve your chances of getting pregnant naturally by implementing the steps you find on
					this platform. The first step is believing you can and trusting your body. You got this!“
				</p>
			</div>
		</div>
		<div  class="owl-carousel owl-theme carousel3">
			<div class="item coach-items" data-id="0">
				<div>
					<div class="d-lg-flex">
						<picture>
							<source media="(max-width:414px )"
									srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset1.png">
							<img src="<?php bloginfo('template_directory'); ?>/images/coach2.png" alt=""
								 class="width-100" width="131" height="158">
						</picture>
						<div class="pt-3 pb-3">
							<h3 class="pink-color text-center">Coach Aumatma</h3>
							<h6 class="blue-color text-center" style="font-size: 15px">Masters In Nutrition, Doctor Of Naturopathic Medicine, Holistic Fertility
								Specialist</h6>
						</div>
					</div>
					<div>
						<p class="title-p mt-2">The author of “Fertility Secrets: What Your Doctor Didn’t Tell You
							About Baby-Making”, Aumatma works with client with diagnosed and unexplained
							infertility, miscarriages, optimizing health for egg transfer, hormonal issues. In
							her 10 years of practice, she has created an integrative and holistic approach for
							getting to the root of the inability to conceive and how to resolve it in a holistic
							way.</p>
					</div>
				</div>

			</div>
			<div class="item coach-items" data-id="1">
				<div>
					<div class="d-lg-flex">
						<picture>
							<source media="(max-width:414px )"
									srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset2.png">
							<img src="<?php bloginfo('template_directory'); ?>/images/coach4.png" alt=""
								 class="width-100" width="140" height="158">
						</picture>
						<div class="pt-3 pb-3">
							<h3 class="pink-color text-center">Coach Sonia</h3>
							<h6 class="blue-color text-center" style="font-size: 15px">Certified Holistic Health Coach, Certified Yoga Teacher, Wellness Educator</h6>
						</div>
					</div>
					<div>
						<p class="title-p mt-2">A mother of three who personally overcame all sorts of fertility
							challenges. Through her 10 years of experience, Sonia has helped women with
							unexplained infertility, polycystic ovary syndrome (PCOS), bad quality eggs,
							endometriosis, fallopian tube disorder, hormonal imbalances… and today many of them
							are enjoying a new life as a mom.</p>
					</div>
				</div>

			</div>
			<div class="item coach-items" data-id="2">
				<div>
					<div class="d-lg-flex">
						<picture>
							<source media="(max-width:414px )"
									srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset3.png">
							<img src="<?php bloginfo('template_directory'); ?>/images/coach5.png" alt=""
								 class="width-100" width="131" height="158">
						</picture>
						<div class="pt-3 pb-3">
							<h3 class="pink-color text-center">Coach Kela</h3>
							<h6 class="blue-color text-center" style="font-size: 15px">Certified Holistic Health & Wellness Coach, Fitness Trainer And Wellness
								Educator</h6>
						</div>
					</div>
					<div>
						<p class="title-p mt-2">The author of “The Complete Hormone Puzzle Cookbook” and “The Hormone
							Puzzle Method” for solving infertility, Kela helps her clients learn how to cycle
							sync so they have pleasant periods, boosted fertility, happy hormones, hotter sex
							lives, and greater creativity, productivity, and wellbeing at work.</p>
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







	<!---------takethequiz----------------------->

	<div class="col-12 d-block d-sm-none p-0" style="margin-top:20px">
		<div class="fit" style="">
			<div class="section1-cards mx-auto p-3">
				<img src="<?php bloginfo('template_directory'); ?>/images/Calendarnew.svg" alt="" class="center-block">
				<h5 class="ttq">Take the Fertiligence quiz to be prepared for your first appointment</h5>
			</div>
		</div>
		<a href="quiz/" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
			<div class="button3 btn5" style="width: 177px;height: 50px">
				<p id="closechat" class="text-center">Take The Quiz</p>
			</div>
		</a>
	</div>

	<!----------testimonials mobile---------------------------->
	<div class="col-12 col-sm-10 mx-auto mt-5 p-0 showOnMobileTestimonials">
		<h3 class="title text-center blue-color" style="margin-top: 80px;">Clients’ Stories</h3>
		<div class="owl-carousel owl-theme owltesti">
			<?=testimonialItemBox('Jessica','When I started with you, my period was missing in action for 2 years. My doctors just recommended donor eggs. Well, at the beginning of 2020, I started the Hormone Puzzle and after 2 months, I started spotting. And today, I am 5 weeks pregnant. Thank you so much for the guidance and information you give with your coaching.')?>
			<?=testimonialItemBox('Amy','Navigating the fertility space after multiple losses can be a really anxious experience and fear is a major component. Working with Kela has given me peace now that I am expecting. She’s attentive, provides regular physical AND emotional wellness checks, and has given me access to meal plans and dietary guidance that is crucial to the health of this pregnancy.')?>
			<?=testimonialItemBox('Mimi','I loved working with Coach Kela. She has a wealth of information to help women who are trying
to get pregnant. She is very helpful. I thought I was eating healthy but eating for fertility is a
completely different ballgame. Thank you coach for all your help!')?>
			<?=testimonialItemBox('Kim','Because of coach Kela, I am pregnant after 4 years of trying. All I did was implement her easy
to follow recipes and meal plans and adopted the hormone puzzle method and bam - pregnant.')?>
			<?=testimonialItemBox('Julie','I met her when I was demoralized after 3 OB-Gyn’s diagnosing me with infertility, due to
extremely poor egg quality. Sonia took me under her wing for a magical journey to fertility,
empowerment, and trust. I got pregnant naturally 5 months after working with her, and I can say
hands down that I owe her this baby.”
')?>
			<?=testimonialItemBox('Cristina','I had 5 viable eggs left and IVF was my last chance to get pregnant. Sonia helped design
tailor-made diets to boost both my eggs and his sperm quality, she designed a yoga +
meditation program and took us both through a self-discovery, empowering journey. Not only
did we get pregnant with twins, but we also rediscovered a passionate love for each other!
')?>
			<?=testimonialItemBox('Laura','My OB-Gyn referred me to her as I was getting worryingly obsessed with trying to conceive with
Polycystic Ovary Syndrome (PCOS): she told me Sonia would help me calm down and optimize
my fertility. She turned me from a demoralized, hopeless wreck into a brave, sexy, fertility
goddess. I now have a 3-month-old, healthy, happy baby: what else could I ask for?
')?>

		</div>
	</div>



	<!--------end testimonials------------------------->


	<div class="mx-auto col-11 col-sm-10 dash2 d-block d-sm-none" style="margin-top: 100px">
		<p class="mx-auto text-center m-0">
			"Do you know that some diets are more fertility-friendly than others? Mediterranean is a good example of
			a friendly diet. We will help you to design yours."<br>
			<span class="pink-color"> - Your Fertilligence Team </span>
		</p>
	</div>	


	<!----------------------Desktop changes-------------------------->	
	<div class="d-none d-sm-block">
		<h2 class="title text-center col-10 col-sm-12 mx-auto" style="margin-top:100px">Meet Your Personal Fertility
			Coach</h2>
		<p class="title-p col-9 mx-auto text-center">This isn't one-size-fits-all conception counseling. This is private and dedicated support, advice, and planning designed exclusively for you and your unique journey. Get to know some of our coaches and their inspiring stories.
		</p>
	</div>
	<div class="col-10 mx-auto d-lg-flex p-0 mt-5 coach-dir d-none d-lg-block sacoach">
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

		<div class="col-lg-5 coach mt-5 mt-sm-0 d-none d-sm-block">
			<div id="" class="coach-cover d-none cover0">
				<a class="closebtn3">
					<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
				</a>
				<div>
					<h5 class="pink-color">Coach Aumatma :</h5>
					<p>“First, we want to help you understand what is blocking your fertility. Then, we coach you on
						lifestyle recommendations to help improve your fertility so that you can get pregnant faster
						and easier! I have worked with a 44 year old client whose doctor was able to retrieve 23
						eggs and achieve 15 healthy embryos. At that age, most doctors expect 2-3 embryos, not 15.
						The lifestyle you live, and the hormonal balance you achieve can potentially help you get
						pregnant faster.”</p>
				</div>
			</div>
			<div id="" class="coach-cover d-none cover1">
				<a class="closebtn3">
					<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
				</a>
				<div>
					<h5 class="pink-color">Coach Sonia :</h5>
					<p class="tablet-14">
						“Every success case is beautiful and unique, but my most special successful case is my very
						first one. In 2010, a yoga client reached out to me, asking for help. She was 40 years old
						and was diagnosed with infertility: she was devastated. Her AMH was undetectable and her FSH
						was through the roof. Her words “you’re the only person I trust” changed my life. I dove
						into studying everything I could find around Fertility and Women’s Health. I designed a
						nutrition and integrative lifestyle plan for her. Her hormones balanced, her heath improved
						dramatically…. and, 6 months later, she got pregnant. Believing in yourself is the first
						secret to success. With the right guidance and support, you will create an optimum
						environment to welcome a new life inside you.”
					</p>
				</div>
			</div>
			<div id="" class="coach-cover d-none cover2">
				<a class="closebtn3">
					<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
				</a>
				<div>
					<h5 class="pink-color">Coach Kela :</h5>
					<p class="tablet-14">
						“I worked with a woman who hadn’t had her period in years, had PCOS, and was struggling with
						infertility. We began changing small things in her life, such as her diet, began cycle
						syncing to balance her hormones, and implemented a new exercise program. In about 2 months
						her period came back. In 3 months she was losing weight and her PCOS symptoms were beginning
						to disappear. And in 5 months she was pregnant. It is an amazing story. You can do this! It
						doesn’t matter what form of infertility or hormone issue you are struggling with. You can
						improve your chances of getting pregnant naturally by implementing the steps you find on
						this platform. The first step is believing you can and trusting your body. You got this!“
					</p>
				</div>
			</div>
			<div  class="owl-carousel owl-theme carousel3">
				<div class="item coach-items" data-id="0">
					<div>
						<div class="d-lg-flex">
							<picture>
								<source media="(max-width:414px )"
										srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset1.png">
								<img src="<?php bloginfo('template_directory'); ?>/images/coach2.png" alt=""
									 class="width-100" width="131" height="151">
							</picture>
							<div class="p-3 p-lg-1 p-xl-3">
								<h3 class="pink-color">Coach Aumatma</h3>
								<h6>Masters In Nutrition, Doctor Of Naturopathic Medicine, Holistic Fertility
									Specialist</h6>
							</div>
						</div>
						<div>
							<p class="title-p">The author of “Fertility Secrets: What Your Doctor Didn’t Tell You
								About Baby-Making”, Aumatma works with client with diagnosed and unexplained
								infertility, miscarriages, optimizing health for egg transfer, hormonal issues. In
								her 10 years of practice, she has created an integrative and holistic approach for
								getting to the root of the inability to conceive and how to resolve it in a holistic
								way.</p>
						</div>
					</div>

				</div>
				<div class="item coach-items" data-id="1">
					<div>
						<div class="d-lg-flex">
							<picture>
								<source media="(max-width:414px )"
										srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset2.png">
								<img src="<?php bloginfo('template_directory'); ?>/images/coach4.png" alt=""
									 class="width-100" width="140" height="158">
							</picture>
							<div class="p-3 p-lg-1 p-xl-3">
								<h3 class="pink-color">Coach Sonia</h3>
								<h6>Certified Holistic Health Coach, Certified Yoga Teacher, Wellness Educator</h6>
							</div>
						</div>
						<div>
							<p class="title-p">A mother of three who personally overcame all sorts of fertility
								challenges. Through her 10 years of experience, Sonia has helped women with
								unexplained infertility, polycystic ovary syndrome (PCOS), bad quality eggs,
								endometriosis, fallopian tube disorder, hormonal imbalances… and today many of them
								are enjoying a new life as a mom.</p>
						</div>
					</div>

				</div>
				<div class="item coach-items" data-id="2">
					<div>
						<div class="d-lg-flex">
							<picture>
								<source media="(max-width:414px )"
										srcset="<?php bloginfo('template_directory'); ?>/images/coachsrcset3.png">
								<img src="<?php bloginfo('template_directory'); ?>/images/coach5.png" alt=""
									 class="width-100" width="131" height="148">
							</picture>
							<div class="p-3 p-lg-1 p-xl-3">
								<h3 class="pink-color">Coach Kela</h3>
								<h6>Certified Holistic Health & Wellness Coach, Fitness Trainer And Wellness
									Educator</h6>
							</div>
						</div>
						<div>
							<p class="title-p">The author of “The Complete Hormone Puzzle Cookbook” and “The Hormone
								Puzzle Method” for solving infertility, Kela helps her clients learn how to cycle
								sync so they have pleasant periods, boosted fertility, happy hormones, hotter sex
								lives, and greater creativity, productivity, and wellbeing at work.</p>
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
		<div class="col-lg-7 mt-3 mt-md-0 d-none d-sm-block"
			 style="background: url('<?php bloginfo('template_directory'); ?>/images/coachbg.png') right no-repeat">
			<div class="coach2 col-lg-8 d-flex mx-auto justify-content-center mt-md-4 mt-lg-0">
				<p class="pey-coach">24/7 Messaging</p>
			</div>
			<div class="d-flex justify-content-end mt-4 mt-lg-0">
				<img src="<?php bloginfo('template_directory'); ?>/images/coach01.svg" alt="">
			</div>
			<div class="d-flex justify-content-end mt-5">
				<div class="coach2 col-lg-8 d-flex justify-content-center"
					 style="border-radius: 40px 40px 40px 0px;">
					<p class="pey-coach">1:1 Phone and video sessions</p>
				</div>
			</div>
			<div class="d-flex col-5 justify-content-center mt-4 mt-lg-0">
				<img src="<?php bloginfo('template_directory'); ?>/images/coach02.svg" alt="">
			</div>
			<div class="coach2 col-lg-8 d-flex mx-auto justify-content-center mt-5">
				<p class="pey-coach">Live group and on-demand classes</p>
			</div>
			<div class="d-flex justify-content-end mt-4 mt-lg-0">
				<img src="<?php bloginfo('template_directory'); ?>/images/coach03.svg" alt="">
			</div>
		</div>

	</div>


	<!----------testimonials---------------------------->
	<div class="col-12 col-sm-10 mx-auto mt-5 p-0 showOnDesktopTestimonials">
		<h3 class="title text-center blue-color" style="margin-top: 80px;">Clients’ Stories</h3>
		<div class="owl-carousel owl-theme owltesti">
			<?=testimonialItemBox('Jessica','When I started with you, my period was missing in action for 2 years. My doctors just recommended donor eggs. Well, at the beginning of 2020, I started the Hormone Puzzle and after 2 months, I started spotting. And today, I am 5 weeks pregnant. Thank you so much for the guidance and information you give with your coaching.')?>
			<?=testimonialItemBox('Amy','Navigating the fertility space after multiple losses can be a really anxious experience and fear is a major component. Working with Kela has given me peace now that I am expecting. She’s attentive, provides regular physical AND emotional wellness checks, and has given me access to meal plans and dietary guidance that is crucial to the health of this pregnancy.')?>
			<?=testimonialItemBox('Mimi','I loved working with Coach Kela. She has a wealth of information to help women who are trying
to get pregnant. She is very helpful. I thought I was eating healthy but eating for fertility is a
completely different ballgame. Thank you coach for all your help!')?>
			<?=testimonialItemBox('Kim','Because of coach Kela, I am pregnant after 4 years of trying. All I did was implement her easy
to follow recipes and meal plans and adopted the hormone puzzle method and bam - pregnant.')?>
			<?=testimonialItemBox('Julie','I met her when I was demoralized after 3 OB-Gyn’s diagnosing me with infertility, due to
extremely poor egg quality. Sonia took me under her wing for a magical journey to fertility,
empowerment, and trust. I got pregnant naturally 5 months after working with her, and I can say
hands down that I owe her this baby.')?>
			<?=testimonialItemBox('Cristina','I had 5 viable eggs left and IVF was my last chance to get pregnant. Sonia helped design
tailor-made diets to boost both my eggs and his sperm quality, she designed a yoga +
meditation program and took us both through a self-discovery, empowering journey. Not only
did we get pregnant with twins, but we also rediscovered a passionate love for each other!')?>
			<?=testimonialItemBox('Laura','My OB-Gyn referred me to her as I was getting worryingly obsessed with trying to conceive with
Polycystic Ovary Syndrome (PCOS): she told me Sonia would help me calm down and optimize
my fertility. She turned me from a demoralized, hopeless wreck into a brave, sexy, fertility
goddess. I now have a 3-month-old, healthy, happy baby: what else could I ask for?')?>

		</div>
	</div>



	<!--------end testimonials------------------------->
	<div id="section4"
		 style="background: url('<?php bloginfo('template_directory'); ?>/images/coachbg2.png') center no-repeat">
		<div class="mx-auto col-11 col-sm-10 dash2 d-none d-sm-block" style="margin-top: 100px">
			<p class="mx-auto text-center m-0">
				"Do you know that some diets are more fertility-friendly than others? Mediterranean is a good example of
				a friendly diet. We will help you to design yours."<br>
				<span class="pink-color"> - Your Fertilligence Team </span>
			</p>
		</div>
	</div>
















	<div class="mx-auto col-9 p-0 mt-5 pt-sm-0">
		<p class="title-p text-left mt-0 pt-0 mt-sm-5 pt-sm-5" style="font-size:17px;line-height:35px;color:#000;text-align:center;">
			<span class="title text-center col-12 d-block" style="margin-bottom:.5rem;">Consider us your conception concierge</span>
			Together, we'll personalize a holistic approach to conception based on your lifestyle, plans and
			pre-pregnancy challenges. Then, we'll ensure you have the insights, tools and hands-on support to
			maximize your chance of conceiving.</p>

	</div>
</div>


<!------------section5----------------------->
<div class="col-12" id="section5"
	 style="margin-top: -20px;background: url('<?php bloginfo('template_directory'); ?>/images/appbg.png') no-repeat">
	<div id="sa1280" class="col-10 col-lg-12 col-xl-10 d-lg-flex mx-auto p-0  mt-5" style="padding-top:50px!important">
		<div class="col-12 col-lg-3  padding-0 text-right d-flex item1 p0-rotate jc p-0 pl-lg-3">
			<picture>
				<div id="s1" class="app-poster col-12 w100-rotate width-100 br0 border-rotate1"
					 style="border-radius: 0 30px;width: 94%;">
					<p class="col-12 text-left text-white">Lifestyle change tracker</p>
				</div>
 				<source media="(max-width:900px)"
						srcset="<?php bloginfo('template_directory'); ?>/images/srcset1.jpg">
<!--				<source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
				<source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
				<source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
				<source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6671.jpg">
				
				<source media="(max-width:1024px)"
						srcset="<?php bloginfo('template_directory'); ?>/images/ipad1.png"> -->
				<img src="<?php bloginfo('template_directory'); ?>/images/app1.jpg" alt=""
					 class="width-100 max-w-100">
			</picture>
			<!--       <div class="item1-hover" style="margin-top: 200px;margin-left: -120px;">
<p>appointments via video chat or phone call</p>
</div>-->
		</div>
		<div class="col-lg-6 p-0 text-center mt-sm-3 mt-lg-0" style="display: grid;align-items: center">
			<div class="d-flex padding-0  item1 col-12 p0-rotate jc p-0 pr-lg-3 pl-lg-3" style="align-items: flex-end">

				<picture>
					<div id="s2" class="app-poster  col-12 width-100 w100-rotate" style="width: 94.2%;">
						<p class="text-left text-white">1:1 Coaching Sessions with Fertility Coaches and
							Nutritionists via Video Chat, Phone Call or Messenger</p>
					</div>
					<source media="(max-width:900px)"
							srcset="<?php bloginfo('template_directory'); ?>/images/srcset2.jpg">
<!--					<source media="(max-width:668px)"
							srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
					<source media="(max-width:724px)"
							srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
					<source media="(max-width:736px)"
							srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
					<source media="(max-width:808px)"
							srcset="<?php bloginfo('template_directory'); ?>/images/6672.jpg">
					<source media="(max-width:1024px)"
							srcset="<?php bloginfo('template_directory'); ?>/images/ipad2.png"> -->
					<img src="<?php bloginfo('template_directory'); ?>/images/app2.jpg" alt=""
						 class="mt-4 mt-sm-0 w-100  max-w-100">
				</picture>
				<!---->
				<!---->
				<!--                    <div class="item1-hover" style="margin-bottom: 140px;margin-left: -120px">-->
				<!--                        <p>appointments via video chat or phone call</p>-->
				<!--                    </div>-->
			</div>
			<div class="d-lg-flex" style="justify-content: space-evenly">

				<div class="d-flex item1 padding-0" style="align-items: flex-end;padding-top: 20px;">
					<div class="col-12 p-0">
						<picture>
							<div class="app-poster">
								<p class="text-left text-white col-10">Online group and prerecorded lifestyle and
									fitness classes</p>
							</div>

							<source media="(max-width:900px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/srcset3.jpg">
<!-- 							<source media="(max-width:668px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
							<source media="(max-width:724px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
							<source media="(max-width:736px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
							<source media="(max-width:808px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6673.jpg">
							<source media="(max-width:1024px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/ipad3.png"> -->
							<img src="<?php bloginfo('template_directory'); ?>/images/app3.jpg" alt=""
								 class="mt-4 mt-sm-0 img-fluid  max-w-100">
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
								<p class="text-left text-white col-12">Access to curated personalized knowledge
									base</p>
							</div>

							<source media="(max-width:900px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/srcset4.jpg">
<!-- 							<source media="(max-width:668px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
							<source media="(max-width:724px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
							<source media="(max-width:736px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
							<source media="(max-width:808px)"
									srcset="<?php bloginfo('template_directory'); ?>/images/6674.jpg">
							<source media="(max-width:1024px )"
									srcset="<?php bloginfo('template_directory'); ?>/images/ipad4.png"> -->

							<img src="<?php bloginfo('template_directory'); ?>/images/app4.jpg" alt=""
								 class="mt-4 mt-sm-0 w-100  max-w-100">
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
				<div id="s3" class="app-poster col-12 border-radius width-100 w100-rotate border-rotate2"
					 style="border-radius: 30px 0;width:94%">
					<p class="col-11 text-left text-white">Personalized meal plans and recipes</p>
				</div>
				<source media="(max-width:900px)"
						srcset="<?php bloginfo('template_directory'); ?>/images/srcset5.jpg">
<!-- 				<source media="(max-width:668px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
				<source media="(max-width:724px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
				<source media="(max-width:736px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
				<source media="(max-width:808px)" srcset="<?php bloginfo('template_directory'); ?>/images/6675.jpg">
				<source media="(max-width:1024px )"
						srcset="<?php bloginfo('template_directory'); ?>/images/ipad5.png"> -->

				<img src="<?php bloginfo('template_directory'); ?>/images/app5.jpg" alt=""
					 class="mt-4 mt-sm-0 width-100  max-w-100">
			</picture>
			<!--
<div class="item1-hover" style="margin-bottom: 200px;margin-left: -150px">
<p>appointments via video chat or phone call</p>
</div>-->
		</div>
	</div>

</div>
<!------------section12---------------------->
<div class="col-12 h-400 bg-size-cover-rotate bg-pos-y-rotate" id="section13"
	 style="margin-top: 100px;height: 606px;padding: 0;width: 100%;background:url('<?php bloginfo('template_directory'); ?>/images/img10.png') center no-repeat">
	<div style="position: absolute;width: 100%;height: 100%;background-image:linear-gradient(rgba(10,9,9,0.4) 50%,rgba(255,255,255,0.1) 100%);">
		<div class="col-lg-11 mx-auto mt-5 mt-sm-0">
			<h2 class="lineheight-rotate">Wonder what the Fertilligence experience is like?</h2>
			<p class="mt-4 text-center col-lg-7 mx-auto">Welcome to your new fertility lifestyle! Watch the video to
				see how Fertilligence will support you on your journey.</p>
		</div>

		<a data-toggle="modal" data-target="#modalvideo">
			<div class="play-out play-icon-rotate">
				<div class="play-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/playicon.svg" alt=""
						 style="margin-left: 7px;">
				</div>
			</div>

		</a>
		<h6 class="watch">Watch the video</h6>


	</div>








</div>
<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close-video-rotate" data-dismiss="modal" aria-label="Close">
					<!--                     <span aria-hidden="true">&times;</span> -->
					<img src="<?php bloginfo('template_directory'); ?>/images/close.png">
				</button>
			</div>
			<div class="modal-body">
				<div class="embed-responsive embed-responsive-16by9">
					<video class="embed-responsive-item autoplay-item"
						   src="<?php bloginfo('template_directory'); ?>/videos/Fertilligence.mov" controls
						   controlsList="nodownload" preload="none"></video>
				</div>
			</div>

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


<!------------section3(****d-none****)----------------------->
<div class="col-12 d-none" id="section6">
	<div class="col-6 mx-auto p-0"
		 style="position:relative;background: url('<?php bloginfo('template_directory'); ?>/images/33.jpg');background-repeat: no-repeat;background-position-x: center!important;height: 800px;">
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
		<div class="col-lg-8 p-0"
			 style="background: url('<?php bloginfo('template_directory'); ?>/images/quizbg.png') no-repeat">
			<div class="col-lg-9 p-0 pt-0 pt-lg-4">
				<h4 class="title mt-5 ml display-none text-center-mob">Is Fertilligence Right For You?</h4>
				<p class="title-p mt-3">
					Everyone is unique—we get that. That's why our approach considers simple, powerful lifestyle
					modifications to improve your well-being and improve your chances of conceiving naturally.
				</p>
				<p class="title-p mt-3">Take our 2 - minute quiz to learn more about the lifestyle factors impacting
					conception and get your own Fertilligence<sup><small>TM</small></sup> Lifestyle Profile
					explained by our fertility coaches.</p>
			</div>
			<a href="quiz/" class="btn p-0 mt-5 mt-sm-3 button-center">
				<div class="button3 btn5">
					<p>Take The Quiz</p>
				</div>
			</a>
		</div>
		<div class="col-lg-4 p-0">
			<picture>
				<source media="(max-width:414px )"
						srcset="<?php bloginfo('template_directory'); ?>/images/Group%2020219mobile.png">
				<img src="<?php bloginfo('template_directory'); ?>/images/Group%2020219.png" alt=""
					 class="img-fluid wh-auto">
			</picture>
		</div>
	</div>
	<div class="col-lg-10 mx-auto text-center dash1" style="margin-top: 80px">
		<p class="mx-auto">"Do you know that the average cost of IVF cycle in the US is around $20,000 when account
			for all
			procedures, lab work, doctor visits and medications? Modern lifestyle-first approach could be an
			affordable alternative."
		<p class="blue-color m-0">- Your Fertilligence Team</p>
	</div>


</div>
<!------------section7----------------------->
<h1 class="text-center title" style="margin-bottom: 25px;margin-top: 80px">Choose The Fertilligence Package That's
	Right For You</h1>
<p class="title-p col-sm-8 col-10 p-0 mx-auto text-center" style="margin-bottom: 141px;">With three unique packages,
	start with the level of support that feels right for you.<br>You can always change it at the end of your month.
</p>



<div class="nbe-tab-content-whole mainPagePackage mx-auto">

	<?php include 'packages-content2.php'; ?>
</div>


<!------------------section8----------------->
<div class="col-12" id="section8"
	 style="margin-top: 80px;background: url('<?php bloginfo('template_directory'); ?>/images/fitbg.png') no-repeat">
	<p class="title text-center">Got Questions? We’ve Got Answers?</p>

	<div class="col-lg-8 mt-5 d-lg-flex d-sm-flex justify-content-between mx-auto align-items-center p-0 h-fit"
		 style="height: 330px">
		<div class="col-lg-5">
			<div class="fit" style="">
				<div class="section1-cards mx-auto p-3">
					<img src="<?php bloginfo('template_directory'); ?>/images/Group%2020299.svg" alt=""
						 class="center-block">
					<h5 class="pt-4">Chat LIVE with our expert</h5>
				</div>
			</div>
			<a target="_blank"
			   href="https://go.crisp.chat/chat/embed/?website_id=2e8e0603-a205-4b14-a8c1-539a01cf965e" id="crisp"
			   class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
				<div class="button3 btn5" style="width: 177px;height: 50px">
					<p id="closechat" class="text-center">Chat Now</p>
				</div>
			</a>
		</div>
		<div class="col-lg-5">
			<div class="fit mt-50" style="    margin-top: 150px;">
				<div class="section1-cards mx-auto p-3">
					<img src="<?php bloginfo('template_directory'); ?>/images/Group%2020300.svg" alt=""
						 class="center-block">
					<h5 class="pt-2">Browse frequently asked questions</h5>
				</div>
			</div>
			<a href="faq/" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;">
				<div class="button3 learnmore"
					 style="width: 177px;height: 50px;background-color:  #1098D6;box-shadow: 0 8px 35px rgba(148,218,236,0.4);">
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
				<div class="mt-5"
					 style="width: 100%;height: 200px;box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.09);border: 1px solid rgba(238,238,238,0.6)">
					<div class="d-flex justify-content-center">
						<div class="team-icon"
							 style="background: url('<?php bloginfo('template_directory'); ?>/images/icon1.png') center no-repeat;background-size: contain"></div>
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
<div id="section11" class="bg-contain-rotate bg-contain col-12  mx-auto  align-content-center p-0"
	 style="background: url('<?php bloginfo('template_directory'); ?>/images/babybg.png') top no-repeat;">
	<div class="bg-contain-rotate bg-contain bg-pos-top"
		 style="background:url('<?php bloginfo('template_directory'); ?>/images/babybg2.png') no-repeat;width: 100%;height: 100%;position: absolute"></div>
	<div class="d-lg-flex d-sm-flex" style="padding-top: 150px">
		<div id="bab-img" class="col-lg-6 mw-100">
			<img src="<?php bloginfo('template_directory'); ?>/images/baby.png" alt="" class="mw-100"
				 style="max-height: 80%;margin-left: 150px;">
		</div>
		<div class="col-lg-6  d-flex align-items-center justify-content-center">
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" alt=""
					 class="mw-100 display-none">
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