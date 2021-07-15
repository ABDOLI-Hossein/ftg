    <div class="col-12 d-none mx-auto display-packages-button p-0" id="section6">

        <div class="d-flex align-items-center shop" style="margin-bottom:4rem">
            <img src="<?php bloginfo('template_directory'); ?>/images/shop.png" alt="">
            <h5 class="pink-color"><?= get_option('nxm_OngoingDiscount') ?></h5>
        </div>

        <div class="rec-mobile d-none" style="top:100px;display: flex;align-items: center;justify-content: center;z-index:1000" id="sarec">
            <!--                         <h3 class="m-0">*Recommended for new members*</h3> -->
            <h3 class="m-0">Recommended</h3>
        </div>
        <div style="margin-bottom: 80px">
            <div class="owl-carousel owl-theme" id="carouselpackages" style="box-shadow: 0 15px 40px rgba(0,0,0,0.1);border-radius: 20px;">
                <div class="item pl-4 pr-4">

                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Intro</h4>
                    </div>
                    <div>

                        <ul style="list-style:none;padding:0">
                         
                            
                            <li class="sali" style="border-radius: 15px"><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li class="mt-3 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>

                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>Included</b> Access to Supplements and Test Kits
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Nutrition Classes
                            </li>
                            <!-- <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Lifestyle Modification Classes
                            </li> -->
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li style="border-bottom: none">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Fitness Classes</li>
                        </ul>

                    </div>
                    <div class="col-6 mx-auto d-flex justify-content-between packages2-off" style="position: absolute;bottom: 30px;left: 0;right: 0;">
                            <div>
                                <h6>$<?= get_option('nxm_IntroRegularPrice') ?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?= get_option('nxm_IntroSalePrice') ?></h4>
                            </div>
                        </div>

                </div>
                <div class="item  pl-4 pr-4">

                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Starter</h4>
                    </div>
                    <div>

                        <ul style="list-style:none;padding:0">
                            <li class="sali" style="border-radius: 15px 15px 0 0;"><b>1 x 30</b> min Live 1:1 Sessions with Your Fertility Coach</li>
                            <li class="sali" style="border-bottom: none"><span class="pink-color">Bring your partner along</span></li>
                            <li class="sali" style="border-radius: 0 0 15px 15px;"><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li class="mt-3 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>Included</b> Access to Supplements and Test Kits</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Nutrition Classes</li>
                            <!-- <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Lifestyle Modification Classes
                            </li> -->
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li style="border-bottom: none">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Fitness Classes</li>
                        </ul>

                    </div>
                    <div class="col-6 mx-auto d-flex justify-content-between packages2-off" style="position: absolute;bottom: 30px;left: 0;right: 0;">
                            <div>
                                <h6>$<?= get_option('nxm_StarterRegularPrice') ?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?= get_option('nxm_StarterSalePrice') ?></h4>
                            </div>
                        </div>

                </div>
                <div class="item pl-4 pr-4">
                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Care</h4>

                    </div>
                    <div>
    
                        <ul style="list-style:none;padding:0">
                            <li class="sali"  style="border-radius: 15px 15px 0 0;"><b>2 x 30 min</b> Live 1:1 Sessions with Your Fertility Coach</li>
                            <li class="sali" style="border-bottom: none"><span class="pink-color">Bring your partner along</span></li>
                            <li class="sali"><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li class="sali" style="border-radius: 0 0 15px 15px;"><b>1 x 15 min</b> Live 1:1 Sessions with a Nutritionist</li>
                            <li class="mt-3 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>

                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>Included</b> Access to Supplements and Test Kits</li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#94daec" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Nutrition Classes</li>
                            <li><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li style="border-bottom: none"><svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Fitness Classes</li>
                        </ul>

                    </div>
                    <div class="col-6 mx-auto d-flex justify-content-between packages2-off" style="position: absolute;bottom: 30px;left: 0;right: 0;">
                            <div>
                                <h6>$<?= get_option('nxm_CareRegularPrice') ?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?= get_option('nxm_CareSalePrice') ?></h4>
                            </div>
                        </div>
                    <!-- <a href="care-qualifier/" class="packages2-button">
                        <div class="btn packages2-button-style" style="margin-bottom: -25px">
                            <p class="button-p m-0">Join Now</p>
                        </div>
                    </a> -->
                </div>
                <!-- <div class="item">
                    <div class="packages2-type">
                        <h4 class="packages-font" style="text-align: left;">Care +</h4>
                    </div>
                    <div>
                        <div class="col-9 mx-auto d-flex justify-content-between packages2-off">
                            <div>
                                <h6>$<?php //echo get_option('nxm_CarePlusRegularPrice') 
                                        ?></h6>
                            </div>
                            <div class="packages2-type">
                                <h4>$<?php //echo get_option('nxm_CarePlusSalePrice') ?></h4>
                            </div>
                        </div>
                        <ul style="list-style:none;padding:0">
                            <li><b>2 x 45 min</b> Live 1:1 Sessions with Your Fertility Coach</li>
                            <li style="border-bottom: none"><span class="pink-color">Bring your partner along</span></li>
                            <li><b>Unlimited</b> 24/7 Messaging with Fertility Coaches & Nutritionists</li>
                            <li><b>1 x 15 min</b> Live 1:1 Sessions with a Nutritionist</li>
                            <li class="mt-5 text-center font-weight-bold"><span class="pink-color">Fertiligence App Features for the Packages</span></li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>Unlimited</b> Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>Included</b> Access to Supplements and Test Kits</li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Nutrition Classes</li>
                            <li> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>2</b> Live Monthly Lifestyle Classes</li>
                            <li style="border-bottom: none"> <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.547 15.964a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zm-1.085-3.953l4.797-4.798A.999.999 0 1 0 9.845 5.8L6.472 9.172 4.759 7.435A.999.999 0 1 0 3.335 8.84l3.127 3.172z" fill="#1098d6" fill-rule="evenodd"></path>
                                </svg>
                                <b>4</b> Live Monthly Fitness Classes</li>




                        </ul>
                    </div>

                </div> -->

            </div>
            <a href="care-invite/?id=0" class="packages2-button" style="position:absolute;bottom: 16%;left:0;right:0;text-align:center;z-index:999">
                <div class="btn packages2-button-style" style="margin-bottom: -47px;background-color:#ED0F68">
                    <p class="button-p m-0">Start Now</p>
                </div>
            </a>
        </div>


    </div>
    <div class="col-12 mx-auto p-0 display-none" id="section12">

        <table id="nbe-table" class="table table-bordered">
            <thead>
                <tr>
                    <th class=" text-left p-2">
                        <img class="table-img-d-none" src="<?php bloginfo('template_directory'); ?>/images/table-icon.svg" alt="" class="m-2">
                        <span class="pink-color"><?= get_option('nxm_OngoingDiscount') ?></span>
                    </th>
                    <th>Intro</th>

                    <th style="position: relative">
                        <div class="care">
                            <!--                                     <h6 class="fs-11 lh-14">*Recommended for new<br class="d-block d-lg-none"> members*</h6> -->
                            <h6 class="fs-11 lh-14">Recommended</h6>
                        </div>
                        Starter
                    </th>
                    <th>Care</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Live 1:1 Sessions with Your Fertility Coach<br>
                        <span class="pink-color">Bring your partner along</span>
                    </td>
                    <td>-------</td>
                    <td>1 x 30 min</td>
                    <td>2 x 30 min</td>
                    <!-- <td>2 x 45 min</td> -->
                </tr>
                <tr>
                    <td>24/7 Messaging with Fertility Coaches & Nutritionists</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <td>Live 1:1 Sessions with a Nutritionist
                    </td>
                    <td>-------</td>
                    <td>-------</td>
                    <td>1 x 15 min</td>
                    <!-- <td>1 x 15 min</td> -->
                </tr>
                <tr>
                    <td> Price (includes one month access to Fertilligence app)</td>
                    <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?= get_option('nxm_IntroRegularPrice') ?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?= get_option('nxm_IntroSalePrice') ?></span></td>
                    <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?= get_option('nxm_StarterRegularPrice') ?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?= get_option('nxm_StarterSalePrice') ?></span></td>
                    <td class="blue-color"><span class="table-price">$<span style="font-size:20px;font-weight: normal"><?= get_option('nxm_CareRegularPrice') ?></span></span>&nbsp&nbsp<span style="font-size:17px">$</span><span style="font-size:20px;font-weight: bold"><?= get_option('nxm_CareSalePrice') ?></span></td>

                </tr>                
                <tr>
                    <td></td>
                    <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=0"><b class="awesome tablet-package-11">Start Now&nbsp&nbsp</b></a></td>
                    <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=1"><b class="awesome tablet-package-11">Start Now&nbsp&nbsp</b></a></td>
                    <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=2"><b class="awesome tablet-package-11">Start Now&nbsp&nbsp</b></a></td>
                    <!-- <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=3"><b class="awesome">Start Now&nbsp&nbsp</b></a></td> -->
                </tr>
                <tr>
                    <td><b>Fertiligence App Features for the Packages</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Access to On-demand Classes, Meal Plans, Recipes, Trackers, Educational Content</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <td>Access to Supplements and Test Kits</td>
                    <td>Included</td>
                    <td>Included</td>
                    <td>Included</td>
                </tr>
                <tr>
                    <td>Live Monthly Nutrition Classes</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Live Monthly Lifestyle Classes</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Live Monthly Fitness Classes</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <!-- <td>4</td> -->
                </tr>

                <tr>
                    <td></td>
                    <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=0"><b class="awesome tablet-package-11">Start Now&nbsp&nbsp</b></a></td>
                    <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=1"><b class="awesome tablet-package-11">Start Now&nbsp&nbsp</b></a></td>
                    <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=2"><b class="awesome tablet-package-11">Start Now&nbsp&nbsp</b></a></td>
                    <!-- <td><a class="table-hover white-color hvr-hang" href="care-invite/?id=3"><b class="awesome">Start Now&nbsp&nbsp</b></a></td> -->
                </tr>


            </tbody>
        </table>
    </div>