<?php 
require 'koneksikontak.php';

// ambil id
$id = $_GET["id"];

if(deletekontak($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiKontak.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiKontak.php';
      </script>";
}


?>