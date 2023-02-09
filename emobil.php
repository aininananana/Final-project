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
    $id=$_GET['id'];
    $cari=mysqli_query($konek,"SELECT * from mobil where id_mobil='$id'");
    $data=mysqli_fetch_array($cari);
    ?>

                <div class="card">
                    <h5 class="card-header">Ubah data mobil</h5>
                    <div class="card-body">
                    <form method="post" action="?x=umobil">
                        <input type="hidden" name="kode" value="<?php echo $data['id_mobil'];?>">
                        <div class="form-group">
                            <label>nomor polisi</label>
                            <input type="text" class="form-control" name="txtPolisi" value="<?php echo $data ['no_polisi']; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Merk Mobil</label>
                            <input type="text" class="form-control" name="txtMerk" value="<?php echo $data['merk'];?>">
                            
                        </div>
                        <div class="form-group">
                            <label> Tahun Keluaran</label>
                            <input type="text" class="form-control" name="txtTahun" value="<?php echo $data ['tahun'];?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="txtHarga" value="<?php echo $data ['harga'];?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form> 
                    </div>
                </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>