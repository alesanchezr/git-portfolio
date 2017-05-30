<?php

require_once "vendor/autoload.php";

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

//$json = file_get_contents('data.json');
//$projects = json_encode($json);


if(isset($_GET['p'])) 
{
    try { $template = $twig->load($_GET['p']); }
    catch(Twig_Error_Loader $e){ $template = $twig->load('404.html'); }
}
else $template = $twig->load('index.html');
echo $template->render();