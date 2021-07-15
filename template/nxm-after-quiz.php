<?php
/**
 * Template Name: nxm after submit quiz
 * Template Post Type: post, page
 */
get_header();


$answers = $_GET["a"];
if (empty($answers)) {
    header("LOCATION: " . get_home_url() . "/quiz");
    echo "<p style='text-align:center;margin-top: 60px'>you must first complete the Quiz <a href='https://fertilligence.com/quiz/'>here</a></p>";
    exit;
}
$answers = explode('-', $answers);
$countGreen = 0;
$countYellow = 0;
$countRed = 0;
$itemsGreen = array();
$itemsYellow = array();
$itemsRed = array();
foreach ($answers as $index => $answer) {
    switch ($index) {
        case 0:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Nutrition";
            } else if ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Nutrition";
            } else if ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Nutrition";
            }
            break;
        case 1:

            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Hydration";
            } else if ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Hydration";
            } else if ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Hydration";
            }
            break;
        case 2:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Exercise";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Exercise";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Exercise";
            }
            break;
        case 3:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Sleep";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Sleep";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Sleep";
            }
            break;
        case 4:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Supplements";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Supplements";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Supplements";
            }
            break;
        case 5:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Stress";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Stress";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Stress";
            }
            break;
        case 6:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Mood";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Mood";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Mood";
            }
            break;
        case 7:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Partner Conection";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Partner Conection";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Partner Conection";
            }
            break;
        case 8:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Environment";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Environment";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Environment";
            }
            break;
        case 9:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Weight";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Weight";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Weight";
            }
            break;
        case 10:
            if ($answer == 20) {
                $countGreen++;
                $itemsGreen[] = "Ovulation";

            } elseif ($answer == 10) {
                $countYellow++;
                $itemsYellow[] = "Ovulation";
            } elseif ($answer == 5) {
                $countRed++;
                $itemsRed[] = "Ovulation";
            }
            break;
        case 11:
            if ($answer == 20) {
                $itemsGreen[] = "Partner Lifestyle";
                $extraDetail = 'You have also indicated that your partner’s lifestyle is <b>better</b> than yours.';
            } elseif ($answer == 10) {
                $extraDetail = 'You have also indicated that your partner’s lifestyle is <b>same</b> as yours.';
            } elseif ($answer == 5) {
                $itemsRed[] = "Partner Lifestyle";
                $extraDetail = 'You have also indicated that your partner’s lifestyle is <b>worse</b> than yours.';
            }
            break;
        case 12:
            if ($answer == 1) {
//                 $countGreen++;
//                $itemsGreen[] = "Trying Pregnant";
                $extraSummary = 'You have shared with us that you have been trying to get pregnant for <b>less than 6 month</b>.';
            } elseif ($answer == 2) {
//                 $countYellow++;
//                $itemsYellow[] = "Trying Pregnant";
                $extraSummary = 'You have shared with us that you have been trying to get pregnant for <b>6-12 months</b>.';
            } elseif ($answer == 3) {
//                 $countRed++;
//                $itemsRed[] = "Trying Pregnant";
                $extraSummary = 'You have shared with us that you have been trying to get pregnant for <b>More than 12 months</b>.';
            } elseif ($answer == 4) {
//                 $countRed++;
//                $itemsRed[] = "Trying Pregnant";
                $extraSummary = 'You have shared with us that you are interested in infertility, but have not started your own fertility journey yet. ';
            }
            break;
    }
}


?>
    <style>
        button {
            outline: 0 !important;
        }

        .packages-font {
            color: black;
        }

        .nbe-tab-title-text {
            font-family: Poppins-Medium;
            font-size: 20px;
            line-height: 38px;
            color: #1098d6;
            margin-bottom: 16px;
        }

        .nbe-detail-title-text {
            font-family: Poppins-Medium;
            font-size: 20px;
            line-height: 38px;
            color: #ED0F68;
            margin-bottom: 6px;
            text-align: center;
        }

        .nbe-tab-title-text-red {
            font-family: Poppins-Medium;
            font-size: 20px;
            line-height: 38px;
            color: #ED0F68;
            margin-bottom: 20px;
        }

        .nbe-tab-list {
            padding: 0;
            margin: 0;
            margin-bottom: 32px;
            counter-reset: count;
        }

        .nbe-tab-list li {
            counter-increment: count;
            list-style: none;
            position: relative;
            padding-left: 18px;
            margin-bottom: 21px;
        }

        .nbe-tab-list li:before {
            content: counter(count);
            width: 20px;
            height: 20px;
            position: absolute;
            left: 0;
            top: 3px;
            font-weight: bold;
            border-radius: 100%;
        }

        .nbe-tab-list li:nth-child(1):before {
            color: #FFCD56;
        }

        .nbe-tab-list li:nth-child(2):before {
            color: #FF6384;
        }

        .nbe-tab-list li:nth-child(3):before {
            color: #4BC0C0;
        }

        .nbe-tab-list li:nth-child(4):before {
            color:#F57C00;
        }
        .nbe-tab-list li span {
            font-size: 17px;
            font-family: Poppins-Regular;
            line-height: 30px;
            color: #0A0909;
        }

        .nbe-tab-text {
            font-size: 17px;
            font-family: Poppins-Regular;
            line-height: 30px;
            color: #0A0909;
        }

        .nbe-red-btn {
            width: 100%;
            padding: 16.5px 0;
            border: 0;
            border-radius: 50px;
            background: #ED0F68;
            color: white;
            margin-bottom: 30px;
            font-size: 17px;
            font-family: Poppins-Regular;
            max-width: 270px;
            box-shadow: 0 15px 40px 0 #ed0f6833;
            -webkit-box-shadow: 0 15px 40px 0 #ed0f6833;
            -o-box-shadow: 0 15px 40px 0 #ed0f6833;
            -moz-box-shadow: 0 15px 40px 0 #ed0f6833;
        }

        .nbe-blue-btn {
            width: 100%;
            padding: 16.5px 0;
            border: 0;
            border-radius: 50px;
            background: #1098d6;
            color: white;
            font-size: 17px;
            font-family: Poppins-Regular;
            max-width: 270px;
            box-shadow: 0 15px 40px 0 #94daec40;
            -webkit-box-shadow: 0 15px 40px 0 #94daec40;
            -o-box-shadow: 0 15px 40px 0 #94daec40;
            -moz-box-shadow: 0 15px 40px 0 #94daec40;
        }

        .nbe-gray-btn {
            width: 100%;
            padding: 16.5px 0;
            border: 0;
            border-radius: 50px;
            background: #E0E0E0;
            color: #787878;
            font-size: 17px;
            font-family: Poppins-Regular;
            max-width: 270px;
        }

        .nbe-tab-title-whole {
            display: none;
            padding: 10px 0;
        }

        .nbe-tab-content-whole {
            max-width: 342px;
            margin: 0 auto;
            padding-top: 46px;
        }

        .nbe-tab-title {
            cursor: pointer;
        }

        .nbe-tab-content {
            display: none;
            color: black;
        }

        .nbe-whole-tabs {
            position: relative;
            min-height: 694px;
        }

        .nbe-mar-b-60 {
            margin-bottom: 60px;
        }

        .nbe-mar-b-44 {
            margin-bottom: 44px;
        }

        .nbe-btn-container {
            display: flex;
            justify-content: center;
            flex-direction: column-reverse;
            align-items: center;
            padding-top: 38px;
        }

        .nbe-rep-text {
            font-size: 14px;
            font-family: Poppins-Regular;
            line-height: 19px;
            margin: 0 0px 0px 10px;
            width: 126%;
        }
        path#path-1_46_ {
            fill: #4BC0C0;
        }
        .green-rep {
            color: #4BC0C0;
        }
        .green-rep span{
            background:#4BC0C0;
        }
        path#path-1 {
            fill: #FFCD56 !important;
        }
        .yellow-rep {
            color: #FFCD56;
        }
        .yellow-rep span{
            background: #FFCD56;

        }
        path#path-1_23_ {
            fill: #FF6384;
        }
        .red-rep {
            color: #FF6384;
        }
        .red-rep span{
            background: #FF6384;
        }
        .nbe-rep-text span {

            color: white;
            display: inline-flex;
            padding: 3px;
            border-radius: 100%;
            width: 20px;
            height: 20px;
            justify-content: center;
            align-items: center;
            margin-left: 5px;
        }

        .nbe-scores-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 17px;
        }

        .nbe-scores-container svg {
            width: 130px;
        }
        .nbe-score-items li svg{
            margin-left: 13px;
            position: absolute;
            right: -10px;
            top: 8px;
        }
        .nbe-score-items {
            list-style: none;
            flex-wrap: wrap;
            display: flex;
            justify-content: flex-start;
            box-shadow: 0 10px 35px 0 #00000014;
            -webkit-box-shadow: 0 10px 35px 0 #00000014;
            -o-box-shadow: 0 10px 35px 0 #00000014;
            -moz-box-shadow: 0 10px 35px 0 #00000014;
            padding: 17px 0 20px 26px;
            border: 1px solid #EEEEEE;
            border-radius: 2px 20px 20px 20px;
            margin-bottom: 30px;
        }

        .nbe-score-items li {
            font-size: 17px;
            font-family: Poppins-Regular;
            line-height: 25px;
            width: 90%;
            position: relative;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .nbe-score-items li::before {
            content: "";
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 100%;
            top: 10px;
            left: -12px;
        }
        .nbe-score-items li:after {
            content: "learn more";
            position: absolute;
            right: 5px;
            font-size: 14px;
        }
        .green-items li::before {
            background: #4BC0C0;
        }
        .green-items li:after{
            color:#4BC0C0;
        }

        .yellow-items li::before {
            background: #FFCD56;
        }
        .yellow-items li:after{
            color:#FFCD56;
        }
        .red-items li::before {
            background: #FF6384;
        }
        .red-items li:after{
            color:#FF6384;
        }

        .nbe-score-items li span {
            color: #0A0909;
        }

        .nbe-quiz-footer {
            width: 100%;
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 0;
        }

        .next-prev-btn {
            width: 90px;
            margin: 0 10px;
        }

        .care h6 {
            font-size: 15px;
            margin:0;
        }

        .nbe-items-detail-each .nbe-btn-container {
            padding-top: 10px !important;
        }

        /*         .nbe-tab-content-whole .packages2-button-style {
                    width: 188px;
                    text-align: center;
                    background-color: #1098d6;
                    border-radius: 50px;
                    margin-bottom: -95px;
                    position: absolute;
                    left: 0;
                    right: 0;
                    margin: auto !important;
                    bottom: -180px;
                } */

        .nbe-items-detail-each .nbe-tab-title-text {
            text-align: center;
        }

        .disabled {
            cursor: auto !important;
        }

        .crisp-client {
            display: none !important;
        }

        .unfixed-it {
            position: relative !important;
        }

        @media only screen and (min-width: 1026px) {

            .nbe-tab-title-text {
                text-align: center;
                font-size: 27px;
                margin-bottom: 25px;
            }
            .nbe-gray-btn svg{
                display: none;
            }
            .nbe-tab-text {
                text-align: center;
            }
            #section12{
                display: block !important;
            }
  
            .nbe-tab-content-whole {
                max-width: 1088px;
            }

            .nbe-tab-list li {
                width: 46%;
            }

            .nbe-tab-list {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin-top: 38px;
            }

            .nbe-btn-container {
                flex-direction: row-reverse;
            }
            .nbe-red-btn {
                margin-left: 20px;
                margin-bottom: unset;
            }
            .nbe-items-detail-each svg {
                float: right;
                position: relative;
                top: 30px;
                margin-top: -100px;
            }

            .nbe-detail-title-text {
                width: 100%;
                clear: both;
                font-size: 27px;
            }

            .nbe-items-detail-each .nbe-tab-text {
                text-align: left;
            }

            .nbe-items-detail-each .nbe-tab-title-text {
                text-align: left;
            }

            .desk-whole-content {
                display: flex;
                justify-content: space-between;
            }

            .desktop-content {
                max-width: 342px;
            }

            .nbe-tab-title-text-red {
                text-align: center;
            }

            .left-align-desk {
                text-align: left !important;
            }
        }

        @media only screen and (max-width: 1025px) {
            .nbe-blue-btn{
                margin-bottom: 30px;
            }
            .nbe-gray-btn span{
                display: none;
            }
            .nbe-items-detail-each .nbe-btn-container {
                flex-wrap: nowrap;
                flex-direction: row-reverse;
                justify-content: center;
                position: fixed;
                bottom: 20px;
                z-index: 99;
                width: 100%;
                left: 0;
                max-width: 270px;
                right: 0;
                margin: auto;
            }
            #section12{
                display: none !important;
            }
            #section6{
                display: block !important;
            }
            .nbe-items-detail-each .nbe-red-btn {

                margin: 0 5px;

                border-radius: 0 50px 50px 0;
            }

            .nbe-items-detail-each .nbe-gray-btn {
                width: 60px;
                border-radius: 50px 0px 0px 50px;
            }
        }
		@media only screen and (max-width:1026px) and (min-width:500px){
			.nbe-tab-content-whole{
				max-width: 752px;
			}
		}
    </style>
    <div class="nbe-whole-tabs">
    <div class="nbe-tab-content-whole">
        <div class="nbe-tab-content" data-link="1">
            <h2 class="nbe-tab-title-text">
                You’ve just completed your first step with Fertilligence!
            </h2>
            <p class="nbe-tab-text">
                See your FREE Fertilligence Lifestyle report to learn about:
            </p>
            <ul class="nbe-tab-list">
                <li>
                        <span>
                        How different lifestyle factors affect fertility
                            </span>
                </li>
                <li>
                        <span>
                        How your current lifestyle choices measure against healthy practices
                               </span>
                </li>
                <li>
                        <span>
                        How Fertilligence can help you achieve your goal of getting pregnant naturally
                               </span>
                </li>
                <li>
                        <span>
                        How to book an appointment with your dedicated fertility coach through the Fertilligence app
                           </span>
                </li>

            </ul>
            <div class="nbe-btn-container">
                <button class="nbe-red-btn req-appoint">
                    Book an Appointment
                </button>
                <button class="nbe-blue-btn req-report">
                    See My Report
                </button>
            </div>
        </div>
        <div class="nbe-tab-content" data-link="2">
            <h2 class="nbe-tab-title-text">
                My Fertilligence Lifestyle Report
            </h2>
            <p class="nbe-tab-text nbe-mar-b-60">
                <span class="nbe-tab-title-text-red">Summary: </span> <br/>
                Based on your responses, we’ve grouped relevant fertility lifestyle factors in three categories. See how your current lifestyle choices measure against healthy practices.
            </p>
            <div class="desk-whole-content">
                <div class="desktop-content">
                    <div class="nbe-scores-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="69.5" height="68.507"
                             viewBox="0 0 69.5 68.507">
                            <g id="happy_1_" data-name="happy(1)" transform="translate(0 -0.468)">
                                <g id="group-6svg" transform="translate(0 0.468)">
                                    <path id="path-1_46_"
                                          d="M69.118,37.162A31.493,31.493,0,1,1,37.626,5.673,31.491,31.491,0,0,1,69.118,37.162Z"
                                          transform="translate(0.382 -0.144)" fill="#8bc34a"/>
                                    <path id="path-2_46_"
                                          d="M36.14,49.076H30.406A12.817,12.817,0,0,1,17.345,36.229a1.593,1.593,0,1,1,3.187,0,9.666,9.666,0,0,0,9.875,9.661H36.14a9.565,9.565,0,0,0,9.875-9.448,1.593,1.593,0,1,1,3.187,0A12.715,12.715,0,0,1,36.14,49.076Z"
                                          transform="translate(1.08 1.659)"/>
                                    <path id="path-3_46_"
                                          d="M25.842,23.559a1.588,1.588,0,0,1-1.126-.466,3.912,3.912,0,0,0-5.455-.117,1.593,1.593,0,0,1-2.254-2.252,7.139,7.139,0,0,1,9.962.116,1.593,1.593,0,0,1-1.127,2.719Z"
                                          transform="translate(1.03 0.671)"/>
                                    <path id="path-4_46_"
                                          d="M46.247,23.559a1.588,1.588,0,0,1-1.127-.466,3.912,3.912,0,0,0-5.455-.117,1.593,1.593,0,0,1-2.253-2.252,7.138,7.138,0,0,1,9.961.116,1.593,1.593,0,0,1-1.126,2.719Z"
                                          transform="translate(2.3 0.671)"/>
                                    <path id="path-5_46_"
                                          d="M33.086,66.631A33.082,33.082,0,1,1,66.172,33.55,33.122,33.122,0,0,1,33.086,66.631Zm0-62.977a29.9,29.9,0,1,0,29.9,29.895A29.931,29.931,0,0,0,33.086,3.655Z"
                                          transform="translate(0 -0.468)"/>
                                </g>
                            </g>
                        </svg>
                        <p class="nbe-rep-text green-rep">
                            Yay! Looks like you have already built some healthy lifestyle habits in:<br>
                            Factors:<span> <?= $countGreen ?></span>
                        </p>
                    </div>
                    <ul class="nbe-score-items green-items">
                        <?php if($countGreen!=0){ ?>
                            <?php foreach ($itemsGreen as $itemGreen): ?>
                                <?php if ($itemGreen == "Partner Lifestyle"): continue; ?>

                                <?php else: ?>
                                    <li class="nbe-items-details" data-details="<?= str_replace(" ", "-", $itemGreen) ?>">
                                        <span><?= $itemGreen ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.62" height="9.741"
                                             viewBox="0 0 5.62 9.741">
                                            <g id="arrow-right_2_" data-name="arrow-right(2)"
                                               transform="translate(4.87 8.68) rotate(180)">
                                                <path id="Path_72738" data-name="Path 72738"
                                                      d="M15.81,5,12,8.81l3.81,3.81" transform="translate(-12 -5)"
                                                      fill="none" stroke="#0a0909" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="1.5"/>
                                            </g>
                                        </svg>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php } else{ ?>

                            <p style="color:black">No factor in this category.</p>

                        <?php } ?>
                    </ul>
                </div>
                <div class="desktop-content">
                    <div class="nbe-scores-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68.667" height="68.658"
                             viewBox="0 0 68.667 68.658">
                            <g id="confused" transform="translate(0 -0.004)">
                                <g id="group-10svg" transform="translate(0 0.004)">
                                    <path id="path-1"
                                          d="M68.33,36.768A31.562,31.562,0,1,1,36.768,5.209,31.561,31.561,0,0,1,68.33,36.768Z"
                                          transform="translate(0.336 0.332)" fill="#edc951"/>
                                    <path id="path-2"
                                          d="M40.831,47.269c-2.519,0-4.93-1.227-7.179-3.655a8.384,8.384,0,0,0-5.95-3.036c-3.933-.121-7.213,3.059-7.245,3.091a1.6,1.6,0,0,1-2.241-2.275c.169-.168,4.208-4.09,9.537-4.008A11.433,11.433,0,0,1,36,41.444c1.747,1.886,3.52,2.761,5.244,2.613,3.323-.291,5.825-4.124,5.85-4.164a1.6,1.6,0,0,1,2.693,1.718c-.135.212-3.352,5.184-8.244,5.625Q41.184,47.269,40.831,47.269Z"
                                          transform="translate(1.146 2.411)"/>
                                    <path id="path-3"
                                          d="M45.461,23.216A3.818,3.818,0,1,1,41.644,19.4,3.818,3.818,0,0,1,45.461,23.216Z"
                                          transform="translate(2.443 1.249)"/>
                                    <path id="path-4"
                                          d="M24.84,23.216A3.818,3.818,0,1,1,21.022,19.4,3.818,3.818,0,0,1,24.84,23.216Z"
                                          transform="translate(1.111 1.249)"/>
                                    <path id="path-5"
                                          d="M33.159,66.314a33.155,33.155,0,1,1,33.16-33.155A33.194,33.194,0,0,1,33.159,66.314Zm0-63.116A29.962,29.962,0,1,0,63.125,33.159,30,30,0,0,0,33.159,3.2Z"
                                          transform="translate(0 -0.004)"/>
                                </g>
                            </g>
                        </svg>
                        <p class="nbe-rep-text yellow-rep">
                            Looks like you are not quite sure what to do with:<br>
                            Factors: <span><?= $countYellow ?></span>
                        </p>
                    </div>
                    <ul class="nbe-score-items yellow-items">
                        <?php if($countYellow!=0){ ?>
                            <?php foreach ($itemsYellow as $itemYellow): ?>
                                <?php if ($itemYellow == "Partner Lifestyle"): continue; ?>

                                <?php else: ?>
                                    <li class="nbe-items-details" data-details="<?= str_replace(" ", "-", $itemYellow) ?>">
                                        <span><?= $itemYellow ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.62" height="9.741"
                                             viewBox="0 0 5.62 9.741">
                                            <g id="arrow-right_2_" data-name="arrow-right(2)"
                                               transform="translate(4.87 8.68) rotate(180)">
                                                <path id="Path_72738" data-name="Path 72738"
                                                      d="M15.81,5,12,8.81l3.81,3.81" transform="translate(-12 -5)"
                                                      fill="none" stroke="#0a0909" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="1.5"/>
                                            </g>
                                        </svg>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php }else{ ?>

                            <p style="color:black">
                                No factor in this category.
                            </p>

                        <?php } ?>
                    </ul>
                </div>
                <div class="desktop-content">
                    <div class="nbe-scores-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68.667" height="66.713"
                             viewBox="0 0 68.667 66.713">
                            <g id="sad_1_" data-name="sad(1)" transform="translate(439 -4.945)">
                                <g id="group-31svg" transform="translate(-439 4.945)">
                                    <path id="path-1_23_"
                                          d="M68.453,36.387A31.126,31.126,0,1,1,37.327,5.265,31.125,31.125,0,0,1,68.453,36.387Z"
                                          transform="translate(0.214 -0.796)" fill="#e53935"/>
                                    <path id="path-3_23_"
                                          d="M46.327,52.415a1.551,1.551,0,0,1-1.552-1.551,8.881,8.881,0,0,0-8.907-8.835H30.639a8.742,8.742,0,0,0-8.907,8.764,1.552,1.552,0,1,1-3.1,0A11.952,11.952,0,0,1,30.639,38.927h5.229A11.988,11.988,0,0,1,47.879,50.864,1.551,1.551,0,0,1,46.327,52.415Z"
                                          transform="translate(0.641 0.363)"/>
                                    <path id="path-4_23_"
                                          d="M16.192,20.9c-2.722,0-4.645-.69-5.879-2.109-1.2-1.374-1.621-3.36-1.265-5.9.7-5.007,5.805-10.393,6.022-10.619a1.551,1.551,0,0,1,2.221-.024c.593.595,5.815,5.95,6.37,10.676.291,2.483-.182,4.439-1.406,5.815C20.977,20.174,18.938,20.9,16.192,20.9Zm.033-15.235c-1.406,1.71-3.716,4.88-4.1,7.653-.226,1.615-.047,2.77.532,3.436.6.692,1.794,1.044,3.539,1.044,1.822,0,3.082-.379,3.745-1.123a4.3,4.3,0,0,0,.642-3.391C20.29,10.831,17.9,7.606,16.225,5.667Z"
                                          transform="translate(0.307 -0.916)"/>
                                    <path id="path-5_23_"
                                          d="M32.677,66.291A32.673,32.673,0,0,1,10.022,10.072a1.552,1.552,0,0,1,2.152,2.236,29.479,29.479,0,1,0,7.77-5.387,1.552,1.552,0,1,1-1.338-2.8,32.678,32.678,0,1,1,14.071,62.17Z"
                                          transform="translate(0 -0.945)"/>
                                    <path id="path-6_18_"
                                          d="M44.609,32.564a7.033,7.033,0,0,1-6.857-7.019,1.552,1.552,0,0,1,3.1,0,3.888,3.888,0,0,0,3.754,3.915,1.552,1.552,0,1,1,0,3.1Z"
                                          transform="translate(1.3 -0.151)"/>
                                    <path id="path-7_17_"
                                          d="M18.517,32.481a1.552,1.552,0,0,1,0-3.1,3.889,3.889,0,0,0,3.916-3.754,1.552,1.552,0,0,1,3.1,0A7.033,7.033,0,0,1,18.517,32.481Z"
                                          transform="translate(0.584 -0.149)"/>
                                </g>
                            </g>
                        </svg>

                        <p class="nbe-rep-text red-rep">
                            These important factors seem to have escaped your attention so far:<br>
                            Factor:<span><?= $countRed ?></span>
                        </p>
                    </div>
                    <ul class="nbe-score-items red-items">
                        <?php if($countRed!=0){?>
                            <?php foreach ($itemsRed as $itemRed): ?>
                                <?php if ($itemRed == "Partner Lifestyle"): continue; ?>

                                <?php else: ?>
                                    <li class="nbe-items-details" data-details="<?= str_replace(" ", "-", $itemRed) ?>">
                                        <span><?= $itemRed ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.62" height="9.741"
                                             viewBox="0 0 5.62 9.741">
                                            <g id="arrow-right_2_" data-name="arrow-right(2)"
                                               transform="translate(4.87 8.68) rotate(180)">
                                                <path id="Path_72738" data-name="Path 72738"
                                                      d="M15.81,5,12,8.81l3.81,3.81" transform="translate(-12 -5)"
                                                      fill="none" stroke="#0a0909" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="1.5"/>
                                            </g>
                                        </svg>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php } else { ?>
                            <p style="color:black">
                                No factor in this category.
                            </p>

                        <?php } ?>
                    </ul>
                </div>
            </div>

            <p class="nbe-tab-text">
                <span class="nbe-tab-title-text-red">Details: </span><br/>
                Click on each lifestyle factor to learn how it affects fertility and how Fertilligence can help you
                build fertility-friendly lifestyle habits and achieve your goal of getting pregnant naturally.
            </p>
            <p class="nbe-tab-text">
                <span class="nbe-tab-title-text-red">Finally: </span><br/>
                <?= $extraSummary; ?>
                <br/>
                <?= $extraDetail ?>
                <br/>
                Do not forget to bring up these important facts together with your fertility lifestyle profile in conversation with our fertility coaches.
            </p>

            <div class="nbe-btn-container">
                <button class="nbe-red-btn req-appoint">
                    Book an Appointment
                </button>
            </div>
        </div>
        <div class="nbe-tab-content" data-link="3">
            <div class="nbe-items-detail-each" data-details="Nutrition">
                <h2 class="nbe-tab-title-text">
                    Nutrition
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="340.639"
                     height="347.667" viewBox="0 0 340.639 347.667">
                    <defs>
                        <linearGradient id="linear-gradient" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-3" x1="-0.884" y1="-0.251" x2="1.395" y2="0.986"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#39c5db"/>
                            <stop offset="1" stop-color="#1692ad"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_20285" data-name="Group 20285" transform="translate(-617.462 -670.33)">
                        <circle id="Ellipse_149" data-name="Ellipse 149" cx="21.633" cy="21.633" r="21.633"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 899.486, 1013.474)" opacity="0.49"
                                fill="url(#linear-gradient)"/>
                        <ellipse id="Ellipse_301" data-name="Ellipse 301" cx="136.341" cy="136.593" rx="136.341"
                                 ry="136.593" transform="translate(617.462 750.054) rotate(-17)" opacity="0.53"
                                 fill="url(#linear-gradient)"/>
                        <g id="Listening-music" transform="translate(665.826 763.976)">
                            <g id="Plant" transform="translate(0 0)">
                                <path id="Path-133"
                                      d="M73.364,42.334c-7.422-6.329-1.6-10.192-5.377-13.511s-3.415-7.361-3.063-14.063S55.636,2.87,57.937.932c1.232-1.037,9.634.74,12.944.494C75.619,1.073,79.155.25,83.1,3.846s4.658,5.912,8.59,9.011,5.341-1.35,10.228,6.747-1.046,22.661-12.442,16.96C87.466,47.877,80.786,48.663,73.364,42.334Z"
                                      transform="translate(-41.876 -0.604)" fill="#53a25b"/>
                                <path id="Combined-Shape"
                                      d="M112.1,28.422l-4.993-.477a.247.247,0,0,1,.047-.491l4.443.424a33.133,33.133,0,0,0-4.537-4.024.247.247,0,1,1,.291-.4,33.6,33.6,0,0,1,4.6,4.076l.436-3.17a.247.247,0,1,1,.489.067L112.384,28a48.8,48.8,0,0,1,6.732,9.64l1.024-6.125a.247.247,0,1,1,.486.081L119.5,38.349a81.838,81.838,0,0,1,4.76,11.056l4.244-8.314a.247.247,0,1,1,.439.225l-4.459,8.734q.524,1.521,1.021,3.114a.247.247,0,1,1-.471.147q-.481-1.543-.988-3.017l-9.667-2.86a.247.247,0,0,1,.14-.473l9.328,2.76a81.482,81.482,0,0,0-4.822-11.212l-7.726-.785a.247.247,0,0,1,.05-.491l7.395.751A48.566,48.566,0,0,0,112.1,28.422Z"
                                      transform="translate(-77.664 -17.157)" fill="#c9e3c8"/>
                                <path id="Path-132-Copy"
                                      d="M182.319,208.281a.37.37,0,1,1-.739.042q-3.331-58.938-9.1-77.374a.37.37,0,1,1,.706-.221Q178.988,149.266,182.319,208.281Z"
                                      transform="translate(-125.263 -94.867)" fill="#1d8450"/>
                                <path id="Path-133-2" data-name="Path-133"
                                      d="M15.782,3.962c-7.422,6.329-1.6,10.192-5.377,13.511S6.99,24.834,7.342,31.535-1.946,43.425.355,45.363c1.232,1.037,9.634-.74,12.945-.494,4.738.353,8.273,1.176,12.216-2.42s4.658-5.912,8.59-9.011,5.341,1.35,10.228-6.748S43.287,4.03,31.891,9.731C29.884-1.581,23.2-2.367,15.782,3.962Z"
                                      transform="translate(96.351 70.721) rotate(-178)" fill="#53a25b"/>
                                <path id="Path"
                                      d="M5.216,25.062l-4.993.477a.247.247,0,0,0,.047.492l4.443-.425A33.094,33.094,0,0,1,.176,29.63a.247.247,0,0,0,.291.4,33.594,33.594,0,0,0,4.6-4.076l.436,3.17a.247.247,0,1,0,.489-.067L5.5,25.486a48.806,48.806,0,0,0,6.732-9.64l1.024,6.125a.247.247,0,1,0,.486-.082l-1.129-6.755A81.853,81.853,0,0,0,17.371,4.08l4.245,8.313a.247.247,0,1,0,.439-.225L17.6,3.435Q18.12,1.913,18.617.321a.247.247,0,1,0-.471-.147q-.482,1.543-.988,3.018L7.491,6.051a.247.247,0,0,0,.14.473l9.328-2.76a81.442,81.442,0,0,1-4.822,11.212l-7.725.785a.247.247,0,0,0,.05.491l7.394-.751a48.576,48.576,0,0,1-6.639,9.561Z"
                                      transform="translate(83.169 60.891) rotate(-178)" fill="#c9e3c8"/>
                                <path id="Path-132-Copy-2" data-name="Path-132-Copy"
                                      d="M10.007.407A.37.37,0,1,0,9.271.333Q5.789,35.222.017,53.662a.37.37,0,1,0,.706.222Q6.52,35.361,10.007.407Z"
                                      transform="translate(63.339 113.648) rotate(-178)" fill="#1d8450"/>
                                <path id="Path-133-3" data-name="Path-133"
                                      d="M31.088,218.8c-5.575-1.487-4.034-3.863-8.4-9.089-2.519-3.018-5.518-2.468-7.885-5.062s-2.3-8.706-4.667-10.546q-5.6-4.356-9.848-3.735,5.181-9.472,9.848-10.374c4.667-.9,7.72,2.32,13.715,2.867s4.81-2.9,11.116-.6,1.835,7.034,10.614,8.509,9.757,15.046-2.979,15.367C46.139,217.066,36.663,220.285,31.088,218.8Z"
                                      transform="translate(-0.292 -130.699)" fill="#53a25b"/>
                                <path id="Path-2" data-name="Path"
                                      d="M51.993,208.066l-4.633,1.925a.247.247,0,0,1-.189-.456l4.122-1.713A33.044,33.044,0,0,0,45.4,206.4a.247.247,0,0,1,.07-.489,33.562,33.562,0,0,1,5.971,1.438l-1.1-3a.247.247,0,1,1,.463-.17l1.24,3.382a48.731,48.731,0,0,1,10.465,5.348l-1.969-5.89a.247.247,0,1,1,.468-.157l2.171,6.495a81.747,81.747,0,0,1,9.389,7.525l-.152-9.335a.246.246,0,1,1,.493-.008l.16,9.807q1.176,1.1,2.362,2.27a.247.247,0,1,1-.347.351q-1.149-1.136-2.288-2.2l-9.877,2.017a.247.247,0,1,1-.1-.484l9.531-1.947a81.318,81.318,0,0,0-9.517-7.634l-7.189,2.937a.247.247,0,0,1-.186-.457l6.881-2.811a48.518,48.518,0,0,0-10.346-5.322Z"
                                      transform="translate(-32.88 -148.252)" fill="#c9e3c8"/>
                                <path id="Path-3" data-name="Path"
                                      d="M170.716,311.817a.37.37,0,1,1-.734.094q-2.968-23.273-16.651-36.773a.37.37,0,0,1,.519-.527Q167.72,288.3,170.716,311.817Z"
                                      transform="translate(-111.297 -199.416)" fill="#1d8450"/>
                                <rect id="Rectangle" width="39.948" height="11.601"
                                      transform="translate(36.909 110.409)" fill="#e9a080"/>
                                <path id="Rectangle-Copy-12" d="M143.92,445.662h35.016L174,474.54H148.852Z"
                                      transform="translate(-104.545 -323.652)" fill="#ffb899"/>
                            </g>
                            <g id="Girl" transform="translate(63.07 15.621)">
                                <path id="Rectangle-2" data-name="Rectangle"
                                      d="M189.664,233h62a29.664,29.664,0,0,1,29.664,29.664v55.768H160V262.664A29.664,29.664,0,0,1,189.664,233Z"
                                      transform="translate(-112.538 -233)" fill="#cfc3cf"/>
                                <path id="Rectangle-Copy-4"
                                      d="M168.664,243h62a29.664,29.664,0,0,1,29.664,29.664v70.6H139v-70.6A29.664,29.664,0,0,1,168.664,243Z"
                                      transform="translate(-97.767 -240.034)" fill="#f8eeed"/>
                                <path id="Path-4" data-name="Path"
                                      d="M67.707,419.621l.84,6.936L47.9,430.13,14.218,378.447q25.352-13.236,25.693-13.44c10.755-6.457,21.836,3.661,30.121,16.153q8.285,12.492,7.664,38.461Z"
                                      transform="translate(-10.001 -324.437)" fill="#cfc3cf"/>
                                <path id="Rectangle-Copy-2" d="M157-624.664h96.407V-660H157Z"
                                      transform="translate(-110.428 751.328)" fill="#cfc3cf"/>
                                <path id="Rectangle-Copy-6"
                                      d="M169.483-633.5h83.652a1.483,1.483,0,0,0,1.483-1.483v-17.537A1.483,1.483,0,0,0,253.135-654H169.483A1.483,1.483,0,0,0,168-652.517v17.537A1.483,1.483,0,0,0,169.483-633.5Z"
                                      transform="translate(-118.165 758.38)" fill="#f8eeed"/>
                                <path id="Rectangle-Copy"
                                      d="M173.006-556.566h84.122a.891.891,0,0,0,.637-.269L280.354-580H193.746l-21.378,21.923a.89.89,0,0,0,.016,1.258A.891.891,0,0,0,173.006-556.566Z"
                                      transform="translate(-121.06 659.499)" fill="#f8eeed"/>
                                <path id="Rectangle-Copy-3"
                                      d="M498.409,370.971q9.5-13.378,21.572-6.806c8.414,4.58,2.017,18.02-6.345,29.855q-8.361,11.835-27.191,19.092l-8.34,24.972q-6.21-.815,0-24.972A113.02,113.02,0,0,1,498.409,370.971Z"
                                      transform="translate(-334.097 -323.734)" fill="#cfc3cf"/>
                                <path id="Rectangle-3" data-name="Rectangle"
                                      d="M471.441,427.719c9.833-16.908,22.983-30.6,35.747-21.863s-9.738,20.73-15.53,35.6q-5.792,14.871-6.471,38.318H462.346Q461.609,444.627,471.441,427.719Z"
                                      transform="translate(-325.161 -352.669)" fill="#f8eeed"/>
                                <path id="Rectangle-Copy-5"
                                      d="M39.606,427.579q9.833,16.908,9.1,52.057H25.861q-.679-23.447-6.472-38.318c-5.792-14.871-28.295-26.862-15.53-35.6S29.774,410.671,39.606,427.579Z"
                                      transform="translate(0 -352.572)" fill="#f8eeed"/>
                                <path id="Rectangle-4" data-name="Rectangle" d="M113,661h9.2l-2.966,18.392h-3.263Z"
                                      transform="translate(-79.48 -534.039)" fill="#7f1800"/>
                                <path id="Rectangle-Copy-7" d="M482.647,661h9.2l-2.966,18.392h-3.263Z"
                                      transform="translate(-339.476 -534.039)" fill="#7f1800"/>
                            </g>
                        </g>
                        <circle id="Ellipse_145" data-name="Ellipse 145" cx="2.516" cy="2.516" r="2.516"
                                transform="translate(920.601 747.49)" fill="#94daec"/>
                        <g id="Ellipse_150" data-name="Ellipse 150" transform="translate(666.534 674.54)"
                           fill="none" stroke="#ed0f68" stroke-width="1.5" stroke-dasharray="5">
                            <circle cx="5.283" cy="5.283" r="5.283" stroke="none"/>
                            <circle cx="5.283" cy="5.283" r="4.533" fill="none"/>
                        </g>
                        <circle id="Ellipse_151" data-name="Ellipse 151" cx="3.522" cy="3.522" r="3.522"
                                transform="translate(695.462 960.403)" fill="#ed0f68"/>
                        <g id="people" transform="translate(723.516 693.172)">
                            <g id="Group_8371" data-name="Group 8371">
                                <g id="LEGS_1_" transform="translate(51.335 87.897)">
                                    <g id="LEGS" transform="translate(18.244 49.599)">
                                        <path id="Path_72889" data-name="Path 72889"
                                              d="M572.21,639.684l3.882-17.639c4.968-4.563,45.8-11.525,45.8-11.525s-.076-3.117.666-3.777c2-1.78,6.668.665,8.894-.446,1.013-.509,4.43-2.933,5.439-3.334,2.786-1.111,5.232,1.111,5.232,1.111S582.257,639.99,572.21,639.684Z"
                                              transform="translate(-539.544 -602.653)" fill="#f08a90"/>
                                        <path id="Path_72890" data-name="Path 72890"
                                              d="M492.358,749.275c.038,11.7-8.05,51.1-8.273,52.213s4.334,5.554,1.665,7.111c-1.583.927-2.665,1.888-3.958,6.563s-7.57,2.885-7.57,2.885a1.622,1.622,0,0,1,1.411-2.446c1.111,0,2.223-5.56,2.669-9.783s.888-18.9,0-36.016c-.666-12.8-5.181-27.584-7.42-34.233-.755-2.245-1.251-3.563-1.251-3.563a.01.01,0,0,0,.006,0c.121-.057,12.668-2.337,14.865-3.232C484.5,728.767,492.326,739.135,492.358,749.275Z"
                                              transform="translate(-469.63 -688.608)" fill="#f08a90"/>
                                    </g>
                                    <g id="SHORTS">
                                        <path id="Path_72891" data-name="Path 72891"
                                              d="M467.563,515.891l-4.312,17.639s-8.452.487-19.317-14.671l.038.462L445,531.432l.452,5.328-14.872,3.235a390.729,390.729,0,0,1-14.9-46.369c-6.541-25.864-1.468-46.726-1.468-46.726H437.8s10.178,10.216,13.709,20.333c2.834,8.114-.239,14.582,1.029,19.69S467.563,515.891,467.563,515.891Z"
                                              transform="translate(-412.341 -446.9)" fill="#10215f"/>
                                        <path id="Path_72892" data-name="Path 72892"
                                              d="M472.456,611.633c-4.455-4.452-17.187-19.4-19.836-47.063a77.168,77.168,0,0,0,18.766,34.912c.013.013.025.029.038.041Z"
                                              transform="translate(-439.793 -527.098)" fill="#10215f"/>
                                    </g>
                                </g>
                                <path id="BODY" d="M440.562,415.683l-1.77,9.69H415.207v-.013l-1.417-10.05Z"
                                      transform="translate(-361.994 -337.473)" fill="#f08a90"/>
                                <path id="TOP"
                                      d="M436,303.52l-6.726,34.762-26.772-.376c-.592-1.185-6.522-8.3-5.038-13.34s9.19-22.826,9.19-22.826l7.729.468,0,.045s4.544,7.19,12.757.92c-.01-.064-.016-.127-.025-.194Z"
                                      transform="translate(-350.703 -260.069)" fill="#fb5d9c"/>
                                <g id="HANDS">
                                    <path id="RIGHT_HAND"
                                          d="M563.8,315.107c-1.557,1.111-7.745,3.446-8.191,4.557s-14.346,35.163-22.129,34.867-24.638-28.88-26.046-30.259-3.111-17.241,2.745-17.094c3.207.083,7.856,5.93,9.633,11.267s12.005,21.342,12.005,21.342,21.174-23.148,21.533-24.68a30.446,30.446,0,0,0,.592-7.929,1.863,1.863,0,0,1,2.223,1.955c.022,1.755,1.006,4.414,2.563,4.414a6.136,6.136,0,0,0,1.758-.236c.309-1.471,1.369-6.2,2.216-6.2,1.229,0,.423,3.369.038,4.764a6.4,6.4,0,0,0,.729-.994c1.334-2.223,1.669-3.528,3-3.767S565.359,314,563.8,315.107Z"
                                          transform="translate(-424.888 -263.73)" fill="#f08a90"/>
                                    <path id="LEFT_HAND"
                                          d="M307.084,212.555s-4.6-1.408-13.709,0c-18.237,2.818-29.348-5.633-29.348-5.633s9.337-12.674,11.117-16.674,8-13.786,8-13.786,3.672,3.446,5.229,4.111,5.337,1.669,5.337,1.669.245-1.6-.888-2.223c-3.229-1.78-4.118-4.223-1.452-3.557s4.226,2.223,4.445,3.557,1.009,2.892,1.837,2.892.162-7.6-1.172-8.359-10.668-4.42-13.782-3.528-21.581,21.021-26.014,26.562c-3.242,4.047-7.114,9.56-4.891,12.451s15.27,11.655,26.011,13.786c13.117,2.6,24.075,1.051,23.489,2.5S307.084,212.555,307.084,212.555Z"
                                          transform="translate(-251.138 -170.884)" fill="#f08a90"/>
                                    <g id="GRAPES" transform="translate(36.817 6.609)">
                                        <g id="Group_8259" data-name="Group 8259" transform="translate(3.266)">
                                            <path id="Path_72893" data-name="Path 72893"
                                                  d="M381.6,200.762a.735.735,0,0,1-.143-.016.649.649,0,0,1-.49-.777c.051-.226,1.15-5.468-3.519-7.066a.65.65,0,1,1,.42-1.229,6.343,6.343,0,0,1,4.385,5.086,9.51,9.51,0,0,1-.019,3.493A.649.649,0,0,1,381.6,200.762Z"
                                                  transform="translate(-377.007 -191.637)" fill="#006837"/>
                                        </g>
                                        <g id="Group_8270" data-name="Group 8270" transform="translate(0 3.634)">
                                            <g id="Group_8260" data-name="Group 8260" transform="translate(0 6.44)">
                                                <path id="Path_72894" data-name="Path 72894"
                                                      d="M370.945,224.414a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,370.945,224.414Z"
                                                      transform="translate(-366.752 -223.272)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8261" data-name="Group 8261"
                                               transform="translate(3.026 3.397)">
                                                <circle id="Ellipse_370" data-name="Ellipse 370" cx="2.239"
                                                        cy="2.239" r="2.239"
                                                        transform="translate(0 3.514) rotate(-51.704)"
                                                        fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8262" data-name="Group 8262"
                                               transform="translate(7.862 2.147)">
                                                <path id="Path_72895" data-name="Path 72895"
                                                      d="M395.635,210.934a2.24,2.24,0,1,1-3.051-.853A2.237,2.237,0,0,1,395.635,210.934Z"
                                                      transform="translate(-391.442 -209.792)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8263" data-name="Group 8263" transform="translate(11.795)">
                                                <path id="Path_72896" data-name="Path 72896"
                                                      d="M407.985,204.189a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,407.985,204.189Z"
                                                      transform="translate(-403.792 -203.048)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8264" data-name="Group 8264"
                                               transform="translate(3.777 8.685)">
                                                <path id="Path_72897" data-name="Path 72897"
                                                      d="M382.805,231.464a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,382.805,231.464Z"
                                                      transform="translate(-378.612 -230.322)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8265" data-name="Group 8265"
                                               transform="translate(6.784 5.613)">
                                                <circle id="Ellipse_371" data-name="Ellipse 371" cx="2.239"
                                                        cy="2.239" r="2.239"
                                                        transform="translate(0 3.166) rotate(-45)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8266" data-name="Group 8266"
                                               transform="translate(11.639 4.391)">
                                                <path id="Path_72898" data-name="Path 72898"
                                                      d="M407.495,217.979a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,407.495,217.979Z"
                                                      transform="translate(-403.301 -216.838)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8267" data-name="Group 8267"
                                               transform="translate(7.576 10.974)">
                                                <path id="Path_72899" data-name="Path 72899"
                                                      d="M394.735,238.649a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,394.735,238.649Z"
                                                      transform="translate(-390.542 -237.508)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8268" data-name="Group 8268"
                                               transform="translate(11.509 8.827)">
                                                <path id="Path_72900" data-name="Path 72900"
                                                      d="M407.085,231.909a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,407.085,231.909Z"
                                                      transform="translate(-402.892 -230.768)" fill="#c3b61b"/>
                                            </g>
                                            <g id="Group_8269" data-name="Group 8269"
                                               transform="translate(11.404 13.305)">
                                                <path id="Path_72901" data-name="Path 72901"
                                                      d="M406.755,245.969a2.24,2.24,0,1,1-3.051-.853A2.238,2.238,0,0,1,406.755,245.969Z"
                                                      transform="translate(-402.562 -244.828)" fill="#c3b61b"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g id="HEAD_1_" transform="translate(57.362 1.04)">
                                    <path id="HEAD"
                                          d="M450.309,232.537c.01.067.016.134.025.194-8.21,6.273-12.757-.92-12.757-.92l0-.045.487-5.748.408-4.812h0a44.744,44.744,0,0,1-5.688-.8c-1.019-.382-1.952-9.955-1.3-13.063a29.386,29.386,0,0,1,3.185-8.283c.946-.685,2.579-1.2,4.949.274,3.968,2.478,4.56,11.442,4.56,11.442s2.115-3.9,4.541-2.821-1.124,5.8-.984,8.015c.22,3.436,3.213,6.573,3.213,6.573S449.946,229.375,450.309,232.537Z"
                                          transform="translate(-431.268 -190.668)" fill="#f08a90"/>
                                    <path id="HAIR_2_"
                                          d="M441.95,182.548c.949-.688,2.579-1.207,4.945.274,3.971,2.478,4.56,11.439,4.56,11.439s2.115-3.9,4.541-2.818-1.124,5.8-.984,8.012c.22,3.436,3.21,6.573,3.21,6.573.118-.083.232-.162.35-.248l0,0q.74-.535,1.414-1.1c6.786-5.713,8.222-13.524,6.216-17.445-.592-1.156-1.121-2.134-1.592-2.958,0,0,5.649-.522,6.41,3.9s-8.28,11.1-3.777,19.839c2.331,4.522-2.579,3.474-6.458,14.483-6.057,17.193,15.155,28.832,15.155,28.832s-7.522-12.368,7.331-17.788c7.226-2.637,7.706-15.164,1.939-19.626-4.35-3.366-8.343-9.474-2.882-17.6s-.2-20.037-8.722-21.865a10.48,10.48,0,0,0-11.875,5.576c-1.022-.385-10.706-5.2-17.6-.076A9.265,9.265,0,0,0,441.95,182.548Z"
                                          transform="translate(-438.548 -174.151)" fill="#2d1b5a"/>
                                    <path id="SHADOW"
                                          d="M458.788,264.78c-.446,3.754-6.168,6.493-6.168,6.493l.408-4.812A23.29,23.29,0,0,0,458.788,264.78Z"
                                          transform="translate(-445.821 -235.919)" fill="#ec6e7e"/>
                                </g>
                                <g id="FRUITS" transform="translate(107.862 17.096)">
                                    <rect id="PLATE" width="65.119" height="3.949" transform="translate(0 22.664)"
                                          fill="#eee"/>
                                    <g id="WATERMELON" transform="translate(17.394)">
                                        <path id="Path_72902" data-name="Path 72902"
                                              d="M664.876,281.554a16.913,16.913,0,0,1-10.818,3.6,17.757,17.757,0,0,1-9.168-2.42l.841-2.086c-.194.51-.353.943-.474,1.277a15.913,15.913,0,0,0,17.053.108,10.824,10.824,0,0,0,2.235-1.306Z"
                                              transform="translate(-644.756 -262.791)" fill="#fff"/>
                                        <g id="Group_8273" data-name="Group 8273" transform="translate(0.5)">
                                            <g id="Group_8271" data-name="Group 8271">
                                                <path id="Path_72903" data-name="Path 72903"
                                                      d="M663.227,243.721c-.045.032-.089.061-.134.089a15.913,15.913,0,0,1-17.053-.108c.118-.337.28-.771.474-1.277,1.4-3.672,4.5-11.251,5.872-14.588.1-.242.191-.462.271-.656.255-.621.4-.981.4-.981h.006c0-.013.006-.022.009-.032.3-.943.723-1.6,1.564-1.6a1.247,1.247,0,0,1,.758.232l.086.067c.01.006.016.016.026.022a.6.6,0,0,1,.048.045l.035.035c.013.013.022.025.035.038h0a.463.463,0,0,1,.035.041c.013.013.022.029.035.041s.022.029.032.045c.045.061.083.124.124.191.01.016.019.035.029.051s.019.038.029.054a.243.243,0,0,0,.022.041s0,.006.006.01c.013.029.026.054.041.083s.022.051.035.076c.06.14.118.293.172.455,0,.01.006.022.01.032a.548.548,0,0,0,.022.067h.006s.252.621.666,1.634C658.434,231.643,662.217,240.989,663.227,243.721Z"
                                                      transform="translate(-646.04 -224.57)" fill="#fc577a"/>
                                            </g>
                                            <g id="Group_8272" data-name="Group 8272"
                                               transform="translate(8.595 0.006)">
                                                <path id="Path_72904" data-name="Path 72904"
                                                      d="M683.742,242.506c-.006.006-.013.01-.019.016a10.825,10.825,0,0,1-2.235,1.306c.044-.029.089-.06.134-.089-1.009-2.732-4.793-12.079-6.34-15.887-.411-1.013-.666-1.634-.666-1.634h-.006c-.006-.022-.016-.045-.022-.067s-.006-.022-.01-.032c-.054-.162-.111-.315-.172-.455-.013-.025-.022-.051-.035-.076a.679.679,0,0,0-.041-.083s0-.006-.006-.01a.272.272,0,0,0-.022-.041c-.01-.019-.019-.038-.029-.054s-.019-.035-.029-.051a2.013,2.013,0,0,0-.124-.191c-.01-.016-.022-.029-.032-.045a.429.429,0,0,0-.035-.041c-.013-.013-.022-.029-.035-.041h0c-.013-.013-.022-.025-.035-.038a.4.4,0,0,0-.035-.035c-.016-.016-.032-.029-.048-.045s-.016-.016-.025-.022a.793.793,0,0,0-.086-.067,1.247,1.247,0,0,0-.758-.232h2.589a1.248,1.248,0,0,1,.758.232,2.688,2.688,0,0,1,.815,1.4h.006s.252.621.666,1.634C679.236,231.2,682.338,238.866,683.742,242.506Z"
                                                      transform="translate(-673.03 -224.59)" fill="#bd415c"/>
                                            </g>
                                        </g>
                                        <g id="Group_8274" data-name="Group 8274" transform="translate(0 18.524)">
                                            <path id="Path_72905" data-name="Path 72905"
                                                  d="M653.772,286.88a18.1,18.1,0,0,1-9.3-2.458l.268-.525a17.567,17.567,0,0,0,9.034,2.382,16.722,16.722,0,0,0,10.649-3.538l.334.474A17.225,17.225,0,0,1,653.772,286.88Z"
                                                  transform="translate(-644.47 -282.74)" fill="#1692ad"/>
                                        </g>
                                        <path id="Path_72906" data-name="Path 72906"
                                              d="M672.493,231.831c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S672.493,231.179,672.493,231.831Z"
                                              transform="translate(-662.94 -228.714)" fill="#10215f"/>
                                        <path id="Path_72907" data-name="Path 72907"
                                              d="M665.033,243.711c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S665.033,243.059,665.033,243.711Z"
                                              transform="translate(-657.856 -236.811)" fill="#10215f"/>
                                        <path id="Path_72908" data-name="Path 72908"
                                              d="M672.523,243.711c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S672.523,243.059,672.523,243.711Z"
                                              transform="translate(-662.96 -236.811)" fill="#10215f"/>
                                        <path id="Path_72909" data-name="Path 72909"
                                              d="M678.283,254.171c0,.653-.207,1.182-.462,1.182s-.462-.529-.462-1.182.207-1.181.462-1.181S678.283,253.519,678.283,254.171Z"
                                              transform="translate(-666.886 -243.94)" fill="#10215f"/>
                                        <path id="Path_72910" data-name="Path 72910"
                                              d="M669.083,254.171c0,.653-.207,1.182-.462,1.182s-.462-.529-.462-1.182.207-1.181.462-1.181S669.083,253.519,669.083,254.171Z"
                                              transform="translate(-660.616 -243.94)" fill="#10215f"/>
                                        <path id="Path_72911" data-name="Path 72911"
                                              d="M660.214,260.241c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S660.214,259.592,660.214,260.241Z"
                                              transform="translate(-654.57 -248.077)" fill="#10215f"/>
                                        <path id="Path_72912" data-name="Path 72912"
                                              d="M667.533,268.3c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S667.533,267.649,667.533,268.3Z"
                                              transform="translate(-659.56 -253.57)" fill="#10215f"/>
                                        <path id="Path_72913" data-name="Path 72913"
                                              d="M680.113,268.011c0,.653-.207,1.182-.462,1.182s-.462-.529-.462-1.182.207-1.181.462-1.181S680.113,267.359,680.113,268.011Z"
                                              transform="translate(-668.133 -253.372)" fill="#10215f"/>
                                        <g id="Group_8276" data-name="Group 8276"
                                           transform="translate(4.261 16.728)">
                                            <path id="Path_72914" data-name="Path 72914"
                                                  d="M672.373,278.281c0,.653-.207,1.181-.461,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S672.373,277.629,672.373,278.281Z"
                                                  transform="translate(-667.119 -277.1)" fill="#10215f"/>
                                            <g id="Group_8275" data-name="Group 8275">
                                                <path id="Path_72915" data-name="Path 72915"
                                                      d="M685.983,278.281c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S685.983,277.629,685.983,278.281Z"
                                                      transform="translate(-676.395 -277.1)" fill="#10215f"/>
                                                <path id="Path_72916" data-name="Path 72916"
                                                      d="M658.773,278.281c0,.653-.207,1.181-.462,1.181s-.462-.529-.462-1.181.207-1.181.462-1.181S658.773,277.629,658.773,278.281Z"
                                                      transform="translate(-657.85 -277.1)" fill="#10215f"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="APPLE" transform="translate(8.515 4.286)">
                                        <path id="Path_72917" data-name="Path 72917"
                                              d="M627.072,267.436h-5.6c-3.681.083-7.416-11.41-2.589-13a6.568,6.568,0,0,1,2.341-.3,8.675,8.675,0,0,1,2.678.564c.236.089.369.156.369.156s.118-.057.331-.14c.013-.006.025-.01.038-.016a7.84,7.84,0,0,1,5.019-.261C634.486,256.026,630.753,267.449,627.072,267.436Z"
                                              transform="translate(-616.589 -249.001)" fill="#f0b61b"/>
                                        <path id="Path_72918" data-name="Path 72918"
                                              d="M640.3,247.45a.426.426,0,0,1-.369.455v2.4s-.134-.064-.369-.156v-2.7Z"
                                              transform="translate(-632.245 -244.45)" fill="#c13602"/>
                                        <path id="Path_72919" data-name="Path 72919"
                                              d="M640.3,246.374v.019a.426.426,0,0,1-.369.455.49.49,0,1,1,.369-.474Z"
                                              transform="translate(-632.245 -243.393)" fill="#7f0026"/>
                                        <g id="Group_8287" data-name="Group 8287" transform="translate(8.07)">
                                            <path id="Path_72920" data-name="Path 72920"
                                                  d="M646.933,238.12l-4.863,4.949a4.316,4.316,0,0,0,3.567-1.373c.051-.054.1-.105.15-.159s.083-.092.121-.14a4.819,4.819,0,0,0,.659-1.022l.057-.124a4.16,4.16,0,0,0,.287-.914l.019-.115A3.371,3.371,0,0,0,646.933,238.12Z"
                                                  transform="translate(-642.026 -238.091)" fill="#1692ad"/>
                                            <path id="Path_72921" data-name="Path 72921"
                                                  d="M643.272,239.434a4.257,4.257,0,0,0-1.3,3.576l4.863-4.949a3.426,3.426,0,0,0-1.108.029c-.038.006-.077.013-.115.022a4.147,4.147,0,0,0-.911.306c-.041.019-.083.038-.124.061a4.772,4.772,0,0,0-1.013.678c-.048.041-.092.083-.137.124S643.326,239.38,643.272,239.434Z"
                                                  transform="translate(-641.932 -238.029)"
                                                  fill="url(#linear-gradient-3)"/>
                                            <g id="Group_8281" data-name="Group 8281"
                                               transform="translate(0.808 1.137)">
                                                <g id="Group_8280" data-name="Group 8280">
                                                    <g id="Group_8277" data-name="Group 8277"
                                                       transform="translate(2.532)">
                                                        <path id="Path_72922" data-name="Path 72922"
                                                              d="M652.56,241.947l-.14.143h.006l1.538-.376h0q.009-.057.019-.115h0l-1.42.347Z"
                                                              transform="translate(-652.42 -241.6)" fill="#106e82"/>
                                                    </g>
                                                    <g id="Group_8278" data-name="Group 8278"
                                                       transform="translate(1.242 1.025)">
                                                        <path id="Path_72923" data-name="Path 72923"
                                                              d="M648.513,245.45l-.143.146h.006l2.487-.653h0l.057-.124h0l-2.4.631Z"
                                                              transform="translate(-648.37 -244.82)"
                                                              fill="#106e82"/>
                                                    </g>
                                                    <g id="Group_8279" data-name="Group 8279"
                                                       transform="translate(0 2.172)">
                                                        <path id="Path_72924" data-name="Path 72924"
                                                              d="M644.613,249.168l-.143.146h.006l2.946-.755h.006c.041-.045.083-.092.121-.14h-.006l-2.927.748Z"
                                                              transform="translate(-644.47 -248.42)"
                                                              fill="#106e82"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Group_8286" data-name="Group 8286"
                                               transform="translate(0.808 0.058)">
                                                <g id="Group_8285" data-name="Group 8285">
                                                    <g id="Group_8282" data-name="Group 8282"
                                                       transform="translate(2.532)">
                                                        <path id="Path_72925" data-name="Path 72925"
                                                              d="M652.56,239.637l-.14.143v-.006l.341-1.538v0c.038-.01.077-.016.115-.022v0l-.315,1.42Z"
                                                              transform="translate(-652.42 -238.21)"
                                                              fill="#1692ad"/>
                                                    </g>
                                                    <g id="Group_8283" data-name="Group 8283"
                                                       transform="translate(1.242 0.325)">
                                                        <path id="Path_72926" data-name="Path 72926"
                                                              d="M648.513,241.641l-.143.146v-.006l.6-2.487v0c.041-.019.083-.041.124-.061v0l-.576,2.4Z"
                                                              transform="translate(-648.37 -239.23)"
                                                              fill="#1692ad"/>
                                                    </g>
                                                    <g id="Group_8284" data-name="Group 8284"
                                                       transform="translate(0 1.064)">
                                                        <path id="Path_72927" data-name="Path 72927"
                                                              d="M644.613,244.486l-.143.146v-.006l.688-2.946v-.006c.045-.041.092-.083.137-.124v.006l-.685,2.927Z"
                                                              transform="translate(-644.47 -241.55)"
                                                              fill="#1692ad"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <path id="Path_72928" data-name="Path 72928"
                                              d="M644.228,267.372H641.8a9.592,9.592,0,0,0,4.49-10.05c-.478-3.114-4.49-2.417-4.49-2.417l-.038-.255a7.831,7.831,0,0,1,5.057-.274C651.641,255.962,647.909,267.388,644.228,267.372Z"
                                              transform="translate(-633.744 -248.959)" fill="#e6e6e6"/>
                                        <path id="Path_72929" data-name="Path 72929"
                                              d="M641.089,247.45v2.7c-.013.006-.025.01-.038.016-.213.083-.331.14-.331.14v-2.4a.431.431,0,0,0,.369-.455Z"
                                              transform="translate(-633.036 -244.45)" fill="#7f0026"/>
                                    </g>
                                    <g id="BERRIES" transform="translate(1.427 13.143)">
                                        <g id="Group_8324" data-name="Group 8324" transform="translate(3.004)">
                                            <path id="Path_72930" data-name="Path 72930"
                                                  d="M610.316,275.993c-.019.026-.041.051-.064.08-.038.045-.073.086-.112.127a9.529,9.529,0,0,1-3.124,2.076c-.089.045-.178.089-.267.131a2.328,2.328,0,0,1-2.191.226l-.048-.029-.019-.013a.228.228,0,0,1-.045-.032,2.359,2.359,0,0,1-.682-2.1c0-.1.006-.2.01-.3a9.637,9.637,0,0,1,.624-3.716c.022-.051.048-.1.07-.156.016-.032.029-.06.045-.089.805-1.548,2.449-1.178,4.057-.127.038.025.073.048.108.073s.073.045.111.07C610.4,273.267,611.4,274.627,610.316,275.993Z"
                                                  transform="translate(-603.763 -269.462)" fill="#fc577a"/>
                                            <g id="Group_8321" data-name="Group 8321"
                                               transform="translate(0.867 2.743)">
                                                <g id="Group_8292" data-name="Group 8292"
                                                   transform="translate(0.124 3.516)">
                                                    <g id="Group_8288" data-name="Group 8288">
                                                        <path id="Path_72931" data-name="Path 72931"
                                                              d="M606.967,286.246a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,606.967,286.246Z"
                                                              transform="translate(-606.877 -285.497)"
                                                              fill="#fc577a"/>
                                                    </g>
                                                    <g id="Group_8289" data-name="Group 8289"
                                                       transform="translate(0.713 0.468)">
                                                        <path id="Path_72932" data-name="Path 72932"
                                                              d="M609.207,287.716a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,609.207,287.716Z"
                                                              transform="translate(-609.117 -286.967)"
                                                              fill="#fc577a"/>
                                                    </g>
                                                    <g id="Group_8290" data-name="Group 8290"
                                                       transform="translate(0.096 1.423)">
                                                        <path id="Path_72933" data-name="Path 72933"
                                                              d="M607.267,290.716a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.193.193,0,0,1,607.267,290.716Z"
                                                              transform="translate(-607.177 -289.967)"
                                                              fill="#fc577a"/>
                                                    </g>
                                                    <g id="Group_8291" data-name="Group 8291"
                                                       transform="translate(1.411 0.923)">
                                                        <path id="Path_72934" data-name="Path 72934"
                                                              d="M611.4,289.146a.2.2,0,0,1-.057-.274l.251-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.2.2,0,0,1,611.4,289.146Z"
                                                              transform="translate(-611.307 -288.397)"
                                                              fill="#fc577a"/>
                                                    </g>
                                                </g>
                                                <g id="Group_8300" data-name="Group 8300"
                                                   transform="translate(0.07 2.099)">
                                                    <g id="Group_8296" data-name="Group 8296"
                                                       transform="translate(0.694 0.455)">
                                                        <g id="Group_8293" data-name="Group 8293">
                                                            <path id="Path_72935" data-name="Path 72935"
                                                                  d="M608.977,283.226a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.192.192,0,0,1,608.977,283.226Z"
                                                                  transform="translate(-608.887 -282.477)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8294" data-name="Group 8294"
                                                           transform="translate(0.713 0.468)">
                                                            <path id="Path_72936" data-name="Path 72936"
                                                                  d="M611.217,284.7a.2.2,0,0,1-.057-.274l.251-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,611.217,284.7Z"
                                                                  transform="translate(-611.127 -283.947)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8295" data-name="Group 8295"
                                                           transform="translate(1.411 0.924)">
                                                            <path id="Path_72937" data-name="Path 72937"
                                                                  d="M613.407,286.126a.2.2,0,0,1-.058-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,613.407,286.126Z"
                                                                  transform="translate(-613.317 -285.377)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_8299" data-name="Group 8299">
                                                        <g id="Group_8297" data-name="Group 8297">
                                                            <path id="Path_72938" data-name="Path 72938"
                                                                  d="M606.8,281.8a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.193.193,0,0,1,606.8,281.8Z"
                                                                  transform="translate(-606.707 -281.047)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8298" data-name="Group 8298"
                                                           transform="translate(2.786 1.825)">
                                                            <path id="Path_72939" data-name="Path 72939"
                                                                  d="M615.547,287.526a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.192.192,0,0,1,615.547,287.526Z"
                                                                  transform="translate(-615.457 -286.777)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_8308" data-name="Group 8308"
                                                   transform="translate(1.427)">
                                                    <g id="Group_8304" data-name="Group 8304"
                                                       transform="translate(0.694 0.455)">
                                                        <g id="Group_8301" data-name="Group 8301">
                                                            <path id="Path_72940" data-name="Path 72940"
                                                                  d="M613.237,276.636a.2.2,0,0,1-.057-.274l.251-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.192.192,0,0,1,613.237,276.636Z"
                                                                  transform="translate(-613.147 -275.887)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8302" data-name="Group 8302"
                                                           transform="translate(0.717 0.468)">
                                                            <path id="Path_72941" data-name="Path 72941"
                                                                  d="M615.487,278.106a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.193.193,0,0,1,615.487,278.106Z"
                                                                  transform="translate(-615.397 -277.357)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8303" data-name="Group 8303"
                                                           transform="translate(1.411 0.924)">
                                                            <path id="Path_72942" data-name="Path 72942"
                                                                  d="M617.667,279.536a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.192.192,0,0,1,617.667,279.536Z"
                                                                  transform="translate(-617.577 -278.787)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_8307" data-name="Group 8307">
                                                        <g id="Group_8305" data-name="Group 8305">
                                                            <path id="Path_72943" data-name="Path 72943"
                                                                  d="M611.057,275.206a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.192.192,0,0,1,611.057,275.206Z"
                                                                  transform="translate(-610.967 -274.457)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8306" data-name="Group 8306"
                                                           transform="translate(2.79 1.828)">
                                                            <path id="Path_72944" data-name="Path 72944"
                                                                  d="M619.817,280.946a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,619.817,280.946Z"
                                                                  transform="translate(-619.727 -280.197)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_8320" data-name="Group 8320"
                                                   transform="translate(0 0.554)">
                                                    <g id="Group_8312" data-name="Group 8312">
                                                        <g id="Group_8309" data-name="Group 8309">
                                                            <path id="Path_72945" data-name="Path 72945"
                                                                  d="M606.577,276.946a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.2.2,0,0,1,606.577,276.946Z"
                                                                  transform="translate(-606.487 -276.197)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8310" data-name="Group 8310"
                                                           transform="translate(4.153 2.735)">
                                                            <path id="Path_72946" data-name="Path 72946"
                                                                  d="M619.617,285.536a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,619.617,285.536Z"
                                                                  transform="translate(-619.527 -284.787)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                        <g id="Group_8311" data-name="Group 8311"
                                                           transform="translate(0.697 0.455)">
                                                            <path id="Path_72947" data-name="Path 72947"
                                                                  d="M608.767,278.376a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.2.2,0,0,1,608.767,278.376Z"
                                                                  transform="translate(-608.677 -277.627)"
                                                                  fill="#fc577a"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_8319" data-name="Group 8319"
                                                       transform="translate(1.436 0.936)">
                                                        <g id="Group_8316" data-name="Group 8316">
                                                            <g id="Group_8313" data-name="Group 8313">
                                                                <path id="Path_72948" data-name="Path 72948"
                                                                      d="M611.087,279.886a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.193.193,0,0,1,611.087,279.886Z"
                                                                      transform="translate(-610.997 -279.137)"
                                                                      fill="#fc577a"/>
                                                            </g>
                                                            <g id="Group_8314" data-name="Group 8314"
                                                               transform="translate(0.713 0.468)">
                                                                <path id="Path_72949" data-name="Path 72949"
                                                                      d="M613.327,281.356a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.252.385A.193.193,0,0,1,613.327,281.356Z"
                                                                      transform="translate(-613.237 -280.607)"
                                                                      fill="#fc577a"/>
                                                            </g>
                                                            <g id="Group_8315" data-name="Group 8315"
                                                               transform="translate(1.408 0.924)">
                                                                <path id="Path_72950" data-name="Path 72950"
                                                                      d="M615.507,282.786a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.058.274l-.252.385A.192.192,0,0,1,615.507,282.786Z"
                                                                      transform="translate(-615.417 -282.037)"
                                                                      fill="#fc577a"/>
                                                            </g>
                                                        </g>
                                                        <g id="Group_8318" data-name="Group 8318"
                                                           transform="translate(2.083 1.382)">
                                                            <g id="Group_8317" data-name="Group 8317">
                                                                <path id="Path_72951" data-name="Path 72951"
                                                                      d="M617.627,284.226a.2.2,0,0,1-.057-.274l.252-.385a.193.193,0,0,1,.271-.057.2.2,0,0,1,.057.274l-.251.385A.192.192,0,0,1,617.627,284.226Z"
                                                                      transform="translate(-617.537 -283.477)"
                                                                      fill="#fc577a"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <path id="Path_72952" data-name="Path 72952"
                                                  d="M611.172,277.36c-.019.025-.041.051-.064.08-.038.045-.073.086-.115.127a9.53,9.53,0,0,1-3.124,2.076c-.089.045-.179.089-.268.131a2.328,2.328,0,0,1-2.191.226l-.048-.029-.016-.013c-.016-.01-.032-.022-.044-.032a1.3,1.3,0,0,1-.283-.274,2.934,2.934,0,0,0,1.783-.385c.089-.041.179-.086.268-.131a9.5,9.5,0,0,0,3.124-2.076c.038-.041.076-.086.111-.127a.773.773,0,0,0,.064-.08c1.051-1.331.13-2.656-1.4-3.694.153.086.306.178.456.28.035.025.073.048.108.073s.073.045.108.07C611.252,274.634,612.252,275.994,611.172,277.36Z"
                                                  transform="translate(-604.62 -270.83)" fill="#fc577a"/>
                                            <g id="Group_8323" data-name="Group 8323" transform="translate(4.084)">
                                                <g id="Group_8322" data-name="Group 8322">
                                                    <path id="Path_72953" data-name="Path 72953"
                                                          d="M617.452,267.109c.156.745.111,1.382-.1,1.427s-.513-.522-.669-1.264-.112-1.382.1-1.427S617.3,266.367,617.452,267.109Z"
                                                          transform="translate(-616.588 -265.842)" fill="#44a085"/>
                                                    <path id="Path_72954" data-name="Path 72954"
                                                          d="M619.66,272.632c-.72-.236-1.366-.22-1.449.032s.433.65,1.153.885,1.366.223,1.449-.032S620.377,272.868,619.66,272.632Z"
                                                          transform="translate(-617.688 -270.356)" fill="#44a085"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_8327" data-name="Group 8327" transform="translate(0 5.336)">
                                            <path id="Path_72955" data-name="Path 72955"
                                                  d="M598.966,284.585a1.847,1.847,0,0,1,0,2.624,1.868,1.868,0,0,1-2.637,0,1.847,1.847,0,0,1,0-2.624A1.868,1.868,0,0,1,598.966,284.585Z"
                                                  transform="translate(-595.32 -283.581)" fill="#0c2eac"/>
                                            <path id="Path_72956" data-name="Path 72956"
                                                  d="M601.377,284.586a1.847,1.847,0,0,1,0,2.624,1.867,1.867,0,0,1-1.191.538,1.9,1.9,0,0,0,.583-.392,1.847,1.847,0,0,0,0-2.624,1.872,1.872,0,0,0-1.449-.538A1.867,1.867,0,0,1,601.377,284.586Z"
                                                  transform="translate(-597.731 -283.583)" fill="#0c2eac"/>
                                            <g id="Group_8326" data-name="Group 8326">
                                                <g id="Group_8325" data-name="Group 8325">
                                                    <path id="Path_72957" data-name="Path 72957"
                                                          d="M594.33,286.38l.6.3.452-.452Z"
                                                          transform="translate(-594.33 -285.074)" fill="#0c2eac"/>
                                                    <path id="Path_72958" data-name="Path 72958"
                                                          d="M598.133,282.6l.3.6-.452.449Z"
                                                          transform="translate(-596.818 -282.6)" fill="#0c2eac"/>
                                                </g>
                                                <path id="Path_72959" data-name="Path 72959"
                                                      d="M595.81,284.07l.879.395-.481.478Z"
                                                      transform="translate(-595.339 -283.602)" fill="#0c2eac"/>
                                            </g>
                                        </g>
                                        <g id="Group_8330" data-name="Group 8330"
                                           transform="translate(7.329 4.684)">
                                            <path id="Path_72960" data-name="Path 72960"
                                                  d="M621.336,285.528a2.031,2.031,0,0,1-2.56,1.331,2.061,2.061,0,0,1-1.338-2.576,2.032,2.032,0,0,1,2.56-1.331A2.061,2.061,0,0,1,621.336,285.528Z"
                                                  transform="translate(-617.344 -282.12)" fill="#0c2eac"/>
                                            <path id="Path_72961" data-name="Path 72961"
                                                  d="M621.981,286.527a2.031,2.031,0,0,1-2.56,1.331,2.059,2.059,0,0,1-1.13-.888,2.088,2.088,0,0,0,.678.369,2.031,2.031,0,0,0,2.56-1.331,2.061,2.061,0,0,0-.207-1.688A2.059,2.059,0,0,1,621.981,286.527Z"
                                                  transform="translate(-617.989 -283.119)" fill="#0c2eac"/>
                                            <g id="Group_8329" data-name="Group 8329" transform="translate(1.846)">
                                                <g id="Group_8328" data-name="Group 8328">
                                                    <path id="Path_72962" data-name="Path 72962"
                                                          d="M623.14,280.55l.013.742.669.213Z"
                                                          transform="translate(-623.14 -280.55)" fill="#0c2eac"/>
                                                    <path id="Path_72963" data-name="Path 72963"
                                                          d="M626.888,282.5l-.43.6-.669-.213Z"
                                                          transform="translate(-624.946 -281.879)" fill="#0c2eac"/>
                                                </g>
                                                <path id="Path_72964" data-name="Path 72964"
                                                      d="M625.07,280.66l.061,1.06-.71-.229Z"
                                                      transform="translate(-624.012 -280.625)" fill="#0c2eac"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="PEPPER" transform="translate(36.673 5.035)">
                                        <g id="Group_8332" data-name="Group 8332" transform="translate(0 3.42)">
                                            <g id="Group_8331" data-name="Group 8331"
                                               transform="translate(0 0.149)">
                                                <path id="Path_72965" data-name="Path 72965"
                                                      d="M742.814,258.752c-.341,3.895-2.446,6.691-4.722,6.694a6.04,6.04,0,0,1-1.611-.188c2.022-.927,2.3-3.589,2.3-6.732,0-2.755-.042-5.14-1.475-6.308a3,3,0,0,1,2.019-.608C741.594,251.806,743.154,254.854,742.814,258.752Z"
                                                      transform="translate(-726.459 -251.596)" fill="#da4950"/>
                                                <path id="Path_72966" data-name="Path 72966"
                                                      d="M711.4,265.257a11.24,11.24,0,0,1-1.621.182c-2.271.111-4.382-2.8-4.723-6.7s1.22-6.942,3.487-7.143a3.028,3.028,0,0,1,2.1.669c-1.35,1.191-1.554,3.544-1.554,6.251C709.095,261.668,709.372,264.336,711.4,265.257Z"
                                                      transform="translate(-705.013 -251.589)" fill="#da4950"/>
                                            </g>
                                            <path id="Path_72967" data-name="Path 72967"
                                                  d="M726.068,258.2c0,3.143-.277,5.805-2.3,6.732a4.288,4.288,0,0,1-1.821.35,4.339,4.339,0,0,1-1.809-.344c-2.032-.92-2.309-3.589-2.309-6.735,0-2.707.207-5.057,1.554-6.251a3.5,3.5,0,0,1,2.162-.818c.13-.01.264-.013.4-.013.2,0,.4.01.583.025a3.636,3.636,0,0,1,2.064.748C726.027,253.063,726.068,255.448,726.068,258.2Z"
                                                  transform="translate(-713.748 -251.12)" fill="#ec4f50"/>
                                        </g>
                                        <g id="Group_8333" data-name="Group 8333" transform="translate(7.212)">
                                            <path id="Path_72968" data-name="Path 72968"
                                                  d="M729.638,242.651a2.654,2.654,0,0,1-.245,1.1c-.236-.019-.484-.032-.742-.032-.175,0-.347.006-.513.016a1.858,1.858,0,0,0,.4-1.1,1.838,1.838,0,0,0-.7-1.312.548.548,0,1,1,.739-.809A2.894,2.894,0,0,1,729.638,242.651Z"
                                                  transform="translate(-727.661 -240.381)" fill="#1692ad"/>
                                        </g>
                                    </g>
                                    <g id="CARROT_1_" transform="translate(42.032 15.327)">
                                        <path id="Path_72969" data-name="Path 72969"
                                              d="M744.261,274.961a4.972,4.972,0,0,1,.182.64c.019.083.032.166.048.252l.029.2q.014.1.019.2c.006.086.013.172.013.255a4.6,4.6,0,0,1-.026.666c-.159,1.509-1.022,2.694-2.191,2.834h-18.75c-.013,0-.022,0-.035,0a1.7,1.7,0,0,1-.809-.115,1.4,1.4,0,0,1-.892-1.118,1.508,1.508,0,0,1,1.395-1.608l3.041-.742.895-.22.812-.2,1.3-.318.933-.229.022-.006.895-.22,2.529-.618.895-.22,2.64-.646.178-.045.143-.035.752-.185,1.439-.35.863-.21.882-.217h.013a2.363,2.363,0,0,1,2.019.9A4.434,4.434,0,0,1,744.261,274.961Z"
                                              transform="translate(-721.839 -272.7)" fill="#ed8a21"/>
                                        <g id="Group_8335" data-name="Group 8335"
                                           transform="translate(22.422 0.347)">
                                            <g id="Group_8334" data-name="Group 8334">
                                                <path id="Path_72970" data-name="Path 72970"
                                                      d="M796.94,273.821,792.25,275.7a5.125,5.125,0,0,1,.182.64c.019.083.032.166.048.252l.029.2q.014.1.019.2c.006.086.013.172.016.255a4.624,4.624,0,0,1-.026.666l5,.716a.457.457,0,1,0,.127-.9l-4.143-.592,4.844-.583a.457.457,0,1,0-.112-.908l-4.844.583,3.885-1.56a.456.456,0,1,0-.338-.847Z"
                                                      transform="translate(-792.25 -273.788)" fill="#00c2c4"/>
                                            </g>
                                        </g>
                                        <g id="Group_8355" data-name="Group 8355"
                                           transform="translate(2.706 0.025)">
                                            <g id="Group_8337" data-name="Group 8337"
                                               transform="translate(15.317 4.152)">
                                                <g id="Group_8336" data-name="Group 8336">
                                                    <path id="Path_72971" data-name="Path 72971"
                                                          d="M778.84,285.822a.454.454,0,0,0-.4.51l.315,2.624h.914a.683.683,0,0,0,0-.08l-.319-2.656A.454.454,0,0,0,778.84,285.822Z"
                                                          transform="translate(-778.438 -285.818)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8339" data-name="Group 8339"
                                               transform="translate(12.831 0.78)">
                                                <g id="Group_8338" data-name="Group 8338">
                                                    <path id="Path_72972" data-name="Path 72972"
                                                          d="M771.525,275.23l-.895.22.252,2.089a.457.457,0,0,0,.908-.111Z"
                                                          transform="translate(-770.63 -275.23)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8341" data-name="Group 8341" transform="translate(16.028)">
                                                <g id="Group_8340" data-name="Group 8340">
                                                    <path id="Path_72973" data-name="Path 72973"
                                                          d="M781.565,272.78h-.013l-.882.217.3,2.481a.457.457,0,0,0,.908-.111Z"
                                                          transform="translate(-780.67 -272.78)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8343" data-name="Group 8343"
                                               transform="translate(11.098 4.659)">
                                                <g id="Group_8342" data-name="Group 8342">
                                                    <path id="Path_72974" data-name="Path 72974"
                                                          d="M765.59,287.414a.454.454,0,0,0-.4.51l.255,2.118h.92l-.268-2.226A.46.46,0,0,0,765.59,287.414Z"
                                                          transform="translate(-765.188 -287.411)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8345" data-name="Group 8345"
                                               transform="translate(9.118 1.688)">
                                                <g id="Group_8344" data-name="Group 8344">
                                                    <path id="Path_72975" data-name="Path 72975"
                                                          d="M759.865,278.08l-.895.22.2,1.637a.457.457,0,1,0,.907-.111Z"
                                                          transform="translate(-758.97 -278.08)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8347" data-name="Group 8347"
                                               transform="translate(7.831 5.054)">
                                                <g id="Group_8346" data-name="Group 8346">
                                                    <path id="Path_72976" data-name="Path 72976"
                                                          d="M755.33,288.653a.454.454,0,0,0-.4.51l.207,1.723h.92l-.22-1.834A.462.462,0,0,0,755.33,288.653Z"
                                                          transform="translate(-754.928 -288.65)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8349" data-name="Group 8349"
                                               transform="translate(5.698 2.525)">
                                                <g id="Group_8348" data-name="Group 8348">
                                                    <path id="Path_72977" data-name="Path 72977"
                                                          d="M749.125,280.71l-.895.22.146,1.216a.457.457,0,0,0,.908-.111Z"
                                                          transform="translate(-748.23 -280.71)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8351" data-name="Group 8351"
                                               transform="translate(4.016 5.512)">
                                                <g id="Group_8350" data-name="Group 8350">
                                                    <path id="Path_72978" data-name="Path 72978"
                                                          d="M743.35,290.093a.454.454,0,0,0-.4.509l.153,1.264h.92l-.166-1.373A.459.459,0,0,0,743.35,290.093Z"
                                                          transform="translate(-742.949 -290.09)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                            <g id="Group_8352" data-name="Group 8352"
                                               transform="translate(1.736 3.493)">
                                                <path id="Path_72979" data-name="Path 72979"
                                                      d="M736.685,283.75l-.895.22.15,1.245a.457.457,0,1,0,.907-.111Z"
                                                      transform="translate(-735.79 -283.75)" fill="#f0b61b"/>
                                            </g>
                                            <g id="Group_8354" data-name="Group 8354"
                                               transform="translate(0 5.997)">
                                                <g id="Group_8353" data-name="Group 8353">
                                                    <path id="Path_72980" data-name="Path 72980"
                                                          d="M730.74,291.613a.454.454,0,0,0-.4.509l.1.78h.92l-.108-.892A.46.46,0,0,0,730.74,291.613Z"
                                                          transform="translate(-730.338 -291.61)" fill="#f0b61b"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="CUCUMBER" transform="translate(18.931 17.298)">
                                        <g id="Group_8358" data-name="Group 8358" transform="translate(1.291)">
                                            <path id="Path_72981" data-name="Path 72981"
                                                  d="M671.167,282.364c0,1-.363,1.8-.974,1.955a.876.876,0,0,1-.223.029H656.748c-1.834,0-3.328-1.169-3.395-2.627,0-.035,0-.067,0-.1v-.013a2.225,2.225,0,0,1,.121-.713c.013-.041.029-.08.045-.121a3.41,3.41,0,0,1,3.229-1.882h12.327c.682,0,1.411.758,1.805,1.869.054.153.1.312.143.474.026.105.048.21.067.312A4.339,4.339,0,0,1,671.167,282.364Z"
                                                  transform="translate(-653.35 -278.89)" fill="#108c6d"/>
                                            <g id="Group_8357" data-name="Group 8357"
                                               transform="translate(14.613 0.271)">
                                                <path id="Path_72982" data-name="Path 72982"
                                                      d="M702.067,281.849c.331,1.344,0,2.589-.748,2.78s-1.621-.739-1.952-2.083,0-2.589.748-2.78S701.732,280.509,702.067,281.849Z"
                                                      transform="translate(-699.239 -279.742)" fill="#8fe0b6"/>
                                                <g id="Group_8356" data-name="Group 8356"
                                                   transform="translate(0.588 0.984)">
                                                    <path id="Path_72983" data-name="Path 72983"
                                                          d="M702.784,284.1c.2.806,0,1.554-.449,1.669s-.971-.443-1.172-1.248,0-1.554.449-1.669S702.587,283.291,702.784,284.1Z"
                                                          transform="translate(-701.086 -282.833)" fill="#bcecd3"/>
                                                    <path id="Path_72984" data-name="Path 72984"
                                                          d="M702.9,283.579c.035.147.006.277-.067.3s-.159-.086-.2-.233-.007-.277.067-.3S702.867,283.432,702.9,283.579Z"
                                                          transform="translate(-702.133 -283.182)" fill="#8fe0b6"/>
                                                    <path id="Path_72985" data-name="Path 72985"
                                                          d="M701.939,284.762c.1.111.137.242.083.293s-.182,0-.283-.112-.137-.242-.083-.293S701.84,284.65,701.939,284.762Z"
                                                          transform="translate(-701.457 -284.059)" fill="#8fe0b6"/>
                                                    <path id="Path_72986" data-name="Path 72986"
                                                          d="M705.319,289.359c.1.112.137.242.083.293s-.182,0-.284-.111-.137-.242-.083-.293S705.217,289.248,705.319,289.359Z"
                                                          transform="translate(-703.761 -287.191)" fill="#8fe0b6"/>
                                                    <path id="Path_72987" data-name="Path 72987"
                                                          d="M703.888,284.269c-.035.146-.006.277.067.3s.163-.086.2-.232.006-.277-.067-.3S703.923,284.122,703.888,284.269Z"
                                                          transform="translate(-702.985 -283.652)" fill="#8fe0b6"/>
                                                    <path id="Path_72988" data-name="Path 72988"
                                                          d="M703.188,289.978c-.035.146-.006.277.067.3s.162-.086.2-.232.006-.277-.067-.3S703.226,289.834,703.188,289.978Z"
                                                          transform="translate(-702.508 -287.543)" fill="#8fe0b6"/>
                                                    <path id="Path_72989" data-name="Path 72989"
                                                          d="M704.532,290.3c.035.146.007.277-.067.3s-.159-.086-.2-.232-.006-.277.067-.3S704.5,290.151,704.532,290.3Z"
                                                          transform="translate(-703.244 -287.761)" fill="#8fe0b6"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_8361" data-name="Group 8361"
                                           transform="translate(16.98 0.083)">
                                            <path id="Path_72990" data-name="Path 72990"
                                                  d="M706.017,281.271c.509,1.452.217,2.882-.656,3.194s-1.987-.608-2.493-2.06-.217-2.882.656-3.194S705.51,279.822,706.017,281.271Z"
                                                  transform="translate(-702.618 -279.15)" fill="#108c6d"/>
                                            <g id="Group_8360" data-name="Group 8360"
                                               transform="translate(0.486 0.233)">
                                                <path id="Path_72991" data-name="Path 72991"
                                                      d="M706.885,281.827c.443,1.309.239,2.576-.452,2.834s-1.611-.592-2.054-1.9-.239-2.576.452-2.834S706.442,280.518,706.885,281.827Z"
                                                      transform="translate(-704.145 -279.882)" fill="#8fe0b6"/>
                                                <g id="Group_8359" data-name="Group 8359"
                                                   transform="translate(0.594 0.963)">
                                                    <path id="Path_72992" data-name="Path 72992"
                                                          d="M707.653,284.072c.264.783.143,1.545-.271,1.7s-.968-.353-1.232-1.14-.143-1.544.271-1.7S707.389,283.289,707.653,284.072Z"
                                                          transform="translate(-706.01 -282.905)" fill="#bcecd3"/>
                                                    <path id="Path_72993" data-name="Path 72993"
                                                          d="M707.549,283.656c.048.143.032.277-.038.3s-.162-.07-.207-.213-.032-.277.038-.3S707.5,283.516,707.549,283.656Z"
                                                          transform="translate(-706.875 -283.27)" fill="#8fe0b6"/>
                                                    <path id="Path_72994" data-name="Path 72994"
                                                          d="M706.73,284.923c.1.1.153.229.1.283s-.175.016-.28-.086-.153-.229-.105-.283S706.625,284.821,706.73,284.923Z"
                                                          transform="translate(-706.297 -284.205)" fill="#8fe0b6"/>
                                                    <path id="Path_72995" data-name="Path 72995"
                                                          d="M710.38,289.2c.105.1.153.229.105.283s-.175.016-.28-.086-.153-.229-.105-.283S710.272,289.1,710.38,289.2Z"
                                                          transform="translate(-708.785 -287.122)" fill="#8fe0b6"/>
                                                    <path id="Path_72996" data-name="Path 72996"
                                                          d="M708.587,284.237c-.022.15.019.277.092.29s.146-.1.166-.248-.019-.277-.092-.29S708.606,284.091,708.587,284.237Z"
                                                          transform="translate(-707.762 -283.643)" fill="#8fe0b6"/>
                                                    <path id="Path_72997" data-name="Path 72997"
                                                          d="M708.457,289.987c-.022.15.019.277.092.29s.147-.1.166-.248-.019-.277-.092-.29S708.479,289.841,708.457,289.987Z"
                                                          transform="translate(-707.674 -287.562)" fill="#8fe0b6"/>
                                                    <path id="Path_72998" data-name="Path 72998"
                                                          d="M709.729,290.2c.048.143.032.277-.038.3s-.163-.07-.207-.213-.032-.277.038-.3S709.685,290.061,709.729,290.2Z"
                                                          transform="translate(-708.36 -287.732)" fill="#8fe0b6"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_8364" data-name="Group 8364"
                                           transform="translate(18.458 0.161)">
                                            <path id="Path_72999" data-name="Path 72999"
                                                  d="M710.732,281.451c.669,1.427.525,2.847-.318,3.175s-2.067-.56-2.736-1.987-.526-2.847.319-3.175S710.067,280.025,710.732,281.451Z"
                                                  transform="translate(-707.257 -279.396)" fill="#108c6d"/>
                                            <g id="Group_8363" data-name="Group 8363"
                                               transform="translate(0.481 0.227)">
                                                <path id="Path_73000" data-name="Path 73000"
                                                      d="M711.593,281.994c.586,1.283.519,2.544-.153,2.815s-1.688-.551-2.274-1.834-.519-2.544.153-2.815S711.007,280.71,711.593,281.994Z"
                                                      transform="translate(-708.768 -280.108)" fill="#8fe0b6"/>
                                                <g id="Group_8362" data-name="Group 8362"
                                                   transform="translate(0.647 0.951)">
                                                    <path id="Path_73001" data-name="Path 73001"
                                                          d="M712.494,284.226c.35.771.312,1.529-.092,1.691s-1.013-.331-1.363-1.1-.312-1.529.092-1.691S712.143,283.455,712.494,284.226Z"
                                                          transform="translate(-710.8 -283.093)" fill="#bcecd3"/>
                                                    <path id="Path_73002" data-name="Path 73002"
                                                          d="M712.18,283.838c.064.14.06.274-.006.3s-.169-.067-.233-.207-.06-.274.007-.3S712.117,283.7,712.18,283.838Z"
                                                          transform="translate(-711.547 -283.457)" fill="#8fe0b6"/>
                                                    <path id="Path_73003" data-name="Path 73003"
                                                          d="M711.482,285.107c.118.1.178.223.137.28s-.172.022-.29-.076-.178-.223-.137-.28S711.364,285.009,711.482,285.107Z"
                                                          transform="translate(-711.058 -284.395)" fill="#8fe0b6"/>
                                                    <path id="Path_73004" data-name="Path 73004"
                                                          d="M715.622,289.257c.118.1.178.223.137.28s-.172.022-.29-.077-.179-.223-.137-.28S715.5,289.159,715.622,289.257Z"
                                                          transform="translate(-713.88 -287.223)" fill="#8fe0b6"/>
                                                    <path id="Path_73005" data-name="Path 73005"
                                                          d="M713.329,284.387c-.006.146.051.274.124.283s.137-.1.14-.248-.051-.274-.124-.283S713.335,284.241,713.329,284.387Z"
                                                          transform="translate(-712.523 -283.805)" fill="#8fe0b6"/>
                                                    <path id="Path_73006" data-name="Path 73006"
                                                          d="M713.819,290.077c-.006.146.051.274.124.283s.137-.1.14-.248-.051-.274-.124-.283S713.822,289.931,713.819,290.077Z"
                                                          transform="translate(-712.857 -287.683)" fill="#8fe0b6"/>
                                                    <path id="Path_73007" data-name="Path 73007"
                                                          d="M715.081,290.268c.064.14.06.274-.007.3s-.169-.067-.232-.207-.061-.274.006-.3S715.017,290.128,715.081,290.268Z"
                                                          transform="translate(-713.523 -287.839)" fill="#8fe0b6"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_8369" data-name="Group 8369"
                                           transform="translate(2.151 1.143)">
                                            <g id="Group_8367" data-name="Group 8367" transform="translate(1.083)">
                                                <g id="Group_8365" data-name="Group 8365">
                                                    <path id="Path_73008" data-name="Path 73008"
                                                          d="M670.468,282.843H659.632a.182.182,0,0,1,0-.363h10.837a.182.182,0,0,1,0,.363Z"
                                                          transform="translate(-659.45 -282.48)" fill="#e6e6e6"/>
                                                </g>
                                                <g id="Group_8366" data-name="Group 8366"
                                                   transform="translate(0 2.404)">
                                                    <path id="Path_73009" data-name="Path 73009"
                                                          d="M670.468,290.393H659.632a.182.182,0,1,1,0-.363h10.837a.182.182,0,1,1,0,.363Z"
                                                          transform="translate(-659.45 -290.03)" fill="#e6e6e6"/>
                                                </g>
                                            </g>
                                            <g id="Group_8368" data-name="Group 8368"
                                               transform="translate(0 1.201)">
                                                <path id="Path_73010" data-name="Path 73010"
                                                      d="M668.333,286.431a.182.182,0,0,1-.182.182h-11.92a.182.182,0,1,1,0-.363h11.92A.182.182,0,0,1,668.333,286.431Z"
                                                      transform="translate(-656.05 -286.25)" fill="#e6e6e6"/>
                                            </g>
                                        </g>
                                        <g id="Group_8370" data-name="Group 8370" transform="translate(0 2.003)">
                                            <path id="Path_73011" data-name="Path 73011"
                                                  d="M650.59,285.906c0,.035,0,.067,0,.1a1.324,1.324,0,0,0-.592.767.36.36,0,0,1-.691-.2,2.053,2.053,0,0,1,1.4-1.395,2.237,2.237,0,0,0-.121.713v.013Z"
                                                  transform="translate(-649.296 -285.18)" fill="#106e82"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g id="Ellipse_372" data-name="Ellipse 372" transform="translate(906.515 939.173)"
                           fill="none" stroke="#94daec" stroke-width="2" stroke-dasharray="5">
                            <circle cx="5.031" cy="5.031" r="5.031" stroke="none"/>
                            <circle cx="5.031" cy="5.031" r="4.031" fill="none"/>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Research studies have shown that good nutrition and lifestyle habits may enhance fertility. Our
                    bodies need certain vitamins and minerals to stay healthy. This includes the parts of the body
                    responsible for reproduction. The food we eat and the beverages we drink can affect overall
                    health. In both men and women, a diet high in unsaturated fats, vegetables, whole grains,
                    and
                    fish has been associated with enhanced fertility. Research has also shown that
                    men and
                    women who
                    consume high levels of sugars and fat may have lower fertility rates.
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Learn more about the relationship between nutrition and fertility, and then join on-demand
                    cooking classes directly in the Fertilligence app After that, check out our meal plans and
                    recipes personalized for you based on your preferences and dietary restrictions, or get targeted
                    insights from your Fertilligence food diary, live group classes, or one-on-one nutritionist
                    appointments. Do not forget to mention your pre-existing infertility condition (if diagnosed). It all happens right in the Fertilligence app.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Hydration">
                <h2 class="nbe-tab-title-text">
                    Hydration
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="347" height="347" viewBox="0 0 665.056 734.401">
                    <defs>
                        <linearGradient id="hydration-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_8439" data-name="Group 8439" transform="translate(-617.462 -1549)">
                        <circle id="Ellipse_373" data-name="Ellipse 373" cx="42.237" cy="42.237" r="42.237" transform="matrix(-0.995, 0.105, -0.105, -0.995, 1158.256, 2274.571)" opacity="0.49" fill="url(#hydration-weawe)"/>
                        <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="266.189" cy="266.68" rx="266.189" ry="266.68" transform="translate(617.462 1773.047) rotate(-17)" opacity="0.53" fill="url(#hydration-weawe)"/>
                        <circle id="Ellipse_375" data-name="Ellipse 375" cx="4.911" cy="4.911" r="4.911" transform="translate(1225.02 1771.97)" fill="#94daec"/>
                        <g id="Ellipse_376" data-name="Ellipse 376" transform="translate(703.446 1562.751)" fill="none" stroke="#ed0f68" stroke-width="1.5" stroke-dasharray="5">
                            <circle cx="10.314" cy="10.314" r="10.314" stroke="none"/>
                            <circle cx="10.314" cy="10.314" r="9.564" fill="none"/>
                        </g>
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="6.876" cy="6.876" r="6.876" transform="translate(794.795 2196.302)" fill="#ed0f68"/>
                        <g id="Ellipse_378" data-name="Ellipse 378" transform="translate(1189.659 2122.633)" fill="none" stroke="#94daec" stroke-width="2" stroke-dasharray="5">
                            <circle cx="9.822" cy="9.822" r="9.822" stroke="none"/>
                            <circle cx="9.822" cy="9.822" r="8.822" fill="none"/>
                        </g>
                        <g id="Group_8438" data-name="Group 8438" transform="translate(743.731 1549)">
                            <g id="Group_8406" data-name="Group 8406" transform="translate(0)">
                                <path id="Path_73078" data-name="Path 73078" d="M1835.29,929.034h-192.7l-17-456.574h223.991Z" transform="translate(-1616.835 -315.682)" fill="#92c4ff" opacity="0.6"/>
                                <path id="Path_73079" data-name="Path 73079" d="M1851.481,474.245l-2.22,70.936L1839.378,861c-.384,12.311-8.931,22.06-19.337,22.06h-134.26c-10.984,0-20.03-10.244-20.511-23.244l-11.238-301.952-3.112-83.627h200.561Z" transform="translate(-1630.45 -316.639)" fill="#fff" opacity="0.5"/>
                                <g id="Group_8390" data-name="Group 8390" transform="translate(55.05 83.923)">
                                    <path id="Path_73080" data-name="Path 73080" d="M1739.033,760l-13.343-4.158,108.656-348.723a72.688,72.688,0,0,1,9.582-22.962c7.1-11.373,20.766-26.667,45.537-34.922,43.788-14.6,113.476-34.1,114.174-34.3l3.764,13.458c-.694.194-70.057,19.614-113.517,34.1-16.5,5.5-29.211,15.11-37.781,28.554A58.7,58.7,0,0,0,1848.022,410l-.078.467-.139.425Z" transform="translate(-1725.69 -314.93)" fill="#94daec"/>
                                </g>
                                <g id="Group_8391" data-name="Group 8391">
                                    <path id="Path_73081" data-name="Path 73081" d="M1689.5,645.9l13.916,1.262L1736.434,283.4a72.8,72.8,0,0,0-.07-24.877c-2.211-13.227-8.986-32.582-28.711-49.685-34.872-30.237-91.794-74.923-92.368-75.367l-8.626,11c.569.444,57.223,44.921,91.836,74.932,13.139,11.4,21.209,25.131,23.98,40.833a58.587,58.587,0,0,1,.217,20.608l-.106.462-.037.444Z" transform="translate(-1606.66 -133.47)" fill="#fb5d9c"/>
                                </g>
                                <g id="Group_8393" data-name="Group 8393" transform="translate(102.783 354.3)">
                                    <path id="Path_73082" data-name="Path 73082" d="M1907.5,994.258c27.689-21.779,36.347-56.28,16.1-86.309a71.553,71.553,0,0,0-6.6-8.4l-88.1,91.225C1850.294,1009.931,1883.58,1013.076,1907.5,994.258Z" transform="translate(-1828.9 -899.55)" fill="#82b378"/>
                                    <path id="Path_73083" data-name="Path 73083" d="M1907.937,994.527c27.028-21.256,35.477-54.929,15.72-84.242a69.38,69.38,0,0,0-6.558-8.316l-86,89.047C1851.976,1009.812,1884.54,1012.929,1907.937,994.527Z" transform="translate(-1830.083 -900.851)" fill="#d7f2d1"/>
                                    <g id="Group_8392" data-name="Group 8392" transform="translate(5.86 6.956)">
                                        <path id="Path_73084" data-name="Path 73084" d="M1925.488,1009.5l30.325,27.518a4.744,4.744,0,0,1-.467,7.4,79.962,79.962,0,0,1-12.386,7.127,89.491,89.491,0,0,1-14.809,5.226,4.576,4.576,0,0,1-5.712-4.458l.18-41.559A1.712,1.712,0,0,1,1925.488,1009.5Z" transform="translate(-1885.039 -965.361)" fill="#a8d29f"/>
                                        <path id="Path_73085" data-name="Path 73085" d="M1934.64,948.222l32.485-33.632a75.468,75.468,0,0,1,5.434,7.173,89.944,89.944,0,0,1,7.506,13.791,4.58,4.58,0,0,1-3.492,6.35l-41.064,6.405A1.742,1.742,0,0,1,1934.64,948.222Z" transform="translate(-1891.597 -914.59)" fill="#a8d29f"/>
                                        <path id="Path_73086" data-name="Path 73086" d="M1934.781,988.93l40.458-6.317a4.745,4.745,0,0,1,5.471,5.013,80.183,80.183,0,0,1-2.229,14.115,89.979,89.979,0,0,1-5.231,14.8,4.576,4.576,0,0,1-7.057,1.646l-32.231-26.237A1.715,1.715,0,0,1,1934.781,988.93Z" transform="translate(-1890.891 -951.122)" fill="#a8d29f"/>
                                        <path id="Path_73087" data-name="Path 73087" d="M1841.57,1043.98l32.984-34.15a1.691,1.691,0,0,1,.87,1.624l-3.043,40.833a4.748,4.748,0,0,1-6.128,4.19,79.977,79.977,0,0,1-13.241-5.383A89.912,89.912,0,0,1,1841.57,1043.98Z" transform="translate(-1841.57 -965.783)" fill="#a8d29f"/>
                                    </g>
                                </g>
                                <g id="Group_8395" data-name="Group 8395" transform="translate(23.313 277.875)">
                                    <path id="Path_73088" data-name="Path 73088" d="M1683.218,810.212c29.192,19.72,64.688,17.436,87.109-11.007a70.835,70.835,0,0,0,5.98-8.852L1662.545,734.3C1650.83,760.513,1657.994,793.174,1683.218,810.212Z" transform="translate(-1657.068 -734.3)" fill="#82b378"/>
                                    <path id="Path_73089" data-name="Path 73089" d="M1685.568,809.933c28.494,19.248,63.139,17.015,85.019-10.744a68.762,68.762,0,0,0,5.915-8.783L1665.455,735.69C1653.934,761.307,1660.9,793.269,1685.568,809.933Z" transform="translate(-1658.669 -735.047)" fill="#d7f2d1"/>
                                    <g id="Group_8394" data-name="Group 8394" transform="translate(8.672 3.723)">
                                        <path id="Path_73090" data-name="Path 73090" d="M1729.9,800.319l-16.95,37.276a4.744,4.744,0,0,1-7.2,1.813,79.894,79.894,0,0,1-10.568-9.62,90.286,90.286,0,0,1-9.495-12.506,4.579,4.579,0,0,1,2.5-6.8l39.63-12.515A1.719,1.719,0,0,1,1729.9,800.319Z" transform="translate(-1680.747 -772.2)" fill="#a8d29f"/>
                                        <path id="Path_73091" data-name="Path 73091" d="M1805.438,801.57l41.943,20.668a76.157,76.157,0,0,1-5.17,7.363,89.814,89.814,0,0,1-10.841,11.359,4.582,4.582,0,0,1-7.113-1.388l-18.633-37.147A1.718,1.718,0,0,1,1805.438,801.57Z" transform="translate(-1745.49 -774.182)" fill="#a8d29f"/>
                                        <path id="Path_73092" data-name="Path 73092" d="M1775.777,804.966l18.365,36.6a4.744,4.744,0,0,1-3.108,6.739,79.957,79.957,0,0,1-14.124,2.183,90.055,90.055,0,0,1-15.7-.462,4.577,4.577,0,0,1-3.723-6.216l15.146-38.7A1.721,1.721,0,0,1,1775.777,804.966Z" transform="translate(-1719.547 -775.496)" fill="#a8d29f"/>
                                        <path id="Path_73093" data-name="Path 73093" d="M1680.19,742.35l42.59,20.983a1.689,1.689,0,0,1-1.281,1.323l-39.816,9.564a4.747,4.747,0,0,1-5.859-4.555,80.088,80.088,0,0,1,1.082-14.249A90.407,90.407,0,0,1,1680.19,742.35Z" transform="translate(-1675.818 -742.35)" fill="#a8d29f"/>
                                    </g>
                                </g>
                                <g id="Group_8396" data-name="Group 8396" transform="translate(128.791 509.707)">
                                    <path id="Path_73094" data-name="Path 73094" d="M1886.88,1254.58s13.69-5.259,16.715-7.719,10.54-6.387,14.069-6.521,31.26-8.033,33.253-3.205l-18.662,13.227S1891.889,1257.332,1886.88,1254.58Z" transform="translate(-1886.073 -1235.574)" fill="#cadefc"/>
                                    <path id="Path_73095" data-name="Path 73095" d="M1982.49,1250.972s17.644-14.629,19.817-12.312,4.537,17.144,6.961,21.917,1.725,7.992-2.821,11.484-17.214,14.573-17.214,14.573Z" transform="translate(-1937.465 -1237.099)" fill="#afcdfb"/>
                                    <path id="Path_73096" data-name="Path 73096" d="M1885.943,1270.439s15.2-.633,26.158-2.16,17.325-4.995,19.212-2.053,5.5,24.183,7.391,29.072-2.026,7.409-13.56,8.223-29.743,5.582-30.3.407S1881.91,1270.638,1885.943,1270.439Z" transform="translate(-1885.136 -1251.433)" fill="#e9f3fe"/>
                                    <path id="Path_73097" data-name="Path 73097" d="M1910.481,1280.65s-14.925.606-18.106.874,2.215,11.234,3.084,14.286c0,0,1.341.407,1.249-1.314s-2.358-7.367-.569-8.45,4.648-3.654,7.377-3.612S1911.891,1281.529,1910.481,1280.65Z" transform="translate(-1888.493 -1259.803)" fill="#fff"/>
                                    <path id="Path_73098" data-name="Path 73098" d="M1956.929,1312.806a94.889,94.889,0,0,1,10.142-1.457c3.927-.222,6.567-2.151,5.975-4.112s-4.694-18.537-5.332-21.015-3.844,1.563-3.607,4.125-3.307,7.927-3.922,12.348-6.183,8.653-5.924,9.851S1956.929,1312.806,1956.929,1312.806Z" transform="translate(-1922.287 -1262.383)" fill="#fff"/>
                                    <path id="Path_73099" data-name="Path 73099" d="M1997.986,1251.587a19.618,19.618,0,0,1-5.184,4.569c-2.724,1.424-3.547,1.5-2.96,3.251s2.752,8.4,2.993,9.495,1.5,1.138,1.706.153.171-4.407.851-6.655,1.392-6.711,3.154-8.228S2000.211,1250.273,1997.986,1251.587Z" transform="translate(-1941.321 -1243.976)" fill="#8fb2e5"/>
                                </g>
                                <g id="Group_8397" data-name="Group 8397" transform="translate(32.727 509.759)">
                                    <path id="Path_73100" data-name="Path 73100" d="M1702.41,1235.91s14.291,3.288,18.175,2.933,12.311.592,15.309,2.451,30.413,10.8,29.367,15.923l-22.865.545S1705.023,1240.988,1702.41,1235.91Z" transform="translate(-1690.854 -1235.807)" fill="#cadefc"/>
                                    <path id="Path_73101" data-name="Path 73101" d="M1771.243,1279.193s22.805-2.275,23.314.86-5.818,16.751-6.475,22.065-3.034,7.594-8.755,7.946-22.417,2.469-22.417,2.469Z" transform="translate(-1720.148 -1258.643)" fill="#afcdfb"/>
                                    <path id="Path_73102" data-name="Path 73102" d="M1688.979,1235.79s12.959,7.968,22.9,12.825,17.158,5.536,17.08,9.028-8.954,23.129-10.115,28.239-5.818,5.014-15.84-.754-27.786-11.987-25.358-16.594S1685.52,1233.7,1688.979,1235.79Z" transform="translate(-1677.423 -1235.687)" fill="#e9f3fe"/>
                                    <path id="Path_73103" data-name="Path 73103" d="M1713.832,1253.729s-12.719-7.835-15.507-9.388-4.44,10.553-5.425,13.569c0,0,.888,1.087,1.772-.393s2.16-7.427,4.25-7.325,5.9-.43,8.135,1.124S1714.512,1255.246,1713.832,1253.729Z" transform="translate(-1685.742 -1240.265)" fill="#fff"/>
                                    <path id="Path_73104" data-name="Path 73104" d="M1722.658,1313.086a94.363,94.363,0,0,1,9.227,4.458c3.381,2.012,6.646,1.887,7.252-.074s6.466-18,7.316-20.409-4.06-.851-5.295,1.406-7.173,4.726-10.152,8.047-9.962,3.723-10.419,4.86S1722.658,1313.086,1722.658,1313.086Z" transform="translate(-1700.595 -1268.025)" fill="#fff"/>
                                    <path id="Path_73105" data-name="Path 73105" d="M1800.022,1282.96a19.572,19.572,0,0,1-6.85.893c-3.057-.342-3.778-.74-4.268,1.045s-2.41,8.5-2.826,9.546.606,1.785,1.327,1.082,2.6-3.561,4.421-5.046,4.9-4.787,7.215-5.064S1802.6,1283.108,1800.022,1282.96Z" transform="translate(-1735.775 -1261.097)" fill="#8fb2e5"/>
                                </g>
                                <g id="Group_8398" data-name="Group 8398" transform="translate(66.603 413.919)">
                                    <path id="Path_73106" data-name="Path 73106" d="M1784.08,1028.78s13.805,4.949,17.7,5.055,12.155,2.04,14.915,4.241,28.929,14.314,27.287,19.272l-22.773-2.156C1821.213,1055.2,1786.078,1034.136,1784.08,1028.78Z" transform="translate(-1768.628 -1028.631)" fill="#cadefc"/>
                                    <path id="Path_73107" data-name="Path 73107" d="M1842.667,1082.76s22.917.426,23.05,3.6-7.751,15.951-9.028,21.149-3.908,7.182-9.629,6.859-22.551-.19-22.551-.19Z" transform="translate(-1790.36 -1057.647)" fill="#afcdfb"/>
                                    <path id="Path_73108" data-name="Path 73108" d="M1766.122,1028.608s11.928,9.439,21.233,15.433,16.386,7.52,15.9,10.979-11.617,21.912-13.375,26.852-6.369,4.292-15.641-2.618-26.181-15.179-23.226-19.466S1762.935,1026.129,1766.122,1028.608Z" transform="translate(-1750.67 -1028.46)" fill="#e9f3fe"/>
                                    <path id="Path_73109" data-name="Path 73109" d="M1791.46,1048.493s-11.706-9.282-14.291-11.155-5.651,9.957-6.988,12.834c0,0,.755,1.184,1.8-.18s3.025-7.123,5.083-6.776,5.906.268,7.945,2.077S1791.95,1050.079,1791.46,1048.493Z" transform="translate(-1761.157 -1033.124)" fill="#fff"/>
                                    <path id="Path_73110" data-name="Path 73110" d="M1792.929,1111.228a94.068,94.068,0,0,1,8.635,5.513c3.117,2.4,6.377,2.659,7.21.782s8.541-17.107,9.675-19.4-3.931-1.327-5.425.772-7.682,3.848-11.03,6.8-10.331,2.521-10.919,3.6S1792.929,1111.228,1792.929,1111.228Z" transform="translate(-1772.339 -1065.192)" fill="#fff"/>
                                    <path id="Path_73111" data-name="Path 73111" d="M1873.818,1088.281a19.616,19.616,0,0,1-6.909.079c-2.992-.7-3.663-1.18-4.361.537s-3.395,8.158-3.931,9.148.393,1.845,1.193,1.23,3-3.228,4.985-4.486,5.434-4.177,7.761-4.181S1876.366,1088.739,1873.818,1088.281Z" transform="translate(-1808.607 -1060.314)" fill="#8fb2e5"/>
                                </g>
                                <g id="Group_8399" data-name="Group 8399" transform="translate(51.095 390.382)">
                                    <path id="Path_73112" data-name="Path 73112" d="M1780.288,997.493c-13.12,13.556-34.686.9-42.761-.523s-20.377-12.843-20.377-12.843,24.211-8.426,42.812-6.165c18.347,2.229,20.275,19.059,20.321,19.526Z" transform="translate(-1717.146 -977.572)" fill="#a8d29f"/>
                                    <path id="Path_73113" data-name="Path 73113" d="M1780.279,997.478c-.2-.282-12.806-17.329-63.139-13.361,0,0,24.211-8.427,42.812-6.165C1778.3,980.181,1780.228,997.015,1780.279,997.478Z" transform="translate(-1717.14 -977.566)" fill="#82b378"/>
                                </g>
                                <g id="Group_8400" data-name="Group 8400" transform="translate(118.234 303.44)">
                                    <path id="Path_73114" data-name="Path 73114" d="M1946.08,793.19c9.037,34.575-32.669,57.043-42.923,68.711s-40.847,20.354-40.847,20.354,10.18-47.483,32.143-75.376c21.658-27.508,50.8-14.069,51.6-13.69Z" transform="translate(-1862.31 -789.577)" fill="#a8d29f"/>
                                    <path id="Path_73115" data-name="Path 73115" d="M1946.067,793.19c-.661.051-40.652,3.677-83.747,89.065,0,0,10.179-47.483,32.142-75.376C1916.121,779.371,1945.267,792.811,1946.067,793.19Z" transform="translate(-1862.316 -789.577)" fill="#82b378"/>
                                </g>
                                <g id="Group_8401" data-name="Group 8401" transform="translate(86.591 536.434)">
                                    <path id="Path_73116" data-name="Path 73116" d="M1847.728,1312.8c-12.348,10.832-30.163-1.684-37.068-3.5s-16.769-12.593-16.769-12.593,21.607-5.592,37.585-2.308c15.762,3.238,16.238,17.981,16.248,18.388Z" transform="translate(-1793.891 -1293.365)" fill="#a8d29f"/>
                                    <path id="Path_73117" data-name="Path 73117" d="M1847.724,1312.8c-.157-.259-9.879-15.947-53.833-16.081,0,0,21.607-5.592,37.585-2.308C1847.243,1297.646,1847.719,1312.39,1847.724,1312.8Z" transform="translate(-1793.891 -1293.371)" fill="#82b378"/>
                                </g>
                                <g id="Group_8402" data-name="Group 8402" transform="translate(91.806 488.811)">
                                    <path id="Path_73118" data-name="Path 73118" d="M1806.91,1209.4s13.69-5.258,16.714-7.719,10.54-6.387,14.069-6.521,31.26-8.034,33.253-3.205l-18.661,13.228S1811.915,1212.157,1806.91,1209.4Z" transform="translate(-1806.103 -1190.394)" fill="#cadefc"/>
                                    <path id="Path_73119" data-name="Path 73119" d="M1902.51,1205.8s17.645-14.629,19.818-12.312,4.537,17.144,6.96,21.917,1.725,7.992-2.821,11.483-17.214,14.573-17.214,14.573Z" transform="translate(-1857.49 -1191.925)" fill="#afcdfb"/>
                                    <path id="Path_73120" data-name="Path 73120" d="M1805.972,1225.26s15.2-.629,26.159-2.16,17.324-5,19.211-2.054,5.5,24.183,7.39,29.072-2.025,7.409-13.56,8.223-29.743,5.582-30.3.407S1801.939,1225.464,1805.972,1225.26Z" transform="translate(-1805.166 -1206.254)" fill="#e9f3fe"/>
                                    <path id="Path_73121" data-name="Path 73121" d="M1830.511,1235.48s-14.925.606-18.107.874,2.216,11.234,3.085,14.286c0,0,1.341.407,1.248-1.314s-2.359-7.367-.569-8.449,4.648-3.653,7.376-3.612S1831.917,1236.359,1830.511,1235.48Z" transform="translate(-1808.522 -1214.629)" fill="#fff"/>
                                    <path id="Path_73122" data-name="Path 73122" d="M1876.958,1267.626a94.938,94.938,0,0,1,10.143-1.457c3.927-.218,6.567-2.151,5.975-4.111s-4.694-18.536-5.333-21.015-3.843,1.563-3.607,4.125-3.307,7.927-3.922,12.349-6.183,8.653-5.925,9.851S1876.958,1267.626,1876.958,1267.626Z" transform="translate(-1842.316 -1217.203)" fill="#fff"/>
                                    <path id="Path_73123" data-name="Path 73123" d="M1918.016,1206.415a19.544,19.544,0,0,1-5.184,4.57c-2.725,1.424-3.547,1.5-2.96,3.251s2.752,8.4,2.992,9.495,1.5,1.138,1.707.153.171-4.4.851-6.655,1.392-6.711,3.154-8.227S1920.241,1205.1,1918.016,1206.415Z" transform="translate(-1861.351 -1198.799)" fill="#8fb2e5"/>
                                </g>
                                <g id="Group_8403" data-name="Group 8403" transform="translate(114.83 488.635)">
                                    <path id="Path_73124" data-name="Path 73124" d="M1904.293,1195.108c-1,16.4-22.435,20.234-28.582,23.86s-20.752,3.039-20.752,3.039,11.243-19.277,24.831-28.313c13.4-8.912,24.2,1.128,24.5,1.411Z" transform="translate(-1854.955 -1190.013)" fill="#a8d29f"/>
                                    <path id="Path_73125" data-name="Path 73125" d="M1904.278,1195.111c-.3-.074-18.277-4.213-49.328,26.9,0,0,11.243-19.276,24.831-28.313C1893.178,1184.784,1903.982,1194.829,1904.278,1195.111Z" transform="translate(-1854.95 -1190.016)" fill="#82b378"/>
                                </g>
                                <g id="Group_8405" data-name="Group 8405" transform="translate(31.112 407.958)">
                                    <path id="Path_73126" data-name="Path 73126" d="M1695.247,1093.175c27.07,22.546,62.616,23.823,87.771-2.234a71.488,71.488,0,0,0,6.84-8.209L1682.28,1015.57C1668,1040.484,1671.86,1073.7,1695.247,1093.175Z" transform="translate(-1673.932 -1015.57)" fill="#82b378"/>
                                    <path id="Path_73127" data-name="Path 73127" d="M1697.687,1093.129c26.422,22.005,61.117,23.255,85.666-2.178a68.865,68.865,0,0,0,6.766-8.145l-105.012-65.557C1671.075,1041.581,1674.812,1074.08,1697.687,1093.129Z" transform="translate(-1675.516 -1016.473)" fill="#d7f2d1"/>
                                    <g id="Group_8404" data-name="Group 8404" transform="translate(8.406 4.468)">
                                        <path id="Path_73128" data-name="Path 73128" d="M1744.061,1092.418l-20.6,35.389a4.745,4.745,0,0,1-7.339,1.087,80.342,80.342,0,0,1-9.555-10.628,89.823,89.823,0,0,1-8.195-13.394,4.576,4.576,0,0,1,3.168-6.516l40.685-8.482A1.715,1.715,0,0,1,1744.061,1092.418Z" transform="translate(-1695.218 -1059.956)" fill="#a8d29f"/>
                                        <path id="Path_73129" data-name="Path 73129" d="M1821.079,1096.18l39.662,24.762a75.975,75.975,0,0,1-5.883,6.808,90.176,90.176,0,0,1-11.923,10.216,4.579,4.579,0,0,1-6.937-2.1l-14.823-38.825A1.725,1.725,0,0,1,1821.079,1096.18Z" transform="translate(-1761.422 -1063.366)" fill="#a8d29f"/>
                                        <path id="Path_73130" data-name="Path 73130" d="M1786.4,1098.565l14.61,38.257a4.747,4.747,0,0,1-3.764,6.4,80.071,80.071,0,0,1-14.272.759,90.382,90.382,0,0,1-15.572-2.031,4.575,4.575,0,0,1-3.08-6.558l18.948-36.99A1.714,1.714,0,0,1,1786.4,1098.565Z" transform="translate(-1730.651 -1064.055)" fill="#a8d29f"/>
                                        <path id="Path_73131" data-name="Path 73131" d="M1699.209,1025.23l40.273,25.145a1.686,1.686,0,0,1-1.405,1.189L1697.5,1057.1a4.749,4.749,0,0,1-5.374-5.12,80.22,80.22,0,0,1,2.506-14.074A90.781,90.781,0,0,1,1699.209,1025.23Z" transform="translate(-1692.109 -1025.23)" fill="#a8d29f"/>
                                    </g>
                                </g>
                                <path id="Path_73132" data-name="Path 73132" d="M1852.879,625.589,1843,941.411c-.384,12.311-8.931,22.06-19.337,22.06H1689.4c-10.984,0-20.03-10.244-20.511-23.245L1657.65,638.275l.106-.167s32.845-7.173,65.441-6.725,75.26-9.781,84.455-6.687,35.186-2.058,45.171-.583C1852.828,624.118,1852.846,624.622,1852.879,625.589Z" transform="translate(-1634.068 -397.052)" fill="#d7f2d1" opacity="0.3"/>
                                <path id="Path_73133" data-name="Path 73133" d="M1847.319,620.773c-10.106-1.392-46.97,5.971-56.114,2.9-9.194-3.094-46.586,10.336-78.913,6.1-27.759-3.64-61.844,1.42-64.59,2.007h-.3l.106-.167s32.846-7.173,65.442-6.725,75.26-9.781,84.455-6.687,39.931,1.1,49.916,2.571Z" transform="translate(-1628.559 -393.707)" fill="#e7ffe1"/>
                                <rect id="Rectangle_444" data-name="Rectangle 444" width="24.96" height="438.288" transform="translate(44.653 170.194)" fill="#fff" opacity="0.4"/>
                                <rect id="Rectangle_445" data-name="Rectangle 445" width="44.616" height="451.473" transform="translate(152.495 157.009)" fill="#82b378" opacity="0.2"/>
                            </g>
                            <g id="Group_8407" data-name="Group 8407" transform="translate(257.636 11.153)">
                                <path id="Path_73134" data-name="Path 73134" d="M2418.8,1114.722s30.7,10.654,40.807,9.313c0,0,.677-5.175-8.225-10s-16.563-20.922-21.389-19.7-11.218,5.58-11.218,5.58Z" transform="translate(-2268.166 -667.754)" fill="#feaaaf"/>
                                <path id="Path_73135" data-name="Path 73135" d="M2483.826,1037.395s32.062-5.27,40.306-11.267c0,0-1.872-4.872-12-4.872s-24.534-10.5-28.2-7.123-7.2,10.255-7.2,10.255Z" transform="translate(-2289.461 -638.072)" fill="#feaaaf"/>
                                <path id="Path_73136" data-name="Path 73136" d="M2332.772,1037.442q-13.1-.418-24.667-1.107c-117.034-6.909-120.451-32.936-120.451-32.936-19.46-59.64,58.75-118.863,58.75-118.863s47.454-6.662,45.569,21.226-67.536,82.681-67.536,82.681c21.858,2.05,57.394,14.342,81.765,23.6,15.545,5.909,26.538,10.591,26.538,10.591a14.563,14.563,0,0,1,1.767,7.522A22.583,22.583,0,0,1,2332.772,1037.442Z" transform="translate(-2182.124 -590.455)" fill="#2d1b5a"/>
                                <path id="Path_73137" data-name="Path 73137" d="M2308.116,1036.335c-117.035-6.909-120.452-32.936-120.452-32.936-19.461-59.64,58.748-118.863,58.748-118.863s47.456-6.662,45.571,21.226-67.536,82.681-67.536,82.681c21.858,2.05,57.395,14.342,81.764,23.6C2309.146,1019.626,2311.07,1028.717,2308.116,1036.335Z" transform="translate(-2182.127 -590.455)" fill="#10205d"/>
                                <path id="Path_73138" data-name="Path 73138" d="M2396.774,987.578a.734.734,0,0,1-.113.026c-100.744,27.2-136.292,26.811-146.529,24.762-4.542-.911-7.738-7.535-7.738-7.535-19.454-59.64,63.5-126.866,63.5-126.866s35.739-1.62,45.717,14.684a18.1,18.1,0,0,1,2.5,10.938c-1.215,17.961-28.4,43.849-47.6,60-10.15,8.541-18.064,14.355-18.741,14.855l-.038.025c33.513-20.681,101.839-3.871,101.839-3.871s3.96,2.79,5.219,5.118A18.627,18.627,0,0,1,2396.774,987.578Z" transform="translate(-2202.289 -588.28)" fill="#05144e"/>
                                <path id="Path_73139" data-name="Path 73139" d="M2481.773,525.263c-1.607-6.073-.632-4.606-1.683-8.946s-5.763-.626-5.763-.626c-6.586,6.023-6.636,12.653-5.676,16.9a12.85,12.85,0,0,1-1.4,9.433c-9.8,16.626-33.783,60.083-33.783,60.083-25.173,1.12-62.689,9.585-62.689,9.585s-11.205,33.859,7.256,34.979,70.54-24.427,75.013-28.343,25.888-77.513,25.888-77.513C2482.286,537.809,2483.379,531.336,2481.773,525.263Z" transform="translate(-2249.298 -454.673)" fill="#feaaaf"/>
                                <path id="Path_73140" data-name="Path 73140" d="M2305.062,420.424c-4.107,1.752-2.348,1.658-8.174,4s-12.186,17.385-12.186,17.385c-44.272,56.6-39.357,80.41-39.357,80.41-1.12,21.82,16.278,78.221,16.278,78.221l26.426-18.916c2.239-16.221-19.359-65.631-19.359-65.631,11.027-22.82,19.884-53.485,23.661-67.567a14.584,14.584,0,0,1,7.307-9.376c3.854-1.942,8.535-5.985,9.357-14.292C2309.016,424.669,2309.168,418.671,2305.062,420.424Z" transform="translate(-2204.399 -420.103)" fill="#feaaaf"/>
                                <path id="Path_73141" data-name="Path 73141" d="M2282.564,695.739s-35.714-37.054-66.264-59.59a80.04,80.04,0,0,1-3.227-13.159c-1.714,3.125-1.449,7.168-.885,10.2-8.3-5.846-16.057-10.4-22.415-12.571-2.139-12.432,9.819-25.489,9.819-25.489-10.275,4.162-14.438,17.866-15.8,24.142a12.545,12.545,0,0,0-3.075.1s-1.031-41.97,63.077-41.97c24.945,0,21.371-43.337,56.869-40.224,0,0,38.769,7.573,31.531,41.388s4.656,41.388,8.794,48.967S2327.539,688.16,2282.564,695.739Z" transform="translate(-2180.718 -463.051)" fill="#0a0909"/>
                                <path id="Path_73142" data-name="Path 73142" d="M2367.476,658.4l-37.39,14.8-3.974-16.569a67.7,67.7,0,0,1,.955-15.677,125.577,125.577,0,0,1,4.074-17.063l.076-.247.962-.025,3.106-.082L2356.3,623a40.47,40.47,0,0,0-1.386,8.737A30.982,30.982,0,0,0,2367.476,658.4Z" transform="translate(-2234.079 -494.636)" fill="#feaaaf"/>
                                <path id="Path_73143" data-name="Path 73143" d="M2417.378,598.994s-7,23.516-10.356,25.395-47.418,24.484-60.768,26.3c0,0-4.668.474-6.321,1.271l-.006.007a1.021,1.021,0,0,0-.531.411.377.377,0,0,0-.038.1c-.943,2.486-12.772,42.78-13.045,53.465-.2,7.453,32.645,55.383,32.252,60.823a3.811,3.811,0,0,1-.329,1.335c-1.847,4.074-10.895,3.726-18.322-.165a117.624,117.624,0,0,0-18.9-7.712c-8.618-2.657-18.291-4.4-26.18-2.79-15.151,3.107-30.7-.778-36.142-17.486s-4.664-50.916-6.214-57.907-2.916-28.938,6.4-43.514h.006a.023.023,0,0,1,.007-.019s1.165-2.334-.778-7.187-16.126-55.971-13.993-71.319c0,0,.594-14.943,9.982-32.044a26.991,26.991,0,0,1,10.755,5.725c4.954,4.422,8.186,9.015,8.964,9.205,0,0-5.219,11.666-4.928,12.641s17.973,51.112,18.948,54.022c0,0,6.959-.6,8.465.911,0,0-.594,14.38,32.051,2.461,0,0,2.011-.329,2.106,1.36,0,0,42.1-6.725,56.743-7.769,0,0,.784-.089,5.308-8.554,5.384-10.065,7.592-12.451,7.592-12.451S2413.392,585.513,2417.378,598.994Z" transform="translate(-2203.927 -459.724)" fill="#fb5d9c"/>
                                <path id="Path_73144" data-name="Path 73144" d="M2394.357,839.069a3.81,3.81,0,0,1-.33,1.335c-1.847,4.075-10.894,3.727-18.322-.164a117.633,117.633,0,0,0-18.9-7.712c-5.2-12.931-12.375-32.562-15.114-48.531-4.176-24.332,28.665-54.908,33.461-59.216-.943,2.486-12.774,42.78-13.047,53.465C2361.9,785.7,2394.742,833.628,2394.357,839.069Z" transform="translate(-2239.716 -532.025)" fill="#f64d91"/>
                                <path id="Path_73145" data-name="Path 73145" d="M2355.56,632s-17.506,8.9-27.85,9.218a125.729,125.729,0,0,1,4.074-17.063c.347-.107.7-.2,1.037-.272a8.187,8.187,0,0,1,2.171-.171c.309.019.62.051.936.082C2344.615,624.806,2355.56,632,2355.56,632Z" transform="translate(-2234.716 -494.893)" fill="#f08a90"/>
                                <path id="Path_73146" data-name="Path 73146" d="M2319.479,602.436s29.848,15.127,38.985-3.612,19.137-29.4.462-39.851-25.888-5.118-30.457.392S2311.95,598.013,2319.479,602.436Z" transform="translate(-2230.8 -468.922)" fill="#feaaaf"/>
                                <path id="Path_73147" data-name="Path 73147" d="M2344.333,557.848s9.047,9,6.389,17.55,1.639,25.565,13.3,27.508,25.527-37.478,10.179-45.057-40.42-11.325-47.993-1.8-4.663,21.561-4.663,21.561S2332.053,557.266,2344.333,557.848Z" transform="translate(-2232.251 -467.956)" fill="#0a0909"/>
                            </g>
                            <g id="Group_8434" data-name="Group 8434" transform="translate(245.889 542.373)">
                                <g id="Group_8431" data-name="Group 8431" transform="translate(0 20.643)">
                                    <path id="Path_73254" data-name="Path 73254" d="M2141.14,1357.043s16.626-2.752,20.89-4.3c4.338-1.572,19.291-2.211,23.365-1.767s31.98.162,33.452,6.059l-24.8,2.868S2146.431,1361.062,2141.14,1357.043Z" transform="translate(-2139.84 -1350.842)" fill="#cadefc"/>
                                    <path id="Path_73255" data-name="Path 73255" d="M2281.392,1403.4a6.8,6.8,0,0,1-1.629,3.172h-25.09l-.754-18.8-.157-3.889-.037-.9-.685-17.047-.051-1.277h0c.236-.046,8.311-1.614,15.419-2.312,5.092-.5,9.685-.564,10.554.694,2.072,2.988,3.261,10.748,3.191,16.923,0,.1,0,.2,0,.3-.032,1.836.037,4.177.1,6.716.033,1.378.065,2.816.083,4.259C2282.385,1395.727,2282.247,1400.292,2281.392,1403.4Z" transform="translate(-2199.961 -1356.846)" fill="#afcdfb"/>
                                    <path id="Path_73256" data-name="Path 73256" d="M2193.6,1407.774h-44.463c-3.1-.615-5.032-1.669-4.963-3.5.236-6.049-9.217-40.486-4.541-40.033,0,0,17.588,1.859,30.459,1.966,10.933.088,18.287-1.994,21.274-.347h0a2.624,2.624,0,0,1,1.17,1.249c.842,1.859,1.4,9.1,1.91,16.6.032.476.064.957.1,1.434.144,2.137.287,4.273.435,6.281a90.407,90.407,0,0,0,1.119,10.378C2196.718,1404.6,2196.25,1407.774,2193.6,1407.774Z" transform="translate(-2138.328 -1358.044)" fill="#d2e6f9"/>
                                    <path id="Path_73257" data-name="Path 73257" d="M2167.034,1374.208s-17.269-1.841-20.978-2.072.638,13.3,1.119,16.955c0,0,1.476.7,1.66-1.3s-1.457-8.875.782-9.818,5.965-3.409,9.1-2.9S2168.505,1375.462,2167.034,1374.208Z" transform="translate(-2141.684 -1362.287)" fill="#fff"/>
                                    <path id="Path_73258" data-name="Path 73258" d="M2210.218,1420.231a109.436,109.436,0,0,1,11.91.051c4.551.416,7.918-1.355,7.571-3.714s-2.248-22.121-2.562-25.076-4.69,1.142-4.846,4.13-5.153,8.556-6.609,13.536-8.584,8.9-8.492,10.323S2210.218,1420.231,2210.218,1420.231Z" transform="translate(-2175.341 -1372.142)" fill="#fff"/>
                                    <path id="Path_73259" data-name="Path 73259" d="M2271.732,1371.048a22.764,22.764,0,0,1-6.738,4.375c-3.376,1.175-4.333,1.119-3.954,3.237s1.738,10.129,1.826,11.433,1.531,1.568,1.938.467.944-5.036,2.109-7.511,2.738-7.483,5.027-8.93S2274.512,1369.91,2271.732,1371.048Z" transform="translate(-2204.246 -1361.558)" fill="#8fb2e5"/>
                                </g>
                                <g id="Group_8432" data-name="Group 8432" transform="translate(50.056 43.752)">
                                    <path id="Path_73260" data-name="Path 73260" d="M2302.141,1427.431a19.7,19.7,0,0,0,3.251-1.4,20.283,20.283,0,0,0,3.765-2.636l0-.009c0-.037,0-.167-.02-.379-.008-.083-.013-.18-.023-.287,0-.014,0-.032,0-.046-.01-.1-.023-.2-.033-.315-.009-.092-.018-.194-.032-.3s-.027-.227-.046-.347c-.028-.222-.064-.458-.111-.712-.014-.083-.028-.176-.046-.263q-.035-.174-.07-.361c-.018-.106-.042-.213-.064-.328s-.046-.227-.074-.343c-.056-.254-.121-.518-.19-.791-.055-.212-.115-.435-.18-.656a24.566,24.566,0,0,0-1.41-3.756,22.389,22.389,0,0,0-1.2-2.22c-.065-.106-.134-.212-.2-.319-.156-.25-.323-.509-.5-.759-.25-.361-.519-.726-.8-1.082-.116-.148-.236-.3-.362-.439-.083-.106-.175-.213-.268-.319s-.181-.213-.277-.315c-.066-.069-.125-.139-.195-.208s-.162-.176-.245-.26c-.129-.134-.259-.268-.393-.4-.157-.157-.32-.31-.485-.463s-.347-.314-.528-.471-.36-.305-.55-.458c-.172-.139-.343-.273-.523-.407a1.234,1.234,0,0,0-.139-.1c-.148-.115-.3-.222-.453-.328-.047-.032-.1-.065-.143-.1-.166-.115-.338-.231-.509-.342a.527.527,0,0,0-.065-.041c-.157-.107-.324-.213-.491-.305a22.669,22.669,0,0,0-2.271-1.217,27.208,27.208,0,0,0-5.994-1.942c-.263-.056-.527-.107-.8-.157s-.532-.1-.8-.144c-.245-.046-.49-.083-.74-.12-.333-.051-.67-.1-1.009-.148-.231-.032-.462-.065-.693-.093-.18-.023-.361-.046-.546-.065l-.37-.042c-.536-.06-1.077-.115-1.618-.157-.269-.023-.532-.046-.8-.064-.587-.047-1.175-.083-1.767-.111-.254-.014-.509-.028-.762-.032-.555-.023-1.106-.037-1.661-.051-.578-.009-1.156-.014-1.729-.014-.453,0-.91.005-1.36.01h-.083c-.388.01-.777.014-1.161.027-.093.005-.186.005-.273.009-.379.009-.759.028-1.137.042-.574.023-1.147.051-1.711.083-.4.023-.786.046-1.179.074l-.227.014-.98.07-1.212.1c-.19.014-.379.033-.569.051-.343.028-.689.065-1.026.1l-1.077.111c-.278.027-.555.065-.828.092-.805.092-1.591.19-2.359.287-.291.042-.578.079-.869.12-.522.069-1.031.143-1.535.217-.44.065-.874.134-1.3.194-.454.074-.9.144-1.332.217l-.43.069-.323.056c-.175.028-.347.06-.518.088-.273.046-.545.1-.81.144-.721.129-1.406.259-2.048.384l-.49.1-.426.083c-.277.056-.546.111-.8.162-.1.019-.194.042-.291.06-.116.028-.227.046-.333.069l-1.267.278c-.583.13-1.073.24-1.457.333-.111.028-.217.051-.309.074l-.509.125c-.046.009-.083.023-.106.028l-.056.014s1.069,1.17,2.784,2.853c.348.342.722.7,1.12,1.082.8.767,1.711,1.6,2.682,2.46,3.894,3.437,8.848,7.183,12.917,8.251,2.733.717,6.947,2.882,11.872,4.921a64.312,64.312,0,0,0,9.36,3.172h14.846Z" transform="translate(-2246.56 -1400.809)" fill="#a8d29f"/>
                                    <path id="Path_73261" data-name="Path 73261" d="M2309.163,1423.388c-.181-.3-11.483-18.541-62.593-18.7,0,0,25.123-6.5,43.7-2.678C2308.6,1405.771,2309.154,1422.916,2309.163,1423.388Z" transform="translate(-2246.566 -1400.808)" fill="#82b378"/>
                                </g>
                                <g id="Group_8433" data-name="Group 8433" transform="translate(63.104 0)">
                                    <path id="Path_73262" data-name="Path 73262" d="M2322.83,1306.71s15.271,7.585,19.758,8.232,13.758,4,16.649,6.914,31.468,20.441,28.9,25.95l-26.006-5.568S2324.412,1313.167,2322.83,1306.71Z" transform="translate(-2300.605 -1306.478)" fill="#cadefc"/>
                                    <path id="Path_73263" data-name="Path 73263" d="M2404.349,1387.119c-.277,3.686-11.109,17.371-13.292,23.2-1.063,2.839-2.386,4.75-4.227,5.837h-13.037c-3.417-.463-7.534-.967-11.192-1.4-2.872-.342-5.476-.633-7.242-.833h0c-1.36-.153-2.229-.25-2.349-.259a.016.016,0,0,1-.014,0l6.077-8.149,3.6-4.819,14.791-19.836.763-1.022h0C2378.589,1379.89,2404.617,1383.461,2404.349,1387.119Z" transform="translate(-2316.817 -1345.786)" fill="#afcdfb"/>
                                    <path id="Path_73264" data-name="Path 73264" d="M2297,1306.44s12.5,12.515,22.43,20.7,17.9,10.905,16.876,14.832-16.381,23.735-19.077,29.2-7.937,4.093-17.708-5.138-28.179-21.071-24.188-25.621S2293.652,1303.147,2297,1306.44Z" transform="translate(-2274.775 -1306.207)" fill="#e9f3fe"/>
                                    <path id="Path_73265" data-name="Path 73265" d="M2326.628,1331.466s-12.261-12.3-14.994-14.813-7.872,10.734-9.8,13.879c0,0,.708,1.471,2.109.037s4.454-7.816,6.784-7.136,6.784,1.106,8.893,3.473S2326.98,1333.367,2326.628,1331.466Z" transform="translate(-2289.317 -1311.652)" fill="#fff"/>
                                    <path id="Path_73266" data-name="Path 73266" d="M2319.867,1407.237a110.235,110.235,0,0,1,9.227,7.534c3.274,3.186,7.006,3.931,8.218,1.878s12.177-18.6,13.8-21.1-4.361-2.063-6.368.157-9.388,3.4-13.657,6.355-12.274,1.512-13.093,2.678S2319.867,1407.237,2319.867,1407.237Z" transform="translate(-2297.919 -1353.319)" fill="#fff"/>
                                    <path id="Path_73267" data-name="Path 73267" d="M2416.679,1388.414a22.764,22.764,0,0,1-7.987-.842c-3.362-1.212-4.07-1.859-5.11.028s-5.023,8.963-5.776,10.031.2,2.183,1.212,1.582,3.9-3.32,6.364-4.509,6.84-4.088,9.527-3.774S2419.561,1389.283,2416.679,1388.414Z" transform="translate(-2340.76 -1349.319)" fill="#8fb2e5"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

                <p class="nbe-tab-text nbe-mar-b-60">
                    Water is a crucial nutrient and a key to the functioning of each system in our body. A human can live for
                    more than three weeks without food, but would not last for more than a few days without water. Water
                    also plays an important role in processes that affect fertility such as transporting hormones, developing
                    egg follicles, promoting proper semen volume and quality. Not drinking enough water can lead to
                    dehydration, which may affect fertility. There is a large variety of beverages we consumer daily, such as
                    seltzer, herb-infused water, teas, coffee, naturally sweetened drinks such as coconut water and freshly
                    made vegetable and fruit juices, sports and energy drinks, smoothies, alcoholic beverages. Yet, some
                    beverages could have a negative effect on our hormonal balance and contribute to infertility.
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Learn more about the relationship between hydration and fertility, beverages to include and exclude
                    from your diet. Track your hydration level, participate in live group classes, or consult with our
                    nutritionists, all right in the Fertilligence app.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Exercise">
                <h2 class="nbe-tab-title-text">
                    Exercise
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="328.478"
                     height="359.333" viewBox="0 0 328.478 359.333">
                    <defs>
                        <linearGradient id="excersize-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_9344" data-name="Group 9344" transform="translate(-599 -2419)">
                        <circle id="Ellipse_373" data-name="Ellipse 373" cx="20.861" cy="20.861" r="20.861"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 858.827, 2773.972)" opacity="0.49"
                                fill="url(#excersize-weawe)"/>
                        <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="131.474" cy="131.716" rx="131.474"
                                 ry="131.716" transform="translate(599 2522.867) rotate(-17)" opacity="0.53"
                                 fill="url(#excersize-weawe)"/>
                        <circle id="Ellipse_375" data-name="Ellipse 375" cx="2.426" cy="2.426" r="2.426"
                                transform="translate(899.08 2522.335)" fill="#94daec"/>
                        <g id="Ellipse_376" data-name="Ellipse 376" transform="translate(651.171 2446.168)"
                           fill="none" stroke="#ed0f68" stroke-width="2" stroke-dasharray="6">
                            <circle cx="8.247" cy="8.247" r="8.247" stroke="none"/>
                            <circle cx="8.247" cy="8.247" r="7.247" fill="none"/>
                        </g>
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="3.396" cy="3.396" r="3.396"
                                transform="translate(610.587 2635.413)" fill="#ed0f68"/>
                        <g id="Ellipse_378" data-name="Ellipse 378" transform="translate(889.377 2703.779)"
                           fill="none" stroke="#94daec" stroke-width="2" stroke-dasharray="5">
                            <circle cx="4.851" cy="4.851" r="4.851" stroke="none"/>
                            <circle cx="4.851" cy="4.851" r="3.851" fill="none"/>
                        </g>
                        <g id="_3885251" data-name="3885251" transform="translate(624.444 2419)">
                            <g id="OBJECTS" transform="translate(0 0)">
                                <g id="Group_9323" data-name="Group 9323" transform="translate(198.291)">
                                    <ellipse id="Ellipse_394" data-name="Ellipse 394" cx="29.809" cy="29.809"
                                             rx="29.809" ry="29.809"
                                             transform="translate(23.323 78.19) rotate(-113.029)" fill="#c6e7ef"/>
                                    <ellipse id="Ellipse_395" data-name="Ellipse 395" cx="29.809" cy="29.81"
                                             rx="29.809" ry="29.81"
                                             transform="matrix(-0.233, -0.973, 0.973, -0.233, 20.248, 72.685)"
                                             fill="#ff8300"/>
                                    <ellipse id="Ellipse_396" data-name="Ellipse 396" cx="25.136" cy="25.136"
                                             rx="25.136" ry="25.136" transform="translate(17.161 11.618)"
                                             fill="#fff"/>
                                    <path id="Path_74485" data-name="Path 74485"
                                          d="M135.438,91.44l2.16,20.706-13.848,10.3,8.311-12.026Z"
                                          transform="translate(-92.968 -72.706)" fill="#2d1b5a"/>
                                    <path id="Path_74486" data-name="Path 74486"
                                          d="M135.332,110.349a25.11,25.11,0,0,0-40.6-19.787,25.111,25.111,0,1,1,33.988,36.73A24.96,24.96,0,0,0,135.332,110.349Z"
                                          transform="translate(-70.963 -70.76)" fill="#ede9fd"/>
                                </g>
                                <g id="Group_9339" data-name="Group 9339" transform="translate(84.328 45.372)">
                                    <g id="Group_9338" data-name="Group 9338" transform="translate(0 0)">
                                        <g id="Group_9332" data-name="Group 9332" transform="translate(0 10.812)">
                                            <g id="Group_9329" data-name="Group 9329"
                                               transform="translate(13.013 27.366)">
                                                <path id="Path_74498" data-name="Path 74498"
                                                      d="M291.492,180.416a.32.32,0,0,1,.157-.471,37.1,37.1,0,0,0,9.5-5.883.4.4,0,0,1,.676.283,22.087,22.087,0,0,0,3.409,11.13.4.4,0,0,1-.141.534,44.156,44.156,0,0,1-12.018,5.569c-.236.063-.4-.291-.173-.4.008-.008.016-.008.031-.016a.19.19,0,0,1-.126-.165c-.055-.872.031-1.767.024-2.647a23.373,23.373,0,0,0-1.406-7.69A.267.267,0,0,1,291.492,180.416Z"
                                                      transform="translate(-291.417 -173.957)" fill="#feafab"/>
                                                <path id="Path_74499" data-name="Path 74499"
                                                      d="M295.24,180.831c1.107-.471,2.176-1.013,3.22-1.587,2.411-.416,4.831-.809,7.25-1.155.094.589.212,1.17.353,1.752a18.982,18.982,0,0,1-9.811,6.9.134.134,0,0,0-.008-.055,25.113,25.113,0,0,0-1.233-5.137.215.215,0,0,1,.063-.236A.332.332,0,0,1,295.24,180.831Z"
                                                      transform="translate(-295 -174.843)" fill="#f08a90"/>
                                            </g>
                                            <g id="Group_9331" data-name="Group 9331">
                                                <path id="Path_74500" data-name="Path 74500"
                                                      d="M315.295,147.727a25.593,25.593,0,0,1,1.83-3.762,5.37,5.37,0,0,1,1.767-1.8.318.318,0,0,1,.3-.141,2.9,2.9,0,0,1,.5-.165.072.072,0,0,1,.071.118c-.086.094-.188.181-.275.267a.264.264,0,0,1-.008.173,13.039,13.039,0,0,0-.707,4.383c.016,1.32.306,2.592-.22,3.849-.848,2.019-2.9,3.252-3.59,5.357a.346.346,0,0,1-.66,0C313.5,153.226,314.2,150.335,315.295,147.727Z"
                                                      transform="translate(-310.596 -139.705)" fill="#0a0909"/>
                                                <path id="Path_74501" data-name="Path 74501"
                                                      d="M268.023,164.239a11.829,11.829,0,0,1,.055,7.117,30.458,30.458,0,0,0-1.351,6.763,20.188,20.188,0,0,0,.809,6.677c1.351,4.6,4.493,8.318,6.559,12.591,2.011,4.147,2.883,9.45-.487,13.173a.261.261,0,0,0,.181.432h.008a.219.219,0,0,0,.165-.079c.024-.024.047-.055.079-.086a.131.131,0,0,0,.1-.024,18.25,18.25,0,0,0,5.946-15.341c-.267-2.922-1.461-5.553-2.317-8.326a14.253,14.253,0,0,1-.432-1.752,19.257,19.257,0,0,1,.283-7.886c.683-3.063,1.752-6.009,2.474-9.073.11-.448.2-.9.291-1.351a34.732,34.732,0,0,0,.5-7.714c-.2-5.357-1.555-11.28-6.331-14.406-3.378-2.215-8.656-2.1-11.052,1.359a.321.321,0,0,0-.243.149,12,12,0,0,0-1.445,3.268,11.371,11.371,0,0,0-.448,3.26A8,8,0,0,0,264,158.74C265.682,160.406,267.23,161.953,268.023,164.239Z"
                                                      transform="translate(-230.427 -140.051)" fill="#0a0909"/>
                                                <path id="Path_74502" data-name="Path 74502"
                                                      d="M272.919,165.89a11.829,11.829,0,0,1,.055,7.117,30.454,30.454,0,0,0-1.351,6.763,20.187,20.187,0,0,0,.809,6.677c1.351,4.6,4.493,8.318,6.559,12.591,2.011,4.147,2.883,9.449-.487,13.173a.261.261,0,0,0,.181.432h.008a9.861,9.861,0,0,0,2.121-4.234,14.222,14.222,0,0,0,1.155-5.946c-.141-5.255-2.655-10.007-4.3-14.893a16.121,16.121,0,0,1-.518-8.8c.573-2.655,1.485-5.231,1.948-7.926a33.343,33.343,0,0,0,.385-8.059c-.181-2.262-.471-4.6-1.924-6.433a16.362,16.362,0,0,0-5.821-4.407,7.555,7.555,0,0,0-5.027-.573,11.368,11.368,0,0,0-.448,3.26,8,8,0,0,0,2.631,5.75C270.579,162.057,272.126,163.6,272.919,165.89Z"
                                                      transform="translate(-235.324 -141.702)" fill="#0a0909"/>
                                                <path id="Path_74503" data-name="Path 74503"
                                                      d="M293.324,163.51l.024.189c.031.236.055.471.086.707h.008c.008.1.024.2.031.3l.047.424c.039.33.086.668.126.99.047.353.094.707.134,1.06.047.408.1.809.149,1.2a4.95,4.95,0,0,0,.118.833,34.242,34.242,0,0,0,1.272,7.069c.283.927.628,1.9,1.7,2.121a7.165,7.165,0,0,0,2.27-.2c.786-.126,1.579-.267,2.364-.408,1.775-.314,3.535-.676,5.3-1.068a26.474,26.474,0,0,0,4.147-1.037,9.61,9.61,0,0,0,3.849-2.569,13.16,13.16,0,0,0,2.8-4.2c2.474-5.891,0-12.536-5.121-16.111a12.638,12.638,0,0,0-8.9-2.325,4.378,4.378,0,0,0-1.32.11,6.6,6.6,0,0,0-1.909.644,7.267,7.267,0,0,0-2.8,2.561,8.438,8.438,0,0,0-1.194,3.9c-.047.644-.047,1.288-.063,1.932-.2.7-.408,1.39-.589,2.027l-.3.322a.027.027,0,0,0-.016.008.217.217,0,0,0-.1-.008c-.416.094-.825.212-1.225.346a1.419,1.419,0,0,0-.746.4A.926.926,0,0,0,293.324,163.51Z"
                                                      transform="translate(-293.298 -141.529)" fill="#feaaaf"/>
                                                <path id="Path_74505" data-name="Path 74505"
                                                      d="M283.812,140.557c6.465-2.9,14.838-1.21,20.219,3.173,2.938,2.388,3.071,6.386,2.624,9.874a21.9,21.9,0,0,1-3.81,9.779,21.682,21.682,0,0,1-1.822,2.247,5.293,5.293,0,0,1-1.893,1.626c-.77.236-1.634-.377-2.286-.7-1.194-.581-2.38-1.186-3.55-1.83a.272.272,0,0,1-.134-.181c-.008-.008-.008,0-.016-.008a17.37,17.37,0,0,1-2.49-5.436c-.683-2.019-1.225-4.092-1.791-6.15-1.131-4.155-2.4-8.318-4.972-11.837C283.663,141.044,283.537,140.682,283.812,140.557Z"
                                                      transform="translate(-273.858 -139.117)" fill="#0a0909"/>
                                                <path id="Path_74506" data-name="Path 74506"
                                                      d="M282.318,149.868h.016a.633.633,0,0,1,1.06-.628,2.281,2.281,0,0,1,.542.833,4.565,4.565,0,0,1,.33,1.005,10.606,10.606,0,0,1,.2,2c0,1.123-.1,2.679-1.217,3.268a.312.312,0,0,1-.377-.487,2.336,2.336,0,0,0,.338-1.32,13.908,13.908,0,0,0,.039-1.618,5.373,5.373,0,0,0-.275-1.532c-.079-.236-.173-.471-.275-.7a7.957,7.957,0,0,1-.354-.738.008.008,0,0,0-.008-.008A.187.187,0,0,0,282.318,149.868Z"
                                                      transform="translate(-250.425 -141.249)" fill="#94daec"/>
                                                <path id="Path_74507" data-name="Path 74507"
                                                      d="M293.232,143.012a5.924,5.924,0,0,1,6.143-2.553c2.694.668,4.359,3.134,5.381,5.546a71.911,71.911,0,0,1,2.773,9.214c1,3.653,2.27,7.3,4.705,10.259a.343.343,0,0,1-.33.566c-3.04-.495-6.669-.44-9.418-2.459a.16.16,0,0,1-.126.031,5.607,5.607,0,0,1-3.213-2.1c-1.068-1.217-1.964-2.592-2.906-3.912-1.461-2.042-3.755-4.532-3.762-7.211A8.187,8.187,0,0,1,293.232,143.012Z"
                                                      transform="translate(-285.847 -139.372)" fill="#0a0909"/>
                                                <path id="Path_74508" data-name="Path 74508"
                                                      d="M301.932,170.607c.016-.322.024-.644.047-.966a2.989,2.989,0,0,1,.165-1.021c.016-.031.039-.039.063-.055a.224.224,0,0,1,.079-.126,5.11,5.11,0,0,1,1.1-.676,4.835,4.835,0,0,1,1.265-.44,1.863,1.863,0,0,1,1.9.911c.935,1.524-.259,3.221-1.555,4.037a4.7,4.7,0,0,1-2.694.77.385.385,0,0,1-.385-.385C301.924,171.966,301.9,171.282,301.932,170.607Z"
                                                      transform="translate(-288.239 -145.162)" fill="#f08a90"/>
                                                <path id="Path_74509" data-name="Path 74509"
                                                      d="M307.4,185.478c.1-.157.22-.314.33-.471a55.017,55.017,0,0,0,3.645-10.691,49.443,49.443,0,0,0,.675-10.989.194.194,0,0,1-.165-.189,5.225,5.225,0,0,1,.047-.856.246.246,0,0,1,.361-.212,5.345,5.345,0,0,1,2.105,4.336,24.733,24.733,0,0,1-.51,6.928,27.736,27.736,0,0,1-2.247,6.52,19.607,19.607,0,0,1-3.755,5.561l-.071.118a.127.127,0,0,1-.11.055.474.474,0,0,0-.063.063C307.511,185.753,307.307,185.628,307.4,185.478Z"
                                                      transform="translate(-300.11 -144.033)" fill="#0a0909"/>
                                                <path id="Path_74515" data-name="Path 74515"
                                                      d="M319.649,154.28a.043.043,0,0,1,0,.086A.043.043,0,0,1,319.649,154.28Z"
                                                      transform="translate(-314.942 -142.369)" fill="#fff"/>
                                            </g>
                                        </g>
                                        <g id="Group_9333" data-name="Group 9333"
                                           transform="translate(25.839 95.613)">
                                            <path id="Path_74516" data-name="Path 74516"
                                                  d="M265.233,268.916c1.288-2.459,2.427-4.988,3.849-7.384a59.836,59.836,0,0,1,4.548-6.645,36.777,36.777,0,0,1,5.42-5.9c1.838-1.5,4.242-2.451,6.574-1.579.031.008.047.031.071.047a.672.672,0,0,1,.126,0,2.251,2.251,0,0,1,.644.1.3.3,0,0,1,.2.369.305.305,0,0,1-.141.173c.008.008.016.016.024.016s.008-.016.008-.024a.145.145,0,0,1,.283.039,32.319,32.319,0,0,1-1.343,6.661q-.907,3.547-2.082,7.022a76.081,76.081,0,0,1-5.491,13.047.285.285,0,0,1-.487.039,1.169,1.169,0,0,1-.306-.1c-.173-.063-.33-.141-.495-.22-.33-.157-.668-.306-.99-.479-.024-.008-.039-.024-.063-.031a54.8,54.8,0,0,1-10.227-4.611A.405.405,0,0,1,265.233,268.916Z"
                                                  transform="translate(-265.18 -247.076)" fill="#feafab"/>
                                            <path id="Path_74517" data-name="Path 74517"
                                                  d="M265.523,270.414c.6-.966,1.2-1.924,1.854-2.859.88-1.273,1.94-3.338,3.715-3.37a2.656,2.656,0,0,1,.864.141,18.517,18.517,0,0,0,3.778-4.477,52.436,52.436,0,0,1,3.574-5.632,27.315,27.315,0,0,0,2.294-3.228c.573-1.021.99-2.144,1.665-3.111a5.184,5.184,0,0,1,.385-.518c.149.039.306.071.456.126.031.008.047.031.071.047a.675.675,0,0,1,.126,0,2.251,2.251,0,0,1,.644.1c.008,0,.008.008.016.008a2.509,2.509,0,0,1,.086.495c-.016.008-.016.031-.031.039.008.008.016.016.024.016s.008-.016.008-.024h0a6.565,6.565,0,0,1-.024.809c-.094,1.17-.251,2.349-.416,3.519-.2.8-.424,1.595-.621,2.372q-.907,3.546-2.082,7.022a85.917,85.917,0,0,1-4.493,11.17,9.9,9.9,0,0,1-1.225-.636c-.487-.275-.958-.566-1.437-.84a1.661,1.661,0,0,1-.189.047c-1.453.33-2.891.754-4.344,1.1C268.618,272.009,267.047,271.215,265.523,270.414Z"
                                                  transform="translate(-263.664 -247.137)" fill="#feaaaf"/>
                                        </g>
                                        <g id="Group_9334" data-name="Group 9334"
                                           transform="translate(4.038 48.106)">
                                            <path id="Path_74518" data-name="Path 74518"
                                                  d="M266.306,205.514a11.445,11.445,0,0,1,1.681-3.268,71.08,71.08,0,0,1,9.929-10.746c1.123-1.005,2.27-1.987,3.448-2.922a8.568,8.568,0,0,1,3.456-1.885c2.388-.495,4.509.966,6.1,2.584,1.9,1.932,4.1,4.462,4.414,7.266a.2.2,0,0,1,.063.149c-.016,1.367-.275,2.757-.385,4.124s-.189,2.757-.236,4.14c-.094,2.694-.071,5.4.079,8.1q.224,4.206.848,8.381c.346,2.3.9,4.572,1.3,6.865.141.055.275.11.408.157.534.2,1.06.393,1.595.6,1.068.408,2.129.833,3.181,1.28s2.1.9,3.134,1.382a21.047,21.047,0,0,1,3.04,1.508.314.314,0,0,1,.377.369c-.558,2.961-2.223,5.663-3.778,8.193a88.4,88.4,0,0,1-5.184,7.541,77.682,77.682,0,0,1-12.4,13.047.193.193,0,0,1-.2.024.157.157,0,0,1-.22-.039c-3.417-4.359-5.695-9.921-8.091-14.893A257.5,257.5,0,0,1,267.6,218.679C266.141,214.429,264.924,209.771,266.306,205.514Z"
                                                  transform="translate(-265.7 -186.595)" fill="#fb5d9c"/>
                                            <path id="Path_74519" data-name="Path 74519"
                                                  d="M286.5,224.668c-.652-1.854-1.3-3.715-1.924-5.569-1.453-4.257-2.663-8.915-1.28-13.173a12.019,12.019,0,0,1,.6-1.485l5.553,8.774,9.764-23.306,7.392-1.39a13.3,13.3,0,0,1,1.3,1.17c1.9,1.932,4.1,4.462,4.414,7.266a.2.2,0,0,1,.063.149c-.016,1.367-.275,2.757-.385,4.124s-.189,2.757-.236,4.14c-.094,2.694-.071,5.4.079,8.1.094,1.783.251,3.574.456,5.349l-10.314,9.41-11.555-4.477,5.632,7.58Z"
                                                  transform="translate(-282.684 -187.008)" fill="#ef3f85"/>
                                        </g>
                                        <g id="Group_9335" data-name="Group 9335"
                                           transform="translate(20.047 101.828)">
                                            <path id="Path_74522" data-name="Path 74522"
                                                  d="M234.314,410.294a.177.177,0,0,0,.126.173,41.646,41.646,0,0,0,10.785,1.406c6.716-.016,13.463-.982,20.164-.149,1.045.126,2.466.6,3.346-.244.809-.778.707-2.191.676-3.2a19.473,19.473,0,0,0-1.493-7.007c-.047-2.3-.023-4.6.086-6.9a101.585,101.585,0,0,1,4.477-25.214c1.217-4,2.608-7.941,3.81-11.932.691-2.27,1.359-4.579,1.838-6.928.2-.935.353-1.885.471-2.836a.238.238,0,0,0,.118-.2,6.605,6.605,0,0,0-.024-.683c.039-.409.079-.817.094-1.218a.1.1,0,0,0-.189-.039c-.134-1.076-.338-2.16-.5-3.2-.259-1.681-.55-3.346-.88-5.019-.44-2.231-.919-4.485-1.516-6.7a.106.106,0,0,0,.063-.126,73.378,73.378,0,0,1-.149-16.346c.99-9.866,3.825-19.457,7.407-28.678.864-2.223,1.924-4.43,2.569-6.732a12.114,12.114,0,0,0-.031-6.441c-1.3-5.035-2.985-10.039-4.634-14.972a.188.188,0,0,0-.141-.126,1.982,1.982,0,0,0-1.17-1.7c-1.327-.668-2.953.024-4.218.5a26.028,26.028,0,0,0-13.251,10.879,25.625,25.625,0,0,0-1.924,3.825,16.481,16.481,0,0,0-1.045,3.244.229.229,0,0,0-.314.2c-.306,6.614-.016,13.314.243,19.92a199.75,199.75,0,0,0,3.425,31.553,1.067,1.067,0,0,0-.016.157c-.016.126-.031.259-.047.385a.053.053,0,0,0-.031.047c-.008.157-.024.306-.031.456-.016.11-.031.2-.039.314-.047.416-.079.833-.118,1.257a6.155,6.155,0,0,0-.086,1.194c0,.024.016.031.024.047-.189,2.734-.306,5.459-.275,8.232.031,3.778.2,7.564.377,11.342.024.558.047,1.123.079,1.689.581,12.8,1.139,25.858-2.309,38.34-.872,3.166-2.027,6.355-4.265,8.821a35.709,35.709,0,0,1-7.564,5.679,20.188,20.188,0,0,1-8.97,3.37C237.056,406.979,234.424,407.7,234.314,410.294Z"
                                                  transform="translate(-234.314 -254.992)" fill="#feaaaf"/>
                                            <path id="Path_74525" data-name="Path 74525"
                                                  d="M234.664,293.871c0,.063.008.141.008.2a198.936,198.936,0,0,0,3.417,31.341,1.063,1.063,0,0,0-.016.157c-.016.126-.031.259-.047.385a.053.053,0,0,0-.031.047c-.008.157-.024.306-.031.456-.016.11-.031.2-.039.314-.047.416-.079.833-.118,1.257a6.148,6.148,0,0,0-.086,1.194c0,.023.016.031.024.047-.189,2.734-.306,5.459-.275,8.232.031,3.778.2,7.564.377,11.343.023.558.047,1.123.078,1.689,1.406.031,2.8.024,4.21.016,2.317,0,4.65-.008,6.967-.094,1.516-.047,3.079-.055,4.627-.181.2-.935.353-1.885.471-2.836a.238.238,0,0,0,.118-.2,6.631,6.631,0,0,0-.024-.683c.039-.408.079-.817.094-1.218a.1.1,0,0,0-.189-.039c-.133-1.076-.338-2.16-.5-3.2-.259-1.681-.55-3.346-.88-5.019-.44-2.231-.919-4.485-1.516-6.7a.106.106,0,0,0,.063-.126,73.381,73.381,0,0,1-.149-16.346c.99-9.866,3.825-19.457,7.407-28.678.864-2.223,1.924-4.43,2.569-6.732a11.693,11.693,0,0,0,.157-5.608c-.055-.275-.118-.558-.188-.841-.338-1.32-.715-2.639-1.1-3.959-1.092-3.692-2.317-7.376-3.535-11.013a.188.188,0,0,0-.141-.126,1.982,1.982,0,0,0-1.17-1.7c-1.327-.668-2.953.024-4.218.5a26.029,26.029,0,0,0-13.251,10.879,25.626,25.626,0,0,0-1.924,3.825c-.181.44-.377.919-.542,1.414a11.209,11.209,0,0,0-.5,1.838.229.229,0,0,0-.314.2C234.114,280.557,234.4,287.265,234.664,293.871Z"
                                                  transform="translate(-209.905 -254.988)" fill="#2d1b5a"/>
                                            <path id="Path_74526" data-name="Path 74526"
                                                  d="M235.055,297.373c0,.063.008.141.008.2.99,1.406,2.356,2.474,4.21,2.2a12.437,12.437,0,0,0,4.163-1.877,39.625,39.625,0,0,0,3.825-2.514,43.008,43.008,0,0,0,6.716-6.151,39.926,39.926,0,0,0,7.729-12.819c-.055-.275-.118-.558-.189-.84-.338-1.32-.715-2.639-1.1-3.959a20.677,20.677,0,0,0-5.821-.2,72.345,72.345,0,0,0-12.285,1.948,55.178,55.178,0,0,0-6.685,2.042,11.207,11.207,0,0,0-.5,1.838.229.229,0,0,0-.314.2C234.505,284.058,234.8,290.767,235.055,297.373Z"
                                                  transform="translate(-210.296 -258.489)" fill="#130536"/>
                                            <path id="Path_74527" data-name="Path 74527"
                                                  d="M243.56,337a6.677,6.677,0,0,1,.966-2.042c.44-.793.872-1.587,1.272-2.4,1.618-3.3,2.828-6.787,4.2-10.2a47.749,47.749,0,0,1,4.163-8.4,90.379,90.379,0,0,0-2.247,12.623,73.39,73.39,0,0,0,.149,16.346.121.121,0,0,1-.063.126c.6,2.215,1.076,4.47,1.516,6.7.259,1.3.487,2.616.7,3.92a.008.008,0,0,0-.008.008c.008.008.008.016.016.031.055.354.118.707.173,1.06.165,1.037.377,2.121.5,3.2a.1.1,0,0,1,.188.039c-.008.291-.039.573-.063.864q-3.334-6.386-6.661-12.772a.4.4,0,0,1-.039-.181c-.071-.141-.149-.275-.22-.408-.817-1.626-1.547-3.307-2.521-4.847C244.927,339.6,243.34,338.4,243.56,337Z"
                                                  transform="translate(-210.64 -267.638)" fill="#130536"/>
                                        </g>
                                        <g id="Group_9336" data-name="Group 9336" transform="translate(38.032)">
                                            <path id="Path_74528" data-name="Path 74528"
                                                  d="M165.931,153.589a2.65,2.65,0,0,0,.33.558v.008a.008.008,0,0,1,.008.008v.008a.008.008,0,0,1,.008.008.047.047,0,0,0,.008.031c.008.008.471.456,1.17,1.139,1.532,1.477,4.179,4.037,5.5,5.365q3.11,3.134,6.04,6.465a149.5,149.5,0,0,1,9.772,12.348c2.977,4.195,5.569,8.672,9.017,12.513.518.581,1.053,1.147,1.6,1.7a47.918,47.918,0,0,0,5.8,5.035,44.828,44.828,0,0,0,13.157,6.779c.817.267,1.642.487,2.474.7a.366.366,0,0,0,.369.251,21.357,21.357,0,0,0,3.708-.88c1.241-.314,2.466-.644,3.692-.99,2.058-.581,4.352-1.045,6.08-2.38-.047-.236-.086-.471-.118-.715a2.437,2.437,0,0,0-.11-.369v-.016c-1.728-3.912-5.137-6.818-8.538-9.285-2.844-2.058-5.773-4.014-8.688-5.962-1.084-.738-2.176-1.469-3.252-2.207-4.328-2.961-8.64-5.962-12.874-9.072-7.549-5.522-15.38-11.248-20.941-18.875-.134-.181-.267-.354-.393-.542a.325.325,0,0,0-.314-.149c-.377-1.021-1.053-2.027-1.477-2.985-.173-.416-.346-.825-.5-1.249-.353-.888-.683-1.791-.974-2.71a42.125,42.125,0,0,1-1.869-16.228c.118-1.453.346-2.875.573-4.312a4.608,4.608,0,0,0-.063-2.176h.008c.086-.126-.817.008-.848.031-.189.126-.377.259-.558.393-.126.1-.244.212-.377.322-.008,0-.016-.008-.024,0a11.66,11.66,0,0,0-4.768,5.891c-1.005,2.93-.275,6.1-.5,9.12a12.569,12.569,0,0,1-1.367,4.815c-.267.5-.55,1.013-.809,1.54a8.716,8.716,0,0,0-.793,2.192A4.724,4.724,0,0,0,165.931,153.589Z"
                                                  transform="translate(-146.495 -125.352)" fill="#feaaaf"/>
                                            <path id="Path_74530" data-name="Path 74530"
                                                  d="M235.341,159.638a2.649,2.649,0,0,0,.33.558v.008a.008.008,0,0,1,.008.008v.008a.008.008,0,0,1,.008.008.047.047,0,0,0,.008.031c.008.008.471.456,1.17,1.139.416-.063.84-.141,1.265-.173a28.049,28.049,0,0,1,5.624.094,23.308,23.308,0,0,0,4.894.5.348.348,0,0,0,.322.063c.157-.031.369-.055.581-.094-.134-.181-.267-.353-.393-.542a.325.325,0,0,0-.314-.149c-.377-1.021-1.053-2.027-1.477-2.985-.173-.416-.346-.825-.5-1.249-.141-.086-.291-.157-.432-.243a26.44,26.44,0,0,0-9.379-2.953,13.262,13.262,0,0,0-1.767-.118,8.716,8.716,0,0,0-.793,2.191A4.746,4.746,0,0,0,235.341,159.638Z"
                                                  transform="translate(-215.905 -131.401)" fill="#f08a90"/>
                                            <path id="Path_74531" data-name="Path 74531"
                                                  d="M165.365,266.175a79.677,79.677,0,0,0,17.705-1.547c2.231-.456,4.509-.99,6.755-1.634a73.842,73.842,0,0,0,11.225-3.244c10.094-3.762,19.645-9.112,28.733-14.846,8-5.051,15.891-10.746,21.475-18.467a5.513,5.513,0,0,0,1.005-1.178,4.662,4.662,0,0,0,.558-1.854c.094-.762.134-1.54.189-2.3a11.732,11.732,0,0,0,.11-2.168c0-.008-.008-.016-.016-.024v-.079c-.047-.259-.094-.5-.126-.762a2.43,2.43,0,0,0-.11-.369v-.016c-1.728-3.912-5.137-6.818-8.538-9.285-2.844-2.058-5.773-4.014-8.688-5.962a36.55,36.55,0,0,0-6.818,5.946,39.171,39.171,0,0,0-2.647,3.181c-.3.393-.581.785-.864,1.194-.581.825-1.162,1.673-1.7,2.553a46.493,46.493,0,0,0,8.837,5.161c.558.243,1.131.471,1.7.7.856.338,1.736.644,2.616.919h.008c.008,0,.016.008.024.008-7.258,2.765-14.579,5.31-22.065,7.423-4.25,1.2-8.53,2.309-12.811,3.385-2.953.746-5.954,1.406-8.908,2.176-1.437-.2-2.875-.4-4.32-.573a39.059,39.059,0,0,0-6.614-.581c-1.893.1-3.778,1.343-5.459,2.121-.691.314-1.414.613-2.137.919a.34.34,0,0,0-.534.149,69.46,69.46,0,0,0-1.7,7.282c-.573,2.364-1.225,4.721-1.94,7.046a120.087,120.087,0,0,1-5.349,14.06A.459.459,0,0,0,165.365,266.175Z"
                                                  transform="translate(-164.929 -141.888)" fill="#2d1b5a"/>
                                            <path id="Path_74535" data-name="Path 74535"
                                                  d="M181.625,270.781l.338-1c.22-.644.432-1.3.652-1.948.1-.314.2-.628.314-.943.055-.165.126-.33.2-.495a2.21,2.21,0,0,1,.283-.471.257.257,0,0,1,.416-.008.059.059,0,0,1,.039.008.34.34,0,0,1,.259-.165,167.836,167.836,0,0,0,27.445-4.862c4.328-1.092,8.727-2.034,12.984-3.385a76.305,76.305,0,0,0,12.458-5.585q3.488-1.838,6.967-3.676a70.757,70.757,0,0,1,7.054-3.582c.071-.031.118.039.1.1l.2-.149c.086-.071.22.047.126.126-3.621,3.252-7.957,5.766-12.018,8.428a120.436,120.436,0,0,1-13.126,7.847c-8.766,4.249-18.365,6.677-27.791,8.97a87.324,87.324,0,0,1-8.633,1.712,33.112,33.112,0,0,1-7.423.566l-.016.016c-.456.346-1.053-.118-1.06-.621A3.3,3.3,0,0,1,181.625,270.781Z"
                                                  transform="translate(-176.201 -150.932)" fill="#130536"/>
                                            <path id="Path_74536" data-name="Path 74536"
                                                  d="M178.583,217.8a46.491,46.491,0,0,0,8.837,5.161c.558.243,1.131.471,1.7.7.856.338,1.736.644,2.616.919h.008c.314-.079.613-.157.927-.243a27.962,27.962,0,0,0,4.257-1.359,1.807,1.807,0,0,1,.181.079c.228.086.377-.291.157-.385a98.166,98.166,0,0,1-16.134-8.609c-.3.393-.581.785-.864,1.194C179.7,216.071,179.117,216.919,178.583,217.8Z"
                                                  transform="translate(-119.887 -144.381)" fill="#130536"/>
                                        </g>
                                        <g id="Group_9337" data-name="Group 9337"
                                           transform="translate(17.407 3.902)">
                                            <path id="Path_74537" data-name="Path 74537"
                                                  d="M231.4,192.083q1.7-17.32,2.71-34.687.554-9.662.927-19.331a12.329,12.329,0,0,1,.4-4.092,4.911,4.911,0,0,1,2.176-2.2,10.314,10.314,0,0,1,6.331-1.4,12,12,0,0,1,4.8,1.037,79.321,79.321,0,0,1,8.845,3.927c2.969,1.516,5.875,3.166,8.774,4.807s5.954,3.173,8.719,5.035a.313.313,0,0,1,.165-.071,19.171,19.171,0,0,1,3.4-2.3,6.111,6.111,0,0,1,3.967-.683c.778.11,1.555.243,2.325.369a2.064,2.064,0,0,1,1.39.676,5.229,5.229,0,0,1,.778,1.6c.275.762.518,1.524.738,2.3v.024c.322.181-.024.8-.11,1.045-.181.479-.346.958-.518,1.445a29.6,29.6,0,0,0-.848,2.844h0a.167.167,0,0,1-.079.1c-.016.008-.024.016-.039.024s-.008.008-.016.008a4.6,4.6,0,0,1-1.272.094c-.456.008-.919.039-1.375.079l-.212.024a3.814,3.814,0,0,1,.652.377,3.736,3.736,0,0,1,1.084,1.241,3.434,3.434,0,0,1,.283.73,2.359,2.359,0,0,1,.063.4.694.694,0,0,1-.063.322s0,.471-.244.44a5.666,5.666,0,0,1-1.241-.511c-.44-.189-.88-.377-1.328-.534-.856-.314-1.759-.5-2.592-.872a9.822,9.822,0,0,1-2.113-1.32,15.012,15.012,0,0,1-2.176-1.869.23.23,0,0,1-.126-.008c-1.555-.471-3.055-1.076-4.626-1.492s-3.173-.738-4.784-1.021c-3.126-.558-6.276-.966-9.371-1.673a28.7,28.7,0,0,1-10.777-4.556v.393q.059,8.754.118,17.517c.039,5.781.118,11.57-.071,17.344a65.973,65.973,0,0,1-1.736,14.681,28.7,28.7,0,0,1-2.506,6.425c-.785,1.445-2.019,3.967-3.927,4.092a3.238,3.238,0,0,1-2.309-1.131,21.852,21.852,0,0,1-2.631-2.891,8.39,8.39,0,0,1-1.61-2.875A11.75,11.75,0,0,1,231.4,192.083Z"
                                                  transform="translate(-231.199 -130.32)" fill="#feaaaf"/>
                                            <path id="Path_74540" data-name="Path 74540"
                                                  d="M259.639,144.514c3.126.888,6.2,2.034,9.277,3.056,2.686.888,5.381,1.744,8.1,2.537.707.149,1.422.283,2.137.377.275.039.212.518-.063.487a67.112,67.112,0,0,1-10.361-1.956,43.893,43.893,0,0,1-9.528-3.464A.57.57,0,0,1,259.639,144.514Z"
                                                  transform="translate(-244.321 -133.36)" fill="#f08a90"/>
                                            <path id="Path_74541" data-name="Path 74541"
                                                  d="M231.9,155.038c-.118-.244-.228-.487-.338-.731a6.055,6.055,0,0,1-.338-.809c-.157-.613.566-.778,1-.919.628-.2,1.265-.369,1.909-.534.338-.086.676-.157,1.021-.212.157-.024.33-.055.495-.063.157.243-.118.746-.2.958-.181.479-.346.958-.518,1.445a29.578,29.578,0,0,0-.848,2.843h0a.167.167,0,0,1-.079.1c-.016.008-.024.016-.039.024s-.008.008-.016.008a2.483,2.483,0,0,1-.628.094A8.046,8.046,0,0,1,231.9,155.038Z"
                                                  transform="translate(-178.906 -134.921)" fill="#f08a90"/>
                                            <path id="Path_74542" data-name="Path 74542"
                                                  d="M287.57,209.641c1.272-.1,2.168-1.147,2.938-2.058a23.766,23.766,0,0,0,2.176-3.04,24.588,24.588,0,0,0,2.914-6.567c.071-.283.487-.157.432.118-.212,1.068-.448,2.129-.715,3.181a33.928,33.928,0,0,1-2.9,9.63c-.4.864-.841,1.712-1.312,2.537-.251.432-.526.9-1.084.746-.573-.157-1.06-1.053-1.382-1.516a18.037,18.037,0,0,1-1.406-2.411A.4.4,0,0,1,287.57,209.641Z"
                                                  transform="translate(-283.217 -144.799)" fill="#f08a90"/>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_9343" data-name="Group 9343" transform="translate(0 226.355)">
                                    <g id="Group_9342" data-name="Group 9342">
                                        <g id="Group_9341" data-name="Group 9341">
                                            <path id="Path_74543" data-name="Path 74543"
                                                  d="M336.345,383.807c2.1-7.242,5.821-14.186,12.152-18.538a54.289,54.289,0,0,1,10.95-5.381,45.829,45.829,0,0,1,6.2-2.137,22.623,22.623,0,0,1,6.5-.495c15.1.864,29.244,10.18,34.907,24.35a34.851,34.851,0,0,1,1.359,22.1,41.507,41.507,0,0,1-11.343,18.6c-.039.039-.086.079-.134.118a.53.53,0,0,1-.165.283,38.945,38.945,0,0,1-20.753,10.07,30.465,30.465,0,0,1-22.151-5.294,60.545,60.545,0,0,1-9.175-8.538,34.442,34.442,0,0,1-6.229-10.353c-.809-2.019-1.524-4.085-2.239-6.143a27.549,27.549,0,0,1-1.54-6.174C334.255,392.149,335.2,387.766,336.345,383.807Z"
                                                  transform="translate(-332.293 -356.07)" fill="#fb5d9c"/>
                                            <path id="Path_74544" data-name="Path 74544"
                                                  d="M343.839,429.037a60.541,60.541,0,0,1-9.175-8.538l-.094-.118c10.636-1.3,21.3-3.975,30.194-10.054a41.609,41.609,0,0,0,11.916-12.23,33.392,33.392,0,0,0,4.972-17.085c.094-3.833-.079-7.706-.353-11.531a47.413,47.413,0,0,0-.621-5.051,38.359,38.359,0,0,1,16.354,18.718,34.85,34.85,0,0,1,1.359,22.1,41.507,41.507,0,0,1-11.343,18.6c-.039.039-.086.079-.134.118a.529.529,0,0,1-.165.283A38.944,38.944,0,0,1,366,434.323,30.435,30.435,0,0,1,343.839,429.037Z"
                                                  transform="translate(-322.263 -357.618)" fill="#f63783"/>
                                            <g id="Group_9340" data-name="Group 9340">
                                                <path id="Path_74545" data-name="Path 74545"
                                                      d="M333.761,355.862a49.129,49.129,0,0,0,6.6,8.358,52.116,52.116,0,0,0,8.507,6.6,96.613,96.613,0,0,0,20.659,9.74,56.74,56.74,0,0,0,6.614,1.8c2.364.479,4.752.542,7.117.927.2.031.118.3-.039.322a21.17,21.17,0,0,1-6.127-.432,49.489,49.489,0,0,1-6.284-1.524,96.685,96.685,0,0,1-11.555-4.556c-6.583-3.016-13.039-6.614-18.412-11.523a31.09,31.09,0,0,1-7.462-9.473A.226.226,0,0,1,333.761,355.862Z"
                                                      transform="translate(-305.092 -355.758)" fill="#fff"/>
                                                <path id="Path_74546" data-name="Path 74546"
                                                      d="M330.152,363.324a59.609,59.609,0,0,0,18.436,21.9c8.444,6.2,18.247,10.2,28.372,12.7q4.336,1.072,8.75,1.783a30.846,30.846,0,0,0,10.3.259c.3-.055.432.408.126.463-5.483,1.045-11.264-.063-16.652-1.186a90.861,90.861,0,0,1-15.93-4.831c-9.308-3.817-18.074-9.426-24.782-17a52.649,52.649,0,0,1-9.057-13.84C329.586,363.293,330,363.026,330.152,363.324Z"
                                                      transform="translate(-315.15 -357.353)" fill="#fff"/>
                                                <path id="Path_74547" data-name="Path 74547"
                                                      d="M334.95,383.031c4.705,9.465,12.261,17.163,20.808,23.251a108.67,108.67,0,0,0,13.157,7.957A85.047,85.047,0,0,0,385.5,420.97c6.567,1.791,13.589,2.49,20.242.754a.319.319,0,0,1,.173.613c-12.089,3.016-24.24-.919-35.08-6.229-9.567-4.682-18.71-10.6-26.094-18.341a57.382,57.382,0,0,1-10.149-14.524C334.478,383,334.832,382.787,334.95,383.031Z"
                                                      transform="translate(-328.808 -361.585)" fill="#fff"/>
                                                <path id="Path_74548" data-name="Path 74548"
                                                      d="M356.255,402.3c3.221,8.829,10.785,15.105,18.231,20.368a93.356,93.356,0,0,0,25.45,13.11,56.617,56.617,0,0,0,16.2,2.9c.361.008.353.581,0,.558a72.825,72.825,0,0,1-28.286-7.627,101.628,101.628,0,0,1-12.858-7.682,84.209,84.209,0,0,1-10.934-8.805,33.082,33.082,0,0,1-8.444-12.646C355.462,402.07,356.106,401.9,356.255,402.3Z"
                                                      transform="translate(-355.589 -365.692)" fill="#fff"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g id="Plant" transform="translate(806.233 2561.309)">
                            <path id="Path-133"
                                  d="M74.548,45.464c-7.979-6.8-1.723-10.957-5.781-14.524S65.1,23.026,65.474,15.822,55.49,3.04,57.964.957c1.324-1.115,10.357.8,13.916.531,5.093-.38,8.894-1.265,13.132,2.6s5.007,6.356,9.235,9.687,5.742-1.452,11,7.254-1.125,24.361-13.375,18.232C89.708,51.423,82.526,52.268,74.548,45.464Z"
                                  transform="translate(-40.698 -0.604)" fill="#53a25b"/>
                            <path id="Combined-Shape"
                                  d="M112.494,28.8l-5.368-.513a.265.265,0,0,1,.05-.528l4.776.456a35.619,35.619,0,0,0-4.877-4.325.265.265,0,1,1,.312-.429,36.114,36.114,0,0,1,4.942,4.382l.469-3.408a.265.265,0,1,1,.525.072l-.528,3.837a52.467,52.467,0,0,1,7.237,10.363l1.1-6.585a.265.265,0,1,1,.523.088l-1.214,7.261a87.975,87.975,0,0,1,5.117,11.885l4.563-8.937a.265.265,0,1,1,.472.241L125.8,52.048q.564,1.635,1.1,3.348a.265.265,0,1,1-.506.158q-.517-1.659-1.062-3.244l-10.392-3.075a.265.265,0,0,1,.15-.509l10.028,2.967a87.6,87.6,0,0,0-5.184-12.053l-8.305-.844a.265.265,0,0,1,.054-.528l7.949.808A52.209,52.209,0,0,0,112.494,28.8Z"
                                  transform="translate(-75.472 -16.688)" fill="#c9e3c8"/>
                            <path id="Path-132-Copy"
                                  d="M183.058,214.118a.4.4,0,1,1-.794.045q-3.581-63.359-9.784-83.178a.4.4,0,1,1,.759-.238Q179.477,150.676,183.058,214.118Z"
                                  transform="translate(-121.722 -92.196)" fill="#1d8450"/>
                            <path id="Path-133-2" data-name="Path-133"
                                  d="M16.966,4.259c-7.979,6.8-1.723,10.957-5.781,14.524S7.514,26.7,7.892,33.9-2.092,46.683.382,48.766c1.324,1.115,10.357-.8,13.916-.531,5.093.38,8.894,1.265,13.132-2.6s5.007-6.356,9.235-9.687,5.742,1.452,11-7.254S46.535,4.332,34.284,10.461C32.126-1.7,24.945-2.544,16.966,4.259Z"
                                  transform="translate(103.579 76.026) rotate(-178)" fill="#53a25b"/>
                            <path id="Path"
                                  d="M5.608,26.942.24,27.455a.265.265,0,0,0,.05.528l4.776-.457A35.577,35.577,0,0,1,.189,31.852a.265.265,0,0,0,.312.429A36.115,36.115,0,0,0,5.444,27.9l.469,3.407a.265.265,0,1,0,.525-.072L5.91,27.4a52.467,52.467,0,0,0,7.237-10.363l1.1,6.585a.265.265,0,1,0,.523-.088l-1.214-7.261A87.994,87.994,0,0,0,18.674,4.386l4.563,8.937a.265.265,0,1,0,.472-.242L18.916,3.692q.563-1.635,1.1-3.348a.265.265,0,1,0-.506-.158Q18.99,1.845,18.445,3.43L8.053,6.5a.265.265,0,0,0,.15.509L18.231,4.047A87.551,87.551,0,0,1,13.047,16.1l-8.3.844a.265.265,0,0,0,.053.528l7.949-.808A52.22,52.22,0,0,1,5.608,26.942Z"
                                  transform="translate(89.409 65.459) rotate(-178)" fill="#c9e3c8"/>
                            <path id="Path-132-Copy-2" data-name="Path-132-Copy"
                                  d="M10.758.438A.4.4,0,1,0,9.966.358Q6.224,37.864.018,57.688a.4.4,0,1,0,.759.238Q7.009,38.014,10.758.438Z"
                                  transform="translate(68.091 122.174) rotate(-178)" fill="#1d8450"/>
                            <path id="Path-133-3" data-name="Path-133"
                                  d="M33.4,221.722c-5.993-1.6-4.336-4.153-9.025-9.771-2.708-3.244-5.932-2.654-8.477-5.442s-2.473-9.359-5.017-11.337Q4.858,190.49.292,191.157,5.861,180.974,10.879,180c5.017-.97,8.3,2.494,14.744,3.082s5.171-3.113,11.95-.646,1.972,7.562,11.41,9.147,10.488,16.175-3.2,16.52C49.579,219.859,39.391,223.32,33.4,221.722Z"
                                  transform="translate(-0.292 -127.013)" fill="#53a25b"/>
                            <path id="Path-2" data-name="Path"
                                  d="M52.5,208.37l-4.98,2.069a.265.265,0,0,1-.2-.49l4.431-1.841a35.524,35.524,0,0,0-6.335-1.527.265.265,0,0,1,.075-.525A36.077,36.077,0,0,1,51.91,207.6l-1.184-3.229a.265.265,0,1,1,.5-.183l1.333,3.636a52.389,52.389,0,0,1,11.25,5.749l-2.116-6.332a.265.265,0,1,1,.5-.168l2.334,6.982a87.87,87.87,0,0,1,10.093,8.089l-.163-10.035a.265.265,0,1,1,.53-.009l.172,10.542q1.264,1.179,2.539,2.44a.265.265,0,1,1-.373.378q-1.235-1.221-2.459-2.365l-10.618,2.169a.265.265,0,1,1-.106-.52l10.246-2.093a87.415,87.415,0,0,0-10.231-8.206L56.429,217.6a.265.265,0,0,1-.2-.491l7.4-3.022A52.158,52.158,0,0,0,52.5,208.37Z"
                                  transform="translate(-31.957 -144.068)" fill="#c9e3c8"/>
                            <path id="Path-3" data-name="Path"
                                  d="M172.029,314.617a.4.4,0,1,1-.789.1q-3.191-25.019-17.9-39.532a.4.4,0,0,1,.558-.567Q168.807,289.338,172.029,314.617Z"
                                  transform="translate(-108.152 -193.784)" fill="#1d8450"/>
                            <rect id="Rectangle" width="42.945" height="12.471"
                                  transform="translate(39.678 118.692)" fill="#e9a080"/>
                            <path id="Rectangle-Copy-12" d="M143.92,445.662h37.643l-5.3,31.044H149.222Z"
                                  transform="translate(-101.591 -314.499)" fill="#ffb899"/>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Exercise plays an important role in fertility. Regular physical activity helps to balance
                    hormones (e.g. androgen) and decrease inflammation while helping control blood sugar, supporting
                    a healthy weight, and relieving stress. All of these factors play important roles in fertility.
                    Moderate exercise typically produces the best results for women trying to conceive.

                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Learn more about the relationship between exercise and fertility, then jump into an on-demand or
                    live group class directly in the Fertilligence app. Then, working one-on-one with your fertility
                    coach, build out a workout regimen you love to boost your fertility!
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Sleep">
                <h2 class="nbe-tab-title-text">
                    Sleep
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="335.671"
                     height="336" viewBox="0 0 335.671 336">
                    <defs>
                        <linearGradient id="sleep-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_9486" data-name="Group 9486" transform="translate(-603 -3288.631)">
                        <circle id="Ellipse_373" data-name="Ellipse 373" cx="14.873" cy="14.873" r="14.873"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 868.516, 3617.351)" opacity="0.49"
                                fill="url(#sleep-weawe)"/>
                        <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="134.353" cy="134.601" rx="134.353"
                                 ry="134.601" transform="translate(603 3367.193) rotate(-17)" opacity="0.53"
                                 fill="url(#sleep-weawe)"/>
                        <g id="Plant" transform="translate(844.934 3413.939)">
                            <path id="Path-133"
                                  d="M72.375,39.721c-6.958-5.933-1.5-9.554-5.041-12.665s-3.2-6.9-2.871-13.183S55.757,2.729,57.915.912c1.155-.972,9.031.694,12.134.463C74.49,1.043,77.8.272,81.5,3.643s4.366,5.542,8.052,8.447,5.007-1.266,9.587,6.325-.981,21.242-11.663,15.9C85.595,44.917,79.333,45.653,72.375,39.721Z"
                                  transform="translate(-42.859 -0.604)" fill="#53a25b"/>
                            <path id="Combined-Shape"
                                  d="M111.776,28.108l-4.681-.447a.231.231,0,0,1,.044-.461l4.165.4a31.058,31.058,0,0,0-4.252-3.772.231.231,0,1,1,.272-.374,31.491,31.491,0,0,1,4.31,3.821l.409-2.971a.231.231,0,1,1,.458.063l-.461,3.346a45.748,45.748,0,0,1,6.31,9.036l.96-5.742a.231.231,0,1,1,.456.076l-1.059,6.332a76.713,76.713,0,0,1,4.462,10.364l3.979-7.793a.231.231,0,1,1,.412.211l-4.18,8.187q.491,1.426.957,2.919a.231.231,0,1,1-.442.138q-.451-1.446-.926-2.828l-9.062-2.681a.231.231,0,0,1,.131-.444l8.744,2.587a76.381,76.381,0,0,0-4.52-10.51l-7.242-.736a.231.231,0,0,1,.047-.46l6.932.7A45.524,45.524,0,0,0,111.776,28.108Z"
                                  transform="translate(-79.494 -17.548)" fill="#c9e3c8"/>
                            <path id="Path-132-Copy"
                                  d="M181.7,203.408a.347.347,0,1,1-.692.039q-3.122-55.247-8.531-72.529a.347.347,0,1,1,.662-.207Q178.579,148.089,181.7,203.408Z"
                                  transform="translate(-128.218 -97.096)" fill="#1d8450"/>
                            <path id="Path-133-2" data-name="Path-133"
                                  d="M14.794,3.714c-6.958,5.933-1.5,9.554-5.041,12.665s-3.2,6.9-2.871,13.182S-1.824,40.706.333,42.523c1.155.972,9.031-.694,12.134-.463,4.441.331,7.755,1.1,11.451-2.268s4.366-5.542,8.052-8.447,5.007,1.266,9.587-6.325-.981-21.242-11.663-15.9C28.013-1.482,21.751-2.219,14.794,3.714Z"
                                  transform="translate(90.318 66.293) rotate(-178)" fill="#53a25b"/>
                            <path id="Path"
                                  d="M4.89,23.493.209,23.94a.231.231,0,0,0,.044.461L4.417,24A31.021,31.021,0,0,1,.165,27.774a.231.231,0,0,0,.272.374,31.491,31.491,0,0,0,4.31-3.821L5.156,27.3a.231.231,0,1,0,.458-.063L5.153,23.89a45.75,45.75,0,0,0,6.31-9.036l.96,5.742a.231.231,0,1,0,.456-.077l-1.059-6.332A76.729,76.729,0,0,0,16.283,3.824l3.979,7.793a.231.231,0,1,0,.412-.211l-4.18-8.187q.491-1.426.957-2.919A.231.231,0,1,0,17.01.162q-.451,1.446-.926,2.829L7.022,5.672a.231.231,0,0,0,.131.444L15.9,3.529a76.343,76.343,0,0,1-4.52,10.51l-7.242.736a.231.231,0,0,0,.047.461l6.931-.7A45.534,45.534,0,0,1,4.89,23.493Z"
                                  transform="translate(77.962 57.078) rotate(-178)" fill="#c9e3c8"/>
                            <path id="Path-132-Copy-2" data-name="Path-132-Copy"
                                  d="M9.38.382A.347.347,0,1,0,8.69.312Q5.427,33.017.016,50.3a.347.347,0,1,0,.662.208Q6.112,33.147,9.38.382Z"
                                  transform="translate(59.373 106.532) rotate(-178)" fill="#1d8450"/>
                            <path id="Path-133-3" data-name="Path-133"
                                  d="M29.159,216.359c-5.226-1.394-3.781-3.621-7.87-8.52-2.361-2.829-5.172-2.314-7.391-4.745s-2.157-8.161-4.375-9.886q-5.249-4.083-9.231-3.5,4.856-8.879,9.231-9.725c4.375-.846,7.237,2.175,12.856,2.687s4.509-2.714,10.42-.563,1.72,6.594,9.949,7.976,9.146,14.1-2.793,14.4C43.268,214.734,34.386,217.753,29.159,216.359Z"
                                  transform="translate(-0.292 -133.776)" fill="#53a25b"/>
                            <path id="Path-2" data-name="Path"
                                  d="M51.567,207.812l-4.342,1.8a.231.231,0,0,1-.177-.427l3.864-1.605a30.974,30.974,0,0,0-5.524-1.332.231.231,0,0,1,.065-.458,31.459,31.459,0,0,1,5.6,1.348l-1.033-2.816a.231.231,0,1,1,.434-.159l1.163,3.17a45.679,45.679,0,0,1,9.81,5.013l-1.845-5.521a.231.231,0,1,1,.438-.147l2.035,6.088a76.618,76.618,0,0,1,8.8,7.054l-.142-8.75a.231.231,0,1,1,.462-.008l.15,9.193q1.1,1.028,2.214,2.128a.231.231,0,1,1-.325.329q-1.077-1.065-2.144-2.062l-9.258,1.891a.231.231,0,1,1-.093-.453l8.934-1.825a76.226,76.226,0,0,0-8.921-7.156l-6.739,2.753a.231.231,0,0,1-.175-.428l6.45-2.635a45.481,45.481,0,0,0-9.7-4.988Z"
                                  transform="translate(-33.651 -151.743)" fill="#c9e3c8"/>
                            <path id="Path-3" data-name="Path"
                                  d="M169.621,309.481a.347.347,0,1,1-.688.088q-2.782-21.816-15.608-34.47a.347.347,0,0,1,.487-.494Q166.812,287.439,169.621,309.481Z"
                                  transform="translate(-113.922 -204.118)" fill="#1d8450"/>
                            <rect id="Rectangle" width="37.447" height="10.874"
                                  transform="translate(34.598 103.496)" fill="#e9a080"/>
                            <path id="Rectangle-Copy-12" d="M143.92,445.662h32.823l-4.623,27.07H148.543Z"
                                  transform="translate(-107.011 -331.292)" fill="#ffb899"/>
                        </g>
                        <circle id="Ellipse_375" data-name="Ellipse 375" cx="2.479" cy="2.479" r="2.479"
                                transform="translate(907.667 3366.649)" fill="#94daec"/>
                        <g id="Ellipse_376" data-name="Ellipse 376" transform="translate(665.237 3320.543)"
                           fill="none" stroke="#ed0f68" stroke-width="1.5" stroke-dasharray="5">
                            <circle cx="5.206" cy="5.206" r="5.206" stroke="none"/>
                            <circle cx="5.206" cy="5.206" r="4.456" fill="none"/>
                        </g>
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="2.52" cy="2.52" r="2.52"
                                transform="translate(644.918 3603.46)" fill="#ed0f68"/>
                        <g id="Ellipse_378" data-name="Ellipse 378" transform="translate(785.708 3443.988)"
                           fill="none" stroke="#fb5d9c" stroke-width="1" stroke-dasharray="4">
                            <circle cx="3.718" cy="3.718" r="3.718" stroke="none"/>
                            <circle cx="3.718" cy="3.718" r="3.218" fill="none"/>
                        </g>
                        <g id="Group_9345" data-name="Group 9345" transform="translate(828.007 3531.324)">
                            <g id="Group_8440" data-name="Group 8440" transform="translate(0 0)">
                                <path id="Path_73274" data-name="Path 73274"
                                      d="M2167.52,1471.556l5.97,13.037v0l11.5,25.119a1.2,1.2,0,0,0,1.085.7h.095a1.276,1.276,0,0,0,1.229-1.618l-9.131-32.676-1.332-4.767Z"
                                      transform="translate(-2167.52 -1471.35)" fill="#426bc5"/>
                            </g>
                            <path id="Path_73275" data-name="Path 73275"
                                  d="M2173.49,1484.594c-.569-5.929,4.78-8.477,4.78-8.477l-1.332-4.767-9.417.206Z"
                                  transform="translate(-2167.52 -1471.35)" fill="#3a49cd"/>
                        </g>
                        <path id="Path_74550" data-name="Path 74550"
                              d="M1685.1,1374.946v21.777a2.474,2.474,0,0,1-2.466,2.466H1410.215a2.474,2.474,0,0,1-2.466-2.466v-21.777a2.474,2.474,0,0,1,2.466-2.466H1682.64A2.47,2.47,0,0,1,1685.1,1374.946Z"
                              transform="translate(-775.502 2133.369)" fill="#426bc5"/>
                        <path id="Path_74551" data-name="Path 74551"
                              d="M1425.306,1471.35l-1.332,4.767-9.131,32.676a1.275,1.275,0,0,0,1.229,1.618h.1a1.2,1.2,0,0,0,1.085-.7l11.5-25.119v0l5.97-13.037Z"
                              transform="translate(-780.732 2059.974)" fill="#3a49cd"/>
                        <path id="Path_74552" data-name="Path 74552"
                              d="M1613.886,1471.35l-1.332,4.767-9.131,32.676a1.275,1.275,0,0,0,1.229,1.618h.1a1.2,1.2,0,0,0,1.085-.7l11.5-25.119v0l5.97-13.037Z"
                              transform="translate(-920.723 2059.974)" fill="#3a49cd"/>
                        <path id="Path_74553" data-name="Path 74553"
                              d="M1497.74,1115.72H1396.713a3.324,3.324,0,0,0-3.313,3.313v86.235a3.324,3.324,0,0,0,3.313,3.313H1497.74a3.324,3.324,0,0,0,3.313-3.313v-86.235A3.324,3.324,0,0,0,1497.74,1115.72Z"
                              transform="translate(-764.849 2323.974)" fill="#3a49cd"/>
                        <path id="Path_74554" data-name="Path 74554"
                              d="M1515.407,1118.186v74.578a2.474,2.474,0,0,1-2.466,2.466H1410.216a2.474,2.474,0,0,1-2.466-2.466v-74.578a2.474,2.474,0,0,1,2.466-2.466h102.725A2.474,2.474,0,0,1,1515.407,1118.186Z"
                              transform="translate(-775.502 2323.974)" fill="#6d89cf"/>
                        <path id="Path_74555" data-name="Path 74555"
                              d="M1515.407,1164.45v28.314a2.474,2.474,0,0,1-2.466,2.466H1410.216a2.474,2.474,0,0,1-2.466-2.466v-74.578a2.474,2.474,0,0,1,2.466-2.466h11.4c7.173,9.131,33.279,38.185,79.309,44.394A41.087,41.087,0,0,1,1515.407,1164.45Z"
                              transform="translate(-775.502 2323.974)" fill="#426bc5"/>
                        <path id="Path_74556" data-name="Path 74556"
                              d="M1427.324,1321.239s-18.9-1.507-19.574-1.971V1301.92c3.986-3.77,11.811-8.059,11.811-8.059Z"
                              transform="translate(-775.502 2191.732)" fill="#4250cf"/>
                        <g id="Group_9347" data-name="Group 9347" transform="translate(657.519 3460.445)">
                            <path id="Path_73285" data-name="Path 73285"
                                  d="M1505.83,1197.7a1.438,1.438,0,1,1,1.438,1.438A1.438,1.438,0,0,1,1505.83,1197.7Z"
                                  transform="translate(-1505.83 -1196.26)" fill="#4250cf"/>
                            <path id="Path_73286" data-name="Path 73286"
                                  d="M1729.09,1197.7a1.438,1.438,0,1,1,1.438,1.438A1.438,1.438,0,0,1,1729.09,1197.7Z"
                                  transform="translate(-1671.566 -1196.26)" fill="#4250cf"/>
                            <path id="Path_73287" data-name="Path 73287"
                                  d="M1505.83,1302.948a1.438,1.438,0,1,1,1.438,1.438A1.438,1.438,0,0,1,1505.83,1302.948Z"
                                  transform="translate(-1505.83 -1274.392)" fill="#4250cf"/>
                            <path id="Path_73288" data-name="Path 73288"
                                  d="M1729.09,1302.948a1.438,1.438,0,1,1,1.438,1.438A1.438,1.438,0,0,1,1729.09,1302.948Z"
                                  transform="translate(-1671.566 -1274.392)" fill="#4250cf"/>
                        </g>
                        <path id="Path_74557" data-name="Path 74557"
                              d="M1586.46,1374.946v21.777a2.491,2.491,0,0,1-2.5,2.466H1399.972a2.492,2.492,0,0,1-2.5-2.466v-21.777a2.492,2.492,0,0,1,2.5-2.466h183.989A2.49,2.49,0,0,1,1586.46,1374.946Z"
                              transform="translate(-767.87 2133.369)" fill="#3a49cd"/>
                        <g id="Group_9348" data-name="Group 9348" transform="translate(688.746 3480.785)">
                            <path id="Path_73290" data-name="Path 73290"
                                  d="M1627.851,1295.93s-1.85,15.2,0,20.27h6.918S1632.85,1298.669,1627.851,1295.93Z"
                                  transform="translate(-1627.029 -1290.589)" fill="#010117"/>
                            <path id="Path_73291" data-name="Path 73291"
                                  d="M1630.22,1280.541s18.9-4.725,32.462-5.341c0,0,12.532,10.479,14.176,25.065l-41.243.549S1635.355,1289.583,1630.22,1280.541Z"
                                  transform="translate(-1629.398 -1275.2)" fill="#6d89cf"/>
                        </g>
                        <g id="Group_9349" data-name="Group 9349" transform="translate(643.314 3480.251)">
                            <path id="Path_73292" data-name="Path 73292"
                                  d="M1451.444,1293.86s-3.674,12.929,5.3,20.27l21.434-.082S1456.442,1296.6,1451.444,1293.86Z"
                                  transform="translate(-1450.699 -1288.519)" fill="#6d89cf"/>
                            <path id="Path_73293" data-name="Path 73293"
                                  d="M1453.59,1278.471s18.9-4.725,32.462-5.341c0,0,12.965,11.025,14.609,25.614h-23.076S1460.508,1295.031,1453.59,1278.471Z"
                                  transform="translate(-1452.845 -1273.13)" fill="#9cb9f5"/>
                        </g>
                        <path id="Path_74558" data-name="Path 74558"
                              d="M1532.656,1251.534c-5.5,1.211-8.33-1.232-10.553-3.746-.183-.209-.361-.412-.536-.619-2.115-2.479-12.154-10.94-17.453-4.681a9.662,9.662,0,0,0-1.371,2.193,6.716,6.716,0,0,0-2.174,1.224,2.037,2.037,0,0,1,.966-.325,8.047,8.047,0,0,0-2.561,3.635,6.773,6.773,0,0,0,.673,3.917,32.728,32.728,0,0,0,3.955,6.859c3.677,5.011,8.856,9.7,13.14,9.6a18.832,18.832,0,0,1-5.532-3.695c.366.288,3.777,2.953,6.666,3.556,8.137-1.536,22.078,7.758,23.887,10.01,0,0,3.888-8.766,4.161-12.264C1546.43,1260.567,1544.366,1248.958,1532.656,1251.534Z"
                              transform="translate(-843.149 2231.547)" fill="#0a0909"/>
                        <path id="Path_74559" data-name="Path 74559"
                              d="M1512.34,1362.33a19.133,19.133,0,0,0-4.2-.822c-1.778-.052-5.905,2.8-5.65,2.839s11.865,0,11.865,0Z"
                              transform="translate(-845.821 2141.515)" fill="#feaaaf"/>
                        <path id="Path_74560" data-name="Path 74560"
                              d="M1555.576,1315.563c-.016.034,1.791,3.862,4.741,1.512,1.938-1.543,4.494-7.1,2.868-8.536-.773-.683-3.821-1.7-7.629-6.3l-.294.361-4.932,6.094s1.685,1.747,3.149,3.494C1554.71,1313.657,1555.782,1315.125,1555.576,1315.563Z"
                              transform="translate(-881.345 2185.512)" fill="#feaaaf"/>
                        <path id="Path_74561" data-name="Path 74561"
                              d="M1519.063,1268.921a22.612,22.612,0,0,0-2.579-6.7c-1.232-1.835-7.629-6.867-12.651-.4a11.006,11.006,0,0,0-2.087,4.411c-.441,2.077-.487,5.684,6.442,8.776l2.18,1.2Z"
                              transform="translate(-845.157 2217.89)" fill="#0a0909"/>
                        <path id="Path_74562" data-name="Path 74562"
                              d="M1518.807,1287.18s7.441-6.949,3.043-11.517-6.4-8.541-11.339-4.3-4.169,6.861-3.071,8.745S1516.756,1288.87,1518.807,1287.18Z"
                              transform="translate(-848.9 2209.772)" fill="#feaaaf"/>
                        <path id="Path_74563" data-name="Path 74563"
                              d="M1508.129,1272.922s7.173,3.417,11.015,1.239,4.38-4.292,4.38-4.292a12.116,12.116,0,0,1-7.82-2.4S1507.183,1268.915,1508.129,1272.922Z"
                              transform="translate(-849.964 2211.323)" fill="#0a0909"/>
                        <path id="Path_74564" data-name="Path 74564"
                              d="M1503.85,1288.141a8.98,8.98,0,0,0,.412,4.156c.755,1.515,2.9,4.066,2.126,4.656,0,0-5.022-2.18-5.31-5.877C1500.771,1287.154,1503.85,1288.141,1503.85,1288.141Z"
                              transform="translate(-844.767 2196.06)" fill="#0a0909"/>
                        <path id="Path_74566" data-name="Path 74566"
                              d="M1715.537,1284.941s-20.507-14.117-37.692-16.436a33.8,33.8,0,0,0-4.525-.322,151.843,151.843,0,0,0-32.31,4.174c-14.766,3.434-30.249,9.121-40.947,17.515-19.641,15.408-62.329,21.571-62.329,21.571-23.112-21.277-14.483-39.444-13.864-42.712a1.743,1.743,0,0,1,.224-.549c2.144-3.656,17.809-12.308,15.934-21.759-1.667-8.395,5.462-11.386,18.054-13.123,2.347-.322,4.888-.6,7.6-.868,32.745-3.187,58.666,11.628,82.69,10.682a124.969,124.969,0,0,1,19.327.7h.008c.183.021.363.044.544.064l.057.008c37.182,4.5,55.561,24.841,55.561,24.841C1724.473,1276.866,1715.537,1284.941,1715.537,1284.941Z"
                              transform="translate(-860.156 2237.667)" fill="#bed2fa"/>
                        <path id="Path_74567" data-name="Path 74567"
                              d="M2238.552,1302.512c-4.9-4.9-14.7-4.352-18.935-3.826a3.81,3.81,0,0,0-.605-3.324c-.005-.018-.01-.034-.016-.054-1.222-3.713-2.639-3.958-2.639-3.958a6.337,6.337,0,0,0-1.355,2.991,17.459,17.459,0,0,0-1.948.147c-1.144-2.927-2.342-3.138-2.342-3.138a7.421,7.421,0,0,0-1.466,5.13s.363.173.879.363c-.863,3.679,4.959,5.473,7.01,5.122a2.268,2.268,0,0,0,1.237-.727l3.888,11.015H2241.9S2244.865,1308.824,2238.552,1302.512Z"
                              transform="translate(-1370.485 2193.596)" fill="#130536"/>
                        <path id="Path_74568" data-name="Path 74568"
                              d="M1772.232,1243.819c-10.9-.788-48.071,19.579-62.982,6.078-15.2-13.764-46.63-16.6-46.63-16.6,2.347-.322,4.888-.6,7.6-.868,32.745-3.187,58.665,11.628,82.689,10.682A125.29,125.29,0,0,1,1772.232,1243.819Z"
                              transform="translate(-964.703 2237.667)" fill="#dde8fd"/>
                        <path id="Path_74569" data-name="Path 74569"
                              d="M2145.971,1303.041c-16.971,8.134-45.52-23.171-55.561-24.841C2127.592,1282.7,2145.971,1303.041,2145.971,1303.041Z"
                              transform="translate(-1282.271 2203.357)" fill="#dde8fd"/>
                        <path id="Path_74570" data-name="Path 74570"
                              d="M1641,1376.644c-14.766,3.435-30.249,9.121-40.947,17.516-19.641,15.408-62.33,21.571-62.33,21.571-23.112-21.277-14.483-39.444-13.865-42.712a1.755,1.755,0,0,1,.224-.549s8.093,11.3,27.2,12.326C1565.383,1385.556,1609.839,1380.509,1641,1376.644Z"
                              transform="translate(-860.149 2133.377)" fill="#6d89cf"/>
                        <path id="Path_74571" data-name="Path 74571"
                              d="M2114.424,1372.48v.322a33.758,33.758,0,0,0-4.524-.322Z"
                              transform="translate(-1296.739 2133.369)" fill="#100c57"/>
                        <path id="Path_74573" data-name="Path 74573"
                              d="M1537.182,1247.779a109.968,109.968,0,0,1-10.422-4.916c-2.875-1.78-7.57-.384-7.57-.384,5.3-6.258,15.341,2.205,17.454,4.682C1536.821,1247.367,1537,1247.573,1537.182,1247.779Z"
                              transform="translate(-858.229 2231.552)" fill="#0a0909"/>
                        <path id="Path_74574" data-name="Path 74574"
                              d="M2265.5,1442.031c-.217-.167.639-4.285,2.1-4.54s2.968,4.54,2.968,4.54A4.331,4.331,0,0,1,2265.5,1442.031Z"
                              transform="translate(-1412.226 2085.116)" fill="#6d89cf"/>
                        <path id="Path_74575" data-name="Path 74575"
                              d="M1573.935,1540.37s-2.9,1.049-3.375,3.584a4.476,4.476,0,0,0,4.383,2.6S1575.736,1544.6,1573.935,1540.37Z"
                              transform="translate(-896.363 2008.737)" fill="#6d89cf"/>
                        <g id="Group_9346" data-name="Group 9346" transform="translate(889.675 3531.324)">
                            <g id="Group_8442" data-name="Group 8442" transform="translate(0 0)">
                                <path id="Path_73276" data-name="Path 73276"
                                      d="M2406.86,1471.556l5.97,13.037v0l11.5,25.119a1.2,1.2,0,0,0,1.085.7h.1a1.276,1.276,0,0,0,1.229-1.618l-9.131-32.676-1.332-4.767Z"
                                      transform="translate(-2406.86 -1471.35)" fill="#426bc5"/>
                            </g>
                            <path id="Path_73277" data-name="Path 73277"
                                  d="M2412.83,1484.594c-.569-5.929,4.78-8.477,4.78-8.477l-1.332-4.767-9.417.206Z"
                                  transform="translate(-2406.86 -1471.35)" fill="#3a49cd"/>
                        </g>
                        <g id="Group_9485" data-name="Group 9485" transform="translate(785.938 3335.526)">
                            <ellipse id="Ellipse_394" data-name="Ellipse 394" cx="20.781" cy="20.781" rx="20.781"
                                     ry="20.781" transform="translate(16.259 54.509) rotate(-113.029)"
                                     fill="#c6e7ef"/>
                            <ellipse id="Ellipse_395" data-name="Ellipse 395" cx="20.781" cy="20.781" rx="20.781"
                                     ry="20.781" transform="matrix(-0.233, -0.973, 0.973, -0.233, 14.115, 50.67)"
                                     fill="#ff8300"/>
                            <ellipse id="Ellipse_396" data-name="Ellipse 396" cx="17.523" cy="17.523" rx="17.523"
                                     ry="17.523" transform="translate(11.964 8.099)" fill="#fff"/>
                            <path id="Path_74485" data-name="Path 74485"
                                  d="M131.9,91.44l1.506,14.434-9.654,7.179,5.793-8.384Z"
                                  transform="translate(-102.291 -78.38)" fill="#2d1b5a"/>
                            <path id="Path_74486" data-name="Path 74486"
                                  d="M123.035,101.875a17.5,17.5,0,0,0-28.3-13.794,17.505,17.505,0,1,1,23.694,25.605A17.4,17.4,0,0,0,123.035,101.875Z"
                                  transform="translate(-78.161 -74.276)" fill="#ede9fd"/>
                        </g>
                        <g id="Plant-2" data-name="Plant" transform="translate(675.878 3365.161)">
                            <rect id="Rectangle-2" data-name="Rectangle" width="76.844" height="4.462"
                                  transform="translate(0 40.157)" fill="#ffa691"/>
                            <g id="Group-6" transform="translate(55.526 12.194)">
                                <path id="Path-4" data-name="Path"
                                      d="M22.258,7.27h1.4V6.214a2.458,2.458,0,1,1,4.917,0V8.208a4.452,4.452,0,0,1-4.449,4.455H22.258v5.628H15V3.635a3.629,3.629,0,1,1,7.258,0Z"
                                      transform="translate(-10.766)" fill="#53a25b"/>
                                <path id="Combined-Shape-2" data-name="Combined-Shape"
                                      d="M20.233.579V18.291H20V.746Q20.113.658,20.233.579ZM21.862,0V18.291H21.63V.03q.115-.019.233-.03Zm1.63.219V18.291h-.233V.139Q23.377.175,23.492.219Zm1.63,1.251V18.291h-.233V1.182A3.652,3.652,0,0,1,25.121,1.47Zm1.63,5.79v5.4h-.233v-5.4ZM28.381,4.1v8.5q-.115.018-.233.031V4.268A2.45,2.45,0,0,1,28.381,4.1Zm1.63-.34v8.227q-.114.071-.233.136V3.741Q29.9,3.747,30.01,3.764Zm1.63.992v5.436a4.467,4.467,0,0,1-.233.412V4.478A2.469,2.469,0,0,1,31.64,4.756Z"
                                      transform="translate(-14.38 0)" fill="#c9e3c8"/>
                                <rect id="Rectangle-3" data-name="Rectangle" width="15.369" height="3.47"
                                      transform="translate(0 17.056)" fill="#e9a080"/>
                                <path id="Rectangle-Copy-12-2" data-name="Rectangle-Copy-12"
                                      d="M3,75H17.134l-1.991,7.206H4.991Z" transform="translate(-2.091 -54.215)"
                                      fill="#ffb899"/>
                            </g>
                            <path id="Path-Copy-3"
                                  d="M10.756.256,10.443,0q-.046,1.3-.215,2.688-10.546,3.79-8.637,7.4,1.882,3.554,8.567-6.854A45.726,45.726,0,0,1,8.97,8.956Q-1.1,13.131.134,15.454q1.217,2.3,8.732-6.183c0,.027,0,.055-.005.082q-.781,2.805-1.943,5.89Q-.688,18.405.261,20.2,1.19,21.95,6.756,15.67q-.95,2.482-2.145,5.142Q-1.177,28.468.475,29.545q1.672,1.09,4.508-8.772.978-2.189,1.792-4.259-2.546,9.37-.6,9.749,2.01.392.848-10.381Q8.035,13.242,8.777,10.8q-.631,11.727,1.3,11.727,2.005,0-1.013-12.69a48.094,48.094,0,0,0,1.359-6.145Q12.629,15.974,15.334,15,18.1,14,10.51,3.039q.03-.226.056-.449l.018-.029-.016.006Q10.707,1.379,10.756.256Z"
                                  transform="translate(49.783 29.654) rotate(180)" fill="#118648"/>
                            <path id="Path-5" data-name="Path"
                                  d="M118.6,52.606l-.221.179q-.032-.91-.152-1.884-7.455-2.657-6.105-5.184,1.33-2.491,6.056,4.8a31.826,31.826,0,0,0-.84-4.014q-7.116-2.927-6.246-4.555.86-1.61,6.173,4.334c0-.019,0-.038,0-.058q-.552-1.966-1.374-4.129-5.376-2.216-4.705-3.471.656-1.229,4.591,3.172-.672-1.74-1.516-3.6-4.091-5.366-2.924-6.121t3.187,6.149q.692,1.535,1.267,2.985-1.8-6.568-.426-6.834,1.42-.275.6,7.276.717,1.851,1.242,3.563-.446-8.22.917-8.22,1.418,0-.716,8.895a33.46,33.46,0,0,1,.96,4.307q1.562-8.609,3.474-7.926,1.957.7-3.41,8.383.021.158.039.315l.013.021-.011,0Q118.568,51.819,118.6,52.606Z"
                                  transform="translate(-80.339 -23.132)" fill="#15a257"/>
                            <rect id="Rectangle-4" data-name="Rectangle" width="15.369" height="3.47"
                                  transform="translate(31.233 29.25)" fill="#e9a080"/>
                            <path id="Rectangle-Copy-12-3" data-name="Rectangle-Copy-12"
                                  d="M116,119h14.134l-1.991,7.206H117.991Z" transform="translate(-83.953 -86.021)"
                                  fill="#ffb899"/>
                            <path id="Path-16-Copy-2"
                                  d="M48,82.578q3.046-7.432,7.641-9.184c4.595-1.753,5.205,2.866,1.15,3.65-3.235.626-5.51,1.342-8.6,5.282Z"
                                  transform="translate(-34.799 -52.769)" fill="#15a257"/>
                            <path id="Path-16-Copy-3"
                                  d="M18.035,93.3l-.247-.2c-3.893-3.146-6.27-3.332-9.563-3.214-4.127.148-4.571-4.489.3-3.815Q13.4,86.741,18.035,93.3Z"
                                  transform="translate(-3.715 -62.166)" fill="#118648"/>
                            <path id="Path-16-Copy"
                                  d="M45.7,53.415q-.136-.273-.2-.407c-3.229-6.361-.8-13.337,3.212-19,3.174-4.485,8.452-.821,2.8,4.839Q45.861,44.5,45.7,53.415Z"
                                  transform="translate(-31.907 -23.132)" fill="#118648"/>
                            <path id="Path-16"
                                  d="M16.448,72.976q-.136-.273-.2-.407c-3.229-6.361-6.066-7.907-10.181-9.541-5.158-2.048-3.4-8.542,2.268-4.98Q14,61.611,16.448,72.976Z"
                                  transform="translate(-2.27 -41.203)" fill="#15a257"/>
                            <rect id="Rectangle-5" data-name="Rectangle" width="15.369" height="3.47"
                                  transform="translate(4.958 29.25)" fill="#e9a080"/>
                            <path id="Rectangle-Copy-12-4" data-name="Rectangle-Copy-12"
                                  d="M21,119H35.134l-1.991,7.206H22.991Z" transform="translate(-15.281 -86.021)"
                                  fill="#ffb899"/>
                        </g>
                        <g id="Group_7630" data-name="Group 7630" transform="translate(662.497 3570)">
                            <ellipse id="Ellipse_322" data-name="Ellipse 322" cx="73.873" cy="20.2" rx="73.873"
                                     ry="20.2" fill="#fb5d9c"/>
                            <ellipse id="Ellipse_323" data-name="Ellipse 323" cx="62.137" cy="14.814" rx="62.137"
                                     ry="14.814" transform="translate(12.121 4.615)" fill="#c6e7ef"/>
                            <ellipse id="Ellipse_324" data-name="Ellipse 324" cx="44.244" cy="10.545" rx="44.244"
                                     ry="10.545" transform="translate(28.716 6.928)" fill="#2d1b5a"/>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Not getting enough sleep may change your hormonal balance. In women, this may disrupt menstrual
                    cycles and ovulation, and in men, reduce sperm quality and quantity. Insufficient sleep is also
                    linked to other fertility-disrupting lifestyle factors, such as weight gain, excessive caffeine
                    consumption, high-stress levels, and tension with family, friends, or co-workers. Sleep
                    deprivation has also been shown to reduce testosterone levels.
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Learn more about the connection between sleep and fertility, as well as techniques to improve
                    your sleep in Fertilligence App. Talk to our fertility coaches or attend our live group classes
                    to help implement the sleep techniques that will work for you.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Supplements">
                <h2 class="nbe-tab-title-text">
                    Supplements
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="339.789"
                     height="340.122" viewBox="0 0 339.789 340.122">
                    <defs>
                        <linearGradient id="supply-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                        <clipPath id="awdaw-dawdaw-dawd">
                            <path id="Path_79738" data-name="Path 79738"
                                  d="M756.814,438.835s8.853,2.274,21.982,1.364a117.161,117.161,0,0,0,22.829-3.789c.373-3.988-3.206-3.587-2.767-6.77s2.355-2.965,2.382-4.979-2.682-1.764-2.285-5.705-.3-23.163-3.183-32.405-5.216-18.235-5.216-18.235l0-.159a37.623,37.623,0,0,1-13.816,1.974,45.756,45.756,0,0,1-10.046-2.11l-2,3.6-.008.008C751.439,393.674,756.814,438.835,756.814,438.835Z"
                                  transform="translate(-755.736 -368.02)"/>
                        </clipPath>
                    </defs>
                    <g id="Group_14220" data-name="Group 14220" transform="translate(-513.826 -8338.112)">
                        <circle id="Ellipse_375" data-name="Ellipse 375" cx="2.191" cy="2.191" r="2.191"
                                transform="translate(799.195 8496.165)" fill="#94daec"/>
                        <circle id="Ellipse_373" data-name="Ellipse 373" cx="21.579" cy="21.579" r="21.579"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 777.159, 8673.392)" opacity="0.49"
                                fill="url(#supply-weawe)"/>
                        <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="136.001" cy="136.252" rx="136.001"
                                 ry="136.252" transform="translate(513.826 8417.638) rotate(-17)" opacity="0.53"
                                 fill="url(#supply-weawe)"/>
                        <g id="Untitled-1" transform="translate(569.588 8367.31)">
                            <g id="Group_14132" data-name="Group 14132" transform="translate(3.187 1.874)">
                                <g id="Group_14126" data-name="Group 14126" transform="translate(158.885 16.642)">
                                    <path id="Path_79631" data-name="Path 79631"
                                          d="M741.74,84.16l1.178,3.436a.16.16,0,0,1-.3.1s0-.008,0-.012v-.008Z"
                                          transform="translate(-735.257 -84.16)" fill="#9cc1d6"/>
                                    <path id="Path_79632" data-name="Path 79632"
                                          d="M747.295,105.29l.844,3.762a.462.462,0,0,1-.9.2.066.066,0,0,1,0-.027l0-.023-.591-3.774,0-.016a.334.334,0,0,1,.28-.381A.338.338,0,0,1,747.295,105.29Z"
                                          transform="translate(-738.246 -96.919)" fill="#9cc1d6"/>
                                    <path id="Path_79633" data-name="Path 79633"
                                          d="M750.023,121.221a74.654,74.654,0,0,1,.785,7.684.673.673,0,0,1-1.345.07v-.027a73.981,73.981,0,0,0-.459-7.586.514.514,0,0,1,.451-.567A.509.509,0,0,1,750.023,121.221Z"
                                          transform="translate(-739.696 -106.554)" fill="#9cc1d6"/>
                                    <path id="Path_79634" data-name="Path 79634"
                                          d="M750.9,153.652l-.233,3.867a.812.812,0,0,1-1.621-.1v-.012l0-.051.311-3.774,0-.043a.77.77,0,0,1,1.535.109Z"
                                          transform="translate(-739.723 -126.144)" fill="#9cc1d6"/>
                                    <path id="Path_79635" data-name="Path 79635"
                                          d="M747.538,170.034a66.814,66.814,0,0,1-1.415,7.625.886.886,0,0,1-1.722-.416v-.008c.618-2.448,1.1-4.928,1.469-7.423a.842.842,0,0,1,.956-.707A.832.832,0,0,1,747.538,170.034Z"
                                          transform="translate(-736.869 -136.086)" fill="#9cc1d6"/>
                                    <path id="Path_79636" data-name="Path 79636"
                                          d="M740.507,202.024l-1.286,3.653a.9.9,0,1,1-1.691-.595l.012-.039,1.24-3.579.016-.043a.907.907,0,0,1,1.15-.56.918.918,0,0,1,.56,1.162Z"
                                          transform="translate(-732.652 -155.476)" fill="#9cc1d6"/>
                                    <path id="Path_79637" data-name="Path 79637"
                                          d="M732.477,217.556l-1.535,3.517a36.454,36.454,0,0,0-1.279,3.513.844.844,0,0,1-1.621-.474,32.726,32.726,0,0,1,1.286-3.712l1.508-3.521.012-.027a.888.888,0,1,1,1.632.7Z"
                                          transform="translate(-726.864 -164.953)" fill="#9cc1d6"/>
                                    <path id="Path_79638" data-name="Path 79638"
                                          d="M726.792,248.709a32.167,32.167,0,0,0-.26,3.723.724.724,0,0,1-.738.719.733.733,0,0,1-.719-.7,26.546,26.546,0,0,1,.156-3.929.788.788,0,0,1,1.566.175A.023.023,0,0,0,726.792,248.709Z"
                                          transform="translate(-725.058 -184.213)" fill="#9cc1d6"/>
                                    <path id="Path_79639" data-name="Path 79639"
                                          d="M726.956,265.116a28.664,28.664,0,0,0,1.6,7.322.516.516,0,0,1-.964.369,29.841,29.841,0,0,1-1.978-7.551.676.676,0,0,1,1.341-.167C726.952,265.1,726.956,265.108,726.956,265.116Z"
                                          transform="translate(-725.393 -194.41)" fill="#9cc1d6"/>
                                    <path id="Path_79640" data-name="Path 79640"
                                          d="M737.325,296.434l1.97,3.253.016.023a.246.246,0,0,1-.082.338.249.249,0,0,1-.33-.07l-2.227-3.167a.379.379,0,1,1,.622-.435.085.085,0,0,0,.012.019Z"
                                          transform="translate(-732.117 -213.8)" fill="#9cc1d6"/>
                                    <path id="Path_79641" data-name="Path 79641"
                                          d="M746.96,310.31a29.357,29.357,0,0,0,2.394,2.713,26.312,26.312,0,0,1-2.639-2.5.16.16,0,0,1,.233-.218C746.956,310.3,746.956,310.307,746.96,310.31Z"
                                          transform="translate(-738.273 -222.383)" fill="#9cc1d6"/>
                                </g>
                                <g id="Group_14127" data-name="Group 14127" transform="translate(0 95.559)">
                                    <path id="Path_79642" data-name="Path 79642"
                                          d="M316.24,366.527l3.614-.288h.008a.092.092,0,0,1,.012.183h0Z"
                                          transform="translate(-316.24 -335.528)" fill="#9cc1d6"/>
                                    <path id="Path_79643" data-name="Path 79643"
                                          d="M336.9,362.977l3.319-.836.016,0a.256.256,0,0,1,.124.5s-.008,0-.008,0l-3.377.715a.186.186,0,0,1-.225-.148.2.2,0,0,1,.14-.225Z"
                                          transform="translate(-328.773 -333.015)" fill="#9cc1d6"/>
                                    <path id="Path_79644" data-name="Path 79644"
                                          d="M350.957,356.241a55.1,55.1,0,0,0,6.312-2.6.428.428,0,0,1,.373.77s-.012,0-.016.008a55.956,55.956,0,0,1-6.49,2.39.3.3,0,0,1-.179-.567Z"
                                          transform="translate(-337.339 -327.799)" fill="#9cc1d6"/>
                                    <path id="Path_79645" data-name="Path 79645"
                                          d="M377.483,345.408l2.934-1.745.019-.012a.53.53,0,1,1,.544.909s-.008,0-.012.008l-3.012,1.7a.492.492,0,0,1-.494-.851Z"
                                          transform="translate(-353.523 -321.673)" fill="#9cc1d6"/>
                                    <path id="Path_79646" data-name="Path 79646"
                                          d="M389.945,334.163l5.573-3.968.027-.019a.635.635,0,0,1,.738,1.034s-.008.008-.012.008l-5.721,3.879a.557.557,0,0,1-.637-.913Z"
                                          transform="translate(-361.139 -313.409)" fill="#9cc1d6"/>
                                    <path id="Path_79647" data-name="Path 79647"
                                          d="M413.608,319.695l2.732-2.1a.729.729,0,1,1,.89,1.154s-.008,0-.012.008l-.012.012-2.763,2.029,0,0a.691.691,0,0,1-.832-1.1Z"
                                          transform="translate(-375.603 -305.695)" fill="#9cc1d6"/>
                                    <path id="Path_79648" data-name="Path 79648"
                                          d="M425.362,308.261c.956-.684,1.943-1.255,2.919-1.881l2.93-1.838a.787.787,0,1,1,.836,1.333l0,0-.035.019-2.907,1.792c-.964.6-1.955,1.185-2.884,1.807a.755.755,0,0,1-.863-1.24Z"
                                          transform="translate(-382.754 -297.735)" fill="#9cc1d6"/>
                                    <path id="Path_79649" data-name="Path 79649"
                                          d="M450.612,296.465l3.148-1.5a.82.82,0,1,1,.7,1.481l0,0-.051.023-3.066,1.43-.043.019a.806.806,0,0,1-.688-1.457Z"
                                          transform="translate(-398.11 -291.905)" fill="#9cc1d6"/>
                                    <path id="Path_79650" data-name="Path 79650"
                                          d="M464.154,289.968a34.486,34.486,0,0,1,6.793-1.815.854.854,0,1,1,.264,1.687H471.2a32.99,32.99,0,0,0-6.475,1.679.827.827,0,0,1-.575-1.551Z"
                                          transform="translate(-406.339 -287.783)" fill="#9cc1d6"/>
                                    <path id="Path_79651" data-name="Path 79651"
                                          d="M493.111,287.218l3.521.179a.883.883,0,0,1-.093,1.764h-.008l-.089,0-3.335-.2-.093,0a.87.87,0,0,1,.1-1.737Z"
                                          transform="translate(-423.812 -287.217)" fill="#9cc1d6"/>
                                    <path id="Path_79652" data-name="Path 79652"
                                          d="M507.955,288.472a46.161,46.161,0,0,1,6.786,1.683.9.9,0,0,1-.544,1.706,53.613,53.613,0,0,0-6.541-1.628.893.893,0,0,1,.3-1.761Z"
                                          transform="translate(-432.81 -287.977)" fill="#9cc1d6"/>
                                    <path id="Path_79653" data-name="Path 79653"
                                          d="M536.368,296.757l3.2,1.329a.865.865,0,0,1-.657,1.6l-.027-.012-3.156-1.282-.031-.012a.877.877,0,1,1,.661-1.625Z"
                                          transform="translate(-450.073 -293.01)" fill="#9cc1d6"/>
                                    <path id="Path_79654" data-name="Path 79654"
                                          d="M550.029,302.523a59.444,59.444,0,0,0,6.366,2.316.829.829,0,0,1-.458,1.593,59.837,59.837,0,0,1-6.568-2.332.856.856,0,0,1,.657-1.582Z"
                                          transform="translate(-458.441 -296.533)" fill="#9cc1d6"/>
                                    <path id="Path_79655" data-name="Path 79655"
                                          d="M577.966,311.178l3.327.369.093.012a.8.8,0,0,1-.171,1.582l-3.51-.365a.811.811,0,0,1,.167-1.613h.008Z"
                                          transform="translate(-475.644 -301.854)" fill="#9cc1d6"/>
                                    <path id="Path_79656" data-name="Path 79656"
                                          d="M592.583,310.9a40.982,40.982,0,0,0,6.685-.836.758.758,0,0,1,.292,1.488,41.348,41.348,0,0,1-6.93.925.79.79,0,0,1-.062-1.578Z"
                                          transform="translate(-484.71 -301.18)" fill="#9cc1d6"/>
                                    <path id="Path_79657" data-name="Path 79657"
                                          d="M621.669,307.136l3.436-.5a.665.665,0,0,1,.206,1.314l-.043.008-3.346.564-.035.008a.705.705,0,1,1-.233-1.391A.023.023,0,0,1,621.669,307.136Z"
                                          transform="translate(-502.596 -299.086)" fill="#9cc1d6"/>
                                    <path id="Path_79658" data-name="Path 79658"
                                          d="M636.419,305.993l3.482-.062a12.48,12.48,0,0,1,1.745.039l1.749.136a.557.557,0,0,1-.074,1.111l-.051,0-1.679-.089a11.634,11.634,0,0,0-1.687,0l-3.389.136-.062,0a.64.64,0,1,1-.051-1.279A.024.024,0,0,0,636.419,305.993Z"
                                          transform="translate(-511.598 -298.651)" fill="#9cc1d6"/>
                                    <path id="Path_79659" data-name="Path 79659"
                                          d="M666.063,308.766l3.3,1.123a.466.466,0,0,1-.288.886l-.043-.016-3.237-1.018-.047-.016a.505.505,0,1,1,.3-.964S666.063,308.762,666.063,308.766Z"
                                          transform="translate(-529.699 -300.374)" fill="#9cc1d6"/>
                                    <path id="Path_79660" data-name="Path 79660"
                                          d="M680.119,314a47.581,47.581,0,0,1,6.02,3.424.3.3,0,0,1-.323.505,47.521,47.521,0,0,0-6.051-3.144.434.434,0,0,1-.229-.567.429.429,0,0,1,.567-.225A.029.029,0,0,0,680.119,314Z"
                                          transform="translate(-538.322 -303.564)" fill="#9cc1d6"/>
                                    <path id="Path_79661" data-name="Path 79661"
                                          d="M705.616,329.753l2.65,2.207a.149.149,0,0,1-.187.233l-.008,0-2.717-2.095-.008-.008a.213.213,0,0,1,.261-.338A.014.014,0,0,1,705.616,329.753Z"
                                          transform="translate(-554.072 -313.192)" fill="#9cc1d6"/>
                                    <path id="Path_79662" data-name="Path 79662"
                                          d="M717.063,339.455c.867.843,1.687,1.737,2.53,2.6-.89-.824-1.749-1.667-2.655-2.464a.094.094,0,1,1,.12-.144A.012.012,0,0,1,717.063,339.455Z"
                                          transform="translate(-561.19 -319.136)" fill="#9cc1d6"/>
                                </g>
                                <g id="Group_14128" data-name="Group 14128" transform="translate(140.65 18.056)">
                                    <path id="Path_79663" data-name="Path 79663"
                                          d="M745.84,326.9l-2.157-2.923a.153.153,0,1,1,.245-.183s0,.008.008.012Z"
                                          transform="translate(-718.192 -232.039)" fill="#9cc1d6"/>
                                    <path id="Path_79664" data-name="Path 79664"
                                          d="M733.957,309.551l-1.908-2.775a.4.4,0,1,1,.664-.455c0,.008.012.019.016.027l1.722,2.888a.3.3,0,0,1-.1.408A.306.306,0,0,1,733.957,309.551Z"
                                          transform="translate(-711.054 -221.286)" fill="#9cc1d6"/>
                                    <path id="Path_79665" data-name="Path 79665"
                                          d="M723.109,292.571l-3.618-5.682a.6.6,0,0,1,1.01-.645c0,.008.008.012.012.02l.008.012,3.385,5.8,0,.008a.469.469,0,0,1-.8.49Z"
                                          transform="translate(-703.362 -208.95)" fill="#9cc1d6"/>
                                    <path id="Path_79666" data-name="Path 79666"
                                          d="M710.7,272.147l-1.729-2.9a.751.751,0,1,1,1.29-.77l.012.023,0,.008,1.605,2.946,0,.008a.683.683,0,0,1-1.185.68Z"
                                          transform="translate(-696.924 -198.036)" fill="#9cc1d6"/>
                                    <path id="Path_79667" data-name="Path 79667"
                                          d="M701.023,254.71l-3.226-5.942a.849.849,0,1,1,1.492-.808s0,.008.008.012l.019.039,3.074,5.946.012.027a.78.78,0,0,1-1.38.727Z"
                                          transform="translate(-690.094 -185.442)" fill="#9cc1d6"/>
                                    <path id="Path_79668" data-name="Path 79668"
                                          d="M690.715,233.368l-1.325-3.136a.887.887,0,1,1,1.636-.688l0,0,.015.039,1.271,3.074.016.035a.875.875,0,1,1-1.617.672Z"
                                          transform="translate(-684.974 -174.123)" fill="#9cc1d6"/>
                                    <path id="Path_79669" data-name="Path 79669"
                                          d="M684.461,214.663a50.185,50.185,0,0,1-1.881-6.572.9.9,0,0,1,1.753-.377,57.929,57.929,0,0,0,1.819,6.354.9.9,0,0,1-1.691.595Z"
                                          transform="translate(-680.842 -160.68)" fill="#9cc1d6"/>
                                    <path id="Path_79670" data-name="Path 79670"
                                          d="M680.125,191.385,679.783,188a.869.869,0,0,1,1.729-.179l0,.043.354,3.3,0,.047a.882.882,0,0,1-1.753.19Z"
                                          transform="translate(-679.142 -148.47)" fill="#9cc1d6"/>
                                    <path id="Path_79671" data-name="Path 79671"
                                          d="M679.319,171.779l-.089-6.766a.783.783,0,0,1,1.566-.039v.035l.221,6.677v.051a.852.852,0,1,1-1.7.054S679.319,171.783,679.319,171.779Z"
                                          transform="translate(-678.806 -134.52)" fill="#9cc1d6"/>
                                    <path id="Path_79672" data-name="Path 79672"
                                          d="M679.49,148.421l.093-3.362a.645.645,0,0,1,1.29.008l.039,3.366a.711.711,0,0,1-1.423.016Z"
                                          transform="translate(-678.965 -122.421)" fill="#9cc1d6"/>
                                    <path id="Path_79673" data-name="Path 79673"
                                          d="M679.86,128.968l.012-6.716v-.016a.468.468,0,0,1,.937-.016l.253,6.743a.6.6,0,1,1-1.2.043v-.039Z"
                                          transform="translate(-679.191 -108.568)" fill="#9cc1d6"/>
                                    <path id="Path_79674" data-name="Path 79674"
                                          d="M679.437,105.845l-.148-3.358v0a.223.223,0,0,1,.214-.233.226.226,0,0,1,.233.2l.365,3.354a.334.334,0,1,1-.665.074v-.035Z"
                                          transform="translate(-678.843 -96.634)" fill="#9cc1d6"/>
                                    <path id="Path_79675" data-name="Path 79675"
                                          d="M678.435,91.418l-.3-3.618.6,3.583a.152.152,0,1,1-.3.051v-.012Z"
                                          transform="translate(-678.14 -87.8)" fill="#9cc1d6"/>
                                </g>
                                <g id="Group_14129" data-name="Group 14129" transform="translate(90.578)">
                                    <path id="Path_79676" data-name="Path 79676"
                                          d="M732.958,330.14l-1.788-3.156,0-.012a.114.114,0,0,1,.2-.113s0,0,0,.008Z"
                                          transform="translate(-660.476 -215.859)" fill="#9cc1d6"/>
                                    <path id="Path_79677" data-name="Path 79677"
                                          d="M720.59,312.815l-2.285-2.557-.019-.023a.311.311,0,0,1,.462-.416s.008.008.008.012l2.2,2.7a.226.226,0,0,1-.035.323.23.23,0,0,1-.315-.023Z"
                                          transform="translate(-652.562 -205.413)" fill="#9cc1d6"/>
                                    <path id="Path_79678" data-name="Path 79678"
                                          d="M705.36,299.022c-.435-.369-.855-.754-1.3-1.1l-1.38-1.022-2.736-2.064-.023-.019a.5.5,0,0,1,.6-.793s.008.008.012.008l2.713,2.176,1.345,1.1c.439.377.851.793,1.275,1.189a.364.364,0,0,1-.482.544Z"
                                          transform="translate(-641.261 -195.755)" fill="#9cc1d6"/>
                                    <path id="Path_79679" data-name="Path 79679"
                                          d="M686.055,284.142l-1.356-1.1c-.451-.373-.913-.727-1.353-1.115a.614.614,0,1,1,.816-.917l.012.012.008.008c.412.389.855.746,1.279,1.119l1.29,1.111.031.027a.561.561,0,0,1,.058.793A.574.574,0,0,1,686.055,284.142Z"
                                          transform="translate(-631.124 -187.766)" fill="#9cc1d6"/>
                                    <path id="Path_79680" data-name="Path 79680"
                                          d="M672.129,269.05a43.627,43.627,0,0,1-4.442-5.426.745.745,0,0,1,1.22-.855.086.086,0,0,1,.012.019,42.55,42.55,0,0,0,4.147,5.375.645.645,0,0,1-.937.886Z"
                                          transform="translate(-621.593 -176.517)" fill="#9cc1d6"/>
                                    <path id="Path_79681" data-name="Path 79681"
                                          d="M658.617,248.677l-1.7-3.035a.813.813,0,1,1,1.419-.8s0,0,0,.008l.019.031,1.625,3,.016.027a.788.788,0,0,1-1.38.762Z"
                                          transform="translate(-615.026 -165.5)" fill="#9cc1d6"/>
                                    <path id="Path_79682" data-name="Path 79682"
                                          d="M649.631,230.355l-2.907-6.323a.873.873,0,1,1,1.586-.731,0,0,0,0,0,0,0l.023.054,2.787,6.257.023.05a.832.832,0,0,1-1.516.688Z"
                                          transform="translate(-608.812 -152.273)" fill="#9cc1d6"/>
                                    <path id="Path_79683" data-name="Path 79683"
                                          d="M640.447,207.912l-1.2-3.253a.893.893,0,1,1,1.675-.618v0l0,.016,1.178,3.226.008.016a.884.884,0,0,1-1.66.61Z"
                                          transform="translate(-604.253 -140.451)" fill="#9cc1d6"/>
                                    <path id="Path_79684" data-name="Path 79684"
                                          d="M633.811,188.758l-2.2-6.564a.9.9,0,0,1,1.706-.571h0l0,.012,2.18,6.533.008.019a.9.9,0,0,1-1.7.571Z"
                                          transform="translate(-599.595 -126.727)" fill="#9cc1d6"/>
                                    <path id="Path_79685" data-name="Path 79685"
                                          d="M626.354,165.792l-1.053-3.284a.879.879,0,1,1,1.671-.544l1.073,3.284a.887.887,0,0,1-1.687.552Z"
                                          transform="translate(-595.737 -114.713)" fill="#9cc1d6"/>
                                    <path id="Path_79686" data-name="Path 79686"
                                          d="M619.976,146.667l-2.208-6.518-.008-.023a.833.833,0,0,1,1.574-.544c.766,2.176,1.555,4.349,2.3,6.537a.874.874,0,1,1-1.656.56h0Z"
                                          transform="translate(-591.126 -101.06)" fill="#9cc1d6"/>
                                    <path id="Path_79687" data-name="Path 79687"
                                          d="M611.7,124.141l-1.267-3.191-.008-.019a.772.772,0,0,1,1.43-.583l1.329,3.206a.8.8,0,1,1-1.477.614s0,0,0-.008Z"
                                          transform="translate(-586.633 -89.349)" fill="#9cc1d6"/>
                                    <path id="Path_79688" data-name="Path 79688"
                                          d="M603.569,105.935l-2.9-6.214-.019-.043a.65.65,0,0,1,1.17-.567l3.117,6.214A.75.75,0,1,1,603.6,106s0-.012-.008-.016Z"
                                          transform="translate(-580.658 -76.441)" fill="#9cc1d6"/>
                                    <path id="Path_79689" data-name="Path 79689"
                                          d="M592.175,85.008l-1.8-2.915-.015-.023a.532.532,0,0,1,.175-.735.538.538,0,0,1,.727.159l1.908,2.9a.584.584,0,1,1-.975.641s0-.008-.008-.012Z"
                                          transform="translate(-574.356 -65.743)" fill="#9cc1d6"/>
                                    <path id="Path_79690" data-name="Path 79690"
                                          d="M580.482,69.115c-1.318-1.866-2.717-3.673-4.213-5.4a.366.366,0,0,1,.54-.494,53.167,53.167,0,0,1,4.485,5.309.5.5,0,0,1-.8.595A.048.048,0,0,0,580.482,69.115Z"
                                          transform="translate(-565.733 -54.649)" fill="#9cc1d6"/>
                                    <path id="Path_79691" data-name="Path 79691"
                                          d="M564.089,52.108l-2.577-2.274-.008-.008a.175.175,0,0,1,.225-.268l2.7,2.169a.257.257,0,1,1-.323.4l-.008-.008Z"
                                          transform="translate(-556.724 -46.341)" fill="#9cc1d6"/>
                                    <path id="Path_79692" data-name="Path 79692"
                                          d="M552.277,43.411,549.3,41.34l3.109,1.885a.116.116,0,1,1-.12.2s0,0-.008,0Z"
                                          transform="translate(-549.3 -41.34)" fill="#9cc1d6"/>
                                </g>
                                <g id="Group_14130" data-name="Group 14130" transform="translate(53.606 37.99)">
                                    <path id="Path_79693" data-name="Path 79693"
                                          d="M454.17,139.09l3.634.074a.115.115,0,0,1,0,.229h-.019Z"
                                          transform="translate(-454.17 -139.09)" fill="#9cc1d6"/>
                                    <path id="Path_79694" data-name="Path 79694"
                                          d="M474.694,140.781l3.331.789a.311.311,0,0,1-.14.606s-.008,0-.012,0l-.027-.008-3.241-.933-.019,0a.232.232,0,0,1-.159-.284A.223.223,0,0,1,474.694,140.781Z"
                                          transform="translate(-466.548 -140.12)" fill="#9cc1d6"/>
                                    <path id="Path_79695" data-name="Path 79695"
                                          d="M488.558,144.569c1.08.381,2.141.808,3.183,1.29s2.029,1.065,3.039,1.605a.5.5,0,0,1-.47.882s-.008,0-.012-.008l-.031-.019c-.968-.56-1.92-1.158-2.919-1.66-.991-.517-2.009-.987-3.047-1.407a.365.365,0,0,1,.257-.684Z"
                                          transform="translate(-474.897 -142.428)" fill="#9cc1d6"/>
                                    <path id="Path_79696" data-name="Path 79696"
                                          d="M513.8,158.273l2.748,2.044a.614.614,0,1,1-.734.983s-.008-.008-.012-.008l-.023-.019-2.643-2.087-.023-.016a.566.566,0,0,1,.688-.9Z"
                                          transform="translate(-490.073 -150.749)" fill="#9cc1d6"/>
                                    <path id="Path_79697" data-name="Path 79697"
                                          d="M525.2,167.13c1.737,1.469,3.49,2.923,5.192,4.423a.747.747,0,1,1-.979,1.127s-.016-.012-.02-.019c-1.656-1.543-3.346-3.035-5.025-4.539l-.015-.016a.646.646,0,0,1,.847-.976Z"
                                          transform="translate(-496.946 -156.139)" fill="#9cc1d6"/>
                                    <path id="Path_79698" data-name="Path 79698"
                                          d="M546.855,186.213l2.507,2.309a.814.814,0,1,1-1.1,1.2l0,0-.008-.008-2.46-2.332,0,0a.791.791,0,0,1-.031-1.115A.781.781,0,0,1,546.855,186.213Z"
                                          transform="translate(-510.027 -167.772)" fill="#9cc1d6"/>
                                    <path id="Path_79699" data-name="Path 79699"
                                          d="M557.433,196.1l4.909,4.726a.874.874,0,0,1-1.213,1.259l0,0-.016-.016-4.827-4.761-.012-.012a.833.833,0,0,1,1.162-1.193Z"
                                          transform="translate(-516.439 -173.803)" fill="#9cc1d6"/>
                                    <path id="Path_79700" data-name="Path 79700"
                                          d="M578.145,216.487l2.378,2.441a.893.893,0,1,1-1.279,1.247l0,0-.008-.008-2.355-2.437-.008-.008a.886.886,0,0,1,1.275-1.232Z"
                                          transform="translate(-529.032 -186.242)" fill="#9cc1d6"/>
                                    <path id="Path_79701" data-name="Path 79701"
                                          d="M588.271,226.95c1.555,1.656,3.125,3.307,4.644,4.99a.9.9,0,0,1-1.325,1.216l-4.621-4.971-.008-.012a.9.9,0,1,1,1.31-1.224Z"
                                          transform="translate(-535.205 -192.628)" fill="#9cc1d6"/>
                                    <path id="Path_79702" data-name="Path 79702"
                                          d="M608.124,248.305l2.363,2.394.027.027a.879.879,0,0,1-1.248,1.24l-2.425-2.429a.888.888,0,0,1,1.255-1.255l0,0Z"
                                          transform="translate(-547.348 -205.686)" fill="#9cc1d6"/>
                                    <path id="Path_79703" data-name="Path 79703"
                                          d="M618.535,258.479a40.3,40.3,0,0,0,5.262,4.057.835.835,0,0,1-.886,1.415,39.377,39.377,0,0,1-5.542-4.17.874.874,0,1,1,1.166-1.3Z"
                                          transform="translate(-553.764 -211.943)" fill="#9cc1d6"/>
                                    <path id="Path_79704" data-name="Path 79704"
                                          d="M642.543,274.629l3.066,1.384.027.012a.773.773,0,0,1-.626,1.415l-3.148-1.364a.8.8,0,1,1,.637-1.469s0,0,.008,0Z"
                                          transform="translate(-568.622 -221.898)" fill="#9cc1d6"/>
                                    <path id="Path_79705" data-name="Path 79705"
                                          d="M655.954,280.507c2.091.882,4.166,1.807,6.246,2.713a.65.65,0,0,1-.5,1.2l-.016-.008c-2.1-.84-4.189-1.7-6.3-2.518a.748.748,0,0,1,.54-1.4s.012,0,.015.008Z"
                                          transform="translate(-576.892 -225.51)" fill="#9cc1d6"/>
                                    <path id="Path_79706" data-name="Path 79706"
                                          d="M682.95,292.431,686,293.982a.535.535,0,0,1-.47.96l-.019-.008-3.055-1.446-.02-.008a.584.584,0,0,1,.5-1.057A.066.066,0,0,0,682.95,292.431Z"
                                          transform="translate(-593.515 -232.797)" fill="#9cc1d6"/>
                                    <path id="Path_79707" data-name="Path 79707"
                                          d="M696.092,299.264a50.24,50.24,0,0,1,5.725,3.758.369.369,0,0,1-.431.6,63.934,63.934,0,0,0-5.779-3.478.5.5,0,1,1,.474-.878A.007.007,0,0,1,696.092,299.264Z"
                                          transform="translate(-601.612 -236.976)" fill="#9cc1d6"/>
                                    <path id="Path_79708" data-name="Path 79708"
                                          d="M720.258,316.5l2.363,2.472a.176.176,0,0,1-.249.249l-.012-.012-2.448-2.328-.019-.016a.258.258,0,1,1,.357-.373A.008.008,0,0,1,720.258,316.5Z"
                                          transform="translate(-616.571 -247.502)" fill="#9cc1d6"/>
                                    <path id="Path_79709" data-name="Path 79709"
                                          d="M730.378,327.469c.342.5.664,1.018.995,1.523l.983,1.523-1.08-1.457c-.361-.482-.711-.976-1.08-1.446l0-.008a.116.116,0,1,1,.183-.144S730.378,327.465,730.378,327.469Z"
                                          transform="translate(-622.902 -254.225)" fill="#9cc1d6"/>
                                </g>
                                <g id="Group_14131" data-name="Group 14131" transform="translate(37.287 72.587)">
                                    <path id="Path_79710" data-name="Path 79710"
                                          d="M412.18,231.813l3.529-.878a.118.118,0,1,1,.058.229h-.016Z"
                                          transform="translate(-412.18 -229.835)" fill="#9cc1d6"/>
                                    <path id="Path_79711" data-name="Path 79711"
                                          d="M434.059,228.441l3.883-.272a.341.341,0,1,1,.05.68h-.043l-3.848.085h-.019a.247.247,0,0,1-.253-.241A.254.254,0,0,1,434.059,228.441Z"
                                          transform="translate(-425.416 -228.146)" fill="#9cc1d6"/>
                                    <path id="Path_79712" data-name="Path 79712"
                                          d="M450.446,228.11a48.2,48.2,0,0,1,7.761.75.537.537,0,0,1-.187,1.057.167.167,0,0,0-.019,0,55.352,55.352,0,0,0-7.59-1,.4.4,0,0,1,.035-.8Z"
                                          transform="translate(-435.324 -228.11)" fill="#9cc1d6"/>
                                    <path id="Path_79713" data-name="Path 79713"
                                          d="M482.873,232.993l3.723,1.228a.669.669,0,1,1-.416,1.271l-.016,0-.054-.019-3.587-1.3-.047-.016a.612.612,0,0,1,.4-1.158Z"
                                          transform="translate(-454.909 -231.077)" fill="#9cc1d6"/>
                                    <path id="Path_79714" data-name="Path 79714"
                                          d="M498.375,238.682a59.157,59.157,0,0,1,6.871,3.739.793.793,0,0,1-.836,1.349l-.008,0a70.279,70.279,0,0,0-6.626-3.8.706.706,0,0,1,.6-1.279Z"
                                          transform="translate(-464.268 -234.535)" fill="#9cc1d6"/>
                                    <path id="Path_79715" data-name="Path 79715"
                                          d="M526.818,255.33l3.249,2.079.012.008a.861.861,0,1,1-.929,1.45s-.008,0-.012-.008l-3.237-2.141a.832.832,0,0,1,.906-1.4Z"
                                          transform="translate(-481.475 -244.666)" fill="#9cc1d6"/>
                                    <path id="Path_79716" data-name="Path 79716"
                                          d="M540.725,264.158a52.149,52.149,0,0,0,6.747,3.5.892.892,0,0,1-.684,1.648l0,0a53.386,53.386,0,0,1-6.964-3.649.873.873,0,0,1,.905-1.492Z"
                                          transform="translate(-489.956 -250.07)" fill="#9cc1d6"/>
                                    <path id="Path_79717" data-name="Path 79717"
                                          d="M570.6,277.273l1.834.323c.6.128,1.24.179,1.866.249l.035,0a.9.9,0,0,1-.2,1.788c-.653-.074-1.306-.12-1.966-.253l-1.974-.35a.9.9,0,1,1,.315-1.776Z"
                                          transform="translate(-508.323 -258.147)" fill="#9cc1d6"/>
                                    <path id="Path_79718" data-name="Path 79718"
                                          d="M586.939,279.279l7.73.3a.873.873,0,0,1-.062,1.745h-.023l-7.742-.26a.892.892,0,0,1,.058-1.784h.039Z"
                                          transform="translate(-518.433 -259.392)" fill="#9cc1d6"/>
                                    <path id="Path_79719" data-name="Path 79719"
                                          d="M620.168,281.307l3.863.754a.814.814,0,0,1-.3,1.6l-.066-.012-3.739-.672-.07-.012a.843.843,0,0,1,.3-1.66Z"
                                          transform="translate(-538.72 -260.624)" fill="#9cc1d6"/>
                                    <path id="Path_79720" data-name="Path 79720"
                                          d="M636.6,284.949a59.24,59.24,0,0,1,7.345,2.689.71.71,0,0,1-.548,1.31,69.848,69.848,0,0,0-7.233-2.468.8.8,0,1,1,.424-1.535A.039.039,0,0,1,636.6,284.949Z"
                                          transform="translate(-548.754 -262.839)" fill="#9cc1d6"/>
                                    <path id="Path_79721" data-name="Path 79721"
                                          d="M667.745,297.536l3.44,1.819a.577.577,0,0,1-.521,1.03l-.016-.008-3.455-1.7-.019-.008a.633.633,0,0,1,.56-1.135S667.737,297.536,667.745,297.536Z"
                                          transform="translate(-567.855 -270.514)" fill="#9cc1d6"/>
                                    <path id="Path_79722" data-name="Path 79722"
                                          d="M682.577,305.432c2.235,1.3,4.485,2.573,6.7,3.894a.4.4,0,0,1-.392.707l-.016-.008c-2.285-1.189-4.535-2.433-6.805-3.646l-.016-.008a.54.54,0,0,1,.509-.952Z"
                                          transform="translate(-576.994 -275.336)" fill="#9cc1d6"/>
                                    <path id="Path_79723" data-name="Path 79723"
                                          d="M711.571,322.729l3.16,2.254a.183.183,0,0,1,.043.26.189.189,0,0,1-.253.051l-.008,0-3.245-2.087-.012-.008a.281.281,0,1,1,.3-.474S711.568,322.725,711.571,322.729Z"
                                          transform="translate(-594.943 -285.924)" fill="#9cc1d6"/>
                                    <path id="Path_79724" data-name="Path 79724"
                                          d="M725.334,332.661l2.74,2.386-2.884-2.2,0,0a.119.119,0,1,1,.144-.19S725.334,332.657,725.334,332.661Z"
                                          transform="translate(-603.51 -292.009)" fill="#9cc1d6"/>
                                </g>
                            </g>
                            <g id="Group_14158" data-name="Group 14158" transform="translate(155.403 69.248)">
                                <g id="Group_14133" data-name="Group 14133" transform="translate(2.534 24.362)">
                                    <path id="Path_79725" data-name="Path 79725"
                                          d="M719.1,344.509a1.827,1.827,0,0,0-1.061-.867,4.707,4.707,0,0,1-2.106-.633c-.777-.532-.793-.35-.917-.206s-.039.871,1.213,1.648l-1.8.346a12.163,12.163,0,0,0,.875,3.408c1.251-.253,3.525-.5,4.069-1.368l4.011,1.384.085-2.522Z"
                                          transform="translate(-714.42 -317.285)" fill="#f9ba9d"/>
                                    <path id="Path_79726" data-name="Path 79726"
                                          d="M732.195,347.769a38.511,38.511,0,0,1-4.78-.839,14.788,14.788,0,0,0,.435,6.638h4.294Z"
                                          transform="translate(-722.245 -319.9)" fill="#ed9d22"/>
                                    <path id="Path_79727" data-name="Path 79727"
                                          d="M758.431,287.241c-.152,11.236-.882,11.9-1.185,15.783,0,0-2.347-.665-1.022,1.5-3.809,1.337-18.449-.7-18.449-.7a27.308,27.308,0,0,0-.591,8.476s24.768,6.218,29.008-2.052,5.223-35.052-.789-32.72A11.421,11.421,0,0,0,758.431,287.241Z"
                                          transform="translate(-728.261 -277.381)" fill="#b5d6ea"/>
                                </g>
                                <g id="Group_14136" data-name="Group 14136" transform="translate(13.902 125.351)">
                                    <g id="Group_14134" data-name="Group 14134" transform="translate(3.622)">
                                        <path id="Path_79728" data-name="Path 79728"
                                              d="M755.03,541.5c.148,7.05,4.477,31.282,3.086,43.567-.579,5.1-5.126,10.385-5.126,10.385l3.02,2.207,6.9-7.983a12.335,12.335,0,0,1,.225-5.507c1.846-5.838,6.988-17.606,4.788-37.839-.47-4.314,1.586-9.09,1.586-9.09Z"
                                              transform="translate(-752.99 -537.236)" fill="#f9ba9d"/>
                                        <path id="Path_79729" data-name="Path 79729"
                                              d="M770.906,566.884c.023-.657.031-1.318.012-1.978a44.179,44.179,0,0,0-1.4-10.482c-1.617-5.841-5.06-10.672-11.208-11.5-.035-.532-.062-1.014-.07-1.43l14.481-4.263s-2.052,4.78-1.586,9.09A81.216,81.216,0,0,1,770.906,566.884Z"
                                              transform="translate(-756.2 -537.23)" fill="#ea7f59"/>
                                    </g>
                                    <g id="Group_14135" data-name="Group 14135" transform="translate(0 51.923)">
                                        <path id="Path_79730" data-name="Path 79730"
                                              d="M774.631,677.529a14.769,14.769,0,0,0-1.908,6.49h-1.166a10.863,10.863,0,0,0-1.057-4.994S773.147,676.884,774.631,677.529Z"
                                              transform="translate(-760.073 -674.852)" fill="#9c2622"/>
                                        <path id="Path_79731" data-name="Path 79731"
                                              d="M743.67,679.159V680h8.088a9.17,9.17,0,0,1,2.958-4.279,8.98,8.98,0,0,1,3.5-2.2l.008,0a4.052,4.052,0,0,0-.991-2.685c-.455.016-3.055,4.116-6.074,5.868-1.185.688-2.744.334-3.793.256A12.029,12.029,0,0,1,743.67,679.159Z"
                                              transform="translate(-743.67 -670.83)" fill="#c0433a"/>
                                    </g>
                                </g>
                                <g id="Group_14139" data-name="Group 14139" transform="translate(42.533 112.164)">
                                    <g id="Group_14137" data-name="Group 14137">
                                        <path id="Path_79732" data-name="Path 79732"
                                              d="M817.34,506.011l16.957-2.7c.19,23.944,5.946,21.5,9.024,32.518,2.534,9.075,1.881,22.079,2.285,28.8a6.287,6.287,0,0,0,1.131,3.257l-4.92,7.446-3.148-1.213c2.417-2.934,3.339-5.938,2.876-8.018-2.308-10.381-14.341-31.585-17.691-40.629C820.255,515.766,817.34,506.011,817.34,506.011Z"
                                              transform="translate(-817.34 -503.306)" fill="#f9ba9d"/>
                                        <path id="Path_79733" data-name="Path 79733"
                                              d="M834.3,503.3c.183,22.883,5.445,21.679,8.6,31.138a22.718,22.718,0,0,0-8.915-8.795,10.1,10.1,0,0,0-3.319-1.831c-2.417-.758-5.1-.668-7.7-.8-3.171-8.822-5.616-17-5.616-17Z"
                                              transform="translate(-817.34 -503.3)" fill="#ea7f59"/>
                                    </g>
                                    <g id="Group_14138" data-name="Group 14138" transform="translate(18.22 63.31)">
                                        <path id="Path_79734" data-name="Path 79734"
                                              d="M891.314,674.568a24.487,24.487,0,0,0-1.8,7.419H888.36V676.6S890.323,674.269,891.314,674.568Z"
                                              transform="translate(-878.978 -671.3)" fill="#9c2622"/>
                                        <path id="Path_79735" data-name="Path 79735"
                                              d="M864.22,676.029l.144.863h8.768a9.558,9.558,0,0,1,3.424-7.419,6.133,6.133,0,0,0-1.741-3.272c-.257.152-.229,1.135-.536,2.06-.389,1.17-2.709,5.666-5.457,5.146a6.166,6.166,0,0,1-1.182-.4A7.338,7.338,0,0,1,864.22,676.029Z"
                                              transform="translate(-864.22 -666.2)" fill="#c0433a"/>
                                    </g>
                                </g>
                                <g id="Group_14142" data-name="Group 14142" transform="translate(18.591 59.588)">
                                    <g id="Group_14141" data-name="Group 14141">
                                        <path id="Path_79736" data-name="Path 79736"
                                              d="M756.814,438.835s8.853,2.274,21.982,1.364a117.161,117.161,0,0,0,22.829-3.789c.373-3.988-3.206-3.587-2.767-6.77s2.355-2.965,2.382-4.979-2.682-1.764-2.285-5.705-.3-23.163-3.183-32.405-5.216-18.235-5.216-18.235l0-.159a37.623,37.623,0,0,1-13.816,1.974,45.756,45.756,0,0,1-10.046-2.11l-2,3.6-.008.008C751.439,393.674,756.814,438.835,756.814,438.835Z"
                                              transform="translate(-755.736 -368.02)" fill="#3a5c9c"/>
                                        <g id="Group_14140" data-name="Group 14140"
                                           clip-path="url(#awdaw-dawdaw-dawd)">
                                            <path id="Path_79737" data-name="Path 79737"
                                                  d="M773.47,438.077l0-.323c0-.257-.33-25.631.1-35.378.435-9.778,3-32.806,5.134-41.049l-2.581-1.349a159.184,159.184,0,0,0-7.066,26.9c-1.306,7.614-1.224,17.244-1.15,26.56.074,8.686.14,16.887-.828,23.544l-.043.28-6.751-.5,0-.28c0-.424-.284-42.432,4.784-59.494,2.635-8.869,5.923-17.924,5.954-18.014l.567.206c-.031.089-3.315,9.129-5.942,17.979-4.823,16.245-4.777,55.335-4.761,59.039l5.631.412c.921-6.564.851-14.636.781-23.175-.078-9.339-.159-19,1.158-26.665a156.873,156.873,0,0,1,7.217-27.337l.124-.315,3.611,1.885-.062.233c-2.068,7.742-4.738,31.321-5.173,41.154-.4,9.133-.144,32.032-.109,35.021l9.86-.7c-.264-2.546-2.029-20-1.854-31.154.268-17.365.634-43.077.634-43.077l0-.3h5.056l4.823,72.331,7.186-1.3c-1.966-5.356-2.316-14.815-2.721-25.732-.159-4.287-.323-8.725-.595-13.179-.968-15.721-5.717-32.44-5.768-32.607l.583-.167c.05.167,4.815,16.949,5.787,32.736.276,4.462.439,8.9.6,13.191.412,11.1.766,20.684,2.81,25.876l.136.342-8.577,1.555L787.2,362.781h-3.89c-.043,2.915-.377,26.509-.63,42.778-.187,11.963,1.865,31.2,1.885,31.395l.035.311Z"
                                                  transform="translate(-758.514 -362.493)" fill="#22365b"/>
                                        </g>
                                    </g>
                                    <path id="Path_79739" data-name="Path 79739"
                                          d="M756.727,482.717c.638,4.6,1.446,9.984,4.823,13.249a5.514,5.514,0,0,0,4.442,1.854c1.209-.148,1.349-.591,2.312-1,2.511-1.073,3.844-2.079,6.075-.214,1.858,1.558,3.366,3.579,5.235,5.111a7.812,7.812,0,0,0,1.617,1.43,11.94,11.94,0,0,0,2.266,1.123c-1.5.163-3.074.307-4.7.42-13.128.909-21.982-1.364-21.982-1.364a202.028,202.028,0,0,1-.874-29.813A88.43,88.43,0,0,0,756.727,482.717Z"
                                          transform="translate(-755.738 -432.512)" fill="#22365b"/>
                                    <path id="Path_79740" data-name="Path 79740"
                                          d="M856.923,476.493a9.606,9.606,0,0,1-1.345-4.508,30.383,30.383,0,0,1,.661-3.739,17.747,17.747,0,0,0-.443-6.106c-.478-2.643.459-4.9.89-7.528a44.809,44.809,0,0,0,.373-6.479c.054-3.222-.408-8.053,1.492-11.244,1.415,9.522,1.737,21.2,1.442,24.17-.393,3.941,2.312,3.7,2.285,5.705s-1.943,1.8-2.382,4.979,3.14,2.783,2.767,6.77c0,0-1.811.536-4.92,1.22A7.955,7.955,0,0,0,856.923,476.493Z"
                                          transform="translate(-816.774 -410.124)" fill="#22365b"/>
                                </g>
                                <g id="Group_14144" data-name="Group 14144" transform="translate(54.064 19.387)">
                                    <path id="Path_79741" data-name="Path 79741"
                                          d="M862.517,289.422c-.836,1.283-.132,3.338-3.086,2.927-3.482-.5-5.6-3.956-5.6-3.956s.229,4.5-1.426,3.533a13.807,13.807,0,0,1-4.364-6.2c-1.971-6.832.824-8.562.773-11.624a13.469,13.469,0,0,0-1.8-5.927c.688.074,6.144.47,9.036-3.591,1.6,1.248,3.762,1.8,5.286,4.839,1.609,3.206-.606,4.524.047,6.918.63,2.274,2.359,2.091,3.7,5.577C866.446,285.493,863.823,287.413,862.517,289.422Z"
                                          transform="translate(-847.01 -264.58)" fill="#0a0909"/>
                                    <g id="Group_14143" data-name="Group 14143" transform="translate(4.069 4.516)">
                                        <path id="Path_79742" data-name="Path 79742"
                                              d="M857.732,276.2a5.831,5.831,0,0,1,1.827,3.968,13.567,13.567,0,0,1-.505,4.415,41.916,41.916,0,0,0-1.034,4.217,8.942,8.942,0,0,0,.21,4.271,7.5,7.5,0,0,1-.7-4.333,31.307,31.307,0,0,1,.9-4.314,14.775,14.775,0,0,0,.637-4.228A6.461,6.461,0,0,0,857.732,276.2Z"
                                              transform="translate(-857.478 -276.2)" fill="#171717"/>
                                        <path id="Path_79743" data-name="Path 79743"
                                              d="M866.07,277.29a8.226,8.226,0,0,1,1.372,5.083c-.012,1.8-.392,3.537-.544,5.266a10.487,10.487,0,0,0,.4,5.072,5.357,5.357,0,0,0,3.537,3.474,4.336,4.336,0,0,1-2.417-1.084,6.685,6.685,0,0,1-1.578-2.2,10.461,10.461,0,0,1-.579-5.328c.214-1.768.579-3.486.692-5.216A9.328,9.328,0,0,0,866.07,277.29Z"
                                              transform="translate(-862.731 -276.866)" fill="#171717"/>
                                        <path id="Path_79744" data-name="Path 79744"
                                              d="M875.55,291.63a4.847,4.847,0,0,1,1.057,2.588,21,21,0,0,1,.1,2.779,8.82,8.82,0,0,0,.307,2.631,3.976,3.976,0,0,0,1.492,2.157,3.393,3.393,0,0,1-1.963-1.982,7.084,7.084,0,0,1-.478-2.806c0-.937.074-1.842.043-2.74A6.554,6.554,0,0,0,875.55,291.63Z"
                                              transform="translate(-868.527 -285.633)" fill="#171717"/>
                                        <path id="Path_79745" data-name="Path 79745"
                                              d="M882.43,303.83a5.287,5.287,0,0,1,1.924,6.953A8.73,8.73,0,0,0,882.43,303.83Z"
                                              transform="translate(-872.733 -293.092)" fill="#171717"/>
                                    </g>
                                </g>
                                <g id="Group_14151" data-name="Group 14151" transform="translate(27.551 22.417)">
                                    <g id="Group_14146" data-name="Group 14146" transform="translate(2.763)">
                                        <path id="XMLID_21_"
                                              d="M785.9,309.948a39.692,39.692,0,0,0,9.281,1.729A37.692,37.692,0,0,0,809,309.7l.571-36.723a23.871,23.871,0,0,0-10.517.008c-1.858,3.105-6,9.72-7.256,15.2S785.9,309.948,785.9,309.948Z"
                                              transform="translate(-785.9 -272.388)" fill="#c0433a"/>
                                        <path id="Path_79746" data-name="Path 79746"
                                              d="M812.02,276.742l.657,3.824c2.794.455,4.127-3.183,5.764-2.915s1.726,3.75,4.038,3.715l5.087-7.687c-.338-.175-.633-.3-.886-.408a3.6,3.6,0,0,0-1.143-.311,23.87,23.87,0,0,0-10.517.008c-.124.031-.241.062-.369.1Z"
                                              transform="translate(-801.869 -272.375)" fill="#9c2622"/>
                                        <g id="Group_14145" data-name="Group 14145"
                                           transform="translate(12.89 4.481)">
                                            <path id="Path_79747" data-name="Path 79747"
                                                  d="M819.329,301.7h-.023a.261.261,0,0,1-.237-.284,89.607,89.607,0,0,1,3.459-17.326.262.262,0,0,1,.5.163,88.986,88.986,0,0,0-3.432,17.209A.268.268,0,0,1,819.329,301.7Z"
                                                  transform="translate(-819.068 -283.905)" fill="#9c2622"/>
                                        </g>
                                    </g>
                                    <g id="Group_14148" data-name="Group 14148" transform="translate(0 0.596)">
                                        <path id="Path_79748" data-name="Path 79748"
                                              d="M778.79,314.092q1.516-1.627,2.767-3.218c6.354-8.076,7.866-15.464,9.114-20.956s2.18-12.907,4.038-16.008a13.706,13.706,0,0,0-4.66,2.048c-7.1,5.033-3.758,16-5.919,24.951a49.055,49.055,0,0,1-3.579,9.631C779.979,311.737,779.389,312.91,778.79,314.092Z"
                                              transform="translate(-778.79 -273.91)" fill="#fff"/>
                                        <g id="Group_14147" data-name="Group 14147"
                                           transform="translate(9.077 0.281)">
                                            <path id="Path_79749" data-name="Path 79749"
                                                  d="M802.64,297.888h-.012a.158.158,0,0,1-.14-.163,51.644,51.644,0,0,0-.33-10.311,1.725,1.725,0,0,1,.595-1.5c.47-.416.972-.909,1.5-1.461a1.313,1.313,0,0,0,.171-1.691c-.159-.214-.327-.416-.478-.6a1.541,1.541,0,0,1-.144-1.706,49.8,49.8,0,0,1,3.6-5.76.153.153,0,0,1,.245.183,48.564,48.564,0,0,0-3.58,5.721,1.248,1.248,0,0,0,.1,1.376c.152.183.323.393.486.61a1.614,1.614,0,0,1-.194,2.083c-.529.56-1.038,1.061-1.516,1.481a1.422,1.422,0,0,0-.5,1.236,51.866,51.866,0,0,1,.334,10.373A.136.136,0,0,1,802.64,297.888Z"
                                                  transform="translate(-802.144 -274.633)" fill="#b5d6ea"/>
                                        </g>
                                    </g>
                                    <g id="Group_14150" data-name="Group 14150" transform="translate(19.914 0.585)">
                                        <path id="Path_79750" data-name="Path 79750"
                                              d="M853.6,348.9s-3.929,7.4-13.8,6.339c0,0-1.776-10.571-5.55-16.327-3.521-5.332-4.306-13.7-4.209-21.636.062-5.115.5-10.062.8-13.886.062-.63.109-1.22.144-1.792.688-9.324-.035-15.806,5.565-27.722,0,0,1.438,0,4.85,2.491a3.589,3.589,0,0,1,1.283,2.635,21.515,21.515,0,0,1-1.042,7.536c-.183.676-.373,1.353-.579,2.033-.109.338-.218.676-.315,1.014-.326,1-.653,2.009-.968,2.95-.109.326-.206.641-.315.944-.206.618-.4,1.209-.579,1.776a34.429,34.429,0,0,0-1.862,13.595c1.621.859.12,1.341.12,1.341a43.794,43.794,0,0,0,1.683,6.059,5.77,5.77,0,0,0,.435,1.053c.859,1.6,2.324,2.651,3.412,4.6,1.558,2.806,1.547,4.124,3.471,5.853C848.832,330.206,854.491,341.792,853.6,348.9Z"
                                              transform="translate(-830.03 -273.88)" fill="#fff"/>
                                        <path id="Path_79751" data-name="Path 79751"
                                              d="M841.653,294.61c-.183.676-.373,1.353-.579,2.033-.109.338-.218.676-.315,1.014-.326,1-.653,2.009-.968,2.95-.109.326-.206.641-.315.944-.206.618-.4,1.209-.579,1.776a34.428,34.428,0,0,0-1.862,13.595c1.621.859.121,1.341.121,1.341a43.79,43.79,0,0,0,1.683,6.059,5.767,5.767,0,0,0,.435,1.053c-2.588.4-7.547.641-9.215-.035.062-5.115.5-10.062.8-13.886,1.488-.921,3.385-1.776,3.774-3.144,1.076-3.75.5-9.879,1.947-13.836,1.209-3.288,2.9-6.121,6.121-7.4A21.633,21.633,0,0,1,841.653,294.61Z"
                                              transform="translate(-830.048 -281.944)" fill="#e1f0fa"/>
                                        <g id="Group_14149" data-name="Group 14149"
                                           transform="translate(1.649 0.581)">
                                            <path id="Path_79752" data-name="Path 79752"
                                                  d="M834.423,298.692a.084.084,0,0,1-.031,0,.151.151,0,0,1-.117-.179,43.14,43.14,0,0,1,3.754-9.444,1.25,1.25,0,0,0,0-1.236c-.233-.393-.505-.882-.8-1.446a1.678,1.678,0,0,1,.474-2.044,11.355,11.355,0,0,1,1.053-.777,1.459,1.459,0,0,0,.664-1.294,10.849,10.849,0,0,1,1.663-6.84.157.157,0,0,1,.214-.019.153.153,0,0,1,.019.214,10.529,10.529,0,0,0-1.593,6.626,1.745,1.745,0,0,1-.8,1.566,10.718,10.718,0,0,0-1.022.758,1.37,1.37,0,0,0-.4,1.671c.3.56.567,1.042.8,1.434a1.557,1.557,0,0,1,0,1.531,42.688,42.688,0,0,0-3.727,9.366A.162.162,0,0,1,834.423,298.692Z"
                                                  transform="translate(-834.273 -275.375)" fill="#b5d6ea"/>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_14155" data-name="Group 14155" transform="translate(44.553)">
                                    <g id="Group_14152" data-name="Group 14152" transform="translate(0 6.141)">
                                        <path id="Path_79753" data-name="Path 79753"
                                              d="M822.857,241.035a9.06,9.06,0,0,0,2.732.758l-.012.035c-.035.152-.175.735-.4,1.516a23.739,23.739,0,0,1-1.524,4.019c1.376,4.193,5.911,2.145,8.309,0,0,0-2.876-5.251,1.123-13.952,2.134-4.644-6.067-2.34-6.067-2.34C821.8,236.259,822.328,240.588,822.857,241.035Z"
                                              transform="translate(-822.537 -230.499)" fill="#f9ba9d"/>
                                        <path id="Path_79754" data-name="Path 79754"
                                              d="M829.34,260.939a6.721,6.721,0,0,0,2.631-1.659,10.827,10.827,0,0,1-2.223.109S829.561,260.158,829.34,260.939Z"
                                              transform="translate(-826.696 -248.094)" fill="#ea7f59"/>
                                    </g>
                                    <g id="Group_14154" data-name="Group 14154" transform="translate(2.355)">
                                        <path id="Path_79755" data-name="Path 79755"
                                              d="M844.789,234.083c-2.892,4.065-8.344,3.665-9.036,3.591-1.318-2.759-2.612-5.927-1.065-12.4,0,0-9.409-3.373-4.839-8.538,3.339-3.762,7.4-1.862,6.638,1.947a9.513,9.513,0,0,1,7.571,4.644c2.456,4.489-1.764,6.786-.738,8.962A4.993,4.993,0,0,0,844.789,234.083Z"
                                              transform="translate(-828.597 -214.696)" fill="#0a0909"/>
                                        <g id="Group_14153" data-name="Group 14153"
                                           transform="translate(2.436 2.451)">
                                            <path id="Path_79756" data-name="Path 79756"
                                                  d="M836.375,225.374a3.956,3.956,0,0,1-1.454-2.04,2.168,2.168,0,0,1,.125-1.36,1.636,1.636,0,0,1,1.108-.933,2.232,2.232,0,0,1,2.347,1.178,4.8,4.8,0,0,1,.455,2.456,7.486,7.486,0,0,0-.882-2.188,1.827,1.827,0,0,0-1.772-.816,1.377,1.377,0,0,0-.882,1.586A5.4,5.4,0,0,0,836.375,225.374Z"
                                                  transform="translate(-834.865 -221.003)" fill="#171717"/>
                                            <path id="Path_79757" data-name="Path 79757"
                                                  d="M840.1,233.87c.595.361,1.158.758,1.741,1.139a10.392,10.392,0,0,1,1.667,1.314,2.386,2.386,0,0,1,.591,2.149,11.109,11.109,0,0,1-.711,2,7.7,7.7,0,0,0-.385,3.921,9.77,9.77,0,0,0,1.36,3.824,7.922,7.922,0,0,1-1.842-3.743,7.705,7.705,0,0,1,.268-4.24,12.588,12.588,0,0,0,.727-1.881,1.947,1.947,0,0,0-.4-1.714,10.281,10.281,0,0,0-1.477-1.38C841.13,234.795,840.6,234.348,840.1,233.87Z"
                                                  transform="translate(-838.065 -228.869)" fill="#171717"/>
                                            <path id="Path_79758" data-name="Path 79758"
                                                  d="M846.82,231.02a4.636,4.636,0,0,1,4.03,1.185,4.974,4.974,0,0,1,1.52,4.057,13.288,13.288,0,0,1-1.434,4.057,6.008,6.008,0,0,0-.73,4,4.065,4.065,0,0,1-.3-2.114,9.491,9.491,0,0,1,.567-2.083,14.731,14.731,0,0,0,1.263-3.921,4.612,4.612,0,0,0-1.224-3.653A4.968,4.968,0,0,0,846.82,231.02Z"
                                                  transform="translate(-842.174 -227.076)" fill="#171717"/>
                                            <path id="Path_79759" data-name="Path 79759"
                                                  d="M860.3,258.06a5.592,5.592,0,0,0,1.574,2.724,22.4,22.4,0,0,0,2.472,2.04,10.016,10.016,0,0,1,2.355,2.351,4.146,4.146,0,0,1,.734,3.191,4.8,4.8,0,0,0-1.143-2.9,12.823,12.823,0,0,0-2.344-2.134,14.476,14.476,0,0,1-2.453-2.215A4.726,4.726,0,0,1,860.3,258.06Z"
                                                  transform="translate(-850.412 -243.658)" fill="#171717"/>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_14156" data-name="Group 14156" transform="translate(0 32.504)">
                                    <path id="Path_79760" data-name="Path 79760"
                                          d="M742.555,332.985h0a12.587,12.587,0,0,1-17.8,0L707.9,316.126l17.8-17.8,16.859,16.859A12.587,12.587,0,0,1,742.555,332.985Z"
                                          transform="translate(-707.9 -298.33)" fill="#fb5d9c"/>
                                    <path id="Path_79761" data-name="Path 79761"
                                          d="M710.463,348.129c.264-.082,1.387-.47,1.586-.113a.436.436,0,0,1-.159.548c.42-.1.789-.085.882.225.07.225-.078.4-.315.544.459-.132.894-.159,1.007.2.078.257-.1.447-.385.595.4-.113.777-.124.89.233.117.381-.812.824-1.24.956s-.808.179-.933-.222a.448.448,0,0,1,.268-.556c-.474.144-.894.2-1.018-.194a.439.439,0,0,1,.233-.521c-.505.152-.948.21-1.069-.179-.074-.237.062-.412.3-.548-.315.054-.688.054-.777-.268C709.62,348.428,710.2,348.21,710.463,348.129Z"
                                          transform="translate(-709.01 -328.615)" fill="#f9ba9d"/>
                                </g>
                                <g id="Group_14157" data-name="Group 14157" transform="translate(20.726 26.102)">
                                    <path id="Path_79762" data-name="Path 79762"
                                          d="M768.342,349.352c-1.01,1.166-4.392,1.073-5.068,1.073s-.816-.175-.82-.35.155-.245.494-.26c.2-.008,1.189-.051,1.182-.276s-.606-.214-1.329-.21-1.115-.163-1.135-.462.377-.416.377-.416-.812-.031-.812-.47.859-.47.859-.47-.389-.171-.381-.451c.012-.381.777-.431,1.508-.455.758-.023,2.4-.086,2.4-.086-1.119-.96-1.092-1.687-.948-1.811s.187-.3.874.342a4.724,4.724,0,0,0,1.986.948,1.839,1.839,0,0,1,.917,1.018l4.271,1.092-.61,3.222Z"
                                          transform="translate(-761.23 -320.207)" fill="#f9ba9d"/>
                                    <path id="Path_79763" data-name="Path 79763"
                                          d="M787.1,351.895a38.805,38.805,0,0,1-4.6-1.555,14.786,14.786,0,0,0-.579,6.626l4.244.653Z"
                                          transform="translate(-773.775 -323.725)" fill="#c0433a"/>
                                    <path id="Path_79764" data-name="Path 79764"
                                          d="M814.2,283.884c-.56,3.688-2.755,20.913-3.059,24.792,0,0-2.347-.665-1.022,1.5-3.809,1.337-18.1-1.628-18.1-1.628a27.318,27.318,0,0,0-1.869,8.29s26.373,8.34,30.614.07,2.631-31.768-3.031-34.854C816.022,281.121,814.2,283.884,814.2,283.884Z"
                                          transform="translate(-778.91 -281.859)" fill="#fff"/>
                                    <path id="Path_79765" data-name="Path 79765"
                                          d="M793.349,353.989c1.236,2.134,1.6,3.735,4.12,5.177,3.323,1.9,7.31,2.717,11,3.288a91.971,91.971,0,0,1-18.317-3.634,27.353,27.353,0,0,1,1.869-8.29s.463.1,1.24.245A2.728,2.728,0,0,0,793.349,353.989Z"
                                          transform="translate(-778.91 -323.841)" fill="#e1f0fa"/>
                                </g>
                            </g>
                            <g id="Group_14185" data-name="Group 14185" transform="translate(20.917 121.964)">
                                <g id="Group_14160" data-name="Group 14160" transform="translate(0 118.475)">
                                    <rect id="Rectangle_3367" data-name="Rectangle 3367" width="19.409"
                                          height="4.396" transform="translate(0 0.455)" fill="#94daec"/>
                                    <g id="Group_14159" data-name="Group 14159" transform="translate(11.516)">
                                        <rect id="Rectangle_3368" data-name="Rectangle 3368" width="72.995"
                                              height="15.254" transform="translate(0.455 0.455)" fill="#fff"/>
                                        <path id="Path_79766" data-name="Path 79766"
                                              d="M465.395,671.34h-73.9V655.18h73.9v16.16Zm-73-.906h72.09V656.089H392.4Z"
                                              transform="translate(-391.49 -655.18)" fill="#94daec"/>
                                    </g>
                                </g>
                                <g id="Group_14167" data-name="Group 14167" transform="translate(65.034)">
                                    <g id="Group_14161" data-name="Group 14161"
                                       transform="translate(18.196 61.258)">
                                        <path id="Path_79767" data-name="Path 79767"
                                              d="M597.86,517.166,589.45,546.5l24.43,7,8.41-29.339a12.7,12.7,0,0,0-8.713-15.717h0A12.714,12.714,0,0,0,597.86,517.166Z"
                                              transform="translate(-584.229 -507.958)" fill="#db7d00"/>
                                        <path id="Path_79768" data-name="Path 79768"
                                              d="M576.526,605.806l7.217-24.656c-1.3,4.547,23.855,11.756,25.161,7.213l-7.213,24.656a13.086,13.086,0,0,1-16.187,8.974h0A13.084,13.084,0,0,1,576.526,605.806Z"
                                              transform="translate(-576.015 -552.705)" fill="#1098d6"/>
                                    </g>
                                    <g id="Group_14162" data-name="Group 14162" transform="translate(0.462 60.605)">
                                        <path id="Path_79769" data-name="Path 79769"
                                              d="M536.7,518.093,534.56,548.54l25.351,1.784,2.141-30.446a12.708,12.708,0,0,0-11.784-13.568h0A12.708,12.708,0,0,0,536.7,518.093Z"
                                              transform="translate(-532.937 -506.278)" fill="#ed9d22"/>
                                        <path id="Path_79770" data-name="Path 79770"
                                              d="M530.418,613.875l1.943-25.615c-.33,4.718,25.775,6.556,26.109,1.838l-1.943,25.616a13.084,13.084,0,0,1-13.972,12.133h0A13.084,13.084,0,0,1,530.418,613.875Z"
                                              transform="translate(-530.385 -556.398)" fill="#ed0f68"/>
                                    </g>
                                    <g id="Group_14163" data-name="Group 14163" transform="translate(0 25.74)">
                                        <path id="Path_79771" data-name="Path 79771"
                                              d="M597.1,488.451,579.419,463.57,558.7,478.292l17.679,24.881a12.707,12.707,0,0,0,17.718,3h0A12.707,12.707,0,0,0,597.1,488.451Z"
                                              transform="translate(-547.233 -445.303)" fill="#ed9d22"/>
                                        <path id="Path_79772" data-name="Path 79772"
                                              d="M552.951,422.076,567.716,443.1c-2.74-3.855-24.073,11.306-21.337,15.161l-14.765-21.026a13.086,13.086,0,0,1,3.09-18.247h0A13.082,13.082,0,0,1,552.951,422.076Z"
                                              transform="translate(-529.196 -416.568)" fill="#ed0f68"/>
                                    </g>
                                    <g id="Group_14164" data-name="Group 14164" transform="translate(10.653)">
                                        <path id="Path_79773" data-name="Path 79773"
                                              d="M624.508,422.231l-17.68-24.881L586.11,412.072l17.679,24.881a12.707,12.707,0,0,0,17.718,3h0A12.712,12.712,0,0,0,624.508,422.231Z"
                                              transform="translate(-574.643 -379.079)" fill="#c6e7ef"/>
                                        <path id="Path_79774" data-name="Path 79774"
                                              d="M580.361,355.846l14.765,21.026c-2.74-3.855-24.073,11.306-21.337,15.161l-14.765-21.026a13.086,13.086,0,0,1,3.09-18.247h0A13.083,13.083,0,0,1,580.361,355.846Z"
                                              transform="translate(-556.606 -350.338)" fill="#fb5d9c"/>
                                    </g>
                                    <g id="Group_14165" data-name="Group 14165"
                                       transform="translate(39.627 59.699)">
                                        <path id="Path_79775" data-name="Path 79775"
                                              d="M631.186,517.493l2.005,30.458,25.359-1.671-2.005-30.458a12.709,12.709,0,0,0-13.517-11.846h0A12.712,12.712,0,0,0,631.186,517.493Z"
                                              transform="translate(-631.159 -503.948)" fill="#ed9d22"/>
                                        <path id="Path_79776" data-name="Path 79776"
                                              d="M635.207,613.46l-1.547-25.643c.311,4.718,26.428,3,26.117-1.718l1.547,25.643a13.085,13.085,0,0,1-12.2,13.917h0A13.088,13.088,0,0,1,635.207,613.46Z"
                                              transform="translate(-632.688 -554.172)" fill="#fb5d9c"/>
                                    </g>
                                    <g id="Group_14166" data-name="Group 14166"
                                       transform="translate(31.198 17.062)">
                                        <path id="Path_79777" data-name="Path 79777"
                                              d="M634.4,492.978l8.395-29.347-24.434-6.992-8.395,29.347a12.708,12.708,0,0,0,8.721,15.713h0A12.708,12.708,0,0,0,634.4,492.978Z"
                                              transform="translate(-609.469 -432.389)" fill="#ed9d22"/>
                                        <path id="Path_79778" data-name="Path 79778"
                                              d="M656.412,410.929l-7.2,24.66c1.3-4.547-23.863-11.745-25.161-7.2l7.2-24.66a13.085,13.085,0,0,1,16.179-8.982h0A13.088,13.088,0,0,1,656.412,410.929Z"
                                              transform="translate(-618.383 -394.241)" fill="#fb5d9c"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_3369" data-name="Rectangle 3369" width="113.445" height="71.981"
                                      transform="translate(135.088 19.477) rotate(90)" fill="#94daec"
                                      opacity="0.2"/>
                                <rect id="Rectangle_3370" data-name="Rectangle 3370" width="9.001" height="114.534"
                                      transform="translate(73.909 18.391)" fill="#fff" opacity="0.26"/>
                                <g id="Group_14168" data-name="Group 14168" transform="translate(61.81 18.181)">
                                    <path id="Path_79779" data-name="Path 79779"
                                          d="M595.473,513.158H520.9V397.12h74.573Zm-71.981-2.592h69.389V399.712H523.492Z"
                                          transform="translate(-520.9 -397.12)" fill="#94daec"/>
                                </g>
                                <g id="Group_14169" data-name="Group 14169" transform="translate(58.821 16.518)">
                                    <path id="Path_79780" data-name="Path 79780"
                                          d="M591.518,398.335h-75.56a2.748,2.748,0,0,1,0-5.5h75.56a2.748,2.748,0,1,1,0,5.5Z"
                                          transform="translate(-513.21 -392.84)" fill="#94daec"/>
                                </g>
                                <g id="Group_14184" data-name="Group 14184" transform="translate(67.201 49.557)">
                                    <path id="Path_79781" data-name="Path 79781"
                                          d="M539.1,533.675h55.137a4.331,4.331,0,0,0,4.329-4.329V482.179a4.331,4.331,0,0,0-4.329-4.33H539.1a4.331,4.331,0,0,0-4.329,4.33v47.17A4.327,4.327,0,0,0,539.1,533.675Z"
                                          transform="translate(-534.77 -477.85)" fill="#fff"/>
                                    <g id="Group_14182" data-name="Group 14182" transform="translate(11.31 4.244)">
                                        <g id="Group_14170" data-name="Group 14170"
                                           transform="translate(4.923 8.006)">
                                            <path id="Path_79782" data-name="Path 79782"
                                                  d="M592.2,540.7a15.664,15.664,0,1,1,15.662-15.662A15.681,15.681,0,0,1,592.2,540.7Zm0-29.957a14.29,14.29,0,1,0,14.29,14.29A14.3,14.3,0,0,0,592.2,510.742Z"
                                                  transform="translate(-576.54 -509.37)" fill="#c6e7ef"/>
                                        </g>
                                        <g id="Group_14181" data-name="Group 14181">
                                            <g id="Group_14171" data-name="Group 14171"
                                               transform="translate(19.898)">
                                                <path id="Path_79783" data-name="Path 79783"
                                                      d="M615.758,494.184a.687.687,0,0,1-.688-.688v-4.038a.688.688,0,0,1,1.376,0V493.5A.687.687,0,0,1,615.758,494.184Z"
                                                      transform="translate(-615.07 -488.77)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14172" data-name="Group 14172"
                                               transform="translate(8.414 3.079)">
                                                <path id="Path_79784" data-name="Path 79784"
                                                      d="M588.226,501.565a.686.686,0,0,1-.595-.342l-2.017-3.5a.689.689,0,1,1,1.193-.688l2.017,3.5a.687.687,0,0,1-.253.941A.706.706,0,0,1,588.226,501.565Z"
                                                      transform="translate(-585.522 -496.692)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14173" data-name="Group 14173"
                                               transform="translate(0 11.489)">
                                                <path id="Path_79785" data-name="Path 79785"
                                                      d="M568.053,521.728a.687.687,0,0,1-.342-.093l-3.494-2.017a.689.689,0,1,1,.688-1.193l3.494,2.017a.69.69,0,0,1-.346,1.286Z"
                                                      transform="translate(-563.872 -518.332)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14174" data-name="Group 14174"
                                               transform="translate(0 32.453)">
                                                <path id="Path_79786" data-name="Path 79786"
                                                      d="M564.559,575.664a.687.687,0,0,1-.342-1.282l3.494-2.017a.689.689,0,1,1,.688,1.193l-3.494,2.017A.7.7,0,0,1,564.559,575.664Z"
                                                      transform="translate(-563.872 -572.272)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14175" data-name="Group 14175"
                                               transform="translate(8.41 39.378)">
                                                <path id="Path_79787" data-name="Path 79787"
                                                      d="M586.2,594.968a.69.69,0,0,1-.595-1.034l2.017-3.5a.689.689,0,1,1,1.193.688l-2.017,3.5A.689.689,0,0,1,586.2,594.968Z"
                                                      transform="translate(-585.512 -590.092)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14176" data-name="Group 14176"
                                               transform="translate(19.898 41.919)">
                                                <path id="Path_79788" data-name="Path 79788"
                                                      d="M615.758,602.044a.687.687,0,0,1-.688-.688v-4.038a.688.688,0,1,1,1.376,0v4.038A.687.687,0,0,1,615.758,602.044Z"
                                                      transform="translate(-615.07 -596.63)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14177" data-name="Group 14177"
                                               transform="translate(29.374 39.382)">
                                                <path id="Path_79789" data-name="Path 79789"
                                                      d="M642.156,594.975a.687.687,0,0,1-.595-.342l-2.017-3.5a.689.689,0,1,1,1.193-.688l2.017,3.5a.687.687,0,0,1-.253.94A.706.706,0,0,1,642.156,594.975Z"
                                                      transform="translate(-639.452 -590.102)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14178" data-name="Group 14178"
                                               transform="translate(36.303 32.449)">
                                                <path id="Path_79790" data-name="Path 79790"
                                                      d="M661.463,575.658a.687.687,0,0,1-.342-.093l-3.494-2.017a.689.689,0,0,1,.688-1.193l3.494,2.017a.69.69,0,0,1-.346,1.286Z"
                                                      transform="translate(-657.282 -572.262)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14179" data-name="Group 14179"
                                               transform="translate(36.303 11.493)">
                                                <path id="Path_79791" data-name="Path 79791"
                                                      d="M657.969,521.734a.687.687,0,0,1-.342-1.283l3.494-2.017a.689.689,0,0,1,.688,1.193l-3.494,2.017A.7.7,0,0,1,657.969,521.734Z"
                                                      transform="translate(-657.282 -518.342)" fill="#c6e7ef"/>
                                            </g>
                                            <g id="Group_14180" data-name="Group 14180"
                                               transform="translate(29.37 3.075)">
                                                <path id="Path_79792" data-name="Path 79792"
                                                      d="M640.129,501.559a.69.69,0,0,1-.595-1.034l2.017-3.5a.689.689,0,0,1,1.193.688l-2.017,3.5A.689.689,0,0,1,640.129,501.559Z"
                                                      transform="translate(-639.442 -496.682)" fill="#c6e7ef"/>
                                            </g>
                                        </g>
                                    </g>
                                    <rect id="Rectangle_3371" data-name="Rectangle 3371" width="44.834"
                                          height="14.084" transform="translate(9.479 20.87)" fill="#fff"/>
                                    <g id="Group_14183" data-name="Group 14183" transform="translate(4.905 23.894)">
                                        <path id="Path_79793" data-name="Path 79793"
                                              d="M552.407,548.2l-3.591-6.832a16.042,16.042,0,0,1,.1,1.6V548.2H547.39V539.33h1.97l3.646,6.891a15.909,15.909,0,0,1-.1-1.733V539.33h1.531V548.2Z"
                                              transform="translate(-547.39 -539.33)" fill="#fb5d9c"/>
                                        <path id="Path_79794" data-name="Path 79794"
                                              d="M574.687,548.2l-.731-2.266h-3.14l-.731,2.266H568.36l3.008-8.873H573.4l3,8.873Zm-2.3-7.509-.035.14c-.039.151-.085.322-.14.517s-.389,1.255-1.007,3.187h2.371l-.812-2.549-.253-.855Z"
                                              transform="translate(-560.21 -539.33)" fill="#fb5d9c"/>
                                        <path id="Path_79795" data-name="Path 79795"
                                              d="M592.3,540.764V548.2h-1.726v-7.439H587.91V539.33h7.058v1.434Z"
                                              transform="translate(-572.162 -539.33)" fill="#fb5d9c"/>
                                        <path id="Path_79796" data-name="Path 79796"
                                              d="M611.753,548.327a3.562,3.562,0,0,1-2.608-.894,3.439,3.439,0,0,1-.906-2.557V539.33h1.726v5.4a2.4,2.4,0,0,0,.466,1.6,1.705,1.705,0,0,0,1.368.544,1.791,1.791,0,0,0,1.422-.571,2.4,2.4,0,0,0,.5-1.632v-5.34h1.726v5.453a3.449,3.449,0,0,1-.968,2.615A3.783,3.783,0,0,1,611.753,548.327Z"
                                              transform="translate(-584.591 -539.33)" fill="#fb5d9c"/>
                                        <path id="Path_79797" data-name="Path 79797"
                                              d="M636.392,548.2l-1.912-3.369h-2.025V548.2H630.73V539.33h4.12a3.42,3.42,0,0,1,2.277.684,2.439,2.439,0,0,1,.8,1.963,2.647,2.647,0,0,1-.494,1.609,2.27,2.27,0,0,1-1.329.89l2.227,3.727Zm-.206-6.152q0-1.277-1.52-1.279h-2.211v2.62h2.258a1.54,1.54,0,0,0,1.1-.354A1.289,1.289,0,0,0,636.186,542.05Z"
                                              transform="translate(-598.34 -539.33)" fill="#fb5d9c"/>
                                        <path id="Path_79798" data-name="Path 79798"
                                              d="M658.037,548.2l-.731-2.266h-3.14l-.731,2.266H651.71l3.008-8.873h2.037l3,8.873Zm-2.3-7.509-.035.14c-.039.151-.085.322-.14.517s-.389,1.255-1.007,3.187h2.371l-.812-2.549-.253-.855Z"
                                              transform="translate(-611.167 -539.33)" fill="#fb5d9c"/>
                                        <path id="Path_79799" data-name="Path 79799"
                                              d="M675.26,548.2V539.33h1.726v7.439h4.423V548.2Z"
                                              transform="translate(-625.564 -539.33)" fill="#fb5d9c"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Group_14219" data-name="Group 14219" transform="translate(0 0)">
                                <g id="Group_14186" data-name="Group 14186" transform="translate(80.732 80.014)">
                                    <path id="Path_79800" data-name="Path 79800"
                                          d="M515.768,274.879a1.181,1.181,0,0,1,.074-.486l.035-.054c.241-.6.54-1.115.816-1.7a5.1,5.1,0,0,1,1.22,2.81,6.906,6.906,0,0,0-1.387.113A.677.677,0,0,1,515.768,274.879Z"
                                          transform="translate(-515.766 -260.886)" fill="#db7d00"/>
                                    <path id="Path_79801" data-name="Path 79801"
                                          d="M518.15,254.155c.019-.027.023-.047.043-.074.291-.61.536-1.275.875-1.877,1.154-2.071,4.1-4.528,7.994-6.774a24.635,24.635,0,0,1,12.969-3.024,30.4,30.4,0,0,1,6.521.925,25.564,25.564,0,0,1,6.082,2.538,27.478,27.478,0,0,1,5.313,4.061,22.125,22.125,0,0,1,2.308,2.526,5.764,5.764,0,0,1,.781,3.7s.983,1.788,1.932,3.218a24.691,24.691,0,0,1,1.512,2.087c.128.35-.991,1.947-1.9,2.075a10.3,10.3,0,0,0-1.178-2.623,8.918,8.918,0,0,0-2.207-2.176,3.159,3.159,0,0,1-2.841-.062c-.824-.373-1.589-.847-2.421-1.2a44.641,44.641,0,0,0-4.839-1.947,32.158,32.158,0,0,0-9.771-1.978,24.519,24.519,0,0,0-4.959.311,48.631,48.631,0,0,0-5.029.991c-1.694.424-3.424.979-5.169,1.6a10.95,10.95,0,0,1-4.8.513A5.087,5.087,0,0,0,518.15,254.155Z"
                                          transform="translate(-517.224 -242.397)" fill="#ed9d22"/>
                                    <path id="Path_79802" data-name="Path 79802"
                                          d="M562.448,266.605a38.421,38.421,0,0,0-4.489-2.88,36.394,36.394,0,0,0-4.784-2.277,27.365,27.365,0,0,0-10.245-2.04,26.467,26.467,0,0,0-5.223.474,34.331,34.331,0,0,0-5.1,1.345c-1.675.567-3.311,1.255-4.947,1.963a26.472,26.472,0,0,1-5.06,1.764,31.906,31.906,0,0,0,4.85-2.219c1.593-.8,3.214-1.578,4.889-2.246a28.458,28.458,0,0,1,10.595-2.11,25.341,25.341,0,0,1,10.552,2.336A32.622,32.622,0,0,1,562.448,266.605Z"
                                          transform="translate(-519.944 -252.166)" fill="#db7d00"/>
                                </g>
                                <g id="Group_14188" data-name="Group 14188" transform="translate(149.038 10.31)">
                                    <circle id="Ellipse_435" data-name="Ellipse 435" cx="18.974" cy="18.974"
                                            r="18.974" transform="translate(0 36.889) rotate(-76.432)"
                                            fill="#3a5c9c"/>
                                    <g id="Group_14187" data-name="Group 14187" transform="translate(6.147 4.296)">
                                        <path id="Path_79803" data-name="Path 79803"
                                              d="M750.88,97.912a7.048,7.048,0,0,1,4-.637,13.508,13.508,0,0,1,3.976,1.08,15.337,15.337,0,0,1,6.428,5.258,13.7,13.7,0,0,1,2.456,8.033,13.932,13.932,0,0,1-2.631,7.582,33.548,33.548,0,0,0-.214-7.384,16.421,16.421,0,0,0-2.592-6.168,20.158,20.158,0,0,0-4.827-4.839,21.262,21.262,0,0,0-3.051-1.854A10.353,10.353,0,0,0,750.88,97.912Z"
                                              transform="translate(-733.957 -88.25)" fill="#22365b"/>
                                        <path id="Path_79804" data-name="Path 79804"
                                              d="M753.569,125.908a31.839,31.839,0,0,0,1.6-7.342,36.538,36.538,0,0,0-.05-7.2,42.028,42.028,0,0,0-1.333-7.108,25.83,25.83,0,0,0-1.216-3.428,7.885,7.885,0,0,0-2.106-3.039,6.115,6.115,0,0,1,3.568,2.021,14.756,14.756,0,0,1,2.394,3.37,21.391,21.391,0,0,1,2.3,7.827,20.5,20.5,0,0,1-.777,8.146A13.93,13.93,0,0,1,753.569,125.908Z"
                                              transform="translate(-733.7 -88.583)" fill="#22365b"/>
                                        <path id="Path_79805" data-name="Path 79805"
                                              d="M724.78,97.986a18.027,18.027,0,0,0-6.35,3.113,25.533,25.533,0,0,0-4.951,4.551,18.676,18.676,0,0,0-3.276,5.705,31.1,31.1,0,0,0-1.341,7.011,13.164,13.164,0,0,1-1.442-7.637,14.341,14.341,0,0,1,3.257-7.38A16.8,16.8,0,0,1,717.07,98.6a14.87,14.87,0,0,1,3.817-1.042A7.853,7.853,0,0,1,724.78,97.986Z"
                                              transform="translate(-707.337 -88.409)" fill="#22365b"/>
                                        <path id="Path_79806" data-name="Path 79806"
                                              d="M733.069,125.385a17.83,17.83,0,0,1-2.2-7.248l-.093-.96v-.956c0-.637.012-1.283.054-1.92a26.5,26.5,0,0,1,.618-3.785,25.483,25.483,0,0,1,2.853-7.046,19.385,19.385,0,0,1,4.959-5.69c-.828,2.394-1.632,4.637-2.367,6.883s-1.372,4.469-1.916,6.7c-.307,1.115-.49,2.246-.738,3.373l-.276,1.706a17.281,17.281,0,0,0-.245,1.722C733.341,120.5,733.326,122.836,733.069,125.385Z"
                                              transform="translate(-721.669 -88.577)" fill="#22365b"/>
                                        <path id="Path_79807" data-name="Path 79807"
                                              d="M744.619,84.166c-.49-.859-.956-1.687-1.438-2.483-.424-.82-1.333-1.461-1.411-2.3-.14-.828-.237-1.675-.369-2.522a26.773,26.773,0,0,0-.5-2.763,5.272,5.272,0,0,1,2.658,1.652,9.5,9.5,0,0,1,1.671,2.53c.482.894.012,2.021-.043,2.981A17.049,17.049,0,0,1,744.619,84.166Z"
                                              transform="translate(-727.856 -74.1)" fill="#22365b"/>
                                        <path id="Path_79808" data-name="Path 79808"
                                              d="M708.3,90.577a7.3,7.3,0,0,1,3.451-3.37,9.561,9.561,0,0,1,4.858-.917,11.158,11.158,0,0,1,4.621,1.376,8.908,8.908,0,0,1,3.455,3.257c-1.625-.155-3.035-.369-4.4-.564s-2.654-.35-3.917-.447a22.958,22.958,0,0,0-3.8.019A42.061,42.061,0,0,0,708.3,90.577Z"
                                              transform="translate(-707.926 -81.533)" fill="#22365b"/>
                                        <path id="Path_79809" data-name="Path 79809"
                                              d="M750.47,92.391a13.8,13.8,0,0,1,4.31-3.4,14.166,14.166,0,0,1,1.29-.633,7.972,7.972,0,0,1,1.384-.517,5.383,5.383,0,0,1,1.477-.264,5.581,5.581,0,0,1,1.523.062,11.489,11.489,0,0,1,1.5.338c.486.183.964.365,1.43.56a9.572,9.572,0,0,1,2.417,1.776,9.742,9.742,0,0,1,1.745,2.274,13.342,13.342,0,0,1,1,2.577c-.781-.532-1.384-1.15-2.095-1.625a13.709,13.709,0,0,0-2.095-1.248,12.278,12.278,0,0,0-2.11-.793c-.369-.051-.723-.117-1.073-.179a9.045,9.045,0,0,0-1.077-.066c-.35-.047-.719,0-1.084-.027-.183,0-.365-.039-.552-.047a5.67,5.67,0,0,1-.571-.016,8.513,8.513,0,0,0-1.185-.051,7.649,7.649,0,0,0-1.224.062A26.034,26.034,0,0,0,750.47,92.391Z"
                                              transform="translate(-733.707 -82.325)" fill="#22365b"/>
                                        <path id="Path_79810" data-name="Path 79810"
                                              d="M759.1,78.02a13.917,13.917,0,0,0-2.375,1.8,19.306,19.306,0,0,0-1.827,2.025c-.276.358-.563.692-.878,1.03l-1.026.987c-.35.342-.645.727-1.014,1.088a8.112,8.112,0,0,1-1.174,1.115,6.3,6.3,0,0,1,.015-1.667,15.2,15.2,0,0,1,.412-1.578,5.979,5.979,0,0,1,1.7-2.829,8.512,8.512,0,0,1,2.88-1.741A5.354,5.354,0,0,1,759.1,78.02Z"
                                              transform="translate(-733.881 -76.395)" fill="#22365b"/>
                                    </g>
                                </g>
                                <g id="Group_14190" data-name="Group 14190" transform="translate(107.055 22.252)">
                                    <ellipse id="Ellipse_436" data-name="Ellipse 436" cx="10.61" cy="21.309"
                                             rx="10.61" ry="21.309" transform="translate(0 5.498) rotate(-15.016)"
                                             fill="#ed9d22"/>
                                    <g id="Group_14189" data-name="Group 14189" transform="translate(6.764 2.671)">
                                        <path id="Path_79811" data-name="Path 79811"
                                              d="M609.83,100.727a2.085,2.085,0,0,1,1.426.117,4.822,4.822,0,0,1,1.224.8,13.334,13.334,0,0,1,1.92,2.188,34.847,34.847,0,0,1,2.822,5.06,74.084,74.084,0,0,1,5.966,22.23,35.109,35.109,0,0,1,.089,5.791,13.056,13.056,0,0,1-.567,2.857,4.751,4.751,0,0,1-.661,1.306,2.08,2.08,0,0,1-1.178.812,2.93,2.93,0,0,0,1.566-2.2,12.809,12.809,0,0,0,.315-2.806,35.128,35.128,0,0,0-.381-5.67,100.727,100.727,0,0,0-5.9-22,34.865,34.865,0,0,0-2.507-5.1,12.651,12.651,0,0,0-1.679-2.27A2.933,2.933,0,0,0,609.83,100.727Z"
                                              transform="translate(-606.359 -100.649)" fill="#db7d00"/>
                                        <path id="Path_79812" data-name="Path 79812"
                                              d="M615.412,142.005a3.43,3.43,0,0,1-2.79-.77,13.335,13.335,0,0,1-2.215-1.994A29.723,29.723,0,0,1,607,134.376a48.4,48.4,0,0,1-6.1-22.716,30.28,30.28,0,0,1,.517-5.919,13.307,13.307,0,0,1,.921-2.837,3.444,3.444,0,0,1,2.033-2.064,2.334,2.334,0,0,0-1.108.9,5.383,5.383,0,0,0-.665,1.275,12.673,12.673,0,0,0-.665,2.814,29.572,29.572,0,0,0-.214,5.806,57.188,57.188,0,0,0,5.993,22.351,29.992,29.992,0,0,0,3.09,4.92,12.731,12.731,0,0,0,1.986,2.1,5.289,5.289,0,0,0,1.212.77A2.3,2.3,0,0,0,615.412,142.005Z"
                                              transform="translate(-600.9 -100.766)" fill="#db7d00"/>
                                        <path id="Path_79813" data-name="Path 79813"
                                              d="M609.83,100.85c.575,1.683,1.084,3.385,1.628,5.08l1.524,5.107c1.014,3.4,1.947,6.832,2.88,10.256.909,3.432,1.815,6.867,2.643,10.322l1.236,5.185c.373,1.737.785,3.467,1.131,5.212-.575-1.683-1.084-3.385-1.632-5.08l-1.523-5.107c-1.014-3.4-1.947-6.832-2.88-10.26-.906-3.432-1.815-6.867-2.639-10.322l-1.236-5.185C610.584,104.324,610.176,102.595,609.83,100.85Z"
                                              transform="translate(-606.359 -100.772)" fill="#db7d00"/>
                                    </g>
                                </g>
                                <g id="Group_14191" data-name="Group 14191" transform="translate(144.795 80.666)">
                                    <path id="Path_79814" data-name="Path 79814"
                                          d="M694.539,258.6a8.449,8.449,0,0,1-10.971-12.853c3.548-3.031,7.248-1.679,10.276,1.869C697.636,249.328,698.087,255.573,694.539,258.6Z"
                                          transform="translate(-680.603 -244.075)" fill="#a5003c"/>
                                    <path id="Path_79815" data-name="Path 79815"
                                          d="M711.89,252.951a9.3,9.3,0,0,1,1.349-1.209,5.794,5.794,0,0,1,1.694-.882l.21,1.115a6.663,6.663,0,0,0-3.047,1.209Z"
                                          transform="translate(-699.731 -248.223)" fill="#51192b"/>
                                    <path id="Path_79816" data-name="Path 79816"
                                          d="M705.43,252.218a2.947,2.947,0,0,1,1.714.19,2.059,2.059,0,0,1,1.182,1.4l-.249-.218a1.813,1.813,0,0,1,.832.354,1.943,1.943,0,0,1,.556.653,2.644,2.644,0,0,1,.26.781,3,3,0,0,1,0,.793,6.535,6.535,0,0,0-.26-.719,2.583,2.583,0,0,0-.361-.622,2.2,2.2,0,0,0-.5-.451,1.543,1.543,0,0,0-.579-.225l-.2-.023-.051-.194a1.911,1.911,0,0,0-.839-1.131A5.181,5.181,0,0,0,705.43,252.218Z"
                                          transform="translate(-695.781 -249.022)" fill="#89003e"/>
                                </g>
                                <g id="Group_14192" data-name="Group 14192" transform="translate(124.572 6.638)">
                                    <path id="Path_79817" data-name="Path 79817"
                                          d="M640.983,59.131A6.348,6.348,0,0,1,628.83,62.8c-1.014-3.354,1.03-5.5,4.384-6.51C635.538,54.2,639.968,55.773,640.983,59.131Z"
                                          transform="translate(-628.569 -54.669)" fill="#a5003c"/>
                                    <path id="Path_79818" data-name="Path 79818"
                                          d="M640.938,56.328a5.509,5.509,0,0,1-.521-2.728l.832.19a4.973,4.973,0,0,0-.086,2.46Z"
                                          transform="translate(-635.799 -53.6)" fill="#51192b"/>
                                    <path id="Path_79819" data-name="Path 79819"
                                          d="M637.12,60.632a2.246,2.246,0,0,1,.645-1.123,1.6,1.6,0,0,1,1.314-.393l-.222.1a1.5,1.5,0,0,1,1.112-.649,1.922,1.922,0,0,1,1.162.3,4.15,4.15,0,0,0-.575-.035,2.009,2.009,0,0,0-.536.062,1.916,1.916,0,0,0-.462.2,1.079,1.079,0,0,0-.33.334l-.066.12L639,59.536a1.421,1.421,0,0,0-.529.012,1.875,1.875,0,0,0-.5.229A3.794,3.794,0,0,0,637.12,60.632Z"
                                          transform="translate(-633.797 -56.637)" fill="#89003e"/>
                                </g>
                                <g id="Group_14193" data-name="Group 14193" transform="translate(51.474 38.915)">
                                    <path id="Path_79820" data-name="Path 79820"
                                          d="M451.653,138.468a6.533,6.533,0,1,1-9.833,8.6c-2.375-2.717-1.368-5.589,1.345-7.963C444.451,136.163,449.274,135.755,451.653,138.468Z"
                                          transform="translate(-440.485 -136.648)" fill="#3a5c9c"/>
                                    <path id="Path_79821" data-name="Path 79821"
                                          d="M447.178,141.161a5.682,5.682,0,0,1-1.648-2.336l.863-.175a5.13,5.13,0,0,0,.964,2.344Z"
                                          transform="translate(-443.569 -137.872)" fill="#51192b"/>
                                    <path id="Path_79822" data-name="Path 79822"
                                          d="M446.709,144.835a2.3,2.3,0,0,1,.128-1.325,1.638,1.638,0,0,1,1.065-.925l-.163.194a1.5,1.5,0,0,1,.272-.641,1.442,1.442,0,0,1,.494-.439,1.98,1.98,0,0,1,1.216-.218,4.7,4.7,0,0,0-.556.21,2.155,2.155,0,0,0-.478.284,1.941,1.941,0,0,0-.35.389,1.123,1.123,0,0,0-.167.455l-.012.14-.152.054a1.518,1.518,0,0,0-.494.233,1.812,1.812,0,0,0-.373.428A4.047,4.047,0,0,0,446.709,144.835Z"
                                          transform="translate(-444.262 -139.591)" fill="#22365b"/>
                                </g>
                                <g id="Group_14195" data-name="Group 14195" transform="translate(68.421 102.245)">
                                    <path id="Path_79823" data-name="Path 79823"
                                          d="M484.09,299.6s6.926,8.064,8.422,11.578-.132,4.43-1.368,4.959a3.439,3.439,0,0,1-4.186-1.92C485.069,310.218,484.09,299.6,484.09,299.6Z"
                                          transform="translate(-484.09 -299.6)" fill="#ed9d22"/>
                                    <path id="Path_79824" data-name="Path 79824"
                                          d="M499.4,345.747c.012-.2.105-.237.163-.167,1.5,1.885,3.2,2.647,3.82,1.613.509-.843-2.627-1.45-2.483-2.289.093-.552,1.477.89,1.632.385.19-.61-.564-.925-.882-1.049-1.659-.649-1.473-2.274-1.485-4.12-.008-.972-.777.043-1.092.738-1.52,3.338-.33,6.109.614,6.288C500.149,347.244,499.364,346.365,499.4,345.747Z"
                                          transform="translate(-492.808 -324.127)" fill="#22365b"/>
                                    <path id="Path_79825" data-name="Path 79825"
                                          d="M504.791,345.024c-.1-.171-.043-.257.043-.229,2.3.731,4.131.424,4.073-.781-.047-.983-2.989.253-3.339-.521-.229-.509,1.722-.082,1.57-.587-.183-.614-.983-.455-1.318-.381-1.741.385-2.487-1.073-3.525-2.6-.548-.8-.622.466-.5,1.224.591,3.618,3.117,5.262,4.007,4.889C506.244,345.856,505.1,345.561,504.791,345.024Z"
                                          transform="translate(-494.884 -324.096)" fill="#3a5c9c"/>
                                    <g id="Group_14194" data-name="Group 14194" transform="translate(0.82 2.881)">
                                        <path id="Path_79826" data-name="Path 79826"
                                              d="M498.184,328.717a4.983,4.983,0,0,0-1.077-.785,3.256,3.256,0,0,0-1.2-.361,3.844,3.844,0,0,0-1.255.113,11.774,11.774,0,0,0-1.275.435c.163-.163.346-.307.529-.462a6.833,6.833,0,0,1,.622-.342,2.927,2.927,0,0,1,1.43-.245A2.71,2.71,0,0,1,498.184,328.717Z"
                                              transform="translate(-490.589 -319.27)" fill="#db7d00"/>
                                        <path id="Path_79827" data-name="Path 79827"
                                              d="M489.14,321.96a2.621,2.621,0,0,1,.525-.906,2.854,2.854,0,0,1,.832-.669,2.272,2.272,0,0,1,1.057-.256,1.816,1.816,0,0,1,1.01.311,4.343,4.343,0,0,0-.975.078,3.6,3.6,0,0,0-.863.319A9.823,9.823,0,0,0,489.14,321.96Z"
                                              transform="translate(-487.997 -315.031)" fill="#db7d00"/>
                                        <path id="Path_79828" data-name="Path 79828"
                                              d="M489.745,312a1.888,1.888,0,0,0-1.209.062,6.255,6.255,0,0,0-1.077.707,2.494,2.494,0,0,1,.1-.361,3.437,3.437,0,0,1,.187-.323,1.445,1.445,0,0,1,.6-.49A1.13,1.13,0,0,1,489.745,312Z"
                                              transform="translate(-486.97 -309.754)" fill="#db7d00"/>
                                        <path id="Path_79829" data-name="Path 79829"
                                              d="M487.435,307.2a3.744,3.744,0,0,0-.564.365,2.185,2.185,0,0,1-.672.3.784.784,0,0,1,.113-.416.869.869,0,0,1,.288-.307A.627.627,0,0,1,487.435,307.2Z"
                                              transform="translate(-486.199 -307.012)" fill="#db7d00"/>
                                    </g>
                                </g>
                                <g id="Group_14197" data-name="Group 14197" transform="translate(52.541 66.336)">
                                    <circle id="Ellipse_437" data-name="Ellipse 437" cx="8.779" cy="8.779" r="8.779"
                                            transform="translate(0 12.416) rotate(-45)" fill="#ed9d22"/>
                                    <path id="Path_79830" data-name="Path 79830"
                                          d="M465.341,225.26a1.886,1.886,0,0,1-1.691.777s1.053,1.325.847,2.013a2.517,2.517,0,0,1,1.99-.777A4.006,4.006,0,0,1,465.341,225.26Z"
                                          transform="translate(-455.714 -218.243)" fill="#db7d00"/>
                                    <g id="Group_14196" data-name="Group 14196" transform="translate(6.218 5.895)">
                                        <path id="Path_79831" data-name="Path 79831"
                                              d="M461.85,239.72a.526.526,0,0,0,.047.688.452.452,0,0,0,.3.128c.1,0,.272,0,.3-.171.085.058.051.2,0,.28a.554.554,0,0,1-.253.171.675.675,0,0,1-.587-.128.607.607,0,0,1-.183-.579A.486.486,0,0,1,461.85,239.72Z"
                                              transform="translate(-460.59 -232.978)" fill="#db7d00"/>
                                        <path id="Path_79832" data-name="Path 79832"
                                              d="M472.061,239.883a.361.361,0,0,0,.307.214.383.383,0,0,0,.291-.093,1.025,1.025,0,0,0,.284-.257.9.9,0,0,0,.2-.377.534.534,0,0,1,.047.513.967.967,0,0,1-.326.427.615.615,0,0,1-.587.051C472.1,240.272,471.967,240.046,472.061,239.883Z"
                                              transform="translate(-467.055 -232.764)" fill="#db7d00"/>
                                        <path id="Path_79833" data-name="Path 79833"
                                              d="M461.7,247.869a.364.364,0,0,0-.066.369.4.4,0,0,0,.206.225,1.078,1.078,0,0,0,.354.148.863.863,0,0,0,.428.023.53.53,0,0,1-.447.257.965.965,0,0,1-.529-.117.619.619,0,0,1-.3-.513C461.36,248.063,461.508,247.853,461.7,247.869Z"
                                              transform="translate(-460.524 -237.959)" fill="#db7d00"/>
                                        <path id="Path_79834" data-name="Path 79834"
                                              d="M477.216,230.222c-.054-.183.152-.354.342-.365a.607.607,0,0,1,.505.26,1.161,1.161,0,0,1,.171.474c.039.179-.109.447-.3.392a.243.243,0,0,0,.027-.326,1.824,1.824,0,0,0-.2-.326.4.4,0,0,0-.218-.194A.293.293,0,0,0,477.216,230.222Z"
                                              transform="translate(-470.22 -226.946)" fill="#db7d00"/>
                                        <path id="Path_79835" data-name="Path 79835"
                                              d="M488.683,233.893c-.086-.19.167-.408.4-.342a.753.753,0,0,1,.443.381.776.776,0,0,1,.062.579.423.423,0,0,1-.443.307.433.433,0,0,0,.167-.365.668.668,0,0,0-.109-.346.681.681,0,0,0-.214-.288A.2.2,0,0,0,488.683,233.893Z"
                                              transform="translate(-477.226 -229.199)" fill="#db7d00"/>
                                        <path id="Path_79836" data-name="Path 79836"
                                              d="M486.088,242.982a.339.339,0,0,0-.249.3.649.649,0,0,0,.039.365.354.354,0,0,0,.21.241.421.421,0,0,0,.408-.031.418.418,0,0,1-.462.307.61.61,0,0,1-.5-.389.772.772,0,0,1,.043-.6C485.668,243.005,485.921,242.85,486.088,242.982Z"
                                              transform="translate(-475.287 -234.942)" fill="#db7d00"/>
                                        <path id="Path_79837" data-name="Path 79837"
                                              d="M471.055,251.3a.361.361,0,0,0-.284.21.429.429,0,0,0-.051.284.821.821,0,0,0,.361.6.5.5,0,0,1-.474-.1.727.727,0,0,1-.249-.462.615.615,0,0,1,.206-.509A.361.361,0,0,1,471.055,251.3Z"
                                              transform="translate(-466.033 -240.005)" fill="#db7d00"/>
                                        <path id="Path_79838" data-name="Path 79838"
                                              d="M480.346,251.251a.4.4,0,0,0-.237.443.664.664,0,0,0,.26.416.908.908,0,0,0,1.049.074.75.75,0,0,1-.564.4.958.958,0,0,1-.723-.2.86.86,0,0,1-.307-.7A.46.46,0,0,1,480.346,251.251Z"
                                              transform="translate(-471.819 -240.02)" fill="#db7d00"/>
                                        <path id="Path_79839" data-name="Path 79839"
                                              d="M475.68,222.954a.63.63,0,0,1,1.181-.26.425.425,0,0,1-.027.49.556.556,0,0,0-.2-.323.458.458,0,0,0-.268-.124A.976.976,0,0,0,475.68,222.954Z"
                                              transform="translate(-469.287 -222.372)" fill="#db7d00"/>
                                        <path id="Path_79840" data-name="Path 79840"
                                              d="M459.84,231.309c.066-.062,0-.148-.031-.14a.159.159,0,0,0-.109.058.351.351,0,0,0-.1.292.292.292,0,0,0,.136.268.531.531,0,0,0,.42.086.459.459,0,0,1-.533.171.571.571,0,0,1-.389-.517.608.608,0,0,1,.334-.552.326.326,0,0,1,.361.058C460.015,231.153,459.953,231.324,459.84,231.309Z"
                                              transform="translate(-459.23 -227.614)" fill="#db7d00"/>
                                    </g>
                                </g>
                                <g id="Group_14199" data-name="Group 14199" transform="translate(115.834 107.923)">
                                    <circle id="Ellipse_438" data-name="Ellipse 438" cx="5.748" cy="5.748" r="5.748"
                                            transform="translate(0 11.448) rotate(-84.779)" fill="#ed9d22"/>
                                    <path id="Path_79841" data-name="Path 79841"
                                          d="M613.54,334.365a1.231,1.231,0,0,1,.6,1.061s.808-.758,1.267-.661a1.652,1.652,0,0,1-.618-1.255A2.614,2.614,0,0,1,613.54,334.365Z"
                                          transform="translate(-610.643 -326.009)" fill="#db7d00"/>
                                    <g id="Group_14198" data-name="Group 14198" transform="translate(1.96 2.274)">
                                        <path id="Path_79842" data-name="Path 79842"
                                              d="M623.27,337.741a.391.391,0,0,0,.272.039.235.235,0,0,0,.171-.109.306.306,0,0,0,.066-.206c0-.066-.016-.183-.128-.187.1-.1.272.023.307.144a.434.434,0,0,1-.05.389.4.4,0,0,1-.369.152A.321.321,0,0,1,623.27,337.741Z"
                                              transform="translate(-618.552 -330.563)" fill="#db7d00"/>
                                        <path id="Path_79843" data-name="Path 79843"
                                              d="M622.753,330.993a.233.233,0,0,0,.124-.214.266.266,0,0,0-.078-.187.707.707,0,0,0-.183-.171.532.532,0,0,0-.256-.109.358.358,0,0,1,.33-.058.658.658,0,0,1,.3.19.4.4,0,0,1,.066.381A.25.25,0,0,1,622.753,330.993Z"
                                              transform="translate(-617.995 -326.283)" fill="#db7d00"/>
                                        <path id="Path_79844" data-name="Path 79844"
                                              d="M628.6,337.211a.238.238,0,0,0,.245.023.255.255,0,0,0,.136-.148.709.709,0,0,0,.078-.237.575.575,0,0,0-.008-.28.365.365,0,0,1,.194.276.647.647,0,0,1-.047.35.412.412,0,0,1-.319.222A.255.255,0,0,1,628.6,337.211Z"
                                              transform="translate(-621.81 -330.154)" fill="#db7d00"/>
                                        <path id="Path_79845" data-name="Path 79845"
                                              d="M616.229,328.314c-.113.039-.241-.074-.256-.2a.392.392,0,0,1,.144-.342.6.6,0,0,1,.311-.128c.1-.043.28.039.26.167-.078-.078-.155-.035-.218.016a.708.708,0,0,0-.2.132.257.257,0,0,0-.113.152A.182.182,0,0,0,616.229,328.314Z"
                                              transform="translate(-614.087 -324.688)" fill="#db7d00"/>
                                        <path id="Path_79846" data-name="Path 79846"
                                              d="M618,320.7c-.117.062-.276-.082-.245-.241a.5.5,0,0,1,.225-.311.512.512,0,0,1,.373-.074.279.279,0,0,1,.225.272.291.291,0,0,0-.249-.089.691.691,0,0,0-.4.245A.135.135,0,0,0,618,320.7Z"
                                              transform="translate(-615.177 -320.06)" fill="#db7d00"/>
                                        <path id="Path_79847" data-name="Path 79847"
                                              d="M624.065,321.835c.027.113.136.132.214.148a.414.414,0,0,0,.237-.047.239.239,0,0,0,.148-.152.263.263,0,0,0-.043-.264.277.277,0,0,1,.225.284.4.4,0,0,1-.225.346.486.486,0,0,1-.4,0C624.1,322.107,623.995,321.951,624.065,321.835Z"
                                              transform="translate(-619.024 -320.953)" fill="#db7d00"/>
                                        <path id="Path_79848" data-name="Path 79848"
                                              d="M630.31,331.438a.235.235,0,0,0,.152.175.26.26,0,0,0,.187.016.534.534,0,0,0,.373-.268.331.331,0,0,1-.043.315.482.482,0,0,1-.288.19.4.4,0,0,1-.342-.109A.242.242,0,0,1,630.31,331.438Z"
                                              transform="translate(-622.828 -326.968)" fill="#db7d00"/>
                                        <path id="Path_79849" data-name="Path 79849"
                                              d="M629.774,324.51a.26.26,0,0,0,.3.132.427.427,0,0,0,.257-.194.6.6,0,0,0-.008-.688.5.5,0,0,1,.3.346.622.622,0,0,1-.089.482.558.558,0,0,1-.435.237A.3.3,0,0,1,629.774,324.51Z"
                                              transform="translate(-622.526 -322.322)" fill="#db7d00"/>
                                        <path id="Path_79850" data-name="Path 79850"
                                              d="M611.55,329.51a.429.429,0,0,1-.42-.447.416.416,0,0,1,.183-.307.288.288,0,0,1,.323-.008.338.338,0,0,0-.2.148.32.32,0,0,0-.066.183A.62.62,0,0,0,611.55,329.51Z"
                                              transform="translate(-611.13 -325.343)" fill="#db7d00"/>
                                        <path id="Path_79851" data-name="Path 79851"
                                              d="M617.894,339.667c-.039-.047-.1.008-.089.027a.093.093,0,0,0,.043.066.223.223,0,0,0,.2.051.185.185,0,0,0,.167-.1.327.327,0,0,0,.031-.276.307.307,0,0,1,.144.338.374.374,0,0,1-.315.28.388.388,0,0,1-.377-.19.213.213,0,0,1,.019-.241C617.785,339.562,617.894,339.6,617.894,339.667Z"
                                              transform="translate(-615.127 -331.902)" fill="#db7d00"/>
                                    </g>
                                </g>
                                <g id="Group_14202" data-name="Group 14202" transform="translate(0 68.324)">
                                    <g id="Group_14200" data-name="Group 14200">
                                        <path id="Path_79852" data-name="Path 79852"
                                              d="M308.04,212.856c2.122,1.959,4.256,3.824,6.452,5.624,1.092.906,2.2,1.788,3.319,2.662,1.1.894,2.231,1.749,3.354,2.608,2.243,1.729,4.524,3.412,6.794,5.1,2.277,1.671,4.574,3.362,6.867,4.967l-2.114,2.686a52.271,52.271,0,0,1-4.749-5.258,53.114,53.114,0,0,1-3.968-5.8l-.871-1.527c-.276-.517-.521-1.053-.781-1.578s-.505-1.057-.727-1.6-.466-1.073-.653-1.628a27.961,27.961,0,0,1-1.59-6.786,49.738,49.738,0,0,0,2.989,6.133,63.417,63.417,0,0,0,3.739,5.6c1.349,1.788,2.787,3.506,4.275,5.173,1.481,1.652,3.066,3.3,4.64,4.745l-2.114,2.686c-2.41-1.64-4.714-3.331-6.984-5.118s-4.469-3.634-6.6-5.585c-2.11-1.97-4.182-3.984-6.094-6.156A47.077,47.077,0,0,1,308.04,212.856Z"
                                              transform="translate(-308.04 -212.32)" fill="#3a5c9c"/>
                                        <path id="Path_79853" data-name="Path 79853"
                                              d="M359.437,219.06a23.521,23.521,0,0,0,.948,5.041,29.251,29.251,0,0,0,4.384,8.935,31.972,31.972,0,0,0,3.144,3.7l-3.813,2.981a35.912,35.912,0,0,1-2.515-4.932,31.639,31.639,0,0,1-1.656-5.185,30.387,30.387,0,0,1-.742-5.293A24.313,24.313,0,0,1,359.437,219.06Z"
                                              transform="translate(-339.286 -216.441)" fill="#3a5c9c"/>
                                        <path id="Path_79854" data-name="Path 79854"
                                              d="M310.48,252.05a23.205,23.205,0,0,1,6.288.159,37.1,37.1,0,0,1,6.117,1.539,48.346,48.346,0,0,1,5.791,2.452,47.652,47.652,0,0,1,5.457,3.195l8.95,6.133-10.342-3.136c-1.131-.342-2.445-.649-3.7-.9-1.271-.249-2.557-.451-3.855-.6-1.3-.19-2.608-.237-3.933-.3s-2.662.016-4.046.07A17.284,17.284,0,0,1,321.1,259.2a23.513,23.513,0,0,1,4.139-.672,28.654,28.654,0,0,1,4.205.008,26.664,26.664,0,0,1,4.236.649l-1.391,3c-1.656-.995-3.436-1.994-5.188-2.93s-3.548-1.846-5.344-2.728c-1.8-.863-3.63-1.667-5.492-2.448C314.39,253.333,312.482,252.68,310.48,252.05Z"
                                              transform="translate(-309.532 -236.52)" fill="#3a5c9c"/>
                                    </g>
                                    <path id="Path_79855" data-name="Path 79855"
                                          d="M382.506,263.908a17.8,17.8,0,0,1,1.792,1.648,15.335,15.335,0,0,1,1.4,1.741,13.591,13.591,0,0,1,2.021,4.2,10.728,10.728,0,0,1,.369,3.984,8.181,8.181,0,0,1-1.473,3.883c-.066.1-.14.194-.214.288a1.035,1.035,0,0,1-.124.14,7.894,7.894,0,0,1-3.416,2.39,10.439,10.439,0,0,1-3.949.606,13.646,13.646,0,0,1-4.52-.948,14.429,14.429,0,0,1-2.324-1.139,15.713,15.713,0,0,1-1.885-1.29,14.631,14.631,0,0,1-1.154-1.014,12.851,12.851,0,0,1-1.03-1.084,14.488,14.488,0,0,1-2.413-3.758,11.729,11.729,0,0,1-1.026-4.17,8.593,8.593,0,0,1,1.1-4.815,7.883,7.883,0,0,1,.626-.909,6.566,6.566,0,0,1,.859-.906,8.553,8.553,0,0,1,4.423-2.079,11.69,11.69,0,0,1,4.291.1,14.781,14.781,0,0,1,4.209,1.535c.33.163.645.361.964.556A17.018,17.018,0,0,1,382.506,263.908Z"
                                          transform="translate(-342.585 -241.786)" fill="#c0433a"/>
                                    <g id="Group_14201" data-name="Group 14201"
                                       transform="translate(21.974 18.884)">
                                        <path id="Path_79856" data-name="Path 79856"
                                              d="M417.15,287.714a31.173,31.173,0,0,1-1.084-3.451,29.7,29.7,0,0,1-.684-3.552c-.074-.6-.194-1.193-.225-1.8s-.07-1.2-.086-1.811-.031-1.2-.031-1.807c.019-.6.066-1.209.132-1.807.113.6.179,1.193.268,1.788s.19,1.185.268,1.776c.159,1.185.264,2.371.482,3.544l.245,1.772c.054.595.155,1.181.256,1.772C416.886,285.316,417.026,286.51,417.15,287.714Z"
                                              transform="translate(-395.429 -268.601)" fill="#9c2622"/>
                                        <path id="Path_79857" data-name="Path 79857"
                                              d="M404.107,265.11c.054.843.14,1.679.21,2.515s.074,1.671.171,2.5c.124.828.21,1.66.311,2.487.082.832.171,1.66.334,2.479.257,1.648.49,3.3.84,4.94l.937,4.951c-.311-.781-.575-1.582-.867-2.379-.264-.8-.47-1.617-.692-2.433s-.451-1.628-.595-2.46l-.427-2.5a23.779,23.779,0,0,1-.292-2.518c-.058-.843-.132-1.687-.167-2.53A46.652,46.652,0,0,1,404.107,265.11Z"
                                              transform="translate(-388.6 -263.478)" fill="#9c2622"/>
                                        <path id="Path_79858" data-name="Path 79858"
                                              d="M393.083,261.16c.031,1.873.171,3.723.276,5.573.027.925.175,1.842.28,2.763.12.917.167,1.842.334,2.755.334,1.819.563,3.657.991,5.464.2.906.35,1.827.564,2.728s.431,1.811.61,2.732c-.354-.863-.661-1.745-.995-2.623-.307-.882-.54-1.788-.8-2.689a49.708,49.708,0,0,1-1.181-5.5c-.152-.925-.2-1.866-.3-2.8a21.165,21.165,0,0,1-.136-2.806l.062-2.81A26.892,26.892,0,0,1,393.083,261.16Z"
                                              transform="translate(-381.781 -261.063)" fill="#9c2622"/>
                                        <path id="Path_79859" data-name="Path 79859"
                                              d="M381.989,260.91c.047.9.039,1.8.062,2.685l.187,2.67c.054,1.776.369,3.533.556,5.3.066.886.3,1.753.431,2.631.159.874.268,1.761.463,2.631.42,1.729.719,3.5,1.127,5.247a49.612,49.612,0,0,1-1.749-5.1c-.268-.859-.4-1.753-.6-2.631-.159-.886-.4-1.761-.478-2.658a36.862,36.862,0,0,1-.373-5.394l.039-2.7C381.767,262.69,381.853,261.8,381.989,260.91Z"
                                              transform="translate(-374.982 -260.91)" fill="#9c2622"/>
                                        <path id="Path_79860" data-name="Path 79860"
                                              d="M372.723,281.893a29.371,29.371,0,0,1-1.174-3.8c-.171-.641-.346-1.283-.455-1.935l-.268-1.97-.225-1.978c-.016-.665-.023-1.329-.016-1.994a24.663,24.663,0,0,1,.253-3.968l.385,3.933.148,1.955.264,1.943.222,1.951c.062.653.229,1.286.307,1.939C372.373,279.273,372.536,280.579,372.723,281.893Z"
                                              transform="translate(-368.249 -264.175)" fill="#9c2622"/>
                                        <path id="Path_79861" data-name="Path 79861"
                                              d="M398.451,308.519l-1.831.21-1.819.14c-.606.043-1.213.082-1.815.159l-1.811.163c-1.213.054-2.41.241-3.622.346l-3.653.311c.579-.21,1.17-.373,1.757-.56.595-.14,1.2-.268,1.8-.385a26.237,26.237,0,0,1,3.645-.529,29.792,29.792,0,0,1,3.677-.136A34.979,34.979,0,0,1,398.451,308.519Z"
                                              transform="translate(-376.391 -289.829)" fill="#9c2622"/>
                                        <path id="Path_79862" data-name="Path 79862"
                                              d="M373.43,300.11c1.593-.587,3.241-.991,4.889-1.419,1.675-.268,3.35-.595,5.048-.7a42.008,42.008,0,0,1,5.091-.128c.847.031,1.695.054,2.542.12.843.1,1.687.175,2.526.3l-5.06.218c-1.683.027-3.354.19-5.025.307-.839.023-1.671.148-2.5.245s-1.667.194-2.507.26l-2.487.42C375.105,299.853,374.266,299.962,373.43,300.11Z"
                                              transform="translate(-369.99 -283.476)" fill="#9c2622"/>
                                        <path id="Path_79863" data-name="Path 79863"
                                              d="M367.22,289.885c.871-.33,1.749-.676,2.647-.933l2.724-.692a20.3,20.3,0,0,1,2.767-.513c.929-.12,1.858-.272,2.79-.358a50.279,50.279,0,0,1,5.624-.1c.937.043,1.873.082,2.8.163.929.128,1.858.225,2.779.377-.937.035-1.869.016-2.8.023l-2.787.074c-.929.019-1.854.016-2.779.109l-2.771.167c-.921.066-1.838.214-2.759.307s-1.846.183-2.752.361C370.881,289.178,369.05,289.477,367.22,289.885Z"
                                              transform="translate(-366.194 -277.006)" fill="#9c2622"/>
                                        <path id="Path_79864" data-name="Path 79864"
                                              d="M364.58,279.161c.828-.334,1.675-.618,2.518-.933.859-.245,1.733-.439,2.6-.661a34.988,34.988,0,0,1,5.309-.863c.89-.124,1.788-.109,2.685-.148.9,0,1.792-.058,2.686-.019a50.964,50.964,0,0,1,5.336.54c-.447.012-.894.019-1.341.016l-1.337.051c-.89.019-1.776.035-2.662.035l-2.65.155c-.882.058-1.768.051-2.647.187-1.757.2-3.525.319-5.262.665-.874.144-1.753.268-2.627.431C366.329,278.8,365.466,279.006,364.58,279.161Z"
                                              transform="translate(-364.58 -270.456)" fill="#9c2622"/>
                                        <path id="Path_79865" data-name="Path 79865"
                                              d="M382.781,266.076c-.326.035-.649.062-.972.082l-.968.113-1.928.155c-1.286.058-2.557.245-3.832.385l-1.916.187c-.633.1-1.267.21-1.9.291l-3.851.49a24.116,24.116,0,0,1,3.735-1.115c.633-.159,1.271-.288,1.908-.431.645-.089,1.294-.155,1.939-.233a24.225,24.225,0,0,1,3.9-.2A27.743,27.743,0,0,1,382.781,266.076Z"
                                              transform="translate(-366.31 -263.884)" fill="#9c2622"/>
                                    </g>
                                </g>
                                <g id="Group_14203" data-name="Group 14203" transform="translate(78.41)">
                                    <path id="Path_79866" data-name="Path 79866"
                                          d="M535.248,41.186c-2.74-4.951-9.942.167-11.768,1.135-4.3,2.281-5.76,1.216-8.6,2.487-3.7,1.66-7.435,5.2-3.218,11.819,3.214,5.045,8.461,2.981,11.076,1.209,3.016-2.048,2.961-4.345,5.6-6.343C531.186,49.332,537.413,45.1,535.248,41.186Z"
                                          transform="translate(-509.793 -38.072)" fill="#22365b"/>
                                    <path id="Path_79867" data-name="Path 79867"
                                          d="M570.009,37.456a6.636,6.636,0,0,0-3.428.494A4.647,4.647,0,0,0,560.6,37.3s3.758-.245,3.879.964-3.622,3.253-3.739,4.936c0,0,3.836-2.577,5.173-1.7s-1.831,5-1.831,5,3.925-3.261,3.607-6.6c0,0,1.2-1.461,2.429-1.333Z"
                                          transform="translate(-540.854 -36.519)" fill="#5b99c9"/>
                                </g>
                                <g id="Group_14214" data-name="Group 14214" transform="translate(164.113 61.807)">
                                    <g id="Group_14204" data-name="Group 14204" transform="translate(3.039 12.796)">
                                        <path id="Path_79868" data-name="Path 79868"
                                              d="M740.962,231.508a1.682,1.682,0,1,1,.354-2.456A1.763,1.763,0,0,1,740.962,231.508Z"
                                              transform="translate(-738.129 -228.475)" fill="#0f213f"/>
                                        <path id="Path_79869" data-name="Path 79869"
                                              d="M742.518,230.752a.566.566,0,1,1,.12-.828A.592.592,0,0,1,742.518,230.752Z"
                                              transform="translate(-740.228 -229.242)" fill="#3a5c9c"/>
                                    </g>
                                    <g id="Group_14205" data-name="Group 14205" transform="translate(0 12.943)">
                                        <path id="Path_79870" data-name="Path 79870"
                                              d="M732.09,231.421a1.309,1.309,0,1,1,1.014-1.648A1.371,1.371,0,0,1,732.09,231.421Z"
                                              transform="translate(-730.311 -228.853)" fill="#0f213f"/>
                                        <path id="Path_79871" data-name="Path 79871"
                                              d="M734.169,230.854a.458.458,0,0,1-.583-.291.463.463,0,0,1,.342-.556.458.458,0,0,1,.583.292A.466.466,0,0,1,734.169,230.854Z"
                                              transform="translate(-732.303 -229.546)" fill="#3a5c9c"/>
                                    </g>
                                    <g id="Group_14206" data-name="Group 14206" transform="translate(1.084 3.203)">
                                        <path id="Path_79872" data-name="Path 79872"
                                              d="M735.339,207.024a1.648,1.648,0,1,1,1.275-2.075A1.725,1.725,0,0,1,735.339,207.024Z"
                                              transform="translate(-733.1 -203.791)" fill="#0f213f"/>
                                        <path id="Path_79873" data-name="Path 79873"
                                              d="M737.943,206.324a.556.556,0,1,1,.431-.7A.586.586,0,0,1,737.943,206.324Z"
                                              transform="translate(-735.599 -204.672)" fill="#3a5c9c"/>
                                    </g>
                                    <g id="Group_14207" data-name="Group 14207" transform="translate(0.64 6.452)">
                                        <path id="Path_79874" data-name="Path 79874"
                                              d="M734.461,216.434a2.152,2.152,0,1,1,2.184-2.309A2.253,2.253,0,0,1,734.461,216.434Z"
                                              transform="translate(-731.957 -212.152)" fill="#22365b"/>
                                        <path id="Path_79875" data-name="Path 79875"
                                              d="M738.5,215.758a.726.726,0,1,1,.738-.777A.762.762,0,0,1,738.5,215.758Z"
                                              transform="translate(-735.44 -213.474)" fill="#5b99c9"/>
                                    </g>
                                    <g id="Group_14208" data-name="Group 14208" transform="translate(1.036 9.857)">
                                        <path id="Path_79876" data-name="Path 79876"
                                              d="M735.481,225.194a2.152,2.152,0,1,1,2.184-2.309A2.253,2.253,0,0,1,735.481,225.194Z"
                                              transform="translate(-732.977 -220.912)" fill="#22365b"/>
                                        <path id="Path_79877" data-name="Path 79877"
                                              d="M739.52,224.518a.726.726,0,1,1,.739-.777A.762.762,0,0,1,739.52,224.518Z"
                                              transform="translate(-736.46 -222.234)" fill="#5b99c9"/>
                                    </g>
                                    <g id="Group_14209" data-name="Group 14209" transform="translate(4.137 7.369)">
                                        <path id="Path_79878" data-name="Path 79878"
                                              d="M744.637,218.572a2.223,2.223,0,1,1,.606-3.23A2.328,2.328,0,0,1,744.637,218.572Z"
                                              transform="translate(-740.955 -214.511)" fill="#0f213f"/>
                                        <path id="Path_79879" data-name="Path 79879"
                                              d="M746.844,217.545a.75.75,0,1,1,.206-1.088A.785.785,0,0,1,746.844,217.545Z"
                                              transform="translate(-743.795 -215.528)" fill="#3a5c9c"/>
                                    </g>
                                    <g id="Group_14210" data-name="Group 14210" transform="translate(9.737 9.631)">
                                        <path id="Path_79880" data-name="Path 79880"
                                              d="M759.047,224.392a2.223,2.223,0,1,1,.606-3.23A2.328,2.328,0,0,1,759.047,224.392Z"
                                              transform="translate(-755.365 -220.331)" fill="#0f213f"/>
                                        <path id="Path_79881" data-name="Path 79881"
                                              d="M761.254,223.355a.75.75,0,1,1,.206-1.088A.785.785,0,0,1,761.254,223.355Z"
                                              transform="translate(-758.206 -221.342)" fill="#3a5c9c"/>
                                    </g>
                                    <g id="Group_14211" data-name="Group 14211" transform="translate(3.708 2.922)">
                                        <path id="Path_79882" data-name="Path 79882"
                                              d="M743.274,208.156a2.585,2.585,0,1,1,2.122-3.175A2.7,2.7,0,0,1,743.274,208.156Z"
                                              transform="translate(-739.851 -203.067)" fill="#22365b"/>
                                        <path id="Path_79883" data-name="Path 79883"
                                              d="M747.5,207.089a.872.872,0,1,1,.715-1.073A.911.911,0,0,1,747.5,207.089Z"
                                              transform="translate(-743.823 -204.477)" fill="#5b99c9"/>
                                    </g>
                                    <g id="Group_14212" data-name="Group 14212" transform="translate(8.298 5.872)">
                                        <path id="Path_79884" data-name="Path 79884"
                                              d="M755.944,215.382a2.585,2.585,0,1,1,.7-3.754A2.706,2.706,0,0,1,755.944,215.382Z"
                                              transform="translate(-751.662 -210.66)" fill="#22365b"/>
                                        <path id="Path_79885" data-name="Path 79885"
                                              d="M758.518,214.2a.872.872,0,1,1,.237-1.267A.916.916,0,0,1,758.518,214.2Z"
                                              transform="translate(-754.97 -211.848)" fill="#5b99c9"/>
                                    </g>
                                    <g id="Group_14213" data-name="Group 14213" transform="translate(5.91 10.424)">
                                        <path id="Path_79886" data-name="Path 79886"
                                              d="M748.021,226.654a2.152,2.152,0,1,1,2.184-2.309A2.253,2.253,0,0,1,748.021,226.654Z"
                                              transform="translate(-745.517 -222.372)" fill="#22365b"/>
                                        <path id="Path_79887" data-name="Path 79887"
                                              d="M752.06,225.978a.726.726,0,1,1,.738-.777A.762.762,0,0,1,752.06,225.978Z"
                                              transform="translate(-749 -223.694)" fill="#5b99c9"/>
                                    </g>
                                    <path id="Path_79888" data-name="Path 79888"
                                          d="M754.293,208.444s2.293-.571,2.783.824a8.093,8.093,0,0,1,.334,3.008s-1.714.214-2.033-1c-.074.4.672,3.043-3.482,2.686-1.131-2.818-.241-3.416-.051-3.774a1.244,1.244,0,0,1-1.294.272,2.61,2.61,0,0,1,.777-3.2C751.922,206.784,753.384,206.772,754.293,208.444Z"
                                          transform="translate(-742.529 -202.54)" fill="#5b99c9"/>
                                    <path id="Path_79889" data-name="Path 79889"
                                          d="M757.4,208.257c.424-.28.847-.548,1.294-.8.225-.124.451-.249.7-.358a3.035,3.035,0,0,1,.416-.148,2.222,2.222,0,0,1,.459-.039c.505-.012.991-.019,1.469-.054a6.006,6.006,0,0,0,1.341-.218l.3,1.127a7.339,7.339,0,0,1-1.617.117c-.513-.012-1.022-.051-1.512-.082a2.46,2.46,0,0,0-1.247.3c-.447.187-.9.4-1.333.618Z"
                                          transform="translate(-746.872 -202.33)" fill="#22365b"/>
                                    <path id="Path_79890" data-name="Path 79890"
                                          d="M749.265,201.29s2.561-1.543,1.749-3.23-3.692-2.511-3.692-2.511a2.452,2.452,0,0,0,.377,2.235c-.424-.292-1.741-2.071-4.866-.863-.117,3.622,2.192,4.85,2.682,5a1.571,1.571,0,0,0-1.4.917,3.3,3.3,0,0,0,3.56,2.161C748.632,204.9,749.949,203.6,749.265,201.29Z"
                                          transform="translate(-737.964 -195.55)" fill="#75add8"/>
                                </g>
                                <g id="Group_14218" data-name="Group 14218" transform="translate(76.058 49.68)">
                                    <g id="Group_14217" data-name="Group 14217">
                                        <g id="Group_14215" data-name="Group 14215">
                                            <path id="Path_79891" data-name="Path 79891"
                                                  d="M503.74,164.655s12.584-.836,16.984.245,4.112,3.28,3.735,4.827a4.075,4.075,0,0,1-4.8,2.6C514.509,171.285,503.74,164.655,503.74,164.655Z"
                                                  transform="translate(-503.74 -164.347)" fill="#c0433a"/>
                                            <path id="Path_79892" data-name="Path 79892"
                                                  d="M560.093,181.929c-.2-.167-.323-.113-.307,0,.459,3.136-.33,5.449-1.881,5.118-1.263-.268.968-3.82.035-4.438-.61-.4-.47,2.215-1.1,1.912-.758-.365-.381-1.372-.214-1.792.867-2.176.416-3.269-2.4-4.912-.746-.435-.117-.987,1.477-.6,4.823,1.185,6.16,5.165,5.484,6.238C560.859,183.993,560.719,182.446,560.093,181.929Z"
                                                  transform="translate(-534.416 -172.138)" fill="#3a5c9c"/>
                                        </g>
                                        <g id="Group_14216" data-name="Group 14216"
                                           transform="translate(3.721 0.535)">
                                            <path id="Path_79893" data-name="Path 79893"
                                                  d="M542.88,167a4.619,4.619,0,0,0-2.705,1.341,4.527,4.527,0,0,0-.785,1.275c-.109.233-.171.49-.272.738-.082.257-.132.517-.225.781-.039-.272-.047-.548-.062-.832a5.544,5.544,0,0,1,.117-.836,3.568,3.568,0,0,1,.789-1.531A3.206,3.206,0,0,1,542.88,167Z"
                                                  transform="translate(-528.913 -166.445)" fill="#9c2622"/>
                                            <path id="Path_79894" data-name="Path 79894"
                                                  d="M530.4,171.5a3.362,3.362,0,0,1-.528-2.41,2.79,2.79,0,0,1,.505-1.189,2.177,2.177,0,0,1,1.018-.738,5.147,5.147,0,0,0-.618.983,4.293,4.293,0,0,0-.315,1.042A11.6,11.6,0,0,0,530.4,171.5Z"
                                                  transform="translate(-523.411 -166.602)" fill="#9c2622"/>
                                            <path id="Path_79895" data-name="Path 79895"
                                                  d="M520.573,165.73a2.289,2.289,0,0,0-.8,1.193,7.861,7.861,0,0,0-.093,1.527,1.9,1.9,0,0,1-.451-.75,1.8,1.8,0,0,1-.035-.921,1.444,1.444,0,0,1,.525-.793A1.193,1.193,0,0,1,520.573,165.73Z"
                                                  transform="translate(-516.879 -165.724)" fill="#9c2622"/>
                                            <path id="Path_79896" data-name="Path 79896"
                                                  d="M513.966,165.739a1.716,1.716,0,0,0-.043.435l-.012.361a2.431,2.431,0,0,1-.194.847.988.988,0,0,1-.4-.89.963.963,0,0,1,.175-.5A.584.584,0,0,1,513.966,165.739Z"
                                                  transform="translate(-513.315 -165.733)" fill="#9c2622"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="4.004" cy="4.004" r="4.004"
                                transform="translate(554.484 8589.714)" fill="#ed0f68"/>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Nutrients are essential to your health. While it’s best to get them from food, even the most
                    balanced diet can lack certain vitamins and minerals. There are many supplements on the market
                    right now that can address any deficiencies and boost your chances of conceiving. The key,
                    though, is in understanding your unique needs and your partner’s unique needs and, from there,
                    find the right supplements to accelerate your fertility journey.
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Learn more about most common vitamins and minerals, typical dosages, and contraindications from
                    the proprietary research on Fertilligence app. that is developed for most common infertility conditions (e.g. PCOS, Endometriosis)
                    or generally healthy adults. Layer in live group classes, one-on-one
                    appointments with Fertilligence nutrition specialists, supplements tracker plus the ability to
                    order a variety of hypoallergenic supplements delivered right to your door.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Stress">
                <h2 class="nbe-tab-title-text">
                    Stress
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="334.014"
                     height="339.945" viewBox="0 0 334.014 339.945">
                    <defs>
                        <linearGradient id="stress-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_9490" data-name="Group 9490" transform="translate(-576 -4895.113)">
                        <circle id="Ellipse_373" data-name="Ellipse 373" cx="21.213" cy="21.213" r="21.213"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 827.984, 5230.624)" opacity="0.49"
                                fill="url(#stress-weawe)"/>
                        <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="133.689" cy="133.936" rx="133.689"
                                 ry="133.936" transform="translate(576 4973.287) rotate(-17)" opacity="0.53"
                                 fill="url(#stress-weawe)"/>
                        <circle id="Ellipse_375" data-name="Ellipse 375" cx="2.467" cy="2.467" r="2.467"
                                transform="translate(873.613 4972.747)" fill="#94daec"/>
                        <g id="Ellipse_376" data-name="Ellipse 376" transform="translate(633.564 4918.365)"
                           fill="none" stroke="#ed0f68" stroke-width="2" stroke-dasharray="6">
                            <circle cx="8.386" cy="8.386" r="8.386" stroke="none"/>
                            <circle cx="8.386" cy="8.386" r="7.386" fill="none"/>
                        </g>
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="3.453" cy="3.453" r="3.453"
                                transform="translate(600.54 5170.634)" fill="#ed0f68"/>
                        <g id="Ellipse_378" data-name="Ellipse 378" transform="translate(878.747 5161.248)"
                           fill="none" stroke="#94daec" stroke-width="2" stroke-dasharray="5">
                            <circle cx="6" cy="6" r="6" stroke="none"/>
                            <circle cx="6" cy="6" r="5" fill="none"/>
                        </g>
                        <g id="Group_9463" data-name="Group 9463" transform="translate(690.977 4990.57)">
                            <path id="Path_74803" data-name="Path 74803"
                                  d="M1636.509,1024.8l-22.718-1.781a12.477,12.477,0,0,1,.642-6.09c1.137-2.52-.428-4.343-1.984-7.347,1.443,1.487,6.415,1.267,9.7.826.4.652,4.454,6.657,5.8,7.624C1629.432,1019.1,1636.053,1020.5,1636.509,1024.8Z"
                                  transform="translate(-1527.696 -905.677)" fill="#feaaaf"/>
                            <path id="Path_74804" data-name="Path 74804"
                                  d="M1502.03,1019.288h-22.718a12.476,12.476,0,0,1,.642-6.09c1.137-2.52,3.118-5.226,1.561-8.228,1.443,1.487,6,1.324,9.288.883.4.652-1.519,4.917,2.666,8.45C1494.864,1015.48,1501.571,1014.987,1502.03,1019.288Z"
                                  transform="translate(-1419.898 -901.948)" fill="#feaaaf"/>
                            <path id="Path_74805" data-name="Path 74805"
                                  d="M1293.689,654.849s-10.819-3.69-14.972,7.3c-19.814,16.049-48.148,57.037-50.54,59.9-4.79,5.738-1.089,13.726,18.5,13.535,11.45-.111,18.459-5.37,21.6-10.1.837-1.259,3.91-7,7.676-14.693-.113,7.724-.159,13.323-.159,13.323-.589,5.475,11.71,3.978,11.71,3.978C1308.359,658.333,1293.689,654.849,1293.689,654.849Z"
                                  transform="translate(-1215.328 -618.249)" fill="#04000e"/>
                            <path id="Path_74806" data-name="Path 74806"
                                  d="M1237.132,477.023a12.567,12.567,0,0,0-4.922-4.865,3.184,3.184,0,0,1,1.571.233c-.871-.791-3.671-1.278-3.671-1.278-9.974-14.194-25.357,4.189-28.156,8.979s-6.315,10.1-15.793,9.732c-18.648-.734-18.621,17.624-16.019,27.625,1.376,5.287,9.74,17.651,9.74,17.651,2.151-3.944,20.964-22.011,33.851-21.889,4.328-1.747,8.9-6.892,9.254-7.3-3.386,4.24-5.843,6.245-7.481,7.2C1227.754,511.216,1240.186,483.128,1237.132,477.023Z"
                                  transform="translate(-1168.913 -465.831)" fill="#0a0909"/>
                            <path id="Path_74807" data-name="Path 74807"
                                  d="M1347.979,627.317c.035.048-1.683,6.407-6.85,3.617-3.39-1.831-8.832-9.644-6.736-12.291,1-1.259,5.387-3.65,9.96-11.744l.548.474,9.228,7.982s-2.1,3.138-3.864,6.218C1348.785,624.159,1347.545,626.7,1347.979,627.317Z"
                                  transform="translate(-1302.394 -579.944)" fill="#feaaaf"/>
                            <path id="Path_74808" data-name="Path 74808"
                                  d="M1389.6,520.476s.172-6.56,2.112-10.968c1.385-3.147,9.8-12.612,19.273-4.089a17.128,17.128,0,0,1,4.406,6.187c1.246,3.061,2.3,8.576-7.462,15.212l-3.013,2.434Z"
                                  transform="translate(-1347.43 -495.047)" fill="#0a0909"/>
                            <path id="Path_74809" data-name="Path 74809"
                                  d="M1324.69,626.392s3.39.646,4.823-1.275,4.553-5.985,5.284-3.652,7.613,9.111,9.2,9.289,2.708.623,1.808,1.448-.526,4.128-1.425,4.427S1326.765,626.208,1324.69,626.392Z"
                                  transform="translate(-1294.923 -591.158)" fill="#fb5d9c"/>
                            <path id="Path_74810" data-name="Path 74810"
                                  d="M1397.5,554.6s-13.309-8.6-7.823-16.81,7.464-14.842,16.193-9.7,8.27,9.371,7.1,12.554S1401.1,556.627,1397.5,554.6Z"
                                  transform="translate(-1346.419 -514.732)" fill="#feaaaf"/>
                            <path id="Path_74811" data-name="Path 74811"
                                  d="M1229.957,659.517s-22.537-16.607-30.425-10.351c-11.633,9.226-9.308,40.374-12.01,44.427s-17.927,33.115,6.835,36.073,30.467-12.656,31.592-24.363S1229.957,659.517,1229.957,659.517Z"
                                  transform="translate(-1178.221 -612.994)" fill="#fb5d9c"/>
                            <path id="Path_74812" data-name="Path 74812"
                                  d="M1277.549,708.142s-6.489,35.874,6.371,45.675S1303.254,707.031,1277.549,708.142Z"
                                  transform="translate(-1255.466 -661.827)" fill="#f1468a"/>
                            <path id="Path_74813" data-name="Path 74813"
                                  d="M1352.21,665.7s.246-4.192,3.946-2.589,10.541,4.007,13.191,3.021-4.263,12.266-10.577,7.829S1352.21,665.7,1352.21,665.7Z"
                                  transform="translate(-1317.184 -625.12)" fill="#f1468a"/>
                            <path id="Path_74814" data-name="Path 74814"
                                  d="M1408.715,529.174s-10.051,7.2-16.535,4.92-7.89-5.375-7.89-5.375a18.856,18.856,0,0,0,11.324-5.821S1409.064,522.773,1408.715,529.174Z"
                                  transform="translate(-1343.135 -511.994)" fill="#0a0909"/>
                            <path id="Path_74815" data-name="Path 74815"
                                  d="M1601.78,800.47a7.373,7.373,0,0,1,4.083,8.068c-1.013,5.849-3.04,3.888-3.04,3.888Z"
                                  transform="translate(-1519.065 -736.525)" fill="#feaaaf"/>
                            <path id="Path_74816" data-name="Path 74816"
                                  d="M1496.851,554.792s1.252,3.952.508,6.48-3.328,7.024-1.978,7.716c0,0,7.1-4.718,6.524-10.462C1501.3,552.436,1496.851,554.792,1496.851,554.792Z"
                                  transform="translate(-1432.688 -537.43)" fill="#0a0909"/>
                            <path id="Path_74817" data-name="Path 74817"
                                  d="M1261.3,636.663a.007.007,0,0,0,0,0c-1-2.887-3.2-4.672-6.982-4.886-16.519-.934-56.231,68.479-59.24,72.085-4.791,5.738-1.089,13.726,18.5,13.535,11.45-.111,15.967-5.593,19.107-10.321a343.553,343.553,0,0,0,19.854-35.739c6.711,15.988,20.769,37.09,20.769,37.09,2.089,5.094,11.473-1.7,11.473-1.7C1262.29,637.584,1261.3,636.663,1261.3,636.663Z"
                                  transform="translate(-1188.552 -600.062)" fill="#130536"/>
                            <path id="Path_74818" data-name="Path 74818"
                                  d="M1270.87,659.475s-5.937,9.17,12.526,17.584,20.635,10.466,24.235,11.219c5.608,1.169,27.155,1.005,27.155,1.005s.566-3.417-1.418-4.571c-3.178-1.848-21.53-4.848-24-5.838S1280.52,649.54,1270.87,659.475Z"
                                  transform="translate(-1250.652 -620.767)" fill="#feaaaf"/>
                            <path id="Path_74819" data-name="Path 74819"
                                  d="M1268.955,647.83s9.43.38,29.1,18.5c0,0,3.01,3.656,4.508,3.9s5.555,1.309,5.642,2.343-5,13.978-11.469,14.347-37.644-22.687-35.517-30.178S1268.955,647.83,1268.955,647.83Z"
                                  transform="translate(-1243.498 -613.053)" fill="#fb5d9c"/>
                        </g>
                        <g id="Group_9466" data-name="Group 9466" transform="translate(678.546 5102.447)">
                            <rect id="Rectangle_707" data-name="Rectangle 707" width="83.161" height="67.021"
                                  transform="translate(0 7.75)" fill="#c6601a"/>
                            <rect id="Rectangle_708" data-name="Rectangle 708" width="75.242" height="67.019"
                                  transform="translate(49.501 7.75)" fill="#f1a34f"/>
                            <g id="Group_9464" data-name="Group 9464" transform="translate(62.03 19.307)">
                                <path id="Path_74820" data-name="Path 74820"
                                      d="M1428.48,1153.684a1.38,1.38,0,1,1,1.38,1.334A1.357,1.357,0,0,1,1428.48,1153.684Z"
                                      transform="translate(-1428.48 -1152.35)" fill="#d3671e"/>
                                <path id="Path_74821" data-name="Path 74821"
                                      d="M1693.31,1153.684a1.38,1.38,0,1,1,1.38,1.334A1.358,1.358,0,0,1,1693.31,1153.684Z"
                                      transform="translate(-1642.705 -1152.35)" fill="#d3671e"/>
                                <path id="Path_74822" data-name="Path 74822"
                                      d="M1428.48,1374.624a1.38,1.38,0,1,1,1.38,1.334A1.356,1.356,0,0,1,1428.48,1374.624Z"
                                      transform="translate(-1428.48 -1331.071)" fill="#d3671e"/>
                                <path id="Path_74823" data-name="Path 74823"
                                      d="M1693.31,1374.624a1.38,1.38,0,1,1,1.38,1.334A1.356,1.356,0,0,1,1693.31,1374.624Z"
                                      transform="translate(-1642.705 -1331.071)" fill="#d3671e"/>
                            </g>
                            <g id="Group_9465" data-name="Group 9465" transform="translate(7.831 19.307)">
                                <path id="Path_74824" data-name="Path 74824"
                                      d="M1144.84,1153.684c0-.736.382-1.334.854-1.334s.854.6.854,1.334-.382,1.334-.854,1.334S1144.84,1154.419,1144.84,1153.684Z"
                                      transform="translate(-1144.84 -1152.35)" fill="#b25618"/>
                                <path id="Path_74825" data-name="Path 74825"
                                      d="M1308.88,1153.684c0-.736.382-1.334.854-1.334s.854.6.854,1.334-.382,1.334-.854,1.334S1308.88,1154.419,1308.88,1153.684Z"
                                      transform="translate(-1277.534 -1152.35)" fill="#b25618"/>
                                <path id="Path_74826" data-name="Path 74826"
                                      d="M1144.84,1374.624c0-.738.382-1.334.854-1.334s.854.6.854,1.334-.382,1.334-.854,1.334S1144.84,1375.359,1144.84,1374.624Z"
                                      transform="translate(-1144.84 -1331.071)" fill="#b25618"/>
                                <path id="Path_74827" data-name="Path 74827"
                                      d="M1308.88,1374.624c0-.738.382-1.334.854-1.334s.854.6.854,1.334-.382,1.334-.854,1.334S1308.88,1375.359,1308.88,1374.624Z"
                                      transform="translate(-1277.534 -1331.071)" fill="#b25618"/>
                            </g>
                            <path id="Path_74828" data-name="Path 74828"
                                  d="M1103.86,1059.171s11.3-10.437,18.757-7.255c9.812,4.19,33.018,3.023,38.873,1.941s51.585,2.148,67.113,5.205Z"
                                  transform="translate(-1103.86 -1051.313)" fill="#d3671e"/>
                            <path id="Path_74829" data-name="Path 74829"
                                  d="M1438.142,1141.309v17.58H1362.9V1091.87h12.623l.249.107S1382.526,1137.438,1438.142,1141.309Z"
                                  transform="translate(-1313.401 -1084.12)" fill="#e78b37"/>
                        </g>
                        <g id="Group_9483" data-name="Group 9483" transform="translate(803.144 5096.014)">
                            <path id="Path_74866" data-name="Path 74866"
                                  d="M1773.554,1121.1s-14.478-2.052-15.319-4.389c0,0,1.005-2.112-.583-2.664-.426-.149-1.143-.42-1.462-.017l.019,4.309a25.627,25.627,0,0,1,2.436,2.747c.484.677,9.837,4.594,9.837,4.594Z"
                                  transform="translate(-1756.136 -1095.439)" fill="#163560"/>
                            <path id="Path_74867" data-name="Path 74867"
                                  d="M1926.655,1264.256c1.372-1.983-.054-15.994-9.936-11.74-2.1.635-4.624,2.153-7.649,4.924,0,0-4.341,10.231,12.78,17a3.43,3.43,0,0,1,1.937,2.293c.241,1.559.512,8.6-.068,8.813s-1.441-.594-2.068.294a3.8,3.8,0,0,0-.407,2.354h6.222s2.973-15.8,2.807-17.056S1925.027,1266.61,1926.655,1264.256Z"
                                  transform="translate(-1879.405 -1206.989)" fill="#163560"/>
                            <path id="Path_74868" data-name="Path 74868"
                                  d="M1860.029,1017.65s3.292,6.906,1.475,8.975l-5.115-4.108S1856.362,1020.482,1860.029,1017.65Z"
                                  transform="translate(-1837.189 -1017.65)" fill="#233862"/>
                            <path id="Path_74869" data-name="Path 74869"
                                  d="M1814.029,1058.662c-1.343-2.436-3.357-6.507-.7-8.169a3.064,3.064,0,0,0,.088-5.077c-2.757-1.489-5.559.394-6.872,2.232-2.5,3.5.82,8.964.82,8.964,3.138,6.755-3.321,10.271-6.434,11.524a36.375,36.375,0,0,0-5.243-6.178c-1.072-1.017-2.058-1.846-2.883-2.551-8.765-7.493-6.642-10.233-8.723-13.6-.409-.667-2.022-2.48-2.45-3.063s-.577-2.625-.629-4.429a3.04,3.04,0,0,0,1.093-1.779,1.785,1.785,0,0,1-.008.772c1.02-.829.789-2.738.789-2.738a2.262,2.262,0,0,1,.315.867,7.632,7.632,0,0,0-1.33-5.411c.323-2.79-1.991-7.643-1.991-7.643a52.927,52.927,0,0,0,.514,5.432,7.362,7.362,0,0,0-2.043-1.5c-1.829-.908-4.326-1.762-6.971.831a5.238,5.238,0,0,1-3.218.957c-.462-.059-1.515,2.257-1.557,2.572a6.992,6.992,0,0,0,2.654,7.028,2.984,2.984,0,0,1,0,2.564s.422-.172.474-.308a3.422,3.422,0,0,1-.866,1.783,1.8,1.8,0,0,0,.407-.1,11.66,11.66,0,0,0-2.494,6.824c-4.2.034-8.192-.222-8.58-1.3,0,0,.906-1.773-.583-2.664a3.323,3.323,0,0,0-1.632-.378l-.073,4.838a15.071,15.071,0,0,1,2.7,2.579c.3.421,6.176,3.073,10.571,5.016,2.559,11.091,10.776,17.5,13.5,19.361.391,3.388,2.4,7.8,8.175,12.931a3.432,3.432,0,0,1,1.032,2.819c-.31,1.546-2.476,8.251-3.094,8.251s-2.683-.894-3.575-.275.344,3.025.344,3.025h6.294s7.771-12.791,8.047-14.028-3.369-6.052-1.032-7.7c1-.707,2.394-4.588,2.106-8.152C1804.037,1071.726,1818.234,1066.286,1814.029,1058.662Z"
                                  transform="translate(-1755.91 -1021.476)" fill="#2b478b"/>
                            <path id="Path_74870" data-name="Path 74870"
                                  d="M1862.24,1027.247l5.119,4.109a2.416,2.416,0,0,0,.514-1.332c.323-2.79-1.991-7.643-1.991-7.643C1862.215,1025.21,1862.24,1027.247,1862.24,1027.247Z"
                                  transform="translate(-1841.922 -1021.476)" fill="#2b478b"/>
                            <path id="Path_74871" data-name="Path 74871"
                                  d="M1816.54,1051.995a.618.618,0,0,1,.589-.046,1.321,1.321,0,0,1-1.219,1.236S1816.239,1052.176,1816.54,1051.995Z"
                                  transform="translate(-1804.445 -1045.349)" fill="#163560"/>
                            <g id="Group_9480" data-name="Group 9480" transform="translate(14.188 9.121)">
                                <path id="Path_74872" data-name="Path 74872"
                                      d="M1830.16,1065.519a20.308,20.308,0,0,1,7.37,5.117h0a21.292,21.292,0,0,0-7.324-5.257Z"
                                      transform="translate(-1830.16 -1065.38)" fill="#163560"/>
                            </g>
                            <g id="Group_9481" data-name="Group 9481" transform="translate(13.791 9.413)">
                                <path id="Path_74873" data-name="Path 74873"
                                      d="M1828.08,1067.059a24.12,24.12,0,0,1,7.053,7.987h0a25.238,25.238,0,0,0-6.961-8.136Z"
                                      transform="translate(-1828.08 -1066.91)" fill="#163560"/>
                            </g>
                            <g id="Group_9482" data-name="Group 9482" transform="translate(13.33 9.82)">
                                <path id="Path_74874" data-name="Path 74874"
                                      d="M1825.67,1069.145a20.323,20.323,0,0,1,4.4,7.821h0a21.273,21.273,0,0,0-4.3-7.926Z"
                                      transform="translate(-1825.67 -1069.04)" fill="#163560"/>
                            </g>
                        </g>
                        <g id="Plant" transform="translate(600.159 5012.376)">
                            <path id="Path-133"
                                  d="M74.833,46.22C66.72,39.3,73.081,35.079,68.955,31.451S65.222,23.4,65.607,16.078,55.454,3.081,57.97.963c1.347-1.134,10.532.809,14.15.54C77.3,1.116,81.164.217,85.473,4.147s5.092,6.463,9.39,9.85,5.839-1.476,11.18,7.376-1.144,24.772-13.6,18.539C90.249,52.279,82.947,53.138,74.833,46.22Z"
                                  transform="translate(-40.413 -0.604)" fill="#53a25b"/>
                            <path id="Combined-Shape"
                                  d="M112.588,28.889l-5.458-.522a.27.27,0,0,1,.051-.537l4.857.464a36.219,36.219,0,0,0-4.959-4.4.27.27,0,1,1,.318-.436,36.723,36.723,0,0,1,5.026,4.456l.477-3.465a.27.27,0,1,1,.534.074l-.537,3.9a53.349,53.349,0,0,1,7.359,10.538l1.12-6.7a.27.27,0,1,1,.532.089l-1.235,7.384a89.46,89.46,0,0,1,5.2,12.086l4.64-9.088a.27.27,0,1,1,.48.246l-4.874,9.547q.573,1.663,1.116,3.4a.27.27,0,1,1-.515.161q-.526-1.687-1.08-3.3l-10.568-3.127a.27.27,0,0,1,.153-.518l10.2,3.017a89.072,89.072,0,0,0-5.271-12.256l-8.445-.858a.27.27,0,0,1,.055-.537l8.083.821A53.089,53.089,0,0,0,112.588,28.889Z"
                                  transform="translate(-74.942 -16.575)" fill="#c9e3c8"/>
                            <path id="Path-132-Copy"
                                  d="M183.237,215.528a.4.4,0,1,1-.807.046q-3.641-64.427-9.949-84.58a.4.4,0,1,1,.772-.242Q179.6,151.017,183.237,215.528Z"
                                  transform="translate(-120.867 -91.551)" fill="#1d8450"/>
                            <path id="Path-133-2" data-name="Path-133"
                                  d="M17.252,4.331C9.138,11.249,15.5,15.472,11.374,19.1S7.641,27.147,8.025,34.472s-10.152,13-7.637,15.116c1.347,1.134,10.532-.809,14.15-.54,5.179.386,9.044,1.286,13.353-2.645s5.092-6.463,9.39-9.85,5.839,1.476,11.18-7.376-1.144-24.772-13.6-18.539C32.668-1.728,25.365-2.587,17.252,4.331Z"
                                  transform="translate(105.325 77.307) rotate(-178)" fill="#53a25b"/>
                            <path id="Path"
                                  d="M5.7,27.4l-5.458.521a.27.27,0,0,0,.051.537l4.856-.464a36.176,36.176,0,0,1-4.959,4.4.27.27,0,0,0,.318.436,36.723,36.723,0,0,0,5.026-4.456l.477,3.465a.27.27,0,1,0,.534-.073l-.537-3.9a53.352,53.352,0,0,0,7.359-10.538l1.12,6.7a.27.27,0,1,0,.532-.089l-1.235-7.384a89.477,89.477,0,0,0,5.2-12.085l4.64,9.088a.27.27,0,1,0,.48-.246L19.234,3.754q.573-1.663,1.116-3.4a.27.27,0,1,0-.515-.161q-.526,1.687-1.08,3.3L8.188,6.614a.27.27,0,0,0,.153.518l10.2-3.017a89.027,89.027,0,0,1-5.271,12.256l-8.445.858a.27.27,0,0,0,.054.537l8.083-.821A53.1,53.1,0,0,1,5.7,27.4Z"
                                  transform="translate(90.915 66.562) rotate(-178)" fill="#c9e3c8"/>
                            <path id="Path-132-Copy-2" data-name="Path-132-Copy"
                                  d="M10.939.445a.4.4,0,1,0-.8-.081Q6.329,38.5.019,58.66A.4.4,0,1,0,.79,58.9Q7.128,38.655,10.939.445Z"
                                  transform="translate(69.238 124.233) rotate(-178)" fill="#1d8450"/>
                            <path id="Path-133-3" data-name="Path-133"
                                  d="M33.956,222.427c-6.094-1.626-4.409-4.223-9.177-9.935-2.753-3.3-6.032-2.7-8.619-5.533s-2.515-9.517-5.1-11.528Q4.935,190.669.292,191.348q5.663-10.355,10.765-11.341c5.1-.986,8.439,2.536,14.992,3.134s5.258-3.165,12.152-.657,2.006,7.689,11.6,9.3,10.665,16.447-3.257,16.8C50.409,220.533,40.05,224.053,33.956,222.427Z"
                                  transform="translate(-0.292 -126.123)" fill="#53a25b"/>
                            <path id="Path-2" data-name="Path"
                                  d="M52.627,208.443l-5.064,2.1a.27.27,0,0,1-.207-.5l4.506-1.872a36.127,36.127,0,0,0-6.442-1.553.27.27,0,0,1,.076-.534,36.686,36.686,0,0,1,6.527,1.572l-1.2-3.284a.27.27,0,1,1,.506-.186l1.356,3.7a53.272,53.272,0,0,1,11.44,5.846L61.969,207.3a.27.27,0,1,1,.511-.171l2.373,7.1a89.352,89.352,0,0,1,10.263,8.226l-.166-10.2a.269.269,0,1,1,.539-.009l.174,10.72q1.286,1.2,2.582,2.481a.27.27,0,1,1-.379.384q-1.256-1.242-2.5-2.4l-10.8,2.205a.27.27,0,1,1-.108-.529l10.419-2.128a88.889,88.889,0,0,0-10.4-8.345l-7.859,3.21a.27.27,0,0,1-.2-.5l7.522-3.073a53.037,53.037,0,0,0-11.31-5.817Z"
                                  transform="translate(-31.734 -143.058)" fill="#c9e3c8"/>
                            <path id="Path-3" data-name="Path"
                                  d="M172.346,315.292a.4.4,0,1,1-.8.1q-3.245-25.441-18.2-40.2a.4.4,0,0,1,.568-.576Q169.07,289.588,172.346,315.292Z"
                                  transform="translate(-107.392 -192.423)" fill="#1d8450"/>
                            <rect id="Rectangle" width="43.669" height="12.681"
                                  transform="translate(40.346 120.692)" fill="#e9a080"/>
                            <path id="Rectangle-Copy-12" d="M143.92,445.662H182.2l-5.391,31.567H149.311Z"
                                  transform="translate(-100.878 -312.289)" fill="#ffb899"/>
                        </g>
                        <path id="Path_73677" data-name="Path 73677"
                              d="M400.331,164.312a14.342,14.342,0,0,0-1.9.022,4.8,4.8,0,0,1-4.909-3.246,14.264,14.264,0,0,0-19.62-8.327,5.02,5.02,0,0,1-5.362-.655,15.516,15.516,0,0,0-25.058,8.454,1.752,1.752,0,0,1-1.7,1.375h0a15.084,15.084,0,1,0,6.7,28.6,6.391,6.391,0,0,1,5.75.032,14.254,14.254,0,0,0,15.035-1.358,4.52,4.52,0,0,1,5.46,0,14.258,14.258,0,0,0,13.976,1.841,5.344,5.344,0,0,1,4.431.226,14.257,14.257,0,1,0,7.2-26.968Z"
                              transform="translate(375.241 4786.835)" fill="#c6e7ef"/>
                        <g id="Group_8698" data-name="Group 8698" transform="translate(739.353 4947.72)">
                            <path id="Path_73678" data-name="Path 73678"
                                  d="M481,218.524a.688.688,0,0,1-.378-.115.67.67,0,0,1-.231-.834l3.2-6.971-3.619.137a.661.661,0,0,1-.642-.412.673.673,0,0,1,.159-.748l11.08-10.42a.671.671,0,0,1,1.037.829l-3.95,6.7,3.751-.351a.671.671,0,0,1,.547,1.133L481.49,218.316A.684.684,0,0,1,481,218.524Z"
                                  transform="translate(-479.278 -198.98)" fill="#fff"/>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Women with higher stress levels took 29% longer to get pregnant compared to those who had less.
                    Stress is your body's reaction to a perceived threat, challenge or scare. Chronic, high stress
                    levels can negatively affect health and fertility and can lead to less-than-optimal habits such
                    as increased alcohol use, less restorative sleep, decreased exercise, a weakened immune system
                    as well as sadness, anxiety and irritability, making it harder to connect with your partner.
                    Chronic stress can also affect hormone levels including FSH and LH, which can impact
                    testosterone, estrogen, and progesterone. This, then, can have a negative effect on ovulation
                    and sperm production.

                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    With the Fertilligence app, you’ll learn more about the connection between stress and fertility.
                    Through fertility coaching, live group classes, on-demand yoga and meditation, you’ll learn to
                    curb anxiety and cope with day-to-day stress the way it works for you.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Mood">
                <h2 class="nbe-tab-title-text">
                    Mood
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="342"
                     height="322.204" viewBox="0 0 342 322.204">
                    <defs>
                        <linearGradient id="mood-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                        <clipPath id="moood-clip">
                            <path id="Path_75626" data-name="Path 75626"
                                  d="M1416.472,509.052l11.8,3.23c20.3-13.091,38.162-29.111,48.249-34.17-2.556-.23-31.722-1.964-50.341-.615l-3.714,8.075-.1-7.738c-1.964.21-3.75.464-5.3.774-22.186,4.429-49.77,15.885-56.17,40.059-2.687,10.151,8.655,12,16.151,12.27,15.214.548,31.436-6.524,46.571-15.738Z"
                                  transform="translate(-1360.494 -476.987)"/>
                        </clipPath>
                        <clipPath id="moood-clip-2">
                            <path id="Path_75632" data-name="Path 75632"
                                  d="M1392.553,429.458c-6.194.556-16.194,1.631-20.611-3.944a14.314,14.314,0,0,1-2.484-6.282,44.5,44.5,0,0,1,.092-17.369,10.624,10.624,0,0,1,1.988-4.849,4.3,4.3,0,0,1,4.73-1.456c1.627.687,2.663,2.028,4.369.476,3.052-2.778,3.766-7.932,5.3-11.567,1.115-2.639,3.9-7.7,7.472-7.111,2.432.4,3.23,4.135,5.865,3.96a3.173,3.173,0,0,0,2.242-1.544c3.218-4.7,5.282-13.182,11.543-14.706a4.085,4.085,0,0,1,3.837.837c1.016,1.012,1.21,2.631,2.182,3.682a4.413,4.413,0,0,0,4.746.774,13.785,13.785,0,0,0,4.139-2.933c3.147-2.841,6.536-5.607,10.583-6.869,6.524-2.036,15.072,1.468,11.647,9.547-1.333,3.147-4.786,4.762-8,5.913-2.976,1.063-12.1,4.04-7.845,8.428a16.638,16.638,0,0,1,2.448,2.512c1.254,2,.5,4.8-1.21,6.432a11.205,11.205,0,0,1-6.456,2.611c-2.345.3-4.73.274-7.04.782-1.706.373-3.658,1.472-3.571,3.218.087,1.817,2.266,2.718,3.159,4.306,1,1.786.1,4.159-1.476,5.464a13.387,13.387,0,0,1-5.65,2.274l-5.941,1.381c-2.123.492-4.615,1.333-5.143,3.448-.322,1.29.238,2.615.337,3.94a7.448,7.448,0,0,1-3.726,6.52A16.747,16.747,0,0,1,1392.553,429.458Z"
                                  transform="translate(-1368.647 -359.991)"/>
                        </clipPath>
                        <clipPath id="moood-clip-3">
                            <path id="Path_75655" data-name="Path 75655"
                                  d="M1241.99,314.436l-11.059-5.361c-6.69-23.321-9.6-47.249-13.881-57.745,2.083,1.516,25.285,19.5,38.468,32.829l-2.536,8.559,5.19-5.786c1.345,1.456,2.528,2.833,3.5,4.091,13.845,18.024,27.123,44.928,15.972,67.44-4.682,9.452-14.48,3.349-20.325-1.4-11.865-9.651-19.452-25.726-24.8-42.7Z"
                                  transform="translate(-1217.05 -251.33)"/>
                        </clipPath>
                        <clipPath id="moood-clip-4">
                            <path id="Path_75661" data-name="Path 75661"
                                  d="M1078.136,463.123c6.2.437,16.218,1.325,20.532-4.329a14.387,14.387,0,0,0,2.365-6.325,44.542,44.542,0,0,0-.417-17.361,10.615,10.615,0,0,0-2.075-4.809,4.3,4.3,0,0,0-4.754-1.369c-1.611.718-2.627,2.079-4.357.56-3.1-2.722-3.913-7.861-5.516-11.464-1.162-2.619-4.048-7.623-7.6-6.972-2.424.444-3.151,4.194-5.79,4.071a3.165,3.165,0,0,1-2.27-1.5c-3.306-4.643-5.528-13.079-11.814-14.484a4.092,4.092,0,0,0-3.818.909c-1,1.032-1.159,2.651-2.111,3.722a4.412,4.412,0,0,1-4.73.865,13.771,13.771,0,0,1-4.194-2.853c-3.2-2.782-6.639-5.48-10.71-6.671-6.56-1.913-15.04,1.75-11.464,9.762,1.393,3.119,4.873,4.671,8.111,5.762,3,1.008,12.175,3.813,8,8.282a16.757,16.757,0,0,0-2.4,2.555c-1.214,2.024-.4,4.806,1.329,6.409a11.2,11.2,0,0,0,6.5,2.492c2.35.254,4.734.186,7.052.651,1.714.341,3.682,1.4,3.631,3.151-.052,1.817-2.214,2.762-3.075,4.361-.968,1.806-.024,4.159,1.575,5.437a13.324,13.324,0,0,0,5.691,2.167q2.982.637,5.964,1.27c2.131.452,4.639,1.246,5.206,3.349.345,1.282-.19,2.619-.262,3.944a7.447,7.447,0,0,0,3.845,6.448A16.836,16.836,0,0,0,1078.136,463.123Z"
                                  transform="translate(-1018.563 -394.614)"/>
                        </clipPath>
                    </defs>
                    <g id="Group_20288" data-name="Group 20288" transform="translate(-540.952 -4705.167)">
                        <ellipse id="Ellipse_301" data-name="Ellipse 301" cx="128.836" cy="129.074" rx="128.836"
                                 ry="129.074" transform="translate(551.113 4780.503) rotate(-17)" opacity="0.53"
                                 fill="url(#mood-weawe)"/>
                        <g id="Group_14125" data-name="Group 14125" transform="translate(540.952 4755.906)">
                            <path id="Path_75616" data-name="Path 75616"
                                  d="M1095.324,305.884c-7.075-2.536-14.829-1.81-22.345-1.913s-19.246-1.329-22.075-9.674c-3-8.833,1.345-17.992,1.385-26.916a20.626,20.626,0,0,0-1.092-7.21c-3.94-10.734-17.135-13.337-21.758-24.035-3.452-7.992-1.671-17.536,2.869-24.964,3.944-6.452,9.722-11.528,15.837-15.865,5.568-3.948,9.825-10.329,12.008-16.813,4.079-12.115,1.575-25.357,6.143-37.17,4.1-10.583,11.932-19.543,21.722-24.281,17.083-8.266,37.269-.913,49.448,13.226a37.792,37.792,0,0,0,25.476,12.766c18.559,1.52,37.892-8.567,55.091,2.817,8.761,5.805,14.956,16.091,16.888,26.952,1.087,6.115.96,12.92-1.4,18.694-2.321,5.682-6.329,10.317-9.774,15.226-5.718,8.159-8.849,19.059-3.5,28.246,2.338,4.016,5.718,7.3,8.925,10.671a35.673,35.673,0,0,1,8.417,32.8c-3.206,13.043-13.369,21.607-26.607,23.246-9.8,1.214-20.639-.373-29.52,4.806"
                                  transform="translate(-964.171 -105.311)" fill="none" stroke="#94daec"
                                  stroke-miterlimit="10" stroke-width="1"/>
                            <g id="Group_9723" data-name="Group 9723" transform="translate(195.547 152.474)">
                                <path id="Path_75618" data-name="Path 75618"
                                      d="M1416.472,509.052l11.8,3.23c20.3-13.091,38.162-29.111,48.249-34.17-2.556-.23-31.722-1.964-50.341-.615l-3.714,8.075-.1-7.738c-1.964.21-3.75.464-5.3.774-22.186,4.429-49.77,15.885-56.17,40.059-2.687,10.151,8.655,12,16.151,12.27,15.214.548,31.436-6.524,46.571-15.738Z"
                                      transform="translate(-1360.494 -476.987)" fill="#a3caa2"/>
                                <g id="Group_9722" data-name="Group 9722" transform="translate(0 0)"
                                   clip-path="url(#moood-clip)">
                                    <path id="Path_75619" data-name="Path 75619"
                                          d="M1570.53,500.85c5.1,2.1,24.115,5.639,24.115,5.639"
                                          transform="translate(-1487.183 -491.381)" fill="none" stroke="#e5f4eb"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <g id="Group_9721" data-name="Group 9721" transform="translate(-4.625 -9.638)">
                                        <path id="Path_75620" data-name="Path 75620"
                                              d="M1348.84,531.726c16.928-13.754,36.095-24.531,56.075-33.174,21.317-9.222,43.734-14.151,66.277-19.781"
                                              transform="translate(-1348.84 -468.425)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75621" data-name="Path 75621"
                                              d="M1530.44,476.7c3.778-8.627,14.194-24,14.194-24"
                                              transform="translate(-1458.377 -452.7)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75622" data-name="Path 75622"
                                              d="M1476.33,489.907a164.8,164.8,0,0,1,10.611-29.508"
                                              transform="translate(-1425.739 -457.344)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75623" data-name="Path 75623"
                                              d="M1497.5,525.52c7.456,4.059,28.77,13.615,37.253,14.452"
                                              transform="translate(-1438.508 -496.624)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75624" data-name="Path 75624"
                                              d="M1428.72,558.71c15,8.4,25.956,13.643,37.5,14.73"
                                              transform="translate(-1397.022 -516.643)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75625" data-name="Path 75625"
                                              d="M1416.05,509.1c2.611-11.413,5.123-27.091,12.369-37.38"
                                              transform="translate(-1389.379 -464.172)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Group_9725" data-name="Group 9725" transform="translate(198.782 106.047)">
                                <path id="Path_75627" data-name="Path 75627"
                                      d="M1392.553,429.458c-6.194.556-16.194,1.631-20.611-3.944a14.314,14.314,0,0,1-2.484-6.282,44.5,44.5,0,0,1,.092-17.369,10.624,10.624,0,0,1,1.988-4.849,4.3,4.3,0,0,1,4.73-1.456c1.627.687,2.663,2.028,4.369.476,3.052-2.778,3.766-7.932,5.3-11.567,1.115-2.639,3.9-7.7,7.472-7.111,2.432.4,3.23,4.135,5.865,3.96a3.173,3.173,0,0,0,2.242-1.544c3.218-4.7,5.282-13.182,11.543-14.706a4.085,4.085,0,0,1,3.837.837c1.016,1.012,1.21,2.631,2.182,3.682a4.413,4.413,0,0,0,4.746.774,13.785,13.785,0,0,0,4.139-2.933c3.147-2.841,6.536-5.607,10.583-6.869,6.524-2.036,15.072,1.468,11.647,9.547-1.333,3.147-4.786,4.762-8,5.913-2.976,1.063-12.1,4.04-7.845,8.428a16.638,16.638,0,0,1,2.448,2.512c1.254,2,.5,4.8-1.21,6.432a11.205,11.205,0,0,1-6.456,2.611c-2.345.3-4.73.274-7.04.782-1.706.373-3.658,1.472-3.571,3.218.087,1.817,2.266,2.718,3.159,4.306,1,1.786.1,4.159-1.476,5.464a13.387,13.387,0,0,1-5.65,2.274l-5.941,1.381c-2.123.492-4.615,1.333-5.143,3.448-.322,1.29.238,2.615.337,3.94a7.448,7.448,0,0,1-3.726,6.52A16.747,16.747,0,0,1,1392.553,429.458Z"
                                      transform="translate(-1368.647 -359.991)" fill="#0095a8"/>
                                <g id="Group_9724" data-name="Group 9724" transform="translate(0 0)"
                                   clip-path="url(#moood-clip-2)">
                                    <path id="Path_75628" data-name="Path 75628"
                                          d="M1449.088,355.44c-14.226,8.607-28.519,17.258-41.269,27.928-2.968,2.484-5.849,5.075-8.726,7.663-6.937,6.242-13.944,11.956-20.452,18.655q-10.821,11.137-21.131,22.75"
                                          transform="translate(-1361.929 -357.246)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <path id="Path_75629" data-name="Path 75629"
                                          d="M1431.1,377.77c-2.655,7.46-4.9,28.321-4.178,39.107,0,0,35.337,4.178,46.873-2.532"
                                          transform="translate(-1403.714 -370.715)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <path id="Path_75630" data-name="Path 75630"
                                          d="M1481.562,345.76c-5.631,10.583-10.7,36.392-10.7,36.392s29.123.444,37.829-2.151"
                                          transform="translate(-1430.3 -351.407)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <path id="Path_75631" data-name="Path 75631"
                                          d="M1381.578,432.61c-.318,8.4-.464,19.547,5.075,30.333,0,0,19.059,7.881,33.016,6.532"
                                          transform="translate(-1376.37 -403.793)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                </g>
                            </g>
                            <g id="Group_9726" data-name="Group 9726" transform="translate(201.837 68.525)">
                                <path id="Path_75633" data-name="Path 75633"
                                      d="M1418.53,304.1c-7.972,12.012-27.531,58.86-32.17,89.539"
                                      transform="translate(-1382.386 -288.757)" fill="none" stroke="#a3caa2"
                                      stroke-miterlimit="10" stroke-width="1"/>
                                <path id="Path_75634" data-name="Path 75634"
                                      d="M1469.282,272.175a18.846,18.846,0,0,1,2.687-5c.734-.881,2.428-2.242,3.686-1.552,3.73,2.055-4.206,10.289-5.547,11.524-1.615,1.484-4.587,4.714-4.587,4.714S1467.988,275.3,1469.282,272.175Z"
                                      transform="translate(-1430.134 -265.434)" fill="#a3caa2"/>
                                <path id="Path_75635" data-name="Path 75635"
                                      d="M1463.629,308.9a14.614,14.614,0,0,1,4.02-1.821c.869-.2,2.559-.238,3.008.782,1.337,3.028-7.448,4.373-8.861,4.5-1.7.155-5.056.75-5.056.75S1461.355,310.222,1463.629,308.9Z"
                                      transform="translate(-1424.838 -290.486)" fill="#a3caa2"/>
                                <path id="Path_75636" data-name="Path 75636"
                                      d="M1447.648,292.634a14.679,14.679,0,0,1-1.1-4.274c-.044-.893.21-2.559,1.294-2.825,3.214-.79,3.008,8.1,2.889,9.508-.143,1.7-.143,5.111-.143,5.111S1448.553,295.106,1447.648,292.634Z"
                                      transform="translate(-1418.69 -277.528)" fill="#a3caa2"/>
                                <path id="Path_75637" data-name="Path 75637"
                                      d="M1452.691,330.4a14.666,14.666,0,0,1,3.913-2.04c.857-.246,2.539-.381,3.047.615,1.5,2.948-7.2,4.774-8.6,4.98-1.687.246-5.008,1.024-5.008,1.024S1450.492,331.845,1452.691,330.4Z"
                                      transform="translate(-1418.384 -303.284)" fill="#a3caa2"/>
                                <path id="Path_75638" data-name="Path 75638"
                                      d="M1435.552,315.892a14.6,14.6,0,0,1-1.325-4.21c-.091-.889.068-2.567,1.135-2.893,3.167-.964,3.448,7.921,3.4,9.337-.052,1.7.135,5.111.135,5.111S1436.592,318.309,1435.552,315.892Z"
                                      transform="translate(-1411.245 -291.541)" fill="#a3caa2"/>
                                <path id="Path_75639" data-name="Path 75639"
                                      d="M1441.585,355.93a16.93,16.93,0,0,1,4.468-2.413c.984-.3,2.917-.48,3.516.655,1.774,3.369-8.2,5.615-9.813,5.877-1.936.314-5.746,1.262-5.746,1.262S1439.081,357.629,1441.585,355.93Z"
                                      transform="translate(-1411.127 -318.429)" fill="#a3caa2"/>
                                <path id="Path_75640" data-name="Path 75640"
                                      d="M1421.509,339.791a16.934,16.934,0,0,1-1.6-4.821c-.119-1.02.036-2.956,1.258-3.349,3.627-1.163,4.1,9.055,4.08,10.686-.028,1.96.242,5.877.242,5.877S1422.743,342.553,1421.509,339.791Z"
                                      transform="translate(-1402.602 -305.301)" fill="#a3caa2"/>
                                <path id="Path_75641" data-name="Path 75641"
                                      d="M1429.957,383.694a16.879,16.879,0,0,1,4.365-2.6c.968-.337,2.9-.6,3.54.508,1.916,3.29-7.96,5.956-9.556,6.286-1.921.4-5.686,1.5-5.686,1.5S1427.525,385.5,1429.957,383.694Z"
                                      transform="translate(-1404.257 -335.021)" fill="#a3caa2"/>
                                <path id="Path_75642" data-name="Path 75642"
                                      d="M1408.865,369.17a17,17,0,0,1-1.8-4.75c-.163-1.012-.088-2.956,1.115-3.4,3.576-1.313,4.481,8.877,4.524,10.508.055,1.96.492,5.861.492,5.861S1410.218,371.88,1408.865,369.17Z"
                                      transform="translate(-1394.835 -323.021)" fill="#a3caa2"/>
                                <path id="Path_75643" data-name="Path 75643"
                                      d="M1418.241,414.229a19.386,19.386,0,0,1,4.857-3.246c1.1-.444,3.29-.865,4.095.369,2.4,3.667-8.786,7.317-10.6,7.79-2.183.567-6.44,2.067-6.44,2.067S1415.555,416.448,1418.241,414.229Z"
                                      transform="translate(-1396.736 -352.958)" fill="#a3caa2"/>
                                <path id="Path_75644" data-name="Path 75644"
                                      d="M1392.606,399.864a19.292,19.292,0,0,1-2.349-5.349c-.25-1.155-.278-3.389,1.079-3.968,4.028-1.722,5.675,9.924,5.825,11.8.179,2.25.913,6.7.913,6.7S1394.32,402.9,1392.606,399.864Z"
                                      transform="translate(-1384.655 -340.795)" fill="#a3caa2"/>
                                <path id="Path_75645" data-name="Path 75645"
                                      d="M1406.984,446.262a19.434,19.434,0,0,1,4.591-3.611c1.055-.528,3.214-1.115,4.115.052,2.674,3.468-8.194,7.976-9.968,8.587-2.135.734-6.262,2.56-6.262,2.56S1404.476,448.678,1406.984,446.262Z"
                                      transform="translate(-1390.287 -371.951)" fill="#a3caa2"/>
                                <path id="Path_75646" data-name="Path 75646"
                                      d="M1379.355,435.477a19.5,19.5,0,0,1-2.758-5.151c-.337-1.131-.54-3.357.77-4.04,3.881-2.028,6.425,9.46,6.718,11.313.353,2.23,1.429,6.615,1.429,6.615S1381.3,438.366,1379.355,435.477Z"
                                      transform="translate(-1376.345 -362.313)" fill="#a3caa2"/>
                            </g>
                            <g id="Group_9729" data-name="Group 9729" transform="translate(138.625 62.928)">
                                <path id="Path_75647" data-name="Path 75647"
                                      d="M1241.99,314.436l-11.059-5.361c-6.69-23.321-9.6-47.249-13.881-57.745,2.083,1.516,25.285,19.5,38.468,32.829l-2.536,8.559,5.19-5.786c1.345,1.456,2.528,2.833,3.5,4.091,13.845,18.024,27.123,44.928,15.972,67.44-4.682,9.452-14.48,3.349-20.325-1.4-11.865-9.651-19.452-25.726-24.8-42.7Z"
                                      transform="translate(-1217.05 -251.33)" fill="#a3caa2"/>
                                <g id="Group_9728" data-name="Group 9728" transform="translate(0 0)"
                                   clip-path="url(#moood-clip-3)">
                                    <path id="Path_75648" data-name="Path 75648"
                                          d="M1232.04,303.92c-5.246-1.786-21.96-11.69-21.96-11.69"
                                          transform="translate(-1212.846 -276)" fill="none" stroke="#e5f4eb"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <g id="Group_9727" data-name="Group 9727" transform="translate(-3.095 -1.444)">
                                        <path id="Path_75649" data-name="Path 75649"
                                              d="M1272,368.653c-3.7-21.595-11.064-42.42-20.452-62.17-10.016-21.075-23.706-39.626-37.023-58.793"
                                              transform="translate(-1212.428 -247.69)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75650" data-name="Path 75650"
                                              d="M1287.57,315.681c2.849-9.02,5.143-27.531,5.143-27.531"
                                              transform="translate(-1256.491 -272.095)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75651" data-name="Path 75651"
                                              d="M1314.2,365.059a165.23,165.23,0,0,0,11.492-29.329"
                                              transform="translate(-1272.553 -300.794)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75652" data-name="Path 75652"
                                              d="M1246.976,367.8c-8.322-1.865-30.758-8.734-37.726-13.714"
                                              transform="translate(-1209.25 -311.868)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75653" data-name="Path 75653"
                                              d="M1276.461,438.457c-16.9-3.575-28.646-6.853-38.091-13.666"
                                              transform="translate(-1226.814 -354.513)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                        <path id="Path_75654" data-name="Path 75654"
                                              d="M1339.17,417.674c5.575-10.357,14.043-23.873,15.373-36.444"
                                              transform="translate(-1287.615 -328.239)" fill="none" stroke="#e5f4eb"
                                              stroke-miterlimit="10" stroke-width="1"/>
                                    </g>
                                </g>
                            </g>
                            <g id="Group_9731" data-name="Group 9731" transform="translate(59.862 119.786)">
                                <path id="Path_75656" data-name="Path 75656"
                                      d="M1078.136,463.123c6.2.437,16.218,1.325,20.532-4.329a14.387,14.387,0,0,0,2.365-6.325,44.542,44.542,0,0,0-.417-17.361,10.615,10.615,0,0,0-2.075-4.809,4.3,4.3,0,0,0-4.754-1.369c-1.611.718-2.627,2.079-4.357.56-3.1-2.722-3.913-7.861-5.516-11.464-1.162-2.619-4.048-7.623-7.6-6.972-2.424.444-3.151,4.194-5.79,4.071a3.165,3.165,0,0,1-2.27-1.5c-3.306-4.643-5.528-13.079-11.814-14.484a4.092,4.092,0,0,0-3.818.909c-1,1.032-1.159,2.651-2.111,3.722a4.412,4.412,0,0,1-4.73.865,13.771,13.771,0,0,1-4.194-2.853c-3.2-2.782-6.639-5.48-10.71-6.671-6.56-1.913-15.04,1.75-11.464,9.762,1.393,3.119,4.873,4.671,8.111,5.762,3,1.008,12.175,3.813,8,8.282a16.757,16.757,0,0,0-2.4,2.555c-1.214,2.024-.4,4.806,1.329,6.409a11.2,11.2,0,0,0,6.5,2.492c2.35.254,4.734.186,7.052.651,1.714.341,3.682,1.4,3.631,3.151-.052,1.817-2.214,2.762-3.075,4.361-.968,1.806-.024,4.159,1.575,5.437a13.324,13.324,0,0,0,5.691,2.167q2.982.637,5.964,1.27c2.131.452,4.639,1.246,5.206,3.349.345,1.282-.19,2.619-.262,3.944a7.447,7.447,0,0,0,3.845,6.448A16.836,16.836,0,0,0,1078.136,463.123Z"
                                      transform="translate(-1018.563 -394.614)" fill="#0095a8"/>
                                <g id="Group_9730" data-name="Group 9730" transform="translate(0 0)"
                                   clip-path="url(#moood-clip-4)">
                                    <path id="Path_75657" data-name="Path 75657"
                                          d="M1005.98,390.7c14.385,8.337,28.829,16.714,41.777,27.146,3.016,2.429,5.94,4.964,8.865,7.5,7.052,6.107,14.162,11.694,20.793,18.266q11.024,10.928,21.547,22.345"
                                          transform="translate(-1010.973 -392.253)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <path id="Path_75658" data-name="Path 75658"
                                          d="M1093.145,410.2c2.794,7.409,5.429,28.218,4.909,39.015,0,0-35.245,4.837-46.9-1.655"
                                          transform="translate(-1038.218 -404.015)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <path id="Path_75659" data-name="Path 75659"
                                          d="M1055.986,379.32c5.825,10.476,11.381,36.178,11.381,36.178s-29.1.992-37.857-1.44"
                                          transform="translate(-1025.166 -385.389)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                    <path id="Path_75660" data-name="Path 75660"
                                          d="M1157.038,463.97c.472,8.393.829,19.532-4.508,30.416,0,0-18.9,8.234-32.88,7.147"
                                          transform="translate(-1079.536 -436.448)" fill="none" stroke="#87be94"
                                          stroke-miterlimit="10" stroke-width="1"/>
                                </g>
                            </g>
                            <g id="Group_9732" data-name="Group 9732" transform="translate(103.21 99.031)">
                                <path id="Path_75662" data-name="Path 75662"
                                      d="M1165.38,370.08c11.976,8.028,48.035,43.757,64.11,70.3"
                                      transform="translate(-1150.468 -359.06)" fill="none" stroke="#a3caa2"
                                      stroke-miterlimit="10" stroke-width="1"/>
                                <path id="Path_75663" data-name="Path 75663"
                                      d="M1136.634,346.539a18.785,18.785,0,0,0-4.405-3.583c-1.016-.532-3.1-1.135-4-.016-2.655,3.329,7.837,7.885,9.551,8.508,2.064.75,6.048,2.587,6.048,2.587S1139.031,348.928,1136.634,346.539Z"
                                      transform="translate(-1127.802 -342.308)" fill="#a3caa2"/>
                                <path id="Path_75664" data-name="Path 75664"
                                      d="M1151.728,379.4a14.718,14.718,0,0,0-4.413-.139c-.881.151-2.452.762-2.476,1.877-.072,3.309,8.559,1.175,9.912.75,1.627-.508,4.956-1.254,4.956-1.254S1154.335,379.744,1151.728,379.4Z"
                                      transform="translate(-1138.078 -364.526)" fill="#a3caa2"/>
                                <path id="Path_75665" data-name="Path 75665"
                                      d="M1175.393,352.688a14.7,14.7,0,0,0-.631-4.369c-.3-.837-1.178-2.286-2.277-2.111-3.27.508.333,8.631.988,9.889.786,1.512,2.1,4.663,2.1,4.663S1175.508,355.319,1175.393,352.688Z"
                                      transform="translate(-1153.938 -344.652)" fill="#a3caa2"/>
                                <path id="Path_75666" data-name="Path 75666"
                                      d="M1170.454,395.034a14.568,14.568,0,0,0-4.4-.377c-.885.1-2.492.627-2.575,1.738-.25,3.3,8.48,1.643,9.853,1.294,1.651-.421,5.016-.98,5.016-.98S1173.042,395.522,1170.454,395.034Z"
                                      transform="translate(-1149.32 -373.851)" fill="#a3caa2"/>
                                <path id="Path_75667" data-name="Path 75667"
                                      d="M1195.525,369.482a14.708,14.708,0,0,0-.393-4.4c-.258-.853-1.052-2.345-2.159-2.234-3.294.329-.139,8.639.444,9.928.7,1.556,1.837,4.77,1.837,4.77S1195.493,372.109,1195.525,369.482Z"
                                      transform="translate(-1166.22 -354.696)" fill="#a3caa2"/>
                                <path id="Path_75668" data-name="Path 75668"
                                      d="M1187.824,415.273a16.891,16.891,0,0,0-5.051-.512c-1.02.1-2.877.679-3,1.956-.345,3.794,9.73,2.032,11.317,1.655,1.909-.456,5.79-1.04,5.79-1.04S1190.789,415.88,1187.824,415.273Z"
                                      transform="translate(-1159.147 -385.983)" fill="#a3caa2"/>
                                <path id="Path_75669" data-name="Path 75669"
                                      d="M1217.087,386.253a16.9,16.9,0,0,0-.377-5.063c-.282-.988-1.17-2.714-2.448-2.607-3.794.321-.306,9.936.341,11.432.782,1.8,2.036,5.52,2.036,5.52S1217.008,389.281,1217.087,386.253Z"
                                      transform="translate(-1178.902 -364.185)" fill="#a3caa2"/>
                                <path id="Path_75670" data-name="Path 75670"
                                      d="M1209.615,436.378a16.846,16.846,0,0,0-5.028-.722c-1.024.06-2.9.556-3.075,1.829-.5,3.774,9.639,2.44,11.238,2.131,1.924-.373,5.829-.8,5.829-.8S1212.552,437.108,1209.615,436.378Z"
                                      transform="translate(-1172.251 -398.604)" fill="#a3caa2"/>
                                <path id="Path_75671" data-name="Path 75671"
                                      d="M1240.025,408.494a16.979,16.979,0,0,0-.163-5.075c-.238-1-1.055-2.762-2.338-2.71-3.805.163-.726,9.917-.139,11.436.7,1.833,1.8,5.6,1.8,5.6S1239.819,411.514,1240.025,408.494Z"
                                      transform="translate(-1192.856 -377.533)" fill="#a3caa2"/>
                                <path id="Path_75672" data-name="Path 75672"
                                      d="M1229.619,461.03a19.31,19.31,0,0,0-5.73-1.131c-1.182.008-3.369.464-3.639,1.917-.806,4.306,10.924,3.381,12.782,3.119,2.234-.313,6.742-.567,6.742-.567S1232.948,462.042,1229.619,461.03Z"
                                      transform="translate(-1183.541 -413.237)" fill="#a3caa2"/>
                                <path id="Path_75673" data-name="Path 75673"
                                      d="M1266.09,430.681a19.5,19.5,0,0,0,.115-5.841c-.214-1.163-1.048-3.238-2.52-3.25-4.381-.044-1.425,11.345-.845,13.131.7,2.147,1.734,6.54,1.734,6.54S1265.67,434.137,1266.09,430.681Z"
                                      transform="translate(-1208.341 -390.129)" fill="#a3caa2"/>
                                <path id="Path_75674" data-name="Path 75674"
                                      d="M1253.328,486.022a19.412,19.412,0,0,0-5.627-1.571c-1.179-.083-3.4.206-3.778,1.631-1.135,4.23,10.631,4.214,12.5,4.1,2.254-.139,6.766-.044,6.766-.044S1256.57,487.287,1253.328,486.022Z"
                                      transform="translate(-1197.797 -428.037)" fill="#a3caa2"/>
                                <path id="Path_75675" data-name="Path 75675"
                                      d="M1291.743,458.426a19.474,19.474,0,0,0,.568-5.813c-.123-1.175-.794-3.309-2.262-3.436-4.365-.381-2.3,11.2-1.853,13.024.532,2.194,1.222,6.655,1.222,6.655S1291.057,461.839,1291.743,458.426Z"
                                      transform="translate(-1224.018 -406.763)" fill="#a3caa2"/>
                            </g>
                            <path id="Path_75676" data-name="Path 75676"
                                  d="M1224.65,564.889c-18.242,6.075-38.3,6.178-57.841,6.206q-61.344.083-122.693.163c-19.111.024-38.627,0-56.722-5.337-4.305-1.27-8.655-2.929-11.6-5.932-7.2-7.337-2.206-16.575,5.94-21.337,5.067-2.96,11.147-4.4,17.218-5,6.52-.643,13.674-.377,19.893-2.48,3.651-1.234,4.817-4.052,7.448-6.214,2.488-2.044,5.806-3.174,8.413-5.262,5.639-4.512,9.448-10.631,15.988-14.309,5.424-3.052,12.155-3.968,18.607-3.611a136.039,136.039,0,0,1,22.7,3.194c9.587,2.31,16.964,5.139,27.1,2.083,6.877-2.071,13.662-6.234,20.746-4.762,9.714,2.024,12.825,12.98,21.17,17.742,4.464,2.548,10.663,3.579,15.936,3.3,5.972-.313,12.567-2.421,18.2.314,4.524,2.2,6.587,6.853,10.361,9.936,3.536,2.889,8.353,4.226,13.036,5.357s9.527,2.187,13.444,4.678C1244.3,551.485,1235.344,561.33,1224.65,564.889Z"
                                  transform="translate(-930.812 -339.423)" fill="#58b1ad"/>
                            <path id="Path_75677" data-name="Path 75677"
                                  d="M1044.224,355.523c.393,2.563,2.948,5.794,4.877,5.54a2.721,2.721,0,0,0,2.119-2.175,5.979,5.979,0,0,0-.345-3.175c-.718-2.151-3.968-5-6.186-2.425A2.74,2.74,0,0,0,1044.224,355.523Z"
                                  transform="translate(-974.149 -249.286)" fill="#709d5e"/>
                            <path id="Path_75678" data-name="Path 75678"
                                  d="M1514.746,338.548c2.464-.81,5.226-3.865,4.659-5.726a2.714,2.714,0,0,0-2.5-1.73,5.977,5.977,0,0,0-3.075.865c-2,1.063-4.27,4.738-1.365,6.5A2.716,2.716,0,0,0,1514.746,338.548Z"
                                  transform="translate(-1255.781 -236.509)" fill="#a3caa2"/>
                            <path id="Path_75679" data-name="Path 75679"
                                  d="M1019.417,309.523c.306,2.008,2.306,4.532,3.818,4.337a2.123,2.123,0,0,0,1.659-1.7,4.692,4.692,0,0,0-.27-2.484c-.564-1.682-3.1-3.909-4.841-1.9A2.109,2.109,0,0,0,1019.417,309.523Z"
                                  transform="translate(-959.192 -221.968)" fill="#a3caa2"/>
                            <path id="Path_75680" data-name="Path 75680"
                                  d="M1576.682,412.457c2.028-.127,4.722-1.893,4.663-3.413a2.13,2.13,0,0,0-1.548-1.806,4.7,4.7,0,0,0-2.5.044c-1.726.409-4.171,2.742-2.321,4.655A2.136,2.136,0,0,0,1576.682,412.457Z"
                                  transform="translate(-1293.92 -282.35)" fill="#a3caa2"/>
                            <path id="Path_75681" data-name="Path 75681"
                                  d="M1009.636,338.963c.214,1.393,1.6,3.143,2.647,3.008a1.475,1.475,0,0,0,1.151-1.179,3.251,3.251,0,0,0-.187-1.722c-.389-1.167-2.151-2.71-3.357-1.313A1.445,1.445,0,0,0,1009.636,338.963Z"
                                  transform="translate(-953.299 -240.198)" fill="#a3caa2"/>
                            <path id="Path_75682" data-name="Path 75682"
                                  d="M1561.932,440.2c1.385-.254,3.1-1.69,2.929-2.734a1.473,1.473,0,0,0-1.214-1.115,3.256,3.256,0,0,0-1.718.238c-1.155.425-2.647,2.23-1.218,3.393A1.479,1.479,0,0,0,1561.932,440.2Z"
                                  transform="translate(-1285.36 -299.98)" fill="#709d5e"/>
                            <path id="Path_75683" data-name="Path 75683"
                                  d="M1444.745,249.331c.789-1.167.956-3.393.095-4a1.479,1.479,0,0,0-1.646.087,3.268,3.268,0,0,0-1.032,1.393c-.5,1.123-.258,3.452,1.575,3.246A1.508,1.508,0,0,0,1444.745,249.331Z"
                                  transform="translate(-1214.07 -184.653)" fill="#709d5e"/>
                            <path id="Path_75684" data-name="Path 75684"
                                  d="M1000.229,447.946c1.274.6,3.5.429,3.972-.516a1.476,1.476,0,0,0-.337-1.615,3.233,3.233,0,0,0-1.532-.806c-1.186-.329-3.448.274-2.964,2.052A1.451,1.451,0,0,0,1000.229,447.946Z"
                                  transform="translate(-947.083 -305.174)" fill="#709d5e"/>
                            <path id="Path_75685" data-name="Path 75685"
                                  d="M1518.746,298.41c1.175-.778,2.182-2.77,1.619-3.663a1.467,1.467,0,0,0-1.552-.548,3.245,3.245,0,0,0-1.484.893c-.9.845-1.559,3.091.214,3.6A1.479,1.479,0,0,0,1518.746,298.41Z"
                                  transform="translate(-1259.004 -214.237)" fill="#a3caa2"/>
                            <rect id="Rectangle_789" data-name="Rectangle 789" width="342" height="39.222"
                                  transform="translate(0 199.256)" fill="#fff"/>
                            <g id="Group_10071" data-name="Group 10071" transform="translate(22.531 0)">
                                <ellipse id="Ellipse_424" data-name="Ellipse 424" cx="143.121" cy="4.754"
                                         rx="143.121" ry="4.754" transform="translate(0 207.982)" fill="#231f20"
                                         opacity="0.2"/>
                                <path id="Path_76442" data-name="Path 76442"
                                      d="M1396.659,379.157S1323.112,350.705,1291.7,313.4"
                                      transform="translate(-1145.983 -225.841)" fill="none" stroke="#5e312e"
                                      stroke-miterlimit="10" stroke-width="1"/>
                                <g id="Group_10069" data-name="Group 10069" transform="translate(33.478 0)">
                                    <path id="Path_76443" data-name="Path 76443"
                                          d="M1089.94,92.753c2.076.091,4.56,1.766,5.008,3.837a6.36,6.36,0,0,1-1.572,5.5,7.909,7.909,0,0,1-5.246,2.46,5.419,5.419,0,0,1-2.067-.194c-3.9-1.278-4.044-7.409-1.2-9.774a7.2,7.2,0,0,1,1.429-.9A7.588,7.588,0,0,1,1089.94,92.753Z"
                                          transform="translate(-1053.522 -92.749)" fill="#0a0909"/>
                                    <path id="Path_76444" data-name="Path 76444"
                                          d="M1135.066,343.577c-2.532,15.75-10.508,29.456-16.52,43.992-.976,2.353-1.575,5.678-4.135,6.837a5.1,5.1,0,0,1-2.738.306c-5.678-.726-5.516-6.087-5.361-10.607.2-6.04.953-12.035,1.238-18.067.278-5.869.266-11.972,1.1-17.877.794-5.607,2.02-12.571,6.306-16.659a13.812,13.812,0,0,1,6.127-3.012c3.869-1.02,8.421-1.258,11.444,1.369,3.5,3.04,3.3,8.448,2.7,12.647C1135.181,342.859,1135.125,343.216,1135.066,343.577Z"
                                          transform="translate(-1067.609 -234.511)" fill="#f8a17a"/>
                                    <path id="Path_76445" data-name="Path 76445"
                                          d="M1054.385,486.23a32.467,32.467,0,0,1,6.635-6.952c3.067-2.131,6.155-4.23,9.23-6.345,1.635-1.123,2.52-1.8,4.187-.4a8.013,8.013,0,0,1,2.4,4.024c.631,2.3.262,3.675-1.44,5.151-1.838,1.591-3.492,3.464-5.191,5.2-3.432,3.5-6.809,7.055-10.226,10.567-2.726,2.8-5.524,5.528-8.357,8.222-.9.861-7.452,8.052-8.29,7.75a3.858,3.858,0,0,1-2.162-4.064c.293-2.917,1.992-5.429,3.508-7.845,1.651-2.635,3.183-5.329,4.794-8A79.723,79.723,0,0,1,1054.385,486.23Z"
                                          transform="translate(-1028.333 -321.351)" fill="#f8a17a"/>
                                    <path id="Path_76446" data-name="Path 76446"
                                          d="M1069.765,413.572q1.47-1.458,2.913-2.94c3.421-3.512,6.8-7.067,10.226-10.567,1.7-1.734,3.357-3.607,5.19-5.2a5.193,5.193,0,0,0,1.417-1.794c1.234-1.532,1.75-3.778,2.464-5.5,6.012-14.532,13.988-28.242,16.52-43.992.06-.357.111-.718.163-1.075.6-4.2.8-9.611-2.7-12.647-3.024-2.623-7.576-2.389-11.445-1.369a13.769,13.769,0,0,0-6.127,3.012c-4.29,4.087-5.512,11.055-6.306,16.659-.837,5.9-.821,12.008-1.1,17.877-.286,6.032-1.036,12.032-1.238,18.067a36.653,36.653,0,0,0,.02,4.178q-3.024,2.071-6.04,4.159a32.569,32.569,0,0,0-6.635,6.952,78.421,78.421,0,0,0-4.921,7.309"
                                          transform="translate(-1041.014 -234.507)" fill="#116299"/>
                                    <path id="Path_76447" data-name="Path 76447"
                                          d="M1153.089,337.753c5.048,15.135,4.321,30.976,5.722,46.638.226,2.54,1.234,5.762-.5,7.976a5.116,5.116,0,0,1-2.282,1.54c-5.373,1.984-7.706-2.841-9.662-6.917-2.615-5.444-4.726-11.111-7.266-16.587-2.472-5.329-5.309-10.734-7.3-16.357-1.893-5.337-4.032-12.079-2.123-17.686a13.824,13.824,0,0,1,4.036-5.508c2.956-2.7,6.881-5.012,10.778-4.087,4.508,1.071,6.833,5.964,8.25,9.96C1152.859,337.066,1152.978,337.412,1153.089,337.753Z"
                                          transform="translate(-1081.283 -233.778)" fill="#f8a17a"/>
                                    <path id="Path_76448" data-name="Path 76448"
                                          d="M1177.7,491.263a32.471,32.471,0,0,1-.992-9.559c.365-3.714.77-7.429,1.155-11.143a10.35,10.35,0,0,1,.607-2.976c1.262-3,4.849-3.143,7.083-1.182,1.869,1.635,2.163,3.6,2.321,5.932.5,7.337,1.322,14.647,2.008,21.968.365,3.893.627,7.789.841,11.694.068,1.246,1.3,10.893.528,11.337a3.845,3.845,0,0,1-4.492-.988c-2.028-2.115-2.841-5.036-3.7-7.758-.936-2.964-2-5.881-2.98-8.837A77.516,77.516,0,0,1,1177.7,491.263Z"
                                          transform="translate(-1110.056 -317.344)" fill="#f8a17a"/>
                                    <path id="Path_76449" data-name="Path 76449"
                                          d="M1216.552,613.867c-.175,1,.031,1.952-.806,2.71a5.841,5.841,0,0,1-2.278,1.044,11.429,11.429,0,0,1-3.111.555c-2.424.036-4.71-1.068-7.111-1.417a11.526,11.526,0,0,0-3.746.075c-.869.163-1.722.425-2.6.54a10.065,10.065,0,0,1-3.2-.151c-.766-.147-2.044-.242-2.385-1.091a.543.543,0,0,0-.079-.159.281.281,0,0,0-.322-.044.72.72,0,0,0-.246.242,2.646,2.646,0,0,0-.44,1.73,2.847,2.847,0,0,0,2.25,2.317,7.863,7.863,0,0,0,1.421.31,18.845,18.845,0,0,0,4.726-.032,17.441,17.441,0,0,1,4.651-.318c1.544.218,3.059.579,4.6.786a9.155,9.155,0,0,0,4.484-.365,11.1,11.1,0,0,0,3.262-1.5,9.128,9.128,0,0,0,1.726-1.54,3.283,3.283,0,0,0,.583-3.087,1.429,1.429,0,0,0-1.119-.821.266.266,0,0,0-.167.02A.283.283,0,0,0,1216.552,613.867Z"
                                          transform="translate(-1118.25 -406.945)" fill="#0b2d4e"/>
                                    <path id="Path_76450" data-name="Path 76450"
                                          d="M1197.658,595.193a25.679,25.679,0,0,0,5.813.508,6.243,6.243,0,0,0,2.956-.341,2.152,2.152,0,0,0,1.306-2.417c-.278-.865-1.206-1.3-1.96-1.805a6.7,6.7,0,0,1-2.651-3.695,36.927,36.927,0,0,1-.921-4.563,36.3,36.3,0,0,1-7.655.1c.226,1.262.559,2.9.623,3.325a8.4,8.4,0,0,1-.222,3.881,6.922,6.922,0,0,0-.428,1.575,3.3,3.3,0,0,0,1.972,2.992A7.608,7.608,0,0,0,1197.658,595.193Z"
                                          transform="translate(-1120.84 -388.386)" fill="#ddf1f7"/>
                                    <path id="Path_76451" data-name="Path 76451"
                                          d="M1204.209,601.059c.147.1.286.2.4.266a9.276,9.276,0,0,1,1.27.806,14.57,14.57,0,0,0,5.051,2.94,28.477,28.477,0,0,0,5.21.381,2.041,2.041,0,0,1,1.52.583,1.515,1.515,0,0,1,.274.932,2.624,2.624,0,0,1-.754,1.825,5.179,5.179,0,0,1-1.159.8,10.256,10.256,0,0,1-9.929,1.159,8.566,8.566,0,0,0-3.718-.818c-.782.1-1.5.46-2.278.623a8.979,8.979,0,0,1-2.353.075,31.6,31.6,0,0,1-4.373-.448,2.8,2.8,0,0,1-2.385-2.8,12.325,12.325,0,0,1,1.552-6.694,15.14,15.14,0,0,0,1.972,1.631,6.53,6.53,0,0,0,2.71.679,6.18,6.18,0,0,0,3.5-.409,17.165,17.165,0,0,0,2.4-1.532,1,1,0,0,1,.468-.242A1.141,1.141,0,0,1,1204.209,601.059Z"
                                          transform="translate(-1118.704 -399.128)" fill="#feaaaf"/>
                                    <path id="Path_76452" data-name="Path 76452"
                                          d="M1220.18,596.4c0-.651.417-1.079,1.131-.7a5.454,5.454,0,0,1,1.984,2.611,6.369,6.369,0,0,0,2.08,2.615,1.642,1.642,0,0,1-1.143-.234,9.119,9.119,0,0,1-3.464-2.814,2.973,2.973,0,0,1-.56-1.175A1.634,1.634,0,0,1,1220.18,596.4Z"
                                          transform="translate(-1136.322 -396.031)" fill="#feaaaf"/>
                                    <path id="Path_76453" data-name="Path 76453"
                                          d="M1009.191,580.458a7.947,7.947,0,0,0,.678,1.29,18.972,18.972,0,0,0,3.06,3.6,17.383,17.383,0,0,1,3.23,3.361c.821,1.321,1.524,2.718,2.357,4.032a9.173,9.173,0,0,0,3.159,3.2,11.016,11.016,0,0,0,3.246,1.536,8.995,8.995,0,0,0,2.29.333,2.683,2.683,0,0,0,2.774-2.262c.028-.25-.02-.556-.254-.647-.218-.083-.449.083-.623.242a2.963,2.963,0,0,1-1.9.956,6.251,6.251,0,0,1-2.543-1.222,11.453,11.453,0,0,1-2.425-2.028c-1.583-1.833-2.206-4.3-3.48-6.361a11.533,11.533,0,0,0-2.46-2.821c-.682-.563-1.433-1.048-2.083-1.647a10.134,10.134,0,0,1-1.941-2.548c-.377-.682-1.127-1.722-.694-2.532a.5.5,0,0,0,.071-.163.277.277,0,0,0-.175-.274.665.665,0,0,0-.341-.032,2.631,2.631,0,0,0-1.611.774A2.824,2.824,0,0,0,1009.191,580.458Z"
                                          transform="translate(-1008.856 -384.52)" fill="#0b2d4e"/>
                                    <path id="Path_76454" data-name="Path 76454"
                                          d="M1025.591,565.494a25.762,25.762,0,0,0,3.345,4.782,6.259,6.259,0,0,0,2.159,2.047,2.151,2.151,0,0,0,2.69-.552,4.153,4.153,0,0,0,.127-2.663,6.705,6.705,0,0,1,1.131-4.4,37.6,37.6,0,0,1,2.909-3.639,35.93,35.93,0,0,1-5-5.805c-.825.984-1.865,2.294-2.146,2.611a8.414,8.414,0,0,1-3.119,2.321,7.105,7.105,0,0,0-1.484.683,3.31,3.31,0,0,0-1.028,3.432A7.222,7.222,0,0,0,1025.591,565.494Z"
                                          transform="translate(-1018.637 -371.726)" fill="#ddf1f7"/>
                                    <path id="Path_76455" data-name="Path 76455"
                                          d="M1028.019,575.984c.02.175.032.345.055.48a9.29,9.29,0,0,1,.195,1.492,14.48,14.48,0,0,0,.992,5.762,28.483,28.483,0,0,0,3.055,4.242,2.024,2.024,0,0,1,.528,1.54,1.518,1.518,0,0,1-.54.81,2.594,2.594,0,0,1-1.881.6,5.269,5.269,0,0,1-1.357-.377,10.254,10.254,0,0,1-7.266-6.865,8.558,8.558,0,0,0-1.762-3.373c-.575-.536-1.321-.857-1.94-1.345a8.81,8.81,0,0,1-1.568-1.754,31.35,31.35,0,0,1-2.464-3.643,2.8,2.8,0,0,1,.615-3.627,12.311,12.311,0,0,1,6.127-3.111,15.378,15.378,0,0,0,.016,2.563,6.608,6.608,0,0,0,1.218,2.512,6.2,6.2,0,0,0,2.56,2.417,17.049,17.049,0,0,0,2.71.853.949.949,0,0,1,.484.206A1.033,1.033,0,0,1,1028.019,575.984Z"
                                          transform="translate(-1011.751 -378.693)" fill="#feaaaf"/>
                                    <path id="Path_76456" data-name="Path 76456"
                                          d="M1048.69,583.824c.5-.417,1.1-.373,1.266.417a5.457,5.457,0,0,1-.726,3.2,6.38,6.38,0,0,0-.671,3.274,1.647,1.647,0,0,1-.556-1.028,9.123,9.123,0,0,1-.068-4.46,2.956,2.956,0,0,1,.544-1.182A1.208,1.208,0,0,1,1048.69,583.824Z"
                                          transform="translate(-1032.28 -388.798)" fill="#feaaaf"/>
                                    <path id="Path_76457" data-name="Path 76457"
                                          d="M1131.95,386.687c-.016.357-.032.718-.04,1.075,4.226-9.516,8.912-18.825,11.913-28.758-1.881-8.385-6.6-16.174-13.726-20.9-.568-.377-1.77-1.333-2.476-1.222-.853.135-1.266,1.575-1.5,2.262a20.308,20.308,0,0,0-1.48,6.448,36.431,36.431,0,0,0,2.849,15.194c2.143,4.956,4.782,10.02,4.762,15.555C1132.24,379.791,1132.1,383.239,1131.95,386.687Z"
                                          transform="translate(-1078.691 -240.002)" fill="#084f77"/>
                                    <path id="Path_76458" data-name="Path 76458"
                                          d="M1158.832,227.771c2.333,3.1,5,6.052,7.436,9.075,1.913,2.369,5.2,5.853,3.274,9.1a2.553,2.553,0,0,1-1.155,1.079,3.888,3.888,0,0,1-2.091.064,10.387,10.387,0,0,1-4.072-1.1c-3.674-2.2-6.833-6.115-9.829-9.151q-5.422-5.494-10.69-11.131a13.987,13.987,0,0,1-2.453-3.206,7.216,7.216,0,0,1,1.171-7.885c3.853-4.056,9.472-.083,12.1,3.238,2.341,2.96,3.77,6.488,5.992,9.5C1158.625,227.493,1158.729,227.632,1158.832,227.771Z"
                                          transform="translate(-1087.097 -165.224)" fill="#f8a17a"/>
                                    <path id="Path_76459" data-name="Path 76459"
                                          d="M1206.362,280.287c4.464,1.377,8.7,4.087,12.932,5.841a43,43,0,0,0,6.674,2.25c2.52.583,5.353-.23,7.853-.611a3.834,3.834,0,0,1,1.825.02,3.419,3.419,0,0,1,1.29.944,16.454,16.454,0,0,1,2.548,3.468,2.79,2.79,0,0,1-.8,3.952,6.383,6.383,0,0,1-4.2,2.115,9.59,9.59,0,0,1-4.774-1.6c-1.238-.75-2.214-1.845-3.548-2.44a7.471,7.471,0,0,0-2.317-.3q-3.31-.446-6.6-1.028c-4.381-.77-8.734-1.706-13.056-2.75-3.262-.786-7.42-2.663-7.718-6.555-.309-4.036,4.2-4.452,7.214-3.948A21.957,21.957,0,0,1,1206.362,280.287Z"
                                          transform="translate(-1122.016 -205.375)" fill="#f8a17a"/>
                                    <path id="Path_76460" data-name="Path 76460"
                                          d="M1161.448,414.724c-.1-1.329-.214-2.659-.341-3.984-.643-6.845-1.389-13.682-1.9-20.539.3-1.877-.246-4.012-.4-5.8-1.4-15.667-.675-31.508-5.722-46.638-.115-.345-.234-.686-.353-1.028-1.417-4-3.742-8.889-8.25-9.96-3.893-.929-7.822,1.389-10.778,4.087a13.787,13.787,0,0,0-4.036,5.508c-1.909,5.607.23,12.349,2.123,17.686,1.992,5.623,4.829,11.028,7.3,16.357,2.54,5.48,4.651,11.143,7.266,16.587a31.286,31.286,0,0,0,2.286,4.2q-.363,3.476-.714,6.952a32.494,32.494,0,0,0,.992,9.559,78.114,78.114,0,0,0,2.377,8.484"
                                          transform="translate(-1081.276 -233.782)" fill="#116299"/>
                                    <path id="Path_76461" data-name="Path 76461"
                                          d="M1119.224,118.647c2.373-2.353,4.841-5.1,5.639-8.432.7-2.94,1.627-5.567.083-8.476-1.909-3.591-5.643-5.258-9.508-5.619-4.675-.437-9-.571-13.294,1.734-4.94,2.655-9.119,8.456-8.294,14.274a17.691,17.691,0,0,0,2.738,6.825,30.979,30.979,0,0,0,5.754,6.766c2.6,2.286,5.845,3.754,5.813,7.762a10.364,10.364,0,0,0,4.9-1.778,5.214,5.214,0,0,0,3.024-4.929,18.3,18.3,0,0,1,.714-4.861A7.972,7.972,0,0,1,1119.224,118.647Z"
                                          transform="translate(-1060.06 -94.627)" fill="#0a0909"/>
                                    <path id="Path_76462" data-name="Path 76462"
                                          d="M1140.087,216.832a18.907,18.907,0,0,1-10.551.437c-3.655-.881-8.357-2.929-9.5-6.718a76.943,76.943,0,0,1-2.758-10.167,33.1,33.1,0,0,1,1.544-16.147,42.624,42.624,0,0,1,3.655-7.23,40.371,40.371,0,0,0,3.254-8.127c.111-.357-.048-.2.262-.448a3.712,3.712,0,0,1,3.726-.206,22.583,22.583,0,0,1,3.127,2.071c1.135.746,2.583,1.5,2.643,2.77a3.393,3.393,0,0,1-.222,1.143c-.849,2.643-2.726,6.305-1.222,8.928,1.77,3.079,4.436,5.429,6.805,8.02,2.615,2.857,5.853,6.377,7.091,10.111a9.25,9.25,0,0,1-.21,5.54c-1.218,4.028-2.413,7.849-6.564,9.607Q1140.635,216.641,1140.087,216.832Z"
                                          transform="translate(-1074.023 -138.035)" fill="#f8a17a"/>
                                    <path id="Path_76463" data-name="Path 76463"
                                          d="M1145.186,179.106a48.961,48.961,0,0,1,1.591-4.9,3.291,3.291,0,0,0,.222-1.143c-.059-1.274-1.508-2.024-2.643-2.77a22.924,22.924,0,0,0-3.127-2.071,3.721,3.721,0,0,0-3.726.206c-.31.254-.147.1-.262.448-.4,1.266-.821,2.579-1.3,3.869C1138.424,175.856,1141.674,178.38,1145.186,179.106Z"
                                          transform="translate(-1085.51 -138.031)" fill="#e5785c"/>
                                    <path id="Path_76464" data-name="Path 76464"
                                          d="M1123.835,136.136a20.07,20.07,0,0,1-1.619-5.829c-.786-7.782,6.953-13.214,14.222-10.591a10.555,10.555,0,0,1,5.909,5.337c1.6,3.667,2.7,7.571,5.3,10.7a1.243,1.243,0,0,1,.234.353c.19.492-.278,1-.75,1.23-1.024.5-1.369.734-1.536,1.909a13.413,13.413,0,0,1-1.452,4.6,7.371,7.371,0,0,1-5.234,3.667C1132.311,148.532,1126.561,142.4,1123.835,136.136Z"
                                          transform="translate(-1077.199 -108.612)" fill="#f8a17a"/>
                                    <path id="Path_76466" data-name="Path 76466"
                                          d="M1125.119,136.188a7.7,7.7,0,0,1-.4,4.25c-.2.456-.563.933-1.06.913a1.3,1.3,0,0,1-.762-.385,23.228,23.228,0,0,1-2.623-3.083,9.618,9.618,0,0,1-1.746-3.722,19.468,19.468,0,0,1,1.453-12.492,10.213,10.213,0,0,1,6.912-5.782,13.226,13.226,0,0,1,2.829-.155,18.444,18.444,0,0,1,6.317,1.127,7.436,7.436,0,0,1,2.734,1.774,1.659,1.659,0,0,1,.536,1.155,1.832,1.832,0,0,1-.294.778,9.049,9.049,0,0,1-2.639,2.782c-1.222.869-2.631,1.444-3.861,2.3a5.831,5.831,0,0,0-1.968,2.56c-.468,1.02-.5,2.206-1.119,3.163-.544.837-.933-.623-1.056-.964a3,3,0,0,0-1.536-1.774,2.425,2.425,0,0,0-2.714.722c-1.123,1.337-.762,3.02,0,4.373A9.344,9.344,0,0,1,1125.119,136.188Z"
                                          transform="translate(-1074.733 -106.604)" fill="#0a0909"/>
                                    <path id="Path_76467" data-name="Path 76467"
                                          d="M1147.746,224.893a9.248,9.248,0,0,0,.21-5.54c-1.238-3.734-4.476-7.25-7.091-10.111-1.1-1.2-2.262-2.353-3.373-3.548-3.04.587-7.746-.984-10.175-2.2a15.313,15.313,0,0,1-6.377-5.686,29.948,29.948,0,0,0-2.095,4.524,33.1,33.1,0,0,0-1.544,16.147c1.738,11.051,4.476,22.531,1.678,33.583-.318,1.258-.663,2.619-.087,3.774a4.461,4.461,0,0,0,1.44,1.536,19.921,19.921,0,0,0,6.547,2.722c5.468,1.46,11.44,2.611,17.043,1.206,1.44-.361,2.186-.409,2.413-1.837a32.211,32.211,0,0,0-.1-5.135c-.091-6.778-.484-13.508-.377-20.289C1145.9,230.627,1146.769,228.115,1147.746,224.893Z"
                                          transform="translate(-1074.035 -156.12)" fill="#fb5d9c"/>
                                    <path id="Path_76468" data-name="Path 76468"
                                          d="M1091.091,232.885c-1.9,2.111-3.587,4.436-5.357,6.655-2.42,3.028-4.035,6.54-8.607,6.317a3.513,3.513,0,0,1-2.4-.9c-1.079-1.127-.5-2.432-.163-3.726,1.1-4.143,3.976-8.266,6.059-11.984q3.768-6.732,7.722-13.361a13.921,13.921,0,0,1,2.4-3.246,7.2,7.2,0,0,1,7.9-1.063c4.964,2.575,2.71,9.079.254,12.528C1096.611,227.318,1093.714,229.965,1091.091,232.885Z"
                                          transform="translate(-1048.213 -163.985)" fill="#f8a17a"/>
                                    <g id="Group_10068" data-name="Group 10068" transform="translate(38.021 2.499)">
                                        <g id="Group_10067" data-name="Group 10067">
                                            <path id="Path_76469" data-name="Path 76469"
                                                  d="M1120.074,99.382a9.652,9.652,0,0,0-4.5.179,16.4,16.4,0,0,0-4.158,1.758,15.547,15.547,0,0,0-3.54,2.754,9.64,9.64,0,0,0-2.246,3.794,8.566,8.566,0,0,0-.385,2.171,9.167,9.167,0,0,0,.21,2.206,18.238,18.238,0,0,0,1.591,4.21c.662,1.369,1.389,2.726,1.932,4.167a10.685,10.685,0,0,1,.762,4.512,11.161,11.161,0,0,0-1.036-4.4c-.587-1.4-1.353-2.714-2.072-4.067a17.041,17.041,0,0,1-1.714-4.3,9.829,9.829,0,0,1-.246-2.337,9.09,9.09,0,0,1,.385-2.329,10.24,10.24,0,0,1,2.425-3.988,14.5,14.5,0,0,1,3.71-2.782,16.657,16.657,0,0,1,4.313-1.643A9.326,9.326,0,0,1,1120.074,99.382Z"
                                                  transform="translate(-1104.67 -99.048)" fill="#171717"/>
                                        </g>
                                    </g>
                                    <path id="Path_76470" data-name="Path 76470"
                                          d="M1083.415,288.976c.7,4.694.131,9.444-.068,14.155-.075,1.821.2,3.643.091,5.464a13.133,13.133,0,0,1-.976,4.933,2.162,2.162,0,0,1-2.412,1.119,2.441,2.441,0,0,1-.806-.5,5.344,5.344,0,0,1-1.778-3.591,68.279,68.279,0,0,0-1.178-7.016c-.782-4.381-1.4-8.786-1.9-13.206a16.392,16.392,0,0,1-.107-4.428,8.36,8.36,0,0,1,1.949-3.679,1.14,1.14,0,0,1,.988-.48,4.823,4.823,0,0,1,3.9,1.778A10.423,10.423,0,0,1,1083.415,288.976Z"
                                          transform="translate(-1048.247 -206.742)" fill="#f8a17a"/>
                                    <path id="Path_76471" data-name="Path 76471"
                                          d="M1102,225.261a28.787,28.787,0,0,1,6.547,4.444c.016.016.032.028.048.044a52.479,52.479,0,0,0,4.849-5.627c2.46-3.448,4.714-9.952-.254-12.528a7.215,7.215,0,0,0-7.9,1.064,13.922,13.922,0,0,0-2.4,3.246q-2.369,3.976-4.667,7.992C1099.444,224.392,1100.857,224.693,1102,225.261Z"
                                          transform="translate(-1062.764 -163.995)" fill="#f24e90"/>
                                    <path id="Path_76472" data-name="Path 76472"
                                          d="M1077.237,355.07c-.349,1.448.1,2.794-.957,4a13.625,13.625,0,0,0-1.417,1.948,1.36,1.36,0,0,0-.274.972.751.751,0,0,0,1.27.254,5.094,5.094,0,0,0-.762,1.214,1.3,1.3,0,0,0-.083,1.115.779.779,0,0,0,1.329-.06c-.1.353-.278.678-.373,1.032a1.138,1.138,0,0,0,.143,1.044,1.01,1.01,0,0,0,1.024.238,2.953,2.953,0,0,0,.956-.548c-.226.409-.369.988-.016,1.294.369.317.933.064,1.329-.21a24.878,24.878,0,0,0,2.881-2.655,4.891,4.891,0,0,0,1.659-2.349,4.841,4.841,0,0,0,.012-1.476c-.214-2.325.06-5.369-2.17-6.849-1.341-.893-3.5-1-4.385.583A2,2,0,0,0,1077.237,355.07Z"
                                          transform="translate(-1048.493 -249.964)" fill="#f8a17a"/>
                                </g>
                                <g id="Group_10070" data-name="Group 10070" transform="translate(182.362 134.88)">
                                    <path id="Path_76473" data-name="Path 76473"
                                          d="M1429.5,568.294a17.5,17.5,0,0,0-4.393-9.23,13.917,13.917,0,0,0-3.912-2.81c-1.1-.627-2.254-1.357-1.48-2.976a5.327,5.327,0,0,1,3.107-2.314,33.305,33.305,0,0,1,16.139-1.972c.925.119,2.068.5,2.131,1.437a2.183,2.183,0,0,1-.6,1.365c-3.345,4.444-4.19,8.551-3.643,13.948a9.619,9.619,0,0,0,.818,3.377,10.948,10.948,0,0,0,2.392,2.865l4.238,4.024a8.237,8.237,0,0,0,2.206,1.369,3.136,3.136,0,0,1,.8.52,2.28,2.28,0,0,1,.54,1.679,2.142,2.142,0,0,1-.222.984c-.417.754-1.127.647-1.873.655l-2.67.024a4.7,4.7,0,0,1-2.889-.607,10.1,10.1,0,0,1-2.04-2.476,18.55,18.55,0,0,0-6.143-5.75,5.565,5.565,0,0,1-1.6-1.147A5.679,5.679,0,0,1,1429.5,568.294Z"
                                          transform="translate(-1405.41 -502.668)" fill="#daa979"/>
                                    <path id="Path_76474" data-name="Path 76474"
                                          d="M1501.883,562.785v-.024a7.9,7.9,0,0,0-.25-2.226,10.357,10.357,0,0,0-2.191-3c-.163-.186-3.127-3.4-2.523-3.46a28.228,28.228,0,0,1,12.468,1.492,1.406,1.406,0,0,1,.8.528,1.731,1.731,0,0,1,.171.9c.051,8.369-3.516,21.615-13.282,19.71a4.618,4.618,0,0,1-3.21-2c-.563-.948-.682-2.738.3-3.5s2.587-.159,3.726-.111a4.023,4.023,0,0,0,1.572-.159C1502.45,569.836,1501.927,565.241,1501.883,562.785Z"
                                          transform="translate(-1450.025 -505.793)" fill="#daa979"/>
                                    <path id="Path_76475" data-name="Path 76475"
                                          d="M1533.7,574.392c-2-3.869-3.992-7.75-6.087-11.567-2.067-3.77-3.905-7.742-7.321-10.544-1.857-1.52-4.1-2.651-5.512-4.587q7.226-1.464,14.456-2.924a30.619,30.619,0,0,1,5.425-.762,2.426,2.426,0,0,1,1.178.19,1.79,1.79,0,0,1,.809,1.695,6.128,6.128,0,0,1-.556,1.9c-2.674,6.718-1.94,13.928.972,20.436.829,1.857,1.75,3.849,3.48,5.028,1.179.8,3.452,1.024,3.71,2.738.254,1.69-1.214,2.476-2.667,2.52-.6.02-1.21.04-1.813.056a8.238,8.238,0,0,1-1.77-.071,5.679,5.679,0,0,1-2.778-1.528A8.658,8.658,0,0,1,1533.7,574.392Z"
                                          transform="translate(-1462.902 -499.817)" fill="#ecca9b"/>
                                    <path id="Path_76476" data-name="Path 76476"
                                          d="M1394.572,471.685c-1.377,4.706-2.8,9.508-5.3,13.682a18.185,18.185,0,0,0-2.575,5.857c-.488,2.6-1.353,5.182-2.02,7.738-.178.69-.361,1.381-.48,2.087-.389,2.325.075,4.421.393,6.7.218,1.556.877,3.171,2.377,3.714a3.723,3.723,0,0,0,1.2.155l1.865.036a1.909,1.909,0,0,0,.778-.1,1.6,1.6,0,0,0,.679-1.845,6.041,6.041,0,0,0-1.016-1.861c-.913-1.357-1.853-2.738-1.325-4.4a13.464,13.464,0,0,1,2.333-3.869c1.956-2.571,4.032-5.238,6.885-6.508a29.772,29.772,0,0,1,4.258-1.254,23.049,23.049,0,0,0,9.258-5.119c1.968-1.778,3.31-2.71,5.984-2.563q4.53.25,9.063.389,8.9.274,17.821.127a25.271,25.271,0,0,0,5.659-.536c5.194-1.286,9.123-5.659,11.543-10.424a33.148,33.148,0,0,0,2.869-8.123c.464-2.186.23-5.02,2.377-6.436,1.722-1.135,3.913-.246,5.861.313a16.647,16.647,0,0,0,11.662-.964c1.369-.647,2.873-2.091,2.281-3.571a3.267,3.267,0,0,0-1.448-1.417q-3.059-1.911-6.119-3.817c-1.821-1.135-3.925-2.389-5.079-4.365-1.032-1.762-1.127-3.925-2.448-5.552a7.458,7.458,0,0,0-7.524-2.7c-2.925.79-5.127,3.385-6.806,6.087s-3.056,5.674-5.226,7.932c-4.818,5.016-12.234,5.349-18.932,5.389l-16.579.1c-4.1.024-8.273.032-12.174-1.31-8.575-2.956-14.532-12.972-13.432-22.6-4.932,3.305-7.48,10.262-5.964,16.3s6.96,10.674,12.766,10.857Q1396.31,465.749,1394.572,471.685Z"
                                          transform="translate(-1384.047 -432.65)" fill="#ecca9b"/>
                                    <path id="Path_76477" data-name="Path 76477"
                                          d="M1568.42,485.066l-13.159-10.686-2.012,2.964,14.234,9.734Z"
                                          transform="translate(-1486.107 -457.821)" fill="#5e312e"/>
                                    <path id="Path_76478" data-name="Path 76478"
                                          d="M1545.487,445.853a17.6,17.6,0,0,0-3.044,2.1,32.486,32.486,0,0,1-9.472,5.024c-1.445.48-3.238,1.262-3.2,2.782.032,1.393,1.611,2.151,2.953,2.528,4.552,1.282,9.484,1.845,13.968.349,3.2-1.067,8.528-4.706,8.409-8.655C1554.979,445.976,1548.471,444.432,1545.487,445.853Z"
                                          transform="translate(-1471.943 -440.301)" fill="#daa979"/>
                                </g>
                            </g>
                        </g>
                        <circle id="Ellipse_145" data-name="Ellipse 145" cx="2.377" cy="2.377" r="2.377"
                                transform="translate(837.565 4778.08)" fill="#94daec"/>
                        <g id="Ellipse_150" data-name="Ellipse 150" transform="translate(597.483 4709.146)"
                           fill="none" stroke="#ed0f68" stroke-width="1.5" stroke-dasharray="5">
                            <circle cx="4.992" cy="4.992" r="4.992" stroke="none"/>
                            <circle cx="4.992" cy="4.992" r="4.242" fill="none"/>
                        </g>
                        <circle id="Ellipse_151" data-name="Ellipse 151" cx="3.328" cy="3.328" r="3.328"
                                transform="translate(628.385 4994.392)" fill="#ed0f68"/>
                        <g id="Ellipse_372" data-name="Ellipse 372" transform="translate(859.586 4934.528)"
                           fill="none" stroke="#ed0f68" stroke-width="2" stroke-dasharray="5">
                            <circle cx="4.754" cy="4.754" r="4.754" stroke="none"/>
                            <circle cx="4.754" cy="4.754" r="3.754" fill="none"/>
                        </g>
                        <circle id="Ellipse_149" data-name="Ellipse 149" cx="20.443" cy="20.443" r="20.443"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 806.964, 5015.871)" opacity="0.49"
                                fill="url(#mood-weawe)"/>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    The mind-body connection is an important part of the fertility journey. Your thoughts can impact
                    your emotions, which directly impact your body. The majority of people who struggle with
                    infertility experience a range of emotions including sadness, anxiety, irritability, jealousy,
                    isolation, and loneliness. Although it may feel impossible to maintain a positive attitude,
                    decreasing those feelings can help improve your chances of conception. Research shows that
                    overcoming negative thoughts can be beneficial in the fertility process.

                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Through one-on-one coaching in the Fertilligence app, you’ll learn more about the relationship
                    between mood and fertility as well as the steps and techniques you can use to stay positive.
                    Ongoing live group classes directly in the app can also help boost your mood and alleviate
                    anxiety.

                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Partner-Conection">
                <h2 class="nbe-tab-title-text">
                    Partner Connection
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="341.332"
                     height="341.667" viewBox="0 0 341.332 341.667">
                    <defs>
                        <linearGradient id="partnerC-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_14265" data-name="Group 14265" transform="translate(-562.851 -7625.667)">
                        <g id="Group_14124" data-name="Group 14124" transform="translate(562.851 7625.667)">
                            <g id="Group_9492" data-name="Group 9492" transform="translate(0 0)">
                                <ellipse id="Ellipse_301" data-name="Ellipse 301" cx="136.619" cy="136.871"
                                         rx="136.619" ry="136.871" transform="translate(0 79.887) rotate(-17)"
                                         opacity="0.53" fill="url(#partnerC-weawe)"/>
                                <circle id="Ellipse_145" data-name="Ellipse 145" cx="4" cy="4" r="4"
                                        transform="translate(303.756 88.098)" fill="#ed0f68"/>
                                <g id="Ellipse_150" data-name="Ellipse 150" transform="translate(76.893 31.427)"
                                   fill="none" stroke="#ed0f68" stroke-width="1.5" stroke-dasharray="5">
                                    <circle cx="7.5" cy="7.5" r="7.5" stroke="none"/>
                                    <circle cx="7.5" cy="7.5" r="6.75" fill="none"/>
                                </g>
                                <circle id="Ellipse_151" data-name="Ellipse 151" cx="2.567" cy="2.567" r="2.567"
                                        transform="translate(36.713 300.396)" fill="#ed0f68"/>
                                <g id="Ellipse_372" data-name="Ellipse 372" transform="translate(305.041 265.797)"
                                   fill="none" stroke="#94daec" stroke-width="1" stroke-dasharray="3">
                                    <circle cx="3.849" cy="3.849" r="3.849" stroke="none"/>
                                    <circle cx="3.849" cy="3.849" r="3.349" fill="none"/>
                                </g>
                            </g>
                            <g id="_9919_Converted_" data-name="9919 [Converted]"
                               transform="translate(26.877 17.749)">
                                <g id="plants" transform="translate(0 80.951)">
                                    <g id="Group_13930" data-name="Group 13930" transform="translate(0 93.222)">
                                        <path id="Path_79315" data-name="Path 79315"
                                              d="M271.573,704.907c-7.988-.847-16.112-5.667-18.338-13.385-1.178-4.091-.653-8.677-2.661-12.434-3.274-6.132-11.362-7.225-17.707-10.068-8.793-3.939-15.5-14.423-11.711-23.277,2.621-6.117,9.221-9.506,15.623-11.319s13.2-2.6,19.043-5.786c7.988-4.358,13.412-12.814,21.91-16.076,7.972-3.058,17.348-.729,24.066,4.544s11.04,13.1,13.652,21.224c1.318,4.1,2.266,8.364,4.355,12.127,3.016,5.424,8.112,9.309,12.519,13.679,15.025,14.906,5.02,31.182-13.716,34.669-6,1.115-12.234.128-18.293,1.151C290.58,701.6,281.7,705.982,271.573,704.907Z"
                                              transform="translate(-220.073 -611.198)" fill="#c3f4f7"/>
                                        <g id="Group_13923" data-name="Group 13923"
                                           transform="translate(16.049 42.74)">
                                            <path id="Path_79316" data-name="Path 79316"
                                                  d="M372.3,779.745A153.542,153.542,0,0,0,273.344,752.3c-.68.049-.5,1.09.173,1.045A152.42,152.42,0,0,1,371.7,780.617a.531.531,0,0,0,.6-.872Z"
                                                  transform="translate(-272.915 -751.923)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13924" data-name="Group 13924"
                                           transform="translate(64.944 10.843)">
                                            <path id="Path_79317" data-name="Path 79317"
                                                  d="M448.026,687.767a60.719,60.719,0,0,1-13.02-40.306c.024-.677-1.027-.781-1.054-.1a61.912,61.912,0,0,0,13.263,41.09c.422.537,1.23-.146.811-.683Z"
                                                  transform="translate(-433.905 -646.899)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13925" data-name="Group 13925"
                                           transform="translate(43.151 51.869)">
                                            <path id="Path_79318" data-name="Path 79318"
                                                  d="M396.421,782.016a56.121,56.121,0,0,0-34.241,35.258c-.216.644.777,1.011.993.365a55.17,55.17,0,0,1,33.691-34.663c.641-.237.191-1.194-.443-.96Z"
                                                  transform="translate(-362.15 -781.98)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13926" data-name="Group 13926"
                                           transform="translate(77.746 62.26)">
                                            <path id="Path_79319" data-name="Path 79319"
                                                  d="M477.081,837.427a29.9,29.9,0,0,1,23.675-20.182.53.53,0,0,0-.173-1.045,31.044,31.044,0,0,0-24.495,20.862c-.219.647.775,1.011.993.364Z"
                                                  transform="translate(-476.057 -816.192)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13927" data-name="Group 13927"
                                           transform="translate(94.983 35.94)">
                                            <path id="Path_79320" data-name="Path 79320"
                                                  d="M533.115,729.994a48.7,48.7,0,0,0,3.891,25.245.529.529,0,0,0,.96-.444,47.5,47.5,0,0,1-3.8-24.7.528.528,0,0,0-1.051-.1Z"
                                                  transform="translate(-532.812 -729.533)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13928" data-name="Group 13928"
                                           transform="translate(31.321 44.811)">
                                            <path id="Path_79321" data-name="Path 79321"
                                                  d="M324.232,775a24.651,24.651,0,0,1,17.19-15.195c.656-.167.486-1.209-.173-1.045a25.8,25.8,0,0,0-18.01,15.872.53.53,0,0,0,.993.367Z"
                                                  transform="translate(-323.199 -758.743)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13929" data-name="Group 13929"
                                           transform="translate(41.341 23.71)">
                                            <path id="Path_79322" data-name="Path 79322"
                                                  d="M364.811,710.059a25.478,25.478,0,0,1-7.487-20.23.53.53,0,0,0-1.054-.1A26.544,26.544,0,0,0,364,710.743c.477.48,1.288-.2.808-.683Z"
                                                  transform="translate(-356.192 -689.266)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_13938" data-name="Group 13938" transform="translate(23.482 0)">
                                        <path id="Path_79323" data-name="Path 79323"
                                              d="M249.876,359.43c-3.3-5.4-4.17-12.792-.407-17.88,2-2.7,5.115-4.565,6.5-7.617,2.269-4.984-.92-10.569-2.181-15.9-1.746-7.386,1.6-16.6,8.954-18.472,5.081-1.291,10.363,1.215,14.563,4.349s7.948,7.013,12.738,9.139c6.551,2.91,14.439,2.254,20.546,6.008,5.731,3.523,8.762,10.5,8.683,17.23s-2.907,13.175-6.739,18.7c-1.932,2.785-4.149,5.421-5.5,8.531-1.95,4.483-1.938,9.531-2.563,14.381-2.129,16.537-17.1,18.074-28.255,8.021-3.569-3.216-5.938-7.59-9.479-10.891C261.05,369.732,254.055,366.282,249.876,359.43Z"
                                              transform="translate(-247.004 -299.219)" fill="#bdeef0"/>
                                        <g id="Group_13931" data-name="Group 13931"
                                           transform="translate(16.927 13.857)">
                                            <path id="Path_79324" data-name="Path 79324"
                                                  d="M333.881,420.04a121.753,121.753,0,0,0-30.2-75.014c-.446-.51-1.257.17-.808.683a120.865,120.865,0,0,1,29.971,74.5c.03.68,1.075.5,1.042-.173Z"
                                                  transform="translate(-302.737 -344.845)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13932" data-name="Group 13932"
                                           transform="translate(41.419 29.038)">
                                            <path id="Path_79325" data-name="Path 79325"
                                                  d="M384.39,423.227A47.635,47.635,0,0,1,403.4,395.741c.556-.392-.131-1.2-.683-.808a48.448,48.448,0,0,0-19.319,27.93c-.167.653.826,1.023.993.364Z"
                                                  transform="translate(-383.378 -394.83)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13933" data-name="Group 13933"
                                           transform="translate(2.571 49.297)">
                                            <path id="Path_79326" data-name="Path 79326"
                                                  d="M294.442,468.579a44.321,44.321,0,0,0-38.66-4.55c-.644.222-.194,1.178.443.96a43.254,43.254,0,0,1,37.609,4.459c.577.364,1.185-.5.607-.869Z"
                                                  transform="translate(-255.469 -461.534)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13934" data-name="Group 13934"
                                           transform="translate(21.662 70.126)">
                                            <path id="Path_79327" data-name="Path 79327"
                                                  d="M319.084,532.447a23.4,23.4,0,0,1,23.744,5.1c.489.462,1.3-.216.808-.683a24.5,24.5,0,0,0-25-5.376c-.641.222-.191,1.182.446.96Z"
                                                  transform="translate(-318.326 -530.112)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13935" data-name="Group 13935"
                                           transform="translate(45.624 59.956)">
                                            <path id="Path_79328" data-name="Path 79328"
                                                  d="M411.288,496.705A38.229,38.229,0,0,0,397.3,511.247c-.325.589.541,1.2.869.6a37.256,37.256,0,0,1,13.57-14.187c.574-.349.137-1.312-.446-.96Z"
                                                  transform="translate(-397.224 -496.629)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13936" data-name="Group 13936"
                                           transform="translate(13.503 30.843)">
                                            <path id="Path_79329" data-name="Path 79329"
                                                  d="M292.045,402.656a19.327,19.327,0,0,1,17.755,3.484c.531.425,1.136-.443.6-.869a20.273,20.273,0,0,0-18.533-3.657c-.647.188-.48,1.233.173,1.042Z"
                                                  transform="translate(-291.463 -400.77)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13937" data-name="Group 13937"
                                           transform="translate(31.977 20.463)">
                                            <path id="Path_79330" data-name="Path 79330"
                                                  d="M353.348,381.779A19.845,19.845,0,0,1,362.42,367.5c.571-.367-.118-1.172-.683-.808a20.839,20.839,0,0,0-9.439,14.988c-.091.68.963.777,1.051.1Z"
                                                  transform="translate(-352.292 -366.595)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_13946" data-name="Group 13946"
                                       transform="translate(56.032 37.114)">
                                        <path id="Path_79331" data-name="Path 79331"
                                              d="M317.46,535.621c-8.03-7.544-12.917-19.547-8.954-29.825,2.1-5.452,6.475-10.026,7.4-15.8,1.5-9.415-6.433-17.315-11.016-25.679-6.348-11.59-5-28.613,6.484-35.149,7.933-4.513,17.956-2.752,26.457.568s16.586,8.1,25.612,9.452c12.346,1.856,25.278-2.894,37.269.583,11.247,3.262,19.565,13.579,22.542,24.908s1.218,23.462-2.661,34.511c-1.956,5.57-4.456,11.022-5.288,16.865-1.2,8.428,1.154,16.9,2.348,25.327,4.07,28.744-20.349,38.247-43.72,26.532-7.477-3.748-13.479-10-20.95-13.9C340.983,547.752,327.643,545.191,317.46,535.621Z"
                                              transform="translate(-285.095 -426.456)" fill="#ddf9fd"/>
                                        <g id="Group_13939" data-name="Group 13939"
                                           transform="translate(6.54 24.988)">
                                            <path id="Path_79332" data-name="Path 79332"
                                                  d="M450.086,620.631a209.554,209.554,0,0,0-85.231-111.806c-.562-.368-1.257.434-.689.8a208.667,208.667,0,0,1,84.925,111.36c.209.65,1.2.292,1-.355Z"
                                                  transform="translate(-363.954 -508.73)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13940" data-name="Group 13940"
                                           transform="translate(67.463 30.232)">
                                            <path id="Path_79333" data-name="Path 79333"
                                                  d="M565.613,581.856a82.735,82.735,0,0,1,19.231-54.984c.434-.525-.367-1.212-.8-.689a83.919,83.919,0,0,0-19.48,55.768c.012.68,1.066.583,1.051-.094Z"
                                                  transform="translate(-564.546 -525.996)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13941" data-name="Group 13941" transform="translate(0 81.61)">
                                            <path id="Path_79334" data-name="Path 79334"
                                                  d="M409.131,698.687a76.211,76.211,0,0,0-66.486,10.156.529.529,0,0,0,.6.872,75.293,75.293,0,0,1,65.706-9.986c.647.2.823-.841.182-1.042Z"
                                                  transform="translate(-342.42 -695.162)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13942" data-name="Group 13942"
                                           transform="translate(41.153 112.085)">
                                            <path id="Path_79335" data-name="Path 79335"
                                                  d="M478.746,803.842a41.268,41.268,0,0,1,42.809-2.433c.6.316,1.051-.641.449-.957a42.308,42.308,0,0,0-43.859,2.518.53.53,0,0,0,.6.872Z"
                                                  transform="translate(-477.92 -795.503)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13943" data-name="Group 13943"
                                           transform="translate(82.655 82.779)">
                                            <path id="Path_79336" data-name="Path 79336"
                                                  d="M631.193,699.181a66.729,66.729,0,0,0-16.61,30.739c-.158.662.884.841,1.042.179a65.573,65.573,0,0,1,16.37-30.232c.468-.492-.337-1.178-.8-.686Z"
                                                  transform="translate(-614.567 -699.012)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13944" data-name="Group 13944"
                                           transform="translate(8.987 51.218)">
                                            <path id="Path_79337" data-name="Path 79337"
                                                  d="M372.845,601.319a33.966,33.966,0,0,1,31.583-2.354c.626.267,1.078-.69.449-.957a35.087,35.087,0,0,0-32.634,2.439c-.577.358.024,1.23.6.872Z"
                                                  transform="translate(-372.009 -595.093)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13945" data-name="Group 13945"
                                           transform="translate(41.294 24.769)">
                                            <path id="Path_79338" data-name="Path 79338"
                                                  d="M479.779,537.336a35.032,35.032,0,0,1,8.644-28.458c.453-.51-.352-1.2-.8-.69a36.158,36.158,0,0,0-8.893,29.242c.085.671,1.142.583,1.051-.094Z"
                                                  transform="translate(-478.382 -508.01)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_13964" data-name="Group 13964"
                                       transform="translate(156.121 64.634)">
                                        <path id="Path_79347" data-name="Path 79347"
                                              d="M865.064,555.463c15.11-16.516,35.456-22.114,42.134-23.951,14.685-4.042,24.431-1.194,45.994-6.988a160.306,160.306,0,0,0,21.5-7.453,161.534,161.534,0,0,1-8.209,41.873c-4.1,12.127-10.232,29.305-25.224,46.3-7.651,8.671-19.444,22.038-39.389,27.626-3.806,1.066-37.011,9.931-51.65-7.3C835.273,607.969,848.515,573.549,865.064,555.463Z"
                                              transform="translate(-843.706 -517.07)" fill="#c6f5fa"/>
                                        <g id="Group_13955" data-name="Group 13955"
                                           transform="translate(9.467 13.225)">
                                            <path id="Path_79348" data-name="Path 79348"
                                                  d="M874.951,649.953c11.247-14.991,27.225-25.251,43.334-34.338,16.51-9.315,33.7-17.792,48.142-30.262A81.043,81.043,0,0,0,986.22,560.8c.219-.431.859-.039.644.392-8.407,16.677-23.277,28.689-38.839,38.4-16.048,10.016-33.372,17.889-48.9,28.747-8.838,6.178-17.032,13.351-23.526,22-.288.383-.935,0-.644-.392Z"
                                                  transform="translate(-874.877 -560.614)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13956" data-name="Group 13956"
                                           transform="translate(21.077 36.422)">
                                            <path id="Path_79349" data-name="Path 79349"
                                                  d="M913.157,690.289a78.551,78.551,0,0,0,9.233-52.834c-.085-.474.644-.665.729-.188a79.356,79.356,0,0,1-4.085,42.5,78.418,78.418,0,0,1-5.233,10.912c-.243.419-.887.027-.644-.392Z"
                                                  transform="translate(-913.103 -636.991)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13957" data-name="Group 13957"
                                           transform="translate(21.772 88.824)">
                                            <path id="Path_79350" data-name="Path 79350"
                                                  d="M915.753,809.925a62.9,62.9,0,0,1,46.371,13.531c.373.3-.17.823-.544.519a62.173,62.173,0,0,0-45.834-13.3c-.48.058-.468-.7.006-.75Z"
                                                  transform="translate(-915.392 -809.53)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13958" data-name="Group 13958"
                                           transform="translate(51.287 68.809)">
                                            <path id="Path_79351" data-name="Path 79351"
                                                  d="M1012.935,743.7a51,51,0,0,1,40.163,16.431c.325.358-.216.881-.544.519a50.266,50.266,0,0,0-39.626-16.2c-.483.03-.474-.723.006-.75Z"
                                                  transform="translate(-1012.571 -743.627)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13959" data-name="Group 13959"
                                           transform="translate(76.625 53.431)">
                                            <path id="Path_79352" data-name="Path 79352"
                                                  d="M1096.262,694.555a33.151,33.151,0,0,1,34.523,9.327c.319.361-.219.884-.544.519a32.41,32.41,0,0,0-33.794-9.117c-.458.152-.644-.577-.185-.729Z"
                                                  transform="translate(-1095.997 -692.995)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13960" data-name="Group 13960"
                                           transform="translate(50.533 22.855)">
                                            <path id="Path_79353" data-name="Path 79353"
                                                  d="M1010.165,638.771a51.4,51.4,0,0,0,8.48-45.995c-.143-.465.586-.65.729-.188a52.107,52.107,0,0,1-8.565,46.575c-.295.377-.942-.009-.644-.392Z"
                                                  transform="translate(-1010.088 -592.321)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13961" data-name="Group 13961"
                                           transform="translate(76.54 17.491)">
                                            <path id="Path_79354" data-name="Path 79354"
                                                  d="M1095.767,611.905c6.1-11.089,12.811-23.808,8.826-36.789-.143-.465.586-.65.729-.188,4.042,13.181-2.712,26.1-8.911,37.369-.234.425-.875.033-.644-.392Z"
                                                  transform="translate(-1095.718 -574.661)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13962" data-name="Group 13962"
                                           transform="translate(103.047 33.216)">
                                            <path id="Path_79355" data-name="Path 79355"
                                                  d="M1183.179,629.5a21.626,21.626,0,0,1,18.754-1.664c.449.17.246.9-.207.723a20.9,20.9,0,0,0-18.183,1.6c-.416.252-.78-.4-.364-.656Z"
                                                  transform="translate(-1182.995 -626.436)" fill="#fff"/>
                                        </g>
                                        <g id="Group_13963" data-name="Group 13963"
                                           transform="translate(103.065 13.784)">
                                            <path id="Path_79356" data-name="Path 79356"
                                                  d="M1183.111,584.971a21.824,21.824,0,0,0,.131-21.965.376.376,0,0,1,.656-.367,22.588,22.588,0,0,1-.143,22.721.376.376,0,0,1-.644-.389Z"
                                                  transform="translate(-1183.054 -562.456)" fill="#fff"/>
                                        </g>
                                    </g>
                                </g>
                                <g id="lamp" transform="translate(159.045 0)">
                                    <rect id="Rectangle_3353" data-name="Rectangle 3353" width="25.752"
                                          height="6.059" transform="translate(28.713 256.186)" fill="#528e91"/>
                                    <path id="Path_79365" data-name="Path 79365"
                                          d="M717.919,883.338c0,1.163-5.765,2.108-12.874,2.108s-12.874-.944-12.874-2.108,5.765-2.108,12.874-2.108S717.919,882.174,717.919,883.338Z"
                                          transform="translate(-663.454 -625.044)" fill="#528e91"/>
                                    <path id="Path_79366" data-name="Path 79366"
                                          d="M717.919,876.168c0,1.163-5.765,2.108-12.874,2.108s-12.874-.944-12.874-2.108,5.765-2.108,12.874-2.108S717.919,875,717.919,876.168Z"
                                          transform="translate(-663.454 -620.051)" fill="#5cafab"/>
                                    <path id="Path_79367" data-name="Path 79367"
                                          d="M717.919,895.808c0,1.163-5.765,2.108-12.874,2.108s-12.874-.945-12.874-2.108,5.765-2.108,12.874-2.108S717.919,894.645,717.919,895.808Z"
                                          transform="translate(-663.454 -633.727)" fill="#528e91"/>
                                    <g id="Group_13983" data-name="Group 13983" transform="translate(0 0.565)">
                                        <g id="Group_13981" data-name="Group 13981">
                                            <path id="Path_79368" data-name="Path 79368"
                                                  d="M640.471,118.913v1.892c-.082,0-.167,0-.249,0a44.275,44.275,0,0,1-12.227-1.707c-17.552-5.017-30.375-20.565-30.375-38.909,0-22.047,18.53-40.048,41.521-40.6.352-.012.7-.015,1.057-.015a13.759,13.759,0,0,1-.249,1.9c-22.32.14-40.433,17.454-40.433,38.714,0,17.473,12.231,32.282,28.977,37.077a42.4,42.4,0,0,0,10.94,1.637c.261,0,.525.006.793.006C640.3,118.916,640.389,118.913,640.471,118.913Z"
                                                  transform="translate(-597.62 -39.58)" fill="#528e91"/>
                                        </g>
                                        <g id="Group_13982" data-name="Group 13982" transform="translate(0 0.015)">
                                            <path id="Path_79369" data-name="Path 79369"
                                                  d="M639.429,118.666v1.892l-.249,0a44.31,44.31,0,0,1-11.186-1.424c-17.552-5.017-30.375-20.564-30.375-38.909,0-22.047,18.53-40.048,41.521-40.6-.046.541-.14,1.063-.234,1.6-22.32.14-40.434,17.454-40.434,38.714,0,17.834,12.741,32.889,30.019,37.363a42.4,42.4,0,0,0,10.691,1.361C639.262,118.669,639.347,118.666,639.429,118.666Z"
                                                  transform="translate(-597.62 -39.63)" fill="#5cafab"/>
                                        </g>
                                    </g>
                                    <path id="Path_79370" data-name="Path 79370"
                                          d="M727.7,474.151H727.7c-.046.428-1.431.787-3.374.932-.592.046-1.239.067-1.913.067-2.888,0-5.227-.443-5.291-1h-.009l1.13-175.881,0-.38h8.331Z"
                                          transform="translate(-680.819 -218.873)" fill="#528e91"/>
                                    <path id="Path_79371" data-name="Path 79371"
                                          d="M727.7,475.191H727.7c-.046.428-1.431.787-3.374.932-.592.046-1.239.067-1.913.067-2.888,0-5.227-.443-5.291-1h-.009l1.13-175.881,0-.38h8.331Z"
                                          transform="translate(-680.819 -219.597)" fill="#528e91"/>
                                    <path id="Path_79372" data-name="Path 79372"
                                          d="M725.243,476.441h-.006c-.021.21-.355.4-.914.553-.592.046-1.239.067-1.913.067-2.888,0-5.227-.444-5.291-1h-.009l1.13-175.881h5.874Z"
                                          transform="translate(-680.819 -220.467)" fill="#528e91"/>
                                    <path id="Path_79373" data-name="Path 79373"
                                          d="M725.243,474.555h-.006c-.021.21-.355.4-.914.553-.592.046-1.239.067-1.913.067-2.888,0-5.227-.443-5.291-1h-.009l1.13-176.242h5.874Z"
                                          transform="translate(-680.819 -218.9)" fill="#5cafab"/>
                                    <g id="Group_13984" data-name="Group 13984" transform="translate(13.382)">
                                        <path id="Path_79374" data-name="Path 79374"
                                              d="M703.41,182.195h0c-6.345,0-11.866-3.957-12.367-9.212l-2.4-25.123h29.539l-2.4,25.123C715.276,178.241,709.754,182.195,703.41,182.195Z"
                                              transform="translate(-674.378 -114.409)" fill="#ffc586"/>
                                        <rect id="Rectangle_3354" data-name="Rectangle 3354" width="11.93"
                                              height="12.212" transform="translate(23.067 16.094)" fill="#5cafab"/>
                                        <path id="Path_79375" data-name="Path 79375"
                                              d="M726.67,67.543v4.544h-2.241V73.1H712.5V72.087H710.26V67.543a8.2,8.2,0,0,1,6.876-8.094,7.655,7.655,0,0,1,1.215-.106c.033,0,.073,0,.109,0a7.951,7.951,0,0,1,1.324.109,8.216,8.216,0,0,1,6.885,8.094Z"
                                              transform="translate(-689.431 -52.774)" fill="#528e91"/>
                                        <path id="Path_79376" data-name="Path 79376"
                                              d="M719.617,131.226v.343H692.55a2.311,2.311,0,0,1,.456-1.027c1.224-1.692,4.522-2.934,6.381-2.934l.78,0v-.632l7.32.027,4.483.015h.125v.632l.923,0c1.892,0,5.172,1.248,6.317,2.973a2.27,2.27,0,0,1,.276.541A.173.173,0,0,1,719.617,131.226Z"
                                              transform="translate(-677.1 -99.87)" fill="#528e91"/>
                                        <path id="Path_79377" data-name="Path 79377"
                                              d="M726.67,64.213v5.555H710.26V64.213a8.2,8.2,0,0,1,6.876-8.094,7.656,7.656,0,0,1,1.215-.106c.033,0,.073,0,.109,0a7.95,7.95,0,0,1,1.324.109,8.216,8.216,0,0,1,6.885,8.094Z"
                                              transform="translate(-689.431 -50.455)" fill="#5cafab"/>
                                        <path id="Path_79378" data-name="Path 79378"
                                              d="M719.686,133.309v.343H692.47v-.343a1.307,1.307,0,0,1,.027-.289,2.313,2.313,0,0,1,.455-1.027,3.937,3.937,0,0,1,.38-.443,9.954,9.954,0,0,1,6-2.49l.781,0,7.444.027,4.483.015.923,0A9.585,9.585,0,0,1,718.9,131.6a3.515,3.515,0,0,1,.386.486,2.276,2.276,0,0,1,.276.541A1.965,1.965,0,0,1,719.686,133.309Z"
                                              transform="translate(-677.044 -101.319)" fill="#5cafab"/>
                                        <path id="Path_79379" data-name="Path 79379"
                                              d="M735.551,39.044v4.923a1.328,1.328,0,0,1-1.178,1.318c-.049,0-.1.006-.149.006a1.325,1.325,0,0,1-1.324-1.324V39.044a1.321,1.321,0,0,1,.914-1.257,1.239,1.239,0,0,1,.413-.067,1.317,1.317,0,0,1,.938.389A1.336,1.336,0,0,1,735.551,39.044Z"
                                              transform="translate(-705.195 -37.72)" fill="#5cafab"/>
                                        <path id="Path_79380" data-name="Path 79380"
                                              d="M699.881,141.8H642.09v-.027c.58-1.069,3.037-2.026,5.734-2.746a59.274,59.274,0,0,1,10.047-1.33,3.92,3.92,0,0,1,.38-.443h24.661c.216,0,.522.015.905.046a3.524,3.524,0,0,1,.386.486C688.367,138.173,698.523,139.8,699.881,141.8Z"
                                              transform="translate(-641.965 -107.021)" fill="#528e91"/>
                                        <path id="Path_79381" data-name="Path 79381"
                                              d="M699.747,143.264H641.68a.977.977,0,0,1,.125-.465v0c.58-1.069,3.037-2.026,5.734-2.746a59.272,59.272,0,0,1,10.047-1.33H682.5c.307,0,.8.03,1.415.088,4.167.389,14.323,2.011,15.678,4.015A.784.784,0,0,1,699.747,143.264Z"
                                              transform="translate(-641.68 -108.045)" fill="#5cafab"/>
                                        <path id="Path_79382" data-name="Path 79382"
                                              d="M765.171,72.946h-5.676a1.827,1.827,0,0,0-.635-.756c-.489-.337-.784-.213-2.9-.255a23.38,23.38,0,0,1-5.087-.413,8.13,8.13,0,0,1-1.06-.343c-.1-.036-.194-.079-.292-.125a5.074,5.074,0,0,1-1.443-.993,5.562,5.562,0,0,0-.829-.522,9.974,9.974,0,0,0-4.176-1.136,8.076,8.076,0,0,1-2.39-.632,9.682,9.682,0,0,1-2.551-1.734,6.622,6.622,0,0,1-.51-.538,6.265,6.265,0,0,1-1.1-1.765c-.89-2.22.3-3.423.875-6.691.052-.279.1-.571.137-.884a8.366,8.366,0,0,0,.012-2.336c-.158-1.348-.58-3.417-1.254-8.528-.049-.358-.1-.738-.149-1.13-.036-.307-.076-.6-.109-.878-.383-3.11-.48-4.55-.3-5.491a1.239,1.239,0,0,1,.413-.067,1.322,1.322,0,0,1,1.324,1.324v4.34a8.21,8.21,0,0,1,6.882,8.094v5.555H742.1v8.471l.923,0c1.892,0,5.172,1.248,6.317,2.973C753.809,68.906,765.171,70.741,765.171,72.946Z"
                                              transform="translate(-707.104 -37.727)" fill="#528e91"/>
                                    </g>
                                </g>
                                <g id="bench" transform="translate(23.914 154.975)">
                                    <g id="Group_13985" data-name="Group 13985" transform="translate(0 0)">
                                        <rect id="Rectangle_3355" data-name="Rectangle 3355" width="3.712"
                                              height="56.075" transform="translate(12.627 6.685)" fill="#83c5cc"/>
                                        <rect id="Rectangle_3356" data-name="Rectangle 3356" width="3.712"
                                              height="56.075" transform="translate(155.226 6.685)" fill="#83c5cc"/>
                                        <rect id="Rectangle_3357" data-name="Rectangle 3357" width="15.597"
                                              height="49.019" transform="translate(7.427 62.389)" fill="#83c5cc"/>
                                        <rect id="Rectangle_3358" data-name="Rectangle 3358" width="15.597"
                                              height="49.019" transform="translate(150.029 62.389)" fill="#00bcc5"/>
                                        <rect id="Rectangle_3359" data-name="Rectangle 3359" width="15.597"
                                              height="11.139" transform="translate(7.427 63.62)" fill="#0c7478"/>
                                        <rect id="Rectangle_3360" data-name="Rectangle 3360" width="15.597"
                                              height="11.139" transform="translate(150.029 63.62)" fill="#0c7478"/>
                                        <rect id="Rectangle_3361" data-name="Rectangle 3361" width="177.137"
                                              height="11.139" transform="translate(0 57.56)" fill="#0f8c91"/>
                                        <rect id="Rectangle_3362" data-name="Rectangle 3362" width="177.137"
                                              height="11.139" transform="translate(0 53.476)" fill="#83c5cc"/>
                                        <rect id="Rectangle_3363" data-name="Rectangle 3363" width="3.712"
                                              height="7.799" transform="translate(12.627 6.685)" fill="#0f8c91"/>
                                        <rect id="Rectangle_3364" data-name="Rectangle 3364" width="3.712"
                                              height="7.799" transform="translate(155.226 6.685)" fill="#0f8c91"/>
                                        <rect id="Rectangle_3365" data-name="Rectangle 3365" width="3.712"
                                              height="11.139" transform="translate(12.627 21.911)" fill="#0f8c91"/>
                                        <rect id="Rectangle_3366" data-name="Rectangle 3366" width="3.712"
                                              height="11.139" transform="translate(155.226 21.911)" fill="#0f8c91"/>
                                        <path id="Path_79383" data-name="Path 79383"
                                              d="M309.147,627.492H132.01l1.67-11.143H308.033Z"
                                              transform="translate(-132.01 -597.412)" fill="#83c5cc"/>
                                        <path id="Path_79384" data-name="Path 79384"
                                              d="M308.033,566.27l-174.538.186L132.01,555.13H309.147Z"
                                              transform="translate(-132.01 -555.13)" fill="#83c5cc"/>
                                        <path id="Path_79385" data-name="Path 79385"
                                              d="M175.942,630.516a1.856,1.856,0,1,1-1.856-1.856A1.856,1.856,0,0,1,175.942,630.516Z"
                                              transform="translate(-159.788 -605.914)" fill="#0f8c91"/>
                                        <path id="Path_79386" data-name="Path 79386"
                                              d="M176.742,742.556a1.856,1.856,0,1,1-1.856-1.856A1.858,1.858,0,0,1,176.742,742.556Z"
                                              transform="translate(-160.341 -683.295)" fill="#0f8c91"/>
                                        <path id="Path_79387" data-name="Path 79387"
                                              d="M636.722,745.466a1.856,1.856,0,1,1-1.856-1.856A1.858,1.858,0,0,1,636.722,745.466Z"
                                              transform="translate(-478.028 -685.305)" fill="#0f8c91"/>
                                        <path id="Path_79388" data-name="Path 79388"
                                              d="M175.942,569.6a1.856,1.856,0,1,1-1.856-1.856A1.856,1.856,0,0,1,175.942,569.6Z"
                                              transform="translate(-159.788 -563.839)" fill="#0f8c91"/>
                                        <ellipse id="Ellipse_433" data-name="Ellipse 433" cx="1.856" cy="1.856"
                                                 rx="1.856" ry="1.856" transform="translate(155.724 22.901)"
                                                 fill="#0f8c91"/>
                                        <path id="Path_79389" data-name="Path 79389"
                                              d="M636.722,569.4a1.856,1.856,0,1,1-1.856-1.856A1.858,1.858,0,0,1,636.722,569.4Z"
                                              transform="translate(-478.028 -563.701)" fill="#0f8c91"/>
                                    </g>
                                </g>
                                <g id="lovers" transform="translate(35.684 116.115)">
                                    <g id="Group_14118" data-name="Group 14118" transform="translate(0 0)">
                                        <g id="Group_13989" data-name="Group 13989"
                                           transform="translate(48.688 19.292)">
                                            <g id="Group_13988" data-name="Group 13988">
                                                <g id="Group_13986" data-name="Group 13986"
                                                   transform="translate(0 4.973)">
                                                    <path id="Path_79390" data-name="Path 79390"
                                                          d="M332.437,574.053a5.094,5.094,0,0,1-.612.538,5.2,5.2,0,0,1-1.361.73c-.956.368-3.106,1.383-3.01,2,.028.18.251.316.634.436,1.392.436,2.735-.009,4.315-.6,3.474-1.293,4.69-2,4.894-2.763a2.565,2.565,0,0,0,.006-1.3,4.231,4.231,0,0,0-.247-.523,3.718,3.718,0,0,0-2.233-1.4,5.229,5.229,0,0,0-1.606-.09,15.13,15.13,0,0,0-1.67.288c-1.1.2-1.479.241-1.788.591-.022.025-.35.4-.235.606.071.13.269.118.755.133a3.962,3.962,0,0,1,1.581.214,1.028,1.028,0,0,1,.563.489A.938.938,0,0,1,332.437,574.053Z"
                                                          transform="translate(-327.45 -551.536)" fill="#a47850"/>
                                                    <path id="Path_79391" data-name="Path 79391"
                                                          d="M344.61,575.438c3.226,2.441,7.285,6.84,14.149,11.375,5.54,3.66,17.735,7.57,20.349,6.524,4.526-1.813,5.144-10.329,2.122-11.993-1.309-.721-3.981,2.153-5.113,2.326-3.254.5-10.725-1.222-28.667-11.73a.862.862,0,0,0-1.2.294Q345.431,573.834,344.61,575.438Z"
                                                          transform="translate(-339.302 -552.057)" fill="#a47850"/>
                                                    <path id="Path_79392" data-name="Path 79392"
                                                          d="M442.051,549.015c-.445-.727-.888-1.457-1.333-2.184a1.25,1.25,0,0,1-.065-.13,21.343,21.343,0,0,1-1.231-11.322.854.854,0,0,1,1.333-.569.537.537,0,0,0,.439.13c.631-.183.5-2.367.467-3.2a83.475,83.475,0,0,1,.5-12.259,18.052,18.052,0,0,1,.712-3.873,17.409,17.409,0,0,1,1.083-2.759,10.322,10.322,0,0,1,2.555-3.523c1.949-1.506,5.271-2.555,6.9,1.172,2.141,4.906.705,14.579-.792,21.787,0,.022-.006.04-.009.062a65.5,65.5,0,0,1-3.483,13.082,6.13,6.13,0,0,1-2.169,3.066,6.29,6.29,0,0,1-4.254.931A.88.88,0,0,1,442.051,549.015Z"
                                                          transform="translate(-404.592 -507.949)" fill="#a3d3d8"/>
                                                </g>
                                                <g id="Group_13987" data-name="Group 13987"
                                                   transform="translate(41.049)">
                                                    <path id="Path_79393" data-name="Path 79393"
                                                          d="M490.757,545.123c-1.723,1.138-6.543,2.3-13.206,1.909a21.452,21.452,0,0,1-9.073-2.651c1.528-7.839.257-13.525-.3-17.283a67.39,67.39,0,0,0-7.273-21.849,6.377,6.377,0,0,1,3.774-9.107l13.141-3.991a6.38,6.38,0,0,1,7.978,4.322c1.977,6.778,3.375,12.043,3.4,24.293A182.646,182.646,0,0,0,490.757,545.123Z"
                                                          transform="translate(-460.146 -491.874)" fill="#b3dee5"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_14112" data-name="Group 14112">
                                            <g id="Group_13990" data-name="Group 13990"
                                               transform="translate(22.61 32.277)">
                                                <path id="Path_79394" data-name="Path 79394"
                                                      d="M356.79,568.983c1.339,1.485,2.852,2.53,4.458,2.435,3.375-.2,4.154-5.268,10.075-16.466,3.953-7.48,4.108-10.255,5.46-14.468a4.964,4.964,0,0,0-3.01-6.181l-.105-.04a5.289,5.289,0,0,0-3.486-.192c-4.495,1.513-4.13,10.242-7.526,21.267A70.285,70.285,0,0,1,356.79,568.983Z"
                                                      transform="translate(-321.635 -533.851)" fill="#f4bf8c"/>
                                                <path id="Path_79395" data-name="Path 79395"
                                                      d="M243.179,616.548c.192.783,1.188,1.1,1.364,1.157.566.18.94.093,2.917-.405,1.123-.281,2.2-.721,3.338-.959a2.572,2.572,0,0,0,1.438-.671,2.212,2.212,0,0,0,.51-.891,2.516,2.516,0,0,0-.445-2.4c-.387-.356-.928-.513-5.181.931-2.19.742-2.92,1.039-3.5,1.831A1.789,1.789,0,0,0,243.179,616.548Z"
                                                      transform="translate(-243.148 -587.919)" fill="#f4bf8c"/>
                                                <path id="Path_79396" data-name="Path 79396"
                                                      d="M297.772,623.07c.427-1.6-1.005-3.177-1.154-3.335-1.652-1.766-4.074-1.615-7.322-1.807a52.1,52.1,0,0,1-9.97-1.5c-1.615-.436-7.4-2.132-11.347-3.74a5.553,5.553,0,0,0-3.455-.4,4.946,4.946,0,0,0-2.165,1.2l-.009.034a1.721,1.721,0,0,0,1.145,2.085c1.89.594,4.288,1.414,7,2.506,4.792,1.927,7.223,3.353,9.645,4.439a38.382,38.382,0,0,0,13.973,3.18C295,625.771,297.311,624.8,297.772,623.07Z"
                                                      transform="translate(-256.368 -587.935)" fill="#f4bf8c"/>
                                            </g>
                                            <g id="Group_13991" data-name="Group 13991"
                                               transform="translate(0 81.997)">
                                                <path id="Path_79397" data-name="Path 79397"
                                                      d="M226.3,898.992l1.918-.006.21-5.376-1.9.009Z"
                                                      transform="translate(-208.902 -832.04)" fill="#0f8c91"/>
                                                <path id="Path_79398" data-name="Path 79398"
                                                      d="M170.078,889.5a1.378,1.378,0,0,0,.956,1.123,8.789,8.789,0,0,0,1.466.331c4.578.628,7.378-2.629,12.711-3.755a16.511,16.511,0,0,1,2.534-.337,3.334,3.334,0,0,0,3.1-3.885l-.235-1.228a1.418,1.418,0,0,0-1.107-1.12,9.507,9.507,0,0,0-4.312.009c-4.977,1.216-6.54,6.212-11.31,6.967a7.579,7.579,0,0,1-2.02.043,1.619,1.619,0,0,0-1.779,1.853Z"
                                                      transform="translate(-170.059 -822.91)" fill="#0f8c91"/>
                                                <path id="Path_79399" data-name="Path 79399"
                                                      d="M200.6,883.132h0a.49.49,0,0,0,.6.087,24.619,24.619,0,0,1,3.7-1.671,23.929,23.929,0,0,1,4.018-1.046.5.5,0,0,0,.229-.891c-.8-.526-1.6-1.055-2.391-1.578a.5.5,0,0,0-.538,0,32.3,32.3,0,0,0-5.581,4.417A.487.487,0,0,0,200.6,883.132Z"
                                                      transform="translate(-191.071 -821.228)" fill="#f2b879"/>
                                                <path id="Path_79400" data-name="Path 79400"
                                                      d="M217.8,754.145a6.319,6.319,0,0,0,1.237-.167,4.22,4.22,0,0,0,1.754-.656,1.366,1.366,0,0,0,.86-1.1,95.429,95.429,0,0,1,3.789-22.044c1.472-5.7,2.914-9.475,2.985-15.173a34.82,34.82,0,0,0-3.465-15.517c-.108-.384-.269-.968-.464-1.683a9.868,9.868,0,0,0-.541-1.825c-.606-1.061-2.237-1.429-3.335-1.408a4.093,4.093,0,0,0-.616.056,4.856,4.856,0,0,0-3.82,6.308c.458,1.42.956,3.149,1.411,5.144,1.516,6.657,1.547,11.9,1.544,18.353a125.828,125.828,0,0,1-.563,13.187s-.5,5-1.472,9.961c-.724,3.681-1.083,5.519-1.531,6.221-.034.053-.291.452-.179.575s.449-.152,1.067-.26A9.584,9.584,0,0,1,217.8,754.145Z"
                                                      transform="translate(-201.353 -694.577)" fill="#f2b879"/>
                                            </g>
                                            <g id="Group_13992" data-name="Group 13992"
                                               transform="translate(20.122 82.052)">
                                                <path id="Path_79401" data-name="Path 79401"
                                                      d="M302.726,890.245l1.825-.594-1.445-5.181-1.807.588Z"
                                                      transform="translate(-280.823 -825.782)" fill="#0f8c91"/>
                                                <path id="Path_79402" data-name="Path 79402"
                                                      d="M251.7,887.077a1.377,1.377,0,0,0,1.253.776,8.976,8.976,0,0,0,1.5-.136c4.551-.8,6.221-4.761,10.954-7.468a17.026,17.026,0,0,1,2.308-1.1,3.335,3.335,0,0,0,1.76-4.646l-.6-1.1a1.413,1.413,0,0,0-1.4-.727,9.525,9.525,0,0,0-4.1,1.327c-4.368,2.682-4.325,7.913-8.637,10.094a7.5,7.5,0,0,1-1.909.659,1.622,1.622,0,0,0-1.129,2.314Z"
                                                      transform="translate(-246.446 -817.636)" fill="#0f8c91"/>
                                                <path id="Path_79403" data-name="Path 79403"
                                                      d="M276.185,880.3h0a.49.49,0,0,0,.6-.1,24.555,24.555,0,0,1,3.013-2.722,23.984,23.984,0,0,1,3.5-2.224.494.494,0,0,0-.056-.919l-2.759-.77a.5.5,0,0,0-.514.164,32.557,32.557,0,0,0-3.963,5.915A.5.5,0,0,0,276.185,880.3Z"
                                                      transform="translate(-263.315 -818.235)" fill="#f7c589"/>
                                                <path id="Path_79404" data-name="Path 79404"
                                                      d="M253.851,752.476a6.239,6.239,0,0,0,1.126-.538,4.184,4.184,0,0,0,1.469-1.16,1.368,1.368,0,0,0,.486-1.305,95.584,95.584,0,0,1-3.14-22.146c-.445-7.607-.854-11.4-1.8-15.359-2.948-12.318-8.81-16.163-10.013-16.683a5.536,5.536,0,0,0-3.669-.38,4.731,4.731,0,0,0-.569.241,4.857,4.857,0,0,0-1.708,7.174c.869,1.21,1.875,2.7,2.917,4.464,3.48,5.874,5.113,10.858,7.087,17a125.785,125.785,0,0,1,3.5,12.73s1.055,4.909,1.646,9.933c.439,3.725.656,5.587.445,6.391-.015.062-.139.517.006.6s.38-.281.937-.575A9.757,9.757,0,0,1,253.851,752.476Z"
                                                      transform="translate(-235.106 -694.754)" fill="#f7c589"/>
                                            </g>
                                            <path id="Path_79405" data-name="Path 79405"
                                                  d="M242.757,677.947c1.333-.535,3.3-1.287,5.717-2.073,18.446-6,26.368-2,32-8.229,3.57-3.95,4.442-10.041,3.672-14.1a10.382,10.382,0,0,0-1.624-4.059,11.324,11.324,0,0,0-7.276-4.356,14.921,14.921,0,0,0-5.154-2.92c-1.921-.616-5.392-1.272-22.016,4.294-2.425.814-4.192,1.442-7.167,2.283-4.634,1.309-5.172,1.148-8.866,2.172-6.642,1.844-10.623,3.007-12.968,6.5a11,11,0,0,0-1.717,4.622,12.84,12.84,0,0,1,5.577-.826,14.487,14.487,0,0,1,8.615,4.154c2.49,2.277,2.419,3.514,5.191,6.861A34.16,34.16,0,0,0,242.757,677.947Z"
                                                  transform="translate(-202.728 -576.138)" fill="#f63884"/>
                                            <path id="Path_79406" data-name="Path 79406"
                                                  d="M375.383,456.475c.5-4.229-2.391-5.37-1.411-8.844.888-3.134,3.663-3.291,4.04-6.654.254-2.264-.776-2.506-.374-4.847.52-3.025,3-6.048,5.506-6.137.684-.025.6.2,1.723.309,2.509.254,3.461-.8,5.478-.792a6.936,6.936,0,0,1,3.953,1.361c2.3,1.742,2.775,4.68,3.035,6.258.721,4.383-.647,4.962.455,6.781.313.52.244.17,3.752,3.455a14.491,14.491,0,0,1,2.215,2.518,8.124,8.124,0,0,1,1.1,2.416,15.094,15.094,0,0,1,1.491,3.458,15.642,15.642,0,0,1-2.679,13.679c-.176.235-.133-.031-.037-.161a15.171,15.171,0,0,0,1.72-15.223c-.022-.046-.046-.09-.068-.139a22.554,22.554,0,0,1,.1,9.488,27.228,27.228,0,0,1-2.991,6.159c-2.088,3.208-2.985,2.292-5.027,4.594a2.423,2.423,0,0,1-1.739,1,1.361,1.361,0,0,1-.56-.173c-1.318-.69-4.77.3-6.175.591a13.506,13.506,0,0,1-5.308-.068,14.72,14.72,0,0,1-7.158-3.35c-1.5-1.293-4.486-3.876-4.572-7.353C371.773,461.2,374.885,460.726,375.383,456.475Z"
                                                  transform="translate(-309.43 -429.51)" fill="#0a0909"/>
                                            <path id="Path_79407" data-name="Path 79407"
                                                  d="M378.389,549.776c-.309,7.5-5.212,10.385-3.765,14.635,1.089,3.2,5.039,4.526,7.223,5.259,1.185.4,6.416,2.159,9.107-.272,1.872-1.692,1.6-4.6,1.575-6.753-.192-14.644,10.462-20.627,6.6-29.573a13.156,13.156,0,0,0-3.969-5c-2.62-2.515-7.192-2.824-10.487-1.278-2.082.974-3.149,2.422-4.869,4.752-1.374,1.859-2.367,2.979-2.877,4.786a10.606,10.606,0,0,0,.433,6.6A18.761,18.761,0,0,1,378.389,549.776Z"
                                                  transform="translate(-311.159 -496.049)" fill="#fb5d9c"/>
                                            <path id="Path_79408" data-name="Path 79408"
                                                  d="M409.82,496.77c1.185-1.878-.888-4.22-4.331-14.023-.609-1.742-1.086-3.208-1.414-4.247l-5.865,2.589a14.133,14.133,0,0,1,3.056,4.739,13.409,13.409,0,0,1,.739,2.694c.7,4.569-1.94,6.812-.953,8.5C402.259,499.087,408.267,499.226,409.82,496.77Z"
                                                  transform="translate(-327.633 -463.345)" fill="#f7c589"/>
                                            <path id="Path_79409" data-name="Path 79409"
                                                  d="M399.21,482.789a12.621,12.621,0,0,1,2.93,4.714,2.473,2.473,0,0,0,.826.111c1.544-.1,2.837-1.24,3.523-3.168-.47-1.414-.944-2.834-1.414-4.247Z"
                                                  transform="translate(-328.323 -464.519)" fill="#eab071"/>
                                            <ellipse id="Ellipse_434" data-name="Ellipse 434" cx="5.095" cy="8.281"
                                                     rx="5.095" ry="8.281"
                                                     transform="translate(68.521 5.521) rotate(-3.836)"
                                                     fill="#f4c898"/>
                                            <path id="Path_79410" data-name="Path 79410"
                                                  d="M403.021,441.293c.022-.077.247-.34.244-.229.022-.074.043-.149.071-.22.656-1.507,3.452-1.739,6.249-.52s4.244,8.986,3.588,10.493.8-2.889-3.223-3.613c-5.169-.931-6.969-4.365-6.734-5.912-.693,3.223,2.735,4.758,5.11,5.853a6.563,6.563,0,0,1,2.877,2.165,6.712,6.712,0,0,1,.733,3.8c0,.1-.257.39-.257.269,0-1.711-.118-3.363-1.473-4.575a14.828,14.828,0,0,0-3.768-2.032C404.333,445.767,402.363,443.824,403.021,441.293Z"
                                                  transform="translate(-330.866 -436.44)" fill="#0a0909"/>
                                            <g id="Group_14111" data-name="Group 14111"
                                               transform="translate(20.474 30.291)">
                                                <path id="Path_79411" data-name="Path 79411"
                                                      d="M369.63,577.137c.885,1.794,2.06,3.208,3.632,3.551,3.3.721,5.426-3.947,14.159-13.122,5.831-6.128,6.731-8.761,9.175-12.448a4.963,4.963,0,0,0-1.222-6.765l-.09-.065a5.287,5.287,0,0,0-3.3-1.129c-4.736.238-6.75,8.739-13,18.434A70.6,70.6,0,0,1,369.63,577.137Z"
                                                      transform="translate(-328.368 -541.052)" fill="#f7c589"/>
                                                <g id="flavorÃ¬">
                                                    <path id="Path_79412" data-name="Path 79412"
                                                          d="M271.763,549.863l-27.263-8.9,2.9,37.313Z"
                                                          transform="translate(-241.946 -536.775)" fill="#e3e3e3"/>
                                                    <path id="Path_79413" data-name="Path 79413"
                                                          d="M243.579,659a3.184,3.184,0,0,0-2.131,1.355c-.458.733-.674,1.862-.241,2.212.309.251.659-.124,1.6-.084a4.287,4.287,0,0,1,1.961.64c1.1.622,1.315,1.284,1.785,1.185.532-.111.736-1.064.789-1.308a3.273,3.273,0,0,0-3.759-4Z"
                                                          transform="translate(-239.509 -618.271)" fill="#19c6d8"/>
                                                    <path id="Path_79414" data-name="Path 79414"
                                                          d="M248.651,649.523,242.3,647.45l5.676-6.62Z"
                                                          transform="translate(-240.426 -605.75)" fill="#e3e3e3"/>
                                                    <path id="Path_79415" data-name="Path 79415"
                                                          d="M244.34,540.86l9.5,17.453,17.858-8.519Z"
                                                          transform="translate(-241.835 -536.705)" fill="#d4d4d4"/>
                                                    <g id="Group_14002" data-name="Group 14002"
                                                       transform="translate(0 1.881)">
                                                        <path id="Path_79416" data-name="Path 79416"
                                                              d="M243.354,537.012a6.013,6.013,0,0,0-2.648-1.967c-.959-.4-1.64-.285-3.05-.854a10.907,10.907,0,0,1-1.392-.681,11.014,11.014,0,0,0,.207,2.9,8.659,8.659,0,0,0,1.321,3.338,5.533,5.533,0,0,0,2.431,2.193c.247.1,2.419.977,3.551-.065C244.932,540.8,244.322,538.37,243.354,537.012Z"
                                                              transform="translate(-236.243 -533.51)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_13993" data-name="Group 13993"
                                                           transform="translate(0.538 0.962)">
                                                            <path id="Path_79417" data-name="Path 79417"
                                                                  d="M244.831,543.58c-1.318-2.283-3.966-3.242-5.676-5.157a5.542,5.542,0,0,1-1.1-1.779.038.038,0,0,0-.071.025c.891,2.466,3.486,3.595,5.327,5.228a7.1,7.1,0,0,1,1.457,1.729c.025.04.087,0,.062-.046Z"
                                                                  transform="translate(-237.983 -536.62)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_13994" data-name="Group 13994"
                                                           transform="translate(6.221 3.278)">
                                                            <path id="Path_79418" data-name="Path 79418"
                                                                  d="M256.848,547.8a5.333,5.333,0,0,1-.186-3.638c.016-.046-.056-.077-.068-.031a5.4,5.4,0,0,0,.186,3.694c.015.043.087.019.068-.025Z"
                                                                  transform="translate(-256.354 -544.106)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_13995" data-name="Group 13995"
                                                           transform="translate(3.37 6.802)">
                                                            <path id="Path_79419" data-name="Path 79419"
                                                                  d="M250.409,555.613a4.307,4.307,0,0,0-3.254.529c-.04.025,0,.09.043.062a4.221,4.221,0,0,1,3.2-.516c.046.012.062-.062.012-.074Z"
                                                                  transform="translate(-247.138 -555.498)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_13996" data-name="Group 13996"
                                                           transform="translate(1.943 5.247)">
                                                            <path id="Path_79420" data-name="Path 79420"
                                                                  d="M245.4,550.523a3.492,3.492,0,0,0-2.858.777c-.037.031.006.093.043.062a3.413,3.413,0,0,1,2.8-.764c.046.009.062-.068.012-.074Z"
                                                                  transform="translate(-242.524 -550.471)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_13997" data-name="Group 13997"
                                                           transform="translate(0.792 3.947)">
                                                            <path id="Path_79421" data-name="Path 79421"
                                                                  d="M241.241,546.473a2.272,2.272,0,0,0-2.422.343c-.037.031.006.1.043.062a2.2,2.2,0,0,1,2.348-.337c.043.022.074-.046.031-.068Z"
                                                                  transform="translate(-238.804 -546.268)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_13998" data-name="Group 13998"
                                                           transform="translate(4.332 2.122)">
                                                            <path id="Path_79422" data-name="Path 79422"
                                                                  d="M250.8,543.583a3.5,3.5,0,0,1-.189-3.162c.019-.043-.05-.077-.068-.031a3.569,3.569,0,0,0,.195,3.236c.025.04.087,0,.062-.043Z"
                                                                  transform="translate(-250.248 -540.368)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_13999" data-name="Group 13999"
                                                           transform="translate(2.727 1.543)">
                                                            <path id="Path_79423" data-name="Path 79423"
                                                                  d="M245.589,541.1a3.309,3.309,0,0,1-.294-2.549c.019-.043-.049-.077-.068-.031a3.37,3.37,0,0,0,.291,2.608c.019.043.09.019.071-.028Z"
                                                                  transform="translate(-245.06 -538.498)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14000" data-name="Group 14000"
                                                           transform="translate(0.311 2.357)">
                                                            <path id="Path_79424" data-name="Path 79424"
                                                                  d="M238.546,541.442a1.487,1.487,0,0,0-1.271-.269c-.046.012-.022.084.025.071a1.41,1.41,0,0,1,1.2.257.038.038,0,0,0,.049-.059Z"
                                                                  transform="translate(-237.25 -541.13)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14001" data-name="Group 14001"
                                                           transform="translate(1.417 1.143)">
                                                            <path id="Path_79425" data-name="Path 79425"
                                                                  d="M241.025,538.742a1.475,1.475,0,0,1,.17-1.472c.028-.04-.028-.087-.059-.049a1.547,1.547,0,0,0-.183,1.547c.019.046.093.022.071-.025Z"
                                                                  transform="translate(-240.825 -537.206)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14012" data-name="Group 14012"
                                                       transform="translate(5.199)">
                                                        <path id="Path_79426" data-name="Path 79426"
                                                              d="M258.89,535.331a5.99,5.99,0,0,0,.476-3.264c-.108-1.03-.529-1.578-.7-3.09a10.85,10.85,0,0,1-.059-1.547,11.032,11.032,0,0,0-2.453,1.556,8.627,8.627,0,0,0-2.311,2.744,5.5,5.5,0,0,0-.776,3.18c.028.269.285,2.592,1.742,3.093C256.3,538.52,258.15,536.828,258.89,535.331Z"
                                                              transform="translate(-253.049 -527.43)"
                                                              fill="#1395a2"/>
                                                        <g id="Group_14003" data-name="Group 14003"
                                                           transform="translate(2.003 0.924)">
                                                            <path id="Path_79427" data-name="Path 79427"
                                                                  d="M259.6,539.733c1.386-2.243.974-5.03,1.847-7.443a5.463,5.463,0,0,1,1.046-1.81.037.037,0,0,0-.056-.049c-1.748,1.952-1.51,4.776-2.076,7.167a7.092,7.092,0,0,1-.829,2.1c-.025.04.043.074.068.031Z"
                                                                  transform="translate(-259.523 -530.417)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14004" data-name="Group 14004"
                                                           transform="translate(2.532 7.231)">
                                                            <path id="Path_79428" data-name="Path 79428"
                                                                  d="M261.3,552.771a5.345,5.345,0,0,1,3.112-1.89c.046-.009.043-.087-.006-.074a5.42,5.42,0,0,0-3.165,1.915c-.028.037.028.087.059.049Z"
                                                                  transform="translate(-261.236 -550.806)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14005" data-name="Group 14005"
                                                           transform="translate(0.546 6.488)">
                                                            <path id="Path_79429" data-name="Path 79429"
                                                                  d="M256.88,551.022a4.294,4.294,0,0,0-2.011-2.614c-.043-.025-.077.043-.034.068a4.232,4.232,0,0,1,1.974,2.571c.009.046.084.022.071-.025Z"
                                                                  transform="translate(-254.815 -548.403)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14006" data-name="Group 14006"
                                                           transform="translate(1.07 4.581)">
                                                            <path id="Path_79430" data-name="Path 79430"
                                                                  d="M258.606,544.39a3.484,3.484,0,0,0-2.042-2.147c-.046-.019-.081.049-.034.068a3.406,3.406,0,0,1,2,2.1.039.039,0,0,0,.074-.025Z"
                                                                  transform="translate(-256.508 -542.24)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14007" data-name="Group 14007"
                                                           transform="translate(1.918 2.819)">
                                                            <path id="Path_79431" data-name="Path 79431"
                                                                  d="M260.755,538.515a2.276,2.276,0,0,0-1.451-1.971c-.046-.016-.08.049-.034.068a2.2,2.2,0,0,1,1.411,1.906.037.037,0,1,0,.074,0Z"
                                                                  transform="translate(-259.249 -536.542)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14008" data-name="Group 14008"
                                                           transform="translate(3.095 5.073)">
                                                            <path id="Path_79432" data-name="Path 79432"
                                                                  d="M263.126,545.568a3.483,3.483,0,0,1,2.694-1.664.037.037,0,1,0-.006-.074,3.563,3.563,0,0,0-2.756,1.708c-.025.04.043.074.068.031Z"
                                                                  transform="translate(-263.053 -543.829)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14009" data-name="Group 14009"
                                                           transform="translate(3.379 3.27)">
                                                            <path id="Path_79433" data-name="Path 79433"
                                                                  d="M264.035,539.543a3.3,3.3,0,0,1,2.107-1.466.039.039,0,0,0-.006-.077,3.367,3.367,0,0,0-2.156,1.491c-.031.04.025.09.056.052Z"
                                                                  transform="translate(-263.971 -538)" fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14010" data-name="Group 14010"
                                                           transform="translate(3.534 1.405)">
                                                            <path id="Path_79434" data-name="Path 79434"
                                                                  d="M264.9,533.23a1.493,1.493,0,0,0-.365-1.247c-.034-.037-.083.022-.049.056a1.405,1.405,0,0,1,.34,1.175.038.038,0,0,0,.074.015Z"
                                                                  transform="translate(-264.473 -531.972)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14011" data-name="Group 14011"
                                                           transform="translate(3.892 2.033)">
                                                            <path id="Path_79435" data-name="Path 79435"
                                                                  d="M265.7,534.646a1.484,1.484,0,0,1,1.377-.551c.05.006.065-.068.015-.074a1.549,1.549,0,0,0-1.448.572c-.031.04.025.09.056.052Z"
                                                                  transform="translate(-265.631 -534.003)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14022" data-name="Group 14022"
                                                       transform="translate(13.932 5.389)">
                                                        <path id="Path_79436" data-name="Path 79436"
                                                              d="M287.121,552.748c-.736,1.5-2.592,3.189-4.077,2.676-1.454-.5-1.714-2.827-1.742-3.094a5.322,5.322,0,0,1,.69-3.013c.031-.059.059-.115.087-.167.118-.226.238-.436.365-.634s.254-.374.38-.542c.074-.1.148-.189.223-.275a10.168,10.168,0,0,1,1.244-1.213c.034-.028.065-.056.1-.08a10.983,10.983,0,0,1,1.349-.968,10.851,10.851,0,0,1,1.1-.588,10.836,10.836,0,0,0,.059,1.547c.167,1.51.588,2.057.7,3.09A5.94,5.94,0,0,1,287.121,552.748Z"
                                                              transform="translate(-281.281 -544.85)"
                                                              fill="#1395a2"/>
                                                        <g id="Group_14013" data-name="Group 14013"
                                                           transform="translate(2.004 0.921)">
                                                            <path id="Path_79437" data-name="Path 79437"
                                                                  d="M287.833,557.143c1.386-2.243.974-5.03,1.847-7.443a5.463,5.463,0,0,1,1.046-1.81.037.037,0,0,0-.056-.05c-1.748,1.952-1.51,4.776-2.076,7.167a7.091,7.091,0,0,1-.829,2.1c-.028.04.04.074.068.031Z"
                                                                  transform="translate(-287.759 -547.827)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14014" data-name="Group 14014"
                                                           transform="translate(2.532 7.226)">
                                                            <path id="Path_79438" data-name="Path 79438"
                                                                  d="M289.532,570.176a5.347,5.347,0,0,1,3.112-1.89c.046-.009.043-.086-.006-.077a5.421,5.421,0,0,0-3.165,1.915c-.028.037.031.09.059.053Z"
                                                                  transform="translate(-289.466 -568.208)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14015" data-name="Group 14015"
                                                           transform="translate(0.546 6.485)">
                                                            <path id="Path_79439" data-name="Path 79439"
                                                                  d="M285.11,568.432a4.294,4.294,0,0,0-2.011-2.614c-.043-.025-.077.043-.034.068a4.232,4.232,0,0,1,1.974,2.571c.012.046.084.022.071-.025Z"
                                                                  transform="translate(-283.045 -565.813)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14016" data-name="Group 14016"
                                                           transform="translate(1.073 4.578)">
                                                            <path id="Path_79440" data-name="Path 79440"
                                                                  d="M286.846,561.8a3.484,3.484,0,0,0-2.042-2.147c-.046-.018-.08.05-.034.068a3.405,3.405,0,0,1,2,2.1.039.039,0,0,0,.074-.025Z"
                                                                  transform="translate(-284.749 -559.65)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14017" data-name="Group 14017"
                                                           transform="translate(1.92 2.816)">
                                                            <path id="Path_79441" data-name="Path 79441"
                                                                  d="M289,555.925a2.276,2.276,0,0,0-1.451-1.971c-.046-.015-.08.049-.034.068a2.2,2.2,0,0,1,1.411,1.906.037.037,0,1,0,.074,0Z"
                                                                  transform="translate(-287.488 -553.952)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14018" data-name="Group 14018"
                                                           transform="translate(3.097 5.067)">
                                                            <path id="Path_79442" data-name="Path 79442"
                                                                  d="M291.366,562.971a3.482,3.482,0,0,1,2.694-1.664.039.039,0,0,0-.006-.077,3.563,3.563,0,0,0-2.756,1.708c-.025.043.043.077.068.034Z"
                                                                  transform="translate(-291.293 -561.23)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14019" data-name="Group 14019"
                                                           transform="translate(3.381 3.267)">
                                                            <path id="Path_79443" data-name="Path 79443"
                                                                  d="M292.275,556.953a3.3,3.3,0,0,1,2.107-1.466.039.039,0,0,0-.006-.077,3.367,3.367,0,0,0-2.156,1.491c-.031.04.025.09.056.053Z"
                                                                  transform="translate(-292.211 -555.41)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14020" data-name="Group 14020"
                                                           transform="translate(3.533 1.399)">
                                                            <path id="Path_79444" data-name="Path 79444"
                                                                  d="M293.129,550.63a1.493,1.493,0,0,0-.365-1.247c-.034-.037-.084.022-.05.056a1.4,1.4,0,0,1,.34,1.176c-.006.049.068.065.074.016Z"
                                                                  transform="translate(-292.703 -549.372)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14021" data-name="Group 14021"
                                                           transform="translate(3.895 2.03)">
                                                            <path id="Path_79445" data-name="Path 79445"
                                                                  d="M293.935,552.056a1.484,1.484,0,0,1,1.377-.551c.05.006.065-.068.015-.074a1.549,1.549,0,0,0-1.448.572c-.031.04.025.09.056.053Z"
                                                                  transform="translate(-293.871 -551.413)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14032" data-name="Group 14032"
                                                       transform="translate(22.158 7.402)">
                                                        <path id="Path_79446" data-name="Path 79446"
                                                              d="M313.145,558.257a6,6,0,0,0,2.172-2.484c.47-.925.411-1.612,1.092-2.973a11.058,11.058,0,0,1,.789-1.333,11.024,11.024,0,0,0-2.9-.025,8.607,8.607,0,0,0-3.431,1.052,5.51,5.51,0,0,0-2.379,2.249c-.124.238-1.166,2.332-.217,3.545C309.238,559.529,311.713,559.114,313.145,558.257Z"
                                                              transform="translate(-307.871 -551.358)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_14023" data-name="Group 14023"
                                                           transform="translate(0.787 0.544)">
                                                            <path id="Path_79447" data-name="Path 79447"
                                                                  d="M310.473,559.393c2.382-1.132,3.548-3.7,5.593-5.25a5.517,5.517,0,0,1,1.862-.953.038.038,0,0,0-.019-.074c-2.527.69-3.861,3.189-5.633,4.894a7,7,0,0,1-1.838,1.315.038.038,0,1,0,.034.068Z"
                                                                  transform="translate(-310.416 -553.115)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14024" data-name="Group 14024"
                                                           transform="translate(1.804 5.883)">
                                                            <path id="Path_79448" data-name="Path 79448"
                                                                  d="M313.749,570.721a5.338,5.338,0,0,1,3.641.1c.043.019.083-.049.037-.065a5.423,5.423,0,0,0-3.7-.108c-.046.012-.028.087.019.071Z"
                                                                  transform="translate(-313.703 -570.377)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14025" data-name="Group 14025"
                                                           transform="translate(1.57 2.855)">
                                                            <path id="Path_79449" data-name="Path 79449"
                                                                  d="M313.284,563.892a4.3,4.3,0,0,0-.269-3.285c-.022-.043-.087-.006-.065.037a4.232,4.232,0,0,1,.263,3.229c-.019.047.056.065.071.019Z"
                                                                  transform="translate(-312.946 -560.588)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14026" data-name="Group 14026"
                                                           transform="translate(3.045 1.54)">
                                                            <path id="Path_79450" data-name="Path 79450"
                                                                  d="M318.335,559.263a3.493,3.493,0,0,0-.547-2.911c-.028-.04-.1,0-.065.037a3.425,3.425,0,0,1,.541,2.855.037.037,0,1,0,.071.018Z"
                                                                  transform="translate(-317.715 -556.336)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14027" data-name="Group 14027"
                                                           transform="translate(4.712 0.519)">
                                                            <path id="Path_79451" data-name="Path 79451"
                                                                  d="M323.326,555.493a2.273,2.273,0,0,0-.149-2.441c-.028-.04-.1,0-.065.037a2.2,2.2,0,0,1,.148,2.367c-.025.043.043.08.065.037Z"
                                                                  transform="translate(-323.105 -553.036)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14028" data-name="Group 14028"
                                                           transform="translate(3.566 4.111)">
                                                            <path id="Path_79452" data-name="Path 79452"
                                                                  d="M319.454,565.072a3.49,3.49,0,0,1,3.165.062c.043.025.08-.043.037-.065a3.56,3.56,0,0,0-3.239-.062c-.043.022-.006.087.037.065Z"
                                                                  transform="translate(-319.398 -564.648)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14029" data-name="Group 14029"
                                                           transform="translate(4.892 2.612)">
                                                            <path id="Path_79453" data-name="Path 79453"
                                                                  d="M323.734,560.2a3.287,3.287,0,0,1,2.564-.09c.043.025.08-.043.037-.065a3.363,3.363,0,0,0-2.623.083c-.046.012-.025.084.022.071Z"
                                                                  transform="translate(-323.687 -559.803)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14030" data-name="Group 14030"
                                                           transform="translate(6.476 0.204)">
                                                            <path id="Path_79454" data-name="Path 79454"
                                                                  d="M328.868,553.294a1.494,1.494,0,0,0,.371-1.247c-.006-.049-.08-.028-.074.019a1.412,1.412,0,0,1-.35,1.172c-.034.037.019.093.053.056Z"
                                                                  transform="translate(-328.804 -552.019)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14031" data-name="Group 14031"
                                                           transform="translate(6.484 1.328)">
                                                            <path id="Path_79455" data-name="Path 79455"
                                                                  d="M328.877,555.813a1.472,1.472,0,0,1,1.454.285c.037.031.09-.022.053-.056a1.555,1.555,0,0,0-1.528-.306c-.043.019-.025.093.022.077Z"
                                                                  transform="translate(-328.831 -555.653)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14042" data-name="Group 14042"
                                                       transform="translate(19.472 5.098)">
                                                        <path id="Path_79456" data-name="Path 79456"
                                                              d="M305.233,551.344a6.018,6.018,0,0,0-.551-3.254c-.418-.95-.99-1.34-1.612-2.725a10.794,10.794,0,0,1-.532-1.454,11.1,11.1,0,0,0-1.856,2.233,8.639,8.639,0,0,0-1.355,3.322,5.531,5.531,0,0,0,.238,3.267c.108.247,1.07,2.379,2.608,2.41C303.745,555.176,304.992,553,305.233,551.344Z"
                                                              transform="translate(-299.188 -543.91)"
                                                              fill="#1395a2"/>
                                                        <g id="Group_14033" data-name="Group 14033"
                                                           transform="translate(2.568 1.071)">
                                                            <path id="Path_79457" data-name="Path 79457"
                                                                  d="M308.1,557.119c.628-2.561-.619-5.086-.529-7.65a5.536,5.536,0,0,1,.439-2.045c.019-.043-.049-.074-.068-.031-1.064,2.394.031,5.008.229,7.458a7,7,0,0,1-.145,2.255c-.012.046.062.059.074.012Z"
                                                                  transform="translate(-307.488 -547.373)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14034" data-name="Group 14034"
                                                           transform="translate(3.288 6.831)">
                                                            <path id="Path_79458" data-name="Path 79458"
                                                                  d="M309.889,568.826a5.344,5.344,0,0,1,2.382-2.756c.043-.025.016-.1-.028-.071a5.417,5.417,0,0,0-2.422,2.8c-.022.043.049.074.068.031Z"
                                                                  transform="translate(-309.817 -565.993)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14035" data-name="Group 14035"
                                                           transform="translate(0.584 7.705)">
                                                            <path id="Path_79459" data-name="Path 79459"
                                                                  d="M303.833,570.687a4.288,4.288,0,0,0-2.716-1.869c-.046-.009-.059.065-.012.074a4.215,4.215,0,0,1,2.667,1.841c.028.04.09-.006.062-.046Z"
                                                                  transform="translate(-301.076 -568.817)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14036" data-name="Group 14036"
                                                           transform="translate(0.498 5.726)">
                                                            <path id="Path_79460" data-name="Path 79460"
                                                                  d="M303.444,563.837a3.487,3.487,0,0,0-2.6-1.417c-.049,0-.062.071-.012.074a3.417,3.417,0,0,1,2.552,1.386.038.038,0,1,0,.062-.043Z"
                                                                  transform="translate(-300.798 -562.42)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14037" data-name="Group 14037"
                                                           transform="translate(0.761 3.789)">
                                                            <path id="Path_79461" data-name="Path 79461"
                                                                  d="M303.678,557.589a2.273,2.273,0,0,0-1.986-1.429c-.049,0-.062.074-.012.074a2.2,2.2,0,0,1,1.927,1.38c.019.046.09.018.071-.025Z"
                                                                  transform="translate(-301.648 -556.16)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14038" data-name="Group 14038"
                                                           transform="translate(3.093 4.733)">
                                                            <path id="Path_79462" data-name="Path 79462"
                                                                  d="M309.262,561.7a3.487,3.487,0,0,1,2.051-2.413.038.038,0,0,0-.028-.071,3.562,3.562,0,0,0-2.1,2.472c-.009.046.065.059.074.012Z"
                                                                  transform="translate(-309.187 -559.21)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14039" data-name="Group 14039"
                                                           transform="translate(2.744 3.112)">
                                                            <path id="Path_79463" data-name="Path 79463"
                                                                  d="M308.131,556.089a3.3,3.3,0,0,1,1.553-2.045.038.038,0,0,0-.028-.071,3.356,3.356,0,0,0-1.593,2.082c-.019.049.05.08.068.034Z"
                                                                  transform="translate(-308.06 -553.97)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14040" data-name="Group 14040"
                                                           transform="translate(1.864 1.947)">
                                                            <path id="Path_79464" data-name="Path 79464"
                                                                  d="M305.994,551.282a1.5,1.5,0,0,0-.73-1.073c-.043-.025-.074.046-.031.068a1.414,1.414,0,0,1,.687,1.015.037.037,0,1,0,.074-.009Z"
                                                                  transform="translate(-305.213 -550.203)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14041" data-name="Group 14041"
                                                           transform="translate(2.575 2.019)">
                                                            <path id="Path_79465" data-name="Path 79465"
                                                                  d="M307.586,551.459a1.478,1.478,0,0,1,1.141-.947c.049-.009.04-.083-.009-.074a1.56,1.56,0,0,0-1.2.99c-.015.043.053.077.071.031Z"
                                                                  transform="translate(-307.513 -550.438)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14052" data-name="Group 14052"
                                                       transform="translate(16.465 11.855)">
                                                        <path id="Path_79466" data-name="Path 79466"
                                                              d="M291.407,571.372a5.982,5.982,0,0,0,3.066,1.219c1.027.136,1.658-.148,3.168.04a10.941,10.941,0,0,1,1.519.3,11.063,11.063,0,0,0-.947-2.747,8.66,8.66,0,0,0-2.134-2.886,5.519,5.519,0,0,0-2.914-1.494c-.266-.037-2.589-.322-3.415.975C288.907,568.112,290.123,570.308,291.407,571.372Z"
                                                              transform="translate(-289.47 -565.752)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_14043" data-name="Group 14043"
                                                           transform="translate(0.523 1.35)">
                                                            <path id="Path_79467" data-name="Path 79467"
                                                                  d="M291.174,570.186c1.859,1.868,4.668,2.113,6.812,3.523a5.515,5.515,0,0,1,1.519,1.438.038.038,0,0,0,.062-.043c-1.494-2.153-4.294-2.577-6.49-3.681a7.014,7.014,0,0,1-1.853-1.3c-.037-.034-.084.025-.05.059Z"
                                                                  transform="translate(-291.162 -570.117)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14044" data-name="Group 14044"
                                                           transform="translate(1.421 2.11)">
                                                            <path id="Path_79468" data-name="Path 79468"
                                                                  d="M294.071,572.632a5.341,5.341,0,0,1,1.117,3.468c0,.05.074.062.074.012a5.422,5.422,0,0,0-1.129-3.523c-.031-.037-.093.006-.062.043Z"
                                                                  transform="translate(-294.063 -572.574)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14045" data-name="Group 14045"
                                                           transform="translate(1.472 0.789)">
                                                            <path id="Path_79469" data-name="Path 79469"
                                                                  d="M294.269,569.712a4.3,4.3,0,0,0,3.007-1.349c.034-.037-.025-.084-.059-.049a4.225,4.225,0,0,1-2.957,1.324c-.046,0-.04.077.009.074Z"
                                                                  transform="translate(-294.228 -568.302)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14046" data-name="Group 14046"
                                                           transform="translate(3.653 1.742)">
                                                            <path id="Path_79470" data-name="Path 79470"
                                                                  d="M301.319,572.934a3.488,3.488,0,0,0,2.561-1.488c.028-.04-.031-.09-.059-.049a3.416,3.416,0,0,1-2.512,1.46c-.046.006-.04.083.009.077Z"
                                                                  transform="translate(-301.278 -571.382)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14047" data-name="Group 14047"
                                                           transform="translate(5.491 2.973)">
                                                            <path id="Path_79471" data-name="Path 79471"
                                                                  d="M307.252,576.382a2.271,2.271,0,0,0,2.252-.956c.028-.04-.031-.09-.059-.049a2.2,2.2,0,0,1-2.181.928c-.046-.006-.062.071-.012.077Z"
                                                                  transform="translate(-307.221 -575.362)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14048" data-name="Group 14048"
                                                           transform="translate(3.602 3.209)">
                                                            <path id="Path_79472" data-name="Path 79472"
                                                                  d="M301.125,576.192a3.5,3.5,0,0,1,1,3.007.038.038,0,0,0,.074.012,3.56,3.56,0,0,0-1.021-3.075c-.034-.034-.084.022-.049.056Z"
                                                                  transform="translate(-301.113 -576.126)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14049" data-name="Group 14049"
                                                           transform="translate(5.489 3.949)">
                                                            <path id="Path_79473" data-name="Path 79473"
                                                                  d="M307.221,578.577a3.309,3.309,0,0,1,.94,2.388c-.006.049.068.062.074.012a3.361,3.361,0,0,0-.953-2.444c-.031-.04-.093,0-.062.043Z"
                                                                  transform="translate(-307.213 -578.518)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14050" data-name="Group 14050"
                                                           transform="translate(7.448 4.875)">
                                                            <path id="Path_79474" data-name="Path 79474"
                                                                  d="M313.569,581.644a1.508,1.508,0,0,0,1.3-.065c.043-.025,0-.087-.043-.062a1.412,1.412,0,0,1-1.222.059c-.05-.018-.08.049-.034.068Z"
                                                                  transform="translate(-313.546 -581.511)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14051" data-name="Group 14051"
                                                           transform="translate(7.45 4.943)">
                                                            <path id="Path_79475" data-name="Path 79475"
                                                                  d="M313.561,581.789a1.477,1.477,0,0,1,.217,1.466c-.019.046.049.077.068.031a1.554,1.554,0,0,0-.223-1.544c-.031-.034-.093.009-.062.046Z"
                                                                  transform="translate(-313.553 -581.73)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14062" data-name="Group 14062"
                                                       transform="translate(9.666 4.219)">
                                                        <path id="Path_79476" data-name="Path 79476"
                                                              d="M273.225,548.952a6.043,6.043,0,0,0,.835-3.193c.006-1.036-.353-1.627-.35-3.146a11.033,11.033,0,0,1,.111-1.544,10.972,10.972,0,0,0-2.608,1.278,8.674,8.674,0,0,0-2.6,2.472,5.506,5.506,0,0,0-1.123,3.075c0,.269,0,2.608,1.389,3.267C270.3,551.832,272.328,550.357,273.225,548.952Z"
                                                              transform="translate(-267.489 -541.07)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_14053" data-name="Group 14053"
                                                           transform="translate(1.667 0.846)">
                                                            <path id="Path_79477" data-name="Path 79477"
                                                                  d="M272.95,552.75c1.624-2.076,1.525-4.891,2.66-7.2a5.453,5.453,0,0,1,1.24-1.683c.037-.034-.016-.09-.049-.056-1.952,1.748-2.029,4.578-2.855,6.9a7,7,0,0,1-1.058,2c-.034.037.031.077.062.04Z"
                                                                  transform="translate(-272.879 -543.806)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14054" data-name="Group 14054"
                                                           transform="translate(2.311 7.198)">
                                                            <path id="Path_79478" data-name="Path 79478"
                                                                  d="M275.021,565.951a5.348,5.348,0,0,1,3.3-1.534c.049,0,.053-.08,0-.077a5.408,5.408,0,0,0-3.356,1.553c-.037.034.016.093.05.059Z"
                                                                  transform="translate(-274.959 -564.34)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14055" data-name="Group 14055"
                                                           transform="translate(0.626 5.898)">
                                                            <path id="Path_79479" data-name="Path 79479"
                                                                  d="M271.281,562.963a4.289,4.289,0,0,0-1.711-2.818c-.04-.028-.08.034-.043.065a4.226,4.226,0,0,1,1.677,2.772c.009.043.084.028.077-.018Z"
                                                                  transform="translate(-269.512 -560.137)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14056" data-name="Group 14056"
                                                           transform="translate(1.359 4.06)">
                                                            <path id="Path_79480" data-name="Path 79480"
                                                                  d="M273.734,556.56a3.487,3.487,0,0,0-1.791-2.36c-.043-.022-.087.04-.043.062a3.407,3.407,0,0,1,1.757,2.314c.012.046.087.031.077-.015Z"
                                                                  transform="translate(-271.882 -554.195)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14057" data-name="Group 14057"
                                                           transform="translate(2.395 2.402)">
                                                            <path id="Path_79481" data-name="Path 79481"
                                                                  d="M276.518,550.956a2.265,2.265,0,0,0-1.225-2.116c-.043-.022-.087.04-.043.065a2.2,2.2,0,0,1,1.191,2.051c0,.046.074.049.077,0Z"
                                                                  transform="translate(-275.232 -548.835)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14058" data-name="Group 14058"
                                                           transform="translate(3.132 5.065)">
                                                            <path id="Path_79482" data-name="Path 79482"
                                                                  d="M277.684,558.881a3.487,3.487,0,0,1,2.861-1.358.039.039,0,0,0,0-.077,3.563,3.563,0,0,0-2.926,1.392.038.038,0,1,0,.062.043Z"
                                                                  transform="translate(-277.614 -557.444)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14059" data-name="Group 14059"
                                                           transform="translate(3.635 3.244)">
                                                            <path id="Path_79483" data-name="Path 79483"
                                                                  d="M279.3,552.86a3.3,3.3,0,0,1,2.255-1.225.039.039,0,0,0,0-.077,3.357,3.357,0,0,0-2.308,1.244c-.037.034.015.093.049.059Z"
                                                                  transform="translate(-279.239 -551.557)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14060" data-name="Group 14060"
                                                           transform="translate(4.156 1.17)">
                                                            <path id="Path_79484" data-name="Path 79484"
                                                                  d="M281.215,546.148a1.5,1.5,0,0,0-.226-1.281c-.028-.04-.084.012-.056.049a1.42,1.42,0,0,1,.21,1.207c-.012.049.059.071.071.025Z"
                                                                  transform="translate(-280.925 -544.853)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14061" data-name="Group 14061"
                                                           transform="translate(4.382 1.962)">
                                                            <path id="Path_79485" data-name="Path 79485"
                                                                  d="M281.714,547.928a1.467,1.467,0,0,1,1.429-.393c.046.012.071-.059.025-.071a1.553,1.553,0,0,0-1.5.408c-.034.034.016.089.05.056Z"
                                                                  transform="translate(-281.653 -547.412)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14072" data-name="Group 14072"
                                                       transform="translate(4.348 13.748)">
                                                        <path id="Path_79486" data-name="Path 79486"
                                                              d="M257.115,578.022a5.977,5.977,0,0,1-3.1-1.138c-.857-.585-1.135-1.219-2.385-2.082a10.679,10.679,0,0,0-1.333-.789,10.991,10.991,0,0,1,2.537-1.414,8.647,8.647,0,0,1,3.514-.724,5.53,5.53,0,0,1,3.168.832c.223.152,2.144,1.488,1.89,3C261.152,577.261,258.782,578.087,257.115,578.022Z"
                                                              transform="translate(-250.3 -571.874)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_14063" data-name="Group 14063"
                                                           transform="translate(1.102 1.875)">
                                                            <path id="Path_79487" data-name="Path 79487"
                                                                  d="M263.424,580.012c-2.633.148-4.888-1.541-7.424-1.924a5.468,5.468,0,0,0-2.091.059.038.038,0,0,1-.019-.074c2.549-.606,4.919.947,7.291,1.59a7.051,7.051,0,0,0,2.243.272.039.039,0,0,1,0,.077Z"
                                                                  transform="translate(-253.863 -577.935)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14064" data-name="Group 14064"
                                                           transform="translate(6.278 3.843)">
                                                            <path id="Path_79488" data-name="Path 79488"
                                                                  d="M273.813,584.368a5.349,5.349,0,0,0-3.146,1.838c-.031.037-.1,0-.065-.04a5.418,5.418,0,0,1,3.192-1.868.037.037,0,1,1,.019.071Z"
                                                                  transform="translate(-270.594 -584.295)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14065" data-name="Group 14065"
                                                           transform="translate(8.074 0.832)">
                                                            <path id="Path_79489" data-name="Path 79489"
                                                                  d="M277.739,577.613A4.3,4.3,0,0,1,276.4,574.6c0-.049.074-.046.077,0a4.232,4.232,0,0,0,1.318,2.961c.034.034-.022.083-.056.049Z"
                                                                  transform="translate(-276.4 -574.565)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14066" data-name="Group 14066"
                                                           transform="translate(6.115 0.387)">
                                                            <path id="Path_79490" data-name="Path 79490"
                                                                  d="M271.013,575.978a3.486,3.486,0,0,1-.916-2.818c.006-.05.084-.046.077,0a3.4,3.4,0,0,0,.9,2.762c.031.037-.025.09-.059.053Z"
                                                                  transform="translate(-270.069 -573.125)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14067" data-name="Group 14067"
                                                           transform="translate(4.17 0.292)">
                                                            <path id="Path_79491" data-name="Path 79491"
                                                                  d="M264.842,575.068a2.272,2.272,0,0,1-1.039-2.215c.006-.046.084-.046.077,0A2.2,2.2,0,0,0,264.885,575c.037.028,0,.093-.043.065Z"
                                                                  transform="translate(-263.781 -572.819)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14068" data-name="Group 14068"
                                                           transform="translate(4.313 3.207)">
                                                            <path id="Path_79492" data-name="Path 79492"
                                                                  d="M267.059,582.314a3.48,3.48,0,0,0-2.747,1.575.038.038,0,0,1-.065-.04,3.57,3.57,0,0,1,2.812-1.609c.049,0,.049.071,0,.074Z"
                                                                  transform="translate(-264.242 -582.24)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14069" data-name="Group 14069"
                                                           transform="translate(2.877 2.494)">
                                                            <path id="Path_79493" data-name="Path 79493"
                                                                  d="M261.964,580.013a3.293,3.293,0,0,0-2.292,1.151.038.038,0,0,1-.065-.04,3.36,3.36,0,0,1,2.339-1.185c.049-.009.068.065.019.074Z"
                                                                  transform="translate(-259.602 -579.938)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14070" data-name="Group 14070"
                                                           transform="translate(2.179 1.037)">
                                                            <path id="Path_79494" data-name="Path 79494"
                                                                  d="M258.267,576.187a1.488,1.488,0,0,1-.922-.916c-.015-.046.059-.062.074-.019a1.4,1.4,0,0,0,.869.86c.046.019.025.09-.022.074Z"
                                                                  transform="translate(-257.343 -575.227)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14071" data-name="Group 14071"
                                                           transform="translate(1.9 1.926)">
                                                            <path id="Path_79495" data-name="Path 79495"
                                                                  d="M257.658,578.173a1.468,1.468,0,0,0-1.138.95c-.016.047-.09.025-.074-.022a1.562,1.562,0,0,1,1.194-1c.049-.006.068.068.019.074Z"
                                                                  transform="translate(-256.443 -578.099)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14082" data-name="Group 14082"
                                                       transform="translate(12.021 14.736)">
                                                        <path id="Path_79496" data-name="Path 79496"
                                                              d="M280.34,575.8a5.991,5.991,0,0,1,2.233,2.428c.492.913.455,1.6,1.169,2.942a10.691,10.691,0,0,0,.823,1.312,11.005,11.005,0,0,1-2.9.1,8.66,8.66,0,0,1-3.455-.962,5.5,5.5,0,0,1-2.435-2.19c-.13-.235-1.225-2.3-.306-3.536C276.4,574.634,278.889,574.983,280.34,575.8Z"
                                                              transform="translate(-275.104 -575.065)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_14073" data-name="Group 14073"
                                                           transform="translate(0.752 0.926)">
                                                            <path id="Path_79497" data-name="Path 79497"
                                                                  d="M277.592,578.063c2.41,1.07,3.641,3.6,5.723,5.1a5.443,5.443,0,0,0,1.884.9.038.038,0,0,1-.019.074c-2.543-.628-3.941-3.09-5.757-4.748a7.062,7.062,0,0,0-1.872-1.268c-.04-.019,0-.083.04-.065Z"
                                                                  transform="translate(-277.534 -578.059)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14074" data-name="Group 14074"
                                                           transform="translate(1.785 1.3)">
                                                            <path id="Path_79498" data-name="Path 79498"
                                                                  d="M280.919,579.468a5.353,5.353,0,0,0,3.638-.2c.043-.018.084.046.037.065a5.42,5.42,0,0,1-3.694.2c-.046-.015-.028-.09.019-.074Z"
                                                                  transform="translate(-280.873 -579.269)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14075" data-name="Group 14075"
                                                           transform="translate(1.632 1.538)">
                                                            <path id="Path_79499" data-name="Path 79499"
                                                                  d="M280.636,580.062a4.31,4.31,0,0,1-.186,3.291c-.022.043-.087.006-.068-.037a4.225,4.225,0,0,0,.179-3.236c-.015-.043.059-.065.074-.019Z"
                                                                  transform="translate(-280.379 -580.036)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14076" data-name="Group 14076"
                                                           transform="translate(3.145 3.183)">
                                                            <path id="Path_79500" data-name="Path 79500"
                                                                  d="M285.817,585.382a3.5,3.5,0,0,1-.473,2.923c-.028.04-.1,0-.068-.037a3.415,3.415,0,0,0,.467-2.868c-.015-.043.059-.065.074-.018Z"
                                                                  transform="translate(-285.269 -585.356)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14077" data-name="Group 14077"
                                                           transform="translate(4.837 4.651)">
                                                            <path id="Path_79501" data-name="Path 79501"
                                                                  d="M290.9,590.118a2.276,2.276,0,0,1-.087,2.444c-.028.04-.1,0-.068-.037a2.2,2.2,0,0,0,.09-2.37.037.037,0,0,1,.065-.037Z"
                                                                  transform="translate(-290.739 -590.1)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14078" data-name="Group 14078"
                                                           transform="translate(3.589 2.997)">
                                                            <path id="Path_79502" data-name="Path 79502"
                                                                  d="M286.762,584.9a3.5,3.5,0,0,0,3.161-.142.037.037,0,1,1,.037.065,3.572,3.572,0,0,1-3.239.145c-.04-.022,0-.09.04-.068Z"
                                                                  transform="translate(-286.704 -584.752)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14079" data-name="Group 14079"
                                                           transform="translate(4.956 4.637)">
                                                            <path id="Path_79503" data-name="Path 79503"
                                                                  d="M291.169,590.057a3.3,3.3,0,0,0,2.568.025.037.037,0,1,1,.037.065,3.357,3.357,0,0,1-2.623-.015.038.038,0,0,1,.019-.074Z"
                                                                  transform="translate(-291.123 -590.056)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14080" data-name="Group 14080"
                                                           transform="translate(6.577 6.114)">
                                                            <path id="Path_79504" data-name="Path 79504"
                                                                  d="M296.428,594.843a1.5,1.5,0,0,1,.4,1.237c-.006.049-.08.031-.074-.019a1.416,1.416,0,0,0-.38-1.163c-.034-.037.019-.093.053-.056Z"
                                                                  transform="translate(-296.364 -594.83)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14081" data-name="Group 14081"
                                                           transform="translate(6.586 5.785)">
                                                            <path id="Path_79505" data-name="Path 79505"
                                                                  d="M296.44,594.1a1.478,1.478,0,0,0,1.448-.322c.037-.034.09.019.056.053a1.554,1.554,0,0,1-1.519.343c-.049-.015-.031-.09.015-.074Z"
                                                                  transform="translate(-296.395 -593.764)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14092" data-name="Group 14092"
                                                       transform="translate(9.397 11.742)">
                                                        <path id="Path_79506" data-name="Path 79506"
                                                              d="M272.687,569.309a6.009,6.009,0,0,1-.681,3.23c-.458.931-1.043,1.3-1.72,2.66a11.246,11.246,0,0,0-.591,1.432,10.907,10.907,0,0,1-1.763-2.308,8.627,8.627,0,0,1-1.222-3.375,5.515,5.515,0,0,1,.368-3.254c.117-.241,1.163-2.336,2.7-2.3C271.354,565.42,272.511,567.647,272.687,569.309Z"
                                                              transform="translate(-266.621 -565.389)"
                                                              fill="#19c6d8"/>
                                                        <g id="Group_14083" data-name="Group 14083"
                                                           transform="translate(2.423 0.394)">
                                                            <path id="Path_79507" data-name="Path 79507"
                                                                  d="M275.371,566.693c.526,2.583-.823,5.058-.835,7.625a5.51,5.51,0,0,0,.359,2.06.038.038,0,0,1-.071.028c-.965-2.435.229-5,.526-7.443a7.089,7.089,0,0,0-.053-2.258c-.012-.049.065-.059.074-.012Z"
                                                                  transform="translate(-274.454 -566.662)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14084" data-name="Group 14084"
                                                           transform="translate(3.397 1.561)">
                                                            <path id="Path_79508" data-name="Path 79508"
                                                                  d="M277.676,570.458a5.352,5.352,0,0,0,2.271,2.849c.04.025.012.1-.031.068a5.439,5.439,0,0,1-2.311-2.889c-.015-.043.056-.074.071-.028Z"
                                                                  transform="translate(-277.603 -570.435)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14085" data-name="Group 14085"
                                                           transform="translate(0.621 1.611)">
                                                            <path id="Path_79509" data-name="Path 79509"
                                                                  d="M271.456,570.659a4.314,4.314,0,0,1-2.787,1.76c-.049.009-.056-.068-.009-.074a4.214,4.214,0,0,0,2.738-1.732c.028-.043.087.006.059.046Z"
                                                                  transform="translate(-268.628 -570.596)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14086" data-name="Group 14086"
                                                           transform="translate(0.456 4.033)">
                                                            <path id="Path_79510" data-name="Path 79510"
                                                                  d="M270.793,578.486a3.487,3.487,0,0,1-2.657,1.312c-.05,0-.059-.074-.009-.074a3.408,3.408,0,0,0,2.6-1.284c.034-.037.093.009.062.046Z"
                                                                  transform="translate(-268.094 -578.426)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14087" data-name="Group 14087"
                                                           transform="translate(0.641 5.953)">
                                                            <path id="Path_79511" data-name="Path 79511"
                                                                  d="M270.778,584.685a2.277,2.277,0,0,1-2.042,1.349c-.049,0-.059-.074-.009-.074a2.194,2.194,0,0,0,1.98-1.3c.022-.046.093-.019.071.028Z"
                                                                  transform="translate(-268.694 -584.633)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14088" data-name="Group 14088"
                                                           transform="translate(3.105 3.987)">
                                                            <path id="Path_79512" data-name="Path 79512"
                                                                  d="M276.736,578.309a3.5,3.5,0,0,0,1.952,2.493c.043.022.012.09-.031.068a3.562,3.562,0,0,1-2-2.552c-.006-.05.068-.056.077-.009Z"
                                                                  transform="translate(-276.659 -578.278)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14089" data-name="Group 14089"
                                                           transform="translate(2.679 5.968)">
                                                            <path id="Path_79513" data-name="Path 79513"
                                                                  d="M275.354,584.7a3.294,3.294,0,0,0,1.469,2.1c.043.022.012.09-.031.068a3.365,3.365,0,0,1-1.51-2.144c-.019-.043.053-.071.071-.028Z"
                                                                  transform="translate(-275.28 -584.68)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14090" data-name="Group 14090"
                                                           transform="translate(1.67 8.146)">
                                                            <path id="Path_79514" data-name="Path 79514"
                                                                  d="M272.843,591.765a1.5,1.5,0,0,1-.773,1.046c-.043.022-.071-.046-.028-.071a1.41,1.41,0,0,0,.727-.987.038.038,0,0,1,.074.012Z"
                                                                  transform="translate(-272.02 -591.722)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14091" data-name="Group 14091"
                                                           transform="translate(2.423 8.15)">
                                                            <path id="Path_79515" data-name="Path 79515"
                                                                  d="M274.526,591.758a1.477,1.477,0,0,0,1.1.99c.046.009.037.083-.012.074a1.556,1.556,0,0,1-1.163-1.039c-.015-.04.056-.071.071-.025Z"
                                                                  transform="translate(-274.453 -591.735)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14102" data-name="Group 14102"
                                                       transform="translate(3.507 9.046)">
                                                        <path id="Path_79516" data-name="Path 79516"
                                                              d="M252.26,563.348a5.965,5.965,0,0,1-2.4-2.264c-.557-.875-.566-1.565-1.37-2.855a11.018,11.018,0,0,0-.913-1.25,10.9,10.9,0,0,1,2.889-.3,8.645,8.645,0,0,1,3.517.718,5.5,5.5,0,0,1,2.583,2.014c.145.226,1.383,2.212.554,3.508C256.273,564.239,253.767,564.063,252.26,563.348Z"
                                                              transform="translate(-247.58 -556.674)"
                                                              fill="#1395a2"/>
                                                        <g id="Group_14093" data-name="Group 14093"
                                                           transform="translate(1.043 0.635)">
                                                            <path id="Path_79517" data-name="Path 79517"
                                                                  d="M258.991,564.265c-2.478-.9-3.885-3.341-6.066-4.693a5.478,5.478,0,0,0-1.943-.77.038.038,0,0,1,.012-.074c2.583.445,4.148,2.809,6.076,4.334a6.986,6.986,0,0,0,1.955,1.132c.043.019.012.087-.034.071Z"
                                                                  transform="translate(-250.951 -558.727)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14094" data-name="Group 14094"
                                                           transform="translate(4.35 5.468)">
                                                            <path id="Path_79518" data-name="Path 79518"
                                                                  d="M265.316,574.561a5.334,5.334,0,0,0-3.613.449c-.043.022-.087-.04-.043-.062a5.4,5.4,0,0,1,3.669-.461.038.038,0,1,1-.012.074Z"
                                                                  transform="translate(-261.642 -574.351)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14095" data-name="Group 14095"
                                                           transform="translate(7.612 2.297)">
                                                            <path id="Path_79519" data-name="Path 79519"
                                                                  d="M272.538,567.418a4.3,4.3,0,0,1-.043-3.3c.019-.046.087-.012.068.031a4.214,4.214,0,0,0,.046,3.239c.019.046-.053.071-.071.028Z"
                                                                  transform="translate(-272.188 -564.098)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14096" data-name="Group 14096"
                                                           transform="translate(5.843 1.131)">
                                                            <path id="Path_79520" data-name="Path 79520"
                                                                  d="M266.675,563.3a3.5,3.5,0,0,1,.269-2.951c.025-.04.093-.009.068.031a3.419,3.419,0,0,0-.266,2.892c.015.046-.056.071-.071.028Z"
                                                                  transform="translate(-266.467 -560.329)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14097" data-name="Group 14097"
                                                           transform="translate(4.243 0.274)">
                                                            <path id="Path_79521" data-name="Path 79521"
                                                                  d="M261.7,560.022a2.269,2.269,0,0,1-.084-2.444c.025-.04.093-.009.068.031a2.2,2.2,0,0,0,.077,2.37c.031.04-.034.084-.062.043Z"
                                                                  transform="translate(-261.296 -557.559)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14098" data-name="Group 14098"
                                                           transform="translate(2.895 3.87)">
                                                            <path id="Path_79522" data-name="Path 79522"
                                                                  d="M260.144,569.477a3.493,3.493,0,0,0-3.146.365.038.038,0,0,1-.043-.062,3.572,3.572,0,0,1,3.22-.371c.046.016.012.087-.031.068Z"
                                                                  transform="translate(-256.938 -569.185)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14099" data-name="Group 14099"
                                                           transform="translate(2.023 2.508)">
                                                            <path id="Path_79523" data-name="Path 79523"
                                                                  d="M256.739,565.037a3.3,3.3,0,0,0-2.561.155.038.038,0,0,1-.043-.062,3.353,3.353,0,0,1,2.617-.167c.046.009.034.087-.012.074Z"
                                                                  transform="translate(-254.118 -564.781)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14100" data-name="Group 14100"
                                                           transform="translate(2.413 0.16)">
                                                            <path id="Path_79524" data-name="Path 79524"
                                                                  d="M255.872,558.428a1.493,1.493,0,0,1-.489-1.206c0-.05.077-.034.074.012a1.424,1.424,0,0,0,.461,1.135c.037.034-.012.093-.046.059Z"
                                                                  transform="translate(-255.381 -557.191)"
                                                                  fill="#fff"/>
                                                        </g>
                                                        <g id="Group_14101" data-name="Group 14101"
                                                           transform="translate(1.425 1.288)">
                                                            <path id="Path_79525" data-name="Path 79525"
                                                                  d="M253.676,560.956a1.475,1.475,0,0,0-1.42.424c-.034.037-.093-.012-.059-.049a1.544,1.544,0,0,1,1.491-.448c.046.012.034.087-.012.074Z"
                                                                  transform="translate(-252.187 -560.839)"
                                                                  fill="#fff"/>
                                                        </g>
                                                    </g>
                                                    <g id="Group_14103" data-name="Group 14103"
                                                       transform="translate(4.851 9.125)">
                                                        <path id="Path_79526" data-name="Path 79526"
                                                              d="M264.73,558.771c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S265.234,557.237,264.73,558.771Z"
                                                              transform="translate(-258.207 -556.926)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79527" data-name="Path 79527"
                                                              d="M266.773,569.792c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.472,3.276-1.089.195.894-.043,1.878S268.341,570.172,266.773,569.792Z"
                                                              transform="translate(-260.494 -563.26)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79528" data-name="Path 79528"
                                                              d="M256.967,572.585c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S256.708,574.181,256.967,572.585Z"
                                                              transform="translate(-255.378 -565.942)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79529" data-name="Path 79529"
                                                              d="M253.042,563.289c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.328-.854-.241-1.862S251.431,563.149,253.042,563.289Z"
                                                              transform="translate(-251.924 -561.311)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79530" data-name="Path 79530"
                                                              d="M263.152,568.625a.918.918,0,1,1-.588-1.157A.917.917,0,0,1,263.152,568.625Z"
                                                              transform="translate(-258.442 -564.175)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14104" data-name="Group 14104"
                                                       transform="translate(2.418 2.904)">
                                                        <path id="Path_79531" data-name="Path 79531"
                                                              d="M256.88,538.661c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S257.381,537.127,256.88,538.661Z"
                                                              transform="translate(-250.353 -536.816)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79532" data-name="Path 79532"
                                                              d="M258.913,549.672c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.473,3.276-1.089.195.894-.043,1.878S260.485,550.055,258.913,549.672Z"
                                                              transform="translate(-252.634 -543.143)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79533" data-name="Path 79533"
                                                              d="M249.115,552.475c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S248.853,554.068,249.115,552.475Z"
                                                              transform="translate(-247.523 -545.832)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79534" data-name="Path 79534"
                                                              d="M245.181,543.179c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.331-.854-.241-1.862S243.572,543.039,245.181,543.179Z"
                                                              transform="translate(-244.061 -541.201)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79535" data-name="Path 79535"
                                                              d="M255.707,542.752c-.015-.421-.059-.838-.034-1.268a1.661,1.661,0,0,1,.476-1.154,1.619,1.619,0,0,0-.362,1.157,12.276,12.276,0,0,0,.149,1.244Z"
                                                              transform="translate(-252.076 -539.243)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79536" data-name="Path 79536"
                                                              d="M257.24,544.348a2.854,2.854,0,0,0,.173-.9,1.281,1.281,0,0,1,.517-.8,1.211,1.211,0,0,0-.4.817c-.012.155,0,.309,0,.473a1.31,1.31,0,0,1-.083.51Z"
                                                              transform="translate(-253.163 -540.845)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79537" data-name="Path 79537"
                                                              d="M258.626,549.326a.322.322,0,0,1,.077.022l.034.019.071.034.139.065a1.954,1.954,0,0,0,.285.1.879.879,0,0,0,.575-.04,4.73,4.73,0,0,1,.585-.245,1.213,1.213,0,0,1,.631.012,1.187,1.187,0,0,0-.616.043,4.561,4.561,0,0,0-.554.294,1.021,1.021,0,0,1-.656.105,2.231,2.231,0,0,1-.322-.077l-.266-.093Z"
                                                              transform="translate(-254.109 -545.4)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79538" data-name="Path 79538"
                                                              d="M258.06,551.011a.27.27,0,0,1,.235-.062,1.278,1.278,0,0,1,.161.047,2.112,2.112,0,0,1,.282.13,2,2,0,0,1,.479.384,1.177,1.177,0,0,0,.455.346.846.846,0,0,0,.572.006.879.879,0,0,1-.591.046,1.3,1.3,0,0,1-.513-.319,1.839,1.839,0,0,0-.476-.312,1.7,1.7,0,0,0-.266-.093c-.09-.031-.192-.028-.17-.019Z"
                                                              transform="translate(-253.73 -546.574)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79539" data-name="Path 79539"
                                                              d="M252.919,551.92a.108.108,0,0,0-.065-.025.114.114,0,0,0-.114.087.078.078,0,0,0,0,.052.1.1,0,0,0,.031.043.105.105,0,0,0,.111.009c.056-.037.04-.062.037-.04a.133.133,0,0,1-.015.04l-.009.019-.019.034-.074.142-.148.281a1.5,1.5,0,0,0-.2.578,1.091,1.091,0,0,1-.08.322.813.813,0,0,1-.2.263,2.12,2.12,0,0,1-.554.322,2.177,2.177,0,0,0,.517-.362.738.738,0,0,0,.21-.554,1.638,1.638,0,0,1,.155-.64l.124-.294.062-.148.015-.037.009-.019s0,.009,0,0a.144.144,0,0,1,.074-.108.118.118,0,0,1,.13.012.186.186,0,0,1,.043.059.113.113,0,0,1,.006.071.117.117,0,0,1-.121.093.109.109,0,0,1-.071-.028Z"
                                                              transform="translate(-249.282 -547.217)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79540" data-name="Path 79540"
                                                              d="M255.847,551.95a.838.838,0,0,0-.124.424,2.9,2.9,0,0,0-.015.492,1.721,1.721,0,0,0,.08.486.666.666,0,0,0,.306.374.711.711,0,0,1-.359-.353,1.743,1.743,0,0,1-.142-.495,3.166,3.166,0,0,1-.043-.513.99.99,0,0,1,.108-.544Z"
                                                              transform="translate(-251.996 -547.179)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79541" data-name="Path 79541"
                                                              d="M248.941,548.75a3.207,3.207,0,0,0-1.046-.628l-.588-.22c-.189-.065-.421-.136-.588.012.155-.164.411-.118.606-.068l.613.167a3.35,3.35,0,0,1,1.157.563Z"
                                                              transform="translate(-245.898 -544.403)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79542" data-name="Path 79542"
                                                              d="M249.893,551.489a3.1,3.1,0,0,1-.572-.037,1.918,1.918,0,0,0-.532,0,1.842,1.842,0,0,0-.968.464,1.9,1.9,0,0,1,.947-.575,2.063,2.063,0,0,1,.566-.062,2.715,2.715,0,0,0,.532-.019Z"
                                                              transform="translate(-246.657 -546.792)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79543" data-name="Path 79543"
                                                              d="M255.292,548.515a.918.918,0,1,1-.588-1.157A.916.916,0,0,1,255.292,548.515Z"
                                                              transform="translate(-250.581 -544.065)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14105" data-name="Group 14105"
                                                       transform="translate(11.297 8.215)">
                                                        <path id="Path_79544" data-name="Path 79544"
                                                              d="M285.58,555.831c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S286.081,554.3,285.58,555.831Z"
                                                              transform="translate(-279.053 -553.986)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79545" data-name="Path 79545"
                                                              d="M287.623,566.852c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.473,3.276-1.089.195.894-.043,1.878S289.191,567.232,287.623,566.852Z"
                                                              transform="translate(-281.341 -560.32)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79546" data-name="Path 79546"
                                                              d="M277.815,569.645c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S277.553,571.241,277.815,569.645Z"
                                                              transform="translate(-276.223 -563.002)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79547" data-name="Path 79547"
                                                              d="M273.881,560.349c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.331-.854-.241-1.862S272.272,560.21,273.881,560.349Z"
                                                              transform="translate(-272.761 -558.371)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79548" data-name="Path 79548"
                                                              d="M284.28,561.679a4.033,4.033,0,0,1,.012-.551,5.1,5.1,0,0,0-.022-.529,2.323,2.323,0,0,1,.015-.548.991.991,0,0,1,.22-.492.965.965,0,0,0-.164.5,2.317,2.317,0,0,0,.04.526,4.952,4.952,0,0,1,.077.541,4,4,0,0,0,.043.523Z"
                                                              transform="translate(-280.704 -557.836)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79549" data-name="Path 79549"
                                                              d="M285.04,562.935a2.375,2.375,0,0,1,1.024-1.575,2.26,2.26,0,0,0-.8,1.6Z"
                                                              transform="translate(-281.242 -559.079)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79550" data-name="Path 79550"
                                                              d="M286.75,566.3a8.76,8.76,0,0,0,1.878-.179,8.825,8.825,0,0,1-1.868.408Z"
                                                              transform="translate(-282.423 -562.367)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79551" data-name="Path 79551"
                                                              d="M287.043,567.33a1.893,1.893,0,0,0,.452.136c.164.037.328.077.489.124a8.382,8.382,0,0,1,.95.328,8.821,8.821,0,0,0-.974-.217c-.164-.028-.328-.046-.492-.065a1.872,1.872,0,0,1-.517-.1Z"
                                                              transform="translate(-282.561 -563.202)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79552" data-name="Path 79552"
                                                              d="M287.161,568.17l1.339.817-1.451-.619Z"
                                                              transform="translate(-282.63 -563.782)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79553" data-name="Path 79553"
                                                              d="M282.084,568.927a3.826,3.826,0,0,1-1.284,2.131,3.7,3.7,0,0,0,1.058-2.168Z"
                                                              transform="translate(-278.313 -564.28)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79554" data-name="Path 79554"
                                                              d="M284.722,569.695c.019,0,.043-.022.037-.018s-.009.015-.012.031a.9.9,0,0,0,0,.136c0,.1.009.2.019.3a4.43,4.43,0,0,0,.108.6,11.78,11.78,0,0,0,.377,1.176,11.6,11.6,0,0,1-.489-1.142,4.513,4.513,0,0,1-.167-.606c-.019-.105-.037-.207-.046-.315a.966.966,0,0,1-.009-.173.263.263,0,0,1,.034-.117.182.182,0,0,1,.164-.1Z"
                                                              transform="translate(-280.892 -564.679)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79555" data-name="Path 79555"
                                                              d="M278.5,567.561l-1.067-.4-.538-.2a.767.767,0,0,0-.272-.046.269.269,0,0,0-.229.139.291.291,0,0,1,.226-.167.707.707,0,0,1,.291.022l.557.145,1.117.291Z"
                                                              transform="translate(-275.267 -562.895)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79556" data-name="Path 79556"
                                                              d="M279.16,565.659a15.178,15.178,0,0,1-1.93-.959,15.44,15.44,0,0,0,1.983.736Z"
                                                              transform="translate(-275.848 -561.386)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79557" data-name="Path 79557"
                                                              d="M283.992,565.685a.918.918,0,1,1-.588-1.157A.916.916,0,0,1,283.992,565.685Z"
                                                              transform="translate(-279.281 -561.235)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14106" data-name="Group 14106"
                                                       transform="translate(20.769 9.499)">
                                                        <path id="Path_79558" data-name="Path 79558"
                                                              d="M316.2,559.981c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S316.7,558.447,316.2,559.981Z"
                                                              transform="translate(-309.673 -558.136)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79559" data-name="Path 79559"
                                                              d="M318.233,571c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.473,3.276-1.089.195.894-.043,1.878S319.8,571.382,318.233,571Z"
                                                              transform="translate(-311.954 -564.47)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79560" data-name="Path 79560"
                                                              d="M308.427,573.8c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S308.167,575.4,308.427,573.8Z"
                                                              transform="translate(-306.838 -567.159)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79561" data-name="Path 79561"
                                                              d="M304.5,564.5c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.331-.854-.241-1.862S302.892,564.36,304.5,564.5Z"
                                                              transform="translate(-303.381 -562.521)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79562" data-name="Path 79562"
                                                              d="M314.612,569.835a.918.918,0,1,1-.588-1.157A.916.916,0,0,1,314.612,569.835Z"
                                                              transform="translate(-309.901 -565.385)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14107" data-name="Group 14107"
                                                       transform="translate(15.446 5.109)">
                                                        <path id="Path_79563" data-name="Path 79563"
                                                              d="M299,545.791c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S299.5,544.257,299,545.791Z"
                                                              transform="translate(-292.47 -543.946)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79564" data-name="Path 79564"
                                                              d="M301.033,556.8c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.473,3.276-1.089.195.894-.043,1.878S302.6,557.185,301.033,556.8Z"
                                                              transform="translate(-294.751 -550.273)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79565" data-name="Path 79565"
                                                              d="M291.235,559.6c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S290.973,561.2,291.235,559.6Z"
                                                              transform="translate(-289.64 -552.962)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79566" data-name="Path 79566"
                                                              d="M289.553,553.287a2.98,2.98,0,0,1-1.485.637,4.355,4.355,0,0,1-1.089.037c-1.609-.139-.328-.854-.244-1.862,0-.028,0-.056.006-.08.022-.977-1.012-1.847.551-1.711a4.491,4.491,0,0,1,1.058.22,3.457,3.457,0,0,1,.665.3,2.376,2.376,0,0,1,.829.764,1.308,1.308,0,0,1,.2.792,1.516,1.516,0,0,1-.028.17v0A1.4,1.4,0,0,1,289.553,553.287Z"
                                                              transform="translate(-286.173 -548.331)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79567" data-name="Path 79567"
                                                              d="M297.018,550.373a1.221,1.221,0,0,0-.08-.557c-.065-.189-.148-.38-.21-.581a1.314,1.314,0,0,1-.049-.628,1.177,1.177,0,0,1,.263-.557,1.176,1.176,0,0,0-.207.566,1.215,1.215,0,0,0,.1.582c.074.186.176.362.263.557a1.424,1.424,0,0,1,.148.64Z"
                                                              transform="translate(-293.415 -546.781)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79568" data-name="Path 79568"
                                                              d="M298.67,551.726a1.438,1.438,0,0,1,.161-.572c.074-.17.155-.34.241-.5s.176-.328.272-.486.176-.343.35-.424c-.164.1-.213.291-.3.452s-.152.337-.22.507-.13.343-.186.517a1.269,1.269,0,0,0-.093.5Z"
                                                              transform="translate(-294.804 -547.948)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79569" data-name="Path 79569"
                                                              d="M300.063,556.85a4.924,4.924,0,0,0,2.227.012,5.02,5.02,0,0,1-2.271.213Z"
                                                              transform="translate(-295.737 -552.858)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79570" data-name="Path 79570"
                                                              d="M300.083,557.96l1.859.557-1.912-.334Z"
                                                              transform="translate(-295.744 -553.625)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79571" data-name="Path 79571"
                                                              d="M298.286,559.52l.272,2.008-.5-1.955Z"
                                                              transform="translate(-294.383 -554.702)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79572" data-name="Path 79572"
                                                              d="M296.458,559.542l-.708,1.8.489-1.865Z"
                                                              transform="translate(-292.788 -554.675)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79573" data-name="Path 79573"
                                                              d="M292.164,558.089l-2.1-.167,2.116-.062Z"
                                                              transform="translate(-288.858 -553.556)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79574" data-name="Path 79574"
                                                              d="M292.331,555.677a7.9,7.9,0,0,1-2.091-.947,7.762,7.762,0,0,0,2.144.724Z"
                                                              transform="translate(-288.982 -551.394)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79575" data-name="Path 79575"
                                                              d="M297.413,555.645a.918.918,0,1,1-.588-1.157A.916.916,0,0,1,297.413,555.645Z"
                                                              transform="translate(-292.699 -551.195)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14108" data-name="Group 14108"
                                                       transform="translate(9.88 1.843)">
                                                        <path id="Path_79576" data-name="Path 79576"
                                                              d="M288.89,552.279a.3.3,0,0,1-.1.053,1.073,1.073,0,0,1-.492,0c-.034-.006-.068-.012-.105-.022s-.077-.019-.121-.028a4.459,4.459,0,0,1-.767-.26c.022-.977-1.012-1.847.551-1.711a4.491,4.491,0,0,1,1.058.22l-.019.065a2.775,2.775,0,0,0,.059,1.129c.012.074.022.139.028.2A.4.4,0,0,1,288.89,552.279Z"
                                                              transform="translate(-281.172 -545.064)"
                                                              fill="#cc482e"/>
                                                        <path id="Path_79577" data-name="Path 79577"
                                                              d="M281,535.231c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S281.5,533.7,281,535.231Z"
                                                              transform="translate(-274.473 -533.386)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79578" data-name="Path 79578"
                                                              d="M283.186,546.284c-.046-.009-.093-.018-.142-.031l-.145-.037c-.105-.031-.21-.062-.312-.1a4.891,4.891,0,0,1-.563-.244,3.385,3.385,0,0,1-.569-.368,2.522,2.522,0,0,1-.64-.721,1.419,1.419,0,0,1-.2-.832v0a1.087,1.087,0,0,1,.028-.17,1.291,1.291,0,0,1,.436-.678,2.742,2.742,0,0,1,1.754-.541,4.457,4.457,0,0,1,1.083.13c.767.189.832.405.665.7a4.338,4.338,0,0,0-.711,1.182,1.57,1.57,0,0,0-.04.337C283.817,545.746,284.39,546.532,283.186,546.284Z"
                                                              transform="translate(-276.762 -539.722)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79579" data-name="Path 79579"
                                                              d="M273.236,549.045c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S272.973,550.641,273.236,549.045Z"
                                                              transform="translate(-271.643 -542.402)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79580" data-name="Path 79580"
                                                              d="M269.3,539.749c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.331-.854-.241-1.862S267.692,539.61,269.3,539.749Z"
                                                              transform="translate(-268.181 -537.771)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79581" data-name="Path 79581"
                                                              d="M279.49,540.2a2.431,2.431,0,0,0,.186-.526,2.6,2.6,0,0,0,0-.56,3.357,3.357,0,0,1-.006-.585,1.014,1.014,0,0,1,.071-.284.391.391,0,0,1,.176-.226.383.383,0,0,0-.148.235,1.063,1.063,0,0,0-.04.278,3.205,3.205,0,0,0,.062.566,2.643,2.643,0,0,1,.056.591,2.3,2.3,0,0,1-.139.578Z"
                                                              transform="translate(-275.992 -536.587)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79582" data-name="Path 79582"
                                                              d="M280.589,540.886a.1.1,0,0,0,.015.049.107.107,0,0,0,.056.043.1.1,0,0,0,.068,0c.049-.019.046-.028.056-.037s.043-.025,0-.121c-.074-.065-.08-.034-.111-.034a.054.054,0,0,0-.034.028c-.012.025,0-.009.012-.034l.049-.139.1-.282.195-.56a5.608,5.608,0,0,1,.21-.56.642.642,0,0,1,.473-.343.633.633,0,0,0-.424.368,5.48,5.48,0,0,0-.152.569l-.139.578-.071.288-.034.145a.265.265,0,0,1-.04.105.147.147,0,0,1-.065.049c-.04,0-.062.034-.145-.037-.053-.108-.006-.127,0-.155a.108.108,0,0,1,.068-.046.115.115,0,0,1,.071,0,.14.14,0,0,1,.059.047.1.1,0,0,1,.019.059Z"
                                                              transform="translate(-276.745 -537.194)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79583" data-name="Path 79583"
                                                              d="M282.14,545.87a2.583,2.583,0,0,1,.523.093,3.8,3.8,0,0,0,.495.068,3.474,3.474,0,0,0,1.009-.083,3.474,3.474,0,0,1-1.009.2,3.3,3.3,0,0,1-.523-.012,2.477,2.477,0,0,0-.489-.031Z"
                                                              transform="translate(-277.822 -542.008)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79584" data-name="Path 79584"
                                                              d="M281.877,547.54a5.119,5.119,0,0,0,1.039.452,1.99,1.99,0,0,1,.51.294,1,1,0,0,1,.334.473.976.976,0,0,0-.371-.427,1.859,1.859,0,0,0-.517-.232,5.159,5.159,0,0,1-1.123-.365Z"
                                                              transform="translate(-277.552 -543.162)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79585" data-name="Path 79585"
                                                              d="M280.379,548.48l.046,1.971-.275-1.952Z"
                                                              transform="translate(-276.447 -543.811)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79586" data-name="Path 79586"
                                                              d="M277.74,548.47l-.78,1.67.563-1.751Z"
                                                              transform="translate(-274.244 -543.749)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79587" data-name="Path 79587"
                                                              d="M273.526,546.791a11.96,11.96,0,0,1-2.416-.331,12.128,12.128,0,0,0,2.413.1Z"
                                                              transform="translate(-270.204 -542.416)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79588" data-name="Path 79588"
                                                              d="M275.043,544.337a3.006,3.006,0,0,1-1.018-.334,7.912,7.912,0,0,1-.885-.563,4.165,4.165,0,0,0,1.918.668Z"
                                                              transform="translate(-271.606 -540.33)"
                                                              fill="#8d0458"/>
                                                        <path id="Path_79589" data-name="Path 79589"
                                                              d="M279.413,545.085a.918.918,0,1,1-.588-1.157A.916.916,0,0,1,279.413,545.085Z"
                                                              transform="translate(-274.702 -540.635)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14109" data-name="Group 14109"
                                                       transform="translate(9.314 16.131)">
                                                        <path id="Path_79590" data-name="Path 79590"
                                                              d="M279.17,581.421c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S279.671,579.887,279.17,581.421Z"
                                                              transform="translate(-272.643 -579.576)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79591" data-name="Path 79591"
                                                              d="M281.213,592.442c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.473,3.276-1.089.195.894-.043,1.878S282.781,592.822,281.213,592.442Z"
                                                              transform="translate(-274.931 -585.91)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79592" data-name="Path 79592"
                                                              d="M271.407,595.235c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S271.147,596.831,271.407,595.235Z"
                                                              transform="translate(-269.814 -588.592)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79593" data-name="Path 79593"
                                                              d="M267.471,585.939c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.331-.854-.241-1.862S265.862,585.8,267.471,585.939Z"
                                                              transform="translate(-266.351 -583.961)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79594" data-name="Path 79594"
                                                              d="M277.582,591.275a.918.918,0,1,1-.588-1.157A.917.917,0,0,1,277.582,591.275Z"
                                                              transform="translate(-272.871 -586.825)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                    <g id="Group_14110" data-name="Group 14110"
                                                       transform="translate(15.565 12.868)">
                                                        <path id="Path_79595" data-name="Path 79595"
                                                              d="M299.38,570.871c-.5,1.534-1.689,2.524-2.651,2.209s-1.336-1.813-.835-3.35.906-.127,1.868.189S299.881,569.337,299.38,570.871Z"
                                                              transform="translate(-292.853 -569.026)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79596" data-name="Path 79596"
                                                              d="M301.423,581.882c-1.568-.384-2.645-1.491-2.407-2.475s1.708-1.473,3.276-1.089.195.894-.043,1.878S302.991,582.265,301.423,581.882Z"
                                                              transform="translate(-295.141 -575.353)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79597" data-name="Path 79597"
                                                              d="M291.617,584.685c.26-1.593,1.284-2.753,2.283-2.589s1.6,1.587,1.336,3.183-.875.263-1.875.1S291.357,586.278,291.617,584.685Z"
                                                              transform="translate(-290.024 -578.042)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79598" data-name="Path 79598"
                                                              d="M287.681,575.38c1.609.139,2.843,1.067,2.756,2.079s-1.46,1.717-3.069,1.578-.331-.854-.241-1.862S286.072,575.244,287.681,575.38Z"
                                                              transform="translate(-286.561 -573.405)"
                                                              fill="#f95738"/>
                                                        <path id="Path_79599" data-name="Path 79599"
                                                              d="M297.8,580.725a.918.918,0,1,1-.588-1.157A.916.916,0,0,1,297.8,580.725Z"
                                                              transform="translate(-293.088 -576.275)"
                                                              fill="#f7bd3c"/>
                                                    </g>
                                                </g>
                                                <path id="Path_79600" data-name="Path 79600"
                                                      d="M255.759,615.651c.192.783,1.188,1.1,1.364,1.157.566.179.94.1,2.917-.4,1.123-.281,2.206-.721,3.338-.956a2.58,2.58,0,0,0,1.442-.671,2.213,2.213,0,0,0,.51-.891,2.515,2.515,0,0,0-.442-2.4c-.387-.356-.928-.513-5.181.925-2.19.742-2.92,1.036-3.5,1.828A1.79,1.79,0,0,0,255.759,615.651Z"
                                                      transform="translate(-249.7 -585.317)" fill="#f7c589"/>
                                                <path id="Path_79601" data-name="Path 79601"
                                                      d="M310.362,622.216c.43-1.6-1-3.177-1.151-3.335-1.652-1.766-4.071-1.618-7.322-1.81a52,52,0,0,1-9.967-1.51c-1.615-.439-7.4-2.138-11.344-3.749a5.548,5.548,0,0,0-3.455-.4,4.975,4.975,0,0,0-2.165,1.194l-.009.034a1.719,1.719,0,0,0,1.141,2.085c1.89.594,4.288,1.417,7,2.509,4.789,1.93,7.22,3.359,9.642,4.445a38.392,38.392,0,0,0,13.973,3.193C307.587,624.914,309.9,623.948,310.362,622.216Z"
                                                      transform="translate(-262.934 -585.342)" fill="#f7c589"/>
                                            </g>
                                        </g>
                                        <g id="Group_14116" data-name="Group 14116"
                                           transform="translate(42.246 0.742)">
                                            <path id="Path_79602" data-name="Path 79602"
                                                  d="M479.59,496.574a9.5,9.5,0,0,1-1.612,3.032,9.693,9.693,0,0,1-4.185,3.019q-.608-1.114-1.213-2.227l5.522-5.358Z"
                                                  transform="translate(-421.243 -475.51)" fill="#ecf5f7"/>
                                            <path id="Path_79603" data-name="Path 79603"
                                                  d="M477.757,455.863c.232,2.648-1.046,4.925-2.858,5.086s-3.468-1.859-3.7-4.507,1.046-4.925,2.858-5.083S477.522,453.215,477.757,455.863Z"
                                                  transform="translate(-420.27 -445.335)" fill="#885a30"/>
                                            <path id="Path_79604" data-name="Path 79604"
                                                  d="M460.34,476.842a23.361,23.361,0,0,0,3.106-1.847,23.747,23.747,0,0,0,3.143-2.645q4.042,5.081,8.08,10.165a12.684,12.684,0,0,1-7.4,3.508,21.078,21.078,0,0,0-6.929-9.181Z"
                                                  transform="translate(-412.789 -459.839)" fill="#a47850"/>
                                            <path id="Path_79605" data-name="Path 79605"
                                                  d="M465.694,474.955a7.294,7.294,0,0,1-.659,2.979,6.005,6.005,0,0,1-3.295,2.809,6.384,6.384,0,0,0-4.031-2.654c2.258-1.321,4.773-2.948,7.031-4.269C465.029,474.17,465.348,474.553,465.694,474.955Z"
                                                  transform="translate(-410.973 -460.855)" fill="#956335"/>
                                            <path id="Path_79606" data-name="Path 79606"
                                                  d="M443.072,432.681a8.723,8.723,0,0,1,3.335,2.267,8.354,8.354,0,0,1,1.875,3.632,2.223,2.223,0,0,0-1.7.059,10.711,10.711,0,0,0-3.23,1.766,1.129,1.129,0,0,1-.4.238,1.065,1.065,0,0,1-.569-.065,4.426,4.426,0,0,0-2.008-.251,1.8,1.8,0,0,0-1.438,1.256,3.029,3.029,0,0,1-1.921-.647,1.777,1.777,0,0,1-.421-.773c-1.633-5.618-1.89-6.094-1.476-6.793C436.319,431.351,440.595,431.726,443.072,432.681Z"
                                                  transform="translate(-395.249 -431.907)" fill="#885a30"/>
                                            <path id="Path_79607" data-name="Path 79607"
                                                  d="M446.574,455.477a.919.919,0,0,1,.721.872c-.043.331-.445.43-.39.678.034.155.192.151.393.452.127.189.093.232.195.35.192.223.408.192.594.306.4.241.192.875.4,1.25.384.69,2.15.5,3.285.2a6.531,6.531,0,0,0,4.312-3.13,8.418,8.418,0,0,0,.684-3.7c.043-2.141-.124-4.492-1.59-6.054A5.9,5.9,0,0,0,450,445.179c-2.11.322-4.328,1.819-4.362,4.145-.009.721.22,1.1.251,1.714a6.76,6.76,0,0,1-.071.844,10.31,10.31,0,0,1-.241,1.711c-.26.783-.616.916-.51,1.324a.983.983,0,0,0,.739.671C446.144,455.641,446.253,455.415,446.574,455.477Z"
                                                  transform="translate(-402.228 -441.018)" fill="#a47850"/>
                                            <path id="Path_79608" data-name="Path 79608"
                                                  d="M457.543,441.177a10.908,10.908,0,0,1,1.435,3.783,3.22,3.22,0,0,0,3.774,1.9,3.161,3.161,0,0,0,2.156-2.667,20.537,20.537,0,0,1,.473-2.113,4.515,4.515,0,0,0-1.182-4.377,5.626,5.626,0,0,0-3.876-1.185,11.709,11.709,0,0,0-4.257,1.073c-.749.328-2.035.869-2.348,1.565C455.36,439.612,456.56,439.766,457.543,441.177Z"
                                                  transform="translate(-408.217 -435.091)" fill="#885a30"/>
                                            <path id="Path_79609" data-name="Path 79609"
                                                  d="M474.044,461.455a1.308,1.308,0,1,1-1.649-.838A1.308,1.308,0,0,1,474.044,461.455Z"
                                                  transform="translate(-420.491 -451.691)" fill="#a47850"/>
                                            <path id="Path_79610" data-name="Path 79610"
                                                  d="M494.59,493.114a9.5,9.5,0,0,1-1.612,3.032,9.692,9.692,0,0,1-4.185,3.019q-.608-1.114-1.213-2.227l5.522-5.358Z"
                                                  transform="translate(-431.602 -473.121)" fill="#ecf5f7"/>
                                            <g id="Group_14113" data-name="Group 14113"
                                               transform="translate(0 69.713)">
                                                <path id="Path_79611" data-name="Path 79611"
                                                      d="M339.075,908.118l-9.085-.6,3.9-4.881,5.16.34Z"
                                                      transform="translate(-322.762 -826.735)" fill="#a47850"/>
                                                <path id="Path_79612" data-name="Path 79612"
                                                      d="M323.04,919.031a11.813,11.813,0,0,1-2.543.1c-1.933-.133-2.1-.631-3.691-.838-2.527-.328-3.845.7-6.354.359a13.881,13.881,0,0,1-1.612-.331,5.072,5.072,0,0,1-1.785-.749,1.018,1.018,0,0,1,.019-1.677c.223-.142.464-.281.718-.411a9.36,9.36,0,0,1,3.944-1.036,5.033,5.033,0,0,1,3.5-1.507,6.251,6.251,0,0,1,2.332.817,8.261,8.261,0,0,0,5.537.152,3.246,3.246,0,0,1,1.352,3.492A2.829,2.829,0,0,1,323.04,919.031Z"
                                                      transform="translate(-306.625 -833.846)" fill="#052b51"/>
                                                <path id="Path_79613" data-name="Path 79613"
                                                      d="M348,787.034q-4.269-1.23-8.538-2.456a62.808,62.808,0,0,0,4.47-17.24,160.437,160.437,0,0,0,.631-25.771c-.34-4.668-.817-7.833,1.247-9.673,2.521-2.246,7.833-1.627,10.657,1.114,1.7,1.649,2.679,4.232,2.1,11.95a87.631,87.631,0,0,1-4.325,20.677C352.78,770.354,350.575,777.686,348,787.034Z"
                                                      transform="translate(-329.303 -707.862)" fill="#1a5fc4"/>
                                                <path id="Path_79614" data-name="Path 79614"
                                                      d="M412.486,676.724a15.881,15.881,0,0,1-6.462,3.833,21.584,21.584,0,0,1-6.141.671,36.465,36.465,0,0,1-5.113-.285s-5.81.705-11.118,1.692a157.776,157.776,0,0,0-20.38,5.485c-3.833,1.278-7.771-.418-8.7-3.743a6.608,6.608,0,0,1-.049-2.15,7.71,7.71,0,0,1,.189-.878c1.683-5.76,16.166-11.071,16.166-11.071,4.158-1.51,7.567-2.608,9.877-3.326,8.089-2.515,12.423-5.837,14.777-8.578.2-.241.4-.477.572-.708,1.145-1.494,4.068,1.6,6.833,2.586,4.065,1.451,6.71-1.339,9.429-.009a4.34,4.34,0,0,1,.6.365,8.571,8.571,0,0,1,3.075,4.467C417.952,671.085,412.762,676.452,412.486,676.724Z"
                                                      transform="translate(-339.662 -657.264)" fill="#1a5fc4"/>
                                            </g>
                                            <g id="Group_14114" data-name="Group 14114"
                                               transform="translate(50.839 70.855)">
                                                <path id="Path_79615" data-name="Path 79615"
                                                      d="M476.19,905.678l5.379.192,2.571-7.483-4.708-2.2Z"
                                                      transform="translate(-474.575 -823.421)" fill="#a47850"/>
                                                <path id="Path_79616" data-name="Path 79616"
                                                      d="M496.676,713.425c.006.5-.022,1.024-.071,1.612-.068.705-.176,1.5-.328,2.456v0c-.167,1.049-.39,2.289-.656,3.814-.257,1.473-.5,2.632-.659,3.415,0,0-1.191,5.754-2.552,10.938-.513,1.964-1.407,5-2.667,8.888-1.853,5.7-4.507,13.249-7.978,21.979q-.274-.051-.557-.093c-.922-.155-1.9-.275-2.948-.368-.807-.068-1.593-.108-2.339-.127-1.03-.025-2-.006-2.9.043.711-2.051,1.615-4.832,2.524-8.161a120.335,120.335,0,0,0,3.561-17.9c1.281-11.285-.269-16.21,1.661-27.807l.028-.176c.548-3.26,1.225-7.43,4.4-9.166a1.55,1.55,0,0,1,.142-.071,7.278,7.278,0,0,1,6.141-.062,7.776,7.776,0,0,1,3.749,3.984A17.927,17.927,0,0,1,496.676,713.425Z"
                                                      transform="translate(-472.385 -689.297)" fill="#1c68da"/>
                                                <path id="Path_79617" data-name="Path 79617"
                                                      d="M473.719,927.643l4.625-1.018a1.894,1.894,0,0,0,1.5-2.119h0a3.183,3.183,0,0,0-3.57-2.524l-1.946.217a3.534,3.534,0,0,0-3.316,3.885h0A2.157,2.157,0,0,0,473.719,927.643Z"
                                                      transform="translate(-470.969 -841.219)" fill="#052b51"/>
                                                <path id="Path_79618" data-name="Path 79618"
                                                      d="M502.747,681.834c.544,3.462,6.824,6.209,12,5.451a9.029,9.029,0,0,0,4.4-1.745c3.01-2.342,3.369-6.212,3.632-9.46.535-6.586-1.058-14.712-3.892-15.112-.916-.13-1.123.668-4.343,1.906-2.627,1.012-2.914.643-3.907,1.361-1.33.962-1.324,1.983-3.047,6.208-.343.841-1,2.289-2.3,5.182C502.889,680.928,502.626,681.07,502.747,681.834Z"
                                                      transform="translate(-492.9 -660.955)" fill="#1c68da"/>
                                            </g>
                                            <g id="Group_14115" data-name="Group 14115"
                                               transform="translate(44.695 18.668)">
                                                <path id="Path_79619" data-name="Path 79619"
                                                      d="M451.621,589.111c4.043.13,9.9,1.377,18.121,1.117,6.639-.21,18.852-4.062,20.38-6.425,2.648-4.093-1.766-11.4-5.194-11.016-1.485.167-2.008,4.059-2.83,4.851-2.367,2.286-9.463,5.2-30.177,6.976a.862.862,0,0,0-.807.931Q451.364,587.331,451.621,589.111Z"
                                                      transform="translate(-451.106 -547.864)" fill="#a47850"/>
                                                <path id="Path_79620" data-name="Path 79620"
                                                      d="M532.331,529.553l-2.428-.807a.764.764,0,0,1-.136-.059,21.345,21.345,0,0,1-8.247-7.854.855.855,0,0,1,.65-1.3.524.524,0,0,0,.418-.186c.365-.547-1.141-2.134-1.711-2.744a83.668,83.668,0,0,1-7.536-9.682,17.971,17.971,0,0,1-1.955-3.415,16.922,16.922,0,0,1-.953-2.806,10.37,10.37,0,0,1-.325-4.34c.517-2.41,2.376-5.352,6.023-3.557,4.8,2.363,9.952,10.679,13.463,17.15.009.018.022.037.031.053a65.482,65.482,0,0,1,5.785,12.238,6.126,6.126,0,0,1,.322,3.74,6.288,6.288,0,0,1-2.648,3.458A.842.842,0,0,1,532.331,529.553Z"
                                                      transform="translate(-491.778 -492.253)" fill="#a3d3d8"/>
                                            </g>
                                        </g>
                                        <g id="Group_14117" data-name="Group 14117"
                                           transform="translate(98.069 70.452)">
                                            <path id="Path_79621" data-name="Path 79621"
                                                  d="M503.964,660.232a21.1,21.1,0,0,1-7.811,1.018,21.451,21.451,0,0,1-9.073-2.651c.019-.077.031-.158.046-.235.2-.241.4-.476.572-.708,1.145-1.494,4.068,1.6,6.833,2.586C498.6,661.692,501.245,658.9,503.964,660.232Z"
                                                  transform="translate(-487.08 -657.254)" fill="#b3dee5"/>
                                        </g>
                                    </g>
                                    <g id="Group_14123" data-name="Group 14123"
                                       transform="translate(61.009 46.656)">
                                        <g id="Group_14119" data-name="Group 14119"
                                           transform="translate(3.013 4.979)">
                                            <path id="Path_79622" data-name="Path 79622"
                                                  d="M387.841,598.365l-2.608,1.374-3.316-1.451a5.627,5.627,0,0,0-4.424-.068c-.161.065-.319.139-.473.22l2.611-1.374a5.093,5.093,0,0,1,.473-.22,5.628,5.628,0,0,1,4.424.071Z"
                                                  transform="translate(-377.02 -596.428)" fill="#ba412a"/>
                                        </g>
                                        <g id="Group_14120" data-name="Group 14120"
                                           transform="translate(15.13 0.414)">
                                            <path id="Path_79623" data-name="Path 79623"
                                                  d="M416.19,583.263l2.611-1.374c.155-.081.312-.155.473-.22l-2.611,1.373C416.5,583.108,416.345,583.183,416.19,583.263Z"
                                                  transform="translate(-416.19 -581.67)" fill="#f95738"/>
                                        </g>
                                        <g id="Group_14121" data-name="Group 14121" transform="translate(15.607)">
                                            <path id="Path_79624" data-name="Path 79624"
                                                  d="M427.945,584.071a6.03,6.03,0,0,1,.08,4.529l-5.54,14.208-2.608,1.374,5.54-14.205a6.045,6.045,0,0,0-.077-4.529,6.123,6.123,0,0,0-3.186-3.254,5.641,5.641,0,0,0-4.424-.071l2.608-1.373a5.641,5.641,0,0,1,4.424.071A6.11,6.11,0,0,1,427.945,584.071Z"
                                                  transform="translate(-417.73 -580.332)" fill="#ba412a"/>
                                        </g>
                                        <g id="Group_14122" data-name="Group 14122"
                                           transform="translate(0.009 1.37)">
                                            <path id="Path_79625" data-name="Path 79625"
                                                  d="M382.9,585.179a5.641,5.641,0,0,1,4.424.071,6.121,6.121,0,0,1,3.183,3.251,6.03,6.03,0,0,1,.08,4.529l-5.54,14.208-14.075-6.15a6.142,6.142,0,0,1-3.264-7.783,5.56,5.56,0,0,1,3.072-3.152,5.641,5.641,0,0,1,4.424.071l3.316,1.451,1.305-3.35A5.573,5.573,0,0,1,382.9,585.179Z"
                                                  transform="translate(-367.307 -584.762)" fill="#f95738"/>
                                        </g>
                                        <path id="Path_79626" data-name="Path 79626"
                                              d="M367.517,614.07l20.475,5.7,2.15-.083-1.364,3.5-2.073-.006-18.734-4.656A5.936,5.936,0,0,1,367.517,614.07Z"
                                              transform="translate(-367.279 -603.633)" fill="#e58217"/>
                                        <path id="Path_79627" data-name="Path 79627"
                                              d="M409.532,580.73l-2.6,1.374-9.621,18.653,4.121,1.8,8.788-18.483,2.589-1.4A5.647,5.647,0,0,0,409.532,580.73Z"
                                              transform="translate(-388.02 -580.607)" fill="#ef9529"/>
                                    </g>
                                    <path id="Path_79628" data-name="Path 79628"
                                          d="M429.354,616.212c-.235-.43-.467-.86-.7-1.29a3.759,3.759,0,0,1,.418-1.936,4.983,4.983,0,0,1,3.474-2.165,8.1,8.1,0,0,1,3.112-.056,2.569,2.569,0,0,1,1.4.43c.22.17.411.4.919,1.618.464,1.126.7,1.692.578,1.946-.251.541-.974.278-2.329.851-1.256.529-1.2.993-2.428,1.441a4.29,4.29,0,0,1-2.37.291A3.946,3.946,0,0,1,429.354,616.212Z"
                                          transform="translate(-348.654 -554.609)" fill="#a47850"/>
                                </g>
                            </g>
                        </g>
                        <circle id="Ellipse_441" data-name="Ellipse 441" cx="21.677" cy="21.677" r="21.677"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 873.501, 7946.632)" opacity="0.49"
                                fill="url(#partnerC-weawe)"/>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Connecting with your partner is critical when you’re trying to conceive. When you feel
                    connected, you can feel healthier, have a lower stress level, have a more positive mood, and may
                    have an increased desire for intimacy, especially during ovulation. Equally importantly, when
                    pregnancy doesn’t come easily, it can put a strain on your relationship. Emotional, physical,
                    and financial demands associated with infertility can impact everything from communication to
                    connection, to your sex life, and that can make getting pregnant even harder.

                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Using the Fertilligence app and attending personalized coaching sessions together will help you
                    and your partner better connect and get in-step on your shared fertility journey. Fertilligence
                    was designed to support both partners in this journey, with tools, classes, insights and
                    coaching designed to improve your well-being as individuals and as a couple.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Environment">
                <h2 class="nbe-tab-title-text">
                    Environment
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="340.057"
                     height="340.333" viewBox="0 0 340.057 340.333">
                    <defs>
                        <linearGradient id="axcawrqwaawda" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                        <clipPath id="awdawdawdxad">
                            <rect id="Rectangle_2565" data-name="Rectangle 2565" width="176.995" height="127.888"/>
                        </clipPath>
                    </defs>
                    <g id="Group_20291" data-name="Group 20291" transform="translate(-36.972 -150)">
                        <g id="Group_14221" data-name="Group 14221" transform="translate(-524.369 -3002.169)">
                            <circle id="Ellipse_373" data-name="Ellipse 373" cx="17.927" cy="17.927" r="17.927"
                                    transform="matrix(-0.995, 0.105, -0.105, -0.995, 822.392, 3478.27)"
                                    opacity="0.49" fill="url(#axcawrqwaawda)"/>
                            <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="136.118" cy="136.326" rx="136.118"
                                     ry="136.326" transform="translate(561.341 3231.763) rotate(-17)" opacity="0.53"
                                     fill="url(#axcawrqwaawda)"/>
                            <circle id="Ellipse_375" data-name="Ellipse 375" cx="2.085" cy="2.085" r="2.085"
                                    transform="translate(865.05 3257.861)" fill="#ed0f68"/>
                            <g id="Ellipse_376" data-name="Ellipse 376" transform="translate(643.946 3178.65)"
                               fill="none" stroke="#ed0f68" stroke-width="2" stroke-dasharray="6">
                                <circle cx="7.087" cy="7.087" r="7.087" stroke="none"/>
                                <circle cx="7.087" cy="7.087" r="6.087" fill="none"/>
                            </g>
                            <circle id="Ellipse_377" data-name="Ellipse 377" cx="2.918" cy="2.918" r="2.918"
                                    transform="translate(674.38 3456.306)" fill="#ed0f68"/>
                            <g id="Ellipse_378" data-name="Ellipse 378" transform="translate(848.644 3427.957)"
                               fill="none" stroke="#94daec" stroke-width="2" stroke-dasharray="5">
                                <circle cx="4.169" cy="4.169" r="4.169" stroke="none"/>
                                <circle cx="4.169" cy="4.169" r="3.169" fill="none"/>
                            </g>
                            <g id="Group_13236" data-name="Group 13236" transform="translate(610.184 3229.392)">
                                <g id="Group_11446" data-name="Group 11446" transform="translate(74.84 0)"
                                   opacity="0.54">
                                    <path id="Path_77167" data-name="Path 77167"
                                          d="M743.331,366.527c-3.382,0-1.609-.586-.368-.586,9.846,0,40.748.982,50.334,2.8,72.576,13.678,63.658,38.047,42.684,38.047-14.96,0-16.446-14.687-34.761-14.687-22.61,0-37.829,6.819-37.829,10.146,0,2.673,13.105,5.359,13.105,8.755,0,4.65-18.383,6.45-20.865,6.859-6.259,1.036-12.532,1.691-18.819,2.455-6.055.75-11.578.232-17.183,3.45-2.386-2.7,1.936-5.891,3.955-6.382,3.846-.955,8.264-.546,12.205-1.023,2.809-.327,16.583-.845,16.583-6.246,0-4.855-34.025-6.137-34.025-17.769,0-8.919,39-4.337,36.288-4.691.409,0,.832-.082,1.255-.082a56.805,56.805,0,0,0,10.678,1.05c2.441,0,6.846-.177,6.846-1.459,0-6.082-89.554-15.928-89.554-28.433,0-5.782,17.81-7.037,28.788-7.037,26.36,0,18.751,14.387,38.252,15.71Z"
                                          transform="translate(-683.86 -351.69)" fill="#e8e9ea"/>
                                </g>
                                <g id="Group_11447" data-name="Group 11447" transform="translate(0 3.873)"
                                   opacity="0.54">
                                    <path id="Path_77168" data-name="Path 77168"
                                          d="M683.624,366.04c-3.109,0-1.473-.45-.341-.45,9.055,0,37.447.764,46.257,2.168,66.685,10.61,58.5,29.524,39.22,29.524-13.746,0-15.123-11.387-31.938-11.387-20.769,0-34.775,5.291-34.775,7.869,0,2.073,12.042,4.159,12.042,6.791,0,3.614-16.883,5-19.174,5.318-5.755.8-11.523,1.309-17.292,1.909-5.564.573-10.637.177-15.792,2.673-2.2-2.1,1.773-4.568,3.627-4.95,3.546-.736,7.6-.423,11.223-.791,2.577-.259,15.232-.655,15.232-4.841,0-3.764-31.27-4.759-31.27-13.787,0-6.928,35.838-3.355,33.356-3.641.382,0,.764-.068,1.146-.068a62.243,62.243,0,0,0,9.819.8c2.25,0,6.3-.136,6.3-1.132,0-4.718-82.286-12.355-82.286-22.065,0-4.487,16.365-5.455,26.442-5.455,24.219,0,17.237,11.169,35.143,12.192Z"
                                          transform="translate(-628.98 -354.53)" fill="#e8e9ea"/>
                                </g>
                                <g id="Group_11476" data-name="Group 11476" transform="translate(12.914 29.625)">
                                    <g id="Group_11456" data-name="Group 11456">
                                        <path id="Path_77169" data-name="Path 77169"
                                              d="M687.584,389.582a26.972,26.972,0,0,0,5.891,1.623c2.4.232,5.155-.586,6.15-2.6.327-.668.45-1.4.8-2.059,1.35-2.509,5.141-2.509,8.155-2.236a175.315,175.315,0,0,0,25.106.45c2.168-.123,4.8-.6,5.469-2.509.709-2.018-1.364-3.887-3.2-5.155-2.523-1.732-5.237-3.532-8.373-3.668-4.746-.2-8.632,3.4-13.2,4.609-6.26,1.664-12.792-1.323-19.3-1.623-1.95-.1-4.077.123-5.537,1.323s-1.8,3.655-.218,4.732c-1.65,1.691-4.227,2.277-6.668,2.482s-4.95.082-7.309.723c-1.336.368-6.709,3.532-5.332,5.332,1.077,1.4,3.027-1,4.241-1.036,1.118-.027,2.018.914,3.041.914,1.746,0,1.064-.627,2.264-1.255,2.236-1.173,4.364-1.146,6.982-.355C686.9,389.364,687.243,389.473,687.584,389.582Z"
                                              transform="translate(-627.049 -373.414)" fill="rgba(10,9,9,0.41)"/>
                                        <rect id="Rectangle_2353" data-name="Rectangle 2353" width="20.974"
                                              height="68.349" transform="translate(51.903 46.047)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2354" data-name="Rectangle 2354" width="33.793"
                                              height="43.489" transform="translate(153.376 70.921)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2355" data-name="Rectangle 2355" width="14.973"
                                              height="26.401" transform="translate(179.567 79.489) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2356" data-name="Rectangle 2356" width="3.696"
                                              height="26.401" transform="translate(177.118 56.016) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2357" data-name="Rectangle 2357" width="7.623"
                                              height="34.734" transform="translate(49.111 53.109) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2358" data-name="Rectangle 2358" width="3.696"
                                              height="19.856" transform="translate(170.246 56.015) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2359" data-name="Rectangle 2359" width="3.696"
                                              height="26.401" transform="translate(99.229 72.773) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2360" data-name="Rectangle 2360" width="3.696"
                                              height="26.401" transform="translate(128.958 62.49) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2361" data-name="Rectangle 2361" width="3.396"
                                              height="31.038" transform="translate(25.217 62.718) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2362" data-name="Rectangle 2362" width="17.169"
                                              height="4.227" transform="translate(135.48 56.144) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2363" data-name="Rectangle 2363" width="21.86"
                                              height="2.686" transform="translate(73.32 42.905) rotate(180)"
                                              fill="#8da9b5"/>
                                        <rect id="Rectangle_2364" data-name="Rectangle 2364" width="20.196"
                                              height="79.654" transform="translate(135.32 34.756)" fill="#8da9b5"/>
                                        <g id="Group_11449" data-name="Group 11449"
                                           transform="translate(53.531 42.177)">
                                            <g id="Group_11448" data-name="Group 11448" transform="translate(0 0)">
                                                <rect id="Rectangle_2365" data-name="Rectangle 2365" width="1.827"
                                                      height="15.123"
                                                      transform="translate(17.718 15.123) rotate(180)"
                                                      fill="#8da9b5"/>
                                                <rect id="Rectangle_2366" data-name="Rectangle 2366" width="1.827"
                                                      height="15.123"
                                                      transform="translate(13.749 15.123) rotate(180)"
                                                      fill="#8da9b5"/>
                                                <rect id="Rectangle_2367" data-name="Rectangle 2367" width="1.827"
                                                      height="15.123"
                                                      transform="translate(9.779 15.123) rotate(180)"
                                                      fill="#8da9b5"/>
                                                <rect id="Rectangle_2368" data-name="Rectangle 2368" width="1.827"
                                                      height="15.123"
                                                      transform="translate(5.797 15.123) rotate(180)"
                                                      fill="#8da9b5"/>
                                                <rect id="Rectangle_2369" data-name="Rectangle 2369" width="1.827"
                                                      height="15.123"
                                                      transform="translate(1.827 15.123) rotate(180)"
                                                      fill="#8da9b5"/>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_2370" data-name="Rectangle 2370" width="30.561"
                                              height="59.785" transform="translate(120.033 54.625)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2371" data-name="Rectangle 2371" width="17.824"
                                              height="32.524" transform="translate(70.272 81.885)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2372" data-name="Rectangle 2372" width="17.824"
                                              height="32.524" transform="translate(105.292 74.508)" fill="#8da9b5"/>
                                        <path id="Path_77170" data-name="Path 77170"
                                              d="M638.45,429.095v31.542h7.228V428.89Z"
                                              transform="translate(-638.45 -353.237)" fill="#8da9b5"/>
                                        <path id="Path_77171" data-name="Path 77171"
                                              d="M724.932,473.255V413.47l-17.442,3.177v56.607Z"
                                              transform="translate(-613.34 -358.845)" fill="#8da9b5"/>
                                        <path id="Path_77172" data-name="Path 77172"
                                              d="M682.926,475.3V407.85l-17.456,3.6V475.3Z"
                                              transform="translate(-628.623 -360.889)" fill="#8da9b5"/>
                                        <path id="Path_77173" data-name="Path 77173"
                                              d="M714.755,469.621V426L697.3,423.46v46.161Z"
                                              transform="translate(-617.046 -355.212)" fill="#8da9b5"/>
                                        <path id="Path_77174" data-name="Path 77174"
                                              d="M796.957,475.586V423.179l-25.3-16.119v68.526Z"
                                              transform="translate(-590.001 -361.177)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2373" data-name="Rectangle 2373" width="31.106"
                                              height="48.507" transform="translate(6.696 65.875)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2374" data-name="Rectangle 2374" width="25.283"
                                              height="18.137" transform="translate(12.519 62.875)" fill="#8da9b5"/>
                                        <rect id="Rectangle_2375" data-name="Rectangle 2375" width="14.251"
                                              height="7.896" transform="translate(17.428 58.32)" fill="#8da9b5"/>
                                        <g id="Group_11452" data-name="Group 11452"
                                           transform="translate(99.278 61.171)" opacity="0.54">
                                            <g id="Group_11450" data-name="Group 11450">
                                                <rect id="Rectangle_2376" data-name="Rectangle 2376" width="3.341"
                                                      height="1.009" fill="#fff"/>
                                                <rect id="Rectangle_2377" data-name="Rectangle 2377" width="3.341"
                                                      height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                                <rect id="Rectangle_2378" data-name="Rectangle 2378" width="3.341"
                                                      height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                                <rect id="Rectangle_2379" data-name="Rectangle 2379" width="3.341"
                                                      height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                                <rect id="Rectangle_2380" data-name="Rectangle 2380" width="3.341"
                                                      height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                                <rect id="Rectangle_2381" data-name="Rectangle 2381" width="3.341"
                                                      height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                                <rect id="Rectangle_2382" data-name="Rectangle 2382" width="3.341"
                                                      height="1.009" transform="translate(0 22.474)" fill="#fff"/>
                                                <rect id="Rectangle_2383" data-name="Rectangle 2383" width="3.341"
                                                      height="1.009" transform="translate(0 26.224)" fill="#fff"/>
                                                <rect id="Rectangle_2384" data-name="Rectangle 2384" width="3.341"
                                                      height="1.009" transform="translate(0 29.961)" fill="#fff"/>
                                                <rect id="Rectangle_2385" data-name="Rectangle 2385" width="3.341"
                                                      height="1.009" transform="translate(0 33.711)" fill="#fff"/>
                                                <rect id="Rectangle_2386" data-name="Rectangle 2386" width="3.341"
                                                      height="1.009" transform="translate(0 37.461)" fill="#fff"/>
                                            </g>
                                            <g id="Group_11451" data-name="Group 11451"
                                               transform="translate(7.187)">
                                                <rect id="Rectangle_2387" data-name="Rectangle 2387" width="0.286"
                                                      height="1.009" fill="#fff"/>
                                                <rect id="Rectangle_2388" data-name="Rectangle 2388" width="0.286"
                                                      height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                                <rect id="Rectangle_2389" data-name="Rectangle 2389" width="0.286"
                                                      height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                                <rect id="Rectangle_2390" data-name="Rectangle 2390" width="0.286"
                                                      height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                                <rect id="Rectangle_2391" data-name="Rectangle 2391" width="0.286"
                                                      height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                                <rect id="Rectangle_2392" data-name="Rectangle 2392" width="0.286"
                                                      height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                                <rect id="Rectangle_2393" data-name="Rectangle 2393" width="0.286"
                                                      height="1.009" transform="translate(0 22.474)" fill="#fff"/>
                                                <rect id="Rectangle_2394" data-name="Rectangle 2394" width="0.286"
                                                      height="1.009" transform="translate(0 26.224)" fill="#fff"/>
                                                <rect id="Rectangle_2395" data-name="Rectangle 2395" width="0.286"
                                                      height="1.009" transform="translate(0 29.961)" fill="#fff"/>
                                                <rect id="Rectangle_2396" data-name="Rectangle 2396" width="0.286"
                                                      height="1.009" transform="translate(0 33.711)" fill="#fff"/>
                                                <rect id="Rectangle_2397" data-name="Rectangle 2397" width="0.286"
                                                      height="1.009" transform="translate(0 37.461)" fill="#fff"/>
                                            </g>
                                        </g>
                                        <g id="Group_11455" data-name="Group 11455"
                                           transform="translate(168.895 57.816)" opacity="0.54">
                                            <g id="Group_11453" data-name="Group 11453"
                                               transform="translate(0 12.737)">
                                                <rect id="Rectangle_2398" data-name="Rectangle 2398" width="2.932"
                                                      height="1.009" fill="#fff"/>
                                                <rect id="Rectangle_2399" data-name="Rectangle 2399" width="2.932"
                                                      height="1.009" transform="translate(0 3.737)" fill="#fff"/>
                                                <rect id="Rectangle_2400" data-name="Rectangle 2400" width="2.932"
                                                      height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                                <rect id="Rectangle_2401" data-name="Rectangle 2401" width="2.932"
                                                      height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                                <rect id="Rectangle_2402" data-name="Rectangle 2402" width="2.932"
                                                      height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                                <rect id="Rectangle_2403" data-name="Rectangle 2403" width="2.932"
                                                      height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                            </g>
                                            <g id="Group_11454" data-name="Group 11454"
                                               transform="translate(6.109)">
                                                <rect id="Rectangle_2404" data-name="Rectangle 2404" width="0.805"
                                                      height="1.009" fill="#fff"/>
                                                <rect id="Rectangle_2405" data-name="Rectangle 2405" width="0.805"
                                                      height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                                <rect id="Rectangle_2406" data-name="Rectangle 2406" width="0.805"
                                                      height="1.009" transform="translate(0 7.5)" fill="#fff"/>
                                                <rect id="Rectangle_2407" data-name="Rectangle 2407" width="0.805"
                                                      height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                                <rect id="Rectangle_2408" data-name="Rectangle 2408" width="0.805"
                                                      height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                                <rect id="Rectangle_2409" data-name="Rectangle 2409" width="0.805"
                                                      height="1.009" transform="translate(0 18.737)" fill="#fff"/>
                                            </g>
                                        </g>
                                        <path id="Path_77175" data-name="Path 77175"
                                              d="M766.121,397.1c-.259.545-.314,1.214.232,1.446.491.2,1.009-.15,1.432-.45,4.037-2.932,8.66-1.8,13.323-1.773a4.64,4.64,0,0,0,2.564-.491c.723-.477.982-1.609.273-2.1,4.268-.259,8.523-.5,12.792-.764,3.641-.218,3.259-1.677,2.046-3.941-.041-.082,12.082-.723,13.146-.8,2.223-.177,8.332-.518,8.019-3.5a3.176,3.176,0,0,0-1.991-2.209c-3-1.446-6.641-1.077-9.9-.259s-6.464,2.032-9.846,2.182c-5.3.232-10.637-2.209-15.792-1.009a4.354,4.354,0,0,0-2.537,1.377,1.7,1.7,0,0,0,.327,2.468c1.5.9,3.409-.968,4.609.423s-.791,4.037-2,4.732a10.563,10.563,0,0,1-5.618.982,24.084,24.084,0,0,0-5.782.109,8.622,8.622,0,0,0-5.114,3.218C766.243,396.857,766.175,396.98,766.121,397.1Z"
                                              transform="translate(-592.085 -370.461)" fill="rgba(10,9,9,0.45)"/>
                                        <path id="Path_77176" data-name="Path 77176"
                                              d="M730.593,402.663c-.218.573-.273,1.282.2,1.527.409.2.859-.164,1.214-.477,2.8-2.523,6.3-2.155,9.641-1.936a27.389,27.389,0,0,0,7.078-.559c1.227-.259,3.014-.546,3.982-1.35,1.145-.955,1.023-2.482,2.4-3.2a7.564,7.564,0,0,1,2.877-.627l12.451-.982c-1.309-1-.409-3.136,1.118-3.818s3.328-.436,5.018-.518,3.641-.709,4.132-2.209c.477-1.445-.736-2.986-2.237-3.573a10.9,10.9,0,0,0-4.841-.314c-2.468.218-4.937.423-7.419.641-1.95.164-4.023.382-5.564,1.5-1.009.723-1.691,1.773-2.673,2.523-1.923,1.445-4.6,1.514-7,2.046a7.232,7.232,0,0,0-4.132,2.209c-1.05,1.418-.436,3.068-2.046,4.228a7.489,7.489,0,0,1-4.773,1.036,16.426,16.426,0,0,0-4.909.123,7.279,7.279,0,0,0-4.337,3.4A1.047,1.047,0,0,0,730.593,402.663Z"
                                              transform="translate(-604.996 -369.381)" fill="#bec9cd"/>
                                    </g>
                                    <g id="Group_11457" data-name="Group 11457" transform="translate(56.621 50.015)"
                                       opacity="0.55">
                                        <rect id="Rectangle_2410" data-name="Rectangle 2410" width="12.328"
                                              height="2.059" fill="#fff"/>
                                        <rect id="Rectangle_2411" data-name="Rectangle 2411" width="12.328"
                                              height="2.059" transform="translate(0 5.114)" fill="#fff"/>
                                        <rect id="Rectangle_2412" data-name="Rectangle 2412" width="12.328"
                                              height="2.059" transform="translate(0 10.241)" fill="#fff"/>
                                        <rect id="Rectangle_2413" data-name="Rectangle 2413" width="12.328"
                                              height="2.059" transform="translate(0 15.355)" fill="#fff"/>
                                        <rect id="Rectangle_2414" data-name="Rectangle 2414" width="12.328"
                                              height="2.059" transform="translate(0 20.483)" fill="#fff"/>
                                        <rect id="Rectangle_2415" data-name="Rectangle 2415" width="12.328"
                                              height="2.059" transform="translate(0 25.597)" fill="#fff"/>
                                        <rect id="Rectangle_2416" data-name="Rectangle 2416" width="12.328"
                                              height="2.059" transform="translate(0 30.711)" fill="#fff"/>
                                        <rect id="Rectangle_2417" data-name="Rectangle 2417" width="12.328"
                                              height="2.059" transform="translate(0 35.838)" fill="#fff"/>
                                        <rect id="Rectangle_2418" data-name="Rectangle 2418" width="12.328"
                                              height="2.059" transform="translate(0 40.952)" fill="#fff"/>
                                        <rect id="Rectangle_2419" data-name="Rectangle 2419" width="12.328"
                                              height="2.059" transform="translate(0 46.066)" fill="#fff"/>
                                        <rect id="Rectangle_2420" data-name="Rectangle 2420" width="12.328"
                                              height="2.059" transform="translate(0 51.193)" fill="#fff"/>
                                    </g>
                                    <g id="Group_11458" data-name="Group 11458" transform="translate(17.933 63.434)"
                                       opacity="0.55">
                                        <rect id="Rectangle_2421" data-name="Rectangle 2421" width="12.328"
                                              height="1.882" fill="#fff"/>
                                        <rect id="Rectangle_2422" data-name="Rectangle 2422" width="12.328"
                                              height="1.882" transform="translate(0 4.677)" fill="#fff"/>
                                        <rect id="Rectangle_2423" data-name="Rectangle 2423" width="12.328"
                                              height="1.882" transform="translate(0 9.355)" fill="#fff"/>
                                        <rect id="Rectangle_2424" data-name="Rectangle 2424" width="12.328"
                                              height="1.882" transform="translate(0 14.046)" fill="#fff"/>
                                        <rect id="Rectangle_2425" data-name="Rectangle 2425" width="12.328"
                                              height="1.882" transform="translate(0 18.724)" fill="#fff"/>
                                        <rect id="Rectangle_2426" data-name="Rectangle 2426" width="12.328"
                                              height="1.882" transform="translate(0 23.415)" fill="#fff"/>
                                        <rect id="Rectangle_2427" data-name="Rectangle 2427" width="12.328"
                                              height="1.882" transform="translate(0 28.092)" fill="#fff"/>
                                        <rect id="Rectangle_2428" data-name="Rectangle 2428" width="12.328"
                                              height="1.882" transform="translate(0 32.783)" fill="#fff"/>
                                        <rect id="Rectangle_2429" data-name="Rectangle 2429" width="12.328"
                                              height="1.882" transform="translate(0 37.461)" fill="#fff"/>
                                        <rect id="Rectangle_2430" data-name="Rectangle 2430" width="12.328"
                                              height="1.882" transform="translate(0 42.138)" fill="#fff"/>
                                        <rect id="Rectangle_2431" data-name="Rectangle 2431" width="12.328"
                                              height="1.882" transform="translate(0 46.83)" fill="#fff"/>
                                    </g>
                                    <g id="Group_11461" data-name="Group 11461"
                                       transform="translate(139.139 38.492)" opacity="0.54">
                                        <g id="Group_11459" data-name="Group 11459">
                                            <rect id="Rectangle_2432" data-name="Rectangle 2432" width="12.573"
                                                  height="1.2" fill="#fff"/>
                                            <rect id="Rectangle_2433" data-name="Rectangle 2433" width="12.573"
                                                  height="1.2" transform="translate(0 2.973)" fill="#fff"/>
                                            <rect id="Rectangle_2434" data-name="Rectangle 2434" width="12.573"
                                                  height="1.2" transform="translate(0 5.946)" fill="#fff"/>
                                            <rect id="Rectangle_2435" data-name="Rectangle 2435" width="12.573"
                                                  height="1.2" transform="translate(0 8.932)" fill="#fff"/>
                                            <rect id="Rectangle_2436" data-name="Rectangle 2436" width="12.573"
                                                  height="1.2" transform="translate(0 11.905)" fill="#fff"/>
                                            <rect id="Rectangle_2437" data-name="Rectangle 2437" width="12.573"
                                                  height="1.2" transform="translate(0 14.878)" fill="#fff"/>
                                            <rect id="Rectangle_2438" data-name="Rectangle 2438" width="12.573"
                                                  height="1.2" transform="translate(0 17.851)" fill="#fff"/>
                                            <rect id="Rectangle_2439" data-name="Rectangle 2439" width="12.573"
                                                  height="1.2" transform="translate(0 20.824)" fill="#fff"/>
                                            <rect id="Rectangle_2440" data-name="Rectangle 2440" width="12.573"
                                                  height="1.2" transform="translate(0 23.81)" fill="#fff"/>
                                            <rect id="Rectangle_2441" data-name="Rectangle 2441" width="12.573"
                                                  height="1.2" transform="translate(0 26.783)" fill="#fff"/>
                                            <rect id="Rectangle_2442" data-name="Rectangle 2442" width="12.573"
                                                  height="1.2" transform="translate(0 29.756)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11460" data-name="Group 11460" transform="translate(0 32.497)">
                                            <rect id="Rectangle_2443" data-name="Rectangle 2443" width="12.573"
                                                  height="1.2" fill="#fff"/>
                                            <rect id="Rectangle_2444" data-name="Rectangle 2444" width="12.573"
                                                  height="1.2" transform="translate(0 2.973)" fill="#fff"/>
                                            <rect id="Rectangle_2445" data-name="Rectangle 2445" width="12.573"
                                                  height="1.2" transform="translate(0 5.946)" fill="#fff"/>
                                            <rect id="Rectangle_2446" data-name="Rectangle 2446" width="12.573"
                                                  height="1.2" transform="translate(0 8.919)" fill="#fff"/>
                                            <rect id="Rectangle_2447" data-name="Rectangle 2447" width="12.573"
                                                  height="1.2" transform="translate(0 11.905)" fill="#fff"/>
                                            <rect id="Rectangle_2448" data-name="Rectangle 2448" width="12.573"
                                                  height="1.2" transform="translate(0 14.878)" fill="#fff"/>
                                            <rect id="Rectangle_2449" data-name="Rectangle 2449" width="12.573"
                                                  height="1.2" transform="translate(0 17.851)" fill="#fff"/>
                                            <rect id="Rectangle_2450" data-name="Rectangle 2450" width="12.573"
                                                  height="1.2" transform="translate(0 20.824)" fill="#fff"/>
                                            <rect id="Rectangle_2451" data-name="Rectangle 2451" width="12.573"
                                                  height="1.2" transform="translate(0 23.797)" fill="#fff"/>
                                            <rect id="Rectangle_2452" data-name="Rectangle 2452" width="12.573"
                                                  height="1.2" transform="translate(0 26.783)" fill="#fff"/>
                                            <rect id="Rectangle_2453" data-name="Rectangle 2453" width="12.573"
                                                  height="1.2" transform="translate(0 29.756)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_11465" data-name="Group 11465"
                                       transform="translate(123.102 58.975)" opacity="0.54">
                                        <g id="Group_11462" data-name="Group 11462">
                                            <rect id="Rectangle_2454" data-name="Rectangle 2454" width="3.177"
                                                  height="1.255" fill="#fff"/>
                                            <rect id="Rectangle_2455" data-name="Rectangle 2455" width="3.177"
                                                  height="1.255" transform="translate(0 4.691)" fill="#fff"/>
                                            <rect id="Rectangle_2456" data-name="Rectangle 2456" width="3.177"
                                                  height="1.255" transform="translate(0 9.382)" fill="#fff"/>
                                            <rect id="Rectangle_2457" data-name="Rectangle 2457" width="3.177"
                                                  height="1.255" transform="translate(0 14.073)" fill="#fff"/>
                                            <rect id="Rectangle_2458" data-name="Rectangle 2458" width="3.177"
                                                  height="1.255" transform="translate(0 18.765)" fill="#fff"/>
                                            <rect id="Rectangle_2459" data-name="Rectangle 2459" width="3.177"
                                                  height="1.255" transform="translate(0 23.469)" fill="#fff"/>
                                            <rect id="Rectangle_2460" data-name="Rectangle 2460" width="3.177"
                                                  height="1.255" transform="translate(0 28.16)" fill="#fff"/>
                                            <rect id="Rectangle_2461" data-name="Rectangle 2461" width="3.177"
                                                  height="1.255" transform="translate(0 32.852)" fill="#fff"/>
                                            <rect id="Rectangle_2462" data-name="Rectangle 2462" width="3.177"
                                                  height="1.255" transform="translate(0 37.543)" fill="#fff"/>
                                            <rect id="Rectangle_2463" data-name="Rectangle 2463" width="3.177"
                                                  height="1.255" transform="translate(0 42.234)" fill="#fff"/>
                                            <rect id="Rectangle_2464" data-name="Rectangle 2464" width="3.177"
                                                  height="1.255" transform="translate(0 46.925)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11463" data-name="Group 11463" transform="translate(4.65)">
                                            <rect id="Rectangle_2465" data-name="Rectangle 2465" width="3.177"
                                                  height="1.255" fill="#fff"/>
                                            <rect id="Rectangle_2466" data-name="Rectangle 2466" width="3.177"
                                                  height="1.255" transform="translate(0 4.691)" fill="#fff"/>
                                            <rect id="Rectangle_2467" data-name="Rectangle 2467" width="3.177"
                                                  height="1.255" transform="translate(0 9.382)" fill="#fff"/>
                                            <rect id="Rectangle_2468" data-name="Rectangle 2468" width="3.177"
                                                  height="1.255" transform="translate(0 14.073)" fill="#fff"/>
                                            <rect id="Rectangle_2469" data-name="Rectangle 2469" width="3.177"
                                                  height="1.255" transform="translate(0 18.765)" fill="#fff"/>
                                            <rect id="Rectangle_2470" data-name="Rectangle 2470" width="3.177"
                                                  height="1.255" transform="translate(0 23.469)" fill="#fff"/>
                                            <rect id="Rectangle_2471" data-name="Rectangle 2471" width="3.177"
                                                  height="1.255" transform="translate(0 28.16)" fill="#fff"/>
                                            <rect id="Rectangle_2472" data-name="Rectangle 2472" width="3.177"
                                                  height="1.255" transform="translate(0 32.852)" fill="#fff"/>
                                            <rect id="Rectangle_2473" data-name="Rectangle 2473" width="3.177"
                                                  height="1.255" transform="translate(0 37.543)" fill="#fff"/>
                                            <rect id="Rectangle_2474" data-name="Rectangle 2474" width="3.177"
                                                  height="1.255" transform="translate(0 42.234)" fill="#fff"/>
                                            <rect id="Rectangle_2475" data-name="Rectangle 2475" width="3.177"
                                                  height="1.255" transform="translate(0 46.925)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11464" data-name="Group 11464" transform="translate(9.314)">
                                            <rect id="Rectangle_2476" data-name="Rectangle 2476" width="3.177"
                                                  height="1.255" fill="#fff"/>
                                            <rect id="Rectangle_2477" data-name="Rectangle 2477" width="3.177"
                                                  height="1.255" transform="translate(0 4.691)" fill="#fff"/>
                                            <rect id="Rectangle_2478" data-name="Rectangle 2478" width="3.177"
                                                  height="1.255" transform="translate(0 9.382)" fill="#fff"/>
                                            <rect id="Rectangle_2479" data-name="Rectangle 2479" width="3.177"
                                                  height="1.255" transform="translate(0 14.073)" fill="#fff"/>
                                            <rect id="Rectangle_2480" data-name="Rectangle 2480" width="3.177"
                                                  height="1.255" transform="translate(0 18.765)" fill="#fff"/>
                                            <rect id="Rectangle_2481" data-name="Rectangle 2481" width="3.177"
                                                  height="1.255" transform="translate(0 23.469)" fill="#fff"/>
                                            <rect id="Rectangle_2482" data-name="Rectangle 2482" width="3.177"
                                                  height="1.255" transform="translate(0 28.16)" fill="#fff"/>
                                            <rect id="Rectangle_2483" data-name="Rectangle 2483" width="3.177"
                                                  height="1.255" transform="translate(0 32.852)" fill="#fff"/>
                                            <rect id="Rectangle_2484" data-name="Rectangle 2484" width="3.177"
                                                  height="1.255" transform="translate(0 37.543)" fill="#fff"/>
                                            <rect id="Rectangle_2485" data-name="Rectangle 2485" width="3.177"
                                                  height="1.255" transform="translate(0 42.234)" fill="#fff"/>
                                            <rect id="Rectangle_2486" data-name="Rectangle 2486" width="3.177"
                                                  height="1.255" transform="translate(0 46.925)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_11469" data-name="Group 11469" transform="translate(40.284 54.27)"
                                       opacity="0.54">
                                        <g id="Group_11466" data-name="Group 11466">
                                            <rect id="Rectangle_2487" data-name="Rectangle 2487" width="3.177"
                                                  height="1.255" fill="#fff"/>
                                            <rect id="Rectangle_2488" data-name="Rectangle 2488" width="3.177"
                                                  height="1.255" transform="translate(0 4.705)" fill="#fff"/>
                                            <rect id="Rectangle_2489" data-name="Rectangle 2489" width="3.177"
                                                  height="1.255" transform="translate(0 9.396)" fill="#fff"/>
                                            <rect id="Rectangle_2490" data-name="Rectangle 2490" width="3.177"
                                                  height="1.255" transform="translate(0 14.087)" fill="#fff"/>
                                            <rect id="Rectangle_2491" data-name="Rectangle 2491" width="3.177"
                                                  height="1.255" transform="translate(0 18.778)" fill="#fff"/>
                                            <rect id="Rectangle_2492" data-name="Rectangle 2492" width="3.177"
                                                  height="1.255" transform="translate(0 23.469)" fill="#fff"/>
                                            <rect id="Rectangle_2493" data-name="Rectangle 2493" width="3.177"
                                                  height="1.255" transform="translate(0 28.174)" fill="#fff"/>
                                            <rect id="Rectangle_2494" data-name="Rectangle 2494" width="3.177"
                                                  height="1.255" transform="translate(0 32.865)" fill="#fff"/>
                                            <rect id="Rectangle_2495" data-name="Rectangle 2495" width="3.177"
                                                  height="1.255" transform="translate(0 37.556)" fill="#fff"/>
                                            <rect id="Rectangle_2496" data-name="Rectangle 2496" width="3.177"
                                                  height="1.255" transform="translate(0 42.248)" fill="#fff"/>
                                            <rect id="Rectangle_2497" data-name="Rectangle 2497" width="3.177"
                                                  height="1.255" transform="translate(0 46.939)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11467" data-name="Group 11467" transform="translate(4.65)">
                                            <rect id="Rectangle_2498" data-name="Rectangle 2498" width="3.177"
                                                  height="1.255" fill="#fff"/>
                                            <rect id="Rectangle_2499" data-name="Rectangle 2499" width="3.177"
                                                  height="1.255" transform="translate(0 4.705)" fill="#fff"/>
                                            <rect id="Rectangle_2500" data-name="Rectangle 2500" width="3.177"
                                                  height="1.255" transform="translate(0 9.396)" fill="#fff"/>
                                            <rect id="Rectangle_2501" data-name="Rectangle 2501" width="3.177"
                                                  height="1.255" transform="translate(0 14.087)" fill="#fff"/>
                                            <rect id="Rectangle_2502" data-name="Rectangle 2502" width="3.177"
                                                  height="1.255" transform="translate(0 18.778)" fill="#fff"/>
                                            <rect id="Rectangle_2503" data-name="Rectangle 2503" width="3.177"
                                                  height="1.255" transform="translate(0 23.469)" fill="#fff"/>
                                            <rect id="Rectangle_2504" data-name="Rectangle 2504" width="3.177"
                                                  height="1.255" transform="translate(0 28.174)" fill="#fff"/>
                                            <rect id="Rectangle_2505" data-name="Rectangle 2505" width="3.177"
                                                  height="1.255" transform="translate(0 32.865)" fill="#fff"/>
                                            <rect id="Rectangle_2506" data-name="Rectangle 2506" width="3.177"
                                                  height="1.255" transform="translate(0 37.556)" fill="#fff"/>
                                            <rect id="Rectangle_2507" data-name="Rectangle 2507" width="3.177"
                                                  height="1.255" transform="translate(0 42.248)" fill="#fff"/>
                                            <rect id="Rectangle_2508" data-name="Rectangle 2508" width="3.177"
                                                  height="1.255" transform="translate(0 46.939)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11468" data-name="Group 11468" transform="translate(9.3)">
                                            <rect id="Rectangle_2509" data-name="Rectangle 2509" width="3.177"
                                                  height="1.255" fill="#fff"/>
                                            <rect id="Rectangle_2510" data-name="Rectangle 2510" width="3.177"
                                                  height="1.255" transform="translate(0 4.705)" fill="#fff"/>
                                            <rect id="Rectangle_2511" data-name="Rectangle 2511" width="3.177"
                                                  height="1.255" transform="translate(0 9.396)" fill="#fff"/>
                                            <rect id="Rectangle_2512" data-name="Rectangle 2512" width="3.177"
                                                  height="1.255" transform="translate(0 14.087)" fill="#fff"/>
                                            <rect id="Rectangle_2513" data-name="Rectangle 2513" width="3.177"
                                                  height="1.255" transform="translate(0 18.778)" fill="#fff"/>
                                            <rect id="Rectangle_2514" data-name="Rectangle 2514" width="3.177"
                                                  height="1.255" transform="translate(0 23.469)" fill="#fff"/>
                                            <rect id="Rectangle_2515" data-name="Rectangle 2515" width="3.177"
                                                  height="1.255" transform="translate(0 28.174)" fill="#fff"/>
                                            <rect id="Rectangle_2516" data-name="Rectangle 2516" width="3.177"
                                                  height="1.255" transform="translate(0 32.865)" fill="#fff"/>
                                            <rect id="Rectangle_2517" data-name="Rectangle 2517" width="3.177"
                                                  height="1.255" transform="translate(0 37.556)" fill="#fff"/>
                                            <rect id="Rectangle_2518" data-name="Rectangle 2518" width="3.177"
                                                  height="1.255" transform="translate(0 42.248)" fill="#fff"/>
                                            <rect id="Rectangle_2519" data-name="Rectangle 2519" width="3.177"
                                                  height="1.255" transform="translate(0 46.939)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_11472" data-name="Group 11472"
                                       transform="translate(186.991 61.171)" opacity="0.54">
                                        <g id="Group_11470" data-name="Group 11470">
                                            <rect id="Rectangle_2520" data-name="Rectangle 2520" width="3.341"
                                                  height="1.009" fill="#fff"/>
                                            <rect id="Rectangle_2521" data-name="Rectangle 2521" width="3.341"
                                                  height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                            <rect id="Rectangle_2522" data-name="Rectangle 2522" width="3.341"
                                                  height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                            <rect id="Rectangle_2523" data-name="Rectangle 2523" width="3.341"
                                                  height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                            <rect id="Rectangle_2524" data-name="Rectangle 2524" width="3.341"
                                                  height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                            <rect id="Rectangle_2525" data-name="Rectangle 2525" width="3.341"
                                                  height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                            <rect id="Rectangle_2526" data-name="Rectangle 2526" width="3.341"
                                                  height="1.009" transform="translate(0 22.474)" fill="#fff"/>
                                            <rect id="Rectangle_2527" data-name="Rectangle 2527" width="3.341"
                                                  height="1.009" transform="translate(0 26.224)" fill="#fff"/>
                                            <rect id="Rectangle_2528" data-name="Rectangle 2528" width="3.341"
                                                  height="1.009" transform="translate(0 29.961)" fill="#fff"/>
                                            <rect id="Rectangle_2529" data-name="Rectangle 2529" width="3.341"
                                                  height="1.009" transform="translate(0 33.711)" fill="#fff"/>
                                            <rect id="Rectangle_2530" data-name="Rectangle 2530" width="3.341"
                                                  height="1.009" transform="translate(0 37.461)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11471" data-name="Group 11471" transform="translate(7.187)">
                                            <rect id="Rectangle_2531" data-name="Rectangle 2531" width="0.286"
                                                  height="1.009" fill="#fff"/>
                                            <rect id="Rectangle_2532" data-name="Rectangle 2532" width="0.286"
                                                  height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                            <rect id="Rectangle_2533" data-name="Rectangle 2533" width="0.286"
                                                  height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                            <rect id="Rectangle_2534" data-name="Rectangle 2534" width="0.286"
                                                  height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                            <rect id="Rectangle_2535" data-name="Rectangle 2535" width="0.286"
                                                  height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                            <rect id="Rectangle_2536" data-name="Rectangle 2536" width="0.286"
                                                  height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                            <rect id="Rectangle_2537" data-name="Rectangle 2537" width="0.286"
                                                  height="1.009" transform="translate(0 22.474)" fill="#fff"/>
                                            <rect id="Rectangle_2538" data-name="Rectangle 2538" width="0.286"
                                                  height="1.009" transform="translate(0 26.224)" fill="#fff"/>
                                            <rect id="Rectangle_2539" data-name="Rectangle 2539" width="0.286"
                                                  height="1.009" transform="translate(0 29.961)" fill="#fff"/>
                                            <rect id="Rectangle_2540" data-name="Rectangle 2540" width="0.286"
                                                  height="1.009" transform="translate(0 33.711)" fill="#fff"/>
                                            <rect id="Rectangle_2541" data-name="Rectangle 2541" width="0.286"
                                                  height="1.009" transform="translate(0 37.461)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="Group_11475" data-name="Group 11475"
                                       transform="translate(197.314 61.171)" opacity="0.54">
                                        <g id="Group_11473" data-name="Group 11473">
                                            <rect id="Rectangle_2542" data-name="Rectangle 2542" width="3.341"
                                                  height="1.009" fill="#fff"/>
                                            <rect id="Rectangle_2543" data-name="Rectangle 2543" width="3.341"
                                                  height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                            <rect id="Rectangle_2544" data-name="Rectangle 2544" width="3.341"
                                                  height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                            <rect id="Rectangle_2545" data-name="Rectangle 2545" width="3.341"
                                                  height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                            <rect id="Rectangle_2546" data-name="Rectangle 2546" width="3.341"
                                                  height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                            <rect id="Rectangle_2547" data-name="Rectangle 2547" width="3.341"
                                                  height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                            <rect id="Rectangle_2548" data-name="Rectangle 2548" width="3.341"
                                                  height="1.009" transform="translate(0 22.474)" fill="#fff"/>
                                            <rect id="Rectangle_2549" data-name="Rectangle 2549" width="3.341"
                                                  height="1.009" transform="translate(0 26.224)" fill="#fff"/>
                                            <rect id="Rectangle_2550" data-name="Rectangle 2550" width="3.341"
                                                  height="1.009" transform="translate(0 29.961)" fill="#fff"/>
                                            <rect id="Rectangle_2551" data-name="Rectangle 2551" width="3.341"
                                                  height="1.009" transform="translate(0 33.711)" fill="#fff"/>
                                            <rect id="Rectangle_2552" data-name="Rectangle 2552" width="3.341"
                                                  height="1.009" transform="translate(0 37.461)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11474" data-name="Group 11474" transform="translate(7.187)">
                                            <rect id="Rectangle_2553" data-name="Rectangle 2553" width="0.286"
                                                  height="1.009" fill="#fff"/>
                                            <rect id="Rectangle_2554" data-name="Rectangle 2554" width="0.286"
                                                  height="1.009" transform="translate(0 3.75)" fill="#fff"/>
                                            <rect id="Rectangle_2555" data-name="Rectangle 2555" width="0.286"
                                                  height="1.009" transform="translate(0 7.487)" fill="#fff"/>
                                            <rect id="Rectangle_2556" data-name="Rectangle 2556" width="0.286"
                                                  height="1.009" transform="translate(0 11.237)" fill="#fff"/>
                                            <rect id="Rectangle_2557" data-name="Rectangle 2557" width="0.286"
                                                  height="1.009" transform="translate(0 14.987)" fill="#fff"/>
                                            <rect id="Rectangle_2558" data-name="Rectangle 2558" width="0.286"
                                                  height="1.009" transform="translate(0 18.724)" fill="#fff"/>
                                            <rect id="Rectangle_2559" data-name="Rectangle 2559" width="0.286"
                                                  height="1.009" transform="translate(0 22.474)" fill="#fff"/>
                                            <rect id="Rectangle_2560" data-name="Rectangle 2560" width="0.286"
                                                  height="1.009" transform="translate(0 26.224)" fill="#fff"/>
                                            <rect id="Rectangle_2561" data-name="Rectangle 2561" width="0.286"
                                                  height="1.009" transform="translate(0 29.961)" fill="#fff"/>
                                            <rect id="Rectangle_2562" data-name="Rectangle 2562" width="0.286"
                                                  height="1.009" transform="translate(0 33.711)" fill="#fff"/>
                                            <rect id="Rectangle_2563" data-name="Rectangle 2563" width="0.286"
                                                  height="1.009" transform="translate(0 37.461)" fill="#fff"/>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_11479" data-name="Group 11479" transform="translate(27.883 86.422)">
                                    <path id="Path_77177" data-name="Path 77177"
                                          d="M656.209,415.618c-3.6,1.841-7.009,8.114-6.532,10.473s3.941,5.359,4.6,7.882-5.973,8.155-4.677,12.355,12.75,9.669,14.033,9.7,9.519-8.714,9.355-12.914-3.437-7-5.114-13.405c-.75-2.85-.027-7.991-1.487-10.405C664.937,416.859,659.782,413.791,656.209,415.618Z"
                                          transform="translate(-649.426 -415.063)" fill="#53a25b"/>
                                    <g id="Group_11477" data-name="Group 11477"
                                       transform="translate(12.183 15.705)">
                                        <path id="Path_77178" data-name="Path 77178"
                                              d="M661.988,470.3a87.732,87.732,0,0,1-2.086-18.478c-.055-2.441-.055-4.637-.041-6.778.014-6.178.027-11.51-1.5-18.246l.927-.218c1.555,6.846,1.541,12.219,1.527,18.465,0,2.127-.014,4.323.041,6.75a86.219,86.219,0,0,0,2.046,18.246Z"
                                              transform="translate(-658.36 -426.58)" fill="#e6e5e0"/>
                                    </g>
                                    <g id="Group_11478" data-name="Group 11478" transform="translate(6.441 4.387)">
                                        <path id="Path_77179" data-name="Path 77179"
                                              d="M661.255,439.731l-.027-.546a9.607,9.607,0,0,0-1.446-2.687,40.479,40.479,0,0,1-3.846-7.2A25.421,25.421,0,0,1,654.2,418.28l.955.068c-.573,8.264,3.191,14.142,5.427,17.646a16.588,16.588,0,0,1,1.432,2.482c.4-.382,1-1.364,1.514-3.873a35.729,35.729,0,0,0,.573-4.118l.955.068a34.457,34.457,0,0,1-.586,4.228c-.627,3.055-1.5,4.637-2.673,4.855Z"
                                              transform="translate(-654.149 -418.28)" fill="#e6e5e0"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2564" data-name="Rectangle 2564" width="211.851" height="14.755"
                                      transform="translate(12.178 170.927)" fill="#bec9cd" opacity="0.58"/>
                                <g id="Group_11481" data-name="Group 11481" transform="translate(160.846 109.766)">
                                    <path id="Path_77180" data-name="Path 77180"
                                          d="M756.245,432.343c2.127,1,5,4.746,4.378,8.332-.232,1.282-1.841,3.587-2.223,4.95s4.8,7.541,2.032,11.128c-1.5,1.936-6.219,1.036-6.982,1.05s-4.528,1.623-6.041-.177c-1.8-2.155,1.964-7.364,2.945-10.842.436-1.541-1.9-5.509-.191-10.132C750.695,435.194,754.145,431.348,756.245,432.343Z"
                                          transform="translate(-746.928 -432.181)" fill="#e6e5e0"/>
                                    <g id="Group_11480" data-name="Group 11480" transform="translate(4.749 11.89)">
                                        <path id="Path_77181" data-name="Path 77181"
                                              d="M751.5,464.7l-1.091-.273a42.911,42.911,0,0,0,1.2-9.819c.027-1.309.027-2.5.027-3.655a37.545,37.545,0,0,1,.914-10.051l1.091.232a36.754,36.754,0,0,0-.873,9.819c0,1.159,0,2.346-.027,3.668A43.011,43.011,0,0,1,751.5,464.7Z"
                                              transform="translate(-750.41 -440.9)" fill="#e6e5e0"/>
                                    </g>
                                </g>
                                <g id="Group_11484" data-name="Group 11484" transform="translate(175.581 85.052)">
                                    <path id="Path_77182" data-name="Path 77182"
                                          d="M764.766,414.633c-3.737,1.909-7.269,8.414-6.764,10.855s4.091,5.564,4.759,8.169-6.191,8.455-4.855,12.805,13.214,10.023,14.564,10.051,9.873-9.041,9.71-13.392-3.573-7.269-5.3-13.91c-.777-2.959-.027-8.291-1.541-10.8C773.807,415.929,768.461,412.738,764.766,414.633Z"
                                          transform="translate(-757.733 -414.058)" fill="#53a25b"/>
                                    <g id="Group_11482" data-name="Group 11482"
                                       transform="translate(12.637 16.312)">
                                        <path id="Path_77183" data-name="Path 77183"
                                              d="M770.75,471.35a90.655,90.655,0,0,1-2.155-19.16c-.055-2.523-.055-4.814-.041-7.023.014-6.409.027-11.946-1.555-18.928l.968-.218c1.609,7.091,1.6,12.682,1.582,19.146,0,2.209-.014,4.487.041,7a89.573,89.573,0,0,0,2.127,18.928Z"
                                              transform="translate(-767 -426.02)" fill="#e6e5e0"/>
                                    </g>
                                    <g id="Group_11483" data-name="Group 11483" transform="translate(6.669 4.557)">
                                        <path id="Path_77184" data-name="Path 77184"
                                              d="M770,439.642l-.027-.559a9.981,9.981,0,0,0-1.5-2.782,42.107,42.107,0,0,1-4-7.473,26.07,26.07,0,0,1-1.786-11.428l.982.068c-.586,8.578,3.3,14.66,5.632,18.3a18.073,18.073,0,0,1,1.486,2.564c.423-.4,1.036-1.4,1.568-4.009a38.651,38.651,0,0,0,.6-4.268l.982.068a37.139,37.139,0,0,1-.614,4.391c-.655,3.164-1.555,4.814-2.768,5.032Z"
                                              transform="translate(-762.623 -417.4)" fill="#e6e5e0"/>
                                    </g>
                                </g>
                                <g id="Group_11487" data-name="Group 11487" transform="translate(143.428 63.059)">
                                    <path id="Path_77185" data-name="Path 77185"
                                          d="M752.231,399.021c-1.786-4.759-16.8,7.214-17.946,13.773-.941,5.373,3.6,13.3,2.727,16.6-.832,3.15-3.191,10.732-1.568,16.01s8.8,11.4,10.419,11.428c.927.014,14.264-4.364,17.305-8.455,2.237-3-5.482-5.509-5.564-7.746-.2-5.264,5.823-10.132,3.723-18.165-.941-3.573-8.5-4.009-10.323-7.037S753.758,403.071,752.231,399.021Z"
                                          transform="translate(-734.155 -397.931)" fill="#bec9cd"/>
                                    <g id="Group_11485" data-name="Group 11485" transform="translate(9.252 27.301)">
                                        <path id="Path_77186" data-name="Path 77186"
                                              d="M745.495,472.7c-.027-.082-2.291-8.728-2.6-23.142-.068-3.055-.055-5.823-.055-8.482.014-7.759.027-14.455-1.9-22.91l.968-.218c1.95,8.564,1.936,15.314,1.909,23.128,0,2.673-.014,5.428.055,8.469.314,14.292,2.55,22.828,2.577,22.91Z"
                                              transform="translate(-740.94 -417.95)" fill="#e6e5e0"/>
                                    </g>
                                    <g id="Group_11486" data-name="Group 11486" transform="translate(5.284 29.005)">
                                        <path id="Path_77187" data-name="Path 77187"
                                              d="M744.767,436.751l-.614-.314c-.2-.109-5.168-2.741-6.123-7.268l.968-.2c.682,3.2,3.737,5.428,5.032,6.259a33.311,33.311,0,0,1,2.059-6.519,21.861,21.861,0,0,1,3.437-5.6,12.736,12.736,0,0,1,5.687-3.9l.3.941c-4.418,1.4-7.078,5.646-8.523,8.96a32.234,32.234,0,0,0-2.127,6.982Z"
                                              transform="translate(-738.03 -419.2)" fill="#e6e5e0"/>
                                    </g>
                                </g>
                                <g id="Group_11497" data-name="Group 11497" transform="translate(31.338 57.963)">
                                    <g id="character3_1_" clip-path="url(#awdawdawdxad)">
                                        <path id="Path_77188" data-name="Path 77188"
                                              d="M709.271,434.99a5.447,5.447,0,0,0-2.073-3.15c-1.391,2.877-3.232,5.632-4.937,8.414-1.759,7.173-3.546,14.346-5.591,21.451a6.854,6.854,0,0,0,3.587-1.214c2.182,6.328,8.878,20.946,13.419,19.692C719.28,478.615,709.884,438.645,709.271,434.99Z"
                                              transform="translate(-635.699 -378.969)" fill="#ee4a8b"/>
                                        <path id="Path_77189" data-name="Path 77189"
                                              d="M723.378,430.25c-4.732,11.2-13.583,24.942-16.951,33.111-2.727,6.6-1.227,15.178,2.932,16.187,3.3.791,9.314-5.073,11.919-13.623,4-13.16,4.855-34.9,4.855-34.9Z"
                                              transform="translate(-632.651 -379.548)" fill="#ee4a8b"/>
                                        <path id="Path_77190" data-name="Path 77190"
                                              d="M733.713,421.045c.354-.368,2.659-.559,3.491-1.3,2.768-2.455,5.359-11.128-.232-15.751-2.809-2.318-6.355-.627-9.478-2.168-1.541-.764-2.25-2.673-3.764-3.491-8.428-4.5-16.119,1.377-18.533,8.578-.614,1.841-.736,3.887-1.841,5.482-2.659,3.832-8.9,2.577-12.587,5.428-5.837,4.514-1.609,14.333-17.728,14.551-4.786.068-6.587.723-8,6.559a5.46,5.46,0,0,0-.136,3.164c.791,2.223,7.228,8.237,16.173,5.278,4.009-1.336,6.232-6.4,10.46-6.423,6.45-.041,13.46,4.064,18.887.586,3.055-1.964,4.364-5.7,6.45-8.66C721.1,426.882,728.735,426.1,733.713,421.045Z"
                                              transform="translate(-647.322 -391.725)" fill="#0a0909"/>
                                        <path id="Path_77191" data-name="Path 77191"
                                              d="M739.319,640.875c-6.737-17.414-17.278-69.753-17.278-77.745,0-6.7-9-78.658-14.892-85.041-6.75-7.31-30.943,6.8-31.079,11.66-.136,5.127,12.082,36.179,24.315,69.672,1.65,4.528-1.664,22.188,0,26.715,12.26,33.343,29.852,51.848,30.915,56.416C731.832,644.857,739.905,642.375,739.319,640.875Z"
                                              transform="translate(-643.191 -362.897)" fill="#222b54"/>
                                        <path id="Path_77192" data-name="Path 77192"
                                              d="M718.507,483.8c-11.96-5.468-20.7-15.983-20.7-15.983-9.191,10.691-16.405,18.969-17.551,33.956-.423,5.441,1.691,55.2-.8,58.312-.682.846-18.9,7.3-26.483,14.005-14.224,12.587-20.278,35.006-26.742,39.575-1.909,1.35,3.709,6.8,4.459,6.137,13.092-11.551,62.28-45.834,68.922-52.38C704.733,562.393,720.225,484.594,718.507,483.8Z"
                                              transform="translate(-661.463 -365.883)" fill="#222b54"/>
                                        <g id="Group_11488" data-name="Group 11488"
                                           transform="translate(16.013 49.919)">
                                            <path id="Path_77193" data-name="Path 77193"
                                                  d="M664.545,492.794a.823.823,0,0,1-.518-.177.785.785,0,0,1-.136-1.146c20.5-25.133,25.229-39.656,29.4-52.475.982-3.027,1.923-5.891,3.027-8.782a.871.871,0,0,1,1.091-.491.81.81,0,0,1,.5,1.05c-1.091,2.85-2.018,5.7-3,8.714-4.214,12.955-9,27.629-29.674,52.994A.99.99,0,0,1,664.545,492.794Z"
                                                  transform="translate(-663.702 -429.675)" fill="#c23169"/>
                                        </g>
                                        <path id="Path_77194" data-name="Path 77194"
                                              d="M704,486.055c.2-.818.423-1.65.682-2.468,3.682-11.7,8.4-23.919,10.119-24.983,8.619-5.373,2.523-14.905,1.555-18.751-1.759-7.009-4.582-14.66-6.669-17.237-2.836-3.5-18.683,9.682-22.324,16.774-2.864,5.564-6.982,39.288-8.469,42.3Z"
                                              transform="translate(-642.166 -382.536)" fill="#fb5d9c"/>
                                        <path id="Path_77195" data-name="Path 77195"
                                              d="M683.157,463.72c-3.341,9.791-16.992,21.11-13.528,22.378,18.805,6.914,37.27,5.578,40.284.055,1.132-2.073-2.032-9.26-2.032-17.305Z"
                                              transform="translate(-645.737 -367.374)" fill="#fb5d9c"/>
                                        <path id="Path_77196" data-name="Path 77196"
                                              d="M669.213,475.445c-2.836,1.091-20.824,27.288-20.633,30.165S672.4,524.2,678.3,519.656c.614-.464,16.951-31.9,15.9-34.543S671.941,474.395,669.213,475.445Z"
                                              transform="translate(-653.19 -363.144)" fill="#8a1c46"/>
                                        <path id="Path_77197" data-name="Path 77197"
                                              d="M708.052,431.684c-.314,1.773,2.25,12.873-.027,15.014-1.35,1.268-10.514-6.328-12.3-14.087-1.146-4.964,1.541-5.237,3.068-6.819s5.973-3.587,6.437-13.16c.041-.873,10.323,3.1,10.323,3.1S708.625,428.4,708.052,431.684Z"
                                              transform="translate(-636.144 -386)" fill="#f7b690"/>
                                        <path id="Path_77198" data-name="Path 77198"
                                              d="M721.853,411.288c.123,6.641-5.782,19.556-10.119,19.5-3.518-.041-11.032-8.646-9-15.055-1.541-.232-.314-5.237.75-5.782,1.091-.559,2.032.423,1.582,2.346-.027.1,7.487,1.636,13.432-1.036C720.012,410.579,721.73,410.183,721.853,411.288Z"
                                              transform="translate(-633.758 -386.987)" fill="#f7b690"/>
                                        <g id="Group_11489" data-name="Group 11489"
                                           transform="translate(38.395 47.517)">
                                            <path id="Path_77199" data-name="Path 77199"
                                                  d="M680.954,503.717a.838.838,0,0,1-.573-.218.824.824,0,0,1-.041-1.173c6.8-7.323,21.683-27.4,29.211-50.907,4.827-15.042,4.787-20.442,3.9-22.324a.833.833,0,0,1,1.514-.7c1.486,3.177.232,10.882-3.832,23.538-7.623,23.783-22.692,44.116-29.579,51.534A.846.846,0,0,1,680.954,503.717Z"
                                                  transform="translate(-680.115 -427.914)" fill="#c23169"/>
                                        </g>
                                        <g id="Group_11490" data-name="Group 11490"
                                           transform="translate(43.213 45.948)">
                                            <path id="Path_77200" data-name="Path 77200"
                                                  d="M703.129,489.311c1.132,3.9,3.668,13.978,3.573,15.764s-3.15,7.487-3.491,6.518c-.655-1.9,1.282-5.428,1.241-6.273s-4.773,6.423-5.141,5.728c-1.077-2.018,3.027-5.987,2.714-6.641-.191-.409-5.073,4.541-5.318,3.75-.6-1.936,3.941-4.8,3.109-4.855s-4.691,2.332-4.855,1.664c-.45-1.814,3.355-2.577,3.4-3.409s-2.727-7.173-2.182-8.7a9.868,9.868,0,0,1,4.146-4.077C701.3,488.466,702.679,487.729,703.129,489.311Z"
                                                  transform="translate(-679.547 -404.371)" fill="#f7b690"/>
                                            <path id="Path_77201" data-name="Path 77201"
                                                  d="M699.961,431.532c1.855,8.55-4.664,32.292-3.218,40.393.777,4.323,6.75,20.606,10.391,39.329,1.255,6.478-5.332,1.909-5.332,1.909S684.8,482.22,683.855,476.888c-.982-5.5,1.718-28.474,3.873-41.2C689.556,424.863,698.42,424.4,699.961,431.532Z"
                                                  transform="translate(-683.648 -426.764)" fill="#fb5d9c"/>
                                        </g>
                                        <path id="Path_77202" data-name="Path 77202"
                                              d="M720.148,437.085c-1-1.909-1.732-1.827-3.15-3.341-1.173-1.241-1.65-3.6-2.359-4.9s-.518-1.909.9-.914,1.5,2.468,2.986,2.918,1.582-8.591,1.364-10.405.491-.5,1.623,1.6,2.755,3.887,3.273,6-2.291,9.519-2.291,9.519Z"
                                              transform="translate(-629.312 -383.423)" fill="#ffb68e"/>
                                        <path id="Path_77203" data-name="Path 77203"
                                              d="M713.563,418.225c-3.164-.586-7.746-2.536-8.741-4.555a16.749,16.749,0,0,0,.164,8.932,15.419,15.419,0,0,0,5.3,3.164c4.009,1.146,5.018.955,6.109-.232,1.786-1.95,2.864-6.4,2.864-6.4S718.049,419.057,713.563,418.225Z"
                                              transform="translate(-632.927 -385.578)" fill="#fff"/>
                                        <g id="Group_11491" data-name="Group 11491"
                                           transform="translate(70.558 22.787)">
                                            <path id="Path_77204" data-name="Path 77204"
                                                  d="M705.486,415.753l-.532-.055a7.327,7.327,0,0,0-1.255-5.619l.436-.3A7.921,7.921,0,0,1,705.486,415.753Z"
                                                  transform="translate(-703.7 -409.78)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11492" data-name="Group 11492"
                                           transform="translate(68.417 28.583)">
                                            <path id="Path_77205" data-name="Path 77205"
                                                  d="M706.3,421.667c-1.691-1.786-3.8-4.828-4.173-7.555l.573-.082c.341,2.591,2.373,5.509,4.009,7.228Z"
                                                  transform="translate(-702.13 -414.03)" fill="#fff"/>
                                        </g>
                                    </g>
                                    <g id="character5_1_" clip-path="url(#awdawdawdxad)">
                                        <g id="Group_11493" data-name="Group 11493"
                                           transform="translate(75.757 54.774)">
                                            <path id="Path_77206" data-name="Path 77206"
                                                  d="M737.824,467.491c-2.686-.709-7.3-1.582-9.791-2.891-3.136,10.391-10.064,39.507-14.019,44.866-.927,1.268,5.673,3.464,7.05,2.455,7.541-5.55,17.66-26.306,22.051-39.316C739.665,472.209,741.179,468.377,737.824,467.491Z"
                                                  transform="translate(-705.18 -421.828)" fill="#ffbb8e"/>
                                            <path id="Path_77207" data-name="Path 77207"
                                                  d="M717.4,496.895a9.305,9.305,0,0,1-3.232,2.155c-1.7.723-2.509,4.759-6,6.709-.491.273.368,1.814,1.868,1.1,1.636-.764,2.823-2.6,2.687-2.046-.2.832-2.6,5.482-2.6,5.482s-3.177,6.219-2.509,6.423c2.114.655,3.655-4.255,4.446-5.373.341.014-1.882,7.309-.859,7.678,2.059.736,2.782-6.328,3.055-6.368.327-.041.232,6.3.845,6.178,2-.409,1.241-6.6,1.473-6.682.791-.245,1.977,5.059,2.4,4.882,1.718-.764.286-4.855.423-5.223,1.227-3.341,2.291-2.155,3.818-6.287.709-1.923-.354-4.814.477-6.491C724.2,498.054,718.269,495.94,717.4,496.895Z"
                                                  transform="translate(-707.512 -410.17)" fill="#ffbb8e"/>
                                            <path id="Path_77208" data-name="Path 77208"
                                                  d="M732.756,482.308c2.482.532,4.991.941,7.528,1.255a45.646,45.646,0,0,0,2.155-8.25c.764-7.664-6.423-42.616-8.823-42.07-5.509,1.268-10,40.543-11.087,44.266q-.164.573-.368,1.227A39.485,39.485,0,0,0,732.756,482.308Z"
                                                  transform="translate(-702.185 -433.235)" fill="#c6e7ef"/>
                                        </g>
                                        <path id="Path_77209" data-name="Path 77209"
                                              d="M780.433,483.238c5.932,13.923-23.456,62.43-35.906,77.772-.2.259-1.5,13.978-7,21.846-13.01,18.6-37.406,41.838-39.288,45.684-1.7,1.773-15.778-5.482-14.933-6.955,14.633-25.46,29.32-48.548,32.183-63.521,1.773-9.3,20.687-54.112,29.456-67.612C775.892,442.736,780.433,483.238,780.433,483.238Z"
                                              transform="translate(-640.571 -366.109)" fill="#245880"/>
                                        <path id="Path_77210" data-name="Path 77210"
                                              d="M729.08,485.976c22.924,37.788,34.42,71.485,39.4,80.145,3.068,5.319,10.569,16.323,16.528,25.706,4.664,7.337,13.992,30.083,16.61,33.111,1.146,1.323,13.269-3.968,13.242-6.028-.055-4.323-8.373-48.193-13.146-54.889-4.691-6.573-10.351-8.619-11.633-12.546-7.882-24.1-5.427-55.435-17.66-69.29-2.687-3.041-11.278-8-11.278-8Z"
                                              transform="translate(-623.911 -363.57)" fill="#245880"/>
                                        <path id="Path_77211" data-name="Path 77211"
                                              d="M748.14,423.94c11.428.355,19.2.859,22.719,4.4,15.56,15.7,18.778,60.9,11.2,69.044-4.991,5.359-28.924,15.273-28.924,15.273Z"
                                              transform="translate(-616.979 -381.842)" fill="#3c79a7"/>
                                        <path id="Path_77212" data-name="Path 77212"
                                              d="M757.943,422.02s20.224,9.546,23.347,15.533c3.928,7.528-8.278,38.375-5.4,56.512.355,2.209,10.132,19.924,6.723,24.328-11.141,14.346-61.2,7.432-59.785,3.137,10.664-32.415,5.414-71.281,8.373-83.241.7-2.8,9.737-8.591,13.923-10.964C748.111,425.634,757.943,422.02,757.943,422.02Z"
                                              transform="translate(-626.196 -382.541)" fill="#c6e7ef"/>
                                        <path id="Path_77213" data-name="Path 77213"
                                              d="M736.678,409.015c-2.741.5-6.287-1.527-6.137-3.6s8.414-10.132,17.087-4.132c1.677-3.259,7.432-1.609,9.041.614s1.432,9.955-1.786,18.274S736.678,409.015,736.678,409.015Z"
                                              transform="translate(-623.382 -390.877)" fill="#0a0909"/>
                                        <path id="Path_77214" data-name="Path 77214"
                                              d="M750.342,411.22c.15,5.237.641,11.537,1.841,14.728s-5.919,7.528-11.278,6.1a2.6,2.6,0,0,1-1.541-.777c-1.159-1.718-.586-9.464-.586-9.464l9.655-5.918.982-4.582Z"
                                              transform="translate(-620.436 -386.469)" fill="#f49e87"/>
                                        <path id="Path_77215" data-name="Path 77215"
                                              d="M734.448,405.748c-1.855,9.3,1.391,23.1,3.027,23.824s14.019-.123,14.8-14.987c.041-.7,1.077,1.514,1.418-.9.423-3.014.477-6.15-.477-6.014-2.264.314-1.118,6.123-2.632,6.437-.955.2-.177-5.114-2.073-5.5s-3.968,1.146-5.564,1.227S734.53,405.311,734.448,405.748Z"
                                              transform="translate(-622.161 -388.47)" fill="#f7b690"/>
                                        <g id="Group_11494" data-name="Group 11494"
                                           transform="translate(143.021 54.444)">
                                            <path id="Path_77216" data-name="Path 77216"
                                                  d="M784.58,469.022a43.686,43.686,0,0,0-2.727-6.382c-6.1,2.509-10.678,2.727-17.033,4.568-.014,0,1.773,9.341,2.318,10.65,1.118,2.714,11.332,24.219,12.9,30.7.627,2.632,5.5.845,6.859-1.664C788.712,503.551,786.353,476.168,784.58,469.022Z"
                                                  transform="translate(-753.933 -422.212)" fill="#ffbb8e"/>
                                            <path id="Path_77217" data-name="Path 77217"
                                                  d="M767.546,482c1.1-.314,2.209-.668,3.3-1.036,5.182-1.786,10.16-4.078,15.219-6.15-3.218-10.541-10.787-32.783-17.169-41.375-2.9-3.9-14.987,18.983-11.4,24.71C760.66,463.222,764.751,474.35,767.546,482Z"
                                                  transform="translate(-756.837 -432.994)" fill="#c6e7ef"/>
                                            <path id="Path_77218" data-name="Path 77218"
                                                  d="M777.172,496.193a8.668,8.668,0,0,1-1.814,3.355c-1.146,1.4.109,5.318-2.018,8.619-.3.464,1.214,1.432,2.2.136,1.077-1.4,1.227-3.573,1.377-3.014.218.832.382,6,.382,6s.232,6.9.927,6.778c2.2-.368,1.159-5.4,1.3-6.737.314-.15,1.909,7.282,3,7.146,2.182-.286-.641-6.832-.409-6.982.273-.191,3.287,5.441,3.778,5.059,1.582-1.268-2.127-6.368-1.964-6.546.586-.573,4.227,3.559,4.514,3.2,1.146-1.445-2.114-4.4-2.182-4.8-.559-3.491.968-2.932.3-7.255-.314-2.018-2.673-4.077-2.755-5.932C783.759,494.147,777.486,494.952,777.172,496.193Z"
                                                  transform="translate(-750.848 -410.544)" fill="#ffbb8e"/>
                                        </g>
                                        <path id="Path_77219" data-name="Path 77219"
                                              d="M756.511,425.989c-8.6,9.41,7.173,47.4,8.619,49.53s-6.737-42.357-2.318-45.657C764.38,428.7,758.707,423.589,756.511,425.989Z"
                                              transform="translate(-614.863 -381.328)" fill="#245880"/>
                                        <path id="Path_77220" data-name="Path 77220"
                                              d="M730.48,433.737c-3.968,12.505-3.191,39.084.682,43.434,1.7,1.923,1.582-44.77,7.6-49.08C742.031,425.964,731.721,429.824,730.48,433.737Z"
                                              transform="translate(-624.357 -380.553)" fill="#245880"/>
                                        <path id="Path_77221" data-name="Path 77221"
                                              d="M739.808,415.3c3.382.2,8.523-.532,9.955-2.182a14.909,14.909,0,0,1-2,8.36,20.909,20.909,0,0,1-7.4,1.418c-4.637-.177-5.237-.764-5.714-2.318a26.235,26.235,0,0,1-.709-6.069S735.021,415.016,739.808,415.3Z"
                                              transform="translate(-622.147 -385.778)" fill="#fff"/>
                                        <g id="Group_11495" data-name="Group 11495"
                                           transform="translate(127.043 23.251)">
                                            <path id="Path_77222" data-name="Path 77222"
                                                  d="M745.679,414.852l-.559-.177c.191-.6.914-2.591,1.814-4.555l.532.245A44.7,44.7,0,0,0,745.679,414.852Z"
                                                  transform="translate(-745.12 -410.12)" fill="#fff"/>
                                        </g>
                                        <g id="Group_11496" data-name="Group 11496"
                                           transform="translate(124.902 26.497)">
                                            <path id="Path_77223" data-name="Path 77223"
                                                  d="M743.85,420.832l-.3-.5c2.059-1.241,4.841-5.537,5.714-7.828l.546.2C748.937,415.05,746.1,419.482,743.85,420.832Z"
                                                  transform="translate(-743.55 -412.5)" fill="#fff"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Common environmental toxins such as Bisphenol A (BPA), phthalates, arsenic, atrazine, dioxins,
                    fire retardants, glycol ethers, lead, mercury, organophosphate pesticides and herbicides,
                    perchlorates and perflourinated chemicals (PFCs) can negatively impact fertility in both women
                    and men. Even so, they are found everywhere, from the air we breathe to the water we drink, to
                    our food, personal care products, cleaning supplies, household products and more.
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Learn more about your environment and steps you can take to improve it in the Fertilligence app.
                    Talk to your fertility coach or attend our live group classes on the topic for targeted insights
                    based on your environmental and wellness concerns.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Weight">
                <h2 class="nbe-tab-title-text">
                    Weight
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="337.334"
                     height="337.665" viewBox="0 0 337.334 337.665">
                    <defs>
                        <linearGradient id="weight-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                    </defs>
                    <g id="Group_14264" data-name="Group 14264" transform="translate(-582.854 -6192.5)">
                        <g id="Group_14263" data-name="Group 14263" transform="translate(582.854 6192.5)">
                            <g id="Group_9495" data-name="Group 9495" transform="translate(0 0)">
                                <g id="Group_9494" data-name="Group 9494" transform="translate(0)">
                                    <g id="Group_9492" data-name="Group 9492" transform="translate(0)">
                                        <circle id="Ellipse_149" data-name="Ellipse 149" cx="19.158" cy="19.158"
                                                r="19.158"
                                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 269.234, 325.129)"
                                                opacity="0.49" fill="url(#weight-weawe)"/>
                                        <ellipse id="Ellipse_301" data-name="Ellipse 301" cx="135.018" cy="135.267"
                                                 rx="135.018" ry="135.267"
                                                 transform="translate(0 78.951) rotate(-17)" opacity="0.53"
                                                 fill="url(#weight-weawe)"/>
                                        <circle id="Ellipse_145" data-name="Ellipse 145" cx="2.491" cy="2.491"
                                                r="2.491" transform="translate(300.197 86.987)" fill="#94daec"/>
                                        <g id="Ellipse_150" data-name="Ellipse 150"
                                           transform="translate(59.674 24.312)" fill="none" stroke="#ed0f68"
                                           stroke-width="1.5" stroke-dasharray="5">
                                            <circle cx="5.231" cy="5.231" r="5.231" stroke="none"/>
                                            <circle cx="5.231" cy="5.231" r="4.481" fill="none"/>
                                        </g>
                                        <circle id="Ellipse_151" data-name="Ellipse 151" cx="3.488" cy="3.488"
                                                r="3.488" transform="translate(101.122 266.343)" fill="#ed0f68"/>
                                        <g id="Ellipse_372" data-name="Ellipse 372"
                                           transform="translate(286.247 266.235)" fill="none" stroke="#94daec"
                                           stroke-width="1" stroke-dasharray="3">
                                            <circle cx="3.804" cy="3.804" r="3.804" stroke="none"/>
                                            <circle cx="3.804" cy="3.804" r="3.304" fill="none"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                        <g id="Слой_1" transform="translate(620.683 6243.507)">
                            <g id="Group_14262" data-name="Group 14262" transform="translate(0 0)">
                                <g id="Group_14261" data-name="Group 14261" transform="translate(0 0)">
                                    <g id="Group_14260" data-name="Group 14260">
                                        <path id="Path_80065" data-name="Path 80065"
                                              d="M2590.205,1096.53s-3.721,11.921-5.9,11.091,5.105-12.985,5.105-12.985-7.5-10.2-11.651-11.918c0,0,.622,13.9-1.283,12.563s-3.223-15.776-3.223-15.776-9.309-7.4-14.22-2.164-3.861,9.721-2.535,10.917,11.211,6.288,10.279,7.427-8.646-.345-11.733-3.459c0,0-1.275,12.24,4.35,14.578s9.046-.1,12.5,1.411,5.4,3.688,3.266,3.7-7.423-3.57-11.311-2.719-6.8,1.1-2.371,4.766,13.692,7.77,17.512,4.894l.478-.36a2.318,2.318,0,0,1-.478.36c.632,1.022.652,4.305.565,6.771-.042.4-.071.98-.084,1.776h0c-.021.352-.04.638-.054.838-.58,5.317-5.534,12.4-5.534,12.4l.911.85a20,20,0,0,0,5.616-14.846,23.049,23.049,0,0,1,2.4-10.662s12.408-.271,11.811-9.91C2594.618,1106.071,2593.421,1099.711,2590.205,1096.53Z"
                                              transform="translate(-2479.55 -1033.761)" fill="#dfebfd"/>
                                        <path id="Path_80066" data-name="Path 80066"
                                              d="M2300.1,1514.375s18.254,8.652,16.435,11.95-19.646-11.108-19.646-11.108-18.03,9.7-21.721,15.973c0,0,22.41,2.143,19.834,4.891s-26,1.6-26,1.6-13.959,13.242-6.676,22.29,14.7,8.378,16.916,6.523,12.6-16.539,14.216-14.788-2.5,13.772-8.188,18.014c0,0,19.319,4.8,24.333-3.678s1.886-14.511,5.08-19.7,7.125-7.814,6.662-4.4-7.4,11.083-6.907,17.5.231,11.141,7.1,4.873,15.537-20.179,11.794-26.944l-.468-.846a3.693,3.693,0,0,1,.468.846c1.781-.783,7.043-.071,10.972.623.639.158,1.555.335,2.827.536h0c.559.113,1.014.208,1.331.276,8.386,2.127,18.608,11.661,18.608,11.661l1.567-1.266c-8.773-11.71-22.512-12.347-22.512-12.347a37.247,37.247,0,0,1-16.537-6.249s2.367-19.937-13.208-21.155C2316.374,1509.462,2305.916,1509.945,2300.1,1514.375Z"
                                              transform="translate(-2225.997 -1407.154)" fill="#7db6fd"
                                              opacity="0.25"/>
                                        <path id="Path_80067" data-name="Path 80067"
                                              d="M3068.518,1278.365c.339-10.618-17.146-12.609-17.146-12.609s-16.48,13.73-19.873,13.14,11.8-14.49,11.8-14.49c-6.146-2.547-24.658.286-24.658.286s-5.1,20.335-8.239,18.928,5.431-17.776,5.431-17.776c-6.692-.034-14.6,5.37-14.6,5.37-10.708,9.462,1.994,22.724,1.994,22.724a34.078,34.078,0,0,1-8.642,13.666h0a24.763,24.763,0,0,0-3.165,3.375l1.671.511c.274-.406.556-.793.85-1.159a.014.014,0,0,1,.006-.007l.012-.015c.193-.223.471-.54.812-.926h0s0,0,0,0c.816-.843,1.387-1.476,1.768-1.942,0,0,0,0,0,0,2.488-2.67,5.939-6.084,7.672-6.493a3.356,3.356,0,0,1-.125-.876c.039.279.081.57.125.876.989,7,14.977,12.394,23.445,13.193s5.68-2.509,2.5-7.468-12.46-6.743-14.678-8.984,2.1-2.486,7.288-.455,6.221,8.155,14.553,11.594,19.8-10.706,19.8-10.706c-6.487.03-16.112-6.486-15.9-8.653s15.885,2.842,18.524,2.979S3068.178,1288.982,3068.518,1278.365Z"
                                              transform="translate(-2855.097 -1195.403)" fill="#7db6fd"
                                              opacity="0.25"/>
                                        <g id="Group_14232" data-name="Group 14232"
                                           transform="translate(156.103 30.066)">
                                            <path id="Path_80068" data-name="Path 80068"
                                                  d="M3133.573,1002.128c1.417,3.734,13.56,13.538,13.56,13.538s3.958-3.216,7.623-6.679c2.744-2.564,5.307-5.261,5.914-6.859,1.44-3.71-.09-9.018-5.4-9.917-5.284-.9-8.14,4.633-8.14,4.633s-2.856-5.532-8.164-4.633a7.229,7.229,0,0,0-2.428.854C3133.235,994.91,3132.4,999.07,3133.573,1002.128Z"
                                                  transform="translate(-3133.072 -992.112)" fill="#fb5d9c"/>
                                        </g>
                                        <g id="Group_14233" data-name="Group 14233" transform="translate(73.183)">
                                            <path id="Path_80069" data-name="Path 80069"
                                                  d="M2716.327,783.227c-.252-.764-3.254-8.907-16.046-5.679,0,0,6.444-1.058,8.313,1.368,0,0-5.22-2.157-8.36-.07s-3.418,8.726-2.863,10.721,4.329,7.857,6.679,7.769a6.985,6.985,0,0,0,2.656-.764,31.082,31.082,0,0,0-.824,3.529c-2.054,11.837,6.09,20.471,10.046,18.114,2.537-1.512,4.667,2.946,4.667,2.946l20.421-29.294S2725.364,774.434,2716.327,783.227Z"
                                                  transform="translate(-2675.094 -776.794)" fill="#0a0909"/>
                                            <path id="Path_80070" data-name="Path 80070"
                                                  d="M2645.736,1153.955c-.1,3.15,5.487,13.433,8.694,22.318h0c2.068,5.735,4.112,11.051,5.213,13.872a33.1,33.1,0,0,1,1.6,5.419c.955,4.693,2.512,14.526,3.026,30.508.006.214.013.427.019.643l-28.893-.009-.115-.634-.634-3.47,0-.019.613-15.091-1.822-2.805-5.224,1.97-2.313,19.414-.074.63-28.948-.009c0-.208,0-.416,0-.621-.008-5.059-.014-9.375-.016-13.053a104.244,104.244,0,0,1,6.662-36.75c3.358-8.93,8.329-18.273,7.285-22.661-.242-1.015-3.748-9.913-5.406-18.364-.173-.881-.344-1.768-.515-2.65-.043.172-.084.345-.126.518-2.678,11.183-6.169,25.693-6.826,28.095-1.1,3.991-11.191,34.7-11.191,34.7h-4.914s3.072-30.1,5.835-37.773,4.124-36.364,6.755-48.829c1.369-6.477,3.525-9.3,7.069-11.163h0a39.368,39.368,0,0,1,6.622-2.454c1.657-.508,3.492-1.058,5.526-1.74,2.934-.984,5.662-2.491,6.48-5.478a40.82,40.82,0,0,0,1.282-10.368h0q.01-1.275-.046-2.635h0v0l.869.134.833.132,13.759,2.194h0s-.006.169-.014.472c0,.046,0,.1-.006.154v.024c0,.047,0,.1,0,.155,0,.1-.006.2-.008.315,0,.077,0,.158-.006.242,0,.274-.012.581-.016.919,0,.088,0,.177,0,.268,0,.045,0,.089,0,.135,0,.137,0,.276,0,.421v.021c0,.263-.006.536-.008.818,0,.592,0,1.226,0,1.882,0,.283.006.57.009.86,0,.065,0,.131,0,.2.006.281.01.564.017.847.009.379.018.758.032,1.134.086,2.46-.271,4.28.4,5.534.731,1.375,4.6,2.353,8.839,4.137a30.38,30.38,0,0,1,6.429,3.526,14.278,14.278,0,0,1,5.52,7.7c3.38,12.285,5.605,42.776,8.368,50.453s5.835,37.773,5.835,37.773h-4.914s-10.094-30.712-11.19-34.7c-.338-1.233-1.424-5.668-2.763-11.2-1.223-5.056-2.659-11.031-3.929-16.329q-.18-.756-.357-1.493c-.066,1.389-.129,2.777-.192,4.142C2648.468,1144.643,2645.808,1151.735,2645.736,1153.955Z"
                                                  transform="translate(-2575.884 -1033.756)" fill="#fc9490"/>
                                            <path id="Path_80071" data-name="Path 80071"
                                                  d="M2885.682,1078.784s-.157,4.57-.007,8.865c-8.115.076-12.677-7.158-14.585-11.189Z"
                                                  transform="translate(-2824.752 -1034.616)" fill="#f48484"/>
                                            <path id="Path_80072" data-name="Path 80072"
                                                  d="M2871.473,923.589s-19.165,1.036-19.626-10.908-3.247-19.856,8.969-21.022,14.773,3.3,15.9,7.248S2876.447,923.011,2871.473,923.589Z"
                                                  transform="translate(-2807.683 -875.457)" fill="#fc9490"/>
                                            <path id="Path_80073" data-name="Path 80073"
                                                  d="M2839.1,877.474c-3.1-3.481-5.309-2.608-6.524-1.482a13.413,13.413,0,0,0-17.132,3.4,22.834,22.834,0,0,1-6.957,13.761s3.576,2.028,11.556-.346a13.7,13.7,0,0,0,6.358-4.749,44.759,44.759,0,0,1-7.347,9.693c9.458-4.81,12.82-18.343,13.153-19.772,1.211,1.007,3.6,3.2,4.391,5.416,1.072,3.006,1.736,9.252,3.553,8.97C2840.153,892.369,2843.752,882.695,2839.1,877.474Z"
                                                  transform="translate(-2770.893 -860.644)" fill="#0a0909"/>
                                            <path id="Path_80074" data-name="Path 80074"
                                                  d="M2555.483,1930.98s-4.2,6.827-4.366,8.833.427,8.864.427,8.864,1.565-.433,1.891-3.654,5.266-5.155,6.26-7.266.606-6.5.606-6.5Z"
                                                  transform="translate(-2549.434 -1769.814)" fill="#fc9490"/>
                                            <path id="Path_80075" data-name="Path 80075"
                                                  d="M2598.576,1936.28s1.359,5.481.772,7.323-1.222,4.763-2.144,4.468-1.715-5.83-1.715-5.83Z"
                                                  transform="translate(-2587.636 -1774.374)" fill="#fc9490"/>
                                            <path id="Path_80076" data-name="Path 80076"
                                                  d="M2541.959,1995.34c-.048.285-2.719,7.917-2.719,7.917s2.2.016,2.349-1.044S2541.959,1995.34,2541.959,1995.34Z"
                                                  transform="translate(-2539.24 -1825.188)" fill="#fc9490"/>
                                            <path id="Path_80077" data-name="Path 80077"
                                                  d="M3197.744,1936.28s4.2,6.827,4.366,8.833-.427,8.863-.427,8.863-1.565-.433-1.891-3.654-5.266-5.155-6.26-7.267-.664-6.775-.664-6.775Z"
                                                  transform="translate(-3101.553 -1774.374)" fill="#fc9490"/>
                                            <path id="Path_80078" data-name="Path 80078"
                                                  d="M3187.412,1941.58s-1.358,5.481-.771,7.323,1.222,4.763,2.144,4.47,1.715-5.83,1.715-5.83Z"
                                                  transform="translate(-3096.114 -1778.934)" fill="#fc9490"/>
                                            <path id="Path_80079" data-name="Path 80079"
                                                  d="M3251.961,2000.64c.049.285,2.719,7.917,2.719,7.917s-2.205.016-2.348-1.044S3251.961,2000.64,3251.961,2000.64Z"
                                                  transform="translate(-3152.439 -1829.748)" fill="#fc9490"/>
                                        </g>
                                        <path id="Path_80080" data-name="Path 80080"
                                              d="M2678.777,1797.43s19.823,6.1,50.91,0c0,0,8.835,12.94,12.489,49.8h-31.7l-2.94-17.775-3.607.057-2.118,17.718H2669.3S2670.217,1814.093,2678.777,1797.43Z"
                                              transform="translate(-2577.957 -1654.913)" fill="#fb5d9c"/>
                                        <path id="Path_80081" data-name="Path 80081"
                                              d="M2770.859,1240.862c.359,3.83,1.581,7.465-.331,17.456q-.238,1.254-.547,2.649s-19,6.193-43.1,0c0,0-.137-.4-.352-1.079-.173-.547-.4-1.278-.641-2.132-.985-3.431-2.3-8.839-1.97-12.259.515-5.326,4.1-15.874-1.3-22.71h0v0a39.419,39.419,0,0,1,6.622-2.453s4.8,14.7,11.34,15.479a70.687,70.687,0,0,0,12.307.322s7.737.261,10.658-5.064a46.757,46.757,0,0,0,3.626-9.967,30.379,30.379,0,0,1,6.429,3.526C2772.772,1226.619,2770.255,1234.437,2770.859,1240.862Z"
                                              transform="translate(-2623.831 -1158.397)" fill="#fff"/>
                                        <path id="Path_80082" data-name="Path 80082"
                                              d="M3185.125,1247.7c-.005-.015-.01-.032-.015-.047C3185.124,1247.637,3185.131,1247.653,3185.125,1247.7Z"
                                              transform="translate(-3021.741 -1181.897)" fill="#fff"/>
                                        <path id="Path_80083" data-name="Path 80083"
                                              d="M2427.325,874.066c-.255.052-2.844-5.82-9.308-3.4,0,0-1.021-6.465-8.555-6.09-6.117.306-6.736,7-6.736,7s-5.386-1.134-7.555,2.49Z"
                                              transform="translate(-2342.104 -852.303)" fill="#fff"/>
                                        <path id="Path_80084" data-name="Path 80084"
                                              d="M2386.575,874.476A14.324,14.324,0,0,0,2373.46,860.2a15.086,15.086,0,1,1,0,28.544A14.326,14.326,0,0,0,2386.575,874.476Z"
                                              transform="translate(-2323.426 -847.857)" fill="#7db6fd"/>
                                        <path id="Path_80085" data-name="Path 80085"
                                              d="M2159.625,935.474c-.467.094-5.2-10.636-17.015-6.221,0,0-1.866-11.817-15.638-11.13-11.18.559-12.312,12.8-12.312,12.8s-9.844-2.072-13.81,4.551Z"
                                              transform="translate(-2088.882 -898.363)" fill="#fff"/>
                                        <g id="Group_14235" data-name="Group 14235"
                                           transform="translate(109.566 109.753)">
                                            <g id="Group_14234" data-name="Group 14234">
                                                <path id="Path_80086" data-name="Path 80086"
                                                      d="M2803.61,1567.751c-4.9,5.488-5.08,13.425-.537,18.073a.751.751,0,0,0,1.094-.084h0a.832.832,0,0,0,.039-1.127c-3.962-4.1-3.793-11.058.509-15.874,4.483-5.018,11.783-5.837,16.272-1.826l1.1-1.236C2816.992,1561.121,2808.7,1562.052,2803.61,1567.751Z"
                                                      transform="translate(-2799.794 -1562.786)" fill="#fff"/>
                                            </g>
                                            <path id="Path_80087" data-name="Path 80087"
                                                  d="M2939.656,1575.641l3.517.229a.452.452,0,0,0,.458-.538l-.779-3.29a.335.335,0,0,0-.592-.1l-2.79,3.123A.334.334,0,0,0,2939.656,1575.641Z"
                                                  transform="translate(-2919.876 -1570.545)" fill="#fff"/>
                                        </g>
                                        <g id="Group_14237" data-name="Group 14237"
                                           transform="translate(117.172 116.579)">
                                            <g id="Group_14236" data-name="Group 14236"
                                               transform="translate(1.467)">
                                                <path id="Path_80088" data-name="Path 80088"
                                                      d="M2883.252,1629.944c4.9-5.488,5.08-13.425.538-18.073a.751.751,0,0,0-1.095.084h0a.833.833,0,0,0-.039,1.127c3.962,4.1,3.793,11.059-.51,15.874-4.482,5.019-11.782,5.837-16.271,1.826l-1.1,1.236C2869.87,1636.574,2878.162,1635.643,2883.252,1629.944Z"
                                                      transform="translate(-2864.771 -1611.672)" fill="#fff"/>
                                            </g>
                                            <path id="Path_80089" data-name="Path 80089"
                                                  d="M2858.25,1740.184l-3.516-.229a.453.453,0,0,0-.458.538l.779,3.29a.335.335,0,0,0,.592.1l2.792-3.124A.335.335,0,0,0,2858.25,1740.184Z"
                                                  transform="translate(-2854.265 -1722.041)" fill="#fff"/>
                                        </g>
                                        <g id="Group_14240" data-name="Group 14240"
                                           transform="translate(0 162.317)">
                                            <g id="Group_14238" data-name="Group 14238" transform="translate(0 0)">
                                                <path id="Path_80090" data-name="Path 80090"
                                                      d="M2039.766,1988.063a12.308,12.308,0,0,0-6.357-10.777v-1.536h-5.955a12.313,12.313,0,1,0,0,24.626h5.955v-1.536A12.3,12.3,0,0,0,2039.766,1988.063Z"
                                                      transform="translate(-2015.14 -1970.65)" fill="#ed0f68"/>
                                                <circle id="Ellipse_439" data-name="Ellipse 439" cx="12.313"
                                                        cy="12.313" r="12.313"
                                                        transform="translate(0.851 17.413) rotate(-45)"
                                                        fill="#fb5d9c"/>
                                            </g>
                                            <path id="Path_80091" data-name="Path 80091"
                                                  d="M2152.422,2038.035h-38.335a5.017,5.017,0,0,1-5.017-5.017h0a5.018,5.018,0,0,1,5.017-5.017h38.335a5.017,5.017,0,0,1,5.016,5.017h0A5.016,5.016,0,0,1,2152.422,2038.035Z"
                                                  transform="translate(-2095.955 -2015.604)" fill="#ed0f68"/>
                                            <g id="Group_14239" data-name="Group 14239"
                                               transform="translate(32.013 0)">
                                                <path id="Path_80092" data-name="Path 80092"
                                                      d="M2269.027,1988.063a12.309,12.309,0,0,0-6.358-10.777v-1.536h-5.955a12.313,12.313,0,0,0,0,24.626h5.955v-1.536A12.3,12.3,0,0,0,2269.027,1988.063Z"
                                                      transform="translate(-2244.401 -1970.651)" fill="#fb5d9c"/>
                                                <circle id="Ellipse_440" data-name="Ellipse 440" cx="12.313"
                                                        cy="12.313" r="12.313"
                                                        transform="translate(0.851 17.413) rotate(-45)"
                                                        fill="#ed0f68"/>
                                                <path id="Path_80093" data-name="Path 80093"
                                                      d="M2341.271,2031.185a5.315,5.315,0,1,1,5.315,5.315A5.314,5.314,0,0,1,2341.271,2031.185Z"
                                                      transform="translate(-2327.744 -2013.772)" fill="#fb5d9c"/>
                                            </g>
                                        </g>
                                        <g id="Group_14241" data-name="Group 14241"
                                           transform="translate(152.302 35.628)">
                                            <path id="Path_80094" data-name="Path 80094"
                                                  d="M3115.03,1040.948l-1.252-6.576-.546,2.809h-7.381v-.444h7.015l.918-4.715,1.308,6.877.589-2.322h1.275l.868-4.048,1.113,6.173.585-2.364h2.632l.969-3.177.848,5.562.682-2.385h2.178l.64-3.488,1.374,5.488.5-2h2.816l.148,1.666,1.55-6.065,1.021,4.415h4.58v.444h-4.933l-.689-2.981-1.742,6.814-.341-3.85h-2.062l-.845,3.388-1.308-5.223-.336,1.835h-2.213l-1.149,4.022-.861-5.644-.494,1.623h-2.614l-1,4.044-1.082-6-.472,2.2h-1.287Z"
                                                  transform="translate(-3105.85 -1031.94)" fill="#fff"/>
                                        </g>
                                        <g id="Group_14248" data-name="Group 14248"
                                           transform="translate(6.425 64.897)">
                                            <g id="Group_14242" data-name="Group 14242"
                                               transform="translate(30.321 9.312)">
                                                <path id="Path_80095" data-name="Path 80095"
                                                      d="M2294.044,1326.431h-10.5l-5.252-9.095,5.252-9.1h10.5l5.251,9.1Zm-10.106-.687h9.708l4.856-8.408-4.856-8.409h-9.708l-4.855,8.409Z"
                                                      transform="translate(-2278.291 -1308.24)" fill="#94daec"/>
                                            </g>
                                            <g id="Group_14243" data-name="Group 14243"
                                               transform="translate(5.793 26.816)">
                                                <path id="Path_80096" data-name="Path 80096"
                                                      d="M2113.043,1451.609l-.595-.344,4.953-8.58-4.854-8.407h-9.907v-.687h10.3l5.251,9.095Z"
                                                      transform="translate(-2102.64 -1433.59)" fill="#94daec"/>
                                            </g>
                                            <g id="Group_14244" data-name="Group 14244"
                                               transform="translate(0.443 9.312)">
                                                <path id="Path_80097" data-name="Path 80097"
                                                      d="M2079.975,1326.431h-10.5l-5.153-8.924.595-.344,4.955,8.581h9.709l4.854-8.409-4.854-8.408h-9.907v-.687h10.3l5.252,9.095Z"
                                                      transform="translate(-2064.32 -1308.24)" fill="#94daec"/>
                                            </g>
                                            <g id="Group_14245" data-name="Group 14245"
                                               transform="translate(45.377 18.063)">
                                                <path id="Path_80098" data-name="Path 80098"
                                                      d="M2391.273,1388.929l-5.153-8.923,5.252-9.1h10.5l5.151,8.924-.594.343-4.953-8.581h-9.709l-4.855,8.409,4.954,8.579Z"
                                                      transform="translate(-2386.12 -1370.91)" fill="#94daec"/>
                                            </g>
                                            <g id="Group_14246" data-name="Group 14246"
                                               transform="translate(15.433 18.063)">
                                                <path id="Path_80099" data-name="Path 80099"
                                                      d="M2187.325,1389.1h-10.3v-.687h9.908l4.855-8.408-4.855-8.409h-9.709l-4.953,8.581-.6-.343,5.153-8.924h10.5l5.252,9.1Z"
                                                      transform="translate(-2171.67 -1370.91)" fill="#94daec"/>
                                            </g>
                                            <g id="Group_14247" data-name="Group 14247"
                                               transform="translate(45.377 0.56)">
                                                <path id="Path_80100" data-name="Path 80100"
                                                      d="M2401.676,1263.751h-10.3l-5.252-9.094,5.252-9.1h10.3v.687h-9.907l-4.855,8.409,4.855,8.407h9.907Z"
                                                      transform="translate(-2386.12 -1245.56)" fill="#94daec"/>
                                            </g>
                                            <path id="Path_80101" data-name="Path 80101"
                                                  d="M2275.63,1366.5a.888.888,0,1,1,.888.888A.889.889,0,0,1,2275.63,1366.5Z"
                                                  transform="translate(-2245.681 -1348.287)" fill="#94daec"/>
                                            <path id="Path_80102" data-name="Path 80102"
                                                  d="M2203.861,1366.5a.888.888,0,1,1,.888.888A.888.888,0,0,1,2203.861,1366.5Z"
                                                  transform="translate(-2183.933 -1348.287)" fill="#94daec"/>
                                            <path id="Path_80103" data-name="Path 80103"
                                                  d="M2203.861,1492.639a.888.888,0,1,1,.888.888A.888.888,0,0,1,2203.861,1492.639Z"
                                                  transform="translate(-2183.933 -1456.813)" fill="#94daec"/>
                                            <path id="Path_80104" data-name="Path 80104"
                                                  d="M2167.78,1554.728a.888.888,0,1,1,.888.888A.888.888,0,0,1,2167.78,1554.728Z"
                                                  transform="translate(-2152.891 -1510.233)" fill="#94daec"/>
                                            <path id="Path_80105" data-name="Path 80105"
                                                  d="M2275.63,1492.639a.888.888,0,1,1,.888.888A.889.889,0,0,1,2275.63,1492.639Z"
                                                  transform="translate(-2245.681 -1456.813)" fill="#94daec"/>
                                            <path id="Path_80106" data-name="Path 80106"
                                                  d="M2311.31,1429.568a.888.888,0,1,1,.888.888A.888.888,0,0,1,2311.31,1429.568Z"
                                                  transform="translate(-2276.379 -1402.55)" fill="#94daec"/>
                                            <path id="Path_80107" data-name="Path 80107"
                                                  d="M2382.46,1429.568a.888.888,0,1,1,.889.888A.889.889,0,0,1,2382.46,1429.568Z"
                                                  transform="translate(-2337.594 -1402.55)" fill="#94daec"/>
                                            <path id="Path_80108" data-name="Path 80108"
                                                  d="M2169.76,1429.568a.888.888,0,1,1,.888.888A.888.888,0,0,1,2169.76,1429.568Z"
                                                  transform="translate(-2154.595 -1402.55)" fill="#94daec"/>
                                            <path id="Path_80109" data-name="Path 80109"
                                                  d="M2096.28,1429.568a.888.888,0,1,1,.888.888A.888.888,0,0,1,2096.28,1429.568Z"
                                                  transform="translate(-2091.375 -1402.55)" fill="#94daec"/>
                                            <path id="Path_80110" data-name="Path 80110"
                                                  d="M2061.15,1369.778a.888.888,0,1,1,.889.888A.889.889,0,0,1,2061.15,1369.778Z"
                                                  transform="translate(-2061.15 -1351.109)" fill="#94daec"/>
                                            <path id="Path_80111" data-name="Path 80111"
                                                  d="M2098.47,1305.228a.888.888,0,1,1,.888.888A.889.889,0,0,1,2098.47,1305.228Z"
                                                  transform="translate(-2093.259 -1295.572)" fill="#94daec"/>
                                            <path id="Path_80112" data-name="Path 80112"
                                                  d="M2382.46,1305.228a.888.888,0,1,1,.889.888A.889.889,0,0,1,2382.46,1305.228Z"
                                                  transform="translate(-2337.594 -1295.572)" fill="#94daec"/>
                                            <path id="Path_80113" data-name="Path 80113"
                                                  d="M2311.31,1305.228a.888.888,0,1,1,.888.888A.888.888,0,0,1,2311.31,1305.228Z"
                                                  transform="translate(-2276.379 -1295.572)" fill="#94daec"/>
                                            <path id="Path_80114" data-name="Path 80114"
                                                  d="M2418.34,1367.9a.888.888,0,1,1,.888.888A.889.889,0,0,1,2418.34,1367.9Z"
                                                  transform="translate(-2368.463 -1349.491)" fill="#94daec"/>
                                            <path id="Path_80115" data-name="Path 80115"
                                                  d="M2491.16,1367.9a.888.888,0,1,1,.888.888A.889.889,0,0,1,2491.16,1367.9Z"
                                                  transform="translate(-2431.115 -1349.491)" fill="#94daec"/>
                                            <path id="Path_80116" data-name="Path 80116"
                                                  d="M2527.51,1429.958a.888.888,0,1,1,.888.888A.889.889,0,0,1,2527.51,1429.958Z"
                                                  transform="translate(-2462.39 -1402.886)" fill="#94daec"/>
                                            <path id="Path_80117" data-name="Path 80117"
                                                  d="M2491.16,1242.438a.888.888,0,1,1,.888.888A.889.889,0,0,1,2491.16,1242.438Z"
                                                  transform="translate(-2431.115 -1241.55)" fill="#94daec"/>
                                            <path id="Path_80118" data-name="Path 80118"
                                                  d="M2418.34,1492.639a.888.888,0,1,1,.888.888A.889.889,0,0,1,2418.34,1492.639Z"
                                                  transform="translate(-2368.463 -1456.813)" fill="#94daec"/>
                                        </g>
                                        <g id="Group_14249" data-name="Group 14249"
                                           transform="translate(217.443 76.68)">
                                            <path id="Path_80119" data-name="Path 80119"
                                                  d="M3583.662,1360.554a25.713,25.713,0,0,1-5.773-4.593c-3.759-3.963-5.669-8.571-5.525-13.327.2-6.7,3.079-10.681,5.457-12.838a14.465,14.465,0,0,1,10.577-3.835c7.207.48,6.974,8.166,6.971,8.244l-.859-.035c.01-.289.193-6.927-6.169-7.352a13.612,13.612,0,0,0-9.942,3.614c-2.253,2.046-4.981,5.827-5.175,12.228-.333,10.953,10.736,17.078,10.848,17.138Zm11.277-26.366-.428-.017h0Z"
                                                  transform="translate(-3572.356 -1325.933)" fill="#fb5d9c"/>
                                        </g>
                                        <g id="Group_14250" data-name="Group 14250"
                                           transform="translate(218.347 84.437)">
                                            <path id="Path_80120" data-name="Path 80120"
                                                  d="M3622.188,1456.309v71.968a6.064,6.064,0,0,1-6.066,6.066H3586a7.167,7.167,0,0,1-7.166-7.163v-70.643a14.493,14.493,0,0,1,9.9-13.744,7.28,7.28,0,0,0,4.894-6.548l.13-2.484h13.509l.194,2.427a7.694,7.694,0,0,0,5.149,6.649A14.262,14.262,0,0,1,3622.188,1456.309Z"
                                                  transform="translate(-3578.83 -1426.461)" fill="#fff"/>
                                            <path id="Path_80121" data-name="Path 80121"
                                                  d="M3675.367,1456.309v71.968a6.065,6.065,0,0,1-6.066,6.066h-21.5a7.167,7.167,0,0,1-7.165-7.163v-70.643a14.488,14.488,0,0,1,9.9-13.744,7.28,7.28,0,0,0,4.892-6.548l.134-2.484h4.875l.194,2.427a7.7,7.7,0,0,0,5.15,6.649A14.263,14.263,0,0,1,3675.367,1456.309Z"
                                                  transform="translate(-3632.01 -1426.461)" fill="#94daec"/>
                                            <path id="Path_80122" data-name="Path 80122"
                                                  d="M3627.4,1649.431v61.948a5.782,5.782,0,0,1-5.782,5.782h-4.348c-3.647,0-5.6-.823-7.63-2.444s-6.483-1.353-7.97.539-5.742,1.9-5.742,1.9H3592.9a6.832,6.832,0,0,1-6.828-6.831v-61.352a43.058,43.058,0,0,1,16.816.23C3611.564,1650.895,3621.1,1650.242,3627.4,1649.431Z"
                                                  transform="translate(-3585.06 -1611.015)" fill="#7db6fd"/>
                                            <path id="Path_80123" data-name="Path 80123"
                                                  d="M3694.338,1390.019h-15.4v-8.286a.243.243,0,0,1,.243-.243h14.9a.252.252,0,0,1,.253.253Z"
                                                  transform="translate(-3664.962 -1381.49)" fill="#feaaaf"/>
                                        </g>
                                        <rect id="Rectangle_3374" data-name="Rectangle 3374" width="43.357"
                                              height="64.589" transform="translate(218.347 113.044)"
                                              fill="#fb5d9c"/>
                                        <path id="Path_80138" data-name="Path 80138" d="M0,0H31.168V64.589H0Z"
                                              transform="translate(226.978 113.044)" fill="#feaaaf"/>
                                        <path id="Path_80124" data-name="Path 80124"
                                              d="M3681.756,1427.91h-15.92a1.78,1.78,0,0,1-1.775-1.775h0a1.78,1.78,0,0,1,1.775-1.775h15.92a1.78,1.78,0,0,1,1.775,1.775h0A1.781,1.781,0,0,1,3681.756,1427.91Z"
                                              transform="translate(-3433.812 -1333.937)" fill="#fb5d9c"/>
                                        <g id="Group_14254" data-name="Group 14254"
                                           transform="translate(181.661 139.151)">
                                            <path id="Path_80125" data-name="Path 80125"
                                                  d="M3356.841,1911.75s-2.112,2.432-7.417,3.242h0a27.749,27.749,0,0,1-8.455-.141c-11.616,1.807-15.879-3.1-15.879-3.1-11.91-9.487-12.044-29.4,0-33.911a13.535,13.535,0,0,1,9.119-.295,21.937,21.937,0,0,0,13.518,0,13.536,13.536,0,0,1,9.12.295,12.55,12.55,0,0,1,4.237,2.628l.139.131C3368.612,1887.763,3367.068,1903.6,3356.841,1911.75Z"
                                                  transform="translate(-3316.103 -1862.432)" fill="#7db6fd"/>
                                            <path id="Path_80126" data-name="Path 80126"
                                                  d="M3397.765,1913.579s-2.113,2.432-7.417,3.242h0c-6.134.515-3.446-1.93-10.1-1.93s-10.614-2.191-14.753-12.384-.791-19.81,5.77-20.92,9.871,4.07,18.167-1.312c5.734-3.72,12.578,2.022,12.578,2.022l.14.131C3409.537,1889.592,3407.992,1905.431,3397.765,1913.579Z"
                                                  transform="translate(-3357.027 -1864.261)" fill="#94daec"/>
                                            <g id="Group_14253" data-name="Group 14253"
                                               transform="translate(9.537)">
                                                <g id="Group_14251" data-name="Group 14251"
                                                   transform="translate(0 3.479)">
                                                    <path id="Path_80127" data-name="Path 80127"
                                                          d="M3400.519,1802.791c-2.434-1.449-4.9.586-7.755,1.7s-8.363,1.1-8.363,1.1a39.936,39.936,0,0,1,5.972-6.494C3394.082,1795.862,3400.519,1802.791,3400.519,1802.791Z"
                                                          transform="translate(-3384.401 -1798.237)"
                                                          fill="#94daec"/>
                                                    <path id="Path_80128" data-name="Path 80128"
                                                          d="M3400.519,1802.791c-2.287-1.878-6.518-2.955-8.582-2.11s-7.535,4.911-7.535,4.911a39.933,39.933,0,0,1,5.972-6.494C3394.082,1795.862,3400.519,1802.791,3400.519,1802.791Z"
                                                          transform="translate(-3384.401 -1798.237)"
                                                          fill="#c6e7ef"/>
                                                </g>
                                                <g id="Group_14252" data-name="Group 14252"
                                                   transform="translate(14.279)">
                                                    <path id="Path_80129" data-name="Path 80129"
                                                          d="M3487.522,1791.33h0c-1.559-3.445-.716-7.718.266-10.7a67.584,67.584,0,0,1,3.014-7.091.4.4,0,0,1,.734.05l.3.9a3.239,3.239,0,0,1-.3,2.694c-1.507,2.491-4.534,8.314-3.171,13.108C3488.514,1790.831,3487.8,1791.947,3487.522,1791.33Z"
                                                          transform="translate(-3486.66 -1773.32)" fill="#a47850"/>
                                                </g>
                                            </g>
                                            <path id="Path_80130" data-name="Path 80130"
                                                  d="M3583.542,1903.6s4.789,1.441,4.912,5.062-3.347,3.285-5.116,1.435S3580.716,1903.47,3583.542,1903.6Z"
                                                  transform="translate(-3544.62 -1885.402)" fill="#d1f2c9"/>
                                        </g>
                                        <path id="Path_80131" data-name="Path 80131"
                                              d="M1671.772,2155.073c-.006,0-.011-.007-.011-.015v-.962c0-.008.005-.015.011-.015h261.681c.006,0,.011.007.011.015v.962Z"
                                              transform="translate(-1671.76 -1961.762)" fill="#c6e7ef"/>
                                        <path id="Path_80132" data-name="Path 80132"
                                              d="M2724.02,1784.663s-2.859,5.753-2.516,5.868,35.618,7.559,54.285-1.946l-1.934-4.914S2754.585,1792.092,2724.02,1784.663Z"
                                              transform="translate(-2622.846 -1643.075)" fill="#ed0f68"/>
                                        <g id="Group_14259" data-name="Group 14259"
                                           transform="translate(88.942 88.748)">
                                            <g id="Group_14256" data-name="Group 14256"
                                               transform="translate(4.968)">
                                                <g id="Group_14255" data-name="Group 14255">
                                                    <path id="Path_80133" data-name="Path 80133"
                                                          d="M2726.658,1413.24c-17.3-3.886-34.314,5.509-38.906,21.1a1.842,1.842,0,0,0,1.442,2.275h0a2.03,2.03,0,0,0,2.433-1.3c4.1-13.656,19.039-21.866,34.218-18.454,15.817,3.554,26,18.4,22.7,33.094l3.9.876C2756.188,1434.141,2744.623,1417.277,2726.658,1413.24Z"
                                                          transform="translate(-2687.682 -1412.364)"
                                                          fill="#94daec"/>
                                                </g>
                                                <path id="Path_80134" data-name="Path 80134"
                                                      d="M3096.662,1661.083l3.582,7.92a1.063,1.063,0,0,0,1.668.332l6.068-5.747a.837.837,0,0,0-.465-1.416l-9.845-2.212A.835.835,0,0,0,3096.662,1661.083Z"
                                                      transform="translate(-3039.49 -1625.366)" fill="#94daec"/>
                                            </g>
                                            <g id="Group_14258" data-name="Group 14258"
                                               transform="translate(0 29.383)">
                                                <g id="Group_14257" data-name="Group 14257"
                                                   transform="translate(3.28 5.773)">
                                                    <path id="Path_80135" data-name="Path 80135"
                                                          d="M2702.073,1701.721c17.3,3.886,34.314-5.508,38.908-21.1a1.844,1.844,0,0,0-1.442-2.276h0a2.032,2.032,0,0,0-2.433,1.3c-4.1,13.656-19.039,21.866-34.217,18.454-15.817-3.554-26-18.4-22.7-33.1l-3.9-.875C2672.544,1680.821,2684.109,1697.686,2702.073,1701.721Z"
                                                          transform="translate(-2675.589 -1664.13)" fill="#1098d6"/>
                                                </g>
                                                <path id="Path_80136" data-name="Path 80136"
                                                      d="M2663.668,1631.313l-3.582-7.92a1.063,1.063,0,0,0-1.668-.333l-6.067,5.748a.835.835,0,0,0,.465,1.414l9.846,2.212A.834.834,0,0,0,2663.668,1631.313Z"
                                                      transform="translate(-2652.101 -1622.788)" fill="#1098d6"/>
                                            </g>
                                        </g>
                                        <path id="Path_80137" data-name="Path 80137"
                                              d="M2921.585,1705.686c0,.688-.314,1.245-.7,1.245s-.7-.557-.7-1.245.314-1.246.7-1.246S2921.585,1705,2921.585,1705.686Z"
                                              transform="translate(-2793.804 -1574.908)" fill="#f48484"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-44">
                    According to the American Society for Reproductive Medicine, 12% of all infertility cases can be
                    linked to weight problems. Overweight and obese women, for example, are twice as likely to
                    experience infertility and, on average, can take twice as long to get pregnant. For many, excess
                    estrogen prevents ovulation, increases inflammation, and impairs testosterone production.
                </p>
                <p class="nbe-tab-text nbe-mar-b-44">
                    Being underweight is harmful as well. The physical stress and inadequate nutrients lowers FSH
                    and LH hormone levels, which lowers estrogen levels. This can lead to irregular menstrual
                    cycles, poorly-developed follicles, or no ovulation.
                </p>
                <p class="nbe-tab-text nbe-mar-b-44">
                    For man, excess body weight can have a negative impact on sperm quality and quantity, as well as
                    the rate of genetic abnormalities in the sperm. Sperm motility may also be reduced, making it
                    more difficult for the sperm to reach and ultimately fertilize an egg.
                </p>
                <p class="nbe-tab-text nbe-mar-b-44">
                    If your BMI (Body Mass Index) is above or below the healthy range, start to implement lifestyle
                    changes to help you get closer to a more optimal weight range. This is essential for supporting
                    your fertility.
                </p>
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Your coach-created fertility plan will include targeted diet and exercise, helping you and your
                    partner achieve and maintain a healthy body weight. Live group classes, on-demand workouts and
                    chats with our nutrition specialists and fitness coaches and an interactive weight tracker will
                    round out your weight loss journey and help you prepare to conceive. Do not forget to mention your
                    pre-existing condition (if diagnosed) so the program is tailored to your unique case.
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Ovulation">
                <h2 class="nbe-tab-title-text">
                    Ovulation
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="337.647"
                     height="341.623" viewBox="0 0 337.647 341.623">
                    <defs>
                        <linearGradient id="Ovulation-weawe" x1="1.243" y1="-0.075" x2="0.187" y2="0.659"
                                        gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#94daec" stop-opacity="0.502"/>
                            <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                        <clipPath id="dawduuomkml-dawda">
                            <rect id="Rectangle_705" data-name="Rectangle 705" width="112.921" height="65.122"/>
                        </clipPath>
                    </defs>
                    <g id="Group_9498" data-name="Group 9498" transform="translate(-562 -7901.112)">
                        <circle id="Ellipse_373" data-name="Ellipse 373" cx="21.443" cy="21.443" r="21.443"
                                transform="matrix(-0.995, 0.105, -0.105, -0.995, 821.475, 8238.253)" opacity="0.49"
                                fill="url(#Ovulation-weawe)"/>
                        <ellipse id="Ellipse_374" data-name="Ellipse 374" cx="135.144" cy="135.393" rx="135.144"
                                 ry="135.393" transform="translate(562 7980.137) rotate(-17)" opacity="0.53"
                                 fill="url(#Ovulation-weawe)"/>
                        <circle id="Ellipse_375" data-name="Ellipse 375" cx="2.493" cy="2.493" r="2.493"
                                transform="translate(672.734 7979.59)" fill="#94daec"/>
                        <g id="Ellipse_376" data-name="Ellipse 376" transform="translate(620.19 7924.618)"
                           fill="none" stroke="#ed0f68" stroke-width="2" stroke-dasharray="6">
                            <circle cx="8.478" cy="8.478" r="8.478" stroke="none"/>
                            <circle cx="8.478" cy="8.478" r="7.478" fill="none"/>
                        </g>
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="3.491" cy="3.491" r="3.491"
                                transform="translate(589.157 8158.719)" fill="#ed0f68"/>
                        <g id="Ellipse_378" data-name="Ellipse 378" transform="translate(662.76 8166.099)"
                           fill="none" stroke="#94daec" stroke-width="2" stroke-dasharray="5">
                            <circle cx="4.987" cy="4.987" r="4.987" stroke="none"/>
                            <circle cx="4.987" cy="4.987" r="3.987" fill="none"/>
                        </g>
                        <g id="_4252374" data-name="4252374" transform="translate(614.056 7956.485)">
                            <g id="OBJECTS" transform="translate(0 0)">
                                <g id="Group_9439" data-name="Group 9439" transform="translate(120.168 160.821)">
                                    <g id="Group_9438" data-name="Group 9438" clip-path="url(#dawduuomkml-dawda)">
                                        <g id="Group_9418" data-name="Group 9418"
                                           transform="translate(9.581 4.001)">
                                            <g id="Group_9417" data-name="Group 9417">
                                                <g id="Group_9414" data-name="Group 9414"
                                                   transform="translate(8.444 1.646)">
                                                    <path id="Path_74676" data-name="Path 74676"
                                                          d="M324.287,400.789s-4.209-10.435-.943-15.479"
                                                          transform="translate(-322.103 -384.271)" fill="none"
                                                          stroke="#2f3d6b" stroke-miterlimit="10" stroke-width="1"/>
                                                    <path id="Path_74677" data-name="Path 74677"
                                                          d="M324.9,384.545a1.073,1.073,0,1,1-.856-1.253A1.071,1.071,0,0,1,324.9,384.545Z"
                                                          transform="translate(-322.431 -383.272)" fill="#2f3d6b"/>
                                                </g>
                                                <g id="Group_9415" data-name="Group 9415"
                                                   transform="translate(3.875 2.67)">
                                                    <path id="Path_74678" data-name="Path 74678"
                                                          d="M320.871,401.686s-7.49-8.4-6.13-14.246"
                                                          transform="translate(-313.841 -386.34)" fill="none"
                                                          stroke="#2f3d6b" stroke-miterlimit="10" stroke-width="1"/>
                                                    <path id="Path_74679" data-name="Path 74679"
                                                          d="M315.272,386.188a1.076,1.076,0,1,1-1.233-.892A1.08,1.08,0,0,1,315.272,386.188Z"
                                                          transform="translate(-313.134 -385.282)" fill="#2f3d6b"/>
                                                </g>
                                                <g id="Group_9416" data-name="Group 9416"
                                                   transform="translate(0.048)">
                                                    <path id="Path_74680" data-name="Path 74680"
                                                          d="M313.361,396.446s-7.49-8.4-6.13-14.246"
                                                          transform="translate(-306.331 -381.1)" fill="none"
                                                          stroke="#2f3d6b" stroke-miterlimit="10" stroke-width="1"/>
                                                    <path id="Path_74681" data-name="Path 74681"
                                                          d="M307.762,380.948a1.076,1.076,0,1,1-1.233-.892A1.08,1.08,0,0,1,307.762,380.948Z"
                                                          transform="translate(-305.624 -380.042)" fill="#2f3d6b"/>
                                                </g>
                                                <path id="Path_74682" data-name="Path 74682"
                                                      d="M321.055,413.822s-11.607-.474-15.525-9.849a7.058,7.058,0,0,1,6.456,1.753s-3.4-5.172-1.243-6.991c0,0,4.484,1.865,5.472,4.351,0,0-.351-6.191,1.126-7.546C317.336,395.535,326.884,404.594,321.055,413.822Z"
                                                      transform="translate(-305.53 -387.643)" fill="#fb5d9c"/>
                                            </g>
                                            <path id="Path_74683" data-name="Path 74683"
                                                  d="M330.64,424.08s10.858,17.731,25.726,21.15"
                                                  transform="translate(-317.846 -401.641)" fill="none"
                                                  stroke="#fb5d9c" stroke-miterlimit="10" stroke-width="1"/>
                                        </g>
                                        <g id="Group_9437" data-name="Group 9437"
                                           transform="translate(1.593 12.045)">
                                            <g id="Group_9420" data-name="Group 9420"
                                               transform="translate(50.225 30.338)">
                                                <path id="Path_74684" data-name="Path 74684"
                                                      d="M390.5,494.406c-4.316-5.182-1.4-15.724,4.1-18.725,3.516-1.921,5.595.6,9.314-1.172,7.006-3.332,4.428-14.578,10.3-16.87,4.367-1.707,7.592,3.811,14.985,3.383,5.972-.346,7.031-6.109,11.582-5.62,4.137.443,8.178,5.141,7.49,8.275-.785,3.582-7.23,2.751-12.188,7.674-4.866,4.83-1.05,10.99-5.014,13.574-3.72,2.425-7.653-1.824-12.891.744-3.475,1.7-3.113,4.244-6.308,7.154C406.475,497.728,395.087,499.919,390.5,494.406Z"
                                                      transform="translate(-388.425 -455.372)" fill="#3a8b42"/>
                                                <g id="Group_9419" data-name="Group 9419"
                                                   transform="translate(0.42 5.249)">
                                                    <path id="Path_74685" data-name="Path 74685"
                                                          d="M443.4,465.7s-6.063-.52-9.192,2.874-7.414,5.6-11.745,4.9-4.229,5.263-10.639,9.452-17.023,2.252-22.577,17.727"
                                                          transform="translate(-389.25 -465.674)" fill="none"
                                                          stroke="#53a25b" stroke-miterlimit="10" stroke-width="1"/>
                                                </g>
                                            </g>
                                            <g id="Group_9422" data-name="Group 9422" transform="translate(26.378)">
                                                <path id="Path_74686" data-name="Path 74686"
                                                      d="M362.771,461.956c-6.552,1.309-14.414-6.247-14.476-12.483-.041-3.985,3.139-4.611,3.322-8.7.352-7.709-10.69-10.8-9.961-17.018.545-4.626,6.884-4.83,9.956-11.5,2.481-5.386-2.064-9.049.484-12.8,2.318-3.409,8.315-4.708,10.736-2.624,2.767,2.385-.968,7.633,1.029,14.3,1.957,6.547,9.131,6.135,9.543,10.833.387,4.4-5.172,5.829-5.37,11.627-.132,3.847,2.262,4.739,3.317,8.917C373.135,449.56,369.737,460.56,362.771,461.956Z"
                                                      transform="translate(-341.622 -395.83)" fill="#3a8b42"/>
                                                <g id="Group_9421" data-name="Group 9421"
                                                   transform="translate(12.405 4.183)">
                                                    <path id="Path_74687" data-name="Path 74687"
                                                          d="M369.669,404.04s-3.286,5.055-1.773,9.406,1.447,9.146-1.192,12.6,2.634,6.2,3.307,13.793-5.977,15.958,4.978,28.167"
                                                          transform="translate(-365.969 -404.04)" fill="none"
                                                          stroke="#53a25b" stroke-miterlimit="10" stroke-width="1"/>
                                                </g>
                                            </g>
                                            <g id="Group_9424" data-name="Group 9424"
                                               transform="translate(42.284 4.01)">
                                                <path id="Path_74688" data-name="Path 74688"
                                                      d="M383.3,467.279c-5.513.586-10.512-7.439-9.452-13.4.678-3.811,3.348-4.086,4.224-7.979,1.651-7.332-6.7-11.408-5-17.278,1.264-4.372,6.41-3.918,10.068-9.982,2.96-4.9-.056-8.861,2.665-12.183,2.476-3.027,7.541-3.653,9.126-1.416,1.809,2.563-2.135,7.2-1.712,13.778.413,6.461,6.272,6.792,5.768,11.322-.469,4.249-5.207,5.044-6.395,10.568-.79,3.664.983,4.759,1.09,8.861C393.858,456.482,389.166,466.658,383.3,467.279Z"
                                                      transform="translate(-372.841 -403.701)" fill="#53a25b"/>
                                                <g id="Group_9423" data-name="Group 9423"
                                                   transform="translate(7.433 3.851)">
                                                    <path id="Path_74689" data-name="Path 74689"
                                                          d="M397.4,411.26s-3.551,4.5-3.1,8.81-.459,8.891-3.2,11.923,1.024,6.2.214,13.518-7.653,14.649-.994,27.433"
                                                          transform="translate(-387.429 -411.26)" fill="none"
                                                          stroke="#3a8b42" stroke-miterlimit="10" stroke-width="1"/>
                                                </g>
                                            </g>
                                            <g id="Group_9426" data-name="Group 9426"
                                               transform="translate(0 39.433)">
                                                <path id="Path_74690" data-name="Path 74690"
                                                      d="M339.112,498.254c-1.564,5.167-9.946,7.888-14.415,5.554-2.853-1.493-2.089-3.995-4.932-5.686-5.36-3.19-11.77,3.5-15.923.611-3.093-2.15-.82-6.746-4.4-11.48-2.889-3.822-7.235-1.982-8.937-5.223-1.544-2.95-.184-7.719,2.227-8.652,2.757-1.065,5.07,3.6,10.583,4.718,5.411,1.1,7.852-4.168,11.357-2.67,3.286,1.406,2.181,5.905,6.237,8.259,2.69,1.559,4.239.194,7.617,1.034C334.226,486.143,340.773,492.761,339.112,498.254Z"
                                                      transform="translate(-289.853 -473.222)" fill="#53a25b"/>
                                                <g id="Group_9425" data-name="Group 9425"
                                                   transform="translate(3.193 5.013)">
                                                    <path id="Path_74691" data-name="Path 74691"
                                                          d="M296.12,483.06s2.349,4.27,6.028,4.851,7.067,2.456,8.519,5.651,5.421.489,11.087,2.9,9.1,10.343,21.971,7.189"
                                                          transform="translate(-296.12 -483.06)" fill="none"
                                                          stroke="#3a8b42" stroke-miterlimit="10" stroke-width="1"/>
                                                </g>
                                            </g>
                                            <g id="Group_9431" data-name="Group 9431"
                                               transform="translate(60.543 12.285)">
                                                <g id="Group_9430" data-name="Group 9430"
                                                   transform="translate(9.39)">
                                                    <g id="Group_9427" data-name="Group 9427"
                                                       transform="translate(6.754 8.822)">
                                                        <path id="Path_74692" data-name="Path 74692"
                                                              d="M440.36,444.408s8.662-7.179,14.46-5.6"
                                                              transform="translate(-440.36 -437.903)" fill="none"
                                                              stroke="#0a0909" stroke-miterlimit="10"
                                                              stroke-width="1"/>
                                                        <path id="Path_74693" data-name="Path 74693"
                                                              d="M467.87,439.4a1.075,1.075,0,1,1,.938-1.2A1.074,1.074,0,0,1,467.87,439.4Z"
                                                              transform="translate(-453.262 -437.254)"
                                                              fill="#2f3d6b"/>
                                                    </g>
                                                    <g id="Group_9428" data-name="Group 9428"
                                                       transform="translate(6.973 4.458)">
                                                        <path id="Path_74694" data-name="Path 74694"
                                                              d="M440.79,440.66s5.722-9.691,11.709-10.17"
                                                              transform="translate(-440.79 -429.573)" fill="none"
                                                              stroke="#0a0909" stroke-miterlimit="10"
                                                              stroke-width="1"/>
                                                        <path id="Path_74695" data-name="Path 74695"
                                                              d="M463.374,430.728a1.077,1.077,0,1,1,.474-1.447A1.077,1.077,0,0,1,463.374,430.728Z"
                                                              transform="translate(-451.1 -428.69)" fill="#2f3d6b"/>
                                                    </g>
                                                    <g id="Group_9429" data-name="Group 9429"
                                                       transform="translate(8.354)">
                                                        <path id="Path_74696" data-name="Path 74696"
                                                              d="M443.5,431.91s5.722-9.691,11.709-10.17"
                                                              transform="translate(-443.5 -420.823)" fill="none"
                                                              stroke="#0a0909" stroke-miterlimit="10"
                                                              stroke-width="1"/>
                                                        <path id="Path_74697" data-name="Path 74697"
                                                              d="M466.084,421.978a1.077,1.077,0,1,1,.474-1.447A1.076,1.076,0,0,1,466.084,421.978Z"
                                                              transform="translate(-453.81 -419.941)"
                                                              fill="#2f3d6b"/>
                                                    </g>
                                                    <path id="Path_74698" data-name="Path 74698"
                                                          d="M427.709,446.838s-3.078-11.2,4.662-17.788a7.059,7.059,0,0,1,.3,6.68s3.893-4.81,6.283-3.312c0,0-.413,4.835-2.481,6.537,0,0,5.793-2.216,7.531-1.223C444,437.732,438.271,449.589,427.709,446.838Z"
                                                          transform="translate(-427.105 -424.409)" fill="#fb5d9c"/>
                                                </g>
                                                <path id="Path_74699" data-name="Path 74699"
                                                      d="M421.406,456.63s-15.087,19.016-12.412,37.16"
                                                      transform="translate(-408.676 -437.936)" fill="none"
                                                      stroke="#fb5d9c" stroke-miterlimit="10" stroke-width="1"/>
                                            </g>
                                            <g id="Group_9436" data-name="Group 9436"
                                               transform="translate(5.018 24.16)">
                                                <g id="Group_9435" data-name="Group 9435">
                                                    <g id="Group_9432" data-name="Group 9432"
                                                       transform="translate(0.911 8.836)">
                                                        <path id="Path_74700" data-name="Path 74700"
                                                              d="M318.917,463.741s-10.053-5.055-15.347-2.222"
                                                              transform="translate(-302.509 -460.622)" fill="none"
                                                              stroke="#2f3d6b" stroke-miterlimit="10"
                                                              stroke-width="1"/>
                                                        <path id="Path_74701" data-name="Path 74701"
                                                              d="M302.676,462.734a1.076,1.076,0,1,0-1.182-.958A1.076,1.076,0,0,0,302.676,462.734Z"
                                                              transform="translate(-301.489 -460.589)"
                                                              fill="#2f3d6b"/>
                                                    </g>
                                                    <g id="Group_9433" data-name="Group 9433"
                                                       transform="translate(2.342 4.035)">
                                                        <path id="Path_74702" data-name="Path 74702"
                                                              d="M320.181,460.158s-7.745-8.158-13.691-7.281"
                                                              transform="translate(-305.373 -451.974)" fill="none"
                                                              stroke="#2f3d6b" stroke-miterlimit="10"
                                                              stroke-width="1"/>
                                                        <path id="Path_74703" data-name="Path 74703"
                                                              d="M305.114,453.283a1.073,1.073,0,1,0-.785-1.3A1.07,1.07,0,0,0,305.114,453.283Z"
                                                              transform="translate(-304.298 -451.168)"
                                                              fill="#2f3d6b"/>
                                                    </g>
                                                    <g id="Group_9434" data-name="Group 9434">
                                                        <path id="Path_74704" data-name="Path 74704"
                                                              d="M315.581,452.238s-7.745-8.158-13.691-7.281"
                                                              transform="translate(-300.775 -444.054)" fill="none"
                                                              stroke="#2f3d6b" stroke-miterlimit="10"
                                                              stroke-width="1"/>
                                                        <path id="Path_74705" data-name="Path 74705"
                                                              d="M300.516,445.363a1.073,1.073,0,1,0-.785-1.3A1.07,1.07,0,0,0,300.516,445.363Z"
                                                              transform="translate(-299.701 -443.248)"
                                                              fill="#2f3d6b"/>
                                                    </g>
                                                    <path id="Path_74706" data-name="Path 74706"
                                                          d="M331.325,461.91s.489-11.607-8.535-16.29A7.047,7.047,0,0,0,324,452.2s-4.876-3.816-6.863-1.819c0,0,1.488,4.621,3.883,5.814,0,0-6.145-.861-7.612.5C313.41,456.692,321.649,466.959,331.325,461.91Z"
                                                          transform="translate(-306.425 -444.411)" fill="#fb5d9c"/>
                                                </g>
                                                <path id="Path_74707" data-name="Path 74707"
                                                      d="M339.3,470.44s25.583,18.74,28.905,41.771"
                                                      transform="translate(-319.123 -456.585)" fill="none"
                                                      stroke="#fb5d9c" stroke-miterlimit="10" stroke-width="1"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_9448" data-name="Group 9448" transform="translate(23.964 9.563)">
                                    <path id="Path_74708" data-name="Path 74708"
                                          d="M279.566,211.024H124.41L125.959,93.93l154.707.963Z"
                                          transform="translate(-106.658 -84.453)" fill="#7da9ff"/>
                                    <path id="Path_74709" data-name="Path 74709"
                                          d="M432.14,209.4l-3.22,2.548V95.82H430.8Z"
                                          transform="translate(-256.013 -85.38)" fill="#2f3d6b"/>
                                    <path id="Path_74710" data-name="Path 74710"
                                          d="M124.41,211.019H274.7c6.5-33.69,2.706-112.539,2.706-112.539l-23.382-3.76-128.064-.8Z"
                                          transform="translate(-106.658 -84.448)" fill="#4f78c4"/>
                                    <g id="Group_9447" data-name="Group 9447">
                                        <g id="Group_9446" data-name="Group 9446">
                                            <g id="Group_9440" data-name="Group 9440"
                                               transform="translate(0 7.898)">
                                                <path id="Path_74711" data-name="Path 74711"
                                                      d="M120.87,100.095,272.765,95.82s-.739,90.8-16.381,121.1l-151.564-.25S125.048,128.654,120.87,100.095Z"
                                                      transform="translate(-97.05 -93.277)" fill="#b6caf2"/>
                                                <path id="Path_74712" data-name="Path 74712"
                                                      d="M116.99,98.785l153.622-.255s-8.214,84.449-23.856,114.755L100.94,215.359C100.94,215.354,121.168,127.339,116.99,98.785Z"
                                                      transform="translate(-95.147 -94.607)" fill="#d9e6ff"/>
                                                <path id="Path_74713" data-name="Path 74713"
                                                      d="M108.056,90.83,265.29,93.373s-11.7,82.319-28.248,111.933l-147.472.224S111.826,119.073,108.056,90.83Z"
                                                      transform="translate(-89.57 -90.83)" fill="#fff"/>
                                            </g>
                                            <g id="Group_9441" data-name="Group 9441"
                                               transform="translate(34.444 14.038)">
                                                <circle id="Ellipse_397" data-name="Ellipse 397" cx="1.717"
                                                        cy="1.717" r="1.717" fill="#d9e6ff"/>
                                                <path id="Path_74714" data-name="Path 74714"
                                                      d="M199.879,105.257a1.72,1.72,0,1,1-1.692-1.748A1.719,1.719,0,0,1,199.879,105.257Z"
                                                      transform="translate(-176.431 -103.189)" fill="#d9e6ff"/>
                                                <path id="Path_74715" data-name="Path 74715"
                                                      d="M239.159,105.887a1.72,1.72,0,1,1-1.692-1.748A1.719,1.719,0,0,1,239.159,105.887Z"
                                                      transform="translate(-195.697 -103.498)" fill="#d9e6ff"/>
                                                <path id="Path_74716" data-name="Path 74716"
                                                      d="M278.439,106.527a1.72,1.72,0,1,1-1.692-1.748A1.719,1.719,0,0,1,278.439,106.527Z"
                                                      transform="translate(-214.962 -103.812)" fill="#d9e6ff"/>
                                                <path id="Path_74717" data-name="Path 74717"
                                                      d="M317.709,107.157a1.72,1.72,0,1,1-1.692-1.748A1.719,1.719,0,0,1,317.709,107.157Z"
                                                      transform="translate(-234.223 -104.121)" fill="#d9e6ff"/>
                                                <circle id="Ellipse_398" data-name="Ellipse 398" cx="1.717"
                                                        cy="1.717" r="1.717" transform="translate(100.066 1.615)"
                                                        fill="#d9e6ff"/>
                                                <circle id="Ellipse_399" data-name="Ellipse 399" cx="1.717"
                                                        cy="1.717" r="1.717" transform="translate(120.08 1.941)"
                                                        fill="#fff"/>
                                            </g>
                                            <path id="Path_74718" data-name="Path 74718"
                                                  d="M157.021,89.872a3.121,3.121,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-119.545 -75.329)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <path id="Path_74719" data-name="Path 74719"
                                                  d="M196.291,90.512a3.121,3.121,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-138.806 -75.643)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <path id="Path_74720" data-name="Path 74720"
                                                  d="M235.551,91.142a3.121,3.121,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-158.062 -75.952)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <path id="Path_74721" data-name="Path 74721"
                                                  d="M274.821,91.782a3.121,3.121,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-177.323 -76.266)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <path id="Path_74722" data-name="Path 74722"
                                                  d="M314.081,92.412a3.121,3.121,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-196.579 -76.575)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <path id="Path_74723" data-name="Path 74723"
                                                  d="M353.351,93.052a3.122,3.122,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-215.84 -76.889)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <path id="Path_74724" data-name="Path 74724"
                                                  d="M392.611,93.682a3.121,3.121,0,0,1-2.522,1.8c-2.181-.036-3.888-3.725-3.811-8.234s1.9-8.142,4.076-8.107,3.888,3.725,3.811,8.234"
                                                  transform="translate(-235.096 -77.198)" fill="none"
                                                  stroke="#4f78c4" stroke-miterlimit="10" stroke-width="2"/>
                                            <g id="Group_9442" data-name="Group 9442"
                                               transform="translate(65.934 46.867)">
                                                <path id="Path_74725" data-name="Path 74725"
                                                      d="M220.949,175.835a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,220.949,175.835Z"
                                                      transform="translate(-218.973 -167.311)" fill="#d9e6ff"/>
                                                <path id="Path_74726" data-name="Path 74726"
                                                      d="M257.752,176.425a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.8,4.8,0,0,0,257.752,176.425Z"
                                                      transform="translate(-237.026 -167.6)" fill="#d9e6ff"/>
                                                <path id="Path_74727" data-name="Path 74727"
                                                      d="M294.559,177.025a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,294.559,177.025Z"
                                                      transform="translate(-255.077 -167.894)" fill="#d9e6ff"/>
                                                <path id="Path_74728" data-name="Path 74728"
                                                      d="M331.362,177.625a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.8,4.8,0,0,0,331.362,177.625Z"
                                                      transform="translate(-273.13 -168.189)" fill="#d9e6ff"/>
                                                <path id="Path_74729" data-name="Path 74729"
                                                      d="M368.169,178.215a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,368.169,178.215Z"
                                                      transform="translate(-291.181 -168.478)" fill="#d9e6ff"/>
                                            </g>
                                            <g id="Group_9443" data-name="Group 9443"
                                               transform="translate(25.154 64.257)">
                                                <path id="Path_74730" data-name="Path 74730"
                                                      d="M140.91,209.965a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143C138.3,203.973,138.3,208.151,140.91,209.965Z"
                                                      transform="translate(-138.937 -201.441)" fill="#d9e6ff"/>
                                                <path id="Path_74731" data-name="Path 74731"
                                                      d="M177.719,210.555a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,177.719,210.555Z"
                                                      transform="translate(-156.99 -201.73)" fill="#d9e6ff"/>
                                                <path id="Path_74732" data-name="Path 74732"
                                                      d="M214.522,211.155a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.8,4.8,0,0,0,214.522,211.155Z"
                                                      transform="translate(-175.043 -202.024)" fill="#d9e6ff"/>
                                                <path id="Path_74733" data-name="Path 74733"
                                                      d="M251.329,211.745a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.637,5.637,0,0,0-5.737.143A4.79,4.79,0,0,0,251.329,211.745Z"
                                                      transform="translate(-193.093 -202.314)" fill="#d9e6ff"/>
                                                <path id="Path_74734" data-name="Path 74734"
                                                      d="M288.132,212.345a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.637,5.637,0,0,0-5.737.143A4.8,4.8,0,0,0,288.132,212.345Z"
                                                      transform="translate(-211.146 -202.608)" fill="#d9e6ff"/>
                                                <path id="Path_74735" data-name="Path 74735"
                                                      d="M324.939,212.945a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,324.939,212.945Z"
                                                      transform="translate(-229.197 -202.902)" fill="#d9e6ff"/>
                                                <path id="Path_74736" data-name="Path 74736"
                                                      d="M361.749,213.535a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,361.749,213.535Z"
                                                      transform="translate(-247.251 -203.192)" fill="#d9e6ff"/>
                                            </g>
                                            <g id="Group_9444" data-name="Group 9444"
                                               transform="translate(20.879 81.892)">
                                                <path id="Path_74737" data-name="Path 74737"
                                                      d="M132.52,244.575a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143C129.906,238.583,129.912,242.761,132.52,244.575Z"
                                                      transform="translate(-130.547 -236.051)" fill="#d9e6ff"/>
                                                <path id="Path_74738" data-name="Path 74738"
                                                      d="M169.329,245.165a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,169.329,245.165Z"
                                                      transform="translate(-148.6 -236.34)" fill="#d9e6ff"/>
                                                <path id="Path_74739" data-name="Path 74739"
                                                      d="M206.132,245.765a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.8,4.8,0,0,0,206.132,245.765Z"
                                                      transform="translate(-166.653 -236.634)" fill="#d9e6ff"/>
                                                <path id="Path_74740" data-name="Path 74740"
                                                      d="M242.939,246.365a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,242.939,246.365Z"
                                                      transform="translate(-184.703 -236.929)" fill="#d9e6ff"/>
                                                <path id="Path_74741" data-name="Path 74741"
                                                      d="M279.749,246.955a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,279.749,246.955Z"
                                                      transform="translate(-202.758 -237.218)" fill="#d9e6ff"/>
                                                <path id="Path_74742" data-name="Path 74742"
                                                      d="M316.549,247.555a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,316.549,247.555Z"
                                                      transform="translate(-220.807 -237.512)" fill="#d9e6ff"/>
                                                <path id="Path_74743" data-name="Path 74743"
                                                      d="M353.359,248.145a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,353.359,248.145Z"
                                                      transform="translate(-238.861 -237.802)" fill="#d9e6ff"/>
                                            </g>
                                            <g id="Group_9445" data-name="Group 9445"
                                               transform="translate(17.071 99.531)">
                                                <path id="Path_74744" data-name="Path 74744"
                                                      d="M125.049,279.195a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,125.049,279.195Z"
                                                      transform="translate(-123.073 -270.671)" fill="#d9e6ff"/>
                                                <path id="Path_74745" data-name="Path 74745"
                                                      d="M161.852,279.795a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.8,4.8,0,0,0,161.852,279.795Z"
                                                      transform="translate(-141.126 -270.965)" fill="#d9e6ff"/>
                                                <path id="Path_74746" data-name="Path 74746"
                                                      d="M198.659,280.395a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,198.659,280.395Z"
                                                      transform="translate(-159.177 -271.259)" fill="#d9e6ff"/>
                                                <path id="Path_74747" data-name="Path 74747"
                                                      d="M235.469,280.985a5.816,5.816,0,0,0,5.91.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,235.469,280.985Z"
                                                      transform="translate(-177.231 -271.549)" fill="#d9e6ff"/>
                                                <path id="Path_74748" data-name="Path 74748"
                                                      d="M272.269,281.585a5.816,5.816,0,0,0,5.911.2c2.731-1.671,2.441-6.3-.29-8.01a5.636,5.636,0,0,0-5.737.143A4.79,4.79,0,0,0,272.269,281.585Z"
                                                      transform="translate(-195.281 -271.843)" fill="#d9e6ff"/>
                                            </g>
                                        </g>
                                        <path id="Path_74749" data-name="Path 74749"
                                              d="M263.241,170.14s-4.6,6.2-.173,6.354C268.3,176.677,263.241,170.14,263.241,170.14Z"
                                              transform="translate(-173.723 -121.832)" fill="#d94c5f"/>
                                        <path id="Path_74750" data-name="Path 74750"
                                              d="M373.627,173.37s-3.893,6.145.535,6.272C378.646,179.77,373.627,173.37,373.627,173.37Z"
                                              transform="translate(-228.117 -123.416)" fill="#d94c5f"/>
                                        <path id="Path_74751" data-name="Path 74751"
                                              d="M337.072,173.56s-4.586,5.325-.158,5.452C341.4,179.144,337.072,173.56,337.072,173.56Z"
                                              transform="translate(-209.94 -123.509)" fill="#d94c5f"/>
                                        <path id="Path_74752" data-name="Path 74752"
                                              d="M300.7,171.44s-5.625,5.065-.566,6.349C304.489,178.889,300.7,171.44,300.7,171.44Z"
                                              transform="translate(-191.813 -122.469)" fill="#d94c5f"/>
                                        <path id="Path_74753" data-name="Path 74753"
                                              d="M226.13,171.03s-4.448,5.875-.025,5.63C231.78,176.334,226.13,171.03,226.13,171.03Z"
                                              transform="translate(-155.576 -122.268)" fill="#d94c5f"/>
                                        <text id="Menstrual_calendar" data-name="Menstrual calendar"
                                              transform="translate(46.383 31.762) rotate(0.928)" fill="#7da9ff"
                                              font-size="9" font-family="SegoeUI, Segoe UI">
                                            <tspan x="0" y="0">Menstrual calendar</tspan>
                                        </text>
                                    </g>
                                </g>
                                <g id="Group_9461" data-name="Group 9461" transform="translate(6.547 65.281)">
                                    <g id="Group_9459" data-name="Group 9459">
                                        <path id="Path_74754" data-name="Path 74754"
                                              d="M95.7,395.16l-2.42,26.032a6.074,6.074,0,0,0,1.737,4.846l17.63,17.793,7.724-24.335Z"
                                              transform="translate(-73.962 -287.917)" fill="#f5bfba"/>
                                        <path id="Path_74755" data-name="Path 74755"
                                              d="M114.758,440.37l4.9-15.428c.209-2.379.387-4.693.489-6.659L96.711,395.17,95.32,410.1l9.752,15.184a3.338,3.338,0,0,1,.52,1.529l.81,9.7,3.062,3.093Z"
                                              transform="translate(-74.973 -287.922)" fill="#d6a3a3"/>
                                        <path id="Path_74756" data-name="Path 74756"
                                              d="M139.188,386.853l.209-6.3c7.352-11.347,7.7-20.187,4.621-23.953-2.583-3.159-14.5-18.282-14.5-18.282l-4.825-6.323c-2.191-2.925-14.134-12.259-17.731-12.9l-8.616-2.12a8.918,8.918,0,0,0-7.918,4.407c-12.341,20.992-6.15,34.118-3.4,38.439,2.94,4.621,15.688,27.025,15.688,27.025v11.108L99.5,410.23h46.352l-4.53-11.689Z"
                                              transform="translate(-68.944 -249.568)" fill="#ee3b83"/>
                                        <g id="Group_9449" data-name="Group 9449"
                                           transform="translate(14.086 73.019)">
                                            <path id="Path_74757" data-name="Path 74757"
                                                  d="M133.021,392.257a57.064,57.064,0,0,0-3.083-13.182,22.318,22.318,0,0,1-1.926-7.7c-.214-4.968,1.681-6.588,2.1-11.9.459-5.824-1.253-11.052-2.1-11.021-1.309.046-.688,12.682-3.322,13.12-1.707.285-3.011-4.83-9.1-14-5.442-8.2-8.208-9.849-9.447-10.5-4.438-2.329-6.257-.734-10.323-2.8a13.775,13.775,0,0,1-6.068-6.3C78.339,348.284,84.336,361,87.031,365.231c2.94,4.621,15.688,27.025,15.688,27.025v11.108s16.254,4.825,32.477,1.977C135.3,404.979,133.021,392.257,133.021,392.257Z"
                                                  transform="translate(-83.033 -327.99)" fill="#fb5d9c"/>
                                            <path id="Path_74758" data-name="Path 74758"
                                                  d="M151.052,477.9c-16.228,2.848-32.477-1.977-32.477-1.977l-3.225,12.269h34.016C149.254,484.933,150.589,479.634,151.052,477.9Z"
                                                  transform="translate(-98.884 -400.546)" fill="#253054"/>
                                        </g>
                                        <g id="Group_9458" data-name="Group 9458">
                                            <path id="Path_74759" data-name="Path 74759"
                                                  d="M127.554,323.74a38.017,38.017,0,0,1,6.817,4.621,34.461,34.461,0,0,1-15.581,2.313Z"
                                                  transform="translate(-86.485 -252.887)" fill="#f5bfba"/>
                                            <g id="Group_9452" data-name="Group 9452" transform="translate(39.935)">
                                                <path id="Path_74760" data-name="Path 74760"
                                                      d="M144.905,286.318c6.935,0,20.58.484,22.888.484s25.344-4.5,25.344-4.5,1.89-10.506,3.363-19.331,2.731-17.441,3.363-24.794l6.884-4.148a228.424,228.424,0,0,1,1.1,26c-.031,7.154,1.473,21.431-3.99,35.718,0,0-31.957,11.174-48.415,11.128a2.129,2.129,0,0,0-2.155,2.176c.112,4.8-3.429,17.895-12.886,7.245C126.318,300.447,137.971,286.318,144.905,286.318Z"
                                                      transform="translate(-133.764 -208.886)" fill="#f5bfba"/>
                                                <g id="Group_9451" data-name="Group 9451"
                                                   transform="translate(51.99)">
                                                    <path id="Path_74761" data-name="Path 74761"
                                                          d="M250.176,198c.443.01,1.243-5.951.52-7.342s-5.1-2.976-6.257-3.419c-1.208-.464-3.088-3.582,1.666-2.2,3.057.887,4.2.6,5.427.963.729.214.713-.3,2.614,2.053s4.5,4.84,5.274,5.926.52,6.323.617,9.961.774,12.071.774,12.071l-6.909.484s-1.32-9.268-5.014-12.82"
                                                          transform="translate(-239.349 -184.683)" fill="#f5bfba"/>
                                                    <path id="Path_74762" data-name="Path 74762"
                                                          d="M266.254,194.84a15.249,15.249,0,0,1-2.863-4.54"
                                                          transform="translate(-249.332 -187.438)" fill="none"
                                                          stroke="#d94c5f" stroke-miterlimit="10" stroke-width="1"/>
                                                    <g id="Group_9450" data-name="Group 9450"
                                                       transform="translate(0 0.518)">
                                                        <path id="Path_74763" data-name="Path 74763"
                                                              d="M247.28,191.509l-3.628-2.665c-1.152-.515-2.257-.917-2.762-1.116-.647-.25-1.493-1.269-1.391-1.941l-.122-.087-3.577.066,1.085,3.317,10.272,7.556A16.34,16.34,0,0,0,247.28,191.509Z"
                                                              transform="translate(-235.8 -185.7)" fill="#2f3d6b"/>
                                                        <path id="Path_74764" data-name="Path 74764"
                                                              d="M245.859,188.844c-1.152-.515-2.257-.917-2.762-1.116-.647-.25-1.493-1.269-1.391-1.941l-.122-.087-.662.01-.622.815,9.34,6.868a7.873,7.873,0,0,0-.158-1.885Z"
                                                              transform="translate(-238.007 -185.7)"
                                                              fill="#415a96"/>
                                                        <path id="Path_74765" data-name="Path 74765"
                                                              d="M237.1,188.62l-.25.2.555,1.7,10.272,7.556c.071-.474.138-1,.183-1.539Z"
                                                              transform="translate(-236.315 -187.132)"
                                                              fill="#253054"/>
                                                        <path id="Path_74766" data-name="Path 74766"
                                                              d="M239.377,185.7l-3.577.066,1.085,3.317S236.641,186.943,239.377,185.7Z"
                                                              transform="translate(-235.8 -185.7)" fill="#f5bfba"/>
                                                    </g>
                                                    <path id="Path_74767" data-name="Path 74767"
                                                          d="M267.353,203.816l-9.146-6.726a16.323,16.323,0,0,1-.117,5.131l9.3,6.843,7.515,5.528A3.559,3.559,0,0,0,277.4,211.3v-.092Z"
                                                          transform="translate(-246.733 -190.768)" fill="#2f3d6b"/>
                                                    <path id="Path_74768" data-name="Path 74768"
                                                          d="M276.235,212.044l1.274-.632c0-.031.01-.066.01-.1v-.092l-10.053-7.388-9.146-6.726a7.845,7.845,0,0,1,.158,1.885Z"
                                                          transform="translate(-246.845 -190.778)" fill="#415a96"/>
                                                    <path id="Path_74769" data-name="Path 74769"
                                                          d="M276.209,217.326,258.283,204.15c-.046.54-.112,1.07-.183,1.539l9.3,6.843,7.516,5.528A3.329,3.329,0,0,0,276.209,217.326Z"
                                                          transform="translate(-246.738 -194.231)" fill="#253054"/>
                                                    <path id="Path_74770" data-name="Path 74770"
                                                          d="M250.97,210.771c-2.048-1.422-4.983-9.385-5.192-11.959s2.262-1.58,3.633,2.4,4.458,3.348,4.9,3.358"
                                                          transform="translate(-240.688 -190.916)" fill="#f5bfba"/>
                                                </g>
                                                <path id="Path_74771" data-name="Path 74771"
                                                      d="M236.274,187.227a3.032,3.032,0,0,1,1.1-1.447l-1.564.031Z"
                                                      transform="translate(-183.815 -185.221)" fill="#d94c5f"/>
                                            </g>
                                            <g id="Group_9455" data-name="Group 9455"
                                               transform="translate(0 11.425)">
                                                <g id="Group_9454" data-name="Group 9454"
                                                   transform="translate(12.375)">
                                                    <path id="Path_74772" data-name="Path 74772"
                                                          d="M125.042,224.474c1.284,6.991,3.5,8.754,5.834,9.34s-1.167,5.253-1.167,5.834,1.753,7.587,1.167,11.673-2.013,4.718-2.41,5.116c-1.788,1.788-13.176,1.926-14.384,2.344-1.08.377-2.543,10.766-3.134,14.634a1.594,1.594,0,0,1-1.213,1.315,34.857,34.857,0,0,1-12.06.678,4.182,4.182,0,0,1-3.541-5.116c1.136-4.774,2.318-11.5,3.292-14.348a29.7,29.7,0,0,0-6.252-5.309c-3.154-1.788-7.668-9.243-6.512-19.54s6.751-17.456,17.044-18.715,13.253-1.253,16.524,1.437C121.806,216.759,124.068,219.185,125.042,224.474Z"
                                                          transform="translate(-82.03 -209.293)" fill="#f5bfba"/>
                                                    <path id="Path_74773" data-name="Path 74773"
                                                          d="M119.894,295.409c-3.877-.7-6.364-1.7-6.823-.876a1.211,1.211,0,0,0,.066.973l-4.382-2.2-3.037,1.768c.566.576.9.963.9.963-.973,2.853-2.155,9.574-3.292,14.348a4.164,4.164,0,0,0,3.48,5.105,31.488,31.488,0,0,0,4.336.255h0a34.443,34.443,0,0,0,15.581-2.313c-4.988,1.406-11.658,1.473-14.934,1.4a2.127,2.127,0,0,1-2.079-2.089c-.025-1.391-.025-3.613.092-6.965a8.85,8.85,0,0,1,3.235-6.756,2.285,2.285,0,0,1,2.96.061,18.2,18.2,0,0,0,5.967,3.556c.448-2.084.907-3.633,1.309-3.77,1.208-.418,12.6-.561,14.384-2.344a4.846,4.846,0,0,0,1.539-1.9C135.638,295.323,128.851,297.019,119.894,295.409Z"
                                                          transform="translate(-91.22 -249.387)" fill="#d6a3a3"/>
                                                    <path id="Path_74774" data-name="Path 74774"
                                                          d="M120.235,221.849c.01-.031.015-.061.025-.092.346-1.192,2.67-9.656.275-12.911-1.661-2.252-7.378-1.85-10.9-1.35a24.733,24.733,0,0,1-5.559.1,18.028,18.028,0,0,0-7.831.881c-8.4,3.154-10.8,7.011-12.356,10.318-9.238,19.642-1.585,29.456,6.731,33.354.851.606,2.909,2.191,3.032,3.521.183,2.028.2,5.773.932,3.475.5-1.574,7.088-5.121,7.088-5.121a5.075,5.075,0,0,0,.81-.25c4.9-2.043,6.293-24.442,15.327-28.9a4.633,4.633,0,0,0,2.42-2.965h0C120.215,221.9,120.225,221.879,120.235,221.849Z"
                                                          transform="translate(-79.674 -207.106)" fill="#0a0909"/>
                                                    <path id="Path_74775" data-name="Path 74775"
                                                          d="M117.786,210.75c.168-.662,15.163,2.369,15.041,3.21-.092.617-8.29-.239-8.438.734-.117.769,4.993,1.7,4.953,3.118-.041,1.5-5.773,2.329-5.686,2.935.1.688,7.434-.662,7.979.825.795,2.165-13.273,9.115-13.574,8.621-.178-.29,4.621-2.813,4.127-4.953-.382-1.651-3.6-1.758-3.669-3.027-.087-1.605,4.988-2.359,5.044-4.127.061-2.028-6.527-3.607-6.328-4.4.173-.693,5.258.209,5.406-.413S117.689,211.142,117.786,210.75Z"
                                                          transform="translate(-98.095 -208.847)" fill="#343434"/>
                                                    <path id="Path_74776" data-name="Path 74776"
                                                          d="M139.907,251.935a7.917,7.917,0,0,0-.453,6.043c.652,1.661-.774,3.511-3.613-2.267S139.907,251.935,139.907,251.935Z"
                                                          transform="translate(-106.887 -228.928)" fill="#2f3d6b"/>
                                                </g>
                                                <path id="Path_74780" data-name="Path 74780"
                                                      d="M77.135,218.5c.015-4.514-4.489-8.6-8.356-9.671-5.3-1.473-12.331,1.9-13.273,8.382a12.832,12.832,0,0,0,4.917,11.607C66.929,233.232,77.11,225.268,77.135,218.5Z"
                                                      transform="translate(-55.392 -207.784)" fill="#0a0909"/>
                                                <path id="Path_74781" data-name="Path 74781"
                                                      d="M108.578,223.932a16.736,16.736,0,0,1-3.1,3.511,25.73,25.73,0,0,1-4.9,3.032c-5.131,2.751-7.8,4.183-11.546,5.014-3.877.861-9.635.795-13.283-1.07-5.365-2.741-1.06-16.162-5.844-6.2-1.06,2.211-5.075,1.855-8.871-.082-3.2-1.63-3.755-6.624-4.148-9.91a9.48,9.48,0,0,0-1.391,3.76A12.832,12.832,0,0,0,60.413,233.6a8.484,8.484,0,0,0,8.086.484c-2.935,13.207,3.414,20.335,10.206,23.52.851.606,2.909,2.191,3.032,3.521.183,2.028.2,5.773.932,3.475.5-1.574,7.087-5.121,7.087-5.121a5.071,5.071,0,0,0,.81-.25c2.96-1.233,4.642-9.89,7.5-17.538,1.931,2.8,2.813,1.3,2.278-.076a7.625,7.625,0,0,1,.194-5.457c1.447-2.629,3.185-4.754,5.365-5.829C108.466,229.057,108.767,226.133,108.578,223.932Z"
                                                      transform="translate(-55.387 -212.562)" fill="#0a0909"/>
                                            </g>
                                            <g id="Group_9456" data-name="Group 9456"
                                               transform="translate(4.974 14.483)">
                                                <path id="Path_74782" data-name="Path 74782"
                                                      d="M65.154,215.448c-.127-.336,1.875-1.89,4.351-2.257,4.249-.627,8.056,2.517,7.9,2.9-.138.336-3.541-1-3.867-.321-.306.632,2.446,2.262,2.094,3.062s-3.444-.061-3.709.647c-.224.6,2,1.34,2.094,2.741.132,1.9-3.694,3.893-4.193,3.383-.336-.341,1.172-1.524.805-2.9-.5-1.911-4.051-2.079-4.03-3.062.02-1.05,4.1-1.732,4.03-2.094-.061-.346-3.745.234-3.908-.362-.158-.566,2.95-1.753,2.823-2.135C69.4,214.612,65.323,215.891,65.154,215.448Z"
                                                      transform="translate(-65.149 -213.108)" fill="#343434"/>
                                            </g>
                                            <path id="Path_74783" data-name="Path 74783"
                                                  d="M133.545,264.29s-2.115-5.258-4.856-5.7c-1.661-.265-5.136,1.33-4.086,6.792s5.992,5.854,8.463,5C135.257,269.62,133.545,264.29,133.545,264.29Z"
                                                  transform="translate(-89.241 -220.921)" fill="#f5bfba"/>
                                            <g id="Group_9457" data-name="Group 9457"
                                               transform="translate(37.589 41.872)">
                                                <path id="Path_74784" data-name="Path 74784"
                                                      d="M129.16,267.162s2.573-1.783,3.735,3.353"
                                                      transform="translate(-129.16 -266.862)" fill="none"
                                                      stroke="#2f3d6b" stroke-miterlimit="10" stroke-width="1"/>
                                                <path id="Path_74785" data-name="Path 74785"
                                                      d="M131.31,271.3a2.014,2.014,0,0,1,1.839-1.707"
                                                      transform="translate(-130.215 -268.2)" fill="none"
                                                      stroke="#2f3d6b" stroke-miterlimit="10" stroke-width="1"/>
                                            </g>
                                            <path id="Path_74786" data-name="Path 74786"
                                                  d="M159.519,361.484a2.132,2.132,0,0,1,2.155-2.176c16.458.046,48.415-11.128,48.415-11.128a58.042,58.042,0,0,0,2.221-7.251,23,23,0,0,1-4.01,5.131c-28,8.585-39.9,10.8-45.139,10.848a10.91,10.91,0,0,0-5.946,1.4c-5.258,3.195-4.448,10.18-7.347,11.2-.8.28-1.88.107-3.388-.953.051.061.1.117.153.178C156.085,379.374,159.631,366.289,159.519,361.484Z"
                                                  transform="translate(-100.066 -261.318)" fill="#d6a3a3"/>
                                            <path id="Path_74787" data-name="Path 74787"
                                                  d="M100.16,338.41S95.8,355.255,97.607,362.7c.994,4.091,12.957,16.758,14.99,26.75"
                                                  transform="translate(-75.88 -260.082)" fill="none"
                                                  stroke="#ed0f68" stroke-miterlimit="10" stroke-width="1"/>
                                        </g>
                                        <path id="Path_74788" data-name="Path 74788"
                                              d="M161.7,488.189l-4.53-11.689c-17.976,5.167-38.6-.581-38.6-.581l-3.225,12.269Z"
                                              transform="translate(-84.797 -327.527)" fill="#2f3d6b"/>
                                    </g>
                                    <path id="Path_74789" data-name="Path 74789"
                                          d="M293.6,224.892V224.8a3.122,3.122,0,0,0-2.492,3.383A3.554,3.554,0,0,0,293.6,224.892Z"
                                          transform="translate(-170.997 -204.359)" fill="#f5bfba"/>
                                    <path id="Path_74790" data-name="Path 74790"
                                          d="M293.367,227.539c-.275.418-.606.678-.744.586s-.025-.5.245-.917.606-.678.744-.586S293.642,227.127,293.367,227.539Z"
                                          transform="translate(-171.717 -205.244)" fill="#d94c5f"/>
                                    <path id="Path_74791" data-name="Path 74791"
                                          d="M81.12,234.694s.856-6.461,7.251-15.2"
                                          transform="translate(-68.009 -201.755)" fill="none" stroke="#fb5d9c"
                                          stroke-miterlimit="10" stroke-width="2"/>
                                    <g id="Group_9460" data-name="Group 9460" transform="translate(13.069 9.373)">
                                        <path id="Path_74792" data-name="Path 74792"
                                              d="M95.8,211.395S94.544,201.005,98,203.451s-2.206,7.944-2.206,7.944,3.414,1.559,6.639-2.079"
                                              transform="translate(-88.167 -203.078)" fill="none" stroke="#fb5d9c"
                                              stroke-miterlimit="10" stroke-width="2"/>
                                        <path id="Path_74793" data-name="Path 74793"
                                              d="M88.615,216.269s-7.307-3.76-7.556-1.636,1.549,5.233,7.684,2.028c0,0,1.045,5.2-2.191,6.537"
                                              transform="translate(-81.036 -208.427)" fill="none" stroke="#fb5d9c"
                                              stroke-miterlimit="10" stroke-width="2"/>
                                    </g>
                                </g>
                                <path id="Path_74794" data-name="Path 74794"
                                      d="M387.3,133.616s4.795-3.093,5.661-1.192-8.112,6.527-8.112,6.527-3.6-8.652-.178-10.114S387.3,133.616,387.3,133.616Z"
                                      transform="translate(-209.619 -91.902)" fill="#ffb8c9"/>
                                <path id="Path_74795" data-name="Path 74795"
                                      d="M422.577,357.061s3.312-3.246,4.311-1.875-5.386,6.522-5.386,6.522-4.285-6.3-1.8-8.02S422.577,357.061,422.577,357.061Z"
                                      transform="translate(-227.147 -202.12)" fill="#ffb8c9"/>
                                <path id="Path_74796" data-name="Path 74796"
                                      d="M67.54,299.844s-.535-3.974.932-3.954S70.205,303,70.205,303s-6.583-.29-6.486-2.9S67.54,299.844,67.54,299.844Z"
                                      transform="translate(-52.926 -173.946)" fill="#ffb8c9"/>
                                <g id="Group_9462" data-name="Group 9462">
                                    <path id="Path_74797" data-name="Path 74797"
                                          d="M66.53,62.084s-.352-5.7,1.732-5.518S69.99,66.833,69.99,66.833s-9.309-1.09-8.912-4.79S66.53,62.084,66.53,62.084Z"
                                          transform="translate(-51.625 -56.562)" fill="#ffb8c9"/>
                                    <path id="Path_74798" data-name="Path 74798"
                                          d="M45.733,73.881s-2.1-3.037-.881-3.633,4.382,5.105,4.382,5.105-5.518,2.507-6.532.321S45.733,73.881,45.733,73.881Z"
                                          transform="translate(-42.537 -63.253)" fill="#ffb8c9"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Understanding your cycle and how to optimize your fertility windows can improve your chances of
                    getting pregnant naturally. In an average 28-day menstrual cycle, ovulation typically occurs
                    about 14 days before the start of the next period. Ovulation varies from person to person, and
                    even cycle to cycle. It’s important to track the cycle so that you can best predict your fertile
                    window.
                </p>
                <h3 class="nbe-detail-title-text">How Fertilligence Helps</h3>
                <p class="nbe-tab-text nbe-mar-b-60">
                    Understand your ovulation cycle and fertile windows so you can better plan and prepare. The
                    Fertilligence app includes expert insights on ovulation and maximizing your fertile windows, and
                    one-on-one coaching helps you understand what next even if your cycle is irregular or
                    unpredictable. Do not forget to mention your pre-existing infertility condition (if diagnosed).
                </p>
                <div class="place-where-fixe-stop"></div>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Partner-Lifestyle">
                <h2 class="nbe-tab-title-text">
                    Partner Lifestyle
                </h2>
                <div class="nbe-btn-container">
                    <button class="nbe-red-btn req-appoint">
                        Book an Appointment
                    </button>
                    <button class="nbe-gray-btn req-report">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.828"
                             viewBox="0 0 16.75 16.828">
                            <g id="arrow-right_2_" data-name="arrow-right(2)" transform="translate(1 1.414)">
                                <line id="Line_81" data-name="Line 81" x1="14" transform="translate(0.75 7)"
                                      fill="none" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_72738" data-name="Path 72738" d="M19,5l-7,7,7,7"
                                      transform="translate(-12 -5)" fill="none" stroke="#787878"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <span class="nbe-mobile-hide">Back to Summary</span>

                    </button>
                </div>
            </div>
            <div class="nbe-items-detail-each" data-details="Trying-Pregnant">
                <h2 class="nbe-tab-title-text">
                    Trying Pregnant
                </h2>
            </div>
        </div>
        <div class="nbe-tab-content" data-link="4">
            <h2 class="nbe-tab-title-text">
                The Next Step - Booking Your First Fertility Coaching Session
            </h2>
            <p class="nbe-tab-text nbe-mar-b-60">
                During your session, your coach will review your results and, together, create a targeted fertility
                plan designed for you. You’ll also get a full month unlimited access to all Fertilligence app
                features.
            </p>
            <h3 class="nbe-tab-title-text-red">
                Here are a few steps to get you up and running on Fertilligence:
            </h3>
            <p class="nbe-tab-text nbe-mar-b-60 left-align-desk">
                <span style="color:#ED0F68">1)</span> Select your package below and request a secure invitation
                (Confirm residency and pre-existing
                medical conditions).
                <br><br>
                <span style="color:#ED0F68">2)</span> Check your inbox for an email from Fertilligence. Click to pay
                and install the app.
                <br><br>
                <span style="color:#ED0F68">3)</span> In the app, complete health & lifestyle background
                questionnaire, then schedule your first coaching session.

            </p>

            <?php include 'packages-content2.php'; ?>
            <h2 class="nbe-tab-title-text text-center">
                Fertilligence coaches are available for same day and next day appointments. Why wait?
            </h2>

        </div>


        <div class="nbe-tab-title-whole">
            <div class="nbe-tab-title active" data-link="1">tabe title 1</div>
            <div class="nbe-tab-title" data-link="2">tabe title 2</div>
            <div class="nbe-tab-title" data-link="3">tabe title 3</div>
            <div class="nbe-tab-title" data-link="4">tabe title 4</div>
        </div><!-- in case they say we want to have next and previous
        <div class="nbe-quiz-footer">
            <button class="next-prev-btn" id="prev" disabled="disabled">previous</button>
            <button class="next-prev-btn" id="next">next</button>
        </div>-->
    </div>
    <script>


        $(document).ready(function () {
            let activeTabBeShown = $('.nbe-tab-title.active').attr('data-link');
            $('.nbe-tab-content[data-link=' + activeTabBeShown + ']').fadeIn();

            $('.nbe-tab-title').on('click', function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
                $('.nbe-tab-title').removeClass('active');
                $(this).addClass('active')
                let activeTabBeShown = $('.nbe-tab-title.active').attr('data-link');
                $('.nbe-tab-content').hide();
                $('.nbe-tab-content[data-link=' + activeTabBeShown + ']').fadeIn();
            });


            // this for next previus buttons
            // $('.next-prev-btn').click(function () {
            //     var id = $(this).attr('id');
            //     var activeTab = $('.nbe-tab-title.active').data('link');
            //     console.log(activeTab);
            //
            //     if (id === "next") {
            //         $('.nbe-tab-title[data-link=' + (activeTab + 1) + ']').click()
            //         $('#prev').prop('disabled', false);
            //     } else {
            //
            //         $('.nbe-tab-title[data-link=' + (activeTab - 1) + ']').click()
            //         if (activeTab <= 2) {
            //             $('#prev').prop('disabled', true);
            //         }
            //     }
            // })
            $('.req-report').click(function () {

                $('.nbe-tab-title[data-link=2]').click();
                gtag('event', 'Report_Request_New_Form', {
                    'event_callback': console.log('done')
                });
            });
            $('.req-appoint').click(function () {

                $('.nbe-tab-title[data-link=4]').click();
                gtag('event', 'Request_An_Appointment', {
                    'event_callback': console.log('done')
                });
            });
            $('.nbe-items-details').click(function () {
                if ($(this).hasClass('disabled') === false) {
                    let thisItem = $(this).data('details');
                    $('.nbe-items-detail-each').hide();
                    $('.nbe-items-detail-each').removeClass('active');
                    $('.nbe-items-detail-each[data-details=' + thisItem + ']').show();
                    $('.nbe-items-detail-each[data-details=' + thisItem + ']').addClass('active');
                    $('.nbe-tab-title[data-link=3]').click()
                }
            })
        })
        $(window).scroll(function () {

            var scrollAmount = $(window).scrollTop();
            var footerTillTop = $('.nbe-items-detail-each.active .place-where-fixe-stop').offset().top;
            var screenHeight = $(window).height();
            var placeToStopFixe = footerTillTop - screenHeight;
            if (scrollAmount >= (placeToStopFixe)) {
                $('.nbe-items-detail-each .nbe-btn-container').addClass('unfixed-it');
            } else {
                $('.nbe-items-detail-each .nbe-btn-container').removeClass('unfixed-it');
            }
        })

    </script>
<?php
get_footer();