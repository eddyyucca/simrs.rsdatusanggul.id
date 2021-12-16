<!-- Begin Page Content -->
<div class="container col-8">
    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/pegawai') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/tambah_pegawai_baru')  ?>" method="POST" enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td width=20%>NIP Lengkap</td>
                                <td><input type="text" name="nip" class="form-control" required placeholder="NIP Lengkap"></td>
                            </tr>
                            <tr>
                                <td width=20%>No KTP</td>
                                <td><input type="text" name="no_ktp" class="form-control" required placeholder="No KTP"></td>
                            </tr>
                            <tr>
                                <td width=20%>Nama Lengkap</td>
                                <td><input type="text" name="nama_lengkap" class="form-control" required placeholder="Nama Lengkap"></td>
                            </tr>
                            <tr>
                                <td>Nama Panggilan</td>
                                <td><input type="text" name="nama_panggilan" class="form-control" required placeholder="Nama panggilan"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><select class="form-control" name="jk">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Tempat/Tanggal/Lahir</td>
                                <td><input type="text" name="tempat" class="form-control" required placeholder="Tempat">
                                    <input type="date" name="ttl" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Saat Ini</td>
                                <td><textarea name="alamat_saat_ini" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td>Alamat Permanen</td>
                                <td><textarea name="alamat_permanen" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td>Telpon</td>
                                <td><input type="text" name="no_telp" class="form-control" required placeholder="Telpon"></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td> <select class="form-control" name="agama">
                                        <option value="">--AGAMA--</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td><input type="text" name="hobi" class="form-control" required placeholder="Hobi"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" class="form-control" required placeholder="Email"></td>
                            </tr>
                            <tr>
                                <td>Mulai Bekerja</td>
                                <td><input type="date" name="mulai_bekerja" class="form-control" required placeholder="Mulai Bekerja"></td>
                            </tr>
                            <tr>
                                <td>Bidang</td>
                                <td><select name="bidang" class="form-control">
                                        <option value="">--PILIH BIDANG--</option>
                                        <?php foreach ($bidang as $bid) { ?>
                                            <option value="<?= $bid->id_bidang ?>"><?= $bid->nama_bidang ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><select name="jabatan" class="form-control">
                                        <option value="">--PILIH JABATAN--</option>
                                        <?php foreach ($jabatan as $jabatan) { ?>
                                            <option value="<?= $jabatan->id_jab ?>"><?= $jabatan->nama_jab ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>
                                    <input type="file" name="foto" class="file" accept="image/*">
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control" disabled placeholder="Upload File" id="foto">
                                        <div class="input-group-append">
                                            <button type="button" class="browse btn btn-primary">Browse...</button>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-6">
                                        <img src="<?= base_url("assets/images/default.png") ?>" width="100" height="100" id="preview" class="img-thumbnail">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-primary">Simpan</button>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>