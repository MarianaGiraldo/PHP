<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_error',1);
    error_reporting(E_ALL);

    require('../vendor/autoload.php');
    use Illuminate\Database\Capsule\Manager as Capsule;
    use Aura\Router\RouterContainer;
    use App\Models\{trabajos, proyectos};

    $capsule = new Capsule;

    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'bdproyectotrabajos',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    $capsule->setAsGlobal();

    $capsule->bootEloquent();

    $request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES
    );
    $routerContainer = new RouterContainer();
    $map = $routerContainer->getMap();
    $map->get('index', '/PHP/Proyecto/', 'C:\Program Files\XAMPP\htdocs\PHP\Proyecto\index.php');
    $map->get('agregarTrabajos', '/PHP/Proyecto/trabajos', 'C:\Program Files\XAMPP\htdocs\PHP\Proyecto\public\agregartrabajos.php' );
    $map->get('agregarProyectos', '/PHP/Proyecto/proyectos', 'C:\Program Files\XAMPP\htdocs\PHP\Proyecto\public\agregarproyectos.php' );

    $matcher = $routerContainer->getMatcher();
    $route = $matcher->match($request);

    if(!$route){
        echo "No encontramos su ruta \n";
    }
    else{
        require ($route->handler);
    }
    var_dump($request->getUri()->getPath());
    var_dump($route->handler);
    
    // $route = $_GET['route']??'/';
    // if ($route=='/'){
        // require_once('../index.php');
    // }elseif ($route == 'agregartrabajos') {
        // require '../agregartrabajos.php';
    // }elseif ($route == 'agregarproyectos') {
        // require '../agregarproyectos.php';
    // }

   

?>