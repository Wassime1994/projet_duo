<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorteFolioController extends Controller
{
    public function index () {
        return view('admin.portefolio');
    }
    public function create () {
        return view('admin.portefolio')  ;
    }
}
