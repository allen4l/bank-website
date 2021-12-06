'use strict';

const dropDown = document.getElementById('d');
const options = document.getElementById('o');
const input = document.getElementById('v');
const allAttributes = document.querySelectorAll(".attr-value");
const allRebutmentDocs = document.querySelectorAll(".rebut-value");

const dropMain = document.getElementById('main');
const li = document.getElementById('ul');

dropDown.addEventListener('click', function() {
    this.classList.toggle('show');
})

options.addEventListener('click', function(event) {
    const listItem = event.target;
    dropMain.style.height=listItem.offsetHeight + "px";
    li.innerHTML  = listItem.innerHTML;

    
    allAttributes.forEach(attr => {
        attr.classList.remove('attr-active')
        if (attr.dataset.foreign === listItem.dataset.attribute)
        {
            attr.classList.add('attr-active')
        }
    })

    allRebutmentDocs.forEach(attr => {
        attr.classList.remove('attr-active')
        if (attr.dataset.foreign === listItem.dataset.attribute)
        {
            attr.classList.add('attr-active')
        }
    })
})