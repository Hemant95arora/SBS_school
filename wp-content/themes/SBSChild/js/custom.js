jQuery(document).ready(function() {
  jQuery("#owl-main").owlCarousel({
		//items:4,
        merge:true,
        loop:true,
        dots:false,
        nav: true,
        autoplay:true,
        autoplayTimeout:1500,
        responsiveClass:true,
	    responsive: {
		    0: {
		      items: 1
		    },

		    600: {
		      items: 3
		    },

		    1024: {
		      items: 4
		    },

		    1366: {
		      items: 4
		    },
		}
        
    });
  jQuery( "#colophon .site-info span" ).replaceWith( "<span>Copyright © All rights Shaheed Bhagat Singh School.</span>" );
});

