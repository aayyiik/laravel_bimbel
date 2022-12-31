@extends('templates.master')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Guru</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit data Guru</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <form action="/guru/{{ $guru->id }}/update" method="POST">
                    @csrf
                  
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="nama"type="text" value="{{ $guru->nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="gender4" name="gender" class="custom-control-input" value="M"  {{ $guru->gender == 'M' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="gender4">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="gender5" name="gender" class="custom-control-input" value="F"  {{ $guru->gender == 'F' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="gender5">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="email" type="email" value="{{ $guru->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">No Hp</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="hp"type="text" value="{{ $guru->hp }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="status4" name="status" class="custom-control-input" value=1  {{ $guru->status == 1 ? 'checked' : ''}}>
                            <label class="custom-control-label" for="status4">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="status5" name="status" class="custom-control-input" value=0  {{ $guru->status == 0 ? 'checked' : ''}}>
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
