<form method="post" action="/cats" autocomplete="off" 
      id="add-edit-form" onsubmit="return formatCreateUpdateFields()">
    @csrf
    @method($method)

    <div class="mb-2">
        <label class="block" for="name">Cat's Name</label>
        <input type="text" id="name" name="name"
               class="input-element px-2.5" placeholder="Cat's Name"
               value="{{old('name')}}">
        
        @error('name')  
            <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
        @enderror
    </div>

    <x-common.form-elements.datepicker name="dob"  />

    <x-common.form-elements.select name="colour" :options="$colours" :title="$colourTitle" />   

    <x-common.form-elements.select name="fav_food" :options="$favFoods" :title="$favFoodTitle" /> 

    <div class="mt-8 flex justify-around">                   
        <a href="#" class="btn bg-gray-500 text-white min-w-[10rem] py-5" >Back</a>
        <button class="btn bg-green-500 text-white min-w-[10rem] py-5" type="submit" type="submit">{{ $mode }} Cat</button>
    </div>                           
</form>