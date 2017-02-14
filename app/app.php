<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    session_start();

    if (empty($_SESSION['game_object'])) {
      $_SESSION['game_object'] = array();
    }

    $app = new Silex\Application();


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/display", function() use ($app) {
        $newGame = new Game($_GET['count_input']);
        $newGame->save();
        $count = $newGame->countTo($_GET['count_input']);
        return $app['twig']->render('ping-pong-display.html.twig', array('numbers' =>$count, 'game_info' => Game::getAll(), 'thisgame' => $newGame ));
    });

    return $app;
?>
