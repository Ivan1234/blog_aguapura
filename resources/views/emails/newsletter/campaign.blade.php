<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $asunto }}</title>
    <style>
        body { margin: 0; padding: 0; background-color: #f8fafc; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; }
        table { border-spacing: 0; width: 100%; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #f8fafc; padding-bottom: 40px; }
        .main { background-color: #ffffff; margin: 40px auto; width: 100%; max-width: 600px; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); }
        .header { padding: 30px; text-align: center; background-color: #ffffff; border-bottom: 1px solid #f1f5f9; }
        .content { padding: 40px 30px; line-height: 1.7; color: #334155; font-size: 16px; }
        .footer { padding: 30px; background-color: #f1f5f9; text-align: center; color: #64748b; font-size: 13px; }
        .unsubscribe-link { color: #6366f1; text-decoration: underline; font-weight: 500; }
        img { max-width: 100%; height: auto; }
        
        /* Estilos para que el contenido HTML de la base de datos se vea bien */
        .content h1, .content h2 { color: #1e293b; }
        .content p { margin-bottom: 20px; }

        @media screen and (max-width: 600px) {
            .main { margin: 0 !important; border-radius: 0 !important; }
            .content { padding: 30px 20px !important; }
        }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="main">
            <tr>
                <td class="header">
                    <span style="font-size: 20px; font-weight: bold; color: #1e293b; letter-spacing: -0.5px;">
                        {{ config('app.name') }}
                    </span>
                </td>
            </tr>

            <tr>
                <td class="content">
                    @if(isset($subscriberNombre))
                        <p>Hola, <strong>{{ $subscriberNombre }}</strong>:</p>
                    @endif

                    {!! $contenido !!}
                </td>
            </tr>

            <tr>
                <td class="footer">
                    <p style="margin-bottom: 10px;">
                        Estás recibiendo este correo porque estás suscrito a nuestra lista de noticias.
                    </p>
                    <p style="margin-bottom: 20px;">
                        © {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
                    </p>
                    
                    <hr style="border: 0; border-top: 1px solid #e2e8f0; margin-bottom: 20px;">

                    <p>
                        ¿No quieres recibir más correos? <br>
                        <a href="{{ $unsubscribeUrl }}" class="unsubscribe-link">
                            Darse de baja de esta lista
                        </a>
                    </p>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>