<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
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
        $f_subcategory = $request->query('subcategory');
        $min_price = $request->query('min')  ? $request->query('min') : 1;
        $max_price = $request->query('max')  ? $request->query('max') : 500;
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
        $tags = Tag::orderBy('name', 'ASC')->get();

        $products = Product::where(function($query) use($f_brands){
            $query->whereIn('brand_id', explode(',', $f_brands))->orWhereRaw("'".$f_brands."'=''");
        })->when($f_subcategory, function ($query) use ($f_subcategory) {
            // Solo filtra si hay subcategoría
            $query->where('category_id', $f_subcategory);
        })->with(['tags' => function($query) {
            $query->take(5); // Limitar a las primeras 5 etiquetas
        }])
        ->where(function ($query) use ($min_price, $max_price) {
            //$query->whereBetween('regular_price', [$min_price, $max_price])
                //->orWhereBetween('sale_price', [$min_price, $max_price]);
        })->orderBy($o_column, $o_order)->paginate($size);
        
        $categories = Category::whereNull('parent_id')
                        ->with('subcategories')
                        ->orderBy('name', 'ASC')
                        ->get();

        return view('shop.index', compact('products', 'categories', 'size', 'order', 'brands', 'f_brands', 'f_subcategory', 'min_price', 'max_price', 'tags'));
    }

    public function product_details($product_slug)
    {
        $product = Product::with([
                        'tags', 
                        'tieredPrices.variation',  
                        'tieredPrices.quantity'  
                    ])->where('slug', $product_slug)->firstOrFail(); 
                    
        //dd($product->toArray());

        $rproducts = Product::where('slug', '<>', $product_slug)
                    ->inRandomOrder()
                    ->take(8)
                    ->get();

        //dd($product->price_with_taxes);
        //dd($product->toArray());
        //dd($rproducts->toArray());

        return view('shop.product.details', compact('product', 'rproducts'));
    }

    public function show($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $categories = Category::whereNull('parent_id')
                        ->with('subcategories')
                        ->orderBy('name', 'ASC')
                        ->get();

        $brands = Brand::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        $size = $request->query('size') ? $request->query('size') : 12;

        $subcategoryIds = $category->subcategories()->pluck('id');

        if ($subcategoryIds->isNotEmpty()) {
            $products = Product::whereIn('category_id', $subcategoryIds->push($category->id))
                                ->paginate($size);
        } else {
            $products = $category->products()->paginate($size);
        }

        $f_brands = $request->query('brands');
        $f_subcategory = $request->query('subcategory');
        $order = $request->query('order') ? $request->query('order') : -1;

        $f_category = $category->id;

        return view('shop.index', compact(
            'categories',
            'products',
            'category',
            'brands',
            'f_brands',
            'f_subcategory',
            'f_category',
            'size',
            'order',
            'tags'
        ));
    }

    public function search(Request $request)
    {
        $query = trim($request->get('q'));

        if (!$query) {
            return redirect()->route('shop');
        }

        $categories = Category::whereNull('parent_id')
                        ->with('subcategories')
                        ->orderBy('name', 'ASC')
                        ->get();

        $brands = Brand::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        $size = $request->query('size', 12);

        $products = Product::where('name', 'LIKE', "%{$query}%")
                            ->paginate($size);

        // Variables que usa la vista
        $f_brands = $request->query('brands');
        $f_subcategory = $request->query('subcategory');
        $order = $request->query('order', -1);
        $f_category = null; // No hay categoría fija en búsqueda

        // No hay una categoría específica, así que usamos un objeto "falso" para evitar errores
        $category = (object)[
            'name' => "Resultados de búsqueda: {$query}",
            'slug' => 'buscar',
            'image' => null
        ];

        return view('shop.index', compact(
            'categories',
            'products',
            'category',
            'brands',
            'f_brands',
            'f_subcategory',
            'f_category',
            'size',
            'order',
            'tags'
        ));
    }
}
