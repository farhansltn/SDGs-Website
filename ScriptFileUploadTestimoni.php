<?php 
	include 'KoneksiTestimoni.php';
	
	$nama = $_POST['nama'];
	$email= $_POST['email'];
    $notelp = $_POST['notelp'];
	$penilaian= $_POST['penilaian'];
    $nilai = $_POST['nilai'];
	$editor1= $_POST['editor1'];


	$dataArr = array(
        'nama' => $nama,
		'email' => $email, 
        'notelp' => $notelp, 
        'penilaian' => $penilaian, 
        'nilai' => $nilai, 
        'editor1' => $editor1, 
    );

	if (insertData($dataArr) == 1) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiTestimoni.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturTestimoni.php", true, 301);
        exit();
	}

 ?>