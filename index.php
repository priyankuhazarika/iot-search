<?php
require_once 'Shodan-PHP-REST-API-master/src/Shodan.php';
require_once 'apikey.php';

// Initializing the Shodan client
$client = new Shodan(SHODANAPIKEY, true);

// Requiring route handlers
require_once 'handlers/home.php';
require_once 'handlers/search.php';
require_once 'handlers/search.php';

// What action is needed to be performed?
$page = isset($_GET['page'])? strtolower(trim($_GET['page'])): 'home';

// Routing requests according to $page
switch($page){
    case 'home':
        home();
    break;
    case 'search':
        search();
    break;
    default:
        notfound();
}
