<html>

 <head>
	 <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
	 <meta name="ProgId" content="FrontPage.Editor.Document">
	 <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
	 <title>2 Bilinmeyenli Denklem Çözümü Alıştırmaları</title>
	 <link rel="stylesheet" type="text/css" media="screen" href="style.css">
	 <script type"text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	 
	<script type="text/javascript" src="script/soundmanager2.js"></script>
	<script type="text/javascript">
		soundManager.url = 'swf/'; // path to SoundManager2 SWF files (note trailing slash)
		soundManager.debugMode = false;
		soundManager.consoleOnly = false;
	 
		function ses()
		{
			soundManager.play('ses','mp3/ses.mp3'); //çalacak olan ses dosyamız
		}
	</script>
 </head>

<body>
<div class="ana">

<?php
	include('fonksiyonlar.php');
	
	// İki Bilinmeyen 1.Denklem Değişkenleri.
	$kIki=0;
	$icIki=0;
	$xTopSolNegIki = 0;
	$xTopSolPozIki = 0;
	$yTopSolNegIki = 0;
	$yTopSolPozIki = 0;
	$xTopSagNegIki = 0;
	$xTopSagPozIki = 0;
	$yTopSagNegIki = 0;
	$yTopSagPozIki = 0;
	$sabTopSolNegIki = 0;
	$sabTopSolPozIki = 0;
	$sabTopSagNegIki = 0;
	$sabTopSagPozIki = 0;
	
	// İki Bilinmeyen 2.Denklem Değişkenleri.
	$kIki2=0;
	$icIki2=0;
	$xTopSolNegIki2 = 0;
	$xTopSolPozIki2 = 0;
	$yTopSolNegIki2 = 0;
	$yTopSolPozIki2 = 0;
	$xTopSagNegIki2 = 0;
	$xTopSagPozIki2 = 0;
	$yTopSagNegIki2 = 0;
	$yTopSagPozIki2 = 0;
	$sabTopSolNegIki2 = 0;
	$sabTopSolPozIki2 = 0;
	$sabTopSagNegIki2 = 0;
	$sabTopSagPozIki2 = 0;

		?>		
<font size="5" color="purple"><b>İki Bilinmeyenli Denklem Çifti</b></font>
<font size="3"><br/>Aşağıdaki 2 bilinmeyenli denklem çiftinin düzenlenmiş katsayılarını kutulara yazınız. Sayılar birbiriyle tutarlı olmak şartıyla doğru cevap farklı sayılarla da yazılabilir, hatta +-*/ işlemleriyle bile yazılabilir.<br/>	<br/></font>
	

	<?php
		
///////////////////////////////////////////////////////////////// 2 Bilinmeyenli Denklemlerin 1.Denklemi/////////////////////////////////////////////////////////////////
	
	
	for($i=0; $i<2; $i++)
	{
		for($j=0; $j<4; $j++)
		{
			$veri[$kIki] = IslemUretIki().SayiUretIki().DegerUretIki();
				echo $veri[$kIki];
				$kIki++;	
		}
		if ($i==0) 
		{
			echo " = "; 
		}
	}		

	//İki Bilinmeyen Soldaki işlemler.
	for($icIki=0; $icIki<4; $icIki++)
	{
		// Negatif X'li.
		if(strstr($veri[$icIki], "X") and strstr($veri[$icIki], "-"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$xNumSolNegIki = (int)$parca[$icIki];
			$xTopSolNegIki = $xTopSolNegIki + $xNumSolNegIki;
		}
		// Pozitif X'li.
		else if(strstr($veri[$icIki], "X") and strstr($veri[$icIki], "+"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$xNumSolPozIki = (int)$parca[$icIki];
			$xTopSolPozIki = $xTopSolPozIki + $xNumSolPozIki;
		}
		// Negatif Y'li.
		else if(strstr($veri[$icIki], "Y") and strstr($veri[$icIki], "-"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$yNumSolNegIki = (int)$parca[$icIki];
			$yTopSolNegIki = $yTopSolNegIki + $yNumSolNegIki;
		}
		// Pozitif Y'li.
		else if(strstr($veri[$icIki], "Y") and strstr($veri[$icIki], "+"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$yNumSolPozIki = (int)$parca[$icIki];
			$yTopSolPozIki = $yTopSolPozIki + $yNumSolPozIki;
		}
		// Tam sayı işlemleri.
		else
		{
			if(strstr($veri[$icIki], "-"))
			{
				$parca[$icIki] = substr($veri[$icIki], 1, 1);
				$sabSolNegIki = (int)$parca[$icIki];
				$sabTopSolNegIki = $sabTopSolNegIki + $sabSolNegIki;
			}
			if(strstr($veri[$icIki], "+"))
			{
				$parca[$icIki] = substr($veri[$icIki], 1, 1);
				$sabSolPozIki = (int)$parca[$icIki];
				$sabTopSolPozIki = $sabTopSolPozIki + $sabSolPozIki;
			}
	    }
	}
	
	//İki Bilinmeyen Sağdaki işlemler.
	for($icIki=4; $icIki<8; $icIki++)
	{
		// Negatif X'li.
		if(strstr($veri[$icIki], "X") and strstr($veri[$icIki], "-"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$xNumSagNegIki = (int)$parca[$icIki];
			$xTopSagNegIki = $xTopSagNegIki + $xNumSagNegIki;
		}
		// Pozitif X'li.
		else if(strstr($veri[$icIki], "X") and strstr($veri[$icIki], "+"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$xNumSagPozIki = (int)$parca[$icIki];
			$xTopSagPozIki = $xTopSagPozIki + $xNumSagPozIki;
		}
		// Negatif Y'li.
		else if(strstr($veri[$icIki], "Y") and strstr($veri[$icIki], "-"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$yNumSagNegIki = (int)$parca[$icIki];
			$yTopSagNegIki = $yTopSagNegIki + $yNumSagNegIki;
		}
		// Pozitif Y'li.
		else if(strstr($veri[$icIki], "Y") and strstr($veri[$icIki], "+"))
		{
			$parca[$icIki] = substr($veri[$icIki], 1, 1);
			$yNumSagPozIki = (int)$parca[$icIki];
			$yTopSagPozIki = $yTopSagPozIki + $yNumSagPozIki;
		}
		// Tam sayı işlemleri.
		else
		{
			if(strstr($veri[$icIki], "-"))
			{
				$parca[$icIki] = substr($veri[$icIki], 1, 1);
				$sabSagNegIki = (int)$parca[$icIki];
				$sabTopSagNegIki = $sabTopSagNegIki + $sabSagNegIki;
			}
			if(strstr($veri[$icIki], "+"))
			{
				$parca[$icIki] = substr($veri[$icIki], 1, 1);
				$sabSagPozIki = (int)$parca[$icIki];
				$sabTopSagPozIki = $sabTopSagPozIki + $sabSagPozIki;
			}
	    }
	}
	
	$xTopSolIki = $xTopSolPozIki + $xTopSolNegIki * (-1);
	$xTopSagIki = $xTopSagPozIki + $xTopSagNegIki * (-1);
	$toplamXIki = $xTopSolIki - $xTopSagIki;
	$yTopSolIki = $yTopSolPozIki + $yTopSolNegIki * (-1);
	$yTopSagIki = $yTopSagPozIki + $yTopSagNegIki * (-1);
	$toplamYIki = $yTopSolIki - $yTopSagIki;
	$sabTopSolIki = $sabTopSolPozIki + $sabTopSolNegIki * (-1);
	$sabTopSagIki = $sabTopSagPozIki + $sabTopSagNegIki * (-1);
	$toplamSabIki = $sabTopSagIki - $sabTopSolIki;
	echo "<br>"; 
	if($toplamXIki== 0 and $toplamYIki== 0)
	{
		echo " <script> window.location='iki_bilinmeyen.php'; </script>";
	}
	if($toplamSabIki==0)
	{
		echo " <script> window.location='iki_bilinmeyen.php'; </script>";
	}
	
	echo '
	<div class="cevap">
		<div id="cevapiki_kontrol"></div>
			<td><input type="text" name="xIki" style="width:30px; height:30px;" onKeyUp="GirdiIki()"> X + </td>
			<td><input type="text" name="y" style="width:30px; height:30px;" onKeyUp="GirdiIki()"> Y = </td>
  			<td><input type="text" name="sabitIki" style="width:30px; height:30px;" onKeyUp="GirdiIki()"></td>
  	</div>
		
	';
	
	
	
	///////////////////////////////////////////////////////////////// 2 Bilinmeyenli Denklemlerin 2.Denklemi/////////////////////////////////////////////////////////////////
	
	
	for($i=0; $i<2; $i++)
	{
		for($j=0; $j<4; $j++)
		{
			$veri[$kIki2] = IslemUretIki2().SayiUretIki2().DegerUretIki2();
				echo $veri[$kIki2];
				$kIki2++;	
		}
		if ($i==0) 
		{
			echo " = "; 
		}
	}		

	//İki Bilinmeyen Soldaki işlemler.
	for($icIki2=0; $icIki2<4; $icIki2++)
	{
		// Negatif X'li.
		if(strstr($veri[$icIki2], "X") and strstr($veri[$icIki2], "-"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$xNumSolNegIki2 = (int)$parca[$icIki2];
			$xTopSolNegIki2 = $xTopSolNegIki2 + $xNumSolNegIki2;
		}
		// Pozitif X'li.
		else if(strstr($veri[$icIki2], "X") and strstr($veri[$icIki2], "+"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$xNumSolPozIki2 = (int)$parca[$icIki2];
			$xTopSolPozIki2 = $xTopSolPozIki2 + $xNumSolPozIki2;
		}
		// Negatif Y'li.
		else if(strstr($veri[$icIki2], "Y") and strstr($veri[$icIki2], "-"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$yNumSolNegIki2 = (int)$parca[$icIki2];
			$yTopSolNegIki2 = $yTopSolNegIki2 + $yNumSolNegIki2;
		}
		// Pozitif Y'li.
		else if(strstr($veri[$icIki2], "Y") and strstr($veri[$icIki2], "+"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$yNumSolPozIki2 = (int)$parca[$icIki2];
			$yTopSolPozIki2 = $yTopSolPozIki2 + $yNumSolPozIki2;
		}
		// Tam sayı işlemleri.
		else
		{
			if(strstr($veri[$icIki2], "-"))
			{
				$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
				$sabSolNegIki2 = (int)$parca[$icIki2];
				$sabTopSolNegIki2 = $sabTopSolNegIki2 + $sabSolNegIki2;
			}
			if(strstr($veri[$icIki2], "+"))
			{
				$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
				$sabSolPozIki2 = (int)$parca[$icIki2];
				$sabTopSolPozIki2 = $sabTopSolPozIki2 + $sabSolPozIki2;
			}
	    }
	}
	
	//İki Bilinmeyen Sağdaki işlemler.
	for($icIki2=4; $icIki2<8; $icIki2++)
	{
		// Negatif X'li.
		if(strstr($veri[$icIki2], "X") and strstr($veri[$icIki2], "-"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$xNumSagNegIki2 = (int)$parca[$icIki2];
			$xTopSagNegIki2 = $xTopSagNegIki2 + $xNumSagNegIki2;
		}
		// Pozitif X'li.
		else if(strstr($veri[$icIki2], "X") and strstr($veri[$icIki2], "+"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$xNumSagPozIki2 = (int)$parca[$icIki2];
			$xTopSagPozIki2 = $xTopSagPozIki2 + $xNumSagPozIki2;
		}
		// Negatif Y'li.
		else if(strstr($veri[$icIki2], "Y") and strstr($veri[$icIki2], "-"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$yNumSagNegIki2 = (int)$parca[$icIki2];
			$yTopSagNegIki2 = $yTopSagNegIki2 + $yNumSagNegIki2;
		}
		// Pozitif Y'li.
		else if(strstr($veri[$icIki2], "Y") and strstr($veri[$icIki2], "+"))
		{
			$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
			$yNumSagPozIki2 = (int)$parca[$icIki2];
			$yTopSagPozIki2 = $yTopSagPozIki2 + $yNumSagPozIki2;
		}
		// Tam sayı işlemleri.
		else
		{
			if(strstr($veri[$icIki2], "-"))
			{
				$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
				$sabSagNegIki2 = (int)$parca[$icIki2];
				$sabTopSagNegIki2 = $sabTopSagNegIki2 + $sabSagNegIki2;
			}
			if(strstr($veri[$icIki2], "+"))
			{
				$parca[$icIki2] = substr($veri[$icIki2], 1, 1);
				$sabSagPozIki2 = (int)$parca[$icIki2];
				$sabTopSagPozIki2 = $sabTopSagPozIki2 + $sabSagPozIki2;
			}
	    }
	}
	
	$xTopSolIki2 = $xTopSolPozIki2 + $xTopSolNegIki2 * (-1);
	$xTopSagIki2 = $xTopSagPozIki2 + $xTopSagNegIki2 * (-1);
	$toplamXIki2 = $xTopSolIki2 - $xTopSagIki2;
	$yTopSolIki2 = $yTopSolPozIki2 + $yTopSolNegIki2 * (-1);
	$yTopSagIki2 = $yTopSagPozIki2 + $yTopSagNegIki2 * (-1);
	$toplamYIki2 = $yTopSolIki2 - $yTopSagIki2;
	$sabTopSolIki2 = $sabTopSolPozIki2 + $sabTopSolNegIki2 * (-1);
	$sabTopSagIki2 = $sabTopSagPozIki2 + $sabTopSagNegIki2 * (-1);
	$toplamSabIki2 = $sabTopSagIki2 - $sabTopSolIki2;
	echo "<br>";
	if($toplamXIki2== 0 and $toplamYIki2== 0)
	{
		echo " <script> window.location='iki_bilinmeyen.php'; </script>";
	}
	if($toplamSabIki2==0)
	{
		echo " <script> window.location='iki_bilinmeyen.php'; </script>";
	}
	
	echo '
	
		<div class="cevap">
			<div id="cevapiki2_kontrol"></div>
				<td><input type="text" name="xIki2" style="width:30px; height:30px;" onKeyUp="GirdiIki2()"> X + </td>
				<td><input type="text" name="yIki2" style="width:30px; height:30px;" onKeyUp="GirdiIki2()"> Y = </td>
				<td><input type="text" name="sabitIki2" style="width:30px; height:30px;" onKeyUp="GirdiIki2()"></td>	
		</div>
	';
	
	
echo "
<script type='text/javascript'>
	function GirdiIki()
	{
		var girilenX = eval($('input[name=xIki]').val());
		var girilenY = eval($('input[name=y]').val());
		var girilenSab = eval($('input[name=sabitIki]').val());
		var bulunanSabitOranX = $toplamSabIki / $toplamXIki;
		var bulunanSabitOranY = $toplamSabIki / $toplamYIki;	
		var girilenSabitOranX = girilenSab /girilenX;
		var girilenSabitOranY = girilenSab /girilenY;
		if((bulunanSabitOranX == girilenSabitOranX) && (bulunanSabitOranY == girilenSabitOranY))
		{
			$('#cevapiki_kontrol').html('Tebrikler Cevabınız Doğru!');
			$('#cevapiki_kontrol').css({'background':'url(resimler/dogru.png)','background-repeat':'no-repeat','background-color':'#61B03A'});
			soundManager.play('ses','mp3/ses.mp3'); 
		}
		if((bulunanSabitOranX != girilenSabitOranX) || (bulunanSabitOranY != girilenSabitOranY))
		{
			if(girilenX && girilenY && girilenSab)
			{
				$('#cevapiki_kontrol').html('Malesef Cevabınız Yanlış!');
				$('#cevapiki_kontrol').css({'background':'url(resimler/yanlis.png)','background-repeat':'no-repeat','background-color':'#FF0000'});
			}
		}	
	}
	
	function GirdiIki2()
	{
		var girilenX = eval($('input[name=xIki2]').val());
		var girilenY = eval($('input[name=yIki2]').val());
		var girilenSab = eval($('input[name=sabitIki2]').val());
		var bulunanSabitOranX = $toplamSabIki2 / $toplamXIki2;
		var bulunanSabitOranY = $toplamSabIki2 / $toplamYIki2;	
		var girilenSabitOranX = girilenSab /girilenX;
		var girilenSabitOranY = girilenSab /girilenY;
		if((bulunanSabitOranX == girilenSabitOranX) && (bulunanSabitOranY == girilenSabitOranY))
		{
			$('#cevapiki2_kontrol').html('Tebrikler Cevabınız Doğru!');
			$('#cevapiki2_kontrol').css({'background':'url(resimler/dogru.png)','background-repeat':'no-repeat','background-color':'#61B03A'});
			soundManager.play('ses','mp3/ses.mp3'); 
		}	
		if((bulunanSabitOranX != girilenSabitOranX) || (bulunanSabitOranY != girilenSabitOranY))
		{
			if(girilenX && girilenY && girilenSab)
			{
				$('#cevapiki2_kontrol').html('Malesef Cevabınız Yanlış!');
				$('#cevapiki2_kontrol').css({'background':'url(resimler/yanlis.png)','background-repeat':'no-repeat','background-color':'#FF0000'});
			}
		}	
	}

</script>
";
?>
<table>
<td><form action="iki_bilinmeyen.php" method="post">
&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="Yeni İKİ bilinmeyenli"/>
</form></td>
<td><form action="tek_bilinmeyen.php" method="post">
&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="TEK bilinmeyenli"/>
</form></td>
</table>
</div>
</body>
</html>