@extends('master.main')

@section('title', 'DataPenduduk')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Penduduk</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Data Penduduk</a></li>
                    <li class="active">Edit</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Data</strong>
                </div>
                <div class="pull-right">
                    <a href="{{route('data')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> Back</i>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{route('editprocess', $data_p->id)}}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Masukkan NIK</label>
                                <input type="text" name="nik" class="form-control" value="{{ $data_p ->nik}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $data_p ->name}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="desc" class="form-control" required>{{ $data_p ->desc}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection