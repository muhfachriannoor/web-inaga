

// EVENT COUNTDOWN
const second = 1000,
	  minute = second * 60
	  hour = minute * 60
	  day = hour * 24

let countDown = new Date('Sep 30, 2020 00:00:00').getTime(),
	x = setInterval(function() {
		let now = new Date().getTime(),
			distance = countDown - now;
		document.getElementById('days').innerText = Math.floor(distance / (day)),
		document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
		document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
		document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);


	}, second)

// NAVBAR SCROLL
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 40) {
      $("nav#inaga-navbar").addClass("scrolled");
    }else{
      $("nav#inaga-navbar").removeClass("scrolled");
    }
  });
});

// SLICK SLIDER
$(document).ready(function(){
	// SLIDER INFO GRAPHIC
	$('.infographic-slider').slick({
		arrows : false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000
	});
	// SLIDER INFO GRAPHIC
	$('.ads-slider').slick({
		arrows : false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000
	});
	// SLIDER EVENT
	$('.inaga-slider-event').slick({
		arrows : true,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000
	});
	// SLIDER HOME
	$('.inaga-slider').slick({
		arrows : true,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2500
	});
	// SLIDER GALLERY
	$('.inaga-slider-gallery').slick({
		arrows : true,
		dots: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2500,
		responsive: [
			{
		      breakpoint: 481,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
			{
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
		]
	});
	// SLIDER MEMBERS
	$('.inaga-members').slick({
		arrows : true,
		dots: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1000,
		responsive: [
			{
		      breakpoint: 1216,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 1
		      }
		    },
			{
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
			{
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
			{
		      breakpoint: 481,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		]
	});
})

// REGULATIONS SLIDETOGGLE

$(document).ready(function(){
	$(".regulation-wrap h6").click( function(){
		$(this).siblings("div").slideToggle();
		$(this).toggleClass("rg-active");
	});
})
// NOTIF CONTACTUS
$(document).ready(function(){
	$(".nf-contact").hide();
	$("#contact button").click( function(){
		$(".nf-contact").show();
	});
})
$(document).ready(function() {
	var showChar = 600;
	var ellipsestext = "...";
	var moretext = "Show more";
	var lesstext = "Show less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});