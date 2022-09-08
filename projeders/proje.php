<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Language" content="tr">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>12</title></head>

<body bgcolor="#33ccff">

<p align="justify"><b><font color="#ff0000">10.10.20</font></b><font color="#FF0000"><b>10</b></font></p>
<p align="justify">2010-2011 eğitim-öğretim yılında Proje 1-2 dersleri için vermeyi düşündüğüm proje 
konuları aşağıda verilmiştir. 
<font face="Times New Roman">Projeler aksi belirtilmedikçe 2 dönemliktir. </font>Ancak 2 dönemlik projeler için 
<b><font color="#FF0000">ilk dönem uygulamalı çalışma</font></b>, ikinci dönem ise uygulamadaki 
eksikliklerin giderilmesi ve rapor hazırlanması şeklinde istiyorum. Öğrencinin 
ilk dönem başarıyla çalıştıramadığı bir uygulamayla geçebilmesi için, d<i>evrenin 
makul bir tasarımla finaller başlamadan 1 hafta öncesine kadar tamamlanmış 
olarak gösterilmesini <u><b>ve</b></u> finaller bitinceye kadar, çalışmama 
nedeniyle ilgili tahminler, giderilmesi için yapılanlar ve sonuçlarıyla ilgili
<u>çok sayıda</u> denemeyi anlatan gayri resmi nitelikte (ödev yazım kuralları 
aranmaksızın, el yazısı da olabilir) bir rapor verilmesini </i>isterim.</p>

<p align="justify">Kontenjanlar (Normal Öğretim / İkinci Öğretim için)
<font face="Times New Roman">boşsa "<font color="#0000ff" size="5">&#9675;</font>" ,&nbsp;&nbsp; 
dolmuşsa "<font color="#0000ff" size="5">&#9679;</font>" biçimlerinde 
gösterilmiştir.</font></p>

<p align="justify"><b><font color="#0000ff">Encoder ile hız ve pozisyon ölçümü &nbsp;&nbsp;&nbsp; </font>
<font color="#0000ff" face="Times New Roman" size="5">&#9675; </font>
</b>
</p>
<p align="justify"><font face="Times New Roman"><u>Tek dönemlik</u> bir 
projedir. Elimizdeki 500 darbe/tur'luk bir 
encoder kullanılarak üretilen darbeler sayılacak/işlenecek ve hem pozisyon hem 
de hız bilgisi, yönüyle birlikte 16 bitlik dijital çıkış olarak verilecektir. </font></p>

<p align="justify"><b><font color="#0000ff">PID Denetleyici &nbsp;&nbsp;&nbsp; </font>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font><font color="#0000ff" face="Times New Roman">&nbsp; 
/ <font size="5">&nbsp;</font></font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675; </font></b></p>
<p align="justify"><font face="Times New Roman">Bu projede modüler bir PID 
denetleyici yapılacaktır. PID denetleyici, oransal (<font color="#ff0000">P</font>roportional) 
+ integral (<font color="#ff0000">I</font>ntegral) + türevsel (<font color="#ff0000">D</font>erivative) 
denetleyici demektir. Proje, ikişer kişilik gruplar halinde yapılabilir.</font></p>
<p align="justify"><img src="PID.gif" border="0" width="538" height="311"></p>
<p align="justify"><font face="Times New Roman">Opamplarla yapılacak bu 
denetleyici, ±10V arasında olabilen bir gerilim sinyalini referans giriş olarak 
kabul edecek, denetlenen büyüklükten yine ±10V arasında değişen bir geribesleme 
girişi alacaktır. Önce bir fark alıcı katı olacak ve bu iki giriş fark alıcının 
girişleri olacaktır. Fark alıcının çıkışı (e = hata sinyali) dışarıdan 
erişilebilir olacak ve isteğe göre asıl PID birimine verilebilecektir. PID 
biriminin her parçasının (P, I ve D'nin) girişi dışarıdan bağlanacak şekilde 
kutu dışına çıkarılacaktır. Yani kullanıcı bu girişleri isterse toprağa 
bağlayarak sıfırlayabilecek, isterse fark alıcı çıkışından veya fark alıcıyı 
kullanmadan doğrudan dışarıdan alabilecektir. P, I ve D'nin çıkışları ise bir 
toplayıcıda toplanarak bütün modüler sistemin çıkışı şeklinde dışarıya 
çıkartılacaktır. Bu çıkış (u), denetlenecek sisteme uygulanacak giriştir. Basit 
bazı sistemlerin (RC devreleri) denetimi yapılarak performansı gösterilecektir.</font></p>
<p align="justify"><b><font color="#0000ff">Adım motor kontrolü (pozisyon 
doğrulamalı) </font>
<font color="#0000ff" face="Times New Roman" size="5">&nbsp; </font></b>
<font color="#0000ff" size="5" face="Times New Roman">&#9679;</font><font color="#0000ff" size="5" face="Times New Roman">&#9679;</font></p>
<p align="justify"><font face="Times New Roman">Bir adım motoru istenen hızda ya 
da istenen pozisyona döndürülecektir. Sistem hafızasındaki pozisyon bilgisi 
güncellenirken olabilecek hatalara karşı her turun belli bir pozisyonunda 
pozisyon bilgisi doğru mu diye bakılacak, değilse düzeltilecektir.</font></p>
<p align="justify"><b><font color="#0000ff">Akımı gerilime dönüştürücü</font><font color="#0000ff" face="Times New Roman">
</font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b> <font size="5" color="#0000ff" face="Times New Roman">&#9675;</font></b></p>
<p align="justify"><u>Tek dönemlik</u> bir proje olup 1A'e kadarki ac ve dc akımlarla orantılı 
bir gerilim elde edilecektir. Böylece bu gerilim ölçüldüğünde akım bilinecektir. 
DC akımın yönünü (-/+) işaretiyle birlikte dönüştürebilmelidir. AC akım ise 
etkin değeriyle orantılı pozitif bir geriilime dönüştürülmelidir. Devre opamplarla 
yapılabilmektedir.</p>
<p align="justify"><font color="#0000FF"><b>Gerçek etkin değerle </b></font><b><font color="#0000ff">
gerilim</font><font color="#0000FF"> ölçer</font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font><font color="#0000ff" face="Times New Roman">&nbsp; 
/ <font size="5">&nbsp;&#9675;</font></font><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font><font size="5" color="#0000ff" face="Times New Roman"> </font></b></p>
<p align="justify">Gerilim dalga şekli sinüzoidal olmayan bir periyodik sinyal 
ise çoğu ölçü aletinin gösterdiği ölçüm değeri yanlış olur. Gerçek etkin değer 
(true rms) ölçmenin yollarından birisi, bir PIC'in ADC'siyle gerilimin anlık değerlerini 
örnekleyerek uzun bir süre (1-2 s gibi) içinde bunların kare ortalamasını 
hesaplamaktır. İsteyen başka yollarla da tasarım yapabilir.</p>
<p align="justify"><b><font color="#0000FF">Futbol sahası resminde eğik açıdan 
çember çizimi</font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify"><u>Tek dönemlik</u> bir programlama projesidir. Eğik açıdan 
görülen saha resmi üzerindeki dik kenar çizgileri yardımıyla resmin eğimi 
hesaplanıp herhangi bir noktayı (serbest vuruş noktası gibi) merkez kabul eden 
belirli bir yarıçapta (9m15cm baraj sınırı gibi) çember çizilmesi istenmektedir. 
Ayrıca belirli bir noktadan kenarlardan birine paralel çizgi (ofsayt sınırı 
gibi) çizilmesi de istenmektedir. Bu konu, üstten görünüşü verilen düzlemsel bir 
çizimin eğik bakış açısıyla çizimini (ve tam tersini) içermektedir.</p>
<p align="justify"><font color="#0000FF"><b>Morötesi ışık sensörüyle ölçüm</b></font><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify"><u>Tek dönemlik</u> bir projedir. Ultraviyole algılama 
devresi hazır bulunabilir, fakat gerçek aydınlanma şiddetiyle orantılı sayısal 
büyüklük elde edilmesi istenmektedir. Yani doğrusal olmayan bir sayısal dönüşüm 
yapmanız gerekebilir. Ultraviyole sensörün en hassas dalga boyu 300nm civarı 
olmalı ve hassasiyet sınırları yaklaşık 250-400nm aralığına yayılmış olmalıdır. 
Böyle bir UV sensör bulmanız zor olabilir. Projeyi kabullenmeden önce sensör 
bulup bulamayacağınızı araştırınız.</p>
<p align="justify"><b><font color="#0000FF">DAC</font><font color="#0000ff" face="Times New Roman"> 
ve demultiplexer
</font></b><font color="#0000ff"><b>&nbsp;&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify"><u>Tek dönemlik</u> bir projedir. PIC'ler genellikle DAC 
(sayısaldan analoğa dönüştürücü) içermez, genellikle ADC içerir. Fakat  DAC, 
bir opamp ve dirençlerle yapılabilecek basit bir devredir. Bu projede PIC gibi 
basit bir mikrodenetleyicinin dijital çıkışlarıyla hem DAC yapılması, hem de bir 
demultiplexer (4067 gibi) ile bu analog çıkışın istenilen kanala gönderilmesi 
istenmektedir. Demultiplexer tercihli kanalı periyodik olarak değişirken aynı 
kanala bir daha gelinceye kadar o analog gerilim değerinin yaklaşık olarak 
korunması da istenmektedir.</p>
<p align="justify"><b><font color="#0000ff" face="Times New Roman">PIC ile bir 
cep telefonunu otomatik tuşlama</font></b><font color="#0000ff"><b>&nbsp;&nbsp; </b> </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675; </font></b>
<font color="#0000ff" size="5" face="Times New Roman">/ </font>
<b>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">İkinci el veya ucuz bir cep telefonunun tuş takımının 
açılarak tuşların anahtarladığı uçların PIC'li bir devreye bağlanması ve PIC 
programında belirlenmiş tuşların, programda belirlenen durumlarda tuşlanması 
istenmektedir.</p>
<p align="justify"><b><font color="#0000ff" face="Times New Roman">Runga-Kutta 
metodu ile diferansiyel denklem çözümü
</font><font color="#0000ff">&nbsp;&nbsp;&nbsp; </font>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></b></p>
<p align="justify"><u>Tek dönemlik</u> bir programlama projesidir. Bu nümerik çözüm yöntemiyle önce 
basit bir 2. mertebe sistem denklemi çözülecek ve analitik çözüme göre hatası 
bulunacaktır. Aynı basit sistem bir de Euler yöntemiyle çözülüp hatası bulunacak 
ve bu iki yöntemin hataları karşılaştırılacaktır. Daha sonra da diferansiyel 
denklem modeli bilinen bazı sistemlerin çözümleri yapılıp grafikleri 
çizilecektir.</p>
<p align="justify"><b><font color="#0000ff" face="Times New Roman">
<a name="strobo"></a>Stroboflaş
</font><font color="#0000ff">&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Stroboflaş, ayarlanan frekansta yanıp sönen bir lamba 
demektir. Yüksek yanıp sönme hızları için genellikle neon lamba kullanılır. Günümüzde güç 
LED'leri de yeterli performansı verebilmektedir. Stroboflaş ile dönen bir tekere 
bakılırken, yanıp sönme frekansı dönüş frekansına eşitlenirse teker duruyormuş 
gibi görünür. İlkel şekli rot-balanscılar tarafından da kullanılan bu cihaz 
motor dönüş hızının görsel olarak ölçülmesi amacıyla kullanılacaktır. Yanıp 
sönme frekansı dakikadaki sayı cinsinden 4 rakamlı bir LCD ekranda 
gösterilecektir. <font face="Times New Roman">&nbsp;</font></p>
<p class="MsoNormal" align="justify"><b><font color="#0000ff">n-katlı nümerik integral 
alan program</font><font color="#0000ff">&nbsp;&nbsp;&nbsp; </font>
<font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></b></p>
<p class="MsoNormal" align="justify"><font face="Times New Roman"><u>Tek 
dönemlik</u> bir yazılım projesidir. Verilen çok değişkenli bir fonksiyonun, 
istenilen aralıklarda n-katlı integralini nümerik olarak alan bir program 
hazırlanacaktır. Burada n belirlenmemiş bir tamsayı olarak düşünülecektir. 
Dolayısıyla, iç içe n tane döngü yazma zorluğuyla karşılaşılacaktır. Program 
herhangi bir dille yazılabilir; ancak istenilen işin büyük bir kısmını 
gerçekleştiren hazır fonksiyonlar kullanılamaz.</font></p><p align="justify"><b><font color="#0000ff"><span style="font-family: Times New Roman;">Nabız Ölçer</span></font><font color="#0000ff" face="Times New Roman"> </font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
Uygun bir sensör yardımıyla kalp atışları bilekten algılanıp bir ekranda dakikadaki atış sayısı gösterilecektir. 
Şebeke elektriğinin yaydığı 50 Hz'lik gürültü ile karıştırmamalısnı<p align="justify"><b>
<font color="#0000FF"><span style="font-family: Times New Roman">Yığın mesaj 
gönderici</span></font><font color="#0000ff" face="Times New Roman"> </font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;</font></b></p>
<p><u>Tek dönemlik</u> bir yazılım ödevidir. php veya asp ile html ve xml 
kodları kullanılacaktır. Bir kayıt dosyasında e-posta adresleri ve isim gibi 
bazı kişisel bilgileri listelenmiş olan kişilere, kişisel bilgilerine göre 
yazılmış birer mesaj tüm liste için otomatik olarak gönderilecektir.</p>
<p align="justify"><b><font color="#0000FF">
<span style="font-family: Times New Roman">E-posta adresleri toplanmasını 
engelleyici</span></font><font color="#0000ff" face="Times New Roman"> </font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p>E-posta adreslerini otomatik olarak algılayıp, depolayıp, reklam göndermek 
için kullananlara karşı, html kodu verilen bir internet sayfasında e-posta 
adresini bulan, başka bir programda o adresin yazısını gif ya da jpg gibi bir 
görüntü dosyasına çeviren, sonra da o görüntü dosyasını görüntületme kodunu, o 
html dosyasında e-posta adresinin yazıldığı kısmın yerine yazan bir program 
istenmektedir.</p>
<p align="justify"><font color="#0000FF"><b>
<span style="font-family: Times New Roman">Bozuk para yönetimi</span></b></font><b><font color="#0000ff" face="Times New Roman"> </font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Bozuk para algılayıcı sensör kullanmanız beklenmiyor; bunun 
yerine gelen her bir bozuk para türü için birer sinyal gönderecek düğmeler 
kullanılacak. Kasada varsayılan bozuk paraların her birinden kaçar adet olduğu 
bilgisi her işlemde güncellenmek üzere, belirli bir tutarda ödeme için gelen 
paranın üzerinin hangi bozuk paradan kaçar adet verileceğini hesaplayan ve 
bunlar için de dışarıya birer sinyal gönderen bir PIC devresi ve yazılımı 
istenmektedir.</p>
<p align="justify"><font color="#0000FF"><b>
<span style="font-family: Times New Roman">Cıvata, metal para </span></b></font><b>
<font color="#0000FF">vb sayıcı</font><font color="#0000ff">&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify">Ağırlık esasına dayalı olmadan, cıvata, somun, pul veya bozuk 
paraları çok hızlı bir şekilde sayan bir sistem yapılacaktır. Sayılacak parçalar 
yaklaşık özdeş olup özellikleri önceden bilinmektedir. Yöntem olarak mesela 
parçaları ancak birer birer düşebileceği huni gibi bir delikten düşürüp düştüğü 
yerde oluşturacağı ses veya sarsıntıları saymak kullanılabilir. Bozuk paraları 
ince bir silindirde üstüste yığıp yüksekliğini ölçmek kabul edilmez. Ayrıca 
saniyede 10 parçadan daha hızlı sayabilmelidir. Yavaş sayması da kabul edilmez.</p>
<p align="justify"><b><font color="#0000ff">Sayı seslendirici program&nbsp;&nbsp;</font><font color="#0000ff" face="Times New Roman" size="5">&#9675;&#9675;</font></b></p>
<p align="justify"><u>Tek dönemlik</u> bir yazılım ödevidir. Sayı okumada 
kullanılan belli başlı öbekleri (yirmi, otuz, yüz, bin gibi) ses olarak 
kaydedeceksiniz. Sonra verilen bir sayıyı, bu öbeklerden gerekenleri doğru bir 
şekilde sıralayarak seslendireceksiniz (telefon bankacılığındaki gibi). İlk adım 
olarak bu işi yazıyla yapmanız (sayıyı yazıya dönüştürmeniz) istenmektedir. 
Bilgisayardaki saati sesli olarak okutmak da bunun bir uygulaması olabilir.</p>
<p align="justify"><b><font color="#0000ff">Manyetik sensörlü hız ölçümü&nbsp;&nbsp;</font></b><font color="#0000ff" size="5" face="Times New Roman">&#9679;</font><font color="#0000ff" size="5" face="Times New Roman">&#9679;</font></p>
<p align="justify">Bisiklet veya herhangi bir araç tekerleğine sayıları 1-5 
arasında değişebilen mıknatıslar yerleştirildiği varsayılarak sensörün mıknatısı 
görme sıklığına göre hızı ölçüp göstermeniz beklenmektedir. Hızın -/+ işaretini 
algılamanız beklenmiyor, mutlak değer yeterlidir. Mıknatıs sayısı ve teker çapı 
birer parametre olarak girilecektir. 3-120 km/saat arasında hassas (tamsayıya 
yuvarlatılmış) hız ölçümü ve birikimi alınarak</p>
<p align="justify">&nbsp;</p>

</body></html>