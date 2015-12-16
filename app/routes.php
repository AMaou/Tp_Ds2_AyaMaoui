<?php

// Home page
$app->get('/', function () use ($app) {
    $mymovies = $app['dao.mymovie']->findAll();
    return $app['twig']->render('index.html.twig', array('mymovies' => $mymovies));
});
