// caixa preocurar
let searchBtn = document.querySelector('#search-btn');
let seacrhBar = document.querySelector('.search-bar-container');
// modal login
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let FormClose = document.querySelector('#form-close');
//modal cadastro
let cadBtn = document.querySelector('#cadform');
let cadaform = document.querySelector('.login-cadastro-container') 
let fechaForm = document.querySelector('#form-close-cad');
// toggle dos menu
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
// barra do videos
let videoBtn = document.querySelectorAll('.vid-btn')

// função do scroll 
window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    seacrhBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}
searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    seacrhBar.classList.toggle('active');
});
// função toggle menu
menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

// funcao oculta e aparece modal
formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

FormClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});
//função modal cad

cadBtn.addEventListener('click', () =>{
    cadaform.classList.add('active');
});

fechaForm.addEventListener('click', () =>{
    cadaform.classList.remove('active');
});
// barra do video
videoBtn.forEach(btn =>{
    btn.addEventListener('click',()=>{
        document.querySelector('.controls .active').classList.remove('active')
        btn.classList.add('active')
        let src = btn.getAttribute('data-src')
        document.querySelector('#video-slider').src = src;
    })
});

//inicia o carrousel

var swiper = new Swiper(".review-slider", {
    spaceBetween:20,
    loop:true,
    autoplay:{
        delay:2500,
        disableOnInteraction:false,
    },
    breakpoints:{
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },

    },
});
