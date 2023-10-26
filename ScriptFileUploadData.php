<?php 
	include 'KoneksiDR.php';
	
	$judul = $_POST['judul'];
	$tentang = $_POST['tentang'];
	$tahun= $_POST['tahun'];
	$namaFile = $_FILES['berkas']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];
    $id = $_GET['id'];


	// Lokasi Penempatan file
	$dirUpload = "./file/";
	$linkBerkas = $dirUpload.$namaFile;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);

	$dataArr = array(
		'id' => $id,
        'judul' => $judul, 
        'tentang' => $tentang,
		'tahun' => $tahun, 
        'title' => $namaFile, 
        'ekstensi' => $ekstensiFile, 
        'size' => $ukuranFile, 
        'berkas' => $linkBerkas, 
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiDataRiset.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: dmin-AturData.php", true, 301);
        exit();
	}

 ?>