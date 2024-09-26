<?php
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam'; 
$jabatan = 'Manager'; 
$status = 'Menikah';
$jmlAnak = 4;
$gaji;
$tunjab;
$tunkel;
$zakat_profesi;
$gator;
$gaber;

switch ($jabatan) {
    case "Manager":
        $gaji = 20000000;
        break;
    case "Asisten Manager":
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

if ($status == 'Menikah' && $jmlAnak <= 2) $tunkel = 0.05 * $gaji;
else if ($status == 'Menikah' && $jmlAnak >= 3 && $jmlAnak <= 5) $tunkel = 0.1 * $gaji;
else $tunkel = 0;

$gator = $gaji + $tunjab + $tunkel;
$zakat_profesi = ($agama == "Islam" && $gator >= 6000000) ? $zakat_profesi = 0.025 * $gator : 0;

$take_home_pay  = $gator - $zakat_profesi;

?>
<hr />
Nama : <?= $namaPegawai ?>
<br /> Agama : <?= $agama ?>
<br /> Jabatan : <?= $jabatan ?>
<br /> Status : <?= $status ?>
<br /> Jumlah Anak : <?= $jmlAnak ?>
<br /> Gaji : Rp <?= number_format($gaji, 0, "", ".")  ?>
<br /> Tunjangan Jabatan : Rp <?= number_format($tunjab, 0, "", ".") ?>
<br /> Tunjangan Keluarga : Rp <?= number_format($tunkel, 0, "", ".") ?>
<br /> Gaji Kotor : Rp <?= number_format($gator, 0, "", ".") ?>
<br /> Zakat Profesi : Rp <?= number_format($zakat_profesi, 0, "", ".") ?>
<br /> Take Home Pay : Rp <?= number_format($take_home_pay, 0, "", ".") ?>
<hr />