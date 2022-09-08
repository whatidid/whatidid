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
<p>Makina M�hendisli�i B�l�m�'ne verilen derse ait d�k�manlar bulunmaktad�r.</p>
<p><a href="smok_son.pdf">Son final sorular� ve cevap anahtar�</a></p>
<p><a href="smok_fb_soru_ornekleri_d3.pdf">Final/B�t�nleme soru �rnekleri ve ��z�m veya cevaplar�</a> g�ncellenmi�tir (29.12.2015). 4.5 sorusunda katsay� hatas� d�zeltildi(06.01.2016). Son grubun son �� soru sa�lamas�nda A-B*K say�sal olarak yerine yaz�l�rken B ile K ters yaz�l�p do�ru s�raya g�re �arp�lm��t�, d�zeltildi. Ayr�ca det parantez hatas� d�zeltildi(k��esiz matris parantezi)  (<font color="#FF0000">07.01.2016</font>).<br/>
 Hata bulursan�z bildiriniz. Olabilecek d�zeltmeleri takip ediniz.
</p>
<p>Durum geribeslemesi i�in kendiniz keyfi matrisler ve istenen �zde�erler atayarak soru �retebilirsiniz. Buldu�unuz sonu�lar� �u MATLAB <a href="dnmStateFeedback.mdl">model dosyas�</a> �zerinde deneyebilirsiniz. Ancak bu modeli �al��t�rmadan �nce �u sat�r� kendi buldu�unuz de�erlerinize g�re d�zenleyip �al��t�rmal�s�n�z:</br>
n=2; A=[1 5;-2 3]; B=[0;2]; C=[1 1]; K=[11.1 12]; Kr=12.5;</br>
Bu sistemde keyfi olarak y* = 2.3 al�nm��t�r. �sterseniz bu de�eri de�i�tirebilirsiniz. Sistem ��k���n�n y* de�erine yak�nsad���n� grafikten g�rmelisiniz.</p>
<p>Keyfi bir A kare matrisi i�in e^(A*t) matrisi sorusu da �retip ��zebilirsiniz. ��z�m�n�z�n do�rulu�unu MATLAB'da g�rmek i�in bir defal�k</br>
t=sym('t')</br>
komutunu �al��t�rd�ktan sonra, A matrisiniz her de�i�ti�inde A'y� d�zenleyip a�a��dakikomut sat�r�n� �al��t�rabilirsiniz. Unutmay�n�z, expm komutu matris olarak eksponansiyel al�r, exp komutu ise skaler olarak.</br>
A=[-2 4;1 -2];expm(A*t)</p>
<p><a href="smok_sorucevap.pdf">T�m s�nav sorular� ve olanlar�n cevap anahtarlar�</a></p>
<p><a href="smok_soru_ornekleri_d.pdf">Vize soru �rnekleri ve ��z�m veya cevaplar�</a>(5.3 cevab� d�zeltildi (05.01.2016))</p>
</body>

</html>