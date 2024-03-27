<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1 class="text-4xl">Foro</h1>
        <a href="/">Inicio</a>
        <a href="/perfil">Perfil</a>
        <a href="/foro">Foro</a>
    </body>
</html>
