<?php
require_once('lib/curl_query.php');
require_once ('lib/simple_html_dom.php');
$result = "hello";
$html = curl_get('http://coincost.net/currencies');
$dom = str_get_html($html);
$currencies = $dom->find('.price');
	foreach ($currencies as $course) {
		echo $course->plaintext . '</br>';
	}
?>