<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home.index');
    }

    public function contacts() {
        return view('home.contacts');
    }
}
