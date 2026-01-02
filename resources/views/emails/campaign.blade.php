<!DOCTYPE html>
<html>
<body>
    <h1>Hola, {{ $subscriberName }}</h1>
    <div>
        {!! $content !!} 
    </div>
    <br>
    <p>Si deseas dejar de recibir estos correos, 
       <a href="{{ url('/unsubscribe/'.$subscriber->id) }}">haz clic aquí</a>.
    </p>
</body>
</html>