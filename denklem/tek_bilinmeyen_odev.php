<html>

 <head>
	 <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
	 <meta name="ProgId" content="FrontPage.Editor.Document">
	 <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
	 <title>Tek Bilinmeyenli Denklem Çözümü Alıştırmaları</title>
	 <link rel="stylesheet" type="text/css" media="screen" href="style_odev.css">
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
<font size="5" color="purple"><b>Tek Bilinmeyenli Denklem</b></font>
<br/>

<?php
	include('fonksiyonlar.php');
?>







<?php
	// Tek Bilinmeyen Değişkenleri.
	$k=0;
	$ic=0;
	$xTopSolNeg = 0;
	$xTopSolPoz = 0;
	$xTopSagNeg = 0;
	$xTopSagPoz = 0;
	$sabTopSolNeg = 0;
	$sabTopSolPoz = 0;
	$sabTopSagNeg = 0;
	$sabTopSagPoz = 0;
	
	
	for($i=0; $i<2; $i++)
	{
		for($j=0; $j<3; $j++)
		{
			$veri[$k] = IslemUretTek().SayiUretTek().DegerUretTek();
			echo $veri[$k];
			$k++;	
		}
		if ($i==0) 
		{
			echo " = "; 
		}
	}
		
	// Tek Bilinmeyen Soldaki işlemler.
	for($ic=0; $ic<3; $ic++)
	{
		// Negatif X'li.
		if(strstr($veri[$ic], "X") and strstr($veri[$ic], "-"))
		{
			$parca[$ic] = substr($veri[$ic], 1, 1);
			$xNumSolNeg = (int)$parca[$ic];
			$xTopSolNeg = $xTopSolNeg + $xNumSolNeg;
		}
		// Pozitif X'li.
		else if(strstr($veri[$ic], "X") and strstr($veri[$ic], "+"))
		{
			$parca[$ic] = substr($veri[$ic], 1, 1);
			$xNumSolPoz = (int)$parca[$ic];
			$xTopSolPoz = $xTopSolPoz + $xNumSolPoz;
		}
		// Tam sayı işlemleri.
		else
		{
			if(strstr($veri[$ic], "-"))
			{
				$parca[$ic] = substr($veri[$ic], 1, 1);
				$sabSolNeg = (int)$parca[$ic];
				$sabTopSolNeg = $sabTopSolNeg + $sabSolNeg;
			}
			if(strstr($veri[$ic], "+"))
			{
				$parca[$ic] = substr($veri[$ic], 1, 1);
				$sabSolPoz = (int)$parca[$ic];
				$sabTopSolPoz = $sabTopSolPoz + $sabSolPoz;
			}
	    }
	}
		
	//Tek Bilinmeyen Sağdaki işlemler
	for($ic=3; $ic<6; $ic++)
	{
		// Negatif X'li.
		if(strstr($veri[$ic], "X") and strstr($veri[$ic], "-"))
		{
			$parca[$ic] = substr($veri[$ic], 1, 1);
			$xNumSagNeg = (int)$parca[$ic];
			$xTopSagNeg = $xTopSagNeg + $xNumSagNeg;
		}
		// Pozitif X'li.
		else if(strstr($veri[$ic], "X") and strstr($veri[$ic], "+"))
		{
			$parca[$ic] = substr($veri[$ic], 1, 1);
			$xNumSagPoz = (int)$parca[$ic];
			$xTopSagPoz = $xTopSagPoz + $xNumSagPoz;
		}
		// Tam sayı işlemleri.
		else
		{
			if(strstr($veri[$ic], "-"))
			{
				$parca[$ic] = substr($veri[$ic], 1, 1);
				$sabSagNeg = (int)$parca[$ic];
				$sabTopSagNeg = $sabTopSagNeg + $sabSagNeg;
			}
			if(strstr($veri[$ic], "+"))
			{
				$parca[$ic] = substr($veri[$ic], 1, 1);
				$sabSagPoz = (int)$parca[$ic];
				$sabTopSagPoz = $sabTopSagPoz + $sabSagPoz;
			}
		}  
	}
		
	$xTopSol = $xTopSolPoz + $xTopSolNeg * (-1);
	$xTopSag = $xTopSagPoz + $xTopSagNeg * (-1);
	$toplamX = $xTopSol - $xTopSag;
	$sabTopSol = $sabTopSolPoz + $sabTopSolNeg * (-1);
	$sabTopSag = $sabTopSagPoz + $sabTopSagNeg * (-1);
	$toplamSab = $sabTopSag - $sabTopSol;
	echo "<br>";
	if($toplamSab == 0 or $toplamX== 0)
	{
		echo " <script> window.location='tek_bilinmeyen_odev.php'; </script>";
	}
		
	echo '
		<div class="cevap">
		<div id="cevaptek_kontrol"></div>
		<div id="cevaptek_kontrol_yanlis"></div>
		<input type="text" name="x" style="width:30px; height:30px; text-align:right" onKeyUp="Girdi()"> X =
  	<input type="text" name="sabit" style="width:30px; height:30px;" onKeyUp="Girdi()">
		</div>';
  echo '
		<div class="cevap">
		<div id="cevaptekbol_kontrol"></div>

			<td>X = <input type="text" name="sabitBol" style="width:30px; height:30px; text-align:right" onKeyUp="GirdiBol()"> / </td>
  			<td><input type="text" name="xBol" style="width:30px; height:30px;" onKeyUp="GirdiBol()" value="1"></td>

		</div>
		
	';
	
	?>
<font size="3"><br/></font>	
	<?php
echo "
<script type='text/javascript'>
	function Girdi()
	{
		var girilenX = eval($('input[name=x]').val());
		var girilenSab = eval($('input[name=sabit]').val());
		var girilenOran = girilenSab /girilenX;
		var oran = $toplamSab / $toplamX;
		if(girilenOran == oran)
		{
			$('#cevaptek_kontrol').html(''); //Tebrikler Cevabınız Doğru!
			$('#cevaptek_kontrol').css({'background':'url(resimler/dogru_kucuk.png)','background-repeat':'no-repeat','background-color':'#FFFFFF'});
			soundManager.play('ses','mp3/ses.mp3'); 
		}	
		if(girilenOran != oran  && girilenX && girilenSab)
		{
			$('#cevaptek_kontrol').html('Malesef Cevabınız Yanlış!');
			$('#cevaptek_kontrol').css({'background':'url(resimler/yanlis.png)','background-repeat':'no-repeat','background-color':'#FF0000'});
		}
		
	}
	
	function GirdiBol()	
	{
		var girilenX = eval($('input[name=xBol]').val());
		var girilenSab = eval($('input[name=sabitBol]').val());
		var girilenOran = girilenSab /girilenX;
		var oran = $toplamSab / $toplamX;
		if(girilenOran == oran)
		{
			$('#cevaptekbol_kontrol').html(''); //Tebrikler Cevabınız Doğru!
			$('#cevaptekbol_kontrol').css({'background':'url(resimler/dogru_kucuk.png)','background-repeat':'no-repeat','background-color':'#FFFFFF'});
			soundManager.play('ses','mp3/ses.mp3'); 
		}
		if(girilenOran != oran  && girilenX && girilenSab)
		{
			$('#cevaptekbol_kontrol').html('Malesef Cevabınız Yanlış!');
			$('#cevaptekbol_kontrol').css({'background':'url(resimler/yanlis.png)','background-repeat':'no-repeat','background-color':'#FF0000'});
		}
	}

</script>
";

?>
























<table>
<td><form action="tek_bilinmeyen_odev.php" method="post">
<input type="submit" value="Yeni TEK bilinmeyenli"/>
</form></td>

</table>
</div>
</body>
</html>