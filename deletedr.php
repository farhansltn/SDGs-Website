<?php 
require 'koneksiDR.php';

// ambil id
$id = $_GET["id"];

if(deletedr($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiDataRiset.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiDataRiset.php';
      </script>";
}


?>