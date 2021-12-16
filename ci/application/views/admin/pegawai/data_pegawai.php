<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Kepegawaian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('admin/tambah_pegawai_baru') ?>" class="btn btn-primary">Tambah Pegawai Baru</a>
                    <a href="<?= base_url('admin/cetak_pegawai') ?>" class="btn btn-primary">Cetak Data Pegawai</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Bidang</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                            <th>Level</th>
                            <th>Absensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nip; ?></td>
                                <td><?= $x->nama_lengkap; ?></td>
                                <td><?= $x->nama_bidang; ?></td>
                                <td><?= $x->nama_jab; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/delete_pegawai/') . $x->nip; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('admin/update_pegawai/') . $x->id_pegawai; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('admin/view_pegawai/') . $x->id_pegawai; ?>" class="btn btn-primary">View</a>
                                </td>
                                <td>
                                    <?php
                                    if ($x->level == "admin") { ?>
                                        <a href="<?= base_url('admin/jadikan_user/') . $x->nip; ?>" class="btn btn-primary">Jadikan User</a>
                                    <?php } elseif ($x->level == "user") { ?>
                                        <a href="<?= base_url('admin/jadikan_admin/') . $x->nip; ?>" class="btn btn-primary">Jadikan Admin</a>
                                    <?php   }
                                    ?>
                                </td>
                                <td align="center">
                                    <a href="<?= base_url('admin/absen/') . $x->nip; ?>" class="btn btn-success">Cek Absen</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>