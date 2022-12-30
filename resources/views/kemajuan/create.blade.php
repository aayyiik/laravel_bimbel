

 <!DOCTYPE html>
 <html>
 <head>
     <!-- Basic Page Info -->
     <meta charset="utf-8">
     <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
 
     <!-- Site favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="http://127.0.0.1:8000/assets/vendors/images/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1:8000/assets/vendors/images/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1:8000/assets/vendors/images/favicon-16x16.png">
 
     <!-- Mobile Specific Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
     <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/vendors/styles/core.css">
     <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/vendors/styles/icon-font.min.css">
     <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/vendors/styles/style.css">
 
     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
     <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
 
         gtag('config', 'UA-119386393-1');
     </script>
 
     
 </head>
 <body>
     <div class="pre-loader">
         <div class="pre-loader-box">
             <div class="loader-logo"><img src="http://127.0.0.1:8000/assets/vendors/images/deskapp-logo.svg" alt=""></div>
             <div class='loader-progress' id="progress_div">
                 <div class='bar' id='bar1'></div>
             </div>
             <div class='percent' id='percent1'>0%</div>
             <div class="loading-text">
                 Loading...
             </div>
         </div>
     </div>
 
     
 
     
 
     <!-- WRAPPER -->
     <div id="wrapper">
     
 
         <!-- NAVBAR -->
         <div class="header">
     <div class="header-left">
         <div class="menu-icon dw dw-menu"></div>
         <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
         <div class="header-search">
             <form>
                 <div class="form-group mb-0">
                     <i class="dw dw-search2 search-icon"></i>
                     <input type="text" class="form-control search-input" placeholder="Search Here">
                     <div class="dropdown">
                         <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                             <i class="ion-arrow-down-c"></i>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right">
                             <div class="form-group row">
                                 <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                 <div class="col-sm-12 col-md-10">
                                     <input class="form-control form-control-sm form-control-line" type="text">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                 <div class="col-sm-12 col-md-10">
                                     <input class="form-control form-control-sm form-control-line" type="text">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                 <div class="col-sm-12 col-md-10">
                                     <input class="form-control form-control-sm form-control-line" type="text">
                                 </div>
                             </div>
                             <div class="text-right">
                                 <button class="btn btn-primary">Search</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
     <div class="header-right">
         <div class="dashboard-setting user-notification">
             <div class="dropdown">
                 <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                     <i class="dw dw-settings2"></i>
                 </a>
             </div>
         </div>
         
         <div class="user-info-dropdown">
             <div class="dropdown">
                 <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                     <span class="user-icon">
                         <img src="http://127.0.0.1:8000/assets/vendors/images/photo1.jpg" alt="">
                     </span>
                     <span class="user-name">Axcel Cakrawala</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                     <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                     <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                     <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                     <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Log Out</a>
                 </div>
             </div>
         </div>
 
     </div>
 </div>		<!-- END NAVBAR -->
         <!-- LEFT SIDEBAR -->
         <div class="right-sidebar">
     <div class="sidebar-title">
         <h3 class="weight-600 font-16 text-blue">
             Layout Settings
             <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
         </h3>
         <div class="close-sidebar" data-toggle="right-sidebar-close">
             <i class="icon-copy ion-close-round"></i>
         </div>
     </div>
     <div class="right-sidebar-body customscroll">
         <div class="right-sidebar-body-content">
             <h4 class="weight-600 font-18 pb-10">Header Background</h4>
             <div class="sidebar-btn-group pb-30 mb-10">
                 <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                 <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
             </div>
 
             <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
             <div class="sidebar-btn-group pb-30 mb-10">
                 <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                 <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
             </div>
 
             <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
             <div class="sidebar-radio-group pb-10 mb-10">
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                     <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                     <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                     <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                 </div>
             </div>
 
             <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
             <div class="sidebar-radio-group pb-30 mb-10">
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                     <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                     <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                     <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                     <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                     <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                 </div>
                 <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                     <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                 </div>
             </div>
 
             <div class="reset-options pt-30 text-center">
                 <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
             </div>
         </div>
     </div>
 </div>
 
 <div class="left-side-bar">
     <div class="brand-logo">
         <a href="index.html">
             <img src="http://127.0.0.1:8000/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
             <img src="http://127.0.0.1:8000/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
         </a>
         <div class="close-sidebar" data-toggle="left-sidebar-close">
             <i class="ion-close-round"></i>
         </div>
     </div>
     <div class="menu-block customscroll">
         <div class="sidebar-menu">
             <ul id="accordion-menu">
                 <li class="dropdown">
                     <a href="/dashboard" class="dropdown-toggle no-arrow">
                         <span class="micon dw dw-house-1"></span><span class="mtext">Dashbooard</span>
                     </a>
                     
                 </li>
 
 
                 <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle">
                         <span class="micon dw dw-group"></span><span class="mtext">Users</span>
                     </a>
                     <ul class="submenu">
                         <li><a href="/ortu">Data Orang Tua</a></li>
                         <li><a href="/guru">Data Guru</a></li>
                         <li><a href="/staf">Data Staf</a></li>
                         <li><a href="create/user">Tambah User</a></li>
                     </ul>
                 </li>
 
                 <li class="dropdown">
                     <a href="/murid" class="dropdown-toggle no-arrow">
                         <span class="micon dw dw-user-1"></span><span class="mtext">Murid</span>
                     </a>
                 </li>
 
                 <li class="dropdown">
                     <a href="/role" class="dropdown-toggle no-arrow">
                         <span class="micon dw dw-human-resources"></span><span class="mtext">Role</span>
                     </a>
                 </li>
 
                 <li class="dropdown">
                     <a href="/kemajuan" class="dropdown-toggle no-arrow">
                         <span class="micon dw dw-bar-chart1"></span><span class="mtext">Kemajuan</span>
                     </a>
                 </li>
 
                 <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle">
                         <span class="micon icon-copy dw dw-book-1"></span><span class="mtext">Pembelajaran</span>
                     </a>
                     <ul class="submenu">
                         <li><a href="/buku">Data Buku</a></li>
                         <li><a href="/bab">Data Bab</a></li>
                     </ul>
                 </li>
 
                     <div class="dropdown-divider"></div>
                 </li>
                 <li>
                     <div class="sidebar-small-cap">Extra</div>
                 </li>
                 <li>
                     <a href="javascript:;" class="dropdown-toggle">
                         <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
                     </a>
                     <ul class="submenu">
                         <li><a href="introduction.html">Introduction</a></li>
                         <li><a href="getting-started.html">Getting Started</a></li>
                         <li><a href="color-settings.html">Color Settings</a></li>
                         <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                         <span class="micon dw dw-paper-plane1"></span>
                         <span class="mtext">Landing Page <img src="http://127.0.0.1:8000/assets/vendors/images/coming-soon.png" alt="" width="25"></span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>		<!-- END LEFT SIDEBAR -->
         
     
     <div class="mobile-menu-overlay"></div>
     <!-- MAIN -->
         <div class="main-container">
     <div class="pd-ltr-20 xs-pd-20-10">
         <div class="min-height-200px">
             <div class="page-header">
                 <div class="row">
                     <div class="col-md-6 col-sm-12">
                         <div class="title">
                             <h4>Data Kemajuan</h4>
                         </div>
                         <nav aria-label="breadcrumb" role="navigation">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Kemajuan</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
          
             <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <form action="/kemajuan/store" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Guru</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="id_guru">
                                <option selected="">--Pilih--</option>
                                @foreach ($guru as $gr)
                                    <option value="{{ $gr->id }}">{{ $gr->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Murid</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="id_murid">
                                <option selected="">--Pilih--</option>
                                @foreach ($murid as $md)
                                    <option value="{{ $md->id }}">{{ $md->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Select Date" name="tgl" type="date">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="status">
                                <option selected="">--Pilih--</option>
                                <option value="N">Naik</option>
                                <option value="T">Tetap</option>
                                <option value="M">Mundur</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <button type="button" value="Tambah Jawaban" id="addButton" class="btn btn-primary btn-sm"><i class="fa fa-plus">
                            </i></button>
                        <button type="button" value="Hapus Jawaban" id="removeButton" class="btn btn-outline-primary btn-sm"><i class="fa fa-minus">
                            </i></button>
                    </div>
    
                    
    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Bab</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="id_bab[]">
                                <option selected="">--Pilih--</option>
                                @foreach ($bab as $bd)
                                    <option value="{{ $bd->id }}">{{ $bd->nama_bab }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
                        <div class="col-sm-12 col-md-10">
                        <textarea class="form-control" type="text" name="keterangan[]"></textarea>
                        </div>
                    </div>
    
                    <div id="hapus">
    
                    </div>
    
                    <div id="tambah_inputan">
    
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
            <div class="footer-wrap pd-20 mb-20 card-box"><a href="https://github.com/dropways" target="_blank">template</a>         </div>
     </div>
 </div>
 
 
 
         <!-- END MAIN -->
 
     <!-- js -->
 
     
 
     <script src="http://127.0.0.1:8000/assets/vendors/scripts/core.js"></script>
     <script src="http://127.0.0.1:8000/assets/vendors/scripts/script.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/vendors/scripts/process.js"></script>
     <script src="http://127.0.0.1:8000/assets/vendors/scripts/layout-settings.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
     <!-- buttons for Export datatable -->
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/buttons.print.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/pdfmake.min.js"></script>
     <script src="http://127.0.0.1:8000/assets/src/plugins/datatables/js/vfs_fonts.js"></script>
     <!-- Datatable Setting js -->
     <script src="http://127.0.0.1:8000/assets/vendors/scripts/datatable-setting.js"></script>
    
            
            <script>
                let counter = 1
                $('#addButton').click(function(){
                    counter++
            
                    let newInputan = '<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Bab</label><div class="col-sm-12 col-md-10"><select class="custom-select col-12" name="id_bab[]"><option selected="">--Pilih--</option>@foreach ($bab as $bd)<option value="{{ $bd->id }}">{{ $bd->nama_bab }}</option>@endforeach</select></div></div><div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Keterangan</label><div class="col-sm-12 col-md-10"><textarea class="form-control" type="text" name="keterangan[]"></textarea></div></div>' 
                $('#tambah_inputan').append(newInputan)
                });
            
                $('#removeButton').click(function(){
                    
                    $('#hapus').remove()
                    counter--
                });
                   
            </script> 
               
      
     
 </body>
 </html>