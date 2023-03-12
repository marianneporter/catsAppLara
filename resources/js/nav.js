export default class Navigation {
    static navDropdown;

    static navAnimation() {
        document.querySelector('.toggle-nav').addEventListener('click', () => {           
            this.navDropdown = document.querySelector('#nav-dropdown');
          
            if (this.navDropdown.classList.contains('-top-64')) { 
                this.navDropdown.classList.remove('-top-64');
                this.navDropdown.classList.add('top-14');
            } else { 
                this.navDropdown.classList.remove('top-14');
                this.navDropdown.classList.add('-top-64');        
            }
        })         
    }
}