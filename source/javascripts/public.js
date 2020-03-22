$(function () {
	$('#slideshow').cycle({
		fx: 'fade'
	}); // Galerii avatakse FancyBoxis
	$(".fancybox, .gallery .gallery-icon a").fancybox({
		titleShow: false
	});
});
