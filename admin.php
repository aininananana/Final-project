<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>
  <body>
        <?php
            if($_SESSION['level']== "SUPER"){
            include("konek.php");
            $cari=mysqli_query($konek,"select * from admin") or die (mysqli_error());

        ?>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Admin</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Level</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
                while($data=mysqli_fetch_array($cari)){
            ?>
            <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data ['nama_admin']; ?> </td>
                <td><?php echo $data ['jenkel_admin']; ?></td>
                <td><?php echo $data ['level']; ?> </td>
                <td>
                    <a href="?x=hadmin&id=<?php echo $data['id_admin']; ?>" class="btn btn-danger"> Hapus </a>
                    <a href="?x=eadmin&id=<?php echo $data['id_admin']; ?>" class="btn btn-warning"> Ubah </a>
                </td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
        </table>
              <a href="?x=tadmin" class="btn btn-primary"> Tambah </a>

    <?php
    }
    else{ ?>
    <script type="text/javascript">
        alert("Level ADMIN tidak dapat masuk!");
        window.location="index.php";
    </script>
<?php    
    }
    ?>
  </body>
</html>