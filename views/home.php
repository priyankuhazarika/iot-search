<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html>
<head>
<title>Welcome to IoT Search</title>
<link rel="stylesheet" href="views/style.css">
</head>
<body>
    <div class="wrap">
        <div class="search">
        <form action="index.php" class="center">
        <input type="hidden" name="page" value="search">

        <input type="text" placeholder="e.g. search for ip" class="searchTerm" name="query">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
        </form>
        </div>
    </div>
</body>
</html>