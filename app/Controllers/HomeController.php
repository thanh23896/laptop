<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\format\NumberFormat;
use App\Models\ProductModel;

class HomeController extends Controller
{
    public function index()
    {

        $product = new ProductModel;
        $products = $product->orderBy('id', 'desc')->limit(0, 10)->get();
        $this->view('frontend/trangchu', ['products' => $products]);
    }

   
   
}
