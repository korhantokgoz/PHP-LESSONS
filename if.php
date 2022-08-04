<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

/* 
if koşulu

==    =>eşit ise 
===   =>aynısı ise 
<     =>küçük ise
>     =>büyük ise 
<=    =>küçük yada eşit ise
>=    =>büyük yada eşit ise


*/


$say=801;


 if ($say<=5) {

 	echo "1 yanlış";

 } elseif ($say=6) {

    echo "doğru";

 } elseif($say=7) {

 	echo "doğru";

 } elseif ($say=8) {

    echo "8";

 } else {

   echo "Başka Bir Şey";

 }


 echo "<br>";
 echo "<hr>";



//Kısa if kullanımı

  echo $say=='800' ? 'doğru' : 'yanlış';

 echo "<br>";
 echo "<hr>";
 $deger="Elma";

 ?>



<select>
	
	<option>Armut</option>
	<option <?php echo $değer=='Elma' ? 'selected' : '' ?>>Elma</option>
</select>





</body>
</html>