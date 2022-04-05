<div class="col-md-9">
    <?php
        //tampilkan halaman web sesuai request di url
        $req = $_REQUEST['hal'];
        //jika request-an ada filenya diarahkan ke filenya
        if(!empty($req)){
            include_once $req.'.php';
        }
        else{ //jika request-an tidak ada filenya diarahkan ke file home.php
            include_once 'home.php';
        }    
    ?>
</div>