<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin-LaporanTahunan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini skin-yellow">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header" >
      
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>T</b>PB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>TPB</span>
      </a>
  
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            </li>
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Halo Pengguna
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p style="font-size:smaller">Untuk meregistrasi pengguna baru,<br> silahkan klik tombol register di bawah ini</p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="../../signup.php" class="btn btn-default btn-flat">Register</a>
                  </div>
                  <div class="pull-right">
                   
                <form action='../../includes/logout.inc.php' method='post'>
                          <button type='submit' class='button button3' name='logout-submit'>Log Out</button>
                        </form>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
  
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar" style="text-decoration-color: #f39c12;"> 
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu Admin</li>
          <!-- Optionally, you can add icons to the links -->
          <li><a href="homepage.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Manajemen Pengguna</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="Admin-HomePengguna.php">Publikasi Pengguna</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="Admin-HomePublikasi.php"><i class="fa fa-link"></i> <span>Publikasi</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="Admin-HomePublikasi.php">Home Publikasi</a></li>
              <li><a href="Admin-PublikasiFoto.php">Publikasi Galeri Foto</a></li>
              <li><a href="Admin-PublikasiVideo.php">Publikasi Galeri Video</a></li>
              <li><a href="Admin-PublikasiDokumen.php">Publikasi Dokumen</a></li>
              <li><a href="Admin-PublikasiDataRiset.php">Publikasi Data</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="Admin-HomeInfoTPB.php"><i class="fa fa-link"></i> <span>Info TPB</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="Admin-HomeInfoTPB.php">Home Info TPB</a></li>
              <li><a href="Admin-PublikasiTPB.php">Publikasi TPB</a></li>
              <li><a href="Admin-PublikasiPilarTPB.php">Publikasi Pilar TPB</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="Admin-HomeArtikel.php"><i class="fa fa-link"></i> <span>Artikel</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="Admin-HomeArtikel.php">Home Artikel</a></li>
              <li><a href="Admin-PublikasiArtikel.php">Publikasi Artikel</a></li>
              <li><a href="Admin-PublikasiBerita.php">Publikasi Berita</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Laporan</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="Admin-HomeLaporan.php">Home Atur Laporan</a></li>
              <li><a href="Admin-PublikasiLaporanTA3.php">Publikasi Laporan Harian</a></li>
              <li><a href="Admin-PublikasiLaporanTA2.php">Publikasi Laporan Bulanan</a></li>
              <li><a href="Admin-PublikasiLaporanTA.php">Publikasi Laporan Tahunan</a></li>
              <li><a href="Admin-PublikasiLaporanLainnya.php">Publikasi Laporan Utama</a></li>
            </ul>
        </li>
        <li><a href="Admin-PublikasiSubs.php"><i class="fa fa-link"></i> <span>Berlangganan</span></a></li>
        <li><a href="Admin-PublikasiKontak.php"><i class="fa fa-link"></i> <span>Publikasi Kontak Kami</span></a></li>
        <li><a href="Admin-PublikasiTestimoni.php"><i class="fa fa-link"></i> <span>Publikasi Testimoni</span></a></li>
        <li><a href="Admin-PublikasiProfil.php"><i class="fa fa-link"></i> <span>Publikasi Profil</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Pemangku Kepentingan</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="Admin-HomeStakeholders.php">Home Pemangku Kepentingan</a></li>
              <li><a href="Admin-PublikasiKategoriStake.php">Publikasi Kategori<br> Pemangku Kepentingan</a></li>
              <li><a href="Admin-PublikasiDaftarStakeholders.php">Publikasi Pemangku Kepentingan</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="Admin-HomeAturWebsite.php"><i class="fa fa-link"></i> <span>Atur Website</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Admin-HomeAturWebsite.php">Home Atur Website</a></li>
            <li><a href="Admin-PublikasiDaftarSlider.php">Publikasi Slider</a></li>
            <li><a href="Admin-PublikasiFotoWeb.php">image</a></li>
          </ul>
      </li>
     </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header" style="height: auto;">
              <h1>
                  Daftar
                  <small>Slider</small>
                </h1>
                <section style="padding: 20px;">  
                    <div class="box box-primary" style="padding: 20px;border-color: #f39c12;">
                            <!-- Optionally, you can add icons to the links -->
                           <h3><a href="">Atur Slider</a></h3>
                           <form action="ScriptFileUpload.php" id="myform" name="myform" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email_addr">Alamat Email</label>
                <input type="text" class="form-control" id="email_addr" name="email" placeholder="sdgs@gmail.com">
            </div>
            <div class="form-group">
                <label for="name_input">Nama Manager</label>
                <input type="text" class="form-control" id="name_input" name="nama" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title_file" rows="3" name="namabuku" placeholder="Name">
            </div>
            <div class="form-group">
            <label for="name_input">Penjelasan Singkat</label>
            <input type="text" class="form-control" id="month" name="penjelasan" maxlength="100">
          <div class="form-group">
            <div class="form-group">
              <label for="name_input">Tahun Terbit</label>
              <input type="text" class="form-control" id="year" name="tahun">
            <div class="form-group">
                <label for="file_upload">Upload File</label>
                <input type="file" class="form-control-file" id="file_upload" name="berkas" Accept="Application/Pdf">
            </div>
            <div class="form-group">
              <label for="file_upload">Upload thumb</label>
              <input type="file" class="form-control-file" id="file_upload" name="thumb" accept=".jpg, .jpeg, .png" onchange="readURL1(this);" style="margin-bottom:60px;" >
                      <label for="file_upload">Preview File</label>
                        <img id="blah1" src="image/600x800.jpg" alt="your image" /> 
          </div>
            <button type="submit" class="btn btn-primary" style="Background-Color:#f39c12">Submit</button>
  </form>
                    </div>
              </section>
          
          </section>
            
          <!-- Main content -->
          <!-- /.content -->
        </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
          </div>
          <!-- Default to the left -->
          <strong >Hak Cipta &copy; 2023 <a href="#" style="color: #f39c12;">Bappeda DKI Jakarta</a>.</strong> All rights reserved.
        </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
  
  function readURL1(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah1').attr('src', e.target.result).width(150).height(200);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>