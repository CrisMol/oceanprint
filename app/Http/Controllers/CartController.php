<?php

namespace App\Http\Controllers;

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
}
