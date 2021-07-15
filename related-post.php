<?php


get_header();

$ResourcePs = getResourcesWithOutDescription();
$pageContent = getResourcesById($post->ID);
$tagArrays = explode(',', $pageContent[0]->allTags);


// echo '<pre>';
// print_r($pageContent);
// echo '</pre>';
?>


<h4 class="sa-owl-related-title-style">Related Posts</h4>


<div class="owl-carousel owl-theme sa-owl-related">

    <?php

    $i = 0;
    foreach ($ResourcePs as $ResourcePost) {
        $fo = 0;

        foreach ($tagArrays as $ta) {

            if (strpos($ResourcePost->allTags, $ta) > 0) {
                //echo $ResourcePost->allTags.'-->'.strpos($ResourcePost->allTags, $ta).'<br>';

                $fo++;
            }
        }
        // 		echo $fo;

// 		if ($i>10){
// 			break;
// 		}
        $i++;

        $featured_img_url = get_the_post_thumbnail_url($ResourcePost->ID, 'full');
        if (empty($featured_img_url)) {
            $featured_img_url = esc_url(plugins_url('resource-management/images/premium.png'));

        }


        $allTag = [];

        $allTagsInString = $ResourcePost->allTags;
        if (($fo > 0) && (!($ResourcePost->ID == $post->ID)) && (($ResourcePost->type == $pageContent[0]->type))) {

            ?>
            <div class="" data-tags="<?= $allTagsInString ?>" data-type="<?= $ResourcePost->type ?>">
                <div class="item">


                    <div class="sa-blog-each-card">
                        <?php
                        if (empty($ResourcePost->box1)) {
                            ?>
                            <div style="height:252px;overflow:hidden;background:url(<?= $featured_img_url ?>) center no-repeat;background-size:cover;border-radius: 20px;"></div>
                            <div class="mt-3" style="min-height:90px">
                                <p class="sa-first-text"><?= $ResourcePost->post_title ?></p>
                            </div>
                            <?php
                        } else {
                            ?>
                            <a href="<?php echo get_site_url() . '/resources/' . $ResourcePost->post_name ?>">
                                <div style="height:252px;overflow:hidden;background:url(<?= $featured_img_url ?>) center no-repeat;background-size:cover;border-radius: 20px;"></div>

                            </a>
                            <a href="<?php echo get_site_url() . '/resources/' . $ResourcePost->post_name ?>">
                                <div class="mt-3" style="min-height:90px">
                                    <p class="sa-first-text"><?= $ResourcePost->post_title ?></p>
                                </div>
                            </a>
                            <?php
                        }
                        ?>


                        <div class="d-flex mt-3" style="min-height:100px;display:flex;align-items:center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                 viewBox="0 0 20.835 20.667" style="min-width: 30px">
                                <g id="Group_20368" data-name="Group 20368" transform="translate(-155.25 -532.25)">
                                    <path id="Path_89722" data-name="Path 89722"
                                          d="M20.59,13.41l-7.17,7.17a2,2,0,0,1-2.83,0L2,12V2H12l8.59,8.59A2,2,0,0,1,20.59,13.41Z"
                                          transform="translate(154 531)" fill="none" stroke="#c7c7c7"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"/>
                                    <line id="Line_830" data-name="Line 830" x2="0.01" transform="translate(161 538)"
                                          fill="none" stroke="#c7c7c7" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="1.5"/>
                                </g>
                            </svg>
                            <?php
                            $allTagsInStringToArray = explode(',', $allTagsInString);
                            $tt = '';
                            foreach ($allTagsInStringToArray as $k => $at) {
                                if (($k + 1) == count($allTagsInStringToArray)) {
                                    $tt .= '<a href="' . get_home_url() . '/resources/?find=' . $at . '">' . $at . '</a>';
                                } else {
                                    $tt .= '<a href="' . get_home_url() . '/resources/?find=' . $at . '">' . $at . '</a>' . ', ';
                                }

                            }
                            ?>
                            <p class="sa-sec-text ml-3"><?= $tt ?></p>
                        </div>
                        <hr style="color: #EEEEEE">
                        <?php
                        if (empty($ResourcePost->box1)) {
                            ?>
                            <a href="<?php echo get_home_url(); ?>/packages"
                               class="d-flex align-items-center sa-read-blog-div">
                                <h6 class="sa-read-blog m-0">Join Now</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.167" height="14.522"
                                     viewBox="0 0 20.167 14.522">
                                    <g id="Group_20369" data-name="Group 20369" transform="translate(-275.38 -624.892)">
                                        <line id="Line_81" data-name="Line 81" x2="17.54"
                                              transform="translate(276.38 632.153)"
                                              fill="none" stroke="#ed0f68" stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"/>
                                        <path id="Path_72738" data-name="Path 72738" d="M12,5l5.847,5.847L12,16.693"
                                              transform="translate(276.7 621.307)" fill="none" stroke="#ed0f68"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </a>
                            <?php
                        } else {
                            ?>
                            <a href="<?php echo get_home_url(); ?>/resources/<?= $ResourcePost->post_name ?>"
                               class="d-flex align-items-center sa-read-blog-div">
                                <h6 class="sa-read-blog m-0">Read More</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.167" height="14.522"
                                     viewBox="0 0 20.167 14.522">
                                    <g id="Group_20369" data-name="Group 20369" transform="translate(-275.38 -624.892)">
                                        <line id="Line_81" data-name="Line 81" x2="17.54"
                                              transform="translate(276.38 632.153)"
                                              fill="none" stroke="#ed0f68" stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"/>
                                        <path id="Path_72738" data-name="Path 72738" d="M12,5l5.847,5.847L12,16.693"
                                              transform="translate(276.7 621.307)" fill="none" stroke="#ed0f68"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </a>
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>

            <?php
        }
    }
    ?>
</div>



