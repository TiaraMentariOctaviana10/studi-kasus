<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <h2 class="text-center">Selamat Datang Di CRUD Tiara</h2>
                    <!-- Awal Card View -->
                    <div class="card mt-5">
                    <div class="card-header bg-dark text-white">
                    Halaman Login
                    </div>
                    <div class="card-body">
                    <form method="POST" action="proseslogin.php">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="tusername" class="form-control" placeholder="masukkan Username anda" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="tpassword" class="form-control" placeholder=
                                "masukkan Password anda" required>
                            </div> 
                            <button type="submit" class="btn btn-success" name="btnlogin">Login</button>
                            <br><br>
                            <p>Belum punya akun? <a href="daftarakun.php" class="text-center">Daftar disini!</a></p>
                        </form>
                    </div>
                    </div>
                    <!-- Akhir Card View -->
                </div>
            </div>
        </div>