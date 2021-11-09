<?php
 include("koneksi.php");

 $id_usaha= $_POST['id_usaha'];
 $Provinsi= $_POST['Provinsi'];
 $Kabupaten = $_POST['Kabupaten'];
 $Kecamatan= $_POST['Kecamatan'];
 $Desa= $_POST['Desa/Kelurahan'];
 $nama_perusahaan= $_POST['nama_perusahaan'];
 $jenis_usaha= $_POST['jenis_usaha'];

 echo $Provinsi;
 echo $Kabupaten;
 echo $Kecamatan;
 echo $Desa;
 echo $nama_perusahaan;
 echo $jenis_usaha;

 $query ="update form_pendataan set Provinsi= '$Provinsi', Kabupaten ='$Kabupaten', Kecamatan ='$Kecamatan', Desa ='$Desa', nama_perusahaan ='$nama_perusahaan', jenis_usaha ='$jenis_usaha' where 
 id_usaha = $id_usaha";

 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_usaha= $id_usaha");
     echo "gagal";
 }