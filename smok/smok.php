<html xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta http-equiv="Content-Language" content="tr">
<meta name="GENERATOR" content="Microsoft FrontPage 12.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">

<style type="text/css">
.style1 {
				color: #FF0000;
				font-weight: bold;
}
</style>

</head>
<body bgcolor="#33CCFF">
<p><b><font color="#FF0000">07.01.2016</font></b></p>
<p>Makina Mühendisliği Bölümü'ne verilen derse ait dökümanlar bulunmaktadır.</p>
<p><a href="smok_son.pdf">Son final soruları ve cevap anahtarı</a></p>
<p><a href="smok_fb_soru_ornekleri_d3.pdf">Final/Bütünleme soru örnekleri ve çözüm veya cevapları</a> güncellenmiştir (29.12.2015). 4.5 sorusunda katsayı hatası düzeltildi(06.01.2016). Son grubun son üç soru sağlamasında A-B*K sayısal olarak yerine yazılırken B ile K ters yazılıp doğru sıraya göre çarpılmıştı, düzeltildi. Ayrıca det parantez hatası düzeltildi(köşesiz matris parantezi)  (<font color="#FF0000">07.01.2016</font>).<br/>
 Hata bulursanız bildiriniz. Olabilecek düzeltmeleri takip ediniz.
</p>
<p>Durum geribeslemesi için kendiniz keyfi matrisler ve istenen özdeğerler atayarak soru üretebilirsiniz. Bulduğunuz sonuçları şu MATLAB <a href="dnmStateFeedback.mdl">model dosyası</a> üzerinde deneyebilirsiniz. Ancak bu modeli çalıştırmadan önce şu satırı kendi bulduğunuz değerlerinize göre düzenleyip çalıştırmalısınız:</br>
n=2; A=[1 5;-2 3]; B=[0;2]; C=[1 1]; K=[11.1 12]; Kr=12.5;</br>
Bu sistemde keyfi olarak y* = 2.3 alınmıştır. İsterseniz bu değeri değiştirebilirsiniz. Sistem çıkışının y* değerine yakınsadığını grafikten görmelisiniz.</p>
<p>Keyfi bir A kare matrisi için e^(A*t) matrisi sorusu da üretip çözebilirsiniz. Çözümünüzün doğruluğunu MATLAB'da görmek için bir defalık</br>
t=sym('t')</br>
komutunu çalıştırdıktan sonra, A matrisiniz her değiştiğinde A'yı düzenleyip aşağıdakikomut satırını çalıştırabilirsiniz. Unutmayınız, expm komutu matris olarak eksponansiyel alır, exp komutu ise skaler olarak.</br>
A=[-2 4;1 -2];expm(A*t)</p>
<p><a href="smok_sorucevap.pdf">Tüm sınav soruları ve olanların cevap anahtarları</a></p>
<p><a href="smok_soru_ornekleri_d.pdf">Vize soru örnekleri ve çözüm veya cevapları</a>(5.3 cevabı düzeltildi (05.01.2016))</p>
</body>

</html>