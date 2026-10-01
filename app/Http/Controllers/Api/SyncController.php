<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SyncQueue;
use Illuminate\Http\Request;

class SyncController extends Controller
{
    public function push(Request $request)
    {
        return response()->json([
            'message'=>'Sync received',
            'processed'=>count($request->all())
        ]);
    }

    public function pull()
    {
        return response()->json([
            'changes'=>[]
        ]);
    }
}