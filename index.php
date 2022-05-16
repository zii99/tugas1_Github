<?php
require_once 'koneksi_db.php';
//gunakan fungsi PDO
$sql = "SELECT * FROM gedung";
//eksekusi query di atas, lalu ambil hasilnya
$data = $dbh->query($sql);
//print_r($data);exit();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>Aplikasi Peminjaman Ruangan</title>
        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->
        <!-- Header Area Start -->
        <?php include_once 'frontend/header.php'; ?>
        <!-- Header Area End -->
        <!-- Welcome Area Start -->
        <?php include_once 'frontend/welcome_area.php'; ?>
        <!-- Welcome Area End -->
        <!-- About Us Area Start -->
        <?php include_once 'frontend/check.php'; ?>
        <!-- About Us Area End -->
        <!-- Service Area Start -->
        <div class="roberto-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="service-content d-flex align-items-center justify-content-between">
                            <!-- Data Gedung -->
                            <?php
                            foreach($data as $d){
                            ?>
                            <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                                <img src="img/core-img/icon-1.png" alt="">
                                <h5><?= $d['nama'] ?></h5>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->
        <!-- Contact Us Area Start -->
        <?php include_once 'frontend/contact.php'; ?>
        <!-- Contact Us Area End -->
        <br />
        <!-- Footer Area Start -->
        <?php include_once 'frontend/footer.php'; ?>
        <!-- Footer Area End -->
        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
    </body>

</html>