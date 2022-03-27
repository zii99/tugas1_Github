<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Data Diri</title>
</head>

<body>
     -->
    <div class="container bg-light">
        <div class="text-center">
            <h6 class="text-primary pt-4 mt-4">Form Data Diri</h6>
            <h1 class="mb-5">Form Data Diri</h1>
        </div>
        <form method="POST" action="tugas2B_php_1A_Yozi_Berlianda_STTNF.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                <select class="form-select" aria-label="Default select example" name="pekerjaan">
                    <option selected>Pilih Pekerjaan</option>
                    <?php
                    $nama = $_POST['nama'];
                    $pekerjaan = $_POST['pekerjaan'];
                    $hobby = $_POST['hobby'];
                    $simpan = $_POST['simpan'];

                    for ($i = 1; $i <= 10; $i++) { ?>
                        <option value="pekerjaan<?= $i ?>">pekerjaan <?= $i ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Hobby</label>
                <?php
                $a = 1;
                while ($a <= 10) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobby" id="flexRadioDefault1" value="hobby<?= $a ?>">
                        <label class="form-check-label" for="flexRadioDefault1">
                            hobby<?= $a ?>
                        </label>
                    </div>
                <?php $a++;
                } ?>
            </div>
            <div class="mb-3">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan" />
            </div>
        </form>
    </div>
    <?php if (!empty($simpan)) { ?>
        <div class="container">
            <div class="alert alert-success" role="alert">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Hobby</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><?= $nama ?></td>
                            <td><?= $pekerjaan ?></td>
                            <td><?= $hobby ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>