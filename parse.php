<?php
//этот скрипт будет передвать в гланый текущие курсы

require_once('lib/curl_query.php');
require_once ('lib/simple_html_dom.php');

$html = curl_get('http://coincost.net/currencies');
$dom = str_get_html($html);

$currencies = $dom->find('td.price');//получаем массив всех курсов

if (is_null($currencies))
{
   //берем значение из БД
}
else{

	$i =0;
	foreach ($currencies as $course) {
			
			
			 if ($i < 2){
			 	$result .= $course->plaintext; //оставляем 2 первых значения (BTC и ETH для разбора)
			 	$i++;
			 }
		}
	
	$dom->clear;
	unset($dom);
		

	$res = explode('$ ',$result);

	$curr_1 = explode(" ", $res[1]);
	$curr_BTC = implode("", $curr_1);
	echo $curr_BTC;

	echo '<br>';

	$curr_2 = explode(" ", $res[2]);
	$curr_ETH = implode("", $curr_2);
	echo $curr_ETH;
}


echo '<br>';
		


?>