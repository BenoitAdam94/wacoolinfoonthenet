/**
 * Wacool - Info on the net
 * Navigation script for mobile menu accessibility
 *
 * @package wacool-info-on-the-net
 */

( function() {
	'use strict';

	var menuToggle = document.querySelector( '.menu-toggle' );
	var navMenu    = document.querySelector( '#primary-menu' );

	if ( ! menuToggle || ! navMenu ) {
		return;
	}

	// Toggle menu on button click
	menuToggle.addEventListener( 'click', function() {
		var isExpanded = menuToggle.getAttribute( 'aria-expanded' ) === 'true';

		menuToggle.setAttribute( 'aria-expanded', ! isExpanded );

		if ( ! isExpanded ) {
			navMenu.classList.add( 'show' );
		} else {
			navMenu.classList.remove( 'show' );
		}
	} );

	// Close menu with Escape key
	document.addEventListener( 'keydown', function( e ) {
		if ( e.key === 'Escape' && navMenu.classList.contains( 'show' ) ) {
			navMenu.classList.remove( 'show' );
			menuToggle.setAttribute( 'aria-expanded', 'false' );
			menuToggle.focus();
		}
	} );

} )();
