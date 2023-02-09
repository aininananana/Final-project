<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Rental di Kami</title>
  </head>
  <body>
    <?php
        include("konek.php");
        session_start();
        if(!isset($_SESSION ['username'])) {
        
            header("Location:../depan.php");
        }
        ?>
    <div class="container bg-info">
        <div class="row bg-light">
            <div class="col-md-12 bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><h3>Rental di Kami</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      
      <li class="nav-item">
        <a class="nav-link" href="?x=order">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?x=mobil">Mobil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?x=admin">Admin</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?x=rmobil">Mobil</a>
          <a class="dropdown-item" href="?x=rorder">Order</a>
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?x=logout">Logout</a>
      </li>
     
    </ul> 
  </div>
</nav>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <!--sidebar-->
                
                <h5 >__ Mobil Ready __ </h5>
                <i class="bi bi-car-front"></i>
                <ul class="list-group list-group-flush">
                  <?php
                    $cari=mysqli_query($konek,"SELECT * FROM Mobil where s_mobil='AKTIF'");
                    while($data=mysqli_fetch_array($cari)){
                      ?>
                    
                    <li class="list-group-item bg-info text-white"><?php echo $data['merk']." - ".$data ['no_polisi']; ?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-8">
            <?php include ("kontrol.php");?>
            </div>
        </div>
        <div class="row mt-3" >
            <div class="col-md-12 bg-light">
              <p class="text-center font-weight-bold">  Rental di Kami &copy;2023 </p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>