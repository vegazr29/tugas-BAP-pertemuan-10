@extends('layouts.app')

@section('title','Laporan Mahasiswa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">mahasiswa {{ $mahasiswa->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/mahasiswa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/mahasiswa/' . $mahasiswa->id . '/edit') }}" title="Edit mahasiswa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/mahasiswa' . '/' . $mahasiswa->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete mahasiswa" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mahasiswa->id }}</td>
                                    </tr>
                                    <tr><th> StudentID </th><td> {{ $mahasiswa->StudentID }} </td></tr><tr><th> Nama </th><td> {{ $mahasiswa->Nama }} </td></tr><tr><th> Jurusan </th><td> {{ $mahasiswa->Jurusan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
