<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'parent_id', 'title', 'meta_title', 'meta_description', 'meta_keywords', 'description'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relación: Una categoría puede tener muchas subcategorías
    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Relación: Una subcategoría pertenece a una categoría
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
