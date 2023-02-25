<form method="POST" action="/cats" autocomplete="off" 
      id="add-edit-form">
    @csrf
    @method($method)

    <x-common.form-elements.input name="name"
                                  :title="$nameTitle"
                                  :mode="$mode"                                
                                  :content="$cat->name"  />   

    <x-common.form-elements.datepicker name="dob"                                   
                                       :title="$dobTitle"
                                       :mode="$mode" 
                                       :content="$cat->dob"/>

    <x-common.form-elements.select name="colour"
                                   :options="$colours"
                                   :title="$colourTitle"
                                   :mode="$mode" />   

    <x-common.form-elements.select name="fav_food"
                                  :options="$favFoods"
                                  :title="$favFoodTitle" 
                                  :mode="$mode" /> 

    <div class="mt-8 flex justify-around">                   
        <a href="#" class="btn bg-gray-500 text-white min-w-[10rem] py-5" >Back</a>
        <button class="btn bg-green-500 text-white min-w-[10rem] py-5" type="submit" type="submit">{{ $mode }} Cat</button>
    </div>                           
</form>