<?php 
require 'koneksilaporanlainnya.php';

// ambil id
$id = $_GET["id"];

if(delete5($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiLaporanLainnya.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiLaporanLainnya.php';
      </script>";
}


?>