<?php
require_once 'Shodan-PHP-REST-API-master/src/Shodan.php';
require_once 'apikey.php';

// Initializing the Shodan client
$client = new Shodan(SHODANAPIKEY, true);

// What action is needed to be performed?
$page = isset($_GET['page'])? $_GET['page']: 'home';

// Routing requests according to $page
switch($page){
    case 'home':

    break;
    case 'search':

    break;
    default:

}

