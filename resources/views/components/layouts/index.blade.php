<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <h1>Todos</h1>
        <hr/>
        <div id="app"></div>
    </body>
</html>