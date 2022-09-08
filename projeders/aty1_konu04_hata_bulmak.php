<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ATY-1 Konu-4</title>
</head>
<body>
<h1>Araştırma ve Tasarım Yöntemleri-1</h1>
<h2>4. Hata Bulmak</h2> (Son düzenleme: <font color="red">25.11.2021</font>)<font size=4>
<p>Tasarım veya uygulamaların geliştirme/gerçekleştirme aşamasında hatalar yapmak adeta kaçınılmazdır. Yapılan hatalar bazen kolayca bulunur, bazen uzun uğraşlar sonucu bulunur; bazen hiç bulunamadığı da olur. Bulunan her hata tecrübeyi artırır. Ancak metotsuzca hata bulmaya çalışmak çok zaman kaybına yol açabilir, çalışma şevkini kırar ve araştırmacı/geliştirmeciyi şaşkın bir vaziyette bırakabilir. Hatta o işin ya da o araştırmacı/geliştirmecinin gözden çıkarılmasıyla sonuçlanabilir. İşi bir başkasına yaptırma çözümü de “neden yeterince gelişemiyoruz?” sorusunun cevaplarından birisi olur. Halbuki ister hesaplamalarda, ister yazılımda, ister  mekanik veya devre tasarımında veya bunların simülasyonu veya fiziksel gerçekleştirilmesinde olsun, karşılaşılan hataları bulmanın ortak bir metodu vardır.</p>

<h3>4.1 Yüzeysel Bakış</h3>

<p>Üstten yüzeysel ve hızlı bir bakışla bariz bazı hatalar görülebilir. Mesela devrede yanıp kararmış bir eleman veya yazılımda açıkça anlaşılan hata mesajı gibi. Sisteme enerji gelmemesi de genellikle yüzeysel bakışla fark edilebilecek hatalardandır. Tecrübelere göre mevcut problem için en sık karşılaşılan hata nedenlerine bakmak da bu sınıftan sayılabilir.</p>
<p>Aslında bu maddede sayılanlar belirli bir metot değil, biraz zaman alabilen asıl metoda hiç girmeden, varsa kısa yoldan hatayı görme ihtimallerini değerlendirmektir. Kısa yoldan yüzeysel bakışla bulunamayan hatalar için asıl metot, sonraki adımlardadır.</p>
<h3>4.2. Neden Çalışsın ki?</h3>
<p>Bir mühendisin bir sistem hakkında, “neden çalışmıyor?” sorusundan önce, “neden çalışsın ki?” sorusunun cevabına ulaşması gerekir. Zira normalde bir sistemin çalışması için pek çok şartın birden sağlanması gerekir; çalışmaması için ise küçük bir şartın sağlanmaması yeterli olabilir. Tasarlayıcı kendimiz isek bu soru daha da önem kazanır. Çünkü önceden doğrulanmamış çalışma için tasarımda yanlışlar olması kuvvetle muhtemeldir. Başkaları tarafından tasarlanmış ve doğrulandığı söylenen bir sistem için ise çalışmama nedeni muhtemelen bizim bir hatamız veya eksiğimizdir.</p>
<p>Sonuç olarak “neden çalışmıyor?” sorusu üzerine özgüvenle gidebilmek için önce eldeki sistemin çalışma prensibine vakıf olunuz. Sistemi yeterince anlayarak çalışması gerektiğini düşünüyorsanız sonraki adıma geçebilirsiniz.</p>

<h3>4.3. Ara Sorgulamalar</h3>

<p>İnsanların en iyi mantık yürüttüğü konulardan birisi, maddi menfaatlerini kaybetmenin söz konusu olmasıdır. Bu yüzden kurduğunuz sistem çalışmadığında yapmanız gerekenleri bulmak için şu durumda olduğunuzu varsayın:</p>
<p><i>Birine aracılar eliyle para gönderdiniz; fakat alıcı paranın gelmediğini veya eksik geldiğini söylüyor. Ne yapardınız?</i></p>
<p>Muhtemelen aracıları sorgulardınız. Peki ama ya yüze yakın sayıda aracı varsa? Üstelik para tek koldan değil de birkaç koldan aracılarla gönderilmişse? Hepsini tek tek sorgulamakla zaman kaybeder miydiniz? Yoksa daha hızlı bir yöntem mi uygulardınız?</p>
<p>Okumaya devam etmeden önce biraz düşünüp bir yöntem geliştirmeye çalışınız.</p>
<p>Yeterince düşündüyseniz okumaya devam edebilirsiniz. Aşağıda anlatılandan farklı ve daha iyi bir yöntem bulduğunuzu düşünüyorsanız bilmek isterim.</p>
<p>Bulduğunuz yöntem muhtemelen ara sorgulamalar yapmaktır. Şöyle ki:</p>
<p>Hangi ana kollarda para akışının aksadığına bakarsınız. Aksayan kolda ortadan bir aracıyı sorgularsınız. Onda problem olmamışsa onunla o kolun sonunun ortasından bir aracıyı, problem olmuşsa onunla o kolun başının ortasından bir aracıyı sorgularsınız. Böyle böyle devam ederek bir kolda yüz aracı olsa bile birkaç sorgulama ile aksama noktasını veya noktalarını bulursunuz.</p>
<p>Tabii bu sorgulamaları yapabilmek ve yorumlayabilmek için sistemin nasıl işlediğini bilmeniz ve ara sorgulamalar yapmaya yetkili olmanız gerekir. Mesela bu yöntem İngiliz bankalarında işlemiyor. Benim başıma geldi ve İngiliz bankası paranın alıcının hesabına ulaşıp ulaşmadığının, alıcının kişisel bilgisi olduğunu ve göndericiye bile söylenemeyeceğini iddia etti!</p>
<p>İşte bu yüzden "sistem neden çalışmıyor?" sorusundan önce "sistem neden çalışsın ki?" sorusuna cevabınız hazır olmalıdır. Bundan sonra yukarıdakine benzer yöntemle ister yazılım ister donanım olsun, sisteminizde ara ölçümler veya incelemeler yaparak hatayı teşhis etmeye çalışırsınız.</p>
<p>Bu sorgulamalarda tek tek her elemanı sorgulamak pek kullanışlı bir yöntem değildir. Zira sistemin çalışmasını çok iyi bilseniz bile tek tek her eleman üzerindeki ölçümlerin ne olması gerektiğini bulmak için çok kafa yormanız gerekebilir. Sistemleri blok şemalarla tasarlamak veya incelemenin avantajlarından birisi işte budur. Blok blok sorgulama yaparsınız. Problemli blok teşhis edildikten sonra gerekirse içindeki esas problem çıkaran eleman ayrıca alt sorgulamalarla teşhis edilebilir. Blok içi teşhisle uğraşmak pek ekonomik olmayacaksa o blok toptan değiştirilebilir, bozuk elektronik kartı tamirle uğraşmak yerine sağlamıyla değiştirmek gibi.</p>
<p>Hata, kâğıt üzerinde formüllerle yapılan bazı işlemlerde de olabilir. Burada yapılacak başlıca ara sorgulama yöntemlerinden birisi “birim doğrulama”dır. Eşitlik veya eşitsizliklerin her bir toplam terimi ve tarafları aynı birimli olmalıdır. Buna uymayan formülde hata olduğu anlaşılır. Birimlerle ilgili ayrıntılar, bu derste sonraki bir konu olarak anlatılacaktır.</p>
<h3>4.4. Teoriyle Çelişen Durumlar</h3>
<p>Peki sorgulamanın dibine kadar ulaşıp halen sorunu teşhis edememek mümkün müdür? Mümkündür; ama sakın pes etmeyin, işte burası tecrübenize tecrübe katacağınız aşamadır. Sorguladığınız en dip eleman, teoride varsayılana uymayan davranış gösteriyorsa doğal olarak onu sağlam biriyle değiştirmeyi düşünürsünüz. Ama değiştirmenize rağmen sorun devam edebilir. İyi kurulmuş bir teori ile pratik arasında ciddi bir uyuşmazlık olamaz. Uyuşmazlık varsa teori eksik varsayılmıştır ve şimdi o eksiği giderme zamanıdır. İşte bazı örnekler:</p>
<p>● Teoride opampın +/- giriş uçları arasında sıfır volt gerilim olduğu varsayarsınız. Ama istediğiniz gibi çalışmayan opampın +/- uçları arasında sıfırdan farklı voltaj ölçebilir ve opampın bozuk olduğunu düşünebilirsiniz. Ama yeni opamp takınca da aynı ölçümleri alabilirsiniz. Çünkü varsayılan bu teori eksiktir. Doğrusu “normal beslenen opampın <u>çıkışı doyumda değilse</u>, +/- uçları arasındaki gerilim yaklaşık sıfırdır”.</p>
<p>● Benzer şekilde BJT’lerin beyz-emiter arasında 0,7V gibi bir voltaj olduğunu varsayarsınız; ama bunun kesimdeki BJT için geçerli olmadığını unutmuş olabilirsiniz.</p>
<p>● Yine benzer şekilde MOSFET’lerin geçidinden kayda değer bir akım çekilmediğini varsayarsınız; ama aslında bu DC çalışma için doğrudur. AC çalışmada ise, geçit kapasitans gibi davranarak kayda değer bir kapasitif akım çekebilir. Hatta güç MOSFET’lerini anahtarlarken geçitten ciddi değerde bir akım çekilir.</p>
<p>● Simetrik olmayan, Mesela 0-12V ile beslenen ile bir opampın alt doyumda sıfır volt vermesini beklersiniz, ama o 2V civarı bir çıkış verebilir. Çünkü ister simetrik ister tek yönlü besleyin, ki opamp bununla değil kendi uçları arasındaki voltaj farklarıyla ilgilenir, alt doyumda alt besleme voltajının “output voltage swing” kadar üstünde, üst doyumda da üst besleme voltajının “output voltage swing” kadar altında çıkış voltajı verir. “Output voltage swing” ise genellikle 1-2V civarıdır.</p>
<p>● Yazılımda "ve"/"veya" gibi karşılaştırmaların  veya karşılaştırma sonucuna göre işlemlerin yanlış yapıldığını düşünebilirsiniz. Bu durumda şu fıkrayı hatırlayınız:<br>
<br>
<i>Bir yazılımcıya bir sabah karısı demiş ki “Bakkala gidip 2 ekmek al. Taze yumurta gelmişse bir düzine al”. Adam gider ve biraz sonra elinde 12 ekmekle döner. Sebebini soran karısına, “Taze yumurta gelmiş!” der.</i>
<br>
<br>Yani bazı mantık yorumları derleyici tarafından sizin zannettiğinizden farklı sırayla işleniyor olabilir. Bu yüzden çoklu karşılaştırmalarda veya işlem gruplarında parantez kullanmak anlam kargaşasını önler.</p>
<p>● Yazılımda, özellikle mikrodenetleyici yazılımında bazı çarpım hataları bulabilirsiniz. Aslında <code>.lst</code> dosyasını incelerseniz veya derleyici ayarlarını bilirseniz, değişkenlere ayrılan bayt veya bit sayısının sınırlı olmasından dolayı taşma olabildiğini ve üst bayt tarafından kırpıldığını anlayabilirsiniz. Benzer problem bazı hazır fonksiyonlarla da yaşanabilir.</p>
<p>● Simülasyon veya deneylerde alınan ölçümlerin temel sistem formüllerinden birini sağlamadığını görebilirsiniz. Bunun başlıca sebepleri, işin içine karışan ölçüm gürültüsü, parametre veya modelleme belirsizliklerine aşırı duyarlılık, veya teoride sonsuz küçük kabul edilen <i>dt</i>, <i>dx</i> gibi diferansiyel adımların simülasyonlarda yeterince küçük seçilmemesi olabilmektedir.</p>
<h3>4.5. Uyum sorunları</h3>
<p>Bazen hata noktasını bulursunuz fakat nedenini anlayamazsınız. Hatta hatanın, hata gözlenen noktanın öncesinden mi sonrasından mı kaynaklandığına karar veremeyebilirsiniz. Böyle durumlarda hata gözlenen noktanın hemen öncesindeki veya sonrasındaki blokların veya elemanların bağlantılarını ayırarak test etmek faydalı olabilir. Eğer ayrıldıkları zaman iki taraf da sağlıklı çalışıyor, fakat bağlanınca problem çıkarıyorsa uyum problemi düşünülebilir. Birbirine uyumlu eleman veya bloklar kullanılarak bu sorunu aşmak denenebilir. Ancak geribesleme gibi etkileşimler de birlikte çalışmada sorun çıkarabileceğinden, durumu etraflıca değerlendirmeden büyük masrafa girecek denemeler tavsiye edilmez.</p>
<h3>4.6. Sonuç</h3>
<p>Burada sıralanan metotların hatayı bulmanızda ve çözmenizde yardımcı olması kuvvetle muhtemeldir. Ancak burada hesaba katılmayan pek çok hata mekanizmaları da mümkündür. Bu tecrübeler ve bilimsel yaklaşımlar ışığında düşünerek, çeşitli ihtimalleri değerlendirerek başka yöntemler de geliştirebilir, tecrübelerinizi artırabilirsiniz.</p>
<p>İnsanın başlıca özelliklerinden birisi hata yaparak öğrenmesidir. Önemlisi, hataların üzerine cesaretle giderek sorunu çözebileceğinize özgüven duymanızdır. Ancak özgüven, sağlam bir temeli olana yakışır. Temelsiz özgüven aldatıcıdır.</p> 
</font>
</body>
</html>