<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body bgcolor="#33CCFF">
	
<?php

	define(GMT_TURKIYE_FARKI, 7);

	// Burayı istediğiniz gibi değiştirebilirsiniz	
	$kayitAlanEtiketi = "Laboratuvar Grup Kayıt Formu";
	$ozelNotKayit = "LAB_KAYIT_OZEL_NOT.txt";
	$dosyaAdi = "LabGrupKayit";
	
	list ($sunucuda) = explode ($_SERVER['SCRIPT_NAME'], $_SERVER['PATH_TRANSLATED']);
	
	list (, $anaDizineGore) = explode ($sunucuda, dirname(__FILE__));

	
	$buDizin = dirname(__FILE__);
	$kayitDosyasi = "$dosyaAdi.xml"; 
	
	// Buradan sonra değiştirilebilecek şey kalmıyor
	
	$kayitDosyasi = $buDizin.'/'.$kayitDosyasi;
	
	// [Listele]
	echo '<div class="'.$dosyaAdi.'">';
	echo '<div class="KayitAlGoster">';
	$dosyaIcerigi = file_get_contents ($kayitDosyasi);
	if (filesize ($kayitDosyasi) == 0)
	{
		//echo '<p class="KayitYokUyarisi">Henüz hiç kimse bir şey dememiş. Söze ilk sen başla istersen?</p>';
		echo '<p class="KayitYokUyarisi">Henüz hiç kimse kayıt yapmamış...</p>';
	}
	else
	{
		echo stripslashes ($dosyaIcerigi);
	}
	echo '</div><!-- /KayitAlGoster -->';
	echo '</div><!-- /'.$dosyaAdi.' -->';
	// [/Listele]	
	
?> 


</body>
</html>
