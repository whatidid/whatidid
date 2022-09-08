<html>
 <head>
  <title>Aynı yol aynı teker</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
<p>Belirli bir çaptaki bir teker hiç kaymadan (bir dişlinin 
dönmesi gibi) dönerek belirli bir uzunluktaki bir yolu kendi ekseni etrafında 1 
tam dönüş ile katediyor. Daha sonra, aynı teker aynı uzunluktaki bir yolu kendi 
ekseni etrafında 2 tam dönüş ile katediyor. Daha sonra, aynı teker aynı 
uzunluktaki bir yolu kendi ekseni etrafında 3 tam dönüş ile katediyor. Yolun 
uzunluğu ve teker çapı hep aynı olduğu ve teker kaymadığı halde bu nasıl mümkün 
olur? Matematiksel olarak nasıl ispatlanır?</p>
<form action="" method="post">
<p><input type="submit" name="ipucu" value="İPUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   echo "<p>Dünya 1 yılda kendi ekseni etrafında yaklaşık 366,25 defa döner; çoğu kişinin sandığı gibi 365,25 değil!</p>";
}
?>
<br>
<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   echo "<p>Aslında her üç durumda da yol aynı çizgi olabilir, bu yol düzlemsel kapalı bir eğri olmak şartıyla. 
   Teker bu eğri üzerinde eğrinin bulunduğu düzleme dik olarak dolaşırsa klasik yolla hesaplanan ToplamYol/TekerÇevresi kadar sayıda döner. 
   Bu, sorudaki ikinci duruma karşılık gelir, ya da o durumun Şekil 2'deki AB çizgisi gibi düz bir yolda normal dönerek yol alma olduğunu düşünebiliriz.</p>";
   echo "<p>Eğer teker, kendi düzlemi sözkonusu kapalı eğri ile aynı düzlemde kalarak ve eğrinin içinden dönerek yol alıyorsa, 
   aynı uzunluktaki düz yoldakinden 1 eksik tur ile yolu tamamlar. Bu da sorudaki birinci duruma karşılık gelir.</p>";
   echo "<p>Eğer teker, kendi düzlemi sözkonusu kapalı eğri ile aynı düzlemde kalarak ve eğrinin dışından dönerek yol alıyorsa, 
   aynı uzunluktaki düz yoldakinden 1 fazla tur ile yolu tamamlar. Bu da sorudaki üçüncü duruma karşılık gelir. ";
   echo "Bu durumda da tıpkı Dünya'nın Güneş etrafındaki ve kendi ekseni etrafındaki dönüş yönlerinin aynı olması gibi, 
   halka eğri etrafındaki dönüş yönü ile tekerin kendi ekseni etrafındaki dönüş yönü aynı olacak şekilde dönüyor demektir.
   Bu durumda aynı uzunluktaki doğrusal bir yoldakinden biraz daha fazla dönerek ilerler. Bu fazlalık kapalı eğrinin bir dolaşımında tam 1 tur eder.</p>
   <p>Dünyanın bu fazladan bir turu Yer'deki herhangi bir noktada Güneşi ve geceyi günde toplam yaklaşık 4 dakika kadar fazla görme etkisi yaptığından Güneş günü olarak algılanmaz. 
   <br>Öte yandan Venüs'ün kendi ekseni etrafındaki dönüş yönü Güneş etrafındaki dönüş yönüne ters olduğundan Venüs'deki bir noktada Venüs yılının 
   Venüs gün sayısından bir fazla sayıda gün algılanırdı.<br>Ay'ın kendi ekseni etrafındaki dönüşüyle Dünya etrafındaki dönüşü aynı yönde ve aynı açısal hızda
   olduğu içindir ki Ay'ın Dünya'ya bakan yüzü hep aynıdır (1-1=0 tur/ay algılanıyor).</p>";

   echo "<p>İSPAT: <br><img border=\"0\" src=\"tekerlibilmece.jpg\" width=\"946\" height=\"659\">";
   
   echo "<br> 1. durumdaki harekette Şekil 1'de gösterildiği gibi tekerin yol çevresindeki ve kendi ekseni etrafındaki dönüş yönleri zıttır.
   Bu hareket, iki hareketin bileşkesi olarak düşünülebilir. Biri Şekil 2'de gösterilen hareket, diğeri de Şekil 2'de teker B noktasına yapışık iken
   AB çizgisini B noktasından sola doğru büküp A noktasıyla çakıştırarak bir halka haline getirme hareketi. Bu sırada teker önceki turlarının aksi 
   yönde kendi ekseni etrafında bir defa dönmüş olacağından toplam dönüş sayısı düz yoldakinden bir eksik olacaktır.<br>";
   echo "3. durumdaki harekette de Şekil 3'te gösterildiği gibi tekerin yol çevresindeki ve kendi ekseni etrafındaki dönüş yönleri aynıdır.
   Bu hareket, iki hareketin bileşkesi olarak düşünülebilir. Biri Şekil 2'de gösterilen hareket, diğeri de Şekil 2'de teker B noktasına yapışık iken
   AB çizgisini B noktasından sağa doğru büküp A noktasıyla çakıştırarak bir halka haline getirme hareketi. Bu sırada teker önceki turlarıyla aynı 
   yönde kendi ekseni etrafında bir defa dönmüş olacağından toplam dönüş sayısı düz yoldakinden bir fazla olacaktır.</p>";
   echo "<p>Not: Halka yolun çember şeklinde olması şart değildir, tekerin boşluk bırakmadan dönebileceği kadar geniş bükümlü herhangi bir halka şekli olabilir.</p>";
}
?>


 </body>
</html>