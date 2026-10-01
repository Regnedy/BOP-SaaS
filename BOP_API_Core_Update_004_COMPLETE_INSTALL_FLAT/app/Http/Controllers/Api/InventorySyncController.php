<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventorySyncController extends Controller
{
    public function push(Request $request)
    {
        return response()->json([
            'message' => 'Inventory sync received',
            'processed' => count($request->all())
        ]);
    }

    public function pull()
    {
        return response()->json([
            'inventory' => []
        ]);
    }
}