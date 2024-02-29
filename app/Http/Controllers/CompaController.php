<?php

namespace App\Http\Controllers;

use App\Models\Company;
use PDF;
use Illuminate\Http\Request;

class CompaController extends Controller
{
    /* public function index(){
        $companies = Company::all();
        return view('pages.compa', ['companies'=>$companies]);
    }

    public function generatepdf(){
        $companies = Company::all();

        $pdf = PDF::loadView('pages.compa', [ 'companies' => $companies]);

        return $pdf->download('daftarbuku.pdf');
    } */
}
