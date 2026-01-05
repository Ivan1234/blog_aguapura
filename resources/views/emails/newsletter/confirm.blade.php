<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma tu suscripción</title>
    <style>
        /* Estilos básicos para prevenir que los clientes de correo sobrescriban */
        body { margin: 0; padding: 0; background-color: #f4f7f9; font-family: 'Segoe UI', Helvetica, Arial, sans-serif; }
        table { border-spacing: 0; width: 100%; }
        img { border: 0; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #f4f7f9; padding-bottom: 40px; }
        .main { background-color: #ffffff; margin: 0 auto; width: 100%; max-width: 600px; border-spacing: 0; color: #4a4a4a; border-radius: 8px; overflow: hidden; margin-top: 40px; }
        .button { background-color: #4f46e5; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 5px; font-weight: bold; display: inline-block; }
        
        @media screen and (max-width: 600px) {
            .main { margin-top: 0 !important; border-radius: 0 !important; }
        }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="main">
            <tr>
                <td style="padding: 40px 0; text-align: center; background-color: #1f2937;">
                    <h1 style="color: #ffffff; margin: 0; font-size: 24px; letter-spacing: 1px;">TU MARCA</h1>
                </td>
            </tr>

            <tr>
                <td style="padding: 40px 30px;">
                    <h2 style="font-size: 22px; color: #111827; margin-bottom: 20px;">¡Casi listo! Solo un paso más...</h2>
                    <p style="font-size: 16px; line-height: 1.6; color: #4b5563;">
                        Hola, <strong>{{ $subscriber->name ?? 'amigo/a' }}</strong>. <br><br>
                        Gracias por querer unirte a nuestra newsletter. Para asegurarnos de que esta es tu dirección de correo y evitar suscripciones no deseadas, por favor confirma tu suscripción haciendo clic en el botón de abajo.
                    </p>
                    
                    <table width="100%">
                        <tr>
                            <td style="padding: 30px 0; text-align: center;">
                                <a href="{{ $confirmationUrl }}" class="button">Confirmar mi suscripción</a>
                            </td>
                        </tr>
                    </table>

                    <p style="font-size: 14px; line-height: 1.6; color: #6b7280;">
                        Si el botón no funciona, copia y pega este enlace en tu navegador:<br>
                        <a href="{{ $confirmationUrl }}" style="color: #4f46e5;">{{ $confirmationUrl }}</a>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="padding: 30px; background-color: #f9fafb; text-align: center; border-top: 1px solid #edf2f7;">
                    <p style="font-size: 12px; color: #9ca3af; margin: 0;">
                        Has recibido este correo porque te registraste en nuestro sitio web.<br>
                        Si no fuiste tú, puedes ignorar este mensaje con total seguridad.
                    </p>
                    <p style="font-size: 12px; color: #9ca3af; margin-top: 10px;">
                        &copy; {{ date('Y') }} Tu Marca. Todos los derechos reservados.
                    </p>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>