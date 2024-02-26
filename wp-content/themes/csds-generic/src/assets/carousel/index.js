( function( $ ) {
    class SlickCarousel {
      constructor() {
        this.initiateCarousel();
        console.log('hello there');
      }
  
      initiateCarousel() {
        console.log('hello there 2');
        $( '.posts-slick' ).slick( {
          autoplay: true,
          autoplaySpeed: 7000,
          slidesToShow: 1,
          slidesToScroll: 1,
        } );
      }
    }
  
    new SlickCarousel();
  
  } )( jQuery );



