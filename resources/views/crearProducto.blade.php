{{-- @include('headers.Head') --}}
<body>
<h1>vista de crear producto</h1>
    <form action="{{route('actualizar.update',$productos->id)}}" method="POST">
            @method('PUT')
            @csrf
            <label>Nombre Producto</label>
            <input id="nombre" name="nombre" type="text" value="{{$productos->nombre_producto}}"><br>
            <label>Descripcion</label>
            <input id="descripcion" name="descripcion" type="text" value="{{$productos->descripcion_producto}}"><br>
            <label>Precio</label>
            <input id="precio" name="precio" type="number" value="{{$productos->precio_producto}}"><br>
            <label>Stock</label>
            <input id="stock" name="stock" type="number" value="{{$productos->stock_producto}}"><br>
            <label>ID Categoria</label>
            <input id="id_categoria" name="id_categoria" type="bigint" value="{{$productos->id_categoria}}"><br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
<footer>
    @include('headers.Footer')
</footer>
</body>