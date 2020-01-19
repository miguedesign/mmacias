/*!
	Theme Name: Migue
	Theme URI: http://migue.design
	Author: @elnodos
	Author URI: http://migue.design
	Author Contact: hello@migue.design
	Version: 2
*/

jQuery(document).ready(function($) {
	
	// Header fixed
	previousScroll = 0;
	header = $('.header');
	$main = $('.main');
    originalTop = header.offset().top;
    $(window).scroll(
		function(e){
		if ($(this).scrollTop() >= originalTop + 40)
			{
				header.addClass('is-scrolled');
				$main.addClass('is-scrolled');
			}
		else
			{
				header.removeClass('is-scrolled');
				$main.removeClass('is-scrolled');

		}
    });


    // Menu mobile
    button = $('.toggleMenu');
    menu = $('.menu');
    button.on('click', function(e){
			e.preventDefault();
			openMenu();
			buttonClicked();
		});
		function buttonClicked(){
			button.toggleClass('is-clicked');
		};
		function openMenu(){
			menu.toggleClass('is-open');
		};



	// Navigation left
	var contentSections = $('.cd-section'),
      navigationItems = $('#cd-vertical-nav a');
    updateNavigation();
    $(window).on('scroll', function(){
    	updateNavigation();
    });

    //smooth scroll to the section
    navigationItems.on('click', function(event){
        event.preventDefault();
        smoothScroll($(this.hash));
    });
    //smooth scroll to second section
    $('.cd-scroll-down').on('click', function(event){
        event.preventDefault();
        smoothScroll($(this.hash));
    });

    //open-close navigation on touch devices
    $('.cd-nav-trigger').on('click', function(){
        $('#cd-vertical-nav').toggleClass('open');
  
    });
    //close navigation on touch devices when selectin an elemnt from the list
    $('#cd-vertical-nav a').on('click', function(){
        $('#cd-vertical-nav').removeClass('open');
    });

    function updateNavigation() {
        contentSections.each(function(){
            $this = $(this);
            var activeSection = $('#cd-vertical-nav a[href="#'+$this.attr('id')+'"]').data('number') - 1;
            if ( ( $this.offset().top - $(window).height()/2 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height()/2 > $(window).scrollTop() ) ) {
                navigationItems.eq(activeSection).addClass('is-selected');
            }else {
                navigationItems.eq(activeSection).removeClass('is-selected');
            }
        });
    }

    function smoothScroll(target) {
        $('body,html').animate(
            {'scrollTop':target.offset().top - 100},
            600
        );
    }





	
});





