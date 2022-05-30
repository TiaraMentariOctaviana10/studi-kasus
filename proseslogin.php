<?php
    include 'koneksi.php';
    if(isset($_POST['btnlogin'])) {
        $username = $_POST['tusername'];
        
        $query = mysqli_query($link, "SELECT * FROM t_user WHERE username= '$username');
        $data = mysqli_fetch_array($query);
        dd($data);
        die();
        -- if(password_verify($_POST['tpassword'], $data['password'])){

        --     session_start();
        --     $_SESSION['username']= $data['username'];
        --     header('location:viewmahasiswa.php');
        --     exit();
        -- //}else{
        --     //echo "<script>
        --     //alert('Login Gagal! Username/Password Anda Salah!');
        --     //document.location='login.php';    
        --     //</script>";
        -- //}
    }
?>
