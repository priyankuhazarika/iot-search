<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results for <?=htmlspecialchars($query)?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="cntainer">
    <form action="index.php" method="get" class="form-inline">
        <input type="hidden" name="page" value="search">
        
        <div class="col col-lg-3 col-md-3 col-sm-3 sss">
            <input type="text" name="query" value="<?=htmlspecialchars($query)?>" style="border-color: #40B1EE" class="form-control">
        </div>
        <div class="col col-lg-2 col-md-2 col-sm-2 sebtn">
            <button type="submit" class="btn btn-info">Search</button>
        </div>
    </div>
       
        
    <hr>

    <?php foreach($results->matches as $result):?>

    <div>
        <h2>
            <a href="index.php?page=ip&amp;ip=<?=urlencode($result->ip_str)?>">
                <?=htmlspecialchars($result->ip_str)?>
            </a>
        </h2>
        <p>ISP: <?=htmlspecialchars($result->isp)?></p>
        <h4>Port: <?=htmlspecialchars($result->port)?></h4>


        <?php foreach($result->hostnames as $hostnames):?>
        <div>
        <p>Hostnames: <?=htmlspecialchars($result->hostnames[0])?></p>
        </div>
        <?php endforeach;?>
        <p>Location: <?=htmlspecialchars($result->location->country_name)?></p>
        <p>Added: <?=htmlspecialchars($result->timestamp)?></p>
        
        
    </div>



    <?php endforeach;?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

