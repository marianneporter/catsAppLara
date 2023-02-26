<div class="mb-2">

    <label class="block" for="{{$name}}">{{$title}}</label>
  
    <select  class='input-element select-element px-2.5'
             name="{{$name}}" >   

        <option hidden value="" ><span>Select {{ $title }}</span></option>  
          
        @foreach($options as $option)         
            <option value="{{$option}}"
         
                @if ($mode == 'Create') 
                     @selected(old($name) == $option)
                @else
                     @selected($content == $option)    
                @endif                
            >                
                {{$option}}
            </option>
        @endforeach
 
    </select>
    
    @error($name)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror   
</div>  