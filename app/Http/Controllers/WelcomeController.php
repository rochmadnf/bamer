<?php

namespace App\Http\Controllers;

use App\Traits\NavigationTrait;

class WelcomeController extends Controller
{
    use NavigationTrait;

    public function index()
    {
        $features = array_slice($this->navItem(), 1);
        return view('pages.welcome', compact('features'));
    }
}
