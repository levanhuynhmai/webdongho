<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
   
    public function __construct()
    {
        $product = product::all();
        view()->share('product',$product);
    }
    function product(){
        
        return view('index');
    }
    public function collections(){
        $product = product::all();
        return view('collections/all');
    }
}
