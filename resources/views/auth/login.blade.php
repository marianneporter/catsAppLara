<x-layout>

    <div class="small-container">

        <header>
            <h2 class="text-2xl">
                Login
            </h2>            
        </header>
 
        <main class="mt-6">
            <form method="POST"
                action={{ route('auth.authenticate') }}
                autocomplete="off" novalidate >
      
                @csrf  
                <div class="mb-2">
                    <label class="block" for="email">Email</label>
                    <input type="text" id="email" name="email"
                            class="input-element px-2.5"   
                            value="{{old('email')}}"
                            autocomplete="one-time-code" >  
                    <div class="field-error">
                        @error('email')  
                           <p class="text-red-500 text-xs">{{$message}}</p> 
                        @enderror
                    </div>  
                </div>
 
                <div class="mb-2">
                    <label class="block" for=password">Password</label>
                    <input type="password" id="password" name="password"
                            class="input-element px-2.5"     
                            value="{{old('password')}}"
                            autocomplete="one-time-code">  
                    <div class="field-error">
                        @error('password')  
                           <p class="text-red-500 text-xs">{{$message}}</p> 
                        @enderror
                    </div>  
                </div> 

                <div class="mt-8 ">                 
                    <button class="btn btn-shadow bg-green-500 text-white 
                                   min-w-full md:min-w-[10rem] py-[1.33rem]"                     
                            type="submit">Login</button>
                </div>                           
            </form>       
        </main>
    </div>

</x-layout>