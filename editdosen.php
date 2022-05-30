<?php
include 'koneksi.php';
if(isset($_GET['hal'])) {
    $hal = $_GET['hal'];

    if($hal == 'edit') {
        $idDosen = $_GET['idDosen'];
        $query = "SELECT * FROM t_dosen WHERE idDosen = '$idDosen'";
        $result = mysqli_query($link, $query);
        $data = mysqli_fetch_array($result);
        $id = $data['idDosen'];
        $nama = $data['namaDosen'];
        $noHP = $data['noHP'];
    }
}else {
    header("location:viewmahasiswa.php");
    }
?>

<html>
    <head>
        <title>Input Dosen</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Edit Tabel Dosen</h1>

            <!-- Awal Card View -->
            <div class="card">
            <div class="card-header bg-success text-white">
            Data Mahasiswa
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label>id Dosen</label>
                        <input type="text" name="tidDosen" class="form-control" placeholder="masukkan id anda" required
                        value="<?=$id?>">
                    </div>
                    <div class="form-group">
                        <label>nama Dosen</label>
                        <input type="text" name="tnamadosen" class="form-control" placeholder="masukkan nama anda" required
                        value="<?=$nama?>">
                    </div>
                    <div classs="form-group">
                        <label>noHP</label>
                        <input type="text" name="tnohp" class="form-control" placeholder="contoh = 081222333444" required
                        value="<?=$noHP ?>">
                    </div>
                    <button type="submit" calss="btn btn-succcess" name="btnipdate">Update</button>
                </form>
            </div>
        </div>
<!-- Akhir Crad View -->

        </div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <body>
</html>

<?php
include 'koneksi.php';
if(isset($_POST['btnupdate'])) {
    if($_GET['hal']=="edit") {
        $edit = mysqli_query($link, "UPDATE t_dosen SET idDosen='$_POST[tiddosen]',
        namaDosen='$_POST[tnamadosen]',
        noHP='$_POST[tnohpdosen]'
        WHERE idDosen = '$_GET[idDosen]'");
        if($edit) {
            echo "<script>
            alert('Update Data Sukses');
            document.location='viewmahasiswa.php';
            </script>";
        }else {
            echo  "<script>
            alert('Update Data Gagal');
            document.location='viewmahasiswa.php';
            </script>";
        }
    }
}
?>















