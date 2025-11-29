<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Noticias Digitales')</title>
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="navbar">
        <div class="logo">Noticias<span>YA</span></div>
        <nav>
            <a href="#">Puebla</a>
            <a href="#">México</a>
            <a href="#">Internacional</a>
            <a href="#">Ciencia</a>
            <a href="#">Tecnología</a>
        </nav>
        <button class="suscribirse">Suscribirse</button>
    </header>

    <main class="mt-5">
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; 2025 NoticiasYA. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
