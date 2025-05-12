const nav = document.querySelector('header');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 150) {
        nav.classList.add('active-header');
    }   else {
            nav.classList.remove('active-header');
    }
})

  $(function(){
        waypoints( );
   });

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  direction: 'horizontal',
  spaceBetween: 0,
  loop: true,
  centeredSlides:true,
  watchSlidesProgress:true,
  navigation: {
    nextEl: '#projects-showcase .swiper-button-next',
    prevEl: '#projects-showcase .swiper-button-prev',
  },
  
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    480: {
      slidesPerView:1,
    },
    // when window width is >= 640px
    640: {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
    }
  },
  on: {
    slideChangeTransitionEnd: function() {
     
    }
  },
})


function waypoints( ) {

    $( '.way-point:not(.way-point-ready)' ).each( function( ) {
        $( this ).waypoint( function( ) {
            $( this.element ).addClass( 'shown' );
        }, {
            offset: '90%'
        } );
        $( this ).addClass( 'way-point-ready' );
    });
 
}