<html>
 <head>
  <title>Bisiklet paylaşmak</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
<p>Bir yol, yürüyerek 20, bisikletle 5 dakikada alınabiliyor. 3 kişi 2 bisiklet kullanarak bu yolu yaklaşık 10 dakikada nasıl alır?
Bisikletler tek kişiliktir. 3 kişi yola aynı zamanda çıkıyorlar ve süre başlıyor. En geç varan varıncaya kadar yaklaşık 10 dakika olacak.</p>

<p>Bu sorunun cevabındaki yöntemle kişi ve bisiklet sayısı değişse de genellikle ortalama sürede varmak mümkündür. Örneğin bu soruda 1 kişinin yaya, 2 kişinin bisikletli olduğu durumdaki ortalama süre: (1x20dk + 2x5dk) / 3 = 10dk
</p>
<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   echo "<p>Bu üç kişiyi A, B ve C diye adlandıralım. A ve B bisikletle, C yaya yola başlar. </br>
   Yolun 1/3'üne ulaşınca B bisikleti bırakıp yürümeye başlar.</br>
   Yolun 2/3'üne ulaşınca A bisikleti bırakıp kalan yolu yürüyerek tamamlar.</br>
   Yolun 1/3'üne yürüyerek ulaşan C, daha önce B'nin bıraktığı bisikleti alarak yolu bisikletle tamamlar.</br>
   Yolun orta üçte birlik kısmını yürüyen B, yolun 2/3'üne ulaşınca A'nın bırakmış olduğu bisikleti alır ve yolun kalanını bisikletle tamamlar.</p>";
   echo "<p>Böylece her biri yolun üçte birini yaya, üçte ikisini bisikletle gittiği için toplamda</br>(1/3)*20dk + (2/3)*5dk = 10 dk'da yolu tamamlamış olur. Bisiklete inip binme süreleri ihmal ediliyor. Ayrıca burada yolda bırakılan bisikletin çalınmadığı kabul edilmektedir. Ya da kilitlendiği ve sonradan o bisikleti kullanacak kişide anahtar olduğu varsayılıyor.</p>";
   echo "<p>Bu yöntem araba gibi birden fazla kişinin binebildiği araçlarla, bisikletle veya yaya gitme karışımı durumlar için de uygulanabilir ve çok ters özel sayılar kullanılmazsa çoğu kez ortalama sürede herkes birlikte yola çıkıp yaklaşık aynı zamanda hedefe ulaşabilir.</p>";
}
?>


 </body>
</html>