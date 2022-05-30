<?php
 $host = "localhost";
 $user = "root";
 $passwd= "";
 $name = "web15-bojoku";

 $link = mysqli_connect($host, $user, $passwd, $name);

 if(!$link){
     die("koneksi Dengan Database Gagal");
}
?>

