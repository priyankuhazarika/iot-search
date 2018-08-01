<?php
if (! defined('SHODANAPIKEY')) exit;

// Fetching query
$ip = isset($_GET['ip'])? $_GET['ip']: '';

// Empty queries aren't allowed
if (empty($ip)) redirect('index.php');

// Call Shodan API
$result = httpget('https://api.shodan.io/shodan/host/'. urlencode($ip) .'?key='. urlencode(SHODANAPIKEY));

// Rendering result in view
$result = json_decode($result);

load_view('ip', [
    'ip' => $result
]);
