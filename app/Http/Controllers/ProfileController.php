<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Radyan',
                'age' => 20,
            ],
            [
                'name' => 'Nicholas',
                'age' => 21,
            ],
            [
                'name' => 'Richard',
                'age' => 17,
            ]
        ];

        return view('profile', ['users' => $users]);
    }
}
