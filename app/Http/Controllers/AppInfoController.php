<?php

namespace App\Http\Controllers;

class AppInfoController extends Controller
{
    public function __invoke()
    {
        $credits = [
            [
                'name' => 'Universitas Tadulako',
                'url' => [
                    'site' => 'https://untad.ac.id',
                    'img' => 'https://untad.ac.id/wp-content/uploads/2024/03/logoatas.png'
                ]
            ],
            [
                'name' => 'Farmers using agricultural technology vector',
                'url' => [
                    'site' => 'https://www.freepik.com/free-vector/farmers-using-agricultural-technology-vector_16340308.htm',
                    'img' => 'https://img.freepik.com/free-vector/farmers-using-agricultural-technology-vector_53876-116043.jpg',
                ]
            ],
            [
                'name' => 'Flat illustration biotechnology concept',
                'url' => [
                    'site' => 'https://www.freepik.com/free-vector/flat-illustration-biotechnology-concept_12893244.htm',
                    'img' => 'https://img.freepik.com/free-vector/flat-illustration-biotechnology-concept_23-2148880770.jpg',
                ]
            ],
            [
                'name' => 'Isometric road map with a red pointer in the middle',
                'url' => [
                    'site' => 'https://www.freepik.com/free-vector/isometric-road-map-with-red-pointer-middle_963368.htm',
                    'img' => 'https://img.freepik.com/free-vector/isometric-road-map-with-red-pointer-middle_23-2147576765.jpg',
                ]
            ],
        ];
        return view('pages.app-info', compact('credits'));
    }
}
