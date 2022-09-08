<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body bgcolor="#33CCFF">
 
<p>Çiğ bir yumurta nasıl soyulur? Ama hiç akıtmadan.</p>
<p>Cevabınızı aşağıya yazınız. Cevabınız hemen değerlendirilip doğru olup olmadığı bildirilecektir.</p>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevabı gönder"/></p>
</form>

<?php
$dosyaAdi = "bilmecevap_2009_01.xml";
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
  $zaman=date("d.m.Y", time()+8*3600).' Saat: '.date("G.i", time()+8*3600);
  $dogruluk=0;

	$konum1=stripos($_POST['cevap'],'dondu');
	$konum2=stripos($_POST['cevap'],'donar');
	$konum3=stripos($_POST['cevap'],'donmuş');
	$konum4=stripos($_POST['cevap'],'donacak');
	$konum5=stripos($_POST['cevap'],'donsa');
	$konum6=stripos($_POST['cevap'],'buz');
	$konum7=stripos($_POST['cevap'],'soğu');
	if ($konum1 === false & $konum2 === false & $konum3 === false & $konum4 === false & $konum5 === false & $konum6 === false & $konum7 === false) {
   	if (stripos($_POST['cevap'],'sirke') === false & stripos($_POST['cevap'],'limon') === false & stripos($_POST['cevap'],'asit') === false & stripos($_POST['cevap'],'asid') === false) {
      if (stripos($_POST['cevap'],'el') === 0 & strlen($_POST['cevap']) < 9) {echo '<font size="3" color="#FF0000">Aman ne komik! ';$dogruluk = -1;}
      if (stripos($_POST['cevap'],'kulucka') === false & stripos($_POST['cevap'],'kuluçka') === false & stripos($_POST['cevap'],'civciv') === false)
        echo '<font size="3" color="#FF0000">Beklenen cevap bu değil. Tartışmaya yer bırakmayacak kadar anlamca net bir cevap isteniyor. Yapamayacağınız şeyler de doğru sayılmıyor.</font>';
      else { $dogruluk = 2; echo '<font size="6" color="#008000">Bu çok özel bir cevap. Her ne kadar beklenen cevap bu olmasa da kuluçka süresi sonunda civciv çıkması yumurtanın bir anlamda pişirilmeden ve akıtılmadan soyulması sayılabilir. Bu farklı cevabınız için tebrikler. Fakat bu durumda yumurtayı soymuş olan siz değil civciv olacaktır. Ayrıca yumurta yumurta olmaktan çıkacaktır. Mesela artık yumurtayı yumurta olarak yiyemezsiniz. Bu yüzden beklenen cevap bu değildir.';}
      }
    else {
      echo "\n Sirke, limon veya asit belki dış kabuğu eritebilir ama iç zar kalır. Zaten onu da eritmeye başlasa hemen akar. Üstelik bu çözüm günler sürer. Daha iyi bir çözüm isteniyor.";
      $dogruluk = 0.5;
   	}
  }
	else {
  	echo '<font size="6" color="#008000">TEBRİKLER! Bildiniz. Dondurursanız soyabilirsiniz.</font>';
		// multiple recipients
    $to  = 'A.Sevinc@kku.edu.tr' . ', '; // note the comma
    $to .= 'as@atasevinc.net';

    // subject
    $subject = 'Bilmece doğru cevaplandı';
    $dogruluk = 1;

    // message
    $message = htmlspecialchars($_POST['cevap'], ENT_QUOTES);
    $headers .= 'From: Ziyaretçi <as@AtaSevinc.net>';

    // Mail it
    mail($to, $subject, $message, $headers);
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
 </body>
</html>