<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Suscripción Confirmada</title>
    <style>
        body {
            background-color: #121212;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #1e1e1e;
            border-radius: 1.5rem;
        }
        .success-icon {
            font-size: 5rem;
            color: #0dcaf0; /* Cian brillante */
            filter: drop-shadow(0 0 15px rgba(13, 202, 240, 0.3));
        }
        .btn-portal {
            background: linear-gradient(45deg, #0dcaf0, #0d6efd);
            border: none;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .btn-portal:hover {
            transform: scale(1.05);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-lg text-center p-5">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi bi-patch-check-fill success-icon"></i>
                        </div>

                        <h2 class="fw-bold text-light mb-3">¡Suscripción Activada!</h2>
                        <p class="text-secondary mb-4">
                            Tu correo ha sido verificado correctamente. A partir de ahora, recibirás nuestras mejores actualizaciones directamente en tu bandeja de entrada.
                        </p>

                        <div class="bg-dark rounded-4 p-3 mb-4 opacity-75">
                            <p class="small text-info mb-0">
                                <i class="bi bi-shield-lock me-2"></i>Tu privacidad es nuestra prioridad.
                            </p>
                        </div>

                        <hr class="my-4 opacity-25">

                        <div class="d-grid">
                            <a href="{{ route('home') }}" class="btn btn-portal btn-lg rounded-pill text-white py-3">
                                Ir al Portal Principal
                            </a>
                        </div>
                        
                        <p class="mt-4 text-muted small">
                            ¿Necesitas ayuda? <a href="/contacto" class="text-info text-decoration-none">Contáctanos</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>