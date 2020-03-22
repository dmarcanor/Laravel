<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Plantilla</title>
</head>
<body>
    <header class="header">
        <h1>Logo</h1>
    </header>

    <main class="main">
        @yield("main")
    </main>

    <footer class="footer absolute full-width bottom">
        @yield("footer")
    </footer>
</body>
</html>