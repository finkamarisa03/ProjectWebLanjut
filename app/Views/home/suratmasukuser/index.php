<!DOCTYPE html>
<html lang="en">
<head>

     <title>Sistem Surat</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="/assets/home/css/bootstrap.min.css">
     <link rel="stylesheet" href="/assets/home/css/font-awesome.min.css">
     <link rel="stylesheet" href="/assets/home/css/aos.css">
     <link rel="stylesheet" href="/assets/home/css/owl.carousel.min.css">
     <link rel="stylesheet" href="/assets/home/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/assets/home/css/templatemo-digital-trend.css">

</head>
<body>


     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
              <i class="fa fa-envelope-square"></i>
              Sistem Arus Surat
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/home/suratmasukuser/create" class="nav-link smoothScroll">Masukan Surat</a>
                    </li>
                    <li class="nav-item">
                        <a href="/home/suratmasukuser" class="nav-link smoothScroll">Lihat Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link contact">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br>
<br>
<br>
    <div class="container">
        <div class="card">
        <div class="card-header">
        <h3><center>Surat Masuk Belum di Validasi</center></h3>
            </div>
    <div class="card-body">
    
        
      <div class="table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
            <th scope="col">No.</th>
              <th scope="col">Nomor Surat</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Tujuan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $count = 0;
              foreach ($suratmasukuser as $i => $data['suratmasukuser']) : 
                $count++;
            ?>
              <tr>
                <th><?= $count; ?></th>
                <td><?= $data['suratmasukuser']['nomor']; ?></td>
                <td><?= $data['suratmasukuser']['nama']; ?></td>
                <td><?= $data['suratmasukuser']['tanggal']; ?></td>
                <td><?= $data['suratmasukuser']['tujuan']; ?></td>
                
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>
    </div>
<br>
<br>
<div class="container">
        <div class="card">
<div class="card-header">
<h3><center>Surat Masuk Telah di Validasi</center></h3>
          </div>
<div class="card-body">
        
      <div class="table-responsive">
        <table class="table table-striped text-center">
          <thead>
            <tr>
            <th scope="col">No.</th>
              <th scope="col">Nomor Surat</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Tujuan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $count = 0;
              foreach ($suratmasuk as $i => $data['suratmasuk']) : 
                $count++;
            ?>
              <tr>
                <th><?= $count; ?></th>
                <td><?= $data['suratmasuk']['nomor']; ?></td>
                <td><?= $data['suratmasuk']['nama']; ?></td>
                <td><?= $data['suratmasuk']['tanggal']; ?></td>
                <td><?= $data['suratmasuk']['tujuan']; ?></td>
                
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>
    </div>
    <br>
<br>
<br>
<footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Sistem Informasi <strong>Arus Surat</strong> 2021.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +628 15 4153 1992
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                imamakbar165@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Tempat</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2021 Ilmu Komputer Unila
            <br>
           
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="/assets/home/js/jquery.min.js"></script>
     <script src="/assets/home/js/bootstrap.min.js"></script>
     <script src="/assets/home/js/aos.js"></script>
     <script src="/assets/home/js/owl.carousel.min.js"></script>
     <script src="/assets/home/js/smoothscroll.js"></script>
     <script src="/assets/home/js/custom.js"></script>

</body>
</html>