{{-- cambio la ruta del layout para poder mostrar aqui lo que quiero sin dejar volver a la pagina inicio si no a una nueva --}}
@extends('layouts.userapp')
<h1>usuariooooooooooooooooooooooooooooooooo</h1>
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas logueado como usuario!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
