<?php
if (! defined('SHODANAPIKEY')) exit;

//Fetching query
$ports = isset($_GET['ports'])? $_GET['ports']: '';

//Empty queries aren't allowed
if (empty($ports)) redirect('index.php');

//Call Shodan API
$result = httpget('https://api.shodan.io/shodan/ports'. urlencode($ports) . '?key='. urlencode(SHODANAPIKEY));

//Rendering result in view
$result = json_decode($result);

load_view('ports',[
    'ports' => $result
]);
