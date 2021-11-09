<?php
 include("koneksi.php");

 $id_usaha= $_POST['id_usaha'];
 $Provinsi= $_POST['Provinsi'];
 $Kabupaten = $_POST['Kabupaten'];
 $Kecamatan= $_POST['Kecamatan'];
 $Desa= $_POST['Desa/Kelurahan'];
 $nama_perusahaan= $_POST['nama_perusahaan'];
 $jenis_usaha= $_POST['jenis_usaha'];

 $query ="insert into identitas values ('', '$id_usaha', '$Provinsi', '$Kabupaten','$Kecamatan', '$Desa', '$nama_perusahaan', '$jenis_usaha'  )";


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_usaha= $id_usaha");
     echo "gagal";
 }
 ?>