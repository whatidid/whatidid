<html>
 <head>
  <title>İlaç denemesi</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
Bir ilacın denenmesi amacıyla 3 gönüllü bir öğlen vakti laboratuvara çağrılarak kendilerine birer kutu ilaç teslim ediliyor. Herbir gönüllünün bir hafta süreyle her sabah bir tablet bu ilaçtan alması ve tam bir hafta sonra aynı yere gelmesi soyleniyor.<br>
Bu üç gönüllü bu talimata uyarak ellerinde ilacın kalan kısmıyla bir hafta sonra yine öğlen vakti laboratuvara geliyorlar. Fakat araştırmacılar denemenin tam bir fiyaskoyla sonuçlandığını görüyorlar. Çünkü gönüllülerden birisi 6, birisi 7, diğeri de 8 tablet kullanmıştır. Halbuki hepsi de talimatlara uymuştur.<br>
Bu farklılık neden kaynaklanmış olabilir?
<p>Cevabınızı aşağıya yazınız. Cevabınız hemen değerlendirilip doğru olup olmadığı bildirilecektir.</p>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevabı gönder"/></p>
</form>

<?php
$dosyaAdi = "bilmecevap_2009_02.xml";
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

	$konum1a=stripos($_POST['cevap'],'dünya');
	$konum1b=stripos($_POST['cevap'],'yer');
	$konum1c=stripos($_POST['cevap'],'arz');

	$konum2a=stripos($_POST['cevap'],'etrafı');
	$konum2b=stripos($_POST['cevap'],'çevresi');
	$konum2c=stripos($_POST['cevap'],'dünya turu');

	$konum3a=stripos($_POST['cevap'],'tur');
	$konum3b=stripos($_POST['cevap'],'dön');
	$konum3c=stripos($_POST['cevap'],'yol');
	$konum3d=stripos($_POST['cevap'],'seyahat');

	$konum4=stripos($_POST['cevap'],'batı');

	$konum5=stripos($_POST['cevap'],'doğu');

	$konum10=stripos($_POST['cevap'],'kutup');
	
	$x1=0; $x2=0; $x3=0; $x4=0; $x5=0; $x10=0;
	
	if ($konum1a !== false | $konum1b !== false | $konum1c !== false) $x1=1;
	if ($konum2a !== false | $konum2b !== false | $konum2c !== false) $x2=1;
	if ($konum3a !== false | $konum3b !== false | $konum3c !== false | $konum3d !== false) $x3=1;
	if ($konum4 !== false) $x4=1;
	if ($konum5 !== false) $x5=1;
	if ($konum10 !== false) $x10=1;

  $isabet=$x1+$x2+$x3+$x4+$x5;
  if ($isabet === 5) {
    echo '<font size="6" color="#008000">TEBRİKLER! Bildiniz. <br>Bir hafta içinde 1. gönüllü hep batıya doğru, 3. gönüllü ise hep doğuya doğru birer Dünya turu yapmıştır.</font><font size="5" color="#008000"><br>Böylece 168 saatte (tam 7 normal günde) 1. gönüllü 6,  3. gönüllü ise 8 güneş günü yaşamıştır.<br>2. gönüllü ise dünya turu yapmamıştır.</font>';
    $dogruluk = 1;
  }
  else if ($isabet > 2) {
    echo '<font size="5" color="#FF9900">Yaklaştınız ama beklenen cevap bu değil.</font>';
    $dogruluk =0.5;
  }
	else if ($x10 === 1) {
    echo '<font size="4" color="#FF9900">Kutuplar karışık bir durum. Orada sabah günler sürer. Beklenen cevap bu değil.</font>';
    $dogruluk =0.2;
  }
	else echo '<font size="3" color="#FF0000">Beklenen cevap bu değil</font>';

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
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
echo '<br>Bir hafta içinde 1. gönüllü hep batıya doğru, 3. gönüllü ise hep doğuya doğru birer Dünya turu yapmıştır.<br>Böylece 168 saatte (tam 7 normal günde) 1. gönüllü 6,  3. gönüllü ise 8 güneş günü yaşamıştır.<br>2. gönüllü ise dünya turu yapmamıştır.<p>Hatta Magellan ekibi ilk Dünya turunu tamamlayıp ülkelerine döndüklerinde Pazar ayinlerini yanlış günde yaptıkları söylenmiştir.';
}
?>
 </body>
</html>