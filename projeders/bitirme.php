<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Language" content="tr">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>12</title></head>
<body bgcolor="#33ccff">

<p align="justify"><font color="#FF0000"><b>10</b></font><b><font color="#ff0000">.10.20</font></b><font color="#FF0000"><b>12</b></font></p>
  <p>Bitirme projesi 
  formu (<a href="../bitirme_projesi_formu.doc" style="color: blue; text-decoration: underline;">word dosyas�</a>) veya
  <a href="../bitirme_projesi_formu.gif" style="color: blue; text-decoration: underline;">gif dosyas�</a> olarak al�nabilir 
  (bilgisayarda doldurmak isteyenlerin paint program�yla yazmalar� tavsiye 
  edilir.)</p>
<p align="justify">2010-2011 e�itim-��retim y�l�nda Bitirme Projesi 1-2 dersleri i�in vermeyi d���nd���m proje 
konular� a�a��da verilmi�tir.
<font face="Times New Roman">Projeler aksi belirtilmedik�e 2 d�nemliktir. </font>Ancak 2 d�nemlik projeler i�in
<b><font color="#FF0000">ilk d�nem uygulamal� �al��ma</font></b>, ikinci d�nem ise uygulamadaki 
eksikliklerin giderilmesi ve rapor haz�rlanmas� �eklinde istiyorum. ��rencinin 
ilk d�nem ba�ar�yla �al��t�ramad��� bir uygulamayla ge�ebilmesi i�in, d<i>evrenin 
makul bir tasar�mla finaller ba�lamadan 1 hafta �ncesine kadar tamamlanm�� 
olarak g�sterilmesini <u><b>ve</b></u> finaller bitinceye kadar, �al��mama 
nedeniyle ilgili tahminler, giderilmesi i�in yap�lanlar ve sonu�lar�yla ilgili
<u>�ok say�da</u> denemeyi anlatan gayri resmi nitelikte (�dev yaz�m kurallar� 
aranmaks�z�n, el yaz�s� da olabilir) bir rapor verilmesini </i>isterim.</p>

<p align="justify">Kontenjanlar (Normal ��retim / �kinci ��retim i�in)
<font face="Times New Roman">bo�sa "<font color="#0000ff" size="5">&#9675;</font>" ,&nbsp;&nbsp; 
dolmu�sa "<font color="#0000ff" size="5">&#9679;</font>" bi�imlerinde 
g�sterilmi�tir.</font></p>

<p class="MsoNormal" align="justify"><font color="#0000FF"><b>MSP430 
uygulamalar�</b></font><font color="#FF0000" face="Times New Roman">&nbsp;</font><b><font color="#0000ff" face="Times New Roman" size="5">&nbsp; </font></b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font><b><font color="#0000ff" face="Times New Roman">&nbsp; / <font size="5">&nbsp;</font></font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>

<p class="MsoNormal" align="justify">MSP430 ailesi, Texas Instruments firmas� 
taraf�ndan �retilen, USB'den programlay�c�s�yla birlikte bir flash disk 
b�y�kl���nde ucuz mikrodenetleyicilerdir. Esas mikrodenetleyici kart� 3-4 cm<sup>2</sup> 
kadar olup �zerinde �ok say�da dijital giri� ��k�� u�lar� ve ADC d�n��t�r�c�s� 
bulunmaktad�r. C ya da C++ ile yaz�lan programlar derlenip y�klenebilmektedir. 
Elimde bulunan telsiz (RF) haberle�me yapabilen bir �ift mikrodenetleyici kart� 
ve bir USB programlay�c�s� ile kablosuz bilgi g�nderip al�c� taraf�nda ekrana 
yazd�rma gibi (veya ��rencinin �nerece�i ba�ka bir konu da olabilir) bir i� 
yapmas� istenmektedir. Ayr�ca yine elimde bulunan telsiz olmayan bir 
mikrodenetleyici kart� ve bir USB programlay�c�s� ile <abbr title="Ayarlanan frekansta yan�p s�nen ���k">
<a href="proje.htm#strobo">strobofla�</a></abbr>
gibi (veya 
��rencinin �nerece�i ba�ka bir konu da olabilir) bir i� yapmas� istenmektedir.</p>

<p align="justify"><b><font color="#0000FF">M</font><font color="#0000ff" face="Times New Roman">ultiplexer 
ve
</font><font color="#0000FF">ADC </font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Bu projede �oklu analog giri�ten bir multiplexer (4067 gibi) 
ve temel entegre d�zeyinde tek kanall� h�zl� bir ADC eleman�yla �l��mler 
al�nmas� sa�lanarak �ok kanall� bir ADC devresi elde edilmesi istenmektedir.</p>

<p align="justify"><b><font color="#0000FF">Kuyrukmatik </font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675; </font></b>
<font color="#0000ff" size="5" face="Times New Roman">/ </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Bir numara da��tma merkezli, �� hizmet noktal�, 4 (��� hizmet 
noktalar�nda, biri ortada) s�ra numaras� g�stergeli bir kuyruk sistemi 
istenmektedir. Hizmet noktalar�ndan d��meye bas�ld���nda s�radaki numara o 
hizmet noktas�ndaki ve ortadaki s�ra g�stergesinde g�r�nt�lenecektir. Numara 
da��tma merkezinde fi� verilmesi yerine kolayl�k olsun diye ayr� bir al�nan s�ra 
numaras� g�stergesi olacakt�r.</p>

<p align="justify"><b><font color="#0000FF">Kayna��ndan yal�t�ml� gerilim 
kayna�� </font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font><b><font color="#0000ff" face="Times New Roman">&nbsp; / <font size="5">&nbsp;</font></font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<p align="justify">Say�sal voltmetre ve ampermetre gibi �l�� aletleri, �l��m 
noktalar�ndaki gerilimden yal�t�ml� bir besleme kayna��na ihtiya� duyarlar. Ayn� 
gerilimi �l�� aletinin besleme kayna�� olarak kullanmak i�in b�yle bir sisteme 
ihtiya� vard�r. �l��m noktas�ndaki AC veya DC olabilen gerilim yeterli 
b�y�kl�kteyse bunu do�rultup anahtarlay�p minik bir trafoyla (anahtarlamal� g�� 
kayna�� trafosu) yal�t�p tekrar do�rultup reg�leli olarak istenen sabit gerilim 
de�erine (mesela 9V) getiren bir kaynak yap�lmas� istenmektedir. Anahtarlama 
komutu herhangi bir giri� voltaj�n�, ��k��ta istenen sabit voltaj de�eri 
g�r�lecek �ekilde ayarlanacakt�r. Mesela �l��m noktas�ndaki gerilimin 20V-600V 
aral���nda AC veya DC herhangi bir de�er olmas� halinde 9V yal�t�ml� ��k�� veren 
bir kaynak olmal�d�r. K���k ak�ml� olabilir. Bu y�ntem, bu sistemin �ekece�i 
ak�m�n, �l��lmekte olan gerilimi fazla etkilemedi�i durumlarda 
kullan�labilecektir.</p>

<p class="MsoNormal" align="justify"><b><font color="#0000ff">USB protokol�yle 
bilgi al��veri�i</font></b></p>

<p class="MsoNormal" align="justify">2 d�nemlik bir projedir. �lk d�nemde USB 
protokol�yle haberle�me protokol�n�n ��renilmesi istenmektedir. Bunun 
do�rulanmas� i�in bilgisayara USB ile ba�lanan basit bir devre �zerinde istenilen ledlerin yak�lmas� veya 
anahtar konumlar�n�n alg�lanmas� gerekmektedir. �kinci d�nemde ise ��renilen bu 
bilgiyle bir uygulama yap�lmas� istenecektir. Bu uygulama �unlardan biri 
olabilir:<br><font color="#0000ff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
USB destekli PWM&nbsp;&nbsp; </font>
<font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#9675;&#9675;</font><font color="#0000ff"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
USB destekli ADC/DAC</font><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&#9675;&#9675;</font></p>

<p class="MsoNormal" align="justify"><font face="Times New Roman">Bu �devlerin 
internetten bulunabilecek olanlarla ayn� olmamas� i�in anlamayan�n yapamayaca�� 
baz� farkl�l�klar istenecektir.</font></p>

<p align="justify"><font color="#0000FF"><b>�� fazl� de�i�ken sin�zoidal dalga 
�reteci</b></font><b><font color="#0000FF"> </font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Genlik ve frekans� t�m fazlar i�in ortak birer noktadan 
ayarlanacak sin�zoidal dalga �reteci istenmektedir. Genlik ve frekans de�i�irken 
yeni frekansa g�re fazlararas� 120<font face="Times New Roman"><span lang="en">�</span> 
hep korunmal�d�r. �zel tasar�m gerektirmektedir. Haz�r bulunabilecek bir proje 
de�ildir.</font></p>

<p class="MsoNormal" align="justify"><b><font color="#0000ff">Kap� zilinde 
sekreter</font><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp; 
&#9675;&#9675;</font></b></p>

<p class="MsoNormal" align="justify">Zile bas�ld���nda telesekreterlerde oldu�u 
gibi sesli mesaj b�rak�lmas� istenecek ancak zilden kumandal� olarak 
�al��t�r�lacakt�r.</p>

<p class="MsoNormal" align="justify"><b><font color="#0000ff">Ad�m say�c�</font><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp; 
&#9675;&#9675;</font></b></p>
<p align="justify">Sa�l�k i�in y�r�y�� yapanlar�n i�ine yarayacak bir cihaz 
istenmektedir. Bele veya baca�a tak�lacak bu cihaz, bir ivme sens�r� yard�m�yla 
d�zenli y�r�y�� yap�ld���n� alg�layacak ve ad�mlar� sayacakt�r. Hatta, y�ksek ve 
d���k frekansl� ad�mlar� ayr� ayr� sayarak kalbe faydas� olan egzersiz 
niteli�indeki ad�mlar�n bilinmesine yarayacakt�r.</p>
<p align="justify"><b><font color="#0000ff">R�zg�ra g�re y�nlendirme </font>
<font color="#0000ff" face="Times New Roman" size="5">&nbsp; </font></b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<p align="justify"><font face="Times New Roman">Bir r�zg�r sens�r� yard�m�yla 
r�zg�r�n y�n� alg�lanacak ve bir d�zenek r�zg�r y�n�yle istenilen (mesela dik) 
bir a�� yapacak �ekilde y�nlendirilecektir. Bunun i�in ad�m motoru 
kullan�labilir. Bir yelkenin veya r�zg�r t�rbininin otomatik olarak 
y�nlendirilmesine yarayabilecektir.</font></p>
<p align="justify"><font color="#0000ff"><b>Rejeneratif frenleme de yapabilen dc 
motor s�r�c� kart�</b></font><b><font color="#0000ff" face="Times New Roman" size="5">&nbsp; </font></b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<p align="justify">Makine M�hendisli�i B�l�m� ile ortak �al���lacak olup 
benzinli ve elektrikli �al��abilecek bir araban�n elektrik (dc) motorunu s�recek 
bir kart yap�lacakt�r. Darbe geni�lik mod�lasyonu (PWM) ile motor h�zland�r�l�p 
yava�lat�lacakt�r. Ancak yava�latma s�ras�nda mekanik enerji elektrik enerjisine 
d�n��t�r�lerek ak�ye yeniden kazand�r�lacakt�r. Ayr�ca benzinli motor �al���rken 
bir yandan da dc makine jenerat�r modunda �al��t�r�larak ak�y� dolduracakt�r..</p>
<p align="justify"><b><font color="#0000ff">Ayarl� anahtarlamal� g�� kayna��
</font><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<p align="justify">AC'den DC'ye do�rultma yap�ld�ktan sonra bir DC-DC �evirici 
ile gerilim seviyesi ayarlanacakt�r. Opampl� basit bir integral kontrol ile 
anahtarlaman�n g�rev oran� (duty cycle) otomatik olarak ayarlanarak y�kde�i�se 
de gerilimin istenen de�erde tutulmas� sa�lanacakt�r. Tercihen mikrodenetleyici
<u>kullan�lmadan</u> yap�lmas� istenmektedir.</p>

<p class="MsoNormal" align="justify"><b><font color="#0000ff">Ses i�leme</font></b></p>

<p class="MsoNormal" align="justify">Tek d�nemlik ya da 2 d�nemlik se�enekleri 
vard�r.</br>Tek d�nemlik olanda <font color="#0000ff">erkek ve bayan sesinin ay�rt 
edilmesi</font> istenmektedir. <b><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></br>2 d�nemlik �devler ise </br>
Konu�ma ve m�zik sesinin ay�rt edilmesi&nbsp; <b><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></br>
Konu�malardaki "eee" seslerinin kesilmesi&nbsp; <b><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></br>
�zel baz� harflerin (sesli harfler ya da &quot;sss&quot;, &quot;���&quot; gibi uzat�labilen sessiz 
harflerin) alg�lanmas�<font color="#0000FF">
</font><b><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></br>
Horlama sesini alg�layarak horlayan ki�iyi uyand�racak kulakl�k<font color="#0000FF">
</font><b><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></br>
Ya� tenekesi veya �i�e gibi bilinen t�rde bir depoya darbe vurup sesinden dolu mu bo� mu 
oldu�unu anlayan sistem<font color="#0000FF">
</font><b><font color="#0000ff" face="Times New Roman" size="5">&nbsp;&nbsp;</font></b><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></p>

<p class="MsoNormal" align="justify">konular�d�r. Fourier d�n���mleri ve mod�lasyon 
bilgisi gerektirir.</p>

<p align="justify"><b><font color="#0000ff">Telefonu otomatik a��p tu�lanan 
bilgiyi alma</font><font color="#0000ff" face="Times New Roman" size="5"> </font>
<font color="#0000ff">&nbsp;&nbsp;</font></b><font color="#0000ff" size="5" face="Times New Roman">&#9679;&#9679;</font></p>
<p align="justify">Sabit telefon hatt�na ba�land���nda, gelen �a�r�da otomatik 
a�arak kar��dan bas�lan tu�lar� alg�layan ve telsiz olarak bir LCD ekranda g�nderip&nbsp;yazd�ran bir sistem 
istenmektedir.</p>
<p align="justify"><b><font color="#0000ff">I��k veya elektrik sinyallerinin 
ilerleme h�z�n�n �l��lmesi</font><font color="#0000ff" face="Times New Roman" size="5">
</font><font color="#0000ff">&nbsp; </font>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Elektronik geli�medi�i zamanlarda ���k h�z�n� �l�mek i�in 
aralar�nda 20km civar�nda mesafe bulunan iki da�dan birine g��l� bir ���k 
kayna�� ve �n�ne bir di�li �ark, di�erine de b�y�k bir ayna konur, di�li �ark 
d�nerken arkas�ndan d�rb�nle di�er da�daki aynaya bak�l�rd�. �ark yeterince 
h�zl� d�nm�yorsa iki di�li aras�ndan ge�en ���nlar kar�� da�daki aynadan 
yans�y�p ayn� di�li aral���ndan ge�ip d�rb�nle bakan g�zlemci taraf�ndan 
g�r�lebilirdi. �ark tam uygun h�za getirildi�inde ise yans�yan ���nlar �ark�n 
di�ine �arpt��� i�in g�zlemci taraf�ndan g�r�lemezdi. Buradan �ark�n kritik 
d�nme h�z�, di�li say�s� ve da�lar aras� mesafe bilgileri kullan�larak ���k h�z� 
bulunurdu.</p>
<p align="justify">Bu projede ise benzer mant���n y�ksek frekansl� darbeler 
halinde ���k veya elektrik sinyalleri g�nderilip elektronik kar��la�t�rmalarla 
10-15m civar�nda bir mesafe i�inde �l��lmesi istenmektedir.
<font face="Times New Roman">I��k ile yap�lacak �al��mada kaliteli eleman 
kullanma zorlu�u olursa d�z (end�ktans� en az) iletken kullan�larak elektrik 
sinyallerinin iletilme h�z� da �l��lebilir. </font></p>

<p align="justify"><font color="#0000FF"><b>
<span style="font-family: Times New Roman">C�vata, bozuk para </span></b></font><b>
<font color="#0000FF">vb say�c�</font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">A��rl�k esas�na dayal� olmadan, c�vata, somun, pul veya bozuk 
paralar� �ok h�zl� bir �ekilde sayan bir sistem yap�lacakt�r. Say�lacak par�alar 
yakla��k �zde� olup �zellikleri �nceden bilinmektedir. Y�ntem olarak mesela 
par�alar� ancak birer birer d��ebilece�i huni gibi bir delikten d���r�p d��t��� 
yerde olu�turaca�� ses veya sars�nt�lar� saymak kullan�labilir. Bozuk paralar� 
ince bir silindirde �st�ste y���p y�ksekli�ini �l�mek kabul edilmez.</p>

<p align="justify"><b>
<font color="#0000FF">Bilgisayar yaz�s�n� el yaz�s�na d�n��t�ren program</font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Bir ki�inin her karakterden �ok say�da (10 gibi) el yaz�s� 
numunesini al�n�p karakter g�r�nt�s� olarak kaydedilecek. Sonra bilgisayar 
yaz�s�n� el yaz�s�na d�n��t�r�rken her bir karakter i�in her defas�nda ayn� 
de�il rasgele farkl� farkl� (10 numuneden biri) karakter g�r�nt�s� konulacak. Bu 
i�lem word veya open office gibi geli�mi� ve yayg�n bir ofis yaz� program�yla 
uyumlu olarak yap�lacak. Yaz�lar�n renk ve boyutlar� ayarlanabilecek. B�ylece 
mesela bir yerdeki y harfi di�er y'lerin �o�undan farkl� g�r�nece�i i�in ve yaz� 
mavi renkte yazd�r�labilece�i i�in �ok dikkat edilmedik�e yaz�n�n ��kt�s�n�n 
elle yaz�ld��� zannedilecek.</p>

<p align="justify"><b>
<font color="#0000FF">Form�lleri html koduna ili�tiren program</font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Bir html dosyas�nda belirli taglar aras�na belirli standartta 
(open office, LaTex gibi basit ascii text olarak) yaz�lm�� form�llerin o 
kodlar�n� se�ip, onlar� anlayan programda (open office, LaTex gibi) form�llere 
d�n��t�rmeniz, sonra da o form�leri jpg veya gif gibi g�r�nt� dosyalar�na 
d�n��t�rmeniz isteniyor. Sonra da o form�l g�r�nt� dosyalar�n� o html dosyas�nda 
�zel taglar�n�z aras�nda yaz�l� kodlar�n yerine g�r�nt� olarak g�sterecek kod 
olarak yerle�tireceksiniz. Bir dosyada �ok say�da (onlarca, y�zlerce) form�l 
olabilir. Hepsini otomatik olarak d�n��t�rebilmeli.</p>

</body></html>