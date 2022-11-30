{{-- @include('headers.Head') --}}
<h1>vista de actualizar productos</h1>
<body>
    <form action="{{route('actualizar.update',$usuarios->id)}}" method="POST">
            @method('PUT')
            @csrf
            <label>Nombre</label>
            <input id="name" name="name" type="text" value="{{$usuarios->name}}"><br>
            <label>Email</label>
            <input id="email" name="email" type="text" value="{{$usuarios->email}}"><br>
            <label>id_rol</label>
            <input id="id_rol" name="id_rol" type="bigint" value="{{$usuarios->id_rol}}"><br>
            <button type="submit" class="btn btn-success">actualizar</button>
        </form>
<footer>
    @include('headers.Footer')
</footer>
</body>