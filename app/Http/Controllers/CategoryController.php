<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use PDF;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $kategories = Kategori::all();
        return view('pages.category', ['kategories'=>$kategories]);
    }

    public function generatepdf(){
        $kategories = Kategori::all();

        $pdf = PDF::loadView('pages.category', [ 'kategories' => $kategories]);

        return $pdf->download('daftarkategori.pdf');
    }
}
