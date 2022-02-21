@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Crear usuario</h1>

        <form action="/users" method="post">
        @csrf

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{old ('username')}}">
            @error('username')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{old ('name')}}">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
        </div>

        <div>
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" id="lastname" value="{{old ('lastname')}}">
            @error('lastname')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
        </div>

        <div>
            <label for="position">Posicion</label>
                <select name="position_id" id="position_id" value="{{old ('position_id')}}">
                @foreach($posiciones as $positions)
                <option value="{{$positions->id}}">{{$positions->name}}</option>
                @endforeach
                </select>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{old ('email')}}">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" value="{{old ('password')}}">
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
        </div>

        <div>
            <input type="submit" value="crear"> 
        </div>        
        </form>
        </div>
    </div>

</div>
@endsection