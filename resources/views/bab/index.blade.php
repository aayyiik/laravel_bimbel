@extends('templates.master')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Bab Buku</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bab</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="row">
                    <div class="col-sm-12">
                    <table class="data-table table stripe hover" id="DataTables_Table_0">
                    <thead>
                        <tr role="row">
                            <th class="sorting">Judul Buku</th>
                            <th class="sorting">No Bab</th>
                            <th class="sorting">Nama Bab</th>
                            <th class="sorting">Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($bab as $item)
                        <tr role="row" class="odd">
                            <td>{{ $item->buku->nama_buku }}</td>
                            <td>{{ $item->no_bab }}</td>
                            <td>{{ $item->nama_bab }}</td>
                            <td>{{ $item->keterangan }}</td>                          
                            <td style="">
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                        <a class="dropdown-item" href="/bab/{{ $item->id }}/edit"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="/bab/{{ $item->id }}/delete"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                     
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
