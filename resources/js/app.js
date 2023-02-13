import 'flowbite';
import 'flowbite/dist/datepicker';

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

