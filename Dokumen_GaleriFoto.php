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
 include "HeaderDark.php"
 ?>
    <!--Content-->
    <section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('images/about/parallax2.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

        <div class="container clearfix">
            <h1>Galeri Foto</h1>
            <span>Para Pelaksana SDG's Jakarta</span>
        </div>
    </section>
    <section id="content">

	<div class="content wrap">
        <div class="container clearfix" style="margin-top: 10px;">
        <?php
										include 'Admin\lte\koneksifoto.php';
										$nomor_urut = 0;
										function selectAllData2() {
											$query = "SELECT * FROM unggahfoto  ORDER BY RAND() LIMIT 20";
											$result = mysqli_query(koneksiDB(), $query);
											return $result;
										}
										$result = selectAllData2();
										$countData = mysqli_num_rows($result);
						
										if ($countData < 1) { 
									?>	
									<?php
										} else {
											while ($row = mysqli_fetch_assoc($result)) {
												
												$nomor_urut = $nomor_urut + 1;
									?>
                                        
                                        <div id="posts" class="post-grid clearfix">
                                    
                                            <div class="entry clearfix">
                                                <div class="entry-image">
                                                    <a href="Admin\lte\file\<?php echo $row["title"]?>" data-lightbox="image">
                                                    <img class="image_fade" src="Admin\lte\file\<?php echo $row["title"]?>"
                                                    alt="Galeri Kegiatan SDG's"></a>
                                                </div>
                                                <div class="entry-title">
                                                    <h2><a href="blog-single.html"><?php echo $row["namafoto"]?></a></h2>
                                                </div>
                                                <ul class="entry-meta clearfix">
                                                    <li><i class="icon-calendar3"></i> <?php echo $row["tanggal"]?></li>
                                                </ul>
                                                <div class="entry-content">
                                                    <p style="font-size:larger;"><?php echo $row["caption"]?></p>
													<p><?php echo $row["nama"]?></p>
                                                    <a href="DownloadFile.php?url=<?php echo $row['berkas']; ?>">Download</a>
                                                </div>
                                            </div>
												
             
						<?php 
											}
										} 
						?>
                                        </div>
									</div>
    </section>
<!--/EndContent-->
<!--footer beginning-->
<?php
	include 'footer.php'
	?><!--footer end-->
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>