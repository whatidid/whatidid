<html>
 <head>
  <title>DC SERVO MOTOR DESIGN FOR SIMULATION PURPOSES</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
 </head>
 <body bgcolor="#33CCFF" text="#000000">
  <p>Last modified on 08.6.2019.<br><font color="#FF0000"><b>DC SERVO MOTOR DESIGN FOR SIMULATION PURPOSES</b></font></p>
  <p>This page serves a free online DC servo motor design tool for simulation purposes according to the following model:<br>
  <img src="dcservomodel.png" alt="DC Servo motor Model"></p>
  <p><b>If this service is helpful for your academic work, you can cite <a href="http://www.aece.ro/displaypdf.php?year=2019&number=2&article=4">this paper ( doi:10.4316/AECE.2019.02004)</a>, in which I have presented all the details.</b></p>
  <p><b>REQUIREMENTS</b><br>
  <form action="" method="post">
   Armature voltage = v<sub>a</sub> = <input type="text" name="va" size="6"/><font color="#990000">V</font>&nbsp; &nbsp;(e.g. 100<font color="#990000">V</font>)<br>
   Speed = n = <input type="text" name="rpm" size="6"/><font color="#990000">rpm</font>&nbsp; &nbsp;(e.g. 2000<font color="#990000">rpm</font>)<br>
   <fieldset><legend>You must assign just two of the following three</legend>
    &nbsp; &nbsp; Armature input power = P<sub>i</sub> = <input type="text" name="Pi" size="8"/><font color="#990000">W</font><br>
    &nbsp; &nbsp; Shaft output power = P<sub>o</sub> = <input type="text" name="Po" size="8"/><font color="#990000">W</font>&nbsp; &nbsp;(e.g. 1500W)<br>
    &nbsp; &nbsp; Efficiency = <input type="text" name="eff" size="8"/>&nbsp; &nbsp;(e.g. 0.90)<br>
    (<i>For a generator example, any two of &nbsp; </i>P<sub>i</sub> = -1000<font color="#990000">W</font>, &nbsp; P<sub>o</sub> = -1170<font color="#990000">W</font>, &nbsp; Efficiency = 1.17)
   </fieldset>
   Mechanical to total loss rate = k<sub>ml</sub> = P<sub>f</sub> / P<sub>loss</sub> = <input type="text" name="kml" size="5"/>&nbsp; &nbsp;(e.g. 0.5)<br>
   Electrical time constant = &tau;<sub>elc</sub> = L<sub>a</sub> / R<sub>a</sub> = <input type="text" name="tauelc" size="6"/><font color="#990000">s</font>&nbsp; &nbsp;(e.g. 0.15<font color="#990000">s</font>)<br>
   Mechanical time constant = &tau;<sub>mec</sub> = J<sub>i</sub> / B<sub>f</sub> = <input type="text" name="taumec" size="6"/><font color="#990000">s</font>&nbsp; &nbsp;(e.g. 0.25<font color="#990000">s</font>)<br>
  <p><input type="submit" name="Design" value="DESIGN"/></p>
  </form>
  <?php
    if (isset($_POST['Design'])) {
      $Pi = $_POST['Pi']; $Po = $_POST['Po']; $eff = $_POST['eff'];
      $va = $_POST['va'];
      $rpm = $_POST['rpm'];
      $kml = $_POST['kml'];
      $tauelc = $_POST['tauelc'];
      $taumec = $_POST['taumec'];
      // Check for validity
      $mistake=0;
      echo '<font color="#FF0000"><b>'; // If there is a mistake, the message will be in red and bold.
      if (!is_numeric($va)) {echo 'Armature voltage (v<sub>a</sub>) value is not valid.<br>'; $mistake=1;}
      if (!is_numeric($rpm)) {echo 'Speed (n) value is not valid.<br>'; $mistake=1;}
      $Pidemand = 0; $Podemand = 0; $effdemand = 0; 
      if (is_numeric($Pi)) $Pidemand = 1;
      if (is_numeric($Po)) $Podemand = 1;
      if (is_numeric($eff)) $effdemand = 1;
      if ($Pidemand+$Podemand+$effdemand != 2) {echo "You must assign just two of P<sub>i</sub> , P<sub>o</sub> and Efficiency.<br>"; $mistake=1;}
      if (!is_numeric($kml) || ($kml<0) || ($kml>1)) {echo 'k<sub>ml</sub> value must satisfy 0 &le; k<sub>ml</sub> &le; 1<br>'; $mistake=1;}
      if (!is_numeric($tauelc) || ($tauelc<0)) {echo '&tau;<sub>elc</sub> value must satisfy &tau;<sub>elc</sub> &ge; 0<br>'; $mistake=1;}
      if (!is_numeric($taumec) || ($taumec<0)) {echo '&tau;<sub>mec</sub> value must satisfy &tau;<sub>mec</sub> &ge; 0<br>'; $mistake=1;}
      
      if ($mistake) {echo '<br>DESIGN IS UNSUCCESSFUL FOR THE ABOVE REASON(S)</b></font>';}
      else {
        echo '</b></font>';
        if ($Pidemand === 0) $Pi=$Po/$eff;
        if ($Podemand === 0) $Po=$Pi*$eff;
        if ($effdemand === 0) $eff=$Po/$Pi; 
        $Ploss=$Pi-$Po;
        $Pf=$kml*$Ploss;
        $PCu=$Ploss-$Pf;
        $Pm=$Po+$Pf;
        $w=$rpm*3.14159265358979/30;
        $Bf=$Pf/($w*$w);
        $TL=$Po/$w;
        $Tm=$Pm/$w;
        $Tf=$Pf/$w;
        $ia=$Pi/$va;
        $Ra=$PCu/($ia*$ia);
        $La=$Ra*$tauelc;
        $Kb=$Pm/($w*$ia);
        $Ji=$Bf*$taumec;
        
        echo '<p><b>MODEL PARAMETERS:</b><br>';
        echo 'Armature resistance <b>R<sub>a</sub> = '.$Ra.'<font color="#990000">&Omega;</font></b><br>';
        echo 'Armature inductance <b>L<sub>a</sub> = '.$La.'<font color="#990000">H</font></b><br>';
        echo 'Torque(back emf) constant <b>K<sub>b</sub> = '.$Kb.'<font color="#990000">Nm/A</font></b> or <b><font color="#990000">Vs/rad</font></b><br>';
        echo 'Friction constant <b>B<sub>f</sub> = '.$Bf.'<font color="#990000">Nm.s/rad</font></b><br>';
        echo 'Inertia <b>J<sub>i</sub> = '.$Ji.'<font color="#990000">kg.m<sup>2</sup></font></b></p>';
        echo '<p><b>DEPENDED PARAMETERS:</b><br>';
        echo 'Electrical time constant <b>&tau;<sub>elc</sub></b> = L<sub>a</sub> / R<sub>a</sub> = <b>'.$tauelc.'<font color="#990000">s</font></b> <font color="#FF0000">(demand value)</font><br>';
        echo 'Mechanical time constant <b>&tau;<sub>mec</sub></b> = J<sub>i</sub> / B<sub>f</sub> = <b>'.$taumec.'<font color="#990000">s</font></b> <font color="#FF0000">(demand value)</font></b></p>';

        echo '<p><b>OPERATING VALUES:</b><br>';
        echo 'Armature voltage <b>v<sub>a</sub> = '.$va.'<font color="#990000">V</font></b><font color="#FF0000"> (demand value)</font><br>';
        echo 'Armature current <b>i<sub>a</sub> = '.$ia.'<font color="#990000">A</font></b><br>';
        echo 'Speed <b>n = '.$rpm.'<font color="#990000">rpm</font></b><font color="#FF0000"> (demand value)</font> or <b>&omega; = '.$w.'<font color="#990000">rad/s</font></b><br>';
        echo 'Output power <b>P<sub>o</sub> = '.$Po.'<font color="#990000">W</font></b>';
        if($Podemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Input power <b>P<sub>i</sub> = '.$Pi.'<font color="#990000">W</font></b>';
        if($Pidemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo '<b>Efficiency = '.$eff.'</b>';
        if($effdemand === 1) echo '<font color="#FF0000"> (demand value)</font>';
        echo '<br>';
        echo 'Copper loss <b>P<sub>Cu</sub> = '.$PCu.'<font color="#990000">W</font></b><br>'; 
        echo 'Friction loss <b>P<sub>f</sub> = '.$Pf.'<font color="#990000">W</font></b><br>'; 
        echo 'Friction torque <b>T<sub>f</sub> = '.$Tf.'<font color="#990000">Nm</font></b><br>';
        echo 'Output(Load) torque <b>T<sub>L</sub> = '.$TL.'<font color="#990000">Nm</font></b><br>';
        echo 'Electromechanical torque <b>T<sub>m</sub> = T<sub>L</sub>+T<sub>f</sub> = '.$Tm.'<font color="#990000">Nm</font></b></p>';
        
      }
    }
  ?>
<br><br><br><br><br>
<font color="#33CCFF" size=1>
Online motor design for simulation purposes<br>
Online motor parameters for simulation purposes<br>
Online electric motor parameters for simulation purposes<br>
Online dc servo motor parameters for simulation purposes<br>
Online dc motor parameters for simulation purposes<br>
Online PM dc motor parameters for simulation purposes<br>

Online electric motor design for simulation purposes<br>
Online dc servo motor design for simulation purposes<br>
Online dc motor design for simulation purposes<br>
Online PM dc motor design for simulation purposes<br>
</font>
 </body>
</html>