<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ("koneksi.php");

$query = "select * from ket_tempatusaha";
$hasil = mysqli_query($koneksi, $query);
?>

<h1> Tambah Data </h1>
<form action="proses_insert.php" method="POST">
   Id_Usaha : <input type="text" name="nama" value=""><br/>
   Provinsi : <textarea name="alamat"></textarea><br/>
   Kabupaten/Kota : <input type="text" name="id_user" value=""><br/>
   Kecamatan : <input type="text" name="id_user" value=""><br/>
   Desa/Kelurahan : <input type="text" name="id_user" value=""><br/>
   Nama Perusahaan : <input type="text" name="id_user" value=""><br/>
   Jenis Usaha : <input type="text" name="id_user" value=""><br/>

    <input type="submit" value="simpan">
</form>
<h1> Keterangan Tempat Usaha </h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Provinsi</th>
        <th>Kabupaten/Kota</th>
        <th>Kecamatan </th>
        <th>Desa/Kelurahan </th>
        <th>Nama Perusahaan </th>
        <th>Jenis Usaha </th>
        <th colspan="2"> Update </th>
    </tr>
        

<?php
while($row = mysqli_fetch_array($hasil)){
    echo"<tr>";
    echo"<td> ".$row['id_usaha']."</td>";
    echo"<td> ".$row['Provinsi']."</td>";
    echo"<td> ".$row['Kabupaten']."</td>";
    echo"<td> ".$row['Kecamatan']."</td>";
    echo"<td> ".$row['Desa']."</td>";
    echo"<td> ".$row['nama_perusahaan']."</td>";
    echo"<td> ".$row['jenis_usaha']."</td>";
    echo"<td><a href='edit.php?id_usaha=".$row['id_usaha']."'>edit</a></td>";
    echo"<td><a href='delete.php?id_usaha=".$row['id_usaha']."'>delete</a></td>";
    echo"</tr>";
}


?>  
</body>
</html>

