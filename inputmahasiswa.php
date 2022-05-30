<html>
    <head>
        <title>Input Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Input Tabel Mahasiswa</h1>

            <!-- Awal Card View -->
            <div class="card">
                <div class="card-header bg-success text-while">
                Data Mahasiswa
            </div>
            </div class="card-body">
            <form method="POST" action="prosesinputmahasiswa.php">
                <div class="form-group">
                    <label>NPM</label>
                    <input type="text" name="tnpm" class="form-control" placeholder="masukkan npm anda" requiered>
                </div>
                <div class="form-group">
                    <label>namaMHS</label>
                    <input type="text" name="tnama" class="form-control" placeholder="masukkan nama anda" required>
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input type="text" name="talamat" class="form-control" placeholder="masukkan nama anda" required>
                </div>
                <div class="form-group">
                    <label>noHP</label>
                    <input type="text" name="tnoHP" class="form-control" placeholder="contoh = 081222333444" required>
                </div>
                <button type="submit" classs="btn-success" name="btnsimpan">Simpan</button>
            </form>
        </div>
    </div>
    <!-- Akhir Card View -->

        </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>











