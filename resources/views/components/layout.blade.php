<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
    <title>
        @yield('title')
    </title>
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <div>
        @yield('content')
    </div>
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; {{ date('Y') }} RunIA. Todos os direitos reservados.</p>
        <p>Desenvolvido por Pedro Lazzaroni</p>
    </footer>
</body>
</html>
