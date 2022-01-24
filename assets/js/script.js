jQuery(function ($) {
	$(window).on('scroll', function () {
		if ($(this).scrollTop() >= 200) {
			$('.navbar').addClass('fixed-top');
		} else if ($(this).scrollTop() == 0) {
			$('.navbar').removeClass('fixed-top');
		}
	});

	function adjustNav() {
		var winWidth = $(window).width(),
			dropdown = $('.dropdown'),
			dropdownMenu = $('.dropdown-menu');

		if (winWidth >= 768) {
			dropdown.on('mouseenter', function () {
				$(this).addClass('show')
					.children(dropdownMenu).addClass('show');
			});

			dropdown.on('mouseleave', function () {
				$(this).removeClass('show')
					.children(dropdownMenu).removeClass('show');
			});
		} else {
			dropdown.off('mouseenter mouseleave');
		}
	}

	$(window).on('resize', adjustNav);

	adjustNav();
});

 // Collapse responsive navbar when toggler is visible
 const navbarToggler = document.body.querySelector('.navbar-toggler');
 const responsiveNavItems = [].slice.call(
	 document.querySelectorAll('#navbarResponsive .nav-link')
 );
 responsiveNavItems.map(function (responsiveNavItem) {
	 responsiveNavItem.addEventListener('click', () => {
		 if (window.getComputedStyle(navbarToggler).display !== 'none') {
			 navbarToggler.click();
		 }
	 });
 });