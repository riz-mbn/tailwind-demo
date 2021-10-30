/* eslint-disable no-undef */
// handle links with @href started with '#' only
jQuery( document ).on( 'click', 'a[href^="#"]', function( e ) {
	// target element id
	const id = jQuery( this ).attr( 'href' );

	// target element
	const $id = jQuery( id );
	if ( $id.length === 0 ) {
		return;
	}

	// prevent standard hash navigation (avoid blinking in IE)
	e.preventDefault();

	// top position relative to the document
	const pos = $id.offset().top;

	const scroller = document.querySelector( '.scroller' );

	const targetElement = document.querySelector( id );

	const bodyScrollBar = Scrollbar.init( scroller, { damping: 0.1, delegateTo: document, alwaysShowTracks: true } );
	// animated top scrolling
	bodyScrollBar.scrollIntoView( targetElement, {
		offsetLeft: 0,
		offsetBottom: 0,
		alignToTop: false,
		onlyScrollIfNeeded: false,
	});
});

//converts viewport units to pixels (like "50vw" or "20vh" into pixels)
function toPX( value ) {
	return parseFloat( value ) / 100 * ( /vh/gi.test( value ) ? window.innerHeight : window.innerWidth );
}

// wait until DOM is ready
jQuery( document ).ready( function() {
	// reset scroll to default to prevent the animations from not firing when page is reloaded.
	jQuery( window ).bind( 'beforeunload', function() {
		window.scrollTo( 0, 0 );
		ScrollTrigger.refresh();
	} );

	// wait until window is loaded - all images, styles-sheets, fonts, links, and other media assets
	jQuery( window ).on( 'load', function() {
		window.scrollTo( 0, 0 );

		var $windowWidth = jQuery( window ).width();
		if ($windowWidth <= 1400) {

			jQuery('.services_item').slick({
			  dots: false,
			  arrow: true,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 5,
			  slidesToScroll: 1,
			  variableWidth: true,
			  focusOnSelect: true,
			  asNavFor: '.services_item_slick',
			  responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				  }
				},
				  {
					breakpoint: 375,
					settings: {
					  slidesToShow: 5,
					  slidesToScroll: 1
					}
				  }
				]                    
			});
			jQuery('.services_item_slick').slick({
				dots: false,
				arrow: false,
				infinite: true,
				speed: 300,
				asNavFor: '.services_item',                 
			  });
		  }

	});
} );
