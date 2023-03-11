<table class="min-w-full mt-6">
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
                    <x-cat.forms.delete-form :cat=$cat />                   
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  