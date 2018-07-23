<?php
//if (! defined('SHODANAPIKEY')) exit;
?>

<html>
<head>
<title>Welcome to IoT Search</title>
<link rel="stylesheet" href="views/style.css">
</head>
<body>
    <form action="index.php" class="center">
        <input type="hidden" name="page" value="search">
        <input type="text" placeholder="e.g. search for ip">
        <button type="submit">Search</button>
    </form>
    
</body>
</html>