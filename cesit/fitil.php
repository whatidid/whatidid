<html>
 <head>
  <title>Fitil fitil</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
<p>Bu soru <a href="http://www.matematikdunyasi.org">Matematik Dünyası Dergisi</a>'nden alıntıdır:</p>
<p>Elinizde her biri bir saatte yanan iki adet fitil var. Ancak fitillerin yanma hızları sabit değil ve hangi 
kısmında hangi hızla yanacağını bilmiyoruz. Belki yarısı 5, diğer yarısı 55 dakikada yanar, belki ortada hızlı yanar,
elimizde hiç bir işaret yok. Sadece birer saatte yanacağını biliyoruz.</p>
<p>Bu iki fitili nasıl yakarsak 45 dakikayı ölçebiliriz?</p>
<form action="" method="post">
<p><input type="submit" name="ipucu" value="İPUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   echo "<p>Fitillerin iki ucunu da yakma imkânı var.</p>";
}
?>
<?php
  $zaman=time();
  if ($zaman > mktime(0,0,0,5,1,2010)) {
     echo '<form action="" method="post">';
     echo '<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>';
     echo '</form>';

     if (isset($_POST['Goster'])) {
        $zaman=time()+0*3600+33; $dakka=date("i",$zaman);
        if (floor($dakka/3)*3==$dakka) {
          echo "Başlangıçta 1. fitil iki uçtan, 2. fitil ise bir uçtan yakılır.</br>";
          echo "Fitil iki uçtan yakıldığında normaldekinin (tek uçtan yakıldığı durumdakinin) yarısı kadar zamanda tükenir.</br>";
          echo "1. fitil tükendiğinde 30 dakika geçmiş olur. Bu anda 2. fitilin diğer ucu da yakılır.</br>";
          echo "Böylece 2. fitilin kalan 30 dakikalık kısmı, iki ucu da yanmaya başlayınca 15 dakika sonra tükenir.</br>";
          echo "Toplamda 30+15=45 dakika geçtiği anlaşılır.</br>";
        }
        else echo "</br>Saatin yalnız 3'ün tam katı dakikalarında cevabı görebilirsiniz. Şu anda sunucuya göre Türkiye saati: ".date("G.i",$zaman);
     }
  }
?>

 </body>
</html>