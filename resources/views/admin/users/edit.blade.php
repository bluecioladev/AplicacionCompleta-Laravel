<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<style>
    body {

        background-color: burlywood;
    }
</style>

<body>
    <h1 style="text-align: center ; margin: 50px 0">Pagina para Editar Usuarios</h1>

    <form class="form-control" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        Nombre: <br>
        <input type="text" name="name" id="name" value="{{$user->name}}"><br>
        Email: <br>
        <input type="text" name="email" id="email" value="{{$user->email}}"><br>
        Verificar email: <br>
        <input type="text" name="verificar_email" id="email_verified_at" value="{{$user->email_verified_at}}"><br>
        Role: <br>
        <input type="text" name="role_id" id="role_id" value="{{$user->role_id}}"><br>

        @if($user->foto)
        <td> <img src="/images/{{$user->foto->ruta_foto}}" width="150" /></td>
        @else
        <td><img src="/images/generico.png" width="150" /></td>
        @endif
        <input type="file" name="foto_id" id="foto_id"><br>
        <input type="submit" value="Actualizar">
        <input type="reset" value="Reset">
    </form>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Usuario">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>