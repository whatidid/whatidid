<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Language" content="tr">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Proje 1-2</title></head>
<script type="text/javascript">
function hideshow(which){
if (!document.getElementById)
return
if (which.style.display=="block")
which.style.display="none"
else
which.style.display="block"
}
</script>
<body bgcolor="#33ccff">

<p align="justify"><b><font color="#ff0000">25.10.2016</font></b> (Bitirme Projesi 1-2 ve Proje 1-2 sayfalar� �imdilik ayn�d�r.)</p>
<p align="justify">2016-2017 e�itim-��retim y�l�nda Proje 1-2 veya Bitirme Projesi 1-2 dersleri i�in vermeyi d���nd���m proje konular� a�a��da verilmi�tir. <font face="Times New Roman">Projeler aksi belirtilmedik�e 2 d�nemliktir. </font>Ancak 2 d�nemlik projeler i�in <b><font color="#FF0000">ilk d�nem uygulamal� �al��ma</font></b>, ikinci d�nem ise uygulamadaki eksikliklerin giderilmesi ve rapor haz�rlanmas� �eklinde istiyorum. ��rencinin ilk d�nem ba�ar�yla �al��t�ramad��� bir uygulamayla ge�ebilmesi i�in, <i>devrenin makul bir tasar�mla finaller ba�lamadan 1 hafta �ncesine kadar tamamlanm�� olarak g�sterilmesini <u><b>ve</b></u> finaller bitinceye kadar, �al��mama nedeniyle ilgili tahminler, giderilmesi i�in yap�lanlar ve sonu�lar�yla ilgili <u>�ok say�da</u> denemeyi anlatan gayri resmi nitelikte (�dev yaz�m kurallar� aranmaks�z�n, el yaz�s� da olabilir) bir rapor verilmesini </i>isterim.</p>
<p> Buradaki konular�n d���nda konu �neriniz varsa g�r���p uygun bulunursa al�nabilir.</p>

<p align="justify">Kontenjanlar (Normal ��retim / �kinci ��retim i�in) <font face="Times New Roman">bo�sa "<font color="#0000ff" size="5">&#9675;</font>" ,&nbsp;&nbsp; dolmu�sa "<font color="#0000ff" size="5">&#9679;</font>" bi�imlerinde g�sterilmi�tir.</font></p>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Encoder'))">Encoder ile h�z ve pozisyon �l��m�</a> &nbsp;&nbsp;<font color="#0000ff" size="5">&#9675; </font></p>
<div id="Encoder" style="display: none"><p align="justify"><font face="Times New Roman"><u>Tek d�nemlik</u> bir projedir. Elimizdeki 500 darbe/tur'luk bir encoder kullan�larak �retilen darbeler say�lacak/i�lenecek ve hem pozisyon hem de h�z bilgisi, y�n�yle birlikte 16 bitlik dijital ��k�� olarak verilecektir. </font></p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('PID'))">PID Denetleyici</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675; / &#9675;&#9675; </font></p>
<div id="PID" style="display: none"><p align="justify"><font face="Times New Roman">Bu projede mod�ler bir PID denetleyici yap�lacakt�r. PID denetleyici, oransal (<font color="#ff0000">P</font>roportional) + integral (<font color="#ff0000">I</font>ntegral) + t�revsel (<font color="#ff0000">D</font>erivative) denetleyici demektir. Proje, iki�er ki�ilik gruplar halinde yap�labilir.</font></p>
<p align="justify"><img src="PID.gif" border="0" width="538" height="311"></p>
<p align="justify"><font face="Times New Roman">Opamplarla yap�lacak bu denetleyici, �10V aras�nda olabilen bir gerilim sinyalini referans giri� olarak kabul edecek, denetlenen b�y�kl�kten yine �10V aras�nda de�i�en bir geribesleme giri�i alacakt�r. �nce bir fark al�c� kat� olacak ve bu iki giri� fark al�c�n�n giri�leri olacakt�r. Fark al�c�n�n ��k��� (e = hata sinyali) d��ar�dan eri�ilebilir olacak ve iste�e g�re as�l PID birimine verilebilecektir. PID biriminin her par�as�n�n (P, I ve D'nin) giri�i d��ar�dan ba�lanacak �ekilde kutu d���na ��kar�lacakt�r. Yani kullan�c� bu giri�leri isterse topra�a ba�layarak s�f�rlayabilecek, isterse fark al�c� ��k���ndan veya fark al�c�y� kullanmadan do�rudan d��ar�dan alabilecektir. P, I ve D'nin ��k��lar� ise bir toplay�c�da toplanarak b�t�n mod�ler sistemin ��k��� �eklinde d��ar�ya ��kart�lacakt�r. Bu ��k�� (u), denetlenecek sisteme uygulanacak giri�tir. Basit baz� sistemlerin (RC devreleri) denetimi yap�larak performans� g�sterilecektir.</font></p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('AdimMotor'))">Ad�m motor kontrol�</a> (pozisyon do�rulamal�)&nbsp;&nbsp;<font color="#0000ff" size="5" face="Times New Roman">&#9675;&#9679;</font></p>
<div id="AdimMotor" style="display: none"><p align="justify"><font face="Times New Roman">Bir ad�m motoru istenen h�zda ya da istenen pozisyona d�nd�r�lecektir. Sistem haf�zas�ndaki pozisyon bilgisi g�ncellenirken olabilecek hatalara kar�� her turun belli bir pozisyonunda pozisyon bilgisi do�ru mu diye bak�lacak, de�ilse d�zeltilecektir.</font></p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('AkimDonusturucu'))">Ak�m� gerilime d�n��t�r�c�</a>&nbsp;&nbsp;&nbsp; <font size="5" color="#0000ff" face="Times New Roman">&#9679; / &#9679;</font></p>
<div id="AkimDonusturucu" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir proje olup 1A'e kadarki ac ve dc ak�mlarla orant�l� bir gerilim elde edilecektir. B�ylece bu gerilim �l��ld���nde ak�m bilinecektir. DC ak�m�n y�n�n� (-/+) i�aretiyle birlikte d�n��t�rebilmelidir. AC ak�m ise etkin de�eriyle orant�l� pozitif bir gerilime d�n��t�r�lmelidir. Devre opamplarla yap�labilmektedir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('DusumsuzDogrultucu'))">Diyotlar�n gerilim d���m�nden etkilenmeyen AC sinyal do�rultucu</a>&nbsp;&nbsp;&nbsp; <font size="5" color="#0000ff" face="Times New Roman">&#9675;</font></p>
<div id="DusumsuzDogrultucu" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir proje olup g�� de�il �l��m ama�l� sinyal do�rultucu istenmektedir. -+5V s�n�rlar�n� a�mayan bir AC gerilim do�rultulacak ama diyotlardaki 0,6V gerilim d���m�nden etkilenmeyecek. Devre opamplarla yap�labilmektedir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Gercekrms'))">Ger�ek etkin de�erle gerilim �l��m�</a>&nbsp;&nbsp;&nbsp; <font size="5" color="#0000ff" face="Times New Roman">&#9679;&#9679;</font></p>
<div id="Gercekrms" style="display: none"><p align="justify">Gerilim dalga �ekli sin�zoidal olmayan bir periyodik sinyal ise �o�u �l�� aletinin g�sterdi�i �l��m de�eri yanl�� olur. Ger�ek etkin de�er (true rms) �l�menin yollar�ndan birisi, bir PIC'in ADC'siyle gerilimin anl�k de�erlerini �rnekleyerek uzun bir s�re (1-2 s gibi) i�inde bunlar�n kare ortalamas�n� hesaplamakt�r. �steyen ba�ka yollarla da tasar�m yapabilir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('FutbolSahasi'))">Futbol sahas� resminde e�ik a��dan �ember �izimi</a>&nbsp;&nbsp;<font color="#0000ff" size="5" face="Times New Roman">&#9675;</font></p>
<div id="FutbolSahasi" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir programlama projesidir. E�ik a��dan g�r�len saha resmi �zerindeki dik kenar �izgileri yard�m�yla resmin e�imi hesaplan�p herhangi bir noktay� (serbest vuru� noktas� gibi) merkez kabul eden belirli bir yar��apta (9m15cm baraj s�n�r� gibi) �ember �izilmesi istenmektedir. Ayr�ca belirli bir noktadan kenarlardan birine paralel �izgi (ofsayt s�n�r� gibi) �izilmesi de istenmektedir. Bu konu, �stten g�r�n��� verilen d�zlemsel bir �izimin e�ik bak�� a��s�yla �izimini (ve tam tersini) i�ermektedir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('UVsensor'))">Mor�tesi ���k sens�r�yle �l��m</a> &nbsp;&nbsp;
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675; / &#9675;&#9675; </font></p>
<div id="UVsensor" style="display: none"><p align="justify">Ultraviyole alg�lama devresi haz�r bulunabilir, fakat ger�ek ayd�nlanma �iddetiyle orant�l� say�sal b�y�kl�k elde edilmesi istenmektedir. Yani do�rusal olmayan bir say�sal d�n���m yapman�z gerekebilir. Ultraviyole sens�r�n en hassas dalga boyu 300nm civar� olmal� ve hassasiyet s�n�rlar� yakla��k 250-400nm aral���na yay�lm�� olmal�d�r. B�yle bir UV sens�r bulman�z zor olabilir. Projeyi kabullenmeden �nce sens�r bulup bulamayaca��n�z� ara�t�r�n�z.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('RungaKutta'))">Runga-Kutta metodu ile diferansiyel denklem ��z�m�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675; </font></p>
<div id="RungaKutta" style="display: none"><p align="justify"><u>Tek d�nemlik</u> ve sadece 3. s�n�flara �zel bir programlama projesidir. Bu n�merik ��z�m y�ntemiyle �nce basit bir 2. mertebe sistem denklemi ��z�lecek ve analitik ��z�me g�re hatas� bulunacakt�r. Ayn� basit sistem bir de Euler y�ntemiyle ��z�l�p hatas� bulunacak ve bu iki y�ntemin hatalar� kar��la�t�r�lacakt�r. Daha sonra da diferansiyel denklem modeli bilinen baz� sistemlerin ��z�mleri yap�l�p grafikleri �izilecektir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Strobo'))">Strobofla�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;&#9679; / &#9675;&#9675; </font></p>
<div id="Strobo" style="display: none"><p align="justify">Strobofla�, ayarlanan frekansta yan�p s�nen bir lamba demektir. Y�ksek yan�p s�nme h�zlar� i�in genellikle neon lamba kullan�l�r. G�n�m�zde g�� LED'leri de yeterli performans� verebilmektedir. Strobofla� ile d�nen bir tekere bak�l�rken, yan�p s�nme frekans� d�n�� frekans�na e�itlenirse teker duruyormu� gibi g�r�n�r. �lkel �ekli rot-balansc�lar taraf�ndan da kullan�lan bu cihaz motor d�n�� h�z�n�n g�rsel olarak �l��lmesi amac�yla kullan�lacakt�r. Yan�p s�nme frekans� dakikadaki say� cinsinden 4 rakaml� bir LCD ekranda g�sterilecektir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Nabiz'))">Nab�z �l�er</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;&#9679; / &#9679; </font></p>
<div id="Nabiz" style="display: none"><p align="justify">Uygun bir sens�r yard�m�yla kalp at��lar� bilekten alg�lan�p bir ekranda dakikadaki at�� say�s� g�sterilecektir. �ebeke elektri�inin yayd��� 50 Hz'lik g�r�lt� ile kar��t�rmamal�s�n�z.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('YiginMesaj'))">Y���n mesaj g�nderici</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></p>
<div id="YiginMesaj" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir yaz�l�m �devidir. php veya asp ile html ve xml benzeri kodlar kullan�lacakt�r. Bir kay�t dosyas�nda e-posta adresleri ve isim gibi baz� ki�isel bilgileri listelenmi� olan ki�ilere, ki�isel bilgilerine g�re yaz�lm�� birer mesaj t�m liste i�in otomatik olarak g�nderilecektir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('EpostaGizle'))">E-posta adresleri toplanmas�n� engelleyici</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></p>
<div id="EpostaGizle" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir yaz�l�m �devidir. E-posta adreslerini otomatik olarak alg�lay�p, depolay�p, reklam g�ndermek i�in kullananlara kar��, html kodu verilen bir internet sayfas�nda e-posta adresini bulan, ba�ka bir programda o adresin yaz�s�n� gif ya da jpg gibi bir g�r�nt� dosyas�na �eviren, sonra da o g�r�nt� dosyas�n� g�r�nt�letme kodunu, o html dosyas�nda e-posta adresinin yaz�ld��� k�sm�n yerine yazan bir program istenmektedir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('BozukParaYonet'))">Bozuk para y�netimi</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<div id="BozukParaYonet" style="display: none"><p align="justify">Bozuk para alg�lay�c� sens�r kullanman�z beklenmiyor; bunun yerine gelen her bir bozuk para t�r� i�in birer sinyal g�nderecek d��meler kullan�lacak. Kasada varsay�lan bozuk paralar�n her birinden ka�ar adet oldu�u bilgisi her i�lemde g�ncellenmek �zere, belirli bir tutarda �deme i�in gelen paran�n �zerinin hangi bozuk paradan ka�ar adet verilece�ini hesaplayan ve bunlar i�in de d��ar�ya birer sinyal g�nderen bir PIC devresi ve yaz�l�m� istenmektedir. Mevcut bozuk para miktar� s�k�nt�l� oldu�unda para �st� vermeyi kolayla�t�r�c� �nerilerde bulunabilmelidir ("15 kuru�unuz var m�yd�?" gibi).</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('CivataSay'))">C�vata, metal para vb say�c�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;&#9679; / &#9679;&#9679; </font></p>
<div id="CivataSay" style="display: none"><p align="justify">A��rl�k esas�na dayal� olmadan, c�vata, somun, pul veya bozuk paralar� �ok h�zl� bir �ekilde sayan bir sistem yap�lacakt�r. Say�lacak par�alar yakla��k �zde� olup �zellikleri �nceden bilinmektedir. Y�ntem olarak mesela par�alar� ancak birer birer d��ebilece�i huni gibi bir delikten d���r�p d��t��� yerde olu�turaca�� ses veya sars�nt�lar� saymak kullan�labilir. Bozuk paralar� ince bir silindirde �st�ste y���p y�ksekli�ini �l�mek kabul edilmez. Ayr�ca saniyede 10 par�adan daha h�zl� sayabilmelidir. Yava� saymas� kabul edilmez.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('SayiSeslendir'))">Say� seslendirici program</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675; / &#9675;</font></p>
<div id="SayiSeslendir" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir yaz�l�m �devidir. Say� okumada kullan�lan belli ba�l� �bekleri (yirmi, otuz, y�z, bin gibi) ses olarak kaydedeceksiniz. Sonra verilen bir say�y�, bu �beklerden gerekenleri do�ru bir �ekilde s�ralayarak seslendireceksiniz (telefon bankac�l���ndaki gibi). �lk ad�m olarak bu i�i yaz�yla yapman�z (say�y� yaz�ya d�n��t�rmeniz) istenmektedir. Bilgisayardaki saati sesli olarak okutmak da bunun bir uygulamas� olabilir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('ManyetikSensorluHiz'))">Manyetik sens�rl� h�z �l��m�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679; - &#9679;&#9679; / &#9679;&#9679; </font></p>
<div id="ManyetikSensorluHiz" style="display: none"><p align="justify">Bisiklet veya herhangi bir ara� tekerle�ine say�lar� 1-5 aras�nda de�i�ebilen m�knat�slar yerle�tirildi�i varsay�larak sens�r�n m�knat�s� g�rme s�kl���na g�re h�z� �l��p g�stermeniz beklenmektedir. H�z�n -/+ i�aretini alg�laman�z beklenmiyor, mutlak de�er yeterlidir. M�knat�s say�s� ve teker �ap� birer parametre olarak girilecektir. 3-120 km/saat aras�nda hassas (tamsay�ya yuvarlat�lm��) h�z �l��m� ve birikimi (mesafe) g�sterilmelidir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Kuyrukmatik'))">Kuyrukmatik</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;&#9679; / &#9675;&#9675; </font></p>
<div id="Kuyrukmatik" style="display: none"><p align="justify">Bir numara da��tma merkezli, �� hizmet noktal�, 4 (��� hizmet noktalar�nda, biri ortada) s�ra numaras� g�stergeli bir kuyruk sistemi istenmektedir. Hizmet noktalar�ndan d��meye bas�ld���nda s�radaki numara o hizmet noktas�ndaki ve ortadaki s�ra g�stergesinde g�r�nt�lenecektir. Numara da��tma merkezinde fi� verilmesi yerine kolayl�k olsun diye ayr� bir al�nan s�ra 
numaras� g�stergesi olacakt�r.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('UcFazUret'))">�� fazl� de�i�ken sin�zoidal dalga �reteci</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<div id="UcFazUret" style="display: none"><p align="justify">Genlik ve frekans� t�m fazlar i�in ortak birer noktadan ayarlanacak sin�zoidal dalga �reteci istenmektedir. Genlik ve frekans de�i�irken yeni frekansa g�re fazlararas� 120<font face="Times New Roman"><span lang="en">�</span> hep korunmal�d�r. �zel tasar�m gerektirmektedir. Haz�r bulunabilecek bir proje de�ildir.</font></p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('AdimSay'))">Ad�m say�c�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679; / &#9679; </font></p>
<div id="AdimSay" style="display: none"><p align="justify">Sa�l�k i�in y�r�y�� yapanlar�n i�ine yarayacak bir cihaz istenmektedir. Bele veya baca�a tak�lacak bu cihaz, bir ivme sens�r� yard�m�yla d�zenli y�r�y�� yap�ld���n� alg�layacak ve ad�mlar� sayacakt�r. Hatta, y�ksek ve d���k frekansl� ad�mlar� ayr� ayr� sayarak kalbe faydas� olan egzersiz niteli�indeki ad�mlar�n bilinmesine yarayacakt�r.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('RuzgaraYonlendir'))">R�zg�ra g�re y�nlendirme</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679; </font></p>
<div id="RuzgaraYonlendir" style="display: none"><p align="justify"><font face="Times New Roman">Bir r�zg�r sens�r� yard�m�yla r�zg�r�n y�n� alg�lanacak ve bir d�zenek r�zg�r y�n�yle istenilen (mesela dik) bir a�� yapacak �ekilde y�nlendirilecektir. Bunun i�in ad�m motoru kullan�labilir. Bir yelkenin veya r�zg�r t�rbininin otomatik olarak y�nlendirilmesine yarayabilecektir.</font></p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('AnahtarliKaynak'))">Ayarl� anahtarlamal� g�� kayna��</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675; / &#9675;&#9675; </font></p>
<div id="AnahtarliKaynak" style="display: none"><p align="justify">AC'den DC'ye do�rultma yap�ld�ktan sonra bir DC-DC �evirici ile gerilim seviyesi ayarlanacakt�r. Opampl� basit bir integral kontrol ile anahtarlaman�n g�rev oran� (duty cycle) otomatik olarak ayarlanarak y�kde�i�se de gerilimin istenen de�erde tutulmas� sa�lanacakt�r. Tercihen mikrodenetleyici<u>kullan�lmadan</u> yap�lmas� istenmektedir.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('CepYazi'))">Cep telefonu ekran�nda yaz�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;</font></p>
<div id="CepYazi" style="display: none"><p align="justify">Yaz�l�m yetene�i iyi olan ve mobil yaz�l�m yapabilecek olanlar i�indir. �zel bir yaz�l�m fikri oldu�undan, ilgilenenler ayr�nt�lar� benimle g�r��ere ��renebilirler.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('CizgiIzle'))">�izgi izleyen ara�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679; / &#9679;</font></p>
<div id="CizgiIzle" style="display: none"><p align="justify">�nternette �ok kolay bulabilece�inizden farkl� olarak,<br>
1) �izgiyi kaybetti�inde �izgiyi bulmak i�in uygun bir y�ntem (spiral �eklinde d�nmek gibi) uygulanmal�.<br>
2) A��r� ak�m� alg�layarak engele tak�ld���n� anlay�p durmal�. 2 saniye sonra engel kalkm�� m� diye yeniden gitmeyi denemeli.<br>
3) �izginin baz� yerlerinde durma noktalar� tan�mlanmal�. Ara� buralarda durup 2 saniye sonra yoluna devam etmeli.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Frekans'))">Frekans b�l�c� ve frekansmetre</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<div id="Frekans" style="display: none"><p align="justify">Frekansmetre giri�teki kare dalga sinyalin frekans�n� g�sterirken, bu sinyalin frekans� 60'a b�l�nerek ��k��a verilecek. B�ylece frekansmetre g�stergesi asl�nda dakikadaki periyot say�s�n� g�stermi� olacak. Frekansmetre hatas� binde birden fazla olmamal�.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('KonusmaMuzik'))">Konu�ma ve m�zik ay�rdedici</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<div id="KonusmaMuzik" style="display: none">
<p align="justify"><u>Tek d�nemlik</u> bir yaz�l�m �devidir. Kaydedilmi� bir ses sinyalinin konu�ma m� m�zik mi a��rl�kl� oldu�u tahmin edilecek.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('SesYonu'))">Ses y�n�n� bulma</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9679; </font></p>
<div id="SesYonu" style="display: none"><p align="justify">Y�ksek bir sesin hangi y�nden geldi�ini g�sterecek. D�zlemde 8 y�n� g�steren LEDlerden biri yanarak y�n g�sterilecek. De�i�ik y�ntemler deneyebilirsiniz. 3 mikrofona sesin ula�ma zamanlar� aras�ndaki fark� kullanmak m�mk�nd�r.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('ResimKontrast'))">Resimde kontrast ayar�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></p>
<div id="ResimKontrast" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir yaz�l�m �devidir. Ba�l�ca resim dosya t�rlerinde y�klenen bir resimde, RGB toplam de�eri istenen bir e�i�in alt�nda olan (koyu renkli) pikseller siyah piksel yap�lacak. E�ik ayarl� olacak. Ayn� t�rde resim dosyas� olarak kaydedilecek.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('DoluBos'))">Sesle dolu/bo� ayr�m�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></p>
<div id="DoluBos" style="display: none"><p align="justify"><u>Tek d�nemlik</u>tir. �i�e veya kutu, ama belirli bir kaba belirli bir cisimle yakla��k belirli bir �iddetle vuruldu�unda ��kan sesler dolu ve bo� durumlar�na g�re incelenecek. Sonraki vuru�lardaki seslerden, kab�n dolu mu bo� mu oldu�u tahmin edilecek.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('DCmotorUSB'))">USB ile dc motor kontrol�</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;&#9679; / &#9679;&#9679; </font></p>
<div id="DCmotorUSB" style="display: none"><p align="justify">Kullan�c� aray�z� bilgisayarda olan ve talepleri USB ile iletilecek bir dc motor kontrol devresi yap�lacak. Motor g�c� USB'den de�il ayr� bir kaynaktan al�nacak. Motor y�k� de�i�se de talep h�z�nda kalacak.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('VCO'))">Voltaj kontroll� osilat�r (VCO)</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<div id="VCO" style="display: none"><p align="justify">Ayar voltaj� ile orant�l� frekansta sinyal �retilecek. PLL ile yapabilirsiniz.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('OscFD'))">Osilat�r </a> (ba��ms�z frekans ve g�rev oran� ayarl�)&nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></p>
<div id="OscFD" style="display: none"><p align="justify">Basit 555 osilat�rlerinin <u>aksine</u>, frekans ayar� yap�l�rken g�rev oran� (duty cycle) etkilenmeyecek, g�rev oran� ayarlan�rken de frekans etkilenmeyecek. Kare dalga �retilecek. 30-9000 Hz aras�nda de�i�ken frekansl� olacak.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('IkiBilinmeyen'))">�ki bilinmeyenli denklem �ifti talimi</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></p>
<div id="IkiBilinmeyen" style="display: none"><p align="justify"><u>Tek d�nemlik</u> bir yaz�l�m �devidir. Benim sitemdeki "Denklemler" sayfas� geli�tirilecek. Orada �u anda denklemin d�zenlenmesinin do�rulu�u g�steriliyor. Bu program�n mevcut halinden ba�lanabilece�i gibi tamamen ba�tan da ba�lanabilir. S�radaki i�ler, temel ��z�m y�ntemlerine g�re bir ara a�ama konulup do�rulu�unun an�nda g�sterilmesi ve son a�amada ��z�mlerin do�rulu�unun g�sterilmesi. Say�lar�n kesir �eklinde girilebilmesi i�in kutular olacak. Kutular� bo� b�rak�l�rsa varsay�lan olarak paydada 1, payda 0 al�nacak. Do�ru olan t�m cevaplar farkl� g�r�n�mlerde de olsa alg�lan�p do�rulu�u g�sterilecek.</p></div>

<p align="justify"><a href="javascript:hideshow(document.getElementById('Batarya'))">Batarya g�stergesi</a> &nbsp;&nbsp;<font color="#0000ff" face="Times New Roman" size="5">&#9679;</font></p>
<div id="Batarya" style="display: none"><p align="justify">Ger�ek anlamda bir ara�t�rma �devidir (derleme de�il!). Y�k alt�ndaki voltaj d���m�n� de dikkate alarak, yani bataryan�n hem ak�m�n� hem gerilimini hassas �l�erek �arj durumunu (SOC) g�stermeniz isteniyor..</p></div>
<br>
<br>
</body></html>