<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     *  DASHBOARD PAGE
     */
    public function index() {
        // Show the view
        return view('dashboard');
    }
}
