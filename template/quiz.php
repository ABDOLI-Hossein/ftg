<?php
/**
 * Template Name: Quiz
 * Template Post Type: post, page
 */
if (is_page(0)) {
    get_header('new');
} else {
    get_header();
}
wp_head();
?>

<div id="quiz-form2">
<!--------quiz------------------->
<div class="col-lg-12 quiz-form">
    <div class="col-lg-6 mx-auto  quiz-form-page1">
        <p class="mb-lg-4">By submitting my email address I agree to receive emails with more information about the Fertilligence
            platform, and marketing offers from Fertilligence. My email address will not be shared for any purpose, and
            I understand I can unsubscribe at any time.</p>
        <div class="form-group col-lg-7 pl-0 mb-lg-5">
            <label><b>Email:</b></label>
            <input type="email" name="email" class="form-control col-form-label-lg email"/>
        </div>
        <button name="submit" type="submit" class="btn btn-outline-dark form-control-sm label">Submit
        </button>
    </div>
</div>
<!--------quiz1------------------>
<div class="col-lg-12 quiz-form d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I follow a healthy diet designed to optimize my chances of fertility</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="nutrition1" value="8" type="radio" data-value="8" data-qNumber="1"
                               class="form-check-input question question" name="optradio">Sure
                        thing
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="nutrition2" value="0" type="radio" data-value="0" data-qNumber="1"
                               class="form-check-input question" name="optradio">Hmm,unsure
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="nutrition3" value="0" type="radio" data-value="0" data-qNumber="1"
                               class="form-check-input question" name="optradio">Probably
                        not
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------quiz2------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I drink at least 64 oz. of water per day (can include unsweetened, non-caffeinated,
            non-alcoholic beverages)</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="hydration1" value="8" type="radio" data-value="8" data-qNumber="2"
                               class="form-check-input question" name="optradio">Absolutely
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="hydration2" value="0" type="radio" data-value="0" data-qNumber="2"
                               class="form-check-input question" name="optradio">Probably
                        not
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:8.333333333333333%"></div>
    </div>
        <a class="back-button d-flex align-items-center justify-content-center mt-5"  data-bNumber="2">
            <i class="fa fa-arrow-left"></i>
            <h3 class="text-center">Back</h3>
        </a>
</div>
<!--------quiz3------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I exercise for at least 30 minutes, mixing cardio and strength training</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="exercise1" value="8" type="radio" data-value="8" data-qNumber="3"
                               class="form-check-input question" name="optradio">3-5
                        times a week
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="exercise2" value="3" type="radio" data-value="4" data-qNumber="3"
                               class="form-check-input question" name="optradio">Once
                        a week
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="exercise3" value="0" type="radio" data-value="0" data-qNumber="3"
                               class="form-check-input question" name="optradio">Rarely
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
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I get 7-9 hours of sleep a night</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="sleep1" value="8" type="radio" data-value="8" data-qNumber="4"
                               class="form-check-input question" name="optradio">Daily
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="sleep2" value="3" type="radio" data-value="4" data-qNumber="4"
                               class="form-check-input question" name="optradio">3-5
                        times a week
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="sleep3" value="0" type="radio" data-value="0" data-qNumber="4"
                               class="form-check-input question" name="optradio">Rarely
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:25%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"  data-bNumber="4">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz5------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I take fertility related supplements</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="supplements1" value="8" type="radio" data-value="0" data-qNumber="5"
                               class="form-check-input question"
                               name="optradio">Daily
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="supplements2" value="3" type="radio" data-value="4" data-qNumber="5"
                               class="form-check-input question"
                               name="optradio">3-5 times a week
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="supplements3" value="0" type="radio" data-value="8" data-qNumber="5"
                               class="form-check-input question"
                               name="optradio">Rarely
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:33.33333333333333%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"  data-bNumber="5">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz6------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I feel that my stress level is</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="stress1" value="0" type="radio" data-value="8" data-qNumber="6"
                               class="form-check-input question" name="optradio">High
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="stress2" value="3" type="radio" data-value="4" data-qNumber="6"
                               class="form-check-input question" name="optradio">Medium
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="stress3" value="8" type="radio" data-value="8" data-qNumber="6"
                               class="form-check-input question" name="optradio">Low
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:41.66666666666667%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"   data-bNumber="6">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz7------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I feel happy, calm, optimistic</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="mood1" value="8" type="radio" data-value="8" data-qNumber="7"
                               class="form-check-input question" name="optradio">Every day
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="mood2" value="3" type="radio" data-value="3" data-qNumber="7"
                               class="form-check-input question" name="optradio">A few days
                        a week
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="mood3" value="3" type="radio" data-value="3" data-qNumber="7"
                               class="form-check-input question" name="optradio">a few days
                        a month
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="mood4" value="0" type="radio" data-value="0" data-qNumber="7"
                               class="form-check-input question" name="optradio">Rarely
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:58.33333333333333%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"   data-bNumber="7">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz8------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I feel that my connection to my partner is</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="partnerconnection1" value="8" type="radio" data-value="8" data-qNumber="8"
                               class="form-check-input question"
                               name="optradio">Strong
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="partnerconnection2" value="3" type="radio" data-value="3" data-qNumber="8"
                               class="form-check-input question"
                               name="optradio">Average
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="partnerconnection3" value="0" type="radio" data-value="0" data-qNumber="8"
                               class="form-check-input question"
                               name="optradio">Has been better
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:66.66666666666666%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"   data-bNumber="8">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz9------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I minimize exposure to smoking, chemicals, and other environmental hazards</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="environment1" value="8" type="radio" data-value="8" data-qNumber="9"
                               class="form-check-input question"
                               name="optradio">I think so
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="environment2" value="0" type="radio" data-value="0" data-qNumber="9"
                               class="form-check-input question"
                               name="optradio">I am not sure
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:75%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"   data-bNumber="9">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz10------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">My weight is within a healthy range</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="weight1" value="8" type="radio" data-value="8" data-qNumber="10"
                               class="form-check-input question" name="optradio">Pretty
                        sure it is
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="weight2" value="0" type="radio" data-value="0" data-qNumber="10"
                               class="form-check-input question" name="optradio">I'm
                        unsure what a healthy range is
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="weight3" value="0" type="radio" data-value="0" data-qNumber="10"
                               class="form-check-input question" name="optradio">I do
                        not think it is
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:83.33333333333333%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"   data-bNumber="10">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz11------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I am tracking my ovulation and ovulate properly</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="ovulation1" value="8" type="radio" data-value="8" data-qNumber="11"
                               class="form-check-input question" name="optradio">Yes
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="ovulation2" value="0" type="radio" data-value="0" data-qNumber="11"
                               class="form-check-input question" name="optradio">No
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="ovulation3" value="0" type="radio" data-value="0" data-qNumber="11"
                               class="form-check-input question" name="optradio">Not
                        relevant(I am male)
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:91.66666666666666%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"   data-bNumber="11">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz12------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <p class="p-qiuz">I believe my partner's health and lifestyle is</p>
        <div class="mx-auto text-center">
            <div class="form-check">
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="partnerlifestyle1" value="8" type="radio" data-value="8" data-qNumber="12"
                               class="form-check-input question"
                               name="optradio">Better than mine
                    </label>

                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="partnerlifestyle2" value="3" type="radio" data-value="3" data-qNumber="12"
                               class="form-check-input question"
                               name="optradio">Probably the same
                    </label>
                </div>
                <div class="m-5">
                    <label class="form-check-label label">
                        <input id="partnerlifestyle3" value="0" type="radio" data-value="0" data-qNumber="12"
                               class="form-check-input question"
                               name="optradio">Probably worse than mine
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="progress col-lg-9 mx-auto p-0">
        <div class="progress-bar" style="width:100%"></div>
    </div>
    <a class="back-button d-flex align-items-center justify-content-center mt-5"  data-bNumber="12">
        <i class="fa fa-arrow-left"></i>
        <h3 class="text-center">Back</h3>
    </a>
</div>
<!--------quiz13------------------>
<div class="col-lg-12 quiz-form  d-none">
    <div class="col-lg-7 mx-auto text-center">
        <h2>Your Fertilligence™ level: Intermediate</h2>
        <p class="p-qiuz">Looks like you are on the right track and already built some healthy lifestyle habits. We
            invite you to learn about additional ways you can integrate healthy lifestyle choices into your life
            routines and get personalized support you deserve. See our packages, all including individual and group
            sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in
            creating your personalized journey on your path to parenthood.</p>
        <button type="button" class="btn btn-primary btn-lg center-block mt-3 button-quiz">See our packages</button>
        <h3>My Fertilligence™ Profile</h3>
        <p>(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a
            well-rounded profile)</p>
        <div>
            <canvas id="myChart" width="300px" height="300px"></canvas>
        </div>
        <div>

        </div>
    </div>


</div>

</div>











<?php
if (is_page(0)) {
    get_footer('new');
} else {
    get_footer();
}
wp_head();
?>
