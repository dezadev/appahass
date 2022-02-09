<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return view('page/asy');
    }
}
