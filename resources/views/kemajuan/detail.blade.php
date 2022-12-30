@extends('templates.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Detail Kemajuan</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Kemajuan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <h6 class="mb-20 h6 text-blue">Nama Murid      : {{ $kemajuan->murid->nama }}</h6>
            <h6 class="mb-20 h6 text-blue">Diisi Oleh      : {{ $kemajuan->guru->nama }}</h6>
            <h6 class="mb-20 h6 text-blue">Tanggal diisi   : {{ $kemajuan->tgl }}</h6>
            <h6 class="mb-20 h6 text-blue">Status Murid    : {{ $kemajuan->status }} </h6>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                
                <div class="row">
                    <div class="col-sm-12">
                    <table class="data-table table stripe hover" id="DataTables_Table_0">
                    <thead>
                        <tr role="row">
                            <th class="sorting">Nama Bab</th>
                            <th class="sorting">Keterangan</th>
                        </tr>
                    </thead>
                    @foreach ($kemajuan->detail_kemajuan as $item)
                    <tbody>
                        
                        <tr role="row" class="odd">
                            <td>{{ $item->bab->nama_bab}}</td>   
                            <td>{{ $item->keterangan}}</td>                        
                        </tr>
                        
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <div class="footer-wrap pd-20 mb-20 card-box"><a href="https://github.com/dropways" target="_blank">template</a>        </div>
    </div>
</div>
@endsection