<html>
 <head>
  <title>Su nerede?</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
<p>Bulunduğunuz odanın tavan yüksekliği 2 metreden fazla ve odada elektrik şebesinden çekilen güç 3000 Watt'tan az ise
bu odada saklı en az 10 litre su vardır. Bu su odanın neresindedir?
</p><br>Cevabınızı aşağıya yazıp gönderiniz. Hemen değerlendirilerek doğru olup olmadığı söylenecektir.<br><br>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevabı gönder"/>  (Cevaplar kaydedilmektedir.)</p>
</form>

<?php
$dosyaAdi = "bilmecevap_2009_08.xml";
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

	$konum1a=stripos($_POST['cevap'],'vücud');
	$konum1b=stripos($_POST['cevap'],'vücut');
	$konum1c=stripos($_POST['cevap'],'bünye');
  $konum1d=stripos($_POST['cevap'],'ORGANİZMA');
  $konum1e=stripos($_POST['cevap'],'ORGANiZMA');

	$konum2a=stripos($_POST['cevap'],'buhar');
	$konum2b=stripos($_POST['cevap'],'hava');
	$konum2c=stripos($_POST['cevap'],'gaz');
	$konum2d=stripos($_POST['cevap'],'nem');

	$konum3a=stripos($_POST['cevap'],'kendi');
	$konum3b=stripos($_POST['cevap'],'kendİ');
	$konum3c=stripos($_POST['cevap'],'içim');
	$konum3d=stripos($_POST['cevap'],'İçim');
	$konum3e=stripos($_POST['cevap'],'içİm');
	$konum3f=stripos($_POST['cevap'],'İçİm');
	
	$konum4a=stripos($_POST['cevap'],'duvar');
  $konum4b=stripos($_POST['cevap'],'beton');
  $konum4c=stripos($_POST['cevap'],'tavan');
  $konum4d=stripos($_POST['cevap'],'taban');
  $konum4e=stripos($_POST['cevap'],'zemin');
  $konum4f=stripos($_POST['cevap'],'kapı');
  

	//$konum5=stripos($_POST['cevap'],'doğu');

	//$konum10=stripos($_POST['cevap'],'kutup');
	
	$x1=0; $x2=0; $x3=0; //$x4=0; $x5=0; $x10=0;
	
	if ($konum1a !== false | $konum1b !== false | $konum1c !== false | $konum1d !== false | $konum1e !== false) $x1=1;
	if ($konum2a !== false | $konum2b !== false | $konum2c !== false | $konum2d !== false) $x2=1;
	if ($konum3a !== false | $konum3b !== false | $konum3c !== false | $konum3d !== false | $konum3e !== false | $konum3f !== false) $x3=1;
	if ($konum4a !== false | $konum4b !== false | $konum4c !== false | $konum4d !== false | $konum4e !== false | $konum4f !== false) $x4=1;
	//if ($konum5 !== false) $x5=1;
	//if ($konum10 !== false) $x10=1;

  //$isabet=$x1+$x2+$x3+$x4+$x5;
  //echo date("G.i",time());
  echo '<br>';
  if ($x1 === 1) {
    echo '<font size="6" color="#008000">TEBRİKLER! Bildiniz. <br>Bu su vücudunuzda saklıdır. Vücut ağırlığınızın yaklaşık 2/3\'ü sudur.</font>
    <br>Ne demişler? "Ne ararsan kendinde ara!"<br>
    <br>İpucundaki kapı ve pencerelerin kapalı olması arkadaşınızın bardağı size verirken oda içinde olduğunu garantilemek içindir.
    <br>Bir bardak su getirilmesi ise sadece odada ikinci bir kişinin bulunması için bahanedir. Diğer koşullar şaşırtmacadır.';
    $dogruluk = 1;
  }
  else {
    if ($x2 === 1) {
      echo 'Hayır, sıvı haldeki su soruluyor.<br>';
      $dogruluk =0;
    }
	  if ($x4 === 1) {
      echo 'Beton veya ahşap içinde o kadar su yoktur ama olsa bile duvarları ve kapıları odanın içinde saymıyoruz.<br>';
      $dogruluk =0;
    }
    if ($x3 === 1) {
       echo '<font size="4" color="#FF8000">Yaklaşmış olabilirsiniz ama lütfen cevabınızı daha anlaşılır ifade ediniz.</font><br>';
      $dogruluk =0.5;
    }
    else echo '<br><font size="3" color="#FF0000">Beklenen cevap bu değil.</font>';
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
echo 'Bir arkadaşınızdan bir bardak su getirmesini isteyiniz. Arkadaşınızdan bu suyu alırken odanın tüm kapı ve pencereleri kapalıysa odadaki su en az 30 litredir.';
}
?>
<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/> (Cevap, saat başlarından itibaren ilk 5 dakika içinde alınabilir.)</p>
</form>
<?php
if (isset($_POST['Goster'])) {
  $zaman=time()+8*3600+0;
  if (date("i",$zaman)>=5) echo 'Şu anda sunucuya göre Türkiye saati: '.date("G.i",$zaman).'</br>Saat başlarından itibaren yalnız ilk 5 dakikada cevabı alabilirsiniz.';
  else echo 'Bu su vücudunuzda saklıdır. Vücut ağırlığınızın yaklaşık 2/3\'ü sudur.
    </br>Ne demişler? "Ne ararsan kendinde ara!"</br>
    </br>İpucundaki kapı ve pencerelerin kapalı olması arkadaşınızın bardağı size verirken oda içinde olduğunu garantilemek içindir.
    </br>Bir bardak su getirilmesi ise sadece odada ikinci bir kişinin bulunması için bahanedir. Diğer koşullar şaşırtmacadır.';
}
?>
