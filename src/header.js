'use strict';

const navul = document.querySelector('.navul');
const toggle = document.querySelector('.toggle-menu');
const logo = document.querySelector('.logo');


toggle.addEventListener( 'change', function() {
    if(this.checked) {
    navul.style.display = 'flex';
    navul.style.width= '90%';
    logo.style.display = 'none';
    } else {
    navul.style.display = 'none';
    logo.style.display = 'inline-block';      }
});

  