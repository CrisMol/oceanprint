@extends('layouts.app')

@section('title', 'Producto no encontrado')

@section('content')
    <div class="container text-center my-5">
        <div class="error-404">
            <h1>
                <span class="num">4</span>
                <span class="num rotate">0</span>
                <span class="num">4</span>
            </h1>
            <h2>Oops! Página no encontrada</h2>
            <p>Lo sentimos, el producto que buscas no existe o fue eliminado.</p>
            <a href="{{ route('shop') }}" class="btn btn-primary mt-3">Volver a la tienda</a>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .container .error-404 {
            margin: 100px 0;
        }

        .error-404 h1 {
            font-size: 10rem;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        .error-404 h1 .rotate {
            display: inline-block;
            animation: spin 2s linear infinite;
            color: #f20587; /* color destacado */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .error-404 h2 {
            font-size: 2rem;
            margin-top: 1rem;
        }

        .error-404 p {
            font-size: 1.2rem;
            color: #666;
        }

        .error-404 .btn {
            padding: 0.8rem 2rem;
            font-size: 1rem;
        }
    </style>
@endpush