( function( $ ) {

    if ( $( 'body' ).hasClass( 'home' ) ) {
        // svg
        TweenLite.fromTo( '.loading img', 1, { alpha: 0, scale: 5, delay:1 }, { alpha: 1, scale: 1, delay:1 }, )
        
        TweenLite.fromTo( '.loading h1', 1, { alpha: 0, delay:1 }, { alpha: 1, delay:2 })

        $( '.loading' ).on( 'click', function() {
            TweenLite.to( '.loading', 0.5, { alpha: 0 })

            setTimeout(() => {
                $( this ).remove()
            }, 500);
        } )
    }

    $( '.heading-expand' ).on( 'mouseenter', function() {
        let $this = $( this )

        $( '.heading' ).each( function() {
            $( this ).removeClass( 'active' ).css( 'width', $( this ).attr( 'data-width' ) );
            $( this ).children().removeClass( 'active' )
        } )

        setTimeout(() => {
            $this.addClass( 'active' )
            $this.parent().addClass( 'active' )
            $this.parent().css( 'width', $this.attr( 'data-max-width' ) );

            $this.siblings( 'div' ).addClass( 'active' )
        }, 0);
    } )

    var slider = function() {
        if ( $('.banner-slider').length !== 0 ) {
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                draggable: true,
                arrows: true,
                dots: false,
                prevArrow: '<span class="prev"><ion-icon name="arrow-back"></ion-icon></span>',
                nextArrow: '<span class="next"><ion-icon name="arrow-forward"></ion-icon></span>',
                // fade: true,
                speed: 900,
                infinite: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                touchThreshold: 100
            })
        }

        if ( $( '.awards-timeline__slider' ).length !== 0 ) {
            $('.awards-timeline__slider').slick({
                // autoplay: true,
                // autoplaySpeed: 3000,
                draggable: true,
                arrows: false,
                // prevArrow: '<span class="prev"><ion-icon name="arrow-back"></ion-icon></span>',
                // nextArrow: '<span class="next"><ion-icon name="arrow-forward"></ion-icon></span>',
                centerMode: true,
                centerPadding: '500px',
                slidesToShow: 1,
                dots: false,
                speed: 900,
                infinite: false,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                touchThreshold: 100,
                responsive: [
                    {
                        breakpoint: 1700,
                        settings: {
                            centerPadding: '400px',
                        }
                    },
                    {
                        breakpoint: 1440,
                        settings: {
                            centerPadding: '250px',
                        }
                    },
                ]
            })
        }
    }

    $( document ).on( 'ready', function () {
        slider();

        $( '.heading' ).each( function() {
            $( this ).removeClass( 'active' ).css( 'width', $( this ).attr( 'data-width' ) );
            $( this ).children().removeClass( 'active' )
        } )
    } )
} )( jQuery )