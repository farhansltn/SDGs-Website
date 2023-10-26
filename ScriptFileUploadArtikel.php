<?php 
	include 'KoneksiArtikel.php';
	
	$email= $_POST['email'];
	$nama = $_POST['nama'];
    $judulartikel = $_POST['judulartikel'];
	$kategoriartikel = $_POST['kategoriartikel'];
	$subjudul= $_POST['subjudul'];
	$namaFile = $_FILES['thumb']['name'];
	$x = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($x));
	$ukuranFile	= $_FILES['thumb']['size'];
	$file_tmp = $_FILES['thumb']['tmp_name'];
	$namaFile2 = $_FILES['banner']['name'];
	$x = explode('.', $namaFile2);
	$ekstensiFile2 = strtolower(end($x));
	$ukuranFile2	= $_FILES['banner']['size'];
	$file_tmp2 = $_FILES['banner']['tmp_name'];
	$link = $_POST['link'];
    $id = $_GET["id"];
	// Lokasi Penempatan file
	$dirUpload = "./file/";
	$linkBerkas = $dirUpload.$namaFile;
	$linkBerkas2 = $dirUpload.$namaFile2;
	// Menyimpan file
	$terupload = move_uploaded_file($file_tmp, $linkBerkas);
	$terupload2 = move_uploaded_file($file_tmp2, $linkBerkas2);

	$dataArr = array(
        'email' => $email,
		'nama' => $nama, 
        'judulartikel' => $judulartikel,
		'subjudul' => $subjudul,
		'kategoriartikel' => $kategoriartikel,
		'titlethumb' => $namaFile, 
        'sizethumb' => $ukuranFile, 
        'ekstensithumb' => $ekstensiFile, 
        'thumb' => $linkBerkas2,
		'titlebanner' => $namaFile2, 
        'sizebanner' => $ukuranFile2, 
        'ekstensibanner' => $ekstensiFile2, 
        'banner' => $linkBerkas2,
		'link' => $link,
	);

	if ($terupload && (insertData($dataArr) == 1))  {
	    echo "Upload berhasil!";
	    header("Location: Admin-PublikasiArtikel.php", true, 301);
        exit();
	} else {
	    echo "Upload Gagal!";
	    header("Location: Admin-AturArtikel.php", true, 301);
        exit();
	}

 ?>