<?php 
	include 'koneksikontak.php';
	
	$email = $_POST['email'];
	$linkedin = $_POST['linkedin'];
	$instagram= $_POST['instagram'];
    $facebook= $_POST['facebook'];
    $nama = $_POST['nama'];
	$notelp = $_POST['notelp'];
	$peran= $_POST['peran'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	
	$dataArr = array(
        'nama' => $nama, 
        'email' => $email,
        'instagram' => $instagram,
        'linkedin' => $linkedin,
		'facebook' => $facebook, 
        'nama' => $nama,
        'notelp' => $notelp,
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