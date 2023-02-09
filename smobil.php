<?php
include("konek.php");
$nopolisi=$_POST['txtPolisi'];
$merk=$_POST['txtMerk'];
$tahun=$_POST['txtTahun'];
$harga=$_POST['txtHarga'];
$simpan=mysqli_query($konek,"INSERT INTO Mobil(no_polisi,merk,tahun,harga,s_mobil) values('$nopolisi','$merk','$tahun','$harga','AKTIF') ");
if($simpan){
    header("Location:index.php?x=mobil");
}