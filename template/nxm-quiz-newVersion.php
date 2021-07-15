<?php
/**
 * Template Name: NEXMARK Made Quiz test mode
 * Template Post Type: post, page
 */
// if (is_page(0)) {
// get_header('new');
// } else {
get_header();
// }
wp_head();


?>

<style>
	
	
	
	.sa-arrow-down{
		width: 35px;
		height: 25px;
		margin: 0 auto;
		fill: #1098d6;
		position: absolute;
		right: 0;
		left: 0;
		bottom: 130px;
		
	}
	@keyframes checkthisplease {
		0% {
			box-shadow: 0 0 0 0 #fd0505;
		}
		100% {
		    box-shadow: 0 0 14px 4px #fd0505;	
		}
		
	}
	.checkThisError{
		animation-name:checkthisplease;
		animation-direction:alternate;
		animation-iteration-count:infinite;
		animation-duration:1s;
		
	}

	.form-check-input{
		margin-top:0.45rem!important;
	}


	.mt-75{
		margin-top: -75px!important;
	}

	#StartTheQuiz:hover,#submitQuestion:hover{
		background-color: #fff!important;
		color: #ED0F68!important;
		border: 1px solid #ed1067!important;
	}

/* 	.ExtraDetailForSurveyModal
	{
		font-size: 10px;
		font-weight: 500;
	} */

	.Qbody{
		height:370px;
	}


	.video-poster {
		display: none !important;
	}

	.col-12.col-sm-4.padding-0.mb-30 {
		width: 100% !important;
		display: flex !important;
		justify-content: center !important;
		flex: 1 1 100% !important;
		max-width: 100% !important;
		margin-bottom: 60px;
		margin-top: 60px;

	}

	.video-item {
		width: 425px !important;
		height: 240px !important;
		/* 		height:199px!important; */
	}

	#ResultP1 {
		margin: 75px 0;
	}

	#ResultP2 {
		margin: 75px 0;
	}

	#resulttTitle2 {
		margin-top: 75px;
	}

	/* 	.progress{
	margin-top: 3rem;
	} */

	.quiz-form {
		/* 		margin-top: 90px; */
		min-height: 480px;

	}
	.quiz-form img{
		max-width:60%
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
	}
	.submitQuestion .text-center {
		font-size: 18px;
		margin: 0;
	}

	.mx-auto.text-center .form-check{
		padding-left:0 !important
	}

	#postme2{
		color: #fff;
		background-color: #ED0F68;
		border-color: #ED0F68;
	}
	#popupQBody{
		margin: 0 20px;

	}
	.prgress-bar::before{
		position:absolute;
		content:"";
		width:52px;
		height:52px;
		background:red;
		right:0
	}

	.prgress-bar{
		position:relative;
	}

	.number{
		margin-top: -3px;
		width:30px;
		height:30px;
		border:1px solid #ED0F68;
		border-radius: 50%;
		display:flex;
		align-items:center;
		justify-content:center;
		margin-right: .5rem;
		box-shadow: 0 5px 30px rgba(237,15,104,0.15);

	}
	.h325{
		height:325px;

	}
	.pnew{
		font-size:20px;
		line-height:38px;
		/*             color:rgba(16,152,214,1)!important; */
		color:#1098d6!important;
		width:100%!important;
	}

	.quiz-form p{
		font-size: 17px;
		color: #000;
		/* 	font-weight: 700; */
		width:90%;
		margin-bottom:0;
	}

	input[type="radio"]:checked:before {
		content: "";
		display: flex;
		position: absolute;
		top: 2.6px;
		left: 2.5px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: rgb(148 218 236);
	}
	.col-xl-8-sa {
		-ms-flex: 0 0 66.666667%;
		flex: 0 0 66.666667%;
		max-width: 68.666667%;
	}
	.emaillogo{
		right:140px;
		width:20px;
		height:20px!important;
		position: absolute;
		z-index: 100;

		top: 16px;
		bottom: 0
	}

	/* 	.h120{
	align-items:center;
	} */
	.sapara{
		font-size:14px!important;
	}
	.st0{opacity:0.6;fill:none;stroke:#94DAEC;enable-background:new    ;}
	.st1{opacity:0.49;fill:url(#Ellipse_373_3_);enable-background:new    ;}
	.st2{opacity:0.53;fill:url(#Ellipse_374_3_);enable-background:new    ;}
	.st3{fill:#94DAEC;}
	.st4{fill:none;}
	.st5{fill:none;stroke:#ED0F68;stroke-width:2;stroke-dasharray:6;}
	.st6{fill:#ED0F68;}
	.st7{fill:none;stroke:#94DAEC;stroke-width:2;stroke-dasharray:5;}
	.st8{clip-path:url(#SVGID_2_);}
	.st9{fill:none;stroke:#2F3D6B;stroke-miterlimit:10;}
	.st10{fill:#2F3D6B;}
	.st11{fill:#FB5D9C;}
	.st12{fill:none;stroke:#FB5D9C;stroke-miterlimit:10;}
	.st13{fill:#3A8B42;}
	.st14{fill:none;stroke:#53A25B;stroke-miterlimit:10;}
	.st15{fill:#53A25B;}
	.st16{fill:none;stroke:#3A8B42;stroke-miterlimit:10;}
	.st17{fill:none;stroke:#0A0909;stroke-miterlimit:10;}
	.st18{fill:#7DA9FF;}
	.st19{fill:#4F78C4;}
	.st20{fill:#B6CAF2;}
	.st21{fill:#D9E6FF;}
	.st22{fill:#FFFFFF;}
	.st23{fill:none;stroke:#4F78C4;stroke-width:2;stroke-miterlimit:10;}
	.st24{fill:#D94C5F;}
	.st25{enable-background:new    ;}
	.st26{fill:#F5BFBA;}
	.st27{fill:#D6A3A3;}
	.st28{fill:#EE3B83;}
	.st29{fill:#253054;}
	.st30{fill:none;stroke:#D94C5F;stroke-miterlimit:10;}
	.st31{fill:#415A96;}
	.st32{fill:#0A0909;}
	.st33{fill:#343434;}
	.st34{fill:none;stroke:#ED0F68;stroke-miterlimit:10;}
	.st35{fill:none;stroke:#FB5D9C;stroke-width:2;stroke-miterlimit:10;}
	.st36{fill:#FFB8C9;}
	.st37{opacity:0.49;fill:url(#Ellipse_373_4_);enable-background:new    ;}
	.st38{opacity:0.53;fill:url(#Ellipse_374_4_);enable-background:new    ;}
	.st39{fill:#9CC1D6;}
	.st40{fill:#F9BA9D;}
	.st41{fill:#ED9D22;}
	.st42{fill:#B5D6EA;}
	.st43{fill:#EA7F59;}
	.st44{fill:#9C2622;}
	.st45{fill:#C0433A;}
	.st46{fill:#3A5C9C;}
	.st47{clip-path:url(#SVGID_4_);}
	.st48{fill:#22365B;}
	.st49{fill:#171717;}
	.st50{fill:#E1F0FA;}
	.st51{fill:#DB7D00;}
	.st52{fill:#1098D6;}
	.st53{fill:#C6E7EF;}
	.st54{opacity:0.2;fill:#94DAEC;enable-background:new    ;}
	.st55{opacity:0.26;fill:#FFFFFF;enable-background:new    ;}
	.st56{fill:#A5003C;}
	.st57{fill:#51192B;}
	.st58{fill:#89003E;}
	.st59{fill:#5B99C9;}
	.st60{fill:#0F213F;}
	.st61{fill:#75ADD8;}
	.st62{opacity:0.49;fill:url(#Ellipse_373_5_);enable-background:new    ;}
	.st63{opacity:0.53;fill:url(#Ellipse_374_5_);enable-background:new    ;}
	.st64{fill:#FF8300;}
	.st65{fill:#2D1B5A;}
	.st66{fill:#EDE9FD;}
	.st67{fill:#FEAFAB;}
	.st68{fill:#F08A90;}
	.st69{fill:#FEAAAF;}
	.st70{fill:#EF3F85;}
	.st71{fill:#130536;}
	.st72{fill:#F63783;}
	.st73{fill:#C9E3C8;}
	.st74{fill:#1D8450;}
	.st75{fill:#E9A080;}
	.st76{fill:#FFB899;}
	@media only screen and (max-width:1024px){
		.formcheckpos{
			z-index:1000
		}


		.gotop,.crisp-client{
			display:none;
		}

		.quiz-form img{
			max-width: 80%;
		}

		.mt-75{
			margin-top:0!important;
		}
		.col-xl-8-sa{
			max-width:100%!important;
		}
		.sapara{
			font-size:12px!important;
		}

		#q13{
			margin-bottom: 180px;
		}

		.emaillogo{
			width:20px;
			height:20px!important;
			position: absolute;
			z-index: 100;
			right: 20px!important;
			top: -103px!important;
			bottom: 0
		}

		.Qbody{
			height:420px;
			flex-flow:column;
			flex-direction:column-reverse;
		}
		.h120{
			height:120px
		}
		.formcheckpos + div{
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
		}
		.formcheckpos{
			position:absolute!important;
		}



		/* 		.quiz-form img{
		height: 260px!important;
	} */

		.quiz-form , #StartTheQuizSection{
			max-width: 414px;
			margin: 0 auto;
		}
		#nbe-hide-mobile{
			display:none
		}
		#nbe-hide-desktop{
			width:65%;
		}
	}
	@media only screen and (min-width:1025px){
		#nbe-hide-desktop{
			display:none;
		}
	}

</style>



<!-- Modal -->
<div class="modal fade" id="modalsa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close section1-card" data-dismiss="modal" aria-label="Close">
					<img src="<?php bloginfo('template_directory'); ?>/images/close.png" class="img-fer" data-imghover="closeb.svg" data-imgnonhover="close.png">
				</button>
			</div>
			<div class="modal-body">
				<h1 class="text-center" id="thankyou" style="color: #ED0F68;">WAIT! Before you go...</h1>
				<h4 class="text-center" id="join">We want to hear from YOU.</h4>
				<hr id="myHr">
				<div id="popupQBody">


					<form id="quizPageQuitForm" action="">
						<!-- 						<p class="mt-5">Are you considering joining Fertilligence?</p>
<div class="form-check">
<input class="form-check-input" type="radio" name="popupQ1" id="er3" value="Are you considering joining Fertilligence? Yes">
<label class="form-check-label" for="er3">
Yes
</label>
</div>


<div class="form-check">
<input class="form-check-input" type="radio" name="popupQ1" id="er4" value="Are you considering joining Fertilligence? No">
<label class="form-check-label" for="er4">
No
</label>
</div> -->



						<p class="pt-3">How can we help you to get started TODAY?<br>Please share your feedback in exchange for an exclusive offer.</p>


						<div class="form-check">
							<input class="form-check-input" type="radio" name="popupQ2" id="er5" value="Need more information">
							<label class="form-check-label" for="er5">
								Need more information

							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="popupQ2" id="er6" value="Want to talk to my partner">
							<label class="form-check-label" for="er6">
								Want to talk to my partner
								
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="popupQ2" id="er7" value="Want to talk to my doctor">
							<label class="form-check-label" for="er7">
								Want to talk to my doctor
								
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="popupQ2" id="er8" value="Discount on membership">
							<label class="form-check-label" for="er8">
								Discount on membership
								
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="popupQ2" id="er9" value="Not for me">
							<label class="form-check-label" for="er9">
								Not for me
							</label>
						</div>
							<div class="mt-4 text-left">
								
								<p id="popupMessageToShow" style="color:#ED0F68;Display:none"> By submitting my email address </p>
							</div>
						<div class="form-group text-center">
							<input type="email" class="form-control col-8 col-lg-12 mx-auto mt-4" id="popemail2" aria-describedby="emailHelp" placeholder="Email address (Optional)" style="display:none">
							<p class="form-validate pt-3"></p>
							<div class="checkbox mt-4 text-left">
								<label id="checkboxlabel" style="display:none;"><input type="checkbox" value="" id="checkMe2" style="display:none;"> By submitting my email address I agree to receive emails with more information about the Fertilligence platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and I understand I can unsubscribe at any time.</label>
							</div>
						</div>
						<div class="col-12 d-flex justify-content-center mt-4 mb-4">
							<input name="submit" type="submit" class="btn btn-primary btn-lg" id="postme2" value="Submit" style="display:none"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




<div id="quiz-form-new" style="margin-top:35px;">
	<!--------Intro Section------------------>
	<div class="col-lg-12" id="StartTheQuizSection">
		<div class="p-0 col-11 col-lg-7 mx-auto text-center">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence is a unique solution to natural conception, driven by evidence-based research and personalized to your lifestyle
			</h6>

			<img id="nbe-hide-mobile"  style="height:100%;width:100%" src="<?php bloginfo('template_directory'); ?>/images/intro.png">



			<svg version="1.1" id="nbe-hide-desktop" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 373.7 326" style="enable-background:new 0 0 373.7 326;" xml:space="preserve">
				<g id="Group_1" transform="translate(2.433 -283.281)">
					<path id="Path_89684" class="st0" d="M-2,360.6c0,0,36-62.2,94-41.5s43.9,128.7,83.7,154.9s99.6-10.1,113.5-34.3
														 c13.8-24.2-27.2-35.5-28.8-8.6s90.8,76,105.3,109.9c14.5,33.9-6.7,67.9-6.7,67.9"/>
				</g>
				<g id="Group_9498" transform="translate(-562 -7901.113)">

					<linearGradient id="Ellipse_373_3_" gradientUnits="userSpaceOnUse" x1="446.8775" y1="8459.0801" x2="446.4944" y2="8458.8135" gradientTransform="matrix(-84.6765 8.9357 8.9357 84.6765 -37050.8047 -712086.6875)">
						<stop  offset="0" style="stop-color:#94DAEC;stop-opacity:0.502"/>
						<stop  offset="1" style="stop-color:#FFFFFF"/>
					</linearGradient>
					<circle id="Ellipse_373" class="st1" cx="719" cy="8172.7" r="15.4"/>

					<linearGradient id="Ellipse_374_3_" gradientUnits="userSpaceOnUse" x1="444.5532" y1="8460.7578" x2="444.1701" y2="8460.4912" gradientTransform="matrix(512.9006 -156.8095 -157.0989 -513.8474 1101947.625 4425170)">
						<stop  offset="0" style="stop-color:#94DAEC;stop-opacity:0.502"/>
						<stop  offset="1" style="stop-color:#FFFFFF"/>
					</linearGradient>
					<path id="Ellipse_374" class="st2" d="M642.2,7972.2c51.4-15.7,105.8,13.3,121.5,64.8c15.7,51.5-13.2,106-64.5,121.7
														  c-51.4,15.7-105.8-13.3-121.5-64.8C561.9,8042.4,590.8,7987.9,642.2,7972.2z"/>
					<circle id="Ellipse_375" class="st3" cx="630.7" cy="8002" r="1.8"/>
					<g id="Ellipse_376" transform="translate(677.468 7947.755)">
						<circle class="st4" cx="-80.3" cy="19" r="6.1"/>
						<circle class="st5" cx="-80.3" cy="19" r="5.7"/>
					</g>
					<circle id="Ellipse_377" class="st6" cx="611" cy="8170.1" r="2.5"/>
					<g id="Ellipse_378" transform="translate(761.941 8426.931)">
						<circle class="st4" cx="-136.6" cy="-288.8" r="3.6"/>
						<circle class="st7" cx="-136.6" cy="-288.8" r="3.2"/>
					</g>
					<g id="_4252374" transform="translate(665.296 8010.989)">
						<g id="OBJECTS" transform="translate(0 0)">
							<g id="Group_9439" transform="translate(238.452 319.12)">
								<g>
									<defs>
										<rect id="SVGID_1_" x="-230.6" y="-230.7" width="81.3" height="46.9"/>
									</defs>
									<clipPath id="SVGID_2_">
										<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
									</clipPath>
									<g id="Group_9438" class="st8">
										<g id="Group_9418" transform="translate(19.011 7.939)">
											<g id="Group_9417">
												<g id="Group_9414" transform="translate(16.756 3.266)">
													<path id="Path_74676" class="st9" d="M-251.8-226c0,0-3-7.5-0.7-11.1"/>
													<path id="Path_74677" class="st10" d="M-251.6-236.9c-0.1,0.4-0.5,0.7-0.9,0.6s-0.7-0.5-0.6-0.9c0.1-0.4,0.5-0.7,0.9-0.6
																						  C-251.8-237.8-251.5-237.4-251.6-236.9C-251.6-237-251.6-237-251.6-236.9z"/>
												</g>
												<g id="Group_9415" transform="translate(7.688 5.298)">
													<path id="Path_74678" class="st9" d="M-242.5-228.1c0,0-5.4-6-4.4-10.3"/>
													<path id="Path_74679" class="st10" d="M-246.1-238.5c0.1,0.4-0.2,0.8-0.6,0.9c-0.4,0.1-0.8-0.2-0.9-0.6
																						  c-0.1-0.4,0.2-0.8,0.6-0.9C-246.5-239.2-246.1-238.9-246.1-238.5z"/>
												</g>
												<g id="Group_9416" transform="translate(0.095)">
													<path id="Path_74680" class="st9" d="M-237.7-224.7c0,0-5.4-6-4.4-10.3"/>
													<path id="Path_74681" class="st10" d="M-241.2-235.1c0.1,0.4-0.2,0.8-0.6,0.9c-0.4,0.1-0.8-0.2-0.9-0.6
																						  c-0.1-0.4,0.2-0.8,0.6-0.9C-241.7-235.8-241.3-235.6-241.2-235.1z"/>
												</g>
												<path id="Path_74682" class="st11" d="M-231.5-216.9c0,0-8.4-0.3-11.2-7.1c1.7-0.4,3.4,0.1,4.6,1.3c0,0-2.4-3.7-0.9-5
																					  c0,0,3.2,1.3,3.9,3.1c0,0-0.3-4.5,0.8-5.4C-234.2-230.1-227.3-223.6-231.5-216.9z"/>
											</g>
											<path id="Path_74683" class="st12" d="M-233.5-219.6c0,0,7.8,12.8,18.5,15.2"/>
										</g>
										<g id="Group_9437" transform="translate(3.161 23.902)">
											<g id="Group_9420" transform="translate(99.662 60.201)">
												<path id="Path_74684" class="st13" d="M-294.6-256.2c-3.1-3.7-1-11.3,3-13.5c2.5-1.4,4,0.4,6.7-0.8c5-2.4,3.2-10.5,7.4-12.1
																					  c3.1-1.2,5.5,2.7,10.8,2.4c4.3-0.2,5.1-4.4,8.3-4c3,0.3,5.9,3.7,5.4,6c-0.6,2.6-5.2,2-8.8,5.5c-3.5,3.5-0.8,7.9-3.6,9.8
																					  c-2.7,1.7-5.5-1.3-9.3,0.5c-2.5,1.2-2.2,3.1-4.5,5.2C-283.1-253.8-291.3-252.2-294.6-256.2z"/>
												<g id="Group_9419" transform="translate(0.834 10.416)">
													<path id="Path_74685" class="st14" d="M-257.7-290.9c0,0-4.4-0.4-6.6,2.1c-2.3,2.4-5.3,4-8.5,3.5c-3.1-0.5-3,3.8-7.7,6.8
																						  s-12.3,1.6-16.3,12.8"/>
												</g>
											</g>
											<g id="Group_9422" transform="translate(52.342)">
												<path id="Path_74686" class="st13" d="M-250.7-198.3c-4.7,0.9-10.4-4.5-10.4-9c0-2.9,2.3-3.3,2.4-6.3
																					  c0.3-5.6-7.7-7.8-7.2-12.3c0.4-3.3,5-3.5,7.2-8.3c1.8-3.9-1.5-6.5,0.3-9.2c1.7-2.5,6-3.4,7.7-1.9c2,1.7-0.7,5.5,0.7,10.3
																					  c1.4,4.7,6.6,4.4,6.9,7.8c0.3,3.2-3.7,4.2-3.9,8.4c-0.1,2.8,1.6,3.4,2.4,6.4C-243.3-207.3-245.7-199.4-250.7-198.3z"/>
												<g id="Group_9421" transform="translate(24.616 8.301)">
													<path id="Path_74687" class="st14" d="M-279-251.2c0,0-2.4,3.6-1.3,6.8c1.1,3.1,1,6.6-0.9,9.1c-1.9,2.5,1.9,4.5,2.4,9.9
																						  s-4.3,11.5,3.6,20.3"/>
												</g>
											</g>
											<g id="Group_9424" transform="translate(83.906 7.958)">
												<path id="Path_74688" class="st15" d="M-278.5-205.3c-4,0.4-7.6-5.4-6.8-9.6c0.5-2.7,2.4-2.9,3-5.7
																					  c1.2-5.3-4.8-8.2-3.6-12.4c0.9-3.1,4.6-2.8,7.2-7.2c2.1-3.5,0-6.4,1.9-8.8c1.8-2.2,5.4-2.6,6.6-1c1.3,1.8-1.5,5.2-1.2,9.9
																					  c0.3,4.7,4.5,4.9,4.2,8.2c-0.3,3.1-3.7,3.6-4.6,7.6c-0.6,2.6,0.7,3.4,0.8,6.4C-270.9-213-274.3-205.7-278.5-205.3z"/>
												<g id="Group_9423" transform="translate(14.75 7.643)">
													<path id="Path_74689" class="st16" d="M-288.3-255.9c0,0-2.6,3.2-2.2,6.3s-0.3,6.4-2.3,8.6c-2,2.2,0.7,4.5,0.2,9.7
																						  s-5.5,10.5-0.7,19.8"/>
												</g>
											</g>
											<g id="Group_9426" transform="translate(0 78.248)">
												<path id="Path_74690" class="st15" d="M-197.1-277.8c-1.1,3.7-7.2,5.7-10.4,4c-2.1-1.1-1.5-2.9-3.6-4.1
																					  c-3.9-2.3-8.5,2.5-11.5,0.4c-2.2-1.5-0.6-4.9-3.2-8.3c-2.1-2.8-5.2-1.4-6.4-3.8c-1.1-2.1-0.1-5.6,1.6-6.2
																					  c2-0.8,3.6,2.6,7.6,3.4c3.9,0.8,5.7-3,8.2-1.9c2.4,1,1.6,4.3,4.5,5.9c1.9,1.1,3.1,0.1,5.5,0.7
																					  C-200.7-286.5-195.9-281.7-197.1-277.8z"/>
												<g id="Group_9425" transform="translate(6.336 9.947)">
													<path id="Path_74691" class="st16" d="M-236.6-302.2c0,0,1.7,3.1,4.3,3.5c2.6,0.4,5.1,1.8,6.1,4.1c1,2.3,3.9,0.4,8,2.1
																						  c4.1,1.7,6.5,7.4,15.8,5.2"/>
												</g>
											</g>
											<g id="Group_9431" transform="translate(120.137 24.377)">
												<g id="Group_9430" transform="translate(18.633)">
													<g id="Group_9427" transform="translate(13.402 17.505)">
														<path id="Path_74692" class="st17" d="M-329.6-268c0,0,6.2-5.2,10.4-4"/>
														<path id="Path_74693" class="st10" d="M-319.1-271.1c-0.4,0.1-0.8-0.3-0.9-0.7s0.3-0.8,0.7-0.9c0.4-0.1,0.8,0.3,0.9,0.7
																							  c0,0,0,0,0,0C-318.3-271.5-318.6-271.2-319.1-271.1C-319-271.1-319-271.1-319.1-271.1z"/>
													</g>
													<g id="Group_9428" transform="translate(13.837 8.847)">
														<path id="Path_74694" class="st17" d="M-329.8-259.1c0,0,4.1-7,8.4-7.3"/>
														<path id="Path_74695" class="st10" d="M-321-265.7c-0.4,0.2-0.8,0-1-0.3c-0.2-0.4,0-0.8,0.3-1c0.4-0.2,0.8,0,1,0.3
																							  C-320.5-266.3-320.6-265.9-321-265.7C-321-265.7-321-265.7-321-265.7z"/>
													</g>
													<g id="Group_9429" transform="translate(16.577)">
														<path id="Path_74696" class="st17" d="M-331.6-253.5c0,0,4.1-7,8.4-7.3"/>
														<path id="Path_74697" class="st10" d="M-322.8-260c-0.4,0.2-0.8,0-1-0.3c-0.2-0.4,0-0.8,0.3-1c0.4-0.2,0.8,0,1,0.3
																							  C-322.2-260.7-322.4-260.2-322.8-260C-322.8-260-322.8-260-322.8-260z"/>
													</g>
													<path id="Path_74698" class="st11" d="M-320.6-245.3c0,0-2.2-8.1,3.4-12.8c0.9,1.5,1,3.3,0.2,4.8c0,0,2.8-3.5,4.5-2.4
																						  c0,0-0.3,3.5-1.8,4.7c0,0,4.2-1.6,5.4-0.9C-308.9-251.9-313-243.4-320.6-245.3z"/>
												</g>
												<path id="Path_74699" class="st12" d="M-300-248c0,0-10.9,13.7-8.9,26.8"/>
											</g>
											<g id="Group_9436" transform="translate(9.957 47.942)">
												<g id="Group_9435">
													<g id="Group_9432" transform="translate(1.807 17.533)">
														<path id="Path_74700" class="st9" d="M-228.3-285.4c0,0-7.2-3.6-11-1.6"/>
														<path id="Path_74701" class="st10" d="M-239.2-286.1c0.4,0,0.7-0.4,0.7-0.9c0-0.4-0.4-0.7-0.9-0.7c-0.4,0-0.7,0.4-0.7,0.9
																							  c0,0,0,0,0,0C-240.1-286.4-239.7-286.1-239.2-286.1z"/>
													</g>
													<g id="Group_9433" transform="translate(4.648 8.008)">
														<path id="Path_74702" class="st9" d="M-231.3-275.7c0,0-5.6-5.9-9.9-5.2"/>
														<path id="Path_74703" class="st10" d="M-241.3-280.1c0.4,0.1,0.8-0.2,0.9-0.6c0.1-0.4-0.2-0.8-0.6-0.9
																							  c-0.4-0.1-0.8,0.2-0.9,0.6c0,0,0,0,0,0C-242-280.6-241.7-280.2-241.3-280.1C-241.3-280.1-241.3-280.1-241.3-280.1z"/>
													</g>
													<g id="Group_9434">
														<path id="Path_74704" class="st9" d="M-228.3-270.6c0,0-5.6-5.9-9.9-5.2"/>
														<path id="Path_74705" class="st10" d="M-238.4-275c0.4,0.1,0.8-0.2,0.9-0.6s-0.2-0.8-0.6-0.9s-0.8,0.2-0.9,0.6
																							  c0,0,0,0,0,0C-239-275.5-238.8-275.1-238.4-275C-238.4-275-238.4-275-238.4-275z"/>
													</g>
													<path id="Path_74706" class="st11" d="M-221-263.9c0,0,0.4-8.4-6.1-11.7c-0.5,1.6-0.2,3.4,0.9,4.7c0,0-3.5-2.7-4.9-1.3
																						  c0,0,1.1,3.3,2.8,4.2c0,0-4.4-0.6-5.5,0.4C-233.9-267.7-228-260.3-221-263.9z"/>
												</g>
												<path id="Path_74707" class="st12" d="M-224.4-266.5c0,0,18.4,13.5,20.8,30.1"/>
											</g>
										</g>
									</g>
								</g>
							</g>
							<g id="Group_9448" transform="translate(47.553 18.975)">
								<path id="Path_74708" class="st18" d="M15.5,51.6H-96.2l1.1-84.3L16.3-32L15.5,51.6z"/>
								<path id="Path_74709" class="st10" d="M17.8,49.8l-2.3,1.8V-32h1.4L17.8,49.8z"/>
								<path id="Path_74710" class="st19" d="M-96.2,51.6H12c4.7-24.3,1.9-81,1.9-81l-16.8-2.7l-92.2-0.6L-96.2,51.6z"/>
								<g id="Group_9447">
									<g id="Group_9446">
										<g id="Group_9440" transform="translate(0 15.672)">
											<path id="Path_74711" class="st20" d="M-91.8-44.6l109.4-3.1c0,0-0.5,65.4-11.8,87.2l-109.1-0.2
																				  C-103.4,39.4-88.8-24-91.8-44.6z"/>
											<path id="Path_74712" class="st21" d="M-93.2-46.5l110.6-0.2c0,0-5.9,60.8-17.2,82.6l-105,1.5
																				  C-104.8,37.5-90.2-25.9-93.2-46.5z"/>
											<path id="Path_74713" class="st22" d="M-95.6-49.5l113.2,1.8c0,0-8.4,59.3-20.3,80.6L-109,33.1
																				  C-109,33.1-92.9-29.1-95.6-49.5z"/>
										</g>
										<g id="Group_9441" transform="translate(68.348 27.855)">
											<circle id="Ellipse_397" class="st21" cx="-151.3" cy="-56" r="1.2"/>
											<path id="Path_74714" class="st21" d="M-135.6-55.7c0,0.7-0.6,1.2-1.3,1.2c-0.7,0-1.2-0.6-1.2-1.3c0-0.7,0.6-1.2,1.3-1.2
																				  c0,0,0,0,0,0C-136.2-57-135.6-56.4-135.6-55.7C-135.6-55.7-135.6-55.7-135.6-55.7z"/>
											<path id="Path_74715" class="st21" d="M-121.2-55.5c0,0.7-0.6,1.2-1.3,1.2c-0.7,0-1.2-0.6-1.2-1.3c0-0.7,0.6-1.2,1.3-1.2
																				  c0,0,0,0,0,0C-121.7-56.8-121.2-56.2-121.2-55.5C-121.2-55.5-121.2-55.5-121.2-55.5z"/>
											<path id="Path_74716" class="st21" d="M-106.8-55.3c0,0.7-0.6,1.2-1.3,1.2s-1.2-0.6-1.2-1.3c0-0.7,0.6-1.2,1.3-1.2
																				  c0,0,0,0,0,0C-107.3-56.5-106.8-56-106.8-55.3C-106.8-55.3-106.8-55.3-106.8-55.3z"/>
											<path id="Path_74717" class="st21" d="M-92.4-55c0,0.7-0.6,1.2-1.3,1.2c-0.7,0-1.2-0.6-1.2-1.3c0-0.7,0.6-1.2,1.3-1.2
																				  c0,0,0,0,0,0C-92.9-56.3-92.4-55.7-92.4-55C-92.4-55-92.4-55-92.4-55z"/>
											<circle id="Ellipse_398" class="st21" cx="-79.2" cy="-54.8" r="1.2"/>
											<circle id="Ellipse_399" class="st22" cx="-64.8" cy="-54.6" r="1.2"/>
										</g>
										<path id="Path_74718" class="st23" d="M-82-29c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9s1.4-5.9,2.9-5.8
																			  c1.6,0,2.8,2.7,2.7,5.9"/>
										<path id="Path_74719" class="st23" d="M-67.6-28.8c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9c0.1-3.2,1.4-5.9,2.9-5.8
																			  c1.6,0,2.8,2.7,2.7,5.9"/>
										<path id="Path_74720" class="st23" d="M-53.2-28.5c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9c0.1-3.2,1.4-5.9,2.9-5.8
																			  s2.8,2.7,2.7,5.9"/>
										<path id="Path_74721" class="st23" d="M-38.8-28.3c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9c0.1-3.2,1.4-5.9,2.9-5.8
																			  c1.6,0,2.8,2.7,2.7,5.9"/>
										<path id="Path_74722" class="st23" d="M-24.4-28.1c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9s1.4-5.9,2.9-5.8
																			  c1.6,0,2.8,2.7,2.7,5.9"/>
										<path id="Path_74723" class="st23" d="M-10-27.8c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9c0.1-3.2,1.4-5.9,2.9-5.8
																			  s2.8,2.7,2.7,5.9"/>
										<path id="Path_74724" class="st23" d="M4.4-27.6c-0.5,0.8-1.1,1.3-1.8,1.3c-1.6,0-2.8-2.7-2.7-5.9s1.4-5.9,2.9-5.8
																			  s2.8,2.7,2.7,5.9"/>
										<g id="Group_9442" transform="translate(130.835 92.999)">
											<path id="Path_74725" class="st21" d="M-190.9-92.6c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-192.8-96.9-192.8-93.9-190.9-92.6z"/>
											<path id="Path_74726" class="st21" d="M-177.4-92.4c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-179.3-96.7-179.3-93.7-177.4-92.4z"/>
											<path id="Path_74727" class="st21" d="M-163.9-92.2c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-165.8-96.5-165.8-93.5-163.9-92.2z"/>
											<path id="Path_74728" class="st21" d="M-150.4-91.9c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-152.3-96.3-152.3-93.3-150.4-91.9z"/>
											<path id="Path_74729" class="st21" d="M-136.9-91.7c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-138.8-96-138.8-93-136.9-91.7z"/>
										</g>
										<g id="Group_9443" transform="translate(49.913 127.506)">
											<path id="Path_74730" class="st21" d="M-139.3-114.6c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-141.2-118.9-141.2-115.9-139.3-114.6z"/>
											<path id="Path_74731" class="st21" d="M-125.8-114.4c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-127.7-118.7-127.7-115.7-125.8-114.4z"/>
											<path id="Path_74732" class="st21" d="M-112.3-114.2c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-114.2-118.5-114.2-115.5-112.3-114.2z"/>
											<path id="Path_74733" class="st21" d="M-98.8-113.9c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-100.7-118.2-100.7-115.2-98.8-113.9z"/>
											<path id="Path_74734" class="st21" d="M-85.3-113.7c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-87.2-118-87.2-115-85.3-113.7z"/>
											<path id="Path_74735" class="st21" d="M-71.8-113.5c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-73.7-117.8-73.7-114.8-71.8-113.5z"/>
											<path id="Path_74736" class="st21" d="M-58.3-113.3c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-60.2-117.6-60.2-114.6-58.3-113.3z"/>
										</g>
										<g id="Group_9444" transform="translate(41.43 162.499)">
											<path id="Path_74737" class="st21" d="M-133.9-136.9c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-135.8-141.2-135.8-138.2-133.9-136.9z"/>
											<path id="Path_74738" class="st21" d="M-120.4-136.7c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-122.3-141-122.3-138-120.4-136.7z"/>
											<path id="Path_74739" class="st21" d="M-106.9-136.4c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-108.8-140.8-108.8-137.8-106.9-136.4z"/>
											<path id="Path_74740" class="st21" d="M-93.4-136.2c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-95.3-140.5-95.3-137.5-93.4-136.2z"/>
											<path id="Path_74741" class="st21" d="M-79.9-136c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-81.8-140.3-81.8-137.3-79.9-136z"/>
											<path id="Path_74742" class="st21" d="M-66.4-135.8c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-68.3-140.1-68.3-137.1-66.4-135.8z"/>
											<path id="Path_74743" class="st21" d="M-52.9-135.6c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-54.8-139.9-54.8-136.9-52.9-135.6z"/>
										</g>
										<g id="Group_9445" transform="translate(33.874 197.502)">
											<path id="Path_74744" class="st21" d="M-129.1-159.2c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-131-163.5-131-160.5-129.1-159.2z"/>
											<path id="Path_74745" class="st21" d="M-115.6-159c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-117.5-163.3-117.5-160.3-115.6-159z"/>
											<path id="Path_74746" class="st21" d="M-102.1-158.7c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8
																				  c-1.3-0.7-2.9-0.7-4.1,0.1C-104-163.1-104-160.1-102.1-158.7z"/>
											<path id="Path_74747" class="st21" d="M-88.6-158.5c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-90.5-162.8-90.5-159.8-88.6-158.5z"/>
											<path id="Path_74748" class="st21" d="M-75.1-158.3c1.3,0.8,2.9,0.9,4.3,0.1c2-1.2,1.8-4.5-0.2-5.8c-1.3-0.7-2.9-0.7-4.1,0.1
																				  C-77-162.6-77-159.6-75.1-158.3z"/>
										</g>
									</g>
									<path id="Path_74749" class="st24" d="M-44.5-4.7c0,0-3.3,4.5-0.1,4.6C-40.9,0-44.5-4.7-44.5-4.7z"/>
									<path id="Path_74750" class="st24" d="M-4.2-3.5c0,0-2.8,4.4,0.4,4.5C-0.6,1.1-4.2-3.5-4.2-3.5z"/>
									<path id="Path_74751" class="st24" d="M-17.4-3.4c0,0-3.3,3.8-0.1,3.9C-14.3,0.6-17.4-3.4-17.4-3.4z"/>
									<path id="Path_74752" class="st24" d="M-30.6-4.2c0,0-4,3.6-0.4,4.6C-27.8,1.1-30.6-4.2-30.6-4.2z"/>
									<path id="Path_74753" class="st24" d="M-58.2-4.4c0,0-3.2,4.2,0,4.1C-54.1-0.6-58.2-4.4-58.2-4.4z"/>
									<g class="st25">
										<path class="st18" d="M-68.6-14.3l-0.7,0l0.1-4.1c0-0.3,0-0.7,0.1-1.2h0c-0.1,0.3-0.1,0.5-0.2,0.6l-2.2,4.7l-0.3,0l-2-4.7
															  c-0.1-0.1-0.1-0.3-0.2-0.6h0c0,0.2,0,0.6,0,1.2l-0.1,4.1l-0.7,0l0.1-6.1l0.9,0l1.8,4.3c0.1,0.3,0.2,0.6,0.3,0.7h0
															  c0.1-0.3,0.2-0.6,0.3-0.7l2-4.2l0.9,0L-68.6-14.3z"/>
										<path class="st18" d="M-63.5-16.2l-3.1,0c0,0.5,0.1,0.9,0.4,1.1c0.2,0.3,0.6,0.4,1,0.4c0.5,0,0.9-0.1,1.4-0.5l0,0.7
															  c-0.4,0.3-0.9,0.4-1.5,0.4c-0.6,0-1.1-0.2-1.4-0.6c-0.3-0.4-0.5-1-0.5-1.7c0-0.7,0.2-1.2,0.6-1.6c0.4-0.4,0.9-0.6,1.4-0.6
															  s1,0.2,1.3,0.6c0.3,0.4,0.5,0.9,0.4,1.5L-63.5-16.2z M-64.2-16.8c0-0.4-0.1-0.7-0.3-0.9c-0.2-0.2-0.5-0.3-0.8-0.3
															  c-0.3,0-0.6,0.1-0.8,0.3c-0.2,0.2-0.4,0.5-0.4,0.9L-64.2-16.8z"/>
										<path class="st18" d="M-58.9-14.1l-0.7,0l0-2.5c0-0.9-0.3-1.4-1-1.4c-0.3,0-0.6,0.1-0.9,0.4c-0.2,0.3-0.4,0.6-0.4,1l0,2.5
															  l-0.7,0l0.1-4.4l0.7,0l0,0.7l0,0c0.3-0.5,0.8-0.8,1.4-0.8c0.5,0,0.8,0.2,1.1,0.5s0.4,0.8,0.4,1.3L-58.9-14.1z"/>
										<path class="st18" d="M-52.6-14.1c-0.2,0.1-0.4,0.1-0.7,0.1c-0.8,0-1.1-0.4-1.1-1.3l0-2.6l-1.9,0c-0.1,0-0.2,0-0.4,0
															  c-0.1,0-0.2,0-0.3,0.1c-0.1,0-0.1,0.1-0.2,0.2s-0.1,0.1-0.1,0.2c0,0.1,0,0.2,0.1,0.3c0,0.1,0.1,0.1,0.2,0.2s0.2,0.1,0.3,0.2
															  c0.1,0.1,0.2,0.1,0.4,0.2c0.2,0.1,0.4,0.2,0.5,0.2c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.2,0.2,0.2,0.3c0.1,0.1,0.1,0.3,0.1,0.5
															  c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.2,0.3-0.4,0.4c-0.2,0.1-0.3,0.2-0.6,0.2c-0.2,0-0.4,0.1-0.6,0.1c-0.5,0-0.8-0.1-1.2-0.3
															  l0-0.7c0.4,0.3,0.8,0.4,1.2,0.4c0.6,0,0.9-0.2,0.9-0.6c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.1-0.2-0.2-0.2
															  c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.1-0.4-0.2c-0.2-0.1-0.4-0.2-0.5-0.2c-0.1-0.1-0.3-0.2-0.4-0.3
															  c-0.1-0.1-0.2-0.2-0.2-0.3c0-0.1-0.1-0.3-0.1-0.4c0-0.2,0-0.4,0.1-0.5c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.1,0.3-0.2,0.5-0.2
															  c0.2,0,0.4-0.1,0.5-0.1l2,0l0-1.1l0.7-0.2l0,1.3l1.1,0l0,0.6l-1.1,0l0,2.5c0,0.3,0,0.5,0.1,0.6c0.1,0.1,0.3,0.2,0.5,0.2
															  c0.2,0,0.3,0,0.5-0.1L-52.6-14.1z"/>
										<path class="st18" d="M-49.3-17.6c-0.1-0.1-0.3-0.1-0.5-0.1c-0.3,0-0.5,0.1-0.8,0.4c-0.2,0.3-0.3,0.7-0.3,1.1l0,2.2l-0.7,0
															  l0.1-4.4l0.7,0l0,0.9h0c0.1-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.4-0.2,0.7-0.2c0.2,0,0.3,0,0.4,0.1L-49.3-17.6z"/>
										<path class="st18" d="M-45.1-13.9l-0.7,0l0-0.7l0,0c-0.3,0.5-0.7,0.8-1.4,0.8c-1,0-1.5-0.6-1.5-1.9l0-2.6l0.7,0l0,2.5
															  c0,0.9,0.3,1.4,1,1.4c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.3-0.6,0.3-1l0-2.5l0.7,0L-45.1-13.9z"/>
										<path class="st18" d="M-40.6-13.8l-0.7,0l0-0.7l0,0c-0.3,0.5-0.8,0.8-1.4,0.8c-0.4,0-0.8-0.1-1-0.4c-0.2-0.2-0.4-0.5-0.4-0.9
															  c0-0.8,0.5-1.3,1.5-1.4l1.3-0.2c0-0.7-0.3-1.1-0.9-1.1c-0.5,0-1,0.2-1.4,0.5l0-0.7c0.4-0.3,0.9-0.4,1.5-0.4
															  c1,0,1.5,0.6,1.5,1.6L-40.6-13.8z M-41.2-16l-1.1,0.1c-0.3,0-0.6,0.1-0.7,0.2c-0.2,0.1-0.3,0.3-0.3,0.6c0,0.2,0.1,0.4,0.2,0.5
															  c0.1,0.1,0.4,0.2,0.6,0.2c0.3,0,0.6-0.1,0.9-0.3s0.3-0.5,0.4-0.9L-41.2-16z"/>
										<path class="st18" d="M-38.5-13.8l-0.7,0l0.1-6.4l0.7,0L-38.5-13.8z"/>
										<path class="st18" d="M-31.8-13.9c-0.3,0.2-0.7,0.3-1.2,0.3c-0.6,0-1.1-0.2-1.5-0.6c-0.4-0.4-0.6-0.9-0.5-1.6
															  c0-0.7,0.2-1.3,0.6-1.7c0.4-0.4,1-0.6,1.7-0.6c0.4,0,0.7,0.1,1,0.2l0,0.7c-0.3-0.2-0.7-0.4-1-0.4c-0.4,0-0.8,0.1-1.1,0.5
															  c-0.3,0.3-0.4,0.7-0.4,1.2c0,0.5,0.1,0.9,0.4,1.2s0.6,0.5,1.1,0.5c0.4,0,0.7-0.1,1.1-0.4L-31.8-13.9z"/>
										<path class="st18" d="M-27.6-13.6l-0.7,0l0-0.7h0c-0.3,0.5-0.8,0.8-1.4,0.8c-0.4,0-0.8-0.1-1-0.4c-0.2-0.2-0.4-0.5-0.4-0.9
															  c0-0.8,0.5-1.3,1.5-1.4l1.3-0.2c0-0.7-0.3-1.1-0.9-1.1c-0.5,0-1,0.2-1.4,0.5l0-0.7c0.4-0.3,0.9-0.4,1.5-0.4
															  c1,0,1.5,0.6,1.5,1.6L-27.6-13.6z M-28.3-15.8l-1.1,0.1c-0.3,0-0.6,0.1-0.7,0.2c-0.2,0.1-0.3,0.3-0.3,0.6
															  c0,0.2,0.1,0.4,0.2,0.5c0.1,0.1,0.4,0.2,0.6,0.2c0.3,0,0.6-0.1,0.9-0.3c0.2-0.2,0.3-0.5,0.4-0.9L-28.3-15.8z"/>
										<path class="st18" d="M-25.6-13.6l-0.7,0l0.1-6.4l0.7,0L-25.6-13.6z"/>
										<path class="st18" d="M-20.7-15.5l-3.1,0c0,0.5,0.1,0.9,0.4,1.1c0.2,0.3,0.6,0.4,1,0.4c0.5,0,0.9-0.1,1.4-0.5l0,0.7
															  c-0.4,0.3-0.9,0.4-1.5,0.4c-0.6,0-1.1-0.2-1.4-0.6s-0.5-1-0.5-1.7c0-0.7,0.2-1.2,0.6-1.6c0.4-0.4,0.9-0.6,1.4-0.6
															  c0.6,0,1,0.2,1.3,0.6c0.3,0.4,0.5,0.9,0.4,1.5L-20.7-15.5z M-21.4-16.1c0-0.4-0.1-0.7-0.3-0.9c-0.2-0.2-0.5-0.3-0.8-0.3
															  c-0.3,0-0.6,0.1-0.8,0.3c-0.2,0.2-0.4,0.5-0.4,0.9L-21.4-16.1z"/>
										<path class="st18" d="M-16-13.4l-0.7,0l0-2.5c0-0.9-0.3-1.4-1-1.4c-0.3,0-0.6,0.1-0.9,0.4c-0.2,0.3-0.4,0.6-0.4,1l0,2.5
															  l-0.7,0l0.1-4.4l0.7,0l0,0.7l0,0c0.3-0.5,0.8-0.8,1.4-0.8c0.5,0,0.8,0.2,1.1,0.5c0.2,0.3,0.4,0.8,0.4,1.3L-16-13.4z"/>
										<path class="st18" d="M-11-13.3l-0.7,0l0-0.7h0c-0.3,0.6-0.8,0.8-1.5,0.8c-0.5,0-1-0.2-1.3-0.6c-0.3-0.4-0.5-0.9-0.5-1.6
															  c0-0.7,0.2-1.3,0.6-1.7c0.4-0.4,0.9-0.6,1.5-0.6c0.6,0,1,0.3,1.3,0.7h0l0-2.7l0.7,0L-11-13.3z M-11.7-15.3l0-0.6
															  c0-0.4-0.1-0.7-0.3-0.9s-0.5-0.4-0.9-0.4c-0.4,0-0.8,0.1-1,0.5c-0.2,0.3-0.4,0.7-0.4,1.3c0,0.5,0.1,0.9,0.3,1.2
															  c0.2,0.3,0.5,0.4,0.9,0.5c0.4,0,0.7-0.1,1-0.4C-11.8-14.5-11.7-14.9-11.7-15.3z"/>
										<path class="st18" d="M-6.5-13.3l-0.7,0l0-0.7l0,0c-0.3,0.5-0.8,0.8-1.4,0.8c-0.4,0-0.8-0.1-1-0.4c-0.2-0.2-0.4-0.5-0.4-0.9
															  c0-0.8,0.5-1.3,1.5-1.4l1.3-0.2c0-0.7-0.3-1.1-0.9-1.1c-0.5,0-1,0.2-1.4,0.5l0-0.7c0.4-0.3,0.9-0.4,1.5-0.4
															  c1,0,1.5,0.6,1.5,1.6L-6.5-13.3z M-7.1-15.5l-1.1,0.1c-0.3,0-0.6,0.1-0.7,0.2c-0.2,0.1-0.3,0.3-0.3,0.6c0,0.2,0.1,0.4,0.2,0.5
															  c0.1,0.1,0.4,0.2,0.6,0.2c0.3,0,0.6-0.1,0.9-0.3s0.3-0.5,0.4-0.9L-7.1-15.5z"/>
										<path class="st18" d="M-2.8-16.9C-2.9-16.9-3.1-17-3.3-17c-0.3,0-0.5,0.1-0.8,0.4c-0.2,0.3-0.3,0.7-0.3,1.1l0,2.2l-0.7,0
															  l0.1-4.4l0.7,0l0,0.9l0,0c0.1-0.3,0.3-0.5,0.5-0.7c0.2-0.2,0.4-0.3,0.7-0.2c0.2,0,0.3,0,0.4,0.1L-2.8-16.9z"/>
									</g>
								</g>
							</g>
							<g id="Group_9461" transform="translate(12.992 129.538)">
								<g id="Group_9459">
									<path id="Path_74754" class="st26" d="M-71.3-32.7L-73-14c-0.1,1.3,0.3,2.6,1.3,3.5l12.7,12.8l5.6-17.5L-71.3-32.7z"/>
									<path id="Path_74755" class="st27" d="M-58.3-0.2l3.5-11.1c0.2-1.7,0.3-3.4,0.4-4.8l-16.9-16.6l-1,10.8l7,10.9
																		  c0.2,0.3,0.3,0.7,0.4,1.1l0.6,7l2.2,2.2L-58.3-0.2z"/>
									<path id="Path_74756" class="st28" d="M-36.4-11.1l0.2-4.5c5.3-8.2,5.5-14.5,3.3-17.2C-34.7-35.1-43.3-46-43.3-46l-3.5-4.6
																		  c-1.6-2.1-10.2-8.8-12.8-9.3l-6.2-1.5c-2.3-0.1-4.5,1.2-5.7,3.2c-8.9,15.1-4.4,24.6-2.4,27.7c2.1,3.3,11.3,19.5,11.3,19.5v8
																		  l-2.3,8.8h33.4l-3.3-8.4L-36.4-11.1z"/>
									<g id="Group_9449" transform="translate(27.952 144.892)">
										<path id="Path_74757" class="st11" d="M-68.8-156c-0.4-3.2-1.1-6.4-2.2-9.5c-0.5-1.4-1.3-3.1-1.4-5.5
																			  c-0.2-3.6,1.2-4.7,1.5-8.6c0.3-4.2-0.9-8-1.5-7.9c-0.9,0-0.5,9.1-2.4,9.4c-1.2,0.2-2.2-3.5-6.6-10.1c-3.9-5.9-5.9-7.1-6.8-7.6
																			  c-3.2-1.7-4.5-0.5-7.4-2c-1.9-1-3.4-2.6-4.4-4.5c-8.2,14.6-3.9,23.8-2,26.8c2.1,3.3,11.3,19.5,11.3,19.5v8
																			  c0,0,11.7,3.5,23.4,1.4C-67.1-146.8-68.8-156-68.8-156z"/>
										<path id="Path_74758" class="st29" d="M-67.2-146.6c-11.7,2.1-23.4-1.4-23.4-1.4l-2.3,8.8h24.5
																			  C-68.5-141.5-67.5-145.3-67.2-146.6z"/>
									</g>
									<g id="Group_9458">
										<path id="Path_74759" class="st26" d="M-57.4-58.9c1.8,0.9,3.4,2,4.9,3.3c0,0-5.4,2.3-11.2,1.7L-57.4-58.9z"/>
										<g id="Group_9452" transform="translate(79.244)">
											<path id="Path_74760" class="st26" d="M-129.4-54.2c5,0,14.8,0.3,16.5,0.3c1.7,0,18.2-3.2,18.2-3.2s1.4-7.6,2.4-13.9
																				  s2-12.6,2.4-17.9l5-3c0,0,0.8,6.9,0.8,18.7c0,5.2,1.1,15.4-2.9,25.7c0,0-23,8-34.9,8c-0.8,0-1.5,0.7-1.6,1.5c0,0,0,0,0,0.1
																				  c0.1,3.5-2.5,12.9-9.3,5.2C-142.8-44-134.4-54.2-129.4-54.2z"/>
											<g id="Group_9451" transform="translate(103.165)">
												<path id="Path_74761" class="st26" d="M-195.4-100.3c0.3,0,0.9-4.3,0.4-5.3c-0.5-1-3.7-2.1-4.5-2.5
																					  c-0.9-0.3-2.2-2.6,1.2-1.6c2.2,0.6,3,0.4,3.9,0.7c0.5,0.2,0.5-0.2,1.9,1.5c1.4,1.7,3.2,3.5,3.8,4.3c0.6,0.8,0.4,4.6,0.4,7.2
																					  s0.6,8.7,0.6,8.7l-5,0.3c0,0-1-6.7-3.6-9.2"/>
												<path id="Path_74762" class="st30" d="M-191-104.6c-0.9-1-1.6-2.1-2.1-3.3"/>
												<g id="Group_9450" transform="translate(0 1.028)">
													<path id="Path_74763" class="st10" d="M-194.9-106.4l-2.6-1.9c-0.8-0.4-1.6-0.7-2-0.8c-0.5-0.2-1.1-0.9-1-1.4l-0.1-0.1
																						  l-2.6,0l0.8,2.4l7.4,5.4C-194.8-103.9-194.7-105.6-194.9-106.4z"/>
													<path id="Path_74764" class="st31" d="M-197.5-108.3c-0.8-0.4-1.6-0.7-2-0.8c-0.5-0.2-1.1-0.9-1-1.4l-0.1-0.1l-0.5,0
																						  l-0.4,0.6l6.7,4.9c0-0.5,0-0.9-0.1-1.4L-197.5-108.3z"/>
													<path id="Path_74765" class="st29" d="M-202.6-109.5l-0.2,0.1l0.4,1.2l7.4,5.4c0.1-0.3,0.1-0.7,0.1-1.1L-202.6-109.5z"/>
													<path id="Path_74766" class="st26" d="M-200.6-110.6l-2.6,0l0.8,2.4C-202.4-108.1-202.6-109.7-200.6-110.6z"/>
												</g>
												<path id="Path_74767" class="st10" d="M-188.3-100.5l-6.6-4.8c0.2,0.8,0.1,2.5-0.1,3.7l6.7,4.9l5.4,4c1-0.3,1.8-1.3,1.8-2.4
																					  v-0.1L-188.3-100.5z"/>
												<path id="Path_74768" class="st31" d="M-182-94.6l0.9-0.5c0,0,0,0,0-0.1v-0.1l-7.2-5.3l-6.6-4.8c0.1,0.4,0.1,0.9,0.1,1.4
																					  L-182-94.6z"/>
												<path id="Path_74769" class="st29" d="M-181.9-93.3l-12.9-9.5c0,0.4-0.1,0.8-0.1,1.1l6.7,4.9l5.4,4
																					  C-182.5-92.9-182.2-93.1-181.9-93.3z"/>
												<path id="Path_74770" class="st26" d="M-195.8-95.6c-1.5-1-3.6-6.8-3.7-8.6c-0.1-1.9,1.6-1.1,2.6,1.7c1,2.9,3.2,2.4,3.5,2.4
																					  "/>
											</g>
											<path id="Path_74771" class="st24" d="M-99.7-108.5c0.2-0.4,0.4-0.8,0.8-1l-1.1,0L-99.7-108.5z"/>
										</g>
										<g id="Group_9455" transform="translate(0 22.671)">
											<g id="Group_9454" transform="translate(24.556)">
												<path id="Path_74772" class="st26" d="M-71.6-113.4c0.9,5,2.5,6.3,4.2,6.7c1.7,0.4-0.8,3.8-0.8,4.2c0,0.4,1.3,5.5,0.8,8.4
																					  c-0.4,2.9-1.4,3.4-1.7,3.7c-1.3,1.3-9.5,1.4-10.4,1.7c-0.8,0.3-1.8,7.8-2.3,10.5c-0.1,0.5-0.4,0.8-0.9,0.9
																					  c-2.8,0.7-5.8,0.8-8.7,0.5c-1.6-0.2-2.8-1.7-2.6-3.4c0-0.1,0-0.2,0.1-0.3c0.8-3.4,1.7-8.3,2.4-10.3c0,0-2.2-2.5-4.5-3.8
																					  s-5.5-6.7-4.7-14.1c0.8-7.4,4.9-12.6,12.3-13.5c7.4-0.9,9.5-0.9,11.9,1C-73.9-119-72.3-117.3-71.6-113.4z"/>
												<path id="Path_74773" class="st27" d="M-81.9-91.2c-2.8-0.5-4.6-1.2-4.9-0.6c-0.1,0.2-0.1,0.5,0,0.7l-3.2-1.6l-2.2,1.3
																					  c0.4,0.4,0.6,0.7,0.6,0.7c-0.7,2.1-1.6,6.9-2.4,10.3c-0.4,1.6,0.6,3.2,2.2,3.6c0.1,0,0.2,0,0.3,0.1c1,0.1,2.1,0.2,3.1,0.2
																					  l0,0c5.8,0.7,11.2-1.7,11.2-1.7c-3.6,1-8.4,1.1-10.8,1c-0.8,0-1.5-0.7-1.5-1.5c0-1,0-2.6,0.1-5c0-1.9,0.9-3.7,2.3-4.9
																					  c0.6-0.5,1.5-0.5,2.1,0c1.3,1.1,2.7,2,4.3,2.6c0.3-1.5,0.7-2.6,0.9-2.7c0.9-0.3,9.1-0.4,10.4-1.7c0.5-0.4,0.9-0.8,1.1-1.4
																					  C-70.6-91.3-75.5-90.1-81.9-91.2z"/>
												<path id="Path_74774" class="st32" d="M-73.4-113.8C-73.4-113.8-73.4-113.8-73.4-113.8c0.3-0.9,1.9-7,0.2-9.4
																					  c-1.2-1.6-5.3-1.3-7.9-1c-1.3,0.2-2.7,0.2-4,0.1c-1.9-0.2-3.8,0-5.6,0.6c-6,2.3-7.8,5-8.9,7.4c-6.7,14.1-1.1,21.2,4.8,24
																					  c0.6,0.4,2.1,1.6,2.2,2.5c0.1,1.5,0.1,4.2,0.7,2.5c0.4-1.1,5.1-3.7,5.1-3.7c0.2,0,0.4-0.1,0.6-0.2c3.5-1.5,4.5-17.6,11-20.8
																					  C-74.3-112-73.6-112.8-73.4-113.8L-73.4-113.8C-73.4-113.7-73.4-113.7-73.4-113.8z"/>
												<path id="Path_74775" class="st33" d="M-88.4-123c0.1-0.5,10.9,1.7,10.8,2.3c-0.1,0.4-6-0.2-6.1,0.5
																					  c-0.1,0.6,3.6,1.2,3.6,2.2c0,1.1-4.2,1.7-4.1,2.1c0.1,0.5,5.4-0.5,5.7,0.6c0.6,1.6-9.6,6.6-9.8,6.2c-0.1-0.2,3.3-2,3-3.6
																					  c-0.3-1.2-2.6-1.3-2.6-2.2c-0.1-1.2,3.6-1.7,3.6-3c0-1.5-4.7-2.6-4.6-3.2c0.1-0.5,3.8,0.2,3.9-0.3
																					  C-84.8-121.6-88.5-122.7-88.4-123z"/>
												<path id="Path_74776" class="st10" d="M-78.8-107.8c0,0-1.2,2.2-0.3,4.4c0.5,1.2-0.6,2.5-2.6-1.6
																					  C-83.8-109.3-78.8-107.8-78.8-107.8z"/>
											</g>
											<path id="Path_74780" class="st32" d="M-71.3-116.7c0-3.3-3.2-6.2-6-7c-3.8-1.1-8.9,1.4-9.6,6c-0.5,3.3,1.4,6.9,3.5,8.4
																				  C-78.6-106.1-71.3-111.8-71.3-116.7z"/>
											<path id="Path_74781" class="st32" d="M-48.6-116.2c-0.6,0.9-1.4,1.8-2.2,2.5c-0.9,0.8-1.8,1.3-3.5,2.2c-3.7,2-5.6,3-8.3,3.6
																				  c-2.8,0.6-6.9,0.6-9.6-0.8c-3.9-2-0.8-11.6-4.2-4.5c-0.8,1.6-3.7,1.3-6.4-0.1c-2.3-1.2-2.7-4.8-3-7.1c-0.5,0.8-0.9,1.7-1,2.7
																				  c-0.5,3.3,1.4,6.9,3.5,8.4c1.7,1.2,3.9,1.1,5.8,0.3c-2.1,9.5,2.5,14.6,7.3,16.9c0.6,0.4,2.1,1.6,2.2,2.5
																				  c0.1,1.5,0.1,4.2,0.7,2.5c0.4-1.1,5.1-3.7,5.1-3.7c0.2,0,0.4-0.1,0.6-0.2c2.1-0.9,3.3-7.1,5.4-12.6c1.4,2,2,0.9,1.6-0.1
																				  c-0.6-1.6-0.2-3.2,0.1-3.9c1-1.9,2.3-3.4,3.9-4.2C-48.7-112.5-48.5-114.6-48.6-116.2z"/>
										</g>
										<g id="Group_9456" transform="translate(9.869 28.74)">
											<path id="Path_74782" class="st33" d="M-93.2-126.6c-0.1-0.2,1.4-1.4,3.1-1.6c3.1-0.5,5.8,1.8,5.7,2.1
																				  c-0.1,0.2-2.5-0.7-2.8-0.2c-0.2,0.5,1.8,1.6,1.5,2.2c-0.3,0.6-2.5,0-2.7,0.5c-0.2,0.4,1.4,1,1.5,2c0.1,1.4-2.7,2.8-3,2.4
																				  c-0.2-0.2,0.8-1.1,0.6-2.1c-0.4-1.4-2.9-1.5-2.9-2.2c0-0.8,2.9-1.2,2.9-1.5c0-0.2-2.7,0.2-2.8-0.3c-0.1-0.4,2.1-1.3,2-1.5
																				  C-90.2-127.2-93.1-126.2-93.2-126.6z"/>
										</g>
										<path id="Path_74783" class="st26" d="M-55-78.7c0,0-1.5-3.8-3.5-4.1c-1.2-0.2-3.7,1-2.9,4.9c0.8,3.9,4.3,4.2,6.1,3.6
																			  C-53.8-74.9-55-78.7-55-78.7z"/>
										<g id="Group_9457" transform="translate(74.589 83.088)">
											<path id="Path_74784" class="st9" d="M-134.5-162.7c0,0,1.9-1.3,2.7,2.4"/>
											<path id="Path_74785" class="st9" d="M-133.7-160.6c0,0,0.2-1.2,1.3-1.2"/>
										</g>
										<path id="Path_74786" class="st27" d="M-44.1-37.8c0-0.8,0.7-1.5,1.5-1.6c0,0,0,0,0,0c11.8,0,34.9-8,34.9-8
																			  c0.6-1.7,1.2-3.4,1.6-5.2C-7.7-50.1-9-48.9-9-48.9c-20.2,6.2-28.7,7.8-32.5,7.8c-0.8,0-2.5,0-4.3,1c-3.8,2.3-3.2,7.3-5.3,8.1
																			  c-0.6,0.2-1.4,0.1-2.4-0.7c0,0,0.1,0.1,0.1,0.1C-46.6-24.9-44.1-34.4-44.1-37.8z"/>
										<path id="Path_74787" class="st34" d="M-69.5-53.5c0,0-3.1,12.1-1.8,17.5c0.7,2.9,9.3,12.1,10.8,19.3"/>
									</g>
									<path id="Path_74788" class="st10" d="M-31.6,5.7l-3.3-8.4C-47.8,1-62.6-3.1-62.6-3.1l-2.3,8.8L-31.6,5.7z"/>
								</g>
								<path id="Path_74789" class="st26" d="M1.3-95.1L1.3-95.1c-2,0.3-1.8,2.4-1.8,2.4C0.6-93.1,1.3-94.1,1.3-95.1z"/>
								<path id="Path_74790" class="st24" d="M0.6-93.9c-0.2,0.3-0.4,0.5-0.5,0.4c-0.1-0.1,0-0.4,0.2-0.7c0.2-0.3,0.4-0.5,0.5-0.4
																	  C0.9-94.5,0.8-94.2,0.6-93.9z"/>
								<path id="Path_74791" class="st35" d="M-77.5-86.2c0,0,0.6-4.7,5.2-10.9"/>
								<g id="Group_9460" transform="translate(25.933 18.599)">
									<path id="Path_74792" class="st35" d="M-98-115.8c0,0-0.9-7.5,1.6-5.7C-93.9-119.8-98-115.8-98-115.8s2.5,1.1,4.8-1.5"/>
									<path id="Path_74793" class="st35" d="M-98-116.1c0,0-5.3-2.7-5.4-1.2c-0.2,1.5,1.1,3.8,5.5,1.5c0,0,0.8,3.7-1.6,4.7"/>
								</g>
							</g>
							<path id="Path_74794" class="st36" d="M49.3,2.6c0,0,3.5-2.2,4.1-0.9s-5.8,4.7-5.8,4.7s-2.6-6.2-0.1-7.3S49.3,2.6,49.3,2.6z"/>
							<path id="Path_74795" class="st36" d="M62,84.2c0,0,2.4-2.3,3.1-1.4c0.7,1-3.9,4.7-3.9,4.7S58.2,83,60,81.7
																  C61.8,80.5,62,84.2,62,84.2z"/>
							<path id="Path_74796" class="st36" d="M-68.1,63.2c0,0-0.4-2.9,0.7-2.8s1.2,5.1,1.2,5.1s-4.7-0.2-4.7-2.1
																  C-70.8,61.5-68.1,63.2-68.1,63.2z"/>
							<g id="Group_9462">
								<path id="Path_74797" class="st36" d="M-67.9-23.4c0,0-0.3-4.1,1.2-4s1.2,7.4,1.2,7.4s-6.7-0.8-6.4-3.4
																	  C-71.6-26.1-67.9-23.4-67.9-23.4z"/>
								<path id="Path_74798" class="st36" d="M-76.4-19.7c0,0-1.5-2.2-0.6-2.6c0.9-0.4,3.2,3.7,3.2,3.7s-4,1.8-4.7,0.2
																	  C-79.3-20-76.4-19.7-76.4-19.7z"/>
							</g>
						</g>
					</g>
				</g>
				<g id="Group_14220" transform="translate(-513.826 -8338.112)">
					<circle id="Ellipse_375_1_" class="st3" cx="860" cy="8561.7" r="1.1"/>

					<linearGradient id="Ellipse_373_4_" gradientUnits="userSpaceOnUse" x1="396.751" y1="8896.6299" x2="396.4763" y2="8896.4395" gradientTransform="matrix(-84.569 8.9244 8.9244 84.569 -45025.375 -747263)">
						<stop  offset="0" style="stop-color:#94DAEC;stop-opacity:0.502"/>
						<stop  offset="1" style="stop-color:#FFFFFF"/>
					</linearGradient>
					<circle id="Ellipse_373_1_" class="st37" cx="834.3" cy="8643.6" r="11.1"/>

					<linearGradient id="Ellipse_374_4_" gradientUnits="userSpaceOnUse" x1="396.5816" y1="8897.4902" x2="396.3068" y2="8897.2988" gradientTransform="matrix(512.2504 -156.6107 -156.8995 -513.1952 1193743.25 4636721.5)">
						<stop  offset="0" style="stop-color:#94DAEC;stop-opacity:0.502"/>
						<stop  offset="1" style="stop-color:#FFFFFF"/>
					</linearGradient>
					<path id="Ellipse_374_1_" class="st38" d="M779.3,8500c36.8-11.3,75.8,9.5,87.1,46.4c11.3,36.9-9.4,75.9-46.2,87.1
															  c-36.8,11.3-75.8-9.5-87.1-46.4C721.8,8550.2,742.5,8511.2,779.3,8500z"/>
					<g id="Untitled-1" transform="translate(623.638 8395.611)">
						<g id="Group_14132" transform="translate(6.276 3.69)">
							<g id="Group_14126" transform="translate(312.893 32.773)">
								<path id="Path_79631" class="st39" d="M-115.2,72l0.6,1.8c0,0,0,0.1-0.1,0.1c0,0-0.1,0-0.1-0.1l0,0c0,0,0,0,0,0v0L-115.2,72z"/>
								<path id="Path_79632" class="st39" d="M-113.9,76.3l0.4,1.9c0,0.1-0.1,0.3-0.2,0.3s-0.3-0.1-0.3-0.2c0,0,0,0,0,0l0,0l-0.3-1.9
																	  l0,0c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0C-114,76.1-113.9,76.2-113.9,76.3z"/>
								<path id="Path_79633" class="st39" d="M-113.2,79.5c0.2,1.3,0.3,2.6,0.4,3.9c0,0.2-0.1,0.4-0.3,0.4c-0.2,0-0.3-0.1-0.4-0.3v0
																	  c0-1.3-0.1-2.6-0.2-3.9c0-0.1,0.1-0.3,0.2-0.3C-113.4,79.2-113.2,79.3-113.2,79.5z"/>
								<path id="Path_79634" class="st39" d="M-112.8,86.1l-0.1,2c0,0.2-0.2,0.4-0.5,0.4c-0.2,0-0.4-0.2-0.4-0.4v0l0,0l0.2-1.9l0,0
																	  c0-0.2,0.2-0.4,0.4-0.4C-112.9,85.7-112.8,85.8-112.8,86.1L-112.8,86.1L-112.8,86.1z"/>
								<path id="Path_79635" class="st39" d="M-113.1,89.4c-0.2,1.3-0.4,2.6-0.7,3.9c-0.1,0.2-0.3,0.4-0.5,0.3s-0.4-0.3-0.3-0.5l0,0v0
																	  c0.3-1.3,0.6-2.5,0.8-3.8c0-0.2,0.3-0.4,0.5-0.4C-113.2,88.9-113,89.1-113.1,89.4z"/>
								<path id="Path_79636" class="st39" d="M-114.5,95.8l-0.7,1.9c-0.1,0.2-0.3,0.4-0.6,0.3c-0.2-0.1-0.4-0.3-0.3-0.6c0,0,0,0,0,0
																	  l0,0l0.6-1.8l0,0c0.1-0.2,0.3-0.4,0.6-0.3C-114.5,95.3-114.4,95.6-114.5,95.8L-114.5,95.8z"/>
								<path id="Path_79637" class="st39" d="M-115.6,98.9l-0.8,1.8c-0.2,0.6-0.5,1.2-0.7,1.8c-0.1,0.2-0.3,0.4-0.5,0.3
																	  c-0.2-0.1-0.4-0.3-0.3-0.5c0.2-0.6,0.4-1.3,0.7-1.9l0.8-1.8l0,0c0.1-0.2,0.4-0.3,0.6-0.3S-115.5,98.7-115.6,98.9
																	  C-115.6,98.9-115.6,98.9-115.6,98.9L-115.6,98.9z"/>
								<path id="Path_79638" class="st39" d="M-117.6,105c-0.1,0.6-0.1,1.3-0.1,1.9c0,0.2-0.2,0.4-0.4,0.4c0,0,0,0,0,0
																	  c-0.2,0-0.4-0.2-0.4-0.4c0-0.7,0-1.3,0.1-2c0-0.2,0.2-0.4,0.5-0.3C-117.8,104.6-117.6,104.8-117.6,105
																	  C-117.6,105-117.6,105-117.6,105z"/>
								<path id="Path_79639" class="st39" d="M-117.7,108.2c0.1,1.3,0.4,2.5,0.8,3.8c0.1,0.1,0,0.3-0.2,0.3c-0.1,0.1-0.3,0-0.3-0.2
																	  c-0.5-1.2-0.8-2.5-1-3.9c0-0.2,0.1-0.4,0.3-0.4C-117.9,107.9-117.7,108-117.7,108.2L-117.7,108.2
																	  C-117.7,108.2-117.7,108.2-117.7,108.2z"/>
								<path id="Path_79640" class="st39" d="M-115.8,114.3l1,1.7l0,0c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0c-0.1,0-0.1,0-0.2,0l-1.1-1.6
																	  c-0.1-0.1,0-0.2,0-0.3C-116,114.2-115.9,114.2-115.8,114.3C-115.9,114.3-115.9,114.3-115.8,114.3L-115.8,114.3z"/>
								<path id="Path_79641" class="st39" d="M-114.1,117c0.4,0.5,0.8,1,1.2,1.4c-0.5-0.4-0.9-0.8-1.4-1.3c0,0,0-0.1,0-0.1
																	  C-114.2,117-114.1,117-114.1,117L-114.1,117C-114.1,117-114.1,117-114.1,117z"/>
							</g>
							<g id="Group_14127" transform="translate(0 188.185)">
								<path id="Path_79642" class="st39" d="M113-27.1l1.9-0.1h0c0,0,0,0,0,0c0,0,0,0,0,0l0,0h0L113-27.1z"/>
								<path id="Path_79643" class="st39" d="M117.1-27.7l1.7-0.4l0,0c0.1,0,0.1,0,0.2,0.1c0,0.1,0,0.1-0.1,0.2l0,0c0,0,0,0,0,0
																	  l-1.7,0.4c-0.1,0-0.1,0-0.1-0.1c0,0,0,0,0,0C117-27.6,117.1-27.6,117.1-27.7L117.1-27.7z"/>
								<path id="Path_79644" class="st39" d="M119.9-28.4c1.1-0.4,2.2-0.8,3.2-1.3c0.1-0.1,0.2,0,0.3,0.1c0.1,0.1,0,0.2-0.1,0.3
																	  c0,0,0,0,0,0c0,0,0,0,0,0c-1.1,0.5-2.2,0.9-3.3,1.2c-0.1,0-0.2,0-0.2-0.1C119.8-28.3,119.9-28.4,119.9-28.4L119.9-28.4z"/>
								<path id="Path_79645" class="st39" d="M125.2-30.8l1.5-0.9l0,0c0.1-0.1,0.3,0,0.4,0.1c0.1,0.1,0,0.3-0.1,0.4c0,0,0,0,0,0
																	  l-1.5,0.9c-0.1,0.1-0.3,0-0.3-0.1C125.1-30.6,125.1-30.8,125.2-30.8L125.2-30.8z"/>
								<path id="Path_79646" class="st39" d="M127.7-32.4l2.9-2l0,0c0.1-0.1,0.4-0.1,0.5,0.1c0.1,0.1,0.1,0.3-0.1,0.4c0,0,0,0,0,0
																	  l-2.9,2c-0.1,0.1-0.3,0-0.4-0.1C127.6-32.1,127.6-32.3,127.7-32.4L127.7-32.4z"/>
								<path id="Path_79647" class="st39" d="M132.4-35.8l1.4-1.1c0.2-0.1,0.4-0.1,0.5,0.1c0.1,0.2,0.1,0.4-0.1,0.5c0,0,0,0,0,0l0,0
																	  l-1.4,1l0,0c-0.2,0.1-0.4,0.1-0.5-0.1C132.2-35.5,132.3-35.7,132.4-35.8L132.4-35.8z"/>
								<path id="Path_79648" class="st39" d="M134.8-37.6c0.5-0.4,1-0.6,1.5-1l1.5-0.9c0.2-0.1,0.4-0.1,0.6,0.1s0.1,0.4-0.1,0.6l0,0
																	  l0,0l-1.5,0.9c-0.5,0.3-1,0.6-1.5,0.9c-0.2,0.1-0.4,0.1-0.5-0.1C134.6-37.2,134.6-37.5,134.8-37.6L134.8-37.6z"/>
								<path id="Path_79649" class="st39" d="M139.9-40.7l1.6-0.8c0.2-0.1,0.5,0,0.6,0.2c0.1,0.2,0,0.5-0.2,0.6l0,0l0,0l0,0l-1.6,0.7
																	  l0,0c-0.2,0.1-0.5,0-0.5-0.2C139.6-40.3,139.7-40.6,139.9-40.7L139.9-40.7z"/>
								<path id="Path_79650" class="st39" d="M142.6-41.9c1.1-0.4,2.3-0.7,3.5-0.9c0.2,0,0.5,0.1,0.5,0.4c0,0.2-0.1,0.5-0.4,0.5h0
																	  c-1.1,0.2-2.2,0.5-3.3,0.9c-0.2,0.1-0.5,0-0.5-0.3C142.3-41.6,142.4-41.8,142.6-41.9L142.6-41.9z"/>
								<path id="Path_79651" class="st39" d="M148.5-43l1.8,0.1c0.2,0,0.4,0.2,0.4,0.5c0,0.2-0.2,0.4-0.5,0.4h0l0,0l-1.7-0.1l0,0
																	  c-0.2,0-0.4-0.2-0.4-0.5C148-42.8,148.2-43,148.5-43L148.5-43L148.5-43z"/>
								<path id="Path_79652" class="st39" d="M151.5-42.8c1.2,0.2,2.3,0.5,3.5,0.9c0.2,0.1,0.4,0.3,0.3,0.6c-0.1,0.2-0.3,0.4-0.6,0.3
																	  c-1.1-0.3-2.2-0.6-3.4-0.8c-0.2,0-0.4-0.3-0.4-0.5C151-42.6,151.2-42.8,151.5-42.8L151.5-42.8z"/>
								<path id="Path_79653" class="st39" d="M157.2-41.1l1.6,0.7c0.2,0.1,0.3,0.4,0.2,0.6c-0.1,0.2-0.4,0.3-0.6,0.2l0,0l-1.6-0.7l0,0
																	  c-0.2-0.1-0.3-0.4-0.2-0.6C156.7-41.1,156.9-41.2,157.2-41.1C157.2-41.1,157.2-41.1,157.2-41.1L157.2-41.1z"/>
								<path id="Path_79654" class="st39" d="M159.9-39.9c1.1,0.5,2.2,0.9,3.3,1.2c0.2,0.1,0.3,0.3,0.3,0.5c-0.1,0.2-0.3,0.3-0.5,0.3
																	  c-1.1-0.3-2.3-0.7-3.4-1.2c-0.2-0.1-0.3-0.3-0.2-0.6C159.4-39.9,159.7-40,159.9-39.9L159.9-39.9z"/>
								<path id="Path_79655" class="st39" d="M165.4-38.2l1.7,0.2l0,0c0.2,0,0.4,0.2,0.4,0.5c0,0.2-0.2,0.4-0.4,0.4l-1.8-0.2
																	  c-0.2,0-0.4-0.3-0.3-0.5C165-38.1,165.1-38.2,165.4-38.2L165.4-38.2L165.4-38.2z"/>
								<path id="Path_79656" class="st39" d="M168.2-38c1.2,0,2.3-0.2,3.4-0.4c0.2,0,0.4,0.1,0.4,0.3c0,0.2-0.1,0.4-0.3,0.4
																	  c-1.2,0.3-2.4,0.4-3.6,0.5c-0.2,0-0.4-0.2-0.4-0.4C167.8-37.8,168-38,168.2-38L168.2-38z"/>
								<path id="Path_79657" class="st39" d="M174-38.9l1.8-0.3c0.2,0,0.4,0.1,0.4,0.3c0,0.2-0.1,0.4-0.3,0.4l0,0l-1.7,0.3l0,0
																	  c-0.2,0-0.4-0.1-0.4-0.3C173.6-38.7,173.8-38.8,174-38.9C174-38.9,174-38.9,174-38.9z"/>
								<path id="Path_79658" class="st39" d="M176.9-39.2l1.8,0c0.3,0,0.6,0,0.9,0l0.9,0.1c0.2,0,0.3,0.2,0.2,0.3
																	  c0,0.1-0.1,0.2-0.3,0.2l0,0l-0.9,0c-0.3,0-0.6,0-0.9,0l-1.7,0.1l0,0c-0.2,0-0.3-0.1-0.3-0.3C176.6-39.1,176.7-39.2,176.9-39.2
																	  C176.9-39.2,176.9-39.2,176.9-39.2C176.9-39.2,176.9-39.2,176.9-39.2z"/>
								<path id="Path_79659" class="st39" d="M182.8-38.7l1.7,0.6c0.1,0,0.2,0.2,0.2,0.3c0,0.1-0.2,0.2-0.3,0.2l0,0l0,0l-1.7-0.5l0,0
																	  c-0.1,0-0.2-0.2-0.2-0.3C182.5-38.7,182.7-38.8,182.8-38.7L182.8-38.7C182.8-38.7,182.8-38.7,182.8-38.7z"/>
								<path id="Path_79660" class="st39" d="M185.6-37.7c1.1,0.5,2.1,1.1,3.1,1.8c0.1,0,0.1,0.1,0,0.2s-0.1,0.1-0.2,0l0,0
																	  c-1-0.6-2-1.1-3.1-1.6c-0.1,0-0.2-0.2-0.1-0.3C185.4-37.7,185.5-37.7,185.6-37.7C185.6-37.7,185.6-37.7,185.6-37.7
																	  C185.6-37.7,185.6-37.7,185.6-37.7z"/>
								<path id="Path_79661" class="st39" d="M190.6-34.5l1.4,1.1c0,0,0,0.1,0,0.1c0,0-0.1,0-0.1,0l0,0l-1.4-1.1l0,0c0,0-0.1-0.1,0-0.2
																	  C190.5-34.5,190.6-34.6,190.6-34.5L190.6-34.5C190.6-34.5,190.6-34.5,190.6-34.5z"/>
								<path id="Path_79662" class="st39" d="M192.8-32.6c0.4,0.4,0.9,0.9,1.3,1.3C193.7-31.7,193.2-32.1,192.8-32.6
																	  C192.7-32.5,192.7-32.6,192.8-32.6C192.8-32.6,192.8-32.6,192.8-32.6C192.8-32.6,192.8-32.6,192.8-32.6
																	  C192.8-32.6,192.8-32.6,192.8-32.6z"/>
							</g>
							<g id="Group_14128" transform="translate(276.984 35.559)">
								<path id="Path_79663" class="st39" d="M-77.8,118.5l-1.1-1.5c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0l0,0c0,0,0,0,0,0L-77.8,118.5z"/>
								<path id="Path_79664" class="st39" d="M-80.2,115.1l-1-1.4c-0.1-0.1,0-0.2,0.1-0.3c0.1-0.1,0.2,0,0.3,0.1l0,0c0,0,0,0,0,0
																	  l0.9,1.5c0,0.1,0,0.2,0,0.2C-80.1,115.2-80.2,115.2-80.2,115.1z"/>
								<path id="Path_79665" class="st39" d="M-81.8,112.8l-1.9-2.9c-0.1-0.1,0-0.3,0.1-0.4s0.3,0,0.4,0.1c0,0,0,0,0,0l0,0l1.7,3l0,0
																	  c0.1,0.1,0,0.3-0.1,0.3S-81.8,112.9-81.8,112.8L-81.8,112.8L-81.8,112.8z"/>
								<path id="Path_79666" class="st39" d="M-84.9,107.9l-0.9-1.5c-0.1-0.2,0-0.4,0.1-0.5c0.2-0.1,0.4,0,0.5,0.1l0,0l0,0l0.8,1.5l0,0
																	  c0.1,0.2,0,0.4-0.1,0.5C-84.6,108.1-84.8,108-84.9,107.9L-84.9,107.9z"/>
								<path id="Path_79667" class="st39" d="M-86.4,105.4l-1.7-3c-0.1-0.2,0-0.5,0.2-0.6s0.5,0,0.6,0.2l0,0c0,0,0,0,0,0l0,0l1.6,3l0,0
																	  c0.1,0.2,0,0.4-0.2,0.5C-86,105.7-86.2,105.6-86.4,105.4L-86.4,105.4z"/>
								<path id="Path_79668" class="st39" d="M-89,100.3l-0.7-1.6c-0.1-0.2,0-0.5,0.3-0.6c0.2-0.1,0.5,0,0.6,0.2l0,0l0,0l0.7,1.6l0,0
																	  c0.1,0.2,0,0.5-0.2,0.6C-88.7,100.6-88.9,100.5-89,100.3L-89,100.3z"/>
								<path id="Path_79669" class="st39" d="M-90.1,97.6c-0.4-1.1-0.7-2.2-1-3.4c-0.1-0.2,0.1-0.5,0.4-0.5c0.2-0.1,0.5,0.1,0.5,0.4
																	  c0.2,1.1,0.6,2.2,0.9,3.3c0.1,0.2-0.1,0.5-0.3,0.6C-89.8,97.9-90,97.8-90.1,97.6L-90.1,97.6z"/>
								<path id="Path_79670" class="st39" d="M-91.4,91.9l-0.2-1.7c0-0.2,0.2-0.5,0.4-0.5c0.2,0,0.5,0.2,0.5,0.4l0,0l0.2,1.7l0,0
																	  c0,0.2-0.2,0.5-0.4,0.5C-91.2,92.3-91.4,92.2-91.4,91.9L-91.4,91.9z"/>
								<path id="Path_79671" class="st39" d="M-91.7,89l0-3.5c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.4,0.2,0.4,0.4v0l0.1,3.4v0
																	  c0,0.2-0.2,0.4-0.4,0.4C-91.5,89.4-91.7,89.2-91.7,89C-91.7,89-91.7,89-91.7,89z"/>
								<path id="Path_79672" class="st39" d="M-91.7,83.2l0-1.7c0-0.2,0.2-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3l0,1.7
																	  c0,0.2-0.2,0.4-0.4,0.4C-91.5,83.6-91.7,83.4-91.7,83.2L-91.7,83.2L-91.7,83.2z"/>
								<path id="Path_79673" class="st39" d="M-91.6,80.4l0-3.4v0c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2l0.1,3.5
																	  c0,0.2-0.1,0.3-0.3,0.3C-91.5,80.7-91.6,80.6-91.6,80.4L-91.6,80.4L-91.6,80.4z"/>
								<path id="Path_79674" class="st39" d="M-91.6,74.6l-0.1-1.7v0c0-0.1,0-0.1,0.1-0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.1,0.1l0.2,1.7
																	  c0,0.1-0.1,0.2-0.2,0.2C-91.6,74.8-91.6,74.7-91.6,74.6L-91.6,74.6L-91.6,74.6z"/>
								<path id="Path_79675" class="st39" d="M-91.8,71.8l-0.2-1.9l0.3,1.8c0,0,0,0.1-0.1,0.1C-91.7,71.9-91.8,71.8-91.8,71.8
																	  C-91.8,71.8-91.8,71.8-91.8,71.8L-91.8,71.8L-91.8,71.8z"/>
							</g>
							<g id="Group_14129" transform="translate(178.375)">
								<path id="Path_79676" class="st39" d="M18.1,154.8l-0.9-1.6l0,0c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0L18.1,154.8z"/>
								<path id="Path_79677" class="st39" d="M15.9,151.2l-1.2-1.3l0,0c-0.1-0.1-0.1-0.2,0-0.2c0.1-0.1,0.2-0.1,0.2,0c0,0,0,0,0,0
																	  l1.1,1.4c0,0,0,0.1,0,0.2c0,0,0,0,0,0C16,151.3,15.9,151.3,15.9,151.2L15.9,151.2z"/>
								<path id="Path_79678" class="st39" d="M13.8,149.1c-0.2-0.2-0.4-0.4-0.7-0.6l-0.7-0.5l-1.4-1.1l0,0c-0.1-0.1-0.1-0.2,0-0.4
																	  c0.1-0.1,0.2-0.1,0.4,0c0,0,0,0,0,0l1.4,1.1l0.7,0.6c0.2,0.2,0.4,0.4,0.7,0.6c0.1,0.1,0.1,0.2,0,0.3
																	  C14,149.2,13.9,149.2,13.8,149.1L13.8,149.1z"/>
								<path id="Path_79679" class="st39" d="M9.1,145.6L8.5,145c-0.2-0.2-0.5-0.4-0.7-0.6c-0.1-0.1-0.1-0.3,0-0.4
																	  c0.1-0.1,0.3-0.1,0.4,0c0,0,0,0,0,0l0,0l0,0c0.2,0.2,0.4,0.4,0.7,0.6l0.7,0.6l0,0c0.1,0.1,0.1,0.3,0,0.4c0,0,0,0,0,0
																	  C9.4,145.7,9.3,145.7,9.1,145.6z"/>
								<path id="Path_79680" class="st39" d="M6.9,143.6c-0.8-0.9-1.6-1.8-2.3-2.8c-0.1-0.2-0.1-0.4,0.1-0.5c0.2-0.1,0.4-0.1,0.5,0.1
																	  c0,0,0,0,0,0c0.6,1,1.3,1.9,2.1,2.8c0.1,0.1,0.1,0.3,0,0.5C7.2,143.8,7,143.8,6.9,143.6L6.9,143.6z"/>
								<path id="Path_79681" class="st39" d="M3.3,138.8l-0.9-1.6c-0.1-0.2,0-0.5,0.2-0.6c0.2-0.1,0.5,0,0.6,0.2c0,0,0,0,0,0l0,0
																	  l0.8,1.5l0,0c0.1,0.2,0,0.4-0.2,0.5C3.7,139.1,3.4,139,3.3,138.8L3.3,138.8z"/>
								<path id="Path_79682" class="st39" d="M1.9,136.2L0.4,133c-0.1-0.2,0-0.5,0.2-0.6c0.2-0.1,0.5,0,0.6,0.2c0,0,0,0,0,0
																	  c0,0,0,0,0,0l0,0l1.4,3.2l0,0c0.1,0.2,0,0.5-0.2,0.6C2.3,136.5,2,136.4,1.9,136.2L1.9,136.2z"/>
								<path id="Path_79683" class="st39" d="M-0.5,130.8l-0.6-1.7c-0.1-0.2,0-0.5,0.3-0.6s0.5,0,0.6,0.3v0l0,0l0.6,1.7l0,0
																	  c0.1,0.2,0,0.5-0.3,0.6C-0.1,131.1-0.4,131-0.5,130.8L-0.5,130.8z"/>
								<path id="Path_79684" class="st39" d="M-1.5,128l-1.1-3.4c-0.1-0.2,0-0.5,0.3-0.6s0.5,0,0.6,0.3c0,0,0,0,0,0l0,0l0,0l1.1,3.3
																	  l0,0c0.1,0.2-0.1,0.5-0.3,0.6C-1.1,128.4-1.4,128.2-1.5,128L-1.5,128z"/>
								<path id="Path_79685" class="st39" d="M-3.3,122.4l-0.5-1.7c-0.1-0.2,0-0.5,0.3-0.6s0.5,0,0.6,0.3c0,0,0,0,0,0l0.5,1.7
																	  c0.1,0.2-0.1,0.5-0.3,0.6C-3,122.8-3.2,122.6-3.3,122.4L-3.3,122.4z"/>
								<path id="Path_79686" class="st39" d="M-4.2,119.6l-1.1-3.3l0,0c-0.1-0.2,0-0.5,0.3-0.5c0.2-0.1,0.5,0,0.5,0.3
																	  c0.4,1.1,0.8,2.2,1.2,3.3c0.1,0.2,0,0.5-0.3,0.6S-4.1,119.8-4.2,119.6C-4.2,119.6-4.2,119.6-4.2,119.6L-4.2,119.6L-4.2,119.6z"
									  />
								<path id="Path_79687" class="st39" d="M-6.2,114l-0.6-1.6l0,0c-0.1-0.2,0-0.4,0.2-0.5c0.2-0.1,0.4,0,0.5,0.2l0.7,1.6
																	  c0.1,0.2,0,0.4-0.2,0.5C-5.8,114.4-6.1,114.3-6.2,114C-6.2,114.1-6.2,114.1-6.2,114L-6.2,114z"/>
								<path id="Path_79688" class="st39" d="M-7.3,111.3l-1.5-3.2l0,0c-0.1-0.2,0-0.4,0.2-0.4c0.2-0.1,0.3,0,0.4,0.1l1.6,3.2
																	  c0.1,0.2,0,0.4-0.2,0.5C-6.9,111.6-7.2,111.5-7.3,111.3C-7.2,111.4-7.2,111.4-7.3,111.3L-7.3,111.3z"/>
								<path id="Path_79689" class="st39" d="M-9.9,106.1l-0.9-1.5l0,0c-0.1-0.1,0-0.3,0.1-0.4c0,0,0,0,0,0c0.1-0.1,0.3,0,0.4,0.1
																	  l1,1.5c0.1,0.1,0.1,0.3-0.1,0.4C-9.6,106.3-9.8,106.2-9.9,106.1C-9.9,106.1-9.9,106.1-9.9,106.1L-9.9,106.1z"/>
								<path id="Path_79690" class="st39" d="M-11.4,103.6c-0.7-1-1.4-1.9-2.2-2.8c-0.1-0.1-0.1-0.2,0-0.3c0.1-0.1,0.2-0.1,0.3,0
																	  c0.8,0.9,1.6,1.8,2.3,2.7c0.1,0.1,0.1,0.3-0.1,0.4C-11.2,103.8-11.4,103.7-11.4,103.6C-11.4,103.6-11.4,103.6-11.4,103.6z"/>
								<path id="Path_79691" class="st39" d="M-15.2,99.2l-1.3-1.2l0,0c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0l1.4,1.1c0.1,0,0.1,0.1,0,0.2
																	  C-15.1,99.2-15.2,99.2-15.2,99.2L-15.2,99.2L-15.2,99.2z"/>
								<path id="Path_79692" class="st39" d="M-17.5,97.3l-1.5-1.1L-17.5,97.3C-17.4,97.2-17.4,97.2-17.5,97.3
																	  C-17.4,97.3-17.4,97.3-17.5,97.3C-17.5,97.3-17.5,97.3-17.5,97.3L-17.5,97.3z"/>
							</g>
							<g id="Group_14130" transform="translate(105.566 74.814)">
								<path id="Path_79693" class="st39" d="M34.9,40.9l1.9,0c0,0,0.1,0,0.1,0.1c0,0,0,0.1-0.1,0.1h0L34.9,40.9z"/>
								<path id="Path_79694" class="st39" d="M39,41.2l1.7,0.4c0.1,0,0.1,0.1,0.1,0.2c0,0.1-0.1,0.1-0.2,0.1c0,0,0,0,0,0l0,0L39,41.4
																	  l0,0c-0.1,0-0.1-0.1-0.1-0.1C38.9,41.2,39,41.2,39,41.2z"/>
								<path id="Path_79695" class="st39" d="M41.9,42c0.6,0.2,1.1,0.4,1.6,0.7c0.5,0.2,1,0.5,1.6,0.8c0.1,0.1,0.2,0.2,0.1,0.3
																	  c-0.1,0.1-0.2,0.2-0.3,0.1c0,0,0,0,0,0l0,0c-0.5-0.3-1-0.6-1.5-0.9c-0.5-0.3-1-0.5-1.6-0.7c-0.1,0-0.1-0.2-0.1-0.2
																	  C41.7,42,41.8,41.9,41.9,42z"/>
								<path id="Path_79696" class="st39" d="M47,44.7l1.4,1c0.1,0.1,0.2,0.3,0.1,0.4c-0.1,0.1-0.3,0.2-0.4,0.1c0,0,0,0,0,0
																	  c0,0,0,0,0,0l0,0l-1.4-1.1l0,0c-0.1-0.1-0.1-0.3,0-0.4C46.7,44.7,46.9,44.6,47,44.7L47,44.7z"/>
								<path id="Path_79697" class="st39" d="M49.3,46.5c0.9,0.8,1.8,1.5,2.7,2.3c0.2,0.1,0.2,0.4,0,0.5c-0.1,0.2-0.4,0.2-0.5,0
																	  c0,0,0,0,0,0c-0.8-0.8-1.7-1.6-2.6-2.3l0,0c-0.1-0.1-0.2-0.3,0-0.5C49,46.4,49.2,46.4,49.3,46.5L49.3,46.5z"/>
								<path id="Path_79698" class="st39" d="M53.7,50.3l1.3,1.2c0.2,0.2,0.2,0.4,0,0.6c-0.2,0.2-0.4,0.2-0.6,0l0,0l0,0l0,0l-1.3-1.2
																	  l0,0c-0.2-0.2-0.2-0.4,0-0.6C53.3,50.2,53.6,50.2,53.7,50.3C53.7,50.3,53.7,50.3,53.7,50.3z"/>
								<path id="Path_79699" class="st39" d="M55.9,52.3l2.5,2.4c0.2,0.2,0.2,0.5,0,0.6c-0.2,0.2-0.5,0.2-0.6,0l0,0l0,0l0,0l-2.5-2.4
																	  l0,0c-0.2-0.2-0.2-0.4,0-0.6C55.4,52.1,55.7,52.1,55.9,52.3L55.9,52.3z"/>
								<path id="Path_79700" class="st39" d="M60,56.4l1.2,1.3c0.2,0.2,0.2,0.5,0,0.6c-0.2,0.2-0.5,0.2-0.6,0l0,0l0,0L59.4,57l0,0
																	  c-0.2-0.2-0.2-0.5,0-0.6C59.6,56.2,59.9,56.2,60,56.4L60,56.4z"/>
								<path id="Path_79701" class="st39" d="M62.1,58.5c0.8,0.8,1.6,1.7,2.4,2.6c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0
																	  l-2.4-2.5l0,0c-0.2-0.2-0.2-0.5,0-0.6C61.6,58.3,61.9,58.3,62.1,58.5L62.1,58.5z"/>
								<path id="Path_79702" class="st39" d="M66,62.7l1.2,1.2l0,0c0.2,0.2,0.2,0.5,0,0.6c-0.2,0.2-0.5,0.2-0.6,0l-1.2-1.2
																	  c-0.2-0.2-0.2-0.5,0-0.6C65.5,62.5,65.8,62.5,66,62.7C66,62.7,66,62.7,66,62.7L66,62.7L66,62.7z"/>
								<path id="Path_79703" class="st39" d="M68.1,64.7c0.8,0.8,1.7,1.5,2.7,2.1c0.2,0.1,0.3,0.4,0.1,0.6c-0.1,0.2-0.4,0.3-0.6,0.1
																	  c-1-0.6-2-1.3-2.8-2.1c-0.2-0.2-0.2-0.4,0-0.6C67.6,64.6,67.9,64.5,68.1,64.7L68.1,64.7z"/>
								<path id="Path_79704" class="st39" d="M72.7,67.9l1.6,0.7l0,0c0.2,0.1,0.3,0.3,0.2,0.5c-0.1,0.2-0.3,0.3-0.5,0.2l0,0l-1.6-0.7
																	  c-0.2-0.1-0.3-0.3-0.2-0.5C72.3,67.9,72.5,67.8,72.7,67.9C72.7,67.9,72.7,67.9,72.7,67.9C72.7,67.9,72.7,67.9,72.7,67.9
																	  L72.7,67.9z"/>
								<path id="Path_79705" class="st39" d="M75.4,69c1.1,0.5,2.1,0.9,3.2,1.4c0.2,0.1,0.2,0.3,0.2,0.4c-0.1,0.2-0.3,0.2-0.4,0.2l0,0
																	  c-1.1-0.4-2.1-0.9-3.2-1.3c-0.2-0.1-0.3-0.3-0.2-0.5S75.2,69,75.4,69L75.4,69C75.4,69,75.4,69,75.4,69L75.4,69z"/>
								<path id="Path_79706" class="st39" d="M80.7,71.4l1.6,0.8c0.1,0.1,0.2,0.2,0.1,0.4c-0.1,0.1-0.2,0.2-0.4,0.1l0,0L80.4,72l0,0
																	  c-0.1-0.1-0.2-0.2-0.1-0.4C80.4,71.4,80.5,71.3,80.7,71.4C80.7,71.4,80.7,71.4,80.7,71.4z"/>
								<path id="Path_79707" class="st39" d="M83.3,72.8c1,0.6,2,1.2,2.9,1.9c0.1,0.1,0.1,0.2,0,0.3c-0.1,0.1-0.2,0.1-0.3,0
																	  c-1-0.6-1.9-1.2-3-1.8c-0.1-0.1-0.2-0.2-0.1-0.3S83.1,72.7,83.3,72.8L83.3,72.8C83.3,72.8,83.3,72.8,83.3,72.8
																	  C83.3,72.8,83.3,72.8,83.3,72.8z"/>
								<path id="Path_79708" class="st39" d="M88,76.2l1.2,1.3c0,0,0,0.1,0,0.1s-0.1,0-0.1,0l0,0l0,0l-1.3-1.2l0,0
																	  c-0.1,0-0.1-0.1,0-0.2C87.8,76.2,87.9,76.2,88,76.2C88,76.2,88,76.2,88,76.2C88,76.2,88,76.2,88,76.2C88,76.2,88,76.2,88,76.2z"
									  />
								<path id="Path_79709" class="st39" d="M89.9,78.4c0.2,0.3,0.3,0.5,0.5,0.8l0.5,0.8l-0.6-0.7C90.2,79,90,78.7,89.9,78.4
																	  L89.9,78.4C89.8,78.4,89.8,78.4,89.9,78.4C89.9,78.4,89.9,78.4,89.9,78.4C89.9,78.4,89.9,78.4,89.9,78.4z"/>
							</g>
							<g id="Group_14131" transform="translate(73.429 142.946)">
								<path id="Path_79710" class="st39" d="M58.6-8.5L60.4-9c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1h0L58.6-8.5z"/>
								<path id="Path_79711" class="st39" d="M63.1-9.4l2-0.1c0.1,0,0.2,0.1,0.2,0.2c0,0.1-0.1,0.2-0.2,0.2h0l-2,0h0
																	  c-0.1,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0C62.9-9.3,63-9.4,63.1-9.4z"/>
								<path id="Path_79712" class="st39" d="M66.4-9.5c1.3,0,2.7,0.1,4,0.4c0.1,0,0.2,0.2,0.2,0.3c0,0.1-0.2,0.2-0.3,0.2l0,0
																	  c0,0,0,0,0,0C69-8.9,67.7-9,66.4-9.1c-0.1,0-0.2-0.1-0.2-0.2C66.2-9.5,66.3-9.5,66.4-9.5L66.4-9.5z"/>
								<path id="Path_79713" class="st39" d="M73-8.6l1.9,0.6c0.2,0.1,0.3,0.3,0.2,0.4c-0.1,0.2-0.2,0.3-0.4,0.2c0,0,0,0,0,0l0,0
																	  L72.8-8l0,0c-0.2-0.1-0.2-0.2-0.2-0.4C72.6-8.5,72.8-8.6,73-8.6L73-8.6z"/>
								<path id="Path_79714" class="st39" d="M76.1-7.4c1.2,0.6,2.4,1.2,3.5,1.9c0.2,0.1,0.2,0.4,0.1,0.6c-0.1,0.2-0.4,0.2-0.6,0.1l0,0
																	  c-1.1-0.7-2.2-1.4-3.4-1.9c-0.2-0.1-0.3-0.3-0.2-0.5C75.7-7.4,75.9-7.5,76.1-7.4L76.1-7.4z"/>
								<path id="Path_79715" class="st39" d="M81.9-4.1L83.5-3l0,0c0.2,0.1,0.3,0.4,0.2,0.6c-0.1,0.2-0.4,0.3-0.6,0.2c0,0,0,0-0.1,0
																	  c0,0,0,0,0,0l-1.7-1.1c-0.2-0.1-0.2-0.4-0.1-0.6C81.4-4.1,81.7-4.2,81.9-4.1L81.9-4.1z"/>
								<path id="Path_79716" class="st39" d="M84.7-2.3c1.1,0.7,2.3,1.3,3.5,1.8c0.2,0.1,0.4,0.4,0.3,0.6c-0.1,0.2-0.4,0.4-0.6,0.3
																	  c0,0,0,0,0,0l0,0c-1.2-0.5-2.4-1.2-3.6-1.9C84-1.7,83.9-2,84-2.2C84.2-2.4,84.4-2.4,84.7-2.3L84.7-2.3z"/>
								<path id="Path_79717" class="st39" d="M90.5,0.3l0.9,0.2c0.3,0.1,0.6,0.1,1,0.1l0,0c0.3,0,0.4,0.3,0.4,0.5
																	  c0,0.2-0.3,0.4-0.5,0.4c-0.3,0-0.7-0.1-1-0.1l-1-0.2c-0.3,0-0.4-0.3-0.4-0.5S90.2,0.2,90.5,0.3L90.5,0.3L90.5,0.3z"/>
								<path id="Path_79718" class="st39" d="M93.7,0.7l4,0.2c0.2,0,0.4,0.2,0.4,0.5c0,0.2-0.2,0.4-0.5,0.4l0,0h0l-4-0.1
																	  c-0.3,0-0.5-0.2-0.4-0.5C93.3,0.8,93.5,0.6,93.7,0.7L93.7,0.7L93.7,0.7z"/>
								<path id="Path_79719" class="st39" d="M100.4,1.1l2,0.4c0.2,0,0.4,0.3,0.3,0.5c0,0.2-0.3,0.4-0.5,0.3l0,0l-1.9-0.3l0,0
																	  c-0.2,0-0.4-0.3-0.3-0.5C99.9,1.2,100.1,1,100.4,1.1L100.4,1.1z"/>
								<path id="Path_79720" class="st39" d="M103.6,1.8c1.3,0.4,2.5,0.8,3.8,1.4c0.2,0.1,0.3,0.3,0.2,0.5c-0.1,0.2-0.3,0.2-0.4,0.2
																	  c-1.2-0.5-2.4-0.9-3.7-1.3c-0.2-0.1-0.3-0.3-0.3-0.5C103.2,1.9,103.4,1.7,103.6,1.8C103.6,1.8,103.6,1.8,103.6,1.8
																	  C103.6,1.8,103.6,1.8,103.6,1.8z"/>
								<path id="Path_79721" class="st39" d="M109.8,4.3l1.8,0.9c0.1,0.1,0.2,0.3,0.1,0.4c-0.1,0.1-0.2,0.2-0.4,0.1l0,0l-1.8-0.9l0,0
																	  c-0.2-0.1-0.2-0.3-0.2-0.4C109.4,4.3,109.6,4.2,109.8,4.3C109.8,4.3,109.8,4.3,109.8,4.3C109.8,4.3,109.8,4.3,109.8,4.3z"/>
								<path id="Path_79722" class="st39" d="M112.7,5.9c1.1,0.7,2.3,1.3,3.4,2c0.1,0.1,0.1,0.2,0.1,0.3c-0.1,0.1-0.2,0.1-0.3,0.1l0,0
																	  c-1.2-0.6-2.3-1.2-3.5-1.9l0,0c-0.1-0.1-0.2-0.2-0.1-0.4C112.4,5.9,112.6,5.8,112.7,5.9C112.7,5.9,112.7,5.9,112.7,5.9z"/>
								<path id="Path_79723" class="st39" d="M118.4,9.3l1.6,1.2c0,0,0.1,0.1,0,0.1c0,0,0,0,0,0c0,0-0.1,0.1-0.1,0l0,0l-1.7-1.1l0,0
																	  c-0.1,0-0.1-0.1,0-0.2C118.2,9.3,118.3,9.3,118.4,9.3C118.4,9.3,118.4,9.3,118.4,9.3z"/>
								<path id="Path_79724" class="st39" d="M121.1,11.3l1.4,1.2L121.1,11.3L121.1,11.3C121,11.4,121,11.3,121.1,11.3
																	  C121,11.3,121,11.3,121.1,11.3C121.1,11.3,121.1,11.3,121.1,11.3C121.1,11.3,121.1,11.3,121.1,11.3z"/>
							</g>
						</g>
						<g id="Group_14158" transform="translate(306.037 136.37)">
							<g id="Group_14133" transform="translate(4.99 47.976)">
								<path id="Path_79725" class="st40" d="M-110.1-23.5c-0.1-0.2-0.3-0.4-0.5-0.4c-0.3-0.1-0.7-0.1-1.1-0.3
																	  c-0.4-0.3-0.4-0.2-0.5-0.1c-0.1,0.1,0,0.4,0.6,0.8l-0.9,0.2c0.1,0.6,0.2,1.2,0.4,1.7c0.6-0.1,1.8-0.3,2.1-0.7l2.1,0.7l0-1.3
																	  L-110.1-23.5z"/>
								<path id="Path_79726" class="st41" d="M-107.4-23.2c-0.8-0.1-1.6-0.2-2.4-0.4c0,0-0.3,1.8,0.2,3.4h2.2L-107.4-23.2z"/>
								<path id="Path_79727" class="st42" d="M-97-32.4c-0.1,5.8-0.5,6.1-0.6,8.1c0,0-1.2-0.3-0.5,0.8c-2,0.7-9.5-0.4-9.5-0.4
																	  c-0.3,1.4-0.4,2.9-0.3,4.3c0,0,12.7,3.2,14.9-1.1s2.7-18-0.4-16.8C-95.9-36.4-97-33.9-97-32.4z"/>
							</g>
							<g id="Group_14136" transform="translate(27.377 246.854)">
								<g id="Group_14134" transform="translate(7.133)">
									<path id="Path_79728" class="st40" d="M-133.3-182.4c0.1,3.6,2.3,16,1.6,22.3c-0.3,2.6-2.6,5.3-2.6,5.3l1.5,1.1l3.5-4.1
																		  c-0.2-0.9-0.1-1.9,0.1-2.8c0.9-3,3.6-9,2.5-19.4c-0.2-2.2,0.8-4.7,0.8-4.7L-133.3-182.4z"/>
									<path id="Path_79729" class="st43" d="M-126.8-169.4c0-0.3,0-0.7,0-1c0-1.8-0.3-3.6-0.7-5.4c-0.8-3-2.6-5.5-5.7-5.9
																		  c0-0.3,0-0.5,0-0.7l7.4-2.2c0,0-1.1,2.4-0.8,4.7C-126.3-176.4-126.3-172.9-126.8-169.4z"/>
								</g>
								<g id="Group_14135" transform="translate(0 102.252)">
									<path id="Path_79730" class="st44" d="M-121.6-258.8c-0.6,1-0.9,2.2-1,3.3h-0.6c0-0.9-0.2-1.8-0.5-2.6
																		  C-123.7-258.1-122.4-259.2-121.6-258.8z"/>
									<path id="Path_79731" class="st45" d="M-129.1-255.9v0.4h4.1c0.3-1.1,1-1.7,1.5-2.2c0.5-0.5,1.1-0.9,1.8-1.1l0,0
																		  c0-0.5-0.2-1-0.5-1.4c-0.2,0-1.6,2.1-3.1,3c-0.6,0.4-1.4,0.2-1.9,0.1C-127.7-256.6-128.4-256.2-129.1-255.9z"/>
								</g>
							</g>
							<g id="Group_14139" transform="translate(83.761 220.886)">
								<g id="Group_14137">
									<path id="Path_79732" class="st40" d="M-170.8-164l8.7-1.4c0.1,12.3,3,11,4.6,16.7c1.3,4.7,1,11.3,1.2,14.8
																		  c0,0.6,0.2,1.2,0.6,1.7l-2.5,3.8l-1.6-0.6c1.2-1.5,1.7-3,1.5-4.1c-1.2-5.3-7.3-16.2-9.1-20.8C-169.3-159-170.8-164-170.8-164z"
										  />
									<path id="Path_79733" class="st43" d="M-162.1-165.4c0.1,11.7,2.8,11.1,4.4,16c-1.1-1.9-2.7-3.6-4.6-4.5
																		  c-0.5-0.4-1.1-0.7-1.7-0.9c-1.2-0.4-2.6-0.3-3.9-0.4c-1.6-4.5-2.9-8.7-2.9-8.7L-162.1-165.4z"/>
								</g>
								<g id="Group_14138" transform="translate(35.88 124.677)">
									<path id="Path_79734" class="st44" d="M-191-255.9c0,0-0.9,2-0.9,3.8h-0.6v-2.8C-192.5-254.9-191.5-256.1-191-255.9z"/>
									<path id="Path_79735" class="st45" d="M-197.3-252.6l0.1,0.4h4.5c0.1-2.6,1.8-3.8,1.8-3.8c-0.1-0.6-0.4-1.2-0.9-1.7
																		  c-0.1,0.1-0.1,0.6-0.3,1.1c-0.2,0.6-1.4,2.9-2.8,2.6c-0.2,0-0.4-0.1-0.6-0.2C-196-253.4-196.6-252.9-197.3-252.6z"/>
								</g>
							</g>
							<g id="Group_14142" transform="translate(36.612 117.348)">
								<g id="Group_14141">
									<path id="Path_79736" class="st46" d="M-135.3-52.5c0,0,4.5,1.2,11.3,0.7c4-0.3,7.9-0.9,11.7-1.9c0.2-2-1.6-1.8-1.4-3.5
																		  c0.2-1.6,1.2-1.5,1.2-2.5c0-1-1.4-0.9-1.2-2.9c0.2-2-0.2-11.9-1.6-16.6c-1.5-4.7-2.7-9.3-2.7-9.3l0-0.1c-2.3,0.8-4.7,1.1-7.1,1
																		  c-1.8-0.1-3.9-0.7-5.1-1.1l-1,1.8l0,0C-138.1-75.6-135.3-52.5-135.3-52.5z"/>
									<g>
										<defs>
											<path id="SVGID_3_" d="M-135.3-52.5c0,0,4.5,1.2,11.3,0.7c4-0.3,7.9-0.9,11.7-1.9c0.2-2-1.6-1.8-1.4-3.5
																   c0.2-1.6,1.2-1.5,1.2-2.5c0-1-1.4-0.9-1.2-2.9c0.2-2-0.2-11.9-1.6-16.6c-1.5-4.7-2.7-9.3-2.7-9.3l0-0.1
																   c-2.3,0.8-4.7,1.1-7.1,1c-1.8-0.1-3.9-0.7-5.1-1.1l-1,1.8l0,0C-138.1-75.6-135.3-52.5-135.3-52.5z"/>
										</defs>
										<clipPath id="SVGID_4_">
											<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
										</clipPath>
										<g id="Group_14140" class="st47">
											<path id="Path_79737" class="st48" d="M-128.2-50l0-0.2c0-0.1-0.2-13.1,0.1-18.1c0.2-5,1.5-16.8,2.6-21l-1.3-0.7
																				  c-1.6,4.5-2.8,9.1-3.6,13.8c-0.7,3.9-0.6,8.8-0.6,13.6c0,4.5,0.1,8.7-0.4,12.1l0,0.1l-3.5-0.3l0-0.1c0-0.2-0.1-21.7,2.5-30.5
																				  c1.4-4.5,3-9.2,3.1-9.2l0.3,0.1c0,0-1.7,4.7-3,9.2c-2.5,8.3-2.4,28.4-2.4,30.3l2.9,0.2c0.5-3.4,0.4-7.5,0.4-11.9
																				  c0-4.8-0.1-9.7,0.6-13.7c0.8-4.8,2-9.5,3.7-14l0.1-0.2l1.9,1l0,0.1c-1.1,4-2.4,16-2.7,21.1c-0.2,4.7-0.1,16.4-0.1,17.9
																				  l5.1-0.4c-0.1-1.3-1-10.2-0.9-16c0.1-8.9,0.3-22.1,0.3-22.1l0-0.2h2.6l2.5,37.1l3.7-0.7c-1-2.7-1.2-7.6-1.4-13.2
																				  c-0.1-2.2-0.2-4.5-0.3-6.8c-0.5-8.1-2.9-16.6-3-16.7l0.3-0.1c0,0.1,2.5,8.7,3,16.8c0.1,2.3,0.2,4.6,0.3,6.8
																				  c0.2,5.7,0.4,10.6,1.4,13.3l0.1,0.2l-4.4,0.8l-2.5-37.1h-2c0,1.5-0.2,13.6-0.3,21.9c-0.1,6.1,1,16,1,16.1l0,0.2L-128.2-50z"
												  />
										</g>
									</g>
								</g>
								<path id="Path_79739" class="st48" d="M-135.4-63c0.3,2.4,0.7,5.1,2.5,6.8c0.6,0.6,1.4,1.1,2.3,1c0.6-0.1,0.7-0.3,1.2-0.5
																	  c1.3-0.5,2-1.1,3.1-0.1c1,0.8,1.7,1.8,2.7,2.6c0.2,0.3,0.5,0.5,0.8,0.7c0.4,0.2,0.8,0.4,1.2,0.6c-0.8,0.1-1.6,0.2-2.4,0.2
																	  c-6.7,0.5-11.3-0.7-11.3-0.7c-0.5-5.1-0.7-10.2-0.4-15.3C-135.7-66.2-135.6-64.6-135.4-63z"/>
								<path id="Path_79740" class="st48" d="M-115.3-54.7c-0.3-0.8-0.7-1.4-0.7-2.3c0-0.6,0.2-1.3,0.3-1.9c0.2-1.1,0-2.1-0.2-3.1
																	  c-0.2-1.4,0.2-2.5,0.5-3.9c0.1-1.1,0.2-2.2,0.2-3.3c0-1.7-0.2-4.1,0.8-5.8c0.7,4.9,0.9,10.9,0.7,12.4c-0.2,2,1.2,1.9,1.2,2.9
																	  s-1,0.9-1.2,2.5c-0.2,1.6,1.6,1.4,1.4,3.5c0,0-0.9,0.3-2.5,0.6C-114.9-53.7-115.1-54.2-115.3-54.7z"/>
							</g>
							<g id="Group_14144" transform="translate(106.469 38.179)">
								<path id="Path_79741" class="st32" d="M-179.6-17.5c-0.4,0.7-0.1,1.7-1.6,1.5c-1.8-0.3-2.9-2-2.9-2s0.1,2.3-0.7,1.8
																	  c0,0-1.7-1.3-2.2-3.2c-1-3.5,0.4-4.4,0.4-6c0-1.2-0.5-2.1-0.9-3c0.4,0,3.1,0.2,4.6-1.8c0.8,0.6,1.9,0.9,2.7,2.5
																	  c0.8,1.6-0.3,2.3,0,3.5c0.3,1.2,1.2,1.1,1.9,2.9C-177.6-19.5-179-18.5-179.6-17.5z"/>
								<g id="Group_14143" transform="translate(8.012 8.893)">
									<path id="Path_79742" class="st49" d="M-193.4-36.8c0.6,0.5,0.9,1.3,0.9,2c0,0.8,0,1.5-0.3,2.3c-0.2,0.7-0.4,1.4-0.5,2.2
																		  c-0.1,0.7-0.1,1.5,0.1,2.2c-0.3-0.7-0.5-1.5-0.4-2.2c0.1-0.7,0.3-1.5,0.5-2.2c0.2-0.7,0.3-1.4,0.3-2.2
																		  C-192.7-35.5-192.9-36.2-193.4-36.8z"/>
									<path id="Path_79743" class="st49" d="M-191.8-36.5c0.6,0.7,0.7,1.7,0.7,2.6c0,0.9-0.2,1.8-0.3,2.7c-0.1,0.9-0.1,1.8,0.2,2.6
																		  c0.3,0.8,0.9,1.6,1.8,1.8c-0.5-0.1-0.9-0.2-1.2-0.6c-0.3-0.3-0.6-0.7-0.8-1.1c-0.4-0.9-0.4-1.8-0.3-2.7
																		  c0.1-0.9,0.3-1.8,0.4-2.7C-191.2-34.8-191.4-35.7-191.8-36.5z"/>
									<path id="Path_79744" class="st49" d="M-189.9-33.7c0.3,0.4,0.5,0.8,0.5,1.3c0,0.5,0.1,0.9,0.1,1.4c0,0.5,0,0.9,0.2,1.3
																		  c0.1,0.4,0.4,0.8,0.8,1.1c-0.5-0.2-0.8-0.5-1-1c-0.2-0.5-0.3-0.9-0.2-1.4c0-0.5,0-0.9,0-1.4C-189.6-32.8-189.7-33.3-189.9-33.7
																		  z"/>
									<path id="Path_79745" class="st49" d="M-188.5-31.3c1.2,0.7,1.6,2.3,1,3.6C-187.3-29-187.7-30.3-188.5-31.3z"/>
								</g>
							</g>
							<g id="Group_14151" transform="translate(54.256 44.145)">
								<g id="Group_14146" transform="translate(5.442)">
									<path id="XMLID_21_" class="st45" d="M-153-15.4c1.5,0.5,3.1,0.8,4.8,0.9c2.4,0.1,4.8-0.2,7.1-1l0.3-18.8
																		 c-1.8-0.4-3.6-0.4-5.4,0c-1,1.6-3.1,5-3.7,7.8C-150.6-23.7-153-15.4-153-15.4z"/>
									<path id="Path_79746" class="st44" d="M-147.8-32.4l0.3,2c1.4,0.2,2.1-1.6,3-1.5s0.9,1.9,2.1,1.9l2.6-3.9
																		  c-0.2-0.1-0.3-0.2-0.5-0.2c-0.2-0.1-0.4-0.1-0.6-0.2c-1.8-0.4-3.6-0.4-5.4,0c-0.1,0-0.1,0-0.2,0L-147.8-32.4z"/>
									<g id="Group_14145" transform="translate(25.385 8.824)">
										<path id="Path_79747" class="st44" d="M-171.6-32L-171.6-32c-0.1,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0.3-3,0.9-6,1.8-8.9
																			  c0-0.1,0.1-0.1,0.2-0.1c0.1,0,0.1,0.1,0.1,0.2c0,0,0,0,0,0c-0.9,2.9-1.5,5.8-1.8,8.8C-171.5-32.1-171.5-32-171.6-32z"/>
									</g>
								</g>
								<g id="Group_14148" transform="translate(0 1.175)">
									<path id="Path_79748" class="st22" d="M-148.9-14.9c0.5-0.6,1-1.1,1.4-1.6c3.3-4.1,4-7.9,4.7-10.7c0.6-2.8,1.1-6.6,2.1-8.2
																		  c-0.9,0.2-1.7,0.6-2.4,1c-3.6,2.6-1.9,8.2-3,12.8c-0.4,1.7-1.1,3.4-1.8,4.9C-148.3-16.1-148.6-15.5-148.9-14.9z"/>
									<g id="Group_14147" transform="translate(17.875 0.553)">
										<path id="Path_79749" class="st42" d="M-161.9-24L-161.9-24C-162-24-162-24-161.9-24c0-1.8,0-3.6-0.2-5.4
																			  c0-0.3,0.1-0.6,0.3-0.8c0.2-0.2,0.5-0.5,0.8-0.7c0.2-0.2,0.3-0.6,0.1-0.9c-0.1-0.1-0.2-0.2-0.2-0.3c-0.2-0.2-0.2-0.6-0.1-0.9
																			  c0.5-1,1.2-2,1.8-3c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1l0,0c-0.7,0.9-1.3,1.9-1.8,2.9c-0.1,0.2-0.1,0.5,0.1,0.7
																			  c0.1,0.1,0.2,0.2,0.2,0.3c0.2,0.3,0.2,0.8-0.1,1.1c-0.3,0.3-0.5,0.5-0.8,0.8c-0.2,0.2-0.3,0.4-0.3,0.6
																			  C-161.8-27.6-161.7-25.8-161.9-24C-161.8-24-161.9-24-161.9-24C-161.9-24-161.9-24-161.9-24z"/>
									</g>
								</g>
								<g id="Group_14150" transform="translate(39.217 1.152)">
									<path id="Path_79750" class="st22" d="M-165.9,3c0,0-2,3.8-7.1,3.2c0,0-0.9-5.4-2.8-8.4c-1.8-2.7-2.2-7-2.2-11.1
																		  c0-2.6,0.3-5.2,0.4-7.1c0-0.3,0.1-0.6,0.1-0.9c0.4-4.8,0-8.1,2.9-14.2c0,0,0.7,0,2.5,1.3c0.4,0.3,0.6,0.8,0.7,1.4
																		  c0.1,1-0.1,2.4-0.5,3.9c-0.1,0.3-0.2,0.7-0.3,1c-0.1,0.2-0.1,0.3-0.2,0.5c-0.2,0.5-0.3,1-0.5,1.5c-0.1,0.2-0.1,0.3-0.2,0.5
																		  c-0.1,0.3-0.2,0.6-0.3,0.9c-0.7,2.2-1.2,4.4-1,7c0.8,0.4,0.1,0.7,0.1,0.7c0.1,0.9,0.6,2.1,0.9,3.1c0.1,0.2,0.1,0.4,0.2,0.5
																		  c0.4,0.8,1.2,1.4,1.7,2.4c0.8,1.4,0.8,2.1,1.8,3C-168.3-6.6-165.4-0.7-165.9,3z"/>
									<path id="Path_79751" class="st50" d="M-172-29c-0.1,0.3-0.2,0.7-0.3,1c-0.1,0.2-0.1,0.3-0.2,0.5c-0.2,0.5-0.3,1-0.5,1.5
																		  c-0.1,0.2-0.1,0.3-0.2,0.5c-0.1,0.3-0.2,0.6-0.3,0.9c-0.7,2.2-1.2,4.4-1,7c0.8,0.4,0.1,0.7,0.1,0.7c0.1,0.9,0.6,2.1,0.9,3.1
																		  c0.1,0.2,0.1,0.4,0.2,0.5c-1.3,0.2-3.9,0.3-4.7,0c0-2.6,0.3-5.2,0.4-7.1c0.8-0.5,1.7-0.9,1.9-1.6c0.6-1.9,0.3-5.1,1-7.1
																		  c0.6-1.7,1.5-3.1,3.1-3.8C-171.4-31.8-171.6-30.4-172-29z"/>
									<g id="Group_14149" transform="translate(3.247 1.144)">
										<path id="Path_79752" class="st42" d="M-180.3-24.4C-180.3-24.4-180.3-24.4-180.3-24.4C-180.3-24.4-180.4-24.4-180.3-24.4
																			  c0.3-1.9,1.4-4.1,1.8-4.9c0.1-0.2,0.1-0.4,0-0.6c-0.1-0.2-0.3-0.5-0.4-0.7c-0.2-0.4-0.1-0.8,0.2-1c0.2-0.1,0.4-0.3,0.5-0.4
																			  c0.2-0.1,0.4-0.4,0.3-0.7c-0.1-1.6,0.4-3,0.9-3.5c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1c-0.4,0.5-0.9,1.8-0.8,3.4
																			  c0,0.3-0.1,0.6-0.4,0.8c-0.2,0.1-0.4,0.2-0.5,0.4c-0.3,0.2-0.3,0.6-0.2,0.9c0.2,0.3,0.3,0.5,0.4,0.7c0.1,0.2,0.1,0.5,0,0.8
																			  C-178.7-28.4-179.8-26.2-180.3-24.4C-180.2-24.4-180.2-24.4-180.3-24.4z"/>
									</g>
								</g>
							</g>
							<g id="Group_14155" transform="translate(87.739)">
								<g id="Group_14152" transform="translate(0 12.094)">
									<path id="Path_79753" class="st40" d="M-173.5-5.5c0.3,0.2,1.4,0.4,1.4,0.4l0,0c0,0.1-0.1,0.4-0.2,0.8
																		  c-0.2,0.7-0.5,1.4-0.8,2.1c0.7,2.1,3,1.1,4.3,0c0,0-1.5-2.7,0.6-7.1c1.1-2.4-3.1-1.2-3.1-1.2C-174.1-7.9-173.8-5.7-173.5-5.5z"
										  />
									<path id="Path_79754" class="st43" d="M-172.4-4.3c0.5-0.2,1-0.5,1.3-0.9c-0.4,0.1-0.8,0.1-1.1,0.1
																		  C-172.1-5.1-172.2-4.7-172.4-4.3z"/>
								</g>
								<g id="Group_14154" transform="translate(4.638)">
									<path id="Path_79755" class="st32" d="M-168.8,8c-1.5,2.1-4.3,1.9-4.6,1.8c-0.7-1.4-1.3-3-0.5-6.4c0,0-4.8-1.7-2.5-4.4
																		  c1.7-1.9,3.8-1,3.4,1c0,0,2.6,0.1,3.9,2.4s-0.9,3.5-0.4,4.6C-169.4,7.4-169.2,7.7-168.8,8z"/>
									<g id="Group_14153" transform="translate(4.797 4.827)">
										<path id="Path_79756" class="st49" d="M-179.9-3.3c-0.4-0.3-0.6-0.6-0.7-1c-0.1-0.2,0-0.5,0.1-0.7c0.1-0.2,0.3-0.4,0.6-0.5
																			  c0.5-0.1,1,0.2,1.2,0.6c0.2,0.4,0.3,0.8,0.2,1.3c-0.1-0.4-0.2-0.8-0.5-1.1c-0.2-0.3-0.6-0.5-0.9-0.4c-0.3,0.1-0.5,0.4-0.5,0.8
																			  C-180.3-4-180.2-3.6-179.9-3.3z"/>
										<path id="Path_79757" class="st49" d="M-179.6-3c0.3,0.2,0.6,0.4,0.9,0.6c0.3,0.2,0.6,0.4,0.9,0.7c0.3,0.3,0.4,0.7,0.3,1.1
																			  c-0.1,0.4-0.2,0.7-0.4,1c-0.2,0.6-0.3,1.3-0.2,2c0.1,0.7,0.3,1.4,0.7,2c-0.5-0.5-0.8-1.2-0.9-1.9c-0.2-0.7-0.1-1.5,0.1-2.2
																			  c0.1-0.3,0.3-0.6,0.4-1c0.1-0.3,0-0.6-0.2-0.9c-0.2-0.3-0.5-0.5-0.8-0.7C-179.1-2.5-179.4-2.7-179.6-3z"/>
										<path id="Path_79758" class="st49" d="M-178.3-3.5c0.7-0.1,1.5,0.1,2.1,0.6c0.6,0.5,0.9,1.3,0.8,2.1c-0.1,0.8-0.4,1.4-0.7,2.1
																			  c-0.3,0.6-0.5,1.3-0.4,2c-0.1-0.3-0.2-0.7-0.2-1.1c0.1-0.4,0.2-0.7,0.3-1.1c0.3-0.7,0.6-1.3,0.6-2c0.1-0.7-0.2-1.4-0.6-1.9
																			  C-176.9-3.2-177.6-3.5-178.3-3.5z"/>
										<path id="Path_79759" class="st49" d="M-175.6,1.9c0.1,0.5,0.4,1,0.8,1.4c0.4,0.4,0.8,0.7,1.3,1c0.5,0.3,0.9,0.7,1.2,1.2
																			  c0.3,0.5,0.5,1.1,0.4,1.6c0-0.5-0.2-1.1-0.6-1.5c-0.4-0.4-0.8-0.8-1.2-1.1c-0.5-0.3-0.9-0.7-1.3-1.1
																			  C-175.4,3-175.6,2.4-175.6,1.9z"/>
									</g>
								</g>
							</g>
							<g id="Group_14156" transform="translate(0 64.01)">
								<path id="Path_79760" class="st11" d="M-91-31.5L-91-31.5c-2.5,2.5-6.6,2.5-9.1,0l-8.6-8.6l9.1-9.1l8.6,8.6
																	  C-88.5-38.1-88.5-34.1-91-31.5z"/>
								<path id="Path_79761" class="st40" d="M-108.1-39.3c0.1,0,0.7-0.2,0.8-0.1c0,0.1,0,0.2-0.1,0.3c0.2,0,0.4,0,0.5,0.1
																	  c0,0.1,0,0.2-0.2,0.3c0.2-0.1,0.5-0.1,0.5,0.1c0,0.1-0.1,0.2-0.2,0.3c0.2-0.1,0.4-0.1,0.5,0.1c0.1,0.2-0.4,0.4-0.6,0.5
																	  c-0.2,0.1-0.4,0.1-0.5-0.1c0-0.1,0-0.2,0.1-0.3c-0.2,0.1-0.5,0.1-0.5-0.1c0-0.1,0-0.2,0.1-0.3c-0.3,0.1-0.5,0.1-0.5-0.1
																	  c0-0.1,0-0.2,0.2-0.3c-0.2,0-0.4,0-0.4-0.1C-108.5-39.1-108.2-39.3-108.1-39.3z"/>
							</g>
							<g id="Group_14157" transform="translate(40.817 51.403)">
								<path id="Path_79762" class="st40" d="M-135.4-25c-0.5,0.6-2.3,0.5-2.6,0.5s-0.4-0.1-0.4-0.2c0-0.1,0.1-0.1,0.3-0.1
																	  c0.1,0,0.6,0,0.6-0.1c0-0.1-0.3-0.1-0.7-0.1c-0.4,0-0.6-0.1-0.6-0.2c0-0.2,0.2-0.2,0.2-0.2s-0.4,0-0.4-0.2
																	  c0-0.2,0.4-0.2,0.4-0.2s-0.2-0.1-0.2-0.2c0-0.2,0.4-0.2,0.8-0.2c0.4,0,1.2,0,1.2,0c-0.6-0.5-0.6-0.9-0.5-0.9
																	  c0.1-0.1,0.1-0.2,0.4,0.2c0.4,0.3,0.7,0.4,1,0.5c0.2,0.1,0.4,0.3,0.5,0.5l2.2,0.6l-0.3,1.7L-135.4-25z"/>
								<path id="Path_79763" class="st45" d="M-132.2-25.5c-0.8-0.2-1.6-0.5-2.4-0.8c0,0-0.6,1.7-0.3,3.4l2.2,0.3L-132.2-25.5z"/>
								<path id="Path_79764" class="st22" d="M-120.9-38.9c-0.3,1.9-1.4,10.7-1.6,12.7c0,0-1.2-0.3-0.5,0.8c-2,0.7-9.3-0.8-9.3-0.8
																	  c-0.5,1.4-0.9,2.8-1,4.2c0,0,13.5,4.3,15.7,0s1.3-16.3-1.6-17.9C-120-40.3-120.9-38.9-120.9-38.9z"/>
								<path id="Path_79765" class="st50" d="M-131.6-24.5c0.6,1.1,0.8,1.9,2.1,2.7c1.7,1,3.7,1.4,5.6,1.7c-4.4-0.3-9.4-1.9-9.4-1.9
																	  c0.1-1.5,0.4-2.9,1-4.2c0,0,0.2,0,0.6,0.1C-132-25.8-132-25.2-131.6-24.5z"/>
							</g>
						</g>
						<g id="Group_14185" transform="translate(41.192 240.185)">
							<g id="Group_14160" transform="translate(0 233.314)">
								<rect id="Rectangle_3367" x="87.1" y="-251.1" class="st3" width="9.9" height="2.3"/>
								<g id="Group_14159" transform="translate(22.678)">
									<rect id="Rectangle_3368" x="70.6" y="-251.1" class="st22" width="37.4" height="7.8"/>
									<path id="Path_79766" class="st3" d="M108.2-243.1H70.4v-8.3h37.9L108.2-243.1L108.2-243.1z M70.8-243.5h36.9v-7.3H70.8V-243.5
																		 z"/>
								</g>
							</g>
							<g id="Group_14167" transform="translate(128.072)">
								<g id="Group_14161" transform="translate(35.834 120.636)">
									<path id="Path_79767" class="st51" d="M-27.1-163.3l-4.3,15l12.5,3.6l4.3-15c1-3.5-1-7.1-4.5-8.1c0,0,0,0,0,0l0,0
																		  C-22.5-168.7-26.2-166.7-27.1-163.3z"/>
									<path id="Path_79768" class="st52" d="M-33.9-140.8l3.7-12.6c-0.7,2.3,12.2,6,12.9,3.7l-3.7,12.6c-1,3.6-4.7,5.6-8.3,4.6
																		  c0,0,0,0,0,0l0,0C-32.8-133.5-34.9-137.2-33.9-140.8C-33.9-140.8-33.9-140.8-33.9-140.8z"/>
								</g>
								<g id="Group_14162" transform="translate(0.91 119.35)">
									<path id="Path_79769" class="st41" d="M-6.4-161l-1.1,15.6l13,0.9l1.1-15.6c0.3-3.6-2.5-6.7-6-7l0,0
																		  C-3-167.3-6.1-164.6-6.4-161z"/>
									<path id="Path_79770" class="st6" d="M-8.3-137.6l1-13.1c-0.2,2.4,13.2,3.4,13.4,0.9l-1,13.1c-0.3,3.7-3.5,6.5-7.2,6.2
																		 c0,0,0,0,0,0l0,0C-5.7-130.7-8.5-133.9-8.3-137.6C-8.3-137.6-8.3-137.6-8.3-137.6z"/>
								</g>
								<g id="Group_14163" transform="translate(0 50.69)">
									<path id="Path_79771" class="st41" d="M17.9-94.1l-9.1-12.7l-10.6,7.5l9.1,12.7c2.1,2.9,6.1,3.6,9.1,1.5c0,0,0,0,0,0l0,0
																		  C19.3-87.1,20-91.2,17.9-94.1C17.9-94.1,17.9-94.1,17.9-94.1z"/>
									<path id="Path_79772" class="st6" d="M4.6-113.4l7.6,10.8c-1.4-2-12.3,5.8-10.9,7.8l-7.6-10.8c-2.1-3-1.4-7.2,1.6-9.4l0,0
																		 C-1.8-117.1,2.4-116.4,4.6-113.4C4.6-113.4,4.6-113.4,4.6-113.4z"/>
								</g>
								<g id="Group_14164" transform="translate(20.979)">
									<path id="Path_79773" class="st53" d="M2.4-56.6l-9.1-12.7l-10.6,7.5l9.1,12.7c2.1,2.9,6.1,3.6,9.1,1.5c0,0,0,0,0,0l0,0
																		  C3.8-49.6,4.5-53.7,2.4-56.6z"/>
									<path id="Path_79774" class="st11" d="M-11-75.9l7.6,10.8c-1.4-2-12.3,5.8-10.9,7.8l-7.6-10.8c-2.1-3-1.4-7.2,1.6-9.4l0,0
																		  C-17.3-79.6-13.1-78.9-11-75.9C-11-75.9-11-75.9-11-75.9z"/>
								</g>
								<g id="Group_14165" transform="translate(78.038 117.567)">
									<path id="Path_79775" class="st41" d="M-65.3-158.8l1,15.6l13-0.9l-1-15.6c-0.2-3.6-3.3-6.3-6.9-6.1c0,0,0,0,0,0l0,0
																		  C-62.9-165.5-65.6-162.4-65.3-158.8z"/>
									<path id="Path_79776" class="st11" d="M-64.1-135.3l-0.8-13.1c0.2,2.4,13.5,1.5,13.4-0.9l0.8,13.1c0.2,3.7-2.6,6.9-6.2,7.1
																		  c0,0,0,0,0,0l0,0C-60.6-128.8-63.8-131.6-64.1-135.3z"/>
								</g>
								<g id="Group_14166" transform="translate(61.438 33.601)">
									<path id="Path_79777" class="st41" d="M-40.3-72.6l4.3-15l-12.5-3.6l-4.3,15c-1,3.5,1,7.1,4.5,8.1c0,0,0,0,0,0l0,0
																		  C-44.9-67.1-41.3-69.1-40.3-72.6z"/>
									<path id="Path_79778" class="st11" d="M-33.6-95.1l-3.7,12.6c0.7-2.3-12.2-6-12.9-3.7l3.7-12.6c1-3.6,4.7-5.6,8.3-4.6
																		  c0,0,0,0,0,0l0,0C-34.6-102.3-32.6-98.6-33.6-95.1z"/>
								</g>
							</g>
							<rect id="Rectangle_3369" x="119.5" y="-68.8" class="st54" width="36.9" height="58.1"/>
							<rect id="Rectangle_3370" x="125" y="-69.3" class="st55" width="4.6" height="58.7"/>
							<g id="Group_14168" transform="translate(121.723 35.805)">
								<path id="Path_79779" class="st3" d="M35.3-45.8H-2.9v-59.5h38.2V-45.8z M-1.6-47.1H34v-56.8H-1.6V-47.1z"/>
							</g>
							<g id="Group_14169" transform="translate(115.837 32.529)">
								<path id="Path_79780" class="st3" d="M41.6-100H2.8c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0,0,0,0,0,0h38.7
																	 c0.8,0,1.4,0.6,1.4,1.4C43-100.6,42.3-100,41.6-100C41.6-100,41.6-100,41.6-100z"/>
							</g>
							<g id="Group_14184" transform="translate(132.338 97.592)">
								<path id="Path_79781" class="st22" d="M-8.6-122.3h28.3c1.2,0,2.2-1,2.2-2.2v-24.2c0-1.2-1-2.2-2.2-2.2H-8.6
																	  c-1.2,0-2.2,1-2.2,2.2v24.2C-10.8-123.3-9.8-122.3-8.6-122.3L-8.6-122.3z"/>
								<g id="Group_14182" transform="translate(22.273 8.358)">
									<g id="Group_14170" transform="translate(9.696 15.766)">
										<path id="Path_79782" class="st53" d="M-26.4-152.7c-4.4,0-8-3.6-8-8c0-4.4,3.6-8,8-8s8,3.6,8,8c0,0,0,0,0,0
																			  C-18.4-156.3-22-152.7-26.4-152.7z M-26.4-168.1c-4,0-7.3,3.3-7.3,7.3s3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3
																			  C-19.1-164.8-22.4-168.1-26.4-168.1L-26.4-168.1z"/>
									</g>
									<g id="Group_14181">
										<g id="Group_14171" transform="translate(39.185)">
											<path id="Path_79783" class="st53" d="M-55.9-154.4c-0.2,0-0.4-0.2-0.4-0.4c0,0,0,0,0,0v-2.1c0-0.2,0.2-0.3,0.4-0.3
																				  c0.2,0,0.3,0.2,0.3,0.3v2.1C-55.5-154.5-55.7-154.4-55.9-154.4C-55.9-154.4-55.9-154.4-55.9-154.4z"/>
										</g>
										<g id="Group_14172" transform="translate(16.57 6.063)">
											<path id="Path_79784" class="st53" d="M-38.1-159.1c-0.1,0-0.2-0.1-0.3-0.2l-1-1.8c-0.1-0.2,0-0.4,0.1-0.5
																				  c0.2-0.1,0.4,0,0.5,0.1l1,1.8c0.1,0.2,0,0.4-0.1,0.5c0,0,0,0,0,0C-38-159.1-38.1-159.1-38.1-159.1z"/>
										</g>
										<g id="Group_14173" transform="translate(0 22.625)">
											<path id="Path_79785" class="st53" d="M-25.1-172.1c-0.1,0-0.1,0-0.2,0l-1.8-1c-0.2-0.1-0.2-0.3-0.1-0.5
																				  c0.1-0.2,0.3-0.2,0.5-0.1l1.8,1c0.2,0.1,0.2,0.3,0.1,0.5C-24.9-172.2-25-172.1-25.1-172.1L-25.1-172.1z"/>
										</g>
										<g id="Group_14174" transform="translate(0 63.909)">
											<path id="Path_79786" class="st53" d="M-26.9-202.7c-0.2,0-0.4-0.2-0.4-0.4c0-0.1,0.1-0.2,0.2-0.3l1.8-1
																				  c0.2-0.1,0.4,0,0.5,0.1c0.1,0.2,0,0.4-0.1,0.5l-1.8,1C-26.8-202.7-26.8-202.7-26.9-202.7z"/>
										</g>
										<g id="Group_14175" transform="translate(16.562 77.548)">
											<path id="Path_79787" class="st53" d="M-39.2-212c-0.2,0-0.4-0.2-0.4-0.4c0-0.1,0-0.1,0-0.2l1-1.8c0.1-0.2,0.3-0.2,0.5-0.1
																				  c0.2,0.1,0.2,0.3,0.1,0.5l0,0l-1,1.8C-38.9-212.1-39-212-39.2-212z"/>
										</g>
										<g id="Group_14176" transform="translate(39.185 82.552)">
											<path id="Path_79788" class="st53" d="M-55.9-215.4c-0.2,0-0.4-0.2-0.4-0.4c0,0,0,0,0,0v-2.1c0-0.2,0.1-0.4,0.3-0.4
																				  c0.2,0,0.4,0.1,0.4,0.3c0,0,0,0,0,0v2.1C-55.5-215.6-55.7-215.4-55.9-215.4C-55.9-215.4-55.9-215.4-55.9-215.4z"/>
										</g>
										<g id="Group_14177" transform="translate(57.846 77.555)">
											<path id="Path_79789" class="st53" d="M-68.7-212c-0.1,0-0.2-0.1-0.3-0.2l-1-1.8c-0.1-0.2,0-0.4,0.1-0.5s0.4,0,0.5,0.1l1,1.8
																				  c0.1,0.2,0,0.4-0.1,0.5c0,0,0,0,0,0C-68.5-212-68.6-212-68.7-212z"/>
										</g>
										<g id="Group_14178" transform="translate(71.492 63.901)">
											<path id="Path_79790" class="st53" d="M-78-202.7c-0.1,0-0.1,0-0.2,0l-1.8-1c-0.2-0.1-0.2-0.3-0.1-0.5s0.3-0.2,0.5-0.1l1.8,1
																				  c0.2,0.1,0.2,0.3,0.1,0.5C-77.8-202.7-77.9-202.7-78-202.7L-78-202.7z"/>
										</g>
										<g id="Group_14179" transform="translate(71.492 22.633)">
											<path id="Path_79791" class="st53" d="M-79.8-172.1c-0.2,0-0.4-0.2-0.4-0.4c0-0.1,0.1-0.2,0.2-0.3l1.8-1
																				  c0.2-0.1,0.4,0,0.5,0.1s0,0.4-0.1,0.5l0,0l-1.8,1C-79.7-172.1-79.7-172.1-79.8-172.1z"/>
										</g>
										<g id="Group_14180" transform="translate(57.838 6.055)">
											<path id="Path_79792" class="st53" d="M-69.7-159.1c-0.2,0-0.4-0.2-0.4-0.4c0-0.1,0-0.1,0-0.2l1-1.8c0.1-0.2,0.3-0.2,0.5-0.1
																				  c0.2,0.1,0.2,0.3,0.1,0.5l-1,1.8C-69.4-159.2-69.6-159.1-69.7-159.1z"/>
										</g>
									</g>
								</g>
								<rect id="Rectangle_3371" x="-5.9" y="-140.2" class="st22" width="23" height="7.2"/>
								<g id="Group_14183" transform="translate(9.659 47.054)">
									<path id="Path_79793" class="st11" d="M-15.3-181.2l-1.8-3.5c0,0.3,0,0.5,0.1,0.8v2.7h-0.8v-4.5h1l1.9,3.5
																		  c0-0.3-0.1-0.6-0.1-0.9v-2.6h0.8v4.5H-15.3z"/>
									<path id="Path_79794" class="st11" d="M-10.5-181.2l-0.4-1.2h-1.6l-0.4,1.2h-0.9l1.5-4.5h1l1.5,4.5H-10.5z M-11.7-185.1
																		  L-11.7-185.1c0,0.1-0.1,0.2-0.1,0.3c0,0.1-0.2,0.6-0.5,1.6h1.2l-0.4-1.3l-0.1-0.4L-11.7-185.1z"/>
									<path id="Path_79795" class="st11" d="M-7.6-185v3.8h-0.9v-3.8h-1.4v-0.7h3.6v0.7H-7.6z"/>
									<path id="Path_79796" class="st11" d="M-4-181.1c-0.5,0-1-0.1-1.3-0.5c-0.3-0.4-0.5-0.8-0.5-1.3v-2.8h0.9v2.8
																		  c0,0.3,0.1,0.6,0.2,0.8c0.2,0.2,0.4,0.3,0.7,0.3c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.8v-2.7h0.9v2.8
																		  c0,0.5-0.1,1-0.5,1.3C-3-181.3-3.5-181.1-4-181.1z"/>
									<path id="Path_79797" class="st11" d="M1.6-181.2l-1-1.7h-1v1.7h-0.9v-4.5h2.1c0.4,0,0.8,0.1,1.2,0.4c0.3,0.3,0.4,0.6,0.4,1
																		  c0,0.3-0.1,0.6-0.3,0.8c-0.2,0.2-0.4,0.4-0.7,0.5l1.1,1.9L1.6-181.2z M1.5-184.4c0-0.4-0.3-0.7-0.8-0.7h-1.1v1.3h1.2
																		  c0.2,0,0.4-0.1,0.6-0.2C1.4-184,1.5-184.2,1.5-184.4L1.5-184.4z"/>
									<path id="Path_79798" class="st11" d="M6.1-181.2l-0.4-1.2H4.1l-0.4,1.2H2.9l1.5-4.5h1l1.5,4.5H6.1z M4.9-185.1L4.9-185.1
																		  c0,0.1-0.1,0.2-0.1,0.3c0,0.1-0.2,0.6-0.5,1.6h1.2l-0.4-1.3L5-184.8L4.9-185.1z"/>
									<path id="Path_79799" class="st11" d="M7.5-181.2v-4.5h0.9v3.8h2.3v0.7H7.5z"/>
								</g>
							</g>
						</g>
						<g id="Group_14219" transform="translate(0 0)">
							<g id="Group_14186" transform="translate(158.985 157.571)">
								<path id="Path_79800" class="st51" d="M0-10.5c0-0.1,0-0.2,0-0.2l0,0c0.1-0.3,0.3-0.6,0.4-0.9c0.4,0.3,0.6,1,0.6,1.4
																	  c-0.2,0-0.5,0-0.7,0.1C0.2-10.1,0-10.2,0-10.5C0-10.4,0-10.4,0-10.5z"/>
								<path id="Path_79801" class="st41" d="M0.5-11.6C0.5-11.6,0.5-11.6,0.5-11.6c0.2-0.3,0.3-0.7,0.5-1C1.5-13.7,3-14.9,5-16.1
																	  c2-1.2,4.4-1.6,6.6-1.5c1.1,0,2.2,0.2,3.3,0.5c1.1,0.3,2.1,0.7,3.1,1.3c1,0.6,1.9,1.3,2.7,2.1c0.4,0.4,0.8,0.8,1.2,1.3
																	  c0.6,0.8,0.4,1.9,0.4,1.9s0.5,0.9,1,1.6c0.3,0.5,0.7,0.9,0.8,1.1c0.1,0.2-0.5,1-1,1.1c-0.1-0.5-0.3-0.9-0.6-1.3
																	  c-0.3-0.4-0.7-0.8-1.1-1.1c-0.5,0.3-1,0.1-1.5,0c-0.4-0.2-0.8-0.4-1.2-0.6c-0.8-0.4-1.6-0.7-2.5-1c-1.7-0.6-3.3-1-5-1
																	  c-0.9,0-1.7,0-2.5,0.2c-0.9,0.1-1.7,0.3-2.6,0.5c-0.9,0.2-1.8,0.5-2.6,0.8c-1.2,0.4-1.8,0.3-2.5,0.3C1-10.6,0.8-11.3,0.5-11.6z"
									  />
								<path id="Path_79802" class="st51" d="M21.8-10.2c-0.7-0.5-1.5-1-2.3-1.5c-0.8-0.4-1.6-0.8-2.5-1.2c-1.7-0.7-3.4-1-5.2-1
																	  c-0.9,0-1.8,0.1-2.7,0.2c-0.9,0.2-1.8,0.4-2.6,0.7c-0.9,0.3-1.7,0.6-2.5,1c-0.8,0.3-1.7,0.7-2.6,0.9c0.9-0.3,1.7-0.7,2.5-1.1
																	  c0.8-0.4,1.6-0.8,2.5-1.2c1.7-0.7,3.6-1.1,5.4-1.1c1.9,0,3.7,0.4,5.4,1.2C18.9-12.5,20.4-11.5,21.8-10.2z"/>
							</g>
							<g id="Group_14188" transform="translate(293.501 20.303)">
								<circle id="Ellipse_435" class="st46" cx="-87.8" cy="95.7" r="9.7"/>
								<g id="Group_14187" transform="translate(12.105 8.46)">
									<path id="Path_79803" class="st48" d="M-99.8,82.6c0.6-0.4,1.4-0.4,2.1-0.3c0.7,0.1,1.4,0.3,2,0.6c1.3,0.6,2.5,1.5,3.3,2.7
																		  c0.8,1.2,1.3,2.6,1.3,4.1c-0.1,1.4-0.5,2.8-1.3,3.9c0-1.4,0.1-2.6-0.1-3.8c-0.2-1.1-0.7-2.2-1.3-3.2c-0.7-1-1.5-1.8-2.5-2.5
																		  c-0.5-0.4-1-0.7-1.6-0.9C-98.6,82.9-99.2,82.7-99.8,82.6z"/>
									<path id="Path_79804" class="st48" d="M-98.3,96.8c0.4-1.2,0.7-2.5,0.8-3.8c0.1-1.2,0.1-2.5,0-3.7c-0.1-1.2-0.4-2.5-0.7-3.6
																		  c-0.2-0.6-0.4-1.2-0.6-1.8c-0.2-0.6-0.6-1.1-1.1-1.6c0.7,0.1,1.3,0.5,1.8,1c0.5,0.5,0.9,1.1,1.2,1.7c0.6,1.2,1,2.6,1.2,4
																		  c0.1,1.4,0,2.8-0.4,4.2C-96.5,94.7-97.2,95.9-98.3,96.8z"/>
									<path id="Path_79805" class="st48" d="M-99.5,82.6c-1.3,0.3-2.3,0.9-3.3,1.6c-0.9,0.7-1.8,1.4-2.5,2.3
																		  c-0.7,0.9-1.3,1.9-1.7,2.9c-0.4,1.2-0.6,2.4-0.7,3.6c-0.6-1.2-0.9-2.6-0.7-3.9c0.2-1.4,0.8-2.7,1.7-3.8c0.9-1.1,2-1.9,3.3-2.4
																		  c0.6-0.3,1.3-0.4,2-0.5C-100.9,82.3-100.2,82.3-99.5,82.6z"/>
									<path id="Path_79806" class="st48" d="M-102.6,96.5c-0.6-1.1-1-2.4-1.1-3.7l0-0.5v-0.5c0-0.3,0-0.7,0-1
																		  c0.1-0.7,0.2-1.3,0.3-1.9c0.3-1.3,0.8-2.5,1.5-3.6c0.6-1.1,1.5-2.1,2.5-2.9c-0.4,1.2-0.8,2.4-1.2,3.5c-0.4,1.1-0.7,2.3-1,3.4
																		  c-0.2,0.6-0.3,1.2-0.4,1.7l-0.1,0.9c-0.1,0.3-0.1,0.6-0.1,0.9C-102.5,94-102.5,95.2-102.6,96.5z"/>
									<path id="Path_79807" class="st48" d="M-99.9,82.8c-0.3-0.4-0.5-0.9-0.7-1.3c-0.2-0.4-0.7-0.7-0.7-1.2
																		  c-0.1-0.4-0.1-0.9-0.2-1.3c-0.1-0.5-0.1-0.9-0.3-1.4c0.5,0.1,1,0.4,1.4,0.8c0.4,0.4,0.6,0.8,0.9,1.3c0.2,0.5,0,1,0,1.5
																		  C-99.7,81.8-99.8,82.3-99.9,82.8z"/>
									<path id="Path_79808" class="st48" d="M-108.3,82.3c0.4-0.8,1-1.4,1.8-1.7c0.8-0.4,1.6-0.5,2.5-0.5c0.8,0.1,1.6,0.3,2.4,0.7
																		  c0.7,0.4,1.3,1,1.8,1.7c-0.8-0.1-1.6-0.2-2.3-0.3c-0.7-0.1-1.4-0.2-2-0.2c-0.6-0.1-1.3,0-1.9,0
																		  C-106.8,82-107.4,82.2-108.3,82.3z"/>
									<path id="Path_79809" class="st48" d="M-99.9,82.8c0.6-0.7,1.4-1.3,2.2-1.7c0.2-0.1,0.4-0.2,0.7-0.3c0.2-0.1,0.5-0.2,0.7-0.3
																		  c0.2-0.1,0.5-0.1,0.8-0.1c0.3,0,0.5,0,0.8,0c0.3,0,0.5,0.1,0.8,0.2c0.2,0.1,0.5,0.2,0.7,0.3c0.5,0.2,0.9,0.5,1.2,0.9
																		  c0.4,0.3,0.7,0.7,0.9,1.2c0.2,0.4,0.4,0.9,0.5,1.3c-0.4-0.3-0.7-0.6-1.1-0.8c-0.3-0.2-0.7-0.5-1.1-0.6
																		  c-0.3-0.2-0.7-0.3-1.1-0.4c-0.2,0-0.4-0.1-0.5-0.1c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.6,0c-0.1,0-0.2,0-0.3,0
																		  c-0.1,0-0.2,0-0.3,0c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.6,0C-98.2,82.3-99.1,82.5-99.9,82.8z"/>
									<path id="Path_79810" class="st48" d="M-95.6,78.5c-0.4,0.3-0.8,0.6-1.2,0.9c-0.3,0.3-0.6,0.7-0.9,1c-0.1,0.2-0.3,0.4-0.5,0.5
																		  l-0.5,0.5c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.4-0.6,0.6c0-0.3,0-0.6,0-0.9c0.1-0.3,0.1-0.5,0.2-0.8
																		  c0.1-0.6,0.5-1.1,0.9-1.4c0.4-0.4,0.9-0.7,1.5-0.9C-96.7,78.4-96.1,78.4-95.6,78.5z"/>
								</g>
							</g>
							<g id="Group_14190" transform="translate(210.823 43.821)">

								<ellipse id="Ellipse_436" transform="matrix(0.9659 -0.2591 0.2591 0.9659 -21.3675 -5.1664)" class="st41" cx="-30.3" cy="78.5" rx="5.4" ry="10.9"/>
								<g id="Group_14189" transform="translate(13.32 5.261)">
									<path id="Path_79811" class="st51" d="M-46.4,62.7c0.2-0.1,0.5,0,0.7,0.1c0.2,0.1,0.4,0.2,0.6,0.4c0.4,0.3,0.7,0.7,1,1.1
																		  c0.6,0.8,1,1.7,1.4,2.6c1.6,3.6,2.6,7.5,3.1,11.4c0.1,1,0.1,2,0,3c0,0.5-0.1,1-0.3,1.5c-0.1,0.2-0.2,0.5-0.3,0.7
																		  c-0.1,0.2-0.4,0.4-0.6,0.4c0.5-0.2,0.7-0.7,0.8-1.1c0.1-0.5,0.2-1,0.2-1.4c0-1-0.1-1.9-0.2-2.9c-0.3-1.9-0.7-3.8-1.2-5.7
																		  c-0.5-1.9-1.1-3.7-1.8-5.6c-0.4-0.9-0.8-1.8-1.3-2.6c-0.2-0.4-0.5-0.8-0.9-1.2C-45.5,62.9-45.9,62.6-46.4,62.7z"/>
									<path id="Path_79812" class="st51" d="M-40.8,83.8c-0.5,0.1-1-0.1-1.4-0.4c-0.4-0.3-0.8-0.6-1.1-1c-0.7-0.8-1.2-1.6-1.7-2.5
																		  c-2-3.6-3.1-7.6-3.1-11.6c0-1,0.1-2,0.3-3c0.1-0.5,0.3-1,0.5-1.5c0.2-0.4,0.5-0.9,1-1.1c-0.2,0.1-0.4,0.3-0.6,0.5
																		  c-0.1,0.2-0.3,0.4-0.3,0.7c-0.2,0.5-0.3,0.9-0.3,1.4c-0.1,1-0.2,2-0.1,3c0.2,4,1.3,7.9,3.1,11.5c0.4,0.9,1,1.7,1.6,2.5
																		  c0.3,0.4,0.6,0.8,1,1.1c0.2,0.2,0.4,0.3,0.6,0.4C-41.3,83.8-41,83.8-40.8,83.8z"/>
									<path id="Path_79813" class="st51" d="M-46.4,62.7c0.3,0.9,0.6,1.7,0.8,2.6l0.8,2.6c0.5,1.7,1,3.5,1.5,5.3
																		  c0.5,1.8,0.9,3.5,1.4,5.3l0.6,2.7c0.2,0.9,0.4,1.8,0.6,2.7c-0.3-0.9-0.6-1.7-0.8-2.6l-0.8-2.6c-0.5-1.7-1-3.5-1.5-5.3
																		  c-0.5-1.8-0.9-3.5-1.4-5.3l-0.6-2.7C-46.1,64.5-46.3,63.6-46.4,62.7z"/>
								</g>
							</g>
							<g id="Group_14191" transform="translate(285.145 158.856)">
								<path id="Path_79814" class="st56" d="M-86.2-11.1c-1.8,1.5-4.6,1.3-6.1-0.5c-1.5-1.8-1.3-4.5,0.5-6.1c1.8-1.6,3.7-0.9,5.3,1
																	  C-84.6-15.9-84.4-12.7-86.2-11.1z"/>
								<path id="Path_79815" class="st57" d="M-87.1-16.2c0.2-0.2,0.4-0.4,0.7-0.6c0.3-0.2,0.6-0.4,0.9-0.5l0.1,0.6
																	  c-0.6,0.1-1.1,0.3-1.6,0.6L-87.1-16.2z"/>
								<path id="Path_79816" class="st58" d="M-88.4-16.9c0.3-0.1,0.6,0,0.9,0.1c0.3,0.1,0.5,0.4,0.6,0.7l-0.1-0.1
																	  c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.3,0.1,0.4c0,0.1,0,0.3,0,0.4c0-0.1-0.1-0.2-0.1-0.4
																	  c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.2-0.1-0.3-0.1l-0.1,0l0-0.1c-0.1-0.2-0.2-0.4-0.4-0.6
																	  C-87.9-16.8-88.1-16.9-88.4-16.9z"/>
							</g>
							<g id="Group_14192" transform="translate(245.32 13.073)">
								<path id="Path_79817" class="st56" d="M-57.5,91.6c0.5,1.7-0.5,3.5-2.2,4.1c-1.7,0.5-3.5-0.5-4.1-2.2c-0.5-1.7,0.5-2.8,2.2-3.3
																	  C-60.3,89-58,89.8-57.5,91.6z"/>
								<path id="Path_79818" class="st57" d="M-61.3,90.7c-0.2-0.4-0.3-0.9-0.3-1.4l0.4,0.1c-0.1,0.4-0.1,0.8,0,1.3L-61.3,90.7z"/>
								<path id="Path_79819" class="st58" d="M-62.2,91.3c0.1-0.2,0.2-0.4,0.3-0.6c0.2-0.2,0.4-0.2,0.7-0.2l-0.1,0.1
																	  c0.1-0.2,0.3-0.3,0.6-0.3c0.2,0,0.4,0,0.6,0.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0.1-0.2,0.1
																	  c-0.1,0-0.1,0.1-0.2,0.2l0,0.1l-0.1,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0.1-0.3,0.1C-61.9,91-62.1,91.2-62.2,91.3z"/>
							</g>
							<g id="Group_14193" transform="translate(101.368 76.635)">
								<path id="Path_79820" class="st46" d="M48.3,43.2c1.2,1.4,1.1,3.5-0.3,4.7c-1.4,1.2-3.5,1.1-4.7-0.3c0,0,0,0,0,0
																	  c-1.2-1.4-0.7-2.9,0.7-4.1C44.6,42,47.1,41.8,48.3,43.2z"/>
								<path id="Path_79821" class="st57" d="M44.5,43.9c-0.4-0.3-0.7-0.7-0.8-1.2l0.4-0.1C44.1,43.1,44.3,43.5,44.5,43.9L44.5,43.9z"
									  />
								<path id="Path_79822" class="st48" d="M43.9,44.9c0-0.2,0-0.5,0.1-0.7c0.1-0.2,0.3-0.4,0.5-0.5l-0.1,0.1c0-0.1,0.1-0.2,0.1-0.3
																	  c0.1-0.1,0.2-0.2,0.3-0.2c0.2-0.1,0.4-0.1,0.6-0.1c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0.1-0.2,0.1c-0.1,0.1-0.1,0.1-0.2,0.2
																	  c0,0.1-0.1,0.2-0.1,0.2l0,0.1l-0.1,0c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0.1-0.1,0.1-0.2,0.2C44,44.5,43.9,44.7,43.9,44.9z"/>
							</g>
							<g id="Group_14195" transform="translate(134.742 201.352)">
								<path id="Path_79823" class="st41" d="M17.9-50c0,0,3.5,4.1,4.3,5.9c0.8,1.8-0.1,2.3-0.7,2.5s-1.7,0-2.1-1
																	  C18.4-44.6,17.9-50,17.9-50z"/>
								<path id="Path_79824" class="st48" d="M21.3-38.9C21.3-39,21.4-39.1,21.3-38.9c0.9,0.9,1.7,1.3,2,0.7c0.3-0.4-1.3-0.7-1.3-1.2
																	  c0-0.3,0.8,0.5,0.8,0.2c0.1-0.3-0.3-0.5-0.5-0.5c-0.9-0.3-0.8-1.2-0.8-2.1c0-0.5-0.4,0-0.6,0.4c-0.8,1.7-0.2,3.1,0.3,3.2
																	  C21.7-38.2,21.3-38.6,21.3-38.9z"/>
								<path id="Path_79825" class="st46" d="M23-39.3c-0.1-0.1,0-0.1,0-0.1c1.2,0.4,2.1,0.2,2.1-0.4c0-0.5-1.5,0.1-1.7-0.3
																	  c-0.1-0.3,0.9,0,0.8-0.3c-0.1-0.3-0.5-0.2-0.7-0.2c-0.9,0.2-1.3-0.5-1.8-1.3c-0.3-0.4-0.3,0.2-0.3,0.6c0.3,1.9,1.6,2.7,2.1,2.5
																	  C23.7-38.9,23.2-39,23-39.3z"/>
								<g id="Group_14194" transform="translate(1.614 5.673)">
									<path id="Path_79826" class="st51" d="M20.6-49.4c-0.2-0.2-0.4-0.3-0.6-0.4c-0.2-0.1-0.4-0.2-0.6-0.2c-0.2,0-0.4,0-0.6,0.1
																		  c-0.2,0.1-0.4,0.1-0.7,0.2c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.1,0.3-0.2c0.2-0.1,0.5-0.1,0.7-0.1
																		  C20-50.2,20.4-49.8,20.6-49.4z"/>
									<path id="Path_79827" class="st51" d="M17.3-50.7c0.1-0.2,0.1-0.3,0.3-0.5c0.1-0.1,0.3-0.3,0.4-0.3c0.2-0.1,0.4-0.1,0.5-0.1
																		  c0.2,0,0.4,0.1,0.5,0.2c-0.2,0-0.3,0-0.5,0c-0.2,0-0.3,0.1-0.4,0.2C17.8-51.1,17.6-50.9,17.3-50.7z"/>
									<path id="Path_79828" class="st51" d="M18.1-53.1c-0.2-0.1-0.4,0-0.6,0c-0.2,0.1-0.4,0.2-0.6,0.4c0-0.1,0-0.1,0-0.2
																		  c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.2-0.2,0.3-0.3C17.7-53.4,18-53.3,18.1-53.1z"/>
									<path id="Path_79829" class="st51" d="M17.4-54.1c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.1-0.3,0.2c0-0.1,0-0.1,0.1-0.2
																		  c0-0.1,0.1-0.1,0.1-0.2C17.1-54.2,17.2-54.2,17.4-54.1z"/>
								</g>
							</g>
							<g id="Group_14197" transform="translate(103.47 130.637)">
								<circle id="Ellipse_437" class="st41" cx="47.4" cy="8.7" r="4.5"/>
								<path id="Path_79830" class="st51" d="M46,5.9c-0.2,0.3-0.5,0.4-0.9,0.4c0,0,0.5,0.7,0.4,1c0,0,0.5-0.5,1-0.4
																	  C46.3,6.6,46.1,6.3,46,5.9z"/>
								<g id="Group_14196" transform="translate(12.245 11.608)">
									<path id="Path_79831" class="st51" d="M32.6-2.8c-0.1,0.1-0.1,0.3,0,0.4c0,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2-0.1
																		  c0,0,0,0.1,0,0.1c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.1-0.3C32.5-2.7,32.5-2.8,32.6-2.8z"/>
									<path id="Path_79832" class="st51" d="M34.6-2.6c0,0.1,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.1,0c0.1,0,0.1-0.1,0.1-0.1
																		  c0-0.1,0.1-0.1,0.1-0.2c0.1,0.1,0.1,0.2,0,0.3c0,0.1-0.1,0.2-0.2,0.2c-0.1,0.1-0.2,0.1-0.3,0C34.6-2.4,34.5-2.6,34.6-2.6z"/>
									<path id="Path_79833" class="st51" d="M32.6-1.2c0,0.1-0.1,0.1,0,0.2c0,0.1,0.1,0.1,0.1,0.1c0.1,0,0.1,0.1,0.2,0.1
																		  c0.1,0,0.1,0,0.2,0c0,0.1-0.1,0.1-0.2,0.1c-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.2-0.3C32.4-1.1,32.5-1.2,32.6-1.2z"/>
									<path id="Path_79834" class="st51" d="M35.6-4.6c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0,0.3,0.1c0,0.1,0.1,0.2,0.1,0.2
																		  c0,0.1-0.1,0.2-0.2,0.2c0,0,0.1-0.1,0-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1C35.7-4.7,35.6-4.7,35.6-4.6z"/>
									<path id="Path_79835" class="st51" d="M37.9-3.9c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2c0,0.1,0.1,0.2,0,0.3
																		  c0,0.1-0.1,0.2-0.2,0.2c0.1,0,0.1-0.1,0.1-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.1C38-4,37.9-3.9,37.9-3.9
																		  C37.9-3.9,37.9-3.9,37.9-3.9z"/>
									<path id="Path_79836" class="st51" d="M37.5-2.2c-0.1,0-0.1,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0.1,0.1,0.1,0.1
																		  c0.1,0,0.1,0,0.2,0c0,0.1-0.1,0.2-0.2,0.2c-0.1,0-0.2-0.1-0.3-0.2c0-0.1,0-0.2,0-0.3C37.3-2.2,37.4-2.2,37.5-2.2z"/>
									<path id="Path_79837" class="st51" d="M34.6-0.5c-0.1,0-0.1,0-0.1,0.1c0,0,0,0.1,0,0.1c0,0.1,0.1,0.2,0.2,0.3
																		  c-0.1,0-0.2,0-0.2-0.1c-0.1-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0.1-0.3C34.4-0.6,34.5-0.6,34.6-0.5z"/>
									<path id="Path_79838" class="st51" d="M36.4-0.5c-0.1,0-0.1,0.1-0.1,0.2c0,0.1,0.1,0.2,0.1,0.2c0.2,0.1,0.4,0.1,0.5,0
																		  c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.2-0.2-0.4C36.1-0.4,36.2-0.5,36.4-0.5
																		  C36.4-0.5,36.4-0.5,36.4-0.5z"/>
									<path id="Path_79839" class="st51" d="M35.3-6c0-0.2,0.2-0.3,0.3-0.3c0.1,0,0.2,0.1,0.3,0.2c0,0.1,0,0.2,0,0.3
																		  c0-0.1,0-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1C35.5-6.1,35.4-6.1,35.3-6z"/>
									<path id="Path_79840" class="st51" d="M32.3-4.4C32.3-4.4,32.3-4.5,32.3-4.4C32.3-4.5,32.3-4.5,32.3-4.4
																		  c-0.1,0-0.1,0.1-0.1,0.1c0,0.1,0,0.1,0.1,0.1c0.1,0,0.1,0.1,0.2,0C32.4-4,32.3-4,32.2-4c-0.1,0-0.2-0.1-0.2-0.3
																		  c0-0.1,0.1-0.2,0.2-0.3c0.1,0,0.1,0,0.2,0C32.4-4.5,32.4-4.4,32.3-4.4z"/>
								</g>
							</g>
							<g id="Group_14199" transform="translate(228.112 212.533)">
								<circle id="Ellipse_438" class="st41" cx="-48" cy="-55.1" r="2.9"/>
								<path id="Path_79841" class="st51" d="M-49.7-54c0.2,0.1,0.3,0.3,0.3,0.5c0,0,0.4-0.4,0.6-0.3c-0.2-0.2-0.3-0.4-0.3-0.6
																	  C-49.2-54.2-49.4-54.1-49.7-54z"/>
								<g id="Group_14198" transform="translate(3.861 4.478)">
									<path id="Path_79842" class="st51" d="M-51.6-57.9c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1-0.1-0.1
																		  c0.1-0.1,0.1,0,0.2,0.1c0,0.1,0,0.1,0,0.2c0,0.1-0.1,0.1-0.2,0.1C-51.5-57.8-51.6-57.9-51.6-57.9z"/>
									<path id="Path_79843" class="st51" d="M-51.6-59.2c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1-0.1
																		  c0,0,0.1,0,0.2,0c0.1,0,0.1,0.1,0.2,0.1c0,0.1,0.1,0.1,0,0.2C-51.4-59.2-51.5-59.2-51.6-59.2z"/>
									<path id="Path_79844" class="st51" d="M-50.5-58c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1
																		  c0.1,0,0.1,0.1,0.1,0.1c0,0.1,0,0.1,0,0.2c0,0.1-0.1,0.1-0.2,0.1C-50.5-57.9-50.5-57.9-50.5-58z"/>
									<path id="Path_79845" class="st51" d="M-52.9-59.7c-0.1,0-0.1,0-0.1-0.1c0-0.1,0-0.1,0.1-0.2c0,0,0.1-0.1,0.2-0.1
																		  c0.1,0,0.1,0,0.1,0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1C-53-59.8-52.9-59.8-52.9-59.7z"/>
									<path id="Path_79846" class="st51" d="M-52.6-61.3c-0.1,0-0.1,0-0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0.1,0,0.1-0.1,0.2,0
																		  c0.1,0,0.1,0.1,0.1,0.1c0,0-0.1-0.1-0.1,0c-0.1,0-0.2,0.1-0.2,0.1C-52.6-61.3-52.6-61.3-52.6-61.3
																		  C-52.6-61.3-52.6-61.3-52.6-61.3z"/>
									<path id="Path_79847" class="st51" d="M-51.4-61.1c0,0.1,0.1,0.1,0.1,0.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0-0.1,0-0.1
																		  c0.1,0,0.1,0.1,0.1,0.1c0,0.1,0,0.1-0.1,0.2c-0.1,0-0.1,0-0.2,0C-51.4-61-51.5-61.1-51.4-61.1z"/>
									<path id="Path_79848" class="st51" d="M-50.2-59.3C-50.2-59.3-50.1-59.2-50.2-59.3c0.1,0.1,0.1,0.1,0.2,0.1
																		  c0.1,0,0.2-0.1,0.2-0.1c0,0.1,0,0.1,0,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0-0.2-0.1C-50.2-59.2-50.2-59.3-50.2-59.3z"/>
									<path id="Path_79849" class="st51" d="M-50.3-60.5c0,0.1,0.1,0.1,0.2,0.1c0.1,0,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0-0.4
																		  c0.1,0,0.1,0.1,0.2,0.2c0,0.1,0,0.2,0,0.2c-0.1,0.1-0.1,0.1-0.2,0.1C-50.2-60.3-50.3-60.4-50.3-60.5
																		  C-50.3-60.5-50.3-60.5-50.3-60.5z"/>
									<path id="Path_79850" class="st51" d="M-53.8-59.5c-0.1,0-0.2-0.1-0.2-0.2c0,0,0,0,0,0c0-0.1,0-0.1,0.1-0.2c0,0,0.1,0,0.2,0
																		  c0,0-0.1,0-0.1,0.1c0,0,0,0.1,0,0.1C-53.9-59.6-53.9-59.5-53.8-59.5z"/>
									<path id="Path_79851" class="st51" d="M-52.6-57.6C-52.6-57.6-52.6-57.6-52.6-57.6C-52.6-57.6-52.6-57.6-52.6-57.6
																		  C-52.6-57.5-52.6-57.5-52.6-57.6c0.1,0.1,0.1,0.1,0.2,0c0,0,0-0.1,0-0.1c0.1,0,0.1,0.1,0.1,0.2c0,0.1-0.1,0.1-0.2,0.1
																		  c-0.1,0-0.2,0-0.2-0.1C-52.7-57.6-52.7-57.6-52.6-57.6C-52.6-57.7-52.6-57.7-52.6-57.6z"/>
								</g>
							</g>
							<g id="Group_14202" transform="translate(0 134.551)">
								<g id="Group_14200">
									<path id="Path_79852" class="st46" d="M117.6-0.3c1.1,1,2.2,2,3.3,2.9c0.6,0.5,1.1,0.9,1.7,1.4c0.6,0.5,1.1,0.9,1.7,1.3
																		  c1.1,0.9,2.3,1.7,3.5,2.6c1.2,0.9,2.3,1.7,3.5,2.5l-1.1,1.4c-0.9-0.8-1.7-1.7-2.4-2.7c-0.7-0.9-1.4-1.9-2-3l-0.4-0.8
																		  c-0.1-0.3-0.3-0.5-0.4-0.8c-0.1-0.3-0.3-0.5-0.4-0.8s-0.2-0.5-0.3-0.8c-0.4-1.1-0.7-2.3-0.8-3.5c0.4,1.1,0.9,2.1,1.5,3.1
																		  c0.6,1,1.2,1.9,1.9,2.9c0.7,0.9,1.4,1.8,2.2,2.7c0.8,0.8,1.6,1.7,2.4,2.4l-1.1,1.4c-1.2-0.8-2.4-1.7-3.6-2.6
																		  c-1.2-0.9-2.3-1.9-3.4-2.9c-1.1-1-2.1-2-3.1-3.2C119.3,2.1,118.4,0.9,117.6-0.3z"/>
									<path id="Path_79853" class="st46" d="M127.9,0.7c0.1,0.9,0.2,1.7,0.5,2.6c0.5,1.6,1.2,3.2,2.2,4.6c0.5,0.7,1,1.3,1.6,1.9
																		  l-2,1.5c-0.5-0.8-0.9-1.7-1.3-2.5c-0.4-0.9-0.6-1.7-0.8-2.7c-0.2-0.9-0.3-1.8-0.4-2.7C127.7,2.5,127.8,1.6,127.9,0.7z"/>
									<path id="Path_79854" class="st46" d="M118.1,7.4c1.1-0.1,2.2-0.1,3.2,0.1c1.1,0.2,2.1,0.4,3.1,0.8c1,0.4,2,0.8,3,1.3
																		  c1,0.5,1.9,1,2.8,1.6l4.6,3.1l-5.3-1.6c-0.6-0.2-1.3-0.3-1.9-0.5c-0.7-0.1-1.3-0.2-2-0.3c-0.7-0.1-1.3-0.1-2-0.2
																		  c-0.7,0-1.4,0-2.1,0c0.6-0.3,1.3-0.6,2-0.8c0.7-0.2,1.4-0.3,2.1-0.3c0.7-0.1,1.4-0.1,2.2,0c0.7,0.1,1.5,0.2,2.2,0.3l-0.7,1.5
																		  c-0.8-0.5-1.8-1-2.7-1.5c-0.9-0.5-1.8-0.9-2.7-1.4c-0.9-0.4-1.9-0.9-2.8-1.3C120.1,8,119.1,7.7,118.1,7.4z"/>
								</g>
								<path id="Path_79855" class="st45" d="M138.1,10.7c0.3,0.3,0.6,0.5,0.9,0.8c0.3,0.3,0.5,0.6,0.7,0.9c0.5,0.7,0.8,1.4,1,2.2
																	  c0.2,0.7,0.3,1.4,0.2,2c-0.1,0.7-0.3,1.4-0.8,2c0,0.1-0.1,0.1-0.1,0.1c0,0,0,0-0.1,0.1c-0.5,0.6-1.1,1-1.8,1.2
																	  c-0.6,0.2-1.3,0.3-2,0.3c-0.8,0-1.6-0.2-2.3-0.5c-0.4-0.2-0.8-0.4-1.2-0.6c-0.3-0.2-0.7-0.4-1-0.7c-0.2-0.2-0.4-0.3-0.6-0.5
																	  c-0.2-0.2-0.4-0.4-0.5-0.6c-0.5-0.6-0.9-1.2-1.2-1.9c-0.3-0.7-0.5-1.4-0.5-2.1c-0.1-0.9,0.1-1.7,0.6-2.5
																	  c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.2,0.3-0.3,0.4-0.5c0.6-0.6,1.4-0.9,2.3-1.1c0.7-0.1,1.5-0.1,2.2,0.1c0.8,0.2,1.5,0.4,2.2,0.8
																	  c0.2,0.1,0.3,0.2,0.5,0.3C137.6,10.4,137.8,10.5,138.1,10.7z"/>
								<g id="Group_14201" transform="translate(43.273 37.189)">
									<path id="Path_79856" class="st44" d="M96.7-18.3c-0.2-0.6-0.4-1.2-0.6-1.8c-0.2-0.6-0.3-1.2-0.4-1.8c0-0.3-0.1-0.6-0.1-0.9
																		  c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0-0.9c0-0.3,0-0.6,0.1-0.9c0.1,0.3,0.1,0.6,0.1,0.9c0,0.3,0.1,0.6,0.1,0.9
																		  c0.1,0.6,0.1,1.2,0.2,1.8l0.1,0.9c0,0.3,0.1,0.6,0.1,0.9C96.6-19.5,96.7-18.9,96.7-18.3z"/>
									<path id="Path_79857" class="st44" d="M93.5-27.3c0,0.4,0.1,0.9,0.1,1.3c0,0.4,0,0.9,0.1,1.3c0.1,0.4,0.1,0.9,0.2,1.3
																		  c0,0.4,0.1,0.9,0.2,1.3c0.1,0.8,0.3,1.7,0.4,2.5l0.5,2.5c-0.2-0.4-0.3-0.8-0.4-1.2c-0.1-0.4-0.2-0.8-0.4-1.2
																		  c-0.1-0.4-0.2-0.8-0.3-1.3l-0.2-1.3c-0.1-0.4-0.1-0.9-0.1-1.3c0-0.4-0.1-0.9-0.1-1.3C93.4-25.5,93.4-26.4,93.5-27.3z"/>
									<path id="Path_79858" class="st44" d="M91.4-28.1c0,1,0.1,1.9,0.1,2.9c0,0.5,0.1,0.9,0.1,1.4c0.1,0.5,0.1,0.9,0.2,1.4
																		  c0.2,0.9,0.3,1.9,0.5,2.8c0.1,0.5,0.2,0.9,0.3,1.4c0.1,0.5,0.2,0.9,0.3,1.4c-0.2-0.4-0.3-0.9-0.5-1.3c-0.2-0.5-0.3-0.9-0.4-1.4
																		  c-0.3-0.9-0.5-1.9-0.6-2.8c-0.1-0.5-0.1-1-0.2-1.4c-0.1-0.5-0.1-1-0.1-1.4l0-1.4C91.3-27.1,91.3-27.6,91.4-28.1z"/>
									<path id="Path_79859" class="st44" d="M89.2-28.1c0,0.5,0,0.9,0,1.4l0.1,1.4c0,0.9,0.2,1.8,0.3,2.7c0,0.5,0.2,0.9,0.2,1.3
																		  c0.1,0.4,0.1,0.9,0.2,1.3c0.2,0.9,0.4,1.8,0.6,2.7c-0.3-0.9-0.6-1.7-0.9-2.6c-0.1-0.4-0.2-0.9-0.3-1.3
																		  c-0.1-0.5-0.2-0.9-0.2-1.4C89-23.5,89-24.4,89-25.4l0-1.4C89.1-27.2,89.1-27.7,89.2-28.1z"/>
									<path id="Path_79860" class="st44" d="M87.9-19c-0.2-0.6-0.4-1.3-0.6-1.9c-0.1-0.3-0.2-0.7-0.2-1l-0.1-1l-0.1-1
																		  c0-0.3,0-0.7,0-1c0-0.7,0-1.4,0.1-2l0.2,2l0.1,1l0.1,1l0.1,1c0,0.3,0.1,0.7,0.2,1C87.7-20.4,87.8-19.7,87.9-19z"/>
									<path id="Path_79861" class="st44" d="M96.9-18.5L96-18.4L95-18.4c-0.3,0-0.6,0-0.9,0.1l-0.9,0.1c-0.6,0-1.2,0.1-1.9,0.2
																		  l-1.9,0.2c0.3-0.1,0.6-0.2,0.9-0.3c0.3-0.1,0.6-0.1,0.9-0.2c0.6-0.1,1.2-0.2,1.9-0.3c0.6-0.1,1.3-0.1,1.9-0.1
																		  C95.6-18.7,96.3-18.6,96.9-18.5z"/>
									<path id="Path_79862" class="st44" d="M87.4-19.6c0.8-0.3,1.7-0.5,2.5-0.7c0.9-0.1,1.7-0.3,2.6-0.4c0.9-0.1,1.7-0.1,2.6-0.1
																		  c0.4,0,0.9,0,1.3,0.1c0.4,0.1,0.9,0.1,1.3,0.2l-2.6,0.1c-0.9,0-1.7,0.1-2.6,0.2c-0.4,0-0.9,0.1-1.3,0.1c-0.4,0-0.9,0.1-1.3,0.1
																		  l-1.3,0.2C88.2-19.7,87.8-19.7,87.4-19.6z"/>
									<path id="Path_79863" class="st44" d="M86.1-21.5c0.4-0.2,0.9-0.3,1.4-0.5l1.4-0.4c0.5-0.1,0.9-0.2,1.4-0.3
																		  c0.5-0.1,1-0.1,1.4-0.2c1-0.1,1.9-0.1,2.9,0c0.5,0,1,0,1.4,0.1c0.5,0.1,1,0.1,1.4,0.2c-0.5,0-1,0-1.4,0l-1.4,0
																		  c-0.5,0-1,0-1.4,0.1l-1.4,0.1c-0.5,0-0.9,0.1-1.4,0.2c-0.5,0-0.9,0.1-1.4,0.2C88-21.9,87.1-21.7,86.1-21.5z"/>
									<path id="Path_79864" class="st44" d="M85.6-23.6c0.4-0.2,0.9-0.3,1.3-0.5c0.4-0.1,0.9-0.2,1.3-0.3c0.9-0.2,1.8-0.4,2.7-0.4
																		  c0.5-0.1,0.9-0.1,1.4-0.1c0.5,0,0.9,0,1.4,0c0.9,0,1.8,0.1,2.7,0.3c-0.2,0-0.5,0-0.7,0l-0.7,0c-0.5,0-0.9,0-1.4,0l-1.4,0.1
																		  c-0.5,0-0.9,0-1.4,0.1c-0.9,0.1-1.8,0.2-2.7,0.3c-0.4,0.1-0.9,0.1-1.3,0.2C86.5-23.8,86-23.7,85.6-23.6z"/>
									<path id="Path_79865" class="st44" d="M94-27c-0.2,0-0.3,0-0.5,0L93-26.9l-1,0.1c-0.7,0-1.3,0.1-2,0.2l-1,0.1
																		  c-0.3,0-0.7,0.1-1,0.1l-2,0.3c0.6-0.2,1.3-0.4,1.9-0.6c0.3-0.1,0.7-0.1,1-0.2c0.3,0,0.7-0.1,1-0.1c0.7-0.1,1.3-0.1,2-0.1
																		  C92.7-27.1,93.4-27.1,94-27z"/>
								</g>
							</g>
							<g id="Group_14203" transform="translate(154.414)">
								<path id="Path_79866" class="st48" d="M16.4,100.5c-1.4-2.5-5.1,0.1-6,0.6c-2.2,1.2-3,0.6-4.4,1.3c-1.9,0.9-3.8,2.7-1.6,6.1
																	  C6,111,8.7,110,10,109.1c1.5-1,1.5-2.2,2.9-3.3C14.3,104.7,17.5,102.5,16.4,100.5z"/>
								<path id="Path_79867" class="st59" d="M18.3,99.4c-0.6-0.1-1.2,0-1.8,0.3c0,0-1.2-1.4-3.1-0.3c0,0,1.9-0.1,2,0.5
																	  s-1.9,1.7-1.9,2.5c0,0,2-1.3,2.7-0.9c0.7,0.4-0.9,2.6-0.9,2.6s2-1.7,1.8-3.4c0,0,0.6-0.7,1.2-0.7L18.3,99.4z"/>
							</g>
							<g id="Group_14214" transform="translate(323.189 121.716)">
								<g id="Group_14204" transform="translate(5.984 25.199)">
									<path id="Path_79868" class="st60" d="M-124.5-8.2c-0.4,0.3-0.9,0.2-1.2-0.2c-0.3-0.4-0.2-0.9,0.2-1.2c0.4-0.3,0.9-0.2,1.2,0.2
																		  C-124-9-124.1-8.5-124.5-8.2z"/>
									<path id="Path_79869" class="st46" d="M-124.7-9c-0.1,0.1-0.3,0.1-0.4-0.1c-0.1-0.1-0.1-0.3,0.1-0.4c0.1-0.1,0.3-0.1,0.4,0.1
																		  C-124.6-9.3-124.6-9.1-124.7-9z"/>
								</g>
								<g id="Group_14205" transform="translate(0 25.489)">
									<path id="Path_79870" class="st60" d="M-120.6-8.6c-0.4,0.1-0.7-0.2-0.8-0.5c-0.1-0.4,0.2-0.7,0.5-0.8c0.3-0.1,0.7,0.1,0.8,0.5
																		  C-120-9.1-120.2-8.7-120.6-8.6z"/>
									<path id="Path_79871" class="st46" d="M-120.5-9.3c-0.1,0-0.3,0-0.3-0.1c0,0,0,0,0,0c0-0.1,0-0.3,0.2-0.3c0.1,0,0.3,0,0.3,0.1
																		  c0,0,0,0,0,0C-120.3-9.4-120.4-9.3-120.5-9.3z"/>
								</g>
								<g id="Group_14206" transform="translate(2.135 6.307)">
									<path id="Path_79872" class="st60" d="M-121.9,5.9c-0.5,0.1-0.9-0.2-1-0.7c-0.1-0.5,0.2-0.9,0.7-1c0.4-0.1,0.8,0.2,1,0.6
																		  C-121.2,5.3-121.5,5.8-121.9,5.9z"/>
									<path id="Path_79873" class="st46" d="M-121.9,5.1c-0.2,0-0.3-0.1-0.3-0.2c0-0.2,0.1-0.3,0.2-0.3c0.1,0,0.3,0.1,0.3,0.2
																		  C-121.6,4.9-121.7,5-121.9,5.1z"/>
								</g>
								<g id="Group_14207" transform="translate(1.26 12.707)">
									<path id="Path_79874" class="st48" d="M-121.1,1.7c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1,0.5,1.1,1
																		  C-120,1.1-120.5,1.7-121.1,1.7z"/>
									<path id="Path_79875" class="st59" d="M-120.9,0.7c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.4,0.2,0.4,0.3
																		  C-120.5,0.5-120.6,0.7-120.9,0.7z"/>
								</g>
								<g id="Group_14208" transform="translate(2.041 19.411)">
									<path id="Path_79876" class="st48" d="M-121.7-3.3c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1,0.5,1.1,1
																		  C-120.6-3.8-121.1-3.3-121.7-3.3z"/>
									<path id="Path_79877" class="st59" d="M-121.4-4.3c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.4,0.2,0.4,0.3
																		  C-121.1-4.5-121.2-4.3-121.4-4.3z"/>
								</g>
								<g id="Group_14209" transform="translate(8.147 14.512)">
									<path id="Path_79878" class="st60" d="M-125.6,0.2c-0.5,0.3-1.2,0.2-1.6-0.4c-0.3-0.5-0.2-1.2,0.4-1.6c0.5-0.3,1.2-0.2,1.5,0.3
																		  C-125-0.9-125.1-0.1-125.6,0.2z"/>
									<path id="Path_79879" class="st46" d="M-126-0.8c-0.2,0.1-0.4,0.1-0.5-0.1c-0.1-0.2-0.1-0.4,0.1-0.5c0.2-0.1,0.4-0.1,0.5,0.1
																		  C-125.7-1.2-125.8-0.9-126-0.8z"/>
								</g>
								<g id="Group_14210" transform="translate(19.176 18.966)">
									<path id="Path_79880" class="st60" d="M-133.8-3.1c-0.5,0.3-1.2,0.2-1.6-0.4c-0.3-0.5-0.2-1.2,0.4-1.6c0.5-0.3,1.2-0.2,1.5,0.3
																		  C-133.1-4.2-133.2-3.4-133.8-3.1z"/>
									<path id="Path_79881" class="st46" d="M-134.1-4.1c-0.2,0.1-0.4,0.1-0.5-0.1c-0.1-0.2-0.1-0.4,0.1-0.5c0.2-0.1,0.4-0.1,0.5,0.1
																		  C-133.9-4.5-133.9-4.2-134.1-4.1z"/>
								</g>
								<g id="Group_14211" transform="translate(7.302 5.754)">
									<path id="Path_79882" class="st48" d="M-125.1,7.2c-0.7,0.1-1.4-0.4-1.5-1.1c-0.1-0.7,0.4-1.4,1.1-1.5c0.7-0.1,1.3,0.3,1.5,1
																		  C-123.9,6.4-124.4,7.1-125.1,7.2z"/>
									<path id="Path_79883" class="st59" d="M-125,6c-0.2,0-0.5-0.1-0.5-0.4c0-0.2,0.1-0.5,0.4-0.5c0.2,0,0.4,0.1,0.5,0.3
																		  C-124.6,5.7-124.8,5.9-125,6z"/>
								</g>
								<g id="Group_14212" transform="translate(16.341 11.565)">
									<path id="Path_79884" class="st48" d="M-131.4,2.8c-0.6,0.4-1.4,0.2-1.8-0.4c-0.4-0.6-0.2-1.4,0.4-1.8c0.6-0.4,1.3-0.2,1.8,0.3
																		  C-130.6,1.5-130.8,2.3-131.4,2.8z"/>
									<path id="Path_79885" class="st59" d="M-131.8,1.5c-0.2,0.1-0.5,0.1-0.6-0.1c-0.1-0.2-0.1-0.5,0.1-0.6c0.2-0.1,0.5-0.1,0.6,0.1
																		  C-131.5,1.1-131.6,1.4-131.8,1.5z"/>
								</g>
								<g id="Group_14213" transform="translate(11.638 20.529)">
									<path id="Path_79886" class="st48" d="M-128.8-4.1c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1,0.5,1.1,1
																		  C-127.7-4.6-128.2-4.1-128.8-4.1z"/>
									<path id="Path_79887" class="st59" d="M-128.5-5.1c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.4,0.2,0.4,0.3
																		  C-128.2-5.3-128.3-5.1-128.5-5.1z"/>
								</g>
								<path id="Path_79888" class="st59" d="M-115.5,11.9c0,0,1.2-0.3,1.4,0.4c0.2,0.5,0.2,1,0.2,1.5c0,0-0.9,0.1-1-0.5
																	  c0,0.2,0.3,1.6-1.8,1.4c-0.6-1.4-0.1-1.8,0-1.9c-0.2,0.2-0.4,0.2-0.7,0.1c-0.3-0.6-0.1-1.3,0.4-1.6
																	  C-116.7,11.1-115.9,11.1-115.5,11.9z"/>
								<path id="Path_79889" class="st48" d="M-116.1,11.9c0.2-0.1,0.4-0.3,0.7-0.4c0.1-0.1,0.2-0.1,0.4-0.2c0.1,0,0.1-0.1,0.2-0.1
																	  c0.1,0,0.2,0,0.2,0c0.3,0,0.5,0,0.8,0c0.2,0,0.5,0,0.7-0.1l0.2,0.6c-0.3,0.1-0.6,0.1-0.8,0.1c-0.3,0-0.5,0-0.8,0
																	  c-0.2,0-0.4,0-0.6,0.2c-0.2,0.1-0.5,0.2-0.7,0.3L-116.1,11.9z"/>
								<path id="Path_79890" class="st61" d="M-115.7,11.8c0,0,1.3-0.8,0.9-1.7c-0.4-0.9-1.9-1.3-1.9-1.3s-0.2,0.4,0.2,1.1
																	  c-0.2-0.1-0.9-1.1-2.5-0.4c-0.1,1.9,1.1,2.5,1.4,2.6c-0.3,0-0.6,0.2-0.7,0.5c0.3,0.8,1,1.2,1.8,1.1
																	  C-116,13.7-115.4,13-115.7,11.8z"/>
							</g>
							<g id="Group_14218" transform="translate(149.781 97.835)">
								<g id="Group_14217">
									<g id="Group_14215">
										<path id="Path_79891" class="st45" d="M6.8,26.7c0,0,6.4-0.4,8.7,0.1c2.3,0.6,2.1,1.7,1.9,2.5c-0.2,0.8-1.2,1.6-2.5,1.3
																			  C12.3,30.1,6.8,26.7,6.8,26.7z"/>
										<path id="Path_79892" class="st46" d="M20,31.6c-0.1-0.1-0.2-0.1-0.2,0c0.2,1.6-0.2,2.8-1,2.6c-0.6-0.1,0.5-2,0-2.3
																			  c-0.3-0.2-0.2,1.1-0.6,1c-0.4-0.2-0.2-0.7-0.1-0.9c0.4-1.1,0.2-1.7-1.2-2.5c-0.4-0.2-0.1-0.5,0.8-0.3c2.5,0.6,3.2,2.6,2.8,3.2
																			  C20.3,32.6,20.3,31.8,20,31.6z"/>
									</g>
									<g id="Group_14216" transform="translate(7.328 1.054)">
										<path id="Path_79893" class="st44" d="M8.5,26.1c-0.5,0.1-1,0.3-1.4,0.7C7,27,6.8,27.2,6.7,27.4c-0.1,0.1-0.1,0.3-0.1,0.4
																			  c0,0.1-0.1,0.3-0.1,0.4c0-0.1,0-0.3,0-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.3,0.2-0.6,0.4-0.8C7.3,26.1,7.9,25.9,8.5,26.1z"/>
										<path id="Path_79894" class="st44" d="M5,28.3c-0.2-0.4-0.3-0.8-0.3-1.2c0-0.2,0.1-0.4,0.3-0.6c0.1-0.2,0.3-0.3,0.5-0.4
																			  c-0.1,0.2-0.2,0.3-0.3,0.5C5.1,26.7,5,26.9,5,27.1C4.9,27.5,4.9,27.9,5,28.3z"/>
										<path id="Path_79895" class="st44" d="M3.3,25.8c-0.2,0.2-0.3,0.4-0.4,0.6c0,0.3-0.1,0.5,0,0.8c-0.1-0.1-0.2-0.2-0.2-0.4
																			  c0-0.2-0.1-0.3,0-0.5c0-0.2,0.1-0.3,0.3-0.4C3,25.8,3.1,25.8,3.3,25.8z"/>
										<path id="Path_79896" class="st44" d="M1.7,25.8c0,0.1,0,0.1,0,0.2l0,0.2c0,0.1,0,0.3-0.1,0.4c-0.1-0.1-0.2-0.3-0.2-0.5
																			  c0-0.1,0-0.2,0.1-0.3C1.5,25.8,1.6,25.8,1.7,25.8z"/>
									</g>
								</g>
							</g>
						</g>
					</g>
					<circle id="Ellipse_377_1_" class="st6" cx="750.4" cy="8645.7" r="2.1"/>
				</g>
				<g id="Group_9344" transform="translate(-599 -2419)">

					<linearGradient id="Ellipse_373_5_" gradientUnits="userSpaceOnUse" x1="481.8499" y1="2974.3689" x2="481.697" y2="2974.2627" gradientTransform="matrix(-83.2836 -17.7141 -17.7141 83.2836 93702.3359 -236636.6563)">
						<stop  offset="0" style="stop-color:#94DAEC;stop-opacity:0.502"/>
						<stop  offset="1" style="stop-color:#FFFFFF"/>
					</linearGradient>
					<circle id="Ellipse_373_2_" class="st62" cx="894.5" cy="2539.6" r="6.2"/>

					<linearGradient id="Ellipse_374_5_" gradientUnits="userSpaceOnUse" x1="481.7896" y1="2978.7202" x2="481.6368" y2="2978.614" gradientTransform="matrix(536.249 9.6566 9.6744 -537.2389 -286228.7188 1598083.5)">
						<stop  offset="0" style="stop-color:#94DAEC;stop-opacity:0.502"/>
						<stop  offset="1" style="stop-color:#FFFFFF"/>
					</linearGradient>
					<path id="Ellipse_374_2_" class="st63" d="M888,2453.4c21.4,0.4,38.5,18.1,38.1,39.6c-0.4,21.5-18.1,38.6-39.5,38.2
															  s-38.5-18.1-38.1-39.6C848.9,2470.1,866.6,2453,888,2453.4z"/>
					<circle id="Ellipse_375_2_" class="st3" cx="934" cy="2480.8" r="0.7"/>
					<circle id="Ellipse_377_2_" class="st6" cx="853.8" cy="2525.3" r="1"/>
					<g id="_3885251" transform="translate(650.898 2419)">
						<g id="OBJECTS_1_" transform="translate(0 0)">
							<g id="Group_9323" transform="translate(404.456)">
								<ellipse id="Ellipse_394" class="st53" cx="-126.4" cy="39.5" rx="8.8" ry="8.8"/>
								<ellipse id="Ellipse_395" class="st64" cx="-125.3" cy="39.1" rx="8.8" ry="8.8"/>
								<ellipse id="Ellipse_396" class="st22" cx="-125.3" cy="39.1" rx="7.4" ry="7.4"/>
								<path id="Path_74485" class="st65" d="M-123.6,34.1l-1.3,6l-4.8,1.6l3.4-2.6L-123.6,34.1z"/>
								<path id="Path_74486" class="st66" d="M-119.4,41.9c1.3-3.9-0.9-8.1-4.7-9.3c-1.6-0.5-3.3-0.5-4.8,0.1c3.6-2,8.1-0.8,10.1,2.8
																	  c2,3.6,0.8,8.1-2.8,10.1c-0.4,0.2-0.7,0.4-1.1,0.5C-121.2,45.2-120,43.7-119.4,41.9z"/>
							</g>
							<g id="Group_9339" transform="translate(172.004 92.546)">
								<g id="Group_9338" transform="translate(0 0)">
									<g id="Group_9332" transform="translate(0 22.053)">
										<g id="Group_9329" transform="translate(26.543 55.82)">
											<path id="Path_74498" class="st67" d="M35.5-129.4c0-0.1,0-0.1,0.1-0.1c0,0,0,0,0,0c1.1-0.1,2.2-0.4,3.2-0.8
																				  c0.1,0,0.1,0,0.2,0.1c0,0,0,0.1,0,0.1c-0.3,1.1-0.3,2.3-0.1,3.4c0,0.1,0,0.1-0.1,0.1c-1.3,0.3-2.6,0.5-3.9,0.5
																				  c-0.1,0-0.1-0.1,0-0.1c0,0,0,0,0,0c0,0,0,0,0-0.1c0.1-0.2,0.2-0.5,0.2-0.7C35.4-127.8,35.5-128.6,35.5-129.4
																				  C35.5-129.4,35.5-129.4,35.5-129.4z"/>
											<path id="Path_74499" class="st68" d="M35.6-129.5c0.4,0,0.7-0.1,1-0.2c0.7,0.1,1.4,0.2,2.1,0.3c0,0.2,0,0.3-0.1,0.5
																				  c-1,0.7-2.2,1.1-3.4,1c0,0,0,0,0,0c0.1-0.5,0.1-1,0.1-1.6c0,0,0-0.1,0-0.1C35.5-129.5,35.5-129.5,35.6-129.5
																				  C35.6-129.5,35.6-129.5,35.6-129.5z"/>
										</g>
										<g id="Group_9331">
											<path id="Path_74500" class="st32" d="M62.1-81.6c0.3-0.3,0.5-0.6,0.9-0.9c0.2-0.2,0.4-0.3,0.7-0.3c0,0,0.1,0,0.1,0
																				  c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.3,0.4-0.5,0.7-0.6,1.2c-0.1,0.4-0.2,0.8-0.4,1.1
																				  c-0.4,0.5-1.1,0.6-1.5,1.2c0,0-0.1,0.1-0.1,0c0,0,0-0.1,0-0.1C61.1-80.2,61.5-81,62.1-81.6z"/>
											<path id="Path_74501" class="st32" d="M69.8-74.1c0,0.7-0.2,1.4-0.6,2c-0.4,0.6-0.8,1.1-1,1.8c-0.2,0.6-0.4,1.3-0.4,1.9
																				  c0,1.4,0.5,2.7,0.7,4.1c0.2,1.3-0.1,2.9-1.3,3.7c0,0,0,0.1,0,0.1c0,0,0,0,0,0l0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0
																				  c1.6-0.6,2.7-2.1,3.1-3.8c0.2-0.8,0.1-1.7,0.1-2.5c0-0.2,0-0.4,0-0.5c0.1-0.8,0.4-1.5,0.8-2.2c0.5-0.8,1-1.5,1.5-2.3
																				  c0.1-0.1,0.1-0.2,0.2-0.4c0.4-0.7,0.6-1.4,0.8-2.1c0.4-1.5,0.6-3.3-0.5-4.6c-0.7-0.9-2.2-1.4-3.2-0.6c0,0-0.1,0-0.1,0
																				  c-0.3,0.2-0.5,0.5-0.7,0.8c-0.2,0.3-0.3,0.6-0.4,0.9c-0.2,0.6-0.1,1.3,0.2,1.9C69.5-75.4,69.8-74.8,69.8-74.1z"/>
											<path id="Path_74502" class="st32" d="M69.8-74.1c0,0.7-0.2,1.4-0.6,2c-0.4,0.6-0.8,1.1-1,1.8c-0.2,0.6-0.4,1.3-0.4,1.9
																				  c0,1.4,0.5,2.7,0.7,4.1c0.2,1.3-0.1,2.9-1.3,3.7c0,0,0,0.1,0,0.1c0,0,0,0,0,0l0,0c0.4-0.2,0.7-0.6,1-1c0.4-0.5,0.7-1,0.9-1.6
																				  c0.4-1.5,0.2-3.1,0.2-4.6c0-0.9,0.2-1.8,0.7-2.5c0.4-0.7,0.9-1.3,1.3-2c0.4-0.7,0.7-1.5,0.8-2.2c0.2-0.7,0.3-1.3,0-2
																				  c-0.3-0.7-0.7-1.3-1.2-1.8c-0.4-0.4-0.8-0.6-1.4-0.6c-0.2,0.3-0.3,0.6-0.4,0.9c-0.2,0.6-0.1,1.3,0.2,1.9
																				  C69.5-75.4,69.8-74.8,69.8-74.1z"/>
											<path id="Path_74503" class="st69" d="M59.5-78.1L59.5-78.1c0,0.1,0,0.2-0.1,0.3l0,0c0,0,0,0.1,0,0.1l0,0.1
																				  c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.2-0.1,0.4c0,0.1,0,0.2,0,0.2c-0.2,0.7-0.3,1.4-0.3,2.1
																				  c0,0.3,0,0.6,0.3,0.8c0.2,0.1,0.4,0.1,0.7,0.2c0.2,0,0.5,0.1,0.7,0.1c0.5,0.1,1.1,0.1,1.6,0.2c0.4,0.1,0.8,0.1,1.3,0.1
																				  c0.4,0,0.9-0.2,1.3-0.4c0.4-0.2,0.8-0.5,1.2-0.9c1.2-1.4,1.1-3.5,0-5c-0.5-0.7-1.4-1.3-2.3-1.5c-0.1,0-0.2-0.1-0.4-0.1
																				  c-0.2,0-0.4,0-0.6,0c-0.4,0.1-0.7,0.2-1,0.5c-0.3,0.3-0.5,0.6-0.7,1c-0.1,0.2-0.1,0.4-0.2,0.5c-0.1,0.2-0.2,0.4-0.4,0.5
																				  l-0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c-0.1,0-0.3,0-0.4,0c-0.1,0-0.2,0-0.2,0C59.5-78.3,59.5-78.2,59.5-78.1z"/>
											<path id="Path_74505" class="st32" d="M64.1-83c2.1-0.2,4.3,1,5.4,2.7c0.6,0.9,0.3,2.1-0.2,3c-0.5,0.9-1.1,1.8-2,2.4
																				  c-0.2,0.2-0.5,0.3-0.7,0.5c-0.2,0.1-0.4,0.3-0.7,0.3c-0.2,0-0.4-0.3-0.6-0.4c-0.3-0.3-0.6-0.6-0.8-0.8c0,0,0,0,0-0.1
																				  c0,0,0,0,0,0c-0.2-0.5-0.2-1.2-0.2-1.8c0-0.6,0-1.3,0.1-1.9c0.1-1.3,0.1-2.6-0.3-3.8C64.1-82.9,64.1-83,64.1-83z"/>
											<path id="Path_74506" class="st3" d="M69.6-79L69.6-79c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.1,0,0.2,0.1c0,0.1,0.1,0.2,0.1,0.3
																				 c0,0.1,0,0.2,0,0.3c0,0.2-0.1,0.4-0.1,0.6c-0.1,0.3-0.3,0.7-0.6,0.8c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0-0.1
																				 c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.2-0.5c0-0.1,0.1-0.3,0.1-0.5c0-0.1,0-0.1,0-0.2C69.7-78.8,69.7-78.9,69.6-79
																				 C69.7-78.9,69.7-78.9,69.6-79C69.7-78.9,69.7-78.9,69.6-79z"/>
											<path id="Path_74507" class="st32" d="M63.2-82.6c0.6-0.4,1.3-0.5,2-0.2c0.7,0.4,0.9,1.3,1,2c0.1,0.9,0,1.9-0.1,2.8
																				  c-0.1,1.1,0,2.3,0.4,3.3c0,0.1,0,0.1-0.1,0.1c0,0-0.1,0-0.1,0c-0.8-0.4-1.8-0.7-2.4-1.6c0,0,0,0,0,0
																				  c-0.3-0.2-0.6-0.5-0.7-0.9c-0.2-0.4-0.3-0.9-0.5-1.4c-0.2-0.7-0.6-1.6-0.4-2.4C62.3-81.3,62.6-82.1,63.2-82.6z"/>
											<path id="Path_74508" class="st68" d="M63-75.9c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0,0,0,0,0,0c0,0,0,0,0,0
																				  c0.1,0,0.2-0.1,0.4-0.1c0.1,0,0.3,0,0.4,0c0.2,0,0.4,0.2,0.5,0.4c0.1,0.5-0.4,0.9-0.8,1c-0.3,0.1-0.6,0.1-0.8,0
																				  c-0.1,0-0.1-0.1-0.1-0.1C62.9-75.5,62.9-75.7,63-75.9z"/>
											<path id="Path_74509" class="st32" d="M59.7-72c0,0,0.1-0.1,0.1-0.1c0.7-0.9,1.4-1.7,2-2.7c0.5-1,0.9-2,1.2-3c0,0,0,0,0-0.1
																				  c0-0.1,0.1-0.2,0.1-0.2c0,0,0.1-0.1,0.1,0c0,0,0,0,0,0c0.3,0.4,0.3,0.9,0.2,1.4c-0.2,0.7-0.4,1.3-0.8,1.9
																				  c-0.3,0.6-0.8,1.1-1.2,1.6c-0.4,0.5-1,0.9-1.6,1.2l0,0C59.8-71.9,59.8-71.9,59.7-72C59.8-71.9,59.8-71.9,59.7-72
																				  C59.7-71.9,59.7-72,59.7-72z"/>
											<path id="Path_74515" class="st22" d="M61.7-80.5C61.7-80.5,61.7-80.5,61.7-80.5C61.7-80.5,61.7-80.5,61.7-80.5
																				  C61.7-80.5,61.7-80.5,61.7-80.5C61.7-80.5,61.7-80.5,61.7-80.5z"/>
										</g>
									</g>
									<g id="Group_9333" transform="translate(52.703 195.023)">
										<path id="Path_74516" class="st67" d="M6.3-225c0.6-0.6,1.1-1.2,1.8-1.7c0.6-0.5,1.2-1,1.9-1.4c0.6-0.4,1.3-0.9,2.1-1.2
																			  c0.7-0.3,1.4-0.3,2,0.2c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0,0.1c0,0,0,0-0.1,0c0,0,0,0,0,0
																			  c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c-0.2,0.6-0.6,1.2-1,1.7c-0.4,0.6-0.8,1.2-1.2,1.8c-0.8,1.1-1.7,2.2-2.7,3.2
																			  c0,0-0.1,0-0.1,0c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.2-0.2c0,0,0,0,0,0
																			  c-0.9-0.6-1.7-1.4-2.4-2.2C6.2-224.8,6.3-224.9,6.3-225z"/>
										<path id="Path_74517" class="st69" d="M6.7-224.4c0.3-0.2,0.5-0.4,0.8-0.6c0.4-0.3,0.8-0.8,1.4-0.6c0.1,0,0.2,0.1,0.2,0.1
																			  c0.5-0.2,1-0.5,1.5-0.9c0.5-0.4,1-0.9,1.5-1.3c0.3-0.2,0.6-0.4,0.9-0.7c0.3-0.2,0.5-0.5,0.8-0.7c0,0,0.1-0.1,0.2-0.1
																			  c0,0,0.1,0,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0
																			  c0,0,0,0,0,0l0,0c0,0.1,0,0.2-0.1,0.2c-0.1,0.3-0.3,0.6-0.4,0.9c-0.1,0.2-0.3,0.4-0.4,0.6c-0.4,0.6-0.8,1.2-1.2,1.8
																			  c-0.7,1-1.5,1.9-2.3,2.7c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.2-0.3-0.4c0,0,0,0-0.1,0c-0.4,0-0.9-0.1-1.3-0.1
																			  C7.4-223.7,7-224,6.7-224.4z"/>
									</g>
									<g id="Group_9334" transform="translate(8.236 98.122)">
										<path id="Path_74518" class="st11" d="M49.4-144.2c0.2-0.3,0.5-0.6,0.8-0.8c1.2-0.8,2.4-1.5,3.8-2.1c0.4-0.2,0.8-0.4,1.2-0.5
																			  c0.4-0.2,0.8-0.2,1.1-0.2c0.7,0.1,1.2,0.7,1.5,1.3c0.4,0.7,0.7,1.6,0.6,2.4c0,0,0,0,0,0c-0.1,0.4-0.3,0.7-0.5,1.1
																			  c-0.2,0.4-0.3,0.8-0.4,1.1c-0.3,0.7-0.5,1.5-0.7,2.3c-0.2,0.8-0.4,1.6-0.5,2.4c-0.1,0.7-0.2,1.4-0.3,2c0,0,0.1,0.1,0.1,0.1
																			  c0.1,0.1,0.3,0.2,0.4,0.3c0.3,0.2,0.5,0.4,0.8,0.7c0.3,0.2,0.5,0.4,0.8,0.7c0.3,0.2,0.5,0.4,0.7,0.7c0.1,0,0.1,0,0.1,0.1
																			  c0,0,0,0,0,0c-0.4,0.8-1.1,1.4-1.8,2c-0.7,0.6-1.4,1.1-2.1,1.6c-1.5,1-3,1.9-4.7,2.5c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0
																			  c0,0,0,0,0,0c-0.6-1.5-0.7-3.3-0.9-4.9c-0.4-3-0.5-6.1-0.5-9.1C48.6-141.7,48.6-143.1,49.4-144.2z"/>
										<path id="Path_74519" class="st70" d="M48.6-138.6c0-0.6,0-1.2,0-1.7c0-1.3,0.1-2.7,0.8-3.8c0.1-0.1,0.2-0.2,0.3-0.4l0.8,3
																			  l4.9-5.7l2.2,0.3c0.1,0.1,0.2,0.3,0.3,0.4c0.4,0.7,0.7,1.6,0.6,2.4c0,0,0,0,0,0c-0.1,0.4-0.3,0.7-0.5,1.1
																			  c-0.2,0.4-0.3,0.8-0.4,1.1c-0.3,0.7-0.5,1.5-0.7,2.3c-0.1,0.5-0.3,1-0.4,1.5l-3.8,1.7l-2.8-2.3l0.9,2.6L48.6-138.6z"/>
									</g>
									<g id="Group_9335" transform="translate(40.89 207.7)">
										<path id="Path_74522" class="st69" d="M3.7-199C3.7-198.9,3.7-198.9,3.7-199c0.9,0.6,1.9,1.1,2.9,1.4c1.9,0.6,3.9,1,5.7,1.8
																			  c0.3,0.1,0.6,0.4,1,0.2c0.3-0.1,0.4-0.6,0.5-0.8c0.2-0.7,0.3-1.4,0.2-2.1c0.2-0.7,0.4-1.3,0.7-1.9c0.9-2.4,2.1-4.6,3.6-6.7
																			  c0.7-1,1.5-2,2.2-3c0.4-0.6,0.8-1.2,1.1-1.8c0.1-0.2,0.3-0.5,0.4-0.8c0,0,0,0,0.1,0c0-0.1,0-0.1,0.1-0.2
																			  c0-0.1,0.1-0.2,0.1-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0.1-0.3,0.1-0.6,0.2-0.9c0.1-0.5,0.2-1,0.2-1.5c0.1-0.7,0.2-1.3,0.2-2
																			  c0,0,0,0,0,0c0.3-1.6,0.8-3.1,1.5-4.6c1.2-2.7,2.9-5.1,4.7-7.4c0.4-0.5,0.9-1.1,1.3-1.7c0.4-0.5,0.6-1.2,0.6-1.8
																			  c0.1-1.5,0.1-3.1,0.1-4.6c0,0,0,0,0,0c0.1-0.2,0-0.4-0.2-0.6c-0.3-0.3-0.8-0.3-1.2-0.2c-1.7,0.1-3.4,0.7-4.7,1.8
																			  c-0.3,0.3-0.6,0.6-0.9,0.9c-0.2,0.3-0.4,0.5-0.6,0.8c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.7,1.8-1.2,3.7-1.8,5.6
																			  c-0.9,3-1.6,6.1-1.9,9.2c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1
																			  c-0.1,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.1,0.2-0.1,0.3c0,0,0,0,0,0c-0.3,0.8-0.6,1.5-0.8,2.3c-0.3,1.1-0.6,2.1-0.9,3.2
																			  c0,0.2-0.1,0.3-0.1,0.5c-1,3.6-2,7.4-4.2,10.6c-0.5,0.8-1.1,1.6-2,2.1c-0.8,0.5-1.7,0.7-2.6,0.9c-1,0.2-1.9,0.3-2.8,0.1
																			  C4.8-199.6,4-199.7,3.7-199z"/>
										<path id="Path_74525" class="st65" d="M21.3-229.4C21.3-229.4,21.3-229.3,21.3-229.4c-0.9,3-1.6,6.1-1.9,9.2c0,0,0,0,0,0
																			  c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1c-0.1,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.1,0.2-0.1,0.3
																			  c0,0,0,0,0,0c-0.3,0.8-0.6,1.5-0.8,2.3c-0.3,1.1-0.6,2.1-0.9,3.2c0,0.2-0.1,0.3-0.1,0.5c0.4,0.1,0.8,0.3,1.2,0.4
																			  c0.7,0.2,1.3,0.4,2,0.6c0.4,0.1,0.9,0.3,1.3,0.4c0.1-0.2,0.3-0.5,0.4-0.8c0,0,0,0,0.1,0c0-0.1,0-0.1,0.1-0.2
																			  c0-0.1,0.1-0.2,0.1-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0.1-0.3,0.1-0.6,0.2-0.9c0.1-0.5,0.2-1,0.2-1.5c0.1-0.7,0.2-1.3,0.2-2
																			  c0,0,0,0,0,0c0.3-1.6,0.8-3.1,1.5-4.6c1.2-2.7,2.9-5.1,4.7-7.4c0.4-0.5,0.9-1.1,1.3-1.7c0.3-0.5,0.5-1,0.6-1.6
																			  c0-0.1,0-0.2,0-0.3c0-0.4,0-0.8,0.1-1.2c0-1.1,0-2.3,0-3.4c0,0,0,0,0,0c0.1-0.2,0-0.4-0.2-0.6c-0.3-0.3-0.8-0.3-1.2-0.2
																			  c-1.7,0.1-3.4,0.7-4.7,1.8c-0.3,0.3-0.6,0.6-0.9,0.9c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.3-0.3,0.5c0,0-0.1,0-0.1,0
																			  c0,0,0,0,0,0C22.4-233.2,21.8-231.3,21.3-229.4z"/>
										<path id="Path_74526" class="st71" d="M21.3-229.4C21.3-229.4,21.3-229.3,21.3-229.4c0.1,0.5,0.4,1,1,1.1
																			  c0.4,0.1,0.9-0.1,1.3-0.1c0.4-0.1,0.9-0.2,1.3-0.4c0.9-0.3,1.7-0.7,2.4-1.1c1.3-0.7,2.4-1.7,3.3-2.9c0-0.1,0-0.2,0-0.3
																			  c0-0.4,0-0.8,0.1-1.2c-0.5-0.3-1.1-0.5-1.6-0.6c-1.2-0.3-2.4-0.5-3.6-0.6c-0.7-0.1-1.4-0.1-2.1,0c-0.1,0.1-0.2,0.3-0.3,0.5
																			  c0,0-0.1,0-0.1,0c0,0,0,0,0,0C22.4-233.2,21.8-231.3,21.3-229.4z"/>
										<path id="Path_74527" class="st71" d="M20.8-220.1c0.1-0.2,0.3-0.4,0.5-0.5c0.2-0.2,0.4-0.4,0.6-0.6c0.8-0.8,1.4-1.6,2.1-2.5
																			  c0.6-0.7,1.2-1.4,1.9-2c-0.7,1.1-1.3,2.2-1.8,3.3c-0.7,1.5-1.1,3-1.5,4.6c0,0,0,0,0,0c0,0.7-0.1,1.4-0.2,2
																			  c0,0.4-0.1,0.8-0.2,1.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3c0,0.3-0.1,0.6-0.2,0.9c0,0,0,0,0,0c0,0,0,0,0,0
																			  c0,0.1-0.1,0.2-0.1,0.2c-0.2-1.4-0.5-2.8-0.7-4.2c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c-0.1-0.5-0.1-1.1-0.3-1.6
																			  C21-219.2,20.6-219.7,20.8-220.1z"/>
									</g>
									<g id="Group_9336" transform="translate(77.574)">
										<path id="Path_74528" class="st69" d="M-1.5-52.1c0,0.1,0,0.1,0,0.2l0,0c0,0,0,0,0,0l0,0l0,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0
																			  c0,0,0.1,0.2,0.2,0.4c0.3,0.6,0.8,1.5,1.1,2c0.4,0.8,0.8,1.6,1.1,2.4c0.6,1.4,1.2,2.9,1.6,4.4c0.5,1.4,0.8,2.9,1.4,4.3
																			  C4-38.2,4.1-38,4.2-37.8c0.3,0.7,0.7,1.3,1.2,1.9c0.8,1.2,1.9,2.2,3.1,3.1c0.2,0.1,0.4,0.3,0.6,0.4c0,0,0,0.1,0.1,0.1
																			  c0.4,0.1,0.8,0.1,1.1,0.1c0.4,0,0.8,0,1.1,0.1c0.6,0,1.3,0.1,1.9-0.1c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1l0,0
																			  c-0.1-1.3-0.8-2.4-1.5-3.4c-0.6-0.8-1.3-1.7-1.9-2.5c-0.2-0.3-0.5-0.6-0.7-0.9c-0.9-1.2-1.9-2.5-2.8-3.7
																			  c-1.6-2.2-3.3-4.6-4.2-7.2c0-0.1,0-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0-0.3-0.1-0.7-0.1-1c0-0.1,0-0.3,0-0.4c0-0.3,0-0.6,0-0.8
																			  c0-1.6,0.3-3.2,1-4.7c0.2-0.4,0.4-0.8,0.6-1.2c0.1-0.2,0.2-0.4,0.2-0.6l0,0c0,0-0.2-0.1-0.2-0.1c-0.1,0-0.1,0-0.2,0.1
																			  c0,0-0.1,0-0.1,0.1c0,0,0,0,0,0c-0.7,0.2-1.4,0.6-1.9,1.2c-0.6,0.7-0.6,1.7-1,2.5c-0.2,0.5-0.5,0.9-0.8,1.2
																			  C-0.8-54-0.9-53.9-1-53.8c-0.2,0.2-0.3,0.3-0.4,0.5C-1.6-53-1.7-52.4-1.5-52.1z"/>
										<path id="Path_74530" class="st68" d="M-1.5-52.1c0,0.1,0,0.1,0,0.2l0,0c0,0,0,0,0,0h0l0,0c0,0,0,0,0,0h0c0,0,0,0,0,0
																			  c0,0,0.1,0.2,0.2,0.4c0.1,0,0.2,0,0.4,0.1c0.5,0.1,1.1,0.3,1.6,0.5c0.4,0.2,0.9,0.5,1.3,0.6c0,0,0.1,0,0.1,0c0,0,0.1,0,0.2,0
																			  c0-0.1,0-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0-0.3-0.1-0.7-0.1-1c0-0.1,0-0.3,0-0.4c0,0-0.1-0.1-0.1-0.1c-0.7-0.7-1.5-1.3-2.4-1.7
																			  c-0.2-0.1-0.3-0.1-0.5-0.2c-0.2,0.2-0.3,0.3-0.4,0.5C-1.6-53-1.7-52.4-1.5-52.1z"/>
										<path id="Path_74531" class="st65" d="M-15.7-26.9c1.7,0.6,3.4,1,5.1,1.2c0.7,0.1,1.4,0.1,2,0.2c1.1,0.1,2.3,0.2,3.4,0.1
																			  c3.2-0.1,6.3-0.8,9.4-1.5c2.7-0.7,5.4-1.6,7.7-3.2c0.1-0.1,0.3-0.1,0.4-0.2c0.1-0.1,0.3-0.3,0.3-0.5c0.1-0.2,0.2-0.4,0.3-0.6
																			  c0.1-0.2,0.2-0.4,0.2-0.6c0,0,0,0,0,0l0,0c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1l0,0c-0.1-1.3-0.8-2.4-1.5-3.4
																			  c-0.6-0.8-1.3-1.7-1.9-2.5c-0.9,0.2-1.7,0.6-2.5,1c-0.4,0.2-0.7,0.4-1,0.7c-0.1,0.1-0.2,0.2-0.4,0.3c-0.2,0.2-0.5,0.4-0.7,0.6
																			  c0.6,0.8,1.3,1.6,2,2.3c0.1,0.1,0.3,0.2,0.4,0.4C8-33,8.2-32.9,8.4-32.7l0,0c0,0,0,0,0,0c-2.3,0.1-4.6,0.2-6.9,0.1
																			  c-1.3-0.1-2.6-0.1-3.9-0.2c-0.9-0.1-1.8-0.1-2.7-0.2c-0.4-0.2-0.8-0.4-1.2-0.6c-0.6-0.3-1.2-0.6-1.8-0.8
																			  c-0.5-0.1-1.2,0-1.7,0.1c-0.2,0-0.5,0-0.7,0.1c0,0-0.1-0.1-0.1,0c0,0,0,0,0,0c-0.4,0.6-0.8,1.3-1.1,1.9
																			  c-0.4,0.6-0.8,1.2-1.2,1.8c-0.9,1.2-1.8,2.4-2.8,3.5C-15.8-27-15.8-27-15.7-26.9C-15.7-26.9-15.7-26.9-15.7-26.9z"/>
										<path id="Path_74535" class="st71" d="M-13.9-27.7l0.2-0.2c0.1-0.2,0.2-0.3,0.4-0.5c0.1-0.1,0.1-0.2,0.2-0.2
																			  c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c2.7,0.6,5.4,1,8.1,1.1
																			  c1.3,0.1,2.6,0.2,4,0.2c1.4,0,2.7-0.2,4-0.4c0.8-0.1,1.5-0.3,2.3-0.4c0.8-0.1,1.5-0.3,2.3-0.4c0,0,0,0,0,0c0,0,0,0,0.1,0
																			  c0,0,0.1,0,0,0C6.8-28,5.4-27.7,4-27.3c-1.5,0.4-2.9,0.8-4.4,1c-2.8,0.4-5.8,0.2-8.6,0c-0.9-0.1-1.7-0.2-2.6-0.3
																			  c-0.7-0.1-1.5-0.2-2.1-0.5l0,0c-0.2,0.1-0.3-0.1-0.2-0.3C-14-27.5-13.9-27.6-13.9-27.7z"/>
										<path id="Path_74536" class="st71" d="M5.3-35.8c0.6,0.8,1.3,1.6,2,2.3c0.1,0.1,0.3,0.2,0.4,0.4C8-33,8.2-32.9,8.4-32.7l0,0
																			  c0.1,0,0.2,0,0.3,0c0.4,0,0.9,0,1.3,0c0,0,0,0,0,0c0.1,0,0.1,0,0.1-0.1c-1.4-1.2-2.6-2.5-3.7-3.9c-0.1,0.1-0.2,0.2-0.4,0.3
																			  C5.8-36.2,5.6-36,5.3-35.8z"/>
									</g>
									<g id="Group_9337" transform="translate(35.505 7.96)">
										<path id="Path_74537" class="st69" d="M25.9-53.2c1.4-3.1,2.7-6.3,3.9-9.5c0.7-1.8,1.4-3.6,2-5.3c0.1-0.4,0.2-0.8,0.5-1.1
																			  c0.2-0.2,0.5-0.4,0.8-0.4c0.6-0.1,1.3-0.1,1.9,0.2c0.5,0.1,1,0.5,1.3,0.7c0.7,0.6,1.5,1.2,2.1,1.9c0.7,0.7,1.4,1.4,2,2.2
																			  c0.7,0.7,1.4,1.4,2,2.2c0,0,0,0,0.1,0c0.4-0.2,0.8-0.3,1.2-0.3c0.4-0.1,0.8,0,1.2,0.2c0.2,0.1,0.4,0.2,0.6,0.3
																			  c0.1,0.1,0.3,0.2,0.3,0.3c0.1,0.2,0.1,0.3,0.1,0.5c0,0.2,0,0.5,0,0.7l0,0c0.1,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.2,0.2-0.3,0.4
																			  c-0.2,0.2-0.3,0.5-0.5,0.7l0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c-0.1,0-0.2,0-0.4-0.1c-0.1,0-0.3-0.1-0.4-0.1l-0.1,0
																			  c0.1,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1-0.1,0.1
																			  c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.2-0.4-0.3-0.6-0.5c-0.2-0.2-0.3-0.4-0.5-0.6
																			  c-0.2-0.2-0.3-0.5-0.4-0.7c0,0,0,0,0,0c-0.4-0.3-0.8-0.6-1.2-0.8c-0.4-0.3-0.8-0.5-1.2-0.7c-0.8-0.4-1.7-0.8-2.5-1.3
																			  c-1-0.6-1.9-1.3-2.6-2.3l0,0.1c-0.5,1.6-1,3.3-1.6,4.9c-0.5,1.6-1,3.3-1.6,4.9c-0.5,1.4-1,2.7-1.8,4c-0.4,0.6-0.8,1.1-1.3,1.6
																			  c-0.4,0.3-0.9,0.9-1.5,0.8c-0.3-0.1-0.4-0.3-0.5-0.5c-0.2-0.3-0.3-0.7-0.5-1.1c-0.1-0.3-0.2-0.6-0.2-1
																			  C25.6-52.5,25.8-52.8,25.9-53.2z"/>
										<path id="Path_74540" class="st68" d="M34.8-66c0.8,0.5,1.6,1.1,2.3,1.7c0.7,0.5,1.4,1,2,1.5c0.2,0.1,0.4,0.2,0.6,0.3
																			  c0.1,0,0,0.2-0.1,0.1c-0.9-0.4-1.9-0.9-2.7-1.5c-0.8-0.6-1.7-1.1-2.4-1.8c-0.1-0.1-0.1-0.2,0-0.2C34.6-66,34.7-66.1,34.8-66z"
											  />
										<path id="Path_74541" class="st68" d="M44.5-60.1c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2,0-0.3c0-0.2,0.2-0.2,0.4-0.2
																			  c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0c0,0,0.1,0,0.1,0c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.2,0.2-0.3,0.4
																			  c-0.2,0.2-0.3,0.5-0.5,0.7l0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c-0.1,0-0.1,0-0.2,0C44.6-59.5,44.6-59.8,44.5-60.1z"/>
										<path id="Path_74542" class="st68" d="M26.8-51.9c0.4,0.1,0.7-0.1,1-0.3c0.3-0.2,0.6-0.4,0.9-0.7c0.5-0.5,1-1,1.4-1.6
																			  c0-0.1,0.2,0,0.1,0.1c-0.2,0.3-0.3,0.6-0.5,0.8c-0.4,0.9-1,1.7-1.7,2.4c-0.2,0.2-0.4,0.4-0.6,0.6c-0.1,0.1-0.2,0.2-0.4,0.1
																			  c-0.1-0.1-0.2-0.4-0.2-0.6c-0.1-0.3-0.1-0.5-0.2-0.8C26.6-51.9,26.7-51.9,26.8-51.9C26.7-52,26.8-52,26.8-51.9z"/>
									</g>
								</g>
							</g>
							<g id="Group_9343" transform="translate(0 461.698)">
								<g id="Group_9342">
									<g id="Group_9341">
										<path id="Path_74543" class="st11" d="M192.9-383.2c1.3-1.8,2.9-3.5,5.1-4.1c1.2-0.3,2.4-0.4,3.6-0.5c0.6-0.1,1.3-0.1,1.9,0
																			  c0.6,0.1,1.3,0.2,1.9,0.5c4.2,1.6,7.3,5.5,7.6,10c0.2,2.2-0.4,4.5-1.6,6.3c-1.2,1.8-2.9,3.2-4.9,4.2c0,0,0,0,0,0
																			  c0,0,0,0.1-0.1,0.1c-2.1,0.9-4.5,1.4-6.7,0.9c-2.3-0.4-4.4-1.6-5.7-3.5c-0.7-1-1.3-2.1-1.8-3.2c-0.5-1.1-0.7-2.3-0.8-3.5
																			  c0-0.6-0.1-1.3-0.1-1.9c0-0.6,0-1.3,0.1-1.9C191.5-381,192.2-382.2,192.9-383.2z"/>
										<path id="Path_74544" class="st72" d="M193.8-369.3c-0.7-1-1.3-2.1-1.8-3.2l0,0c3.1,0.6,6.3,0.8,9.4-0.1
																			  c1.6-0.5,3.2-1.3,4.5-2.3c1.4-1.2,2.4-2.7,3-4.3c0.4-1.1,0.7-2.2,1-3.3c0.1-0.5,0.2-1,0.3-1.5c1.7,1.9,2.7,4.2,2.9,6.7
																			  c0.2,2.2-0.4,4.5-1.6,6.3c-1.2,1.8-2.9,3.2-4.9,4.2c0,0,0,0,0,0c0,0,0,0.1-0.1,0.1c-2.1,0.9-4.5,1.4-6.7,0.9
																			  C197.2-366.2,195.1-367.4,193.8-369.3z"/>
										<g id="Group_9340">
											<path id="Path_74545" class="st22" d="M202.3-388.7c0.3,1,0.6,2,1.1,2.9c0.5,0.9,1.1,1.8,1.8,2.6c1.4,1.7,3.1,3.3,4.9,4.6
																				  c0.5,0.4,1.1,0.8,1.7,1.1c0.6,0.4,1.3,0.6,1.9,0.9c0.1,0,0,0.1,0,0.1c-0.6-0.1-1.2-0.4-1.7-0.7c-0.6-0.3-1.1-0.6-1.6-1
																				  c-1-0.7-1.9-1.5-2.8-2.3c-1.6-1.4-3.1-3-4.1-4.9c-0.6-1-1.1-2.2-1.2-3.3C202.2-388.7,202.2-388.7,202.3-388.7
																				  C202.3-388.7,202.3-388.7,202.3-388.7z"/>
											<path id="Path_74546" class="st22" d="M197.9-388.3c0.4,2.8,1.5,5.5,3.2,7.8c1.8,2.5,4.2,4.5,6.8,6.2
																				  c0.7,0.5,1.5,0.9,2.3,1.3c0.9,0.5,1.9,0.9,2.9,1c0.1,0,0.1,0.2,0,0.1c-1.6-0.2-3.2-1-4.6-1.9c-1.4-0.8-2.8-1.8-4-2.8
																				  c-2.3-1.9-4.2-4.3-5.4-7c-0.7-1.5-1.1-3.1-1.3-4.7C197.8-388.3,197.9-388.4,197.9-388.3z"/>
											<path id="Path_74547" class="st22" d="M194-384.7c0.5,3.1,1.9,5.9,3.7,8.4c0.9,1.2,1.9,2.4,3,3.4c1.2,1.3,2.6,2.4,4,3.4
																				  c1.7,1.1,3.6,1.9,5.6,2.1c0.1,0,0.1,0.1,0.1,0.1c0,0,0,0.1-0.1,0.1c-3.7-0.3-6.7-2.5-9.3-5c-2.3-2.2-4.3-4.7-5.6-7.5
																				  c-0.8-1.6-1.3-3.3-1.5-5C193.9-384.8,194-384.8,194-384.7z"/>
											<path id="Path_74548" class="st22" d="M191.1-381c0.1,2.8,1.6,5.2,3.3,7.4c1.7,2.3,3.6,4.4,5.9,6c1.3,1,2.8,1.7,4.3,2.3
																				  c0.1,0,0,0.2-0.1,0.2c-2.7-1.1-5.2-2.7-7.2-4.7c-1-1-2-2.2-2.9-3.3c-0.9-1.1-1.6-2.3-2.3-3.5c-0.7-1.3-1.2-2.8-1.2-4.3
																				  C190.9-381.1,191.1-381.1,191.1-381z"/>
										</g>
									</g>
								</g>
							</g>
						</g>
					</g>
					<g id="Plant" transform="translate(1021.694 2709.268)">
						<path id="Path-133" class="st15" d="M-112.4-211.2c-1.6-2.6,0.5-3.2-0.3-4.6c-0.8-1.4-0.3-2.6,0.5-4.5c0.8-2-1.6-4.5-0.7-4.9
															c0.5-0.2,2.8,1.2,3.9,1.4c1.5,0.4,2.6,0.5,3.4,1.9s0.8,2.2,1.7,3.6c0.9,1.3,1.7,0.1,2.4,3c0.7,2.9-2.5,6.7-5.4,3.9
															C-108.7-208.1-110.8-208.5-112.4-211.2z"/>
						<path id="Combined-Shape" class="st73" d="M-108.5-220.1l-1.5-0.6c0,0-0.1-0.1,0-0.1c0,0,0.1-0.1,0.1,0l1.3,0.6
																  c-0.3-0.6-0.6-1.1-1-1.7c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0.4,0.5,0.7,1.1,1,1.7l0.4-0.9c0,0,0.1-0.1,0.1,0
																  c0,0,0.1,0.1,0,0.1l-0.5,1c0.5,1.1,0.9,2.3,1.1,3.6l0.9-1.7c0,0,0.1-0.1,0.1,0c0,0,0.1,0.1,0,0.1c0,0,0,0,0,0l-1,1.9
																  c0.2,1.3,0.3,2.5,0.4,3.8l2.1-2.1c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1c0,0,0,0,0,0l-2.2,2.2c0,0.3,0,0.7,0,1c0,0,0,0.1-0.1,0.1
																  c0,0-0.1,0-0.1-0.1c0-0.3,0-0.7,0-1l-2.6-1.8c0,0,0-0.1,0-0.1c0,0,0.1,0,0.1,0l2.5,1.7c0-1.3-0.1-2.6-0.4-3.9l-2.3-1
																  c0,0-0.1-0.1,0-0.1c0,0,0.1-0.1,0.1,0l2.2,1C-107.7-217.8-108-219-108.5-220.1z"/>
						<path id="Path-132-Copy" class="st74" d="M-111.7-187c0,0.1-0.1,0.1-0.1,0.1s-0.1-0.1-0.1-0.1c0,0,0,0,0,0
																 c3.2-12.1,4.8-20.2,4.9-24.2c0-0.1,0.1-0.1,0.1-0.1c0.1,0,0.1,0.1,0.1,0.1l0,0C-106.9-207.2-108.5-199.1-111.7-187z"/>
						<path id="Path-133-2" class="st15" d="M-100-199c2.9-1.1,1.6-2.9,3.1-3.4s1.8-1.8,2.4-3.9c0.6-2,4.1-2.5,3.6-3.4
															  c-0.3-0.4-3-0.8-3.9-1.3c-1.4-0.6-2.3-1.3-3.9-0.6s-2,1.3-3.5,1.8c-1.5,0.5-1.4-1-3.8,0.9c-2.3,1.9-2.2,6.9,1.9,6.4
															  C-104.8-198.8-102.9-197.9-100-199z"/>
						<path id="Path" class="st73" d="M-97.5-208.4l1.5,0.4c0,0,0.1,0,0.1-0.1s0-0.1-0.1-0.1l0,0l-1.4-0.4c0.6-0.3,1.2-0.5,1.8-0.7
														c0,0,0.1-0.1,0.1-0.1c0,0-0.1-0.1-0.1-0.1l0,0c-0.6,0.2-1.2,0.4-1.8,0.7l0.2-1c0,0,0-0.1-0.1-0.1s-0.1,0-0.1,0.1c0,0,0,0,0,0
														l-0.2,1.1c-1.1,0.6-2.1,1.3-3.1,2.1l0.4-1.9c0,0,0-0.1-0.1-0.1c0,0-0.1,0-0.1,0.1c0,0,0,0,0,0l-0.4,2.1c-0.9,0.9-1.8,1.8-2.6,2.8
														l-0.4-2.9c0,0,0-0.1-0.1-0.1s-0.1,0-0.1,0.1c0,0,0,0,0,0l0.4,3.1c-0.2,0.3-0.4,0.5-0.6,0.8c0,0,0,0.1,0,0.1c0,0,0.1,0,0.1,0
														c0,0,0,0,0,0c0.2-0.3,0.4-0.5,0.6-0.8l3.2,0.2c0,0,0.1,0,0.1-0.1s0-0.1-0.1-0.1l-3.1-0.2c0.8-1,1.7-1.9,2.7-2.8l2.4,0.6
														c0,0,0.1,0,0.1-0.1s0-0.1-0.1-0.1l-2.3-0.6C-99.6-207.1-98.6-207.8-97.5-208.4z"/>
						<path id="Path-132-Copy-2" class="st74" d="M-112.8-187.6c0,0.1,0,0.1,0.1,0.2s0.1,0,0.2-0.1l0,0c3.2-6.7,6.1-11.6,8.6-14.9
																   c0-0.1,0-0.1,0-0.2c-0.1,0-0.1,0-0.2,0l0,0C-106.7-199.2-109.6-194.3-112.8-187.6z"/>
						<path id="Path-133-3" class="st15" d="M-117.2-197.3c-1.5-1-0.8-1.6-1.6-3.6c-0.5-1.2-1.4-1.3-1.9-2.3c-0.5-1,0.2-2.9-0.4-3.6
															  c-0.8-1.2-1.7-1.9-2.6-2.1c1.7-1.6,3-2.3,4-2.2c1.5,0.2,2.1,1.5,3.9,2.2c1.8,0.8,1.7-0.4,3.4,0.9s-0.1,2.3,2.4,3.6
															  c2.5,1.3,1.5,5.5-2.4,4.3C-112.5-196.3-115.6-196.3-117.2-197.3z"/>
						<path id="Path-2" class="st73" d="M-117.9-206.9l-1.6,0.1c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0.1-0.1l0,0l1.4-0.1
														  c-0.5-0.4-1.1-0.7-1.6-1c0,0-0.1-0.1,0-0.1s0.1-0.1,0.1,0l0,0c0.6,0.3,1.1,0.6,1.7,1l0-1c0,0,0-0.1,0.1-0.1s0.1,0,0.1,0.1
														  c0,0,0,0,0,0l0,1.1c1,0.8,1.9,1.7,2.6,2.6l0-2c0,0,0-0.1,0.1-0.1c0,0,0.1,0,0.1,0.1c0,0,0,0,0,0l0,2.2c0.8,1,1.5,2.1,2.1,3.2
														  l0.9-2.8c0,0,0.1-0.1,0.1-0.1c0,0,0.1,0.1,0.1,0.1l0,0l-0.9,3c0.2,0.3,0.3,0.6,0.5,0.9c0,0,0,0.1,0,0.1c0,0-0.1,0-0.1,0
														  c0,0,0,0,0,0c-0.2-0.3-0.3-0.6-0.5-0.9l-3.2-0.4c0,0-0.1,0-0.1-0.1s0-0.1,0.1-0.1c0,0,0,0,0,0l3.1,0.3c-0.6-1.1-1.3-2.2-2.1-3.2
														  l-2.5,0.2c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0.1-0.1l2.4-0.2C-116.1-205.3-117-206.2-117.9-206.9z"/>
						<path id="Path-3" class="st74" d="M-110.9-187.1c0,0.1-0.1,0.1-0.1,0.1c-0.1,0-0.1-0.1-0.1-0.1c0.9-4.9,0.5-9.1-1.4-12.7
														  c0-0.1,0-0.1,0.1-0.2s0.1,0,0.2,0.1C-110.5-196.3-110-192-110.9-187.1z"/>

						<rect id="Rectangle" x="-113.9" y="-192.6" transform="matrix(0.3095 -0.9509 0.9509 0.3095 99.6882 -235.1355)" class="st75" width="3.7" height="12.7"/>
						<path id="Rectangle-Copy-12" class="st76" d="M-117.9-186.2l10.6,3.4l-4.3,8.2l-7.6-2.5L-117.9-186.2z"/>
					</g>
				</g>
			</svg>


			<!-- 			<img class="mt-3 mb-3" src="<?php bloginfo('template_directory'); ?>/images/intromob.png" style="height:370px!important;width:100%"> -->
			<p class="text-xl-center" style="color:#000;font-size:17px;text-align:left;width:100%">
				Your Fertilligence journey starts with this interactive quiz, designed to quickly assess your current fertility lifestyle.
			</p>


		</div>

		<a  id="StartTheQuiz" class="btn  btn-lg center-block mt-5 mb-4 submitQuestion question" >

			<h3 class="text-center">Start The Quiz</h3>
		</a>


	</div>
	<!--------quiz0------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q0">
		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">1</h6>
				</div>
				<p class="p-qiuz">How long have you been trying to get pregnant?</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">
				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition1" value="8" data-answer="Less than 6 month" type="radio" data-value="1" data-qNumber="0" class="form-check-input question" name="optradio0">
							Less than 6 month
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition2" value="0" data-answer="6-12 months" type="radio" data-value="2" data-qNumber="0" class="form-check-input question" name="optradio0">
							6-12 months
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition3" value="0" data-answer="More than 12 months" type="radio" data-value="3" data-qNumber="0" class="form-check-input question" name="optradio0">
							More than 12 months
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition3" value="0" data-answer="Not trying" type="radio" data-value="4" data-qNumber="0" class="form-check-input question" name="optradio0">
							Not trying
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6 text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg14.png" class="mt-xl-n4"> 

			</div>

		</div>

		<!-- 		<div class="col-10 mx-auto mt-3 mt-xl-0" style="height:20%">
<div class="progress  mx-auto p-0">
<div class="progress-bar" style="width:1%"></div>
</div>
</div> -->

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row  mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="13">

			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="12">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>
	</div>

	<!--------quiz1------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q1">



		<div class="col-12  col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex  h120">
				<div class="number">
					<h6 class="m-0 pink-color">2</h6>
				</div>
				<p class="p-qiuz">I follow a healthy diet designed to optimize my chances of fertility</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition1" value="8" data-answer="Sure thing" type="radio" data-value="20" data-qNumber="1" class="form-check-input question" name="optradio1">
							Sure thing
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition2" value="0" data-answer="Hmm,unsure" type="radio" data-value="5" data-qNumber="1" class="form-check-input question" name="optradio1">
							Hmm,unsure
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="nutrition3" value="0" data-answer="Probably not" type="radio" data-value="5" data-qNumber="1" class="form-check-input question" name="optradio1">
							Probably not
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6 text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg1.png"  class="mt-xl-n4"> 


			</div>

		</div>
		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row  mt-75" style="align-items: center">

			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="1">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">

			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:8.69231%"></div>
			</div>
			<div class="col-1">

			</div>

			<!--  			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="1">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a>  -->


		</div>






	</div>
	<!--------quiz2------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q2">


		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">3</h6>
				</div>
				<p class="p-qiuz">I drink at least 64 oz. of water per day (can include unsweetened, non-caffeinated,
					non-alcoholic beverages)</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="hydration1" value="8" data-answer="Absolutely" type="radio" data-value="20" data-qNumber="2" class="form-check-input question" name="optradio2">
							Absolutely
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="hydration2" value="0" data-answer="Probably not" type="radio" data-value="5" data-qNumber="2" class="form-check-input question" name="optradio2">
							Probably not
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6 text-center  text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg2.png"  class="mt-xl-n4"> 


			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="2">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>
			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="2">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>




	</div>
	<!--------quiz3------------------>
	<div class="col-lg-12 quiz-form  p-xl-0" id="q3">




		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">4</h6>
				</div>
				<p class="p-qiuz">I exercise for at least 30 minutes, mixing cardio and strength training</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="exercise1" value="8" data-answer="3-5 times a week" type="radio" data-value="20" data-qNumber="3" class="form-check-input question" name="optradio3">
							3-5 times a week
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="exercise2" value="3" data-answer="Once a week" type="radio" data-value="10" data-qNumber="3" class="form-check-input question" name="optradio3">
							Once a week
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="exercise3" value="0" data-answer="Rarely" type="radio" data-value="5" data-qNumber="3" class="form-check-input question" name="optradio3">
							Rarely
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg3.png"  class="mt-xl-n4"> 


			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer" data-bNumber="3">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important" >
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="3">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>



	</div>
	<!--------quiz4------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q4">




		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">5</h6>
				</div>
				<p class="p-qiuz">I get 7-9 hours of sleep a night</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="sleep1" value="8" data-answer="Daily" type="radio" data-value="20" data-qNumber="4" class="form-check-input question" name="optradio4">
							Daily
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="sleep2" value="3" data-answer="3-5 times a week" type="radio" data-value="10" data-qNumber="4" class="form-check-input question" name="optradio4">
							3-5 times a week
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="sleep3" value="0" data-answer="Rarely" type="radio" data-value="5" data-qNumber="4" class="form-check-input question" name="optradio4">
							Rarely
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg4.png" class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="4">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="4">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>

	</div>
	<!--------quiz5------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q5">


		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">6</h6>
				</div>
				<p class="p-qiuz">I take fertility related supplements</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="supplements1" value="8" data-answer="Daily" type="radio" data-value="20" data-qNumber="5" class="form-check-input question" name="optradio5">
							Daily
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="supplements2" value="3" data-answer="3-5 times a week"  type="radio" data-value="10" data-qNumber="5" class="form-check-input question" name="optradio5">3-5 times a week
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="supplements3" data-answer="Rarely" value="0" type="radio" data-value="5" data-qNumber="5" class="form-check-input question" name="optradio5">
							Rarely
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6 text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg13.png" class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="5">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>


			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="5">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>

	</div>
	<!--------quiz6------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q6">


		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">7</h6>
				</div>
				<p class="p-qiuz">I feel that my stress level is</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="stress1" value="0" data-answer="High" type="radio" data-value="5" data-qNumber="6" class="form-check-input question" name="optradio6">
							High
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="stress2" value="3" data-answer="Medium" type="radio" data-value="10" data-qNumber="6" class="form-check-input question" name="optradio6">Medium
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="stress3" value="8" data-answer="Low" type="radio" data-value="20" data-qNumber="6" class="form-check-input question" name="optradio6">Low
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg6.png" class="mt-xl-n4"> 


			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="6">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="6">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>

	</div>
	<!--------quiz7------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q7">



		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">8</h6>
				</div>
				<p class="p-qiuz">I feel happy, calm, optimistic</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="mood1" value="8" data-answer="Every day" type="radio" data-value="20" data-qNumber="7" class="form-check-input question" name="optradio7">
							Every day
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="mood2" value="3" data-answer="A few days a week" type="radio" data-value="10" data-qNumber="7" class="form-check-input question" name="optradio7">
							A few days a week
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="mood3" value="3" data-answer="A few days a month" type="radio" data-value="5" data-qNumber="7" class="form-check-input question" name="optradio7">
							A few days a month
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="mood4" value="0" data-answer="Rarely" type="radio" data-value="5" data-qNumber="7" class="form-check-input question" name="optradio7">
							Rarely
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg7.png"  class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer" data-bNumber="7">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important" >
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="7">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>

	</div>
	<!--------quiz8------------------>
	<div class="col-lg-12 quiz-form p-xl-0" id="q8">




		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">9</h6>
				</div>
				<p class="p-qiuz">I feel that my connection to my partner is</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">

				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="partnerconnection1" data-answer="Strong" value="20" type="radio" data-value="20" data-qNumber="8" class="form-check-input question" name="optradio8">Strong
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="partnerconnection2" data-answer="Average" value="10" type="radio" data-value="10" data-qNumber="8" class="form-check-input question" name="optradio8">Average
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="partnerconnection3" value="5" data-answer="Has been better" type="radio" data-value="5" data-qNumber="8" class="form-check-input question" name="optradio8">Has been better </label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg8.png" class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="8">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="8">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>

	</div>
	<!--------quiz9------------------>
	<div class="col-lg-12 quiz-form  p-xl-0" id="q9">
		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">10</h6>
				</div>
				<p class="p-qiuz">I minimize exposure to smoking, chemicals, and other environmental hazards</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">
				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="environment1" value="8" data-answer="I think so" type="radio" data-value="10" data-qNumber="9" class="form-check-input question" name="optradio9">
							I think so
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="environment2" value="0" data-answer="I am not sure" type="radio" data-value="5" data-qNumber="9" class="form-check-input question" name="optradio9">
							I am not sure
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg5.png"  class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="9">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="9">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>

	</div>
	<!--------quiz10------------------>
	<div class="col-lg-12 quiz-form  p-xl-0" id="q10">



		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">11</h6>
				</div>
				<p class="p-qiuz">My weight is within a healthy range</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">
				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="weight1" value="8" data-answer="Pretty sure it is" type="radio" data-value="20" data-qNumber="10" class="form-check-input question" name="optradio10">Pretty
							sure it is
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="weight2" value="0" data-answer="I'm unsure what a healthy range is"  type="radio" data-value="5" data-qNumber="10" class="form-check-input question" name="optradio10">I'm
							unsure what a healthy range is
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="weight3" value="0" data-answer="I do not think it is" type="radio" data-value="5" data-qNumber="10" class="form-check-input question" name="optradio10">I do
							not think it is
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg10.png"  class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="10">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="10">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>


	</div>
	<!--------quiz11------------------>
	<div class="col-lg-12 quiz-form  p-xl-0" id="q11">




		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">12</h6>
				</div>
				<p class="p-qiuz">I am tracking my ovulation and ovulate properly</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">
				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="ovulation1" value="8" data-answer="Yes" type="radio" data-value="20" data-qNumber="11" class="form-check-input question" name="optradio11">
							Yes
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="ovulation2" value="0" data-answer="No" type="radio" data-value="5" data-qNumber="11" class="form-check-input question" name="optradio11">No
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="ovulation3" value="0" data-answer="Not relevant(I am male)"  type="radio" data-value="5" data-qNumber="11" class="form-check-input question" name="optradio11">
							Not relevant(I am male)
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg11.png"  class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="11">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="11">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>








	</div>
	<!--------quiz12------------------>
	<div class="col-lg-12 quiz-form  p-xl-0" id="q12">


		<div class="col-12 col-xl-10 mx-auto p-0">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>

			<div class="d-flex h120">
				<div class="number">
					<h6 class="m-0 pink-color">13</h6>
				</div>
				<p class="p-qiuz">I believe my partner's health and lifestyle is</p>
			</div>
		</div>
		<div class="col-12 d-flex Qbody col-xl-11 mx-auto">

			<div class="col-12 col-xl-6 formcheckpos">
				<div class="form-check">
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="partnerlifestyle1" value="8" data-answer="Better than mine"  type="radio" data-value="20" data-qNumber="12" class="form-check-input question" name="optradio12">
							Better than mine
						</label>

					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="partnerlifestyle2" value="3" data-answer="Probably the same"  type="radio" data-value="10" data-qNumber="12" class="form-check-input question" name="optradio12">Probably the same
						</label>
					</div>
					<div class="m-xl-5 mb-3 mb-sm-0 mb-xl-n4">
						<label class="form-check-label label">
							<input id="partnerlifestyle3" value="0" data-answer="Probably worse than mine" type="radio" data-value="5" data-qNumber="12" class="form-check-input question" name="optradio12">Probably worse than mine
						</label>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-6  text-center text-xl-right">
				<img src="<?php bloginfo('template_directory'); ?>/images/qimg12.png"  class="mt-xl-n4"> 

			</div>

		</div>

		<div class="col-12 col-xl-10 m-0 mt-3 mt-xl-n5 p-0 pl-xl-5 row mt-75" style="align-items: center">
			<div class="back-button col-1 p-0" style="display:flex;justify-content: flex-end;cursor: pointer"  data-bNumber="12">
				<img src="<?php bloginfo('template_directory'); ?>/images/arrowback.svg" style="height:14px!important;width: 43px!important">
			</div>
			<div class="col-xl-8 progress p-0 col-10">
				<div class="progress-bar" style="width:1%"></div>
			</div>
			<div class="col-1">

			</div>

			<!-- 			<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="12">
<i class="fa fa-arrow-left"></i>
<h3 class="text-center">Back</h3>
</a> -->

		</div>


	</div>


	<!--------quiz14------------------>
	<div class="col-lg-12 quiz-form " id="q13">
		<div class="p-0 col-11 col-xl-7 mx-auto text-center">
			<h6 class="text-center pnew mb-4 mb-xl-5">
				Fertilligence Lifestyle Quiz
			</h6>
			<p style="color:#000;font-size:17px;width:100%">
				Thank you! While we crunch your numbers ...
			</p>
			<!--  			<p class="p-qiuz" style="font-weight:400">
<span class="blue-color pey-title">Enter your email address below for your FREE fertility lifestyle results.</span><br>
<span style="font-size:11px!important">By submitting my email address I agree to receive emails with more information about the Fertilligence platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and I understand I can unsubscribe at any time.</span>
</p>  -->

			<img class="mt-3 mb-3 max-width-100" src="<?php bloginfo('template_directory'); ?>/images/res.gif">
						<svg class="sa-arrow-down d-none d-sm-block" enable-background="new 0 0 128 128" height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
																				<path id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path>
						</svg>
			
			
			<p id="textBeforeEmailBox" class="text-xl-center" style="color:#000;font-size:17px;text-align:left;width:100%">
				Please share your email address to get your free fertility lifestyle report.
			</p>

			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="mb-5 mt-5">
						<!-- 						<img class="emaillogo" src="<?php bloginfo('template_directory'); ?>/images/emaillogo.svg">  -->
						<!-- 						<label class="form-check-label label">Email:</label> -->
						<input id="emailForQuiz" type="email" class="emailForQuiz col-12 col-xl-8-sa" name="optradio" placeholder="Email" style="height:52px;border: 1px solid #EEEEEE!important;border-radius:9px;box-shadow: 0 8px 25px rgba(0,0,0,0.1);background:url('<?php bloginfo('template_directory'); ?>/images/emaillogo.svg') no-repeat center right;background-position-x: 95%">


					</div>

				</div>
			</div>
		</div>

		<a  id="submitQuestion" class="btn  btn-lg center-block mt-3 mb-4 submitQuestion">
		
			<h3 class="text-center">Submit and Proceed</h3>
		</a>

		<p class="col-xl-8 mx-auto sapara" style="width:100%">
			By submitting my email address I agree to receive emails with more information about the Fertilligence platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and I understand I can unsubscribe at any time.
		</p>
	</div>


</div>




<script>



	var quizform = document.querySelector("#quiz-form-new")
	if (quizform) {

		var results = [];
		$('.quiz-form').hide();
		$('#StartTheQuizSection').show();
		$('#StartTheQuiz').click(function(e) {

			$('#StartTheQuizSection').hide();
			$('#q0').fadeIn();
		});



		window.checkme = 0;
		$('.question').click(function(e) {
			window.checkme++;
			var questionNumber = parseInt(this.dataset.qnumber);
			var questionValue = parseInt(this.dataset.value);


			var score = 0;
			$('#q' + questionNumber).hide();
			$('#q' + (questionNumber + 1)).fadeIn();

			$('.progress-bar').css('width',((((questionNumber+1)*100)/13)+1)+'%');
			$('.progress-bar').css('background-img',"../images/prog.png");
			$('.progress-bar::after').css('right',0);


		});
		$('.back-button').click(function() {
			var questionNumber = parseInt(this.dataset.bnumber);
			console.log(questionNumber)
			$('#q' + questionNumber).hide();
			$('#q' + (questionNumber - 1)).fadeIn();
			var prevQuestion=(questionNumber - 1);
			$('.progress-bar').css('width',((((prevQuestion)*100)/13)+1)+'%');
			$('.progress-bar::after').css('background-img',"../images/prog.png");
			$('.progress-bar::after').css('right',0);

		});


	}


	$('#submitQuestion').click(function(){
		gtag('event', 'Quiz_form_Submitted', {
			'event_callback': console.log('done')
		});
		var answer1 = $('[name=optradio1]:checked').data('answer')
		var answer2 = $('[name=optradio2]:checked').data('answer')
		var answer3 = $('[name=optradio3]:checked').data('answer')
		var answer4 = $('[name=optradio4]:checked').data('answer')
		var answer5 = $('[name=optradio5]:checked').data('answer')
		var answer6 = $('[name=optradio6]:checked').data('answer')
		var answer7 = $('[name=optradio7]:checked').data('answer')
		var answer8 = $('[name=optradio8]:checked').data('answer')
		var answer9 = $('[name=optradio9]:checked').data('answer')
		var answer10 = $('[name=optradio10]:checked').data('answer')
		var answer11 = $('[name=optradio11]:checked').data('answer')
		var answer12 = $('[name=optradio12]:checked').data('answer')
		var answer13 = $('[name=optradio0]:checked').data('answer')

		var answerValue1 = $('[name=optradio1]:checked').data('value')
		var answerValue2 = $('[name=optradio2]:checked').data('value')
		var answerValue3 = $('[name=optradio3]:checked').data('value')
		var answerValue4 = $('[name=optradio4]:checked').data('value')
		var answerValue5 = $('[name=optradio5]:checked').data('value')
		var answerValue6 = $('[name=optradio6]:checked').data('value')
		var answerValue7 = $('[name=optradio7]:checked').data('value')
		var answerValue8 = $('[name=optradio8]:checked').data('value')
		var answerValue9 = $('[name=optradio9]:checked').data('value')
		var answerValue10 = $('[name=optradio10]:checked').data('value')
		var answerValue11 = $('[name=optradio11]:checked').data('value')
		var answerValue12 = $('[name=optradio12]:checked').data('value')
		var answerValue13 = $('[name=optradio0]:checked').data('value')


		var participantEmail = $('#emailForQuiz').val();
		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if (testEmail.test(participantEmail)) {
			console.log(participantEmail);
			$('#submitQuestion').prop('disabled', true);
			$('#submitQuestion h3').html('Please Wait...');
			$('#emailForQuiz').hide();
			$('#textBeforeEmailBox').hide();

			$.ajax({
				url: "https://fertilligence.com/wp-json/nxm/Subscribe",
				method: "POST",
				data: {
					fname: '-',
					lname: '--',
					email: participantEmail,
					quest_1_answer: answer1,
					quest_2_answer: answer2,
					quest_3_answer: answer3,
					quest_4_answer: answer4,
					quest_5_answer: answer5,
					quest_6_answer: answer6,
					quest_7_answer: answer7,
					quest_8_answer: answer8,
					quest_9_answer: answer9,
					quest_10_answer: answer10,
					quest_11_answer: answer11,
					quest_12_answer: answer12,
					quest_13_answer: answer13,
					results: results,
				},
				success: function(response) {
					console.log(response)
					window.location.href = 'https://fertilligence.com/quiz-submit/?a='+answerValue1+'-'+answerValue2+'-'+answerValue3+'-'+answerValue4+'-'+answerValue5+'-'+answerValue6+'-'+answerValue7+'-'+answerValue8+'-'+answerValue9+'-'+answerValue10+'-'+answerValue11+'-'+answerValue12 + '-' +answerValue13;
				},
				error: function(response) {
					console.log(response)
				}
			});

		} else {
			$('#emailForQuiz').val('');
			$('#emailForQuiz').focus();
		}



	})



</script>

<script>

	var lastScrollTop = 0;
	// 	$(window).scroll(function(event){
	// 		var st = $(this).scrollTop();
	// 		var scHeight=$( window ).height();
	// 		var footerHeight=$( 'footer' ).height();
	// 		var maScrollDown=0;
	// 		if (st>(footerHeight/2)){
	// 			maScrollDown=1;
	// 		}
	// 		if (st > lastScrollTop){
	// 			console.log('-------------------');
	// 			console.log('scroll-top');
	// 			console.log(st);
	// 			console.log('lastScrollTop');
	// 			console.log(lastScrollTop);	
	// 			console.log($( window ).height());
	// 			console.log('maScrollDown');
	// 			console.log(maScrollDown);	
	// 			console.log($( 'footer' ).height());
	// 			console.log('-------------------');

	// 		} else {
	// 			console.log('-------------------');

	// 			console.log('scroll-top');
	// 			console.log(st);
	// 			console.log('lastScrollTop');
	// 			console.log(lastScrollTop);	
	// 			console.log($( window ).height());
	// 			console.log('maScrollDown');
	// 			console.log(maScrollDown);	
	// 			console.log($( 'footer' ).height());
	// 			console.log('-------------------');

	// 		}
	// 		lastScrollTop = st;
	// 	});
	var showme=0;
	var maScrollDown=0;
// 	if ($(window).width() <1024   ) {
// 		$(window).scroll(function(event){

// 			var st = $(this).scrollTop();
// 			var scHeight=$( window ).height();
// 			var footerHeight=$( 'footer' ).height();

// 			if (st>(footerHeight/2)){
// 				maScrollDown=1;
// 			}

// 			var scHeight=$( window ).height();
// 			var st = $(this).scrollTop();
// 			if (st > lastScrollTop){
// 				// downscroll code
// 			} else {
// 				if ((st<5)&& (maScrollDown==1)){
// 					if (showme==0){
// 						$('#modalsa').modal('show');
// 						showme=1;
// 					}
// 				}
// 				console.log(st);
// 			}
// 			lastScrollTop = st;
// 		});
// 	}

	$(document).bind("mouseleave", function(e) {
		console.log(e.pageY);
		if (e.pageY - $(window).scrollTop() <= 1)
		{
			if (showme==0){
				$('#modalsa').modal('show');
				showme=1;
			}

		}
	});
	
	$('.form-check-input').click(function(e){
		var thisId=$(this).attr('id');
		var shown=0;
		if (thisId=='er5'){
			$('#popupMessageToShow').html('<span class="ExtraDetailForSurveyModal">Please share your email to subscribe to  <b>Fertility Lifestyle Newsletter</b> and check out our <b><a style="color: inherit;" href="/resources">Resource Library</a></b></span>');
			shown=1;
		}else if (thisId=='er6'){
			$('#popupMessageToShow').html('<span class="ExtraDetailForSurveyModal">Please share your email to subscribe to <b>Fertility Lifestyle Newsletter</b>.</span>');
			shown=1;
		}else if (thisId=='er7'){
			$('#popupMessageToShow').html('<span class="ExtraDetailForSurveyModal">Please share your email to subscribe to <b>Fertility Lifestyle Newsletter</b>.</span>');
			shown=1;
		}else if (thisId=='er8'){
			$('#popupMessageToShow').html('<span class="ExtraDetailForSurveyModal">Please share your email to <b>receive promotional discounts</b>.</span>');
			shown=1;
		}else if (thisId=='er9'){
			$('#popupMessageToShow').html('<span class="ExtraDetailForSurveyModal">Thank You.</span>');
			shown=0;
		}else{
			$('#popupMessageToShow').html('');
			shown=0;
		}		
		$('#popupMessageToShow').fadeIn();
		if (shown==1){
			$('#popemail2').fadeIn();
			$('#checkMe2').fadeIn();
			$('#checkboxlabel').fadeIn();
			
		}else{
			$('#popemail2').fadeOut();
			$('#checkMe2').fadeOut();
			$('#checkboxlabel').fadeOut();
			
		}
		$('#postme2').fadeIn();
		
	   console.log(thisId);
	});
	
// 	$('#checkMe2').click(function(){
// 		$('#postme2').toggleClass('d-none');
// 	});
	
	$('#postme2').click(function(e){
		e.preventDefault();
		$('#postme2').prop('disabled', true);
		$('#postme2').val('Please Wait...');
		var radioValue1 = $("input[name='popupQ1']:checked"). val();
		var radioValue2 = $("input[name='popupQ2']:checked"). val();
		
		var popupEmail = $('#popemail2').val();
		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		console.log('popupEmail');
		if (popupEmail!==''){
			console.log('level1');
			if (testEmail.test(popupEmail)) {
				console.log('level2');
				if($("#checkMe2").is(':checked')){
					console.log('level3-1');
					$.ajax({
						url: "https://fertilligence.com/wp-json/nxm/SubscribeQuizForm",
						method: "POST",
						data: {
							fname: '-',
							lname: '--',
							email: popupEmail,
							q1 : radioValue1,
							q2 : radioValue2
						},
						success: function(res) {
							console.log(res)
							$("#thankyou").fadeOut();
							$("#join").fadeOut();
							$("#quizPageQuitForm").fadeOut();
							// 								$("#automodal > div > div > div.modal-body > form > div.form-group.text-center > div").fadeOut();
							$("#myHr").fadeOut();
							$("#thankyou").text("THANKS!");
							$("#join").html("Check your inbox for more information from Fertilligence.");
							$("#thankyou").fadeIn();
							$("#join").fadeIn();
						},
						error: function(response) {
							console.log(response)
						}
					});
				}else{
					console.log('level3-2');
					$("#checkMe2").addClass('checkThisError');
					$('#postme2').prop('disabled', false);
					$('#postme2').val('Submit');
				}
				
			}	
		}else{
			$.ajax({
				url: "https://fertilligence.com/wp-json/nxm/SubscribeQuizForm",
				method: "POST",
				data: {
					fname: '-',
					lname: '--',
					email: '---',
					q1 : radioValue1,
					q2 : radioValue2
				},
				success: function(res) {
					console.log(res)
					$("#thankyou").fadeOut();
					$("#join").fadeOut();
					$("#quizPageQuitForm").fadeOut();
					// 								$("#automodal > div > div > div.modal-body > form > div.form-group.text-center > div").fadeOut();
					$("#myHr").fadeOut();
					$("#thankyou").text("THANKS!");
					$("#join").html("Check your inbox for more information from Fertilligence.");
					$("#thankyou").fadeIn();
					$("#join").fadeIn();
				},
				error: function(response) {
					console.log(response)
				}
			});
		}

			



	});

</script>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - https://optinmonster.com -->
<!-- <script type="text/javascript" src="https://a.omappapi.com/app/js/api.min.js" data-account="91354" data-user="81219" async></script> -->
<!-- / https://optinmonster.com -->

<?php

get_footer();

?>