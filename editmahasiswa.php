<?php
include 'koneksi.php';
if (isset($_GET['hal'])){
    $hal = $_GET['hal'];

    if($hal == 'edit'){
        $npm = $_GET['npm'];
        $query = "SELECT * FROM t_mahasiswa WHERE npm = '$npm'";
        $result = mysqli_query($link,$query);
        $Data = mysqli_fetch_array($result);
        $NPM = $Data['npm'];
        $NAMA = $Data['namaMhs'];
        $PRODI = $Data['prodi'];
        $ALAMAT = $Data['alamat'];
        $NOHP = $Data['noHp'];
    }
}else{
    header("location:viewmahasiswa.php");
}
?>
<html>
    <head>
        <title>Input Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
</body>
<div class="container">
    <h1 class="text-center">Edit Tabel Mahasiswa</h1>

    <div class="card">
        <div class="card-header bg-dark text-white">
            Data Mahasiswa
</div>
<div class="card-body">
    <form method="POST" action="">
        <div class="form-group">
            <label>Npm</tabel>
            <input type="text" name="tnpm" class="form-control" placeholder="masukkan npm anda"required value=<?=$NPM ?>">
</div>
<div class="form-group">
    <label type="text" name="tnama" class="form-control" placeholder="masukkan nama anda" required
    value="<?= $NAMA ?>">
</div>
<div class="form-group">
    <label>Prodi</label>
    <input type="text" name="tprodi" class="form-control" placeholder="masukkan prodi anda" required value="<?=$PRODI ?>">
</div>
<div class="form-group">
    <label>Alamat</label>
    <input type="text" name="talamat" class="form-control" placeholder="masukkan alamat anda" required
    value="<?=$ALAMAT ?>">
</div>
<div class="form-group">
    <label>No Hp</label>
    <input type="text" name="tnohp" class="form-control" placeholder="contoh = 081222333444" required
    value="<?=$NOHP ?>">
</div>
<button type="submit" class="btn btn-dark" name="btnupdate">Update</button>
</form>
</div>
</div>

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'koneksi.php';
if(isset($_POST['btnupdate'])){

    if($_GET['hal']=="edit"){
        $edit = mysqli_query($link, "UPDATE t_mahasiswa SET npm='$_POST[tnpm]',
                                                            namaMhs='$_POST[tnama]',
                                                            prodi='$_POST[tprodi]',
                                                            alamat='$_POST[talamat]',
                                                            noHP='$_POST[tnohp]'
                                                            WHERE npm = '$_GET[npm]'");

    if($edit){
        echo"<script>
        alert('UPDAte Data SUKSES');
        document.location='viewmahasiswa.php';
        </script>";
    }else{
        echo"<script>
        alert('UPDATE Data GAGAL');
        document.location='viewmahasiswa.php';
        </script>";

    }
    }
}
?>

<?php
include 'koneksi.php';
if($_GET['hal'] == "hapus"){
    $hapus = mysqli_query($link, "DELETE FROM t_mahasiswa WHERE npm = '$_GET[npm]'");
    if($hapus){
        echo "<script>
        alert('Hapus Data SUKSES');
        document.location='viewmahasiswa.php';
        </script>";
    }else{
        echo "<script>
        alert('HAPUS data GAGAL');
        document.location='viewmahasiswa.php';
        </script>";
  
