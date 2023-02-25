<x-layout>

    <div class="max-w-lg mx-auto min-h-screen pt-28 px-16 bg-white">

        <header>
            <h2 class="text-2xl">
                Edit Cat
            </h2>            
        </header>
 
        <main class="mt-6">

            <x-cat.forms.add-edit-form mode="Edit" :cat="$cat"  />

        </main>

    </div>

</x-layout>