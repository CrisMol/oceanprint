@extends('layouts.app')

@push('styles')
    <style>
        section {
            margin-top: 50px;
        }
    </style>
@endpush

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
            <h2 class="page-title">Mi cuenta</h2>
            <div class="row">
                <div class="col-lg-3">
                    @include('user.account-nav')
                </div>
                <div class="col-lg-9">
                    <div class="page-content my-account__dashboard">
                        <p>Hola <strong>{{ Auth::user()->name }}</strong></p>
                        <p>
                            Desde tu panel de cuenta, puedes ver tus pedidos recientes, administrar tus direcciones de envío y editar tu contraseña y los detalles de tu cuenta.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
