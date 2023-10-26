<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin-Home Stakeholders</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
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
              <li><a href="Admin-PublikasiKategoriStake.php">Publikasi Kategori<br>Pemangku Kepentingan</a></li>
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
                  Home
                  <small>Daftar Stakeholders</small>
                </h1>
                <section style="padding: 20px;">  
                    
                  <div class="box box-primary" style="padding: 20px;border-color: #f39d12;">
                      <section class="content container-fluid">
                        <!--------------------------
                          | Your Page Content Here |
                          -------------------------->
                          <div class="box box-primary" style="padding: 20px;border-color: #f39d12;">
                          <p>Halaman Ini Merupakan Halaman Publikasi. Anda akan melihat tampilan data-data yang sudah anda . masukan. Jika anda belum melihat data anda, silahkan klik tombol dibawah ini 
                              untuk registrasi data yang ingin anda masukan ke dalam database. Untuk mengubah data, silahkan hubungi admin utama pada 
                              menu kontak di <a href="">website SDG's Jakarta</a>, Terima Kasih.</p><ul class="sidebar-menu" data-widget="tree">
                                <li class="header" style="background-color: #f39d1223;"><h4>Update Informasi Daftar Stakeholders</h4></li>
                                <!-- Optionally, you can add icons to the links -->
                                <li><a href="Admin-AturStakeholders.php"><i class="fa fa-link"></i> <span>Daftar Stakeholders</span></a></li>
                                <li><a href="Admin-PublikasiKategoriStake.php"><i class="fa fa-link"></i> <span>Daftar Kategori</span></a></li>
                            </ul>
                        </div>
                      </section>
                  </div>

          
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
        <div class="control-sidebar-bg"></div>
      </div>

  <!-- Main Header -->
  
</body>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="../../bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
            
            
<!-- Page script -->
<script>
  $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
  $(function () {
    $('#example1',).DataTable()
    $('#example3',).DataTable()
    $('#example4',).DataTable()
    $('#example5',).DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>