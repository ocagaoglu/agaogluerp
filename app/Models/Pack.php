<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
