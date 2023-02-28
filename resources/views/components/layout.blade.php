<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
        <title>Cats App Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js' ])

    </head>

    <body style="background-image: url('/images/catspawbg2.jpg'); position:relative;">  

        <x-nav />
    
        <div class="absolute top-20 left-1/3">
            <x-common.message />
        </div>   
        
        <div class="" >
            {{ $slot }}
        </div>     
    
    </body>
  
</html>




<!doctype html>

<title>Cats App Laravel</title>


