<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PosController extends Controller
{
 public function bootstrap(Request $request){
  return response()->json([
   'company'=>null,
   'catalog'=>[],
   'modules'=>[],
   'sync'=>[]
  ]);
 }
}