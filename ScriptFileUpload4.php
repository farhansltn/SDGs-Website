<?php 
	include 'Koneksi4.php';
	
	$biper = $_POST['biper'];
	$namaperusahaan = $_POST['namaperusahaan'];
	$jenisperusahaan= $_POST['jenisperusahaan'];
    $jenislaba= $_POST['jenislaba'];
	$profit= $_POST['profit'];
    $jumkar = $_POST['jumkar'];
	$tempat = $_POST['tempat'];
	$tahun= $_POST['tahun'];
    $tanggal= $_POST['tanggal'];
	$peran= $_POST['peran'];
    $notelpon = $_POST['notelpon'];
	$nofax = $_POST['nofax'];
	$namaemail= $_POST['namaemail'];
    $endmail= $_POST['endmail'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];
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
        'biper' => $biper, 
        'namaperusahaan' => $namaperusahaan,
        'jenisperusahaan' => $jenisperusahaan,
		'jenislaba' => $jenislaba, 
		'profit' => $profit,
        'jumkar' => $jumkar, 
        'tempat' => $tempat, 
        'tahun' => $tahun, 
        'tanggal' => $tanggal, 
        'peran' => $peran, 
        'notelpon' => $notelpon, 
        'nofax' => $nofax, 
        'namaemail' => $namaemail, 
        'endmail' => $endmail,
		'thumb' => $namaFile2
    );

	if (insertData($dataArr) == 1) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiDaftarStakeholders.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-DaftarStakeholders.php", true, 301);
        exit();
	}

 ?>