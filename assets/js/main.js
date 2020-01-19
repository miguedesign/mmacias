/*!
	Theme Name: Migue
	Theme URI: http://migue.design
	Author: @elnodos
	Author URI: http://migue.design
	Author Contact: hello@migue.design
	Version: 2
*/

jQuery(document).ready(function($) {
	
	previousScroll = 0;
	$topBar = $('.header');
	$main = $('.main');
	originalTop = $topBar.offset().top;
	$(window).scroll(
		function(e){
			if ($(this).scrollTop() >= originalTop + 40)
			{
				$topBar.addClass('is-scrolled');
				$main.addClass('is-scrolled');
			}
			else
			{
				$topBar.removeClass('is-scrolled');
				$main.removeClass('is-scrolled');

			}
		});

	
});





