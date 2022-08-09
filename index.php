<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD İŞLEMLERİ</title>
</head>
<body>

<h1>Veritabanı PDO kayıt işlemleri</h1>
<hr>

<form action="islem2.php" method="POST">
	<input type="text" required="" name="bilgilerim_ad" placeholder="Adınızı Giriniz...">
	<input type="text" required="" name="bilgilerim_soyad" placeholder="Soyadınızı Giriniz...">
	<input type="text" required="" name="bilgilerim_mail" placeholder="Mail Giriniz...">
	<input type="text" required="" name="bilgilerim_yas" placeholder="Yaş Giriniz...">
	<button type="submit" name="insertislemi">Formu Gönder</button>

	
</form>


</body>
</html>