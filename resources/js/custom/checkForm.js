export default class CheckForm {

    originalData;
    inputEls;
    form;

    constructor() {
        this.form = document.querySelector('form');

        this.inputEls = document.querySelectorAll('.input-element'); 

        this.originalData = this.stringifyFormFields();   

        this.setupInputListeners();

        this.setupSubmitListener(); 

    }

    setupInputListeners = () => {

        this.inputEls.forEach(function (element, index){

            element.addEventListener("input", function(event){
                console.log("new input handler " +index + "!");
                console.log(event.target);
                let selectedDiv = (event.target.parentElement); 
                let errToRemove = selectedDiv.querySelector('.field-error');
                if (errToRemove) {
                    errToRemove.remove();
                }                                  
            });
        });
    }

    setupSubmitListener = () => {

        document.querySelector('form').addEventListener('submit', (event) => {          

            if (this.formChanged()) {
                console.log('Form Changed!');  // go on to submit
                return true;
            } else {
                console.log('Form Unchanged'); // nothing changed! do warning message and
                                              // do not submit
  
                event.preventDefault();
                return false; 
            }      
           
       })

    }


    stringifyFormFields = () => {   
        return Array.from(this.inputEls).map((el) => el.value).join('');
    }

    formChanged = (currentForm) => {
        let currentData = this.stringifyFormFields(currentForm); 
        console.log('current data: ' + currentData)
        console.log('original data: ' +  this.originalData)
        return currentData !== this.originalData;
    }
}
