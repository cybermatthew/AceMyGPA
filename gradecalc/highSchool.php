<?PHP include("header.php"); ?>
<?PHP include("highSchoolCalcLabels.php"); ?>
      <div id=highSchoolForm>
      <form method="post" action="highSchool.php">
      	   <br><h1><b>College Grade Calculator</b></h1>
	   <p>Calculate your high school GPA by entering the number of clases you received a certain grade in and the number of units they were worth.  Then click enter or the Calculate! button and it will display your GPA.</p>
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
                        <?php echo '<td><input type="text" name="Apr" value="'.$_POST['Apr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Aph" value="'.$_POST['Aph'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Apa" value="'.$_POST['Apa'].'" size="10"></td>'; ?>
                </tr>
		<div id=sideLabels>
			<td align="left">A</td>
		</div>
                        <?php echo '<td><input type="text" name="Ar" value="'.$_POST['Ar'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ah" value="'.$_POST['Ah'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Aa" value="'.$_POST['Aa'].'" size="10"></td>'; ?>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">A-</td>
                </div>
                        <?php echo '<td><input type="text" name="Amr" value="'.$_POST['Amr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Amh" value="'.$_POST['Amh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ama" value="'.$_POST['Ama'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">B+</td>
                </div>
                        <?php echo '<td><input type="text" name="Bpr" value="'.$_POST['Bpr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bph" value="'.$_POST['Bph'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bpa" value="'.$_POST['Bpa'].'" size="10"></td>'; ?>
                </tr>
		<tr>
		<div id=sideLabels>
			<td align="left">B</td>
		</div>
                        <?php echo '<td><input type="text" name="Br" value="'.$_POST['Br'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bh" value="'.$_POST['Bh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ba" value="'.$_POST['Ba'].'" size="10"></td>'; ?>
		</tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">B-</td>
                </div>
                        <?php echo '<td><input type="text" name="Bmr" value="'.$_POST['Bmr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bmh" value="'.$_POST['Bmh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Bma" value="'.$_POST['Bma'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">C+</td>
                </div>
                        <?php echo '<td><input type="text" name="Cpr" value="'.$_POST['Cpr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cph" value="'.$_POST['Cph'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cpa" value="'.$_POST['Cpa'].'" size="10"></td>'; ?>
                </tr>

		<tr>  
		<div id=sideLabels>  
                        <td align="left">C</td>			
		</div>
                        <?php echo '<td><input type="text" name="Cr" value="'.$_POST['Cr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ch" value="'.$_POST['Ch'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Ca" value="'.$_POST['Ca'].'" size="10"></td>'; ?>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">C-</td>
                </div>
                        <?php echo '<td><input type="text" name="Cmr" value="'.$_POST['Cmr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cmh" value="'.$_POST['Cmh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Cma" value="'.$_POST['Cma'].'" size="10"></td>'; ?>
                </tr>

                <tr>
                <div id=sideLabels>
                        <td align="left">D+</td>
                </div>
                        <?php echo '<td><input type="text" name="Dpr" value="'.$_POST['Dpr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dph" value="'.$_POST['Dph'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dpa" value="'.$_POST['Dpa'].'" size="10"></td>'; ?>
		</tr>
		<tr>  
		<div id=sideLabels>  
                        <td align="left">D</td>
		</div>
                        <?php echo '<td><input type="text" name="Dr" value="'.$_POST['Dr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dh" value="'.$_POST['Dh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Da" value="'.$_POST['Da'].'" size="10"></td>'; ?>
                </tr>
                <tr>
                <div id=sideLabels>
                        <td align="left">D-</td>
                </div>
                        <?php echo '<td><input type="text" name="Dmr" value="'.$_POST['Dmr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dmh" value="'.$_POST['Dmh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Dma" value="'.$_POST['Dma'].'" size="10"></td>'; ?>
                </tr>


		<tr>    
		<div id=sideLabels>
                        <td align="left">F</td>
		</Div>
                        <?php echo '<td><input type="text" name="Fr" value="'.$_POST['Fr'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Fh" value="'.$_POST['Fh'].'" size="10"></td>'; ?>
                        <?php echo '<td><input type="text" name="Fa" value="'.$_POST['Fa'].'" size="10"></td>'; ?>
                </tr>
	   </table>
	   <input type="submit" value="Calculate!"><br>


           <div id=result>
	              GPA: <?php calculate() ?>
           </div>
	   <hr>

           <h4>GPA Grade Weights</h4>
	   <p>You can use our default GPA weights (see below) or you can customize them	for your university.</p>
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
 $Cpval=getVal('Cpval');  $Cval=getVal('Cpval');  $Cmval=getVal('Cmval');
 $Dpval=getVal('Dpval');  $Dval=getVal('Dval');  $Dmval=getVal('Dmval');
 $Fval=getVal('Fpval');

 $Apr=0; $Aph=0; $Apa=0;
 $Ar=0; $Ah=0; $Aa=0;
 $Amr=0; $Amh=0; $Ama=0;

 $Bpr=0; $Bph=0; $Bpa=0;
 $Br=0; $Bh=0; $Ba=0;
 $Bmr=0; $Bmh=0; $Bma=0;

 $Cpr=0; $Cph=0; $Cpa=0;
 $Cr=0; $Ch=0; $Ca=0;
 $Cmr=0; $Cmh=0; $Cma=0;

 $Dpr=0; $Dph=0; $Dpa=0;
 $Dr=0; $Dh=0; $Da=0;
 $Dmr=0; $Dmh=0; $Dma=0;

 $Fr=0; $Fh=0; $Fa=0;

	 setVariables(&$Apr,&$Aph,&$Apa,&$Ar,&$Ah,&$Aa,&$Amr,&$Amh,&$Ama,&$Bpr,&$Bph,&$Bpa,&$Br,&$Bh,&$Ba,&$Bmr,&$Bmh,&$Bma,&$Cpr,&$Cph,&$Cpa,&$Cr,&$Ch,&$Ca,&$Cmr,&$Cmh,&$Cma,&$Dpr,&$Dph,&$Dpa,&$Dr,&$Dh,&$Da,&$Dmr,&$Dmh,&$Dma,&$Fr,&$Fh,&$Fa);

	 $PtsTimesUnits = ($Apval*($Ap1+$Ap2+$Ap3+$Ap4+$Ap5))+($Aval*($A1+$A2+$A3+$A4+$A5))+($Amval*($Am1+$Am2+$Am3+$Am4+$Am5))+($Bpval*($Bp1+$Bp2+$Bp3+$Bp4+$Bp5))+($Bval*($B1+$B2+$B3+$B4+$B5))+($Bmval*($Bm1+$Bm2+$Bm3+$Bm4+$Bm5))+($Cpval*($Cp1+$Cp2+$Cp3+$Cp4+$Cp5))+($Cval*($C1+$C2+$C3+$C4+$C5))+($Cmval*($Cm1+$Cm2+$Cm3+$Cm4+$Cm5))+($Dpval*($Dp1+$Dp2+$Dp3+$Dp4+$Dp5))+($Dval*($D1+$D2+$D3+$D4+$D5))+($Dmval*($Dm1+$Dm2+$Dm3+$Dm4+$Dm5))+($Fval*($F1+$F2+$F3+$F4+$F5));

	$SumUnits = ($Ap1+$Ap2+$Ap3+$Ap4+$Ap5)+($A1+$A2+$A3+$A4+$A5)+($Am1+$Am2+$Am3+$Am4+$Am5)+($Bp1+$Bp2+$Bp3+$Bp4+$Bp5)+($B1+$B2+$B3+$B4+$B5)+($Bm1+$Bm2+$Bm3+$Bm4+$Bm5)+($Cp1+$Cp2+$Cp3+$Cp4+$Cp5)+($C1+$C2+$C3+$C4+$C5)+($Cm1+$Cm2+$Cm3+$Cm4+$Cm5)+($Dp1+$Dp2+$Dp3+$Dp4+$Dp5)+($D1+$D2+$D3+$D4+$D5)+($Dm1+$Dm2+$Dm3+$Dm4+$Dm5)+($F1+$F2+$F3+$F4+$F5);


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
                  if($_POST['C[val'] == '') return 2.3;
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