<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

    <div class="app">
        @yield('content') <!-- To miejsce na treść widoku -->

        <footer>
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($_ENV['APP_NAME'], ENT_QUOTES, 'UTF-8'); ?>. Wszystkie prawa zastrzeżone.</p>
        </footer>
    </div>

    
</body>

</html>
