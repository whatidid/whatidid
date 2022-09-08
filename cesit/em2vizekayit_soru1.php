<html>
 <head>
  <title>EM2 vize 2020 girdileri</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
 <p>1. soruya verdiğiniz cevaplar kaydedildi. Değerlendirmesi e-posta ile veya otomasyon üzerinden bildirilecektir.</p>
 <?php
  $dosyaAdi = "em2cevap1.txt";
  $zaman=time();
  $sifre=$_POST['sifre'];
  $Pkutup=$_POST['Pkutup']; $gamma=$_POST['gamma']; $rho=$_POST['rho'];
  $ku1=$_POST['ku1']; $ku3=$_POST['ku3']; $ku5=$_POST['ku5'];
  $q=$_POST['q'];
  $kd1=$_POST['kd1']; $kd3=$_POST['kd3']; $kd5=$_POST['kd5'];
  $E1rms_sargi=$_POST['E1rms_sargi']; $E3rms_sargi=$_POST['E3rms_sargi']; $E5rms_sargi=$_POST['E5rms_sargi'];
  $Nfaz=$_POST['Nfaz'];
  $E1rms_faz=$_POST['E1rms_faz']; $E3rms_faz=$_POST['E3rms_faz']; $E5rms_faz=$_POST['E5rms_faz'];
  $Erms_faz=$_POST['Erms_faz']; $Erms_fazlar_arasi=$_POST['Erms_fazlar_arasi'];
  $Dosya = fopen ($dosyaAdi, 'a+') or die ("<p><code>$dosyaAdi</code> Oluşturulamıyor</p>");
  fwrite ($Dosya, "$zaman\t$sifre\t$Pkutup\t$gamma\t$rho\t$ku1\t$ku3\t$ku5\t$q\t$kd1\t$kd3\t$kd5\t$E1rms_sargi\t$E3rms_sargi\t$E5rms_sargi");
  fwrite ($Dosya, "\t$Nfaz\t$E1rms_faz\t$E3rms_faz\t$E5rms_faz\t$$Erms_faz\t$Erms_fazlar_arasi\n");
  fclose ($Dosya); 
 ?>
