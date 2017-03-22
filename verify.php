<?php
$access_token = 'wnSEoGyt8FGC6wpwEs5Mnb3xqeuKLWbtr1tNtEEiyTjf0cm/rIrjAff3JzZkMDY8Di87XAMMZlbGKHym/DvJxBMbTgfMx6Kvg9itSXDrmMhz4J1VUu5nA5y3xB4n1IcRHf4F3OLqe21tMeRuLs167QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
