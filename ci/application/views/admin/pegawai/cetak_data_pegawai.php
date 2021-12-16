<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <hr>
                </div>
                <table>
                    <tr align="left">
                        <th rowspan="2"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
                        </th>
                    </tr>
                </table>
                <br>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>Bidang</th>
                            <th>Jabatan</th>

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
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table border="0">
                    <tr align="right">
                        <br><br>
                        <td align="right" colspan="6">
                            <img src=" <?= base_url('assets/ttd.png') ?>" width="40%">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    window.print()
</script>