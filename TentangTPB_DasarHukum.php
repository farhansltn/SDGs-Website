<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	  <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>Hukum TBP</title>
    
       
  <style>
    .cd-table-container{
      background: #fff;
      box-shadow: 1px 2px 26px rgba(0, 0, 0, 0.2);
      padding: 15px;
      max-width: 720px;
    }
    /* Table Design */
    .cd-table{
      width: 100%;
      color: #666;
      margin: 10px auto;
      border-collapse: collapse;
    }
    
    .cd-table tr,
    .cd-table td{
      border: 1px solid #ccc;
      padding: 10px;
    }
    .cd-table th{
      background: #017721;
      color: #fff;
      padding: 10px;
    }
    
    /* Search Box */
    .cd-search{
      padding: 10px;
      border: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
    }
    
    /* Search Title */
    .cd-title{
      color: #666;
      margin: 15px 0;
    }
      </style>
  
  </head>
  <body class="stretched">
    
    <div id="wrapper" class="clearfix">
		<!-- Header
      ============================================= -->
      <?php
          include 'Header.php'
        ?>
        <!--====HEADER END==-->

      <!-- #page-title Start -->

        <section id="page-title">
          <div class="container clearfix">
              <h1>Dasar Hukum TBP</h1>
              </ol>
          </div>
        </section>
      <!-- #page-title end -->
        <section class="table" style="margin-top: 60px;">
          <div class="container clearfix">
            <!-- partial:index.partial.html -->
            <input type="text" class="cd-search table-filter" data-table="order-table" placeholder="Item to filter.." />
        <!--TABEL DASAR HUKUM-->
            <table class="cd-table order-table table">
              <thead style="background-color: #c15e5e;">
              <tr class="header">
                <th style="width:30%;">Judul</th>
                <th style="width:30%;">Tentang</th>
                <th style="width:20%;">Tahun</th>
                <th style="width:20%;">Download</th>
              </tr>
                  </thead>
              <tbody style="text-align: center;">
                  <?php
                  
                  include 'Admin\lte\KoneksiDokumen.php';
                    $nomor_urut = 0;
                    $result = selectAllData();
                    $countData = mysqli_num_rows($result);

                    if ($countData < 1) { 
                  ?>	
                  <tr>
                    <td colspan="5" style="text-align: center; font-weight: bold; font-size: 12px; padding: 5px; color: red">TIDAK ADA DATA</td>
                  </tr>

                  <?php
                    } else {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $nomor_urut = $nomor_urut + 1;
                  ?>
                    <tr>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['tentang']; ?></td>
                      <td><?php echo $row['tahun']; ?></td>
                      <td><a style="
                      color:white;
                      background-color:grey" href="DownloadFile.php?url=<?php echo $row['berkas']; ?>">Download</a></td>
                    </tr>
                  <?php 
                      }
                    } 
                  ?>
              </tbody>
            </table>
            <!--end table-->
        </div>
        </section>
      <!--footer beginning-->
      <?php
        include 'footer.php'
        ?><!--footer end-->
    </div>
  </body>

<!-- Table Search JS -->
  <script  src="js/script.js"></script>
  
  <script type="text/javascript" src="js/functions.js"></script>
</html>