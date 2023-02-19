<x-layout>

    <div class="max-w-lg mx-auto min-h-screen pt-28 px-16 bg-white">

        <header>
            <h2 class="text-2xl">
                Add Cat
            </h2>            
        </header>

        <div>
          
            @if ($errors->any()) 
                @foreach($errors->all() as $error) 
                    <p>{{ $error }}</p>
                @endforeach
            @endif
         
        </div>

        <main class="mt-6">

            <x-cat.forms.add-edit-form mode="Add" method="POST" />

        </main>

    </div>

</x-layout>