<html>
 <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
  <script type"text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 </head>
 <body>
  <h3>İKİ BİLİNMEYENLİ DENKLEM ÇİFTİ</h3>
<?php
 $xyaz='<i><b>x</b></i>';
 $yyaz='<i><b>y</b></i>';
 // 1'den 9'a random katsayılar + ya da - olacak.
 // $d... değişkeni 0 ise bilinen, 1 ise x, 2 ise y değişkeni
 // sol ve sağ için dörder terim üretilecek.
 $det=0;
 while ($det==0) { // determinant 0 ise yeni denklemler kurulur.
  $dnk1sol1=rand(1,9); $sign1L1=2*rand(0,1)-1; $d1sol1=rand(0,2);
  $dnk1sol2=rand(1,9); $sign1L2=2*rand(0,1)-1; $d1sol2=rand(0,2);
  $dnk1sol3=rand(1,9); $sign1L3=2*rand(0,1)-1; $d1sol3=rand(0,2);
  $dnk1sol4=rand(1,9); $sign1L4=2*rand(0,1)-1; $d1sol4=rand(0,2);
  $dnk1sag1=rand(1,9); $sign1R1=2*rand(0,1)-1; $d1sag1=rand(0,2);
  $dnk1sag2=rand(1,9); $sign1R2=2*rand(0,1)-1; $d1sag2=rand(0,2);
  $dnk1sag3=rand(1,9); $sign1R3=2*rand(0,1)-1; $d1sag3=rand(0,2);
  $dnk1sag4=rand(1,9); $sign1R4=2*rand(0,1)-1; $d1sag4=rand(0,2);
  $dnk2sol1=rand(1,9); $sign2L1=2*rand(0,1)-1; $d2sol1=rand(0,2);
  $dnk2sol2=rand(1,9); $sign2L2=2*rand(0,1)-1; $d2sol2=rand(0,2);
  $dnk2sol3=rand(1,9); $sign2L3=2*rand(0,1)-1; $d2sol3=rand(0,2);
  $dnk2sol4=rand(1,9); $sign2L4=2*rand(0,1)-1; $d2sol4=rand(0,2);
  $dnk2sag1=rand(1,9); $sign2R1=2*rand(0,1)-1; $d2sag1=rand(0,2);
  $dnk2sag2=rand(1,9); $sign2R2=2*rand(0,1)-1; $d2sag2=rand(0,2);
  $dnk2sag3=rand(1,9); $sign2R3=2*rand(0,1)-1; $d2sag3=rand(0,2);
  $dnk2sag4=rand(1,9); $sign2R4=2*rand(0,1)-1; $d2sag4=rand(0,2);
  $k11=0; $k12=0; $c1=0; $denklem1='&nbsp;&nbsp;';
  $k21=0; $k22=0; $c2=0; $denklem2='&nbsp;&nbsp;';
  // Terimleri yazıya dökerken matematiğini de kaydedelim
  // Yani k11*x + k12*y = c1
  //      k21*x + k22*y = c2 halini anlayıp kaydedelim.
  // 1.DENKLEM
  // Soldan 1. terim
  if ($sign1L1==-1) $denklem1.='&minus;';
  if (($dnk1sol1!=1)|($d1sol1==0)) $denklem1.=$dnk1sol1;
  $dnk1sol1*=$sign1L1;  
  switch ($d1sol1) {
   case 0: $c1-=$dnk1sol1; $denklem1.=' '; break;
   case 1: $k11+=$dnk1sol1;	$denklem1.=$xyaz.' '; break;
   case 2: $k12+=$dnk1sol1;	$denklem1.=$yyaz.' '; break;
  }
  // Soldan 2. terim.
  if ($sign1L2==-1) $denklem1.='&minus; '; else $denklem1.='+ ';
  if (($dnk1sol2!=1) | ($d1sol2==0)) $denklem1.=$dnk1sol2;
  $dnk1sol2*=$sign1L2;
  switch ($d1sol2) {
   case 0: $c1-=$dnk1sol2; $denklem1.=' '; break;
   case 1: $k11+=$dnk1sol2;	$denklem1.=$xyaz.' ';	break;
   case 2: $k12+=$dnk1sol2;	$denklem1.=$yyaz.' ';	break;
  }
  // Soldan 3. terim.
  if ($sign1L3==-1) $denklem1.='&minus; '; else $denklem1.='+ ';
  if (($dnk1sol3!=1) | ($d1sol3==0)) $denklem1.=$dnk1sol3;
  $dnk1sol3*=$sign1L3;
  switch ($d1sol3) {
   case 0: $c1-=$dnk1sol3; $denklem1.=' '; break;
   case 1: $k11+=$dnk1sol3;	$denklem1.=$xyaz.' ';	break;
   case 2: $k12+=$dnk1sol3;	$denklem1.=$yyaz.' ';	break;
  }
  // Soldan 4. terim.
  if ($sign1L4==-1) $denklem1.='&minus; '; else $denklem1.='+ ';
  if (($dnk1sol4!=1) | ($d1sol4==0)) $denklem1.=$dnk1sol4;
  $dnk1sol4*=$sign1L4;
  switch ($d1sol4) {
   case 0: $c1-=$dnk1sol4; $denklem1.=' '; break;
   case 1: $k11+=$dnk1sol4;	$denklem1.=$xyaz.' ';	break;
   case 2: $k12+=$dnk1sol4;	$denklem1.=$yyaz.' ';	break;
  }
  $denklem1.='<b>=</b> ';
  // Sagdan 1. terim
  if ($sign1R1==-1) $denklem1.='&minus;';
  if (($dnk1sag1!=1)|($d1sag1==0)) $denklem1.=$dnk1sag1;
  $dnk1sag1*=$sign1R1;  
  switch ($d1sag1) {
   case 0: $c1+=$dnk1sag1; $denklem1.=' '; break;
   case 1: $k11-=$dnk1sag1;	$denklem1.=$xyaz.' '; break;
   case 2: $k12-=$dnk1sag1;	$denklem1.=$yyaz.' '; break;
  }
  // Sagdan 2. terim.
  if ($sign1R2==-1) $denklem1.='&minus; '; else $denklem1.='+ ';
  if (($dnk1sag2!=1) | ($d1sag2==0)) $denklem1.=$dnk1sag2;
  $dnk1sag2*=$sign1R2;
  switch ($d1sag2) {
   case 0: $c1+=$dnk1sag2; $denklem1.=' '; break;
   case 1: $k11-=$dnk1sag2;	$denklem1.=$xyaz.' ';	break;
   case 2: $k12-=$dnk1sag2;	$denklem1.=$yyaz.' ';	break;
  }
  // Sagdan 3. terim.
  if ($sign1R3==-1) $denklem1.='&minus; '; else $denklem1.='+ ';
  if (($dnk1sag3!=1) | ($d1sag3==0)) $denklem1.=$dnk1sag3;
  $dnk1sag3*=$sign1R3;
  switch ($d1sag3) {
   case 0: $c1+=$dnk1sag3; $denklem1.=' '; break;
   case 1: $k11-=$dnk1sag3;	$denklem1.=$xyaz.' ';	break;
   case 2: $k12-=$dnk1sag3;	$denklem1.=$yyaz.' ';	break;
  }
  // Sagdan 4. terim.
  if ($sign1R4==-1) $denklem1.='&minus; '; else $denklem1.='+ ';
  if (($dnk1sag4!=1) | ($d1sag4==0)) $denklem1.=$dnk1sag4;
  $dnk1sag4*=$sign1R4;
  switch ($d1sag4) {
   case 0: $c1+=$dnk1sag4; $denklem1.=' '; break;
   case 1: $k11-=$dnk1sag4;	$denklem1.=$xyaz.' ';	break;
   case 2: $k12-=$dnk1sag4;	$denklem1.=$yyaz.' ';	break;
  }
  // 2.DENKLEM
  // Soldan 1. terim
  if ($sign2L1==-1) $denklem2.='&minus;';
  if (($dnk2sol1!=1)|($d2sol1==0)) $denklem2.=$dnk2sol1;
  $dnk2sol1*=$sign2L1;  
  switch ($d2sol1) {
   case 0: $c2-=$dnk2sol1; $denklem2.=' '; break;
   case 1: $k21+=$dnk2sol1;	$denklem2.=$xyaz.' '; break;
   case 2: $k22+=$dnk2sol1;	$denklem2.=$yyaz.' '; break;
  }
  // Soldan 2. terim.
  if ($sign2L2==-1) $denklem2.='&minus; '; else $denklem2.='+ ';
  if (($dnk2sol2!=1) | ($d2sol2==0)) $denklem2.=$dnk2sol2;
  $dnk2sol2*=$sign2L2;
  switch ($d2sol2) {
   case 0: $c2-=$dnk2sol2; $denklem2.=' '; break;
   case 1: $k21+=$dnk2sol2;	$denklem2.=$xyaz.' ';	break;
   case 2: $k22+=$dnk2sol2;	$denklem2.=$yyaz.' ';	break;
  }
  // Soldan 3. terim.
  if ($sign2L3==-1) $denklem2.='&minus; '; else $denklem2.='+ ';
  if (($dnk2sol3!=1) | ($d2sol3==0)) $denklem2.=$dnk2sol3;
  $dnk2sol3*=$sign2L3;
  switch ($d2sol3) {
   case 0: $c2-=$dnk2sol3; $denklem2.=' '; break;
   case 1: $k21+=$dnk2sol3;	$denklem2.=$xyaz.' ';	break;
   case 2: $k22+=$dnk2sol3;	$denklem2.=$yyaz.' ';	break;
  }
  // Soldan 4. terim.
  if ($sign2L4==-1) $denklem2.='&minus; '; else $denklem2.='+ ';
  if (($dnk2sol4!=1) | ($d2sol4==0)) $denklem2.=$dnk2sol4;
  $dnk2sol4*=$sign2L4;
  switch ($d2sol4) {
   case 0: $c2-=$dnk2sol4; $denklem2.=' '; break;
   case 1: $k21+=$dnk2sol4;	$denklem2.=$xyaz.' ';	break;
   case 2: $k22+=$dnk2sol4;	$denklem2.=$yyaz.' ';	break;
  }
  $denklem2.='<b>=</b> ';
  // Sagdan 1. terim
  if ($sign2R1==-1) $denklem2.='&minus;';
  if (($dnk2sag1!=1)|($d2sag1==0)) $denklem2.=$dnk2sag1;
  $dnk2sag1*=$sign2R1;  
  switch ($d2sag1) {
   case 0: $c2+=$dnk2sag1; $denklem2.=' '; break;
   case 1: $k21-=$dnk2sag1;	$denklem2.=$xyaz.' '; break;
   case 2: $k22-=$dnk2sag1;	$denklem2.=$yyaz.' '; break;
  }
  // Sagdan 2. terim.
  if ($sign2R2==-1) $denklem2.='&minus; '; else $denklem2.='+ ';
  if (($dnk2sag2!=1) | ($d2sag2==0)) $denklem2.=$dnk2sag2;
  $dnk2sag2*=$sign2R2;
  switch ($d2sag2) {
   case 0: $c2+=$dnk2sag2; $denklem2.=' '; break;
   case 1: $k21-=$dnk2sag2;	$denklem2.=$xyaz.' ';	break;
   case 2: $k22-=$dnk2sag2;	$denklem2.=$yyaz.' ';	break;
  }
  // Sagdan 3. terim.
  if ($sign2R3==-1) $denklem2.='&minus; '; else $denklem2.='+ ';
  if (($dnk2sag3!=1) | ($d2sag3==0)) $denklem2.=$dnk2sag3;
  $dnk2sag3*=$sign2R3;
  switch ($d2sag3) {
   case 0: $c2+=$dnk2sag3; $denklem2.=' '; break;
   case 1: $k21-=$dnk2sag3;	$denklem2.=$xyaz.' ';	break;
   case 2: $k22-=$dnk2sag3;	$denklem2.=$yyaz.' ';	break;
  }
  // Sagdan 4. terim.
  if ($sign2R4==-1) $denklem2.='&minus; '; else $denklem2.='+ ';
  if (($dnk2sag4!=1) | ($d2sag4==0)) $denklem2.=$dnk2sag4;
  $dnk2sag4*=$sign2R4;
  switch ($d2sag4) {
   case 0: $c2+=$dnk2sag4; $denklem2.=' '; break;
   case 1: $k21-=$dnk2sag4;	$denklem2.=$xyaz.' ';	break;
   case 2: $k22-=$dnk2sag4;	$denklem2.=$yyaz.' ';	break;
  }
  $det=$k11*$k22-$k12*$k21;
  $x=($k22*$c1-$k12*$c2)/$det;
  $y=(-$k21*$c1+$k11*$c2)/$det;
 } 
 echo '<font color="blue">D<sub>1</sub>:</font> &nbsp;<font size="4">'.$denklem1.'</font><br>';
 echo '<font color="blue">D<sub>2</sub>:</font> &nbsp;<font size="4">'.$denklem2.'</font></p>';
?>
  <p>Düzenlenmiş katsayıları sırasıyla kutulara yazınız. Tutarlı olmak şartıyla doğru cevap farklı sayılarla da yazılabilir, hatta +-*/ işlemleriyle bile yazılabilir.</p>
  <p><font color="blue">D<sub>1</sub>:</font>&nbsp;&nbsp;&nbsp;<input type="text" id="k_11" style="width:30px; height:20px; text-align:right" onKeyUp="dogrumu1()"><font color="red"><i><b> x</b></i></font> + <input type="text" id="k_12" style="width:30px; height:20px; text-align:right"  onKeyUp="dogrumu1()"><font color="red"><i><b> y</b></i></font> = <input type="text" id="c_1" style="width:30px; height:20px; text-align:right"  onKeyUp="dogrumu1()"><span id="dn1dogruluk"></span>&nbsp;<span id="sabitD1"></span></p>

  <p><font color="blue">D<sub>2</sub>:</font>&nbsp;&nbsp;&nbsp;<input type="text" id="k_21" style="width:30px; height:20px; text-align:right" onKeyUp="dogrumu2()"><font color="red"><i><b> x</b></i></font> + <input type="text" id="k_22" style="width:30px; height:20px; text-align:right"  onKeyUp="dogrumu2()"><font color="red"><i><b> y</b></i></font> = <input type="text" id="c_2" style="width:30px; height:20px; text-align:right"  onKeyUp="dogrumu2()"><span id="dn2dogruluk"></span>&nbsp;<span id="sabitD2"></span></p>
  
  <p>Sonra bu denklemleri uygun sayılarla çarpıp toplayıp(veya çıkartıp) yalnız <font color="red"><i><b> x</b></i></font> ya da yalnız <font color="red"><i><b> y</b></i></font> cinsinden bir denklem bulun ve onu çözün. Çarpılmış denklemleri de yukarıda düzenleyin. Bu sırada denklemin bir önceki halini unutabileceğiniz için "Bunu yaz kenara" düğmesine basmanız tavsiye edilir ki bu işlemli yazılan katsayıları değere de çevirir(tekrar basılmadıkça bu yazılan değişmez).<br>Bulmak istediğiniz ilk bilinmeyeni seçin: <select id="x_mi_y_mi" onChange="fadim2denklem()"><option selected></option><option>x</option><option>y</option></select><br>
  <p id="adim2"></p>
  <p><span id="adim2denklem"></span><span id="adim2dogruluk"></span><span id="adim2cozum"></span><span id="bilinmeyen1cozum"></span></p>
  <p><span id="adim3denklem"></span><span id="adim3dogruluk"></span>
	 <span id="bilinmeyen2"></span><span id="bilinmeyen2dogruluk1"></span>
  </p>
<?php
 echo '<br><br><font color="white">';
 echo 'k11='.$k11.'; k12='.$k12.'; c1='.$c1.'<br><br>';
 echo 'k21='.$k21.'; k22='.$k22.'; c2='.$c2.'<br>';
 echo 'determinant = '.$det.'</font>';
?>
  </font>
  <script type="text/javascript">
   D1adim1=0; D2adim1=0;
   Dadim2=0; adim2coz=0;
   adim3coz=0;
   k_11='bos'; k_12='bos'; k_21='bos'; k_22='bos'; c_1='bos'; c_2='bos';
   k11='<?php echo $k11; ?>'; k12='<?php echo $k12; ?>'; c1='<?php echo $c1; ?>';
   k21='<?php echo $k21; ?>'; k22='<?php echo $k22; ?>'; c2='<?php echo $c2; ?>';
   x='<?php echo $x; ?>'; y='<?php echo $y; ?>';
   function dogrumu1() {
    hata=0; D1adim1=0;
    try {k_11=eval(document.getElementById("k_11").value);} catch(err){hata=1; k_11='bos';}
    try {k_12=eval(document.getElementById("k_12").value);} catch(err){hata=1; k_12='bos';}
    try {c_1=eval(document.getElementById("c_1").value);} catch(err){hata=1; c_1='bos';}
    if (isNaN(k_11)|isNaN(k_12)|isNaN(c_1)) document.getElementById('dn1dogruluk').innerHTML = '<font color="blue"><b> &nbsp;&#x1F914 Henüz tüm katsayılar geçerli değil.</b></font>';
    else if (k_11!=0) {
	 oran=k11/k_11;
	 if ((Math.abs(oran*k_12-k12)<1e-8)&(Math.abs(oran*c_1-c1)<1e-8)) {
	  document.getElementById('dn1dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font><button onclick="sabitleD1()">Bunu yaz kenara</button>';
	  D1adim1=1;
	 }
	 else {
	  document.getElementById('dn1dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	 }
    }
    else if (k_12!=0) {
	 oran=k12/k_12;
	 if ((Math.abs(oran*k_11-k11)<1e-8)&(Math.abs(oran*c_1-c1)<1e-8)) {
	  document.getElementById('dn1dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F </b></font><button onclick="sabitleD1()">Bunu yaz kenara</button>';
	  D1adim1=1;
	 }
	 else {
	  document.getElementById('dn1dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	 }
    }
    else if (c_1!=0) {
	 oran=c1/c_1;
	 if ((Math.abs(oran*k_11-k11)<1e-8)&(Math.abs(oran*k_12==k12)<1e-8)) {
	  document.getElementById('dn1dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font><button onclick="sabitleD1()">Bunu yaz kenara</button>';
	  D1adim1=1;
	 }
	 else {
	  document.getElementById('dn1dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	 }
    }
    else {
	 document.getElementById('dn1dogruluk').innerHTML = '<font color="orange"><b> &#x1F61C FAYDASIZ KATSAYILAR</b></font>';
    }
    if ((D1adim1==1)&(D2adim1==1)) fadim2denklem();
   }

   function dogrumu2() {
    hata=0; D2adim1=0;
    try {k_21=eval(document.getElementById("k_21").value);} catch(err){hata=1; k_21='bos';}
    try {k_22=eval(document.getElementById("k_22").value);} catch(err){hata=1; k_22='bos';}
    try {c_2=eval(document.getElementById("c_2").value);} catch(err){hata=1; c_2='bos';}
    if (isNaN(k_21)|isNaN(k_22)|isNaN(c_2)) document.getElementById('dn2dogruluk').innerHTML = '<font color="blue"><b> &nbsp;&#x1F914 Henüz tüm katsayılar geçerli değil.</b></font>';
    else if (k_21!=0) {
	 oran=k21/k_21;
	 if ((Math.abs(oran*k_22-k22)<1e-8)&(Math.abs(oran*c_2-c2)<1e-8)) {
	  document.getElementById('dn2dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font><button onclick="sabitleD2()">Bunu yaz kenara</button>';
	  D2adim1=1;
	 }
	 else {
	  document.getElementById('dn2dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	 }
    }
    else if (k_22!=0) {
	 oran=k22/k_22;
	 if ((Math.abs(oran*k_21-k21)<1e-8)&(Math.abs(oran*c_2-c2)<1e-8)) {
	  document.getElementById('dn2dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font><button onclick="sabitleD2()">Bunu yaz kenara</button>';
	  D2adim1=1;
	 }
	 else {
	  document.getElementById('dn2dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	 }
    }
    else if (c_2!=0) {
	 oran=c2/c_2;
	 if ((Math.abs(oran*k_21-k21)<1e-8)&(Math.abs(oran*k_22-k22)<1e-8)) {
	  document.getElementById('dn2dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font><button onclick="sabitleD2()">Bunu yaz kenara</button>';
	  D2adim1=1;
	 }
	 else {
	  document.getElementById('dn2dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	 }
    }
    else {
	 document.getElementById('dn2dogruluk').innerHTML = '<font color="orange"><b> &#x1F61C FAYDASIZ KATSAYILAR</b></font>';
    }
    if ((D1adim1==1)&(D2adim1==1)) fadim2denklem();
   }

   function sabitleD1() {
    if (k_11<0) {
	 metin='&minus;'; if ((-k_11)!=1) metin+=(-k_11);
     metin+='<i><b>x</b></i>';
    }
    else if (k_11>0) {
	 metin=' '; if (k_11!=1) metin+=k_11;
     metin+='<i><b>x</b></i>';
    }
    else metin=' ';
    if (k_12<0) {
	 metin+=' &minus; '; if ((-k_12)!=1) metin+=(-k_12);
	 metin+='<i><b>y</b></i> = ';
    }
    else if (k_12>0) {
	 metin+=' + '; if (k_12!=1) metin+=k_12;
     metin+='<i><b>y</b></i> = ';
    }
    else metin+=' = ';
    if (c_1<0) metin+=' &minus;'+(-c_1); else metin+=' '+c_1;
    document.getElementById('sabitD1').innerHTML =metin;
   }

   function sabitleD2() {
    if (k_21<0) {
	 metin='&minus;'; if ((-k_21)!=1) metin+=(-k_21);
     metin+='<i><b>x</b></i>';
    }
    else if (k_21>0) {
	 metin=' '; if (k_21!=1) metin+=k_21;
     metin+='<i><b>x</b></i>';
    }
    else metin=' ';
    if (k_22<0) {
	 metin+=' &minus; '; if ((-k_22)!=1) metin+=(-k_22);
	 metin+='<i><b>y</b></i> = ';
    }
    else if (k_22>0) {
	 metin+=' + '; if (k_22!=1) metin+=k_22;
     metin+='<i><b>y</b></i> = ';
    }
    else metin+=' = ';
    if (c_2<0) metin+=' &minus;'+(-c_2); else metin+=' '+c_2;
    document.getElementById('sabitD2').innerHTML =metin;
   }

   function fadim2denklem() {
	Dadim2=0;
    if (document.getElementById('x_mi_y_mi').selectedIndex==0) metin="Bilinmeyenlerden birini yok ettikten sonra hangi çözülecek ilk bilinmeyeni yukarıdan şimdi seçmelisiniz.";
    else {
	 metin='<input type="text" id="ka2" style="width:30px; height:20px; text-align:right" onKeyUp="dogrumuadim2()"><font color="red"><i><b>';
     if (document.getElementById('x_mi_y_mi').selectedIndex==1) metin+=' x'; else metin+=' y';
     metin+='</b></i></font> = <input type="text" id="ca2" style="width:30px; height:20px; text-align:right" onKeyUp="dogrumuadim2()">';
    }
    document.getElementById('adim2denklem').innerHTML = metin;
   }

   function dogrumuadim2() {
    hata=0; Dadim2=0; document.getElementById('adim2cozum').innerHTML = ' ';
    try {ka2=eval(document.getElementById("ka2").value);} catch(err){hata=1; ka2='bos';}
    try {ca2=eval(document.getElementById("ca2").value);} catch(err){hata=1; ca2='bos';}
    if (isNaN(ka2)|isNaN(ca2)) document.getElementById('adim2dogruluk').innerHTML = '<font color="blue"><b> &nbsp;&#x1F914 Henüz tüm sayılar geçerli değil.</b></font>';
    else if (ka2!=0) {
	 if (document.getElementById('x_mi_y_mi').selectedIndex==1) bilinmeyen1=x; else bilinmeyen1=y;
	 if (Math.abs(ka2*bilinmeyen1-ca2)<1e-8) {
	  document.getElementById('adim2dogruluk').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font>&nbsp;&nbsp;';
	  Dadim2=1;
	 }
	 else {
	  document.getElementById('adim2dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	  Dadim2=0;
	 }
    }
    else {
	 document.getElementById('adim2dogruluk').innerHTML = '<font color="orange"><b> &#x1F61C FAYDASIZ KATSAYILAR</b></font>';
	 Dadim2=0;
    }
    if (Dadim2==1) fadim2cozum(); else document.getElementById('adim2cozum').innerHTML = ' '
   }

   function fadim2cozum() {
    if (document.getElementById('x_mi_y_mi').selectedIndex==1) {
	 metin='&nbsp;&nbsp;&nbsp; &#x2192 &nbsp;&nbsp;&nbsp;<font color="red"><b><i>x</i></b></font> = <input type="text" id="ka2c" style="width:150px; height:20px; text-align:left" onKeyUp="dogrumubilinmeyen1()">';
	 document.getElementById('adim2cozum').innerHTML = metin;
    }
    else {
	 metin='&nbsp;&nbsp;&nbsp; &#x2192 &nbsp;&nbsp;&nbsp;<font color="red"><b><i>y</i></b></font> = <input type="text" id="ka2c" style="width:150px; height:20px; text-align:left" onKeyUp="dogrumubilinmeyen1()">';
	 document.getElementById('adim2cozum').innerHTML = metin;
    }
	 document.getElementById('bilinmeyen1cozum').innerHTML = ' çözüp kutuya yazınız.';
   }

   function dogrumubilinmeyen1() {
    hata=0; adim2coz=0;
    try {ka2c=eval(document.getElementById("ka2c").value);} catch(err){hata=1; ka2c='bos';}
    if (isNaN(ka2c)==1) document.getElementById('bilinmeyen1cozum').innerHTML = '<font color="blue"><b> &nbsp;&#x1F914 Henüz tüm sayılar geçerli değil.</b></font>';
    else if (document.getElementById('x_mi_y_mi').selectedIndex==1) {
	 if (Math.abs(x-ka2c)<1e-8) {
	  document.getElementById('bilinmeyen1cozum').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font> '+'&nbsp;&nbsp;<table border="1"><font color="purple"><b><i>x</i> = '+x+'</b></font><table><br>';
	  adim2coz=1;
     }
     else {
	  document.getElementById('bilinmeyen1cozum').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	  adim2coz=0;
     }
	}
	else {
	 if (Math.abs(y-ka2c)<1e-8) {
	  document.getElementById('bilinmeyen1cozum').innerHTML = '<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font> '+'&nbsp;&nbsp;<table border="1"><font color="purple"><b><i>y</i> = '+y+'</b></font></table><br>';
	  adim2coz=1;
     }
     else {
	  document.getElementById('bilinmeyen1cozum').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	  adim2coz=0;
     }
	}
    if (adim2coz==1) fadim3();
   }

   function fadim3() {
	metin=' Bulunan bu değeri denklemlerden birinde yerine koyup aşağıya yazınız. +-*/ ve parantezler kullanabilirsiniz. Doğruysa sizin için otomatik düzenlenecektir.<br>';
	if (document.getElementById('x_mi_y_mi').selectedIndex==1) {
	 metin+='&nbsp;&nbsp;<input type="text" id="ka3c" style="width:150px; height:20px; text-align:right" onKeyUp="dogrumuadim3()">';
	 metin+=' <font color="red"><b><i>y</i></b></font> = <input type="text" id="ka3cc" style="width:150px; height:20px; text-align:left" onKeyUp="dogrumuadim3()">';
	}
	else {
	 metin+='&nbsp;&nbsp;<input type="text" id="ka3c" style="width:150px; height:20px; text-align:right" onKeyUp="dogrumuadim3()">';
	 metin+=' <font color="red"><b><i>x</i></b></font> = <input type="text" id="ka3cc" style="width:150px; height:20px; text-align:left" onKeyUp="dogrumuadim3()">';
	}
	document.getElementById('adim3denklem').innerHTML = metin;
   }
   
   function dogrumuadim3() {
    hata=0; adim3coz=0;
    try {ka3c=eval(document.getElementById("ka3c").value);} catch(err){hata=1; ka3c='bos';}
    try {ka3cc=eval(document.getElementById("ka3cc").value);} catch(err){hata=1; ka3cc='bos';}
	if ((isNaN(ka3c)==1)|(isNaN(ka3cc)==1)) document.getElementById('adim3dogruluk').innerHTML = '<font color="blue"><b> &nbsp;&#x1F914 Henüz tüm kutuların içeriği geçerli değil.</b></font>';
    else if (ka3c!=0) {
	 if (document.getElementById('x_mi_y_mi').selectedIndex==1) {
	  if (Math.abs(ka3c*y-ka3cc)<1e-8) {
	   metin='<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font>&nbsp;&nbsp;'
	   if (Math.abs(ka3c-1)<1e-8) {
		metin+='<table border="1"><font color="red"><b><i>y</i> = '+ka3cc+'</b></font></table>';
		tamcozum=1;
	   }
	   else {
		metin+=ka3c+'<b><i>y</i> = '+ka3cc+'</b>';
	    adim3coz=1; tamcozum=0;
	   }
	  }
	  else {
	   document.getElementById('adim3dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	   adim3coz=0; tamcozum=0;
	  }
	 }
	 else {
	  if (Math.abs(ka3c*x-ka3cc)<1e-8) {
	   metin='<font color="green"><b> &#x1F604 &nbsp;DOĞRU &#x1F44F</b></font>&nbsp;&nbsp;'
	   if (Math.abs(ka3c-1)<1e-8) {
		metin+='<table border="1"><font color="red"><b><i>x</i> = '+ka3cc+'</b></font></table>';
		tamcozum=1;
	   }
	   else {
		metin+=ka3c+'<b><i>y</i> = '+ka3cc+'</b>';
	    adim3coz=1; tamcozum=0;
	   }
	  }
	  else {
	   document.getElementById('adim3dogruluk').innerHTML = '<font color="red"><b> &nbsp;&#x1F641 YANLIŞ </b></font>';
	   adim3coz=0; tamcozum=0;
	  }
	 }
	}
   }
  </script>
 </body>
</html>
