<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Landing Page 1</title>
  </head>
  <body>
      <div class="container">
      <?php
      include_once 'header.php';
      include_once 'menu.php';
      ?>
      <br/>
    <div class="row">
      <?php include_once 'sidebar.php'; ?>
      <?php include_once 'main.php'; ?>
      </div>
      <br/>
      <?php include_once 'footer.php';?>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>  
</body>
</html>