//import 'flowbite';
import 'flowbite-datepicker'
import 'flowbite/dist/datepicker.js';

import Datepicker from 'flowbite-datepicker/Datepicker';


//import 'flowbite-datepicker/dist/css/datepicker.css';
//import 'flowbite-datepicker/dist/js/datepicker.js'
//import 'flowbite/dist/datepicker';
//import 'flowbite/dist/datepicker';
//import 'flowbite/dist/flowbite.css';
//import 'flowbite-datepicker/datepicker.css'

import './bootstrap';


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

const datepickerEl = document.getElementById('datepickerId');

if (datepickerEl) {
    console.log('setting datepicker up');
    const today = new Date() 
    const yearsAgo30 = today.getFullYear() - 30;        
    const minDate = new Date(yearsAgo30, 0, 1)
    
    new Datepicker(datepickerEl, {   
        maxDate: new Date(),
        minDate: minDate,
        format: 'd M yyyy',
        autohide: true
    });     
}
