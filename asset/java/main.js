let Toggole = document.querySelector('.fa-bars');
let Toggole2 = document.querySelector('.fa-xmark');
let my_Menu = document.querySelector('.navbar_menu');

Toggole.addEventListener('click', function() {
    my_Menu.style.display = 'block'; 
    Toggole.style.display = 'none';  
    Toggole2.style.display = 'block';  
});

Toggole2.addEventListener('click', function() {
    my_Menu.style.display = 'none';  
    Toggole.style.display = 'block';  
    Toggole2.style.display = 'none';   
});

// Slider 

const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

showSlide(currentSlide);
setInterval(nextSlide, 5000); // 5 seconds per slide
