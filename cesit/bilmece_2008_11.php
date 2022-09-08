<html>
 <head>
  <title>AYIN BİLMECESİ</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
 Size bir soru. Çiğ bir yumurta nasıl soyulur? Ama hiç akıtmadan.
<p>Cevabınızı aşağıya yazınız. Cevabınız hemen değerlendirilip doğru olup olmadığı bildirilecektir.</p>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevabı gönder"/></p>
</form>

<?php 
if ($_POST['cevap']!='') {
	$konum1=stripos($_POST['cevap'],'dondu');
	$konum2=stripos($_POST['cevap'],'donar');
	$konum3=stripos($_POST['cevap'],'donmuş');
	$konum4=stripos($_POST['cevap'],'donacak');
	$konum5=stripos($_POST['cevap'],'donsa');
	$konum6=stripos($_POST['cevap'],'buz');
	$konum7=stripos($_POST['cevap'],'soğu');
	if ($konum1 === false & $konum2 === false & $konum3 === false & $konum4 === false & $konum5 === false & $konum6 === false & $konum7 === false) {
   	if (stripos($_POST['cevap'],'sirke') === false & stripos($_POST['cevap'],'limon') === false & stripos($_POST['cevap'],'asit') === false & stripos($_POST['cevap'],'asid') === false) {
      if (stripos($_POST['cevap'],'el') === 0 & strlen($_POST['cevap']) < 9) {echo '<font size="3" color="#FF0000">Aman ne komik! ';}
        echo '<font size="3" color="#FF0000">Beklenen cevap bu değil. Tartışmaya yer bırakmayacak kadar anlamca net bir cevap isteniyor. Yapamayacağınız şeyler de doğru sayılmıyor.</font>';
      }
    else {
      echo "\n Sirke, limon veya asit belki dış kabuğu eritebilir ama iç zar kalır. Zaten onu da eritmeye başlasa hemen akar. Üstelik bu çözüm günler sürer. Daha iyi bir çözüm isteniyor.";
   	}
  }
	else {
  	echo '<font size="6" color="#008000">TEBRİKLER! Bildiniz. Dondurursanız soyabilirsiniz.</font>';
		// multiple recipients
    $to  = 'A.Sevinc@kku.edu.tr' . ', '; // note the comma
    $to .= 'as@atasevinc.net';

    // subject
    $subject = 'Bilmece doğru cevaplandı';

    // message
    $message = htmlspecialchars($_POST['cevap'], ENT_QUOTES);
    $headers .= 'From: Ziyaretçi <as@AtaSevinc.net>';

    // Mail it
    mail($to, $subject, $message, $headers);
	}

}
?>
 </body>
</html>