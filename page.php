<?php
/**
 * Template Name: for healthcare providers
 * Template Post Type: post, page
 */

    get_header();
if($_SERVER[REQUEST_URI] === "/care-invite/?id=1"){
	$requested_package = 1;
	?>
<div class="container">
   <script type="text/javascript" src="https://form.jotform.com/jsform/201045487142146"></script>
</div>
<?php
}elseif($_SERVER[REQUEST_URI] === "/care-invite/?id=2"){
	$requested_package = 2;
		?>
<div class="container">
   <script type="text/javascript" src="https://form.jotform.com/jsform/201045604107138"></script>
</div>
<?php
}elseif($_SERVER[REQUEST_URI] === "/care-invite/?id=3"){
	$requested_package = 3;
		?>
<div class="container">
      <script type="text/javascript" src="https://form.jotform.com/jsform/201045466188153"></script>
</div>
<?php
}elseif($_SERVER[REQUEST_URI] === "/care-invite/?id=0"){
	$requested_package = 0;
		?>
<div class="container">
      <script type="text/javascript" src="https://form.jotform.com/jsform/202995883754170"></script>
</div>
<?php
}else{
	
?>


<div class="container">
    <?php the_content(); ?>
</div>


<?php

}
    get_footer();

?>
<script>
	var detectPackage = <?= $requested_package ?>;
	console.log(detectPackage);
	if(window.location.href === "https://fertilligence.com/healthcare-providers/"  ){
		setInterval(function(){
			if (!(document.getElementById('200016014586141')===null)){

				document.getElementById('200016014586141').contentWindow.document.getElementsByTagName('form')[0].style.backgroundColor="white"
			}
			},30);
	}


	if(window.location.href === "https://fertilligence.com/care-invite/?id=" + detectPackage){

		var element = $(".container");
		var lastHeight = $(".container").css('height');
		var isScrolled=0;
		function checkForChanges()
		{

			if (element.css('height') != lastHeight)
			{
				console.log('scroll to top');
				lastHeight = element.css('height'); 
				$('html,body').animate({
					scrollTop: $("header").offset().top},
									   'slow');
				isScrolled=1;

			}
			if (isScrolled===0) {
				if(detectPackage==1){
					document.getElementById('201045487142146').contentWindow.document.getElementsByTagName('form')[0].style.backgroundColor="white";
				}else if(detectPackage==2){
				document.getElementById('201045604107138').contentWindow.document.getElementsByTagName('form')[0].style.backgroundColor="white";
				}else if(detectPackage==3){
				document.getElementById('201045466188153').contentWindow.document.getElementsByTagName('form')[0].style.backgroundColor="white";
				}else if(detectPackage==3){
				document.getElementById('202995883754170').contentWindow.document.getElementsByTagName('form')[0].style.backgroundColor="white";
				}
			}		


		}
		var careInviteInterval=setInterval(checkForChanges, 500);
	};


</script>
	
	
<style>
.nf-field-label label {
    font-weight: 700;
    margin: 0;
    padding: 0;
    color: #ed1067;
}
	
</style>