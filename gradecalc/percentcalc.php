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
		echo "<div id=currentPercent>Enter your current percentage in the class.</div>";
		$error = 1;
	 }else{
		echo "<div id=invisibleCurrentPercent></div>";
	 }
	 if($_POST['finalPercent'] == ''){
		echo "<div id=finalPercent>Enter the percentage weight of the final.</div>";
		$error = 1;
         }else{
		echo "<div id=invisibleFinalPercent></div>";
	}
	 if($_POST['desiredPercent'] == ''){
		echo "<div id=desiredPercent>Enter your desired percent in class.</div>";
		$error = 1;
         }else{
		echo "<div id=invisibleDesiredPercent></div>";
	}

	 if($error == 1) return;

	 $currentPercent = (double)$_POST["currentPercent"];
	 $finalPercent = (double)$_POST["finalPercent"];
	 $desiredPercent = (double)$_POST["desiredPercent"];

	 $result = (-(($currentPercent/100)*(100-$finalPercent))+$desiredPercent)/($finalPercent);
	 echo "<div id=percentMessage>";
	 if($result <= 0) echo "You got this nomatter what!";
	 else if($result >1) echo "Not a chance! ~ ".($result*100)."%";
	 else echo ($result*100) . "%";
	 echo "</div>";
}

function setForm(){
	 echo 'Current Percent: <input type="text" value="'.$_POST['currentPercent'].'" name="currentPercent">%<br><br><br>';
	 echo 'Final Exam Percent: <input type="text" value="'.$_POST['finalPercent'].'" name="finalPercent">%<br><br><br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent">%<br><br><br>';
	 echo '<hr>';
}

?>