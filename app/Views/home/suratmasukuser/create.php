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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
     

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
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Tambah 
            </div>
            <div class="card-body">
            <form action="/home/suratmasukuser/store" method="POST">
                
                <div class="form-group">
                            <label for="nomor">Nomor Surat</label>
                            <input type="text" class="form-control <?= ($validation -> hasError('nomor')) ? 'is-invalid' : ''; ?>" id="nomor" name="nomor" value="<?= old('nomor'); ?>">
                            <?php if ($validation -> hasError('nomor')) : ?>
                            <div class="invalid-feedback">
                            <?= $validation -> getError('nomor'); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Surat</label>
                            <input type="text" class="form-control <?= ($validation -> hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                            <?php if ($validation -> hasError('nama')) : ?>
                            <div class="invalid-feedback">
                              <?= $validation -> getError('nama'); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                          
                            <label for="tanggal">Tanggal Surat</label>
                            <input type="date" class="form-control <?= ($validation -> hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>">
                            <?php if ($validation -> hasError('tanggal')) : ?>
                            <div class="invalid-feedback">
                            <?= $validation -> getError('tanggal'); ?>
                            </div>
                            <?php endif; ?>
                          </div>
                          
                        <div class="form-group">
                            <label for="tujuan">Tujuan Surat</label>
                            <input type="text" class="form-control <?= ($validation -> hasError('tujuan')) ? 'is-invalid' : ''; ?>" id="tujuan" name="tujuan" value="<?= old('tujuan'); ?>">
                            <?php if ($validation -> hasError('tujuan')) : ?>
                            <div class="invalid-feedback">
                            <?= $validation -> getError('tujuan'); ?>
                            </div>
                            <?php endif; ?>
                          </div>
                          
                          <div class="form-group">
                            <label for="dok">File Surat</label>
                            <input type="file" class="form-control <?= ($validation -> hasError('dok')) ? 'is-invalid' : ''; ?>" id="dok" name="dok" value="<?= old('dok'); ?>">
                            <?php if ($validation -> hasError('dok')) : ?>
                            <div class="invalid-feedback">
                            <?= $validation -> getError('dok'); ?>
                            </div>
                            <?php endif; ?>
                          </div>
                          
                    
                    
                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>                
                </form>   
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