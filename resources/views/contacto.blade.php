<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO</h1>
    <h3>
        
        {{$tipo}}
    </h3>
    <form action="validar-contacto" method="POST">
        @csrf
        <label for="correo">Correo</label><br>
        <input 
            type="email" 
            name="correo"
            @if($tipo == 'alumno') 
                value="@alumnos.udg.mx"
            @else
                value="@gmail.com"
            @endif
            ><br>
        <label for="comentario">Comentarios</label><br>
        <textarea name="comentario" cols="30" rows="10">
        </textarea><br>

        <input type="submit" value="Enviar"> 
        
    </form>
</body>
</html>