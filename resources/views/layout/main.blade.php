<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Styles -->
        @vite('resources/js/app.js')

    <title>lavarel-boolando-carola-matteo</title>
</head>
<body>
    @include('partials.header')


    <div>
        <main>
            @yield('content')
        </main>
    </div>

    @include('partials.footer')

</body>
</html>
