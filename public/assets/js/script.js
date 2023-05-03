
(function($) {
    "use strict"; 
	
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:6
          }
      }
  });


  $('.owl-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$(document).on('click', 'a.page-scroll', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 600, 'easeInOutExpo');
			event.preventDefault();
		});
	});
 
    // $( '.hamburger-menu' ).on( 'click', function()
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('open');
        $('.menu-nav').toggleClass('show');
    });    
    

    /* Back To Top Button */
    // create the back to top button
    $('body').prepend('<a href="#" class="back-to-top page-scroll">Back to Top</a>');
    var amountScrolled = 500;
    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('500');
        } else {
            $('a.back-to-top').fadeOut('500');
        }
    });


	/* Removes Long Focus On Buttons */
	$(".button, a, button").mouseup(function() {
		$(this).blur();
	});

})(jQuery);


const items = document.querySelectorAll(".accordion-content a");

window.onscroll = function() {myFunction()};

var navbar = document.querySelector(".header-nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
};




function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));