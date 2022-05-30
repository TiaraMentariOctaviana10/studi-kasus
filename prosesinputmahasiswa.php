<?php
include 'koneksi.php';
if(isset($_POST['btnsimpan'])) {
    $simpan= mysqli_query($link, "INSERT INTO t_mahasiswa(NPM, namaMHS, prodi, alamat, noHP)
    VALUES ('$_POST[tnpm]', '$_POST[tnama]', '$_POST[tprodi]', '$_POST[talamat]', '$_POST[tnoHP]')");

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

