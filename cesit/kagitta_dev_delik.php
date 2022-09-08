<html>
 <head>
  <title>Kâğıtta dev delik</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
<p>Bu defa orijinal değil anonim ve kolay 
bir soru soruyorum. Fakat yine ilk bakışta 
imkânsız zannedilebilecek bir soru:</p>
<p>10cm x 10cm boyutlarında bir kâğıt parçasına öyle bir delik 
açınız ki içinden kendiniz geçebilin. Ancak herhangi bir kesiği veya yırtığı 
yapıştırmak vb bir yöntemle birleştirmek yok.</p>
<form action="" method="post">
<p><input type="submit" name="ipucu" value="İPUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   echo "<p>Evliya Çelebi'nin anlattığı bir hikayeye göre Fatih Sultan Mehmet, Rumeli Hisarı'nı 
planladığı yer için Bizans Kralı'na elçi göndererek bir av kulübesi yapmak üzere 
izin istemiş. Bizans Kralı da açıkça reddetmek yerine, dalga geçerek ancak bir 
sığır derisi kadar yer verebileceğini söylemiş. Fatih de kabul ederek bu sorunun 
cevabındakine benzer bir yöntemle Rumeli Hisarı'nın yerini bir sığır derisinin 
içine sığdırmış.</p>";
    echo "<p>(Bence bu hikâye uydurma; çünkü Fatih'in gücü varmış 
ki yeri almış, gücünün yettiği bir şey için izin istemezdi sanırım. Bizans Kralı'nın 
da imkânı olsaydı engellerdi herhalde. Fakat bu hikâye çözüm 
için fikir verecektir.)</p>";
}
?>

<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   echo "<img border=\"0\" src=\"delikbilmecesi.jpg\" width=\"765\" height=\"861\"><br>";
}
?>


 </body>
</html>