<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <a href="<?= base_url('berita/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <?php if (!empty($berita)): ?>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Headline</th>
                    <th>Isi Berita</th>
                    <th>Pengirim</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              <tbody>
                <?php foreach ($berita as $b): ?>
                  <tr>
                    <td><?= $b['judul'];?></td>
                    <td><?= $b['kategori'];?></td>
                    <td><?= $b['headline'];?></td>
                    <td><?= $b['isi'];?></td>
                    <td><?= $b['pengirim'];?></td>
                    <td>
                      <a href="<?= base_url('berita/edit/'.$b['idberita']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?= base_url('berita/hapus/'.$b['idberita']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus berita ini?')">Hapus</a>
                    </td>
                      <?php endforeach;?>
                </tbody>
                </table>
                <?php else: ?>
                  <p> Tidak Ada Berita yang Tersedia</p>
                  <?php endif; ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>