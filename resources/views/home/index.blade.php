@extends('layouts.app')

@push('styles')
    @include('home.styles.index')
@endpush

@section('content')
    <main class="">
        <section>
            @include('home.section.slider-video')
        </section>

        <section class="container container-featured">
            <x-text-container-main 
                small-text="DESCUBRE" 
                big-text="Destacados"
            />
        </section>

        <section class="products" style="--width: 300px; --height: 450px; --imageQuantity: 4">
            @include('home.section.products-infinite')
        </section>

        <section class="container container-categories">
            <x-text-container-main 
                small-text="CONOCE" 
                big-text="Categorías"
            />
            @include('home.section.categories')
        </section>
    </main>
@endsection