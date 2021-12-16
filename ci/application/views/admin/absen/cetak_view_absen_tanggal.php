<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <table>
            <tr align="left">
                <th rowspan="2"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
                </th>
            </tr>
        </table>
        <br>
        <hr>
        <div class="card-body">
            Absen <?= $data_peg->nama_lengkap ?>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
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