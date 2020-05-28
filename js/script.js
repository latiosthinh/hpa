( function( $ ) {
    const $nav = $( '.main-navigation' );
    var tl = new TimelineLite();

    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    if ( $( 'body' ).hasClass( 'home' ) ) {
        // svg
        TweenLite.from( 'svg', 2, { scale: 5, delay:1 })
        
        // path
        $( '.st0' ).each( function () {
            TweenLite.from( $(this), 2, {  x:getRandomInt(-1000, 1000),y:getRandomInt(-1000, 1000), rotation: 280, delay:1 })
        } )

        TweenLite.from( '.loading h1', 2, { alpha: 0, delay:3 })

        $( '.loading' ).on( 'click', function() {
            TweenLite.to( '.loading', 0.5, { alpha: 0 })

            setTimeout(() => {
                $( this ).remove()
            }, 500);
        } )

        $('.banner-slider').on( 'mousemove', function( e ) {
            $( this ).find( 'h2' ).removeClass( 'active' )
            $( '.slick-active h2' ).addClass( 'active' )

            let x = e.clientX;
            let y = e.clientY;
            let newposX = x - x/8;
            let newposY = y - y/10;

            $( '.slick-active h2' ).css( "transform", "translate3d( " + newposX + "px, " + newposY+"px, 0 )" );
        } ).on( 'mouseleave', function() {
            $( this ).find( 'h2' ).removeClass( 'active' )
        } )
    }

    $( document ).ready( function() {
        $( '.heading' ).each( function() {
            let $this = $( this )
            let dW = $this.width();

            let child = $this.find( '.heading-expand' )

            child.attr( 'data-width', dW + 10 + 'px' )

            setTimeout(() => {
                $this.css( 'width', $this.attr( 'data-width' ) );
            }, 0);
        } )

        slider();
    } )

    $( '.heading-expand' ).on( 'click', function() {
        let $this = $( this )
        $nav.removeClass( 'active' )
        $( '.menu-trigger' ).removeClass( 'active' )
        TweenMax.to(".main-navigation a", 0.15, {
            x: -15, y: 20, alpha: 0
        }, 0.05);

        $( '.heading' ).each( function() {
            $( this ).removeClass( 'active' ).css( 'width', $( this ).attr( 'data-width' ) );
            $( this ).children().removeClass( 'active' )
        } )

        $this.addClass( 'active' )
        $this.parent().addClass( 'active' )
        TweenLite.to( $this.parent(), 0.1, { width: $this.attr( 'data-width' ) })

        $this.siblings( 'div' ).addClass( 'active' )
    } )

    $( '.menu-trigger' ).on( 'click', function() {
        if ( ! $nav.hasClass( 'active' ) ) {
            $( this ).addClass( 'active' )
            $nav.addClass( 'active' );

            setTimeout(() => {
                TweenMax.staggerTo(".main-navigation a", 0.15, {
                    x: 0, y: 0, alpha: 1, delay: 0.2
                }, 0.05);
            }, 0);
            
        } else {
            $( this ).removeClass( 'active' )
            $nav.removeClass( 'active' )
            TweenMax.to(".main-navigation a", 0.15, {
                x: -15, y: 20, alpha: 0
            }, 0.05);
        }
    } )

    var slider = function() {
        if ( $('.banner-slider').length !== 0 ) {
            $('.banner-slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                draggable: true,
                arrows: false,
                dots: false,
                fade: true,
                speed: 900,
                infinite: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                touchThreshold: 100
            })
        }
        
        if ( $( '.projects-slider' ).length !== 0 ) {
            $( '.projects-slider' ).slick( {
                // infinite: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                speed: 2000,
                prevArrow: '<span class="prev"><ion-icon name="arrow-back"></ion-icon></span>',
                nextArrow: '<span class="prev"></span>',
            } )
        }
    }

    // barba.init( {
    //     transitions: [{
    //         name: 'default-transition',
    //         leave() {
    //             // create your stunning leave animation here
    //         },
    //         enter() {
                    
    //         }
    //     }]
    // } );
} )( jQuery )