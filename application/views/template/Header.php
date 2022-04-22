<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SKRIPSI ABSENSI QR CODE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url()?>Home/logout">
         <i class="fas fa-sign-out-alt"></i>
        
        </a>
       
      </li>
     
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url()?>assets/dist/img/sim.png" alt="AdminLTE Logo" class="brand-image img-square  elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light ">Sistem Absensi QR</span>
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="<?=base_url()?>Home/Dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
        <?php if($this->session->userdata('akses')=='admin' or 'timleader'):?> 
          <li class="nav-item">
            <a href="<?=base_url()?>Home/Gen" class="nav-link">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                Generate Qr Code
               
              </p>
            </a>
          </li>
        <?php endif; ?>

        <?php if($this->session->userdata('akses')=='admin' ):?> 
          <li class="nav-item">
            <a href="<?=base_url()?>Resetqrcode" class="nav-link">
              <i class="nav-icon fas fa-recycle"></i>
              <p>
                Pengurutan Kode Qr
               
              </p>
            </a>
         </li>
           <?php endif; ?>


<?php if($this->session->userdata('akses')=='admin' ):?> 
           <li class="nav-item">
            <a href="<?=base_url()?>Generateqrcodetim" class="nav-link">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                Generate Qr Code Tim
               
              </p>
            </a>
         </li>
 <?php endif; ?>


         <?php if($this->session->userdata('akses')=='admin' ):?> 
           <li class="nav-item">
            <a href="<?=base_url()?>Manajemenpegawai" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manajemen Data Pegawai
               
              </p>
            </a>
         </li>
         <?php endif; ?>


         <?php if($this->session->userdata('akses')=='admin' ):?> 
           <li class="nav-item">
            <a href="<?=base_url()?>Manajementim" class="nav-link">
              <i class="nav-icon fas fa-campground"></i>
              <p>
                Manajemen Data tim
               
              </p>
            </a>
         </li>
          <?php endif; ?>




             <?php if($this->session->userdata('akses')=='admin' or 'timleader' ):?>  
          <li class="nav-header">Absensi</li>
          <li class="nav-item">
            <a href="<?=base_url()?>Manajemenabsensi" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
               Absensi
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
           <?php endif; ?>

           <?php if($this->session->userdata('akses')=='admin'):?>  
         
          <li class="nav-item">
            <a href="<?=base_url()?>Updatejadwal" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
               Update Jadwal
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
           <?php endif; ?>

           

        <?php if($this->session->userdata('akses')=='admin' or 'timleader' ):?>  
       
          <li class="nav-item">
            <a href="<?=base_url()?>Manajemenijin" class="nav-link">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>
               Manajemen Ijin
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
           <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  






















