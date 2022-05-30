<html>
    <head>
        <title>Input Matakuliah</title>
        <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Input Tabel Matakuliah</h1>

            <!-- Awal Card View -->
            <div class="card">
            <div class="card-header bg-success text-white">
            Data Matakuliah
        </div>
        <div class="card-body">
            <form method="POST" action="prosesinputmatakuliah.php">
                <div class="form-group">
                    <label>kodeMK</label>
                    <input type="text" name="tkodemk" class="form-control" placeholder="masukkan kodeMK anda" required>
                </div>
                <div class="form-group">
                    <label>namaMK</label>
                    <input type="text" name="tnamamk" class="form-control" placeholder="masukkan namaMk anda" required>
                </div>
                    <div class="form-group">
                    <label>sks</label>
                    <input type="text" name="tsks" class="form-control" placeholder="masukkan sks anda" required>
                </div>
                    <div class="form-group">
                        <label>jam</label>
                        <input type="text" name="tjam" class="form-control" placeholder="masukkan jam anda" required>
                    </div>

                    <button type="submit" class="btn btn-success" name="btnsimpanmatakuliah">Simpan</nutton>
            </form>
        </div>
        </div>
        <!-- Akhir Card View -->

        </div>
    <script type="text-javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>









