<div class="mb-2">
    <label class="block" for="{{$name}}">{{$title}}</label>
    <input type="{{$inputType}}" id="{{$name}}" name="{{$name}}"
            class="input-element px-2.5" placeholder="{{$title}}"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
        @if ($mode == 'Create')
            value = "{{old($name)}}"  
        @else
            value = "{{ old($name, $content) }}"
        @endif 
        @if ($auth == 'true')
            autocomplete="one-time-code"           
        @endif >                      
        @error($name)  
           <p class="text-r                  ed-500 text-xs">{{$message}}</p> 
        @enderror
    </div>                                                                                                    
</div>
