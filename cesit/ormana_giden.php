<html>
 <head>
  <title>Ormana giden</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000"> 
<p>Bu soru <a href="http://www.matematikdunyasi.org">Matematik Dünyası Dergisi</a>'nden alıntıdır:</p>
<p>Adamın biri <abbr title="Olabildiğince doğrusal">
<font color="#008000">dosdoğru</font></abbr> ormana gidiyor. Oraya varınca öleceğini biliyor. Sırt çantasında olması en muhtemel şey nedir?</p>



<br>Cevabınızı aşağıya yazıp gönderiniz. Hemen değerlendirilerek doğru olup olmadığı söylenecektir.<br><br>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevabı gönder"/>  (Cevaplar kaydedilmektedir.)</p>
</form>

<?php
$dosyaAdi = "bilmecevap_2010_02.xml";
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

if ($_POST['cevap']!='') {
  $zaman=date("d.m.Y", time()).' Saat: '.date("G.i", time());
  $dogruluk=0;

	$konum1a=stripos($_POST['cevap'],'paraşüt');
	$konum1b=stripos($_POST['cevap'],'paraŞüt');
	$konum1c=stripos($_POST['cevap'],'paraŞÜt');
  $konum1d=stripos($_POST['cevap'],'paraşÜt');
  $konum1e=stripos($_POST['cevap'],'parasut');

	$konum2a=stripos($_POST['cevap'],'buhar');
	$konum2b=stripos($_POST['cevap'],'hava');
	$konum2c=stripos($_POST['cevap'],'gaz');
	$konum2d=stripos($_POST['cevap'],'nem');

	$konum3a=stripos($_POST['cevap'],'silah');
	$konum3b=stripos($_POST['cevap'],'sİlah');
	$konum3c=stripos($_POST['cevap'],'bıçak');
	$konum3d=stripos($_POST['cevap'],'tabanca');
	$konum3e=stripos($_POST['cevap'],'patlayıcı');
	$konum3f=stripos($_POST['cevap'],'bomba');
	
	$x1=0; $x2=0; $x3=0;
	
	if ($konum1a !== false | $konum1b !== false | $konum1c !== false | $konum1d !== false | $konum1e !== false) $x1=1;
	if ($konum2a !== false | $konum2b !== false | $konum2c !== false | $konum2d !== false) $x2=1;
	if ($konum3a !== false | $konum3b !== false | $konum3c !== false | $konum3d !== false | $konum3e !== false | $konum3f !== false) $x3=1;
	if ($konum4a !== false | $konum4b !== false) $x4=1;

  echo '<br>';
  if ($x1 === 1) {
    echo '<font size="6" color="#008000">TEBRİKLER! Bildiniz. <br>Açılmayan paraşüt!</font>';
    $dogruluk = 1;
  }
  else {
    if ($x2 === 1) {
      echo '<font size="3" color="#FF0000">Bu ciddi bir cevap değil. Gayet ciddi ve mantıklı bir cevap bekleniyor.</font><br>';
      $dogruluk =-1;
    }
    if ($x3 === 1) {
       echo '<font size="3" color="#FF0000">Adam savaşa gitmiyor. Beklenen cevap bu değil.</font><br>';
      $dogruluk =0.1;
    }
    else echo '<font size="3" color="#FF0000">Beklenen cevap bu değil.</font>';
  }
	
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
?>





<form action="" method="post">
<p><input type="submit" name="ipucu" value="İPUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   echo "<p>Ormana giden en doğrusal yol hangisidir?</p>";
}
?>
<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   $zaman=time()+8*3600+0; $dakka=date("i",$zaman);
   if (floor($dakka/5)*5==$dakka) {echo "Açılmayan paraşüt!";}
   else echo "</br>Saatin yalnız 5'in tam katı dakikalarında cevabı görebilirsiniz. Şu anda sunucuya göre Türkiye saati: ".date("G.i",$zaman);
}
?>
 </body>
</html>