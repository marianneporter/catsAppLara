<div class="mb-2">

    <label class="block" for="{{$name}}">{{$title}}</label>   
    <input id="{{$datepickerId}}"
           type="text" name="{{$name}}"
           class="flatpickr input-element" placeholder="select date">
 
    @error($name)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror

    {{$dispDate}}

</div> 

<script type="module">  

    const flatpickrEl = document.querySelector('#dobDatepicker');

    let fp = flatpickr(flatpickrEl, {    
        dateFormat: 'Y-m-d',
        altInput: true,
        altFormat: 'd M Y',
        maxDate: '2023-03-14',
        minDate: '1993-01-14',
        defaultDate: '2022-02-14'        
    });  

</script>