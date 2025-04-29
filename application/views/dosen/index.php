<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Dosen</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <a href="<?= base_url('dosen/tambah'); ?>" class="btn btn-primary mb-3">Tambah Dosen</a>
                
                <?php if (!empty($dosen)): ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dosen as $d): ?>
                                <tr>
                                    <td><?= htmlspecialchars($d['id']); ?></td>
                                    <td><?= htmlspecialchars($d['nama']); ?></td>
                                    <td><?= htmlspecialchars($d['alamat']); ?></td>
                                    <td><?= htmlspecialchars($d['jenis_kelamin']); ?></td>
                                    <td><?= htmlspecialchars($d['email']); ?></td>
                                    <td><?= htmlspecialchars($d['telp']); ?></td>
                                    <td>
                                        <a href="<?= base_url('dosen/edit/'. $d['id']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="<?= base_url('dosen/hapus/'. $d['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data dosen ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-muted">Tidak ada data dosen yang tersedia.</p>
                <?php endif; ?>
            </div>
            <div class="card-footer"></div>
        </div>
    </section>
</div>