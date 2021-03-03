const menuToggle = document.querySelector('.menu__toggle');
const contenidoMenuMobile = document.querySelector('.header__menu');

menuToggle.addEventListener('click',()=>{
    contenidoMenuMobile.classList.toggle('active');
})