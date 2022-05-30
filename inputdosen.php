<html>
    <head>
        <title>Input Dosen</title>
        <link rel="stylesheet" type"text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <h1 class ="text-center">Input Tabel Dosen</h1>
        
        <!-- Awal Card View -->
        <div class="card">
        <div class="card-header bg-success text-white">
        Data Dosen
        </div>
        <div class="class-body">
            <form method="POST" action="prosesinputdosen.php">
                <div class="form-group">
                    <label>ID Dosen</label>
                    <input type="text" name="tiddosen" class="form-control" placeholder="masukkan id anda" required>
                </div>
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="tnamadosen" class="form-control" placeholder="masukkan nama anda" required>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="tnoHP" class="form-control" placeholder="masukkan no anda" required>
                </div>

                <button type="submit" class="btn btn-succes" name="btnsimpandosen">Simpan</button>
            </form>
        </div>
        </div>

        <!-- Akhir Card View -->
        </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>


