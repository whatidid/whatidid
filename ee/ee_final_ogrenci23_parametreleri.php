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
'120202064' => '120202064 numaralı A. YAŞAR için:  <i>B</i>=90   ,    <i>K</i>=4   ,    <i>M</i>=2',
'120202086' => '120202086 numaralı S. BORAN için:  <i>B</i>=50   ,    <i>K</i>=6   ,    <i>M</i>=8',
'120202098' => '120202098 numaralı A. GÜL için:  <i>B</i>=30   ,    <i>K</i>=4   ,    <i>M</i>=9',
'140202020' => '140202020 numaralı T. ŞAHİN için:  <i>B</i>=60   ,    <i>K</i>=4   ,    <i>M</i>=2',
'140202023' => '140202023 numaralı M. AKGÜN için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=2',
'140202076' => '140202076 numaralı C. KILINÇ için:  <i>B</i>=90   ,    <i>K</i>=6   ,    <i>M</i>=5',
'150202006' => '150202006 numaralı B. SÜNGER için:  <i>B</i>=50   ,    <i>K</i>=2   ,    <i>M</i>=3',
'150202022' => '150202022 numaralı T. ÇELİK için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=5',
'160202010' => '160202010 numaralı A. ERYILDIRIM için:  <i>B</i>=70   ,    <i>K</i>=6   ,    <i>M</i>=2',
'160202019' => '160202019 numaralı R. ÇİÇEK için:  <i>B</i>=70   ,    <i>K</i>=8   ,    <i>M</i>=4',
'160202071' => '160202071 numaralı V. ULUTÜRK için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=5',
'160202087' => '160202087 numaralı U. EKİNCİOĞLU için:  <i>B</i>=70   ,    <i>K</i>=5   ,    <i>M</i>=5',
'160202089' => '160202089 numaralı T. AFYONLU için:  <i>B</i>=30   ,    <i>K</i>=5   ,    <i>M</i>=4',
'160202090' => '160202090 numaralı S. USLU için:  <i>B</i>=20   ,    <i>K</i>=6   ,    <i>M</i>=9',
'160202092' => '160202092 numaralı M. ATLI için:  <i>B</i>=20   ,    <i>K</i>=3   ,    <i>M</i>=8',
'170202011' => '170202011 numaralı F. İNALKAÇ için:  <i>B</i>=40   ,    <i>K</i>=6   ,    <i>M</i>=7',
'170202015' => '170202015 numaralı İ. TÖZLUYURT için:  <i>B</i>=60   ,    <i>K</i>=2   ,    <i>M</i>=3',
'170202042' => '170202042 numaralı S. ÖZCAN için:  <i>B</i>=90   ,    <i>K</i>=6   ,    <i>M</i>=6',
'170202055' => '170202055 numaralı E. ÖZEN için:  <i>B</i>=20   ,    <i>K</i>=6   ,    <i>M</i>=8',
'170202057' => '170202057 numaralı M. TÜRKMEN için:  <i>B</i>=40   ,    <i>K</i>=2   ,    <i>M</i>=9',
'170202061' => '170202061 numaralı B. ÇAL için:  <i>B</i>=70   ,    <i>K</i>=7   ,    <i>M</i>=8',
'170202063' => '170202063 numaralı S. KILIÇ için:  <i>B</i>=50   ,    <i>K</i>=8   ,    <i>M</i>=8',
'170202085' => '170202085 numaralı A. ERMİLE için:  <i>B</i>=80   ,    <i>K</i>=7   ,    <i>M</i>=7',
'170202089' => '170202089 numaralı E. ALPAY için:  <i>B</i>=80   ,    <i>K</i>=5   ,    <i>M</i>=5',
'170202090' => '170202090 numaralı P. ÖNAL için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=8',
'180202005' => '180202005 numaralı M. ÇAKIR için:  <i>B</i>=40   ,    <i>K</i>=5   ,    <i>M</i>=4',
'180202018' => '180202018 numaralı M. TOPAL için:  <i>B</i>=90   ,    <i>K</i>=8   ,    <i>M</i>=9',
'180202022' => '180202022 numaralı F. GÜLGÜN için:  <i>B</i>=80   ,    <i>K</i>=6   ,    <i>M</i>=5',
'180202024' => '180202024 numaralı R. GÜNEŞ için:  <i>B</i>=70   ,    <i>K</i>=7   ,    <i>M</i>=6',
'180202026' => '180202026 numaralı G. KARAKAYA için:  <i>B</i>=70   ,    <i>K</i>=5   ,    <i>M</i>=7',
'180202035' => '180202035 numaralı E. AYDIN için:  <i>B</i>=60   ,    <i>K</i>=3   ,    <i>M</i>=5',
'180202036' => '180202036 numaralı B. ANİŞ için:  <i>B</i>=30   ,    <i>K</i>=2   ,    <i>M</i>=9',
'180202039' => '180202039 numaralı E. PULLU için:  <i>B</i>=70   ,    <i>K</i>=8   ,    <i>M</i>=5',
'180202046' => '180202046 numaralı M. ERTAŞ için:  <i>B</i>=90   ,    <i>K</i>=2   ,    <i>M</i>=3',
'180202048' => '180202048 numaralı M. ÖZER için:  <i>B</i>=90   ,    <i>K</i>=8   ,    <i>M</i>=7',
'180202055' => '180202055 numaralı F. SADIÇ için:  <i>B</i>=60   ,    <i>K</i>=2   ,    <i>M</i>=4',
'180202062' => '180202062 numaralı F. ALTINTAŞ için:  <i>B</i>=60   ,    <i>K</i>=6   ,    <i>M</i>=9',
'180202070' => '180202070 numaralı H. PİLAVCI için:  <i>B</i>=20   ,    <i>K</i>=3   ,    <i>M</i>=5',
'180202087' => '180202087 numaralı İ. ÇELİK için:  <i>B</i>=60   ,    <i>K</i>=2   ,    <i>M</i>=6',
'180202098' => '180202098 numaralı B. GÜRLER için:  <i>B</i>=50   ,    <i>K</i>=2   ,    <i>M</i>=3',
'180202103' => '180202103 numaralı S. KAYA için:  <i>B</i>=60   ,    <i>K</i>=3   ,    <i>M</i>=4',
'180202104' => '180202104 numaralı B. BİÇER için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=6',
'190202001' => '190202001 numaralı İ. ŞAHİN için:  <i>B</i>=90   ,    <i>K</i>=8   ,    <i>M</i>=5',
'190202003' => '190202003 numaralı Y. SAYGILI için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=7',
'190202004' => '190202004 numaralı A. HARDAL için:  <i>B</i>=90   ,    <i>K</i>=4   ,    <i>M</i>=6',
'190202005' => '190202005 numaralı E. İMRE için:  <i>B</i>=30   ,    <i>K</i>=2   ,    <i>M</i>=4',
'190202006' => '190202006 numaralı M. ERDOĞAN için:  <i>B</i>=60   ,    <i>K</i>=6   ,    <i>M</i>=8',
'190202007' => '190202007 numaralı Y. SARIÇAKMAK için:  <i>B</i>=50   ,    <i>K</i>=5   ,    <i>M</i>=9',
'190202008' => '190202008 numaralı N. TURAN için:  <i>B</i>=70   ,    <i>K</i>=2   ,    <i>M</i>=7',
'190202009' => '190202009 numaralı K. KAYA için:  <i>B</i>=70   ,    <i>K</i>=2   ,    <i>M</i>=6',
'190202010' => '190202010 numaralı B. MADEN için:  <i>B</i>=80   ,    <i>K</i>=7   ,    <i>M</i>=4',
'190202012' => '190202012 numaralı A. UĞURLU için:  <i>B</i>=90   ,    <i>K</i>=4   ,    <i>M</i>=4',
'190202013' => '190202013 numaralı Y. ÖZ için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=3',
'190202014' => '190202014 numaralı M. DALKILIÇ için:  <i>B</i>=50   ,    <i>K</i>=5   ,    <i>M</i>=7',
'190202015' => '190202015 numaralı A. ANTEPLİ için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=3',
'190202017' => '190202017 numaralı S. GÖRGÜLÜ için:  <i>B</i>=70   ,    <i>K</i>=8   ,    <i>M</i>=5',
'190202018' => '190202018 numaralı M. ATMACA için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=6',
'190202021' => '190202021 numaralı M. TORUN için:  <i>B</i>=90   ,    <i>K</i>=6   ,    <i>M</i>=4',
'190202023' => '190202023 numaralı E. MUTLU için:  <i>B</i>=80   ,    <i>K</i>=2   ,    <i>M</i>=6',
'190202024' => '190202024 numaralı M. AYGÖRDÜM için:  <i>B</i>=50   ,    <i>K</i>=8   ,    <i>M</i>=9',
'190202025' => '190202025 numaralı H. GÖKSUNGUR için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=3',
'190202027' => '190202027 numaralı Ö. ELİBÜYÜK için:  <i>B</i>=40   ,    <i>K</i>=5   ,    <i>M</i>=5',
'190202028' => '190202028 numaralı S. ŞENEREN için:  <i>B</i>=20   ,    <i>K</i>=8   ,    <i>M</i>=3',
'190202029' => '190202029 numaralı Ü. SÖZERİ için:  <i>B</i>=50   ,    <i>K</i>=2   ,    <i>M</i>=6',
'190202030' => '190202030 numaralı G. AYAN için:  <i>B</i>=80   ,    <i>K</i>=3   ,    <i>M</i>=2',
'190202031' => '190202031 numaralı İ. GÜRSES için:  <i>B</i>=90   ,    <i>K</i>=7   ,    <i>M</i>=7',
'190202032' => '190202032 numaralı F. ORAN için:  <i>B</i>=40   ,    <i>K</i>=7   ,    <i>M</i>=6',
'190202034' => '190202034 numaralı B. GÜRAL için:  <i>B</i>=80   ,    <i>K</i>=7   ,    <i>M</i>=4',
'190202035' => '190202035 numaralı Ş. İŞLER için:  <i>B</i>=60   ,    <i>K</i>=7   ,    <i>M</i>=7',
'190202036' => '190202036 numaralı Ş. YEŞİLYURT için:  <i>B</i>=40   ,    <i>K</i>=5   ,    <i>M</i>=5',
'190202037' => '190202037 numaralı M. ÖNOL için:  <i>B</i>=30   ,    <i>K</i>=3   ,    <i>M</i>=6',
'190202038' => '190202038 numaralı Z. YILMAZ için:  <i>B</i>=90   ,    <i>K</i>=2   ,    <i>M</i>=3',
'190202039' => '190202039 numaralı M. BOZOĞLU için:  <i>B</i>=50   ,    <i>K</i>=6   ,    <i>M</i>=7',
'190202040' => '190202040 numaralı Ö. BAYIN için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=9',
'190202042' => '190202042 numaralı H. BÜLBÜL için:  <i>B</i>=70   ,    <i>K</i>=2   ,    <i>M</i>=4',
'190202043' => '190202043 numaralı F. NAMLI için:  <i>B</i>=70   ,    <i>K</i>=4   ,    <i>M</i>=3',
'190202044' => '190202044 numaralı U. MUMCU için:  <i>B</i>=50   ,    <i>K</i>=7   ,    <i>M</i>=7',
'190202045' => '190202045 numaralı A. BAYRAKTAR için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=6',
'190202047' => '190202047 numaralı N. ŞAHİN için:  <i>B</i>=30   ,    <i>K</i>=8   ,    <i>M</i>=2',
'190202048' => '190202048 numaralı Ş. ÇOTUROĞLU için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=6',
'190202050' => '190202050 numaralı E. TURAN için:  <i>B</i>=20   ,    <i>K</i>=7   ,    <i>M</i>=8',
'190202051' => '190202051 numaralı E. KAPLAN için:  <i>B</i>=80   ,    <i>K</i>=5   ,    <i>M</i>=2',
'190202053' => '190202053 numaralı B. ÇAĞLAR için:  <i>B</i>=30   ,    <i>K</i>=2   ,    <i>M</i>=9',
'190202054' => '190202054 numaralı Y. SUNAR için:  <i>B</i>=70   ,    <i>K</i>=7   ,    <i>M</i>=7',
'190202055' => '190202055 numaralı R. ATEŞ için:  <i>B</i>=80   ,    <i>K</i>=4   ,    <i>M</i>=6',
'190202056' => '190202056 numaralı S. KOĞACAK için:  <i>B</i>=70   ,    <i>K</i>=6   ,    <i>M</i>=3',
'190202057' => '190202057 numaralı H. DEĞİRMENCİ için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=9',
'190202058' => '190202058 numaralı B. VAROL için:  <i>B</i>=30   ,    <i>K</i>=6   ,    <i>M</i>=6',
'190202059' => '190202059 numaralı Ö. KELEŞ için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=7',
'190202060' => '190202060 numaralı Ö. PEKBAY için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=9',
'190202061' => '190202061 numaralı M. BAYRAM için:  <i>B</i>=60   ,    <i>K</i>=2   ,    <i>M</i>=2',
'190202063' => '190202063 numaralı G. BİRCAN için:  <i>B</i>=40   ,    <i>K</i>=5   ,    <i>M</i>=2',
'190202064' => '190202064 numaralı G. TUNÇ için:  <i>B</i>=20   ,    <i>K</i>=7   ,    <i>M</i>=9',
'190202066' => '190202066 numaralı H. ÖZÜAK için:  <i>B</i>=60   ,    <i>K</i>=8   ,    <i>M</i>=7',
'190202067' => '190202067 numaralı M. MERCAN için:  <i>B</i>=50   ,    <i>K</i>=4   ,    <i>M</i>=3',
'190202068' => '190202068 numaralı T. AKYÜZ için:  <i>B</i>=60   ,    <i>K</i>=5   ,    <i>M</i>=4',
'190202069' => '190202069 numaralı M. ŞAHİN için:  <i>B</i>=80   ,    <i>K</i>=6   ,    <i>M</i>=6',
'190202070' => '190202070 numaralı A. ERZİNCAN için:  <i>B</i>=70   ,    <i>K</i>=4   ,    <i>M</i>=3',
'190202071' => '190202071 numaralı M. BİÇER için:  <i>B</i>=90   ,    <i>K</i>=4   ,    <i>M</i>=2',
'190202072' => '190202072 numaralı Y. AKTAŞ için:  <i>B</i>=90   ,    <i>K</i>=2   ,    <i>M</i>=3',
'190202073' => '190202073 numaralı O. AL RAJEH için:  <i>B</i>=70   ,    <i>K</i>=6   ,    <i>M</i>=4',
'190202074' => '190202074 numaralı M. SEYHAN için:  <i>B</i>=50   ,    <i>K</i>=8   ,    <i>M</i>=7',
'190202075' => '190202075 numaralı O. ÇAKMAK için:  <i>B</i>=20   ,    <i>K</i>=3   ,    <i>M</i>=6',
'190202076' => '190202076 numaralı H. SERİM için:  <i>B</i>=30   ,    <i>K</i>=3   ,    <i>M</i>=4',
'190202077' => '190202077 numaralı M. BOZBEYOĞLU için:  <i>B</i>=60   ,    <i>K</i>=4   ,    <i>M</i>=8',
'190202078' => '190202078 numaralı M. ŞAHBUDAK için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=8',
'190202080' => '190202080 numaralı H. TEMİR için:  <i>B</i>=60   ,    <i>K</i>=8   ,    <i>M</i>=6',
'190202085' => '190202085 numaralı M. OĞAN için:  <i>B</i>=80   ,    <i>K</i>=4   ,    <i>M</i>=2',
'200250063' => '200250063 numaralı M. KARAKAYA için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=9',
'200250066' => '200250066 numaralı Ö. YENİ için:  <i>B</i>=50   ,    <i>K</i>=7   ,    <i>M</i>=7',
'110250089' => '110250089 numaralı E. KAYA için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=9',
'110250090' => '110250090 numaralı V. YÜCEL için:  <i>B</i>=50   ,    <i>K</i>=7   ,    <i>M</i>=4',
'130250030' => '130250030 numaralı M. EŞ için:  <i>B</i>=30   ,    <i>K</i>=5   ,    <i>M</i>=3',
'130250044' => '130250044 numaralı O. ÇETİNKAYA için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=9',
'130250071' => '130250071 numaralı Z. ATAK için:  <i>B</i>=70   ,    <i>K</i>=8   ,    <i>M</i>=6',
'130250096' => '130250096 numaralı A. KAHVECİ için:  <i>B</i>=40   ,    <i>K</i>=2   ,    <i>M</i>=6',
'130250103' => '130250103 numaralı B. DENECİ için:  <i>B</i>=80   ,    <i>K</i>=4   ,    <i>M</i>=2',
'140250035' => '140250035 numaralı O. SOLAY için:  <i>B</i>=70   ,    <i>K</i>=6   ,    <i>M</i>=6',
'140250059' => '140250059 numaralı M. TÜZE için:  <i>B</i>=70   ,    <i>K</i>=4   ,    <i>M</i>=3',
'140250100' => '140250100 numaralı M. SEZER için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=4',
'150250007' => '150250007 numaralı A. TİN için:  <i>B</i>=90   ,    <i>K</i>=7   ,    <i>M</i>=8',
'150250012' => '150250012 numaralı M. UĞURLU için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=9',
'150250031' => '150250031 numaralı M. AKGÜMÜŞ için:  <i>B</i>=20   ,    <i>K</i>=5   ,    <i>M</i>=3',
'150250033' => '150250033 numaralı G. KARA için:  <i>B</i>=80   ,    <i>K</i>=5   ,    <i>M</i>=8',
'150250036' => '150250036 numaralı B. KARATAŞ için:  <i>B</i>=20   ,    <i>K</i>=5   ,    <i>M</i>=9',
'150250077' => '150250077 numaralı C. YILDIRIM için:  <i>B</i>=40   ,    <i>K</i>=6   ,    <i>M</i>=4',
'150250102' => '150250102 numaralı Ö. ÜLKER için:  <i>B</i>=90   ,    <i>K</i>=8   ,    <i>M</i>=3',
'150250104' => '150250104 numaralı O. TAŞAR için:  <i>B</i>=30   ,    <i>K</i>=3   ,    <i>M</i>=3',
'160250011' => '160250011 numaralı C. KARABULUT için:  <i>B</i>=50   ,    <i>K</i>=6   ,    <i>M</i>=9',
'160250044' => '160250044 numaralı A. SAZAK için:  <i>B</i>=50   ,    <i>K</i>=3   ,    <i>M</i>=7',
'160250050' => '160250050 numaralı K. ÇANGA için:  <i>B</i>=70   ,    <i>K</i>=7   ,    <i>M</i>=3',
'160250096' => '160250096 numaralı Y. YILDIRIM için:  <i>B</i>=60   ,    <i>K</i>=7   ,    <i>M</i>=7',
'160250097' => '160250097 numaralı M. ÇEVİK için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=4',
'170202070' => '170202070 numaralı U. ERKAN için:  <i>B</i>=60   ,    <i>K</i>=8   ,    <i>M</i>=7',
'170250002' => '170250002 numaralı M. KÖKTÜRK için:  <i>B</i>=80   ,    <i>K</i>=5   ,    <i>M</i>=4',
'170250004' => '170250004 numaralı A. BUÇAK için:  <i>B</i>=20   ,    <i>K</i>=6   ,    <i>M</i>=6',
'170250009' => '170250009 numaralı A. GÜLEN için:  <i>B</i>=60   ,    <i>K</i>=7   ,    <i>M</i>=2',
'170250011' => '170250011 numaralı M. CERME için:  <i>B</i>=50   ,    <i>K</i>=6   ,    <i>M</i>=7',
'170250032' => '170250032 numaralı M. DEMİRCİ için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=2',
'170250033' => '170250033 numaralı Z. ÖZEL için:  <i>B</i>=30   ,    <i>K</i>=8   ,    <i>M</i>=4',
'170250039' => '170250039 numaralı İ. ÖNDAĞ için:  <i>B</i>=30   ,    <i>K</i>=5   ,    <i>M</i>=5',
'170250055' => '170250055 numaralı M. ATAŞ için:  <i>B</i>=80   ,    <i>K</i>=3   ,    <i>M</i>=2',
'170250060' => '170250060 numaralı H. ŞAHİN için:  <i>B</i>=80   ,    <i>K</i>=3   ,    <i>M</i>=8',
'170250064' => '170250064 numaralı B. TAŞDEMİR için:  <i>B</i>=20   ,    <i>K</i>=5   ,    <i>M</i>=5',
'170250068' => '170250068 numaralı M. DADAK için:  <i>B</i>=20   ,    <i>K</i>=3   ,    <i>M</i>=3',
'170250080' => '170250080 numaralı E. KOÇ için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=6',
'170250097' => '170250097 numaralı H. KEÇİLİOĞLU için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=8',
'180202099' => '180202099 numaralı M. GÜNGÖR için:  <i>B</i>=70   ,    <i>K</i>=7   ,    <i>M</i>=5',
'180202102' => '180202102 numaralı A. GÜLESER için:  <i>B</i>=50   ,    <i>K</i>=5   ,    <i>M</i>=5',
'180250005' => '180250005 numaralı A. AKSOY için:  <i>B</i>=40   ,    <i>K</i>=2   ,    <i>M</i>=8',
'180250006' => '180250006 numaralı A. NARTER için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=5',
'180250009' => '180250009 numaralı B. TÜRKCAN için:  <i>B</i>=80   ,    <i>K</i>=6   ,    <i>M</i>=2',
'180250014' => '180250014 numaralı F. ÜNVER için:  <i>B</i>=60   ,    <i>K</i>=4   ,    <i>M</i>=9',
'180250015' => '180250015 numaralı M. ÇAĞIĞAN için:  <i>B</i>=30   ,    <i>K</i>=2   ,    <i>M</i>=2',
'180250028' => '180250028 numaralı S. TÜMER için:  <i>B</i>=70   ,    <i>K</i>=8   ,    <i>M</i>=7',
'180250038' => '180250038 numaralı H. GÜNDOĞAN için:  <i>B</i>=80   ,    <i>K</i>=2   ,    <i>M</i>=2',
'180250040' => '180250040 numaralı B. LALE için:  <i>B</i>=90   ,    <i>K</i>=2   ,    <i>M</i>=5',
'180250041' => '180250041 numaralı A. SARIKAYA için:  <i>B</i>=50   ,    <i>K</i>=8   ,    <i>M</i>=7',
'180250042' => '180250042 numaralı F. YANAR için:  <i>B</i>=60   ,    <i>K</i>=2   ,    <i>M</i>=9',
'180250046' => '180250046 numaralı O. TÜRKAN için:  <i>B</i>=80   ,    <i>K</i>=6   ,    <i>M</i>=2',
'180250047' => '180250047 numaralı S. ÖNDER için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=7',
'180250057' => '180250057 numaralı A. ÖRNEK için:  <i>B</i>=60   ,    <i>K</i>=3   ,    <i>M</i>=7',
'180250068' => '180250068 numaralı M. ALPARSLAN için:  <i>B</i>=40   ,    <i>K</i>=7   ,    <i>M</i>=6',
'180250070' => '180250070 numaralı N. ESER için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=7',
'180250074' => '180250074 numaralı E. SARAÇ için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=2',
'180250084' => '180250084 numaralı T. BEYTEKİN için:  <i>B</i>=80   ,    <i>K</i>=7   ,    <i>M</i>=4',
'180250097' => '180250097 numaralı S. AYDOS için:  <i>B</i>=30   ,    <i>K</i>=5   ,    <i>M</i>=2',
'180250099' => '180250099 numaralı İ. DEMİR için:  <i>B</i>=90   ,    <i>K</i>=3   ,    <i>M</i>=6',
'180250100' => '180250100 numaralı F. ERDOĞAN için:  <i>B</i>=40   ,    <i>K</i>=8   ,    <i>M</i>=8',
'180250101' => '180250101 numaralı F. TÜRK için:  <i>B</i>=90   ,    <i>K</i>=6   ,    <i>M</i>=7',
'180250103' => '180250103 numaralı M. KIYAK için:  <i>B</i>=20   ,    <i>K</i>=6   ,    <i>M</i>=2',
'180250104' => '180250104 numaralı F. ÇETİN için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=6',
'180250105' => '180250105 numaralı İ. SÖZERİ için:  <i>B</i>=60   ,    <i>K</i>=6   ,    <i>M</i>=2',
'180250106' => '180250106 numaralı M. ŞENOL için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=8',
'190250002' => '190250002 numaralı F. ÖZSOY için:  <i>B</i>=60   ,    <i>K</i>=8   ,    <i>M</i>=5',
'190250003' => '190250003 numaralı Y. AKAY için:  <i>B</i>=50   ,    <i>K</i>=2   ,    <i>M</i>=3',
'190250004' => '190250004 numaralı A. KAMİŞLİ için:  <i>B</i>=20   ,    <i>K</i>=8   ,    <i>M</i>=3',
'190250007' => '190250007 numaralı Ö. EROĞLU için:  <i>B</i>=40   ,    <i>K</i>=6   ,    <i>M</i>=2',
'190250008' => '190250008 numaralı K. GÖLPUNAR için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=2',
'190250010' => '190250010 numaralı Y. ŞİMŞEK için:  <i>B</i>=50   ,    <i>K</i>=2   ,    <i>M</i>=9',
'190250011' => '190250011 numaralı F. SAZAK için:  <i>B</i>=40   ,    <i>K</i>=8   ,    <i>M</i>=8',
'190250013' => '190250013 numaralı O. ALÇINAR için:  <i>B</i>=50   ,    <i>K</i>=5   ,    <i>M</i>=3',
'190250014' => '190250014 numaralı E. TANRIYAKUL için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=7',
'190250015' => '190250015 numaralı Ö. TOYRAN için:  <i>B</i>=60   ,    <i>K</i>=6   ,    <i>M</i>=5',
'190250016' => '190250016 numaralı Y. ŞENTÜRK için:  <i>B</i>=30   ,    <i>K</i>=3   ,    <i>M</i>=8',
'190250017' => '190250017 numaralı S. YÜCEL için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=8',
'190250018' => '190250018 numaralı T. ACAY için:  <i>B</i>=80   ,    <i>K</i>=6   ,    <i>M</i>=8',
'190250019' => '190250019 numaralı C. ATEŞ için:  <i>B</i>=20   ,    <i>K</i>=6   ,    <i>M</i>=7',
'190250021' => '190250021 numaralı K. ZORA için:  <i>B</i>=80   ,    <i>K</i>=8   ,    <i>M</i>=5',
'190250022' => '190250022 numaralı A. GÜNDEM için:  <i>B</i>=40   ,    <i>K</i>=4   ,    <i>M</i>=5',
'190250023' => '190250023 numaralı A. SÖNMEZ için:  <i>B</i>=50   ,    <i>K</i>=4   ,    <i>M</i>=9',
'190250024' => '190250024 numaralı H. CANYURT için:  <i>B</i>=60   ,    <i>K</i>=5   ,    <i>M</i>=6',
'190250025' => '190250025 numaralı F. SOLMAZ için:  <i>B</i>=50   ,    <i>K</i>=2   ,    <i>M</i>=8',
'190250026' => '190250026 numaralı M. TANRIKULU için:  <i>B</i>=80   ,    <i>K</i>=7   ,    <i>M</i>=3',
'190250027' => '190250027 numaralı H. DEMİRTAŞ için:  <i>B</i>=20   ,    <i>K</i>=5   ,    <i>M</i>=7',
'190250028' => '190250028 numaralı İ. BİNGÖL için:  <i>B</i>=80   ,    <i>K</i>=3   ,    <i>M</i>=3',
'190250029' => '190250029 numaralı A. MOLLAOĞLU için:  <i>B</i>=90   ,    <i>K</i>=7   ,    <i>M</i>=5',
'190250031' => '190250031 numaralı Y. YENEN için:  <i>B</i>=20   ,    <i>K</i>=8   ,    <i>M</i>=6',
'190250032' => '190250032 numaralı N. ERBUĞA için:  <i>B</i>=80   ,    <i>K</i>=5   ,    <i>M</i>=8',
'190250033' => '190250033 numaralı M. GÜVEN için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=3',
'190250034' => '190250034 numaralı G. ÖZBAKIR için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=5',
'190250035' => '190250035 numaralı T. YAR için:  <i>B</i>=60   ,    <i>K</i>=5   ,    <i>M</i>=6',
'190250036' => '190250036 numaralı R. KOÇAK için:  <i>B</i>=90   ,    <i>K</i>=4   ,    <i>M</i>=6',
'190250039' => '190250039 numaralı O. DEMİREL için:  <i>B</i>=80   ,    <i>K</i>=7   ,    <i>M</i>=4',
'190250040' => '190250040 numaralı A. DUVAN için:  <i>B</i>=90   ,    <i>K</i>=6   ,    <i>M</i>=9',
'190250042' => '190250042 numaralı H. ÖRGÜLÜ için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=9',
'190250043' => '190250043 numaralı R. KUŞDAL için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=7',
'190250046' => '190250046 numaralı B. EROL için:  <i>B</i>=30   ,    <i>K</i>=2   ,    <i>M</i>=4',
'190250047' => '190250047 numaralı D. ERDEMİR için:  <i>B</i>=20   ,    <i>K</i>=8   ,    <i>M</i>=6',
'190250048' => '190250048 numaralı Z. YILDIRIM için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=8',
'190250049' => '190250049 numaralı B. ÖZTÜRK için:  <i>B</i>=50   ,    <i>K</i>=6   ,    <i>M</i>=8',
'190250051' => '190250051 numaralı A. ÇETİN için:  <i>B</i>=60   ,    <i>K</i>=2   ,    <i>M</i>=3',
'190250052' => '190250052 numaralı H. SAĞLAM için:  <i>B</i>=50   ,    <i>K</i>=3   ,    <i>M</i>=3',
'190250054' => '190250054 numaralı A. KALAYCI için:  <i>B</i>=20   ,    <i>K</i>=5   ,    <i>M</i>=3',
'190250055' => '190250055 numaralı A. GÜZEL için:  <i>B</i>=90   ,    <i>K</i>=4   ,    <i>M</i>=2',
'190250056' => '190250056 numaralı B. DOĞRUER için:  <i>B</i>=50   ,    <i>K</i>=8   ,    <i>M</i>=6',
'190250057' => '190250057 numaralı A. ÇEVİK için:  <i>B</i>=30   ,    <i>K</i>=3   ,    <i>M</i>=7',
'190250058' => '190250058 numaralı B. ÇETİN için:  <i>B</i>=20   ,    <i>K</i>=2   ,    <i>M</i>=6',
'190250060' => '190250060 numaralı N. BİCİ için:  <i>B</i>=60   ,    <i>K</i>=5   ,    <i>M</i>=9',
'190250061' => '190250061 numaralı A. AKTAŞ için:  <i>B</i>=40   ,    <i>K</i>=3   ,    <i>M</i>=6',
'190250062' => '190250062 numaralı A. SAKA için:  <i>B</i>=70   ,    <i>K</i>=4   ,    <i>M</i>=8',
'190250063' => '190250063 numaralı G. KESKİN için:  <i>B</i>=90   ,    <i>K</i>=2   ,    <i>M</i>=5',
'190250065' => '190250065 numaralı D. MAVİLİ için:  <i>B</i>=30   ,    <i>K</i>=7   ,    <i>M</i>=4',
'190250067' => '190250067 numaralı H. YAKAR için:  <i>B</i>=30   ,    <i>K</i>=8   ,    <i>M</i>=7',
'190250068' => '190250068 numaralı B. EVCİ için:  <i>B</i>=50   ,    <i>K</i>=4   ,    <i>M</i>=5',
'190250069' => '190250069 numaralı A. ATEŞ için:  <i>B</i>=40   ,    <i>K</i>=5   ,    <i>M</i>=4',
'190250070' => '190250070 numaralı S. AYDIN için:  <i>B</i>=90   ,    <i>K</i>=5   ,    <i>M</i>=9',
'190250071' => '190250071 numaralı A. DOĞANTEKİN için:  <i>B</i>=70   ,    <i>K</i>=5   ,    <i>M</i>=2',
'190250072' => '190250072 numaralı Y. DURAK için:  <i>B</i>=80   ,    <i>K</i>=3   ,    <i>M</i>=6',
'190250076' => '190250076 numaralı Ç. ÇAKMAK için:  <i>B</i>=90   ,    <i>K</i>=3   ,    <i>M</i>=3',
'190250077' => '190250077 numaralı G. BAYIR için:  <i>B</i>=70   ,    <i>K</i>=2   ,    <i>M</i>=3',
'190250090' => '190250090 numaralı A. BAL için:  <i>B</i>=70   ,    <i>K</i>=2   ,    <i>M</i>=8',
'200202074' => '200202074 numaralı O. TOPOĞLU için:  <i>B</i>=70   ,    <i>K</i>=3   ,    <i>M</i>=5'];
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
