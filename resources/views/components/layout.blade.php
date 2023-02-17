<!doctype html>

<title>Cats App Laravel</title>

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/cats/create-update.js'])

<body style="background-image: url('/images/catspawbg2.jpg')">  

    <x-nav />
    
    <div class="" >
        {{ $slot }}
    </div>     

</body>