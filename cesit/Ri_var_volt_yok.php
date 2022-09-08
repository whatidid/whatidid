<html>
 <head>
  <title>R*i var, voltaj yok</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body>
 <body bgcolor="#33CCFF" text="#000000">
 
İstek üzerine alan bilgisi gerektiren bir bilmece sordum.<br><br>
Bir direnç telinden sıfırdan farklı bir akım geçiyor. Akım sabit veya değişken olabilir (çözüm her iki durumu da kapsıyor). Fakat bu direnç teli üzerindeki hangi iki nokta seçerseniz seçin o noktalar arasındaki potansiyel farkı sıfır volt oluyor. Bu nasıl mümkün olabilir?<br><br>
Soruda özel bazı noktalar denseydi yüksek frekanslı akım geçtiğini ve noktalar arasının tamsayıda dalga boyu kadar olduğunu söyleyebilirdiniz. Ama herhangi iki nokta için de geçerli çözüm soruluyor. Özel bazı anlarda değil deney süresince hep sıfır volt görülüyor.<br><br>

<form action="" method="post">
<p><input type="submit" name="ipucu" value="İPUCU VER"/></p>
</form>
<?php
if (isset($_POST['ipucu'])) {
   echo "Elektromanyetik indüksiyon<br>";
}
?>

<form action="" method="post">
<p><input type="submit" name="Goster" value="Cevabı GÖSTER"/></p>
</form>
<?php
if (isset($_POST['Goster'])) {
   echo "Direnç teliyle çember şeklinde bir halka yapılır.<br>";
   echo "Bu halka düzlemine dik doğrultuda, yere göre sabit, zamana göre değişken bir manyetik akı yoğunluğu (B) uygulanır.<br>";
   echo "Simetrik yapıdan dolayı halkanın her tarafında birim uzunlukta endüklenen emk aynıdır.<br>";
   echo "Bu emk'nın geçirdiği indüksiyon akımından dolayı direnç teli üzerinde birim uzunluktaki gerilim düşümü de halkanın her tarafında aynıdır.<br>";
   echo "Endüklenen emk ve gerilim düşümlerinin tam halka turu boyunca net bileşkesi sıfırdır (Kirshoff gerilim yasası).<br>";
   echo "Öyleyse birim uzunluktaki bileşkesi de sıfırdır. Yani herhangi bir halka parçasında endüklenen gerilim, o parçadaki gerilim düşümüne eşittir. Aksi olsaydı bir tam turdaki net bileşke toplamı sıfır olmazdı.<br><br>";
   echo "Bu nasıl oluyor da oluyor diye ek açıklama isterseniz, şekildeki devrelerde a1,a2,... gibi düğümler arasındaki potansiyel farkının hep sıfır olduğuna dikkat ediniz. Limit n sonsuza giderkenki devre ise bizim halka örneğimizin matematiksel modelidir.<br><br>";
   echo "<img border=\"0\" src=\"devrebilmece.gif\" width=\"810\" height=\"502\"><br>";
   echo "Halkadaki herhangi 2 nokta, a1,a2,...,an noktalarından herhangi ikisi sayılabilir ve bunlar arasındaki potansiyel farkı hep sıfırdır. Çünkü her dR parçası üzerindeki gerilim düşümü, yanındaki dV kaynak gerilimini yok edecek şekildedir.<br>";
}
?>


 </body>
</html>