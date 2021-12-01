<?= $this->extend('template');?>

<?= $this->section('content');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Surat Keluar</h1>
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
        <div class="card">
            <div class="card-header">
                Form Tambah 
            </div>
            <div class="card-body">
            <form action="/admin/suratkeluar/store" method="POST">
                
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
                    <br>
                    
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
                
                </form>   
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<?= $this->endSection();?>

<?= $this->section('myscript');?>
<script>
    $('#deskripsi').summernote()
</script>
<?= $this->endSection();?>
