<?PHP include("header.php"); ?>
<?PHP include("percentCalcLabels.php"); ?>
      <div id=calcPageText>
      	   <form action="percentcalc.php" method="post">
	   	  <?php setForm(); ?>
	   	  <input type="submit" value="Calculate!">
	   </form>
	   <p>
		Necessary Percent on Final: <?php calculate(); ?>
	  </p>
      </div>
<?PHP include("footer.php"); ?>

<?php
function calculate(){
	 $error = 0;

	 if($_POST['currentPercent'] == ''){
		$error = 1;
	 }
	 if($_POST['finalPercent'] == ''){
		$error = 1;
         }
	 if($_POST['desiredPercent'] == ''){
		$error = 1;
         }

	 if($error == 1) return;

	 $currentPercent = (double)$_POST["currentPercent"];
	 $finalPercent = (double)$_POST["finalPercent"];
	 $desiredPercent = (double)$_POST["desiredPercent"];

	 $result = (-(($currentPercent/100)*(100-$finalPercent))+$desiredPercent)/($finalPercent);



	 if($result <= 0) echo "You got this no matter what!";
	 else if($result >1) echo "Not a chance! ~ ".round($result*100,2)."%";
	 else echo round($result*100,2) . "%";


}

function setForm(){
	 echo 'Current Percent: <input type="text" value="'.$_POST['currentPercent'].'" name="currentPercent">%<br><br><div id=error>'.setValue('currentPercent').'</div><br>';
	 echo 'Final Exam Percent: <input type="text" value="'.$_POST['finalPercent'].'" name="finalPercent">%<br><br><div id=error>'.setValue('finalPercent').'</div><br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent">%<br><br><div id=error>'.setValue('desiredPercent').'</div><br>';
	 echo '<hr>';
}

function setValue($type){
	 if($type == 'currentPercent')
	 	  if($_POST['currentPercent'] == '') return 'Enter your current percentage in the class.';
	if($type == 'finalPercent')
		 if($_POST['finalPercent'] == '') return 'Enter the percentage weight of the final.';
	if($type == 'desiredPercent')		 
		 if($_POST['desiredPercent'] == '') return 'Enter your desired percent in class.';
}

?>