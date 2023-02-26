<div class="mb-2">
    <label class="block" for="{{$name}}">{{$title}}</label>
    <input type="text" id="{{$name}}" name="{{$name}}"
            class="input-element px-2.5" placeholder="{{$title}}"         
            value= "{{ $mode == 'Create' ? old($name) : $content }}">
    
    @error($name)  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror
</div>
