<div class="mb-2">

    <label class="block" for="{{$type}}">{{$type}}</label>
  
    <select id="{{$type}}" class="input-element px-2.5" name="{{$type}}" >   

        <option hidden value="">Select {{ $type }}</option>    
        @foreach($options as $option)         
            <option value="{{$option}}" @selected(old($type) == $option) >{{$option}}</option>
        @endforeach
 
    </select>
    
    @error($type)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror   
</div>  