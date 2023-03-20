<x-layout>

    <div class="add-edit-container">

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