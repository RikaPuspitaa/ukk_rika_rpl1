<?php

namespace App\Http\Controllers;


use App\Models\RentLogs;
use PDF;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index(){
        $rent_logs = RentLogs::all();
        return view('generate.pinjam', ['rent_logs'=>$rent_logs]);
    }

    public function generatepdf(){
        $rent_logs = RentLogs::all();

        $pdf = PDF::loadView('generate.pinjam', [ 'rent_logs' => $rent_logs]);

        return $pdf->download('daftarkategori.pdf');
    }
}
