/******************************************************************************************************************/
/*  class that works behind all forms in the application.                                                         */
/*  it has the following functionality.                                                                           */
/*    1. records the original state of the form.                                                                  */
/*    2. checks if data on the form has been altered                                                              */
/*    3. uses the message animate class to animate message if form empty and user tries to submit it.             */
/*    4. watches input fields and error divs so that error messages are removed immediatelyu the user             */
/*       starts to type in them.                                                                                  */ 
/******************************************************************************************************************/
import MessageAnimate from "./messageAnimate";

export default class CheckForm {

    originalData;
    inputEls;
    form;
    messageAnimate;
    errorDiv;
    submitted;

    constructor() {
        this.form = document.querySelector('form');

        this.inputEls = document.querySelectorAll('.input-element'); 

        this.originalData = this.stringifyFormFields();   

        this.setupInputListeners();

        this.setupSubmitListener(); 

        this.message = new MessageAnimate();

        this.submitted = false;

    }

    setupInputListeners = () => {

        this.inputEls.forEach(function (element, index){

            element.addEventListener("input", function(event) {  

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
                this.submitted = true;        
                return true;
            } else {
                this.createErrorDiv('Please amend form or cancel', 'warning');             
                this.message.messageAnimation(this.errorDiv)
                event.preventDefault();
                return false; 
            }               
       })
    }

    stringifyFormFields = () => {   
        return Array.from(this.inputEls).map((el) => el.value).join('');
    }

    formChanged = () => {

        let currentData = this.stringifyFormFields(this.form); 
        return currentData !== this.originalData;
    }

    createErrorDiv = (message, messageType) => {

        this.errorDiv = document.createElement("div");
        this.errorDiv.classList.add('status-alert', `status-${messageType}`);
        const messagePara = document.createElement('p');
        messagePara.innerText = message; 
        this.errorDiv.appendChild(messagePara);

        document.querySelector('.content').appendChild(this.errorDiv);

    }
}
