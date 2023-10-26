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
        <title>Artikel TPB Jakarta</title>
    
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
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
	
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/DokumenTPB1.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center" style="background-color:rgba(255, 255, 255, 0.484)">
								<h2 style="color:black;" data-caption-animate="fadeInUp">Kabar Terbaru Tujuan Pembangunan Berkelanjutan</h2>
								<p style="color:black;" data-caption-animate="fadeInUp" data-caption-delay="200">Artikel yang berisikan tentang Seputar Tujuan Pembangunan Berkelanjutan</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('images/slider/swiper/DokumenTPB3.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption" style="background-color:rgba(255, 255, 255, 0.784)">
								<h2 data-caption-animate="fadeInUp">Lihat Artikel Terbaru Kami</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Semua yang Anda Butuhkan Ada Disini</p>
							</div>
						</div>
					</div>
				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			</div>
	
			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						loop: true,
						speed: 1000,
						progress: true,
						onProgressChange: function(swiper){
							for (var i = 0; i < swiper.slides.length; i++){
								var slide = swiper.slides[i];
								var progress = slide.progress;
								var translate = progress*swiper.width;
								var opacity = 1 - Math.min(Math.abs(progress),1);
								slide.style.opacity = opacity;
								swiper.setTransform(slide,'translate3d('+translate+'px,0,0)');
							}
						},
						onTouchStart:function(swiper){
							for (var i = 0; i < swiper.slides.length; i++){
								swiper.setTransition(swiper.slides[i], 0);
							}
						},
						onSetWrapperTransition: function(swiper, speed) {
							for (var i = 0; i < swiper.slides.length; i++){
								swiper.setTransition(swiper.slides[i], speed);
							}
						},
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeStart: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeEnd: function(swiper){
							$('#slider').find('.swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
								if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
							});
							$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
								if($(this).find('.yt-bg-player').length > 0) {
									$(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
								}
							});
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }
	
							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});
	
					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});
	
					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});
				});
			</script>
	
		</section>
		<!-- Content
			============================================= -->
			<section id="content">
	
				<div class="content-wrap">
	
					<div class="container clearfix">
	
						<!-- Portfolio Filter
						============================================= -->
						<ul id="portfolio-filter" class="clearfix">
	
							<li class="activeFilter"><a href="#" data-filter="*">Semua</a></li>
							<li><a href="#" data-filter=".pf-kategori1">Sosial</a></li>
							<li><a href="#" data-filter=".pf-kategori2">Ekonomi</a></li>
							<li><a href="#" data-filter=".pf-kategori3">Lingkungan</a></li>
							<li><a href="#" data-filter=".pf-kategori4">Hukum dan Tata Kelola</a></li>
	
						</ul><!-- #portfolio-filter end -->
	
						<div id="portfolio-shuffle">
							<i class="icon-random"></i>
						</div>
	
						<div class="clear"></div>
	
						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="clearfix">
											<?php
                                            include 'Admin\lte\KoneksiArtikel.php';
                                            $nomor_urut = 0;
                                            $query = "SELECT * FROM artikel WHERE subjudul='Sosial' LIMIT 10";
                                            $result = mysqli_query(koneksiDB(), $query);
                                            $countData = mysqli_num_rows($result);
											if ($countData < 1) { 
                                                ?>	
                                                <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $nomor_urut = $nomor_urut + 1;
                                            ?>
							<article class="portfolio-item pf-kategori1">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="Admin\lte\file\<?php echo $row["titlethumb"]?>" alt="Artikel">
									</a>
									<div class="portfolio-overlay">
										<a href="Admin\lte\file\<?php echo $row["titlebanner"]?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html"><?php echo $row["judulartikel"]?></a></h3>
									<span><a href="<?php echo $row["link"]?>">Selengkapnya</a></span>
								</div>
							</article>
							<?php 
                                                }
                                            }
                            ?>
							<?php
                                            $nomor_urut = 0;
                                            $query1 = "SELECT * FROM artikel WHERE subjudul ='Ekonomi' LIMIT 10";
                                            $result1 = mysqli_query(koneksiDB(), $query1);
                                            $countData1 = mysqli_num_rows($result1);
											if ($countData1 < 1) { 
                                                ?>	
                                                <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result1)) {
                                                            $nomor_urut = $nomor_urut + 1;
                            ?>
							<article class="portfolio-item pf-kategori2">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="Admin\lte\file\<?php echo $row["titlethumb"]?>" alt="Artikel">
									</a>
									<div class="portfolio-overlay">
										<a href="Admin\lte\file\<?php echo $row["titlebanner"]?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html"><?php echo $row["judulartikel"]?></a></h3>
									<span><a href="<?php echo $row["link"]?>">Selengkapnya</a></span>
								</div>
							</article>
							
							<?php 
                                                }
                                            }
                            ?>
							<?php
                                            $nomor_urut = 0;
                                            $query2 = "SELECT * FROM artikel WHERE subjudul ='Lingkungan' LIMIT 10";
                                            $result2 = mysqli_query(koneksiDB(), $query2);
                                            $countData2 = mysqli_num_rows($result2);
											if ($countData2 < 1) { 
                                                ?>	
                                                <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result2)) {
                                                            $nomor_urut = $nomor_urut + 1;
                             ?>
							<article class="portfolio-item pf-kategori3">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="Admin\lte\file\<?php echo $row["titlethumb"]?>" alt="Artikel">
									</a>
									<div class="portfolio-overlay">
										<a href="Admin\lte\file\<?php echo $row["titlebanner"]?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html"><?php echo $row["judulartikel"]?></a></h3>
									<span><a href="<?php echo $row["link"]?>">Selengkapnya</a></span>
								</div>
							</article>
							
							<?php 
                                                }
                                            }
                            ?>
							<?php
                                            $nomor_urut = 0;
                                            $query3 = "SELECT * FROM artikel WHERE subjudul ='Hukum dan Tata Kelola' LIMIT 10";
                                            $result3 = mysqli_query(koneksiDB(), $query3);
                                            $countData3 = mysqli_num_rows($result3);
											if ($countData1 < 1) { 
                                                ?>	
                                                <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result3)) {
                                                            $nomor_urut = $nomor_urut + 1;
                                                            ?>
							<article class="portfolio-item pf-kategori4">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="Admin\lte\file\<?php echo $row["titlethumb"]?>" alt="Artikel">
									</a>
									<div class="portfolio-overlay">
										<a href="Admin\lte\file\<?php echo $row["titlebanner"]?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html"><?php echo $row["judulartikel"]?></a></h3>
									<span><a href="<?php echo $row["link"]?>">Selengkapnya</a></span>
								</div>
							</article>
							
							<?php 
                                                }
                                            }
                            ?>
						</div><!-- #portfolio end -->
	
						<!-- Portfolio Script
						============================================= -->
						<script type="text/javascript">
	
							jQuery(window).load(function(){
	
								var $container = $('#portfolio');
	
								$container.isotope({ transitionDuration: '0.65s' });
	
								$('#portfolio-filter a').click(function(){
									$('#portfolio-filter li').removeClass('activeFilter');
									$(this).parent('li').addClass('activeFilter');
									var selector = $(this).attr('data-filter');
									$container.isotope({ filter: selector });
									return false;
								});
	
								$('#portfolio-shuffle').click(function(){
									$container.isotope('updateSortData').isotope({
										sortBy: 'random'
									});
								});
	
								$(window).resize(function() {
									$container.isotope('layout');
								});
	
							});
	
						</script><!-- Portfolio Script End -->
	
					</div>
	
				</div>
	
			</section><!-- #content end -->
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