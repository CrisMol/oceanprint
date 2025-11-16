<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $products = Product::select('slug', 'updated_at')->get();
        $categories = Category::select('slug', 'updated_at')->get();

        $content = view('sitemap.index', compact('products', 'categories'));

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}
