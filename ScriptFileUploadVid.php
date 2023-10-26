<?php 
	include 'Koneksivideo.php';
	
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$tanggal= $_POST['tanggal'];
	$namavideo= $_POST['namavideo'];
	$linkvideo= $_POST['linkvideo'];
    $id = $_GET["id"];

	$dataArr = array(
        'nama' => $nama, 
        'email' => $email,
		'tanggal' => $tanggal, 
		'namavideo' => $namavideo,
        'linkvideo' => $linkvideo
    );

	if (insertData($dataArr) == 1) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiVideo.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturVideo.php", true, 301);
        exit();
	}


 ?>