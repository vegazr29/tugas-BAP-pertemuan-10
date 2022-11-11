@extends('layouts.app')

@section('title','Dosen')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">dosen {{ $dosen->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/dosen') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/dosen/' . $dosen->id . '/edit') }}" title="Edit dosen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/dosen' . '/' . $dosen->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete dosen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dosen->id }}</td>
                                    </tr>
                                    <tr><th> DosenID </th><td> {{ $dosen->DosenID }} </td></tr><tr><th> Nama Dosen </th><td> {{ $dosen->nama_dosen }} </td></tr><tr><th> Nama Matakuliah </th><td> {{ $dosen->nama_matakuliah }} </td></tr><tr><th> Kode Matakuliah </th><td> {{ $dosen->kode_matakuliah }} </td></tr><tr><th> Tahun ajar </th><td> {{ $dosen->tahun_ajar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
