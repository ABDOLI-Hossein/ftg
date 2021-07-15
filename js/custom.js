if ($(window).width() <= 800) {
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 100) {
			$(".gotop").removeClass("d-none");
		} else {
			$(".gotop").addClass("d-none");
		}
	});
}



if ($(window).width() <= 800) {
	$('img.center-block.img-fer.w-45').each(function(){
		var whiteImge = $(this).data('imghover');
		
		var newSrc = "https://fertilligence.com/wp-content/themes/FTG/images/"+ whiteImge;
		$(this).attr('src', newSrc);
	})

	$('.whySection a.read').click(function(){

		if($(this).siblings('img').hasClass('blue-bg')){
			$(this).parents('.home .whySection').removeClass('blue-bg-svg');
			$(this).siblings('img, svg').removeClass('blue-bg');
		}else{
			$('img').removeClass('blue-bg');
			$('.whySection').removeClass('blue-bg-svg');
			$(this).parents('.home .whySection').addClass('blue-bg-svg');
			$(this).siblings('img, svg').addClass('blue-bg');
		}
	});
	$('.closebtn').click(function(){
		$('img').removeClass('blue-bg');
		$('.whySection').removeClass('blue-bg-svg');
	})
}






$(".gotop").click(function() {

    $('html,body').animate({
            scrollTop: $("header").offset().top},
        'fast');
});

$(".gotop").hover(function () {
    $(".gotop div").css("background-color", "#ED0F68");
    $(".gotop div img")[0].setAttribute("src",url+"wp-content/themes/FTG/images/gotoph.svg")
});
$(".gotop").mouseout(function() {
    $(".gotop div").css("background-color", "white");
    $(".gotop div img")[0].setAttribute("src",url+"wp-content/themes/FTG/images/gotop.svg")

});







 if ($(window).width() > 414) {
	$(".read").click(function() {
		$('html,body').animate({
				scrollTop: $(this).offset().top -50},
			'slow');
	});
 }

	
// $(".read").click(function() {

// //     $('html,body').animate({
// //             scrollTop: $(this).offset().top},
// //         'slow');
// 	 });





// var url = window.location.href;
var url = "https://fertilligence.com/";
$('#modalvideo').on('shown.bs.modal', function () {
    $('.autoplay-item')[0].play();
})


$("#modalvideo .close").click(
    $(function () {
        $('#modalvideo').modal({
            show: false
        }).on('hidden.bs.modal', function () {
            $(this).find('video')[0].pause();
        });
    })
)





$('.readmorebutton').click(function (e) {
    if ($(window).width() <= 800) {
        var id = $(this).attr('data-id');
        
        $('#card' + id).parents().find('.readmoremobile').removeClass('d-none');
			setTimeout(()=>{
		    $('html,body').animate({scrollTop: $(this).offset().top - 50},
        'slow');
			},500)

	}
    // $('.readmore').addClass('display-none');
    //
    // console.log($(this).parents().find('.whySection'));
    // var parent=$(this).parents().find('.whySection');
    // parent.find('.readmore').removeClass('display-none');
    // parent.find('.readmore').removeClass('d-none');
    // parent.find('.readmore').addClass('display-why-section');

});
$('.closebtn').click(function(e){
	e.stopPropagation();
    var parent =$(this).parents('.readmoremobile').attr('id')
    $('#'+parent).collapse('hide')
    console.log(parent)
})

//$('#collapseExample1').collapse('hide')


var story = document.querySelectorAll(".story");
var coachcover = document.querySelectorAll(".coach-cover")
var closebtn3 = document.querySelectorAll(".closebtn3")

$('.story').click(function (e) {
    e.stopPropagation();
    e.preventDefault();
    var id = $('.owl-item.active .coach-items').attr('data-id');
    $('.cover' + id).removeClass('d-none');
})
$('.closebtn3').click(function (e) {
//     e.stopPropagation();
//     e.preventDefault();
//     var id = $('.owl-item .active .coach-items').attr('data-id');
//     console.log(id);
//     $('#cover' + id).addClass('d-none');
      $(".coach-cover").addClass('d-none')
})





var accordion = document.querySelectorAll(".readmore");
var closebtn = document.querySelectorAll(".closebtn")
for (var i = 0; i < closebtn.length; i++) {
    closebtn[i].addEventListener('click', closeBtn, false);
}

function closeBtn() {
    for (var i = 0; i < accordion.length; i++)
        accordion[i].classList.remove("show")
}






$(document).ready(function () {
    $(".carousel3").owlCarousel();
});
$('.carousel3').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
var owl = $('.carousel3');
owl.owlCarousel();

$('.owl-next').click(function() {
    $('html,body').animate({
            scrollTop: $(".coach").offset().top},
        'slow');
})
$('.owl-prev').click(function() {
    $('html,body').animate({
            scrollTop: $(".coach").offset().top},
        'slow');
})



 if ($(window).width() > 800) {
	 function hoverFunction() {

    var img = this.getElementsByClassName("img-fer");
    var urlpath = url + "wp-content/themes/FTG/images/";
    var hoverimg = img[0].dataset.imghover;
    var srctoset = urlpath + hoverimg;
    img[0].setAttribute("src", srctoset)
}

function nonhoverFunction() {

    var img = this.getElementsByClassName("img-fer");
    var urlpath = url + "wp-content/themes/FTG/images/";
    var hoverimg = img[0].dataset.imgnonhover;
    var srctoset = urlpath + hoverimg;
    img[0].setAttribute("src", srctoset)
}

var imgdiv = document.querySelectorAll(".section1-card")
for (var i = 0; i < imgdiv.length; i++) {
    imgdiv[i].addEventListener("mouseover", hoverFunction, false)
    imgdiv[i].addEventListener("mouseout", nonhoverFunction, false)
}
	 
	 
	 
 }







function openNav() {
    // document.getElementById("top-menu").style.width = "300px";
    document.getElementById("navbarNav").style.width = "320px";
	document.getElementById("sidenav-overlay").style.display = "block";
	document.querySelector("body").classList.add("ofy-h");
	document.querySelector("html").classList.add("ofy-h");



}

function closeNav() {
    // document.getElementById("top-menu").style.width = "0";
    document.getElementById("navbarNav").style.width = "0";
	document.getElementById("sidenav-overlay").style.display = "none";
	document.querySelector("body").classList.remove("ofy-h");
	document.querySelector("html").classList.remove("ofy-h");


}
var a = document.querySelector("#menu-item-29 a");
// a.setAttribute("onclick","closeNav()");
// a.setAttribute("href","javascript:void(0)")




// var quizform = document.querySelector("#quiz-form2")
// if(quizform){
// 	var button = document.querySelectorAll(".label");
//     var quiz = document.querySelectorAll(".quiz-form");
//     var emailuser;
//     var weight;

//     button[0].onclick = function () {
//         quiz[0].classList.add("d-none")
//         quiz[1].classList.remove("d-none");
//         emailuser = document.querySelector(".email").value;
//     }

//     //ehsan
//     var results = [];

//     function myFunction() {
//         var questionNumber = parseInt(this.dataset.qnumber);
//         var questionValue = parseInt(this.dataset.value);
//         results[questionNumber - 1] = questionValue + 1;

//         for (var i = 0; i < 13; i++) {
//             quiz[i].classList.add("d-none");
//         }

//         quiz[questionNumber + 1].classList.remove("d-none");

//     }


//     var elements = document.getElementsByClassName("question");
//     for (var i = 0; i < elements.length; i++) {
//         elements[i].addEventListener('click', myFunction, false);
//     }


//     //end ehsan

//     //back button

//     function backFunction() {
//         var bNumber = parseInt(this.dataset.bnumber)
//         for (var i = 2; i < 13; i++) {
//             quiz[i].classList.add("d-none");


//         }
//     if (bNumber){
//         quiz[bNumber - 1].classList.remove("d-none")
//     }else {
//         alert("ljhfljasdjsa")
//     }


//     }

//     var myButton = document.querySelectorAll(".back-button")
//     for (var i=0;i<myButton.length;i++){
//         myButton[i].addEventListener("click",backFunction,false);
//     }




//     //end back button

//     var ctx = document.getElementById('myChart').getContext('2d');
//     var chart = new Chart(ctx, {
//         type: 'radar',

//         data: {
//             labels: ['Nutration', 'Hydration', 'Exercise', 'Sleep', 'Supplements', 'Stress', 'Mood', 'Partner Connection', 'Environment', 'Weight', 'Ovulation', 'Partner Lifestyle'],
//             datasets: [{
//                 pointStyle: 'circle',
//                 backgroundColor: '#ffffff',
//                 borderColor: '#007bff',
//                 data: results,

//             }]
//         },

//         // Configuration options go here
//         options: {

//         }
//     });


// }




$(document).ready(function () {
    $("#carousel1").owlCarousel();
});
$('#carousel1').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


$(document).ready(function () {
    $("#carousel2").owlCarousel();
});
$('#carousel2').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})














jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > 50) {
        jQuery("#header2").addClass("scroll-d");
        jQuery(".menu-item a").addClass("color-black");
        jQuery(".d-packages").addClass("d-none");
        jQuery(".logo").attr("src", "https://ftgnew.wpengine.com/wp-content/themes/FTG/images/Group%207567.svg");
    } else {
        jQuery("#header2").removeClass("scroll-d");
        jQuery(".menu-item a").removeClass("color-black");
        jQuery(".d-packages").removeClass("d-none");
        jQuery(".logo").attr("src", "https://ftgnew.wpengine.com/wp-content/themes/FTG/images/Fertilligence-Logo-Full-white.png");
    }
});


jQuery(document).ready(function () {
    jQuery(".collapse").on('show.bs.collapse', function () {
        jQuery(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function () {
        jQuery(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});


var videos1 = document.querySelector("#videos");
if(videos1){
	var poster = document.querySelectorAll('.video-poster');
var video = document.querySelectorAll('.embed-responsive-item');
poster[0].onclick = function () {
    poster[0].style.display = 'none';
    video[0].play();
}
poster[1].onclick = function () {
    poster[1].style.display = 'none';
    video[1].play();
}
poster[2].onclick = function () {
    poster[2].style.display = 'none';
    video[2].play();
}
poster[3].onclick = function () {
    poster[3].style.display = 'none';
    video[3].play();
}
poster[4].onclick = function () {
    poster[4].style.display = 'none';
    video[4].play();
}
poster[5].onclick = function () {
    poster[5].style.display = 'none';
    video[5].play();
}

}



//  	setTimeout(function(){ 	
//  		$('#automodal').modal('show'); 
// 		$('#modalsa').modal('show');
//  }, 2000);
			var lastScrollTop = 0;
			var showme=0;
        	var maScrollDown=0;
        if ($(window).width() <1024   ) {
            $(window).scroll(function(event){

                var st = $(this).scrollTop();
                var scHeight=$( window ).height();
                var footerHeight=$( 'footer' ).height();

                if (st>(footerHeight/2)){
                    maScrollDown=1;
                }

                var scHeight=$( window ).height();
                var st = $(this).scrollTop();
                if (st > lastScrollTop){
                    // downscroll code
                } else {
                    if ((st<5)&& (maScrollDown==1)){
                        if (showme==0){
                             $('#automodal').modal('show');
                            showme=1;
                        }
                    }
                    console.log(st);
                }
                lastScrollTop = st;
            });
        }

	        $(document).bind("mouseleave", function(e) {
            console.log(e.pageY);
            if (e.pageY - $(window).scrollTop() <= 1)
            {
                if (showme==0){
                    $('#automodal').modal('show');
                    showme=1;
                }

            }
        });









	$('#checky').click(function(){
		 $('#postme1').toggleClass('d-none');
	});




	class NbeForm {
		constructor(form, rc, rcn) {
			this.form = form;
			this.runCodeIV = rc;
			this.runCodeINV = rcn;
			this.initiateFuncs()

		}
		nbeNeededMask() {
			if ($('[type=usphone]').length > 0) {
				$(this.form + " [type=usphone]").inputmask("(999) 999 - 999");
			}
		}
		mainJob() {
			var selfClass = this;
			$(this.form + " [type=submit]").click(function (e) {
				var thisBtn = $(this);
				$(this).prop('disabled', true);
				e.preventDefault();
				$('' + selfClass.form + ' input,' + selfClass.form + ' textarea').removeClass('not-valid')
				$(selfClass.form + ' .form-validate').hide()
				var valid = true;
				$(selfClass.form + ' input,' + selfClass.form + ' textarea,' + selfClass.form + ' select')
					.each(function (x, y) {
						var valueOfInput = $(this).val(),
							allowedLength = $(this).attr('nbelen');
						if (y.hasAttribute('nbeReq') && valueOfInput.length == 0) {
							$(this).addClass('not-valid')
							$(this).next('.form-validate').show().html('this can not be empty')
							valid = false;
						} else if (allowedLength && valueOfInput.length != allowedLength) {
							$(this).addClass('not-valid')
							$(this).next('.form-validate').show().html('we need ' + allowedLength +
								' letter')
							valid = false;
						} else {
							let type = $(this).attr('type');
							let usPhoneRegEx = /[0-9 -()+]+$/;
							let validEmail =
								/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
							if (type && type == "usphone" && !usPhoneRegEx.test(valueOfInput)) {
								$(this).addClass('not-valid')
								$(this).next('.form-validate').show().html(
									'please enter a valid us number')
								valid = false;
							}
							if (type && type == "email" && !validEmail.test(valueOfInput)) {
								$(this).addClass('not-valid');
								$(this).next('.form-validate').show().html('please enter a valid email');
								valid = false;
							}
							if (y.hasAttribute('nbeSame')) {
								let thisValue = $(this).val();
								let sameAttr = $(this).attr('nbeSame');
								let thatValue = $(selfClass.form + " [nbeSame=" + sameAttr + "]").not($(
									this)).val()

								if (thisValue != thatValue) {
									$(this).addClass('not-valid');
									$(this).next('.form-validate').show().html(
										'These two must be matched');
									valid = false;
								}
							}
						}
					})
				if (valid) {
					selfClass.runCodeIV(thisBtn)
				} else {
					thisBtn.prop('disabled', false);
					selfClass.runCodeINV()
				}

			});
		}
		initiateFuncs() {
			this.nbeNeededMask();
			this.mainJob();
		}

	}


	$(document).ready(function () {
		new NbeForm("#nbe-classic-form1", () => {
			
			  var email = $("#popemail").val();
	
						$.ajax({
                            url: "https://fertilligence.com/wp-json/nxm/SubscribeHomePage",
                            method: "POST",
                            data: {
                                fname: '-',
                                lname: '--',
                                email: email
                            },
                            success: function(res) {
								console.log(res)
								$("#thankyou").fadeOut();
								$("#join").fadeOut();
								$("#popemail").fadeOut();
								$("#automodal > div > div > div.modal-body > form > div.form-group.text-center > div").fadeOut();
								$("#postme1").fadeOut();
                                $("#thankyou").text("THANK YOU!");
								$("#join").html("Use promo code OFF50 at registration to save!<br>Check your inbox for more information from Fertilligence.");
								$("#thankyou").fadeIn();
								$("#join").fadeIn();
                            },
                            error: function(response) {
                                console.log(response)
                            }
                        });
			
			
			
			
		}, () => {
			
		});
	})









$(document).ready(function () {
    $("#carouselhero").owlCarousel();
});
$('#carouselhero').owlCarousel({
	dots:true,
    margin:10,
	autoplay:true,
	loop: true,
	autoplayTimeout:5000,
    responsiveClass:true,
	rewindNav:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
			dots:true,
			
        }
    }
	
	
	
	
	
})

if ($(window).width() > 1000) {
	var owl = $("#carouselhero");
owl.owlCarousel();
owl.on('changed.owl.carousel', function(event) {
   var item = event.item.index;
	console.log(item)
	
//  	console.log(this);
	 	
	switch(item){
			case 4:
			$(".sa").removeClass("sabold")
			$("#s1").addClass("sabold");
			break;
			case 5:
			$(".sa").removeClass("sabold")
			$("#s2").addClass("sabold");
			break;
			case 6:
			$(".sa").removeClass("sabold")
			$("#s3").addClass("sabold");
			break;
			case 7:
			$(".sa").removeClass("sabold")
			$("#s4").addClass("sabold");
			break;
			case 8:
			$(".sa").removeClass("sabold")
			$("#s5").addClass("sabold");
			break;
			case 9:
			$(".sa").removeClass("sabold")
			$("#s6").addClass("sabold");
			break;
			case 10:
			$(".sa").removeClass("sabold")
			$("#s7").addClass("sabold");
			break;
			case 11:
			$(".sa").removeClass("sabold")
			$("#s8").addClass("sabold");
// 			setTimeout(function(){ 
// 				$("#carouselhero .owl-dots .owl-dot").first().click()
// 			}, 5000);
			break;
			
			
	} //end of swich
})


}












if(window.location.href === "https://fertilligence.com/home2/"  || window.location.href === "https://fertilligence.com/" ){
   	if ($(window).width() > 500) {
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 100) {
			$("header").addClass("menufix");
		} else {
			$("header").removeClass("menufix");
		}
	});


}
 
}






$(document).ready(function () {
    $("#carouselpackages").owlCarousel();
});
$('#carouselpackages').owlCarousel({
	dots:false,
    margin:10,
//  	startPosition: 1,
// 	autoplay:true,
// 	autoplayTimeout:2000,
	autoplayHoverPause:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
			 loop:true,
			mouseDrag:true,
			touchDrag:true
        },
        600:{
            items:3,
			margin:0,
			nav:false,
			dots:false,
            loop:false,
			mouseDrag:false,
			touchDrag:false
			
        },
        1000:{
            items:3,
			margin:0,
			nav:false,
			dots:false,
            loop:false,
			mouseDrag:false,
			touchDrag:false
        }
    }
	
	
	
	
	
})
	var owll = $("#carouselpackages");
owll.owlCarousel();
owll.on('changed.owl.carousel', function(event) {
   var item = event.item.index;
	console.log('current item =')
	console.log(item);
	if(item == 3){
		 $('a.packages2-button').attr('href','care-invite/?id=1')
		$("#sarec").removeClass("d-none");
	}else if(item == 2 || item==5){
			 $('a.packages2-button').attr('href','care-invite/?id=0')
		$("#sarec").addClass("d-none");
	}else if(item == 4){
		$('a.packages2-button').attr('href','care-invite/?id=2')
		$("#sarec").addClass("d-none");
	}
})







// var iframe = document.getElementById("201045604107138");
// var elmnt = iframe.contentWindow.document.getElementsById("input_2");
// elmnt.click(function() {
//     $('html,body').animate({
//             scrollTop: $("header").offset().top},
//         'slow');
// });






$("#StartTheQuiz").click(function() {

    $('html,body').animate({
            scrollTop: $("header").offset().top},
        'slow');
});



$(".story").click(function() {
    $('html,body').animate({
            scrollTop: $(this).offset().top-800},
        'slow');
});















$(document).ready(function () {
    $(".owltesti").owlCarousel();
});
$('.owltesti').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})


// Blog/Post
$(document).ready(function(){
    $(".sa-owl-related").owlCarousel();
});
$('.sa-owl-related').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})










