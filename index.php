<?php
// SHODAN API Key
if (file_exists('apikey.php'))
    require_once 'apikey.php';
else{
    define('SHODANAPIKEY', $_ENV['SHODANAPIKEY']);
    define('GOOGLEAPIKEY', $_ENV['GOOGLEAPIKEY']);
}

// Including helper files
require_once 'lib/curl.php';


// What action is needed to be performed?
$page = isset($_GET['page'])? strtolower(trim($_GET['page'])): 'home';

// Routing requests according to $page
switch($page){
    case 'home':
        require_once 'handlers/home.php';
    break;
    case 'search':
        require_once 'handlers/search.php';
    case 'ip':
        require_once 'handlers/ip.php';
    break;
    default:
        require_once 'handlers/notfound.php';
}

/**
 * Loads the given view with given data.
 */
function load_view($view, $data=[]){
    $views_dir = 'views/';
    $view_file = $views_dir . $view . '.php';

    if (! file_exists($view_file) ) die('View file "' . $view_file . '" does not exists.');

    // Defining data variables
    foreach ($data as $key => $value){
        $$key = $value;
    }

    include($view_file);
}

/**
 * Redirects to the given path.
 */
function redirect($to='index.php'){
    header('location:' . $to);
    exit;
}
