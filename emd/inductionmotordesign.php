<html>
 <head>
  <title>INDUCTION MOTOR DESIGN FOR SIMULATION PURPOSES</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <p>Last modified on 08.6.2019.<br><font color="#FF0000"><b>INDUCTION MOTOR DESIGN FOR SIMULATION PURPOSES</b> (3-phase)</font></p>
  <p>This page serves a free online induction motor design tool for simulation purposes according to the following model:<br>
  <img src="inductionmotormodel.png" alt=" Induction Motor Model"></p>
  <p><b>If this service is helpful for your academic work, you can cite <a href="http://www.aece.ro/displaypdf.php?year=2019&number=2&article=4">this paper ( doi:10.4316/AECE.2019.02004)</a>, in which I have presented all the details.</b></p>
  <p><b>REQUIREMENTS</b><br>
  <form action="" method="post">
   Single phase stator rms voltage = V<sub>s1</sub><sup>rms</sup> = <input type="text" name="Vs1rms" size="6"/><font color="#990000">V</font>&nbsp; &nbsp;(e.g. 220<font color="#990000">V</font>)<br>
   Speed = n<sub>r</sub> = <input type="text" name="rpm" size="6"/><font color="#990000">rpm</font>&nbsp; &nbsp;(e.g. 1400<font color="#990000">rpm</font>)<br>
   <fieldset><legend>You must assign just two of the following three</legend>
    &nbsp; &nbsp; Stator input power = P<sub>i</sub> = <input type="text" name="Pi" size="8"/><font color="#990000">W</font><br>
    &nbsp; &nbsp; Shaft output power = P<sub>o</sub> = <input type="text" name="Po" size="8"/><font color="#990000">W</font>&nbsp; &nbsp;(e.g. 4000W)<br>
    &nbsp; &nbsp; Efficiency = <input type="text" name="eff" size="8"/>&nbsp; &nbsp;(e.g. 0.80)<br>
    (<i>For a generator example, any two of &nbsp; </i>P<sub>i</sub> = -1000<font color="#990000">W</font>, &nbsp; P<sub>o</sub> = -1170<font color="#990000">W</font>, &nbsp; Efficiency = 1.17)
   </fieldset>
   Number of pole pair n<sub>pp</sub> = <input type="text" name="npp" size="6"/>&nbsp; &nbsp;(e.g. 2)<br>
   Mechanical to total loss rate = k<sub>ml</sub> = P<sub>f</sub> / P<sub>loss</sub> = <input type="text" name="kml" size="5"/>&nbsp; &nbsp;(e.g. 0.25)<br>
   Stator's share in copper loss = k<sub>CuSt</sub> = P<sub>CuSt</sub> / P<sub>Cu</sub> = <input type="text" name="kCuSt" size="5"/>&nbsp; &nbsp;(e.g. 0.5)<br>
   <fieldset><legend>You must assign just one of the following two</legend>
    &nbsp; &nbsp; Leakage coefficient = &sigma; = 1 - M<sup>2</sup> / (L<sub>s</sub>L<sub>r</sub>) = <input type="text" name="sigma" size="6"/>&nbsp; &nbsp;(e.g. 0.002<font color="#990000">s</font>)<br>
    &nbsp; &nbsp; Coupling coefficient between stator and rotor k = &radic;<span style="text-decoration:overline;">&nbsp;M*M/(Ls*Lr)&nbsp;</span> = <input type="text" name="k" size="8"/>&nbsp; &nbsp;(e.g. 0.999)<br>
    &nbsp; &nbsp; (<i>Note that</i> &nbsp; &sigma; = 1 - k<sup>2</sup> )
   </fieldset>
   Mechanical time constant = &tau;<sub>mec</sub> = J<sub>i</sub> / B<sub>f</sub> = <input type="text" name="taumec" size="6"/><font color="#990000">s</font>&nbsp; &nbsp;(e.g. 0.25<font color="#990000">s</font>)<br>
   Stator to rotor turn ratio = N<sub>St</sub> / N<sub>Rot</sub> = <input type="text" name="NSt_NRot" size="6"/>&nbsp; &nbsp;(e.g. 3)<br>
  <p><input type="submit" name="Design" value="DESIGN"/></p>
  </form>
  <?php
    if (isset($_POST['Design'])) {
      $Pi = $_POST['Pi']; $Po = $_POST['Po']; $eff = $_POST['eff'];
      $Vs1rms = $_POST['Vs1rms'];
      $rpm = $_POST['rpm'];
      $npp = $_POST['npp'];
      $kml = $_POST['kml'];
      $kCuSt = $_POST['kCuSt'];
      $sigma = $_POST['sigma']; $k = $_POST['k'];
      $taumec = $_POST['taumec'];
      $NSt_NRot = $_POST['NSt_NRot'];
      // Check for validity
      $mistake=0;
      echo '<font color="#FF0000"><b>'; // If there is a mistake, the message will be in red and bold.
      if (!is_numeric($Vs1rms) || ($Vs1rms<=0)) {echo 'V<sub>s1</sub><sup>rms</sup> must be positive.<br>'; $mistake=1;}
      if (!is_numeric($rpm)) {echo 'Speed (n<sub>r</sub>) value is not valid.<br>'; $mistake=1;}
      $Pidemand = 0; $Podemand = 0; $effdemand = 0; 
      if (is_numeric($Pi)) $Pidemand = 1;
      if (is_numeric($Po)) $Podemand = 1;
      if (is_numeric($eff)) $effdemand = 1;
      if ($Pidemand+$Podemand+$effdemand != 2) {echo "You must assign just two of P<sub>i</sub> , P<sub>o</sub> and Efficiency.<br>"; $mistake=1;}
      if (!is_numeric($npp) || !is_int($npp*1) || ($npp<=0)) {echo 'n<sub>pp</sub> must be a positive integer.<br>'; $mistake=1;}
      if (!is_numeric($kml) || ($kml<0) || ($kml>1)) {echo 'k<sub>ml</sub> value must satisfy 0 &le; k<sub>ml</sub> &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($kCuSt) || ($kCuSt<0) || ($kCuSt>1)) {echo 'k<sub>CuSt</sub> value must satisfy 0 &le; k<sub>CuSt</sub> &le; 1.<br>'; $mistake=1;}
      $sigmademand = 0; $kdemand = 0;
      if (is_numeric($sigma)) $sigmademand = 1;
      if (is_numeric($k)) $kdemand = 1;
      if ($sigmademand+$kdemand != 1) {echo "You must assign just one of &sigma; and k.<br>"; $mistake=1;}
      if (($sigmademand==1) && (($sigma<0) || ($sigma>1))) {echo '&sigma; value must satisfy 0 &le; &sigma; &le; 1.<br>'; $mistake=1;}
      if (($kdemand==1) && (($k<0) || ($k>1))) {echo 'k value must satisfy 0 &le; k &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($taumec) || ($taumec<0)) {echo '&tau;<sub>mec</sub> value must satisfy &tau;<sub>mec</sub> &ge; 0.<br>'; $mistake=1;}
      if (!is_numeric($NSt_NRot) || ($NSt_NRot<=0)) {echo 'N<sub>St</sub> / N<sub>Rot</sub> must be positive.<br>'; $mistake=1;}
      
      if ($mistake) {echo '<br>DESIGN IS UNSUCCESSFUL FOR THE ABOVE REASON(S)</b></font>';}
      else {
        echo '</b></font>';
        // DIRECT CALCULATIONS
        if ($Pidemand === 0) $Pi=$Po/$eff;
        if ($Podemand === 0) $Po=$Pi*$eff;
        if ($effdemand === 0) $eff=$Po/$Pi;
        if ($sigmademand === 0) $sigma=1-$k*$k;
        if ($kdemand === 0) $k=sqrt(1-$sigma); 
        $Ploss=$Pi-$Po;
        $Pf=$kml*$Ploss;
        $PCu=$Ploss-$Pf;
        $Pm=$Po+$Pf;
        $wmec=$rpm*3.14159265358979/30;
        $wr=$wmec*$npp;
        $PCuSt=$PCu*$kCuSt;
        $PCuRot=$PCu-$PCuSt;
        $slip=$PCuRot/($Pi-$PCuSt);
        $ws=$wr/(1-$slip); $wg=$ws;
        $taur=(1-$slip)/($slip*$wr);
		if (($eff > 1) && ($Po <0)) $taur=-(1-$slip)/($slip*$wr);
        
        // TEMPORARY CALCULATIONS
        $cosfi1=0.7;
		if (($eff > 1) && ($Po <0)) $cosfi1=-0.7; 
        $Is1rms=$Pi/(3*$Vs1rms*$cosfi1);
        $Rs=$PCuSt/(3*$Is1rms*$Is1rms);
        $M2_Lr=2*$taur*$PCuRot/(3*$Is1rms*$Is1rms);
        $Ls=$M2_Lr/(1-$sigma);
        $vsd=($Rs-$wg*$sigma*$Ls)*$Is1rms;
        $vsq=($Rs+$wg*$Ls)*$Is1rms;
        
        // VALUES OF PARAMETERS
        $cosfi1=$cosfi1*$Vs1rms/sqrt(($vsd*$vsd+$vsq*$vsq)/2);
        $Is1rms=$Pi/(3*$Vs1rms*$cosfi1); $isd=$Is1rms; $isq=$Is1rms;
        $Rs=$PCuSt/(3*$Is1rms*$Is1rms);
        $M2_Lr=2*$taur*$PCuRot/(3*$isq*$isq);
        $Ls=$M2_Lr/(1-$sigma);
        $Lr=$Ls/($NSt_NRot*$NSt_NRot);
        $Rr=$Lr/$taur;
        $M=sqrt($M2_Lr*$Lr);
        $Bf=$Pf/($wmec*$wmec);
        $Ji=$Bf*$taumec;
        $taus=$Ls/$Rs;
        
        // ADDITIONAL OPERATING VALUES
        $TL=$Po/$wmec;
        $Tm=$Pm/$wmec;
        $Tf=$Pf/$wmec;
        $vsd=$Rs*$isd-$wg*$sigma*$Ls*$isq;
        $vsq=$Rs*$isq+$wg*$Ls*$isd;
        $psi_sd=$Ls*$isd;
        $psi_sq=$sigma*$Ls*$isq;
        $fs=$ws/(2*3.14159265358979);
        $ird=($psi_sd-$Ls*$isd)/$M;
        $irq=($psi_sq-$Ls*$isq)/$M;
        $Ir1rms=sqrt(($ird*$ird+$irq*$irq)/2);
        $psi_rd=($psi_sd-$sigma*$Ls*$isd)*$Lr/$M;
        $psi_rq=($psi_sq-$sigma*$Ls*$isq)*$Lr/$M;
        
        // EQUIVALENT CIRCUIT PARAMETERS
        $r1=$Rs; $r2=$Rr;
        $Lm=$NSt_NRot*$M;
        $L1leak=(1-$k)*$Ls; $x1=$ws*$L1leak;
        $L2leak=(1-$k)*$Lr; $x2=$ws*$L2leak;
        $r2p=$r2*($NSt_NRot*$NSt_NRot); $x2p=$x2*($NSt_NRot*$NSt_NRot); // Reflected values to the stator
        $gc=0; $bm=1/($ws*$Lm);
        
        echo '<p><b>MODEL PARAMETERS:</b><br>';
        echo 'Stator resistance <b>R<sub>s</sub> = '.$Rs.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Stator inductance <b>L<sub>s</sub> = '.$Ls.'<font color="#990000">H</font></b><br>';
        echo 'Rotor resistance <b>R<sub>r</sub> = '.$Rr.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Rotor inductance <b>L<sub>r</sub> = '.$Lr.'<font color="#990000">H</font></b><br>';
        echo 'Mutual inductance <b>M = '.$M.'<font color="#990000">H</font></b><br>';
        echo 'Number of pole pair <b>n<sub>pp</sub> = '.$npp.' </b><font color="#FF0000">(demand value)</font><br>';
        echo 'Friction constant <b>B<sub>f</sub> = '.$Bf.'<font color="#990000">Nm.s/rad</font></b><br>';
        echo 'Inertia <b>J<sub>i</sub> = '.$Ji.'<font color="#990000">kg.m<sup>2</sup></font></b></p>';

        echo '<p><b>DEPENDENT PARAMETERS</b><br>';
        echo 'Stator\'s time constant <b>&tau;<sub>s</sub></b> = L<sub>s</sub> / R<sub>s</sub> = <b>'.$taus.'<font color="#990000">s</font></b><br>';
        echo 'Rotor\'s time constant <b>&tau;<sub>r</sub></b> = L<sub>r</sub> / R<sub>r</sub> = <b>'.$taur.'<font color="#990000">s</font></b><br>';
        echo 'Mechanical time constant <b>&tau;<sub>mec</sub></b> = J<sub>i</sub> / B<sub>f</sub> = <b>'.$taumec.'<font color="#990000">s</font></b> <font color="#FF0000">(demand value)</font></b><br>';
        echo 'Leakage coefficient = <b>&sigma;</b> = 1 - M<sup>2</sup> / (L<sub>s</sub>L<sub>r</sub>) = <b>'.$sigma.'</b> <font color="#FF0000">(demand value)</font><br>';
        echo 'Coupling coefficient between stator and rotor <b>k = &radic;<span style="text-decoration:overline;">&nbsp;M*M/(Ls*Lr)&nbsp;</span> = '.$k.'</b></p>';
        
        echo '<p><b>EQUIVALENT CIRCUIT PARAMETERS:</b><br>';
        echo 'Stator resistance <b>r<sub>1</sub> = '.$r1.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Rotor resistance <b>r<sub>2</sub> = '.$r2.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Magnetising inductance referred to the stator <b>L<sub>m</sub> = '.$Lm.'<font color="#990000">H</font></b><br>';
        echo 'Stator leakage inductance <b>L<sub>1<i>l</i></sub> = '.$L1leak.'<font color="#990000">H</font></b><br>';
        echo 'Rotor leakage inductance <b>L<sub>2<i>l</i></sub> = '.$L2leak.'<font color="#990000">H</font></b><br>';
        echo 'Stator leakage reactance <b>x<sub>1</sub> = '.$x1.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Rotor leakage reactance in stator frequency <b>x<sub>2</sub> = '.$x2.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Conductance corresponding to the core losses <b>g<sub>c</sub> = '.$gc.'<font color="#990000">S</font></b><font color="#FF0000"> (ignored in the model)</font><br>';
        echo 'Susceptance  corresponding to the magnetising current at primary <b>b<sub>m</sub> = '.$bm.'<font color="#990000">S</font></b><br>';
        echo 'Rotor resistance reflected to the stator <b>r<sub>2</sub>\' = '.$r2p.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Rotor leakage reactance reflected to the stator <b>x<sub>2</sub>\' = '.$x2p.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Stator to rotor turn ratio = <b>N<sub>St</sub> / N<sub>Rot</sub> = '.$NSt_NRot.'</b> <font color="#FF0000">(demand value)</font><br>';

        echo '<p><b>OPERATING VALUES:</b><br>';
        echo 'Single phase stator rms voltage = <b>V<sub>s1</sub><sup>rms</sup> = '.$Vs1rms.'<font color="#990000">V</font></b><font color="#FF0000"> (demand value)</font><br>';
        echo '(v<sub>sd</sub> = '.$vsd.'<font color="#990000">V</font> , &nbsp;&nbsp; v<sub>sq</sub> = '.$vsq.'<font color="#990000">V</font>)<br>';
        echo 'Single phase stator rms current = <b>I<sub>s1</sub><sup>rms</sup> = '.$Is1rms.'<font color="#990000">A</font></b><br>';
        echo '(i<sub>sd</sub> = '.$isd.'<font color="#990000">A</font> , &nbsp;&nbsp; i<sub>sq</sub> = '.$isq.'<font color="#990000">A</font>)<br>';
        echo 'Single phase rotor rms current = <b>I<sub>r1</sub><sup>rms</sup> = '.$Ir1rms.'<font color="#990000">A</font></b><br>';
        echo '(i<sub>rd</sub> = '.$ird.'<font color="#990000">A</font> , &nbsp;&nbsp; i<sub>rq</sub> = '.$irq.'<font color="#990000">A</font>)<br>';
        echo 'Synchronous angular speed (electrical) <b>&omega;<sub>s</sub> = '.$ws.'<font color="#990000">rad/s</font></b><br>';
        echo '(General reference frame angular speed in <font color="#990000">electrical rad/s</font> is preferred as <b>&omega;<sub>g</sub> = &omega;<sub>s</sub></b> .)<br>';
        echo 'Stator frequency <b>f<sub>s</sub> = '.$fs.'<font color="#990000">Hz</font></b><br>';
        echo 'Rotor speed <b>n<sub>r</sub> = '.$rpm.'<font color="#990000">rpm</font></b><font color="#FF0000"> (demand value)</font><br>';
        echo 'Rotor angular speed (mechanical) <b>&omega;<sub>mec</sub> = '.$wmec.'<font color="#990000">rad/s</font></b><br>';
        echo 'Rotor angular speed (electrical) <b>&omega;<sub>r</sub> = '.$wr.'<font color="#990000">rad/s</font></b><br>';
        echo 'Slip <b>s = '.$slip.'</b><br>';
        echo 'Shaft output power <b>P<sub>o</sub> = '.$Po.'<font color="#990000">W</font></b>';
        if($Podemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Stator input power <b>P<sub>i</sub> = '.$Pi.'<font color="#990000">W</font></b>';
        if($Pidemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo '<b>Efficiency = '.$eff.'</b>';
        if($effdemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Copper loss <b>P<sub>Cu</sub> = '.$PCu.'<font color="#990000">W</font></b> ( P<sub>CuSt</sub> = '.$PCuSt.'<font color="#990000">W</font> , &nbsp; P<sub>CuRot</sub> = '.$PCuRot.'<font color="#990000">W</font> )<br>'; 
        echo 'Friction loss <b>P<sub>f</sub> = '.$Pf.'<font color="#990000">W</font></b><br>'; 
        echo 'Electromechanical power <b>P<sub>m</sub> = P<sub>o</sub>+P<sub>f</sub> = '.$Pm.'<font color="#990000">W</font></b><br>';
        echo 'Friction torque <b>T<sub>f</sub> = '.$Tf.'<font color="#990000">Nm</font></b><br>';
        echo 'Output(Load) torque <b>T<sub>L</sub> = '.$TL.'<font color="#990000">Nm</font></b><br>';
        echo 'Electromechanical torque <b>T<sub>m</sub> = T<sub>L</sub>+T<sub>f</sub> = '.$Tm.'<font color="#990000">Nm</font></b><br>';
        echo 'Stator input power factor <b>cos&phi;<sub>1</sub> = '.$cosfi1.'</b><br>';
        echo 'Stator flux linkeage components <b>&psi;<sub>sd</Sub> = '.$psi_sd.'<font color="#990000">Vs</font> , &nbsp;&psi;<sub>sq</Sub> = '.$psi_sq.'<font color="#990000">Vs</font></b><br>';
        echo 'Rotor flux linkeage components <b>&psi;<sub>rd</Sub> = '.$psi_rd.'<font color="#990000">Vs</font> , &nbsp;&psi;<sub>rq</Sub> = '.$psi_rq.'<font color="#990000">Vs</font></b></p>';
      }
    }
  ?>
<br><br><br><br><br>
<font color="#33CCFF" size=1>
Online motor design for simulation purposes<br>
Online motor parameters for simulation purposes<br>
Online electric motor parameters for simulation purposes<br>
Online induction motor parameters for simulation purposes<br>
Online asynchronous motor parameters for simulation purposes<br>
Online AC motor parameters for simulation purposes<br>

Online electric motor design for simulation purposes<br>
Online induction motor design for simulation purposes<br>
Online asynchronous motor design for simulation purposes<br>
Online AC motor design for simulation purposes<br>
</font>

 </body>
</html>