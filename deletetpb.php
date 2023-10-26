
<?php 
require 'koneksitpb.php';

// ambil id
$id = $_GET["id"];

if(deletetpb($id) > 0) {
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Admin-PublikasiTPB.php';
      </script>";
  } else {
      echo " <script>
        alert('Data gagal! dihapus');
        document.location.href = 'Admin-PublikasiTPB.php';
      </script>";
}


?>