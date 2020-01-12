(function ($, root, undefined) {
	
	$(function () {
		
		var $element = $('.test123');

		$(window).scroll(function() {
			if($(this).scrollTop() > 0) {
				$element.fadeOut(500);
			} else {
				$element.fadeIn(500);
			}
		});
		
	});
	
})(jQuery, this);
