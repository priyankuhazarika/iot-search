<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results for <?=htmlspecialchars($query)?></title>
    <link rel="stylesheet" href="views/style_s.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
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
       
        

    <?php foreach($results->matches as $result):?>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h2>
                        <a href="index.php?page=ip&amp;ip=<?=urlencode($result->ip_str)?>">
                        <?=htmlspecialchars($result->ip_str)?>
                        </a>
                    </h2>
                    <p id="isp">ISP: <?=htmlspecialchars($result->isp)?></p>
                    <h4 id="port">Port: <?=htmlspecialchars($result->port)?></h4>
                    <?php foreach($result->hostnames as $hostnames):?>
                    <p id="hostnames">Hostnames: <?=htmlspecialchars($result->hostnames[0])?></p>
                    <?php endforeach;?>
                    <p id="location">Location: <?=htmlspecialchars($result->location->country_name)?></p>
                    <p id="timestamp">Added: <?=htmlspecialchars($result->timestamp)?></p>
                </div>
            </div>
        </div>
    </div>
    



    <?php endforeach;?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

