<html>
 <head>
  <title>WRSM DESIGN FOR SIMULATION PURPOSES</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <p>Last modified on 08.6.2019.<br><font color="#FF0000"><b>WRSM DESIGN FOR SIMULATION PURPOSES</b> (3-phase)</font></p>
  <p>This page serves a free online wound-rotor synchronous motor design tool for simulation purposes according to the following model:<br>
  <img src="WRSMmodel.png" alt=" WRSM Model"></p>
  <p><b>If this service is helpful for your academic work, you can cite <a href="http://www.aece.ro/displaypdf.php?year=2019&number=2&article=4">this paper ( doi:10.4316/AECE.2019.02004)</a>, in which I have presented all the details.</b></p>
  <p><b>REQUIREMENTS</b><br>
  <form action="" method="post">
   Single phase stator rms voltage = V<sub>s1</sub><sup>rms</sup> = <input type="text" name="Vs1rms" size="6"/><font color="#990000">V</font>&nbsp; &nbsp;(e.g. 220<font color="#990000">V</font>)<br>
   Speed = n<sub>r</sub> = <input type="text" name="rpm" size="6"/><font color="#990000">rpm</font>&nbsp; &nbsp;(e.g. 1400<font color="#990000">rpm</font>)<br>
   <fieldset><legend>You must assign just two of the following three</legend>
    &nbsp; &nbsp; Total (stator and rotor) input power = P<sub>i</sub> = <input type="text" name="Pi" size="8"/><font color="#990000">W</font><br>
    &nbsp; &nbsp; Shaft output power = P<sub>o</sub> = <input type="text" name="Po" size="8"/><font color="#990000">W</font>&nbsp; &nbsp;(e.g. 4000<font color="#990000">W</font>)<br>
    &nbsp; &nbsp; Efficiency = <input type="text" name="eff" size="8"/>&nbsp; &nbsp;(e.g. 0.80)<br>
    (<i>For a generator example, any two of &nbsp; </i>P<sub>i</sub> = -1000<font color="#990000">W</font>, &nbsp; P<sub>o</sub> = -1170<font color="#990000">W</font>, &nbsp; Efficiency = 1.17)
   </fieldset>
   Number of pole pair n<sub>pp</sub> = <input type="text" name="npp" size="6"/>&nbsp; &nbsp;(e.g. 2)<br>
   Mechanical to total loss rate = k<sub>ml</sub> = P<sub>f</sub> / P<sub>loss</sub> = <input type="text" name="kml" size="5"/>&nbsp; &nbsp;(e.g. 0.25)<br>
   Saliency ratio = k<sub>dq</sub> = L<sub>sd</sub> / L<sub>sq</sub> = <input type="text" name="kdq" size="5"/>&nbsp; &nbsp;(e.g. 1.5) <font color="#FF0000"><b>(1 for cylindrical rotor)</b></font><br>
   Stator input power factor cos&phi;<sub>1</sub> = <input type="text" name="cosfi1" size="6"/>&nbsp; &nbsp;(e.g. 0.8)<br>
   Mechanical time constant = &tau;<sub>mec</sub> = J<sub>i</sub> / B<sub>f</sub> = <input type="text" name="taumec" size="6"/><font color="#990000">s</font>&nbsp; &nbsp;(e.g. 0.25<font color="#990000">s</font>)<br>
   Leakage coefficient between the stator and rotor = &sigma;<sub>f</sub> = 1 - M<sup>2</sup> / (L<sub>sd</sub>L<sub>f</sub>) = <input type="text" name="sigmaf" size="6"/> (e.g. 0.02)<br>
   <fieldset><legend>You must assign just two of the following three</legend>
    &nbsp; &nbsp; Excitation voltage = v<sub>f</sub> = <input type="text" name="Vf" size="8"/><font color="#990000">V</font>&nbsp; &nbsp;(e.g. 24<font color="#990000">V</font>)<br>
    &nbsp; &nbsp; Excitation current = i<sub>f</sub> = <input type="text" name="If" size="8"/><font color="#990000">A</font>&nbsp; &nbsp;(e.g. 8.333<font color="#990000">A</font>)<br>
    &nbsp; &nbsp; Excitation to total loss rate = k<sub>rl</sub> = P<sub>CuRot</sub> / P<sub>loss</sub> =<input type="text" name="krl" size="8"/>&nbsp; &nbsp;(e.g. 0.2)<br>
   </fieldset>
  <p><input type="submit" name="Design" value="DESIGN"/></p>
  </form>
  <?php
    if (isset($_POST['Design'])) {
      $Vs1rms = $_POST['Vs1rms'];
      $rpm = $_POST['rpm'];
      $Pi = $_POST['Pi']; $Po = $_POST['Po']; $eff = $_POST['eff'];
      $npp = $_POST['npp'];
      $kml = $_POST['kml'];
      $kdq = $_POST['kdq'];
      $cosfi1 = $_POST['cosfi1'];
      $taumec = $_POST['taumec'];
      $sigmaf = $_POST['sigmaf'];
      $Vf = $_POST['Vf']; $If = $_POST['If']; $krl = $_POST['krl'];
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
      //$yaz=$Pidemand+$Podemand+$effdemand; echo $yaz.'<br>';
      $Vfdemand = 0; $Ifdemand = 0; $krldemand = 0; 
      if (is_numeric($Vf)) $Vfdemand = 1;
      if (is_numeric($If)) $Ifdemand = 1;
      if (is_numeric($krl)) $krldemand = 1;
      if ($Vfdemand+$Ifdemand+$krldemand != 2) {echo "You must assign just two of v<sub>f</sub> , i<sub>f</sub> and k<sub>rl</sub>.<br>"; $mistake=1;}
      if ((!is_numeric($npp)) || (!is_int($npp*1)) || ($npp<=0)) {echo 'n<sub>pp</sub> must be a positive integer.<br>'; $mistake=1;}
      if (!is_numeric($kml) || ($kml<0) || ($kml>1)) {echo 'k<sub>ml</sub> must satisfy 0 &le; k<sub>ml</sub> &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($kdq) || ($kdq<1)) {echo 'k<sub>dq</sub> must satisfy k<sub>dq</sub> &ge; 1.<br>'; $mistake=1;}
      if (!is_numeric($cosfi1) || (abs($cosfi1)>1)) {echo 'cos&phi;<sub>1</sub> must satisfy -1 &le; cos&phi;<sub>1</sub> &le; 1.<br>'; $mistake=1;}
      if (!is_numeric($taumec) || ($taumec<0)) {echo '&tau;<sub>mec</sub> must satisfy &tau;<sub>mec</sub> &ge; 0.<br>'; $mistake=1;}
      if (is_numeric($Pi)) {
        if ($Pi*$cosfi1<0){echo 'cos&phi;<sub>1</sub> must have the same sign as P<sub>i</sub>.<br>'; $mistake=1;}
      }
      else {
        if ($Po*$eff*$cosfi1<0){echo 'cos&phi;<sub>1</sub> must have the same sign as P<sub>i</sub> = P<sub>o</sub> / Efficiency.<br>'; $mistake=1;}
      }
      // DIRECT CALCULATIONS
      if ($Pidemand === 0) $Pi=$Po/$eff;
      if ($Podemand === 0) $Po=$Pi*$eff;
      if ($effdemand === 0) $eff=$Po/$Pi; 
      $Ploss=$Pi-$Po;
      $Pf=$kml*$Ploss;
      $Pm=$Po+$Pf;
      if ($krldemand==0) $krl=$Vf*$If/$Ploss; // Talep verilmeyeni belirliyoruz
      $PCuRot=$Ploss*$krl;
      if ($Vfdemand==0) $Vf=$PCuRot/$If;  // Talep verilmeyeni belirliyoruz
      if ($Ifdemand==0) $If=$PCuRot/$Vf;  // Talep verilmeyeni belirliyoruz
      $PCuSt=$Ploss-$Pf-$PCuRot;
      $PCu=$PCuSt+$PCuRot;
      $PiSt=$Pi-$PCuRot;
      if (($krl<0) || ($krl>1)) {echo 'k<sub>rl</sub> must satisfy 0 &le; k<sub>rl</sub> &le; 1. You demanded k<sub>rl</sub> = '.$krl.'<br>'; $mistake=1;}
      if (($krl+$kml>1) || ($krl+$kml)<0) {echo 'k<sub>rl</sub> and k<sub>ml</sub> must satisfy 0 &le; k<sub>rl</sub> + k<sub>ml</sub> &le; 1. You demanded k<sub>rl</sub> = '.$krl.' and k<sub>ml</sub> = '.$kml.'<br>'; $mistake=1;}
      if ($mistake) {echo '<br>DESIGN IS FAILED FOR THE ABOVE REASON(S)</b></font>';}
      else {
        echo '</b></font>';

        // DIRECT CALCULATIONS (continued)
        $wmec=$rpm*3.14159265358979/30;
        $wr=$wmec*$npp;
        $fs=$wr/(2*3.14159265358979);
        $Is1rms=$PiSt/(3*$Vs1rms*$cosfi1);
        $Rs=$PCuSt/(3*$Is1rms*$Is1rms);
        $TL=$Po/$wmec;
        $Tm=$Pm/$wmec;
        $Tf=$Pf/$wmec;
        $Bf=$Pf/($wmec*$wmec);
        $Ji=$Bf*$taumec;
        
        if ($kdq == 1) { // CYLINDRICAL ROTOR
          $kTPM=1; // the torque ratio due to the PM with respect to the total electromechanical torque
          $isd=0; $isq=sqrt(2)*$Is1rms;
          $FIPM=2*$Tm/(3*$npp*$isq);
          if ($FIPM<0) {$isq=-$isq; $FIPM=-$FIPM;}
          $Lsd=sqrt(pow($Vs1rms/($wr*$Is1rms),2)-pow($Rs/$wr,2)-0.5*pow($FIPM/$Is1rms,2)-sqrt(2)*$Rs*$FIPM/($wr*$Is1rms));
          $Lsq=$Lsd;
          $vsd=$Rs*$isd-$wr*$Lsq*$isq;
          $vsq=$Rs*$isq+$wr*$Lsd*$isd+$wr*$FIPM;
        }
        else {  // SALIENT-POLE ROTOR
          $kTPM=0.5; // arbitrarily initiated
          $DkTPM=0.0001; // an arbitrary but small initial change coefficient of $kTPM for the loop
          $DkTPMmax=0.02; // Limit must be positive
          $ev=0.3; // arbitrarily initiated voltage error
          $evold=0.5; // arbitrarily assumed previous voltage error
          $tiny=0.000001; // tolerance for voltage demand
          while (abs($ev)>$tiny) {
            $DkTPM=-$DkTPM*$ev/($ev-$evold);
            $DkTPM=min($DkTPMmax, max(-$DkTPMmax, $DkTPM)); // change is limited
            $kTPM=$kTPM+$DkTPM;
            $evold=$ev;
            $isd=$Is1rms*sqrt((2-2*$kTPM)/(2-$kTPM));
            $isq=$Is1rms*sqrt(2/(2-$kTPM));
            $FIPM=2*$kTPM*$Tm/(3*$npp*$isq);
            if ($FIPM<0) {$isq=-$isq; $FIPM=-$FIPM;}
            $Lsq=2*(1-$kTPM)*$Tm/(3*($kdq-1)*$npp*$isd*$isq);
            if ($Lsq<0) {$isd=-$isd; $Lsq=-$Lsq;}
            $Lsd=$Lsq*$kdq;
            $vsd=$Rs*$isd-$wr*$Lsq*$isq;
            $vsq=$Rs*$isq+$wr*$Lsd*$isd+$wr*$FIPM;
            $ev=$Vs1rms-sqrt(($vsd*$vsd+$vsq*$vsq)/2);
          }
        }
        // Excitation circuit parameters
        $Rf=$Vf/$If;
        $M=$FIPM/$If;
        $Lf=3*$M*$M/(2*(1-$sigmaf)*$Lsd);

        // ADDITIONAL OPERATING VALUES
        $psi_sd=$Lsd*$isd+$FIPM;
        $psi_sq=$Lsq*$isq;

        echo '<p><b>MODEL PARAMETERS:</b><br>';
        echo 'Stator resistance <b>R<sub>s</sub> = '.$Rs.'<font color="#990000">&Omega;</font></b><br>';
        echo 'd-axis stator inductance <b>L<sub>sd</sub> = '.$Lsd.'<font color="#990000">H</font></b><br>';
        echo 'q-axis stator inductance <b>L<sub>sq</sub> = '.$Lsq.'<font color="#990000">H</font></b><br>';
        echo 'Rotor resistance <b>R<sub>f</sub> = '.$Rf.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Rotor inductance <b>L<sub>f</sub> = '.$Lf.'<font color="#990000">H</font></b><br>';
        echo 'Mutual inductance between the stator and rotor<b> M = '.$M.'<font color="#990000">H</font></b><br>';
        echo 'Number of pole pair <b>n<sub>pp</sub> = '.$npp.' </b><font color="#FF0000">(demand value)</font><br>';
        echo 'Friction constant <b>B<sub>f</sub> = '.$Bf.'<font color="#990000">Nm.s/rad</font></b><br>';
        echo 'Inertia <b>J<sub>i</sub> = '.$Ji.'<font color="#990000">kg.m<sup>2</sup></font></b></p>';

        echo '<p><b>OPERATING VALUES:</b><br>';
        echo 'Single phase stator rms voltage = <b>V<sub>s1</sub><sup>rms</sup> = '.$Vs1rms.'<font color="#990000">V</font></b><font color="#FF0000"> (demand value)</font><br>';
        echo '(v<sub>sd</sub> = '.$vsd.'<font color="#990000">V</font> , &nbsp;&nbsp; v<sub>sq</sub> = '.$vsq.'<font color="#990000">V</font>)<br>';
        echo 'Single phase stator rms current = <b>I<sub>s1</sub><sup>rms</sup> = '.$Is1rms.'<font color="#990000">A</font></b><br>';
        echo '(i<sub>sd</sub> = '.$isd.'<font color="#990000">A</font> , &nbsp;&nbsp; i<sub>sq</sub> = '.$isq.'<font color="#990000">A</font>)<br>';
        echo 'Stator frequency <b>f<sub>s</sub> = '.$fs.'<font color="#990000">Hz</font></b><br>';
        echo 'Rotor speed <b>n<sub>r</sub> = '.$rpm.'<font color="#990000">rpm</font></b><font color="#FF0000"> (demand value)</font><br>';
        echo 'Rotor angular speed (mechanical) <b>&omega;<sub>mec</sub> = '.$wmec.'<font color="#990000">rad/s</font></b><br>';
        echo 'Rotor angular speed (electrical) <b>&omega;<sub>r</sub> = '.$wr.'<font color="#990000">rad/s</font></b><br>';
        echo 'Shaft output power <b>P<sub>o</sub> = '.$Po.'<font color="#990000">W</font></b>';
        if($Podemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Stator input power <b>P<sub>i</sub> = '.$Pi.'<font color="#990000">W</font></b>';
        if($Pidemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo '<b>Efficiency = '.$eff.'</b>';
        if($effdemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Copper loss <b>P<sub>Cu</sub> = '.$PCu.'<font color="#990000">W</font></b> (P<sub>CuSt</sub> = '.$PCuSt.'<font color="#990000">W</font> , &nbsp; P<sub>CuRot</sub> = '.$PCuRot.'<font color="#990000">W</font>)<br>'; 
        echo 'Friction loss <b>P<sub>f</sub> = '.$Pf.'<font color="#990000">W</font></b><br>'; 
        echo 'Electromechanical power <b>P<sub>m</sub> = P<sub>o</sub>+P<sub>f</sub> = '.$Pm.'<font color="#990000">W</font></b><br>';
        echo 'Friction torque <b>T<sub>f</sub> = '.$Tf.'<font color="#990000">Nm</font></b><br>';
        echo 'Output(Load) torque <b>T<sub>L</sub> = '.$TL.'<font color="#990000">Nm</font></b><br>';
        echo 'Electromechanical torque <b>T<sub>m</sub> = T<sub>L</sub>+T<sub>f</sub> = '.$Tm.'<font color="#990000">Nm</font></b><br>';
        echo 'Stator input power factor <b>cos&phi;<sub>1</sub> = '.$cosfi1.'</b><font color="#FF0000"> (demand value)</font><br>';
        echo 'Stator flux linkage components <b>&psi;<sub>sd</Sub> = '.$psi_sd.'<font color="#990000">Vs</font> , &nbsp;&psi;<sub>sq</Sub> = '.$psi_sq.'<font color="#990000">Vs</font></b><br>';
        //echo 'Excitation part of d-axis stator flux linkage (similar to PMSM\'s <b>&Phi;<sub>PM</sub></b>) = <b>'.$FIPM.'<font color="#990000">Vs</font></b><br>';
        //echo 'Excitation torque / Electromechanical torque = <b>k<sub>TPM</sub> = '.$kTPM.'</b>';
        //if ($kdq==1) echo '<font color="#FF0000"> (demand value)</font>';
        //echo '<br>';
        echo 'Excitation voltage = <b>v<sub>f</sub> = '.$Vf.'<font color="#990000">V</font></b>';
        if ($Vfdemand==1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Excitation current = <b>i<sub>f</sub> = '.$If.'<font color="#990000">A</font></b>';
        if ($Ifdemand==1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '</p>';
      }
    }
  ?>
<br><br><br><br><br>
<font color="#33CCFF" size=1>
Online motor design for simulation purposes<br>
Online motor parameters for simulation purposes<br>
Online electric motor parameters for simulation purposes<br>
Online AC motor parameters for simulation purposes<br>
Online salient-pole synchronous motor parameters for simulation purposes<br>
Online salient-pole rotor synchronous motor parameters for simulation purposes<br>
Online round rotor synchronous motor parameters for simulation purposes<br>
Online wound rotor synchronous motor parameters for simulation purposes<br>
Online WRSM parameters for simulation purposes<br>

Online electric motor design for simulation purposes<br>
Online AC motor design for simulation purposes<br>
Online salient-pole synchronous motor design for simulation purposes<br>
Online salient-pole rotor synchronous motor design for simulation purposes<br>
Online round rotor synchronous motor design for simulation purposes<br>
Online wound rotor synchronous motor design for simulation purposes<br>
Online WRSM design for simulation purposes<br>
</font>
 </body>
</html>