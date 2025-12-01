<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Noticias Digitales')</title>
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

    <footer class="ftrnot">
        <div class="container">
            <div class="ftrgd">
                <div class="ftrcol">
                    <h2 class="ftrlg">MiPortalNews</h2>
                    <p class="ftrdsc">
                        El portal de noticias más confiable. Información clara, verificada y al instante.
                    </p>

                    <div class="ftrscl">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="ftrcol">
                    <h3 class="ftrttl">Enlaces rápidos</h3>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Últimas noticias</a></li>
                        <li><a href="#">Tendencias</a></li>
                        <li><a href="#">Política</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>

                <div class="ftrcol">
                    <h3 class="ftrttl">Categorías</h3>
                    <ul>
                        <li><a href="#">Nacional</a></li>
                        <li><a href="#">Internacional</a></li>
                        <li><a href="#">Deportes</a></li>
                        <li><a href="#">Tecnología</a></li>
                        <li><a href="#">Entretenimiento</a></li>
                    </ul>
                </div>

                <div class="ftrcol">
                    <h3 class="ftrttl">Suscríbete</h3>
                    <p class="ftrdsc">Recibe las noticias más importantes del día directamente en tu correo.</p>

                    <form class="ftrnsltr">
                        <input type="email" placeholder="Tu correo electrónico">
                        <button type="submit">Suscribirme</button>
                    </form>
                </div>
            </div>

            <div class="ftrbttm">
                <p>© 2025 MiPortalNews. Todos los derechos reservados.</p>
            </div>

        </div>
    </footer>
</body>
</html>
