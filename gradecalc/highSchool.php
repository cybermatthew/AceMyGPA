<?PHP include("header.php"); ?>
<?PHP include("highSchoolCalcLabels.php"); ?>
      <div id=highSchoolForm>
      <form method="post" action="highSchool.php">
      	   <br><h1><b>High School Grade Calculator</b></h1>
	   <p>Calculate your high school GPA by entering the number of clases you received a certain grade in and the number of units they were worth.  Then click enter or the Calculate! button and it will display your GPA.</p>
      	   <table border="1">
		<tr>
		<div id=hsCalcTopLabels>
			<td></td>
			<td align="center">Regular</td>
			<td align="center">Honors</td>
			<td align="center">AP</td>
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
	              <?php calculate() ?>
           </div>
	   <hr>

           <h4>GPA Grade Weights</h4>
	   <p>You can use our default GPA weights or you can customize them	for your high school.</p>
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

	   <br><input type="hidden" name="honorsBump" value="False"/>
	   <input type="checkbox" name="honorsBump" value="True" <?php if($_POST['honorsBump'] == 'False') echo ''; else echo 'checked'?>>Extra point for honors classes?<br>
	   </form>
     </div>
<?PHP include("footer.php"); ?>

<?php

function calculate(){
 $Aprval=getVal('Apval');  $Arval=getVal('Aval');  $Amrval=getVal('Amval');
 $Bprval=getVal('Bpval');  $Brval=getVal('Bval');  $Bmrval=getVal('Bmval');
 $Cprval=getVal('Cpval');  $Crval=getVal('Cval');  $Cmrval=getVal('Cmval');
 $Dprval=getVal('Dpval');  $Drval=getVal('Dval');  $Dmrval=getVal('Dmval');
 $Frval=getVal('Fval');

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

 $Aphval=$Aprval; $Ahval=$Arval; $Amhval=$Amrval;
 $Bphval=$Bprval; $Bhval=$Brval; $Bmhval=$Bmrval;
 $Cphval=$Cprval; $Chval=$Crval; $Cmhval=$Cmrval;
 $Dphval=$Dprval; $Dhval=$Drval; $Dmhval=$Dmrval;
 $Fhval=$Frval;

 $Apaval=$Aprval+1; $Aaval=$Arval+1; $Amaval=$Amrval+1;
 $Bpaval=$Bprval+1; $Baval=$Brval+1; $Bmaval=$Bmrval+1;
 $Cpaval=$Cprval+1; $Caval=$Crval+1; $Cmaval=$Cmrval+1;
 $Dpaval=$Dprval+1; $Daval=$Drval+1; $Dmaval=$Dmrval+1;
 $Faval=$Frval+1;

	 setVariables(&$Apr,&$Aph,&$Apa,&$Ar,&$Ah,&$Aa,&$Amr,&$Amh,&$Ama,&$Bpr,&$Bph,&$Bpa,&$Br,&$Bh,&$Ba,&$Bmr,&$Bmh,&$Bma,&$Cpr,&$Cph,&$Cpa,&$Cr,&$Ch,&$Ca,&$Cmr,&$Cmh,&$Cma,&$Dpr,&$Dph,&$Dpa,&$Dr,&$Dh,&$Da,&$Dmr,&$Dmh,&$Dma,&$Fr,&$Fh,&$Fa);


	 $UnweightedTotal = ($Aprval*($Apr+$Aph+$Apa))+($Arval*($Ar+$Ah+$Aa))+($Amrval*($Amr+$Amh+$Ama))+($Bprval*($Bpr+$Bph+$Bpa))+($Brval*($Br+$Bh+$Ba))+($Bmrval*($Bmr+$Bmh+$Bma))+($Cprval*($Cpr+$Cph+$Cpa))+($Crval*($Cr+$Ch+$Ca))+($Cmrval*($Cmr+$Cmh+$Cma))+($Dprval*($Dpr+$Dph+$Dpa))+($Drval*($Dr+$Dh+$Da))+($Dmrval*($Dmr+$Dmh+$Dma))+($Frval*($Fr+$Fh+$Fa));

if($_POST['honorsBump'] == 'True'){
 $Aphval=$Aprval+1; $Ahval=$Arval+1; $Amhval=$Amrval+1;
 $Bphval=$Bprval+1; $Bhval=$Brval+1; $Bmhval=$Bmrval+1;
 $Cphval=$Cprval+1; $Chval=$Crval+1; $Cmhval=$Cmrval+1;
 $Dphval=$Dprval+1; $Dhval=$Drval+1; $Dmhval=$Dmrval+1;
 $Fhval=$Frval+1;
}


	$WeightedTotal = ($Aprval*$Apr+$Aphval*$Aph+$Apaval*$Apa)+($Bprval*$Bpr+$Bphval*$Bph+$Bpaval*$Bpa)+($Cprval*$Cpr+$Cphval*$Cph+$Cpaval*$Cpa)+($Dprval*$Dpr+$Dphval*$Dph+$Dpaval*$Dpa)+($Arval*$Ar+$Ahval*$Ah+$Aaval*$Aa)+($Brval*$Br+$Bhval*$Bh+$Baval*$Ba)+($Crval*$Cr+$Chval*$Ch+$Caval*$Ca)+($Drval*$Dr+$Dhval*$Dh+$Daval*$Da)+($Amrval*$Amr+$Amhval*$Amh+$Amaval*$Ama)+($Bmrval*$Bmr+$Bmhval*$Bmh+$Bmaval*$Bma)+($Cmrval*$Cmr+$Cmhval*$Cmh+$Cmaval*$Cma)+($Dmrval*$Dmr+$Dmhval*$Dmh+$Dmaval*$Dma)+($Frval*$Fr+$Fh+$Fa);


	$SumClasses = ($Apr+$Aph+$Apa)+($Ar+$Ah+$Aa)+($Amr+$Amh+$Ama)+($Bpr+$Bph+$Bpa)+($Br+$Bh+$Ba)+($Bmr+$Bmh+$Bma)+($Cpr+$Cph+$Cpa)+($Cr+$Ch+$Ca)+($Cmr+$Cmh+$Cma)+($Dpr+$Dph+$Dpa)+($Dr+$Dh+$Da)+($Dmr+$Dmh+$Dma)+($Fr+$Fh+$Fa);


	$UnweightedGPA = $UnweightedTotal/$SumClasses;
	$UnweightedGPA = round($UnweightedGPA, 2);

	$WeightedGPA = $WeightedTotal/$SumClasses;
	$WeightedGPA = round($WeightedGPA, 2);


	echo '<br>Unweighted GPA: '.$UnweightedGPA;
	echo '<br>Weighted GPA: '.$WeightedGPA;
}

function setVariables($Apr,$Aph,$Apa,$Ar,$Ah,$Aa,$Amr,$Amh,$Ama,$Bpr,$Bph,$Bpa,$Br,$Bh,$Ba,$Bmr,$Bmh,$Bma,$Cpr,$Cph,$Cpa,$Cr,$Ch,$Ca,$Cmr,$Cmh,$Cma,$Dpr,$Dph,$Dpa,$Dr,$Dh,$Da,$Dmr,$Dmh,$Dma,$Fr,$Fh,$Fa){

	 $Apr = (int)$_POST["Apr"]; $Aph = (int)$_POST["Aph"]; $Apa = (int)$_POST["Apa"];
	 $Ar = (int)$_POST["Ar"]; $Ah = (int)$_POST["Ah"]; $Aa = (int)$_POST["Aa"];
	 $Amr = (int)$_POST["Amr"]; $Amh = (int)$_POST["Amh"]; $Ama = (int)$_POST["Ama"];

	 $Bpr = (int)$_POST["Bpr"]; $Bph = (int)$_POST["Bph"]; $Bpa = (int)$_POST["Bpa"];
	 $Br = (int)$_POST["Br"]; $Bh = (int)$_POST["Bh"]; $Ba = (int)$_POST["Ba"];
	 $Bmr = (int)$_POST["Bmr"]; $Bmh = (int)$_POST["Bmh"]; $Bma = (int)$_POST["Bma"];

         $Cpr = (int)$_POST["Cpr"]; $Cph = (int)$_POST["Cph"]; $Cpa = (int)$_POST["Cpa"];
         $Cr = (int)$_POST["Cr"]; $Ch = (int)$_POST["Ch"]; $Ca = (int)$_POST["Ca"];
         $Cmr = (int)$_POST["Cmr"]; $Cmh = (int)$_POST["Cmh"]; $Cma = (int)$_POST["Cma"];

         $Dpr = (int)$_POST["Dpr"]; $Dph = (int)$_POST["Dph"]; $Dpa = (int)$_POST["Dpa"];
         $Dr = (int)$_POST["Dr"]; $Dh = (int)$_POST["Dh"]; $Da = (int)$_POST["Da"];
         $Dmr = (int)$_POST["Dmr"]; $Dmh = (int)$_POST["Dmh"]; $Dma = (int)$_POST["Dma"];

         $Fr = (int)$_POST["Fr"]; $Fh = (int)$_POST["Fh"]; $Fa = (int)$_POST["Fa"];
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