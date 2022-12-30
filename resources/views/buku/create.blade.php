@extends('templates.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Murid</h4>
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

                <form action="/buku/store" method="POST">
                    @csrf
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Buku</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="nama_buku" placeholder="Nama Buku">
                    </div>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan"></textarea>
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