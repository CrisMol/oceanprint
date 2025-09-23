<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    public function tieredPrices()
    {
        return $this->hasMany(ProductTieredPrice::class, 'product_id');
    }

    // Precio unitario (sale_price si existe, sino regular_price)
    public function getUnitPriceAttribute()
    {
        return $this->sale_price > 0 ? $this->sale_price : $this->regular_price;
    }

    // Total según cantidad
    public function getSubtotalAttribute()
    {
        return $this->unit_price * $this->quantity;
    }

    // Total con impuestos según cantidad
    public function getTotalWithTaxesAttribute()
    {
        return  $this->subtotal * 1.15;
    }
}
