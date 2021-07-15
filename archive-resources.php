<?php

/**
 * Template Name: Resource Archieve
 * Template Post Type: post, page
 */

get_header();

$ResourcePosts=getResourcesWithOutDescription();

$requestedTag=$_GET['find'];
// echo '<pre>';
// print_r($ResourcePosts);
// echo '</pre>';
?>
<script>
	// 	window.typeTag=0;
	// 	window.healthTag=0;
	// 	window.lifestyleTag=0;
	// 	window.conditionTag=0;
	window.typeTagArray=[];
	window.healthTagArray=[];
	window.liftstyleTagArray=[];
	window.conditionTagArray=[];

	window.totalTagsSeries0=[];
	window.totalTagsSeries1=[];
	window.totalTagsSeries2=[];
	window.totalTagsSeries3=[];
	window.postsToBeShown=postsToBeShown;
	window.calculatingPost=[];
	window.lastPage=1;
	window.currentpage=0;
	window.startCount=0;
	window.requestedTag=<?php echo "'".$requestedTag."'" ?>;
	var resourcePosts = <?php echo json_encode($ResourcePosts); ?>;
	var postsToBeShown=[];
	var siteUrl=window.location.origin;
	$.each(resourcePosts, function (i, elem) {
		var searchContent = elem['allTags']+' '+elem['post_title'];
		searchContent = searchContent.toLowerCase();
		postsToBeShown.push({
			"id":elem['ID'],
			"tags":elem['allTags'],
			"type":elem['type'],
			"search" :searchContent,
			"html":makeHtml(elem['allTags'],elem['type'],elem['thumbnail'],elem['post_title'],elem['post_name'],elem['box1'])
		});
	});

	// 	console.log(postsToBeShown);
	function set_cookie(cookiename, cookievalue, hours) {
		var date = new Date();
		date.setTime(date.getTime() + Number(hours) * 3600 * 1000);
		document.cookie = cookiename + "=" + cookievalue + "; path=/;expires = " + date.toGMTString();

	}	
	function getCookie(name) {
		const value = `; ${document.cookie}`;
		const parts = value.split(`; ${name}=`);
		if (parts.length === 2) return parts.pop().split(';').shift();
	}	
	function saveAllFilters(){
		var allFilters=$('.allFilters input:checked');
		var allFiltersArray=[];
		console.log(allFilters)	;
		$.each(allFilters, function (i, elem) {
			allFiltersArray.push(elem.id);

		});	
		var inputsTobeSave=[{'search':$('#searchBox').val(),'filters':allFiltersArray}];
		var json_str = JSON.stringify(inputsTobeSave);
		set_cookie('filters', json_str, 1); 
	}
	function loadAllFilters(){
		var json_str =getCookie('filters');

		if (json_str){


			var filters = JSON.parse(json_str);
			console.log(filters);
			if (filters[0]['search'].length>0){
				$('#searchBox').val(filters[0]['search']);
			}
			if (filters[0]['filters'].length>0){
				$(".typeTag").prop('checked', false);   
				$(".typeTagAlll").prop('checked', false);   
				$(".healthTag").prop('checked', false);
				$(".liftstyleTag").prop('checked', false);
				$(".conditionTag").prop('checked', false);

				$.each(filters[0]['filters'], function (i, elem) {
					console.log(elem);
					$("#"+elem).prop('checked', true);

				});	

				var allFilters1=$('.allFilters1 input:checked');
				var allFilters2=$('.allFilters2 input:checked');
				var allFilters3=$('.allFilters3 input:checked');

				if (allFilters1.length>0){
					$('#collapse1').addClass('show');
					$('#heading1 .fa').removeClass('fa-angle-right');
					$('#heading1 .fa').addClass('fa-angle-down');

				}else{
					$('#collapse1').removeClass('show');
					$('#heading1 .fa').addClass('fa-angle-right');
					$('#heading1 .fa').removeClass('fa-angle-down');
				}
				if (allFilters2.length>0){
					$('#collapse2').addClass('show');
					$('#heading2 .fa').removeClass('fa-angle-right');
					$('#heading2 .fa').addClass('fa-angle-down');

				}else{
					$('#collapse2').removeClass('show');
					$('#heading2 .fa').addClass('fa-angle-right');
					$('#heading2 .fa').removeClass('fa-angle-down');
				}
				if (allFilters3.length>0){
					$('#collapse3').addClass('show');
					$('#heading3 .fa').removeClass('fa-angle-right');
					$('#heading3 .fa').addClass('fa-angle-down');

				}else{
					$('#collapse3').removeClass('show');
					$('#heading3 .fa').addClass('fa-angle-right');
					$('#heading3 .fa').removeClass('fa-angle-down');
				}
				checkWhichFilterIsChecked();
				appendToScreen('first');	

			}
		}else{
			$('.typeTagAlll').prop('checked', true);
			$('.typeTag').prop('checked', false);

			checkWhichFilterIsChecked();
			appendToScreen('first');
		} 


	}
	function makeHtml(a,b,c,d,e,f){
		//a -> allTags 
		//b -> type 
		//c -> thumbnail 
		//d -> post_title 
		//e -> post_name 
		//f -> box1
		//
		var allTagsReplaced=a;
		//allTagsReplaced=allTagsReplaced.replace(/\,/g, ', ');
		var allTagsReplacedArray = allTagsReplaced.split(",");
		allTagsReplaced='';
		var arrayCountThis=allTagsReplacedArray.length;
		$.each( allTagsReplacedArray, function( key, value ) {
			if (!((key+1)==arrayCountThis)){
				allTagsReplaced+='<a href="'+window.location.origin+'/resources/?find='+value+'"  style="color: #C7C7C7;">'+value+'</a>, ';
			}else{
				allTagsReplaced+='<a href="'+window.location.origin+'/resources/?find='+value+'"  style="color: #C7C7C7;">'+value+'</a>';
			}

		});


		//allTagsReplaced.substring(0,allTagsReplaced.length - 3);
		var html='';
		html=' <div class="" data-tags="'+a+'" data-type="'+b+'">';
		html+='<div class="sa-blog-each-card">';
		if ((f==null) && (b=='Article')){
			html+='<div style="height:252px;overflow:hidden;background:url(https://fertilligence.com/wp-content/plugins/resource-management/images/premium.png) center no-repeat;background-size:cover;border-radius: 20px;">';
			html+='</div>';
			html+='<div class="mt-3" style="min-height:90px">';
			html+='<p class="sa-first-text">'+d+'</p>';
			html+='</div>';
		}else if (!(f==null) || !(b=='Article')){
			html+='<a href="'+siteUrl+'/resources/'+e+'"><div style="height:252px;overflow:hidden;background:url('+c+') center no-repeat;background-size:cover;border-radius: 20px;">';
			html+='</div></a>';
			html+='<a href="'+siteUrl+'/resources/'+e+'"><div class="mt-3" style="min-height:90px">';
			html+='<p class="sa-first-text">'+d+'</p>';
			html+='</div></a>';
		}


		html+='<div class="d-flex mt-3" style="min-height:100px;display:flex;align-items:center">';
		if (a.length>0){
			html+='<svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20.835 20.667" style="min-width: 30px">';
			html+='<g id="Group_20368" data-name="Group 20368" transform="translate(-155.25 -532.25)">';
			html+='<path id="Path_89722" data-name="Path 89722" d="M20.59,13.41l-7.17,7.17a2,2,0,0,1-2.83,0L2,12V2H12l8.59,8.59A2,2,0,0,1,20.59,13.41Z"   transform="translate(154 531)" fill="none" stroke="#c7c7c7" stroke-linecap="round"  stroke-linejoin="round" stroke-width="1.5"/> <line id="Line_830" data-name="Line 830" x2="0.01" transform="translate(161 538)"  fill="none" stroke="#c7c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </g> </svg>';	
		}

		html+='<p class="sa-sec-text ml-3">'+allTagsReplaced+'</p>';
		html+='</div>';
		html+='<hr style="color: #EEEEEE">';

		if (b=='Article'){
			if (f==null){
				html+='<a href="'+siteUrl+'/packages/'+'" class="d-flex align-items-center sa-read-blog-div">';
				html+='<h6 class="sa-read-blog m-0">Join Now</h6>';					
			}else{
				html+='<a href="'+siteUrl+'/resources/'+e+'" class="d-flex align-items-center sa-read-blog-div">';
				html+='<h6 class="sa-read-blog m-0">Read More</h6>';				
			}

		}else{
			html+='<a href="'+siteUrl+'/resources/'+e+'" class="d-flex align-items-center sa-read-blog-div" style="width:175px!important">';
			html+='<h6 class="sa-read-blog m-0">See The Video</h6>';
		}

		html+='<svg xmlns="http://www.w3.org/2000/svg" width="20.167" height="14.522"  viewBox="0 0 20.167 14.522"> <g id="Group_20369" data-name="Group 20369" transform="translate(-275.38 -624.892)"> <line id="Line_81" data-name="Line 81" x2="17.54" transform="translate(276.38 632.153)"  fill="none" stroke="#ed0f68" stroke-linecap="round" stroke-linejoin="round"  stroke-width="2"/> <path id="Path_72738" data-name="Path 72738" d="M12,5l5.847,5.847L12,16.693"  transform="translate(276.7 621.307)" fill="none" stroke="#ed0f68"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/> </g> 	</svg>';
		html+='</a>';
		html+='</div>';
		html+='</div>';	
		return (html)
	}

	function makeBox(){
		$('.tagsSpan').html("");
		var newResults=[];
		var totalFound=0;
		var calculatingPost=[];
		var calculatingPostBackup=[];
		calculatingPost=window.postsToBeShown;
		calculatingPostBackup=window.postsToBeShown;
		var searchString=$('#searchBox').val();
		searchString = searchString.toLowerCase();

		if (searchString!=''){
			newResults=[];
			$.each(calculatingPost, function (i, elem) {
				var found=0;


				if (elem['search'].includes(searchString)) {
					found++;

				}


				if (found>0){
					totalFound++;
					newResults.push(elem);
				}
			});	
			calculatingPost=newResults;
		}else{
			calculatingPostBackup=window.postsToBeShown;
		}

		if (window.totalTagsSeries0.length>0){
			newResults=[];
			$.each(calculatingPost, function (i, elem) {
				var found=0;
				$.each(window.totalTagsSeries0, function (j, elem2) {
					//console.log(elem['type'].includes(elem2))
					if (elem['type'].includes(elem2)) {
						found++;

					}
				});

				if (found>0){
					totalFound++;
					newResults.push(elem);
				}
			});	
			calculatingPost=newResults;
		}

		if (window.totalTagsSeries1.length>0){
			newResults=[];
			$.each(calculatingPost, function (i, elem) {
				var found=0;
				$.each(window.totalTagsSeries1, function (j, elem2) {
					//console.log(elem['tags'].includes(elem2))
					if (elem['tags'].includes(elem2)) {
						found++;

					}
				});

				if (found>0){
					totalFound++;
					newResults.push(elem);
				}
			});	
			calculatingPost=newResults;
		}

		if (window.totalTagsSeries2.length>0){
			newResults=[];
			$.each(calculatingPost, function (i, elem) {
				var found=0;
				$.each(window.totalTagsSeries2, function (j, elem2) {
					//console.log(elem['tags'].includes(elem2))
					if (elem['tags'].includes(elem2)) {
						found++;

					}
				});

				if (found>0){
					totalFound++;
					newResults.push(elem);
				}
			});	
			calculatingPost=newResults;
		}

		if (window.totalTagsSeries3.length>0){
			newResults=[];
			$.each(calculatingPost, function (i, elem) {
				var found=0;
				$.each(window.totalTagsSeries3, function (j, elem2) {
					//console.log(elem['tags'].includes(elem2))
					if (elem['tags'].includes(elem2)) {
						found++;

					}
				});

				if (found>0){
					totalFound++;
					newResults.push(elem);
				}
			});	
			calculatingPost=newResults;

		}

		window.calculatingPost=calculatingPost;

		// 		$('#sa-wrapper-card').empty();
		// 		for (var i=0;i<calculatingPost.length;i++){
		// 			//append
		// 			$('#sa-wrapper-card').append(calculatingPost[i].html);
		// 		}
		$('.tagsSpan').html(calculatingPost.length+" Posts Available.");
		saveAllFilters();

	} 

	function appendToScreen(action){
		var countPosts=window.calculatingPost.length;
		window.lastPage=Math.ceil(countPosts/6)

		if (action=='next'){
			if (window.startCount+6>countPosts){
				window.startCount=window.calculatingPost.length;
				window.currentpage=window.lastPage;
			}else{
				window.currentpage=window.currentpage+1;
				window.startCount=window.startCount+6;
			}

		}else if(action=='back'){
			if (window.startCount-6<0){
				window.currentpage=1;
				window.startCount=0;
			}else{
				window.startCount=window.startCount-6;
				window.currentpage=window.currentpage-1;

			}

		}else if(action=='first'){
			window.currentpage=1;
			window.startCount=0;

		}else if(action=='last'){
			window.currentpage=window.lastPage;

			window.startCount=window.calculatingPost.length-(window.calculatingPost.length-((window.lastPage-1)*6));

		}else if(action==''){
			window.currentpage=1;
			window.startCount=0;
		}
		var endCount=0;
		if (window.startCount+6>window.calculatingPost.length){
			endCount=window.calculatingPost.length
		}else{
			endCount=window.startCount+6;
		}
		$('#sa-wrapper-card').empty();

		for (var i=window.startCount;i<endCount;i++){
			$('#sa-wrapper-card').append(window.calculatingPost[i].html);
		}
		$('.currentPage').html(window.currentpage);
		$('.lastPage').html(window.lastPage);



	}
	function checkWhichFilterIsChecked(){
		window.totalTags=[];
		window.totalTagsSeries0=[];
		window.totalTagsSeries1=[];
		window.totalTagsSeries2=[];
		window.totalTagsSeries3=[];
		window.typeTagArray = $('input[name="typeTag"]:checked');
		window.healthTagArray = $('input[name="healthTag"]:checked');
		window.liftstyleTagArray = $('input[name="liftstyleTag"]:checked');
		window.conditionTagArray = $('input[name="conditionTag"]:checked');



		$.each(window.typeTagArray, function (i, elem) {
			window.totalTagsSeries0.push(elem.value)	;
		});		
		$.each(window.healthTagArray, function (i, elem) {
			window.totalTagsSeries1.push(elem.value)	;
		});
		$.each(window.liftstyleTagArray, function (i, elem) {
			window.totalTagsSeries2.push(elem.value)	;
		});
		$.each(window.conditionTagArray, function (i, elem) {
			window.totalTagsSeries3.push(elem.value)	;
		});


		makeBox();

	}



	$(document).ready(function(){
		$(".typeTag").prop('checked', false);   
		$(".healthTag").prop('checked', false);
		$(".liftstyleTag").prop('checked', false);
		$(".conditionTag").prop('checked', false);

		if (!(window.requestedTag=='')){
			$('#typeTagAll').prop('checked', false);
			$('#typeTag1').trigger('click');
			$(".sa-checkBox-style ").each(function() {
				var currentTag=$(this).val();
				if (window.requestedTag==currentTag){
					$(".typeTag").prop('checked', false);

					$(this).prop('checked', true);

					$('html,body').animate({

						scrollTop: $("#sa-wrapper-card").offset().top},'slow');
				}else{
					$('.firstPanelToShow').addClass('show');
					$('#typeTag1').trigger('click');

				}
			});
			var allFilters1=$('.allFilters1 input:checked');
			var allFilters2=$('.allFilters2 input:checked');
			var allFilters3=$('.allFilters3 input:checked');
			if (allFilters1.length>0){
				$('#collapse1').addClass('show');
				$('#heading1 .fa').removeClass('fa-angle-right');
				$('#heading1 .fa').addClass('fa-angle-down');

			}else{
				$('#collapse1').removeClass('show');
				$('#heading1 .fa').addClass('fa-angle-right');
				$('#heading1 .fa').removeClass('fa-angle-down');
			}
			if (allFilters2.length>0){
				$('#collapse2').addClass('show');
				$('#heading2 .fa').removeClass('fa-angle-right');
				$('#heading2 .fa').addClass('fa-angle-down');

			}else{
				$('#collapse2').removeClass('show');
				$('#heading2 .fa').addClass('fa-angle-right');
				$('#heading2 .fa').removeClass('fa-angle-down');
			}
			if (allFilters3.length>0){
				$('#collapse3').addClass('show');
				$('#heading3 .fa').removeClass('fa-angle-right');
				$('#heading3 .fa').addClass('fa-angle-down');

			}else{
				$('#collapse3').removeClass('show');
				$('#heading3 .fa').addClass('fa-angle-right');
				$('#heading3 .fa').removeClass('fa-angle-down');
			}

		}else{
			$('.firstPanelToShow').addClass('show');
			$('#typeTagAll').prop('checked', true);
			loadAllFilters();
		}


		checkWhichFilterIsChecked();
		appendToScreen('first');


		$('#pagination1').addClass('sa-pagination-selected');

		$('.sa-each-pagination-style').on('click',function(){
			var nextStep=$(this).attr('data-page');
			nextStep=nextStep-1;

			var end=(nextStep*6)+6;
			if (end>postsToBeShown.length){
				end=postsToBeShown.length;
			}
			$('#sa-wrapper-card').empty();
			for (var i=nextStep*6;i<end;i++){
				//console.log(postsToBeShown[i]['html']);
				$('#sa-wrapper-card').append(postsToBeShown[i].html);
			}
			$('.sa-each-pagination-style').removeClass('sa-pagination-selected');
			$(this).addClass('sa-pagination-selected');

		})

		$('.typeTag').on('click',function(){
			$(".typeTag").prop('checked', false);
			$('#typeTagAll').prop('checked', false);
			$(this).prop('checked', true);
			checkWhichFilterIsChecked();
			appendToScreen('first');

		}); 
		$('#typeTagAll').on('click',function(){
			$(this).prop('checked', true);
			$(".typeTag").prop('checked', false);

			checkWhichFilterIsChecked();
			appendToScreen('first');

		});


		$('.healthTag').on('click',function(){

			checkWhichFilterIsChecked();
			appendToScreen('first');
		});

		$('.liftstyleTag').on('click',function(){

			checkWhichFilterIsChecked();
			appendToScreen('first');
		});

		$('.conditionTag').on('click',function(){

			checkWhichFilterIsChecked();
			appendToScreen('first');
		});		

		$('#searchBox').on('keyup', function() {
			checkWhichFilterIsChecked();
			appendToScreen('first');
		});



		$('.firstButton').on('click',function(){

			appendToScreen('first');

		});			
		$('.backButton').on('click',function(){

			appendToScreen('back');

		});	
		$('.nextButton').on('click',function(){

			appendToScreen('next');

		});		
		$('.lastButton').on('click',function(){

			appendToScreen('last');

		});			

		$(".sa-each-pagination-style").click(function(){
			$('html,body').animate({
				scrollTop: $("#sa-wrapper-card").offset().top},
								   'slow');
		});
		// 		$("#pageNumber").on('keyup', function() {
		// 			window.currentpage=$(this).val();
		// 			var countme=window.calculatingPost.length;
		// 			window.startCount=window.currentpage*6;
		// 			$('#sa-wrapper-card').empty();

		// 			for (var i=window.startCount;i<window.startCount+6;i++){
		// 				$('#sa-wrapper-card').append(window.calculatingPost[i].html);
		// 			}
		// 			$('.currentPage').html(window.currentpage);
		// 			$('.lastPage').html(window.lastPage);
		// 		})


	});







</script>
<style>
	.sa-Filter-button{
		line-height:unset!important
	}
</style>



<!-- <div class="col-10 mx-auto sa-pagination-row p-0">



<div  class="sa-each-pagination-style firstButton"><i class="fa fa-angle-double-left"></i></div>
<div  class="sa-each-pagination-style sa-pagination-selected backButton" ><i class="fa fa-angle-left"></i></div>
<div  style="margin:0 13px">
<span class='currentPage sa-first-text'></span><span class='sa-first-text'> of </span> <span class='lastPage sa-first-text'></span>
</div>
<div  class="sa-each-pagination-style nextButton"><i class="fa fa-angle-right"></i></div>
<div class="sa-each-pagination-style lastButton"><i class="fa fa-angle-double-right"></i></div>

</div> -->


<!--   <div class="col-12 col-sm-10 mx-auto mt-5 mt-sm-0 d-none d-sm-block" style="padding: 0 33px"><span id="tagsSpan" class="sa-sec-text tagsSpan"></span></div> -->

<div class="col-12 col-lg-10 mx-auto p-0" style="margin-top:80px">
	<h1 class="title text-center blue-color">Resources</h1>
	<p class="title-p text-center col-12 col-lg-10 mx-auto" style="color:#000!important;padding: 0 25px!important;">Access to tens of free fertility resources. <a href="/packages" style="color:#ED0F68!important">Join now</a> to benefit from hundreds of premium content only available to the members in the Fertiligene platform. <a href="/packages" style="color:#ED0F68!important">Learn more</a>.</p>
</div>


<div id="sa-blog-wrapper" class="col-12 col-lg-10 mx-auto d-flex p-0">

	<div id="sa-wrapper-card" class="col-12 col-lg-8  d-flex flex-wrap justify-content-between">






		<?php

		$i=0;
		// 		foreach ($ResourcePosts as $ResourcePost){
		// 			if ($i>5){
		// 				break;
		// 			}
		// 			$i++;
		// 			$featured_img_url = get_the_post_thumbnail_url($ResourcePost->ID,'full');
		// 			$allTag=[];
		// 			$allTagsInString='';
		// 			$healthTags=explode(',',$ResourcePost->health_tag);
		// 			$lifestyleTags=explode(',',$ResourcePost->lifestyle_tag);
		// 			$conditionTags=explode(',',$ResourcePost->condition_tag);
		// 			foreach($healthTags as $healthTag){
		// 				if (!empty($healthTag)){
		// 					$allTag[]=$healthTag;
		// 					$allTagsInString.=$healthTag.',';
		// 				}

		// 			}
		// 			foreach($lifestyleTags as $lifestyleTag){
		// 				if (!empty($lifestyleTag)){
		// 					$allTag[]=$lifestyleTag;
		// 					$allTagsInString.=$lifestyleTag.',';
		// 				}

		// 			}
		// 			foreach($conditionTags as $conditionTag){
		// 				if (!empty($conditionTag)){
		// 					$allTag[]=$conditionTag;
		// 					$allTagsInString.=$conditionTag.',';
		// 				}

		// 			}
		// 			$allTagsInString = rtrim($allTagsInString, ",");
		?>
		<!-- 		<div class="" data-tags="<?=$allTagsInString?>" data-type="<?=$ResourcePost->type?>">
<div class="sa-blog-each-card">
<div style="height:252px;overflow:hidden;background:url(<?=$featured_img_url?>) center no-repeat;background-size:cover;border-radius: 20px;">

</div>
<div class="mt-3" style="min-height:90px">
<p class="sa-first-text"><?=$ResourcePost->post_title?></p>
</div>
<div class="d-flex mt-3" style="min-height:100px;display:flex;align-items:center">
<svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20.835 20.667">
<g id="Group_20368" data-name="Group 20368" transform="translate(-155.25 -532.25)">
<path id="Path_89722" data-name="Path 89722"
d="M20.59,13.41l-7.17,7.17a2,2,0,0,1-2.83,0L2,12V2H12l8.59,8.59A2,2,0,0,1,20.59,13.41Z"
transform="translate(154 531)" fill="none" stroke="#c7c7c7" stroke-linecap="round"
stroke-linejoin="round" stroke-width="1.5"/>
<line id="Line_830" data-name="Line 830" x2="0.01" transform="translate(161 538)"
fill="none" stroke="#c7c7c7" stroke-linecap="round" stroke-linejoin="round"
stroke-width="1.5"/>
</g>
</svg>
<p class="sa-sec-text ml-3"><?=$allTagsInString?></p>
</div>
<hr style="color: #EEEEEE">
<a href="<?php echo get_home_url(); ?>/resources/<?=$ResourcePost->post_name?>" class="d-flex align-items-center sa-read-blog-div">
<h6 class="sa-read-blog m-0">Read More</h6>
<svg xmlns="http://www.w3.org/2000/svg" width="20.167" height="14.522"
viewBox="0 0 20.167 14.522">
<g id="Group_20369" data-name="Group 20369" transform="translate(-275.38 -624.892)">
<line id="Line_81" data-name="Line 81" x2="17.54" transform="translate(276.38 632.153)"
fill="none" stroke="#ed0f68" stroke-linecap="round" stroke-linejoin="round"
stroke-width="2"/>
<path id="Path_72738" data-name="Path 72738" d="M12,5l5.847,5.847L12,16.693"
transform="translate(276.7 621.307)" fill="none" stroke="#ed0f68"
stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
</g>
</svg>
</a>
</div>

</div>
-->
		<?php
	//		}
		?>






	</div>
	<?php include "sidebar.php" ?>
</div>
<div class="col-10 mx-auto sa-pagination-row p-0">
	<div  class="sa-each-pagination-style firstButton"><i class="fa fa-angle-double-left"></i></div>
	<div  class="sa-each-pagination-style sa-pagination-selected backButton" ><i class="fa fa-angle-left"></i></div>
	<div style="margin:0 10px">
		<span class='currentPage sa-first-text'></span><span class='sa-first-text'> of </span>  <span class='lastPage sa-first-text'></span>
	</div>
	<div  class="sa-each-pagination-style nextButton"><i class="fa fa-angle-right"></i></div>
	<div class="sa-each-pagination-style lastButton"><i class="fa fa-angle-double-right"></i></div>
</div>

<!-- <input id="pageNumber" type="text" name="test" /> -->





<?php

	get_footer();

?>