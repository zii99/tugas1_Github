<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Pegawai_Ayuwirum</title>
</head>

<body>
    <?php
    $p1 = ['nip' => '111', 'nama' => 'Andi', 'jabatan' => 'Manager', 'divisi' => 'SDM', 'agama' => 'Khonghucu'];
    $p2 = ['nip' => '112', 'nama' => 'Syafik', 'jabatan' => 'Kabag', 'divisi' => 'Operasional', 'agama' => 'Islam'];
    $p3 = ['nip' => '113', 'nama' => 'Ibnu', 'jabatan' => 'Staff', 'divisi' => 'SDM', 'agama' => 'Islam'];
    $p4 = ['nip' => '114', 'nama' => 'Ahmad', 'jabatan' => 'Manager', 'divisi' => 'Marketing', 'agama' => 'Islam'];
    $p5 = ['nip' => '115', 'nama' => 'Rini', 'jabatan' => 'Asisten', 'divisi' => 'Keuangan', 'agama' => 'Katolik'];
    $p6 = ['nip' => '116', 'nama' => 'Putri', 'jabatan' => 'Staff', 'divisi' => 'Operasional', 'agama' => 'Kristen Protestan'];
    $p7 = ['nip' => '117', 'nama' => 'Widiya', 'jabatan' => 'Manager', 'divisi' => 'Operasional', 'agama' => 'Islam'];
    $p8 = ['nip' => '118', 'nama' => 'Sari', 'jabatan' => 'Staff', 'divisi' => 'Marketing', 'agama' => 'Hindu'];
    $p9 = ['nip' => '119', 'nama' => 'Wulan', 'jabatan' => 'Asisten', 'divisi' => 'Keuangan', 'agama' => 'Islam'];
    $p10 = ['nip' => '1110', 'nama' => 'Putra', 'jabatan' => 'Kabag', 'divisi' => 'SDM', 'agama' => 'Buddha'];

    $ar_pegawai = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10];

    $ar_judul = ['No', 'NIP', 'Nama', 'Jabatan', 'Divisi', 'Agama', 'Gaji Pokok', 'Tunjangan Jabatan', 'Gaji Kotor', 'Take Home Pay'];
    ?>
    <div class="card border-warning m-5" style="max-width: 85rem;">
        <div class="card-header text-center">Data Pegawai</div>
        <div class="card-body">
            <!-- Start Tabel -->
            <table class="table">
                <thead>
                    <tr bgcolor="#FAF6E9">
                        <?php
                        foreach ($ar_judul as $jdl) {
                            echo '<th scope="col">' . $jdl . '</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($ar_pegawai as $p) {
                        $warna = $no % 2 == 1 ? '#ECE8D9' : '#FFFDF6';
                        switch ($p['jabatan']) {
                            case "Manager":
                                $gaji = 20000000;
                                break;
                            case "Asisten":
                                $gaji = 15000000;
                                break;
                            case "Kabag":
                                $gaji = 10000000;
                                break;
                            case "Staff":
                                $gaji = 4000000;
                                break;
                            default:
                                $gaji = 0;
                        }
                        $tunjab = 0.2 * $gaji;
                        $gator = $gaji + $tunjab;
                        $zakat_profesi = ($p['agama'] == "Islam" && $gator >= 6000000) ? 0.025 * $gator : 0;
                        $take_home_pay  = $gator - $zakat_profesi;
                    ?>
                        <tr bgcolor="<?= $warna ?>">
                            <th scope="row"><?= $no ?></th>
                            <td><?= $p['nip'] ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['jabatan'] ?></td>
                            <td><?= $p['divisi'] ?></td>
                            <td><?= $p['agama'] ?></td>
                            <td>Rp.<?= number_format($gaji, 0, "", ".") ?></td>
                            <td>Rp.<?= number_format($tunjab, 0, "", ".") ?></td>
                            <td>Rp.<?= number_format($gator, 0, "", ".") ?></td>
                            <td>Rp.<?= number_format($take_home_pay, 0, "", ".") ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>