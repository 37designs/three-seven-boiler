	jQuery(document).ready(function ($) {
	
		$('#main_navigation li').hover(function() { 
			$(this).addClass('active');				
		}, function() { 
			$(this).removeClass('active');				
		});
	

          $('.modal').magnificPopup({type:'image'});
         
          
          $("#mobile-navigation").mmenu({
	      }, {
	         // configuration
	         offCanvas: {
	            pageSelector: ".page-wrapper"
	         }
	      });
      
		  var API = $("#mobile-navigation").data( "mmenu" );

	      $("#my-button").click(function() {
	         API.open();
	      });
		
	});