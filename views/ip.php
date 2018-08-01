<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IP: <?=htmlspecialchars($ip->ip)?></title>
</head>
<body>
    <h1><?=htmlspecialchars($ip->ip)?></h1>
</body>
</html>
