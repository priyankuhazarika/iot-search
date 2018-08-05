<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/style_ip.css">
    <link rel="stylesheet" href="views/style.css">
    <title>IP: <?=htmlspecialchars($ip->ip)?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<body>

    <?php
        require_once("views/navbar.php");
    ?>



    <div class="container">
        <div class="row ikl">
            <div class="col col-lg-6 col-md-6 col-sm-6">
            <h1 class="ip_header"><i class="fa fa-globe"></i>  <?=htmlspecialchars($ip->ip_str)?></h1>

            <hr>

            <table class="table">
                <tbody>
                    <tr>
                        <td>City</td>
                        <th><?=htmlspecialchars($ip->city)?></th>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <th><?=htmlspecialchars($ip->country_name)?></th>
                    </tr>
                    <tr>
                        <td>Organisation</td>
                        <th><?=htmlspecialchars($ip->org)?></th>
                    </tr>
                    <tr>
                        <td>ISP</td>
                        <th><?=htmlspecialchars($ip->isp)?></th>
                    </tr>
                    <tr>
                        <td>Last Update</td>
                        <th><?=htmlspecialchars($ip->last_update)?></th>
                    </tr>
                    <tr>
                        <td>ASN</td>
                        <th><?=htmlspecialchars($ip->asn)?></th>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col col-lg-6 col-md-6 col-sm-6">
            <h1 class="ip_header"><i class="fa fa-server"></i>  Ports</h1>
            <hr>
            <ul class="ports">
                <?php foreach($ip->ports as $port):?>
                    <li><?=htmlspecialchars($port)?></li>
                <?php endforeach;?>
            </ul>

            <h1 class="ip_header"><i class="fa fa-reorder"></i>  Services</h1>
            <hr>



            </div>
        </div>
    </div>

    <?php require_once("views/footer.php"); ?>



