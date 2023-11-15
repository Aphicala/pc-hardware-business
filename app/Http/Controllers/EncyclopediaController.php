<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncyclopediaController extends Controller
{
    public function index()
    {
        return view('encyclopedia');
    }
}
