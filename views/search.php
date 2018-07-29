<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results for <?=htmlspecialchars($query)?></title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="hidden" name="page" value="search">
        <input type="text" name="query" value="<?=htmlspecialchars($query)?>">
        <button>Search</button>
    </form>
    <hr>

    <?php foreach($results->matches as $result):?>

    <div>
        <h2>
            <a href="index.php?page=ip&amp;ip=<?=urlencode($result->ip_str)?>">
                <?=htmlspecialchars($result->ip_str)?>
            </a>
        </h2>
        <pre><?=htmlspecialchars($result->data)?></pre>
    </div>



    <?php endforeach;?>

</body>
</html>
