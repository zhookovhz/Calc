<?php
require_once('lib/curl_query.php');
$result = "hello";
$html = curl_get('http://coincost.net/currencies');
?>