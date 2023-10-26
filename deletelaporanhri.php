
<?php 
require 'koneksi3.php';

// ambil id
$id = $_GET["id"];

if(delete4($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiLaporanTA3.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiLaporanTA3.php';
      </script>";
}


?>