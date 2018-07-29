<?php
if (! defined('SHODANAPIKEY')) exit;

// Fetching query
$query = isset($_GET['query'])? $_GET['query']: '';

// Empty queries aren't allowed
if (empty($query)) redirect('index.php');

// Call Shodan API
$result = httpget('https://api.shodan.io/shodan/host/search?key='. urlencode(SHODANAPIKEY) .'&query=' . urlencode($query));

// Rendering result in view
$result = json_decode($result);

load_view('search', [
    'results' => $result,
    'query' => $query
]);
