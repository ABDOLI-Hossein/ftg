<?php
/**
 * Template Name: NEXMARK Made Quiz
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

	.quiz-form {
		margin-top: 90px;
		height: 480px;
	}

	.submitQuestion {
		font-size: 18px !important;
		border-style: solid !important;
		text-decoration: none !important;
		border-radius: 30px !important;
		background-color: #ed1067;
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
	@media only screen and (max-width:1024px){
		#q13{
			margin-bottom: 180px;
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

						<div class="form-group text-center">
							<input type="email" class="form-control col-8 col-lg-12 mx-auto mt-4" id="popemail2" aria-describedby="emailHelp" placeholder="Email address">
							<p class="form-validate pt-3"></p>
							<div class="checkbox mt-4 text-left">
								<label><input type="checkbox" value="" id="checkMe2"> By submitting my email address I agree to receive emails with more information about the Fertilligence platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and I understand I can unsubscribe at any time.</label>
							</div>
						</div>
						<div class="col-12 d-flex justify-content-center mt-4 mb-4">
							<input name="submit" type="submit" class="btn btn-primary btn-lg d-none" id="postme2" value="Submit"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




<div id="quiz-form-new" style="margin: 50px auto;">

	<!--------quiz1------------------>
	<div class="col-lg-12 quiz-form" id="q1">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I follow a healthy diet designed to optimize my chances of fertility</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="nutrition1" value="8" data-answer="Sure thing" type="radio" data-value="20" data-qNumber="1" class="form-check-input question" name="optradio1">
							Sure thing
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="nutrition2" value="0" data-answer="Hmm,unsure" type="radio" data-value="5" data-qNumber="1" class="form-check-input question" name="optradio1">
							Hmm,unsure
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="nutrition3" value="0" data-answer="Probably not" type="radio" data-value="5" data-qNumber="1" class="form-check-input question" name="optradio1">
							Probably not
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--------quiz2------------------>
	<div class="col-lg-12 quiz-form " id="q2">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I drink at least 64 oz. of water per day (can include unsweetened, non-caffeinated,
				non-alcoholic beverages)</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="hydration1" value="8" data-answer="Absolutely" type="radio" data-value="20" data-qNumber="2" class="form-check-input question" name="optradio2">
							Absolutely
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="hydration2" value="0" data-answer="Probably not" type="radio" data-value="5" data-qNumber="2" class="form-check-input question" name="optradio2">
							Probably not
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:8.333333333333333%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="2">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz3------------------>
	<div class="col-lg-12 quiz-form" id="q3">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I exercise for at least 30 minutes, mixing cardio and strength training</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="exercise1" value="8" data-answer="3-5 times a week" type="radio" data-value="20" data-qNumber="3" class="form-check-input question" name="optradio3">
							3-5 times a week
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="exercise2" value="3" data-answer="Once a week" type="radio" data-value="10" data-qNumber="3" class="form-check-input question" name="optradio3">
							Once a week
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="exercise3" value="0" data-answer="Rarely" type="radio" data-value="5" data-qNumber="3" class="form-check-input question" name="optradio3">
							Rarely
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:16.66666666666667%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="3">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz4------------------>
	<div class="col-lg-12 quiz-form " id="q4">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I get 7-9 hours of sleep a night</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="sleep1" value="8" data-answer="Daily" type="radio" data-value="20" data-qNumber="4" class="form-check-input question" name="optradio4">
							Daily
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="sleep2" value="3" data-answer="3-5 times a week" type="radio" data-value="10" data-qNumber="4" class="form-check-input question" name="optradio4">
							3-5 times a week
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="sleep3" value="0" data-answer="Rarely" type="radio" data-value="5" data-qNumber="4" class="form-check-input question" name="optradio4">
							Rarely
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:25%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="4">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz5------------------>
	<div class="col-lg-12 quiz-form" id="q5">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I take fertility related supplements</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="supplements1" value="8" data-answer="Daily" type="radio" data-value="20" data-qNumber="5" class="form-check-input question" name="optradio5">
							Daily
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="supplements2" value="3" data-answer="3-5 times a week"  type="radio" data-value="10" data-qNumber="5" class="form-check-input question" name="optradio5">3-5 times a week
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="supplements3" data-answer="Rarely" value="0" type="radio" data-value="5" data-qNumber="5" class="form-check-input question" name="optradio5">
							Rarely
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:33.33333333333333%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="5">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz6------------------>
	<div class="col-lg-12 quiz-form " id="q6">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I feel that my stress level is</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="stress1" value="0" data-answer="High" type="radio" data-value="5" data-qNumber="6" class="form-check-input question" name="optradio6">
							High
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="stress2" value="3" data-answer="Medium" type="radio" data-value="10" data-qNumber="6" class="form-check-input question" name="optradio6">Medium
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="stress3" value="8" data-answer="Low" type="radio" data-value="20" data-qNumber="6" class="form-check-input question" name="optradio6">Low
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:41.66666666666667%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="6">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz7------------------>
	<div class="col-lg-12 quiz-form " id="q7">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I feel happy, calm, optimistic</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="mood1" value="8" data-answer="Every day" type="radio" data-value="20" data-qNumber="7" class="form-check-input question" name="optradio7">
							Every day
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="mood2" value="3" data-answer="A few days a week" type="radio" data-value="10" data-qNumber="7" class="form-check-input question" name="optradio7">
							A few days a week
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="mood3" value="3" data-answer="A few days a month" type="radio" data-value="5" data-qNumber="7" class="form-check-input question" name="optradio7">
							A few days a month
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="mood4" value="0" data-answer="Rarely" type="radio" data-value="5" data-qNumber="7" class="form-check-input question" name="optradio7">
							Rarely
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:58.33333333333333%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="7">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz8------------------>
	<div class="col-lg-12 quiz-form" id="q8">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I feel that my connection to my partner is</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerconnection1" data-answer="Strong" value="20" type="radio" data-value="20" data-qNumber="8" class="form-check-input question" name="optradio8">Strong
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerconnection2" data-answer="Average" value="10" type="radio" data-value="10" data-qNumber="8" class="form-check-input question" name="optradio8">Average
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerconnection3" value="5" data-answer="Has been better" type="radio" data-value="5" data-qNumber="8" class="form-check-input question" name="optradio8">Has been better </label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:66.66666666666666%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="8">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz9------------------>
	<div class="col-lg-12 quiz-form" id="q9">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I minimize exposure to smoking, chemicals, and other environmental hazards</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="environment1" value="8" data-answer="I think so" type="radio" data-value="20" data-qNumber="9" class="form-check-input question" name="optradio9">
							I think so
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="environment2" value="0" data-answer="I am not sure" type="radio" data-value="5" data-qNumber="9" class="form-check-input question" name="optradio9">
							I am not sure
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:75%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="9">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz10------------------>
	<div class="col-lg-12 quiz-form " id="q10">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">My weight is within a healthy range</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="weight1" value="8" data-answer="Pretty sure it is" type="radio" data-value="20" data-qNumber="10" class="form-check-input question" name="optradio10">Pretty
							sure it is
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="weight2" value="0" data-answer="I'm unsure what a healthy range is"  type="radio" data-value="5" data-qNumber="10" class="form-check-input question" name="optradio10">I'm
							unsure what a healthy range is
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="weight3" value="0" data-answer="I do not think it is" type="radio" data-value="5" data-qNumber="10" class="form-check-input question" name="optradio10">I do
							not think it is
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:83.33333333333333%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="10">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz11------------------>
	<div class="col-lg-12 quiz-form" id="q11">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I am tracking my ovulation and ovulate properly</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="ovulation1" value="8" data-answer="Yes" type="radio" data-value="20" data-qNumber="11" class="form-check-input question" name="optradio11">
							Yes
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="ovulation2" value="0" data-answer="No" type="radio" data-value="5" data-qNumber="11" class="form-check-input question" name="optradio11">No
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="ovulation3" value="0" data-answer="Not relevant(I am male)"  type="radio" data-value="5" data-qNumber="11" class="form-check-input question" name="optradio11">
							Not relevant(I am male)
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:91.66666666666666%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="11">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>
	<!--------quiz12------------------>
	<div class="col-lg-12 quiz-form " id="q12">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">I believe my partner's health and lifestyle is</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle1" value="8" data-answer="Better than mine"  type="radio" data-value="20" data-qNumber="12" class="form-check-input question" name="optradio12">
							Better than mine
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle2" value="3" data-answer="Probably the same"  type="radio" data-value="10" data-qNumber="12" class="form-check-input question" name="optradio12">Probably the same
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle3" value="0" data-answer="Probably worse than mine" type="radio" data-value="5" data-qNumber="12" class="form-check-input question" name="optradio12">Probably worse than mine
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:100%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="12">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>

	<!--------quiz13------------------>
	<div class="col-lg-12 quiz-form " id="q13">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz">How long have you been trying to get pregnant?</p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle1" value="8" data-answer="Less than 6 month"  type="radio" data-value="20" data-qNumber="13" class="form-check-input question" name="optradio13">
							Less than 6 month
						</label>

					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle2" value="3" data-answer="6-12 months"  type="radio" data-value="10" data-qNumber="13" class="form-check-input question" name="optradio13">6-12 months
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle3" value="0" data-answer="More than 12 months" type="radio" data-value="5" data-qNumber="13" class="form-check-input question" name="optradio13">More than 12 months
						</label>
					</div>
					<div class="m-5">
						<label class="form-check-label label">
							<input id="partnerlifestyle3" value="0" data-answer="Not trying" type="radio" data-value="5" data-qNumber="13" class="form-check-input question" name="optradio13">Not trying
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="progress col-lg-9 mx-auto p-0">
			<div class="progress-bar" style="width:100%"></div>
		</div>
		<a class="back-button d-flex align-items-center justify-content-center mt-5" data-bNumber="12">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Back</h3>
		</a>
	</div>



	<!--------quiz14------------------>
	<div class="col-lg-12 quiz-form " id="q14">
		<div class="col-lg-7 mx-auto text-center">
			<p class="p-qiuz" style="font-weight:400">
				<span class="blue-color pey-title">Enter your email address below for your FREE fertility lifestyle results.</span><br>
				<span style="font-size:11px!important">By submitting my email address I agree to receive emails with more information about the Fertilligence platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and I understand I can unsubscribe at any time.</span></p>
			<div class="mx-auto text-center">
				<div class="form-check">
					<div class="m-5">
						<label class="form-check-label label">Email:</label>
						<input id="emailForQuiz" type="email" class="emailForQuiz" name="optradio">


					</div>

				</div>
			</div>
		</div>

		<a  id="submitQuestion" class="btn btn-primary btn-lg center-block mt-3 submitQuestion question" data-bNumber="14" data-qNumber="14">
			<i class="fa fa-arrow-left"></i>
			<h3 class="text-center">Get My Results</h3>
		</a>
	</div>
	<!--------quiz15------------------>
	<div class="col-lg-12 " id="q15">
		<div class="col-lg-7 mx-auto text-center">
			<div style="margin-bottom:75px">
				<h3 id="resulttTitle2">Watch Our Coach Explain How To Interpret Your Results</h3>
				<div class="col-12 col-sm-4 padding-0 mb-30">
					<div class="embed-responsive embed-responsive-16by9 video-item">
						<video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/coach1.mp4" controls  poster="<?php bloginfo('template_directory'); ?>/images/coachsonia.png" ></video>
					</div>
					<div id="b" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/minimize.png');" class="video-poster">
						<!--                         <span class="center-block d-flex align-items-center">
<img src="https://fertilligence.com/wp-content/uploads/2020/06/fquiz.jpg" class="center-block" style="width: 35px;height: 35px">
</span> -->
					</div>
				</div>
				<p>
					"Hi! I’m excited to start this journey with you. I’ll be in touch to learn more about you and to help&nbsp; you get started with Fertilligence!"<br><span class="pink-color pt-3 pb-3">-Coach Sonia</span>
					<br>P.S. I have appointments available as soon as TODAY! ​Register now​ and schedule your first appointment.
				</p>
			</div>


			<h2 id="resulttTitle1">Your Fertilligence™ level: Intermediate</h2>
			<p id="ResultP1" class="p-qiuz">Looks like you are on the right track and already built some healthy lifestyle habits. We
				invite you to learn about additional ways you can integrate healthy lifestyle choices into your life
				routines and get personalized support you deserve. See our packages, all including individual and group
				sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in
				creating your personalized journey on your path to parenthood.</p>

			<h3 id="resulttTitle2">Your Fertilligence™ Profile</h3>
			<p id="ResultP2">(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a
				well-rounded profile)</p>
			<div class="col-12 col-lg-11 mx-auto">
				<canvas id="myChart" width="300px" height="300px"></canvas>
			</div>


			<!--             <a href="<?php get_home_url(); ?>/packages"> <button type="button" class="btn btn-primary btn-lg center-block mt-3 button-quiz">See our packages</button></a> -->



		</div>






		<h1 class="text-center title" style="margin-bottom: 80px;margin-top: 80px">The Next Step<br> Join the Fertilligence Community Now!<br> Choose the Package That’s Right for You.</h1>
		<!-- <p class="title-p col-sm-8 col-10 p-0 mx-auto text-center" style="margin-bottom: 80px;">With three unique packages, start with the level of support that feels right for you.<br>You can always change it at the end of your month.</p> -->

	
    <div class="col-10 d-none mx-auto display-packages-button p-0" id="section6">

        <div class="d-flex align-items-center shop" style="margin-bottom:5rem">
            <img src="<?php bloginfo('template_directory'); ?>/images/shop.png" alt="">
            <h5 class="pink-color"><?=get_option('nxm_OngoingDiscount')?></h5>
        </div>

        <!--new changes--->
        <div class="rec-mobile d-none" style="top:100px;display: flex;align-items: center;justify-content: center;" id="sarec">
            <h3 class="m-0">*Recommended for new members*</h3>
        </div>
        <div style="margin-bottom: 80px">
            <div class="owl-carousel owl-theme" id="carouselpackages" style="box-shadow: 0 15px 40px rgba(0,0,0,0.1);border-radius: 20px;">
                <div class="item">

                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Starter</h4>
                    </div>
                    <div>
                        <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                            <div>
                                <h6>$<?=get_option('nxm_StarterRegularPrice')?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?=get_option('nxm_StarterSalePrice')?></h4>
                            </div>
                        </div>
                        <ul style="list-style:none;padding:0">
                            <li><b>1 x 20</b> min Live 1:1 Sessions with Your Fertility Coach</li>
                            <li style="border-bottom: none"><span class="pink-color">Bring your partner along</span></li>
                            <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li class="mt-5 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>Included</b> Access to Supplements and Test Kits</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Nutrition Classes</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Lifestyle Modification Classes</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li  style="border-bottom: none">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Fitness Classes</li>
                        </ul>
                    </div>
                    <!-- 														<a href="care-qualifier/" class="packages2-button">
                                                                                <div class="btn packages2-button-style" style="margin-bottom: -25px">
                                                                                    <p class="button-p m-0">Join Now</p>
                                                                                </div>
                                                                            </a> -->

                </div>
                <div class="item">
                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Care</h4>

                    </div>
                    <div>
                        <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                            <div>
                                <h6>$<?=get_option('nxm_CareRegularPrice')?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?=get_option('nxm_CareSalePrice')?></h4>
                            </div>
                        </div>
                        <ul style="list-style:none;padding:0">
                            <li ><b>2 x 20 min</b> Live 1:1 Sessions with Your Fertility Coach</li>
                            <li style="border-bottom: none"><span class="pink-color">Bring your partner along</span></li>
                            <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li><b>1 x 15 min</b> Live 1:1 Sessions with a Nutritionist</li>
                            <li class="mt-5 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>

                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>Included</b> Access to Supplements and Test Kits</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Nutrition Classes</li>
                            <li><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li style="border-bottom: none"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Fitness Classes</li>
                        </ul>
                    </div>
                    <!-- 													<a href="care-qualifier/" class="packages2-button">
                                                                            <div class="btn packages2-button-style" style="margin-bottom: -25px">
                                                                                <p class="button-p m-0">Join Now</p>
                                                                            </div>
                                                                        </a> -->
                </div>
                <div class="item">
                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Care +</h4>
                    </div>
                    <div>
                        <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                            <div>
                                <h6>$<?=get_option('nxm_CarePlusRegularPrice')?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?=get_option('nxm_CarePlusSalePrice')?></h4>
                            </div>
                        </div>
                        <ul style="list-style:none;padding:0">
                            <li ><b>2 x 45 min</b> Live 1:1 Sessions with Your Fertility Coach</li>
                            <li style="border-bottom: none"><span class="pink-color">Bring your partner along</span></li>
                            <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li ><b>1 x 15 min</b> Live 1:1 Sessions with a Nutritionist</li>
                            <li class="mt-5 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>Included</b> Access to Supplements and Test Kits</li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Nutrition Classes</li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li style="border-bottom: none"> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path></svg>
                                <b>4</b> Live Monthly Fitness Classes</li>




                        </ul>
                    </div>
                    <!-- 												<a href="care-qualifier/" class="packages2-button" style="position: absolute;top: -60px;left: 0;right: 0;">
                                                                        <div class="btn packages2-button-style" style="margin-bottom: -25px">
                                                                            <p class="button-p m-0">Join Now</p>
                                                                        </div>
                                                                    </a> -->
                </div>

            </div>
            <a href="care-qualifier/?id=1" class="packages2-button" style="position:absolute;bottom: 16%;left:0;right:0;text-align:center;z-index:999">
                <div class="btn packages2-button-style" style="margin-bottom: -47px;background-color:#ED0F68">
                    <p class="button-p m-0">Start Now</p>
                </div>
            </a>
        </div>

        <p class="text-center" style="font-weight: 500;font-size: 20px">Fertilligence coaches are available for same day and next day appointments. Why wait?</p>

    </div>
    <div class="col-10 mx-auto p-0 display-none" id="section12">

        <table id="nbe-table" class="table table-bordered">
            <thead>
            <tr>
                <th class=" text-left p-2">
                    <img class="table-img-d-none" src="<?php bloginfo('template_directory'); ?>/images/table-icon.svg" alt="" class="m-2">
                    <span class="pink-color"><?=get_option('nxm_OngoingDiscount')?></span>
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
                <td> Price (includes one month access to Fertilligence app)</td>
                <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?=get_option('nxm_StarterRegularPrice')?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?=get_option('nxm_StarterSalePrice')?></span></td>
                <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?=get_option('nxm_CareRegularPrice')?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?=get_option('nxm_CareSalePrice')?></span></td>
                <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?=get_option('nxm_CarePlusRegularPrice')?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?=get_option('nxm_CarePlusSalePrice')?></span></td>
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
                <td>24/7 Messaging with Fertility Coaches & Nutritionists</td>
                <td>Unlimited</td>
                <td>Unlimited</td>
                <td>Unlimited</td>
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
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/?id=1"><b class="awesome">Start Now&nbsp&nbsp</b></a></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/?id=2"><b class="awesome">Start Now&nbsp&nbsp</b></a></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/?id=3"><b class="awesome">Start Now&nbsp&nbsp</b></a></td>
            </tr>
            <tr>
                <td><b>Fertiligence App Features for the Packages</b></td>
                <td></td>
                <td></td>
                <td></td>
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
                <td></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/?id=1"><b class="awesome">Start Now&nbsp&nbsp</b></a></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/?id=2"><b class="awesome">Start Now&nbsp&nbsp</b></a></td>
                <td><a class="table-hover white-color hvr-hang" href="care-qualifier/?id=3"><b class="awesome">Start Now&nbsp&nbsp</b></a></td>
            </tr>


            </tbody>
        </table>
        <p class="text-center">Fertilligence coaches are available for same day and next day appointments. Why wait?</p>
    </div>



		
		<!------------------section8----------------->
		<div class="col-12" id="section8" style="margin-top: 80px;background: url('<?php bloginfo('template_directory'); ?>/images/fitbg.png') no-repeat">
			<p class="title text-center">Got Questions? We’ve Got Answers?</p>

			<div class="col-lg-8 mt-5 d-lg-flex d-sm-flex justify-content-between mx-auto align-items-center p-0 h-fit">
				<div class="col-lg-5">
					<div class="fit" style="">
						<div class="section1-cards mx-auto p-3">
							<img src="<?php bloginfo('template_directory'); ?>/images/Group%2020299.svg" alt="" class="center-block">
							<h5 class="pt-4">Chat LIVE with our expert</h5>
						</div>
					</div>
					<a id="crisp" class="d-flex justify-content-center btn p-0" style="margin-top: -30px;" onclick='$crisp.push(["do", "chat:open"])'>
						<div class="button3" style="width: 177px;height: 50px">
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






















	</div>

</div>




<script>



	var quizform = document.querySelector("#quiz-form-new")
	if (quizform) {

		var results = [];
		$('.quiz-form').hide();
		$('#q15').hide();
		$('#q1').fadeIn();


		window.checkme = 0;
		$('.question').click(function(e) {
			window.checkme++;
			var questionNumber = parseInt(this.dataset.qnumber);
			var questionValue = parseInt(this.dataset.value);
			if (questionNumber < 13) {
				results[questionNumber - 1] = questionValue;
			}



			var score = 0;
			if (questionNumber == 13) {
				for (var p = 0; p < results.length; p++) {
					score = score + results[p];
				}
				if (score <= 120) {
					$('#resulttTitle1').html('Your Fertilligence™ level: Beginner');
					$('#ResultP1').html('Looks like you have a good start. There are so many more ways you can improve your lifestyle and get personalized support you deserve. See our packages, all including individual and group sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in creating your personalized journey on your path to parenthood. Do not forget to check your Fertilligence™ Profile below.');
					$('#ResultP2').html('(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a well-rounded profile)');
				} else if ((score > 120) && (score <= 180)) {
					$('#resulttTitle1').html('Your Fertilligence™ level: Intermediate');
					$('#ResultP1').html('Looks like you are on the right track and already built some healthy lifestyle habits. We invite you to learn about additional ways you can integrate healthy lifestyle choices into your life routines and get personalized support you deserve. See our packages, all including individual and group sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in creating your personalized journey on your path to parenthood.');
					$('#ResultP2').html('(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a well-rounded profile)');

				} else if (score > 180) {


					$('#resulttTitle1').html('Your Fertilligence™ level: Advanced');
					$('#ResultP1').html('Seems like you are following quite a few healthy lifestyle practices already! We invite you to fine-tune your approach and get personalized support you deserve. See our packages, all including individual and group sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in tailoring your personalized journey on your path to parenthood.');
					$('#ResultP2').html('(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a well-rounded profile)');
				}
				$('#q13').hide();
				$('#q14').fadeIn();



			} else if (questionNumber == 14) {
				// 				gtag('event', 'Quiz_form_Submitted', {
				// 					'event_callback': function() {
				// // 						submitFunction();
				// 					}
				// 				});
				//                submitFunction();

			} else {
				$('#q' + questionNumber).hide();
				$('#q' + (questionNumber + 1)).fadeIn();
			}
			// quiz[questionNumber + 1].classList.remove("d-none");

		});
		$('.back-button').click(function() {
			var questionNumber = parseInt(this.dataset.bnumber);
			console.log(questionNumber)
			$('#q' + questionNumber).hide();
			$('#q' + (questionNumber - 1)).fadeIn();
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
		var answer13 = $('[name=optradio13]:checked').data('answer')

		var participantEmail = $('#emailForQuiz').val();
		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if (testEmail.test(participantEmail)) {
			console.log(participantEmail);
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
					//location.href=
				},
				error: function(response) {
					console.log(response)
				}
			});

			$('#q14').hide();
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
				type: 'radar',

				data: {
					labels: ['Nutrition', 'Hydration', 'Exercise', 'Sleep', 'Supplements', 'Stress', 'Mood', ['Partner', 'connection'] , 'Environment', 'Weight', 'Ovulation', 'Partner Lifestyle'],

					datasets: [{
						fontSize: 20,
						pointStyle: 'circle',
						backgroundColor: '#ffffff',
						borderColor: '#007bff',
						data: results,
						pointLabelFontSize: 16,
						scaleFontSize: 16,
						pointDot: false,
						showTooltips: false

					}]
				},
				showTooltips: false,
				// Configuration options go here
				options: {
					tooltips: {
						enabled: false
					},
					legend: {
						fontSize: 20,
						display: false,
						itemWidth: 150,
						position: 'bottom',
						fullWidth: true,
						labels: {
							defaultFontSize:40,
							//                                         fontColor: 'rgb(0,0,0)',
							fontColor: 'green',
							boxWidth: 10,
							padding: 20
						},
					},
					scale: {
						ticks: {
							display: false
						},
						angleLines:{
							lineWidth: 5
						},
						pointLabels:{
							fontSize: 14,
							fontColor: '#000000'
						},
					},
					showTooltips: false,

				}
			});
			$('#q15').fadeIn();
		} else {
			$('#emailForQuiz').val('');
			$('#emailForQuiz').focus();
		}



	})
	// 	function submitFunction(){

	// 	}


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
	if ($(window).width() <1024   ) {
		$(window).scroll(function(event){

			var st = $(this).scrollTop();
			var scHeight=$( window ).height();
			var footerHeight=$( 'footer' ).height();

			if (st>(footerHeight/2)){
				maScrollDown=1;
			}

			var scHeight=$( window ).height();
			var st = $(this).scrollTop();
			if (st > lastScrollTop){
				// downscroll code
			} else {
				if ((st<5)&& (maScrollDown==1)){
					if (showme==0){
						$('#modalsa').modal('show');
						showme=1;
					}
				}
				console.log(st);
			}
			lastScrollTop = st;
		});
	}

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
	$('#checkMe2').click(function(){
		$('#postme2').toggleClass('d-none');
	});
	$('#postme2').click(function(e){
		e.preventDefault();
		var radioValue1 = $("input[name='popupQ1']:checked"). val();
		var radioValue2 = $("input[name='popupQ2']:checked"). val();
		console.log(radioValue1);
		console.log(radioValue2);


		var email = $("#popemail2").val();

		$.ajax({
			url: "https://fertilligence.com/wp-json/nxm/SubscribeQuizForm",
			method: "POST",
			data: {
				fname: '-',
				lname: '--',
				email: email,
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



	});

</script>
<!-- This site is converting visitors into subscribers and customers with OptinMonster - https://optinmonster.com -->
<!-- <script type="text/javascript" src="https://a.omappapi.com/app/js/api.min.js" data-account="91354" data-user="81219" async></script> -->
<!-- / https://optinmonster.com -->

<?php
// if (is_page(0)) {
// get_footer('new');
// } else {
//
get_footer();
// }
// wp_head();
?>
