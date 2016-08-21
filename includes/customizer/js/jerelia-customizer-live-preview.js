/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {

//Hero
	wp.customize( 'jerelia_hero_general_image', function( value ) {
		value.bind( function( newval ) {
			console.log( newval );
			if( newval == '' ) {
				$( '#header' ).removeAttr( 'style' );
			} else {
				$( '#header' ).css( 'background-image', 'url('+ newval +')' );
			}
		} );
	} );


	wp.customize( 'jerelia_hero_general_title', function( value ) {
		value.bind( function( newval ) {
			$( '#header mark' ).html( newval );
			$( '#header a.navbar-brand' ).html( "Майстерня бізнесу " + newval );
		} );
	} );

	wp.customize( 'jerelia_hero_general_entry', function( value ) {
		value.bind( function( newval ) {
			$( '#header p' ).html( newval );
		} );
	} );

//About
	wp.customize( 'jerelia_about_general_image', function( value ) {
		value.bind( function( newval ) {
				console.log( newval );
				$( '#about img' ).attr( 'src', newval );
		} );
	} );


	wp.customize( 'jerelia_about_general_title', function( value ) {
		value.bind( function( newval ) {
			$( '#about h3' ).html( newval );
		} );
	} );

	wp.customize( 'jerelia_about_general_entry', function( value ) {
		value.bind( function( newval ) {
			$( '#about p' ).html( newval );
		} );
	} );


//Social

	wp.customize( 'jerelia_social_general_title', function( value ) {
		value.bind( function( newval ) {
			$( '#social h4' ).html( newval );
		} );
	} );

//Team

	wp.customize( 'jerelia_team_general_show', function( value ) {
		value.bind( function( newval ) {
			if( newval == false ) {
				$( '#team' ).addClass( 'customizer-display-none' );
			} else if( newval == true ) {
				$( '#team' ).removeClass( 'customizer-display-none' );
			}
		} );
	} );

	wp.customize( 'jerelia_team_general_title', function( value ) {
		value.bind( function( newval ) {
			$( '#team h3' ).html( newval );
		} );
	} );

//----- 1


	wp.customize( 'jerelia_team_general_name_1', function( value ) {
		value.bind( function( newval ) {
			$( '#person_1 h5' ).html( newval );
		} );
	} );

	wp.customize( 'jerelia_team_general_entry_1', function( value ) {
		value.bind( function( newval ) {
			$( '#person_1 p' ).html( newval );
		} );
	} );

//----- 2

	wp.customize( 'jerelia_team_general_name_2', function( value ) {
		value.bind( function( newval ) {
			$( '#person_2 h5' ).html( newval );
		} );
	} );

	wp.customize( 'jerelia_team_general_entry_2', function( value ) {
		value.bind( function( newval ) {
			$( '#person_2 p' ).html( newval );
		} );
	} );

//----- 3


	wp.customize( 'jerelia_team_general_name_3', function( value ) {
		value.bind( function( newval ) {
			$( '#person_3 h5' ).html( newval );
		} );
	} );

	wp.customize( 'jerelia_team_general_entry_3', function( value ) {
		value.bind( function( newval ) {
			$( '#person_3 p' ).html( newval );
		} );
	} );

//Callback
	wp.customize( 'jerelia_callback_general_image', function( value ) {
		value.bind( function( newval ) {
			console.log( newval );
			if( newval == '' ) {
				$( '#callback' ).removeAttr( 'style' );
			} else {
				$( '#callback' ).css( 'background-image', 'url('+ newval +')' );
			}
		} );
	} );

	wp.customize( 'jerelia_callback_general_entry', function( value ) {
		value.bind( function( newval ) {
			$( '#callback p' ).html( newval );
		} );
	} );

} )( jQuery );