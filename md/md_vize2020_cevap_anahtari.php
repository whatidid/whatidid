<html>
 <head>
  <title>Mikrodalga Teorisi vize 2020 cevap anahtarı</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <h2>23 Kasım 2020 Mikrodalga Teorisi vize sınavı cevap anahtarı</h2>
  <p>Cevapların çoğu, çözüm adımları burada gösterilmeden verilmiştir.</p>
  <form action="" method="post">
   <i>a</i> = Soyadınızdaki harf sayısı = <input type="text" name="a" size="2" /><br>
   <i>b</i> = Öğrenci numaranızın <u>sıfırdan farklı</u> son rakamı = <input type="text" name="b" size="1" /><br>
   <p><input type="submit" value="Kişisel parametrelere göre cevapları göster"/></p>
  </form>
  <?php
   $a=$_POST['a'];
   $b=$_POST['b'];
   if (($a*$b)!==0) {
   echo '<p>a='.$a.' ,  b='.$b.' (Sıfırdan büyük geçerli değerler girilmelidir. Geçersiz değerler için programın sonuç vermesine itibar etmeyiniz.)<br>Aşağıdaki sayılarda ondalık ayraç nokta(.), bölük ayracı boşluk veya virgüldür(,).</p>';
   echo '<p><b>1. SORU CEVAPLARI</b><br>';
    $epr=1+$a/5; $ep0=8.85e-12; $ep=$epr*$ep0;
    $mur=1.05; $mu0=pi()*4e-7; $mu=$mur*$mu0;
    $Z0=sqrt($mu/$ep);
	echo '&epsilon;<sub>r</sub> = '.$epr.' , &nbsp; <b>Z<sub>0</sub> = '.number_format($Z0,2).' &Omega;</b><br>';
    $A=$b/10; echo 'Anten dik alanı = '.$A.' m<sup>2</sup><br>';
    $Port=280e-9/$A; echo '<b>Ortalama Poynting vektörü büyüklüğü = P<sub>ort</sub> = '.number_format($Port*1e9,2).' nW/m<sup>2</sup></b><br>';
    $H=sqrt(2*$Port/$Z0); echo 'Manyetik alan vektör genliği = <b>H<sub>max</sub> = '.number_format($H*1e6,2).' &mu;A/m</b><br>';
    $v=1/sqrt($mu*$ep); echo 'Dalganın ortamda ilerleme hızı = <b>v = '.number_format($v,0,".","&nbsp;").' m/s</b></p>';
   echo '<p><b>2. SORU CEVAPLARI</b><br>';
    $theta_sinir=rad2deg(asin(1/sqrt($epr*$mur)));
    echo 'Tam yansıma sınır açısı = <b>&theta;<sub>tam</sub><sup>sınır</sup> = '.number_format($theta_sinir,2).'&deg;</b><br>';
    $theta2=rad2deg(asin(sqrt($epr*$mur)*sin(deg2rad(10+$a+$b))));
    echo 'Kırılma açısı = <b>&theta;<sub>2</sub> = '.number_format($theta2,2).'&deg;</b></p>';
   echo '<p><b>3. SORU CEVAPLARI</b><br>';
    $Z0=75;
    $C=10*$b*1e-12; echo 'Verilen birim uzunluk kapasitansı = '.$C.' F/m<br>';
    $f=1.2e9;
    $L=pow($Z0,2)*$C; echo 'Birim uzunluk endüktansı = <b>L='.number_format($L*1e9,2).' nH/m</b><br>';
    $w=2*pi()*$f; echo 'Açısal frekans = &omega; = '.number_format($w,0,".","&nbsp;").' rad/s<br>';
    $beta=$w*sqrt($L*$C); echo 'Dalga yayılma sabiti <b>&beta; = &omega;&radic;<span style="text-decoration:overline;">LC</span> = '.number_format($beta,5).' rad/m</b><br>';
    $lambda=2*pi()/$beta; echo 'Dalgaboyu = <b>&lambda; = 2&pi;/&beta; = '.number_format($lambda,4).' m</b></p>';
   echo '<p><b>4. SORU CEVAPLARI</b><br>';
    $smith_cap=16.82;
    $Z0=50;
    $ZL_reel=10*$a; $ZL_sanal=10*$b-55; // Ohm
	$ZL_sanal_isaret=' + <b><i>j</i></b>';
	if ($ZL_sanal<0) $ZL_sanal_isaret=' &ndash; <b><i>j</i></b>';
	echo 'Verilen Z<sub>L</sub> = ('.$ZL_reel.$ZL_sanal_isaret.abs($ZL_sanal).') &Omega;<br>';
    $Z_L_reel=$ZL_reel/$Z0; $Z_L_sanal=$ZL_sanal/$Z0; // Normalize
	echo 'Z&#772;<sub>L</sub> = '.number_format($Z_L_reel,3).$ZL_sanal_isaret.number_format(abs($Z_L_sanal),3).'<br>';
    //$GammaL=($Z_L-1)/($Z_L+1)
	$payda=pow($Z_L_reel+1,2)+pow($Z_L_sanal,2);
	$GammaL_reel=(pow($Z_L_reel,2)+pow($Z_L_sanal,2)-1)/$payda	;
	$GammaL_sanal=2*$Z_L_sanal/$payda; // $GammaL_sanal_isaret=$ZL_sanal_isaret;
	$rho=sqrt(pow($GammaL_reel,2)+pow($GammaL_sanal,2));
	$thetaL=rad2deg(atan2($GammaL_sanal,$GammaL_reel));
	echo '&Gamma;<sub>L</sub> = '.number_format($GammaL_reel,4).$ZL_sanal_isaret.number_format(abs($GammaL_sanal),4).'<br>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp; = <b>&rho;</b>&angle;&theta;<sub>L</sub> = <b>'.number_format($rho,4).'&angle;</b>'.number_format($thetaL,4).'&deg;<br>';
    $rho_cap=$smith_cap*$rho;
    $s=(1+$rho)/(1-$rho);
	echo 'Duran dalga oranı = <b>s = '.number_format($s,4).'</b><br>';
    $yol_bas=(180-$thetaL)/720; // dalgaboyu cinsinden
    echo '<i>l</i> = 0 hizası, empedans cinsinden Smith abağında dış göstergede '.number_format($yol_bas,4).'&lambda; hizasında ('.number_format($thetaL,4).'&deg; hizasında).<br>';
    $yol=($a+$b)/40; // dalgaboyu cinsinden
	echo 'Yükten kaynağa doğru <i>l</i> = '.number_format($yol,4).'&lambda; mesafedeki giriş empedans ve admitansı soruluyor.<br>';
    $yol_kon=$yol_bas+$yol; // dalgaboyu cinsinden
	echo 'Yani dış göstergeye göre ('.number_format($yol_bas,4).'+'.number_format($yol,4).')&lambda; = '.number_format($yol_kon,4).'&lambda; hizasındaki empedans.<br>';
	if (($yol_kon<0)||($yol_kon>=0.5)) {
 	 if($yol_kon<0) $yol_kon+=floor(abs($yol_kon)*2+1)*0.5;
	 if($yol_kon>=0.5) $yol_kon=fmod($yol_kon,0.5);
	 echo 'Bu konum, &lambda;\'nın katsayısının 0\'dan itibaren 0.5\'ten küçük dengi ile yazılırsa, dış göstergede '.number_format($yol_kon,4).'&lambda; hizasıdır.<br>';
	}	
    $Gamma_reel=$rho*cos(deg2rad($thetaL)-4*pi()*$yol);
    $Gamma_sanal=$rho*sin(deg2rad($thetaL)-4*pi()*$yol);
	$Gamma_sanal_isaret=' + <b><i>j</i></b>';
	if ($Gamma_sanal<0) $Gamma_sanal_isaret=' &ndash; <b><i>j</i></b>';
	$Gamma_aci=rad2deg(atan2($Gamma_sanal,$Gamma_reel));
	echo '&Gamma;(<i>l</i>)='.number_format($Gamma_reel,4).$Gamma_sanal_isaret.number_format(abs($Gamma_sanal),4).'<br>';
	$payda=pow(1-$Gamma_reel,2)+pow($Gamma_sanal,2);
	// Normalize giriş empedans
    $Z_in_reel=(1-pow($Gamma_reel,2)-pow($Gamma_sanal,2))/$payda;
	$Z_in_sanal=2*$Gamma_sanal/$payda; // $Z_in_sanal_isaret=$Gamma_sanal_isaret;
	$Z_in_mutlak=sqrt(pow($Z_in_reel,2)+pow($Z_in_sanal,2));
	$Z_in_aci=rad2deg(atan2($Z_in_sanal,$Z_in_reel));
	echo 'Bu hizadaki normalize empedans abaktan şöyle bulunur: <b>Z&#772;<sub>in</sub>(<i>l</i>) = '.number_format($Z_in_reel,4).$Gamma_sanal_isaret.number_format(abs($Z_in_sanal),4).'</b><br>';
    $Zin_reel=$Z_in_reel*$Z0; // Ohm
	$Zin_sanal=$Z_in_sanal*$Z0; // Ohm	
    $Zin_mutlak=$Z_in_mutlak*$Z0; // Ohm
	// Açı normalize olanda ve Ohm olanda aynı
	echo 'Ohm cinsinden ise <b>Z<sub>in</sub>(<i>l</i>) = ('.number_format($Zin_reel,4).$Gamma_sanal_isaret.number_format(abs($Zin_sanal),4).') &Omega;</b><br>';
    // Normalize giriş admitansı
    $Y_in_mutlak=1/$Z_in_mutlak; $Y_in_aci=-$Z_in_aci;
	$Y_in_reel=$Y_in_mutlak*cos(deg2rad($Y_in_aci));
	$Y_in_sanal=$Y_in_mutlak*sin(deg2rad($Y_in_aci));
	$Y_in_sanal_isaret=' + <b><i>j</i></b>';
	if ($Y_in_sanal<0) $Y_in_sanal_isaret=' &ndash; <b><i>j</i></b>';
    $Y0=1/$Z0;
    $Yin_mutlak=$Y_in_mutlak*$Y0;
	$Yin_reel=$Yin_mutlak*cos(deg2rad($Y_in_aci));
	$Yin_sanal=$Yin_mutlak*sin(deg2rad($Y_in_aci));
	echo 'Abakta Z&#772;<sub>in</sub>(<i>l</i>)\'nin 180 derece ötesinde istenen normalize admitans bulunur: <b>Y&#772;<sub>in</sub>(<i>l</i>) = '.number_format($Y_in_reel,4).$Y_in_sanal_isaret.number_format(abs($Y_in_sanal),4).'</b><br>';
	echo 'Veya Y&#772;<sub>in</sub>(<i>l</i>) = 1 / Z&#772;<sub>in</sub>(<i>l</i>) ile de bulunabilirdi.<br>';
	echo 'Karakteristik admitans Y<sub>0</sub> = '.number_format($Y0,4).' S<br>';
	echo 'Siemens cinsinden ise <b>Y<sub>in</sub>(<i>l</i>) = <b>(</b>'.number_format($Yin_reel,5).$Y_in_sanal_isaret.number_format(abs($Yin_sanal),5).'<b>)</b> S</b><br>';
	echo 'Hesapla bulunurken ise s bulunduktan sonra &Gamma;(<i>l</i>) = &rho;&angle;(&theta;<sub>L</sub>-720&deg;×'.number_format($yol,4).') = '.number_format($Gamma_reel,4).$Gamma_sanal_isaret.number_format(abs($Gamma_sanal),4).'<br>';
	echo 'bulunur ve sonra <br> Z&#772;<sub>in</sub>(<i>l</i>) = (1+&Gamma;(<i>l</i>)) / (1-&Gamma;(<i>l</i>)) <br> formülü kullanılır. Devamında yine yukarıdaki değerler bulunur.</p>';
   }
  ?>
 </body>
</html>