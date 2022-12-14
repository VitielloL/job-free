<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Job Free</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"> --}}

        {{-- BOOTSTRAP --}}
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        >
            <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}" sizes="16x16" />
    </head>

    <body>
        @yield('conteudo')
        @yield('scripts')
    </body>
</html>
