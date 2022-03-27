<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Nilai</title>
</head>

<body>
    <div class="container bg-light">
        <div class="text-center">
            <h6 class="text-primary pt-4 mt-4">Form Nilai</h6>
            <h1 class="mb-5">Form Nilai</h1>
        </div>
        <form method="POST" action="tugas2A_php_1A_Yozi_Berlianda_STTNF.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mata Pelajaran</label>
                <select class="form-select" aria-label="Default select example" name="matpel">
                    <option selected>Pilih Mata Pelajaran</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Fisika">Fisika</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nilai</label>
                <input type="number" class="form-control" name="nilai" id="exampleFormControlInput1" placeholder="Nilai">
            </div>
            <div class="mb-3">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan" />
            </div>
            <br />
        </form>
    </div>
    <?php
    $nama = $_POST['nama'];
    $matpel = $_POST['matpel'];
    $nilai = $_POST['nilai'];
    $simpan = $_POST['simpan'];

    $kelulusan = ($nilai >= 60) ? 'Lulus' : 'Tidak Lulus';

    if ($nilai >= 85 && $nilai <= 100) $grade = "A";
    else if ($nilai >= 75 && $nilai < 85) $grade = "B";
    else if ($nilai >= 60 && $nilai < 75) $grade = "C";
    else if ($nilai >= 30 && $nilai < 60) $grade = "D";
    else if ($nilai >= 0 && $nilai < 30) $grade = "E";

    switch ($grade) {
        case "A":
            $predikat = "Memuaskan";
            break;
        case "B":
            $predikat = "Baik";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Buruk";
            break;
        default:
            $predikat = "-";
    }
    if (!empty($simpan)) {
    ?>
        <div class="container">
            <div class="alert alert-success" role="alert">
                Nama : <?= $nama ?>
                <br />Mata Pelajaran : <?= $matpel ?>
                <br />Nilai : <?= $nilai ?>
                <br />Keterangan : <?= $kelulusan ?>
                <br />Grade: <?= $grade ?>
                <br />Predikat : <?= $predikat ?>
            </div>
        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>