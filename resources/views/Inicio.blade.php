<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('headers.Head')
    <body class="antialiased">
        <div class="container">
            <div class="hero">
                <nav class="nav-navegation">
                    <h2 class="nav-navegation__logo">Eco<span>mmerce</span>    <i class="fa-solid fa-laptop"></i></h2>
                    <ul>
                        <li><a href=" "><i class="fa-solid fa-house"></i>  Inicio</a></li>
                        <li><a href="#seccionCategoria"><i class="fa-solid fa-bars"></i>   Categorias</a></li>
                        <li><a href="#contactoFooter"><i class="fa-solid fa-address-book"></i>   Contacto</a></li>
                        {{-- zona para mostrar si esta logueado --}}
                        <li>
                            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/home') }}">Inicio</a>
                                        @else
                                            <a href="{{ route('login') }}">Iniciar Sesion</a>

                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">Registrarse</a>
                                                </li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="slider">
            <ul>
                <li><img src="{{URL::asset('https://concepto.de/wp-content/uploads/2018/09/RAM1-e1537470550128.jpg')}}" alt="" width="600" height="600"></li>
                <li><img src="{{URL::asset('https://i.blogs.es/09647f/grafica/450_1000.webp')}}" alt="" width="600" height="600"></li>
                <li><img src="{{URL::asset('https://f1web.co/GEAR/wp-content/uploads/2021/06/chasis-gabinete-pc-bogota.jpg')}}" alt="" width="600" height="600"></li>
                <li><img src="{{URL::asset('https://http2.mlstatic.com/D_NQ_NP_825276-MLA48131245527_112021-O.jpg')}}" alt="" width="600" height="600"></li>
            </ul>
        </div>
        @include('layouts.category')
    </body>
    <footer>
        @include('headers.Footer')
    </footer>

</html>
