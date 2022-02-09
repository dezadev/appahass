<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'DASBOARD',
        ];

        return view('template/layout', $data);
    }
    public function asy()
    {
        $data = [
            'title' => 'ASYS',
        ];
        return view('page/asy', $data);
    }
    public function claim()
    {
        $data = [
            'title' => 'CLAIM',
        ];
        return view('page/claim', $data);
    }
    public function lkh()
    {
        $data = [
            'title' => 'LKH',
        ];
        return view('page/lkh', $data);
    }
}
