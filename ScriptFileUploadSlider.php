<?php 
	include 'koneksislider.php';
	
	$editor1= $_POST['editor1'];
	$editor2 = $_POST['editor2'];
    $link = $_POST['link'];
	$namaFile = $_FILES['slider']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['slider']['size'];
	$file_tmp = $_FILES['slider']['tmp_name'];
    $id = $_GET["id"];
	// Lokasi Penempatan file
	$dirUpload = "/file";
	$linkBerkas = $dirUpload.$namaFile;
	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);

	$dataArr = array(
        'editor1' => $editor1,
		'editor2' => $editor2, 
        'link' => $link,
		'slider' => $namaFile, 
        'sizeslider' => $ukuranFile, 
        'ekstensislider' => $ekstensiFile,
        'linkslider' => $linkBerkas, 
	);

	if ($terupload && (insertData($dataArr) == 1))  {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiDaftarSlider.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturSlider.php", true, 301);
        exit();
	}

 ?>