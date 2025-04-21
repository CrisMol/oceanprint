<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTieredPrice extends Model
{
    protected $fillable = ['product_id', 'variation_id', 'quantity_id', 'regular_price', 'sale_price', 'is_popular'];

    /**
     * Relación con Producto (Muchos a Uno)
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Relación con Variaciones (Muchos a Uno)
     */
    public function variation()
    {
        return $this->belongsTo(ProductVariation::class, 'variation_id');
    }

    /**
     * Relación con Cantidades (Muchos a Uno)
     */
    public function quantity()
    {
        return $this->belongsTo(ProductQuantity::class, 'quantity_id');
    }
}
