<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductQuantity;
use App\Models\ProductTieredPrice;
use App\Models\ProductVariation;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function brands()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);

        return view('admin.brands', compact('brands'));
    }

    public function add_brand()
    {
        return view('admin.brand-add');
    }

    public function brand_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:brands,slug',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048', // Se permite null para evitar errores
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        if ($request->hasFile('image')) { // Verifica si se envió una imagen
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
            $this->GenerateBrandThumbailsImage($image, $file_name);
            $brand->image = $file_name;
        }

        $brand->save();

        return redirect()->route('admin.brands')->with('status', 'La marca ha sido creada exitosamente!');
    }

    public function brand_edit($id)
    {
        $brand = Brand::find($id);

        return view('admin.brand-edit', compact('brand'));
    }

    public function brand_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:brands,slug,'.$request->id,
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]); 

        $brand = Brand::find($request->id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        if ($request->hasFile('image')) {
            if (File::exists(public_path('uploads/brands').'/'.$brand->image)) {
                File::delete(public_path('uploads/brands').'/'.$brand->image);
            }
            $image = $request->file('image');
            $file_extension = $request->file('image')->extension();
            $file_name = Carbon::now()->timestamp.'.'.$file_extension;
            $this->GenerateBrandThumbailsImage($image, $file_name);
            $brand->image = $file_name;
        }
        $brand->save();

        return redirect()->route('admin.brands')->with('status', 'La marca ha sido actualizada exitosamente!');
    }

    public function GenerateBrandThumbailsImage($image, $imageName)
    {
        $destinationPath = public_path('uploads/brands');
        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);
    }

    public function brand_delete($id)
    {
        $brand = Brand::find($id);

        if (File::exists(public_path('uploads/brands').'/'.$brand->image)) {
            File::delete(public_path('uploads/brands').'/'.$brand->image);
        }

        $brand->delete();

        return redirect()->route('admin.brands')->with('status', 'La marca ha sido eliminada exitosamente!');
    }

    public function categories()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);

        return view('admin.categories', compact('categories'));
    }

    public function category_add()
    {
        $categories = Category::orderBy('name', 'ASC')->get();

        return view('admin.category-add', compact('categories'));
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) { 
            $image = $request->file('image');
            $file_extension = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extension;
        
            $this->GenerateCategoryThumbailsImage($image, $file_name);
            
            $category->image = $file_name; 
        }

        $category->save();

        return redirect()->route('admin.categories')->with('status', 'La categoría ha sido creada exitosamente!');
    }

    public function GenerateCategoryThumbailsImage($image, $imageName)
    {
        $destinationPath = public_path('uploads/categories');
        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124,124,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);
    }

    public function category_edit($id)
    {
        $category = Category::find($id);
        $categories = Category::where('id', '!=', $id)->orderBy('name', 'ASC')->get();

        return view('admin.category-edit', compact('category', 'categories'));
    }

    public function category_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.$request->id,
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]); 

        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->parent_id = $request->parent;
        $category->slug = Str::slug($request->name);
        if ($request->hasFile('image')) {
            if (File::exists(public_path('uploads/categories').'/'.$category->image)) {
                File::delete(public_path('uploads/categories').'/'.$category->image);
            }
            $image = $request->file('image');
            $file_extension = $request->file('image')->extension();
            $file_name = Carbon::now()->timestamp.'.'.$file_extension;
            $this->GenerateCategoryThumbailsImage($image, $file_name);
            $category->image = $file_name;
        }
        $category->save();

        return redirect()->route('admin.categories')->with('status', 'La categoría ha sido actualizada exitosamente!');
    }

    public function category_delete($id)
    {
        $category = Category::find($id);

        if (File::exists(public_path('uploads/categories').'/'.$category->image)) {
            File::delete(public_path('uploads/categories').'/'.$category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories')->with('status', 'La categoría ha sido eliminada exitosamente!');
    }

    public function products()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.products', compact('products'));
    }

    public function product_add()
    {
        $categories = Category::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        $variationsProduct = ProductVariation::orderBy('name')->get();
        $quantitiesProduct = ProductQuantity::orderBy('quantity')->get();

        return view('admin.product-add', compact('categories', 'brands', 'tags', 'variationsProduct', 'quantitiesProduct'));
    }

    public function product_store(Request $request)
    {
        Log::info('Datos recibidos en product_store:', $request->all());

        $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|unique:products,slug',
            'short_description' => 'nullable|string|max:500',
            'description' => 'required|string',
            'regular_price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'featured' => 'boolean',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $rules = [];

        if($request->type_product === 'variacion'){
            $rules['variation_id.*'] = 'required|exists:product_variations,id';
            $rules['quantity_id.*'] = 'required|exists:product_quantities,id';
            $rules['regular_price_variation.*'] = 'required|numeric|min:0.01';
            $rules['sale_price_variation.*'] = 'nullable|numeric|min:0';
        }

        $request->validate($rules);

        //dd($request->all());

        DB::beginTransaction(); // Iniciar la transacción
        Log::info('Iniciando transacción');

        try {
            $product = new Product();
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
            $product->short_description = $request->short_description;
            $product->description = $request->description;
            $product->regular_price = $request->input('regular_price') ?? 0;
            $product->sale_price = $request->input('sale_price') ?? 0;
            $product->SKU = $request->SKU;
            $product->stock_status = $request->stock_status;
            $product->featured = $request->featured ?? false;
            $product->quantity = $request->quantity;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;

            $current_timestamp = Carbon::now()->timestamp;

            if ($request->hasFile('image')) {
                Log::info('Procesando imagen principal');
                $image = $request->file('image');
                $imageName = $current_timestamp . '.' . $image->extension();
                $this->GenerateProductThumbailImage($image, $imageName);
                $product->image = $imageName;
            }

            $gallery_arr = [];
            $gallery_images = "";
            $counter = 1;

            if ($request->hasFile('images')) {
                Log::info('Procesando galería de imágenes');
                $allowedFileExtension = ['jpg', 'jpeg', 'png'];
                $files = $request->file('images');
                foreach ($files as $file) {
                    $gextension = $file->getClientOriginalExtension();
                    if (in_array($gextension, $allowedFileExtension)) {
                        $gfileName = $current_timestamp . "-" . $counter . "." . $gextension;
                        $this->GenerateProductThumbailImage($file, $gfileName);
                        array_push($gallery_arr, $gfileName);
                        $counter++;
                    }
                }
                $gallery_images = implode(',', $gallery_arr);
            }

            $product->images = $gallery_images;
            $product->save();
            Log::info('Producto guardado');

            // Procesar y almacenar las variaciones
            $this->processVariations($request->all(), $product->id);

            if ($request->tags) {
                $this->processTagsProducts($request->tags, $product);
            }

            DB::commit(); // Confirmar la transacción si todo salió bien

            return redirect()->route('admin.products')->with('status', 'Producto agregado exitosamente!');
        } catch (\Exception $e) {
            DB::rollBack(); // Revertir los cambios en caso de error

            return redirect()->route('admin.products')->with('error', 'Hubo un error al agregar el producto: ' . $e->getMessage());
        }
    }

    private function processVariations($data, $productId)
    {
        // Verificar si el tipo de producto es "variación"
        if ($data['type_product'] !== 'variacion') {
            return []; // No procesar nada si no es un producto con variaciones
        }

        $variations = [];

        // Iterar sobre los valores de las variaciones
        foreach ($data['variation_id'] as $index => $variationId) {
            $variation = [
                'product_id'    => $productId,
                'variation_id'  => $variationId ?: null, // Si no hay variación, se asigna null
                'quantity_id'   => $data['quantity_id'][$index] ?? null,
                'regular_price' => $data['regular_price_variation'][$index] ?? 0, // Si no hay, poner 0
                'sale_price'    => $data['sale_price_variation'][$index] ?? 0, // Si no hay, poner 0
                'is_popular'    => $data['is_popular'][$index] ?? false,
            ];

            $variations[] = $variation;
        }

        // Llamar a la validación antes de guardar
        $this->validateVariations($variations);

        // Guardar las variaciones en la base de datos
        ProductTieredPrice::insert($variations);

        return true;
    }
    
    private function validateVariations($variations)
    {
        foreach ($variations as $index => $variation) {
            // Reemplazar valores null por 0 en precios
            $variations[$index]['regular_price'] = $variation['regular_price'] ?? 0;
            $variations[$index]['sale_price'] = $variation['sale_price'] ?? 0;
    
            // Verificar que al menos uno de variation_id o quantity_id tenga un valor
            $hasVariationId = !empty($variation['variation_id']);
            $hasQuantityId = !empty($variation['quantity_id']);
    
            if (!$hasVariationId && !$hasQuantityId) {
                return redirect()->route('admin.products')
                    ->with('error', 'Cada variación debe tener al menos un ID de variación o cantidad.');
            }
        }
    
        return $variations;
    }    

    public function product_variation_store(Request $request)
    {
        // Validación de los datos de entrada
        $validatedData = $request->validate([
            'name_variation' => 'required|string|max:255|unique:product_variations,name',
        ]);

        // Crear la variación en la base de datos
        $variation = ProductVariation::create([
            'name' => $validatedData['name_variation'],
        ]);

        // Devolver respuesta en JSON con la variación creada
        return response()->json([
            'success' => true,
            'message' => 'Variación creada correctamente!',
            'variation' => [
                'id' => $variation->id,
                'name' => $variation->name
            ]
        ]);
    }

    public function product_quantity_variation_store(Request $request) 
    {
        // Validación de los datos de entrada
        $validatedData = $request->validate([
            'quantity_product_variation' => 'required|integer|unique:product_quantities,quantity',
        ]);

        // Crear la variación en la base de datos
        $quantity = ProductQuantity::create([
            'quantity' => $validatedData['quantity_product_variation'],
        ]);

        // Devolver respuesta en JSON con la variación creada
        return response()->json([
            'success' => true,
            'message' => 'Cantidad creada correctamente!',
            'quantity' => [
                'id' => $quantity->id,
                'quantity' => $quantity->quantity
            ]
        ]);
    }

    private function processTagsProducts($tags, $product)
    {
        $tagIds = [];

        foreach ($tags as $tag) {
            // Si el tag es numérico, es un ID existente
            if (is_numeric($tag)) {
                // Verifica si el ID existe
                $tagExists = Tag::find($tag);
                if ($tagExists) {
                    // Si el tag existe, lo agregamos al array de IDs
                    $tagIds[] = $tag;
                }
            } else {
                // Si no es numérico, es un nombre de etiqueta
                // Crear o buscar la etiqueta por nombre
                $tagCreated = Tag::firstOrCreate(
                    ['name' => $tag], 
                    ['slug' => Str::slug($tag)]
                );
                // Agregar el ID de la etiqueta creada o encontrada
                $tagIds[] = $tagCreated->id;
            }
        }

        // Sincronizar las etiquetas al producto
        $product->tags()->sync($tagIds);
    }

    /*public function GenerateProductThumbailImage($image, $imageName)
    {
        $destinationPathThumbnail = public_path('uploads/products/thumbnails');
        $destinationPath = public_path('uploads/products');
        $img = Image::read($image->path());

        $img->cover(540, 689, "top");
        $img->resize(540,689,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);

        $img->resize(104,104,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPathThumbnail.'/'.$imageName);
    }*/
    public function GenerateProductThumbailImage($image, $imageName)
    {
        $destinationPathThumbnail = public_path('uploads/products/thumbnails');
        $destinationPath = public_path('uploads/products');
        $img = Image::read($image->path());

        // Imagen principal (600x600)
        $img->resize(600, 600, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($destinationPath . '/' . $imageName);

        // Miniatura (104x104)
        $img->resize(104, 104, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($destinationPathThumbnail . '/' . $imageName);
    }

    public function product_edit($id)
    {
        $product = Product::with(['tags', 'tieredPrices'])->find($id);

        //dd($product->toArray());

        $categories = Category::select('id', 'name')->orderBy('name')->get();
        $brands = Brand::select('id', 'name')->orderBy('name')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();
        $variationsProduct = ProductVariation::orderBy('name')->get();
        $quantitiesProduct = ProductQuantity::orderBy('quantity')->get();

        return view('admin.product-edit', compact('product', 'categories', 'brands', 'tags', 'variationsProduct', 'quantitiesProduct'));
    }

    public function product_update(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|unique:products,slug,'.$request->id,
            'short_description' => 'nullable|string|max:500',
            'description' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'SKU' => 'required',
            'stock_status' => 'required',
            'featured' => 'boolean',
            'quantity' => 'required|integer|min:0',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
        ]);

        //dd($request->all());

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->SKU = $request->SKU;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured ?? false;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;

        $current_timestamp = Carbon::now()->timestamp;

        if ($request->hasFile('image')) {
            if (File::exists(public_path('upload/products').'/'.$product->image)) {
                File::delete(public_path('upload/products').'/'.$product->image);
            }

            if (File::exists(public_path('upload/products/thumbnails').'/'.$product->image)) {
                File::delete(public_path('upload/products/thumbnails').'/'.$product->image);
            }

            $image = $request->file('image');
            $imageName = $current_timestamp . '.' . $image->extension();
            $this->GenerateProductThumbailImage($image, $imageName);
            $product->image = $imageName;
        }

        $gallery_arr = array();
        $gallery_images = "";
        $counter = 1;

        if ($request->hasFile('images')) {

            foreach(explode(',', $product->images) as $oFile) {
                if (File::exists(public_path('upload/products').'/'.$oFile)) {
                    File::delete(public_path('upload/products').'/'.$oFile);
                }
    
                if (File::exists(public_path('upload/products/thumbnails').'/'.$oFile)) {
                    File::delete(public_path('upload/products/thumbnails').'/'.$oFile);
                }
            }

            $allowedFileExtension = ['jpg', 'jpeg', 'png'];
            $files = $request->file('images');
            foreach ($files as $file) {
                $gextension = $file->getClientOriginalExtension();
                $gcheck = in_array($gextension, $allowedFileExtension);
                if ($gcheck) {
                    $gfileName = $current_timestamp . "-" . $counter . "." . $gextension;
                    $this->GenerateProductThumbailImage($file, $gfileName);
                    array_push($gallery_arr, $gfileName);
                    $counter = $counter + 1;
                }
            }
            $gallery_images = implode(',', $gallery_arr);
            $product->images = $gallery_images;
        }

        if ($request->tags) {
            $this->processTagsProducts($request->tags, $product);
        }

        // Procesar tipo de producto (eliminar variaciones si se cambia a simple)
        $this->processProductType($request, $product);

        // Procesar variaciones solo si el producto no es "simple"
        if ($request->type_product !== "simple") {
            $this->processTieredPrices($request, $product);
        }

        $product->save();

        return redirect()->route('admin.products')->with('status', 'Producto actualizado exitosamente!');
    }

    private function processProductType($request, $product)
    {
        // Verificar si el usuario ha cambiado el producto a tipo "simple"
        if ($request->type_product === "simple") {
            // Si el producto tenía variaciones, eliminarlas
            if ($product->tieredPrices()->exists()) {
                $product->tieredPrices()->delete();
            }
        }
    }

    private function processTieredPrices($request, $product)
    {
        // Obtener los IDs de tiered_prices existentes en la base de datos
        $existingTieredPrices = $product->tieredPrices()->pluck('id')->toArray();

        // Obtener los IDs que el usuario ha enviado (si existen)
        $submittedTieredPrices = $request->variation_product_id ?? []; 

        // Identificar los registros a eliminar (los que estaban antes pero no están en la nueva solicitud)
        $tieredPricesToDelete = array_diff($existingTieredPrices, $submittedTieredPrices);

        // Eliminar los registros que ya no existen en la solicitud
        if (!empty($tieredPricesToDelete)) {
            $product->tieredPrices()->whereIn('id', $tieredPricesToDelete)->delete();
        }

        // Procesar las variaciones enviadas
        foreach ($request->variation_id as $index => $variationId) {
            $quantityId = $request->quantity_id[$index] ?? null;
            $regularPrice = $request->regular_price_variation[$index] ?? null;
            $salePrice = $request->sale_price_variation[$index] ?? null;
            $isPopular = !empty($request->is_popular[$index]) ? 1 : 0;
        
            /*Log::info("Procesando variación", [
                'index' => $index,
                'variation_id' => $variationId,
                'quantity_id' => $quantityId,
                'regular_price' => $regularPrice,
                'sale_price' => $salePrice,
                'submitted_tiered_price_id' => $submittedTieredPrices[$index] ?? 'Nuevo'
            ]);*/
        
            // Si ya existe, actualizarlo, sino, crearlo
            $updatedTieredPrice = $product->tieredPrices()->updateOrCreate(
                ['id' => $submittedTieredPrices[$index] ?? null], // Condición para encontrar
                [
                    'product_id' => $product->id,
                    'variation_id' => $variationId,
                    'quantity_id' => $quantityId,
                    'regular_price' => $regularPrice,
                    'sale_price' => $salePrice,
                    'is_popular' => $isPopular,
                ]
            );
        
            /*Log::info("Resultado de updateOrCreate", [
                'id' => $updatedTieredPrice->id,
                'product_id' => $updatedTieredPrice->product_id,
                'variation_id' => $updatedTieredPrice->variation_id,
                'quantity_id' => $updatedTieredPrice->quantity_id,
                'regular_price' => $updatedTieredPrice->regular_price,
                'sale_price' => $updatedTieredPrice->sale_price
            ]);*/
        }
    }

    public function product_delete($id)
    {
        $product = Product::find($id);
        if (File::exists(public_path('upload/products').'/'.$product->image)) {
            File::delete(public_path('upload/products').'/'.$product->image);
        }

        if (File::exists(public_path('upload/products/thumbnails').'/'.$product->image)) {
            File::delete(public_path('upload/products/thumbnails').'/'.$product->image);
        }

        foreach(explode(',', $product->images) as $oFile) {
            if (File::exists(public_path('upload/products').'/'.$oFile)) {
                File::delete(public_path('upload/products').'/'.$oFile);
            }

            if (File::exists(public_path('upload/products/thumbnails').'/'.$oFile)) {
                File::delete(public_path('upload/products/thumbnails').'/'.$oFile);
            }
        }

        $product->delete();
        return redirect()->route('admin.products')->with('status', 'El producto ha sido eliminada exitosamente!');
    }
}
