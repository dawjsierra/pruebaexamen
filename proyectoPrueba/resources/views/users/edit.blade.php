<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Editar user</h1>

        <form action="/users/{{$user->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <div>
            <label for="username">Nombre de usuario</label>
            <input type="text" name="username" value="{{$user->username}}"> 
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$user->name}}"> 
        </div>

        <div>
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" value="{{$user->lastname}}"> 
        </div>

        <div>
            <label for="position">Posicion</label>
                <select name="position_id" id="position_id" value="{{$user->position_id}}">
                @foreach($positions as $positions)
                <option value="{{$positions->id}}">{{$positions->name}}</option>
                @endforeach
                </select>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="text" name="password" value="{{$user->password}}"> 
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$user->email}}"> 
        </div>

        <div>
            <input type="submit" value="actualizar"> 
        </div>        
        </form>
        </div>
    </div>

</div>