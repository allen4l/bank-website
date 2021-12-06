'use strict';


//tabbed container

const tabs = document.querySelectorAll('.operations__tab');
const tabsContainer = document.querySelector('.operations__tab-container');
const tabsContent = document.querySelectorAll('.operations__content');
const miscCheck = document.querySelector('.miscellaneous');

// console.log(miscCheck.style.minHeight);
// miscCheck.style.minHeight = document
// .querySelector(`.operations__content--active`).scrollHeight + "px";
// console.log(miscCheck.style.minHeight);


tabsContainer.addEventListener('click', function (e) {
    const clicked = e.target.closest('.operations__tab');
  
    // Guard clause
    if (!clicked) return;
  
    // Remove active classes
    tabs.forEach(t => t.classList.remove('operations__tab--active'));
    tabsContent.forEach(c => c.classList.remove('operations__content--active'));
  
    // Activate tab
    clicked.classList.add('operations__tab--active');
  
    // Activate content area
    document
      .querySelector(`.operations__content--${clicked.dataset.tab}`)
      .classList.add('operations__content--active');

      miscCheck.style.minHeight = document
      .querySelector(`.operations__content--${clicked.dataset.tab}`).scrollHeight + "px";

  });