<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Surat Masuk Tidak Valid</h1>
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
   
    <!--bakal dirubah -->

    <div class="card-body">
      <div class="table-responsive">
        <form action="/admin/suratmasuk/store_valid" method="POST">
        <table class="table table-striped text-center">
          <thead>
            <tr>
            <th scope="col">No.</th>
              <th scope="col">Nomor Surat</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Berkas Surat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $count = 0;
              foreach ($suratmasukuser as $i => $data) : 
                $count++;
            ?>
              <tr>
                <th><?= $count; ?></th>
                <input type="hidden" name="id" value="<?= $data['id']?>"></td>
                <td><?= $data['nomor']; ?> <input type="hidden" name="nomor" value="<?= $data['nomor'] ?>"></td>
                <td><?= $data['nama']; ?> <input type="hidden" name="nama" value="<?= $data['nama'] ?>"></td>
                <td><?= $data['tanggal']; ?><input type="hidden" name="tanggal" value="<?= $data['tanggal'] ?>"></td>
                <td><?= $data['tujuan']; ?><input type="hidden" name="tujuan" value="<?= $data['tujuan'] ?>"></td>
                <td><?= $data['dok']; ?><input type="hidden" name="dok" value="<?= $data['dok'] ?>"></td>

                <td>
                  <button type="submit" class="btn btn-sm btn-primary me-1"><i ass="fas fa-check"></i>Validasi</button>
                  <a href="/admin/suratmasuknonvalid/delete/<?= $data['id']; ?>" class="btn btn-sm btn-danger me-1" onclick="return confirm('Yakin ingin Menghapus?');"><i class="fas fa-trash">Delete</i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

<?= $this->endSection(); ?>