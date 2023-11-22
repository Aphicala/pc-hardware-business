<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SysBuildController extends Controller
{
    public function index()
    {
        return view('sysbuilder');
    }
}