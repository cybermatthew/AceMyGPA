<?PHP include("header.php"); ?>
      <div id=collegeForm>
      	   <form method="post" action="college.php">
      	   <table border="1">
		<tr>
		<div id=topLabels>
			<td></td>
			<td>1 Unit</td>
			<td>2 Units</td>
			<td>3 Units</td>
			<td>4 Units</td>
			<td>5 Units</td>
		</div>
		</tr>
		<tr>
		<div id=sideLabels>
                        <td>A+</td>
                </div>
                        <td><input type="text" name="Ap1" size="10"></td>
                        <td><input type="text" name="Ap2" size="10"></td>
                        <td><input type="text" name="Ap3" size="10"></td>
                        <td><input type="text" name="Ap4" size="10"></td>
                        <td><input type="text" name="Ap5" size="10"></td>
                </tr>
		<div id=sideLabels>
			<td>A</td>
		</div>
			<td><input type="text" name="A1" size="10"></td>
			<td><input type="text" name="A2" size="10"></td>
			<td><input type="text" name="A3" size="10"></td>
			<td><input type="text" name="A4" size="10"></td>
			<td><input type="text" name="A5" size="10"></td>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td>A-</td>
                </div>
                        <td><input type="text" name="Am1" size="10"></td>
                        <td><input type="text" name="Am2" size="10"></td>
                        <td><input type="text" name="Am3" size="10"></td>
                        <td><input type="text" name="Am4" size="10"></td>
                        <td><input type="text" name="Am5" size="10"></td>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td>B+</td>
                </div>
                        <td><input type="text" name="Bp1" size="10"></td>
                        <td><input type="text" name="Bp2" size="10"></td>
                        <td><input type="text" name="Bp3" size="10"></td>
                        <td><input type="text" name="Bp4" size="10"></td>
                        <td><input type="text" name="Bp5" size="10"></td>
                </tr>
		<tr>
		<div id=sideLabels>
			<td>B</td>
		</div>
		      	<td><input type="text" name="B1" size="10"></td>
			<td><input type="text" name="B2" size="10"></td>
			<td><input type="text" name="B3" size="10"></td>
			<td><input type="text" name="B4" size="10"></td>
			<td><input type="text" name="B5" size="10"></td>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td>B-</td>
                </div>
                        <td><input type="text" name="Bm1" size="10"></td>
                        <td><input type="text" name="Bm2" size="10"></td>
                        <td><input type="text" name="Bm3" size="10"></td>
                        <td><input type="text" name="Bm4" size="10"></td>
                        <td><input type="text" name="Bm5" size="10"></td>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td>C+</td>
                </div>
                        <td><input type="text" name="Cp1" size="10"></td>
                        <td><input type="text" name="Cp2" size="10"></td>
                        <td><input type="text" name="Cp3" size="10"></td>
                        <td><input type="text" name="Cp4" size="10"></td>
                        <td><input type="text" name="Cp5" size="10"></td>
                </tr>

		<tr>  
		<div id=sideLabels>  
                        <td>C</td>			
		</div>
			<td><input type="text" name="C1" size="10"></td>
			<td><input type="text" name="C2" size="10"></td>
			<td><input type="text" name="C3" size="10"></td>
			<td><input type="text" name="C4" size="10"></td>
			<td><input type="text" name="C5" size="10"></td>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td>C-</td>
                </div>
                        <td><input type="text" name="Cm1" size="10"></td>
                        <td><input type="text" name="Cm2" size="10"></td>
                        <td><input type="text" name="Cm3" size="10"></td>
                        <td><input type="text" name="Cm4" size="10"></td>
                        <td><input type="text" name="Cm5" size="10"></td>
                </tr>

		<tr>  
		<div id=sideLabels>  
                        <td>D</td>
		</div>
			<td><input type="text" name="D1" size="10"></td>
			<td><input type="text" name="D2" size="10"></td>
			<td><input type="text" name="D3" size="10"></td>
			<td><input type="text" name="D4" size="10"></td>
			<td><input type="text" name="D5" size="10"></td>
                </tr>

		<tr>    
		<div id=sideLabels>
                        <td>F</td>
		</Div>
			<td><input type="text" name="F1" size="10"></td>
			<td><input type="text" name="F2" size="10"></td>
			<td><input type="text" name="F3" size="10"></td>
			<td><input type="text" name="F4" size="10"></td>
			<td><input type="text" name="F5" size="10"></td>
                </tr>
	   </table>
	   <input type="submit" value="Calculate!">
	   </form>

	   <div id=result>
	   GPA: <?php calculate() ?>
	   </div>
     </div>
<?PHP include("footer.php"); ?>

<?php

function calculate(){
	 $Ap1=0; $Ap2=0; $Ap3=0; $Ap4=0; $Ap5=0;
	 $A1=0; $A2=0; $A3=0; $A4=0; $A5=0;
	 $A1=0; $Am2=0; $Am3=0; $Am4=0; $Am5=0;
	 
	 $Bp1=0; $Bp2=0; $Bp3=0; $Bp4=0; $Bp5=0;
	 $B1=0; $B2=0; $B3=0; $B4=0; $B5=0;
	 $Bm1=0; $Bm2=0; $Bm3=0; $Bm4=0; $Bm5=0;

	 $Cp1=0; $Cp2=0; $Cp3=0; $Cp4=0; $Cp5=0;
	 $C1=0; $C2=0; $C3=0; $C4=0; $C5=0;
	 $Cm1=0; $Cm2=0; $Cm3=0; $Cm4=0; $Cm5=0;

	 $D1=0; $D2=0; $D3=0; $D4=0; $D5=0;

	 $F1=0; $F2=0; $F3=0; $F4=0; $F5=0;


	 setVariables(&$Ap1,&$Ap2,&$Ap3,&$Ap4,&$Ap5,&$A1,&$A2,&$A3,&$A4,&$A5,&$Am1,&$Am2,&$Am3,&$Am4,&$Am5,&$Bp1,&$Bp2,&$Bp3,&$Bp4,&$Bp5,&$B1,&$B2,&$B3,&$B4,&$B5,&$Bm1,&$Bm2,&$Bm3,&$Bm4,&$Bm5,&$Cp1,&$Cp2,&$Cp3,&$Cp4,&$Cp5,&$C1,&$C2,&$C3,&$C4,&$C5,&$Cm1,&$Cm2,&$Cm3,&$Cm4,&$Cm5,&$D1,&$D2,&$D3,&$D4,&$D5,&$F1,&$F2,&$F3,&$F4,&$F5);

}

function setVariables($Ap1,$Ap2,$Ap3,$Ap4,$Ap5,$A1,$A2,$A3,$A4,$A5,$Am1,$Am2,$Am3,$Am4,$Am5,$Bp1,$Bp2,$Bp3,$Bp4,$Bp5,$B1,$B2,$B3,$B4,$B5,$Bm1,$Bm2,$Bm3,$Bm4,$Bm,$Cp1,$Cp2,$Cp3,$Cp4,$Cp5,$C1,$C2,$C3,$C4,$C5,$Cm1,$Cm2,$Cm3,$Cm4,$Cm5,$D1,$D2,$D3,$D4,$D5,$F1,$F2,$F3,$F4,$F5){

	$Ap1 = (int)$_POST["Ap1"]; $Ap2 = (int)$_POST[“Ap2”]; $Ap3 = (int)$_POST[“Ap3”]; $Ap4 = (int)$_POST[“Ap4”]; $Ap5 = (int)$_POST[“Ap5”];
$A1 = (int)$_POST[“A1”]; $A2 = (int)$_POST[“A2”]; $A3 = (int)$_POST[“A3”]; $A4 = (int)$_POST[“A4”]; $A5 = (int)$_POST[“A5”];
 $Am1 = (int)$_POST[“Am1”]; $Am2 = (int)$_POST[“Am2”]; $Am3 = (int)$_POST[“Am3”]; $Am4 = (int)$_POST[“Am4”]; $Am5 = (int)$_POST[“Am5”];

      $Bp1 = (int)$_POST["Bp1"]; $Bp2 = (int)$_POST[“Bp2”]; $Bp3 = (int)$_POST[“Bp3”]; $Bp4 = (int)$_POST[“Bp4”]; $Bp5 = (int)$_POST[“Bp5”];
$B1 = (int)$_POST[“B1”]; $B2 = (int)$_POST[“B2”]; $B3 = (int)$_POST[“B3”]; $B4 = (int)$_POST[“B4”]; $B5 = (int)$_POST[“B5”];
 $Bm1 = (int)$_POST[“Bm1”]; $Bm2 = (int)$_POST[“Bm2”]; $Bm3 = (int)$_POST[“Bm3”]; $Bm4 = (int)$_POST[“Bm4”]; $Bm5 = (int)$_POST[“Bm5”];

      $Cp1 = (int)$_POST["Cp1"]; $Cp2 = (int)$_POST[“Cp2”]; $Cp3 = (int)$_POST[“Cp3”]; $Cp4 = (int)$_POST[“Cp4”]; $Cp5 = (int)$_POST[“Cp5”];
$C1 = (int)$_POST[“C1”]; $C2 = (int)$_POST[“C2”]; $C3 = (int)$_POST[“C3”]; $C4 = (int)$_POST[“C4”]; $C5 = (int)$_POST[“C5”];
 $Cm1 = (int)$_POST[“Cm1”]; $Cm2 = (int)$_POST[“Cm2”]; $Cm3 = (int)$_POST[“Cm3”]; $Cm4 = (int)$_POST[“Cm4”]; $Cm5 = (int)$_POST[“Cm5”];

      $D1 = (int)$_POST[“D1”]; $D2 = (int)$_POST[“D2”]; $D3 = (int)$_POST[“D3”]; $D4 = (int)$_POST[“D4”]; $D5 = (int)$_POST[“D5”];

      $F1 = (int)$_POST[“F1”]; $F2 = (int)$_POST[“F2”]; $F3 = (int)$_POST[“F3”]; $F4 = (int)$_POST[“F4”]; $F5 = (int)$_POST[“F5”];

}
?>