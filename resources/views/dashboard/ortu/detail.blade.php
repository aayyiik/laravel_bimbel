@extends('templates.master')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                      
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orang Tua</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
           
                <!-- konten -->
                <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="{{ asset('assets/vendors/images/photo2.jpg') }}" alt="Picture" class="">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0">{{ Auth::user()->nama }} </h5>
                        <p class="text-center text-muted font-14">Wali Murid</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email</span>
                                    {{ Auth::user()->email }}
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    {{ Auth::user()->hp }}
                                </li>
                         
                            </ul>
                        </div>
                    
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab" aria-selected="true">Detail Kemajuan</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Timeline Tab start -->
                                    <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="profile-timeline">
                                                <div class="timeline-month">
                                                    <h5> 2022 </h5>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-md-2 col-form-label">Select</label>
                                                    <div class="col-sm-12 col-md-10">
                                                        <select class="custom-select col-12" name="id" id="id">
                                                            <option selected="false">--Pilih--</option>
                                                            @foreach ($user as $murid)
                                                                <option value="{{ $murid->id }}">{{ $murid->nama }}</option>
                                                            @endforeach
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                        <input class="form-control" name="fullname" type="text" placeholder="Johnny Brown">
                                                </div>
                                                

                                                <div class="form-group">
                                                    <label>Month View</label>
                                                    <input class="form-control " name="month" placeholder="Select Month" type="month">
                                                </div> --}}
                                              
                                                <button type="submit" class="btn btn-primary btn-lg btn-block dw dw-analytics-5" name="search" id="search">Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline Tab End -->
                                    <!-- Tasks Tab start -->
                                  
                                    <!-- Tasks Tab End -->
                                    <!-- Setting Tab start -->
                                    
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                </div>
                <!-- endkonten -->
           
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <div class="footer-wrap pd-20 mb-20 card-box"><a href="https://github.com/dropways" target="_blank">template</a>        </div>
    </div>
</div>

@endsection
