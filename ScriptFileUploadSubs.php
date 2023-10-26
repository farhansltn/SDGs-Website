<?php 
	include 'koneksisubs.php';
	
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$ipadd= $_POST['ipadd'];
    $peran= $_POST['peran'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	
	$dataArr = array(
        'nama' => $nama, 
        'email' => $email,
        'ipadd' => $ipadd,
		'peran' => $peran, 
    );

	if (insertData($dataArr) == 1) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiSubs.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturSubscriber.php", true, 301);
        exit();
	}
 ?>