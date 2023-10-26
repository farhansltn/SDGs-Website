<?php 
	include 'KoneksiDokumen.php';
	
	$nama = $_POST['nama'];
	$judul= $_POST['judul'];
	$tentang= $_POST['tentang'];
	$tahun= $_POST['tahun'];
	$namaFile = $_FILES['berkas']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];
	$link2= $_POST['link2'];
    $id = $_GET["id"];

	// Lokasi Penempatan file
	$dirUpload = "/file";
	$linkBerkas = $dirUpload.$namaFile;

	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);

	$dataArr = array(
        'nama' => $nama, 
        'judul' => $judul,
		'tentang' => $tentang, 
		'tahun' => $tahun,
        'title' => $namaFile, 
        'size' => $ukuranFile, 
        'ekstensi' => $ekstensiFile, 
        'berkas' => $linkBerkas, 
        'link2' => $link2,
    );

	if ($terupload && (insertData($dataArr) == 1)) {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiDokumen.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturDokumen.php", true, 301);
        exit();
	}

 ?>