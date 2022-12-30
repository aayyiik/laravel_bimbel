@extends('templates.master')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Murid</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Murid</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <form action="/murid/{{ $murid->id }}/update" method="POST">
                    @csrf
                  
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Murid</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="nama"type="text" value="{{ $murid->nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="gender4" name="gender" class="custom-control-input" value="M"  {{ $murid->gender == 'M' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="gender4">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="gender5" name="gender" class="custom-control-input" value="F"  {{ $murid->gender == 'F' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="gender5">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tgl Lahir</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="tgl_lahir" type="date" value="{{ $murid->tgl_lahir }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kota Lahir</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="kota_lahir" type="text" value="{{ $murid->kota_lahir }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="nama_ortu" type="text" value="{{ $murid->nama_ortu }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tgl Masuk</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="tgl_masuk" type="date" value="{{ $murid->tgl_masuk }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="status4" name="status" class="custom-control-input" value=1  {{ $murid->status == 1 ? 'checked' : ''}}>
                            <label class="custom-control-label" for="status4">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="status5" name="status" class="custom-control-input" value=0  {{ $murid->status == 0 ? 'checked' : ''}}>
                            <label class="custom-control-label" for="status5">Deaktif</label>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <div class="footer-wrap pd-20 mb-20 card-box"><a href="https://github.com/dropways" target="_blank">template</a>        </div>
    </div>
</div>

@endsection
