<?php
/**
 * Template Name: 404
 * Template Post Type: post, page
 */

get_header();

?>
<div class="col-lg-12">
    <div class="col-lg-12 d-md-flex" style="min-height: 600px;background: url('<?php bloginfo('template_directory');?>/images/404bg.png') no-repeat">
        <div class="text-center center-block mt-sm-5 mt-sm-0" id="404">
            <img src="<?php bloginfo('template_directory');?>/images/404.png" alt="" class="max-width-100 mt-5 mt-sm-0">
            <h1 class="title mt-5"><span style="font-size:33px">Oops!</span><span style="font-family: Poppins-Regular"> Something went wrong. We are on it!</span></h1>
            <a href="https://fertilligence.com" class="mb-5 mb-sm-0 mt-4 mt-sm-0 btn p-0 mt-sm-0 quiz-button-mobile">
                <div class="button4 mt-0 mt-sm-5" style="box-shadow: 0 10px 40px 0 rgba(237, 15, 104, 0.13);width:226px"><p>Back To Home</p></div>
            </a>
        </div>
        <div class="col-12 col-sm-11 col-md-4 d-flex justify-content-end" style="align-items: flex-end">
            <img src="<?php bloginfo('template_directory');?>/images/404-2.png" alt="" class="baby404 img-fluid mt-5 mt-sm-4">
        </div>
    </div>
</div>






<?php

get_footer();

?>
