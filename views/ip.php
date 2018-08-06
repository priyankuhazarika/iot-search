<?php
if (! defined('SHODANAPIKEY')) exit;
?>


    <?php
        require_once("views/navbar.php");
    ?>

    <title>IP: <?=htmlspecialchars($ip->ip_str)?></title>


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
            <?php foreach($ip->data as $data): ?>

                <pre><?=htmlspecialchars($data->data)?></pre>
                
            <?php endforeach;?>

            </div>
        </div>
    </div>

    <?php require_once("views/footer.php"); ?>



