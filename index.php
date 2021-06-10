<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Bibin John">
  <meta name="generator" content="Hugo 0.82.0">
  <title>24 delivery</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="bootstrap-5.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- scripts  -->
  <script src="./bootstrap-5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script data-ad-client="ca-pub-3136975639576271" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script type="module" src="js/main.js"></script>

</head>

<body>
  <?php require __DIR__ . '/vendor/autoload.php'; ?>
  <?php require_once 'src/database/db_connection.php'; ?>
  <?php //include 'src/database/connection_test.php';  ?>

  <?php include 'src/svg/svg.php';  ?>
  <!-- HEADER --->
  <?php include 'src/header/header.php';  ?>

  <main class="mt-5">

    <?php

     use SebastianBergmann\Timer\Timer;
     use SebastianBergmann\Timer\ResourceUsageFormatter;
     $timer = new Timer;
     $timer->start();
    // print (new ResourceUsageFormatter)->resourceUsage($timer->stop());
    
    use App\Router;
    $router = new Router(); 

    $router->get('/', function(){
       echo "Home page";
    });

    $router->get('/signin', function(){
      echo "signin page";
   });

    $router->run();

    ?>


    <!-- MENU --->
    <?php //include 'src/user/signIn.php';  
    ?>

    <!-- MENU --->
    <? //php include 'src/menu/menu.php';  
    ?>

    <?php //include 'src/carousel/carousel.php'; 
    ?>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- PRODUCTS LISTING -->
      <?php //include 'src/products/products.php'; 
      ?>


      <!--  FEATURETTES -->

      <?php //include 'src/features/features.php'; 
      ?>

    </div><!-- /.container -->


    <!-- FOOTER -->
    <?php //include 'src/footer/footer.php'; 
    ?>

  </main>


</body>

</html>