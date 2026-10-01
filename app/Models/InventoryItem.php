<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'unit',
        'current_stock',
        'minimum_stock',
        'cost',
        'status'
    ];

    public function movements()
    {
        return $this->hasMany(StockMovement::class);
    }
}