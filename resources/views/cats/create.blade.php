<x-layout>

    <div class="max-w-lg mx-auto min-h-screen pt-28 px-16 bg-white">

        <header>
            <h2 class="text-2xl">
                Add Cat
            </h2>            
        </header>

        <main class="mt-6">
            <form method="post" action="">

                <div class="mb-2">
                    <label class="block" for="colour">Cat's Name</label>
                    <input type="text" id="first_name" 
                          class="bg-gray-50 border border-gray-300 text-gray-900
                                  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                                  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cat's Name" required>
                </div>

                <div class="mb-2">
                    <label class="block" for="dob">Date of Birth</label>
                    
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div> 
                </div>  

                <div class="mb-2">
                    <label class="block" for="colour">Colour</label>
                  
                    <select id="colour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select Colour</option>
                        <option value="Black">Black</option>
                        <option value="Ginger">Ginger</option>
                        <option value="Grey">Grey</option>
                        <option value="Black and White">Black and White</option>
                    </select>
                                            
                </div>  
                <div class="mb-2">
                    <label class="block" for="colour">Favourite Food</label>
                 
                    <select id="fav-food" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select Favourite Food</option>
                        <option value="Fish">Fish</option>
                        <option value="Chicken">Chicken</option>
                        <option value="Wet">Wet Cat Food</option>
                        <option value="Dry">Dry Cat Food</option>
                    </select>
                </div>    
                <div class="mt-8 flex justify-around">                   
                    <a href="#" class="btn bg-gray-500 text-white min-w-[10rem] py-5" >Back</a>
                    <button class="btn bg-green-500 text-white min-w-[10rem] py-5" type="submit">Add Cat</button>
                </div>                           
            </form>
        </main>

    </div>

</x-layout>