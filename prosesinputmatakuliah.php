<?php
include 'koneksi.php';
if(isset($_POST['btnsimpanmatakuliah'])){
$simpan = mysqli_query($link, "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam)
VALUES ('$_POST[tkodeMK]', '$_POST[tnamaMK]', '$_POST[tsks]]', '$_POST[tjam]')");

if($simpan) {
    echo "<script>
        alert('Simpan Data Sukses');
        document.location='viewmahasiswa.php';
        </script>";
}else {
    echo "<script>
        alert('Simpan Data Gagal');
        document.location='viewmahasiswa.php';
        </script>";
        }
    }
?>
