<?php 
	include 'Koneksifotoweb.php';
	
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$tanggal= $_POST['tanggal'];
	$foto= $_POST['judulfoto'];
	$namaFile = $_FILES['berkas']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	$dirUpload = "/file";
	$linkBerkas = $dirUpload.$namaFile;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);

	$dataArr = array(
        'nama' => $nama, 
        'email' => $email,
		'tanggal' => $tanggal, 
		'judulfoto' => $foto,
        'title' => $namaFile, 
        'size' => $ukuranFile, 
        'ekstensi' => $ekstensiFile, 
        'berkas' => $linkBerkas, 
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: Admin-AturFotoWebsite.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-PublikasiFotoWeb.php", true, 301);
        exit();
	}


 ?>