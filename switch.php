<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<!-- switch case -->

<?php  
/*
$not=10;

switch ($not) {
	case '5':
		echo "Evet değer 5'tir";
		break;

		case '4':
		echo "Evet değer 4'tir";
		break;

		case '3':
		echo "Evet değer 3'tir";
		break;

		default:
		echo "Hayır değer yanlıştır";
		break;
		}

		*/

		/*

		5'lik sistem öğrencinin not durumunu yazan uygulamayı yapalım

		1 => Kladınız
		2 => Geçetiniz
		3 => Ortalama
		4 =>İyi
		5 => Pekiyi


		*/

		/* if (isset($_POST['notunuz'])) {
			echo "Notunuz : ".$not=$_POST['not']; echo " ";
	
		switch ($not) {
			case '5':
				echo "Pekiyi";
				break;

				case '4':
				echo "iyi";
				break;

				case '3':
				echo "Orta";
				break;

				case '2':
				echo "Geçer";
				break;

				case '1':
				echo "kaldı";
				break;
			
			default:
				echo "tanımsız sonuç";
				break;


		} */

		echo "<hr>";
			

			if (isset($_POST['notislemi'])) {
				

			$sayi=$_POST['not'];

			switch ($sayi) {
				case '1':
					echo "Kaldınız"; // Kaldı
					break;

					case '2':
					echo "Zorla Geçtiniz";
					break;

					case '3':
					echo "Orta ile geçtiniz";
					break;

					case '4':
					echo "İyi Geçtiniz";
					break;

					case '5':
					echo "Süper Geçtiniz";
					break;
				
				default:
					echo "Tanımlanamyan Cisim";
					break;
			}

			}

 ?>

 <hr>





 <form action="" method="POST">
 	Notunuzu Girin <input type="text" name="not" placeholder="Notunuzu Girin">
 	<button type="submit" name="notislemi">Sonuçlandır</button>
 </form>





</body>
</html>