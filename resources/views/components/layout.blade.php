<html>
    <head>
        <title>EXADS - {{ $title ?? 'PHP Exercises' }}</title>
    </head>
    <body>
        <h1>EXADS - {{ $exerciseNumber ?? 'PHP Exercises' }}</h1>
        {{ $slot }}
    </body>
</html>
