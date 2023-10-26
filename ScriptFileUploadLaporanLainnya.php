<?php 
	include 'Koneksilaporanlainnya.php';
	
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$tahun= $_POST['tahun'];
	$buku= $_POST['namabuku'];
	$namaFile = $_FILES['berkas']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];
	$penjelasan= $_POST['penjelasan'];
	$namaFile2 = $_FILES['thumb']['name'];
	$x2 = explode('.', $namaFile);
	$file_tmp2 = $_FILES['thumb']['tmp_name'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	$dirUpload = "./file/";
	$linkBerkas = $dirUpload.$namaFile;
	$linkBerkas2 = $dirUpload.$namaFile2;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);
	$terupload2 = move_uploaded_file($file_tmp2, $linkBerkas2);

	$dataArr = array(
        'nama' => $nama, 
        'email' => $email,
		'tahun' => $tahun, 
		'namabuku' => $buku,
        'title' => $namaFile, 
        'size' => $ukuranFile, 
        'ekstensi' => $ekstensiFile, 
        'berkas' => $linkBerkas, 
        'penjelasan' => $penjelasan, 
		'thumb' => $namaFile2, 
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiLaporanLainnya.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-LaporanLainnya.php", true, 301);
        exit();
	}

 ?>