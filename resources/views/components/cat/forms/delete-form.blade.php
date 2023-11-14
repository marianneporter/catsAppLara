<form method="POST"
      action="{{ route('cats.destroy', $cat->id) }}"
      class="delete-form"                                   
      data-name="{{$cat->name}}"
      onclick="return confirm('Are you sure you would like to delete ' +  CatIndex.getNameFromEvent(event) + '?')" >

      @csrf
      @method('DELETE')

      <button type="submit" id="delete-submit" 
              class="btn btn-shadow bg-red-500 text-white inline-block"
              data-name="{{$cat->name}}">Delete</button>
</form>
