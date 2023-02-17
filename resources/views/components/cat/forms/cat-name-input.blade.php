<div class="mb-2">
    <label class="block" for="colour">Cat's Name</label>
    <input type="text" id="name" name="name"
           class="input-element px-2.5" placeholder="Cat's Name"
           value="{{old('name')}}">
    
    @error('name')  
        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
    @enderror
</div>