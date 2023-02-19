<form method="post" action="/cats" autocomplete="off" onsubmit="return formatCreateUpdateFields()">
    @csrf
    @method($method)

    <div class="mb-2">
        <label class="block" for="colour">Cat's Name</label>
        <input type="text" id="name" name="name"
               class="input-element px-2.5" placeholder="Cat's Name"
               value="{{old('name')}}">
        
        @error('name')  
            <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
        @enderror
    </div>

    <div class="mb-2">
        <label class="block" for="dob">Date of Birth</label>
        
        <div class="relative max-w-sm">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
            </div>
            <input id="datepickerId" type="text" class="input-element px-10" placeholder="Select date" name="disp_dob" value="{{old('disp_dob')}}">
        </div> 
        <input type="hidden" id="dob" name="dob" value="{{ old('dob')}}" />
        
        @error('disp_dob')  
            <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
        @enderror

    </div>  

    <x-cat.forms.select type="colour"></x-cat.forms.select>

    <div class="mb-2">
        <label class="block" for="fav_food" >Favourite Food</label>
     
        <select id="fav_food" class="input-element px-2.5" name="fav_food" value="{{old('fav_food')}}" >
            <option  hidden value="">Select Favourite Food</option>
            <option value="Fish" @selected(old('fav_food') == "Fish") >Fish</option>
            <option value="Chicken" @selected(old('fav_food') == "Chicken") >Chicken</option>
            <option value="Wet Cat Food" @selected(old('fav_food') == "Wet Cat Food")>Wet Cat Food</option>
            <option value="Dry Cat Food" @selected(old('fav_food') == "Dry Cat Food")>Dry Cat Food</option>
        </select>
                            
        @error('fav_food')  
            <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
        @enderror
    </div> 

    <div class="mt-8 flex justify-around">                   
        <a href="#" class="btn bg-gray-500 text-white min-w-[10rem] py-5" >Back</a>
        <button  type="submit" type="submit">{{ $mode }} Cat</button>
    </div>                           
</form>