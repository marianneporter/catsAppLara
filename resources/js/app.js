import './bootstrap';
import { beforeSubmit, createDatepicker } from '../js/cats/create-update';

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

//create-edit elements
const currentUrl  =  window.location.href;
if (currentUrl.includes('create' || 'edit')) {   
    const datepickerEl = document.getElementById('dobDatepickerId'); 
    createDatepicker(datepickerEl);
    const addEditForm = document.querySelector('#add-edit-form');
    
    addEditForm.addEventListener('submit', beforeSubmit());
}


