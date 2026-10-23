<?php

namespace App\Http\Controllers;

use App\Models\Plant;

class HomeController extends Controller
{
    public function index()
    {
        $plants = Plant::all();

        return view('home', [
            'plants' => $plants,
        ]);
    }
}
