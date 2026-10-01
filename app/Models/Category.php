<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'description',
        'status'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}