<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     *  SHOP PAGE
     */
    public function index() {
        // Show the view
        return view('shop');
    }
}
