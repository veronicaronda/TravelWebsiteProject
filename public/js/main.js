

// ---------------------Swiper---------------------

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

// ---------------------Flip Effect on Click---------------------

const swiperSlide = document.querySelectorAll('.card')

function flipCard() {

swiperSlide.forEach((slide)=>{
   slide.addEventListener('click',()=>{
    slide.classList.toggle('flipCard');

    
    })
})
}
flipCard()
