<?php 
    use App\Router;

    $router = new Router(); 

    $router->get('/', function() {
      require_once('src/home/home.php');
    });

    $router->get('/signin', function(){
      require_once('src/user/signIn.php');
   });

    $router->run();

?>