<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Selamat Datang, <?= session()->get('email');?> </h5>
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
  <!-- Main content -->
  <section class="content">
  
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="/admin/suratmasuk">
            <div class="small-box bg-info">
            
              <div class="inner">
              <?php 
              $count = 0;
              foreach ($suratmasuk as $i => $data['suratmasuk'] ) : 
                $count++;
                endforeach;
              ?>
                <h3><?=$count?></h3>

                <p>Surat Masuk Valid</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-arrow-alt-circle-down"></i>
              </div>
            </div></a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="/admin/suratkeluar" >
            <div class="small-box bg-success">
              <div class="inner">
              <?php 
              $count1 = 0;
              foreach ($suratkeluar as $i => $data['suratkeluar'] ) : 
                $count1++;
                endforeach;
              ?>
                <h3><?=$count1?></h3>

                <p>Surat Keluar</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
              </div>
            </div> </a>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="/admin/suratmasuknonvalid" >
            <div class="small-box bg-warning">
            
              <div class="inner">
                <?php
                $count2 = 0;
                foreach ($suratmasukuser as $i => $data['suratmasukuser'] ) : 
                  $count2++;
                  endforeach;
                ?>
                <h3 style="color :white"><?=$count2?></h3>
                <p style="color : white">Surat Masuk Non-Valid</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-arrow-alt-circle-down"></i>
              </div>
            </div> </a>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              
                <h3><?= $count+$count1 ?></h3>

                <p>Total Surat</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
            </div>
          </div>

        </div>
    
        <!-- /.row -->
        <!-- Main row -->
        
          <!-- Left col -->
               <!-- ABOUT -->
      <br>
      <br>
      <br>
      <br>
      <br>
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up"> Sebuah <strong>Sistem Informasi </strong> Untuk Kegiatan Administrasi Instansi</h2>

                              <p class="mb-0" data-aos="fade-up">Sistem ini dibuat untuk memudahkan suatu instansi dalam kegiatan administrasi. User diluar instansi dapat mengirimkan surat <a href="/admin/suratmasuk/create">disini.</a> 
                              <br><br><strong>Dengan Mudah</strong> kapan saja dan dimana saja melalui website ini.</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="assets\home\images\working-girl.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>
           
            <!-- /.card -->

  </div>
                 

<?= $this->endSection(); ?>