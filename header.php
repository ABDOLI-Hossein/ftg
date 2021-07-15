<!DOCTYPE html>
<html lang="en">
	
	<head>

		<!--PROOF PIXEL-->
		<!-- 	<script src="https://cdn.useproof.com/proof.js?acc=CkcQgX38EvNaoncBE8c80MnhYg63" async></script> -->
		<!--END PROOF PIXEL-->
		<!-- Global site tag (gtag.js) - Google Ads: 592816925 -->
		<?php
		if ( ! is_user_logged_in() ) {
		?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-592816925"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'AW-592816925');
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119292366-21"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-119292366-21');
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169806216-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-169806216-1');
		</script> 
		<?php
		}	
		?>

		<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta charset="UTF-8">


		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/cropped-newfav-32x32-1.png" sizes="32x32" />
		<link rel="icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/cropped-newfav-32x32-1.png" sizes="192x192" />
		<link rel="apple-touch-icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/cropped-newfav-32x32-1.png" />

		<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="2e8e0603-a205-4b14-a8c1-539a01cf965e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>



		<?php wp_head(); ?>
	</head>

	<body  <?php body_class(); ?>>



		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8P9VX2"
						  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div id="sidenav-overlay"></div>
		<a class="gotop">
			<div>
				<img src="<?php bloginfo('template_directory');?>/images/gotop.svg" alt="" style="transform: rotate(180deg)">
			</div>
		</a>
		<header>
			<div class="col-12 p-0" style="height: 100%">

				<div class="col-12 p-0" style="background-color: #ffffff;">

					<div class="col-12 mx-auto p-0 d-content" style="box-shadow: 0 12px 45px 0 rgba(0, 0, 0, 0.07);">
						<nav class="navbar navbar-expand-lg navbar-light" style="max-width: 1366px;margin: 0 auto">
							<div class="navbar-brand  mr-26 col-9 col-sm-5 col-lg-11 col-xl-5 p-0 p-lg-2 d-flex align-items-center">
								<a href="<?php echo get_home_url(); ?>">
									<img src="<?php bloginfo('template_directory'); ?>/images/Group%207559.png" class="logo-max-100 max-width-50" style="    border: 1px solid #fff!important;">

								</a>
								<p class="m-0">from</p>
								<a href="https://www.nestlehealthscience.com/" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/images/Group%207568.png" class="nestle-width max-width-50 ml-0 ml-lg-2"  style="max-width: 140px;">
								</a>




							</div>
							<a onclick="openNav()" id="collapse-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</a>
							<div class="col-auto collapse navbar-collapse  sidenav2 in" id="navbarNav">
								<div class="d-none mb-4 display-flex-mobile">
									<a class="col-7"  href="<?php echo get_home_url(); ?>">
										<img src="<?php bloginfo('template_directory'); ?>/images/minilogo.png">
									</a>
									<div onclick="closeNav()" class="closebtn2">
										<img src="<?php bloginfo('template_directory'); ?>/images/closered.svg" alt="">
									</div>
								</div>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'top-menu-2',
										'menu_id'        => 'top-menu-2',
										'container'      => 'ul',
										'menu_class'     => 'navbar-nav',

									)
								);
								?>

								<a  data-countLanding="quizTake" href="<?php echo get_home_url(); ?>/quiz/" class="btn p-0 mt-4 mt-sm-0 quiz-button-mobile">
									<div class="button4" style="box-shadow: 0 10px 40px 0 rgba(237, 15, 104, 0.1)">
										<p>Take The Quiz</p>
									</div>
								</a>
							</div>

						</nav>
					</div>
				</div>

			</div>







		</header>
		<div style="max-width: 1366px;margin: 0 auto">


