<?php 
	include 'Koneksifoto.php';
	
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$tanggal= $_POST['tanggal'];
	$caption= $_POST['caption'];
	$foto= $_POST['namafoto'];
	$namaFile = $_FILES['berkas']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	$dirUpload = "./file/";
	$linkBerkas = $dirUpload.$namaFile;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);

	$dataArr = array(
        'nama' => $nama, 
        'email' => $email,
		'tanggal' => $tanggal, 
		'caption' => $caption, 
		'namafoto' => $foto,
        'title' => $namaFile, 
        'size' => $ukuranFile, 
        'ekstensi' => $ekstensiFile, 
        'berkas' => $linkBerkas, 
    );

	if (insertData($dataArr) == 1) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiFoto.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturrFoto.php", true, 301);
        exit();
	}


 ?>