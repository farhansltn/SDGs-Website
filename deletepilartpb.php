<?php 
require 'koneksiPilarTPB.php';

// ambil id
$id = $_GET["id"];

if(deletepilartpb($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiPilarTPB.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiPilarTPB.php';
      </script>";
}


?>