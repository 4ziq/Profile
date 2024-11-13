<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- scripts --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- web name --}}
    <title>{{ env('APP_NAME') }}</title>
</head>

<body class="bg-dark">
    <header>
        <x-navigation/>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
