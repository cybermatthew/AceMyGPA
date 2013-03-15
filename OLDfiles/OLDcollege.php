<?PHP include("gpaHeader.php"); ?>
<?PHP include("collegeCalcLabels.php"); ?>
      <div id=collegeForm>
      <form method="post" action="college.php">
      	   <br><h1><b>College Grade Calculator</b></h1>
	   <p>Calculate your college GPA by entering the number of classes you received a certain grade in and the number of units they were worth.  Then click enter or the Calculate! button and it will display your GPA.</p>
	<table border="1">
		<tr>
		<div id=topLabels>
			<td></td>
			<td align="center">1 Unit</td>
			<td align="center">2 Units</td>
			<td align="center">3 Units</td>
			<td align="center">4 Units</td>
			<td align="center">5 Units</td>
		</div>
		</tr>
		<tr>
		<div id=sideLabels>
                        <td align="left">A+</td>
                </div>
                        <td><input type="text" id="Ap1" size="10"></td>
                        <td><input type="text" id="Ap2" size="10"></td>
                        <td><input type="text" id="Ap3" size="10"></td>
                        <td><input type="text" id="Ap4" size="10"></td>
                        <td><input type="text" id="Ap5" size="10"></td>
                </tr>
		<div id=sideLabels>
			<td align="left">A</td>
		</div>
                        <td><input type="text" id="A1" size="10"></td>
                        <td><input type="text" id="A2" size="10"></td>
                        <td><input type="text" id="A3" size="10"></td>
                        <td><input type="text" id="A4" size="10"></td>
                        <td><input type="text" id="A5" size="10"></td>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">A-</td>
                </div>
                        <td><input type="text" id="Am1" size="10"></td>
                        <td><input type="text" id="Am2" size="10"></td>
                        <td><input type="text" id="Am3"  size="10"></td>
                        <td><input type="text" id="Am4" size="10"></td>
                        <td><input type="text" id="Am5" size="10"></td>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">B+</td>
                </div>
                        <td><input type="text" id="Bp1" size="10"></td>
                        <td><input type="text" id="Bp2" size="10"></td>
                        <td><input type="text" id="Bp3" size="10"></td>
                        <td><input type="text" id="Bp4" size="10"></td>
                        <td><input type="text" id="Bp5" size="10"></td>
                </tr>
		<tr>
		<div id=sideLabels>
			<td align="left">B</td>
		</div>
                        <td><input type="text" id="B1" size="10"></td>
                        <td><input type="text" id="B2" size="10"></td>
                        <td><input type="text" id="B3" size="10"></td>
                        <td><input type="text" id="B4" size="10"></td>
                        <td><input type="text" id="B5" size="10"></td>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">B-</td>
                </div>
                        <td><input type="text" id="Bm1" size="10"></td>
                        <td><input type="text" id="Bm2" size="10"></td>
                        <td><input type="text" id="Bm3" size="10"></td>
                        <td><input type="text" id="Bm4" size="10"></td>
                        <td><input type="text" id="Bm5" size="10"></td> 
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">C+</td>
                </div>
                        <td><input type="text" id="Cp1" size="10"></td>
                        <td><input type="text" id="Cp2" size="10"></td>
                        <td><input type="text" id="Cp3" size="10"></td>
                        <td><input type="text" id="Cp4" size="10"></td>
                        <td><input type="text" id="Cp5" size="10"></td> 
                </tr>

		<tr>  
		<div id=sideLabels>  
                        <td align="left">C</td>			
		</div>
                        <td><input type="text" id="C1" size="10"></td>
                        <td><input type="text" id="C2" size="10"></td>
                        <td><input type="text" id="C3" size="10"></td>
                        <td><input type="text" id="C4" size="10"></td>
                        <td><input type="text" id="C5" size="10"></td> 
                </tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">C-</td>
                </div>
                        <td><input type="text" id="Cm1" size="10"></td>
                        <td><input type="text" id="Cm2" size="10"></td>
                        <td><input type="text" id="Cm3" size="10"></td>
                        <td><input type="text" id="Cm4" size="10"></td>
                        <td><input type="text" id="Cm5" size="10"></td>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">D+</td>
                </div>
                        <td><input type="text" id="Dp1" size="10"></td>
                        <td><input type="text" id="Dp2" size="10"></td>
                        <td><input type="text" id="Dp3" size="10"></td>
                        <td><input type="text" id="Dp4" size="10"></td>
                        <td><input type="text" id="Dp5" size="10"></td>
		</tr>
		<tr>  
		<div id=sideLabels>  
                        <td align="left">D</td>
		</div>
                        <td><input type="text" id="D1" size="10"></td>
                        <td><input type="text" id="D2" size="10"></td>
                        <td><input type="text" id="D3" size="10"></td>
                        <td><input type="text" id="D4" size="10"></td>
                        <td><input type="text" id="D5" size="10"></td>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">D-</td>
                </div>
                        <td><input type="text" id="Dm1" size="10"></td>
                        <td><input type="text" id="Dm2" size="10"></td>
                        <td><input type="text" id="Dm3" size="10"></td>
                        <td><input type="text" id="Dm4" size="10"></td>
                        <td><input type="text" id="Dm5" size="10"></td>
                </tr>


		<tr>    
		<div id=sideLabels>
                        <td align="left">F</td>
		</Div>
                        <td><input type="text" id="F1" size="10"></td>
                        <td><input type="text" id="F2" size="10"></td>
                        <td><input type="text" id="F3" size="10"></td>
                        <td><input type="text" id="F4" size="10"></td>
                        <td><input type="text" id="F5" size="10"></td>
                </tr>
	   </table>
	   <br><input type="button" onClick="calculateCollege()" value="Calculate!" style="font-size: 100%; height: 30px; width: 105px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px"><br>
           <div id=result>
	              <br>GPA&nbsp<input type="text" name="gpa" id="gpa" size="3" readonly>
		      <br>Units&nbsp<input type="text" name="units" id="units" size="3" readonly>
           </div>
	   <hr>

           <h4>GPA Grade Weights</h4>
	   <p>You can use our default GPA weights, select a specific university or customize for your university.</p>
	   <br><p>Click the button to select a specific UNIVERSITY.</p>
		<input type="radio" name="University" id="Stanford" value="Stanford" onclick="UniversityGPAWeights()" checked>Stanford
		<input type="radio" name="University" id="Harvard" value="Harvard" onclick="UniversityGPAWeights()">Harvard
		<input type="radio" name="University" id="Yale" value="Yale" onclick="UniversityGPAWeights()">Yale
		<input type="radio" name="University" id="UCLA" value="UCLA" onclick="UniversityGPAWeights()">UCLA
		<input type="radio" name="University" id="Defaults" value="Defaults" onclick="UniversityGPAWeights()">Defaults
           <table border="1">
 		<tr>
			<td> &nbsp A+ &nbsp <input type="text" id="Apval" value="4.3" size="3"></td>
			<td> &nbsp A &nbsp  <input type="text" id="Aval"  value="4" size="3"></td>
			<td> &nbsp A- &nbsp <input type="text" id="Amval" value="3.7" size="3"></td>
        	</tr><tr>
			<td> &nbsp B+ &nbsp <input type="text" id="Bpval" value="3.3" size="3"></td>
			<td> &nbsp B  &nbsp <input type="text" id="Bval"  value="3" size="3"></td>
			<td> &nbsp B- &nbsp <input type="text" id="Bmval" value="3.7" size="3"></td>
        	</tr><tr>
			<td> &nbsp C+ &nbsp <input type="text" id="Cpval" value="2.3" size="3"></td>
			<td> &nbsp C  &nbsp <input type="text" id="Cval"  value="2" size="3"></td>
			<td> &nbsp C- &nbsp <input type="text" id="Cmval" value="1.7" size="3"></td>
        	</tr><tr>
			<td> &nbsp D+ &nbsp <input type="text" id="Dpval" value="1.3" size="3"></td>
			<td> &nbsp D  &nbsp <input type="text" id="Dval"  value="1" size="3"></td>
			<td> &nbsp D- &nbsp <input type="text" id="Dmval" value="0.7" size="3"></td>
        	</tr><tr><td> &nbsp </td>
			<td> &nbsp F  &nbsp <input type="text" id="Fval"  value="0" size="3"></td><td></td>
        	</tr>
           </table>

	   </form>
     </div>
<?PHP include("footer.php"); ?>

<?php

function setVariables($Ap1,$Ap2,$Ap3,$Ap4,$Ap5,$A1,$A2,$A3,$A4,$A5,$Am1,$Am2,$Am3,$Am4,$Am5,$Bp1,$Bp2,$Bp3,$Bp4,$Bp5,$B1,$B2,$B3,$B4,$B5,$Bm1,$Bm2,$Bm3,$Bm4,$Bm5,$Cp1,$Cp2,$Cp3,$Cp4,$Cp5,$C1,$C2,$C3,$C4,$C5,$Cm1,$Cm2,$Cm3,$Cm4,$Cm5,$Dp1,$Dp2,$Dp3,$Dp4,$Dp5,$D1,$D2,$D3,$D4,$D5,$Dm1,$Dm2,$Dm3,$Dm4,$Dm5,$F1,$F2,$F3,$F4,$F5){

	 $Ap1 = (int)$_POST["Ap1"]; $Ap2 = (int)$_POST["Ap2"]; $Ap3 = (int)$_POST["Ap3"]; $Ap4 = (int)$_POST["Ap4"]; $Ap5 = (int)$_POST["Ap5"]; $A1 = (int)$_POST["A1"]; $A2 = (int)$_POST["A2"]; $A3 = (int)$_POST["A3"]; $A4 = (int)$_POST["A4"]; $A5 = (int)$_POST["A5"]; $Am1 = (int)$_POST["Am1"]; $Am2 = (int)$_POST["Am2"]; $Am3 = (int)$_POST["Am3"]; $Am4 = (int)$_POST["Am4"]; $Am5 = (int)$_POST["Am5"];

     $Bp1 = (int)$_POST["Bp1"]; $Bp2 = (int)$_POST["Bp2"]; $Bp3 = (int)$_POST["Bp3"]; $Bp4 = (int)$_POST["Bp4"]; $Bp5 = (int)$_POST["Bp5"]; $B1 = (int)$_POST["B1"]; $B2 = (int)$_POST["B2"]; $B3 = (int)$_POST["B3"]; $B4 = (int)$_POST["B4"]; $B5 = (int)$_POST["B5"]; $Bm1 = (int)$_POST["Bm1"]; $Bm2 = (int)$_POST["Bm2"]; $Bm3 = (int)$_POST["Bm3"]; $Bm4 = (int)$_POST["Bm4"]; if($_POST["Bm5"]!="")$Bm5 = (int)$_POST["Bm5"];

     $Cp1 = (int)$_POST["Cp1"]; $Cp2 = (int)$_POST["Cp2"]; $Cp3 = (int)$_POST["Cp3"]; $Cp4 = (int)$_POST["Cp4"]; $Cp5 = (int)$_POST["Cp5"]; $C1 = (int)$_POST["C1"]; $C2 = (int)$_POST["C2"]; $C3 = (int)$_POST["C3"]; $C4 = (int)$_POST["C4"]; $C5 = (int)$_POST["C5"]; $Cm1 = (int)$_POST["Cm1"]; $Cm2 = (int)$_POST["Cm2"]; $Cm3 = (int)$_POST["Cm3"]; $Cm4 = (int)$_POST["Cm4"]; $Cm5 = (int)$_POST["Cm5"];

     $Dp1 = (int)$_POST["Dp1"]; $Dp2 = (int)$_POST["Dp2"]; $Dp3 = (int)$_POST["Dp3"]; $Dp4 = (int)$_POST["Dp4"]; $Dp5 = (int)$_POST["Dp5"]; $D1 = (int)$_POST["D1"]; $D2 = (int)$_POST["D2"]; $D3 = (int)$_POST["D3"]; $D4 = (int)$_POST["D4"]; $D5 = (int)$_POST["D5"]; $Dm1 = (int)$_POST["Dm1"]; $Dm2 = (int)$_POST["Dm2"]; $Dm3 = (int)$_POST["Dm3"]; $Dm4 = (int)$_POST["Dm4"]; $Dm5 = (int)$_POST["Dm5"];

     $F1 = (int)$_POST["F1"]; $F2 = (int)$_POST["F2"]; $F3 = (int)$_POST["F3"]; $F4 = (int)$_POST["F4"]; $F5 = (int)$_POST["F5"];
}


function getVal($type){
         if($type == 'Apval')
                  if($_POST['Apval'] == '') return 4.3;
                  else return $_POST['Apval'];
         if($type == 'Aval')
                  if($_POST['Aval'] == '') return 4.0;
	          else return $_POST['Aval'];
	 if($type == 'Amval')
                  if($_POST['Amval'] == '') return 3.7;
		  else return $_POST['Amval'];


         if($type == 'Bpval')
                  if($_POST['Bpval'] == '') return 3.3;
                  else return $_POST['Bpval'];
         if($type == 'Bval')
                  if($_POST['Bval'] == '') return 3.0;
                  else return $_POST['Bval'];
         if($type == 'Bmval')
                  if($_POST['Bmval'] == '') return 2.7;
                  else return $_POST['Bmval'];


         if($type == 'Cpval')
                  if($_POST['Cpval'] == '') return 2.3;
                  else return $_POST['Cpval'];
         if($type == 'Cval')
                  if($_POST['Cval'] == '') return 2.0;
                  else return $_POST['Cval'];
         if($type == 'Cmval')
                  if($_POST['Cmval'] == '') return 1.7;
                  else return $_POST['Cmval'];


         if($type == 'Dpval')
                  if($_POST['Dpval'] == '') return 1.3;
                  else return $_POST['Dpval'];
         if($type == 'Dval')
                  if($_POST['Dval'] == '') return 1.0;
                  else return $_POST['Dval'];
         if($type == 'Dmval')
                  if($_POST['Dmval'] == '') return 0.7;
                  else return $_POST['Dmval'];


         if($type == 'Fval')
                  if($_POST['Fval'] == '') return 0.0;
                  else return $_POST['Fval'];
}
?>
