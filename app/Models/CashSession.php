<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashSession extends Model
{
    protected $fillable = [
        'branch_id',
        'user_id',
        'opening_amount',
        'closing_amount',
        'status',
        'opened_at',
        'closed_at'
    ];

    public function movements()
    {
        return $this->hasMany(CashMovement::class);
    }
}