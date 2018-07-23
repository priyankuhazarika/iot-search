<?php

/**
 * Sends an http request to the given request.
 * Returns the response body is status code is 200.
 */
function httpget($link){
    // The cURL resource
    $ch = curl_init($link);

    // Setting options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    // Closing connection
    curl_close($ch);

    return $result;
}
