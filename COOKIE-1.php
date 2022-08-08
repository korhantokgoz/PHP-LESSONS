<?php 
date_default_timezone_set('Europe/Istanbul');

//COOKIE nedir nasıl oluşturulur?
/*

$adsoyad="Korhan Tokgöz";

setcookie("adsoyad",$adsoyad);

echo $_COOKIE['adsoyad'];

*/

$adsoyad="Korhan Tokgöz";

setcookie("adsoyad",$adsoyad,time("+1 week"));

echo $_COOKIE['adsoyad'];

/*
COOKIE süre arttırma 

strtotime("+30 seconds") 30 saniye
strtotime("+1 hours") 1 Saat
strtotime("+1 day") 1 gün
strtotime("+1 week") 1 hafta
*/


 ?>