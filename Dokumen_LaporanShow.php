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
                include 'Header.php'
        ?>
    <!--Content-->
    <section id="content" style="padding: 0%;">
        <div class="fslider">
            <div class="flexslider">
                <div class="slider-wrap">
                    <div class="slide"><img src="images/slider/swiper/DokumenTPB1.jpg" alt="Slider 2">
                </div>
                    <div class="slide"><img src="images/slider/swiper/DokumenTPB2.jpg" alt="Slider 1"></div>
                    <div class="slide"><img src="images/slider/swiper/DokumenTPB3.jpg" alt="Slider 3"></div>
                </div>
            </div>
        </div>
        <div class="section parallax" style="background-image: url('images/services/Stakeholders.jpg'); padding: 100px 0; margin-top: 0%;" data-stellar-background-ratio="0.3">
            <div class="heading-block center nobottomborder nobottommargin">
                <h2 style="color: white;">LAPORAN KINERJA KAMI PARA TENAGA AHLI TUJUAN PEMBANGUNAN BERKELANJUTAN</h2>
            </div>
        </div>
        <h3 class="center">Highlight Laporan TPB Nasional dan Internasional</h3>
     
        <div class="container clearfix">
            <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel">
            <?php
                                            include 'Admin\lte\Koneksi2.php';
                                            $nomor_urut = 0;
                                            $query = "SELECT * FROM laporanutama LIMIT 15";
                                            $result = mysqli_query(koneksiDB(), $query);
                                            $countData = mysqli_num_rows($result);
                            
                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>  
                <div class="oc-item"><a href="#"><img src="Admin\lte\file\<?php echo $row["thumb"]?>" alt="Brands"></a></div>
                <?php 
                                                }
                            ?>

            </div>
         
        </div>
        <script type="text/javascript">

						jQuery(document).ready(function($) {

							var ocClientsFull = $("#oc-clients-full");

							ocClientsFull.owlCarousel({
								items: 5,
								margin: 0,
								loop: true,
								nav: true,
								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								autoplay: true,
								autoplayHoverPause: false,
								dots: false,
								navRewind: false,
								responsive:{
									0:{ items:2 },
									480:{ items:3 },
									768:{ items:4 },
									992:{ items:5 },
									1200:{ items:7 },
									1400:{ items:8 }
								}
							});

						});

		</script>
                <!-- Posts
                ============================================= -->
            <div id="posts" class="post-grid post-masonry grid-2 clearfix" style="padding:2%;0%">
                    
                <div class="tabs tabs-bordered clearfix" id="tab-2">

                    <ul class="tab-nav clearfix">
                        <li><a href="#tabs-5"><i class="icon-home2 norightmargin"></i></a></li>
                        <li><a href="#tabs-6">Sekertariat SDG's</a></li>
                        <li><a href="#tabs-7">Laporan SDG's</a></li>
                    </ul>      
                    <div class="tab-container">
                        <div class="tab-content clearfix" id="tabs-5">
                            <div class="section parallax" style="background-image: url('images/services/Stakeholders.jpg'); padding: 100px 0; margin-top: 0%;" data-stellar-background-ratio="0.3">
                                <div class="heading-block center nobottomborder nobottommargin">
                                    <h3 style="color: white;">KUMPULAN BERBAGAI LAPORAN TUJUAN PEMBANGUNAN BERKELANJUTAN</h3>
                                </div>
                            </div>
                        <?php
                                            $nomor_urut = 0;
                                            $query = "SELECT * FROM laporanbln  ORDER BY RAND() LIMIT 10";
                                            $result = mysqli_query(koneksiDB(), $query);
                                            $countData = mysqli_num_rows($result);
                            
                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>  
                            
                            <div class="entry clearfix" style="width 400px;border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's"></a>
                                        </div>
                                        <div class="entry-title"> 
                                            <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo $row["namabuku"]?></h2></a>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> <?php echo $row["bulan"]?></li>
                                            <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                                        </ul>
                                        <div class="entry-content">
                                            <p><?php echo wordwrap($row['penjelasan'],60,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                                        </div>
                                    </div>
                            
                            <?php 
                                                }
                            ?>
                            
                            <?php
                                        $queryright = "SELECT * FROM laporanhri  ORDER BY RAND() LIMIT 10";
                                        $resultright = mysqli_query(koneksiDB(), $queryright);
                                        $countdata2 = mysqli_num_rows($resultright);
                                    
                                        while ($row = mysqli_fetch_assoc($resultright)) {
                                            
                                            $nomor_urut = $nomor_urut + 1;
                                ?>  
                                     <div class="entry clearfix" style="border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's" ></a>
                                        </div>
                                        <div class="entry-title"> 
                                            <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo $row["namabuku"]?></h2></a>
                                        </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["bulan"]?></li>
                                <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo wordwrap($row['penjelasan'],60,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                            </div>
                        </div>
                        
                    <?php 
                    }
    ?>
    
    <?php
                                        $queryright = "SELECT * FROM laporanthn  ORDER BY RAND() LIMIT 10";
                                        $resultright = mysqli_query(koneksiDB(), $queryright);
                                        $countdata2 = mysqli_num_rows($resultright);
                                    
                                        while ($row = mysqli_fetch_assoc($resultright)) {
                                            
                                            $nomor_urut = $nomor_urut + 1;
                                ?>  
                                  <div class="entry clearfix" style="border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's"></a>
                                        </div>
                                        
                                        <div class="entry-title"> 
                                            <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo $row["namabuku"]?></h2></a>
                                        </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo wordwrap($row['penjelasan'],60,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                            </div>
                        </div>
                        
                    <?php 
                    }
    ?>
     <?php
                                        $queryright = "SELECT * FROM laporanutama  ORDER BY RAND() LIMIT 10";
                                        $resultright = mysqli_query(koneksiDB(), $queryright);
                                        $countdata2 = mysqli_num_rows($resultright);
                                    
                                        while ($row = mysqli_fetch_assoc($resultright)) {
                                            
                                            $nomor_urut = $nomor_urut + 1;
                                ?>  
                                       <div class="entry clearfix" style="border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's" ></a>
                                        </div>
                                        <div class="entry-title"> 
                                            <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo $row["namabuku"]?></h2></a>
                                        </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo wordwrap($row['penjelasan'],60,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                            </div>
                        </div>
                        
                    <?php 
                    }
    ?>      
    </div>
                        <div class="tab-content clearfix" id="tabs-6">
                            <div class="section parallax" style="background-image: url('images/services/Stakeholders.jpg'); padding: 100px 0; margin-top: 0%;" data-stellar-background-ratio="0.3">
                                <div class="heading-block center nobottomborder nobottommargin">
                                    <h3 style="color: white;">KUMPULAN LAPORAN KAMI PARA TENAGA AHLI TUJUAN PEMBANGUNAN BERKELANJUTAN</h3>
                                    
                                </div>
                            </div>
                                        <?php
                                            $nomor_urut = 0;
                                            $query = "SELECT * FROM laporanbln  ORDER BY RAND() LIMIT 10";
                                            $result = mysqli_query(koneksiDB(), $query);
                                            $countData = mysqli_num_rows($result);
                            
                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>  
                            
                                <div class="entry clearfix" style="border:none;" >
                                        <div class="entry-image">
                                                <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                                <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                                alt="Galeri Kegiatan SDG's"></a>
                                            </div>
                                            <div class="entry-title">
                                                    <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo wordwrap($row['namabuku'],40,"\n", true);?></h2></a>
                                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <?php echo $row["bulan"]?></li>
                                    <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                                <div class="entry-content" > 
                                    <p><?php echo wordwrap($row['penjelasan'],40,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                                </div>
                        </div>
                            
                            <?php 
                                                }
                            ?>
                            
                            <?php
                                        $queryright = "SELECT * FROM laporanhri  ORDER BY RAND() LIMIT 10";
                                        $resultright = mysqli_query(koneksiDB(), $queryright);
                                        $countdata2 = mysqli_num_rows($resultright);
                                    
                                        while ($row = mysqli_fetch_assoc($resultright)) {
                                            
                                            $nomor_urut = $nomor_urut + 1;
                                ?>  
                                     <div class="entry clearfix" style="border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's" ></a>
                                        </div>
                                            <div class="entry-title">
                                                    <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo wordwrap($row['namabuku'],40,"\n", true);?></h2></a>
                                                </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["bulan"]?></li>
                                <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo wordwrap($row['penjelasan'],40,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                            </div>
                        </div>
                        
                    <?php 
                    }
    ?>
    <?php
                                        $queryright = "SELECT * FROM laporanthn  ORDER BY RAND() LIMIT 10";
                                        $resultright = mysqli_query(koneksiDB(), $queryright);
                                        $countdata2 = mysqli_num_rows($resultright);
                                    
                                        while ($row = mysqli_fetch_assoc($resultright)) {
                                            
                                            $nomor_urut = $nomor_urut + 1;
                                ?>  
                                  <div class="entry clearfix" style="border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's"></a>
                                        </div>
                                            <div class="entry-title">
                                                    <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo wordwrap($row['namabuku'],40,"\n", true);?></h2></a>
                                                </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo wordwrap($row['penjelasan'],60,"\n", true);?></p>
                                <p style="Font-size:smaller">Ketik Judul Untuk Mendownload</p>
                            </div>
                        </div>
                        
                    <?php 
                    }
    ?>              
    </div>
    <div class="tab-content clearfix" id="tabs-7">
        <div class="section parallax" style="background-image: url('images/services/Stakeholders.jpg'); padding: 100px 0; margin-top: 0%;" data-stellar-background-ratio="0.3">
            <div class="heading-block center nobottomborder nobottommargin">
                <h3 style="color: white;">KUMPULAN LAPORAN TENTANG TUJUAN PEMBANGUNAN BERKELANJUTAN</h3>
            </div>
                            </div>
                                <?php
                                        $queryright = "SELECT * FROM laporanutama  ORDER BY RAND() LIMIT 10";
                                        $resultright = mysqli_query(koneksiDB(), $queryright);
                                        $countdata2 = mysqli_num_rows($resultright);
                                    
                                        while ($row = mysqli_fetch_assoc($resultright)) {
                                            
                                            $nomor_urut = $nomor_urut + 1;
                                ?>  
                                       <div class="entry clearfix" style="border:none;">
                                       <div class="entry-image">
                                            <a href="Admin\lte\file\<?php echo $row["thumb"]?>" data-lightbox="image">
                                            <img class="image_fade" src="Admin\lte\file\<?php echo $row["thumb"]?>"
                                            alt="Galeri Kegiatan SDG's" ></a>
                                        </div>
                                            <div class="entry-title">
                                                    <a href="DownloadFile.php?url=Admin\lte\<?php echo $row['berkas']; ?>"><h2><?php echo wordwrap($row['namabuku'],40,"\n", true);?></h2></a>
                                                </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["tahun"]?></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo wordwrap($row['penjelasan'],60,"\n", true);?></p>
                            </div>
                        </div>
                        
                    <?php 
                    }
    ?>
    </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- #page-title end -->
<!--/EndContent-->
    		<!-- Footer
		============================================= -->
		<!--footer beginning-->
<?php
	include 'footer.php'
	?><!--footer end-->
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
    </div>
	<!-- Footer Scripts
	============================================= -->
  <script  src="js/script.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>