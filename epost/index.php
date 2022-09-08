<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-posta sistemi ilk sayfa</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container" align="center">

<form action="index.php" method="post" enctype="multipart/form-data">
<table align="center" border="1px">
<tr>
<td><input type="submit" value="Dosya Yükle" /></td>
<td><input type="file" name="dosya" /></td>
</form>

<?php
if(isset($_FILES['dosya'])) {
echo 'Dosya gönderilmiş';
} else {
echo 'Lütfen bir dosya seçin ve Dosya Yükle butonuna basın.' ;
}
$sayac = 0;
if(isset($_FILES['dosya'])){
$hata = $_FILES['dosya']['error'];
if($hata != 0) {
echo 'Yüklenirken bir hata gerçekleşmiş.';
} else {
$boyut = $_FILES['dosya']['size'];
if($boyut > (1024*1024*3)){
echo 'Dosya 3MB den büyük olamaz.';
} else {
$isim = $_FILES['dosya']['name'];
$uzanti = explode('.', $isim);
$uzanti = $uzanti[count($uzanti)-1];
if($uzanti != 'csv') {
echo 'Yanlızca CSV dosyaları gönderebilirsiniz.';
echo $uzanti . ' yüklemeye çalıştığınız uzantı';
} else {
$dosya = $_FILES['dosya']['tmp_name'];
copy($dosya, '' . $_FILES['dosya']['name']);
echo 'Dosyanız upload edildi!';
$sayac++;
}
}
}
}

function yonlendir($sure,$sayfa){
$deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n";
echo $deger;
}
if($sayac > 0){
yonlendir(5,"mail.php");
}
?>

</div>
</body>
</html>