<?php 
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$title = "Le titre de la page";
$nom = "LeGrand";

$template = $twig->load('base.html.twig');
echo $template->render(['title' => $title, 'nom' => $nom]);