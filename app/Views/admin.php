<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>admin/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url() ?>admin/css/style.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo"><a href="index.html"><b><img src="<?= base_url() ?>admin/assets/images/avatar/logo-dark.png" > </b><span class="brand-title"><img src="<?= base_url() ?>admin/assets/images/logo-dark.png"></span></a>
            </div>
            <div class="nav-control">
                <div class="hamburger"><span class="line"></span>  <span class="line"></span>  <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <!-- <ul>
                        <li class="icons">
                            <a href="javascript:void(0)">
                                <i class="mdi mdi-comment"></i>
                                <div class="pulse-css"></div> -->
                            </a>
                            <!-- <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-heading">
                                    <span class="pull-left">Messages</span>  
                                    <a href="#" class="pull-right text-white">View All</a>
                                    <div class="clearfix"></div>
                                </div> -->
                                <!-- <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left mr-3 avatar-img" src="<?= base_url() ?>admin/assets/images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Druid Wensleydale</div>
                                                    <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                                </div>
                                            </a><span class="notify-close"><i class="ti-close"></i></span>
                                        </li>
                                        <li class="notification-unread"> -->
                                            <!-- <a href="#">
                                                <img class="pull-left mr-3 avatar-img" src="<?= base_url() ?>admin/assets/images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Fig Nelson</div>
                                                    <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                                </div>
                                            </a><span class="notify-close"><i class="ti-close"></i></span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left mr-3 avatar-img" src="<?= base_url() ?>admin/assets/images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Bailey Wonger</div>
                                                    <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                                </div> -->
                                            <!-- </a><span class="notify-close"><i class="ti-close"></i></span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left mr-3 avatar-img" src="<?= base_url() ?>admin/assets/images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Bodrum Salvador</div>
                                                    <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                                </div>
                                            </a><span class="notify-close"><i class="ti-close"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        <!-- </li>
                        <li class="icons">
                            <a href="javascript:void(0)">
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="drop-down animated bounceInDown dropdown-notfication">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-check"></i></span>
                                                <div class="notification-content">
                                                    <div class="notification-heading">Druid Wensleydale</div>
                                                    <span class="notification-text">A wonderful serenit of my entire soul.</span> 
                                                    <small class="notification-timestamp">20 May 2018, 15:32</small>
                                                </div>
                                            </a>
                                            <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                        </li>
                                        <li><a href="#"><span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="fa fa-close"></i></span><div class="notification-content"><div class="notification-heading">Inverness McKenzie</div><span class="notification-text">A wonderful serenit of my entire soul.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                            <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                        </li>
                                        <li><a href="#"><span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-check"></i></span><div class="notification-content"><div class="notification-heading">McKenzie Inverness</div><span class="notification-text">A wonderful serenit of my entire soul.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                            <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                        </li> -->
                                        <!-- <li><a href="#"><span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="fa fa-close"></i></span><div class="notification-content"><div class="notification-heading">Inverness McKenzie</div><span class="notification-text">A wonderful serenit of my entire soul.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                            <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                        </li> -->
                                        <!-- <li class="text-left"><a href="#" class="more-link">Show All Notifications</a>  <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <li class="icons">
                            <a href="javascript:void(0)" class="log-user">
                                <img src="<?= base_url() ?>admin/assets/images/avatar/1.jpg" alt=""> <span>Ahmad</span>  <i class="fa fa-caret-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="icon-envelope"></i> <span>Inbox</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cog"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="<?=base_url('home/login_view') ?>"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Admin</li>
                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="<?=base_url('admin/admin'); ?>" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Tambah Menu</span><span class="badge bg-dpink text-white nav-badge">21</span>
                        </a>

                        <a class="has-arrow" href="<?=base_url('admin/daftar_menu'); ?>" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Daftar Menu</span><span class="badge bg-dpink text-white nav-badge">21</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="index-restaurent.html">Restaurant</a></li>
                            <li><a href="index-crypto.html">Crypto</a>
                            </li>
                            <li><a href="index-invoice.html">Invoice</a>
                            </li>
                            <li><a href="index-hospital.html">Hospital</a>
                            </li>
                            <li><a href="index-real-estate.html">Real Estate</a>
                            </li>
                            <li><a href="index-ticket.html">Ticket</a>
                            </li>
                            <li><a href="index-blog.html">Blog</a>
                            </li>
                            <li><a href="index-fitness.html">Fitness</a>
                            </li>
                            <li><a href="index-campaign.html">Campaign</a>
                            </li>
                            <li><a href="index-download.html">Download</a>
                            </li>
                            <li><a href="index-call-center.html">Call Center</a>
                            </li>
                            <li><a href="index-events.html">Events</a>
                            </li>
                            <li><a href="index-payments.html">Payments</a>
                            </li>
                            <li><a href="index-product.html">Products</a>
                            </li>
                            <li><a href="index-electronics.html">Electronics</a>
                            </li>
                            <li><a href="index-photo.html">Photo</a>
                            </li>
                            <li><a href="index-music.html">Music</a>
                            </li>
                            <li><a href="index-school.html">School</a>
                            </li>
                            <li><a href="index-video.html">Video</a>
                            </li>
                            <li><a href="index-weather.html">Weather</a>
                            </li>
                            <li><a href="index-job.html">Job</a>
                            </li>
                        </ul>
                    </li> -->

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Unggah Resep</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin</a>
                            </li>
                            <!-- <li class="breadcrumb-item"><a href="#">Forms</a>
                            </li> -->
                            <li class="breadcrumb-item active"> Resep
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Unggah Resep</h4>
                                <div class="basic-form">
                                    <form method="POST" action="<?= base_url('admin/store') ?>">
                                        <div class="form-group">
                                        <label class="col-sm-9 col-form-label text-label">Nama Resep</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <input type="text" name="nama_resep" class="form-control" id="validation" aria-describedby="validationDefaultUsername1" required>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                        <label class="col-sm-9 col-form-label text-label">Deskripsi Resep</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <textarea class="form-control" name="deskripsi_resep" id="textarea1" rows="6" required></textarea>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 col-form-label text-label">Kategori</label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="kategori" required>
                                                    <option class="text-muted" disabled selected style="display: none">Pilih Kategori</option>
                                                    <option value="Makanan">Makanan</option>
                                                    <option value="Kue">Kue</option>
                                                    <option value="Minuman">Minuman</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                        <label class="col-sm-9 col-form-label text-label">Bahan-Bahan</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <textarea class="form-control" name="bahan" id="textarea1" rows="6" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-9 col-form-label text-label">Langkah-Langkah</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <textarea class="form-control" name="langkah" id="textarea1" rows="6" required></textarea>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                        <label class="col-sm-3 col-form-label text-label">Pilih Level</label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="level" required>
                                                    <option class="text-muted" disabled selected style="display: none">Level</option>
                                                    <option value="Pemula">Pemula</option>
                                                    <option value="Menengah">Menengah</option>
                                                    <option value="Ahli">Ahli</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-sm-9 col-form-label text-label">Unggah Gambar</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="validationDefaultUsername9" aria-describedby="inputGroupPrepend2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-9 for integerInput">Waktu</label>
                                        <div class="col-sm-6">
                                        <input type="number" class="form-control"  id="integerInput" name="waktu" aria-describedby="inputGroupPrepend2" required />
                                    </div>
                                </div>
                                        
  


                                        <button type="submit" class="btn btn-primary btn-form mr-2">Unggah</button>
                                        <button type="button" class="btn btn-light text-dark btn-form">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Horizontal Forms</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-label">Email Address *</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" placeholder="Email">
                                                <p class="form-text">Ex:black-level help text here</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-label">Password *</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <div class="form-check">
                                                    <input id="checkbox2" class="form-check-input styled-checkbox" type="checkbox">
                                                    <label for="checkbox2" class="form-check-label">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-primary btn-form">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-12">
                        <div class="card form-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Inline Forms</h4>
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only" for="inlineFormInputName2">Email Address</label>
                                        <input type="email" size="50" class="form-control mb-2 mr-sm-5" id="inlineFormInputName2" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                                        <input type="text" size="50" class="form-control mb-2 mr-sm-5" id="inlineFormInputGroupUsername2" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-check-input styled-checkbox" type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label mr-sm-5" for="inlineFormCheck">Remember me</label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-form">Submit</button>
                                    </div> -->
                                    <!-- <div class="row">
                                        <div class="col-lg-4">
                                            <label class="sr-only" for="inlineFormInputName2">Email Address</label>
                                            <input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Email Address">
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputGroupUsername2" placeholder="Password">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check mb-2 mr-sm-2">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                            </div>

                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                        </div>
                                    </div> -->
                                    

                                    

                                    
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-6">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Basic Inputs</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Basic Input</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Placeholder</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Your title in placeholder" aria-describedby="validationDefaultUsername2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Password</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="validationDefaultUsername3" placeholder="Password Input" aria-describedby="validationDefaultUsername3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Read Only</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername4" placeholder="You can't change me" readonly aria-describedby="validationDefaultUsername4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Disable Input</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername5" placeholder="Disable Text" disabled readonly aria-describedby="validationDefaultUsername5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Select box</label>
                                            <div class="col-lg-9">
                                                <select class="form-control">
                                                    <option class="text-muted" disabled selected style="display: none">Select the value Only</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Round Input</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-rounded" id="validationDefaultUsername6" placeholder="Form control round" aria-describedby="inputGroupPrepend2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Maximam length</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationDefaultUsername7" placeholder="Content must in 06 charecters" maxlength="6" aria-describedby="inputGroupPrepend2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Static text</label>
                                            <div class="col-sm-9">
                                                <p class="text-muted">skinner@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Color</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="color" class="form-control py-4" id="validationDefaultUsername8" aria-describedby="inputGroupPrepend2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-3 col-form-label text-label">Upload File</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="validationDefaultUsername9" aria-describedby="inputGroupPrepend2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-label">Textarea</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <textarea class="form-control" id="textarea1" name="textarea1" rows="6"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-xl-6">
                        <div class="card form-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Input groups</h4>
                                <div class="basic-form">
                                    <form action="index.html">
                                        <div class="input-group row mb-5">
                                            <label class="col-sm-3 col-form-label text-label">Input Groups</label>
                                            <div class="col-sm-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">.00</span>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon3">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon4">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group row mb-5">
                                            <label class="col-sm-3 col-form-label text-label">Input Groups</label>
                                            <div class="col-sm-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon5">@</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon5">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon6">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon7">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon7">@</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm" aria-label="Username" aria-describedby="basic-addon7">
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="input-group row mb-5">
                                            <label class="col-sm-3 col-form-label text-label">Checkboxes</label>
                                            <div class="col-sm-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">

                                                            <span class="form-check custom-position">

                                                                <input id="checkbox11" class="form-check-input styled-checkbox" type="checkbox">

                                                                <label for="checkbox11" class="form-check-label pl-3"></label>

                                                            </span>

                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                            </div> -->
                                            <!-- <label class="col-sm-3 col-form-label text-label">Radio</label>
                                            <div class="col-sm-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">

                                                            <span class="form-check custom-position">

                                                                <input id="radio11" class="form-check-input" type="radio">

                                                                <label class="pl-3 form-check-label" for="radio11"></label>

                                                            </span>

                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group row">
                                            <label class="col-sm-3 col-form-label text-label">Button Addons</label>
                                            <div class="col-sm-9">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary btn-flat" type="button" id="button-addon1">Go</button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary btn-flat" type="button" id="button-addon2">Go</button>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-success btn-flat dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger btn-flat dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- 
                    <div class="col-xl-6">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Horizontal Forms</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-label">Email Address*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend5"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationDefaultUsername12" placeholder="Username" aria-describedby="inputGroupPrepend5" required>
                                                </div>
                                                <p class="form-text">Ex:black-level help text here</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-label">Password*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group transparent-append">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend6"> <i class="fa fa-lock" aria-hidden="true"></i> </span>
                                                    </div>
                                                    <input type="password" class="form-control" id="validationDefaultUsername13" placeholder="Password" aria-describedby="inputGroupPrepend6" required>
                                                    <div class="input-group-append c-pointer">
                                                        <span class="input-group-text" id="inputGroupPrepend7"> <i class="fa fa-eye-slash" aria-hidden="true"></i> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10 offset-sm-3">
                                                <div class="form-check">
                                                    <input class="form-check-input styled-checkbox" type="checkbox" id="inlineFormCheck0">
                                                    <label class="form-check-label mr-sm-5" for="inlineFormCheck0">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-primary btn-form">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card form-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Input Validation</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-success">Input with Success</label>
                                            <div class="col-sm-8">
                                                <div class="input-group input-success">
                                                    <input type="text" class="form-control is-valid" id="validationDefaultUsername14" aria-describedby="inputGroupPrepend8" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-transparent" id="inputGroupPrepend8"> <i class="fa fa-check text-success" aria-hidden="true"></i> </span>
                                                    </div>
                                                </div>
                                                <p class="form-text text-success">Success! You've done it!</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-warning">Input with Warning</label>
                                            <div class="col-sm-8">
                                                <div class="input-group input-warning">
                                                    <input type="text" class="form-control is-warning" id="validationDefaultUsername15" aria-describedby="inputGroupPrepend9" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-transparent" id="inputGroupPrepend9"> <i class="fa fa-bell text-warning" aria-hidden="true"></i> </span>
                                                    </div>
                                                </div>
                                                <p class="form-text text-warning">Help block with warning</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-danger">Input with Danger</label>
                                            <div class="col-sm-8">
                                                <div class="input-group input-danger">
                                                    <input type="text" class="form-control is-invalid" id="validationDefaultUsername16" aria-describedby="inputGroupPrepend10" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-transparent" id="inputGroupPrepend10"> <i class="fa fa-times text-danger" aria-hidden="true"></i> </span>
                                                    </div>
                                                </div>
                                                <p class="form-text text-danger">Help block with Danger</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Checkboxes</h4>
                                <form class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label class="text-label">Checkboxes</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="demo-checkbox">
                                                <div>
                                                    <input checked type="checkbox" class="filled-in chk-col-primary" id="md_checkbox_22">
                                                    <label for="md_checkbox_22">Checked</label>
                                                </div>
                                                <div>
                                                    <input disabled type="checkbox" class="filled-in chk-col-primary" id="md_checkbox_23">
                                                    <label for="md_checkbox_23">Disable Unchecked</label>
                                                </div>
                                                <div>
                                                    <input disabled checked type="checkbox" class="filled-in chk-col-primary" id="md_checkbox_24">
                                                    <label for="md_checkbox_24">Disable Checked</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Radio Boxes</h4>
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label class="text-label">Radio Boxes</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="demo-checkbox">
                                                <div>
                                                    <input name="Unchecked" type="radio" class="filled-in chk-col-primary" id="md_checkbox_25">
                                                    <label for="md_checkbox_25">Unchecked</label>
                                                </div>
                                                <div>
                                                    <input name="Checked" checked type="radio" class="filled-in chk-col-primary" id="md_checkbox_26">
                                                    <label for="md_checkbox_26">Checked</label>
                                                </div>
                                                <div>
                                                    <input name="Disable" disabled type="radio" class="filled-in chk-col-primary" id="md_checkbox_27">
                                                    <label for="md_checkbox_27">Disable Unchecked</label>
                                                </div>
                                                <div>
                                                    <input name="Checked" disabled checked type="radio" class="filled-in chk-col-primary" id="md_checkbox_28">
                                                    <label for="md_checkbox_28">Disable Checked</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger" href="javascript:void(0)">
                <span><i class="mdi mdi-tune"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#home8"><span><i class="mdi mdi-wrench" aria-hidden="true"></i>
                    </span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile8"><span><i class="mdi mdi-reload" aria-hidden="true"></i>
                    </span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages8"><span><i class="mdi mdi-message-reply-text" aria-hidden="true"></i>
                    </span></a>
                    <!-- </li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages9"><span><i class="fa fa-cog"></i></span></a>
                    </li> -->
                </ul>

                <div class="tab-content tab-content-default tabcontent-border">
                    <div class="tab-pane fade active show" id="home8" role="tabpanel">
                        <div class="admin-settings">
                            <h4>Pick your style</h4>
                            <div>
                                <p>Background</p>
                                <select class="form-control" name="theme_version" id="theme_version">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div>
                                <p>Layout</p>
                                <select class="form-control" name="theme_layout" id="theme_layout">
                                    <option value="vertical">Vertical</option>
                                    <option value="horizontal">Horizontal</option>
                                </select>
                            </div>
                            <div>
                                <p>Sidebar</p>
                                <select class="form-control" name="sidebar_style" id="sidebar_style">
                                    <option value="full">Full</option>
                                    <option value="mini">Mini</option>
                                    <option value="compact">Compact</option>
                                    <option value="overlay">Overlay</option>
                                </select>
                            </div>
                            <div>
                                <p>Sidebar position</p>
                                <select class="form-control" name="sidebar_position" id="sidebar_position">
                                    <option value="static">Static</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                            <div>
                                <p>Header position</p>
                                <select class="form-control" name="header_position" id="header_position">
                                    <option value="static">Static</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                            <div>
                                <p>Container</p>
                                <select class="form-control" name="container_layout" id="container_layout">
                                    <option value="wide">Wide</option>
                                    <option value="boxed">Boxed</option>
                                    <option value="wide-boxed">Wide Boxed</option>
                                </select>
                            </div>
                            <div>
                                <p>Direction</p>
                                <select class="form-control" name="theme_direction" id="theme_direction">
                                    <option value="ltr">LTR</option>
                                    <option value="rtl">RTL</option>
                                </select>
                            </div>
                            <div>
                                <p>Navigation Header</p>
                                <div>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                        <label for="nav_header_bg_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                        <label for="nav_header_bg_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                        <label for="nav_header_bg_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                        <label for="nav_header_bg_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                        <label for="nav_header_bg_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                        <label for="nav_header_bg_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                        <label for="nav_header_bg_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                        <label for="nav_header_bg_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                        <label for="nav_header_bg_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                        <label for="nav_header_bg_10"></label>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>Header</p>
                                <div>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                        <label for="header_bg_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                        <label for="header_bg_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                        <label for="header_bg_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                        <label for="header_bg_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                        <label for="header_bg_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                        <label for="header_bg_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                        <label for="header_bg_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                        <label for="header_bg_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                        <label for="header_bg_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                        <label for="header_bg_10"></label>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <p>Sidebar</p>
                                <div>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                        <label for="sidebar_bg_1"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                        <label for="sidebar_bg_2"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                        <label for="sidebar_bg_3"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                        <label for="sidebar_bg_4"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                        <label for="sidebar_bg_5"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                        <label for="sidebar_bg_6"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                        <label for="sidebar_bg_7"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                        <label for="sidebar_bg_8"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                        <label for="sidebar_bg_9"></label>
                                    </span>
                                    <span>
                                        <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                        <label for="sidebar_bg_10"></label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile8" role="tabpanel">
                        <div class="sidebar-recent-activity ">
                            <h4 class="card-title">Recent Activity</h4>
                            <div class="timeline_content">
                                <ul class="timeline timeline-workplan">
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>After 3 hours</p>
                                                    <h6 class="mt-0 mb-0"><a href="#" class="text-primary">Space X</a> is going to launch a Rocket</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>5 minites ago</p>
                                                    <h6 class="mt-0 mb-0"><a href="#" class="text-primary">Niloy</a> commented on your photo</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>1 hour ago</p>
                                                    <h6 class="mt-0 mb-0"><a href="#" class="text-primary">Bill Gates</a> likes your photo</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>2 hours ago</p>
                                                    <h6 class="mt-0 mb-0"><a href="#" class="text-primary">You</a> reacted on <a href="#" class="text-primary">Shelly</a>'s photo</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>2 days ago</p>
                                                    <h6 class="mt-0 mb-0"><a href="" class="text-primary">Elon Mask</a> invited you on an <a href="#" class="text-primary">Event</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>3 days ago</p>
                                                    <h6 class="mt-0 mb-0"><a href="" class="text-primary">Mark Jukarbarg</a> invited you on <a href="#" class="text-primary">Facebook</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-work-progress">
                            <h4 class="card-title mb-5">Daily prograss</h4>
                            <div class="progress-wrapper">
                                <h6 class="mb-3">Light Weight Lifting</h6>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-warning" style="width: 80%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h6 class="mb-3">Push Ups</h6>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h6 class="mb-3">Step Aerobics</h6>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-dpink" style="width: 70%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>  
                            <div class="progress-wrapper">
                                <h6 class="mb-3">Down Aerobics</h6>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-lgreen" style="width: 90%; height:6px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages8" role="tabpanel">
                        <div class="user-chat">
                            <ul class="list-group all-chats">
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/1.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity inactive"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/2.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>22 minites ago</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/3.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/4.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity inactive"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/4.jpg" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>26 minites ago</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/6.jpg" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/7.jpg" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/8.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/1.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/4.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity inactive"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/2.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>52 minites ago</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity inactive"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/2.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>22 Hours ago</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/6.jpg" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity active"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/3.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>Online</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-group-item single-chat border-0">
                                    <div class="media align-items-center">
                                        <div class="user-img mr-3">
                                            <span class="activity inactive"></span>
                                            <img src="<?= base_url() ?>admin/assets/images/user/8.png" height="40" width="40" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Lurch Schpel</h6>
                                            <small>6 Hours ago</small>
                                        </div>
                                        <a href="#" class="chat-open d-inline-block px-2 py-1">
                                            <i class="fa fa-comment-o"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url() ?>admin/assets/plugins/common/common.min.js"></script>
    <script src="<?= base_url() ?>admin/js/custom.min.js"></script>
    <script src="<?= base_url() ?>admin/js/settings.js"></script>
    <script src="<?= base_url() ?>admin/js/gleek.js"></script>
    <script src="<?= base_url() ?>admin/js/styleSwitcher.js"></script>
</body>

</html>