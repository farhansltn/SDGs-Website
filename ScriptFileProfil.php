<?php 
	include 'koneksiprofil.php';
	
	$nama = $_POST['nama'];
	$sekilas = $_POST['sekilas'];
	$alamat= $_POST['alamat'];
    $email= $_POST['email'];
    $linkedin = $_POST['linkedin'];
	$instagram = $_POST['instagram'];
	$facebook= $_POST['facebook'];
    $notelp = $_POST['notelp'];
	$nofax = $_POST['nofax'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	
	$dataArr = array(
        'nama' => $nama, 
        'sekilas' => $sekilas,
        'alamat' => $alamat,
		'facebook' => $facebook, 
        'email' => $email,
        'linkedin' => $linkedin,
		'instagram' => $instagram, 
        'notelp' => $notelp,
        'nofax' => $nofax,
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