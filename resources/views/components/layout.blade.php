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
        <style>

          .card{
                background: #e3e3e3;
                padding: 1rem;
                text-align:center;
                max-width: 400px;
                margin:auto;
            }
        </style>
    </head>
    <body>
         <nav>
            
            <a href="/">Home</a>
            <a href="/about">About us</a>
            <a href="/contact">Contact us</a>

        </nav>
        <main>

            {{ $slot }}

        </main>

    </body>
    </html>
