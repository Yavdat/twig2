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



//$twig->loadTemplate('index.html');
echo $twig->render('page.html', [
    'user'=>[
        'name'=>'<b>Ivan Ivanov</b>',
        'age'=>42,
        'birthdate'=>'1970-01-01',
        'address'=>'Salavat Ulaev street 1'],
    'users'=>[
        1=>['name'=>'Petr Petrov'],
        2=>['name'=>'Petr Ivanov'],
        3=>['name'=>'Ivan Petrov'],
        4=>['name'=>'Ivan Ivanov']
    ],
]);