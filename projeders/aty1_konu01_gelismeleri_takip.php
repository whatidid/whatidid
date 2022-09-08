<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ATY-1 Konu-1</title>
</head>
<body>
<h1>Araştırma ve Tasarım Yöntemleri-1</h1>
<h2>1. Mevcut gelişmişlik durumunun farkında olmak</h2> (Son düzenleme: <font color="red">09.10.2021</font>)<font size=4>
<p>Araştırma ve tasarım yapmanın ilk adımı, ilgili konuda mevcut bilgi ve teknoloji düzeyinin farkına varmaktır. Araştırmacı veya tasarımcı, özellikle ilgi alanında çevresinde ve dünyada olan bitenlerden haberdar olmalıdır. Lisansüstü çalışmalara literatür taraması ile başlanmalıdır. Litratür taraması lisans seviyesinde biraz ağır gelebilir. Bunun yerine öğrencilikten itibaren gelişmeleri takip etmek için zaman zaman yapılması gereken bazı şeyler vardır:</p>
<p>● Katalog incelemek<br>
Bunlar temel elektrik-elektronik, mekanik, sensör, bağlantı elemanları vb kataloglar olabileceği gibi, motor, ölçü aleti, güç kaynağı vb cihaz ve araç katalogları da olabilir. Erişilebilir elemanlar hakkında fikriniz olmalıdır. İhtiyaç duyduğunuzda "şöyle bir eleman vardı" diyerek ayrıntılı bilgi için tekrar dönebilmeniz için elemanın ne işe yaradığına ve fiyatlarına biraz bakmalısınız. En azından ilginizi çekenlerin kullanımına da bakmalısınız.</p>
<p>● Programlama dillerine ve komutlarına göz gezdirmek<br>
Çoğu kişinin zannettiğinin aksine günümüzde "yazılım" ayrı bir alan değildir; hemen her alanın adeta beynidir. Nota bilmeden belki müzisyen olabilirsiniz, ama yazılım bilmeden mühendis olamazsınız. Okur-yazarlık gibi bir zarurettir bu. Hatta bir programlama dili bilmeniz de yetmez; herhangi bir programlama dilinde yazılmış bir programda en azından yapılan işi anlayabilecek ve değişiklik yapabilecek kadar çoğu programlama dili hakkında kavramsal bilgi sahibi olmalısınız.<br>
Bu amaçla çeşitli programlama dilleri hakkında genel bilgiler edinmeli, bazı komutlarının ne işe yaradığını ve nasıl kullanıldığını öğrenmelisiniz. Belli başlı kod parçacıklarını anlayabilmelisiniz.<br>
En geç son sınıftayken, en az bir assembly dilinde belli başlı komutları da öğrenmelisiniz. PIC, arduino gibi mikrodenetleyiciler için hazırlanmış ve çok gelişmiş stüdyo programları sizi kendilerine muhtaç tutmaya çalışır. Onları da kullanın ama gerektiğinde byte hatta bit seviyesinde müdahale edecek kadar assembly komutlarına aşinalık kazanmalısınız. Aksi halde şöyle gülünç bir duruma düşebilirsiniz: Mikrodenetleyiciye (özellikle arduinoya) bir iş yaptıran program yaptığınızı iddia edebilirsiniz; ama belki de siz onu programlayan değil sadece kullanansınızdır.</p>
<p>● Bilimsel ve teknolojik magazinlerdeki ilgili haberleri izlemek.<br>
Sıradan günlük gazetelerdeki bilim/teknoloji haberlerini kastetmiyoruz, onlardan haberdar olmak da iyidir; ancak onlara çok güvenmeyiniz, çoğu ne yazdığını kendisi de bilmeden yazar. Verilen haberin <i>troll</i> veya hatalı olup olmadığını yorumlayabilmelisiniz. Olmayacak şeyleri ayırt edebilmeli, şüpheli durumlarda gösterilen kaynağın orijinal yayınına kadar gitmeye üşenmemelisiniz. Günümüzde internet üzerinden resim araması ve çeviri gibi pek çok hizmet verilmektedir. Bu imkânları doğru ve yerinde kullanmamak büyük vebaldir. Meselâ "<i>kaya içinde 500 bin yıllık çekiç bulundu</i>" haberinde verilen resmi, bir arama motorunda aratırsanız sadece ciddiyetten uzak ve maalesef Türkçe sosyal medya kaynaklarında olduğunu görerek <i>troll</i> olduğunu anlarsınız. Diğer yandan <i>troll</i>müş gibi görünen "<i>Ay'dan getirildi diye Hollanda'ya hediye edilen taş, tahta çıktı</i>" haberini aratırsanız, ciddi ve resmi kaynaklı bir BBC haberi olduğunu görürsünüz.</p>

<p>Zaman zaman bu tür göz gezdirmelerin başlıca faydaları aşikâr olmakla birlikte şöyle sıralanabilir:</p>

<p>1) Tasarımcı hangi tasarım elemanları ile tasarım yapması gerektiğini bilir. Bir alt iş fonksiyonu gerçekleştirmek için hazır olan bir eleman kullanmak gayet ekonomik ve mantıklı iken onu daha alt elemanlarla tasarlamak gibi gereksiz bir karmaşaya girmez. O yeteneklerini, zamanını ve enerjisini, öyle küçük işlere değil, daha önemli tasarımlara yöneltir.</p>

<p>2) Elemanların fiyat ve erişim süreleri hakkında da fikir edinir. Hangi elemanların teslimat sürecinin uzun olduğunu bilirse iş planını da ona göre yapar.</p>

<p>3) Varlığından haberdar olduğu her eleman, ona yeni ufuklar kazandırır, daha iyi fikirler üretmesine yardımcı olur. Mesela GSM modülünün varlığından haberdar olan bir tasarımcı/geliştirici, uzaktan bilgi alıp verneye, komutlar göndermeye dair pek çok tasarım fikri geliştirebilir. İnsanlar gördükleri bildikleri şeyler cinsinden fikir üretme eğilimindedirler. Meselâ yaklaşık 100 yıl önceki insanlara 100 yıl sonra dünyanın teknoloji seviyesini hayal etmeleri istenmiş. Birileri de bu hayalleri çizmiş. İnternette bulup o resimlere bakarsanız daha iyi anlarsınız. Çoğu tasarım hayallerinde enerji kaynağı olarak buhar tüttürmüşler.</p>

<p>4) İlgili normlara ve kavramlara aşinalık kazandırır. Aşina olmayan kişi ise bunları sıfırdan keşfetmek veya kurgulamak zorunda kalır. Meselâ ilk cep telefonlarından birinin menü tasarımını yapma görevi o zamanlarda size verilmiş olsaydı bir çok şeyi kurgulamak için çok zaman ve emek harcardınız. Halbuki şimdi böyle bir görev verilse çoğunuz kolayca kendi menü tasarımınızı yapabilirsiniz.</p>

<p>5) Yanıltıcı verilere aldanmaktan korunursunuz. Meselâ iyi aydınlatan bir lamba ya da iyi çeken bir süpürge almak için çoğu insan harcanan watt değerine bakar. Halbuki normlarla biraz ilgilenmiş bir insan aydınlatma ölçüsü olan lümen değerine ya da süpürgenin emiş gücüne bakar. Yüksek akımlı bir MOSFET'i çok ucuz zannedebilirsiniz. Ama katalog okumayı bilirseniz o akımın kısa süreli (peak) olup olmadığı veya soğutucu kullanılırkenki akım olduğu gibi bilgileri fark edersiniz.</p>

<p>6) Yasal kısıtlamalardan haberdar olursunuz. Meselâ satacağınız cihazda zehirli olduğu için fazla ve standartsız lehim kullanamazsınız, çevredeki diğer cihazları etkileyecek kadar elektromanyetik dalga yayamazsınız.</p>

<p>Bu gibi nedenlerle iyi bir mühendis veya adayı mevcut şartların farkında olmalıdır.</p>
<p>&nbsp;&nbsp;<a href="https://atasevinc.net/projeders/aty1_odev1.php">Ödev-1</a> (Son TESLİM tarihi: <font color="red">24.10.2021</font>)</p>
</font>
</body>
</html>