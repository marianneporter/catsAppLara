@if ($messageText != null) 
    <div class="status-alert {{ $typeClass }}">
        <p> {{ $messageText }}</p>       
    </div> 
@endif


<script type="module">

    document.addEventListener('DOMContentLoaded', (event) => {

        let statusAlert = document.querySelector('.status-alert'); 

        if (statusAlert) {        
            const serverMsg = new MessageAnimate();
            serverMsg.messageAnimation(statusAlert);            
        } 
    })    

</script>