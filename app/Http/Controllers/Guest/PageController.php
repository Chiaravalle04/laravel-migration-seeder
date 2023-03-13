<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class PageController extends Controller
{
    public function index() {

        /* 
            MILESTONE 2
            
            $trains = Train::where('departure_date', '2023-03-13')->get();
        */

        $trains = Train::all();

        return view('welcome', compact('trains'));
        
    }
}
