<div class="mb-2">
    <label class="block" for="{{$name}}">{{$title}}</label>
    <input type="{{$inputType}}" id="{{$name}}" name="{{$name}}"
            class="input-element px-2.5" placeholder="{{$title}}"   
            @if ($mode == 'Create')
                value = "{{old($name)}}"  
            @else
                value = "{{ old($name, $content) }}"
            @endif >  
    <div class="field-error">
        @error($name)  
           <p class="text-red-500 text-xs">{{$message}}</p> 
        @enderror
    </div>  

</div>
