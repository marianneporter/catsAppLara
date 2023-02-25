import flatpickr from "flatpickr";

export const datepicker = () => {
          
    const flatpickrEl = document.querySelector('#dobDatepicker');
 
    let fp = flatpickr(flatpickrEl, {    
        dateFormat: 'Y-m-d',
        altInput: true,
        altFormat: 'd M Y',
        maxDate: '2023-03-14',
        minDate: '1993-01-14',
        defaultDate: '2022-02-14'        
    });   

}