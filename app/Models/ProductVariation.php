<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    protected $fillable = ['name'];

    /**
     * Relación con ProductTieredPrice (Uno a Muchos)
     */
    public function tieredPrices()
    {
        return $this->hasMany(ProductTieredPrice::class, 'variation_id');
    }
}
