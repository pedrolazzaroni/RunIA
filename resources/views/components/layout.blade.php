<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100">
    <div class="min-h-screen flex flex-col">
        <main class="flex-1">
            @yield('content')
        </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; {{ date('Y') }} RunIA. Todos os direitos reservados.</p>
        <p>Desenvolvido por Pedro Lazzaroni</p>
    </footer>
</body>
</html>
