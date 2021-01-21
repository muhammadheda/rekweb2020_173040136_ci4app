<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgramingUNPAS'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. ABC No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl. Rancaekek Majalaya no 203',
                    'kota' => 'Bandung'
                ]
            ]

        ];

        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
