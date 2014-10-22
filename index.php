<?php

require __DIR__."/vendor/autoload.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);

$article = [
    'name' => 'My Beautiful Article',
    'content' => 'Hi, it\'s my content!',
    'enabled' => true,
    'date' => new DateTime('now'),
];

echo $twig->render('article.html.twig', [
    'article' => $article,
]);

