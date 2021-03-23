const gambitGalleryIsInView = el => {
	const scroll = window.scrollY || window.pageYOffset
	const boundsTop = el.getBoundingClientRect().top + scroll

	const viewport = {
		top: scroll,
		bottom: scroll + window.innerHeight,
	}

    const bounds = {
		top: boundsTop,
		bottom: boundsTop + el.clientHeight,
	}

	return ( bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom )
		|| ( bounds.top <= viewport.bottom && bounds.top >= viewport.top );
}


// Usage.
document.addEventListener( 'DOMContentLoaded', () => {
	const abschnitt_3 = document.querySelector( '.abschnitt_3' )
	const abschnitt4 = document.querySelector( '#abschnitt4' )

	const handler = () => raf( () => {
		abschnitt4 = ( gambitGalleryIsInView( abschnitt_3 ) ? .removeClass('abs4fixed') : .addClass('abs4fixed') )
	} )

	handler()
	window.addEventListener( 'scroll', handler )
} )

// requestAnimationFrame
const raf =
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    function( callback ) {
        window.setTimeout( callback, 1000 / 60 )
    }
