<html>
 <head>
  <title>EM2 vize 2020 cevap kaydı</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
 
 <?php
  $dosyaAdi = "em2ce_vap1.txt";
  $zaman=time()+7*3600;
  $sifre=$_POST['sifre'];
  if ($sifre!='') echo "<p>1. soruya verdiğinizi bildirdiğiniz cevaplar kaydedildi. Teşekkürler. Değerlendirmesi e-posta ile veya otomasyon üzerinden bildirilecektir.</p>"; else echo "<p>Şifresiz girişten dolayı herhangi bir cevap kaydedilMEDİ. Geri tuşuyla kaldığınız yerden şifrenizi de girerek yeniden deneyiniz. Ya da doğrudan <a href='https://atasevinc.net/em2/em2vize_girdileri_soru1.php'>buraya tıklayarak</a> 1. soruya verdiğiniz cevaplarınızı girebilirsiniz.</p>";
  $Pkutup=$_POST['Pkutup']; $gamma=$_POST['gamma']; $rho=$_POST['rho'];
  $ku1=$_POST['ku1']; $ku3=$_POST['ku3']; $ku5=$_POST['ku5'];
  $q=$_POST['q'];
  $kd1=$_POST['kd1']; $kd3=$_POST['kd3']; $kd5=$_POST['kd5'];
  $E1rms_sargi=$_POST['E1rms_sargi']; $E3rms_sargi=$_POST['E3rms_sargi']; $E5rms_sargi=$_POST['E5rms_sargi'];
  $Nfaz=$_POST['Nfaz'];
  $E1rms_faz=$_POST['E1rms_faz']; $E3rms_faz=$_POST['E3rms_faz']; $E5rms_faz=$_POST['E5rms_faz'];
  $Erms_faz=$_POST['Erms_faz']; $Erms_fazlar_arasi=$_POST['Erms_fazlar_arasi'];
  $ilave=$_POST['ilave'];
  $Dosya = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Oluşturulamıyor</p>");
  fwrite ($Dosya, "$zaman\t$sifre\t$Pkutup\t$gamma\t$rho\t$ku1\t$ku3\t$ku5\t$q\t$kd1\t$kd3\t$kd5\t$E1rms_sargi\t$E3rms_sargi\t$E5rms_sargi");
  fwrite ($Dosya, "\t$Nfaz\t$E1rms_faz\t$E3rms_faz\t$E5rms_faz\t$Erms_faz\t$Erms_fazlar_arasi\t$ilave\n");
  fclose ($Dosya); 
 ?>
 <p>Girdiğiniz değerlerin ekran görüntüsünü saklamak isteyebilirsiniz. Yanlışlık olduğunu düşünüyorsanız bu soru için HEPSİNİ <a href='https://atasevinc.net/em2/em2vize_girdileri_soru1.php'>tekrar giriniz</a>. Sadece son girdiğiniz değer takımını dikkate alırım.</p>
 <p>
 <?php
  echo '<p>'.date("d.m.Y", $zaman).' '.date("G.i", $zaman).' saatinde girdiğiniz değer takımı:</p>';
  echo "Şifre=".$sifre."<br>P=".$Pkutup."<br>&gamma;=".$gamma."<br>&rho;=".$rho."<br>k<sub>u1</sub>=".$ku1."<br>k<sub>u3</sub>=".$ku3."<br>k<sub>u5</sub>=".$ku5."<br>q=".$q."<br>k<sub>d1</sub>=".$kd1."<br>k<sub>d3</sub>=".$kd3."<br>k<sub>d5</sub>=".$kd5."<br>E<sub>1rms</sub>/sargı=".$E1rms_sargi."<br>E<sub>3rms</sub>/sargı=".$E3rms_sargi."<br>E<sub>5rms</sub>/sargı=".$E5rms_sargi."<br>N<sub>faz</sub>/sargı=".$Nfaz."<br>E<sub>1rms</sub>/faz=".$E1rms_faz."<br>E<sub>3rms</sub>/faz=".$E3rms_faz."<br>E<sub>5rms</sub>/faz=".$E5rms_faz."<br>E<sub>rms</sub>/faz=".$Erms_faz."<br>E<sub>rms</sub>(fazlar arası)=".$Erms_fazlar_arasi."<br>İlave girdi kutusu=".$ilave;
 ?>
 </body>
</html>