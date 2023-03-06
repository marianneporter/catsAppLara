<nav class="fixed top-0 left-0 min-w-full max-h-[4rem]  bg-blue-900 text-white
                md:flex justify-start items-center">
    <div class="flex justify-between items-center relative z-20 bg-blue-900"  >
        <div class="inline-block text-[1.25rem]  ml-6">Cats App Laravel</div>
        <button id="toggle-nav" class="inline-block md:hidden">           <!-- navbar-toggle -->
            <span class="m-4 mr-5 ml-auto inline-block"><i class="fa fa-bars" aria-hidden="true"></i></span> 
        </button>  
    </div>
    
    <div id="nav-dropdown" class="grow absolute -top-64 transition-[top] duration-1000
                                 left-0 md:static z-10" >
        <div class="md:hidden border-b-2 "></div>  
        <ul class="list-none md:flex column-gap-[1.875rem] items-center grow md:py-4 md:px-6 ">
                                                
            <li class="block decoration-0 w-screen md:w-fit px-7 md:px-4 py-4 bg-blue-900 hover:bg-blue-500"><a href="/">Cats List</a></li> 
            <li class="block decoration-0 w-screen md:w-fit px-7 md:px-4 py-4 bg-blue-900 hover:bg-blue-500">About</li> 
            <li class="block decoration-0 w-screen md:w-fit px-7 md:px-4 py-4 bg-blue-900 hover:bg-blue-500"><a href="#">Contact</a></li> 
            
            <li class="block decoration-0 md:mr-4 md:ml-auto  bg-blue-900" >
                <div class="md:hidden border-b-2"></div>   
                @auth
                    <div class="hidden md:block"><a href="">Hello {{ auth()->user()->first_name }}</a></div>  
                    <form method="POST" action={{ route('auth.logout') }}>
                        @csrf
                        <button type="submit" class="text-white bg-blue-900 border-0  px-7 md:px-4 py-4 md:py-1">Logout</button>
                    </form>
                   
                @else
                    <div class="hidden md:block"><a href={{ route( 'auth.create' ) }}>Register</a></div>  
                    <div><a class="text-white bg-blue-900 border-0  px-7 md:px-4 py-4 md:py-1"
                          href={{ route('auth.login') }}>Login</a></div>
                @endauth      

                
            </li>             
        </ul>   
    </div>

</nav>  
