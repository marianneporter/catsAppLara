<x-layout>
    
    <div class="lg:max-w-4xl mx-auto min-h-screen pt-28 px-4  lg:px-12 bg-white ">
        <h1 class="text-3xl font-bold mb-5">Cats</h1>
        <a href={{ route('cats.create') }} class="btn btn-lg bg-blue-500 text-white mr-5 ml-auto">Add Cat</a>
        

        @unless($cats->count() == 0) 
            <div class="hidden lg:block">
                <x-cat.table :cats=$cats />
            </div>   
            <div class="lg:hidden">
                <x-cat.cards :cats=$cats />
            </div>
    
            <div class="mx-auto mt-12 pb-10 w-4/5">
                {{ $cats->links() }}
            </div>          
           

        @else
            <h3>Sorry! No cats were found
        @endunless
     
    </div>
    
</x-layout>

