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
                        <?php echo '<td><input type="text" name="Ap1" value="'.$_POST['Ap1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap2" value="'.$_POST['Ap2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap3" value="'.$_POST['Ap3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap4" value="'.$_POST['Ap4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap5" value="'.$_POST['Ap5'].'" size="10"></td>'; ?>
                </tr>
		<div id=sideLabels>
			<td>A</td>
		</div>
			<?php echo '<td><input type="text" name="A1" value="'.$_POST['A1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A2" value="'.$_POST['A2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A3" value="'.$_POST['A3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A4" value="'.$_POST['A4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A5" value="'.$_POST['A5'].'" size="10"></td>'; ?>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td>A-</td>
                </div>
                        <?php echo '<td><input type="text" name="Am1" value="'.$_POST['Am1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am2" value="'.$_POST['Am2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am3" value="'.$_POST['Am3'].'"  size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am4" value="'.$_POST['Am4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am5" value="'.$_POST['Am5'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td>B+</td>
                </div>
                        <?php echo '<td><input type="text" name="Bp1" value="'.$_POST['Bp1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp2" value="'.$_POST['Bp2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp3" value="'.$_POST['Bp3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp4" value="'.$_POST['Bp4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp5" value="'.$_POST['Bp5'].'" size="10"></td>'; ?>
                </tr>
		<tr>
		<div id=sideLabels>
			<td>B</td>
		</div>
		      	<?php echo '<td><input type="text" name="B1" value="'.$_POST['B1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B2" value="'.$_POST['B2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B3" value="'.$_POST['B3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B4" value="'.$_POST['B4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B5" value="'.$_POST['B5'].'" size="10"></td>'; ?>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td>B-</td>
                </div>
                        <?php echo '<td><input type="text" name="Bm1" value="'.$_POST['Bm1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm2" value="'.$_POST['Bm2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm3" value="'.$_POST['Bm3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm4" value="'.$_POST['Bm4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm5" value="'.$_POST['Bm5'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td>C+</td>
                </div>
                        <?php echo '<td><input type="text" name="Cp1" value="'.$_POST['Cp1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp2" value="'.$_POST['Cp2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp3" value="'.$_POST['Cp3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp4" value="'.$_POST['Cp4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp5" value="'.$_POST['Cp5'].'" size="10"></td>'; ?>
                </tr>

		<tr>  
		<div id=sideLabels>  
                        <td>C</td>			
		</div>
			<?php echo '<td><input type="text" name="C1" value="'.$_POST['C1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C2" value="'.$_POST['C2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C3" value="'.$_POST['C3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C4" value="'.$_POST['C4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C5" value="'.$_POST['C5'].'" size="10"></td>'; ?>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td>C-</td>
                </div>
                        <?php echo '<td><input type="text" name="Cm1" value="'.$_POST['Cm1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm2" value="'.$_POST['Cm2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm3" value="'.$_POST['Cm3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm4" value="'.$_POST['Cm4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm5" value="'.$_POST['Cm5'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td>D+</td>
                </div>
                        <td><input type="text" name="Dp1" size="10"></td>
                        <td><input type="text" name="Dp2" size="10"></td>
	     		<td><input type="text" name="Dp3" size="10"></td>
                        <td><input type="text" name="Dp4" size="10"></td>
                        <td><input type="text" name="Dp5" size="10"></td>
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
                        <td>D-</td>
                </div>
                        <td><input type="text" name="Dm1" size="10"></td>
                        <td><input type="text" name="Dm2" size="10"></td>
			<td><input type="text" name="Dm3" size="10"></td>
   		        <td><input type="text" name="Dm4" size="10"></td>
                        <td><input type="text" name="Dm5" size="10"></td>
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
 $Apval=4.3;  $Aval=4.0;  $Amval=3.7;
 $Bpval=3.3;  $Bval=3.0;  $Bmval=2.7;
 $Cpval=2.3;  $Bval=3.0;  $Bmval=2.7;
 $Dpval=1.3;  $Dval=1.0;  $Dmval=0.7;
 $Fval = 0.0;

 $Ap1=0;  $Ap2=0;  $Ap3=0;  $Ap4=0;  $Ap5=0;
 $A1=0;  $A2=0;  $A3=0;  $A4=0;  $A5=0;
 $A1=0;  $Am2=0;  $Am3=0;  $Am4=0;  $Am5=0;

 $Bp1=0;  $Bp2=0;  $Bp3=0;  $Bp4=0;  $Bp5=0;
 $B1=0;  $B2=0;  $B3=0;  $B4=0;  $B5=0;
 $Bm1=0;  $Bm2=0;  $Bm3=0;  $Bm4=0;  $Bm5=0;

 $Cp1=0;  $Cp2=0;  $Cp3=0;  $Cp4=0;  $Cp5=0;
 $C1=0;  $C2=0;  $C3=0;  $C4=0;  $C5=0;
 $Cm1=0;  $Cm2=0;  $Cm3=0;  $Cm4=0;  $Cm5=0;

 $Dp1=0;  $Dp2=0;  $Dp3=0;  $Dp4=0;  $Dp5=0;
 $D1=0;  $D2=0;  $D3=0;  $D4=0;  $D5=0;
 $Dm1=0;  $Dm2=0;  $Dm3=0;  $Dm4=0;  $Dm5=0;

 $F1=0;  $F2=0;  $F3=0;  $F4=0;  $F5=0;

	 setVariables(&$Ap1,&$Ap2,&$Ap3,&$Ap4,&$Ap5,&$A1,&$A2,&$A3,&$A4,&$A5,&$Am1,&$Am2,&$Am3,&$Am4,&$Am5,&$Bp1,&$Bp2,&$Bp3,&$Bp4,&$Bp5,&$B1,&$B2,&$B3,&$B4,&$B5,&$Bm1,&$Bm2,&$Bm3,&$Bm4,&$Bm5,&$Cp1,&$Cp2,&$Cp3,&$Cp4,&$Cp5,&$C1,&$C2,&$C3,&$C4,&$C5,&$Cm1,&$Cm2,&$Cm3,&$Cm4,&$Cm5,&$Dp1,&$Dp2,&$Dp3,&$Dp4,&$Dp5,&$D1,&$D2,&$D3,&$D4,&$D5,&$Dm1,&$Dm2,&$Dm3,&$Dm4,&$Dm5,&$F1,&$F2,&$F3,&$F4,&$F5);

	 $PtsTimesUnits = ($Apval*($Ap1+$Ap2+$Ap3+$Ap4+$Ap5))+($Aval*($A1+$A2+$A3+$A4+$A5))+($Amval*($Am1+$Am2+$Am3+$Am4+$Am5))+($Bpval*($Bp1+$Bp2+$Bp3+$Bp4+$Bp5))+($Bval*($B1+$B2+$B3+$B4+$B5))+($Bmval*($Bm1+$Bm2+$Bm3+$Bm4+$Bm5))+($Cpval*($Cp1+$Cp2+$Cp3+$Cp4+$Cp5))+($Cval*($C1+$C2+$C3+$C4+$C5))+($Cmval*($Cm1+$Cm2+$Cm3+$Cm4+$Cm5))+($Dpval*($Dp1+$Dp2+$Dp3+$Dp4+$Dp5))+($Dval*($D1+$D2+$D3+$D4+$D5))+($Dmval*($Dm1+$Dm2+$Dm3+$Dm4+$Dm5))+($Fval*($F1+$F2+$F3+$F4+$F5));

	$SumUnits = ($Ap1+$Ap2+$Ap3+$Ap4+$Ap5)+($A1+$A2+$A3+$A4+$A5)+($Am1+$Am2+$Am3+$Am4+$Am5)+($Bp1+$Bp2+$Bp3+$Bp4+$Bp5)+($B1+$B2+$B3+$B4+$B5)+($Bm1+$Bm2+$Bm3+$Bm4+$Bm5)+($Cp1+$Cp2+$Cp3+$Cp4+$Cp5)+($C1+$C2+$C3+$C4+$C5)+($Cm1+$Cm2+$Cm3+$Cm4+$Cm5)+($Dp1+$Dp2+$Dp3+$Dp4+$Dp5)+($D1+$D2+$D3+$D4+$D5)+($Dm1+$Dm2+$Dm3+$Dm4+$Dm5)+($F1+$F2+$F3+$F4+$F5);


	$GPA = $PtsTimesUnits/$SumUnits;

	echo $GPA;
}

function setVariables($Ap1,$Ap2,$Ap3,$Ap4,$Ap5,$A1,$A2,$A3,$A4,$A5,$Am1,$Am2,$Am3,$Am4,$Am5,$Bp1,$Bp2,$Bp3,$Bp4,$Bp5,$B1,$B2,$B3,$B4,$B5,$Bm1,$Bm2,$Bm3,$Bm4,$Bm5,$Cp1,$Cp2,$Cp3,$Cp4,$Cp5,$C1,$C2,$C3,$C4,$C5,$Cm1,$Cm2,$Cm3,$Cm4,$Cm5,$Dp1,$Dp2,$Dp3,$Dp4,$Dp5,$D1,$D2,$D3,$D4,$D5,$Dm1,$Dm2,$Dm3,$Dm4,$Dm5,$F1,$F2,$F3,$F4,$F5){

	 $Ap1 = (int)$_POST["Ap1"]; $Ap2 = (int)$_POST["Ap2"]; $Ap3 = (int)$_POST["Ap3"]; $Ap4 = (int)$_POST["Ap4"]; $Ap5 = (int)$_POST["Ap5"]; $A1 = (int)$_POST["A1"]; $A2 = (int)$_POST["A2"]; $A3 = (int)$_POST["A3"]; $A4 = (int)$_POST["A4"]; $A5 = (int)$_POST["A5"]; $Am1 = (int)$_POST["Am1"]; $Am2 = (int)$_POST["Am2"]; $Am3 = (int)$_POST["Am3"]; $Am4 = (int)$_POST["Am4"]; $Am5 = (int)$_POST["Am5"];

     $Bp1 = (int)$_POST["Bp1"]; $Bp2 = (int)$_POST["Bp2"]; $Bp3 = (int)$_POST["Bp3"]; $Bp4 = (int)$_POST["Bp4"]; $Bp5 = (int)$_POST["Bp5"]; $B1 = (int)$_POST["B1"]; $B2 = (int)$_POST["B2"]; $B3 = (int)$_POST["B3"]; $B4 = (int)$_POST["B4"]; $B5 = (int)$_POST["B5"]; $Bm1 = (int)$_POST["Bm1"]; $Bm2 = (int)$_POST["Bm2"]; $Bm3 = (int)$_POST["Bm3"]; $Bm4 = (int)$_POST["Bm4"]; if($_POST["Bm5"]!="")$Bm5 = (int)$_POST["Bm5"];

     $Cp1 = (int)$_POST["Cp1"]; $Cp2 = (int)$_POST["Cp2"]; $Cp3 = (int)$_POST["Cp3"]; $Cp4 = (int)$_POST["Cp4"]; $Cp5 = (int)$_POST["Cp5"]; $C1 = (int)$_POST["C1"]; $C2 = (int)$_POST["C2"]; $C3 = (int)$_POST["C3"]; $C4 = (int)$_POST["C4"]; $C5 = (int)$_POST["C5"]; $Cm1 = (int)$_POST["Cm1"]; $Cm2 = (int)$_POST["Cm2"]; $Cm3 = (int)$_POST["Cm3"]; $Cm4 = (int)$_POST["Cm4"]; $Cm5 = (int)$_POST["Cm5"];

     $Dp1 = (int)$_POST["Dp1"]; $Dp2 = (int)$_POST["Dp2"]; $Dp3 = (int)$_POST["Dp3"]; $Dp4 = (int)$_POST["Dp4"]; $Dp5 = (int)$_POST["Dp5"]; $D1 = (int)$_POST["D1"]; $D2 = (int)$_POST["D2"]; $D3 = (int)$_POST["D3"]; $D4 = (int)$_POST["D4"]; $D5 = (int)$_POST["D5"]; $Dm1 = (int)$_POST["Dm1"]; $Dm2 = (int)$_POST["Dm2"]; $Dm3 = (int)$_POST["Dm3"]; $Dm4 = (int)$_POST["Dm4"]; $Dm5 = (int)$_POST["Dm5"];

     $F1 = (int)$_POST["F1"]; $F2 = (int)$_POST["F2"]; $F3 = (int)$_POST["F3"]; $F4 = (int)$_POST["F4"]; $F5 = (int)$_POST["F5"];

}
?>