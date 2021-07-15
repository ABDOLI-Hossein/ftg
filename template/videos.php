<?php

/**
 * Template Name: videos
 * Template Post Type: post, page
 */

get_header();

?>
<div class="col-lg-12" id="videos">
    <h1 class="text-center  fs-27 title blue-color">Videos</h1>
	<div class="col-10 mx-auto text-center">
<h6 style="color:#000;font-size:17px;line-height:35px" class="mt-4">In response to Covid 19 we have started a series of free webinars with experts in reproductive health.</h6>
<p style="color:#000;font-size:17px;line-height:35px">You can find the recordings of the past sessions here.</p>


		
	</div>
    <div class="col-lg-10 mx-auto d-md-flex padding-0 mt-15" style="margin-top: 65px;">
        <div class="col-12 col-sm-4 padding-0 mb-30">
            <div class="embed-responsive embed-responsive-16by9 video-item">
                <video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/weight.mp4" controls preload="none"></video>
            </div>
            <div style="background-image: url('<?php bloginfo('template_directory'); ?>/images/poster1.png');" class="video-poster">
                <span class="center-block d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
                </span>
            </div>
        </div>
        <div class="col-12 col-sm-4 padding-0 mb-30">
            <div class="embed-responsive embed-responsive-16by9 video-item">
                <video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/strategies.mp4" controls preload="none"></video>
            </div>
            <div id="b" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/poster2.png');" class="video-poster">
                <span class="center-block d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
                </span>
            </div>
        </div>
        <div class="col-12 col-sm-4 padding-0 mb-30">
            <div class="embed-responsive embed-responsive-16by9 video-item">
                <video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/male.mp4" controls preload="none"></video>
            </div>
            <div style="background-image: url('<?php bloginfo('template_directory'); ?>/images/poster3.png');" class="video-poster">
                <span class="center-block d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
                </span>
            </div>
        </div>
    </div>
    <div class="col-lg-10 mx-auto mt-5 d-md-flex padding-0 mt-30">
        <div class="col-12 col-sm-4 padding-0 mb-30">
            <div class="embed-responsive embed-responsive-16by9 video-item">
                <video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/ovulation.mp4" controls preload="none"></video>
            </div>
            <div style="background-image: url('<?php bloginfo('template_directory'); ?>/images/poster4.png');" class="video-poster">
                <span class="center-block d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
                </span>
            </div>
        </div>
        <div class="col-12 col-sm-4 padding-0 mb-30">
            <div class="embed-responsive embed-responsive-16by9 video-item">
                <video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/reach.mp4" controls preload="none"></video>
            </div>
            <div style="background-image: url('<?php bloginfo('template_directory'); ?>/images/poster5.png');" class="video-poster">
                <span class="center-block d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
                </span>
            </div>
        </div>
        <div class="col-12 col-sm-4 padding-0 mb-30">
            <div class="embed-responsive embed-responsive-16by9 video-item">
                <video class="embed-responsive-item" src="<?php bloginfo('template_directory'); ?>/videos/struggling.mp4" controls  preload="none"></video>
            </div>
            <div style="background-image: url('<?php bloginfo('template_directory'); ?>/images/poster6.png');" class="video-poster">
                <span class="center-block d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/play-button.png" class="center-block" style="width: 35px;height: 35px">
                </span>
            </div>
        </div>
    </div>
	<a href="<?php echo get_home_url(); ?>/quiz/">
		    <button type="button" class="btn button3  center-block mt-5 advisory" style="margin-bottom: 55px;background-color: #1098D6;box-shadow: 0 8px 35px rgba(148,218,236,0.4);">
		<p>
			Take The Quiz
		</p>
	</button>
	</a>

</div>
<?php

get_footer();

?>