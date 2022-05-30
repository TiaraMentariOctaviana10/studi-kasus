<?php
 $host = "localhost";
 $user = "root";
 $passwd= "";
 $name = "dbtiara_mentari";

 $link = mysqli_connect($host, $user, $passwd, $name);

 if(!$link){
     die("koneksi Dengan Database Gagal: ".mysql_connect_errno().
     " - ".mysql_connect_error());
}
?>

