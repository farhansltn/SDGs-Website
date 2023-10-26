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
        include "Header.php"
        ?>
        <section id="content" style="padding-left: 35px;padding-right: 25px;">

                <div class="content-wrap">
                    <div id="oc-images" class="owl-carousel owl-carousel-full news-carousel header-stick">
                            <?php
                                                include 'Admin\lte\KoneksiBerita.php';
                                                $nomor_urut = 0;
                                                $query = "SELECT * FROM berita LIMIT 10";
                                                $result = mysqli_query(koneksiDB(), $query);
                                                $countData = mysqli_num_rows($result);if ($countData < 1) { 
                                                    ?>	
                                                    <?php
                                                        } else {
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $nomor_urut = $nomor_urut + 1;
                            ?>
                            <div class="oc-item">
                                <a href="#"><img src="Admin\lte\file\<?php echo $row["titlethumb"]?>" alt="Image 5"></a>
                                <div class="overlay">
                                    <div class="text-overlay">
                                        <span class="label label-danger"><?php echo $row["pilar"]?></span>
                                        <div class="text-overlay-title">
                                            <h2><?php echo $row["judulberita"]?></h2>
                                        </div>
                                        <div class="text-overlay-meta">
                                            <span><?php echo $row["nama"]?></span>
                                        </div> 
                                    </div>
                                    <div class="rounded-skill" data-color="#e74c3c" data-trackcolor="rgba(0,0,0,0.1)" data-size="100" data-percent="100" data-width="7" data-animate="3000">0<?php echo $nomor_urut;?></div>
                                </div>
                            </div>
                            <?php 
                                    }
                                }
                            ?>
                </div>
                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        var ocImages = $("#oc-images");

                        ocImages.owlCarousel({
                            margin: 3,
                            stagePadding: 50,
                            loop: true,
                            nav: true,
                            navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                            dots: false,
                            responsive:{
                                0:{ items:1 },
                                1050:{ items:2 }
                            }
                        });

                    });

                </script>
                <div class="fancy-title title-border">
                        <h3>Berita TPB Terbaru</h3>
                </div> 
                        <?php
                                            $nomor_urut = 0;
                                            $query = "SELECT * FROM berita LIMIT 5";
                                            $result = mysqli_query(koneksiDB(), $query);
                                            $countData = mysqli_num_rows($result);if ($countData < 1) { 
                                                ?>	
                                                <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $nomor_urut = $nomor_urut + 1;
                        ?>
                <div class="col_full bottommargin-lg clearfix">

                    <div class="fancy-title title-border">
                        <h3><?php echo $row["pilar"]?></h3>
                    </div>
                    <div class="ipost clearfix">
                        <div class="col_half bottommargin-sm">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="Admin\lte\file\<?php echo $row["titlethumb"]?>"alt="Image"></a>
                            </div>
                        </div>
                        <div class="col_half bottommargin-sm col_last">
                            <div class="entry-title">
                                <h1><a href="blog-single.html"><?php echo $row["judulberita"]?></a></h1>
                                <h3><a href="blog-single.html"><?php echo $row["pilar"]?></a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo $row["tanggal"]?></li>
                            </ul>
                            <div class="entry-content">
                                <p><?php echo $row["editor1"]?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                                                            }
                                                }
                ?>
                           
        </section>
	<!-- Footer
	============================================= -->
	<?php
	include 'footer.php'
	?><!-- #footer end -->

    </div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>