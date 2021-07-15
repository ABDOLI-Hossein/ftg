<?php
/**
 * Template Name: How It Works
 * Template Post Type: post, page
 */

get_header();

?>
<style>
	/*  step new styles     */
	.sa-each-step-wrapper{
		width: 100%;
		display: flex;
		align-items: center;
		padding:30px 50px;
		min-height: 130px;
		border-radius: 20px 0 20px 0;
		box-sizing: border-box;
		box-shadow: 0 15px 35px rgba(0,0,0,0.07);
		margin-bottom: 53px;
		position: relative;
	}
	.sa-step-p{
		font-family: Poppins-Regular, serif!important;
		font-size: 20px;
		line-height: 27px;
		padding-left: 23px;
		margin:0;
		/*font-family: Poppins-Medium, serif;*/
	}
	.sa-each-step-wrapper-right{
		justify-content: space-between;
	}
	.sa-step-each-number{
		width: 49px;
		height: 49px;
		border-radius: 100%;
		background-color: #fff;
		display: flex;
		align-items: center;
		justify-content: center;
		position: absolute;
		top: 0;
		left: -10px;
		font-size: 23px;
		font-family: Poppins-Medium, serif;
	}
	.sa-step-each-number-right{
		width: 49px;
		height: 49px;
		border-radius: 100%;
		background-color: #fff;
		display: flex;
		align-items: center;
		justify-content: center;
		position: absolute;
		top: 0;
		right: -10px;
		font-size: 23px;
		font-family: Poppins-Medium, serif;
	}
	.sa-item-5-style-circle{
		width: 125px;
		height: 125px;
		display: flex;
		align-items: center;
		justify-content: center;
		border-radius: 100%;
		background-color: #fff;
		box-shadow: 0 10px 35px rgba(237,15,104,0.2);
	}
	#sa-items5-row{
		margin-top: 70px;
	}
	.n5 h6{
		font-size: 14px;
		line-height: 20px;
		font-family: Poppins-Medium, serif;
		margin-top: 10px;
		text-align: center;
	}
	#sa-items5-row img{
		display: block;
		margin: 0 auto;
	}
	.buttonForBookNow {
		background-color: #ED0F68;
		border: 1px solid #ED0F68;

		width: 162px;
		height: 47px;
		display: flex;
		align-items: center;
		justify-content: center;
		border-radius: 30px;
		margin : 0 auto;

	}
	.buttonForBookNow:hover {
		border: 1px solid rgb(237,15,104);
		background-color: white;
	}

	.buttonForBookNow > p {
		font-size: 17px;
		margin: 0;
		color: white;
	}

	.buttonForBookNow:hover > p {
		font-size: 17px;
		margin: 0;
		color: #ED0F68;
	}
	@media only screen and (max-width: 420px){
		.sa-each-step-wrapper{
			flex-wrap: wrap;
			padding: 15px;
			justify-content: center;

		}
		.sa-each-step-wrapper p{
			padding-top: 22px;
		}
		.sa-each-step-wrapper-right{
			flex-wrap: wrap-reverse!important;
			justify-content: center;

		}


	}
</style>

<div class="col-12 col-lg-10 mx-auto p-0" style="margin-top:80px">
	<h1 class="title text-center blue-color">
		10 Steps On How To Get Starter On<br>
		The Fertilligence Platform
	</h1>
	<!--<p class="title-p text-center col-12 col-lg-10 mx-auto" style="font-family: Poppins-Regular, serif;;color:#000!important;padding: 0 25px!important;font-size:20px"></p> -->
</div>




<div class="col-11 col-md-10 mx-auto col-sm-10 mx-auto" style="margin-top:55px">

	<div class="sa-each-step-wrapper">
		<div class="sa-step-each-number" style="border: 1px solid #FF9800;color: #FF9800;box-shadow:0 5px 30px rgba(255,152,0,0.3)">1</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-1.png" alt="">
		<p class="sa-step-p">Login and complete your registration on the platform</p>
	</div>
	<div class="sa-each-step-wrapper sa-each-step-wrapper-right">
		<div class="sa-step-each-number-right" style="border: 1px solid #94DAEC;color: #94DAEC;box-shadow:0 5px 30px rgba(148,218,236,0.3)">2</div>
		<p class="sa-step-p">Fill out the Health and Wellness questionnaires</p>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-2.png" alt="">

	</div>
	<div class="sa-each-step-wrapper">
		<div class="sa-step-each-number" style="border: 1px solid #FFE500;color: #FFE500;box-shadow:0 5px 30px rgba(255,229,0,0.3)">3</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-3.png" alt="">
		<p class="sa-step-p">Click on the information icon to watch the tutorial on
			how to use the platform</p>
	</div>
	<div class="sa-each-step-wrapper sa-each-step-wrapper-right">

		<div class="sa-step-each-number-right" style="border: 1px solid  #8E24AA;color:  #8E24AA;box-shadow:0 5px 30px rgba(142,36,170,0.3)">4</div>
		<p class="sa-step-p">Fill out the Health and Wellness questionnaires</p>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-4.png" alt="">
	</div>
	<div class="sa-each-step-wrapper d-none d-xl-block n5">
		<div class="sa-step-each-number" style="border: 1px solid #ED0F68;color: #ED0F68;box-shadow:0 5px 30px rgba(237,15,104,0.2)">5</div>
		<div class="d-flex align-items-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-5.png" alt="">
			<p class="sa-step-p">On your home screen, select one of the 11 lifestyle modification pillars that is a
				priority for you, or that has been identified as a priority by your coach</p>

		</div>
		<div id="sa-items5-row">
			<div class="col-10 mx-auto mb-4" style="flex-wrap: wrap;display: flex;justify-content: space-between;">
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-1.png" alt="">
						<h6>Nutrition</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-2.png" alt="">
						<h6>Hydration</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-3.png" alt="">
						<h6>supplements</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-4.png" alt="">
						<h6>stress</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-5.png" alt="">
						<h6>Ovulation</h6>
					</div>
				</div>
			</div>
			<div class="col-8 mx-auto mb-4"  style="flex-wrap: wrap;display: flex;justify-content: space-between">

				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-6.png" alt="">
						<h6>weight</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-7.png" alt="">
						<h6>Exercise</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-8.png" alt="">
						<h6>Partner Conection</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-9.png" alt="">
						<h6>Mood</h6>
					</div>
				</div>
			</div>
			<div class="col-4 mx-auto mb-4"  style="flex-wrap: wrap;display: flex;justify-content: space-between">
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-10.png" alt="">
						<h6>Sleep</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-11.png" alt="">
						<h6>Environment</h6>
					</div>
				</div>
			</div>
		</div>



	</div>

	<div class="sa-each-step-wrapper d-block d-xl-none n5">
		<div class="sa-step-each-number" style="border: 1px solid #ED0F68;color: #ED0F68;box-shadow:0 5px 30px rgba(237,15,104,0.2)">5</div>
		<div class="d-block  d-sm-flex align-items-center">
			<img class="d-block mx-auto" src="<?php bloginfo('template_directory'); ?>/images/sa-step-5.png" alt="">
			<p class="sa-step-p">On your home screen, select one of the 11 lifestyle modification pillars that is a
				priority for you, or that has been identified as a priority by your coach</p>

		</div>
		<div id="sa-items5-row">
			<div class="mb-4" style="flex-wrap: wrap;display: flex;justify-content: space-between;">
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-1.png" alt="">
						<h6>Nutrition</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-2.png" alt="">
						<h6>Hydration</h6>
					</div>
				</div>

			</div>
			<div class="mb-4" style="flex-wrap: wrap;display: flex;justify-content: center;">

				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-3.png" alt="">
						<h6>supplements</h6>
					</div>
				</div>

			</div>
			<div class="mb-4" style="flex-wrap: wrap;display: flex;justify-content: space-between;">

				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-4.png" alt="">
						<h6>stress</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-5.png" alt="">
						<h6>Ovulation</h6>
					</div>
				</div>
			</div>


			<div class="mb-4"  style="flex-wrap: wrap;display: flex;justify-content: center">

				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-6.png" alt="">
						<h6>weight</h6>
					</div>
				</div>

			</div>
			<div class="mb-4"  style="flex-wrap: wrap;display: flex;justify-content: space-between">


				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-7.png" alt="">
						<h6>Exercise</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-8.png" alt="">
						<h6>Partner Conection</h6>
					</div>
				</div>

			</div>
			<div class="mb-4"  style="flex-wrap: wrap;display: flex;justify-content:center">



				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-9.png" alt="">
						<h6>Mood</h6>
					</div>
				</div>
			</div>

			<div class="mb-4"  style="flex-wrap: wrap;display: flex;justify-content: space-between">
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-10.png" alt="">
						<h6>Sleep</h6>
					</div>
				</div>
				<div class="sa-item-5-style-circle">
					<div>
						<img src="<?php bloginfo('template_directory'); ?>/images/sa-items-11.png" alt="">
						<h6>Environment</h6>
					</div>
				</div>
			</div>
		</div>



	</div>
	<div class="sa-each-step-wrapper sa-each-step-wrapper-right">
		<div class="sa-step-each-number-right" style="border: 1px solid  #CDDC39;color:  #CDDC39;box-shadow:0 5px 30px rgba(205,220,57,0.3)">6</div>
		<p class="sa-step-p">Read the content in the library and try to apply some of<br class="d-xl-none">
			the recommendations for this pillar</p>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-6.png" alt="">
	</div>
	<div class="sa-each-step-wrapper">
		<div class="sa-step-each-number" style="border: 1px solid #FF5722;color: #FF5722;box-shadow:0 5px 30px rgba(255,87,34,0.3)">7</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-8.png" alt="">
		<p class="sa-step-p">Click the “Track My Progress” button to monitor your<br class="d-xl-none">
			progress in that pillar</p>
	</div>
	<div class="sa-each-step-wrapper sa-each-step-wrapper-right">
		<div class="sa-step-each-number-right" style="border: 1px solid  #673AB7;color:  #673AB7;box-shadow:0 5px 30px rgba(103,58,103,0.3)">8</div>
		<p class="sa-step-p">Take your time to master each pillar before moving on to<br class="d-xl-none">
			the next one</p>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-9.png" alt="">
	</div>
	<div class="sa-each-step-wrapper">
		<div class="sa-step-each-number" style="border: 1px solid #18FFFF;color: #18FFFF;box-shadow:0 5px 30px rgba(24,255,255,0.3)">9</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-10.png" alt="">
		<p class="sa-step-p">Select another pillar as soon as you feel confident with your current one, and<br class="d-xl-none">
			track your progress (it typically takes 2-3 weeks to make it a part of your daily<br class="d-xl-none"> routine)</p>
	</div>
	<div class="sa-each-step-wrapper sa-each-step-wrapper-right">
		<div class="sa-step-each-number-right" style="border: 1px solid  #FFE500;color:  #FFE500;box-shadow:0 5px 30px rgba(251,251,0,0.3)">10</div>
		<p class="sa-step-p">Message coaches 24/7 with any questions or advice that you<br class="d-xl-none">
			need. Take advantage of 1:1 virtual appointments with fertility<br  class="d-xl-none">
			and nutrition experts</p>
		<img src="<?php bloginfo('template_directory'); ?>/images/sa-step-11.png" alt="">
	</div>




	<div class="sa-blue-wrapper" style="border: 1px dashed #ED0F68!important;box-shadow: 0 15px 40px rgba(237,15,104,0.09)!important;">
		<h5 style="color: #ED0F68;font-size: 20px;line-height: 30px;font-family: Poppins-Regular, serif" class="pl-4">Be Fertilligent</h5><br>
		<p class="sa-step-p">Choose The Fertilligence Package That's Right For You.</p>
		<p class="sa-step-p">
			With three unique packages, start with the level of support that feels right for you.
			You can always change it at the end of your month.
		</p>


		<a href="https://fertilligence.com/packages" class="btn  btn-lg center-block">
			<div class="buttonForBookNow" style="box-shadow: 0 10px 40px 0 rgba(237, 15, 104, 0.1)">
				<p>Start Now</p>
			</div>
		</a>
	</div>

</div>




<?php

get_footer();

?>