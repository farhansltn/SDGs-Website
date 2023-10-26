<footer id="footer" class="dark" style="background: rgb(6,141,169);
background: linear-gradient(90deg, rgba(6,141,169,1) 0%, rgba(4,123,147,1) 63%, rgba(4,102,123,1) 100%);border:none;">
	
				<div class="container">
	
					<!-- Footer Widgets
					============================================= -->
					<div class="footer-widgets-wrap clearfix">
	
						<div class="col_two_third">
	
							<div class="col_one_third">
	
								<div class="widget clearfix">
	
									<img src="images/footer-widget-logo.png" alt="" class="footer-logo">
	
									<p>No <strong>One</strong>, <strong>Left</strong> <strong>Behind</strong> TPB 2030</p>
	
									<div style="background: url('images/world-map.png') no-repeat center center; background-size: 120%;">
										<address>
											<strong>Kantor Kami:</strong><br>
											Jl. Medan Merdeka Sel. No.8-9, RT.11/RW.2, Gambir <br>
											Kecamatan Gambir, Kota Jakarta Pusat <br>
											Daerah Khusus Ibukota Jakarta 10110
										</address>
										<abbr title="Phone Number"><strong>No Telepon:</strong></abbr> (021) 3822255<br>
										<abbr title="Fax"><strong>Kantor:</strong></abbr> (021) 3822255 <br>
										<abbr title="Email Address"><strong>Email:</strong></abbr> sekretariat.sdgsjkt@gmail.com
									</div>
	
								</div>
	
							</div>
	
							<div class="col_one_third">
	
								<div class="widget widget_links clearfix">
	
									<h4>Cari tahu lebih banyak tentang TPB Pada</h4>
	
									<ul>
										<li><a href="https://sdgs.un.org/goals">TPB United Nation</a></li>
										<li><a href="https://sdgcafrica.org/">TPB Afrika</a></li>
										<li><a href="https://sdgs.bappenas.go.id/sekilas-sdgs/">TPB indonesia</a></li>
									</ul>
	
								</div>
	
							</div>
	
							<div class="col_one_third ">
	
								<div class="widget clearfix">
									<h4>Postingan TPB Terbaru</h4>
									<div id="post-list-footer">
										<div class="spost clearfix">
											
									<?php
									include 'Admin\lte\Koneksi.php';
                                            $nomor_urut = 0;
                                            $query = "SELECT * FROM berita LIMIT 5";
                                            $result = mysqli_query(koneksiDB(), $query);
                                            $countData = mysqli_num_rows($result);
											if ($countData < 1) { 
                                                ?>	
                                                <?php
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $nomor_urut = $nomor_urut + 1;
                                                            ?>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#"><?php echo $row["judulberita"]?></a></h4>
												</div>
												<ul class="entry-meta">
													<li><?php echo $row["tanggal"]?></li>
												</ul>
											</div>
											
									<?php 
                                                }
                                            }
                            ?>
										</div>
	
									</div>
								</div>
	
							</div>
	
						</div>
	
						<div class="col_one_third col_last">
	
							<h4>Tetap Ikuti Trend TPB Terbaru</h4>
							<div class="widget clearfix" style="margin-bottom: -20px;">
								<div class="row">
	
									<div class="col-md-6 clearfix bottommargin-sm">
										<a href="https://www.facebook.com/SDGsDKIJakarta/" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="https://www.facebook.com/SDGsDKIJakarta/"><small style="display: block; margin-top: 3px;"><strong>Sukai Kami</strong><br>di Facebook</small></a>
									</div>
									<div class="col-md-6 clearfix">
										<a href="https://www.instagram.com/sdgsjakarta/" class="social-icon si-dark si-colored si-instagram nobottommargin">
											<i class="icon-instagram"></i>
											<i class="icon-instagram"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Ikuti</strong><br>Instagram kami</small></a>
									</div>
								</div>
								<div class="row">
	
									<div class="col-md-6 clearfix bottommargin-sm">
										<a href="https://www.youtube.com/@sdgsjakarta4933" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
											<i class="icon-youtube"></i>
											<i class="icon-youtube"></i>
										</a>
										<a href="https://www.youtube.com/@sdgsjakarta4933"><small style="display: block; margin-top: 3px;"><strong>Tonton Kami</strong><br>di Youtbe</small></a>
									</div>
									<div class="col-md-6 clearfix">
										<a href="https://twitter.com/SDGsJakarta" class="social-icon si-dark si-colored si-twitter nobottommargin">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Cuitan Kami</strong><br>di Twiter</small></a>
									</div>
									<img src="images/footer-sdgs.png" style="" alt="">
								</div>
							</div>
	
						</div>
	
					</div><!-- .footer-widgets-wrap end -->
	
				</div>
	
				<!-- Copyrights
				============================================= -->
				<div id="copyrights">
	
					<div class="container clearfix">
	
						<div class="col_half">
							Copyrights &copy; 2023 All Rights Reserved by Sekertariat SDG's DKI Jakarta<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>
	
						<div class="col_half col_last tright">
							<div class="fright clearfix">
								<a href="https://www.facebook.com/SDGsDKIJakarta/" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
	
								<a href="https://twitter.com/SDGsJakarta" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="https://www.instagram.com/sdgsjakarta/" class="social-icon si-small si-borderless si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
								<a href="https://www.youtube.com/@sdgsjakarta4933" class="social-icon si-small si-borderless si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>
	
							<div class="clear"></div>
	
							<i class="icon-envelope2"></i> sekretariat.sdgsjkt@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> (021) 3822255 <span class="middot">&middot;</span> <i class="icon-instagram"></i> SDG'sOnIG
						</div>
	
					</div>
	
				</div><!-- #copyrights end -->
	
</footer><!-- #footer end -->