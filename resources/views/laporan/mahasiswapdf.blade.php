@extends('layouts.app')

@section('title')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        <style>
            body{
                padding: 15px;
            }
            h5{
                margin-top: -15px;
            }
            table{
                border: 1px solid;
            }
            </style>
            <a target="_blank" href="/laporan/mahasiswa/pdf" class="btn btn-primary">Cetak PDF</a>
        <h1>
            Universitas Pasti jaya<br>
            Fakultas Ilmu Komputer
        </h1>
        <h5>Jalan. Pasti Ada No.777<br>
        Telp. 0617757891
        </h5>
    <title>Laporan mahasiswa</title>
</head>
    <h3>Laporan mahasiswa</h3>
    <table>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{$mhs->StudentID}}</td>
        <td>{{$mhs->Nama}}</td>
        <td>{{$mhs->Jurusan}}</td>
        <td>{{$mhs->Tahun_masuk}}</td>

    @endforeach
</tr>
</table>
</body>
</html>