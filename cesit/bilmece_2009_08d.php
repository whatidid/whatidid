<html>
 <head>
  <title>AYIN B�LMECES�</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
<p>Bulundu�unuz odan�n tavan y�ksekli�i 2 metreden fazla ve odada elektrik �ebesinden �ekilen g�� 3000 Watt'tan az ise
bu odada sakl� en az 10 litre su vard�r. Bu su odan�n neresindedir?
</p><br>Cevab�n�z� a�a��ya yaz�p g�nderiniz. Hemen de�erlendirilerek do�ru olup olmad��� s�ylenecektir.<br><br>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevab� g�nder"/>  (Cevaplar kaydedilmektedir.)</p>
</form>

<?php
$dosyaAdi = "bilmecevap_2009_08.xml";
list ($sunucuda) = explode ($_SERVER['SCRIPT_NAME'], $_SERVER['PATH_TRANSLATED']);
list (, $anaDizineGore) = explode ($sunucuda, dirname(__FILE__));
$buDizin = dirname(__FILE__);
$dosyaAdi = $buDizin.'/'.$dosyaAdi;
	if (!file_exists($dosyaAdi))
	{
		$DosyaOlustur = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Olu�turulam�yor</p>");
		fwrite ($DosyaOlustur, '<?xml version="1.0" encoding="Windows-1254"?>');
		fwrite ($DosyaOlustur, "\n");
		fwrite ($DosyaOlustur, '<?xml-stylesheet type="text/xsl" href="bilmece_2009_02.xsl" ?>');
		fwrite ($DosyaOlustur, "\n");
		fwrite ($DosyaOlustur, "<CEVAPLAR>\n");
		fclose ($DosyaOlustur); 
	}
	elseif (!is_writable($dosyaAdi))
	{
		# Tamam, dosya var; peki yaz�labiliyor mu? Buraya gelmi�se yaz�lam�yordur
		# �zinlerini de�i�tirmeye �al��:
		@chmod(0755, $dosyaAdi) or
		die ('<p class="KayitAlHata">Benim bu dosyaya yazma �ans�m yok. �zinler mi yetersiz ne<br /><code>'.$dosyaAdi.'</code> isimli dosyay� bi kontrol ediver</p>');
	} 

if ($_POST['cevap']!='') {
  $zaman=date("d.m.Y", time()).' Saat: '.date("G.i", time());
  $dogruluk=0;

	$konum1a=stripos($_POST['cevap'],'v�cud');
	$konum1b=stripos($_POST['cevap'],'v�cut');
	$konum1c=stripos($_POST['cevap'],'b�nye');
  $konum1d=stripos($_POST['cevap'],'ORGAN�ZMA');
  $konum1e=stripos($_POST['cevap'],'ORGANiZMA');

	$konum2a=stripos($_POST['cevap'],'buhar');
	$konum2b=stripos($_POST['cevap'],'hava');
	$konum2c=stripos($_POST['cevap'],'gaz');
	$konum2d=stripos($_POST['cevap'],'nem');

	$konum3a=stripos($_POST['cevap'],'kendi');
	$konum3b=stripos($_POST['cevap'],'kend�');
	$konum3c=stripos($_POST['cevap'],'i�im');
	$konum3d=stripos($_POST['cevap'],'��im');
	$konum3e=stripos($_POST['cevap'],'i��m');
	$konum3f=stripos($_POST['cevap'],'���m');
	
	$konum4a=stripos($_POST['cevap'],'duvar');
  $konum4b=stripos($_POST['cevap'],'beton');

	//$konum5=stripos($_POST['cevap'],'do�u');

	//$konum10=stripos($_POST['cevap'],'kutup');
	
	$x1=0; $x2=0; $x3=0; //$x4=0; $x5=0; $x10=0;
	
	if ($konum1a !== false | $konum1b !== false | $konum1c !== false | $konum1d !== false | $konum1e !== false) $x1=1;
	if ($konum2a !== false | $konum2b !== false | $konum2c !== false | $konum2d !== false) $x2=1;
	if ($konum3a !== false | $konum3b !== false | $konum3c !== false | $konum3d !== false | $konum3e !== false | $konum3f !== false) $x3=1;
	if ($konum4a !== false | $konum4b !== false) $x4=1;
	//if ($konum5 !== false) $x5=1;
	//if ($konum10 !== false) $x10=1;

  //$isabet=$x1+$x2+$x3+$x4+$x5;
  echo date("G.i",time());
  echo '<br>';
  if ($x1 === 1) {
    echo '<font size="6" color="#008000">TEBR�KLER! Bildiniz. <br>Bu su v�cudunuzda sakl�d�r. V�cut a��rl���n�z�n yakla��k 2/3\'� sudur.</font>
    <br>(Bu bilmeceyi okuyabilecek ya�ta oldu�unuza g�re muhtemelen 15 kg\'dan daha a��rs�n�z.
    <br>Sorudaki tavan y�ksekli�i ve 3000Watt sadece �a��rtmacad�r.<br>�pucundaki kap� ve pencerelerin kapal� olmas� ise 
    arkada��n�z�n barda�� size verirken oda i�inde oldu�unu garantilemek i�indir.
    <br>Bir bardak su getirilmesi ise sadece odada ikinci bir ki�inin bulunmas� i�in bahanedir.
    <br>�kinizin toplam 45 kg\'dan daha a��r oldu�unuz varsay�lm��t�r.)<br>';
    $dogruluk = 1;
  }
  else {
    if ($x2 === 1) {
      echo 'Hay�r, s�v� haldeki su soruluyor.<br>';
      $dogruluk =0;
    }
	  if ($x4 === 1) {
      echo 'Beton i�inde o kadar su yoktur ama olsa bile duvarlar� odan�n i�inde saym�yoruz.<br>';
      $dogruluk =0;
    }
    if ($x3 === 1) {
       echo '<font size="4" color="#FF8000">Yakla�m�� olabilirsiniz ama l�tfen cevab�n�z� daha anla��l�r ifade ediniz.</font><br>';
      $dogruluk =0.5;
    }
    else echo '<br><font size="3" color="#FF0000">Beklenen cevap bu de�il.</font>';
  }
	
	$DosyaNo = fopen($dosyaAdi,'a') or die ('Daha dosyay� a�am�yorum arkada�<br>');
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
<p><form action="" method="post">
<input type="text" name="ipucu" size="1" />
<input type="submit" value="�PUCU G�STER"/>
</form></p>
<?php
if ($_POST['ipucu']!='' | $_POST['ipucu']==='') {
echo 'Bir arkada��n�zdan bir bardak su getirmesini isteyiniz. Arkada��n�zdan bu suyu al�rken odan�n t�m kap� ve pencereleri kapal�ysa odadaki su en az 30 litredir.';
}
?>
<p><form action="" method="post">
<input type="text" name="ipucu2" size="1" />
<input type="submit" value="2. �PUCUNU G�STER"/>
</form></p>Dikkat: 2. ipucu cevaba �ok yak�n olup yaln�z sunucu saatine g�re saat ba�lar�ndan itibaren ilk 5 dakika i�inde g�r�lebilir.</br></br>
<?php
if ($_POST['ipucu2']!='' | $_POST['ipucu2']==='') {
echo 'Ne ararsan kendinde ara!';
}
?>