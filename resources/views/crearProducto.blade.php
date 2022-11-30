@include('headers.Head')
<body>
<h1>vista de crear producto</h1>
    <form action="{{route('productos.store')}}" method="POST">
            @csrf
            <label>Nombre Producto</label>
            <input id="nombre_producto" name="nombre_producto" type="text"><br>
            <label>Descripcion</label>
            <input id="descripcion_producto" name="descripcion_producto" type="text"><br>
            <label>Precio</label>
            <input id="precio_producto" name="precio_producto" type="number"><br>
            <label>Stock</label>
            <input id="stock_producto" name="stock_producto" type="number"><br>
            <label>ID Categoria</label>
            <input id="id_categoria" name="id_categoria" type="bigint"><br>
            <input type="submit" value="Guardar">
        </form>
<footer>
    @include('headers.Footer')
</footer>
</body>