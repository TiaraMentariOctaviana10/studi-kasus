<?php
include 'koneksi.php';
if (isset($_GET['hal'])){
    $hal = $_GET['hal'];

    if($hal == 'edit'){
        $kodeMk = $_GET['kodeMk'];
        $query = "SELECT * FROM t_matakuliah WHERE kodeMk = '$kodeMk'";
        $result = mysqli_query($link,$query);
        $Data = mysqli_fetch_array($result);
        $KODEMK = $Data['kodeMk'];
        $NAMAMK = $Data['namaMk'];
        $SKS = $Data['sks'];
        $JAM = $Data['jam'];
    }
} else {
    header("location:viewmahasiswa.php");
}
?>

<html>
    <head>
        <title>Input Mata Kuliah</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Input Tabel Mata Kuliah</h1>

            <!-- Awal Card View -->
            <div class="card">
            <div class="card-header bg-success text-white">
            Data Mata Kuliah
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Kode MK</label>
                    <input type="text" name="tkodemk" class="form-control" placeholder= masukkan kodeMK anda" required
                    value="<?=$KODEMK ?>">
                </div>
                <div class="form-group">
                    <label>Nama MataKuliah</label>
                    <input type="text" name="tnamamatakuliah" class="form-control" placeholder= masukkan nama matakuliah anda" required
                    value="<?=$NAMAMK ?>">
                </div>
                <div class="form-group">
                    <label>SKS</label>
                    <input type="text" name="tsks" class="form-control" placeholder= masukkan SKS anda" required
                    value="<?=$SKS ?>">
                </div>
                <div class="form-group">
                    <label>Jam</label>
                    <input type="text" name="tjam" class="form-control" placeholder= masukkan Jam anda" required
                    value="<?=$JAM ?>">
                </div>

                <button type="submit" class="btn btn-success" name="btnupdatematakuliah">Simpan</button>
            </form>
        </div>
        </div>
        <!-- Akhir Card View -->
        </div>
    <script> type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>

<?php
include 'koneksi.php';
if(isset($_POST['btnupdatematakuliah'])){

    if($_GET['hal']=="edit"){
        $edit = mysqli_query($link, "UPDATE t_matakuliah SET kodeMK='$_POST[tkodemk]', namaMK= '$_POST[tnamamatakuliah]',
        sks='$_POST[tsks]', jam='$_POST[tjam]' WHERE kodeMK='$_GET[kodeMK]'");

        if($edit){
            echo "<script>
            alert('UPDATE Data Sukses');
            document.location='viewmahasiswa.php';    
            </script>"; 
        } else {
            echo "<script>
            alert('UPDATE Data Gagal');
            document.location='viewmahasiswa.php';    
            </script>"; 
        }
    }
}
?>

<?php
include 'koneksi.php';
if($_GET['hal'] == "hapus") {
    $hapus = mysqli_query($link, "DELETE FROM t_matakuliah WHERE kodeMK = '$_GET[kodeMK]'");
    if($hapus) {
        echo "<script>
        alert('Hapus Data Sukses');
        document.location='viewmahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Hapus Data Gagal');
        document.location='viewmahasiswa.php';
        </script>";
} 
}
?>
