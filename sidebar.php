<?php
$liftstyleTags=[];
$medicalTags=[];
$liftstyleTags=getAllActiveLifeStyleTags();
$medicalTags= getAllActiveConditionTags();

?>
<div class="col-12 col-lg-4 allFilters" style="padding-top: 28px">
	<div class="position-relative" style="width: 100%">
		<input id="searchBox" class="form-control"  type="text" placeholder="Search" style="height: 52px;border:1px solid #EEEEEE!important;">
		<div class="sa-search-box">
			<svg xmlns="http://www.w3.org/2000/svg" width="17.977" height="17.811" viewBox="0 0 17.977 17.811">
				<g id="Group_20372" data-name="Group 20372" transform="translate(-1192.25 -172.25)">
					<circle id="Ellipse_1024" data-name="Ellipse 1024" cx="7" cy="7" r="7"
							transform="translate(1193 173)" fill="none" stroke="#fff" stroke-linecap="round"
							stroke-linejoin="round" stroke-width="1.5"/>
					<line id="Line_822" data-name="Line 822" x1="4.033" y1="4.033"
						  transform="translate(1205.133 184.967)" fill="none" stroke="#fff"
						  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
				</g>
			</svg>
		</div>

	</div>
	<!-- 	<div class="col-12 col-sm-10 mx-auto mt-4 text-center mt-sm-0 d-block d-sm-none" style="padding: 0 33px"><span id="tagsSpan" class="sa-sec-text tagsSpan"></span></div> -->
	<div class="sa-blog-type-post mt-4">
		<div class="sa-type-hidden-mobile">
			<p class="sa-text-same-style">Resource Type</p>
			<i class="fa fa-plus sa-type-hidden-mobile-icon d-block d-md-none"></i>
		</div>
		<span id="tagsSpan" class="sa-sec-text tagsSpan" style="color:darkgray!important"></span><br>
		<svg xmlns="http://www.w3.org/2000/svg" width="293" height="3" viewBox="0 0 293 3">
			<g id="Group_20371" data-name="Group 20371" transform="translate(-916.5 -302)">
				<g id="Group_20370" data-name="Group 20370">
					<line id="Line_826" data-name="Line 826" x2="293" transform="translate(916.5 303.5)"
						  fill="none" stroke="#ed0f68" stroke-width="1" opacity="0.3"/>
					<line id="Line_827" data-name="Line 827" x2="48" transform="translate(916.5 303.5)"
						  fill="none" stroke="#ed0f68" stroke-width="3"/>
				</g>
			</g>
		</svg>
		<div class="sa-checkBox-wrapper mt-2">
			<input class="sa-checkBox-style typeTagAlll" name="" type="checkbox" id="typeTagAll" value="All" >
			<label class="sa-label-check" for="typeTagAll">All</label>
		</div>

		<div class="sa-checkBox-wrapper">
			<input class="sa-checkBox-style typeTag" name="typeTag" type="checkbox" id="typeTag1" value="Article">
			<label class="sa-label-check" for="typeTag1">Articles</label>
		</div>
		<div class="sa-checkBox-wrapper">
			<input class="sa-checkBox-style typeTag" name="typeTag" type="checkbox" id="typeTag2" value="Webinar">
			<label class="sa-label-check" for="typeTag2">Webinars</label>
		</div>
		<div class="sa-checkBox-wrapper">
			<input class="sa-checkBox-style typeTag" name="typeTag" type="checkbox" id="typeTag3" value="Class_Session">
			<label class="sa-label-check" for="typeTag3">Class Demos </label>
		</div>
	</div>
	<div class="sa-tags-blog mt-4">
		<div class="sa-type-hidden-mobile">
			<p class="sa-text-same-style">Narrow Down</p>
			<i class="fa fa-plus sa-type-hidden-mobile-icon d-block d-md-none"></i>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" width="293" height="3" viewBox="0 0 293 3">
			<g id="Group_20371" data-name="Group 20371" transform="translate(-916.5 -302)">
				<g id="Group_20370" data-name="Group 20370">
					<line id="Line_826" data-name="Line 826" x2="293" transform="translate(916.5 303.5)"
						  fill="none" stroke="#ed0f68" stroke-width="1" opacity="0.3"/>
					<line id="Line_827" data-name="Line 827" x2="48" transform="translate(916.5 303.5)"
						  fill="none" stroke="#ed0f68" stroke-width="3"/>
				</g>
			</g>
		</svg>

		<div class="accordion" id="accordion-s" role="tablist" aria-multiselectable="true">
			<div class="mb-40 mx-auto align-items-center">
				<!-- tag 1 -->
				<div class="sa-tag-header faq-panel" role="tab" id="heading1">
					<a data-toggle="collapse" data-parent="#accordion-s" href="#collapse1" aria-expanded="true"
					   aria-controls="collapse1">
						<h6 class="d-flex align-items-center justify-content-between">
							Women’s and Men’s Health
							<div class="img-circle-item-faq">
								<i class="fa fa-angle-down"></i>
							</div>
						</h6>
					</a>
				</div>
				<div id="collapse1" class="sa-collapse collapse faq-panel-content firstPanelToShow" role="tabpanel"
					 aria-labelledby="heading1"
					 data-parent="#accordion-s">
					<div class="allFilters1">
						<div class="sa-checkBox-wrapper">
							<input class="sa-checkBox-style healthTag" name="healthTag" type="checkbox" id="healthTag1" value="Women’s Reproductive Health">
							<label class="sa-label-check " for="healthTag1">Women’s Reproductive Health</label>
						</div>
						<div class="sa-checkBox-wrapper">
							<input class="sa-checkBox-style healthTag" name="healthTag" type="checkbox" id="healthTag2" value="Men’s Reproductive Health">
							<label class="sa-label-check" for="healthTag2">Men’s Reproductive Health</label>
						</div>

					</div>
				</div>
				<!-- tag 2 -->
				<div class="sa-tag-header faq-panel" role="tab" id="heading2">
					<a data-toggle="collapse" data-parent="#accordion-s" href="#collapse2" aria-expanded="true"
					   aria-controls="collapse1">
						<h6 class="d-flex align-items-center justify-content-between">
							Category
							<div class="img-circle-item-faq">
								<i class="fa fa-angle-right"></i>
							</div>
						</h6>
					</a>
				</div>

				<div id="collapse2" class="sa-collapse collapse faq-panel-content" role="tabpanel"
					 aria-labelledby="heading2"
					 data-parent="#accordion-s">
					<div class="allFilters2">
						<?php
						foreach($liftstyleTags as $index=> $t){ ?>
						<div class="sa-checkBox-wrapper">
							<input class="sa-checkBox-style liftstyleTag" name="liftstyleTag" type="checkbox" id="liftstyleTag<?=$index+1?>" value="<?=$t?>">
							<label class="sa-label-check" for="liftstyleTag<?=$index+1?>"><?=$t?></label>
						</div>
						<?php } ?>

					</div>
				</div>
				<!-- tag 3--->
				<div class="sa-tag-header faq-panel" role="tab" id="heading3">
					<a data-toggle="collapse" data-parent="#accordion-s" href="#collapse3" aria-expanded="true"
					   aria-controls="collapse1">
						<h6 class="d-flex align-items-center justify-content-between">
							Medical Conditions
							<div class="img-circle-item-faq">
								<i class="fa fa-angle-right"></i>
							</div>
						</h6>
					</a>
				</div>
				<div id="collapse3" class="sa-collapse collapse faq-panel-content" role="tabpanel"
					 aria-labelledby="heading3"
					 data-parent="#accordion-s">
					<div class="allFilters3">
						<?php
						foreach($medicalTags as $index=> $m){
						?>
						<div class="sa-checkBox-wrapper">
							<input class="sa-checkBox-style conditionTag" name="conditionTag" type="checkbox" id="conditionTag<?=$index+1?>" value="<?=$m?>">
							<label class="sa-label-check" for="conditionTag<?=$index+1?>"><?=$m?></label>
						</div>
						<?php } ?>

					</div>
				</div>

			</div>

		</div>

		<div style="height: 60px">

		</div>
		<div class="saButtonRow d-flex justify-content-between">
			<!--             <button class="sa-Filter-button">Filter</button> -->
			<button class="sa-Filter-button">Clear Filters</button>

		</div>
	</div>
</div>


<script>
	$(".collapse").on('show.bs.collapse', function () {
		$(this).prev(".sa-tag-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");

	}).on('hide.bs.collapse', function () {
		$(this).prev(".sa-tag-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
	});
	$(".sa-Filter-button").click(function () {
		$(".sa-tags-blog").find('input[type="checkbox"]:checked').prop('checked', false);
		$('html,body').animate({
			scrollTop: $("header").offset().top},
							   'slow');




		$('.typeTagAlll').prop('checked', true);
		$('.typeTag').prop('checked', false);

		checkWhichFilterIsChecked();
		appendToScreen('first');


	});



	$(".sa-search-box").click(function(){
		$('html,body').animate({
			scrollTop: $("#sa-wrapper-card").offset().top},
							   'slow');
	})

	$(".sa-type-hidden-mobile-icon").click(function(){
		$(this).parent().parent().toggleClass("sa-blog-type-post-click");

		$('html,body').animate({
			scrollTop: $(this).parent().parent().offset().top},
							   'slow');


		if($(this).hasClass("fa-plus")){
			$(this).removeClass("fa-plus").addClass("fa-minus");
		}else{
			$(this).removeClass("fa-minus").addClass("fa-plus");
		}
	})

	// 	$(this).removeClass("fa-plus").addClass("fa-minus");









</script>