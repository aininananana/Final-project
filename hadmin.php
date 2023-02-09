<?php
include("konek.php");
$id=$_GET['id'];
$hapus=mysqli_query($konek, "DELETE FROM Admin where id_admin='$id'") or die (mysqli_error());
if ($hapus){
    header("Location: index.php?x=admin");
}