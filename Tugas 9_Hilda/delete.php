<?php
 include("koneksi.php");

 $id_identitas= $_GET['id_usaha'];

 $query ="delete from identitas where id_usaha= $id_usaha"; 


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_usaha= $id_usaha");
     echo "gagal";
 }
 ?>