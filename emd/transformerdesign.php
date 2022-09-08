<html>
 <head>
  <title>TRANSFORMER DESIGN FOR SIMULATION PURPOSES</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <p>Last modified on <b>08.6.2019</b>.<br><font color="#FF0000"><b>TRANSFORMER DESIGN FOR SIMULATION PURPOSES</b> (Model parameters for each phase)</font></p>
  <p>This page serves a free online transformer design tool for simulation purposes according to the following equivalent circuit model for each phase:<br>
  <img src="Transformer_equivalent_circuit.png" alt="Transformer Model"></p>
  <p><b>If this service is helpful for your academic work, you can cite <a href="http://www.aece.ro/displaypdf.php?year=2019&number=2&article=4">this paper ( doi:10.4316/AECE.2019.02004)</a>, in which I have presented all the details.</b></p>
  <p><b>REQUIREMENTS</b><br>
  <form action="" method="post">
   Frequency f = <input type="text" name="f" size="6"/><font color="#990000">Hz</font>&nbsp; &nbsp;(e.g. 50<font color="#990000">Hz</font>)<br>
   Number of phase n<sub>ph</sub> = <select name="nph"><option value="1">1</option><option value="3">3</option></select><br>
   If 3-phase, primary side connection type = <select name="pri"><option value="D">&Delta;</option><option value="Y">Y</option></select> (ignored for 1-phase transformers)<br>
   If 3-phase, secondary side connection type = <select name="sec"><option value="D">&Delta;</option><option value="Y">Y</option></select> (ignored for 1-phase transformers)<br>
   Primary side rated line-line voltage = V<sub>LL1r</sub> = <input type="text" name="VLL1r" size="6"/><font color="#990000">V</font> (rms)&nbsp; &nbsp;(e.g. 230<font color="#990000">V</font>) (simply primary winding voltage for 1-phase transformers)<br>
   Secondary side rated line-line voltage = V<sub>LL2r</sub> = <input type="text" name="VLL2r" size="6"/><font color="#990000">V</font> (rms)&nbsp; &nbsp;(e.g. 110<font color="#990000">V</font>) (simply secondary winding voltage for 1-phase transformers)<br>
   Secondary side total rated (apparent) power = S<sub>T2r</sub> = <input type="text" name="ST2r" size="6"/><font color="#990000">VA</font>&nbsp; &nbsp;(e.g. 1250<font color="#990000">VA</font>)<br>
   Efficiency at rated resistive load = &eta; = <input type="text" name="eff" size="8"/>&nbsp; &nbsp;(e.g. 0.92)<br>
   Copper to total loss ratio at rated resistive load = (P<sub>Cu</sub>/P<sub>loss</sub>) = <input type="text" name="PCu_Ploss" size="8"/>&nbsp; &nbsp;(e.g. 0.55)<br>
   Secondary copper loss to total copper loss ratio at rated resistive load = (P<sub>Cu2</sub>/P<sub>Cu</sub>) = <input type="text" name="PCu2_PCu" size="8"/>&nbsp; &nbsp;(e.g. 0.4)<br>
   Leading angle of <span style="text-decoration:overline;">E</span><sub>2</sub> with respect to <span style="text-decoration:overline;">V</span><sub>2</sub> at rated resistive load = &alpha;<sub><font size="1">EV2</font></sub> = <input type="text" name="alphaEV2" size="8"/><font color="#990000">&#176;</font>&nbsp; &nbsp;(e.g. 5<font color="#990000">&#176;</font>. It is much closer to 0<font color="#990000">&#176;</font> usually; however, non-negligible angle difference may be desired for educational purposes.)<br>
   Coupling coefficient = k = <input type="text" name="k" size="8"/> (e.g. 0.98)<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you <b>also</b> want <font color="#FFFF00"><b>design for manufacturing purposes</b></font>, fill in the following with your requirements. If not, directly press "DESIGN" ignoring them.</br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iron sheets' &mu;<sub>r</sub> = <input type="text" name="mur" size="8"/>&nbsp; &nbsp;(e.g. 900)<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h<sup>2</sup> / A<sub>c</sub> = <input type="text" name="h2_Ac" size="8"/>&nbsp; &nbsp;(e.g. 133), where h is the average length of magnetix flux path for each phase, and A<sub>c</sub> is the average area of the core through that flux path <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maximum flux density of the iron sheets = B<sub>max</sub> = <input type="text" name="Bmax" size="8"/><font color="#990000">T</font>&nbsp; &nbsp;(e.g. 1.00<font color="#990000">T</font>. Note that 10000<font color="#990000">G</font> = 1<font color="#990000">T</font>)<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stack factor = <input type="text" name="stack" size="8"/>&nbsp; &nbsp;(e.g. 0.80)(rate of effective core area)<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wire resistivity = &rho; = <input type="text" name="rho" size="8"/><font color="#990000">&Omega;m</font>&nbsp; &nbsp;(e.g. &rho;<sub>Cu</sub> = 1.8<font size=2>&#10761;</font>10<sup>-8</sup><font color="#990000">&Omega;m</font>)</p>
  <p><input type="submit" name="Design" value="DESIGN"/></p>
  </form>
  <?php
    if (isset($_POST['Design'])) {
      $nph = $_POST['nph'];
      $f = $_POST['f'];
      $pri = $_POST['pri'];
      $sec = $_POST['sec'];
      $VLL1r = $_POST['VLL1r']; $k = $_POST['k'];
      $VLL2r = $_POST['VLL2r'];
      $ST2r = $_POST['ST2r'];
      $eff = $_POST['eff'];
      $PCu_Ploss = $_POST['PCu_Ploss'];
      $PCu2_PCu = $_POST['PCu2_PCu'];
      $alphaEV2 = $_POST['alphaEV2'];
      $k = $_POST['k'];
      $mur = $_POST['mur'];
      $h2_Ac = $_POST['h2_Ac'];
      $Bmax = $_POST['Bmax'];
      $stack = $_POST['stack'];
      $rho = $_POST['rho'];

      // Check for validity
      $mistake=0;
      echo '<font color="#FF0000"><b>'; // If there is a mistake, the message will be in red and bold.
      if (!is_numeric($f) || ($f<=0)) {echo 'f must be positive.<br>'; $mistake=1;}
      if (!is_numeric($VLL1r) || ($VLL1r<=0)) {echo 'V<sub>LL1r</sub> must be positive.<br>'; $mistake=1;}
      if (!is_numeric($VLL2r) || ($VLL2r<=0)) {echo 'V<sub>LL2r</sub> must be positive.<br>'; $mistake=1;}
      if (!is_numeric($ST2r) || ($ST2r<=0)) {echo 'S<sub>T2r</sub> must be positive.<br>'; $mistake=1;}
      if (!is_numeric($eff) || ($eff<=0) || ($eff>1)) {echo '&eta; must satisfy &nbsp;0 &lt; &eta; &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($PCu_Ploss) || ($PCu_Ploss<0) || ($PCu_Ploss>1)) {echo '(P<sub>Cu</sub>/P<sub>loss</sub>) must satisfy &nbsp;0 &le; (P<sub>Cu</sub>/P<sub>loss</sub>) &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($PCu2_PCu) || ($PCu2_PCu<0) || ($PCu2_PCu>1)) {echo '(P<sub>Cu2</sub>/P<sub>Cu</sub>) must satisfy &nbsp;0 &le; (P<sub>Cu2</sub>/P<sub>Cu</sub>) &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($alphaEV2) || ($alphaEV2<0) || ($alphaEV2>=90)) {echo '&alpha;<sub><font size="1">EV2</font></sub> must satisfy &nbsp;0 &le; &alpha;<sub><font size="1">EV2</font></sub> &lt; 90<font color="#990000">&#176;</font>.<br>'; $mistake=1;}
      if (!is_numeric($k) || ($k<=0) || ($k>1)) {echo 'k must satisfy &nbsp;0 &lt; k &le; 1.<br>'; $mistake=1;}

	  // Reduction of rated values to single phase values
	  if ($nph==1) {$V1r=$VLL1r; $V2r=$VLL2r; $S2r=$ST2r;}
	  else {
	    if ($pri=='D') $V1r=$VLL1r; else $V1r=$VLL1r/sqrt(3);
	    if ($sec=='D') $V2r=$VLL2r; else $V2r=$VLL2r/sqrt(3);
		$S2r=$ST2r/3; // $S2r is also equal to secondary active power at rated resistive load
	  }
	  $I2r=$S2r/$V2r; // Rated secondary current. Since resistive load is considered its angle is the same as $V2r's (assumed 0).
	  $w=2*3.14159265358979*$f;

	  // Equivalent circuit parameters for each phase, and operating values at rated resistive load
	  $P1=$S2r/$eff; // Primary active power
	  $Ploss=$P1-$S2r; // Iron and copper loss
	  $PCu=$PCu_Ploss*$Ploss; // Copper loss
	  $PCu2=$PCu2_PCu*$PCu; // Secondary winding's copper loss
	  $r2=$PCu2/($I2r*$I2r); // Secondary winding resistance
	  $PFe=$Ploss-$PCu; // Iron loss
	  $alphaEV2_radian=$alphaEV2*3.14159265358979/180;
	  $x2=tan($alphaEV2_radian)*($V2r/$I2r+$r2); // Secondary winding leakage reactance
	  $E2r=sqrt(pow($V2r+$r2*$I2r,2)+pow($x2*$I2r,2)); // Voltage at secondary side of the equivalent ideal transformer
	  $gcs=$PFe/($E2r*$E2r); // Conductivity corresponding to the iron loss referred to secondary
	  $Rcs=1/$gcs; // Resistance corresponding to the iron loss referred to secondary
	  $xms=$x2*$k/(1-$k); // Magnetizing reactance referred to secondary
	  $bms=1/$xms; // Magnetizing susceptance referred to secondary
	  // Parallel branch current referred to secondary
	  $I1os_real=$gcs*$E2r*cos($alphaEV2_radian)+$bms*$E2r*sin($alphaEV2_radian); // Parallel branch current real part referred to secondary
	  $I1os_imag=$gcs*$E2r*sin($alphaEV2_radian)-$bms*$E2r*cos($alphaEV2_radian); // Parallel branch current imaginary part referred to secondary
	  $I1s_real=$I2r+$I1os_real; // Primary current real part referred to secondary
	  $I1s_imag=0+$I1os_imag; // Primary current imaginary part referred to secondary
	  $angleI1=0; // Angle of primary current (or its referred one's) is calculated below
	  if ($I1s_real===0) $angleI1=90*gmp_sign($I1s_imag);
	  elseif ($I1s_real>0) $angleI1=atan($I1s_imag/$I1s_real)*180/3.14159265358979;
	  elseif ($I1s_real<0) $angleI1=180+atan($I1s_imag/$I1s_real)*180/3.14159265358979;
	  if ($angleI1>180) $angleI1=$angleI1-360;
	  $I1rs=sqrt(pow($I1s_real,2)+pow($I1s_imag,2)); // Primary current referred to secondary at rated load
	  $PCu1=$PCu-$PCu2; // Primary copper loss
	  $r1s=$PCu1/($I1rs*$I1rs); // Primary winding resistance referred to secondary
	  $x1s=$xms*(1-$k); // Primary winding leakage reactance referred to secondary
	  $V1s_real=$r1s*$I1s_real-$x1s*$I1s_imag+$E2r*cos($alphaEV2_radian);// Primary voltage real part referred to secondary
	  $V1s_imag=$r1s*$I1s_imag+$x1s*$I1s_real+$E2r*sin($alphaEV2_radian);// Primary voltage imaginary part referred to secondary
	  $angleV1=0; // Angle of primary voltage (or its referred one's) is calculated below
	  if ($V1s_real===0) $angleV1=90*gmp_sign($V1s_imag);
	  elseif ($V1s_real>0) $angleV1=atan($V1s_imag/$V1s_real)*180/3.14159265358979;
	  elseif ($V1s_real<0) $angleV1=180+atan($V1s_imag/$V1s_real)*180/3.14159265358979;
	  if ($angleV1>180) $angleV1=$angleV1-360;
	  $V1rs=sqrt(pow($V1s_real,2)+pow($V1s_imag,2)); // Primary rated voltage referred to secondary
	  $a=$V1r/$V1rs; // Primary to secondary turn ratio
	  $a2=$a*$a; // a squared
	  $r1=$a2*$r1s; $x1=$a2*$x1s; // Primary winding resistance and leakage reactance
	  $r2p=$a2*$r2; $x2p=$a2*$x2; // Secondary winding resistance and leakage reactance referred to primary
	  $gc=$gcs/$a2; $Rc=1/$gc; // Conductivity and resistance corresponding to the iron loss referred to primary
	  $bm=$bms/$a2; $xm=$a2*$xms; // Magnetizing susceptance and reactance referred to primary
	  $I1r=$I1rs/$a; // Primary current at rated load
	  $E1r=$a*$E2r; // Voltage at primary side of the equivalent ideal transformer
	  $L1l=$x1/$w; // Primary winding leakage inductance
	  $L2l=$x2/$w; // Secondary winding leakage inductance
	  $Lm=$xm/$w; // Magnetizing inductance
	  $M=$Lm/$a; // Mutual inductance
	  $L1=$Lm+$L1l; // Primary winding inductance (total)
	  $L2=$M/$a+$L2l; // Secondary winding inductance (total)
	  $sigma=1-($M*$M)/($L1*$L2); // Leakage coefficient

      if ($mistake) {echo '<br>DESIGN IS UNSUCCESSFUL FOR THE ABOVE REASON(S)</b></font>';}
      else {
        echo '</b></font>';
        // EQUIVALENT CIRCUIT PARAMETERS REFERRED TO PRIMARY:
        echo '<p><b>EQUIVALENT CIRCUIT PARAMETERS REFERRED TO PRIMARY:</b><br>';
		echo 'Primary to secondary turn ratio <b>a = N<sub>1</sub> / N<sub>2</sub> = '.$a.'</b><br>';
        echo 'Primary winding resistance <b>r<sub>1</sub> = '.$r1.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Primary winding reactance <b>x<sub>1</sub> = '.$x1.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Secondary winding resistance referred to primary <b>r<sub>2</sub>\' = '.$r2p.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Secondary winding reactance referred to primary <b>x<sub>2</sub>\' = '.$x2p.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Conductance corresponding to the iron loss <b>g<sub>c</sub> = '.$gc.'<font color="#990000">S</font></b><br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or resistance corresponding to the iron loss <b>R<sub>c</sub> = '.$Rc.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Magnetizing susceptance <b>b<sub>m</sub> = '.$bm.'<font color="#990000">S</font></b><br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or magnetizing reactance <b>x<sub>m</sub> = '.$xm.'<font color="#990000">&Omega;</font></b><br>';
		
		// INDUCTANCE VALUES
        echo '<p><b>INDUCTANCE VALUES:</b><br>';
        echo 'Leakage inductance of primary winding <b>L<sub>1<i>l</i></sub> = '.$L1l.'<font color="#990000">H</font></b><br>';
        echo 'Leakage inductance of secondary <b>L<sub>2<i>l</i></sub> = '.$L2l.'<font color="#990000">H</font></b><br>';
        echo 'Magnetizing inductance referred to primary <b>L<sub>m</sub> = '.$Lm.'<font color="#990000">H</font></b><br>';
        echo 'Mutual inductance between primary and secondary <b>M = '.$M.'<font color="#990000">H</font></b><br>';
        echo 'Inductance of primary winding <b>L<sub>1</sub> = '.$L1.'<font color="#990000">H</font></b><br>';
        echo 'Inductance of secondary winding <b>L<sub>2</sub> = '.$L2.'<font color="#990000">H</font></b><br>';
        echo '<br>';
		echo 'Leakage coefficient <b>&sigma; = '.$sigma.'</b><br>';

        // EQUIVALENT CIRCUIT PARAMETERS REFERRED TO SECONDARY:
        echo '<p><b>EQUIVALENT CIRCUIT PARAMETERS REFERRED TO SECONDARY:</b><br>';
        echo 'Primary winding resistance referred to secondary <b>r<sub>1</sub>\' = '.$r1s.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Primary winding reactance referred to secondary <b>x<sub>1</sub>\' = '.$x1s.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Secondary winding resistance <b>r<sub>2</sub> = '.$r2.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Secondary winding reactance <b>x<sub>2</sub> = '.$x2.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Conductance corresponding to the iron loss referred to secondary <b>g<sub>c</sub>\' = '.$gcs.'<font color="#990000">S</font></b><br>';
        echo '&nbsp;&nbsp;&nbsp;or resistance corresponding to the iron loss referred to secondary <b>R<sub>c</sub>\' = '.$Rcs.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Magnetizing susceptance referred to secondary <b>b<sub>m</sub>\' = '.$bms.'<font color="#990000">S</font></b><br>';
        echo '&nbsp;&nbsp;&nbsp;or magnetizing reactance referred to secondary <b>x<sub>m</sub>\' = '.$xms.'<font color="#990000">&Omega;</font></b><br>';

        // SOME OPERATING VALUES AT RATED RESISTIVE LOAD:
        echo '<p><b>SOME OPERATING VALUES AT RATED RESISTIVE LOAD:</b><br>';
        echo 'Secondary voltage per phase <b><span style="text-decoration:overline;">V</span><sub>2</sub> = '.$V2r.'<font color="#990000">V</font></b><br>';
        echo 'Secondary current per phase <b><span style="text-decoration:overline;">I</span><sub>2</sub> = '.$I2r.'<font color="#990000">A</font></b><br>';
        echo '<b><span style="text-decoration:overline;">E</span><sub>2</sub> = '.$E2r.'<font color="#990000">V</font>&#8736;'.$alphaEV2.'<font color="#990000">&#176;</font> = ('.($E2r*cos($alphaEV2_radian));
		if ($E2r*sin($alphaEV2_radian)<0) echo ' - '; else echo ' + ';
		echo '<i><font color="#0000FF">j</font></i>'.abs($E2r*sin($alphaEV2_radian)).')<font color="#990000">V</font></b><br>';
        echo '<b><span style="text-decoration:overline;">E</span><sub>1</sub> = '.$E1r.'<font color="#990000">V</font>&#8736;'.$alphaEV2.'<font color="#990000">&#176;</font> = ('.($E1r*cos($alphaEV2_radian));
		if ($E1r*sin($alphaEV2_radian)<0) echo ' - '; else echo ' + ';
		echo '<i><font color="#0000FF">j</font></i>'.abs($E1r*sin($alphaEV2_radian)).')<font color="#990000">V</font></b><br>';
        echo '<b><span style="text-decoration:overline;">I</span><sub>2</sub>\' = '.$I2r/$a.'<font color="#990000">A</font></b><br>';
        echo '<b><span style="text-decoration:overline;">I</span><sub>10</sub> = ('.($I1os_real/$a);
		if ($I1os_imag<0) echo ' - '; else echo ' + ';
		echo '<i><font color="#0000FF">j</font></i>'.abs($I1os_imag/$a).')<font color="#990000">A</font></b><br>';
        echo '<b><span style="text-decoration:overline;">I</span><sub>1</sub> ='.$I1r.'<font color="#990000">A</font>&#8736;'.$angleI1.'<font color="#990000">&#176;</font> = ('.($I1s_real/$a);
		if ($I1s_imag<0) echo ' - '; else echo ' + ';
		echo '<i><font color="#0000FF">j</font></i>'.abs($I1s_imag/$a).')<font color="#990000">A</font></b><br>';
        echo '<b><span style="text-decoration:overline;">V</span><sub>1</sub> ='.$V1r.'<font color="#990000">V</font>&#8736;'.$angleV1.'<font color="#990000">&#176;</font> = ('.($V1s_real*$a);
		if ($V1s_imag<0) echo ' - '; else echo ' + ';
		echo '<i><font color="#0000FF">j</font></i>'.abs($V1s_imag*$a).')<font color="#990000">V</font></b><br>';

	    // Check for validity of design for manufacturing purposes
        $mistake_phys=0;
        echo '<p><b><font color="#FFFF00">DESIGN PARAMETERS FOR MANUFACTURING PURPOSES:</font></b><br>';
        echo '<font color="#FFFF00"><b>'; // If there is a mistake, the message will be in yellow and bold.
        if (!is_numeric($mur) || ($mur<=0)) {echo '&mu;<sub>r</sub> must be positive.<br>'; $mistake_phys=1;}
        if (!is_numeric($h2_Ac) || ($h2_Ac<=0)) {echo 'h<sub>2</sub> / A<sub>c</sub> must be positive.<br>'; $mistake_phys=1;}
        if (!is_numeric($Bmax) || ($Bmax<=0)) {echo 'B<sub>max</sub> must be positive.<br>'; $mistake_phys=1;}
        if (!is_numeric($stack) || ($stack<=0) || ($stack>1)) {echo 'stack factor must be positive, and &le;1.<br>'; $mistake_phys=1;}
        if (!is_numeric($rho) || ($rho<=0)) {echo '&rho; must be positive.<br>'; $mistake_phys=1;}
		
		if ($mistake_phys) {echo '<br>DESIGN FOR MANUFACTURING PURPOSES IS UNSUCCESSFUL FOR THE ABOVE REASON(S)</b></font>';}
        else {
          echo '</b></font>';
          // DESIGN PARAMETERS FOR MANUFACTURING PURPOSES:
		  $mu=$mur*4e-7*3.14159265358979;
		  $N1=pow((sqrt(2)*3.14159265358979*$h2_Ac*$f*$stack*$Bmax*$L1*$L1)/($mu*$mu*$E1r),1/3);
		  $N2=$N1/$a;
		  $h=$L1*$h2_Ac/($mu*$N1*$N1); // average length of flux path for each phase
		  $Ac=$h*$h/$h2_Ac*1e4; // average core area through flux path (cm^2)
		  $lw1=4*$N1*($h/sqrt($h2_Ac)); // length of primary wire (m)
		  $Aw1=$rho*$lw1/$r1*1e6; // Primer wire cross sectional area (mm^2)
		  $lw2=4*$N2*($h/sqrt($h2_Ac)); // length of secondary wire (m)
		  $Aw2=$rho*$lw2/$r2*1e6; // Primer wire cross sectional area (mm^2)

		  echo 'Primary turn number <b>N<sub>1</sub> = '.$N1.'</b><br>';
		  echo 'Secondary turn number <b>N<sub>2</sub> = '.$N2.'</b><br>';
          echo 'Average length of flux path for each phase <b>h = '.$h.'<font color="#990000">m</font></b><br>';
          echo 'Average core area through the flux path for each phase <b>A<sub>c</sub> = '.$Ac.'<font color="#990000">cm<sup>2</sup></font></b><br>';
		  echo '<i>Assuming the iron core\'s cross-section is <u>square</u>:</i><br>';
		  echo 'Length of primary wire <b>l<sub>w1</sub> = '.$lw1.'<font color="#990000">m</font></b><br>';
		  echo 'Length of secondary wire <b>l<sub>w2</sub> = '.$lw2.'<font color="#990000">m</font></b><br>';
		  echo 'Primary wire cross sectional area <b>A<sub>w1</sub> = '.$Aw1.'<font color="#990000">mm<sup>2</sup></font></b><br>';
		  echo 'Secondary wire cross sectional area <b>A<sub>w2</sub> = '.$Aw2.'<font color="#990000">mm<sup>2</sup></font></b><br>';
		  echo '<br><font color="FFFF00">Please note that</font> this kind of designs can be different from usual manufacturing designs. For example, in usual transformer designs, the cross sectional area of the wire is selected as proportional to their rated current; however, this design tool may give much different results from them because efficiency and what portion of the loss should be from which part are also our design criteria. You cannot satisfy these criteria fixing the current density to the same A/mm<sup>2</sup> value.<br><br><font color="FFFF00">Also note that</font> the design parameters given here for manufacturing purposes are not precise since the coupling coefficient is assumed to be true and some length and area errors due to bending and isolations are ignored. In addition, conductance corresponding to the iron loss <b>g<sub>c</sub></b> depends on the thickness and quality of the lamination steels, which are not taken into account here. However, the rough calculations given in the last section of this page give a fairly close opinion for the physical design parameters for manufacturing purposes. On the other side, the electrical parameters for simulation purposes are <u><b>exact</b></u> according to the assumed model.</p>';
		}
      }
    }
  ?>
<br><br><br><br><br>
<font color="#33CCFF" size=1>
Online transformer design for simulation purposes<br>
Online transformer parameters for simulation purposes<br>
Online transformer parameters according to desired operating values<br>
Free online transformer design software<br>
Online trafo tasarımı<br>
Ücretsiz online trafo tasarım programı<br>
Simülasyon amaçlı online trafo tasarımı<br>
Simülasyon amaçlı online trafo parametreleri üretmek<br>
İstenen çalışma değerlerine göre trafo parametreleri<br>
</font>

 </body>
</html>