<?php
include 'koneksi.php';
if(isset($POST['btnsimpandosen'])){
    $simpan = mysqli_query($link, "INSERT INTO t_dosen (idDosen, namaDosen, noHP)
    VALUES ('$_POST[tiDosen]', '$_POST[tnamaDosen]', $_POST[tnoHP]')");

    if($simpan) {
        echo "<script>
        alert('Simpan Data Sukses');
        document.location='viewmahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Simpan Data Gagal');
        document.location='viewmahasiswa.php';
        </script>";
    }
}
?>