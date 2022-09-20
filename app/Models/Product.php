<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Product::class, 'product_ingredients', 'product_id', 'ingredient_id');
    }

    public function parent()
    {
        return $this->belongsTo(Product::class, 'parent_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany(Product::class, 'parent_id', 'id');
    }
}
