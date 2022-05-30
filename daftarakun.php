<html>
    <head>
        <title>Daftar Akun</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
        <h1 class="text-center">Daftar Akun Baru</h1>

        <!-- Awal Card View -->
        <div class="card">
        <div class="card-header bg-success text-white">
        Masukkan identitas anda
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="tnamalengkap" class="form-control" placeholder="masukkan nama anda" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="txtusername" class="form-control" placeholder=
                     "masukkan username anda" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="txtpassword" class="form-control" placeholder="masukkan password anda" required>
                </div>
                
                <button type="submit" class="btn btn-success" name="btndaftar">Daftar</button>
            </form>
        </div>
        </div>
        <!-- Akhir Card View -->
                </div>
            </div>
        </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>

<?php
    include 'koneksi.php';
    if(isset($_POST['btndaftar'])){
        $username = $_POST['txtusername'];
        $password = password_hash($_POST['txtpassword'], PASSWORD_DEFAULT);

        $query = mysqli_query($link,"INSERT INTO t_user VALUES('$username','$password')");

        if($query){
            echo "<script>
                alert('Daftar Akun SUKSES');
                document.location='login.php';    
                </script>";
        }else{
            echo "<script>
                alert('Daftar Akun Gagal');
                document.location='daftarakun.php';    
                </script>";
        }
    }
?>