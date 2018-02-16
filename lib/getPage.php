<?php


/**
 * @param $url
 * @param $postFields
 * @param $headers
 * @return mixed
 */
/**
 * @param $url
 * @param $postFields
 * @param $headers
 * @return mixed
 */
function getPage($url, $postFields = null, $headers = null)
{
    $useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36';
    $timeout = 120;
    $ch = curl_init($url);
    if($headers !=null) 
        curl_setopt($ch, CURLOPT_HEADER, $headers);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if($postFields != null){
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSLVERSION, 4);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com/');
    $content = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Meh :' . curl_error($ch);
    } else {
        return $content;
    }
    curl_close($ch);

}