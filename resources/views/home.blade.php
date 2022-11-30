<h1>Administrador</h1>
{{-- cambio la ruta del layout para poder mostrar aqui lo que quiero sin dejar volver a la pagina inicio si no a una nueva --}}
{{-- @extends('layouts.userapp') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- incluyo head que es donde esta la hoja de estilos y fuentes --}}
    @include('headers.Head')
    {{-- lo siguiente son  --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrador</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    {{-- barra de arriba --}}
    <div class="container">
        <div class="hero">
            <nav class="nav-navegation">
                <h2 class="nav-navegation__logo">Eco<span>mmerce</span>    <i class="fa-solid fa-laptop"></i></h2>
                <ul>
                    <li><a href=" "><i class="fa-solid fa-house"></i>  Inicio</a></li>
                    <li><a href="#seccionCategoria"><i class="fa-solid fa-bars"></i>   Categorias</a></li>
                    <li><a href="#contactoFooter"><i class="fa-solid fa-address-book"></i>   Contacto</a></li>
                    <li>
                        @include('layouts.generalapp')
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="slider">
        <ul>
            <li><img src="{{URL::asset('https://concepto.de/wp-content/uploads/2018/09/RAM1-e1537470550128.jpg')}}" alt="" width="600" height="600"></li>
            <li><img src="{{URL::asset('https://i.blogs.es/09647f/grafica/450_1000.webp')}}" alt=""></li>
            <li><img src="{{URL::asset('https://f1web.co/GEAR/wp-content/uploads/2021/06/chasis-gabinete-pc-bogota.jpg')}}" alt=""></li>
            <li><img src="{{URL::asset('https://http2.mlstatic.com/D_NQ_NP_825276-MLA48131245527_112021-O.jpg')}}" alt="" width="600" height="600"></li>
        </ul>
    </div>

    
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>EDITAR USUARIOS</h1>
                <a href="{{ route('descargar-pdf') }}"><button>listado usuarios (PDF)</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- como lo recibo en la vista --}}
                        @foreach ($usuarios as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->id_rol}}</td>
                                <td>
                                    <a href="{{route('actualizar.edit', $user->id)}}" class="btn btn-warning">
                                        <button>Editar</button></a>
                                    <form action="{{route('actualizar.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div>
            <a href="{{route('productos.create')}}"><button>CREAR PRODUCTOS</button></a>
            </div>
        <div class="row">
    </div>

    <div id="seccionCategoria"class="categorias">
        <div class="categorias_titulo"><h2>Categorias</h2></div>
        <div class="categoria">
            {{-- hacer que las imagenes se vean --}}
            <div class="card" id="monitores">
                <div class="content">
                    <h2>Monitores</h2>
                    <a href="/template/ram.html">Ver detalles</a>
                </div>
            </div>
            <div class="card" id="ram">
                <div class="content">
                    <h2>Memoria RAM</h2>
                    <a href="/template/ram.html">Ver detalles</a>
                </div>
            </div>
            <div class="card" id="procesador">
                <div class="content">
                    <h2>Procesador</h2>
                    <a href="/template/procesadores.html">Ver detalles</a>
                </div>
            </div>
            <div class="card" id="tarjeta">
                <div class="content">
                    <h2>Tarjeta Grafica</h2>
                    <a href="#">Ver detalles</a>
                </div>
            </div>
            <div class="card" id="chasis">
                <div class="content">
                    <h2>Chasis</h2>
                    <a href="#">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    @include('headers.Footer')
</footer>
</html>


