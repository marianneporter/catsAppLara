<nav class="fixed top-0 left-0 min-w-full max-h-[4rem]  bg-blue-900 text-white
                md:flex justify-start items-center">
    <div class="flex justify-between items-center relative z-20 bg-blue-900"  >
        <div class="inline-block text-[1.25rem]  ml-6">Cats App Laravel</div>
        <button id="toggle-nav" class="inline-block md:hidden toggle-nav">           <!-- navbar-toggle -->
            <span class="m-4 mr-5 ml-auto inline-block"><i class="fa fa-bars" aria-hidden="true"></i></span> 
        </button>  
    </div>
    
    <div id="nav-dropdown" class="grow absolute -top-64 transition-[top] duration-1000
                                 left-0 md:static z-10" >
        <div class="md:hidden border-b-2 "></div>  
        <ul class="list-none md:flex column-gap-[1.875rem] items-center grow md:pl-6  bg-blue-900">
                                                
            <li class="nav-li"><a href="/" class="block w-full h-full">Cats List</a></li> 
            <li class="nav-li"><a href="#" class="block w-full h-full">About</a></li> 
            <li class="nav-li"><a href="#" class="block w-full h-full">Contact</a></li> 
            
            <li class="block decoration-0 md:mr-4 md:ml-auto " >
                <div class="md:hidden border-b-2"></div>   
                @auth
                    <div class="md:flex content-center">
                        <div class="hidden md:block md:pt-1"><span>Hello {{ auth()->user()->first_name }}</span></div>  
                        <form method="POST" action={{ route('auth.logout') }}>
                            @csrf
                            <button type="submit"
                                    class="w-full h-full text-white bg-blue-900 border-0  px-7 md:px-4 py-4 md:py-1">Logout</button>
                        </form>
                    </div>                   
                @else
                    <div class="flex flex-col-reverse md:flex-row">
                        <div class="w-full h-full px-7 py-4"><a href={{ route( 'auth.create' ) }}  >Register</a></div>  
                        <div class="md:hidden border-b-[1px]"></div>   
                        <div><a class="block w-full h-full text-white bg-blue-900 border-0  px-7 md:px-4 py-4"
                              href={{ route('auth.login') }}>Login</a></div>
                    </div> 
                @endauth                      
            </li>             
        </ul>   
    </div>

</nav>  

<script type="module">

    addEventListener('DOMContentLoaded', (event) => {
 
        Nav.navAnimation();  
    });  



</script>
