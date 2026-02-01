<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
        @routes
    </head>

    <body>
        @inertia

        <script src="https://kit.fontawesome.com/9fa37eff98.js" crossorigin="anonymous"></script>
    </body>
</html>