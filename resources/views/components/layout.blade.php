<html>
    <head>
        <title>EXADS - {{ $title ?? 'PHP Exercises' }}</title>
        <style>
            table, th, td { border: 1px solid; }
        </style>
    </head>
    <body>
        <h1>EXADS - {{ $exerciseNumber ?? 'PHP Exercises' }}</h1>
        {{ $slot }}
    </body>
</html>
