<html>
 <head>
  <title>AYIN B�LMECES�</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
 Size bir soru. �i� bir yumurta nas�l soyulur? Ama hi� ak�tmadan.
<p>Cevab�n�z� a�a��ya yaz�n�z. Cevab�n�z hemen de�erlendirilip do�ru olup olmad��� bildirilecektir.</p>
<form action="" method="post">
<input type="text" name="cevap" size="100" />
<p><input type="submit" value="Cevab� g�nder"/></p>
</form>

<?php 
if ($_POST['cevap']!='') {
	$konum1=stripos($_POST['cevap'],'dondu');
	$konum2=stripos($_POST['cevap'],'donar');
	$konum3=stripos($_POST['cevap'],'donmu�');
	$konum4=stripos($_POST['cevap'],'donacak');
	$konum5=stripos($_POST['cevap'],'donsa');
	$konum6=stripos($_POST['cevap'],'buz');
	$konum7=stripos($_POST['cevap'],'so�u');
	if ($konum1 === false & $konum2 === false & $konum3 === false & $konum4 === false & $konum5 === false & $konum6 === false & $konum7 === false) {
   	if (stripos($_POST['cevap'],'sirke') === false & stripos($_POST['cevap'],'limon') === false & stripos($_POST['cevap'],'asit') === false & stripos($_POST['cevap'],'asid') === false) {
      if (stripos($_POST['cevap'],'el') === 0 & strlen($_POST['cevap']) < 9) {echo '<font size="3" color="#FF0000">Aman ne komik! ';}
        echo '<font size="3" color="#FF0000">Beklenen cevap bu de�il. Tart��maya yer b�rakmayacak kadar anlamca net bir cevap isteniyor. Yapamayaca��n�z �eyler de do�ru say�lm�yor.</font>';
      }
    else {
      echo "\n Sirke, limon veya asit belki d�� kabu�u eritebilir ama i� zar kal�r. Zaten onu da eritmeye ba�lasa hemen akar. �stelik bu ��z�m g�nler s�rer. Daha iyi bir ��z�m isteniyor.";
   	}
  }
	else {
  	echo '<font size="6" color="#008000">TEBR�KLER! Bildiniz. Dondurursan�z soyabilirsiniz.</font>';
		// multiple recipients
    $to  = 'A.Sevinc@kku.edu.tr' . ', '; // note the comma
    $to .= 'as@atasevinc.net';

    // subject
    $subject = 'Bilmece do�ru cevapland�';

    // message
    $message = htmlspecialchars($_POST['cevap'], ENT_QUOTES);
    $headers .= 'From: Ziyaret�i <as@AtaSevinc.net>';

    // Mail it
    mail($to, $subject, $message, $headers);
	}

}
?>
 </body>
</html>