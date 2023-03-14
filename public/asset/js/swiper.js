var swiper = new Swiper(".mySwiprer-blog", {
  slidesPerView: 3,
  spaceBetween: 30,

  breakpoints: {

    350 : {
      slidesPerView : 1,
    },
    400 :  {
      slidesPerView : 1,
    },

    425 :  {
      slidesPerView : 1,
    } ,

    635 : {
      slidesPerView: 1,
    },

    640: {
      slidesPerView: 1,
    },

    737 : {
      slidesPerView: 1,
    },

    750 : {
      slidesPerView: 2,
    },

    1999: {
      slidesPerView: 2,
    },

    1200: {
      slidesPerView: 3,
    },
   
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});



// thumbs-gallery 


    var swiper = new Swiper(".swiper-thumb", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper = new Swiper(".detail-swiper", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  

    // detail products 

    var swiper = new Swiper(".swiper-product", {
      slidesPerView: 4,
      spaceBetween: 30,
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true,
      // },

      breakpoints : {

        300: {
          slidesPerView : 1 ,
        },
        425 : {
          slidesPerView : 1 ,
        },
        767: {
          slidesPerView : 1 ,
        },
        768: {
          slidesPerView : 2 ,
        },
        989: {
          slidesPerView : 2 ,
        },
        993: {
          slidesPerView : 3
        },
        1000: {
          slidesPerView : 3
        },
        1024 : {
          slidesPerView : 3
        },
        1200 : {
          slidesPerView : 4
        }
      }

    });