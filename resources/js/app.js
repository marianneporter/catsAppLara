import './bootstrap';
import flatpickr from "flatpickr";

//navbar toggle
document.querySelector('#toggle-nav').addEventListener('click', () => {  
    const navDropdown = document.querySelector('#nav-dropdown');
  
    if (navDropdown.classList.contains('-top-64')) { 
        navDropdown.classList.remove('-top-64');
        navDropdown.classList.add('top-14');
    } else { 
        navDropdown.classList.remove('top-14');
        navDropdown.classList.add('-top-64');        
    }
}) 

/* Remove placeholder colour from selects once option has been selected */
document.addEventListener('DOMContentLoaded', (event) => {
    let selectElements = document.querySelectorAll('.select-element');

    selectElements.forEach((el) => {
        el.addEventListener('change', (event) => { 
            event.target.style.color = "#303030";
        }, { once: true})
    })
})
