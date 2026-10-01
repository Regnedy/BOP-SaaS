<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeItem extends Model
{
    protected $fillable = [
        'recipe_id',
        'inventory_item_id',
        'quantity',
        'unit'
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function inventoryItem()
    {
        return $this->belongsTo(InventoryItem::class);
    }
}