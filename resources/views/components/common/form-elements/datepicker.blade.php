<div class="mb-2">

    <label class="block" for="{{$name}}">{{$title}}</label>   
    <input id="{{$datepickerId}}"
           type="text" name="{{$name}}"
           class="flatpickr input-element" placeholder="select date">
 
    @error($name)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror

</div> 

<script type="module">    
 
    const content = {!! json_encode($content) !!};
    const minDate = {!! json_encode($dpMinDate) !!};
    const maxDate = {!! json_encode($dpMaxDate) !!};

    const flatpickrEl = document.querySelector('#dobDatepicker');

    let fp = flatpickr(flatpickrEl, {    
        dateFormat: 'Y-m-d',
        altInput: true,
        altFormat: 'd M Y',
        maxDate: maxDate,
        minDate: minDate,
        defaultDate: content     
    });  

</script>