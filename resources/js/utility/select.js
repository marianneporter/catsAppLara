export default class Select {
    static selectElements;
    static currentSelection;

    static setupSelectElements() {

        this.selectElements = document.querySelectorAll('.select-element');  

        this.selectElements.forEach((el) => {

            this.currentSelection = el.selectedIndex; 
    
            //currentSelection != 0 means no placeholder so all element text options dark
            if (this.currentSelection != 0) {    
    
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
        });
    }
}
