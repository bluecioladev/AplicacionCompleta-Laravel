<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <h1 style="text-align: center ; margin: 50px 0" >Pagina principal</h1>

    <table width="900" class="table">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Foto:</th>
            <th scope="col">Rolde Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Creado</th>
            <th scope="col">Actualizado</th>
        </tr>


        @if ($users)

        @foreach ($users as $user)





        <tr>
            <td>{{$user->id}}</td>
            @if ($user->foto)
            <td><img width="120px" src="/images/{{$user->foto->ruta_foto }}" /></td>
            @else
            <td><img width="120px" src="/images/generico.png" alt="sin foto"></td>
            @endif
            <td>{{$user->role_id}}</td>
            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>


        @endforeach


        @endif

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>