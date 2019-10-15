<?php


require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig= new Twig\Environment($loader);

/* cree le tableau */
$products = ['Avion en papier', 'Flying duck', 'Death Trumpet', 'Adult nappies', 'Orange tree'];

echo  $twig->render('index.html.twig', ['products' => $products]);


