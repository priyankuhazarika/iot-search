<?php
if (! defined('SHODANAPIKEY')) exit;
?>

<html>
<head>
<title>Welcome to IoT Search</title>
<link rel="stylesheet" href="views/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="index.php" class="formid">
            <input type="hidden" name="page" value="search">
            <center>
                <div class="row searchboxholder">
                    <div class="col col-lg-10 col-md-10 col-sm-10">
                        <input type="text" placeholder="e.g. search for ip" style="border-color: aqua" class="form-control" name="query">
                    </div>
                    
                    <div class="col col-lg-2 col-md-2 col-sm-2">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </div>
            </center>
        </form>     
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>