<?php

namespace App\Services;

class SyncConflictService
{
    public function resolve(array $event): array
    {
        return [
            'status' => 'accepted',
            'event' => $event
        ];
    }
}