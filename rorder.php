<!doctype html>
<html lang="en">
  
  <body>
        <?php
            include("konek.php");
            $cari=mysqli_query($konek,"SELECT * from mobil,sewa where mobil.id_mobil=sewa.id_mobil") or die (mysqli_error());

        ?>
        <h3>Laporan Order Mobil</h3>
        <table class="table table-hover">
        <thead>
            <tr>
            <th >No.</th>
            <th >no_polisi</th>
            <th>merk</th>
            <th >Nama Peminjam </th>
            <th >Tujuan Pinjam</th>
            <th>Tanggal order</th>
            <th>Tanggal kembali</th>
            <th>Lama Sewa</th>
            <th>Total</th>
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
                <td><?php echo $data ['nama_sewa']; ?> </td>
                <td><?php echo $data ['tujuan']; ?> </td>
                <td><?php echo $data ['tgl_sewa']; ?> </td>
                <td><?php echo $data ['tgl_kembali']; ?> </td>
                <td><?php echo $data ['lama']; ?> </td>
                <td><?php echo $data ['harga_total']; ?> </td>
                
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
        </table>
              <a href="crorder.php" class="btn btn-primary"> Cetak </a>

    
  </body>
</html>