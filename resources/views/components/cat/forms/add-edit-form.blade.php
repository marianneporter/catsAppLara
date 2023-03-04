<form method="POST"
      action={{ $mode == "Create"
                ?  route('cats.store') : route('cats.update', $cat->id)}}
      autocomplete="off" novalidate
      id="add-edit-form">

    @csrf   

    @if ($mode == 'Edit')
        @method('PUT')
    @endif
  

    <x-common.form-elements.input name="name"
                                  :title="$nameTitle"
                                  :mode="$mode"                                
                                  :content="$cat->name"  />   

    <x-common.form-elements.datepicker name="dob"                                   
                                       :title="$dobTitle"
                                       :mode="$mode" 
                                       :content="$cat->dob"
                                       :minDate="$minDob"
                                       :maxDate="$maxDob" />

    <x-common.form-elements.select name="colour"                                  
                                   :options="$colours"
                                   :title="$colourTitle"
                                   :mode="$mode"
                                   :content="$cat->colour" />   

    <x-common.form-elements.select name="fav_food"
                                  :options="$favFoods"
                                  :title="$favFoodTitle" 
                                  :mode="$mode"
                                  :content="$cat->fav_food" /> 

    <div class="mt-8 flex justify-around">                   
        <a href="#" class="btn bg-gray-500 text-white min-w-[10rem] py-5" >Cancel</a>
        <button class="btn bg-green-500 text-white min-w-[10rem] py-5" type="submit">{{ $mode }} Cat</button>
    </div>                           
</form>

<script type="module">

    addEventListener('DOMContentLoaded', (event) => {
     
        let formStatusCheck = new CheckForm();   

        window.onbeforeunload = function() {

            if (formStatusCheck.submitted || !formStatusCheck.formChanged()) {
                return;
            }    

            return 'Do you really want to leave this page? Changes may not be saved';
         };
    });  

</script>