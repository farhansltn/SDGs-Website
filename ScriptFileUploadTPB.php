<?php 
	include 'KoneksiTPB.php';
	
	$namatpb = $_POST['namatpb'];
	$namapilar= $_POST['namapilar'];
	$namaThumbnail = $_FILES['thumbnail']['name'];
	$x = explode('.', $namaThumbnail);
	$ekstensiFileThumb = strtolower(end($x));
	$ukuranFileThumb	= $_FILES['thumbnail']['size'];
	$file_tmp = $_FILES['thumbnail']['tmp_name'];
    $namaBanner = $_FILES['banner']['name'];
	$x = explode('.', $namaBanner);
	$ekstensiBanner = strtolower(end($x));
	$file_tmp1 = $_FILES['banner']['tmp_name'];
    $namaBannerAtas = $_FILES['banneratas']['name'];
	$x = explode('.', $namaBannerAtas);
	$ekstensiBannerAtas = strtolower(end($x));
	$file_tmp2 = $_FILES['banneratas']['tmp_name'];
    $editor1 = $_POST['editor1'];
	$editor2= $_POST['editor2'];
    $editor3 = $_POST['editor3'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	$dirUpload = "/file";
	$linkThumb = $dirUpload.$namaThumbnail;
    $linkBanner = $dirUpload.$namaBanner;
    $linkBannerAtas = $dirUpload.$namaBannerAtas;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkThumb);
	$terupload2 = move_uploaded_file($file_tmp, $linkBanner);
	$terupload3 = move_uploaded_file($file_tmp, $linkBannerAtas);

	$dataArr = array(
        'namatpb' => $namatpb,
		'namapilar' => $namapilar, 
        'link' => $namaThumbnail, 
        'size' => $ukuranFileThumb, 
        'ekstensi' => $ekstensiFileThumb, 
        'thumbnail' => $linkThumb, 
        'linkbanner' => $linkBanner, 
        'ekstensibanner' => $ekstensiBanner, 
        'banner' => $namaBanner, 
        'linkbanneratas' => $linkBannerAtas, 
        'ekstensibanneratas' => $ekstensiBannerAtas, 
        'banneratas' => $namaBannerAtas, 
        'editor1' => $editor1,
		'editor2' => $editor2, 
        'editor3' => $editor3
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiTPB.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturTPB.php", true, 301);
        exit();
	}

 ?>