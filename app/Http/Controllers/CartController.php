<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::instance('cart')->content();
        $total = 0;

        return view('shop.cart', compact('items', 'total'));
    }   

    public function add_to_cart(Request $request)
    {
        if ($request->price <= 0) {
            return redirect()->back()->with('error', 'Por favor seleccione un producto válido o alguna de las opciones disponibles antes de continuar.');
        }

        Cart::instance('cart')->add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Models\Product');
        return redirect()->back()->with('success', 'Producto agregado correctamente');
    }

    public function remove_item($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back();
    }

    public function empty_cart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back();
    }

    public function checkout()
    {
        /*if (!Auth::check()) {
            return redirect()->route('login');
        }*/

        return view('shop.checkout');
    }

    public function place_an_order(Request $request)
    {
        $validated = $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'phone'     => ['required', 'string', 'max:10', 'regex:/^[0-9\s\+\-\(\)]+$/'],
            'zip'       => ['nullable', 'string', 'max:10'],
            'state'     => ['required', 'string', 'max:100'],
            'city'      => ['required', 'string', 'max:100'],
            'address'   => ['nullable', 'string', 'max:255'],
            'locality'  => ['nullable', 'string', 'max:255'],
            'landmark'  => ['nullable', 'string', 'max:255'],
            'type'      => ['nullable', 'in:home,office,other'],
            'is_shipping_different' => ['boolean'],
            'mode' => ['required', 'in:transfer,cod,card,paypal'],
        ], [
            'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no puede tener más de :max caracteres.',
            'regex' => 'El formato de :attribute no es válido.',
            'in' => 'El valor seleccionado para :attribute no es válido.',
        ]);

        $address = new Address();
        $address->user_id   = 2;
        $address->name      = $request->input('name');
        $address->phone     = $request->input('phone');
        $address->locality  = $request->input('locality', '');
        $address->address   = $request->input('address');
        $address->city      = $request->input('city');
        $address->state     = $request->input('state');
        $address->country   = $request->input('country', 'Ecuador'); 
        $address->landmark  = $request->input('landmark');
        $address->zip       = $request->input('zip');
        $address->type      = $request->input('type', 'home'); // si no envía nada, usa 'home'
        $address->isdefault = true;
        $address->save();

        $this->setAmountForCheckout();

        $order = new Order();
        $order->user_id = 2;

        // Datos del cliente
        $order->name      = $address->name;
        $order->phone     = $address->phone;
        $order->locality  = $address->locality;
        $order->address   = $address->address;
        $order->city      = $address->city;
        $order->state     = $address->state;
        $order->country   = $address->country;
        $order->landmark  = $address->landmark ?? null;
        $order->zip       = $address->zip;

        // Datos del pedido (por ejemplo desde sesión o cálculo del carrito)
        $order->subtotal  = Session::get('checkout')['subtotal'];
        $order->discount  = Session::get('checkout')['discount'];
        $order->tax       = Session::get('checkout')['tax'];
        $order->total     = Session::get('checkout')['total'];
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id; 
            $orderItem->order_id = $order->id; 
            $orderItem->price = $item->price; 
            $orderItem->quantity = $item->qty; 
            $orderItem->save();
        }

        $transaction = new Transaction();
        $transaction->user_id = 2;
        $transaction->order_id = $order->id;
        $transaction->mode = $request->mode;
        $transaction->status = 'pending';
        $transaction->save();

        Cart::instance('cart')->destroy();
        Session::forget('checkout');
        Session::put('order_id', $order->id);
        return redirect()->route('cart.order.confirmation');
    }

    public function setAmountForCheckout() 
    {
        $total = 0.00;
        foreach (Cart::instance('cart')->content() as $item) {
            $total += $item->price;
        }

        Session::put('checkout', [
            'discount' => 0,
            'subtotal' => $total,
            'tax'      => 0,
            'total'    => $total,
        ]);
    }   

    public function order_confirmation() 
    {
        if (Session::has('order_id')) {
            $order = Order::find(Session::get('order_id'));
            return view('shop.order-confirmation', compact('order'));
        }
        return redirect()->route('cart.index');
    }
}
