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
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="validar-contacto" method="POST">
        @csrf
        <label for="correo">Correo</label><br>
        <input 
            type="text" 
            name="correo"
            @if($tipo == 'alumno') 
                value="@alumnos.udg.mx"
            @else
                value="@gmail.com"
            @endif
            ><br>
            @error('correo')
                <div class="alert alert-danger"> {{$message}}</div><br>
            @enderror
        <label for="comentario">Comentarios</label><br>
        <textarea name="comentario" cols="30" rows="10">
        </textarea><br>

        <input type="submit" value="Enviar"> 
        
    </form>
</body>
</html>