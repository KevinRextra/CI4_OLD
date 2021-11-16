<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home '
        ];
        return view('Pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        return view('Pages/about', $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'Contact Usa',
            'alamat'    => [
                [
                    'type'      => 'SMK langga Balikpapan',
                    'alamat'    => 'Jl. S Parman No.14 Gn.Guntur',
                    'kota'      => 'Kota Balikpapan'
                ]
            ]
        ];
        return view('Pages/contact', $data);
    }


}