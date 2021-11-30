<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Surat Masuk</h1>
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
    <div class="container">
        <a href="/admin/suratmasuk/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <!--bakal dirubah -->

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
              <th scope="col">Berkas Surat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $count = 0;
              foreach ($suratmasuk as $i => $data) : 
                $count++;
            ?>
              <tr>
                <th><?= $count; ?></th>
                <td><?= $data['nomor']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['tanggal']; ?></td>
                <td><?= $data['tujuan']; ?></td>
                <td><?= $data['dok']; ?></td>
                <td>
                  <a href="/admin/suratmasuk/edit/<?= $data['id']; ?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-edit">Edit</i></a>
                  <a href="/admin/suratmasuk/delete/<?= $data['id']; ?>" class="btn btn-sm btn-danger me-1" onclick="return confirm('Yakin ingin Menghapus?');"><i class="fas fa-trash">Delete</i></a>
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