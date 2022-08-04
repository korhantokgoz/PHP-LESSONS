
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
//Diziler

$dizi="Hypertext Preprocessor";

echo "$dizi"; 
echo "<hr>";

$dizi=array("korhan","tokgöz",10,20,30,40);

//echo $dizi;

print_r($dizi);
echo "<br>";
echo "<hr>";

echo $dizi[0]; echo "<br>";
echo $dizi[1]; echo "<br>";
echo $dizi[2]; echo "<br>";
echo $dizi[3]; echo "<br>";
echo $dizi[4]; echo "<br>";
echo $dizi[5]; echo "<br>";
echo $dizi[6]; echo "<br>";
echo "<br>";
echo "<hr>";

echo "<pre>";
print_r($dizi);

echo "<br>";

  ?>


<?php 
date_default_timezone_set('Europe/Istanbul');


//Dizlerde sık kullanılan arrayler

//sort=> küçükten büyüğe doğru sıralar

$dizi=array(10,9,8,7,6,12,5,4,3,2,1);


echo "<pre>";
sort($dizi);
print_r($dizi);
echo "</pre>";
echo "<br>";
echo "<hr>";

//rsort=> büyükten küçüğe  doğru sıralar

echo "<pre>";
rsort($dizi);
print_r($dizi);
echo "</pre>";
echo "<br>";
echo "<hr>";

//rsort=> büyükten küçüğe  doğru alfabetik sıralama

$dizi=array("a","b","c","d");

echo "<pre>";
rsort($dizi);
print_r($dizi);
echo "</pre>";
echo "<br>";
echo "<hr>";


//in_array => dizi içerisinde aradığımız değerin olup olmadığını denetler.Varsa 1 değerini döndürür.

$dizi=array("a","b","c","d");

echo $sonuc=in_array("a", $dizi);

if ($sonuc) {
	echo "var";
} else {
	echo "yok";
}
echo "<br>";
echo "<hr>";

//implode dizi değerlerini birleştirmeye yarar

$dizi=array("a","b","c","d");

$sonuc=implode("+", $dizi);

echo $sonuc;
echo "<br>";
echo "<hr>";

//explode değişkenleri parçalayarak dizi haline getirir.

echo "<br>";
$zaman="27-10-2017 19:08";

$sonuc=explode(" ", $zaman);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<br>";
echo "Tarih : ".$sonuc[0]." Saat:.".$sonuc[1];
echo "<br>";
echo "<hr>";

//Time Zone Ayarları ve anlık zaman alma

echo $zaman=date("d-m-y h:i:s");

$sonuc=explode(" ", $zaman);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<br>";
echo "Tarih : ".$sonuc[0]." Saat:.".$sonuc[1];
echo "<br>";
echo "<hr>";

 

 ?>



</body>
</html>