<div style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 6px;">
    <h2 style="text-align: center; color: #333;">📦 Nuevo Pedido Recibido</h2>

    <p style="font-size: 15px;">Se ha generado un nuevo pedido desde la tienda en línea.</p>

    <!-- Información del pedido -->
     <div style="margin-top: 25px;">
        <h3 style="margin-bottom: 10px;">Información del pedido</h3>

        <p><strong>Número de pedido:</strong> {{ $order->id }}</p>
        <p><strong>Fecha:</strong> {{ $order->created_at }}</p>
        <p><strong>Total:</strong> ${{ number_format($order->total) }}</p>
    </div>

    <!-- Detalles del pedido -->
    <div style="margin-top: 30px;">
        <h3>Detalles del pedido</h3>

        <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
            <thead>
                <tr style="background: #f0f0f0;">
                    <th align="left">Producto</th>
                    <th align="right">Subtotal</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($order->orderItems as $item)
                    <tr>
                        <td>{{ $item->product->name }} × {{ $item->quantity }}</td>
                        <td align="right">${{ number_format($item->price * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Totales -->
        <table width="100%" cellpadding="8" cellspacing="0" style="margin-top: 20px;">
            <tr>
                <th align="left">SUBTOTAL</th>
                <td align="right">${{ number_format($order->subtotal, 2) }}</td>
            </tr>
            <tr>
                <th align="left">ENVÍO</th>
                <td align="right">Envío gratuito</td>
            </tr>
            <tr>
                <th align="left">TOTAL</th>
                <td align="right">${{ number_format($order->total, 2) }}</td>
            </tr>
        </table>
    </div>

    <hr style="margin: 30px 0;">

    <!-- Datos del cliente -->
    <h3>Información del cliente</h3>

    <p><strong>Nombre:</strong> {{ $order->name }}</p>
    <p><strong>Dirección:</strong> {{ $order->address }}</p>
    <p><strong>Sector / Localidad:</strong> {{ $order->locality }}</p>
    <p><strong>Ciudad:</strong> {{ $order->city }}</p>
    <p><strong>País:</strong> {{ $order->country }}</p>

    @if($order->landmark)
        <p><strong>Referencia:</strong> {{ $order->landmark }}</p>
    @endif

    @if($order->zip)
        <p><strong>Código Postal:</strong> {{ $order->zip }}</p>
    @endif

    <p><strong>Teléfono:</strong> {{ $order->phone }}</p>

    <p style="margin-top: 30px; font-size: 14px; color: #777;">
        Revisa este pedido en el panel de administración.
    </p>
</div>