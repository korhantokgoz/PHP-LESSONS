<?php 

//Fonksiyonlar nedir? 

$ad= "Korhan Tokgöz";

echo strlen($ad);

echo "<br>";

echo rand(1,50);

 ?>

<hr>

<?php 

//Fonksiyon Oluşturma?

function oku() {
	echo "Oluşturulan fonksiyonun çıktısı";
}
oku()


 ?>

 <hr>

 
 <?php 
/*
//Fonksiyon ile toplama işlemi?

function topla($sayi1,$sayi2) {

	echo $sayi1+$sayi2;
}

topla(5555655,52235553);
*/

  ?>



<?php 

//Return ile değer döndürme ve Fonksiyon ile toplama işlemi ?

function topla($sayi1,$sayi2) {

	return $sayi1+$sayi2;
}

echo topla (1,1);


 ?>

  <hr>

 <?php 

//Fonksiyonlarda global değişken kullanımı?

 $b=10;

 function ekle($a) {

  global $b;
  return $a+$b;

 }

 echo ekle(20);

  ?>

   <hr>

  <?php 

//Fonksiyonlarda varsayılan değer?

  function yaz($ad,$soyad="Soy isim girilmedi!") {

   return $ad." ".$soyad;

  }

  echo yaz("Korhan","Tokgöz");


   ?>