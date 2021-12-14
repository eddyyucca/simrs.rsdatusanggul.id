<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets'); ?>/img/favicon.ico" />
    <title>Antrian No <?= $noantri ?></title>
    <style>
        th .a {
            height: 50px;
            padding-left: 10px;
            vertical-align: top;

        }

        table {
            border-collapse: collapse;
            padding: 2px;
        }

        tr .bungkus {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table border="3" class="c">
            <tr>
                <th>
                    <table>
                        <div class="panel-body">
                            <p style="margin-bottom: 5px;text-align: center;"><strong>RSUD DATU SANGGUL - RANTAU</strong></p>
                            <div style="border-bottom: 1px dotted rgba(127, 140, 141,0.8);"></div>
                            <table class="table table-condensed" style="margin-bottom: 10px; font-size: 0.9em;">
                                <tbody>
                                    <tr>
                                        <td align="left">Nomor Antrian Anda</td>
                                        <td>:</td>
                                        <td>
                                            <h1 style="margin-top:0px;margin-bottom:0px;font-size: 40px; text-align: center"><strong id="nomor"><?php echo $noantri; ?></strong></h1>
                                        </td>
                                    </tr>
                                  <tr>
                                     <td align="left">Tanggal</td>
                                        <td>:</td>
                                    <td><?= date("d-m-Y"); ?></td>
                                  </tr>
                                </tbody>
                            </table>
                            <p style="text-align: center">Pasien lanjut ke <strong>LOKET PENDAFTARAN</strong><br>
                               
                            </p>
                        </div>
                    </table>
                </th>
            </tr>
        </table>
    </div>
</body>


<script type="text/javascript">
    window.onafterprint = window.close;
    window.print();
</script>

</html>