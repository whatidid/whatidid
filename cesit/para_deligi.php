<html>
 <head>
  <title>Para deliği</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
<p>Bu soru anonim alıntıdır:</p>
<p>Bir kâğıttaki 25 kuruş büyüklüğündeki bir delikten 1 TL nasıl geçirilir? Kâğıdı hiç yırtmadan.</p>
<form action="" method="post">
<p><input type="submit" name="ipucu" value="İPUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   echo "<p>Delik daireseldir.</br>Bazı kâğıtlar kolayca yırtılabilir ama çoğu kâğıtla yırtmadan mümkün.</p>";
}
?>
<?php
  $zaman=time();
  if ($zaman > mktime(0,0,0,6,1,2010)) {
     echo '<form action="" method="post">';
     echo '<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>';
     echo '</form>';

     if (isset($_POST['Goster'])) {
        $zaman=time()+8*3600; $dakka=date("i",$zaman);
        if (floor($dakka/3)*3==$dakka) {
          echo "Kâğıdı deliğin çap kısmından ikiye katlayınız</br>";
          echo "1 TL'yı katlı kâğıdın iç kısmından bu delikten kısmen çıkacak pozisyona getiriniz.</br>";
          echo "25 kuruş büyüklüğündeki dairesel deliğin yarı çevresini 1 TL'nın yaklaşık çapı olacak şekilde kâğıdı bükünüz.</br>";
          echo "Böylece 1 TL kolayca delikten geçecektir.</br></br>";
        }
        else echo "</br>Saatin yalnız 3'ün tam katı dakikalarında cevabı görebilirsiniz. Şu anda sunucuya göre Türkiye saati: ".date("G.i",$zaman);
     }
  }
?>

 </body>
</html>