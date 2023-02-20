<div class="mb-2">

    <label class="block" for="{{$name}}">{{$title}}</label>
  
    <select id="{{$name}}" class="input-element px-2.5" name="{{$name}}" >   

        <option hidden value="">Select {{ $title }}</option>  
          
        @foreach($options as $option)         
            <option value="{{$option}}" @selected(old($name) == $option) >{{$option}}</option>
        @endforeach
 
    </select>
    
    @error($name)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror   
</div>  