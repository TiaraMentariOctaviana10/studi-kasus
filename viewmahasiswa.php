<html>
    <head>
        <title>View Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
              <!--Kolom pencarian-->
        <form method="GET" action="" class="text-center" style="padding-top: 20px;">
            <label >Pencarian Dosen</label>
            <label >:</label>
            <input type="text" name="caridosen" value="<?php if(isset($_GET['caridosen'])){ echo $_GET['caridosen'];}?>">
        </form>
         <!-- AKhir Kolom pencarian-->
        <h1 class="text-center">Tabel Dosen</h1>
        <a href="logout.php" class="blockquote text-right btn-danger ">Logout</a>
        <!-- Awal Card View -->
        <div class="card">
        <div class="card-header bg-success text-white">
        Data Dosen
        </div>
        <a href="inputdosen.php" class="text-center btn-primary">Input Data</a>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID Dosen</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include 'koneksi.php';
                session_start();
                if(!isset($_SESSION['username'])){
                    header('location:login.php');
                    exit();
                }
                if(isset($_GET['caridosen'])){
                    $pencarian = trim(mysqli_real_escape_string($link, $_GET['caridosen']));
                    if($pencarian != ''){
                       $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%".$pencarian."%'";
                    }
                    
                }else{
                   $query = "SELECT * FROM t_dosen order by idDosen asc";
                }
                 $tampil = mysqli_query($link, $query);
                 while($data = mysqli_fetch_array($tampil)):

                ?>

                <tr>
                    <td><?=$data['idDosen']?></td>
                    <td><?=$data['namaDosen']?></td>
                    <td><?=$data['noHP']?></td>
                    <td>
                        <a href="editdosen.php?hal=edit&idDosen=<?php echo $data['idDosen']?>"class="btn btn-warning">Edit</a>
                        <a href="editdosen.php?hal=hapus&idDosen=<?php echo $data['idDosen']?>"
                        onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; //penutup perulangan while?>
            </table>
        </div>
        </div>
        <!-- Akhir Card View -->

        </div>
        <div class="container">
             <!--Kolom pencarian-->
        <form method="GET" action="" class="text-center" style="margin-top: 70px;">
            <label >Pencarian Mahasiswa</label>
            <label >:</label>
            <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];}?>">
            
        </form>
         <!-- AKhir Kolom pencarian-->
        <h1 class="text-center">Tabel Mahasiswa</h1>
        <!-- Awal Card View -->
        <div class="card">
        <div class="card-header bg-success text-white">
        Data Mahasiswa
        
        </div>
        <a href="inputmahasiswa.php" class="text-center btn-primary">Input Data</a>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Npm</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include 'koneksi.php';
                 if(isset($_GET['cari'])){
                     $pencarian = trim(mysqli_real_escape_string($link, $_GET['cari']));
                     if($pencarian != ''){
                        $query = "SELECT * FROM t_mahasiswa  WHERE namaMhs LIKE '%".$pencarian."%'";
                     }
                     
                 }else{
                    $query = "SELECT * FROM t_mahasiswa order by npm asc";
                 }
                 $tampil = mysqli_query($link, $query);
                 while($data = mysqli_fetch_array($tampil)):
                    
                ?>
                
                <tr>
                    <td><?=$data['npm']?></td>
                    <td><?=$data['namaMhs']?></td>
                    <td><?=$data['prodi']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['noHp']?></td>
                    <td>
                        <a href="editmahasiswa.php?hal=edit&npm=<?php echo $data['npm']?>"class="btn btn-warning">Edit</a>
                        <a href="editmahasiswa.php?hal=hapus&npm=<?php echo $data['npm']?>"
                        onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; //penutup perulangan while?>
            </table>
        </div>
        </div>
        <!-- Akhir Card View -->

        </div>
        <div class="container">
              <!--Kolom pencarian-->
        <form method="GET" action="" class="text-center" style="padding-top: 70px;">
            <label >Pencarian MataKuliah</label>
            <label >:</label>
            <input type="text" name="carimatkul" value="<?php if(isset($_GET['carimatkul'])){ echo $_GET['carimatkul'];}?>">
        </form>
         <!-- AKhir Kolom pencarian-->
        <h1 class="text-center">Tabel Mata Kuliah</h1>

        <!-- Awal Card View -->
        <div class="card">
        <div class="card-header bg-success text-white">
        Data Mata Kuliah
        </div>
        <a href="inputmatakuliah.php" class="text-center btn-primary">Input Data</a>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kode MK</th>
                    <th>Nama MK</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include 'koneksi.php';
                if(isset($_GET['carimatkul'])){
                    $pencarian = trim(mysqli_real_escape_string($link, $_GET['carimatkul']));
                    if($pencarian != ''){
                       $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%".$pencarian."%'";
                    }
                    
                }else{
                   $query = "SELECT * FROM t_matakuliah order by kodeMK asc";
                }
                 $tampil = mysqli_query($link, $query);
                 while($data = mysqli_fetch_array($tampil)):

                ?>

                <tr>
                    <td><?=$data['kodeMk']?></td>
                    <td><?=$data['namaMk']?></td>
                    <td><?=$data['sks']?></td>
                    <td><?=$data['jam']?></td>
                    <td>
                        <a href="editmatakuliah.php?hal=edit&kodeMk=<?php echo $data['kodeMk']?>"class="btn btn-warning">Edit</a>
                        <a href="editmatakuliah.php?hal=hapus&kodeMk=<?php echo $data['kodeMk']?>"
                        onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; //penutup perulangan while?>
            </table>
        </div>
        </div>
        <!-- Akhir Card View -->

        </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
