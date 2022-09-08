<html>
 <head>
  <title>Sinyaller ve Sistemler vize parametreleri</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <h2>12 Nisan 2021 Sinyaller ve Sistemler vize sınavında öğrencilere özel parametreler</h2>
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
'140205041' => '140205041 numaralı M. ÖZER için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=3',
'150205027' => '150205027 numaralı M. KORKMAZ için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=5',
'150205056' => '150205056 numaralı A. HATİB için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=5',
'150205063' => '150205063 numaralı F. AÇIKALIN için: <i>a</i>=4 , <i>b</i>=2 , <i>c</i>=3',
'150255006' => '150255006 numaralı H. KAVUTCU için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=7',
'160205040' => '160205040 numaralı C. ÜNVER için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=3',
'160205080' => '160205080 numaralı S. ÖZCAN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=7',
'160255084' => '160255084 numaralı M. ERTOĞRAL için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=3',
'170205037' => '170205037 numaralı A. ÇINAR için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=7',
'170205043' => '170205043 numaralı F. AKYALÇIN için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=9',
'170205044' => '170205044 numaralı F. TUNCER için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=3',
'170205064' => '170205064 numaralı A. MURZAYEV için: <i>a</i>=2 , <i>b</i>=6 , <i>c</i>=9',
'170205071' => '170205071 numaralı Ö. VURGUN için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=7',
'170255032' => '170255032 numaralı N. TURŞAK için: <i>a</i>=2 , <i>b</i>=6 , <i>c</i>=7',
'170255037' => '170255037 numaralı K. OLTULU için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=7',
'170255040' => '170255040 numaralı M. DİNÇER için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=7',
'170255045' => '170255045 numaralı M. BADEM için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=3',
'170255058' => '170255058 numaralı S. ÖZKAN için: <i>a</i>=6 , <i>b</i>=6 , <i>c</i>=3',
'180205003' => '180205003 numaralı E. İPEK için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=5',
'180205018' => '180205018 numaralı İ. SAKINCI için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=9',
'180205019' => '180205019 numaralı B. ER için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=9',
'180205020' => '180205020 numaralı B. DÜZGÜN için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=9',
'180205021' => '180205021 numaralı O. DURSUN için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=5',
'180205030' => '180205030 numaralı G. DENİZ için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=5',
'180205032' => '180205032 numaralı T. KIRAR için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=9',
'180205035' => '180205035 numaralı E. KARAKAYA için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=9',
'180205036' => '180205036 numaralı U. ŞENER için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=5',
'180205038' => '180205038 numaralı M. AYDINLI için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=9',
'180205043' => '180205043 numaralı F. ERDAL için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=7',
'180205047' => '180205047 numaralı B. EROĞLU için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=7',
'180205049' => '180205049 numaralı B. ALTAŞ için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=9',
'180205051' => '180205051 numaralı E. YILDIRIM için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=9',
'180205052' => '180205052 numaralı H. ÖZCANDAN için: <i>a</i>=4 , <i>b</i>=2 , <i>c</i>=7',
'180205053' => '180205053 numaralı S. ÇİÇEK için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=5',
'180205056' => '180205056 numaralı B. EKİCİ için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=9',
'180205059' => '180205059 numaralı M. UYAR için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=5',
'180205065' => '180205065 numaralı D. ERDEMİR için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=3',
'180205070' => '180205070 numaralı R. İPEK için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=7',
'180255008' => '180255008 numaralı T. BAYIR için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=7',
'180255020' => '180255020 numaralı M. ÖZ için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=5',
'180255022' => '180255022 numaralı B. GÜMÜŞ için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=3',
'180255048' => '180255048 numaralı M. GÜN için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=5',
'180255052' => '180255052 numaralı H. KAYA için: <i>a</i>=4 , <i>b</i>=2 , <i>c</i>=7',
'180255058' => '180255058 numaralı S. YILDIRIM için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=3',
'190205080' => '190205080 numaralı M. ARMUTCU için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=5',
'190255033' => '190255033 numaralı Y. ELDEMİR için: <i>a</i>=6 , <i>b</i>=6 , <i>c</i>=3',
'190255049' => '190255049 numaralı G. GÖK için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=5',
'130255007' => '130255007 numaralı O. MERİH için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=7',
'130255016' => '130255016 numaralı L. DURAN için: <i>a</i>=4 , <i>b</i>=2 , <i>c</i>=9',
'130255020' => '130255020 numaralı O. ATABEY için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=3',
'130255071' => '130255071 numaralı B. ÇETİN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=5',
'140255062' => '140255062 numaralı M. TELLİ için: <i>a</i>=6 , <i>b</i>=2 , <i>c</i>=9',
'150255029' => '150255029 numaralı M. ŞEN için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=3',
'150255032' => '150255032 numaralı F. CAN için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=5',
'150255057' => '150255057 numaralı M. TİFTİK için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=5',
'150255062' => '150255062 numaralı M. GÜRBOĞA için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=3',
'160205017' => '160205017 numaralı M. TURGUT için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=9',
'160205044' => '160205044 numaralı M. YÜKSEL için: <i>a</i>=8 , <i>b</i>=4 , <i>c</i>=3',
'160205049' => '160205049 numaralı R. ÜREGEN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=5',
'160255010' => '160255010 numaralı A. İLTER için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=3',
'160255014' => '160255014 numaralı A. SADIKOĞLU için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=5',
'160255017' => '160255017 numaralı M. AYGAR için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=9',
'160255018' => '160255018 numaralı M. KARADOĞAN için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=3',
'160255021' => '160255021 numaralı S. KESKİN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=3',
'160255025' => '160255025 numaralı B. CERİT için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=5',
'160255027' => '160255027 numaralı O. ERKORKMAZ için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=3',
'160255030' => '160255030 numaralı O. BAYINDIR için: <i>a</i>=8 , <i>b</i>=2 , <i>c</i>=9',
'160255035' => '160255035 numaralı E. DAĞLAR için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=5',
'160255043' => '160255043 numaralı İ. KARTOP için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=9',
'160255045' => '160255045 numaralı M. ÖZAN için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=9',
'160255053' => '160255053 numaralı İ. YILDIRIM için: <i>a</i>=4 , <i>b</i>=2 , <i>c</i>=5',
'160255062' => '160255062 numaralı H. ÖLMEZ için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=9',
'160255066' => '160255066 numaralı M. KURT için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=5',
'160255079' => '160255079 numaralı B. URAL için: <i>a</i>=2 , <i>b</i>=6 , <i>c</i>=3',
'160255081' => '160255081 numaralı A. MUNGAN için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=3',
'160255083' => '160255083 numaralı İ. KARABAY için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=7',
'160255085' => '160255085 numaralı M. URLU için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=9',
'160255086' => '160255086 numaralı S. YILDIZ için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=9',
'160255503' => '160255503 numaralı K. SAMISM için: <i>a</i>=6 , <i>b</i>=6 , <i>c</i>=3',
'170205011' => '170205011 numaralı M. ERGİN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=5',
'170205014' => '170205014 numaralı M. DEMİR için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=7',
'170205026' => '170205026 numaralı M. TIRPANCI için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=5',
'170205033' => '170205033 numaralı A. MİRZE için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=5',
'170205040' => '170205040 numaralı B. TETİK için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=9',
'170255008' => '170255008 numaralı F. ER için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=3',
'170255011' => '170255011 numaralı B. DÖĞÜCÜ için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=7',
'170255012' => '170255012 numaralı A. ATLI için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=7',
'170255015' => '170255015 numaralı A. TOSUN için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=9',
'170255019' => '170255019 numaralı M. EROL için: <i>a</i>=8 , <i>b</i>=4 , <i>c</i>=7',
'170255020' => '170255020 numaralı S. UÇAL için: <i>a</i>=2 , <i>b</i>=6 , <i>c</i>=5',
'170255046' => '170255046 numaralı E. USTA için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=5',
'170255057' => '170255057 numaralı A. AKGÜL için: <i>a</i>=8 , <i>b</i>=2 , <i>c</i>=7',
'170255059' => '170255059 numaralı C. KAYA için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=3',
'170255060' => '170255060 numaralı H. YILMAZ için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=7',
'170255063' => '170255063 numaralı R. KOCO için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=3',
'170255065' => '170255065 numaralı F. HOŞCA için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=7',
'170255082' => '170255082 numaralı S. HAMDİ için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=3',
'170255084' => '170255084 numaralı K. ALKAN için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=9',
'170255085' => '170255085 numaralı M. TURAN için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=3',
'180205004' => '180205004 numaralı S. GÖKÇE için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=5',
'180205009' => '180205009 numaralı R. KUZUCU için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=7',
'180205023' => '180205023 numaralı E. CEYLAN için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=9',
'180205025' => '180205025 numaralı Y. ÇALIKOĞLU için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=3',
'180205028' => '180205028 numaralı B. KILIÇ için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=3',
'180205042' => '180205042 numaralı E. TÜRK için: <i>a</i>=8 , <i>b</i>=2 , <i>c</i>=9',
'180205048' => '180205048 numaralı S. ÇALIŞKAN için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=7',
'180205057' => '180205057 numaralı B. YETEROĞLU için: <i>a</i>=2 , <i>b</i>=4 , <i>c</i>=5',
'180255012' => '180255012 numaralı B. ÇAĞLAYAN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=7',
'180255013' => '180255013 numaralı R. TOPAÇ için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=3',
'180255016' => '180255016 numaralı S. ABLAK için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=3',
'180255017' => '180255017 numaralı M. PEHLİVAN için: <i>a</i>=4 , <i>b</i>=8 , <i>c</i>=5',
'180255027' => '180255027 numaralı A. TÜRÜN için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=7',
'180255033' => '180255033 numaralı D. ALTIPARMAK için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=5',
'180255036' => '180255036 numaralı F. İLKBAHAR için: <i>a</i>=4 , <i>b</i>=6 , <i>c</i>=9',
'180255043' => '180255043 numaralı E. DOĞRU için: <i>a</i>=2 , <i>b</i>=6 , <i>c</i>=9',
'180255046' => '180255046 numaralı İ. GENCAN için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=9',
'180255055' => '180255055 numaralı U. GÜCÜK için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=3',
'180255056' => '180255056 numaralı B. KİLİNÇ için: <i>a</i>=6 , <i>b</i>=4 , <i>c</i>=9',
'180255063' => '180255063 numaralı M. ŞEMSEDDİN için: <i>a</i>=2 , <i>b</i>=2 , <i>c</i>=5',
'180255074' => '180255074 numaralı K. ALTINTAŞ için: <i>a</i>=8 , <i>b</i>=6 , <i>c</i>=9',
'180255079' => '180255079 numaralı A. SEREN için: <i>a</i>=6 , <i>b</i>=8 , <i>c</i>=7',
'180255087' => '180255087 numaralı B. KÖSE için: <i>a</i>=2 , <i>b</i>=8 , <i>c</i>=5',
'200205088' => '200205088 numaralı S. SAVAŞ için: <i>a</i>=4 , <i>b</i>=4 , <i>c</i>=7',
'180205013' => '180205013 numaralı B. TÜRÜN için: <i>a</i>=8 , <i>b</i>=8 , <i>c</i>=3'   ];
   $OgrNo=$_POST['OgrNo'];
   /*$Ad=$_POST['Ad'];
   $Soyad=$_POST['Soyad'];*/
   echo '<font color="green" size=6>'.$liste[$OgrNo].'</font>';
   if ($liste[$OgrNo]=="") echo '<font color="red">Öğrenci numarası bulunamadı</font>';
  ?>
  </p>
  <p><b>Dikkat!</b> Öğrenci numarası, ilk ismin ilk harfi ve soyadı da kontrol ederek yanlış giriş yapmadığınızdan emin olunuz. Size ait olmayan parametrelerle vereceğiniz cevaplara puan verilmeyecektir.</p>
  <p>Öncelikle bu parametreleri (sayı değerleriyle) yerine koyup ondan sonra çözünüz. Cevaplarınızda <i>a</i>, <i>b</i>, <i>c</i>, sembolleriyle görülen kısımlara puan verilmeyecektir.</p>
  <p>Sınavlarınızda başarılar dilerim.</p>
 </body>
</html>
