<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use PDF; 

class LaporanController extends Controller
{
    public function index(){
        $mhs = mahasiswa::all();
        return view('laporan/mahasiswa',['mahasiswa'=>$mhs]);
    }

    public function cetak_pdf(){
        $mhs = mahasiswa::all();
        $pdf = PDF::loadview('laporan/mahasiswapdf',['mahasiswa'=>$mhs]);

        return $pdf->download('laporan-mahasiswa');
    }

}
