
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php echo "Korhan Tokgöz";

echo "Ankara";
 ?>

<?php 

// Bu bir yorum satırıdır.

#Bu bir yorum satırıdır.
/*
Bu bir yorum satırıdır.
Bu bir yorum satırıdır.
*/

 ?>
 <hr>

<?php 

//Hatalara genel bakış;

echo "Developer Korhan Tokgöz";
echo "asdasdasd";

 ?>
 <hr>

 <?php 
 //Birleştirme operatörü .

 echo "Developer"."Korhan Tokgöz";


  ?>
  <hr>

  <?php 
  
//Değişkenler

echo $ad="Korhan";
$soyad="Tokgöz";
$meslek = 'Developer';
$no=500;
$AdSoyad="korhan404";

//echo $AdSoyad;

$ad1="korhan";
$soy_ad;
$korhantokgöz="asassasas"; //=> türkçe karakter kullanmıyoruz.



/*
-Değişkenler  $ işareti ile başlar.
-Değişkene değer ataması yapılırken = işareti kullanılır.
-Değişkene metinsel ifadeler aktarılırken  " " veya  ' ' kullanılabilir.
-Değişkene integer sayısal değer aktarılırken direkt olarak yazabiliriz.
-Değişkenlerde ufak büyük harf ayrımı vardır.
-Değişkenlerde rakam ile başlamıyoruz. Ama rakam ile bitirebiliyoruz.Özel karakterlerde dahildir.
-Değişkenlerde boşluk bırakmıyoruz.
-Değişkenlere  _ alt çizgi kullanabiliriz.
-Değişkenler türkçe karakter kullanmıyoruz.

*/  

   ?>
   <hr>


<?php
$ad="Korhan Tokgöz";
$unvan= "Developer";
echo "<br>";
echo $ad.$unvan."<br>";
echo "<br>";
$ad="Developer";
echo "<br />";
echo $ad.$unvan;

?>

<hr>

<?php


$name= "KORHAN";
$surname="TOKGOZ";
$age=29;
$job= "DEVELOPER";

echo "<br>";
echo $name.$surname.$age.$job


  ?>
  <hr>


  <?php 

//Ad, soyad, no değişkenleri tanımlayalım.İçeriğine bilgileri girelim.Ad ve Soyad ayrı alınıp birleştirilerek yazılsın.Altına no değeri yazılsın ve arada çizgi kullanalım.

  $ad="Korhan";
  $soyad="Tokgöz";
  $no=1500;


  echo "<h1>Bilgilerim</h1>";
  echo "<hr>";

echo "Adınız ve Soyadınız ..........:".$ad." ".$soyad;
echo "<br>";
echo "Numaranız......................:".$no; 
echo "<hr>";
echo "<br>";

/* 
Matematiksel İşlemler

+ Toplam İşlemi
- Çıkartma İşlemi
/ Bölme İşlemi
* Çarpma İşlemi

*/

$numara1=50;
$numara2=13;

//echo  $numara1+$numara2;
echo "Toplama İşlemi";
$topla=$numara1+$numara2;
echo "<br>";
echo "$numara1 + $numara2 = $topla";
echo "<br>";
echo "<hr>";


echo "Cıkarma İşlemi";
$cikar=$numara1-$numara2;
echo "<br>";
echo "$numara1 - $numara2 = $cikar";
echo "<br>";
echo "<hr>";

echo "Bölme İşlemi";
$bolme=$numara1/$numara2;
echo "<br>";
echo "$numara1 / $numara2 = $bolme";
echo "<br>";
echo "<hr>";

echo "Çarpma İşlemi";
$carpma=$numara1*$numara2;
echo "<br>";
echo "$numara1 * $numara2 = $carpma";
echo "<br>";
echo "<hr>";





echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<hr>";

$atama=400;

echo "$\atama değişkenin değeri : ". $atama;
echo "<hr>";

$atama+=500;
//$atama=$atama+500;

echo "$\atama değişkenin değeri : ". $atama;
echo "<hr>";

$atama-=500;
echo "$\atama değişkenin değeri : ". $atama;
echo "<hr>";

$atama/=500;
echo "$\atama değişkenin değeri : ". $atama;
echo "<hr>";

$atama*=500;
echo "$\atama değişkenin değeri : ". $atama;
echo "<hr>";
echo "<br>";echo "<br>";

/*Arttırma ve Eksiltme Operatörleri*/
$atama++;
echo "$\atama değişkenin değeri : ". $atama;
echo "<hr>";
echo "<br>";echo "<br>";

$atama--;
echo "$\atama değişkenin değeri : ". $atama;

echo "<hr>";


// Hazır Fonksiyonlara Bakış
//rand belirlenen aralıkta sayı üretir.

echo $sayi=rand(0,10);echo "<br>";

if ($sayi>=5) {
	echo "kazandın!";
} else {
	echo "Kaybettin kanka";
}
echo "<br>";echo "<br>";
echo "<hr>";



/* 

" Çift tırnak ve ' tek tırnak arasında ki fakrlar.

-Çift tırnak içerisinde değişken içerikleri okunabilir, tek tırnak içerisinde değişken içerikleri okunmaz...

*/

echo "<br>";
$ad="Korhan";
$Soyad="Tokgöz";

echo "Benim Adım $ad";
echo "<br>";
echo 'Benim Adım $ad';
echo "<br>";echo "<br>";
echo "<hr>";


/* 
Yoksayma İşaretleri
*/

echo "<br>";echo "<br>";

echo "Ben $ad  mesleğim \"Developer\" işe yeni başladım.";

//Hazır String fonksiyonlar

//strtolower => büyük metni ufak metne  çevirir.

echo $yazi="BEN ANKARA'DA YAŞAYAN BİR JR.DEVELOPER'IM.";
echo "<br>";
echo $yazi= strtolower($yazi);



//strtoupper => küçük metni büyük metne çevirir.

echo "<br>";
echo strtoupper($yazi);
echo "<br>";echo "<br>";

echo "<hr>";

//ucwords => metnin kelimlerini ilk harflerini büyük yapar.

echo "<br>";
echo $yazi= strtolower($yazi);
echo "<br>";echo "<br>";

echo "<br>";
echo $yazi= ucwords($yazi);
echo "<br>";echo "<br>";
echo "<hr>";

//ucfirst => metnin ilk harfini büyük yapar.

echo "<br>";
echo $yazi= ucfirst($yazi);
echo "<br>";echo "<br>";

echo "<hr>";

   ?>




<?php 

//strlen => metnin karakter sayısını verir.

echo $yazi="BEN ANKARA'DA YAŞAYAN BİR JR.DEVELOPER'IM.";
echo "<br>";

//echo "\$yazi değişkeninde olan karakter sayısı : ".$yazi=strlen($yazi);
echo "<br>";
echo "<hr>";


//substr => metnin belirtilen karakter sayıda kısmını alır.

echo "<br>";
echo substr($yazi,0,10);
echo "<hr>";

//DEVAMINI OKU UYGULAMASI

$yazi="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim odio non justo finibus vestibulum. Suspendisse interdum, risus eget feugiat porttitor, diam arcu tristique sem, ac dictum augue diam eu lacus. Nullam nec dignissim lacus. Vestibulum eu felis semper, imperdiet ante ut, luctus sapien. Maecenas rutrum vehicula est, ac auctor mi faucibus id. Vestibulum libero dui, posuere non ex mattis, rhoncus egestas tellus. Pellentesque dolor neque, rhoncus placerat convallis sit amet, malesuada id erat. Nulla sodales magna lobortis nunc fringilla, vitae malesuada leo feugiat. Aenean commodo cursus odio, eu sollicitudin eros vestibulum nec. Pellentesque iaculis nibh non ipsum luctus auctor.";

echo "<h1>Haber Başlığı</h1>";

echo "<p>".substr($yazi,0,250)."...</p>";

echo "<a href=\"#\">Devamını Oku</a>";

 ?>



</body>
</html>