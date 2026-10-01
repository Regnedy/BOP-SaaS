<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(RecipeItem::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}