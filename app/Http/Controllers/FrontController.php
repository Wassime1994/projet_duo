<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view('welcome');
    }
    public function portefolio () {
        return view('pages.portefolio');
    }
     public function contact () {
        return view('pages.contact');
    }
     public function blog () {
        return view('pages.blog');
    }
    public function dashboard () {
        return view('admin.dashboard');
    }
}
