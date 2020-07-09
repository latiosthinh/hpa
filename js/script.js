( function( $ ) {

	const $win = $( window );

	if ( $( 'body' ).hasClass( 'home' ) ) {
		// svg
		TweenLite.fromTo( '.loading img', 1, { alpha: 0, scale: 5, delay:1 }, { alpha: 1, scale: 1, delay:1 }, )
		
		TweenLite.fromTo( '.loading h1', 1, { alpha: 0, delay:1 }, { alpha: 1, delay:2 })

		$( '.loading img, .loading h1' ).on( 'click', function() {
			TweenLite.to( '.loading', 0.5, { alpha: 0 })

			setTimeout(() => {
				$( '.loading' ).remove()
				$( '.site-header' ).css( 'z-index', '20' );
			}, 500);
		} )
	}

	
	if ( $win.width() > 992 ) {
		$( '.heading-expand' ).on( 'mouseenter', function() {
			let $this = $( this )

			
			$( '.heading' ).each( function() {
				$( this ).removeClass( 'active' ).css( 'width', $( this ).attr( 'data-width' ) );
				$( this ).children().removeClass( 'active' ).addClass( 'non-active' )
			} )

			setTimeout(() => {
				$this.addClass( 'active' ).removeClass( 'non-active' );
				$this.parent().addClass( 'active' )
				$this.parent().css( 'width', $this.attr( 'data-max-width' ) );

				$this.siblings( 'div' ).addClass( 'active' )
			}, 0);
			
		} )

		$( '.heading' ).on( 'mouseleave', function() {
			$( this ).removeClass( 'active' ).css( 'width', $( this ).attr( 'data-width' ) );
			$( this ).children().removeClass( 'active' ).removeClass( 'non-active' )

			$( '.heading-expand' ).removeClass( 'non-active' )
		} )
	}
	else {
		$( '.heading-expand' ).on( 'click', function() {
			let $this = $( this )

			$( '.mb-overlay' ).addClass( 'm-active' )

			$( '.heading-expand' ).removeClass( 'm-active' )
			$this.addClass( 'm-active' )

			$( '.heading div' ).removeClass( 'm-active' )
			$this.next( 'div' ).addClass( 'm-active' )

			$( '.heading' ).each( function() {
				$( this ).children().addClass( 'non-active' )
				$this.removeClass( 'non-active' );
			} )
		} )

		$( '.mb-overlay button' ).on( 'click', function() {
			$( '.heading div, .heading-expand, .mb-overlay' ).removeClass( 'm-active' )
		} )
	}

	var slider = function() {
		if ( $('.banner-slider').length !== 0 ) {
			$('.banner-slider').slick({
				autoplay: true,
				autoplaySpeed: 3000,
				draggable: true,
				arrows: true,
				dots: false,
				prevArrow: '<img class="prev" src="' + php_data.img_dir + '/arrow-left.png">',
				nextArrow: '<img class="next" src="' + php_data.img_dir + '/arrow-right.png">',
				// fade: true,
				speed: 900,
				infinite: true,
				cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
				touchThreshold: 100
			})
		}
	}

	$( document ).on( 'ready', function () {
		slider();

		$( '.heading' ).each( function() {
			$( this ).removeClass( 'active' ).css( 'width', $( this ).attr( 'data-width' ) );
			$( this ).children().removeClass( 'active' )
		} )

		if ( $( '.about' ).length !== 0 ) {
			let count = 0;
			let i;

			const acc = document.querySelectorAll( '.item h2' );
			const panels = document.querySelectorAll( '.item .content' );

			for ( i = 0; i < acc.length; i++ ) {
				acc[i].addEventListener( 'click' , function() {
					count += 1;

					for (j = 0; j < panels.length; j++) {
						if ( j !== i ) {
							acc[j].classList.remove( 'active' );
							panels[j].style.maxHeight = null;
						}
					}

					this.classList.add( 'active' )

					let panel = this.nextElementSibling;

					if ( panel.style.maxHeight ) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
					}
				});
			}
		}

		if ( $( '.projects' ).length !== 0 ) {
			$( 'select' ).select2({})
		}
	} )

	$( document ).on( 'facetwp-refresh', function() {
        $('.facetwp-template').animate({ opacity: 0.2 }, 10);
    });
    $( document ).on( 'facetwp-loaded', function() {
		$( 'select' ).select2({})
        $( '.facetwp-template' ).animate({ opacity: 1 }, 10);
    });
} )( jQuery )