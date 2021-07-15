<!DOCTYPE html>
<html lang="en">
<head>
		<!--PROOF PIXEL--><script src="https://cdn.useproof.com/proof.js?acc=CkcQgX38EvNaoncBE8c80MnhYg63" async></script><!--END PROOF PIXEL-->
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />


    <?php wp_head();?>
</head>
<?php 
	if(is_page(22))
		echo "<body style='background: rgb(242, 242, 242);'>";
	elseif (is_page(30))
	    echo "<body style='background: rgb(242, 242, 242);'>"
	
	
	?>
<header id="header2" class="col-lg-12 align-items-center position-unset background-header" style="background-image: url('<?php bloginfo('template_directory');?>/images/gauss.jpg');background-position:center;min-height: 90px;position: fixed;z-index:1;background-size: cover;padding: 10px">
    <div class="col-lg-10 mx-auto d-flex padding-0" style="min-height: 60px;">
       
		<div id="logo"  class="col-4 padding-0" style="background:url('<?php bloginfo('template_directory');?>/images/Fertilligence-Logo-Full-white.png');background-repeat: no-repeat;background-size: contain; ">
<!--			<a href="http://ftgnew.wpengine.com">-->
<!--                 <img class="logo img-fluid" src="--><?php //bloginfo('template_directory');?><!--/images/Fertilligence-Logo-Full-white.png" style="">-->
<!--            </a>-->
		</div>
        <div class="col d-lg-flex align-items-center pr-0">


            <nav class="navbar navbar-expand-lg navbar-light d-flex pt-0 pr-0 justify-content-end">
                <a onclick="openNav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_id'        => 'top-menu',
                            'container'      => 'ul',
                            'menu_class'     => 'navbar-nav mr-auto mt-2 sidenav',
                            'menu-item'      => 'nav-item',
                            'menu-item-has-children' => 'nav-link'
                        )
                    );
                    ?>
                </div>
            </nav>
        </div>
    </div>
	<div>
        <?php

            if (is_page(9))
            echo "<div class='d-packages' style='height: auto'><h1 class='packages fs-34'>Packages</h1></div>"
        ?>
    </div>
</header>
<div class="display-none" style="height: 90px"></div>



