<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
//POST GET Methodları
/*echo $_POST['ad'];
echo "<br>";
echo $_POST['soyad'];
*/
echo $_GET['ad'];
echo "<br>";
echo $_GET['soyad'];
$kullanici_id=151;

 ?>

<form action="" method="POST">
 Ad <input type="text" name="ad" placeholder="Adınızı Girin">
 Soyad <input type="text" name="soyad" placeholder="Soyadınızı Girin">
<input type="submit" value="Formu Gönder"  name="">

</form>

<br>
<br>

<a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcyı Sil </button></a>


</body>
</html>