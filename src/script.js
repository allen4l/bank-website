'use strict';

//Slider
const slider = function () {
const slides = document.querySelectorAll('.slide');
const sliderDiv = document.querySelector('.slider');
const btnLeft = document.querySelector('.slider__btn--left');
const btnRight = document.querySelector('.slider__btn--right');
const dotContainer = document.querySelector('.dots');
let curSlide = 0;
const maxSlides = slides.length;
const privPersDiv = document.querySelector('.privPersDiv');

const createDots = function () {
    slides.forEach(function (_, i) {
        dotContainer.insertAdjacentHTML(
          'beforeend',
          `<button class="dots__dot" data-slide="${i}"></button>`
        );
      });
}

const activateDot = function(slide) {
    document.querySelectorAll('.dots__dot').forEach(dot => dot.classList.remove('dots__dot--active'))
    document.querySelector(`.dots__dot[data-slide="${slide}"]`).classList.add('dots__dot--active');
}


const goToSlide = function(slide) {
    slides.forEach((s, i) => (s.style.transform = `translateX(${100 * (i-slide)}%)`));
    
}


//Next Slide
const nextSlide = function () {
    if (curSlide === maxSlides - 1) {curSlide = 0}
    else {curSlide++;}
    
    goToSlide(curSlide);
    activateDot(curSlide);
}

const prevSlide = function () {
    if (curSlide === 0) {curSlide = maxSlides-1;}
    else {curSlide--;}
    goToSlide(curSlide);
    activateDot(curSlide);

}

const init = function () {
    createDots();
    goToSlide(0);
    activateDot(0);
    /*slides.forEach( function (s, i) {
        s.style.transition = `transform 1s`;
            })*/
     }
init();

//Event handlers
btnRight.addEventListener('click', nextSlide);
btnLeft.addEventListener('click', prevSlide);
document.addEventListener('keydown', function(e){
    if (e.key === 'ArrowRight') nextSlide();
    if (e.key === 'ArrowLeft') prevSlide();
})
window.addEventListener("load", function(){
    slides.forEach( function (s, i) {
        s.style.transition = `transform 1s`;
        console.log('the page has loaded')
            })
});

sliderDiv.addEventListener("mouseover", function()
    {
        privPersDiv.style.opacity = '1';
        sliderDiv.style.marginTop= '1rem';
    });

sliderDiv.addEventListener("mouseout", function()
    {
        privPersDiv.style.opacity = '0';
        sliderDiv.style.marginTop= '-1.5rem';
    });

dotContainer.addEventListener('click', function(e) {
    if(e.target.classList.contains('dots__dot')) {
        const slide = e.target.dataset.slide;
        goToSlide(slide);
        activateDot(slide); 
    }
})

};
slider();

//wrapper

const wrapper = document.querySelector('.wrapper');
const corpDiv = document.querySelector('.corporateDiv');
wrapper.addEventListener("mouseover", function()
    {
        corpDiv.style.opacity = '1';
        wrapper.style.marginTop= '1rem';
    });
wrapper.addEventListener("mouseout", function()
    {
        corpDiv.style.opacity = '0';
        wrapper.style.marginTop= '-1rem';}
    );


