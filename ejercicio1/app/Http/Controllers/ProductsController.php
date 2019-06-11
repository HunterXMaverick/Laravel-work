<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getProducts(){
        $products= Product::where('name','=','xaKkM6ynzT')->get();
        return response()->json($products,200);
        // compro
        return "hola mudo";
    }
}
