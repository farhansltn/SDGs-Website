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
                    <a href="signup.php" class="btn btn-default btn-flat">Register</a>
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
          <li><a href="Admin-Dashboard.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
          <li class="treeview">
            <a href="http://localhost/webdev/Admin/lte/Admin-HomePengguna.php"><i class="fa fa-link"></i> <span>Manajemen Pengguna</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Publikasi Pengguna</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="http://localhost/webdev/Admin/lte/Admin-HomePublikasi.php"><i class="fa fa-link"></i> <span>Publikasi</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="http://localhost/webdev/Admin/lte/Admin-HomePublikasi.php">Home Publikasi</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiFoto.php">Publikasi Galeri Foto</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiVideo.php">Publikasi Galeri Video</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiDokumen.php">Publikasi Dokumen</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiDataRiset.php">Publikasi Data</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="http://localhost/webdev/Admin/lte/Admin-HomeInfoTPB.php"><i class="fa fa-link"></i> <span>Info TPB</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="http://localhost/webdev/Admin/lte/Admin-HomeInfoTPB.php">Home Info TPB</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiTPB.php">Publikasi TPB</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiPilarTPB.php">Publikasi Pilar TPB</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="http://localhost/webdev/Admin/lte/Admin-HomeArtikel.php"><i class="fa fa-link"></i> <span>Artikel</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="http://localhost/webdev/Admin/lte/Admin-HomeArtikel.php">Home Artikel</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiArtikel.php">Publikasi Artikel</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiArtikel.php">Publikasi Berita</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="http://localhost/webdev/Admin/lte/Admin-HomeLaporan.php"><i class="fa fa-link"></i> <span>Laporan</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="http://localhost/webdev/Admin/lte/Admin-HomeLaporan.php">Home Atur Laporan</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiLaporanTA3.php">Publikasi Laporan Harian</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiLaporanTA2.php">Publikasi Laporan Bulanan</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiLaporanTA.php">Publikasi Laporan Tahunan</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiLaporanLainnya.php">Publikasi Laporan Utama</a></li>
            </ul>
        </li>
        <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiSubs.php"><i class="fa fa-link"></i> <span>Berlangganan</span></a></li>
        <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiKontak.php"><i class="fa fa-link"></i> <span>Publikasi Kontak Kami</span></a></li>
        <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiTestimoni.php"><i class="fa fa-link"></i> <span>Publikasi Testimoni</span></a></li>
        <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiProfil.php"><i class="fa fa-link"></i> <span>Publikasi Profil</span></a></li>
        <li class="treeview">
            <a href="http://localhost/webdev/Admin/lte/Admin-HomeStakeholders.php"><i class="fa fa-link"></i> <span>Pemangku Kepentingan</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="http://localhost/webdev/Admin/lte/Admin-HomeStakeholders.php">Home Pemangku Kepentingan</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiKategoriStake.php">Publikasi Kategori Pemangku Kepentingan</a></li>
              <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiDaftarStakeholders.php">Publikasi Pemangku Kepentingan</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="http://localhost/webdev/Admin/lte/Admin-HomeAturWebsite.php"><i class="fa fa-link"></i> <span>Atur Website</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/webdev/Admin/lte/Admin-HomeAturWebsite.php">Home Atur Website</a></li>
            <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiDaftarSlider.php">Publikasi Slider</a></li>
            <li><a href="http://localhost/webdev/Admin/lte/Admin-PublikasiFotoWeb.php">image</a></li>
          </ul>
      </li>
     </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>