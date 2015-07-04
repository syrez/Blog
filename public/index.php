<?php
require '../app/Autoloader.php';
use App\Autoloader;
use App\Database;
Autoloader::register();


$p = isset($_GET['p']) ? $_GET['p'] : 'home';

//initialisation des objets
$db = new Database('blog');

ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} else if ($p === 'single') {
    require '../pages/single.php';
}

$content = ob_get_clean();
include '../pages/templates/default.php';

