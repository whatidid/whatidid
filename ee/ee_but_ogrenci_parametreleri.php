<html>
 <head>
  <title>Elektrik ve Elektroniğe Giriş vize parametreleri</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <h2>10 Haziran 2021 Elektrik ve Elektroniğe Giriş final sınavında öğrencilere özel parametreler</h2>
  <p>Kişiye özel parametrelerinizi görmek için öğrenci numaranızı<!--, adınızı, soyadınızı tam olarak otomasyon sistemindeki gibi ve güvenlik sorusunun cevabını yazıyla--> giriniz.</p>
  <form action="" method="post">
   Öğrenci Numaranız : <input type="text" name="OgrNo" size="9" />
   <!--Adınız : <input type="text" name="Ad" size="30" /><br>
   Soyadınız : <input type="text" name="Soyad" size="20" /><br>-->
   <p><input type="submit" value="Kişisel parametrelerimi göster"/></p>
  </form>
  <p>
  <?php
   $liste=[
'120202086' => '120202086 numaralı S. BORAN için:  <i>B</i>=18   ,    <i>K</i>=27   ,    <i>M</i>=3',
'120202098' => '120202098 numaralı A. GÜL için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=5',
'150202006' => '150202006 numaralı B. SÜNGER için:  <i>B</i>=27   ,    <i>K</i>=24   ,    <i>M</i>=2',
'160202087' => '160202087 numaralı U. EKİNCİOĞLU için:  <i>B</i>=18   ,    <i>K</i>=21   ,    <i>M</i>=2',
'160202089' => '160202089 numaralı T. AFYONLU için:  <i>B</i>=27   ,    <i>K</i>=30   ,    <i>M</i>=5',
'170202011' => '170202011 numaralı F. İNALKAÇ için:  <i>B</i>=21   ,    <i>K</i>=15   ,    <i>M</i>=5',
'170202042' => '170202042 numaralı S. ÖZCAN için:  <i>B</i>=18   ,    <i>K</i>=30   ,    <i>M</i>=4',
'170202055' => '170202055 numaralı E. ÖZEN için:  <i>B</i>=30   ,    <i>K</i>=21   ,    <i>M</i>=7',
'170202057' => '170202057 numaralı M. TÜRKMEN için:  <i>B</i>=30   ,    <i>K</i>=15   ,    <i>M</i>=3',
'170202063' => '170202063 numaralı S. KILIÇ için:  <i>B</i>=18   ,    <i>K</i>=24   ,    <i>M</i>=2',
'180202018' => '180202018 numaralı M. TOPAL için:  <i>B</i>=27   ,    <i>K</i>=15   ,    <i>M</i>=3',
'180202026' => '180202026 numaralı G. KARAKAYA için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=9',
'180202039' => '180202039 numaralı E. PULLU için:  <i>B</i>=27   ,    <i>K</i>=30   ,    <i>M</i>=8',
'180202048' => '180202048 numaralı M. ÖZER için:  <i>B</i>=30   ,    <i>K</i>=18   ,    <i>M</i>=9',
'180202055' => '180202055 numaralı F. SADIÇ için:  <i>B</i>=21   ,    <i>K</i>=30   ,    <i>M</i>=7',
'180202070' => '180202070 numaralı H. PİLAVCI için:  <i>B</i>=21   ,    <i>K</i>=18   ,    <i>M</i>=5',
'180202098' => '180202098 numaralı B. GÜRLER için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=8',
'190202004' => '190202004 numaralı A. HARDAL için:  <i>B</i>=15   ,    <i>K</i>=18   ,    <i>M</i>=7',
'190202008' => '190202008 numaralı N. TURAN için:  <i>B</i>=30   ,    <i>K</i>=21   ,    <i>M</i>=2',
'190202021' => '190202021 numaralı M. TORUN için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=2',
'190202028' => '190202028 numaralı S. ŞENEREN için:  <i>B</i>=30   ,    <i>K</i>=21   ,    <i>M</i>=2',
'190202029' => '190202029 numaralı Ü. SÖZERİ için:  <i>B</i>=30   ,    <i>K</i>=27   ,    <i>M</i>=3',
'190202037' => '190202037 numaralı M. ÖNOL için:  <i>B</i>=24   ,    <i>K</i>=27   ,    <i>M</i>=8',
'190202038' => '190202038 numaralı Z. YILMAZ için:  <i>B</i>=21   ,    <i>K</i>=30   ,    <i>M</i>=4',
'190202040' => '190202040 numaralı Ö. BAYIN için:  <i>B</i>=15   ,    <i>K</i>=24   ,    <i>M</i>=7',
'190202053' => '190202053 numaralı B. ÇAĞLAR için:  <i>B</i>=24   ,    <i>K</i>=27   ,    <i>M</i>=4',
'190202054' => '190202054 numaralı Y. SUNAR için:  <i>B</i>=15   ,    <i>K</i>=27   ,    <i>M</i>=4',
'190202056' => '190202056 numaralı S. KOĞACAK için:  <i>B</i>=27   ,    <i>K</i>=30   ,    <i>M</i>=8',
'190202061' => '190202061 numaralı M. BAYRAM için:  <i>B</i>=18   ,    <i>K</i>=30   ,    <i>M</i>=4',
'190202064' => '190202064 numaralı G. TUNÇ için:  <i>B</i>=18   ,    <i>K</i>=27   ,    <i>M</i>=2',
'190202068' => '190202068 numaralı T. AKYÜZ için:  <i>B</i>=15   ,    <i>K</i>=18   ,    <i>M</i>=5',
'190202069' => '190202069 numaralı M. ŞAHİN için:  <i>B</i>=18   ,    <i>K</i>=15   ,    <i>M</i>=1',
'190202074' => '190202074 numaralı M. SEYHAN için:  <i>B</i>=24   ,    <i>K</i>=27   ,    <i>M</i>=3',
'190202076' => '190202076 numaralı H. SERİM için:  <i>B</i>=27   ,    <i>K</i>=30   ,    <i>M</i>=7',
'130250044' => '130250044 numaralı O. ÇETİNKAYA için:  <i>B</i>=24   ,    <i>K</i>=24   ,    <i>M</i>=3',
'130250071' => '130250071 numaralı Z. ATAK için:  <i>B</i>=15   ,    <i>K</i>=21   ,    <i>M</i>=4',
'130250103' => '130250103 numaralı B. DENECİ için:  <i>B</i>=15   ,    <i>K</i>=24   ,    <i>M</i>=6',
'140250035' => '140250035 numaralı O. SOLAY için:  <i>B</i>=15   ,    <i>K</i>=30   ,    <i>M</i>=7',
'140250059' => '140250059 numaralı M. TÜZE için:  <i>B</i>=18   ,    <i>K</i>=21   ,    <i>M</i>=2',
'140250100' => '140250100 numaralı M. SEZER için:  <i>B</i>=15   ,    <i>K</i>=27   ,    <i>M</i>=4',
'150250012' => '150250012 numaralı M. UĞURLU için:  <i>B</i>=18   ,    <i>K</i>=24   ,    <i>M</i>=1',
'160250011' => '160250011 numaralı C. KARABULUT için:  <i>B</i>=15   ,    <i>K</i>=15   ,    <i>M</i>=7',
'160250050' => '160250050 numaralı K. ÇANGA için:  <i>B</i>=18   ,    <i>K</i>=27   ,    <i>M</i>=7',
'160250097' => '160250097 numaralı M. ÇEVİK için:  <i>B</i>=21   ,    <i>K</i>=30   ,    <i>M</i>=7',
'170250039' => '170250039 numaralı İ. ÖNDAĞ için:  <i>B</i>=15   ,    <i>K</i>=15   ,    <i>M</i>=8',
'170250060' => '170250060 numaralı H. ŞAHİN için:  <i>B</i>=21   ,    <i>K</i>=24   ,    <i>M</i>=2',
'170250097' => '170250097 numaralı H. KEÇİLİOĞLU için:  <i>B</i>=18   ,    <i>K</i>=21   ,    <i>M</i>=4',
'180250005' => '180250005 numaralı A. AKSOY için:  <i>B</i>=21   ,    <i>K</i>=15   ,    <i>M</i>=9',
'180250015' => '180250015 numaralı M. ÇAĞIĞAN için:  <i>B</i>=21   ,    <i>K</i>=30   ,    <i>M</i>=3',
'180250041' => '180250041 numaralı A. SARIKAYA için:  <i>B</i>=27   ,    <i>K</i>=18   ,    <i>M</i>=5',
'180250068' => '180250068 numaralı M. ALPARSLAN için:  <i>B</i>=27   ,    <i>K</i>=15   ,    <i>M</i>=8',
'180250070' => '180250070 numaralı N. ESER için:  <i>B</i>=18   ,    <i>K</i>=15   ,    <i>M</i>=8',
'180250074' => '180250074 numaralı E. SARAÇ için:  <i>B</i>=24   ,    <i>K</i>=18   ,    <i>M</i>=5',
'180250100' => '180250100 numaralı F. ERDOĞAN için:  <i>B</i>=24   ,    <i>K</i>=18   ,    <i>M</i>=5',
'180250101' => '180250101 numaralı F. TÜRK için:  <i>B</i>=24   ,    <i>K</i>=15   ,    <i>M</i>=2',
'180250105' => '180250105 numaralı İ. SÖZERİ için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=5',
'180250106' => '180250106 numaralı M. ŞENOL için:  <i>B</i>=30   ,    <i>K</i>=18   ,    <i>M</i>=8',
'190250003' => '190250003 numaralı Y. AKAY için:  <i>B</i>=21   ,    <i>K</i>=24   ,    <i>M</i>=3',
'190250007' => '190250007 numaralı Ö. EROĞLU için:  <i>B</i>=18   ,    <i>K</i>=21   ,    <i>M</i>=9',
'190250010' => '190250010 numaralı Y. ŞİMŞEK için:  <i>B</i>=24   ,    <i>K</i>=30   ,    <i>M</i>=3',
'190250011' => '190250011 numaralı F. SAZAK için:  <i>B</i>=24   ,    <i>K</i>=27   ,    <i>M</i>=7',
'190250014' => '190250014 numaralı E. TANRIYAKUL için:  <i>B</i>=15   ,    <i>K</i>=18   ,    <i>M</i>=7',
'190250017' => '190250017 numaralı S. YÜCEL için:  <i>B</i>=15   ,    <i>K</i>=15   ,    <i>M</i>=3',
'190250021' => '190250021 numaralı K. ZORA için:  <i>B</i>=30   ,    <i>K</i>=27   ,    <i>M</i>=6',
'190250023' => '190250023 numaralı A. SÖNMEZ için:  <i>B</i>=18   ,    <i>K</i>=15   ,    <i>M</i>=6',
'190250025' => '190250025 numaralı F. SOLMAZ için:  <i>B</i>=18   ,    <i>K</i>=30   ,    <i>M</i>=2',
'190250026' => '190250026 numaralı M. TANRIKULU için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=9',
'190250028' => '190250028 numaralı İ. BİNGÖL için:  <i>B</i>=24   ,    <i>K</i>=21   ,    <i>M</i>=5',
'190250031' => '190250031 numaralı Y. YENEN için:  <i>B</i>=15   ,    <i>K</i>=18   ,    <i>M</i>=4',
'190250042' => '190250042 numaralı H. ÖRGÜLÜ için:  <i>B</i>=18   ,    <i>K</i>=30   ,    <i>M</i>=4',
'190250046' => '190250046 numaralı B. EROL için:  <i>B</i>=15   ,    <i>K</i>=24   ,    <i>M</i>=1',
'190250051' => '190250051 numaralı A. ÇETİN için:  <i>B</i>=15   ,    <i>K</i>=24   ,    <i>M</i>=3',
'190250052' => '190250052 numaralı H. SAĞLAM için:  <i>B</i>=18   ,    <i>K</i>=15   ,    <i>M</i>=4',
'190250054' => '190250054 numaralı A. KALAYCI için:  <i>B</i>=30   ,    <i>K</i>=21   ,    <i>M</i>=5',
'190250055' => '190250055 numaralı A. GÜZEL için:  <i>B</i>=15   ,    <i>K</i>=30   ,    <i>M</i>=7',
'190250056' => '190250056 numaralı B. DOĞRUER için:  <i>B</i>=24   ,    <i>K</i>=27   ,    <i>M</i>=2',
'190250061' => '190250061 numaralı A. AKTAŞ için:  <i>B</i>=18   ,    <i>K</i>=18   ,    <i>M</i>=3',
'190250067' => '190250067 numaralı H. YAKAR için:  <i>B</i>=30   ,    <i>K</i>=24   ,    <i>M</i>=9',
'190250068' => '190250068 numaralı B. EVCİ için:  <i>B</i>=24   ,    <i>K</i>=30   ,    <i>M</i>=9',
'190250071' => '190250071 numaralı A. DOĞANTEKİN için:  <i>B</i>=21   ,    <i>K</i>=30   ,    <i>M</i>=3',
'190250072' => '190250072 numaralı Y. DURAK için:  <i>B</i>=21   ,    <i>K</i>=18   ,    <i>M</i>=2',
'190250076' => '190250076 numaralı Ç. ÇAKMAK için:  <i>B</i>=18   ,    <i>K</i>=24   ,    <i>M</i>=8',
'190250090' => '190250090 numaralı A. BAL için:  <i>B</i>=27   ,    <i>K</i>=18   ,    <i>M</i>=3'];
   $OgrNo=$_POST['OgrNo'];
   /*$Ad=$_POST['Ad'];
   $Soyad=$_POST['Soyad'];*/
   echo '<font color="green" size=6>'.$liste[$OgrNo].'</font>';
   if ($liste[$OgrNo]=="") echo '<font color="red">Öğrenci numarası bulunamadı</font>';
  ?>
  </p>
  <p><b>Dikkat!</b> Öğrenci numarası, ilk ismin ilk harfi ve soyadı da kontrol ederek yanlış giriş yapmadığınızdan emin olunuz. Size ait olmayan parametrelerle vereceğiniz cevaplara puan verilmeyecektir.</p>
  <p>Öncelikle bu parametreleri (sayı değerleriyle) yerine koyup ondan sonra çözünüz. Cevaplarınızda <i>B</i>, <i>K</i>, <i>M</i>, sembolleriyle görülen kısımlara puan verilmeyecektir.</p>
  <p>Sınavlarınızda başarılar dilerim.</p>
 </body>
</html>
