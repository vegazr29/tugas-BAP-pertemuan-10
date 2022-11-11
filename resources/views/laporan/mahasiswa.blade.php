@extends('layouts.app')

@section('title','Laporan Mahasiswa')

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
            table,th,td{
                border: 1px solid;
            }
            </style>
        <h1>
            Universitas Pasti jaya<br>
            Fakultas Ilmu Komputer
        </h1>
        <h5>Jalan. Pasti Ada No.777<br>
        Telp. 0617757891
        </h5>
    <title>Laporan mahasiswa</title>
</head>
    <center><h3>Laporan mahasiswa</h3></center>
    <table>
        <tr>
            <th>StudentID</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{$mhs->StudentID}}</td>
        <td>{{$mhs->Nama}}</td>
        <td>{{$mhs->Jurusan}}</td>
        <td>{{$mhs->Tahun_masuk}}</td>

    @endforeach
</tr>
</table>
@endsection
</html>