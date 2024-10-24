<?php

namespace App\Http\Controllers;

class ClusterMapController extends Controller
{
    public function __invoke()
    {
        return view('pages.cluster-map');
    }
}
