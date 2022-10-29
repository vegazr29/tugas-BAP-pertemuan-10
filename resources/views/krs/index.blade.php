<?php
    use App\Models\krs;
    use App\Models\vmhskrs;
?>
@extends('layouts.app')

@section('title')

@section('content')
    <h1>KRS Mahasiswa</h1>
    <style>
        table tr{
            padding: 10px;
        }
    </style>
<?php

        $rows = DB::select('
        SELECT StudentID,Nama,kode_krs,kode_term,kode_matakuliah,nama_matakuliah,sks,total_sks FROM vmhskrs');


        foreach ($rows as $row) {
            $Nama=$row->Nama;
            $StudentID=$row->StudentID;
            $sks=$row->total_sks;
            $term=$row->kode_term;
        }
        echo "<h3>Nama : " . $Nama."</h3><br>";
        echo "<h3>NIM : " . $StudentID."</h3><br>";
        echo "<h3>Term : " . $term."</h3><br>";
        echo "<h3>Jumlah SKS : " . $sks."</h3><br>";
        echo "<h3>IP : 4.00 </h3><br>";
        echo "<h4>Mata kuliah yang diambil </h4><br>";


        ?>
        <table style="padding: 30px;">
        <tr>
        <th>No</th>
            <th>kode matakuliah</th>
            <th>Nama matakuliah</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
        </tr>
        <?php
    $mhss = DB::select("
        SELECT StudentID,nama,kode_matkul,nama_matkul,sks,huruf FROM khs_detail_view");
        $no=1;

        foreach ($mhss as $mhs) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$mhs->kode_matkul. "</td>";
            echo "<td> " .$mhs->nama_matkul. "</td>";
            echo "<td>" .$mhs->sks."</td>";
            echo "<td>".$mhs->huruf."</td>";
            echo "</tr>";
            $no+=1;
        }
        ?>
    </table>
@endsection
