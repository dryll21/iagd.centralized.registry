<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'International Animals Genetics Database'
        ];
        return view('welcome', $data);
    }
}
