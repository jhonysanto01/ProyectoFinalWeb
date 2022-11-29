@include('headers.Head')
<body>
    <h1>Holaaaa</h1>
     <form action="{{route('user.update',$user->id)}}" method="POST">
            @method('PUT')
            @csrf
            <label>Nombre</label>
            <input id="nombre" name="nombre" type="text" value="{{$user->nombre}}"><br>
            <label>Email</label>
            <input id="description" name="description" type="text" value="{{$user->email}}"><br>
            <label>id_rol</label>
            <input name="precio" type="precio" value="{{$user->id_rol}}"><br>
            <input type="submit" name="Enviar" value="Editar">
        </form>
<footer>
    @include('headers.Footer')
</footer>
</body>