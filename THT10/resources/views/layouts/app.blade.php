<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBPAGEKU!</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="description" content="A simple Hello World webpage">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>

    <div class="grid-container">
        @yield('content')
    </div>

</body>

</html>
