<html>
 <head>
  <title>EM2 vize 2020 cevap kaydı</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
 
 <?php
  $dosyaAdi = "em2ce_vap2.txt";
  $zaman=time()+7*3600;
  $sifre=$_POST['sifre'];
  if ($sifre!='') echo "<p>2. soruya verdiğinizi bildirdiğiniz cevaplar kaydedildi. Teşekkürler. Değerlendirmesi e-posta ile veya otomasyon üzerinden bildirilecektir.</p>"; else echo "<p>Şifresiz girişten dolayı herhangi bir cevap kaydedilMEDİ. Geri tuşuyla kaldığınız yerden şifrenizi de girerek yeniden deneyiniz. Ya da doğrudan <a href='https://atasevinc.net/em2/em2vize_girdileri_soru2.php'>buraya tıklayarak</a> 2. soruya verdiğiniz cevaplarınızı girebilirsiniz.</p>";
  $V10=$_POST['V10']; $I10=$_POST['I10']; $P10=$_POST['P10'];
  $gc=$_POST['gc']; $Y0=$_POST['Y0']; $bm=$_POST['bm'];
  $V1k=$_POST['V1k']; $I1k=$_POST['I1k']; $P1k=$_POST['P1k']; $r1=$_POST['r1'];
  $rT=$_POST['rT']; $Zk=$_POST['Zk']; $xT=$_POST['xT'];
  $r2u=$_POST['r2u']; $x2u=$_POST['x2u'];
  $N1_N2=$_POST['N1_N2']; $r2=$_POST['r2']; $x2=$_POST['x2'];
  $L2k=$_POST['L2k'];
  $ilave=$_POST['ilave'];
  $Dosya = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Oluşturulamıyor</p>");
  fwrite ($Dosya, "$zaman\t$sifre\t$V10\t$I10\t$P10\t$gc\t$Y0\t$bm\t$V1k\t$I1k\t$P1k\t$r1\t$rT\t$Zk\t$xT");
  fwrite ($Dosya, "\t$r2u\t$x2u\t$N1_N2\t$r2\t$x2\t$L2k\t$ilave\n");
  fclose ($Dosya); 
 ?>
 <p>Girdiğiniz değerlerin ekran görüntüsünü saklamak isteyebilirsiniz. Yanlışlık olduğunu düşünüyorsanız bu soru için HEPSİNİ <a href='https://atasevinc.net/em2/em2vize_girdileri_soru2.php'>tekrar giriniz</a>. Sadece son girdiğiniz değer takımını dikkate alırım.</p>
 <p>
 <?php
  echo '<p>'.date("d.m.Y", $zaman).' '.date("G.i", $zaman).' saatinde girdiğiniz değer takımı:</p>';
  echo "Şifre=".$sifre."<br>V<sub>10</sub>=".$V10."<br>I<sub>10</sub>=".$I10."<br>P<sub>10</sub>=".$P10."<br>g<sub>c</sub>=".$gc."<br>Y<sub>10</sub>=".$Y0."<br>b<sub>m</sub>=".$bm."<br>V<sub>1k</sub>=".$V1k."<br>I<sub>1k</sub>=".$I1k."<br>P<sub>1k</sub>=".$P1k."<br>r<sub>1</sub>=".$r1."<br>r<sub>1</sub>+r<sub>2</sub>'=".$rT."<br>Z<sub>k</sub>=".$Zk."<br>x<sub>1</sub>+x<sub>2</sub>'=".$xT."<br>r<sub>2</sub>'=".$r2u."<br>x<sub>1</sub>=x<sub>2</sub>'=".$x2u."<br>N<sub>1</sub>/N<sub>2</sub>=".$N1_N2."<br>r<sub>2</sub>=".$r2."<br>x<sub>2</sub>=".$x2."<br>L<sub>2k</sub>=".$L2k."<br>İlave girdi kutusu=".$ilave;
 ?>
 </body>
</html>