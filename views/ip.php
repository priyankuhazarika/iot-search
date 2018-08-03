<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/style_ip.css">
    <title>IP: <?=htmlspecialchars($ip->ip)?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="" class="form-inline my-2 m-lg-0">
                <input type="hidden" name="page" value="search">
                <input class="form-control mr-sm-2" type="text" name="query" value="<?=htmlspecialchars($query)?>">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="host">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="page-header">
                            <h1><?=htmlspecialchars($ip->ip_str)?></h1>
                            <p><?=htmlspecialchars($ip->os)?></p>
                            <p><?=htmlspecialchars($ip->region_code)?></p>
                            <p><?=htmlspecialchars($ip->longitude)?></p>
                            <h3><?=htmlspecialchars($ip->isp)?></h3>
                            <h3><?=htmlspecialchars($ip->last_update)?></h3>
                            <h2><?=htmlspecialchars($ip->asn)?></h2>

                        </div>
                    </div>

                    <div class="span6">
                        <div class="page-header">
                            <h2>Ports:</h2>
                            <ul>
                            <?php foreach($ip->ports as $port):?>
                                <li><?=htmlspecialchars($port)?></li>
                            <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
