<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
//For döngüsü
/*

$i=0 => başlangıç
$i < ; => koşul
$i++ => artış kısmı



for ($i=0; $i < 10 ; $i++) { 
	
	echo $i; echo "<br>";
}
*/

for ($i=0; $i < 10; $i++) { ?>

	<?php echo $i ?> <br>
	
<?php } ?>


<?php 
// İl plakalarını döngü ile selectbox içine atalım.
 ?>

 <!----<select>
 	<?php 
     
     for ($i=1; $i < 82 ; $i++) { ?>
     <option value="<?php echo $i ?>"> <?php echo $i ?></option> 
     <?php }
 	 ?>

 </select>---->


<?php 

//For döngüsü içerisinde if koşulu

/*
for ($i=1; $i <=100 ; $i++) {
    
    echo $i." ";

	if ($i==50) {
		echo "<br>";
		echo  $i." sayıya ulaştık";
		echo "<br>"; }
	
} */


//For döngüsü  ile 100'e kadar  sayı yazdırıp bunların tek yada çift olduklarını bulalım. Tek yada çift sayı adedinide görelim.

echo "<br>";
echo "<hr>";

$tek=0;
$cift=0;

for ($i=1; $i <=100 ; $i++) { 
	
	echo "$i. Sayı : ".$i; echo "<br>";

	if ($i%2==0) {
		echo "Bu sayı çift";
		$tek++;
	} else {
		echo "Bu sayı tek";
		$cift++;
	}
	echo "<br>";
	echo "<hr>";
}

echo "<hr>";
echo "Çift sayı $cift adet var."; echo "<br>";
echo "Tek sayı $tek adet var."; echo "<br>";


 ?>



</body>
</html>