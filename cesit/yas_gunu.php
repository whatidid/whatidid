<html>
 <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
<p>Bu ayki soru bir İngilizce ders kitabından alıntıdır ("New First Certificate, Masterclass Student's Book", Simon Hainess, Barbara Stewart, Oxford University Press, 1996, sayfa 56).</p>
<p><font color="#FF0000">"Dün değil önceki gün 18 yaşındaydım, gelecek sene 21 yaşında olacağım."</font></p>
<p>diyen bir kimsenin bu sözü nasıl doğru olabilir? Hiç bir kelime mecazi anlamda değildir. Her kelime normal kullanımdaki ve zamanlar da normal takvimdeki anlamındadır.</p>
Cevabınızı aşağıya yazıp gönderiniz. Hemen değerlendirilerek doğru olup olmadığı söylenecektir.</br>Cevabınız sayı içeriyorsa, değerlendirilmesi için <b>sayıları rakamlarla</b> yazınız.</br></br>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevabı gönder"/>  (Cevaplar kaydedilmektedir.)</p>
</form>

<?php
$dosyaAdi = "bilmecevap_2010_03.xml";
list ($sunucuda) = explode ($_SERVER['SCRIPT_NAME'], $_SERVER['PATH_TRANSLATED']);
list (, $anaDizineGore) = explode ($sunucuda, dirname(__FILE__));
$buDizin = dirname(__FILE__);
$dosyaAdi = $buDizin.'/'.$dosyaAdi;
	if (!file_exists($dosyaAdi))
	{
		$DosyaOlustur = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Oluşturulamıyor</p>");
		fwrite ($DosyaOlustur, '<?xml version="1.0" encoding="Windows-1254"?>');
		fwrite ($DosyaOlustur, "\n");
		fwrite ($DosyaOlustur, '<?xml-stylesheet type="text/xsl" href="bilmece_2009_02.xsl" ?>');
		fwrite ($DosyaOlustur, "\n");
		fwrite ($DosyaOlustur, "<CEVAPLAR>\n");
		fclose ($DosyaOlustur); 
	}
	elseif (!is_writable($dosyaAdi))
	{
		# Tamam, dosya var; peki yazılabiliyor mu? Buraya gelmişse yazılamıyordur
		# İzinlerini değiştirmeye çalış:
		@chmod(0755, $dosyaAdi) or
		die ('<p class="KayitAlHata">Benim bu dosyaya yazma şansım yok. İzinler mi yetersiz ne<br /><code>'.$dosyaAdi.'</code> isimli dosyayı bi kontrol ediver</p>');
	}

if ($_POST['cevap']!='' | isset($_POST['Tarih'])) {
  $zaman=date("d.m.Y", time()).' Saat: '.date("G.i", time());
  $dogruluk=0;

	$konum1a=stripos($_POST['cevap'],'Aral');
	$konum1b=stripos($_POST['cevap'],'12');
	
	$konum2a=stripos($_POST['cevap'],'31');
  
	$konum3a=stripos($_POST['cevap'],'Ocak');
	$konum3b=stripos($_POST['cevap'],'yılbaşı');
	$konum3c=stripos($_POST['cevap'],'YILBAŞI');
	$konum3d=stripos($_POST['cevap'],'yilbasi');
  $konum3e=stripos($_POST['cevap'],' 1');
  $konum3f=stripos($_POST['cevap'],'01');

  $konum4a=stripos($_POST['cevap'],'18');
  $konum4b=stripos($_POST['cevap'],'19');
  $konum4c=stripos($_POST['cevap'],'20');
  $konum4d=stripos($_POST['cevap'],'21');
 
	$konum5a=stripos($_POST['cevap'],'doğ');
	$konum5b=stripos($_POST['cevap'],'doĞ');
	$konum5c=stripos($_POST['cevap'],'dog');
	$konum5d=stripos($_POST['cevap'],'yaşgünü');
	$konum5e=stripos($_POST['cevap'],'yasgunu');
	$konum5f=stripos($_POST['cevap'],'YAŞGÜNÜ');
	$konum5g=stripos($_POST['cevap'],'yaş günü');
	$konum5h=stripos($_POST['cevap'],'yas gunu');
	$konum5i=stripos($_POST['cevap'],'YAŞ GÜNÜ');
	
	$x1=0; $x2=0; $x3=0; $x4=0; $x5=0;
	
	if ($konum1a !== false | $konum1b !== false) $x1=1;
	if ($konum2a !== false) $x2=1;
	if ($konum3a !== false | $konum3b !== false | $konum3c !== false | $konum3d !== false | $konum3e !== false | $konum3f !== false) $x3=1;
	if ($konum4a !== false | $konum4b !== false | $konum4c !== false | $konum4d !== false) $x4=1;
	if ($konum5a !== false | $konum5b !== false | $konum5c !== false | $konum5d !== false | $konum5e !== false | $konum5f !== false | $konum5g !== false | $konum5h !== false | $konum5i !== false) $x5=1;

  if ($x1 + $x2 + $x3 + $x4 + $x5 > 2 | isset($_POST['Tarih'])) {
     // Kayıt alanı
   	 echo		'<fieldset class="TarihAl">';
   	 echo 			'<legend>Cevabınızın kesin değerlendirilebilmesi için tarihleri gün/ay/yıl olarak <b>rakamlarla</b> aşağıya giriniz:</legend>';
   	 echo 			'<form id="Tarihler" action="bilmece_2010_03.php" method="post">';
   	 echo 				'<table>';
   	 echo 					'<tr>';
   	 echo 						'<td>Doğum tarihi: </td>';
	   echo 						'<td><input class="VeriGirisi" size=1 type="text" id="DogumGunu" name="DogumGunu" value=""  /></td><td>/</td>';
	   echo 						'<td><input class="VeriGirisi" size=1 type="text" id="DogumAyi" name="DogumAyi" value=""  /></td><td>/</td>';
	   echo 						'<td><input class="VeriGirisi" size=1 type="text" id="DogumYili" name="DogumYili" value=""  /></td>';
	   echo 					'</tr>';
	   echo 					'<tr>';
	   echo 						'<td>Bu sözü söyleme tarihi: </td>';
	   echo 						'<td><input class="VeriGirisi" size=1 type="text" id="SoylemGunu" name="SoylemGunu" value=""  /></td><td>/</td>';
	   echo 						'<td><input class="VeriGirisi" size=1 type="text" id="SoylemAyi" name="SoylemAyi" value=""  /></td><td>/</td>';
	   echo 						'<td><input class="VeriGirisi" size=1 type="text" id="SoylemYili" name="SoylemYili" value=""  /></td>';
	   echo 					'</tr>';
	   echo 				'</table>';
     echo '        </br><input type="submit" name="Tarih" value="Tarihleri Gönder"/></p>';
	   echo 			'</form>';
	   echo 		'</fieldset>';
  }
  else echo '<p><font size="3" color="#FF0000">Beklenen cevap bu değil.</font></p>';
  
	$DosyaNo = fopen($dosyaAdi,'a') or die ('Daha dosyayı açamıyorum arkadaş<br>');
	$toplamliste = '';
	$toplamliste .= "  <CEVAP>\n";
	$toplamliste .= "    <Zaman>".$zaman."</Zaman>\n";
	$toplamliste .= "    <Dogruluk>".$dogruluk."</Dogruluk>\n";
	$toplamliste .= "    <Metin>".$_POST['cevap']."</Metin>\n";
	$toplamliste .= "  </CEVAP>\n";
	fwrite($DosyaNo,$toplamliste);
	fclose($DosyaNo);
}
     if (isset($_POST['Tarih'])) {
        $DogumGunu = $_POST['DogumGunu']; $DogumAyi = $_POST['DogumAyi']; $DogumYili = $_POST['DogumYili'];
        $SoylemGunu = $_POST['SoylemGunu']; $SoylemAyi = $_POST['SoylemAyi']; $SoylemYili = $_POST['SoylemYili'];
        if ( $DogumGunu == 31 & $DogumAyi == 12 & $SoylemGunu == 1 & $SoylemAyi == 1 & ($SoylemYili - $DogumYili) == 20 ) {
           echo '<p><font size="6" color="#008000">TEBRİKLER! Bildiniz.</br>';
           echo "Doğumgünü 31 Aralık'tır ve bu sözü 19. yaş gününün ertesi günü (1 Ocak'ta) söylemiştir.</font></p>";
           $tim = time()+0*3600; # Sunucu ile aradaki 0 saatlik fark
           $zaman=date("d.m.Y", $tim).' Saat: '.date("G.i", $tim);
           $DosyaNo2 = fopen($buDizin.'/'.'zaman2010_03.txt','a') or die ('Daha dosyayı açamıyorum arkadaş<br>');
           fwrite($DosyaNo2,$zaman."\n");
           fclose($DosyaNo2);

           }
        else if ( $DogumGunu == 31 & $DogumAyi == 12 & $SoylemGunu == 1 & $SoylemAyi == 1 ) {
           echo '<p><font size="4" color="#FF9900">Yaklaştınız, fakat bilemediniz. Yıllara dikkat.</br>';
           }
        else echo('<p><font size="3" color="#FF0000">Maalesef bilemediniz.</font></p>');
     }

?>

<?php
  $zaman=time();
  if ($zaman > mktime(0,0,0,4,1,2010)) {
     echo '<form action="" method="post">';
     echo '<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>';
     echo '</form>';

     if (isset($_POST['Goster'])) {
        $zaman=time()+8*3600+0; $dakka=date("i",$zaman);
        if (floor($dakka/3)*3==$dakka) {echo "Doğumgünü 31 Aralık'tır ve bu sözü 19. yaş gününün ertesi günü (1 Ocak'ta) söylemiştir.";}
        else echo "</br>Saatin yalnız 3'ün tam katı dakikalarında cevabı görebilirsiniz. Şu anda sunucuya göre Türkiye saati: ".date("G.i",$zaman);
     }
  }
?>
 </body>
</html>