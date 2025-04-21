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
}
