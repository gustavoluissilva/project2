@props([
    'title' => 'Laracasts'
])
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    </head>
    <body class="bg-gray-700 p-6 max-w-xl mx-auto">
         {{-- <nav>

            <a href="/">Home</a>
            <a href="/about">About us</a>
            <a href="/contact">Contact us</a>

        </nav> --}}
        <main class="text-white">

            {{ $slot }}

        </main>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
    </html>
