<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body{

    background-color:burlywood;
}

</style>
<body>
    <h1>Pagina para Editar Usuarios</h1>

    {!! Form::model($user,['method' => 'PATCH','Action'=>'AdminUsersController@update',$user->id,'files'=>true]) !!}

    <table>

        <tr>
            <td>
                {!! Form::label('name', 'Nombre:')!!}
            </td>
            <td>
                {!!Form::text('name')!!}
            </td>
        </tr>


        




        <tr>
            <td>
                {!! Form::label('email', 'E-Mail:')!!}
            </td>
            <td>
                {!!Form::text('email')!!}
            </td>
        </tr>



        <tr>
            <td>
                {!! Form::label('email', 'Verificar Email')!!}
            </td>
            <td>
                {!!Form::text('email_verified_at')!!}
            </td>
        </tr>


        <tr>
            <td>
                {!! Form::label('role', 'Role')!!}
            </td>
            <td>
                {!!Form::text('role_id')!!}
            </td>
        </tr>

        <tr>
            <td>
                {!!Form::label ('foto_id','Foto:')!!}

            </td>
            <td>
                {!!Form::file('foto_id')!!}
            </td>

        </tr>


        <tr>
            <td>
                {!! Form::submit('Modificar usuario')!!}
            </td>


            <td>
                {!! Form::reset('Borrar')!!}
            </td>

        </tr>

    </table>

    {!! Form::close() !!}


</body>
</html>