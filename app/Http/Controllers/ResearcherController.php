<?php

namespace App\Http\Controllers;

class ResearcherController extends Controller
{

    public function __invoke()
    {
        $researchers = [
            [
                "name"           => "Selvy Musdalifah, S.Si., M.Si",
                "avatar"         => "BEWkkybY4c78XNo30zopAeMaLp5D3dEKCgdh.jpg",
                "expertise"      => "Matematika Analisis",
                "google_scholar" => "https://scholar.google.com/citations?hl=en&user=S88DTYYAAAAJ",
            ],
            [
                "name"           => "Desy Lusiyanti, S.Si., M.Si",
                "avatar"         => "cpZsB7cfXxUcKVA6XWTjDSaNSBoXbjx1cnL9.jpg",
                "expertise"      => "Matematika Komputasi",
                "google_scholar" => "https://scholar.google.com/citations?hl=en&user=7QKsz7AAAAAJ",
            ],
            [
                "name"           => "Agusman Sahari, S.Si., M.Si",
                "avatar"         => "vFnvbnvsD57aso333MPTI0jlaMIIA1RNFSx1.jpg",
                "expertise"      => "Matematika Terapan",
                "google_scholar" => "https://scholar.google.com/citations?hl=en&user=WDQfWIwAAAAJ",
            ],
            [
                "name" => "Iman Al Fajri, S.Si., M.Si",
                "avatar" => "MPWRULEgaVgVoHoPQESJI8M9Ik7C9d0t.jpg",
                "expertise" => "Matematika Terapan",
                "google_scholar" => "https://scholar.google.com/citations?user=dGEJDOoAAAAJ&hl=en&oi=ao"
            ]

        ];

        return view('pages.researcher', compact('researchers'));
    }
}
