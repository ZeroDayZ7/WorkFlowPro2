<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous">
    </script>
</head>

<body>

    <div id="app">
        @yield('content') <!-- To miejsce na treść widoku -->

        <footer>
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($_ENV['APP_NAME'], ENT_QUOTES, 'UTF-8'); ?>. Wszystkie prawa zastrzeżone.</p>
        </footer>
    </div>


</body>

</html>
