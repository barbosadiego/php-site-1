const menu = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

menu.addEventListener('click', () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
})

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

// Swiper slide --------------------------------

const swiper = new Swiper('.home-slider', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})