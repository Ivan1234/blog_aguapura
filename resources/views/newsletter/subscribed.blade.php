<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <title>Registro Exitoso - Dark Mode</title>
    <style>
        body {
            background-color: #121212; /* Un fondo un poco más profundo */
        }
        .card {
            background-color: #1e1e1e; /* Color de tarjeta para modo oscuro */
        }
        .alert-info {
            background-color: #2c3e50 !important; /* Ajuste para que la alerta no brille de más */
            color: #d1d1d1 !important;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow-lg text-center p-4">
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi bi-envelope-check-fill text-success" style="font-size: 4rem;"></i>
                        </div>

                        <h2 class="fw-bold text-light">¡Felicidades, {{ session('nombre') }}!</h2>
                        <p class="lead text-secondary">
                            Te has registrado correctamente en nuestro newsletter. Estás a un solo paso de recibir nuestras novedades.
                        </p>

                        <div class="alert alert-info border-0 p-4 my-4">
                            <h5 class="fw-bold text-info"><i class="bi bi-info-circle me-2"></i>Acción requerida</h5>
                            <p class="mb-0">
                                Hemos enviado un enlace de confirmación a <strong class="text-white">{{ session('email') }}</strong>. 
                                Por favor, haz clic en el botón dentro del correo para activar tu suscripción.
                            </p>
                        </div>

                        <p class="text-secondary small">
                            <i class="bi bi-exclamation-triangle me-1 text-warning"></i> 
                            ¿No encuentras el correo? Revisa tu <strong>bandeja de spam</strong>.
                        </p>

                        <hr class="my-4 opacity-25">

                        <form id="resend-form" action="{{ route('newsletter.resend') }}" method="POST" class="mb-3">
                            @csrf
                            <p class="mb-2 small fw-bold text-secondary">¿No recibiste nada?</p>

                            <input type="hidden" name="email" value="{{ session('email') }}">
                            
                            <button type="submit" id="btn-resend" class="btn btn-outline-info px-4 rounded-pill disabled" disabled>
                                <span id="resend-text">Reenviar correo</span>
                                <span id="timer-display" class="badge bg-info text-dark ms-2">60s</span>
                            </button>
                        </form>

                        <div class="mt-4">
                            <a href="{{ route('home') }}" class="btn btn-link text-decoration-none text-secondary hover-light">
                                <i class="bi bi-arrow-left me-1"></i> Regresar al portal principal
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('btn-resend');
        const timerDisplay = document.getElementById('timer-display');
        const resendText = document.getElementById('resend-text');
        let timeLeft = 60;

        const startTimer = () => {
            btn.classList.add('disabled');
            btn.disabled = true;
            
            const countdown = setInterval(() => {
                timeLeft--;
                timerDisplay.innerText = timeLeft + 's';

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    btn.classList.remove('disabled');
                    btn.disabled = false;
                    timerDisplay.classList.add('d-none');
                    resendText.innerText = 'Reenviar ahora';
                    resendText.classList.add('fw-bold');
                }
            }, 1000);
        };

        startTimer();
    });
</script>
</body>
</html>