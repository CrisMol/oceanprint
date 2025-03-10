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
}
