<?php 
require 'koneksi.php';

// ambil id
$id = $_GET["id"];

if(delete2($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiLaporanTA.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiLaporanTA.php';
      </script>";
}


?>