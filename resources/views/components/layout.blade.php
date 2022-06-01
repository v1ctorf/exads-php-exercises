<html>
    <head>
        <title>EXADS - {{ $title ?? 'PHP Exercises' }}</title>
        <style>
            table, th, td { border: 1px solid; }
        </style>
    </head>
    <body>
    <h1><a href="{{ route('main-page') }}">EXADS</a> - {{ $exerciseNumber ?? 'PHP Exercises' }}</h1>
        {{ $slot }}
    </body>
</html>
