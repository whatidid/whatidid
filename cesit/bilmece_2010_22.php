<html>
 <head>
  <title>AYIN B�LMECES�</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
03.02.2010 
<p>Bu ayki soru da <a href="http://www.matematikdunyasi.org">Matematik D�nyas� Dergisi</a>'nden al�nt�d�r:</p>
<p>Adam�n biri <abbr title="Olabildi�ince do�rusal">
<font color="#008000">dosdo�ru</font></abbr> ormana gidiyor. Oraya var�nca �lece�ini biliyor. S�rt �antas�nda olmas� en muhtemel �ey nedir?</p>



<br>Cevab�n�z� a�a��ya yaz�p g�nderiniz. Hemen de�erlendirilerek do�ru olup olmad��� s�ylenecektir.<br><br>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevab� g�nder"/>  (Cevaplar kaydedilmektedir.)</p>
</form>

<?php
$dosyaAdi = "bilmecevap_2010_02.xml";
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

	$konum1a=stripos($_POST['cevap'],'para��t');
	$konum1b=stripos($_POST['cevap'],'para��t');
	$konum1c=stripos($_POST['cevap'],'para��t');
  $konum1d=stripos($_POST['cevap'],'para��t');
  $konum1e=stripos($_POST['cevap'],'parasut');

	$konum2a=stripos($_POST['cevap'],'buhar');
	$konum2b=stripos($_POST['cevap'],'hava');
	$konum2c=stripos($_POST['cevap'],'gaz');
	$konum2d=stripos($_POST['cevap'],'nem');

	$konum3a=stripos($_POST['cevap'],'silah');
	$konum3b=stripos($_POST['cevap'],'s�lah');
	$konum3c=stripos($_POST['cevap'],'b��ak');
	$konum3d=stripos($_POST['cevap'],'tabanca');
	$konum3e=stripos($_POST['cevap'],'patlay�c�');
	$konum3f=stripos($_POST['cevap'],'bomba');
	
	$x1=0; $x2=0; $x3=0;
	
	if ($konum1a !== false | $konum1b !== false | $konum1c !== false | $konum1d !== false | $konum1e !== false) $x1=1;
	if ($konum2a !== false | $konum2b !== false | $konum2c !== false | $konum2d !== false) $x2=1;
	if ($konum3a !== false | $konum3b !== false | $konum3c !== false | $konum3d !== false | $konum3e !== false | $konum3f !== false) $x3=1;
	if ($konum4a !== false | $konum4b !== false) $x4=1;

  echo '<br>';
  if ($x1 === 1) {
    echo '<font size="6" color="#008000">TEBR�KLER! Bildiniz. <br>A��lmayan para��t!</font>';
    $dogruluk = 1;
  }
  else {
    if ($x2 === 1) {
      echo '<font size="3" color="#FF0000">Bu ciddi bir cevap de�il. Gayet ciddi ve mant�kl� bir cevap bekleniyor.</font><br>';
      $dogruluk =-1;
    }
    if ($x3 === 1) {
       echo '<font size="3" color="#FF0000">Adam sava�a gitmiyor. Beklenen cevap bu de�il.</font><br>';
      $dogruluk =0.1;
    }
    else echo '<font size="3" color="#FF0000">Beklenen cevap bu de�il.</font>';
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





<form action="" method="post">
<p><input type="submit" name="ipucu" value="�PUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   $zaman=time()+7*3600; $dakka=date("i",$zaman);
   if (floor($dakka/5)*5==$dakka) echo "<p>Ormana giden en do�rusal yol hangisidir?</p>";
   else echo 'Saatin yaln�z son rakam� 5 ve 0 olan dakikalar�nda ipucunu g�rebilirsiniz. �u anda sunucuya g�re T�rkiye saati: '.date("G.i",$zaman);
   echo "";
}
?>
<!--
<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevab� G�STER"/></p>
</form>
<?php
//if (isset($_POST['Goster'])) {
//   $zaman=time()+7*3600; $dakka=date("i",$zaman);
//   if (floor($dakka)/5)*5==$dakka) echo "A��lmayan para��t!";
//   else echo '</br>Saatin yaln�z 5''in tam kat� dakikalar�nda cevab� g�rebilirsiniz. �u anda sunucuya g�re T�rkiye saati: '.date("G.i",$zaman);
//}
?>
-->
 </body>
</html>