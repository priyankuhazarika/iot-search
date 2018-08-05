<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to IoT Search</title>
    <link rel="stylesheet" href="views/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
</head>
<body>
    

    <div class="container">
        <div class="row vvv">
            <div class=" col-lg-6 col-md-6 col-sm-6 offset-lg-3 offset-md-3 offset-sm-6">
                <form action="index.php" class="formid">
                    <input type="hidden" name="page" value="search">
                    <h1 class="hhh">BLUNDER</h1>
                    <div class="row">
                        <div class="col-lg-12">
                        <input type="text" placeholder="e.g. search for an ip" style="border-color: #40B1EE" class="form-control fff" name="query">
                        </div>
                    </div>
                    <div class="row lll">
                        <div class="col-lg-4 col-md-4 col-sm-4 offset-lg-4 offset-md-4 offset-sm-4">
                            <button type="submit" class="btn btn-info hiw">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require_once("views/footer.php") ?>
    