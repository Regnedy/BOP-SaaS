<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['branch_id','name','uuid','last_sync_at','status'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}