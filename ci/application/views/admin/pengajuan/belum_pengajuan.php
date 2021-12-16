<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Pengajuan Tahun <?= date('Y') ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Status Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) {
                            foreach ($peg as $x2) {
                                if ($x->nip == $x2->nip) { ?>
                                <?php } else { ?>
                                    <tr>
                                        <td><?= $nomor++; ?></td>
                                        <td><?= $x->nip; ?></td>
                                        <td><?= $x->nama_lengkap; ?></td>
                                        <td><?= $x->date; ?></td>
                                        <!-- <td><?= $x->status_pengajuan; ?></td> -->
                                        <?php break; ?>
                                    </tr>
                        <?php   }
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>