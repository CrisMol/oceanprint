@extends('layouts.app')

@push('styles')
    @include('shop.styles.cart')
@endpush

@section('content')
<main class="">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
      <h2 class="page-title">Mi carrito</h2>
      <div class="checkout-steps">
        <a href="javascript:void(0)" class="checkout-steps__item active">
          <span class="checkout-steps__item-number">01</span>
          <span class="checkout-steps__item-title">
            <span>Carrito de compras</span>
            <em>Administra los items de tu lista</em>
          </span>
        </a>
        <a href="javascript:void(0)" class="checkout-steps__item">
          <span class="checkout-steps__item-number">02</span>
          <span class="checkout-steps__item-title">
            <span>Envío y Pago</span>
            <em>Verifica tu lista de productos</em>
          </span>
        </a>
        <a href="javascript:void(0)" class="checkout-steps__item">
          <span class="checkout-steps__item-number">03</span>
          <span class="checkout-steps__item-title">
            <span>Confirmación</span>
            <em>Revisar y confirmar tu pedido</em>
          </span>
        </a>
      </div>
      <div class="shopping-cart">
        @if($items->count()>0)
            <div class="cart-table__wrapper">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th></th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="shopping-cart__product-item">
                                    <img loading="lazy" src="{{ asset('uploads/products/thumbnails') }}/{{ $item->model->image }}" width="120" height="150" alt="{{ $item->name }}" />
                                </div>
                            </td>
                            <td class="column_item_name">
                                {{ $item->name }}
                            </td>
                            <td>
                                <div class="qty-control position-relative">
                                    {{ $item->qty }}
                                </div>
                            </td>
                            <td>
                                @php
                                    $total += $item->price;
                                @endphp
                                <span class="shopping-cart__subtotal">${{ number_format($item->price, 2) }}</span>
                            </td>
                            <td>
                                <form action="{{ route('cart.item.remove', ['rowId' => $item->rowId ]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:void(0)" class="remove-cart">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                                        <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                                        </svg>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="cart-table-footer">
                    <form action="#" class="position-relative bg-body" style="display: none;">
                        <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
                        <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit"
                            value="APPLY COUPON">
                    </form>
                    <form action="{{ route('cart.empty') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-light btn-empty-cart" type="submit">Limpiar carrito</button>
                    </form>
                </div>
            </div>
            <div class="shopping-cart__totals-wrapper">
                <div class="sticky-content">
                    <div class="shopping-cart__totals">
                        <h6>Totales</h6>
                        <table class="cart-totals">
                            <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td style="text-align: right;">${{ number_format($total, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Envío</th>
                                    <td style="text-align: right;">
                                        Gratis
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td style="text-align: right;">${{ number_format($total, 2) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mobile_fixed-btn_wrapper">
                        <div class="button-wrapper">
                            <a href="{{ route('cart.checkout') }}" class="btn btn-primary btn-checkout button-square">REALIZAR PEDIDO</a>
                        </div>
                    </div>
                </div>
            </div>
        @else 
            <div class="row">
                <div class="col-md-12 text-center pt-5 bp-5">
                    <p>Ningún producto agregado al carrito</p>
                    <a href="{{ route('shop') }}" class="btn btn-info">Ir a Tienda</a>
                </div>
            </div>
        @endif
      </div>
    </section>
</main>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.remove-cart').forEach(function(el) {
            el.addEventListener('click', function(e) {
                el.closest('form').submit();
            });
        });
    </script>
@endpush