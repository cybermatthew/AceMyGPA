<?PHP include("header.php"); ?>
<?PHP include("collegeCalcLabels.php"); ?>
      <div id=collegeForm>
      <form method="post" action="college.php">
      	   <br><h1><b>College Grade Calculator</b></h1>
	   <p>Calculate your college GPA by entering the number of clases you received a certain grade in and the number of units they were worth.  Then click enter or the Calculate! button and it will display your GPA.</p>
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
                        <td align="left">A+</td>
                </div>
                        <?php echo '<td><input type="text" name="Ap1" value="'.$_POST['Ap1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap2" value="'.$_POST['Ap2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap3" value="'.$_POST['Ap3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap4" value="'.$_POST['Ap4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ap5" value="'.$_POST['Ap5'].'" size="10"></td>'; ?>
                </tr>
		<div id=sideLabels>
			<td align="left">A</td>
		</div>
			<?php echo '<td><input type="text" name="A1" value="'.$_POST['A1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A2" value="'.$_POST['A2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A3" value="'.$_POST['A3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A4" value="'.$_POST['A4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="A5" value="'.$_POST['A5'].'" size="10"></td>'; ?>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">A-</td>
                </div>
                        <?php echo '<td><input type="text" name="Am1" value="'.$_POST['Am1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am2" value="'.$_POST['Am2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am3" value="'.$_POST['Am3'].'"  size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am4" value="'.$_POST['Am4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Am5" value="'.$_POST['Am5'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">B+</td>
                </div>
                        <?php echo '<td><input type="text" name="Bp1" value="'.$_POST['Bp1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp2" value="'.$_POST['Bp2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp3" value="'.$_POST['Bp3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp4" value="'.$_POST['Bp4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bp5" value="'.$_POST['Bp5'].'" size="10"></td>'; ?>
                </tr>
		<tr>
		<div id=sideLabels>
			<td align="left">B</td>
		</div>
		      	<?php echo '<td><input type="text" name="B1" value="'.$_POST['B1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B2" value="'.$_POST['B2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B3" value="'.$_POST['B3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B4" value="'.$_POST['B4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="B5" value="'.$_POST['B5'].'" size="10"></td>'; ?>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">B-</td>
                </div>
                        <?php echo '<td><input type="text" name="Bm1" value="'.$_POST['Bm1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm2" value="'.$_POST['Bm2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm3" value="'.$_POST['Bm3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm4" value="'.$_POST['Bm4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bm5" value="'.$_POST['Bm5'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">C+</td>
                </div>
                        <?php echo '<td><input type="text" name="Cp1" value="'.$_POST['Cp1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp2" value="'.$_POST['Cp2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp3" value="'.$_POST['Cp3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp4" value="'.$_POST['Cp4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cp5" value="'.$_POST['Cp5'].'" size="10"></td>'; ?>
                </tr>

		<tr>  
		<div id=sideLabels>  
                        <td align="left">C</td>			
		</div>
			<?php echo '<td><input type="text" name="C1" value="'.$_POST['C1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C2" value="'.$_POST['C2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C3" value="'.$_POST['C3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C4" value="'.$_POST['C4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="C5" value="'.$_POST['C5'].'" size="10"></td>'; ?>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">C-</td>
                </div>
                        <?php echo '<td><input type="text" name="Cm1" value="'.$_POST['Cm1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm2" value="'.$_POST['Cm2'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm3" value="'.$_POST['Cm3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm4" value="'.$_POST['Cm4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cm5" value="'.$_POST['Cm5'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">D+</td>
                </div>
                        <?php echo '<td><input type="text" name="Dp1" value="'.$_POST['Dp1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dp2" value="'.$_POST['Dp2'].'" size="10"></td>'; ?>
	     		<?php echo '<td><input type="text" name="Dp3" value="'.$_POST['Dp3'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dp4" value="'.$_POST['Dp4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dp5" value="'.$_POST['Dp5'].'" size="10"></td>'; ?>
		</tr>
		<tr>  
		<div id=sideLabels>  
                        <td align="left">D</td>
		</div>
			<?php echo '<td><input type="text" name="D1" value="'.$_POST['D1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="D2" value="'.$_POST['D2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="D3" value="'.$_POST['D3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="D4" value="'.$_POST['D4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="D5" value="'.$_POST['D5'].'" size="10"></td>'; ?>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">D-</td>
                </div>
                        <?php echo '<td><input type="text" name="Dm1" value="'.$_POST['Dm1'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dm2" value="'.$_POST['Dm2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="Dm3" value="'.$_POST['Dm3'].'" size="10"></td>'; ?>
   		        <?php echo '<td><input type="text" name="Dm4" value="'.$_POST['Dm4'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dm5" value="'.$_POST['Dm5'].'" size="10"></td>'; ?>
                </tr>


		<tr>    
		<div id=sideLabels>
                        <td align="left">F</td>
		</Div>
			<?php echo '<td><input type="text" name="F1" value="'.$_POST['F1'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="F2" value="'.$_POST['F2'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="F3" value="'.$_POST['F3'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="F4" value="'.$_POST['F4'].'" size="10"></td>'; ?>
			<?php echo '<td><input type="text" name="F5" value="'.$_POST['F5'].'" size="10"></td>'; ?>
                </tr>
	   </table>
	   <input type="submit" value="Calculate!"><br>


           <div id=result>
	              <br>GPA: <?php calculate() ?>
           </div>
	   <hr>

           <h4>GPA Grade Weights</h4>
	   <p>You can use our default GPA weights or you can customize them	for your university.</p>
           <table border="1">
           <tr>
                <td>A+<?php echo '<input type="text" name="Apval" value="'.getVal('Apval').'" size="10">'; ?></td>
                <td>A<?php echo '<input type="text" name="Aval" value="'.getVal('Aval').'" size="10">'; ?></td>
                <td>A-<?php echo '<input type="text" name="Amval" value="'.getVal('Amval').'" size="10">'; ?></td>
        </tr><tr>
                <td>B+<?php echo '<input type="text" name="Bpval" value="'.getVal('Bpval').'" size="10">'; ?></td>
                <td>B<?php echo '<input type="text" name="Bval" value="'.getVal('Bval').'" size="10">'; ?></td>
                <td>B-<?php echo '<input type="text" name="Bmval" value="'.getVal('Bmval').'" size="10">'; ?></td>
        </tr><tr>
                <td>C+<?php echo '<input type="text" name="Cpval" value="'.getVal('Cpval').'" size="10">'; ?></td>
                <td>C<?php echo '<input type="text" name="Cval" value="'.getVal('Cval').'" size="10">'; ?></td>
                <td>C-<?php echo '<input type="text" name="Cmval" value="'.getVal('Cmval').'" size="10">'; ?></td>
        </tr><tr>
                <td>D+<?php echo '<input type="text" name="Dpval" value="'.getVal('Dpval').'" size="10">'; ?></td>
                <td>D<?php echo '<input type="text" name="Dval" value="'.getVal('Dval').'" size="10">'; ?></td>
                <td>D-<?php echo '<input type="text" name="Dmval" value="'.getVal('Dmval').'" size="10">'; ?></td>
        </tr><tr><td></td>
                <td>F<?php echo '<input type="text" name="Fval" value="'.getVal('Fval').'" size="10">'; ?></td><td></td>
        </tr>
           </table>

	   </form>
     </div>
<?PHP include("footer.php"); ?>

<?php

function calculate(){
 $Apval=getVal('Apval');  $Aval=getVal('Aval');  $Amval=getVal('Amval');
 $Bpval=getVal('Bpval');  $Bval=getVal('Bval');  $Bmval=getVal('Bmval');
 $Cpval=getVal('Cpval');  $Cval=getVal('Cval');  $Cmval=getVal('Cmval');
 $Dpval=getVal('Dpval');  $Dval=getVal('Dval');  $Dmval=getVal('Dmval');
 $Fval=getVal('Fval');

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

	 $PtsTimesUnits = ($Apval*($Ap1+2*$Ap2+3*$Ap3+4*$Ap4+5*$Ap5))+($Aval*($A1+2*$A2+3*$A3+4*$A4+5*$A5))+($Amval*($Am1+2*$Am2+3*$Am3+4*$Am4+5*$Am5))+($Bpval*($Bp1+2*$Bp2+3*$Bp3+4*$Bp4+5*$Bp5))+($Bval*($B1+2*$B2+3*$B3+4*$B4+5*$B5))+($Bmval*($Bm1+2*$Bm2+3*$Bm3+4*$Bm4+5*$Bm5))+($Cpval*($Cp1+2*$Cp2+3*$Cp3+4*$Cp4+5*$Cp5))+($Cval*($C1+2*$C2+3*$C3+4*$C4+5*$C5))+($Cmval*($Cm1+2*$Cm2+3*$Cm3+4*$Cm4+5*$Cm5))+($Dpval*($Dp1+2*$Dp2+3*$Dp3+4*$Dp4+5*$Dp5))+($Dval*($D1+2*$D2+3*$D3+4*$D4+5*$D5))+($Dmval*($Dm1+2*$Dm2+3*$Dm3+4*$Dm4+5*$Dm5))+($Fval*($F1+2*$F2+3*$F3+4*$F4+5*$F5));

	$SumUnits = ($Ap1+2*$Ap2+3*$Ap3+4*$Ap4+5*$Ap5)+($A1+2*$A2+3*$A3+4*$A4+5*$A5)+($Am1+2*$Am2+3*$Am3+4*$Am4+5*$Am5)+($Bp1+2*$Bp2+3*$Bp3+4*$Bp4+5*$Bp5)+($B1+2*$B2+3*$B3+4*$B4+5*$B5)+($Bm1+2*$Bm2+3*$Bm3+4*$Bm4+5*$Bm5)+($Cp1+2*$Cp2+3*$Cp3+4*$Cp4+5*$Cp5)+($C1+2*$C2+3*$C3+4*$C4+5*$C5)+($Cm1+2*$Cm2+3*$Cm3+4*$Cm4+5*$Cm5)+($Dp1+2*$Dp2+3*$Dp3+4*$Dp4+5*$Dp5)+($D1+2*$D2+3*$D3+4*$D4+5*$D5)+($Dm1+2*$Dm2+3*$Dm3+4*$Dm4+5*$Dm5)+($F1+2*$F2+3*$F3+4*$F4+5*$F5);


	$GPA = $PtsTimesUnits/$SumUnits;
	$GPA = round($GPA, 2);
	echo $GPA;
}

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