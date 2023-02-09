<?php
include("konek.php");
$id=$_GET['id'];
$hapus=mysqli_query($konek,"DELETE FROM Mobil WHERE id_mobil='$id'");
if($hapus){
    header("Location:index.php?x=mobil");
}