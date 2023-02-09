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
            include("konek.php");
            $cari=mysqli_query($konek,"select * from mobil") or die (mysqli_error());

        ?>
        <table class="table table-hover">
        <thead>
            <tr>
            <th >No.</th>
            <th >no_polisi</th>
            <th >merk </th>
            <th >tahun</th>
            <th>harga/hari</th>
            <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
                while($data=mysqli_fetch_array($cari)){
            ?>
            <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data ['no_polisi']; ?> </td>
                <td><?php echo $data ['merk']; ?></td>
                <td><?php echo $data ['tahun']; ?> </td>
                <td><?php echo $data ['harga']; ?> </td>
                <td>
                    <a href="?x=hmobil&id=<?php echo $data['id_mobil']; ?>" class="btn btn-danger"> Hapus </a>
                    <a href="?x=emobil&id=<?php echo $data['id_mobil']; ?>" class="btn btn-warning"> Ubah </a>
                </td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
        </table>
              <a href="?x=tmobil" class="btn btn-primary"> Tambah </a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>