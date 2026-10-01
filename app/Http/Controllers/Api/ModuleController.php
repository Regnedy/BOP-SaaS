<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index()
    {
        return response()->json([
            'modules' => []
        ]);
    }
}