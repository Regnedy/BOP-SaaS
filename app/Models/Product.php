<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'company_id',
        'category_id',
        'name',
        'description',
        'price',
        'cost',
        'barcode',
        'track_inventory',
        'status'
    ];

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}