<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $size = $request->query('size') ? $request->query('size') : 12;
        $o_column = "";
        $o_order = "";
        $order = $request->query('order') ? $request->query('size') : -1;
        $f_brands = $request->query('brands');
        $f_subcategory = $request->query('subcategory') ? $request->query('subcategory') : 4;
        switch ($order) {
            case 1:
                $o_column = 'created_at';
                $o_order = 'DESC';
                break;
            case 2:
                $o_column = 'created_at';
                $o_order = 'ASC';
                break;
            case 3:
                $o_column = 'sale_price';
                $o_order = 'ASC';
                break;
            case 4:
                $o_column = 'sale_price';
                $o_order = 'DESC';
                break;
            default:
                $o_column = 'id';
                $o_order = 'DESC';
                break;
        }
        $brands = Brand::orderBy('name', 'ASC')->get();
        $products = Product::where(function($query) use($f_brands){
            $query->whereIn('brand_id', explode(',', $f_brands))->orWhereRaw("'".$f_brands."'=''");
        })->where(function($query) use($f_subcategory){
            $query->where('category_id', $f_subcategory);
        })->with(['tags' => function($query) {
            $query->take(5); // Limitar a las primeras 5 etiquetas
        }])->orderBy($o_column, $o_order)->paginate($size);
        
        $categories = Category::whereNull('parent_id')
                        ->with('subcategories')
                        ->orderBy('name', 'ASC')
                        ->get();

        return view('shop.index', compact('products', 'categories', 'size', 'order', 'brands', 'f_brands', 'f_subcategory'));
    }

    public function product_details($product_slug)
    {
        $product = Product::with([
                        'tags', 
                        'tieredPrices.variation',  
                        'tieredPrices.quantity'  
                    ])->where('slug', $product_slug)->firstOrFail(); 
                    
        //dd($product->toArray());

        // Obtener un producto aleatorio que no sea el actual y tenga una imagen válida
        $randomProduct = Product::where('slug', '!=', $product_slug)
            ->whereNotNull('image')
            ->where('image', '!=', '')
            ->inRandomOrder()
            ->first(['image', 'name', 'slug']);

        $rproducts = Product::where('slug', '<>', $product_slug)->get()->take(8);

        //dd($product->price_with_taxes);
        //dd($product->toArray());
        //dd($rproducts->toArray());

        return view('shop.product.details', compact('product', 'randomProduct', 'rproducts'));
    }
}
