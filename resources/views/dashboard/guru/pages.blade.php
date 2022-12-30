@extends('templates.master')
@section('content')


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            
                
                <div class="card-box pd-20 height-100-p mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/vendors/images/banner-img.png') }}" alt="">
                        </div>
                        <div class="col-md-8">
                            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                                Welcome back <div class="weight-600 font-30 text-blue">{{ Auth::user()->nama }}</div>
                            </h4>
                            <p class="font-18 max-width-600">Selamat bekerja kembali</p>
                        </div>
                    </div>
                </div>

                <div class="row pb-10">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">{{ $murid }}</div>
                                    <div class="font-14 text-secondary weight-500">Total Murid</div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy dw dw-startup-1"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">{{ $buku }}</div>
                                    <div class="font-14 text-secondary weight-500">Total Buku Pelajaran</div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);"><span class="icon-copy dw dw-books"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">{{ $bab }}</div>
                                    <div class="font-14 text-secondary weight-500">Total Bab</div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon"><i class="icon-copy dw dw-bookmark1"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">{{ $kemajuan }}</div>
                                    <div class="font-14 text-secondary weight-500">Total Kemajuan</div>
                                </div>
                                <div class="widget-icon">
                                    <div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);"><i class="icon-copy dw dw-profits-1"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        </div>
                        <div class="footer-wrap pd-20 mb-20 card-box">
                            <div class="footer-wrap pd-20 mb-20 card-box"><a href="https://github.com/dropways" target="_blank">template</a>                        </div>
                    </div>
                </div>


@endsection