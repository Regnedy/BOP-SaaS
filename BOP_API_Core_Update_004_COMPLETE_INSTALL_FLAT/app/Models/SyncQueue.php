<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SyncQueue extends Model
{
    protected $fillable = [
        'uuid',
        'entity_type',
        'entity_id',
        'action',
        'payload',
        'status',
        'attempts',
        'synced_at'
    ];

    protected $casts = [
        'payload' => 'array',
        'synced_at' => 'datetime'
    ];
}