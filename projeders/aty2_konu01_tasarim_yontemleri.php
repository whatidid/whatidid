<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ATY-2 Konu-1</title>
</head>
<body>
<h1>Araştırma ve Tasarım Yöntemleri-2</h1>
<h2>1. Tasarım Yöntemleri</h2> (Son düzenleme: <font color="red">7.3.2021</font>)<font size=4>

<p><b>1)</b> Öncelikle tasarımı hangi amaçla yaptığınıza karar vermelisiniz.</p>
<p>&nbsp;&nbsp;&nbsp;<b>a)</b> Eğer amaç bir yenilik yapmak ise literatür ve geçmiş çalışmalar, yapılmış ürünler vb iyice araştırmalı, zaten yapılmış şeyleri ilk kez yaptığınızı iddia etme durumuna düşmemelisiniz. İyi araştırdığınız halde yapılmamış olduğu kanaatine varıyorsanız, fikir kötü olabilir, insanlar bunu düşünebildiği halde bazı sakıncalarından dolayı (mesela masrafına değmeyeceği gibi) yapmamış olabilir. Fikrin iyi olduğundan da eminseniz acele etmelisiniz; zira dünyadaki milyarlarca insandan birilerinin sizin düşündüklerinizi düşünmesi ve sizden erken başarmaları çok kuvvetle muhtemeldir. Bu ihtimaller sizi ümitsizliğe sevketmesin; "<i>kimse yapmadıysa ben nasıl yapayım?</i>" dememelisiniz, bilakis "<i>kimse yapmadıysa ilk ben yapmalıyım"</i> demelisiniz.</p>
  
<p>&nbsp;&nbsp;&nbsp;<b>b)</b> Eğer yenilik gibi bir iddianız olmayıp, sadece kendiniz veya müşterinizin bir ihtiyacı için tasarım yapıyorsanız yine benzer amaçlarla yapılmış çalışmaları incelemelisiniz. Bu size zaman ve ufuk kazandırır. Ancak, yapılmış çalışmaları incelemeden ÖNCE, kendi tasarımınız için biraz kafa yormanız tavsiye edilir. Böylece, şartlanmalar olmadan düşünerek başkalarının düşünemediği faydalı tasarımlar ortaya çıkarma ihtimalini değerlendirmiş olursunuz. Yine de bu aşamayı çok uzatmadan yapılmış çalışmaları incelemeye geçiniz, zira yapılanlardan daha iyi fikirler bulma ihtimaliniz oldukça düşüktür.</p>
  
<p><b>2)</b> Karmaşık tasarımların çok sayıda alt sistemden oluşturulması tavsiye edilir. Bu durumda önce bir blok şema çiziniz. Her blokun giriş ve çıkışlarının ne olması gerektiğinden emin olunuz.</p>

<p><b>3)</b> Her alt sistemin detaylı tasarımını ayrıca yapınız. Sistemlerin giriş çıkış ilişkisini ve mantığını kavrayarak sağlam temellere oturtunuz. Bir blok diğer bir bloka bilgi aktarımından ibaret (yazılım) olarak bağlanırsa bağımsız gibi çalışmaya devam eder; ama elektriksel olarak bağlanırsa, giriş ve çıkış empedanslarına bağlı olarak çalışması değişebilir, bağımsız hali gibi olmayabilir.</p>

<p><b>4)</b> Tasarımlarınızı elde mevcut elemanlarla ve ucuza yapmaya çalışınız. Bulunması çok güç elemanlarla tasarlayıp sonra eleman beklemek zaman kaybettirir. Getirisinden masraflı tasarımlar ise satılmaz, zarar ettirir.</p>

<p><b>5)</b> Donanım ağırlıklı tasarımlar zaman ve masraf gerektiriyorsa önce simülasyonunun yapılması düşünülebilir. Pek çok tasarım problemi simülasyon aşamasında netleştirilip çözümü geliştirilebilir. Simülasyon, ileride dersimizin ayrı bir konusu ve ödevi olarak düşünülmektedir.</p>

<p><b>6)</b> Tasarımda her ihtimal düşünülmeli, sistemi çökertecek durumlara karşı önlem alınmalıdır. Meselâ, çalışma sırasında enerji kesilirse ne olacak? Çalışma şartlarındaki nem, titreşim, gürültü vb dikkate alınmalı, bozucu etkilere dayanıklı (robust=gürbüz) tasarım yapılmalıdır.</p>

<p><b>7)</b> İş güvenliği çok önemlidir. Hem çalışma aşamalarında, hem de kullanıcıya sunulan üründe tehlike arz eden durumlara karşı önlemler alınmış olmalıdır.<br>
Örnek: <a href="https://www.mursal58.com/talihsiz-duvar-tahtasi/">Planlama hatası</a>. Birçok yerde bu hikâye fıkra gibi anlatılmış ama verilen detaylardaki tutarlılığa bakılırsa yaşanmış olması çok muhtemel maalesef.</p>

<p><b>8)</b> Tasarımcı kendine kolay geleni değil, kullanıcıya kolay geleni tercih etmelidir. Tasarımcı birkaç gün daha kafa yorup doğru düzgün bir ürün çıkarabileceği halde yapmayıp, kullancıya eziyet veren bir yapıyla yetinirse, her kullanımında kullanıcının ahını alması kaçınılmazdır. Ancak bu iyileştirme fazla masraflı oluyorsa tasarımcı bundan kaçınmakta mazur sayılabilir. Bunun da sınırı, kullanıcının o iyileştirme için ödemeye razı olduğu bedel ile iyileştirme masrafı kıyaslanarak belirlenir.</p>

<p><b>9)</b> Tasarımın başarı ölçütleri mümkün mertebe sayısal ve ölçülebilir olmalıdır. Verim, sinyal/gürültü oranı, toplam harmonik distorsiyonu, hatalı sonuç oranı, cevap hızı gibi. Böylece benzer ürünlerle somut karşılaştırma mümkün olur.</p>

<p><b>10)</b> Aynı veya benzer yapı üzerinden zamanla gelişmiş sürümler düşünülüyorsa, başlangıç tasarımı o geliştirmelere uygun planlanmalıdır. Ancak ileriyi fazla düşünerek basit fonksiyonlu halini bile fazla masraflı gerçekleştirmek zarar ettirebilir. Bunun kararını etraflıca bir getiri-götürü değerlendirmesiyle vermek gerekir.</p>

<p><b>11)</b> Tasarım başarıyla gerçekleştirildikten sonra seri üretim düşünülüyorsa, seri üretimi hızlı ve ucuza gerçekleştirme teknikleri geliştirilmesi de gerekir. Buna göre tasarımın en baştan yeniden düzenlenmesi gerekebilir.</p>
</font>
</body>
</html>