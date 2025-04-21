<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    protected $fillable = ['quantity'];

    /**
     * Relación con ProductTieredPrice (Uno a Muchos)
     */
    public function tieredPrices()
    {
        return $this->hasMany(ProductTieredPrice::class, 'quantity_id');
    }
}
