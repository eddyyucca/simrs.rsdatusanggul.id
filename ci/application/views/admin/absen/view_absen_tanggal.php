<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('admin/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/view_absen_tanggal') ?>" method="post">
                <div class="input-group mb-3 col-6">
                    <input type="date" class="form-control" name="date1">
                    <input type="date" class="form-control" name="date2">
                    <input type="hidden" class="form-control" name="id_peg" value="<?= $id_peg ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
            </form>
            <form action="<?= base_url('admin/cetak_view_absen_tanggal') ?>" method="post">
                <input type="hidden" name="date1" value="<?= $date1 ?>">
                <input type="hidden" name="date2" value="<?= $date2 ?>">
                <input type="hidden" name="id_peg" value="<?= $id_peg ?>">
                <div class="form-group ml-2">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cetak</button>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Absen</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>Lama Bekerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($absen as $x) { ?>


                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $x->tanggal ?></td>
                                <td><?= $x->jam_masuk ?></td>
                                <td><?= $x->jam_pulang ?></td>
                                <td><?php
                                    $waktu_awal = strtotime($x->jam_masuk);
                                    $waktu_akhir = strtotime($x->jam_pulang); // bisa juga waktu sekarang now()

                                    //menghitung selisih dengan hasil detik
                                    $diff = $waktu_akhir - $waktu_awal;

                                    //membagi detik menjadi jam
                                    $jam = floor($diff / (60 * 60));

                                    //membagi sisa detik setelah dikurangi $jam menjadi menit
                                    $menit = $diff - $jam * (60 * 60);

                                    //menampilkan / print hasil

                                    echo  $jam . " jam " . floor($menit / 60) . ' menit';
                                    ?>
                                </td>
                            <?php  } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>