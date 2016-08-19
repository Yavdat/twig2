<?php

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

require __DIR__.'/src/User.php';

$loader=new Twig_Loader_Filesystem([
    __DIR__.'/layouts',
    __DIR__.'/templates',]);
$twig=new Twig_Environment($loader,[
    'cache'=>false,//__DIR__.'/cache'
]);//

$user=new User;
$user->address='RB, Ufa';

//$twig->loadTemplate('index.html');
echo $twig->render('page.html', [
    'user'=>$user,
]);