@if ($messageText != null) 
    <div class="status-alert status-success bg-yellow-200 text-yellow-700">
        <p> {{ $messageText }}</p>       
    </div> 
@endif


<script>

    document.addEventListener('DOMContentLoaded', (event) => {
        console.log('in event handler');

        let statusAlert = document.querySelector('.status-alert');
        console.log(statusAlert);

        if (statusAlert) {
            console.log('status alert');
            statusMessageAnimation(statusAlert);
            
        } else {
            console.log('no status alert');
        }
    })


    const statusMessageAnimation = async (statusAlert) => {
        console.log('in statusMessageAnimation');     
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