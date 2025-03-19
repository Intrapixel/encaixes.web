<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encaje de Bolillos Gallego</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/historia">Historia</a></li>
                <li><a href="/tecnicas">Técnicas</a></li>
                <li><a href="/recursos">Recursos</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 Encaje de Bolillos Gallego</p>
    </footer>
</body>
</html>
