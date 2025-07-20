const swiper = new Swiper('.swiper', {
  loop: true,
  slidesPerView: 3,      // Show 3 cards at a time
  spaceBetween: 20,      // Gap between cards
  centeredSlides: true,  // Center the active card
  autoplay: {
    delay: 2000,         // Slide changes every 3 seconds
    disableOnInteraction: false, // Keep autoplay even after manual swipe
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: { slidesPerView: 3 },
    480: { slidesPerView: 1 },
  },
});
