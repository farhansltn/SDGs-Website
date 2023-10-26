<!DOCTYPE html>
<html dir="ltr" lang="en-US">
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
    
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
        <!-- Document Title
        ============================================= -->
        <title>Berita TPB Jakarta</title>
    
        <style>
    
            .revo-slider-emphasis-text {
                font-size: 64px;
                font-weight: 700;
                letter-spacing: -1px;
                font-family: 'Raleway', sans-serif;
                padding: 15px 20px;
                border-top: 2px solid #000000;
                border-bottom: 2px solid #000000;
            }
    
            .revo-slider-desc-text {
                font-size: 20px;
                font-family: 'Lato', sans-serif;
                width: 650px;
                text-align: center;
                line-height: 1.5;
            }
    
            .revo-slider-caps-text {
                font-size: 16px;
                font-weight: 400;
                letter-spacing: 3px;
                font-family: 'Raleway', sans-serif;
            }
    
        </style>
    
    </head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix" >
		<!-- Header
 ============================================= -->
 <?php
                include 'HeaderDark.php'
        ?>
    <!--Content-->
    <section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('images/about/parallax2.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

        <div class="container clearfix">
            <h1>Galeri Video</h1>
            <span>Para Pelaksana SDG's Jakarta</span>
        </div>
    </section>
    <section id="content">

<div class="content wrap">
    <div class="container clearfix" style="margin-top: 10px;">
        <i class="icon-search3" style="height:35px;"></i><input type="text" class="cd-search table-filter" 
        data-table="order-table" placeholder="Item to filter.." 
        style="margin-bottom: 50px;margin-left:20px;width:300px;height:35px"/>
    <table id="example1" class="table table-bordered table-hover">
                                      <thead style="background-color: #f39d12;color: #ffffff;">
                                          <tr>
                                            <th>No</th>
                                            <th>Nama Pengunggah</th>
                                            <th>Email Pengunggah</th>
                                            <th>Tanggal Unggah</th>
                                            <th>Nama Video</th>
                                            <th>Link Video</th>
                                          </tr>
                                          </thead>
                                          <tbody style="text-align: center;">
									<?php
										include 'Admin/lte/koneksivideo.php';
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
													<td><?php echo $nomor_urut; ?></td>
													<td><?php echo $row['nama']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['tanggal']; ?></td>
													<td><?php echo $row['namavideo']; ?></td>
													<td><?php echo $row['linkvideo']; ?></td>
												</tr>
									<?php 
											}
										} 
									?>
								</tbody>
                                          <tfoot>
                                          <tr>
                                            <th>No</th>
                                            <th>Nama Pengunggah</th>
                                            <th>Email Pengunggah</th>
                                            <th>Tanggal Unggah</th>
                                            <th>Nama Video</th>
                                            <th>Link Video</th>
                                          </tr>
                                          </tfoot>
                                </table>
                                    </div>
                                </div>
</section>
<!--/EndContent-->
    		<!-- Footer
		============================================= -->
        <?php
	include 'footer.php'
	?>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
  <script  src="js\script.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>