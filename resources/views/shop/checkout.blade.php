@extends('layouts.app')

@push('styles')
    @include('shop.styles.checkout')
@endpush

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Envío y Pago</h2>
            <form class="form-checkout" name="checkout-form" action="{{ route('cart.place.an.order') }}" method="POST">
                @csrf
                <div class="checkout-form">
                <div class="billing-info__wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>DETALLES DE ENVÍO</h4>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-floating my-3">
                                <input type="text" class="form-control" name="name" required="" value="{{ old('name') }}">
                                <label for="name">Nombre completo *</label>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" name="phone" required="" value="{{ old('phone') }}">
                            <label for="phone">Télefono celular *</label>
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                            <label for="zip">Código postal</label>
                            @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" name="state" required="" value="{{ old('state') }}">
                            <label for="state">Provincia *</label>
                            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" name="city" required="" value="{{ old('city') }}">
                            <label for="city">Ciudad *</label>
                            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            <label for="address">Número de casa</label>
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" name="locality" value="{{ old('locality') }}">
                            <label for="locality">Nombre de calle</label>
                            @error('locality') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" name="landmark" required="" value="{{ old('landmark') }}">
                            <label for="landmark">Punto de referencia *</label>
                            @error('landmark') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    </div>
                </div>
                <div class="checkout__totals-wrapper">
                    <div class="sticky-content">
                        <div class="checkout__totals">
                            <h3>Tu orden</h3>
                            <table class="checkout-cart-items">
                                <thead>
                                    <tr>
                                    <th>PRODUCTO</th>
                                    <th align="right">SUBTOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0.00;
                                    @endphp
                                    @foreach (Cart::instance('cart')->content() as $item)
                                        <tr>
                                            @php
                                                $total += $item->price;
                                            @endphp
                                            <td>
                                                {{ $item->name }} X {{ $item->qty }}
                                            </td>
                                            <td style="text-align: right;">
                                                ${{ number_format($item->price, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <table class="checkout-totals">
                            <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td style="text-align: right;">
                                        ${{ number_format($total, 2) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Envío</th>
                                    <td style="text-align: right;">
                                        Gratis
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td style="text-align: right;">
                                        ${{ number_format($total, 2) }}
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="checkout__payment-methods">
                            <div class="form-check">
                                <input class="form-check-input form-check-input_fill" type="radio" name="mode" value="transfer"
                                    id="mode1" checked>
                                <label class="form-check-label" for="mode1">
                                    Transferencia bancaria directa
                                    <p class="option-detail">
                                        Realice el pago directamente en nuestra cuenta bancaria. Utilice su número de pedido como referencia de pago. Su pedido no se enviará hasta que los fondos hayan sido ingresados en nuestra cuenta.
                                    </p>
                                </label>
                            </div>
                            <div class="policy-text">
                                Sus datos personales se utilizarán para procesar su pedido, mejorar su experiencia en este sitio web y para otros fines descritos en nuestra 
                                <a 
                                    href="terms.html" 
                                    target="_blank"
                                >
                                    políticas de privacidad
                                </a>.
                            </div>
                        </div>
                    <button class="btn btn-primary btn-checkout">REALIZAR PEDIDO</button>
                    </div>
                </div>
                </div>
            </form>
        </section>
    </main>
@endsection