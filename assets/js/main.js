/*!
	Theme Name: Migue
	Theme URI: http://migue.design
	Author: @elnodos
	Author URI: http://migue.design
	Author Contact: hello@migue.design
	Version: 2
*/

jQuery(document).ready(function($) {

    // Function for date
    function makeArray() {
        for (i = 0; i<makeArray.arguments.length; i++)
        this[i + 1] = makeArray.arguments[i];
    }
    var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
    'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    var fecha = (day + " de " + months[month] + " del " + year);
    document.getElementById("fecha").innerHTML = fecha; 



	
	// Header fixed
	previousScroll = 0;
	header = $('.header');
	main = $('.main');
	originalTop = header.offset().top;
	courseNews = $('.courseNewsContent');
	stickyNews = courseNews.offset().top;
	navigation = $('#cd-vertical-nav');
	stickyNavTop = navigation.offset().top;

	$(window).scroll(
		function(e){
			if ($(this).scrollTop() >= originalTop + 40)
			{
				header.addClass('is-scrolled');
				main.addClass('is-scrolled');
				if ($(this).scrollTop() >= stickyNews - 60)
				{
					courseNews.addClass('is-scrolled');
				}
				else{
					courseNews.removeClass('is-scrolled');
				}
				if ($(this).scrollTop() >= stickyNavTop - 60)
				{
					navigation.addClass('is-scrolled');
				}
				else{
					navigation.removeClass('is-scrolled');
				}
			}
			else
			{
				header.removeClass('is-scrolled');
				main.removeClass('is-scrolled');
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
            {'scrollTop':target.offset().top - 140},
            600
        );
    }



    // Carousel
    if ($("#owl-Items").length) {
			$("#owl-Items").owlCarousel({
				loop: true,
				margin: 0,
				dots: true,
				nav: true,
				autoplay: true,
				autoplayTimeout: 4000,
				slideTransition: "linear",
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
			});
		}



	
});





