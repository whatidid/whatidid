<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Elektrik Motorlar�n�n Denetimi</title>
</head>

<body bgcolor="#33CCFF">

<p>Son g�ncellenme tarihi: <font color="#FF0000"><b></b></font><b><font color="#FF0000">15.10.2015</font></b><font color="#FF0000"></font></p>
<p><a href="Elektrik_Motorlarinin_Denetimi-tr.pdf">Ders i�eri�i ve tan�t�m formu</a></p>
4. hafta dersimizde yap�lan <a href="dc_motor.m">dc motor sim�lasyonu</a> program�n�n d�zenlenmi� halini indirebilirsiniz. MATLAB program�d�r.
<p>**********************</p>
<p>A�a��dakiler ise 2012 tarihli dosyalar ve �devlerdir:</p>
<p>Elektrik Motorlar�n�n Denetimi dersinde MATLAB �zerinde  yap�lanlar ile 
�devlerinizde yard�mc� olacak MATLAB dosyalar�n� buradan
<a href="emd_matlab.zip">indirebilirsiniz</a>.</br>Ba�l�ca dosyalar hakk�nda 
a�klamalar ��yledir:</br>dcmotor.m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
: DC servo motor</br>asenkron_albt.m&nbsp;&nbsp;&nbsp; 
: Durgun (alfa,beta) eksenlere g�re asenkron motor sim�lasyonu (voltajlar�n bir 
�ekilde �retildi�i varsay�l�yor)</br>asenkron_ws.m&nbsp;&nbsp;&nbsp;&nbsp; : 
Senkron h�zda d�nen (dq) eksenlere g�re asenkron motor sim�lasyonu (voltajlar�n 
bir �ekilde �retildi�i varsay�l�yor)</br>asenkron_pwm.m&nbsp; : Durgun 
(alfa,beta) eksenlere g�re asenkron motor sim�lasyonu ama uzay vekt�r 
mod�lasyonlu pwm ile.&nbsp;</br>

pmsm.m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
Senkron h�zda d�nen (dq) eksenlere g�re sabit m�knat�sl� senkron motor 
sim�lasyonu (voltajlar�n bir �ekilde �retildi�i varsay�l�yor)</br>

srsm.m&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
Senkron h�zda d�nen (dq) eksenlere g�re sarg�l� rotorlu senkron motor 
sim�lasyonu (voltajlar�n bir �ekilde �retildi�i varsay�l�yor)</br>DTC (klas�r)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
: Do�rudan tork kontrol� ile asenkron motorun durgun (alfa,beta) eksenlere g�re 
sim�lasyon dosyalar� olup �u an �al��makla beraber daha da g�ncellenecektir.</br></br><a href="file:///C:/Documents%20and%20Settings/Elektrik.DATRON/Desktop/gecici%20web/FOC_blok.jpg">FOC blok �emas�</a>n� da 
indirebilirsiniz. DTC'deki ana dosya temizlenmi�tir.10.01.2011.</br>

<p>
<a href="http://em.ucv.ro/elee/EN/realisations/MachinesElectriques/Induction/DirectTorqueControl/Principe/4_cours.htm">
DTC i�in derste kulland���m internet sayfas�n�n ba�lant�s�</a><p>�devler 
��yledir:<p><b><font color="#FF0000">�dev 3 ve 4</font></b><p>Sabit m�knat�sl� 
senkron motor ve sarg�l� rotorlu senkron motor modellerinden birisini uzay 
vekt�rl� FOC, di�erini de DTC y�ntemiyle kontrol etmeniz istenmektedir. Bunun 
i�in asenkron motor i�in yaz�lm�� asenkron_pwm.m dosyas� ve DTC klas�r�ndeki 
dosyalar� uygun �ekilde d�zenleyebilirsiniz. Ancak, senkron motorlar�n en 
uygun sim�lasyonlar� senkron h�zla d�nen eksenlere (dq) g�re olmas�na ra�men 
kontrol yaz�l�m�n�z�n do�rudan dq ak�m bile�enlerinden �l��m almas� yasakt�r; 
��nk� pratikte bu m�mk�n de�ildir. dq ak�m bile�enleri durgun alfa,beta 
eksenlerine d�n��t�r�lerek �l��m olarak al�nmal�d�r. (Bunun tekrar dq 
eksenlerine d�n��t�r�lerek kullan�lmas� yaz�l�m i�in gereksiz bir d�n���m-ters 
d�n���m �ifti gibi g�r�lse de ileride �l��mlerde g�r�lt� oldu�unu d���nd���n�zde 
fark �nemli olacak. Ama siz yine de �imdilik g�r�lt�s�z �al��acaks�n�z.) 
Sim�lasyonlarda motorlar y�ks�z kald�r�lacak, h�z dengeye gelince y�klenecek, 
tekrar h�z dengeye gelince y�k s�f�rlanarak tekrar dengeye gelene kadar yeterli 
bir s�rede sim�lasyon tamamlanacakt�r. Ak�mlar ve h�z �izilecektir. 
Programlar�n�z ile se�enekleriniz (DTC ile sarg�l� rotorlu ve FOC ile sabit 
m�knat�sl� ya da DTC ile sabit m�knat�sl� ve FOC ile sarg�l� rotorlu) 
birbirinizden al�nd���n� d���nd�rtecek kadar benzememelidir.</br>

<p><b>�dev 2</b> ��yledir:</p>

<p>Asenkron motor ve senkron motor i�in ayr� ayr� birer simulink model dosyas� 
�zerinde motora uygun genlikte 50Hz'lik AC gerilim uygulay�n�z. Motor ba�ta 
y�ks�z olsun. �al��ma dengeye geldikten bir s�re sonra anma de�erine yak�n 
b�y�kl�kte bir y�k torku uygulans�n. Yeniden dengeye ula��ld�ktan sonra ise y�k 
torku tamamen kald�r�ls�n. Yeniden dengeye ula��ld�ktan sonra AC kaynak 
geriliminin genli�i aniden %40 art�r�ls�n. Yeniden dengeye ula��ld�ktan sonra 
ise bu gerilim tekrar eski de�erine getirilsin. �al��mada g�r�nt�lenmesi istenen 
grafikler �unlard�r: Senkron motorun stator, asenkron motorun rotor ak�s� 
vekt�r�n�n b�y�kl��� ile iki motorda da stator fazlar�ndan birisinin ak�m� (50Hz'lik AC ak�m) ve 
rotor h�z� (devir/dakika = rpm cinsinden).</p>

<p>�ki ayr� model dosyas� teslim etmeniz beklenmektedir. Herbirinde 3'er grafik 
�izilmelidir. </p>

<p> <b>�dev 1</b> ��yledir:</p>
<p>Derste Euler metoduyla yap�lan DC motor model sim�lasyonunu Runga-Kutta metoduna 
g�re d�zenleyiniz. Giri� voltaj�n� rampa �eklinde s�f�rdan itibaren art�rarak 
motoru kald�r�n�z. Sonra voltaj� anma de�erinde sabit tutunuz. Kalk�� s�ras�nda 
ve motor dengeye gelene kadar bir s�re y�k torku s�f�r olsun. Sonra aniden tam 
y�k torkunu uygulay�n�z. Yine dengeye geldikten bir s�re sonra aniden y�k 
torkunu kald�r�n�z. Dengeye geldikten sonra giri� voltaj�n� rampa ini�i �eklinde 
z�t y�nde anma de�erine getiriniz ve bu de�erde sabit tutunuz. Dengeye gelince 
�ncekiyle ayn� i�aretli y�k torkunu aniden uygulay�n�z. Bu durumda DC makina 
jenerat�r moduna ge�ecek ve biraz h�zlanacakt�r. Dengede bir s�re �al��t�ktan 
sonra y�k torkunu aniden kald�r�n�z(s�f�rlay�n�z). Yine dengede bir s�re 
�al��t�ktan sonra giri� voltaj�n� aniden s�f�rlay�n�z. Dengeye gelinceye kadar 
(h�z ve ak�m s�f�rlanana kadar) bir s�re daha �al��t�r�p sim�lasyonu 
sonu�land�r�n�z. T�m bunlar ayn� sim�lasyon �al��mas� i�inde yer alacakt�r. H�z 
ve y�k torkunu uygun bir �l�ekle (de�i�imler farkedilebilecek �ekilde) ayn� 
grafik penceresinde, voltaj ve ak�m grafiklerini de ba�ka bir grafik 
penceresinde yine uygun �l�eklerle �izdiriniz. Grafikler �zerine Matlab 
komutlar�yla a��klamalar yazd�r�n�z.</p>
<!-- Badge Code - Do Not Change The Code -->
<a class="hitCounter" href="https://visitorshitcounter.com/" target="_blank" rel="nofollow noopener" title="Hit counter" data-name="fc1d670dc2644f7a3d5fd70f7bc27c16|5|ip|1|#ea5050|#ffffff|small|s-hit">Hit Counter</a><script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script>
<!-- Badge Code End Here -->
</body>

</html>