<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

	
    <title>ATY-2 Ödev-2</title>
	<style type="text/css">
	<!--
	.tab { margin-left: 20px; }
	.tab2 { margin-left: 40px; }
	.tab3 { margin-left: 60px; }
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center
	}
	-->
</style>

</head>
<body>
<p>Son düzenlenme: 26.4.2020</p>
<h1>ATY-2 Ödev-2</h1> <font color=red>Son TESLİM tarihi: 12.5.2020 Salı<br>
Bu ödev birinci ödevin <b>2 katı</b> ağırlığındadır.</font> (1. ve henüz verilmemiş 3. ödevler 10 üzerinden, bu ödev ise 20 üzerinden değerlendirilip üçünün toplamı 2,5 ile çarpılarak ATY-2 notunuz belirlenecektir.)
<br><br>Öncelikle "<a href="https://atasevinc.net/projeders/aty2_konu4_duyarlilik_analizi.php">Duyarlılık Analizi</a>" ve "<a href="https://atasevinc.net/projeders/aty2_konu5_simulasyon.php">Simülasyon</a>" konularını iyice çalışmalı ve <b>anlamalısınız</b>. O konuları anlamadan bu ödevi yapamazsınız.
<br><br>Ödev adımlarınız ve açıklamaları şöyledir:<br><br>
<font size=4>
<div><a href="javascript:hideshow(document.getElementById('kisisel_param'))">Kişisel parametreleriniz</a> (Ayrıca puanı yok, aşağıda belirtilen puanları almanız için şart)</div>
<div id="kisisel_param" style="display: none;">
	<p class="tab"><i>a</i> = Öğrenci numaranızın son rakamı<br>
	<i>b</i> = Soyadınızdaki harf sayısı</p>
</div>
<br>
<div><a href="javascript:hideshow(document.getElementById('motor_param'))">Motor parametreleri</a> (1 puan)</div>
<div id="motor_param" style="display: none;">
	<p class="tab"><a target="_blank" href="https://atasevinc.net/emd/dcservomotordesign.php">DC servo motor tasarımı</a> sayfasına gidip aşağıdaki tasarım taleplerine göre motor parametrelerini ve anma çalışma değerlerini bulunuz. Formu doldururken ondalık ayraç olarak virgül değil nokta kullanınız.</p>
  <p class="tab"><i>v<sub>a</sub></i> = (20*b+100)V<br>
  <i>n</i> = (200*a+1000)rpm<br>
  <i>P<sub>i</sub></i> = boş bırakınız<br>
  <i>P<sub>o</sub></i> = (a+b+5)*100W<br>
  Efficiency = 0.80<br>
  <i>k<sub>ml</sub></i> = 0.6<br>
  <i>&tau;<sub>elc</sub></i> = 0.5<br>
  <i>&tau;<sub>mec</sub></i> = 0.4</p>
  <p>Buradan bulduğunuz <i>R<sub>a</sub> , L<sub>a</sub> , K<sub>b</sub> , B<sub>f</sub> , J<sub>i</sub></i> değerleri ve <code>va_anma</code> için <i>v<sub>a</sub></i> değerini, <code>TL_anma</code> için <i>T<sub>L</sub></i> değerini, <a href="https://atasevinc.net/projeders/dcservomotor.m">dosyasında</a> "% Motor parametreleri" bölümündeki değerlerin yerine yazınız.</p>
</div>
<br>
<div><a href="javascript:hideshow(document.getElementById('anma_degerleri'))">Anma çalışma değerleri</a> (0 puan, çünkü bu formül sonraki adım için aslında)</div>
<div id="anma_degerleri" style="display: none;">
  <p class="tab">Anma armatür akımını(<i>i<sub>a</sub></i>) ve açısal hızını(&omega;), sürekli durumda geçerli şu formülle hesaplayınız:</p>
  <img class="tab" src="https://atasevinc.net/projeders/iaw_denge.png">
</div>
<br>
<div><a href="javascript:hideshow(document.getElementById('duyarlılık_tablosu'))">Duyarlılık tablosu</a> (8 puan)</div>
<div id="duyarlılık_tablosu" style="display: none;">
	<p class="tab">Aynı formül ve aynı v<sub>a</sub> değeri ile, <u>tek tek</u> &nbsp; <i>R<sub>a</sub> , K<sub>b</sub> , B<sub>f</sub> , T<sub>L</sub></i> değerlerini %1 kadar değiştirip <i>i<sub>a</sub></i> ve &omega;'yı baştan hesaplayıp duyarlılık tablosunu doldurunuz. Unutmayınız, her bir parametreyi %1 değiştiriken, diğerlerini tasarım adımında bulduğunuz değerlerde tutacaksınız ve hem <i>i<sub>a</sub></i> hem &omega;'nın duyarlılıklarını hesaplayıp tabloya yazacaksınız.</p>
<table style="width:100%">
  <tr>
    <th>...</th>
    <th><i>D</i>(<i>i<sub>a</sub></i> , ...)</th>
    <th><i>D</i>(&omega; , ...)</th> 
  </tr>
  <tr>
    <td><b><i>R<sub>a</sub></i></b></td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td><b><i>B<sub>f</sub></i></td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td><b><i>K<sub>b</sub></i></td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td><b><i>T<sub>L</sub></i></td>
    <td> </td>
    <td> </td>
  </tr>
</table>
</div>
<br>
<div><a href="javascript:hideshow(document.getElementById('analiz'))">Analiz</a> (7 puan, dağılımı aşağıda)</div>
<div id="analiz" style="display: none;">
	<p class="tab">Duyarlılık tablosundaki sonuçları yorumlayarak,</p>
	<p class="tab2"><b>1)</b> Aynı gerilim ve aynı yük torku altında motorun aynı hızda daha <u>az akım</u> çekmesi isteniyorsa, tasarımda hangi parametre hangi yönde değiştirilmelidir? (Yalnızca <i>R<sub>a</sub> , K<sub>b</sub> , B<sub>f</sub></i> parametrelerinden biri) (3 puan)</p>
	<p class="tab2"><b>2)</b> Yük torku <i>T<sub>L</sub></i>'yitahmin etmek için, <i>i<sub>a</sub></i> ve &omega; sinyallerinden hangisi daha ayırt edicidir? Bu soruyu iki duruma göre cevaplayınız:</p>
	<p class="tab3"><b>a)</b> Sadece <i>T<sub>L</sub></i> değişebilip, motor parametreleri sabit ise.(2 puan)</p>
	<p class="tab3"><b>b)</b> <i>T<sub>L</sub></i>'den başka <i>R<sub>a</sub></i> direnci de değişebiliyor, diğer motor parametreleri sabit ise. (2 puan)</p>
</div>
<br>
<div><a href="javascript:hideshow(document.getElementById('simulasyon'))">Simülasyon</a> (4 puan)</div>
<div id="simulasyon" style="display: none;">
	<p class="tab">Kişisel değerlerinizle düzenlediğiniz <a href="https://atasevinc.net/projeders/dcservomotor.m">dosyasında</a> <i>v<sub>a</sub></i> armatür gerilimi ve <i>T<sub>L</sub></i> yük torku en başta aniden uygulanmaktadır.</p>
		<p class="tab2"><i>v<sub>a</sub></i> gerilimi sıfırdan başlatılıp doğrusal artışla 2 saniyede anma değerine ulaştırılacak,</p>
		<p class="tab2"><i>T<sub>L</sub></i> torku sıfırdan başlatılıp <i>t</i> &ge; 3 saniye için (aniden) anma değerinde uygulanacak ( 0 &le; t < 3s için yük torku sıfır),</p>
	<p class="tab">şekilde program dosyasını düzenleyiniz. Dosya adının ilk 2 harfi "dc" devamı öğrenci numaranız, olacak şekilde kaydediniz (uzantısını değiştirmeyiniz). Programı çalıştırıp son <i>i<sub>a</sub></i> ve &omega; değerlerinin tasarımda verilen çalışma değerleriyle aynı olup olduğunu doğrulayınız.  <i>i<sub>a</sub></i> ve &omega; grafiklerinizi de göndereceksiniz.</p>
	<p class="tab">MATLAB kullanma imkânı olmayanlar, <a href="https://www.gnu.org/software/octave/download.html">https://www.gnu.org/software/octave/download.html</a> adresinden Octave indirip kullanabilirler (GUI tercih edebilirsiniz).</p>
</div>
<br>
<div><a href="javascript:hideshow(document.getElementById('rapor'))">Gönderilecek ödev dosyaları</a> (Ayrıca puanı yok, yukarıda belirtilen puanları almanız için şart)</div>
<div id="rapor" style="display: none;">
<p class="tab">Ödevin bütün adımlarındaki bulgularınızı ve tablonuzu ister elle yazıp görüntü dosyasına çevirin, isterseniz doğrudan bilgisayarda yazın, fakat  <i>i<sub>a</sub></i> ve &omega; grafiklerinizi aynı dosyaya yerleştiriniz. TEK BİR <b>pdf</b> dosyası (dosya adında öğrenci numaranız da olsun) ve AYRICA program dosyanızı en geç 12 Mayıs 2020 Salı günü as@atasevinc.net adresime e-postalayınız.
</div>
  
</font>
</body>
</html>