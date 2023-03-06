<x-layout>

    <div class="max-w-lg mx-auto min-h-screen pt-28 px-16 bg-white">

        <header>
            <h2 class="text-2xl">
                Register
            </h2>            
        </header>
 
        <main class="mt-6">
            <form method="POST"
                action={{route('auth.store') }}
                autocomplete="off" novalidate >
      
                @csrf  

                <x-common.form-elements.input name="email"
                                              title="Email"
                                              mode="Create" />                  

                <x-common.form-elements.input name="first_name"
                                              title="First Name"
                                              mode="Create" />   

                <x-common.form-elements.input name="last_name"
                                              title="Last Name"
                                              mode="Create"  />   

                <x-common.form-elements.input name="password"
                                              title="Password"
                                              mode="Create"                                           
                                              input-type="password"  />   

                <x-common.form-elements.input name="password_confirmation"
                                              title="Confirm Password"
                                              mode="Create"                                   
                                              input-type="password"  />    

            <div class="mt-8 ">                 
                <button class="btn bg-green-500 text-white min-w-[10rem] py-5" type="submit">Register</button>
            </div>                           
      </form>            
            

        </main>

    </div>

</x-layout>