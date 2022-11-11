@extends('layouts.app')

@section('title','sertifikat')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">sertifikat {{ $sertifikat->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/sertifikat') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/sertifikat/' . $sertifikat->id . '/edit') }}" title="Edit sertifikat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/sertifikat' . '/' . $sertifikat->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete sertifikat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $sertifikat->id }}</td>
                                    </tr>
                                    <tr><th> StudentID </th><td> {{ $sertifikat->StudentID }} </td></tr><tr><th> Judulsertifikat </th><td> {{ $sertifikat->judulsertifikat }} </td></tr><tr><th> Penyelenggara </th><td> {{ $sertifikat->penyelenggara }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
