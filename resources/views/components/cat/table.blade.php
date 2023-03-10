<table class="min-w-full">
    <thead class="border-b">
    <tr>
        <th scope="col" class="text-sm font-medium text-gray-900  text-left w-40">Name</th>
        <th scope="col" class="text-sm font-medium text-gray-900  text-left w-28">Date of Birth</th>
        <th scope="col" class="text-sm font-medium text-gray-900 text-left w-24">Colour</th>
        <th scope="col" class="text-sm font-medium text-gray-900 text-left w-24">Favourite Food</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
            <tr class="bg-white border-b">
                <td class="py-4 whitespace-nowrap text-sm font-medium text-gray-600 w-40">{{$cat->name}}</td>
                <td class="text-sm text-gray-600 font-medium w-28">{{convertDbDateToDispFormat($cat->dob)}}</td>                       
                <td class="text-sm text-gray-600 font-medium w-24">{{$cat->colour}}</td>                       
                <td class="text-sm text-gray-600 font-medium w-24">{{$cat->fav_food}}</td>
                <td class="text-sm text-gray-600 font-medium w-20 ml-12" >
                    <a href="{{ route('cats.edit', $cat->id) }}" class="btn bg-blue-500 text-white inline-block ">Edit</a>                             
                </td>
                <td class="text-sm text-gray-600 w-20" >
                    <form method="POST" action="{{ route('cats.destroy', $cat->id) }}"
                            class="delete-form"                                   
                            data-cat-name="{{$cat->name}}"
                            onclick="return confirm('Are your sure you would like to delete ' +  getName(event) + '?')" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="delete-submit" 
                                class="btn bg-red-500 text-white inline-block"
                                data-name="{{$cat->name}}">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  

<script>
    const getName = (event) => event.target.dataset.name;    
</script>
