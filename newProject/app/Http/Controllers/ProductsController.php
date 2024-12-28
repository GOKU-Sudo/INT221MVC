<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class ProductsController extends Controller
{
    //
    public function productsdisplay(){

        $products = [
            ['name' => 'Laptop', 'price' => 700],
            ['name' => 'Smartphone', 'price' => 800],
            ['name' => 'Tab', 'price' => 600],
    
        ];
        return view('products', ['products' => $products]);
    }
}
