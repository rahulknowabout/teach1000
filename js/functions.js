jQuery(document).ready(function(){
    
	"use strict";
	
	/* ---------------------------------------------------------------------- */
    /*  FlexSlider
    /* ---------------------------------------------------------------------- */
	jQuery('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  jQuery('body').removeClass('loading');
		}
	});
	
	/* ---------------------------------------------------------------------- */
    /*  Carousel
    /* ---------------------------------------------------------------------- */
	jQuery('.owl-carousel').owlCarousel({
		loop:true,
		margin:25,
		nav:true,
		navText: [
			'<i class="fa fa-angle-left"></i>',
			'<i class="fa fa-angle-right"></i>'
		],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});
	
	/* ---------------------------------------------------------------------- */
    /*  Carousel
    /* ---------------------------------------------------------------------- */
	jQuery('.owl-carousel-partner').owlCarousel({
		loop:true,
		margin:25,
		nav:true,
		navText: [
			'<i class="fa fa-angle-left"></i>',
			'<i class="fa fa-angle-right"></i>'
		],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:6
			}
		}
	});
	
	/* ---------------------------------------------------------------------- */
    /*  Click to Top Button
    /* ---------------------------------------------------------------------- */
    jQuery('#kode-topbtn').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });

	/* ---------------------------------------------------------------------- */
    /*  Accordion Script
    /* ---------------------------------------------------------------------- */
    if(jQuery('.accordion').length){
        //custom animation for open/close
        jQuery.fn.slideFadeToggle = function(speed, easing, callback) {
          return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
        };

        jQuery('.accordion').accordion({
          defaultOpen: 'section1',
          cookieName: 'nav',
          speed: 'slow',
          animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
          },
          animateClose: function (elem, opts) { //replace the standard slideDown with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
          }
        });
    }

    /* ---------------------------------------------------------------------- */
    /*  Progress Bar
    /* ---------------------------------------------------------------------- */
    if(jQuery('.progress .progress-bar').length){
        jQuery('.progress .progress-bar').progressbar({display_text: 'fill'});
    }
    
    /* ---------------------------------------------------------------------- */
    /*  Circle Progress
    /* ---------------------------------------------------------------------- */
    if(jQuery('.circle-progress').length){
        jQuery('.circle-progress').percentcircle({
          animate : true,
          diameter : 100,
          guage: 3,
          coverBg: '#fff',
          bgColor: '#efefef',
          fillColor: '#5c93c8',
          percentSize: '50px',
          percentWeight: 'normal'
        });
    }
	
	/* ---------------------------------------------------------------------- */
	/*	Contact Form
	/* ---------------------------------------------------------------------- */
	
	if(jQuery('#contactform').length) {

		var jQueryform = jQuery('#contactform'),
		jQueryloader = '<img src="images/ajax_loading.gif" alt="Loading..." />';
		jQueryform.append('<div class="hidden-me" id="contact_form_responce">');

		var jQueryresponse = jQuery('#contact_form_responce');
		jQueryresponse.append('<p></p>');

		jQueryform.submit(function(e){

			jQueryresponse.find('p').html(jQueryloader);

			var data = {
				action: "contact_form_request",
				values: jQuery("#contactform").serialize()
			};

			//send data to server
			jQuery.post("inc/contact-send.php", data, function(response) {

				response = jQuery.parseJSON(response);
				
				jQuery(".incorrect-data").removeClass("incorrect-data");
				jQueryresponse.find('img').remove();

				if(response.is_errors){

					jQueryresponse.find('p').removeClass().addClass("error type-2");
					jQuery.each(response.info,function(input_name, input_label) {

						jQuery("[name="+input_name+"]").addClass("incorrect-data");
						jQueryresponse.find('p').append('Please enter correct "'+input_label+'"!'+ '</br>');
					});

				} else {

					jQueryresponse.find('p').removeClass().addClass('success type-2');

					if(response.info == 'success'){

						jQueryresponse.find('p').append('Your email has been sent!');
						jQueryform.find('input:not(input[type="submit"], button), textarea, select').val('').attr( 'checked', false );
						jQueryresponse.delay(1500).hide(400);
					}

					if(response.info == 'server_fail'){
						jQueryresponse.find('p').append('Server failed. Send later!');
					}
				}

				// Scroll to bottom of the form to show respond message
				var bottomPosition = jQueryform.offset().top + jQueryform.outerHeight() - jQuery(window).height();

				if(jQuery(document).scrollTop() < bottomPosition) {
					jQuery('html, body').animate({
						scrollTop : bottomPosition
					});
				}

				if(!jQuery('#contact_form_responce').css('display') == 'block') {
					jQueryresponse.show(450);
				}

			});

			e.preventDefault();

		});				

	}
	/* ---------------------------------------------------------------------- */
	/*	Google Map
	/* ---------------------------------------------------------------------- */
	if(jQuery('#map-canvas').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}
	/* ---------------------------------------------------------------------- */
	/*	Google Map
	/* ---------------------------------------------------------------------- */
	if(jQuery('#map-canvas-1').length){
		google.maps.event.addDomListener(window, 'load', initialize_1);
	}
	/* ---------------------------------------------------------------------- */
	/*	Google Map
	/* ---------------------------------------------------------------------- */
	if(jQuery('#map-canvas-2').length){
		google.maps.event.addDomListener(window, 'load', initialize_2);
	}
	
	/* ---------------------------------------------------------------------- */
	/*	CountDown Function
	/* ---------------------------------------------------------------------- */
	window.jQuery(function (jQuery) {
		jQuery('time').countDown({
			with_separators: false
		});
	});

	/* ---------------------------------------------------------------------- */
	/*	Counter Function
	/* ---------------------------------------------------------------------- */
	if(jQuery('.word-count').length){
		jQuery(".word-count").counterUp({
			delay: 10,
			time: 1000
		});
	}
});	
/* ---------------------------------------------------------------------- */
/*	Google Map Function for Custom Style
/* ---------------------------------------------------------------------- */
function initialize() {
	var MY_MAPTYPE_ID = 'custom_style';
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
	var featureOpts = [
		{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}

	];
	var mapOptions = {
		zoom: 12,
		center: brooklyn,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map(
		document.getElementById('map-canvas'),
		mapOptions
	);

	var styledMapOptions = {
		name: 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}
/* ---------------------------------------------------------------------- */
/*	Google Map Function for Custom Style
/* ---------------------------------------------------------------------- */
function initialize_1() {
	var MY_MAPTYPE_ID = 'custom_style';
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
	var featureOpts = [
		{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}

	];
	var mapOptions = {
		zoom: 12,
		center: brooklyn,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map(
		document.getElementById('map-canvas-1'),
		mapOptions
	);

	var styledMapOptions = {
		name: 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}
/* ---------------------------------------------------------------------- */
/*	Google Map Function for Custom Style
/* ---------------------------------------------------------------------- */
function initialize_2() {
	var MY_MAPTYPE_ID = 'custom_style';
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
	var featureOpts = [
		{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}

	];
	var mapOptions = {
		zoom: 12,
		center: brooklyn,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map(
		document.getElementById('map-canvas-2'),
		mapOptions
	);

	var styledMapOptions = {
		name: 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}