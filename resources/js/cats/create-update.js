import 'flowbite-datepicker'
import 'flowbite/dist/datepicker.js';
import  FlowbiteDatepicker from 'flowbite-datepicker/Datepicker';

import { dispDateToYYYYMMDD } from "../../js/dates";

export const beforeSubmit = () => {
  
    window.formatCreateUpdateFields = () => {          
        const dateDispFormat = document.querySelector('#dobDatepickerId').value;
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
        
        new FlowbiteDatepicker(datepickerEl, {   
            maxDate: new Date(),
            minDate: minDate,
            format: 'd M yyyy',
            autohide: true
        });            
    }     
}
