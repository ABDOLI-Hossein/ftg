<?php

/**
 * Template Name:  Resource Single 
 * Template Post Type: post, page
 */

get_header();


global $post;

$pageContent=getResourcesById($post->ID);
$tagArrays=explode(',',$pageContent[0]->allTags);
$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 


$allTag=[];
$allTagsInString='';
$healthTags=explode(',',$pageContent[0]->health_tag);
$lifestyleTags=explode(',',$pageContent[0]->lifestyle_tag);
$conditionTags=explode(',',$pageContent[0]->condition_tag);
foreach($healthTags as $healthTag){
	if (!empty($healthTag)){
		$allTag[]=$healthTag;
		$allTagsInString.=$healthTag.',';		
	}

}
foreach($lifestyleTags as $lifestyleTag){
	if (!empty($lifestyleTag)){
		$allTag[]=$lifestyleTag;
		$allTagsInString.=$lifestyleTag.',';	
	}

}
foreach($conditionTags as $conditionTag){
	if (!empty($conditionTag)){
		$allTag[]=$conditionTag;
		$allTagsInString.=$conditionTag.',';
	}

}			
$allTagsInString = rtrim($allTagsInString, ",");


?>
<style>
	.video-poster {
		display: flex;
		width: 97%;
		height: 100%;
		background-size: contain;
		background-position: center;
		position: absolute;
		/* margin-top: -210px; */
		top: 0;
		cursor: pointer;
		border-radius: 20px;
		right: 0;
		left: 0;
		margin: 0 auto;
	}
	.video-item {
		width: 100%;
		height: 100%;
		cursor: pointer;
		border-radius: 20px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	.sa-powered{
		display:flex;
		align-items:center;
		justify-content:center;
	}
	.sa-powered h6{
		font-size: 13px!important;
	}
	.sa-powered img{
		max-width:100px;
	}
	.sa-post-title{
		font-size: 27px;
		text-align:center;
		color:#000;
		line-height: 35px;
		font-family: Poppins-SemiBold;
	}
	.sa-page-detail{
		width: 100%;
		border-radius: 20px;
		padding: 32px 40px!important;
		border:1px solid #EEEEEE;
		box-shadow: 0 8px 35px rgba(0,0,0,0.1);
	}
	.sa-page-detail h6{
		font-size: 20px;
		line-height: 30px;
		color:#1098d6!important;
		margin: 26px 0;
		font-family: Poppins-SemiBold, sans-serif  ;
	}
	.sa-blue-wrapper {
		border: 1px dashed #ED0F68;
		padding: 26px 22px;
		margin-top: 26px;
		border-radius: 20px 0 20px 0;
		box-shadow: 0 15px 40px rgba(237,15,104,0.09);
	}
	.sa-video-centent p{
		font-size: 17px;
		line-height: 30px;
		color: #000;
	}

	.sa-video-centent h1{
		font-size: 27px;
		text-align: center;
		color: #000;
		line-height: 35px;
		font-family: Poppins-SemiBold;
	}
	.sa-video-centent h6{
		font-size: 20px;
		line-height: 30px;
		color: #1098d6!important;
		margin: 26px 0;
		font-family: Poppins-SemiBold, sans-serif;
	}


	.submitQuestion {
		box-shadow: 0 10px 40px rgba(237,15,104,0.2);
		font-size: 18px !important;
		border-style: solid !important;
		text-decoration: none !important;
		border-radius: 30px !important;
		background-color: #ed0f68;
		border-width: 0px !important;
		color: #FFF !important;
		font-weight: 400 !important;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0;
		max-width: 207px;
		height: 60px;

		font-family: Poppins-Regular, serif;
	}

	.submitQuestion:hover {
		background-color: #fff!important;
		color: #ED0F68!important;
		border: 1px solid #ed1067!important;
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

	#XMLID_1_ path{
		stroke:#1098d6!important;
	}
	.sa-tags-icon-page-detail svg{
		margin-right:10px
	}
	.sa-page-detail-post h6{
		color:#000!important;
		font-family: Poppins-Regular, serif;
	}
	.singleTagStyle a{
		color: #989898!important;
	}
	@media only screen and (max-width:420px){
		.sa-post-title {
			font-size: 16px;
		}
		.sa-each-tag-page-content-style {
			font-size: 14px;
		}
		.sa-each-page-detail-post h6 {
			font-size: 14px;
		}
		.sa-page-detail-post .sa-each-page-detail-post:nth-child(3) svg{
			width:65px!important
		}
		.sa-page-detail-post .sa-each-page-detail-post:nth-child(1) svg{
			width:20px!important
		}
		.sa-page-detail {
			width: 100%;
			border-radius: 20px;
			padding: 23px 17px!important;
		}
	}


</style>


<div id="sa-blog-wrapper" class="col-12 col-lg-12 mx-auto d-flex p-0">
	<div class="col-12 col-lg-8 mx-auto pt-5">

		<div class="sa-page-detail">
			<div>
				<h1 class="sa-post-title">
					<?=$pageContent[0]->post_title?>
				</h1>
			</div>




			<?php if ($pageContent[0]->type=='Article') { ?>


			<div class="text-center" style="margin:46px 0">
				<img src="<?=$featured_img_url?>" alt=""
					 style="max-width: 100%;border-radius: 20px">
			</div>
			<?php if (!empty($pageContent[0]->box1)){ ?>
			<h6>In a nutshell</h6>
			<?=htmlspecialchars_decode($pageContent[0]->box1)?>
			<?php } ?>

			<?php if (!empty($pageContent[0]->box2)){ ?>
			<h6>Some background</h6>
			<?=htmlspecialchars_decode($pageContent[0]->box2)?>
			<?php } ?>

			<?php if (!empty($pageContent[0]->box3)){ ?>
			<h6>Methods & findings</h6>
			<?=htmlspecialchars_decode($pageContent[0]->box3)?>
			<?php } ?>		

			<?php if (!empty($pageContent[0]->box4)){ ?>
			<h6>Methods & findings</h6>
			<div class="sa-blue-wrapper">
				<h5 style="color: #ED0F68;font-size: 20px;line-height: 30px">The bottom line</h5>
				<?=htmlspecialchars_decode($pageContent[0]->box4)?>
			</div>

			<?php } ?>				

			<?php if (!empty($pageContent[0]->box5)){ ?>
			<h6>The fine print</h6>
			<?=htmlspecialchars_decode($pageContent[0]->box5)?>
			<?php } ?>	

			<?php if (!empty($pageContent[0]->box6)){ ?>
			<h6>What’s next?</h6>
			<?=htmlspecialchars_decode($pageContent[0]->box6)?>
			<?php } ?>	

			<div class="sa-blue-wrapper">
				<h5 style="color: #ED0F68;font-size: 20px;line-height: 30px">Be Fertilligent</h5>
				<p>Book an appointment with your dedicated fertility coach today.</p>


				<a href="<?php echo get_site_url(); ?>/packages" class="btn  btn-lg center-block">
					<div class="buttonForBookNow" style="box-shadow: 0 10px 40px 0 rgba(237, 15, 104, 0.1)">
						<p>Book Now</p>
					</div>
				</a>
			</div>

			<?php }else{ ?>
			<?php if (!empty(the_content())){ ?>
			<div class="section1-3" style="margin-left: -50px;margin-bottom: -40px;">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="506.5" height="172" viewBox="0 0 506.5 172">
					<defs>
						<filter id="Ellipse_803" x="0" y="0" width="172" height="172" filterUnits="userSpaceOnUse">
							<feOffset dy="10" input="SourceAlpha"></feOffset>
							<feGaussianBlur stdDeviation="17.5" result="blur"></feGaussianBlur>
							<feFlood flood-opacity="0.149"></feFlood>
							<feComposite operator="in" in2="blur"></feComposite>
							<feComposite in="SourceGraphic"></feComposite>
						</filter>
						<linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#0d1861"></stop>
							<stop offset="1" stop-color="#6471c5"></stop>
						</linearGradient>
					</defs>
					<g id="Group_1" data-name="Group 1" transform="translate(-89.5 -850.5)">

						<g transform="matrix(1, 0, 0, 1, 89.5, 850.5)" filter="url(#Ellipse_803)">
							<circle id="Ellipse_803-2" data-name="Ellipse 803" cx="33.5" cy="33.5" r="33.5" transform="translate(52.5 42.5)" fill="#fff"></circle>
						</g>
						<g id="student" transform="translate(85.613 902.75)">
							<g id="Group_11246" data-name="Group 11246" transform="translate(72.296)">
								<path id="Path_88086" data-name="Path 88086" stroke="#1098d6" d="M104.219,31.923V26.891l-2.123.826-.006-.014-.051-.092a5.465,5.465,0,0,0-3.611-2.417l-5.109-.93v-.4a7.8,7.8,0,0,0,3.746-5.24,3.12,3.12,0,0,0,2.483-3.05V7.882A4.883,4.883,0,0,0,96.059,3.2l-.389-.389A9.587,9.587,0,0,0,79.3,9.587v5.985a3.12,3.12,0,0,0,2.483,3.05,7.8,7.8,0,0,0,3.746,5.24v.4l-5.108.929a5.467,5.467,0,0,0-3.61,2.414l-.047.114-2.136-.831v5.031A2.339,2.339,0,0,0,72.3,34.259v3.114a2.339,2.339,0,0,0,2.336,2.336v2.868l14.793,5.754,14.793-5.754V39.709a2.339,2.339,0,0,0,2.336-2.336V34.259A2.339,2.339,0,0,0,104.219,31.923Zm-9.441-5.809,3.371.613a3.9,3.9,0,0,1,2.458,1.57l-7.533,2.929Zm-7.622-1.538a7.757,7.757,0,0,0,4.539,0l-2.27,1.7Zm1.085,2.759-1.589,1.588L85.62,25.832l.5-.09Zm4.494-1.592.5.09L92.2,28.924,90.61,27.336Zm4.477-8.83V14.231a1.544,1.544,0,0,1,0,2.682Zm-15.572,0a1.544,1.544,0,0,1,0-2.682Zm0-5.234v.889a3.088,3.088,0,0,0-.779.322v-3.3A8.03,8.03,0,0,1,94.569,3.909l.687.688.209.051A3.328,3.328,0,0,1,97.99,7.882v5.009a3.06,3.06,0,0,0-.779-.322v-.889H94.742a6.772,6.772,0,0,1-5.392-2.695l-.619-.827L87.184,9.705a6.7,6.7,0,0,1-4.767,1.974Zm1.557,5.45V13.2a8.241,8.241,0,0,0,5.089-2.394l.3-.3a8.34,8.34,0,0,0,6.154,2.733h.912v3.893a6.229,6.229,0,1,1-12.458,0Zm-2.495,9.6,3.371-.613,1.7,5.112L78.242,28.3A3.9,3.9,0,0,1,80.7,26.726ZM73.853,37.373V34.259a.779.779,0,0,1,.779-.779,2.336,2.336,0,1,1,0,4.672A.779.779,0,0,1,73.853,37.373Zm14.793,8.984L76.189,41.513V39.379a3.885,3.885,0,0,0,0-7.126V29.168l12.458,4.844ZM86.335,31.443l3.09-3.091,3.09,3.09-3.09,1.2Zm16.327,10.069L90.2,46.356V34.013l12.458-4.844v3.085a3.885,3.885,0,0,0,0,7.126ZM105,37.373a.779.779,0,0,1-.779.779,2.336,2.336,0,1,1,0-4.672.779.779,0,0,1,.779.779Z" transform="translate(-72.296 0)" fill="url(#linear-gradient)"></path>
							</g>
						</g>
					</g>
				</svg></div>

			<div class="mt-4 sa-video-centent">
				<?php the_content(); ?>
			</div>
			<?php } ?>
			<div class="section-movie" style="margin-left: -50px;margin-top: 7px;">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="344.5" height="172" viewBox="0 0 344.5 172">
					<defs>
						<filter id="Ellipse_804" x="0" y="0" width="172" height="172" filterUnits="userSpaceOnUse">
							<feOffset dy="10" input="SourceAlpha"></feOffset>
							<feGaussianBlur stdDeviation="17.5" result="blur"></feGaussianBlur>
							<feFlood flood-opacity="0.149"></feFlood>
							<feComposite operator="in" in2="blur"></feComposite>
							<feComposite in="SourceGraphic"></feComposite>
						</filter>
						<linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#0d1861"></stop>
							<stop offset="1" stop-color="#6471c5"></stop>
						</linearGradient>
					</defs>
					<g id="Group_11250" data-name="Group 11250" transform="translate(-90.5 -3617.5)">
						<text id="Watch_the_video" data-name="Watch the video" transform="translate(220 3703.081)" fill="#1098d6" font-size="25" font-family="MicrosoftYaHeiUI-Bold, Microsoft YaHei UI" font-weight="700">
							<tspan x="0" y="0">Watch The Video</tspan>
						</text>
						<g transform="matrix(1, 0, 0, 1, 90.5, 3617.5)" filter="url(#Ellipse_804)">
							<circle id="Ellipse_804-2" data-name="Ellipse 804" cx="33.5" cy="33.5" r="33.5" transform="translate(52.5 42.5)" fill="#fff"></circle>
						</g>
						<g id="video_1_" data-name="video(1)" transform="translate(158 3659)">
							<g id="XMLID_1_" transform="translate(0 22.375)">
								<path id="Path_88088" data-name="Path 88088" d="M23.948,33.395a1.035,1.035,0,0,1-.478.856.964.964,0,0,1-.517.139,1.084,1.084,0,0,1-.438-.1L14,30.032V27.8l7.958,3.979V15.111L14,19.09V16.861L22.515,12.6a.962.962,0,0,1,.955.04,1.035,1.035,0,0,1,.478.856Z" transform="translate(13.854 -11.509)" fill="url(#linear-gradient)"></path>
								<path id="Path_88089" data-name="Path 88089" d="M13.1,20.558a1.007,1.007,0,0,1,1.333-.458l.557.279v2.228l-1.433-.716A1,1,0,0,1,13,21,1.084,1.084,0,0,1,13.1,20.558Z" transform="translate(12.865 -4.084)" fill="url(#linear-gradient)"></path>
								<path id="Path_88090" data-name="Path 88090" d="M14.433,24.553a1.007,1.007,0,0,0-1.333.458,1.084,1.084,0,0,0-.1.438V15.5a1.084,1.084,0,0,0,.1.438,1.007,1.007,0,0,0,1.333.458l.557-.279v8.714Z" transform="translate(12.865 -8.536)" fill="url(#linear-gradient)"></path>
								<path id="Path_88091" data-name="Path 88091" d="M13.1,16.739A1.084,1.084,0,0,1,13,16.3a1,1,0,0,1,.557-.9l1.433-.716v2.228l-.557.279a1.007,1.007,0,0,1-1.333-.458Z" transform="translate(12.865 -9.338)" fill="url(#linear-gradient)"></path>
								<path id="Path_88093" data-name="Path 88093" d="M0,15.979A3.991,3.991,0,0,1,3.979,12h19.9a3.991,3.991,0,0,1,3.979,3.979v1.373l-1.433.716a1,1,0,0,0-.557.9V15.979a2,2,0,0,0-1.99-1.99H3.979a2,2,0,0,0-1.99,1.99V31.9a2,2,0,0,0,1.99,1.99h19.9a2,2,0,0,0,1.99-1.99V28.911a1,1,0,0,0,.557.9l1.433.716V31.9a3.991,3.991,0,0,1-3.979,3.979H3.979A3.991,3.991,0,0,1,0,31.9Z" transform="translate(0 -12)" fill="url(#linear-gradient)"></path>
							</g>
						</g>
					</g>
				</svg>
			</div>


			<div class="col-12 padding-0 mb-30" style="max-height: 470px;margin-bottom: 40px;">
				<div class="embed-responsive embed-responsive-16by9 video-item">
					<video class="embed-responsive-item resourceVideo" src="<?=$pageContent[0]->movie_link?>" controls="" preload="none"></video>
				</div>
				<div style="background-image: url('<?=$featured_img_url?>');background-repeat:no-repeat" class="video-poster">
					<span class="center-block d-flex align-items-center">
						<img src="https://fertilligence.com/wp-content/themes/FTG/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
					</span>
				</div>
			</div>

			<?php } ?>
			<!--<div class="sa-social-media-row">
<h6>Sharing : </h6>
<div class="sa-social-media-style">
<svg xmlns="http://www.w3.org/2000/svg" width="10.057" height="18.44" viewBox="0 0 10.057 18.44">
<g id="Group_20377" data-name="Group 20377" transform="translate(-267.916 -1571.148)">
<g id="Group_20376" data-name="Group 20376">
<path id="Path_414" data-name="Path 414" d="M32.184,2.895H30.542c-1.287,0-1.536.612-1.536,1.509V6.384h3.07v3.1H29.006V17.44H25.8V9.485H23.127v-3.1H25.8V4.1A3.736,3.736,0,0,1,29.792,0l2.392,0V2.895Z" transform="translate(245.289 1571.648)" fill="none" stroke="#ed0f68" stroke-width="1"/>
</g>
</g>
</svg>

</div>
<div class="sa-social-media-style">
<svg xmlns="http://www.w3.org/2000/svg" width="21.034" height="18.456" viewBox="0 0 21.034 18.456">
<g id="Group_20379" data-name="Group 20379" transform="translate(-321.5 -1571.14)">
<g id="Group_20378" data-name="Group 20378">
<path id="XMLID_497_" d="M.354,27.763l4.615,1.723,1.786,5.745a.543.543,0,0,0,.863.26l2.573-2.1a.768.768,0,0,1,.936-.026l4.64,3.369a.544.544,0,0,0,.852-.329l3.4-16.351a.544.544,0,0,0-.728-.618L.349,26.745A.544.544,0,0,0,.354,27.763Zm6.114.806,9.02-5.556a.157.157,0,0,1,.19.249l-7.444,6.92a1.543,1.543,0,0,0-.478.923L7.5,32.984a.233.233,0,0,1-.455.033L6.071,29.59A.908.908,0,0,1,6.468,28.569Z" transform="translate(322 1552.248)" fill="none" stroke="#ed0f68" stroke-width="1"/>
</g>
</g>
</svg>
</div>
<div class="sa-social-media-style">
<svg xmlns="http://www.w3.org/2000/svg" width="22.689" height="18.365" viewBox="0 0 22.689 18.365">
<g id="Group_20381" data-name="Group 20381" transform="translate(-379.931 -1570.865)">
<g id="Group_20380" data-name="Group 20380">
<path id="Path_425" data-name="Path 425" d="M21.031,44.288a8.6,8.6,0,0,1-2.482.667,4.186,4.186,0,0,0,1.9-2.375,8.461,8.461,0,0,1-2.736,1.041,4.321,4.321,0,0,0-6.2-.1,4.154,4.154,0,0,0-1.261,3.049,4.785,4.785,0,0,0,.107.988A12.011,12.011,0,0,1,5.4,46.229a12.221,12.221,0,0,1-3.93-3.183A4.32,4.32,0,0,0,1.4,47.277a4.306,4.306,0,0,0,1.4,1.535,4.276,4.276,0,0,1-1.948-.547v.053a4.166,4.166,0,0,0,.981,2.743A4.241,4.241,0,0,0,4.31,52.548a4.466,4.466,0,0,1-1.134.147,5.5,5.5,0,0,1-.814-.066,4.32,4.32,0,0,0,4.03,2.989A8.44,8.44,0,0,1,1.04,57.459,9.174,9.174,0,0,1,0,57.406a11.971,11.971,0,0,0,6.619,1.935,12.594,12.594,0,0,0,4.31-.727,10.955,10.955,0,0,0,3.443-1.949,13.038,13.038,0,0,0,2.462-2.809,12.527,12.527,0,0,0,1.541-3.316,12.251,12.251,0,0,0,.507-3.463q0-.374-.013-.56A9.028,9.028,0,0,0,21.031,44.288Z" transform="translate(380.203 1529.389)" fill="none" stroke="#ed0f68" stroke-width="1"/>
</g>
</g>
</svg>

</div>
<div class="sa-social-media-style"></div>
</div>-->
			<?php if (!empty($allTag)) { ?>
			<div class="sa-tag-page-detail">
				<div class="sa-tags-icon-page-detail">
					<svg xmlns="http://www.w3.org/2000/svg" width="26.062" height="23.288"
						 viewBox="0 0 26.062 23.288">
						<g id="Group_20382" data-name="Group 20382" transform="translate(-160.383 -1639.712)">
							<g id="Group_2436" data-name="Group 2436" transform="translate(160.383 1639.712)">
								<g id="Group_2435" data-name="Group 2435">
									<path id="Path_31409" data-name="Path 31409"
										  d="M20.328,23.224h-8a1.912,1.912,0,0,0-1.351.56L.56,34.2a1.912,1.912,0,0,0,0,2.7l8,8a1.911,1.911,0,0,0,2.7,0L21.68,34.489a1.916,1.916,0,0,0,.56-1.353v-8A1.911,1.911,0,0,0,20.328,23.224Zm-3.344,6.689a1.433,1.433,0,1,1,1.433-1.433A1.434,1.434,0,0,1,16.984,29.913Z"
										  transform="translate(0 -23.224)" fill="#e0e0e0"/>
								</g>
							</g>
							<g id="Group_2438" data-name="Group 2438" transform="translate(173.461 1641.623)">
								<g id="Group_2437" data-name="Group 2437">
									<path id="Path_31410" data-name="Path 31410"
										  d="M230.06,55.224v8.9a1.66,1.66,0,0,1-.487,1.175L218.988,75.879l.162.162a1.911,1.911,0,0,0,2.7,0l9.558-9.556a1.909,1.909,0,0,0,.561-1.351v-8A1.911,1.911,0,0,0,230.06,55.224Z"
										  transform="translate(-218.988 -55.224)" fill="#e0e0e0"/>
								</g>
							</g>
						</g>
					</svg>
					<h6 style="color:#c7c7c7!important">Tags :</h6>
				</div>

				<div class="sa-each-tag-page-detail">
					<?php foreach ($allTag as $singleTag){ 	?>
					<div class="sa-each-tag-page-content-style text-center singleTagStyle">
						<a href="<?php echo get_site_url(); ?>/resources/?find=<?=$singleTag?>">
							<?=$singleTag?>
						</a>

					</div>
					<?php } ?>


				</div>
			</div>


			<?php } ?>

			<div class="sa-page-detail-post">
				<div class="sa-each-page-detail-post">
					<svg xmlns="http://www.w3.org/2000/svg" width="20.267" height="25.333"
						 viewBox="0 0 20.267 25.333">
						<g id="Group_20383" data-name="Group 20383" transform="translate(-182 -1780)">
							<g id="Profile" transform="translate(182 1780)">
								<path id="Path_89723" data-name="Path 89723"
									  d="M7.454,16.172a32,32,0,0,1,5.469,0,18.913,18.913,0,0,1,2.956.435c2.1.423,3.476,1.259,4.052,2.485a3.8,3.8,0,0,1-.033,3.2c-.587,1.226-1.96,2.062-4.1,2.5a18.947,18.947,0,0,1-2.945.423,24.677,24.677,0,0,1-2.889.123H9.624a.97.97,0,0,1,0-1.928h.757c.759-.009,1.523-.044,2.287-.111a18.029,18.029,0,0,0,2.679-.379c1.517-.334,2.469-.814,2.768-1.449a1.783,1.783,0,0,0,0-1.538c-.3-.646-1.251-1.148-2.734-1.449a17.238,17.238,0,0,0-2.723-.39,28.36,28.36,0,0,0-5.148,0,18.174,18.174,0,0,0-2.69.379c-1.517.334-2.458.814-2.768,1.449a1.85,1.85,0,0,0-.166.769,1.894,1.894,0,0,0,.166.78,3.217,3.217,0,0,0,2.214,1.3h0l.128.035a.969.969,0,0,1-.616,1.838A4.9,4.9,0,0,1,.357,22.3a3.756,3.756,0,0,1,0-3.2C.944,17.844,2.317,17.03,4.431,16.6A20.311,20.311,0,0,1,7.454,16.172ZM7.555.516A6.709,6.709,0,0,1,14.9,1.992a6.821,6.821,0,0,1,1.454,7.4A6.735,6.735,0,0,1,3.391,6.788h0L3.4,6.494A6.786,6.786,0,0,1,7.555.516Zm2.566,1.424A4.8,4.8,0,0,0,6.709,3.356a4.882,4.882,0,0,0,1.558,7.929,4.8,4.8,0,0,0,5.264-1.046,4.883,4.883,0,0,0,1.051-5.3A4.827,4.827,0,0,0,10.122,1.939Z"
									  transform="translate(0 0)" fill="#1098d6"/>
							</g>
						</g>
					</svg>
					<?php if ($pageContent[0]->type=='Article') { ?>
					<h6><span>Published By: </span><?=htmlspecialchars_decode($pageContent[0]->published_by)?></h6>
					<?php }else { ?>
					<h6><span>Presented By: </span><?=htmlspecialchars_decode($pageContent[0]->published_by)?></h6>
					<?php } ?>
				</div>
				<div class="sa-each-page-detail-post">
					<svg xmlns="http://www.w3.org/2000/svg" width="20.267" height="22.518"
						 viewBox="0 0 20.267 22.518">
						<g id="Group_20384" data-name="Group 20384" transform="translate(-182 -1826.481)">
							<g id="Calendar" transform="translate(182 1826.481)">
								<path id="Path_89725" data-name="Path 89725"
									  d="M14.4,0a.8.8,0,0,1,.744.827h0V1.993c3.388.329,5.12,2.2,5.12,5.567h0v9.312c0,3.745-2.134,5.647-6.335,5.647h-7.6c-4.2,0-6.335-1.9-6.335-5.647H0V7.56C0,5.319.764,3.716,2.33,2.78h0l.11-.063a.772.772,0,0,1,.715.032.8.8,0,0,1-.081,1.425C2.036,4.791,1.547,5.867,1.547,7.56h0v.3H15.831a.787.787,0,0,1,0,1.574H1.547v7.439c0,2.858,1.39,4.043,4.788,4.063h7.6c3.348,0,4.778-1.215,4.778-4.073h0V7.55c0-2.49-1.087-3.695-3.564-3.984h0v.757a.782.782,0,0,1-1.557-.06h0V.758L13.6.633A.79.79,0,0,1,13.84.207.766.766,0,0,1,14.4,0Zm.446,15.984.125.008a.973.973,0,0,1,.569.281,1,1,0,0,1,.29.708.979.979,0,1,1-.979-1Zm-4.695,0,.123.008a.979.979,0,1,1-.123-.008Zm-4.694,0,.125.008a.973.973,0,0,1,.569.281,1,1,0,0,1,.29.708.979.979,0,1,1-.979-1Zm9.389-4.033.125.008a.973.973,0,0,1,.569.281,1,1,0,0,1,.29.708.979.979,0,1,1-.979-1Zm-4.695,0,.123.008a.979.979,0,1,1-.123-.008Zm-4.694,0,.125.008a.973.973,0,0,1,.569.281,1,1,0,0,1,.29.708.979.979,0,1,1-.979-1ZM5.9.12a.788.788,0,0,1,.778.708h0V1.913H11.1a.787.787,0,0,1,0,1.574H6.658v.787a.794.794,0,0,1-.23.56.767.767,0,0,1-.553.227h0l-.113-.011a.784.784,0,0,1-.641-.785h0V.828L5.142.71A.786.786,0,0,1,5.9.12Z"
									  transform="translate(0 0)" fill="#1098d6"/>
							</g>
						</g>
					</svg>
					<h6><span>Date: </span> <?=get_the_date( 'M dS Y', $post->ID )?></h6>
				</div>

				<?php if (!empty($pageContent[0]->original_title)) { ?>

				<div class="sa-each-page-detail-post" style="position:relative;align-items: baseline">

					<!-- 						<svg xmlns="http://www.w3.org/2000/svg" width="20.267" height="22.519" viewBox="0 0 20.267 22.518">
<g id="Group_20385" data-name="Group 20385" transform="translate(-182 -1869.481)">
<g id="Document" transform="translate(182 1869.481)">
<path id="Path_89726" data-name="Path 89726"
d="M14.472,0c3.618,0,5.785,2.2,5.795,5.866h0V16.653c0,3.669-2.157,5.866-5.785,5.866H11.266a.827.827,0,0,1,0-1.64h3.206c2.765,0,4.157-1.422,4.157-4.225h0V5.866c0-2.8-1.392-4.225-4.157-4.225H5.785c-2.765,0-4.167,1.422-4.167,4.225h0V16.653c0,2.8,1.4,4.225,4.167,4.225a.827.827,0,0,1,0,1.64C2.167,22.518,0,20.321,0,16.653H0V5.866C0,2.187,2.167,0,5.785,0h8.687Zm-.294,15.211a.815.815,0,0,1,0,1.631H6.059a.815.815,0,0,1,0-1.631h8.118Zm0-4.772a.81.81,0,0,1,.779.382.835.835,0,0,1,0,.877.81.81,0,0,1-.779.382H6.059a.827.827,0,0,1,0-1.64h8.118ZM9.158,5.677a.827.827,0,0,1,0,1.64H6.069a.827.827,0,0,1,0-1.64H9.158Z"
transform="translate(0 0)" fill="#1098d6"/>
</g>
</g>
</svg> -->
					<img src="<?php bloginfo('template_directory'); ?>/images/sa-blog-origin.png" style="top: 4px;position: absolute">

					<h6 style="padding-left: 30px"><span>Original Title: </span> <?=htmlspecialchars_decode($pageContent[0]->original_title)?></h6>
				</div>

				<?php } ?>
				<?php if ($pageContent[0]->type=='Article') { ?>
				<div class="sa-powered">
					<h6>Powered by: </h6>
					<img src="<?php bloginfo('template_directory'); ?>/images/Medivizor.png">
				</div>
				<?php } ?>


			</div>
		</div>
		<?php if ($pageContent[0]->type=='Article') { ?>
		<div id='relatedPosts'>
			<?php include "related-post.php" ?>
			<a href="<?php echo get_site_url() . '/resources'?>">
				<button type="button" class="btn button3 center-block"
						style="margin-bottom: 55px;background-color: #1098D6;box-shadow: 0 8px 35px rgba(148,218,236,0.4);width:260px!important">
					<p>Back to the main page</p>
				</button>
			</a>
		</div>
		<?php } ?>
	</div>

</div>

<script>

	$(document).ready(function(){
		$('.video-poster').click(function(){
			$(this).hide();
			var video = document.querySelectorAll('.resourceVideo');
			video[0].play();
		})
		var countRelated = document.querySelectorAll('.item');
		if (countRelated.length==0){
			$('#relatedPosts').hide();
		}else{
			$('#relatedPosts').show();
		}



		$(".owl-prev span").hide();
		$(".owl-next span").hide();
		$(".owl-prev").append("<i class='fa fa-angle-left' style='font-size:30px;color:#1086d6'></i>");
		$(".owl-next").append("<i class='fa fa-angle-right' style='font-size:30px;color:#1086d6'></i>");

		window.history.pushState('page2', 'Title',  window.location.pathname);






	})
</script>

<?php

get_footer();

?>