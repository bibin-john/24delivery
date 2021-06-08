<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Bibin John">
  <meta name="generator" content="Hugo 0.82.0">
  <title>24 delivery</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="bootstrap-5.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/carousel.css">
  <script src="./bootstrap-5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <?php require __DIR__ . '/vendor/autoload.php'; ?>
  <?php require_once 'src/database/db_connection.php'; ?>
  <?php //include 'src/database/connection_test.php';  ?>

  <?php include 'src/svg/svg.php';  ?>

  <!-- HEADER --->
  <?php include 'src/header/header.php';  ?>

  <!-- MENU --->
  <?php include 'src/menu/menu.php';  ?>

  <main>

    <?php include 'src/carousel/carousel.php'; ?>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- PRODUCTS LISTING -->
      <?php include 'src/products/products.php'; ?>


      <!--  FEATURETTES -->

      <?php include 'src/features/features.php'; ?>

    </div><!-- /.container -->


    <!-- FOOTER -->
    <?php include 'src/footer/footer.php'; ?>

  </main>

 
</body>

</html>