<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckMutuController extends Controller
{
    public function index(){
        return view('pages.check')->withPageTitle('Uji Data');
    }

    public function method($algo){
        return view('pages.check.a-' . $algo)->withPageTitle('Uji Data');
    }
}
