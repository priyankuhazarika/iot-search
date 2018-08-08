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
                    <tr>
                        <td>Hostnames</td>
                        <th><?php foreach($ip->hostnames as $hostname):?>
                        <?=htmlspecialchars($hostname)?>
                        <?php endforeach;?></th>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <th><?=htmlspecialchars($ip->latitude)?></th>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <th><?=htmlspecialchars($ip->longitude)?></th>
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

                <div class="row">
                    <div class="col col-lg-4 col-md-4 col-sm-4 servicese">
                        <pre><?=htmlspecialchars($data->transport)?></pre>
                        <pre><?=htmlspecialchars($data->port)?></pre>
                    </div>
                    <div class="col col-lg-8 col-md-8 col-sm-8">
                        <pre><?=htmlspecialchars($data->data)?></pre>

                        <?php if(isset($data->ssl->cert->sig_alg)):?>
                        <pre><h4>SSL:</h4><h5>Certificate info: </h5>Signature Algorithm: <?=htmlspecialchars($data->ssl->cert->sig_alg)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->ssl->cert->fingerprint->sha256)):?>
                        <pre><h6>Fingerprint: </h6>sha256: <?=htmlspecialchars($data->ssl->cert->fingerprint->sha256)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->ssl->cert->fingerprint->sha1)):?>
                        <pre>sha1: <?=htmlspecialchars($data->ssl->cert->fingerprint->sha1)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->ssl->dhparams->public_key)):?>
                        <pre>Public Key: <?=htmlspecialchars($data->ssl->dhparams->public_key)?></pre>
                        <?php endif;?>
                        
                        <?php if(isset($data->ssl->cert->issuer->emailAddress)):?>
                        <pre><h6>Issuer: </h6>Issuer Email: <?=htmlspecialchars($data->ssl->cert->issuer->emailAddress)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->ssl->cert->issuer->emailAddress)):?>
                        <pre>Issuer Organisation: <?=htmlspecialchars($data->ssl->cert->issuer->emailAddress)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->ssl->versions)):?>
                            <h6>Versions: </h6>
                            <?php foreach($data->ssl->versions as $version):?>
                                <pre><?=htmlspecialchars($version)?></pre>
                            <?php endforeach;?>
                        <?php endif;?>

                        <?php if(isset($data->ssl->dhparams->fingerprint)):?>
                        <pre>Fingerprint: <?=htmlspecialchars($data->ssl->dhparams->fingerprint)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->ssl->cipher->version)):?>
                        <pre><h6>Cipher: </h6>Version: <?=htmlspecialchars($data->ssl->cipher->version)?></pre>
                        <?php endif;?>

                        <?php if(isset($data->opts->vulns)):?>
                        <pre><h6>Vulnerabilities: </h6><?htmlspecialchars($data->opts->vulns)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->opts->heartbleed)):?>
                        <pre><h6>Heartbleed Vulnerability: </h6><?=htmlspecialchars($data->opts->heartbleed)?></pre>
                        <?php endif;?>

                        <?php if(isset($data->http->title)):?>
                        <pre><h5>HTTP and HTML related info: </h5>Title: <?=htmlspecialchars($data->http->title)?></pre>
                        <?php endif;?>

                        <?php if(isset($data->http->host)):?>
                        <pre>Host: <?=htmlspecialchars($data->http->host)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->http->html)):?>
                        <pre>Html: <?=htmlspecialchars($data->http->html)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->http->server)):?>
                        <pre>Server: <?=htmlspecialchars($data->http->server)?></pre>
                        <?php endif;?>

                        <?php if(isset($data->opts->ssh->fingerprint)):?>
                        <pre><h4>ssh: </h4>Fingerprint: <?=htmlspecialchars($data->opts->ssh->fingerprint)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->opts->ssh->mac)):?>
                        <pre>Mac: <?=htmlspecialchars($data->opts->ssh->mac)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->opts->ssh->cipher)):?>
                        <pre>Cipher: <?=htmlspecialchars($data->opts->ssh->cipher)?></pre>
                        <?php endif;?>
                        <?php if(isset($data->opts->ssh->key)):?>
                        <pre>Key: <?=htmlspecialchars($data->opts->ssh->key)?></pre>
                        <?php endif;?>

                        <?php if(isset($ip->vulns)):?>
                            <h5>Vulnerabilities: </h5>
                            <?php foreach($ip->vulns as $vuln):?>
                                <pre><?=htmlspecialchars($vuln)?></pre>
                            <?php endforeach;?>
                        <?php endif;?>


                    </div>
                </div>
                <hr>

            <?php endforeach;?>
            </div>
        </div>
    </div>
    



    <?php require_once("views/footer.php"); ?>



