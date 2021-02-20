<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pagina principal</h1>

    <table width="900" border="1">
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
       <td>{{$user->foto ? $user->foto->ruta_foto : 'no tiene'}}</td>//operador ternario $foto si tiene foto dame la ruta sino ponme no tiene
       <td>{{$user->role_id}}</td>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       <td>{{$user->created_at}}</td>
       <td>{{$user->updated_at}}</td>
        </tr>


        @endforeach
   

        @endif
        
    </table>
   
</body>
</html>