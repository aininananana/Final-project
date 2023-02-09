<?php
ob_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
            include("konek.php");
            $cari=mysqli_query($konek,"SELECT * from mobil") or die (mysqli_error());
        ?>
        
        <h3>Laporan Data Mobil</h3>
        
        <table border="1" cellspacing="0" cellpadding="1">
            <tr>
            <th >No.</th>
            <th >no_polisi</th>
            <th >merk </th>
            <th >tahun</th>
            <th>harga/hari</th>
            </tr>
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
            </tr>
            <?php
            $no++;
            }
            ?>
        </table>
</body>
</html>
<?php
$html=ob_get_contents();
ob_end_clean();
require_once("html2pdf/html2pdf.class.php");
$pdf=new HTML2PDF('P','A4','en');
$pdf->writeHTML($html);
$pdf->Output('Laporan Mobil.pdf','I');
?>