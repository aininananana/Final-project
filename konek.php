<?php
$konek=mysqli_connect("localhost","root","","rental");
if (mysqli_connect_errno()){
    echo "koneksi gagal".mysqli__connect_error();
}