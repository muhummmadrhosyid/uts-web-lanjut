@extends('master.main')

@section('title', 'DataPenduduk')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Data Penduduk</a></li>
                    <li class="active">Add</i></li>
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
                    <strong>Tambah Data</strong>
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
                        <form action="{{route('process')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Masukkan NIK</label>
                                <input type="text" name="nik" class="form-control @error('nik') 
                                is-invalid @enderror" value="{{ old('nik')}}" autofocus>
                                @error('nik')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Masukkan Nama</label>
                                <input type="text" name="name" class="form-control @error('name') 
                                is-invalid @enderror" value="{{ old('name')}}" autofocus>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea type="text" name="desc" class="form-control @error('desc') 
                                is-invalid @enderror">{{ old('desc')}}</textarea>
                                @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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