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

/* Works with the common/select component gets all select elements
   and handles placeholder if required */
document.addEventListener('DOMContentLoaded', (event) => {

    let selectElements = document.querySelectorAll('.select-element');   
    let currentSelection;

    selectElements.forEach((el) => {

        currentSelection = el.selectedIndex; 

        //currentSelection != 0 means no placeholder so all options dark
        if (currentSelection != 0) {    

            el.style.color="#303030";
            
        } else {
            // placeholder option is initally selected and element set 
            // to light gray.  On select of option element is set to dark
            el.style.color="#808080"

            el.querySelectorAll('option').forEach((o) => {
                o.style.color="#303030";
            })

            el.addEventListener('change', (event) => { 
                    event.target.style.color = "#303030";
            }, { once: true})            
        }    
    })
})
