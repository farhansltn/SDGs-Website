<?php 
	include 'KoneksiPilarTPB.php';
	
	$namatpb = $_POST['namatpb'];
	$namaThumbnail = $_FILES['thumbnail']['name'];
	$x = explode('.', $namaThumbnail);
	$ekstensiFileThumb = strtolower(end($x));
	$ukuranFileThumb	= $_FILES['thumbnail']['size'];
	$file_tmp = $_FILES['thumbnail']['tmp_name'];
    $namaBanner = $_FILES['banner']['name'];
	$x = explode('.', $namaBanner);
	$ekstensiBanner = strtolower(end($x));
	$UkuranFileBanner	= $_FILES['banner']['size'];
	$file_tmp1 = $_FILES['banner']['tmp_name'];
    $editor1 = $_POST['editor1'];
	$editor2= $_POST['editor2'];
    $editor3 = $_POST['editor3'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	$dirUpload = "/file";
	$linkThumb = $dirUpload.$namaThumbnail;
    $linkBanner = $dirUpload.$namaBanner;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkThumb);
	$terupload2 = move_uploaded_file($file_tmp, $linkBanner);

	$dataArr = array(
        'namatpb' => $namatpb,
        'link' => $namaThumbnail, 
        'size' => $ukuranFileThumb, 
        'ekstensi' => $ekstensiFileThumb, 
        'thumbnail' => $linkThumb, 
        'linkbanner' => $linkBanner, 
        'sizebanner' => $UkuranFileBanner, 
        'ekstensibanner' => $ekstensiBanner, 
        'banner' => $namaBanner, 
        'editor1' => $editor1,
		'editor2' => $editor2, 
        'editor3' => $editor3
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiPilarTPB.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturPilarTPB.php", true, 301);
        exit();
	}

 ?>