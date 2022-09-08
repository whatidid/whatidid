<html>
 <head>
  <title>EM2 vize 2020 cevap kaydı</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
 
 <?php
  $dosyaAdi = "em2ce_vap3.txt";
  $zaman=time()+7*3600;
  $sifre=$_POST['sifre'];
  if ($sifre!=='') echo "<p>3. soruya verdiğinizi bildirdiğiniz cevaplar kaydedildi. Teşekkürler. Değerlendirmesi e-posta ile veya otomasyon üzerinden bildirilecektir.</p>"; else echo "<p>Şifresiz girişten dolayı herhangi bir cevap kaydedilMEDİ. Geri tuşuyla kaldığınız yerden şifrenizi de girerek yeniden deneyiniz. Ya da doğrudan <a href='https://atasevinc.net/em2/em2vize_girdileri_soru3.php'>buraya tıklayarak</a> 3. soruya verdiğiniz cevaplarınızı girebilirsiniz.</p>";
  $ns=$_POST['ns']; $s=$_POST['s']; $ry=$_POST['ry'];
  $V1=$_POST['V1']; $V1a=$_POST['V1a'];
  $I2ur=$_POST['I2ur']; $I2us=$_POST['I2us'];
  $I2um=$_POST['I2um']; $I2ua=$_POST['I2ua'];
  $PCu=$_POST['PCu']; $PFe=$_POST['PFe']; $Pm=$_POST['Pm'];
  $Po=$_POST['Po']; $Pi=$_POST['Pi']; $verim=$_POST['verim'];
  $wr=$_POST['wr']; $To=$_POST['To'];
  $I10r=$_POST['I10r']; $I10s=$_POST['I10s'];
  $I10m=$_POST['I10m']; $I10a=$_POST['I10a'];
  $I1r=$_POST['I1r']; $I1s=$_POST['I1s'];
  $I1m=$_POST['I1m']; $I1a=$_POST['I1a'];
  $Ih=$_POST['Ih']; $gf=$_POST['gf']; $gfyon=$_POST['gfyon'];
  if ($gfyon=="geri") $gfy=-1; elseif ($gfyon=="ileri") $gfy=1; else $gfy=0;
  $ilave=$_POST['ilave'];
  $Dosya = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Oluşturulamıyor</p>");
  fwrite ($Dosya, "$zaman\t$sifre\t$ns\t$s\t$ry\t$V1\t$V1a\t$I2ur\t$I2us\t$I2um\t$I2ua\t$PCu\t$PFe\t$Pm\t$Po");
  fwrite ($Dosya, "\t$Pi\t$verim\t$wr\t$To\t$I10r\t$I10s\t$I10m\t$I10a\t$I1r\t$I1s\t$I1m\t$I1a\t$Ih");
  fwrite ($Dosya, "\t$gf\t$gfy\t$ilave\n");
  fclose ($Dosya); 
 ?>
 <p>Girdiğiniz değerlerin ekran görüntüsünü saklamak isteyebilirsiniz. Yanlışlık olduğunu düşünüyorsanız bu soru için HEPSİNİ <a href='https://atasevinc.net/em2/em2vize_girdileri_soru3.php'>tekrar giriniz</a>. Sadece son girdiğiniz değer takımını dikkate alırım.</p>
 <p>
 <?php
  echo '<p>'.date("d.m.Y", $zaman).' '.date("G.i", $zaman).' saatinde girdiğiniz değer takımı:</p>';
  echo "Şifre=".$sifre."<br>n<sub>s</sub>=".$ns."<br>s=".$s."<br>r<sub>y</sub>=".$ry."<br>V<sub>1</sub>=".$V1."<br>V<sub>1</sub> açısı=".$V1a."<br><b>I<sub>2</sub>'</b> reel=".$I2ur."<br><b>I<sub>2</sub>'</b> sanal=".$I2us."<br><b>I<sub>2</sub>'</b> büyüklüğü=".$I2um."<br><b>I<sub>2</sub>'</b> açısı=".$I2ua."<br>P<sub>Cu</sub>=".$PCu."<br>P<sub>Fe</sub>=".$PFe."<br>P<sub>m</sub>=".$Pm."<br>P<sub>çıkış</sub>=".$Po."<br>P<sub>giriş</sub>=".$Pi."<br>verim=".$verim."<br>&omega;<sub>r</sub>=".$wr."<br>T<sub>çıkış</sub>=".$To."<br><b>I<sub>10</sub></b> reel=".$I10r."<br><b>I<sub>10</sub></b> sanal=".$I10s."<br><b>I<sub>10</sub></b> büyüklüğü=".$I10m."<br><b>I<sub>10</sub></b> açısı=".$I10a."<br><b>I<sub>1</sub></b> reel=".$I1r."<br><b>I<sub>1</sub></b> sanal=".$I1s."<br><b>I<sub>1</sub></b> büyüklüğü=".$I1m."<br><b>I<sub>1</sub></b> açısı=".$I1a."<br>I<sub>h</sub>=".$Ih."<br>Giriş güç faktörü=".$gf."<br>Giriş güç faktörü yönü=".$gfyon."<br>İlave girdi kutusu=".$ilave;
 ?>
 </body>
</html>