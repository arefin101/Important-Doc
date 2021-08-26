$(document).ready(function () {

	/* scrolltop btn */

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	$('.scrollToTop').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
	});

	/* top category slider */
	$('.topcategory-slider').slick({
		autoplay: true,
		infinite: true,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		responsive: [
			{
				breakpoint: 1198,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
    },
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
    },
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
    }

  ]
	});

	/* popular news slider */
	$('.popularnews-slider').slick({
		autoplay: true,
		infinite: true,
		vertical: true,
		dots: true,
		slidesToShow: 6,
		slidesToScroll: 2,
	});


	/*top news slider */
	$('.tn-slider').slick({
		autoplay: true,
		infinite: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		nav: true,
		prevArrow: '<i class="fa fa-angle-left tnslider-left"></i>',
		nextArrow: '<i class="fa fa-angle-right tnslider-right"></i>'
	});

	$('.brk-slider').slick({
		autoplay: true,
		vertical: true,
		infinite: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		nav: true,
		prevArrow: '<i class="fa fa-angle-left brk-left"></i>',
		nextArrow: '<i class="fa fa-angle-right brk-right"></i>'
	});


	/* active and remove class menu */
	var listone = document.querySelector(".listone");
	var listtwo = document.querySelector(".listtwo");
	var listthree = document.querySelector(".listthree");

	var menu1 = document.querySelector(".menuone");
	var menu2 = document.querySelector(".menutwo");
	var menu3 = document.querySelector(".menuthree");

	menu1.addEventListener('click', function () {
		listone.classList.toggle("active");
	});

	menu2.addEventListener('click', function () {
		listtwo.classList.toggle("active");
	});
	menu3.addEventListener('click', function () {
		listthree.classList.toggle("active");
	});

	/*slide mysidebar*/

	var opennav = document.querySelector(".opennav");
	var closenav = document.querySelector(".closenav");
	var sidebar = document.querySelector(".sidebar");

	opennav.addEventListener("click", () => {
		sidebar.style.width = "250px";
	});

	closenav.addEventListener("click", () => {
		sidebar.style.width = "0px";
	});

	/* main desktop navbar sticky */

	window.onscroll = function () {
		myFunction()
	};

	var navbar = document.querySelector(".headernav");
	var sticky = navbar.offsetTop;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}

});
