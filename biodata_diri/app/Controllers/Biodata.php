<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('cv');
        echo view('footer');
    }
}
