<div class="mb-2">
    <label class="block" for="{{$name}}">{{$title}}</label>
    
    <div class="relative max-w-sm">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
        </div>
        <input id="dobDatepickerId" type="text" class="input-element px-10" placeholder="Select Date" name="{{$dispName}}" value="{{old($dispName)}}">
    </div> 
    <input type="hidden" id="{{$name}}" name="{{$name}}" value="{{ old($name)}}" />
    
    @error($dispName)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror

</div>  