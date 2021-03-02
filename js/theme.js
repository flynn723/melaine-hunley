(function($) {
"use strict";

$(document).ready(function() {

/*=================================================================
  Jarallax Init
==================================================================*/
	if ( $('.template-index').length ) {
		$('.jarallax').jarallax({
		  speed: 0.2
		});
	}

/*=================================================================
  MDB Lightbox Init
==================================================================*/
	if ( $('.template-gallery').length ) {
		$("#mdb-lightbox-ui").load( WPSettings.site_url + "/wp-content/themes/melanie-hunley/mdb-addons/mdb-lightbox-ui.html");	
	}
	if ( $('.template-taxonomy-gallery_category').length ) {
		$("#mdb-lightbox-ui").load( WPSettings.site_url + "/wp-content/themes/melanie-hunley/mdb-addons/mdb-lightbox-ui.html");	
	}

/*=================================================================
  Contact > Ninja Forms
==================================================================*/
    if ( $('.template-contact').length ) {

		// Reformat Ninja Forms DOM
		setTimeout( function() {
			reFormatNinjaFormsDOM();
		}, 1500);

	    function reFormatNinjaFormsDOM() {

			$('.section-hero-contact .nf-form-cont .field-wrap').addClass('md-form pb-3');	
			// $('.section-hero-contact .nf-form-cont .field-wrap .nf-field-label label').addClass();
			$('.section-hero-contact .nf-form-cont .nf-field-element input[type="text"]').addClass('form-control');
			$('.section-hero-contact .nf-form-cont .nf-field-element input[type="email"]').addClass('form-control');
			$('.section-hero-contact .nf-form-cont .field-wrap .nf-field-element textarea').addClass('form-control');
			$('.section-hero-contact .nf-form-cont .field-wrap .nf-field-element input[type="button"]').addClass('btn btn-outline-white');
			$('.section-hero-contact .nf-form-cont .field-wrap').each( function() {
				// copy
				let label = $(this).find('.nf-field-label').html();
				let input = $(this).find('.nf-field-element').html();
				// remove
				$(this).find('.nf-field-label').remove();
				$(this).find('.nf-field-element').remove();
				// append
				$(this).append(label).append(input);

			});
			$('.section-hero-contact .ninja-forms-col').slideDown(500);
			
	    }

    }

/*=================================================================
  Booking > Ninja Forms
==================================================================*/
    if ( $('.template-booking').length ) {

		// Reformat Ninja Forms DOM
		setTimeout( function() {
			reFormatNinjaFormsDOM();
		}, 1500);

	    function reFormatNinjaFormsDOM() {

			$('.section-booking-content .nf-form-cont .field-wrap').each(function() {
				if ( ! $(this).hasClass('date-wrap') && ! $(this).hasClass('listselect-wrap') ) {
					$(this).addClass('md-form pb-3');					
				}
			});
			$('.section-booking-content .nf-form-cont .nf-field input[type="text"]').addClass('form-control');
			$('.section-booking-content .nf-form-cont .nf-field input[type="tel"]').addClass('form-control');
			$('.section-booking-content .nf-form-cont .nf-field input[type="email"]').addClass('form-control');
			$('.section-booking-content .nf-form-cont .field-wrap .nf-field-element textarea').addClass('form-control');
			$('.section-booking-content .nf-form-cont .field-wrap .nf-field-element input[type="button"]').addClass('btn btn-outline-white');
			$('.section-booking-content .nf-form-cont .field-wrap').each( function() {

				// skip date-wrap classes
				if ( ! $(this).hasClass('date-wrap') && ! $(this).hasClass('listselect-wrap')  ) {
					// copy
					let label = $(this).find('.nf-field-label').html();
					let input = $(this).find('.nf-field-element').html();
					// remove
					$(this).find('.nf-field-label').remove();
					$(this).find('.nf-field-element').remove();
					// append
					$(this).append(label).append(input);
				}

			});
			$('.section-booking-content .ninja-forms-col').slideDown(500);
			// init select
			$('.section-booking-content select').show().css('display', 'block !important');
			// $('.section-booking-content select').addClass('mdb-select md-form');
			// $('.section-booking-content select.mdb-select').materialSelect();
			
	    }

    }

});

})(jQuery);