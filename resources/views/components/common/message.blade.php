@if ($messageText != null) 
    <div class="status-alert {{ $typeClass }}">
        <p> {{ $messageText }}</p>       
    </div> 
@endif


<script>

    document.addEventListener('DOMContentLoaded', (event) => {

        let statusAlert = document.querySelector('.status-alert'); 

        if (statusAlert) {
        
            statusMessageAnimation(statusAlert);
            
        } 
    })

    const statusMessageAnimation = async (statusAlert) => {
      
        await sleep(500);
        doAnimation(statusAlert, 'not-visible', 'visible');  
        await sleep(6000);
        doAnimation(statusAlert, 'visible', 'not-visible');    
    }

    const doAnimation =  (statusAlert, removeClass, addClass) => { 
        statusAlert.classList.remove(removeClass);
        statusAlert.classList.add(addClass);     
    }

    const sleep = async (timeDelay) => {
        return new Promise((resolve) => {
            let timeoutId = setTimeout(() => resolve(true), timeDelay);       
        })
    }

</script>