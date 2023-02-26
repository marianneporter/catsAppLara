<x-layout>
    
    <div class="max-w-4xl mx-auto min-h-screen pt-28 px-16 bg-white ">
        <h1 class="text-3xl font-bold mb-5">Cats</h1>
        <a href={{ route('cats.create') }} class="btn bg-blue-500 text-white mr-5 ml-auto">Add Cat</a>
        

        @unless($cats->count() == 0) 
            <table class="min-w-full">
                <thead class="border-b">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Date of Birth</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Colour</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Favourite Food</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($cats as $cat)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-600">{{$cat->name}}</td>
                            <td class="text-sm text-gray-600 font-medium px-6 py-4 whitespace-nowrap">{{convertDbDateToDispFormat($cat->dob)}}</td>                       
                            <td class="text-sm text-gray-600 font-medium px-6 py-4 whitespace-nowrap">{{$cat->colour}}</td>                       
                            <td class="text-sm text-gray-600 font-medium px-6 py-4 whitespace-nowrap">{{$cat->fav_food}}</td>
                            <td class="text-sm text-gray-600 font-medium px-3 py-4 whitespace-nowrap">
                                <a href="{{ route('cats.edit', $cat->id) }}" class="btn bg-blue-500  text-white inline-block">Edit</a>                             
                            </td>
                            <td class="text-sm text-gray-600  px-3 py-4 whitespace-nowrap">
                                <a href="#" class="btn bg-red-500 text-white inline-block" >Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        
        @else
            <h3>Sorry! No cats were found
        @endunless
    </div>




</x-layout>
