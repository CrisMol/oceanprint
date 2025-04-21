<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with(['tags' => function($query) {
            $query->take(5); // Limitar a las primeras 5 etiquetas
        }])->orderBy('created_at', 'DESC')->paginate(12);
        
        $categories = Category::whereNull('parent_id')
                        ->with('subcategories')
                        ->orderBy('name', 'ASC')
                        ->get();

        return view('shop.index', compact('products', 'categories'));
    }

    public function product_details($product_slug)
    {
        $product = Product::with([
                        'tags', 
                        'tieredPrices.variation',  
                        'tieredPrices.quantity'  
                    ])->where('slug', $product_slug)->first();  
                    
        //dd($product->toArray());

        // Obtener un producto aleatorio que no sea el actual y tenga una imagen válida
        $randomProduct = Product::where('slug', '!=', $product_slug)
        ->whereNotNull('image')
        ->where('image', '!=', '')
        ->inRandomOrder()
        ->first(['image', 'name', 'slug']);

        $rproducts = Product::where('slug', '<>', $product_slug)->get()->take(8);

        //dd($randomProduct->toArray());

        return view('shop.product.details', compact('product', 'randomProduct', 'rproducts'));
    }
}
