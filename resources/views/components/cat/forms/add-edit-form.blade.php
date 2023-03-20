<form method="POST"
      action={{ $mode == "Create"
                ?  route('cats.store') : route('cats.update', $cat->id)}}
      autocomplete="off" novalidate     
      id="form">

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
        <a href={{ route('cats.list') }} class="btn btn-shadow bg-gray-500 text-white md:min-w-[8rem] py-5" >Cancel</a>
        <button class="btn btn-shadow bg-green-500 text-white md:min-w-[8rem]  py-5" type="submit">{{ $mode }} Cat</button>
    </div>                           
</form>

<script type="module">

    addEventListener('DOMContentLoaded', (event) => {

        SelectEls.setupSelectElements();
     
        let formStatusCheck = new CheckForm();   

        window.onbeforeunload = function() {  
            if (!formStatusCheck.submitted && formStatusCheck.formChanged() ) {            
                return 'Do you really want to leave this page? Changes may not be saved';
            }      
        };
    });  
  
   

</script>