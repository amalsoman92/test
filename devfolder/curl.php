<?php
$url = "https://ba55458f46b60fa7238f19be47037a7c:a60e82373c3ef90950bd6a1294f7c6e0@amal-test-store.myshopify.com/admin/customers.json";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec($ch);
//echo $result;   
$outputArray = json_decode($result);
curl_close($ch);
//print_r ($outputArray);
echo "hai";
echo PHP_OS;
?>