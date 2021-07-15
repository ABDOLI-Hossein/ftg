<style>
	.height110{
		min-height:110px;
	}
	.newPackageStyle li{
		height:110px;
		font-size:15px!important;
		line-height:normal!important;
/* 		border-bottom:1px solid #C7C7C7!important; */
		
	}
	.packages2-button-style{
		bottom:0!important;
		width: auto!important;
	}
	#carouselpackages .owl-item.active{
		border:none!important;
	}
	#carouselpackages .item{
		padding:20px!important
		
	}
 	.border-rl{
		border-right: 1px solid #C7C7C7!important;
		border-left: 1px solid #C7C7C7!important;
	} 
	.rec-mobile{
		top: 35px!important;
	}    
	.packages-font{
		font-size:22px!important;
		line-height:30px!important;
	}
	#carouselpackages .owl-nav{
		top:45%!important;
	}
	@media only screen and (max-width:425px){
		.rec-mobile{
			top: 90px!important;
		} 
		.border-rl{
			border-right:none!important;
			border-left:none!important;
		}
	}

</style>    



<div class="col-12 mx-auto  p-0" id="section6">

        <div class="d-flex align-items-center shop" style="margin-bottom:4rem">
            <img src="<?php bloginfo('template_directory'); ?>/images/shop.png" alt="">
            <h5 class="pink-color"><?= get_option('nxm_OngoingDiscount') ?></h5>
			
			
        </div>

        <div class="rec-mobile d-none d-md-flex col-md-4" style="top:90px;display: flex;align-items: center;justify-content: center;z-index:1000;margin:0 auto;right: 0;left: 0" id="sarec">
            <!--                         <h3 class="m-0">*Recommended for new members*</h3> -->
            <h3 class="m-0">*Recommended*</h3>
        </div>
        <div class="mt-md-n5" style="margin-bottom: 80px">
            <div class="owl-carousel owl-theme" id="carouselpackages" style="box-shadow: 0 15px 40px rgba(0,0,0,0.1);border-radius: 20px;">
                <div class="item pl-4 pr-4">

                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Intro</h4>
                    </div>
<!-- 					<hr> -->
                    <div>

                        <ul style="list-style:none;padding:0" class="newPackageStyle">
                         
                            
                            <li class="sali" style="border-radius: 15px 15px 0 0;padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
								<b>Unlimited</b> 24/7 messaging with your fertility coach & nutritionist</li>
                            

                            <li class="sali" style="padding-top: 15px!important">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>One month FULL ACCESS</b> to the Fertilligence app and its custom meal plans, recipes, trackers, educational content, supplements store
                            </li>
                            <li class="sali" style="padding-top: 15px!important">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
                                <b>Live and on-demand</b> fertility-boosting cooking, workout, and lifestyle classes, directly in the app*
                            </li>
                            <li class="sali"></li>
                           
                            <li class="sali" style="border-radius: 0 0 15px 15px;border:none!important"></li>
							
                            
                        </ul>
						<div class="mx-auto d-flex justify-content-between packages2-off" style="/*border-top: 1px solid #C7C7C7;border-bottom: 1px solid  #C7C7C7;*/">
                           <div class="col-4 p-0 mx-auto d-flex justify-content-between pt-2">
							   <div>
								   <h6>$<?= get_option('nxm_IntroRegularPrice') ?></h6>
							   </div>
							   <div class="packages2-type">
								   <h4>$<?= get_option('nxm_IntroSalePrice') ?></h4>
							   </div>
							</div>
                        </div>
						
						<a href="care-invite/?id=0" data-countlanding="startNowIntro" class="packages2-button" style="position:absolute;bottom: 3%;left:0;right:0;text-align:center;z-index:999">
							<div class="btn packages2-button-style col-8" style="margin-bottom: -47px;background-color:#ED0F68">
								<p class="button-p m-0">Start Now</p>
							</div>
						</a>

                    </div>

                </div>
                <div class="item  pl-4 pr-4 border-rl">

                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Starter</h4>
                    </div>
<!-- 					<hr> -->
                    <div>

                        <ul style="list-style:none;padding:0" class="newPackageStyle">
                            <li class="sali" style="border-radius: 15px 15px 0 0;padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>30 min 1:1 session</b> with your fertility coach</li>
                            <li class="sali" style="border-bottom: none;padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>Unlimited</b> 24/7 messaging with your fertility coach & nutritionist</li>
                            <li class="sali" style="padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>One month FULL ACCESS</b> to the Fertilligence app and its meal plans, recipes, trackers, educational content, supplements store</li>
                            <li class="sali" style="padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>Live and on-demand</b> fertility-boosting cooking, workout, and lifestyle classes, directly in the app*</li>   
							<li class="sali" style="border-radius: 0 0 15px 15px;border:none!important"></li>
                        </ul>
					 <div class="packages2-off" style="/*border-top: 1px solid #C7C7C7;border-bottom: 1px solid  #C7C7C7;*/">
						<div class="col-4 p-0 mx-auto d-flex justify-content-between pt-2">
							 <div>
								<h6>$<?= get_option('nxm_StarterRegularPrice') ?></h6>
							</div>
							<div class="packages2-type">
								<h4>$<?= get_option('nxm_StarterSalePrice') ?></h4>
							</div>
						</div>
					</div>
						<a href="care-invite/?id=1" data-countlanding="startNowStarter" class="packages2-button" style="position:absolute;bottom: 3%;left:0;right:0;text-align:center;z-index:999">
							<div class="btn packages2-button-style col-8" style="margin-bottom: -47px;background-color:#ED0F68">
								<p class="button-p m-0">Start Now</p>
							</div>
						</a>
                    </div>
					

                </div>
                <div class="item pl-4 pr-4">
                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Care</h4>

                    </div>
<!-- 					<hr> -->
                    <div>
    
                        <ul style="list-style:none;padding:0" class="newPackageStyle">
                            <li class="sali"  style="border-radius: 15px 15px 0 0;padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>2 x 30 min 1:1 sessions</b> with your fertility coach</li>
                            <li class="sali" style="border-bottom: none;padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>15 min 1:1 session</b> with nutritionist</li>
                            <li class="sali" style="padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>Unlimited</b> 24/7 messaging with your fertility coach & nutritionist</li>
                            <li class="sali"  style="padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>One month FULL ACCESS</b> to the Fertilligence app and its meal plans, recipes, trackers, educational content, supplements store</li>
							<li class="sali" style="border-radius: 0 0 15px 15px;border:none!important;padding-top: 15px!important">
								<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg> 
								<b>Live and on-demand</b> fertility-boosting cooking, workout, and lifestyle classes, directly in the app*</li>
                        </ul>
						
						 <div class="packages2-off" style="/*border-top: 1px solid #C7C7C7;border-bottom: 1px solid  #C7C7C7;*/">
                           <div class="col-4 p-0 mx-auto d-flex justify-content-between pt-2">
								 <div>
									<h6>$<?= get_option('nxm_CareRegularPrice') ?></h6>
								</div>
								<div class="packages2-type">
									<h4>$<?= get_option('nxm_CareSalePrice') ?></h4>
								</div>
						   </div>
                        </div>
						
						<a href="care-invite/?id=2" data-countlanding="startNowCare" class="packages2-button" style="position:absolute;bottom: 3%;left:0;right:0;text-align:center;z-index:999">
							<div class="btn packages2-button-style col-8" style="margin-bottom: -47px;background-color:#ED0F68">
								<p class="button-p m-0">Start Now</p>
							</div>
						</a>

                    </div>
                   
                   
                </div>
               

            </div>
            
        </div>


    </div>

		<p class="d-block d-sm-none" style="margin-top: -45px">
			<span class="pink-color">*</span> Includes unlimited on-demand classes, 2 live nutrition classes, 2 live workouts, 2 live lifestyle classes, ability to upgrade at any time (at additional cost)
		</p>
		<div class="col-12 mx-auto d-none d-sm-flex mt-sm-n5">
			<div class="col-4">
				<p style="font-size:15px">
				<span class="pink-color">*</span> Includes unlimited on-demand classes, 2 live nutrition classes, 2 live workouts, 2 live lifestyle classes, ability to upgrade at any time (at additional cost)
				</p>
			</div>
			<div  class="col-4">
				<p style="font-size:15px">
				<span class="pink-color">*</span> Includes unlimited on-demand classes, 2 live nutrition classes, 2 live workouts, 2 live lifestyle classes, ability to upgrade at any time (at additional cost)
			</p>
			</div>
			<div class="col-4">
				<p style="font-size:15px">
				<span class="pink-color">*</span> Includes unlimited on-demand classes, 2 live nutrition classes, 2 live workouts, 2 live lifestyle classes, ability to upgrade at any time (at additional cost)
			</p>
			</div>
			
		</div>


