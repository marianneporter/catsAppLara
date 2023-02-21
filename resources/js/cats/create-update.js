import 'flowbite-datepicker'
import 'flowbite/dist/datepicker.js';
import Datepicker from 'flowbite-datepicker/Datepicker';

import { dispDateToYYYYMMDD } from "../../js/dates";

export const beforeSubmit = () => {
    console.log('in before submit');
    window.formatCreateUpdateFields = () => {          
        const dateDispFormat = document.querySelector('#datepickerId').value;
        const dob = document.querySelector('#dob');      
        dob.value=dispDateToYYYYMMDD(dateDispFormat);      
        return true;
    }
}

export const createDatepicker = (datepickerEl) => {   
   
    if (datepickerEl) {
    
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
}



