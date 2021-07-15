<?php

/**
 * Template Name: NEXMARK Care Qualifier New Version
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
    .qualifier-form {
        margin-top: 45px;
        margin-bottom: 45px;
        /* height: 480px; */
    }

    .qualifier-label {
        font-weight: 700;
        margin: 20px 0;
        padding: 0;
        color: #ed1067;
        font-size: 18px;
        line-height: 20px;
    }

    .qualifier-auto {
        margin: 0 5%;
    }

    .qualifier-form-check {
        position: relative;
        display: block;
        padding-left: 5px;
    }

    input[type=radio] {
        box-sizing: border-box;
        padding: 0 11px;
        margin-right: 10px;
    }

    .qualifier-description {
        line-height: 20px;
    }

    .qualifier-description-each {
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 0px;
        border: 0px;
        outline: 0px;
        background-image: initial;
        background-position: 0px 0px;
        background-size: initial;
        background-repeat: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        font-size: 14px;
        vertical-align: baseline;
        text-size-adjust: 100%;
        color: rgb(89, 93, 100);
        font-family: "Open Sans", "Helvetica Neue", Arial, "Lucida Grande", Tahoma, Verdana, sans-serif;
    }

    .response {

        width: 100%;
        color: rgb(89, 93, 100);
        font-family: "Open Sans", "Helvetica Neue", Arial, "Lucida Grande", Tahoma, Verdana, sans-serif;
        font-size: 18px;
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

    .qualifier-auto.text-center .qualifier-form-check {
        padding-left: 0 !important
    }
</style>

<div id="qualifier-form-new" style="margin: 50px auto;">

    <!--------quiz1------------------>
    <div class="col-lg-12 qualifier-form" id="q1">
        <div class="col-lg-7 qualifier-auto ">
            <p class="qualifier-label">Are you based in the US or Canada?</p>
            <div class=" ">
                <div class="qualifier-form-check">
                    <div class="">
                        <label class="qualifier-form-check-label label">
                            <input id="q1-1" value="Yes" type="radio" data-value="Yes" data-qNumber="1" class="qualifier-form-check-input question" name="optradio1">Yes

                        </label>
                    </div>
                    <div class="">
                        <label class="qualifier-form-check-label label">
                            <input id="q1-2" value="No" type="radio" data-value="No" data-qNumber="1" class="qualifier-form-check-input question" name="optradio1">No
                        </label>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--------quiz2------------------>
    <div class="col-lg-12 qualifier-form " id="q2" style="display:none;">
        <div class="col-lg-7 qualifier-auto ">
            <p class="qualifier-label">Have you or your partner had any of the following?</p>
            <div class="qualifier-description">
                <p class="qualifier-description-each">- Cancer diagnosis, undergoing fertility preservation treatment</p><br>
                <p class="qualifier-description-each">- Chemotherapy / radiation in the past 12 months</p><br>
                <p class="qualifier-description-each">- Sexually transmitted diseases</p><br>
                <p class="qualifier-description-each">- Mental health conditions</p><br>
                <p class="qualifier-description-each">- Fallopian Tube blockage / damage</p><br>
                <p class="qualifier-description-each">- Pelvic adhesions</p><br>
                <p class="qualifier-description-each">- Uterine fibroids</p><br>
                <p class="qualifier-description-each">- Varicocele</p><br>
                <p class="qualifier-description-each">- Menopause</p><br>
            </div>
            <div class="">
                <div class="qualifier-form-check">
                    <div class="">
                        <label class="qualifier-form-check-label label">
                            <input id="hydration1" value="Yes" type="radio" data-value="20" data-qNumber="2" class="qualifier-form-check-input question" name="optradio2">Yes
                        </label>
                    </div>
                    <div class="">
                        <label class="qualifier-form-check-label label">
                            <input id="hydration2" value="No" type="radio" data-value="5" data-qNumber="2" class="qualifier-form-check-input question" name="optradio2">No

                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--------quiz2------------------>
    <div class="col-lg-12  response dash1" id="response1" style="display:none;">
        <p>Thank you very much for your interest. Fertilligence program is currently not available in your area. Our team is working hard to bring our program and packages to customers outside the United States and Canada.</p>


    </div>
    <div class="col-lg-12  response dash1" id="response2" style="display:none;">
        <p>Thank you very much for your interest! Fertilligence program might not be the best fit for your needs at the moment.</p>


    </div>
    <div class="col-lg-12  response dash1" id="response3" style="display:none;">
        <p style="text-align: center;font-size: 2rem;">Thank You!</p>
        <h1 style="text-align: center; "><a href="/care-invite?id=<?= $_GET['id'] ?>" class="moose" style="font-size: 1.3em; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif;">Get Started</a><br></h1>

    </div>

</div>


<script>
	const urlParams = new URLSearchParams(window.location.search);
	const myParam = urlParams.get('id');
	console.log(myParam);
    $('.question').click(function(e) {
        var qNumber = $(this).attr('data-qNumber');
        var qValue = $(this).val();
        if ((qNumber == 1) && (qValue == 'No')) {
            $('#response1').fadeIn();
            $('#q2').hide();
        } else {
            $('#response1').hide();
            $('#q1').hide();
            $('#q2').fadeIn();
        }
        if ((qNumber == 2) && (qValue == 'Yes')) {

            $('#response3').hide();
            $('#response2').fadeIn();
            $('#q1').hide();
        }
        if ((qNumber == 2) && (qValue == 'No')) {
            $('#response3').fadeIn();
            $('#response2').hide();
            $('#q1').hide();
        }
    });
    // var quizform = document.querySelector("#qualifier-form-new")
    // if (quizform) {

    //     var results = [];
    //     $('.qualifier-form').hide();
    //     $('#q14').hide();
    //     $('#q1').fadeIn();


    //     window.checkme = 0;
    //     $('.question').click(function(e) {
    //         window.checkme++;
    //         var questionNumber = parseInt(this.dataset.qnumber);
    //         var questionValue = parseInt(this.dataset.value);
    //         if (questionNumber < 13) {
    //             results[questionNumber - 1] = questionValue;
    //         }



    //         var score = 0;
    //         if (questionNumber == 12) {
    //             for (var p = 0; p < results.length; p++) {
    //                 score = score + results[p];
    //             }
    //             if (score <= 120) {
    //                 $('#resulttTitle1').html('Your Fertilligence™ level: Beginner');
    //                 $('#ResultP1').html('Looks like you have a good start. There are so many more ways you can improve your lifestyle and get personalized support you deserve. See our packages, all including individual and group sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in creating your personalized journey on your path to parenthood.Do not forget to check your Fertilligence™ Profile below.');
    //                 $('#ResultP2').html('(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a well-rounded profile)');
    //             } else if ((score > 120) && (score <= 180)) {
    //                 $('#resulttTitle1').html('Your Fertilligence™ level: Intermediate');
    //                 $('#ResultP1').html('Looks like you are on the right track and already built some healthy lifestyle habits. We invite you to learn about additional ways you can integrate healthy lifestyle choices into your life routines and get personalized support you deserve. See our packages, all including individual and group sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in creating your personalized journey on your path to parenthood.');
    //                 $('#ResultP2').html('(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a well-rounded profile)');

    //             } else if (score > 180) {


    //                 $('#resulttTitle1').html('Your Fertilligence™ level: Advanced');
    //                 $('#ResultP1').html('Seems like you are following quite a few healthy lifestyle practices already! We invite you to fine-tune your approach and get personalized support you deserve. See our packages, all including individual and group sessions, trusted information, and unlimited messaging with our team. We will be happy to assist you in tailoring your personalized journey on your path to parenthood.');
    //                 $('#ResultP2').html('(Pay more attention to adjusting lifestyle factors closest to the center. You would want to ultimately have a well-rounded profile)');
    //             }
    //             $('#q12').hide();
    //             $('#q13').fadeIn();



    //         } else if (questionNumber == 13) {

    //             $('#submitQuestion').click(function() {
    //                 var participantEmail = $('#emailForQuiz').val();
    //                 var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    //                 if (testEmail.test(participantEmail)) {
    //                     console.log(participantEmail);
    //                     $.ajax({
    //                         url: "https://ftgnew.wpengine.com/wp-json/nxm/Subscribe",
    //                         method: "POST",
    //                         data: {
    //                             fname: '-',
    //                             lname: '--',
    //                             email: participantEmail
    //                         },
    //                         success: function(response) {
    //                             console.log(response)
    //                         },
    //                         error: function(response) {
    //                             console.log(response)
    //                         }
    //                     });

    //                     $('#q13').hide();
    //                     var ctx = document.getElementById('myChart').getContext('2d');
    //                     var chart = new Chart(ctx, {
    //                         type: 'radar',

    //                         data: {
    //                             labels: ['Nutration', 'Hydration', 'Exercise', 'Sleep', 'Supplements', 'Stress', 'Mood', 'Partner Connection', 'Environment', 'Weight', 'Ovulation', 'Partner Lifestyle'],

    //                             datasets: [{
    //                                 fontSize: 15,
    //                                 pointStyle: 'circle',
    //                                 backgroundColor: '#ffffff',
    //                                 borderColor: '#007bff',
    //                                 data: results,
    //                                 pointLabelFontSize: 16,
    //                                 scaleFontSize: 16,
    //                                 pointDot: false,
    //                                 showTooltips: false

    //                             }]
    //                         },
    //                         showTooltips: false,
    //                         // Configuration options go here
    //                         options: {
    //                             legend: {
    //                                 fontSize: 15,
    //                                 display: false,
    //                                 itemWidth: 150,
    //                                 position: 'bottom',
    //                                 fullWidth: true,
    //                                 labels: {
    //                                     fontColor: 'rgb(0,0,0)',
    //                                     boxWidth: 10,
    //                                     padding: 20
    //                                 },
    //                             },
    //                             scale: {
    //                                 ticks: {
    //                                     display: false
    //                                 }
    //                             },
    //                             showTooltips: false,

    //                         }
    //                     });
    //                     $('#q14').fadeIn();
    //                 } else {
    //                     $('#emailForQuiz').val('');
    //                     $('#emailForQuiz').focus();
    //                 }


    //             })

    //         } else {
    //             $('#q' + questionNumber).hide();
    //             $('#q' + (questionNumber + 1)).fadeIn();
    //         }
    //         // quiz[questionNumber + 1].classList.remove("d-none");

    //     });
    //     $('.back-button').click(function() {
    //         var questionNumber = parseInt(this.dataset.bnumber);
    //         console.log(questionNumber)
    //         $('#q' + questionNumber).hide();
    //         $('#q' + (questionNumber - 1)).fadeIn();
    //     });


    // }
</script>








<?php
// if (is_page(0)) {
// get_footer('new');
// } else {
get_footer();
// }
// wp_head();
?>