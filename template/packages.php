<?php

/**
 * Template Name: packages
 * Template Post Type: post, page
 */
get_header();
?>
    <style>
        table#nbe-table {
            margin-top: 130px;
        }

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
        }

        .nbe-tab-list li {
            list-style: none;
            position: relative;
            padding-left: 18px;
            margin-bottom: 21px;
        }

        .nbe-tab-list li:before {
            content: "";
            width: 10px;
            height: 10px;
            position: absolute;
            left: 0;
            top: 10px;
            background: #ED0F68;
            border-radius: 100%;
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
            padding-top: 30px;
        }

        .nbe-tab-title {
            cursor: pointer;
        }

        .nbe-tab-content {
            display: none;
            color: white;
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
            flex-direction: column;
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

        .green-rep {
            color: #8BC34A;
        }

        .yellow-rep {
            color: #EDC951;
        }

        .red-rep {
            color: #E53935;
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

        .nbe-score-items li svg {
            margin-left: 13px;
            position: absolute;
            right: -10px;
            top: 9px;
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

        .green-items li::before {
            background: #8BC34A;
        }

        .yellow-items li::before {
            background: #EDC951;
        }

        .red-items li::before {
            background: #E53935;
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
            margin: 0;
        }

        .nbe-items-detail-each .nbe-btn-container {
            padding-top: 10px !important;
        }

        .nbe-tab-content-whole .packages2-button-style {
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
        }

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
				font-family: Poppins-SemiBold;
                text-align: center;
                font-size: 27px;
                margin-bottom: 25px;
            }

            .nbe-gray-btn svg {
                display: none;
            }

            .nbe-tab-text {
                text-align: center;
            }

/*             #section12 {
                display: block !important;
            } */

/*             #section6 {
                display: none !important;
            } */

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
            .nbe-gray-btn span {
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

/*             #section12 {
                display: none !important;
            }

            #section6 {
                display: block !important;
            } */

            .nbe-items-detail-each .nbe-red-btn {

                margin: 0 5px;

                border-radius: 0 50px 50px 0;
            }

            .nbe-items-detail-each .nbe-gray-btn {
                width: 60px;
                border-radius: 50px 0px 0px 50px;
            }
        }
    </style>
    <div class="nbe-tab-content-whole" data-link="4" style="display: block;">
<!--         <h2 class="nbe-tab-title-text">
           Booking Your First Fertility Coaching Session
        </h2> -->
<!-- 		<h2 class="nbe-tab-title-text text-center" style="font-size:27px;line-height:41px;font-family: Poppins-SemiBold;">
          Packages
        </h2> -->
<!--         <p class="nbe-tab-text nbe-mar-b-60">
            <span style="font-weight:700">Review available packages to chat with a fertility coach.</span><br>During your session, your coach will review your results and, together, create a targeted fertility plan designed for you. You’ll also get a full month unlimited access to all Fertilligence app features.
        </p> -->
		<h2 class="nbe-tab-title-text text-center mt-5" style="color:#ed0f68!important">
           		No matter where you are on your pregnancy journey, we can help
        </h2>
		<h4 class="nbe-tab-title-text">
                Ready to get started?
        </h4>
        <p class="nbe-tab-text nbe-mar-b-60 left-align-desk">
            <span style="color:#ED0F68">1)</span> <b>Choose the fertility coaching plan</b> that’s right for you and <b>request a secure invitation now</b>.
            <br><br>
            <span style="color:#ED0F68">2)</span> <b>Check your inbox </b>for an email from Fertilligence.<b> Pay
            and install the app</b>.
            <br><br>
            <span style="color:#ED0F68">3)</span> <b>In the app</b>, complete health &amp; lifestyle background
            questionnaire, then <b>schedule your first coaching session</b>. (You can book coaching sessions anytime, including same day and next day appointments and can add more sessions later.)

        </p>
		
        <?php include 'packages-content2.php' ?>
		
        <h2 class="nbe-tab-title-text text-center mt-5">
            Don’t wait another cycle. Get started with your first coaching session or live chat TODAY.
        </h2>
    </div>

<?php
get_footer();
?>