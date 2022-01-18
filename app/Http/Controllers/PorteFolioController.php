<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portefolio;
use Illuminate\Http\Request;

class PorteFolioController extends Controller
{
    public function index () {
        return view('admin.portefolio');
    }
    public function create () {
        return view('admin.portefolio')  ;
    }
    public function store (Request $request) {
        $table = new Portefolio ;
        $table->titre=$request->titre ;
        $table->description=$request->description;
        $table->save() ;
        return redirect()-> route('portefolio.change') ;
    }
    public function modif () {
        $table=Portefolio::all() ;
        return view('admin.portefolio_modif' , compact('table')) ;
    }
    public function destroy(Portefolio $id) {
        $id->delete() ;
        return redirect()-> route('portefolio.change') ;
    }

    public function show (PorteFolio $id) {
        $table= $id ;
        return view('pages.portefolioshow', compact('table')) ;
    }
    public function edit (PorteFolio $id) {
        $data=$id ;
        return view('admin.edit.portefolio_edit' , compact('data')) ;
    }
    public function update (Portefolio $id , Request $request) {
        $table=$id ;
        $table->titre = $request->titre ;
        $table->description = $request->description ;
        $table->save() ;
        return redirect()->route('portefolio.change');

    }

}
