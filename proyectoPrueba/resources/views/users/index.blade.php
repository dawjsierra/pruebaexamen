@extends('layouts.app')

@section('content')
<h1>USUARIOS</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <a href="/users/create" class="btn btn-primary float-right">CREAR USUARIO</a><br />


            <table class="table table-striped" border=1>
                <tr>
                    <th>Username</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Posicion</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                </tr>
                @forelse ($users as $users)
                <tr>
                    <td>{{$users->username}} </td>
                    <td>{{$users->name}} </td>
                    <td>{{$users->lastname}} </td>
                    <td>{{$users->position_id}} </td>
                    <td>{{$users->email}} </td>
                    <td>{{$users->password}} </td>
                    <td> <a class="btn btn-primary btn-sm" href="/users/{{$users->id}}">Ver</a></td>
                    <td> <a class="btn btn-primary btn-sm" href="/users/{{$users->id}}/edit">Editar</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay estudios registrados</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
