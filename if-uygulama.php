<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

//if uygulama  örneği

//OR veya
//AND ve

$kadi="korhan";
$pass="123456";

/*
$kullanici_ad = $_POST['kullanici_ad'];
 $kullanici_password=$_POST['kullanici_password'];


if ($kullanici_ad==$kadi AND $kullanici_password ==$pass) {
	
	echo "Giriş Başarılı";

} else {

	echo "Başarısız Giriş Denemesi";
}*/


if ($kadi==$_POST['kullanici_ad'] AND $_POST['kullanici_password']==$pass) {
	echo "Giriş Başarılı";
} else {
	echo "Başarısız Giriş Denemesi";
}


 ?>

 <br>
 <hr>

 <h3>Kullanıcı Girişi</h3>

 <form action="" method="POST">
 	
Kullanıcı Adı <input type="text" name="kullanici_ad" placeholder="Kullanıcı Adını Giriniz...">
Şifre <input type="password" name="kullanici_password" placeholder="Şifrenizi Giriniz...">

<button type="submit">Giriş Yap</button>



 </form>


</body>
</html>