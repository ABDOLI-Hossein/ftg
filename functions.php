<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}


flush_rewrite_rules( false );
add_theme_support( 'post-thumbnails' );


function load_stylesheets(){

	
	wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');

    wp_register_style('fontawesome',get_template_directory_uri() . '/css/fontawesome.min.css',array(),1,'all');
    wp_enqueue_style('fontswesome');

//
//	 wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
//     wp_enqueue_style('fontawesome');
	
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css',array(),rand(10,99),'all');
    wp_enqueue_style('styles');

     wp_register_style('OwlCarousel-theme',get_template_directory_uri() . '/css/owl.theme.default.min.css',array(),1,'all');
     wp_enqueue_style('OwlCarousel-theme');

     wp_register_style('OwlCarousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
     wp_enqueue_style('OwlCarousel');
	
// 	 wp_register_style('chartjs',get_template_directory_uri() . '/css/Chart.min.css',array(),rand(10,99),'all');
//      wp_enqueue_style('chartjs');

//      wp_register_style('hover',get_template_directory_uri() . '/css/hover.css',array(),rand(10,99),'all');
//      wp_enqueue_style('hover');
	


}
add_action('wp_enqueue_scripts','load_stylesheets');




//load scripts
function addjs()
{

    wp_register_script('jquery',get_template_directory_uri() . '/js/jQuery.js',array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js',array(),1,1,1);
    wp_enqueue_script('bootstrap');

// 	wp_register_script('Chartjs',get_template_directory_uri() . '/js/Chart.min.js',array(),1,1,1);
//     wp_enqueue_script('Chartjs');
	
     wp_register_script('OwlCarousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
     wp_enqueue_script('OwlCarousel');


    wp_register_script('custom',get_template_directory_uri() . '/js/custom.js',array(),rand(10,99),1,1);
    wp_enqueue_script('custom');
	
	


}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

//Register menus
register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu'),
        'top-menu-2' => __('Top Menu 2')
    )
);





add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}


function pixel_facebook_custom_js() {
	echo '<script type="text/javascript">';
	echo '!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?';
	echo 'n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;';
	echo 'n.push=n;n.loaded=!0;n.version="2.0";n.queue=[];t=b.createElement(e);t.async=!0;';
	echo 't.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,';
	echo 'document,"script","https://connect.facebook.net/en_US/fbevents.js");';
	echo '</script>';
	echo '<script type="text/javascript">';
	echo 'fbq("init", "621346502090079", {}, {';
	echo '"agent": "wordpress-5.4.2-2.2.0"';
	echo '});';
	echo '</script><script type="text/javascript">';
	echo '  fbq("track", "PageView", []);';
	echo '</script>';	
	echo '<noscript>';
	echo '<img height="1" width="1" style="display:none" alt="fbpx"';
	echo 'src="https://www.facebook.com/tr?id=621346502090079&ev=PageView&noscript=1" />';
	echo '</noscript>';
	if (!is_user_logged_in()){
	echo '<!-- Hotjar Tracking Code for https://fertilligence.com/ -->';
	echo '<script>';
	echo '(function(h,o,t,j,a,r){';
	echo ' h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};';
	echo '  h._hjSettings={hjid:1973598,hjsv:6};';
	echo ' a=o.getElementsByTagName("head")[0];';
	echo ' r=o.createElement("script");r.async=1;';
	echo ' r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;';
	echo 'a.appendChild(r);';
	echo '})(window,document,"https://static.hotjar.com/c/hotjar-",".js?sv=");';
	echo '</script>';
		}
	
// 	
	
// 	echo '<!-- Global site tag (gtag.js) - Google Analytics -->';
// 	echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119292366-21"></script>';
// 	echo '<script>';
// 	echo '  window.dataLayer = window.dataLayer || [];';
// 	echo '  function gtag(){dataLayer.push(arguments);}';
// 	echo '  gtag("js", new Date());';

// 	echo '  gtag("config", "UA-119292366-21");';
// 	echo '</script>';

}

add_action( 'wp_head', 'pixel_facebook_custom_js' );




// deleteRow(7);