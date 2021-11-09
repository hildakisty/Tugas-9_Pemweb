<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
include ("koneksi.php");
$id_usaha= $_GET['id_usaha'];

$query = "select * from ket_tempatusaha where id_usaha = $id_usaha";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($hasil);
?>
    <h1> Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_usaha" value="<?php echo $row['id_usaha'];?>">
        Provinsi : <input type="text" name="Provinsi" value="<?php echo $row['Provinsi'];?>"></br>
        Kabupaten/Kota : <input type="text" name="Kabupaten"><?php echo $row['Kabupaten']; ?></br>
        Kecamatan : <input type="text" name="Kecamatan"><?php echo $row['Kecamatan']; ?></br>
        Desa/Kelurahan : <input type="text" name="Desa"><?php echo $row['Desa']; ?></br>
        Nama Perusahaan : <input type="text" name="nama_perusahaan"><?php echo $row['nama_perusahaan']; ?></br>
        Jenis Usaha : <input type="text" name="jenis_usaha"><?php echo $row['jenis_usaha']; ?></br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>