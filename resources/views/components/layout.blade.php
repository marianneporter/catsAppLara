<!doctype html>

<title>Cats App Laravel</title>

@vite(['resources/css/app.css', 'resources/js/app.js' ])

<body style="background-image: url('/images/catspawbg2.jpg'); position:relative;">  

    <x-nav />

    <div class="absolute top-20 left-1/3">
        <x-common.message />
    </div>   
    
    <div class="" >
        {{ $slot }}
    </div>     

</body>