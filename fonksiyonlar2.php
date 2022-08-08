<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

//Kendini çağıran recursive fonksiyonlar?

 $sabit=1;

 function faktoriyel($a) {
 	global $sabit;

 	if ($a>1) {

 		$sabit=$sabit*$a;
 		$a--;
 		faktoriyel($a);
 	}
 	return $sabit;
 }

echo faktoriyel(10);

 ?>

 <hr>


<?php 

//Fonkksiyon var mı yok mu?
//function_exists fonksiyonu var yok işlemini yapar...

function yaz($a) {


	return $a;
}

if (function_exists("yaz")) {
	echo "fonksiyon var";
}else {
	echo "fonksiyon yok";
}


 ?>

 <hr>

 <?php 

//Php tüm fonksiyonları listeleme

$yaz=get_defined_functions();

echo "<pre>";
print_r($yaz);
echo "";

  ?>

  <hr>

 


</body>
</html>