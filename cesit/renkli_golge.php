<html>
 <head>
  <title>Renkli gölge</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
<p>Beyaz duvarda renkli görülen gölge nasıl elde edilir? Meselâ sıradan gölgelerin rengine siyahımsı dersek, soluk sarımsı veya pembemsi görülen gölge nasıl elde edilir? Kullanılan ışık kaynağının rengiyle görülen gölge rengi arasındaki ilişki nedir?</p>
<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   echo "Aydınlatmada beyaz ışığın hakim olduğu bir ortamda başka bir renkte zayıf bir ışık kaynağı daha varsa beyaz ışık kaynağından dolayı belirgin bir gölgenin yanında diğer ışık kaynağından dolayı da soluk bir gölge olur. Bu soluk gölge diğer ışık kaynağının zıttı renkte görülür (Eklemeli kırmızı-yeşil-mavi sistemine göre zıttı. Bilgisayar ekranındaki renklerin zıttını almanız gibi). Çünkü bu soluk gölge, çevresine oranla, zayıf ışık kaynağının renginde daha az ışık alır ve çevresine göre o rengin zıttı gibi algılanır. Meselâ mavi TV veya bilgisayar ekranının yakınında, odanın beyaz ışığının gölgesi yanında soluk sarı algılanan zayıf bir gölge daha oluşur. Ekran sarı olsa, bu gölge soluk mavi algılanır.";
}
?>


 </body>
</html>