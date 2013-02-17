<?PHP include("header.php"); ?>
<?PHP include("sidebar.php"); ?>
<?PHP include("calcLabels.php"); ?>
      <div id=pointPageText>
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
	 	echo "<br><br>Enter your current percentage in the class.";
		$error = 1;
	 }
	 if($_POST['finalPercent'] == ''){
		if($error != 1) echo "<br>";
		echo "<br>Enter the percentage weight of the final.";
		$error = 1;
         }
	 if($_POST['desiredPercent'] == ''){
		if($error != 1)	echo "<br>";
		echo "<br>Enter your desired percent in class.";
		$error = 1;
         }

	 if($error == 1) return;

	 $currentPercent = (double)$_POST["currentPercent"];
	 $finalPercent = (double)$_POST["finalPercent"];
	 $desiredPercent = (double)$_POST["desiredPercent"];

	 $result = ((($currentPercent/100)*(100-$finalPercent))-$desiredPercent)/(-$finalPercent);

	 echo ($result*100) . "%";
}

function setForm(){
	 echo 'Current Percent: <input type="text" value="'.$_POST['currentPercent'].'" name="currentPercent">%<br>';
	 echo 'Final Exam Percent: <input type="text" value="'.$_POST['finalPercent'].'" name="finalPercent">%<br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent">%<br>';
	 echo '<hr>';
}

?>