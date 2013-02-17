<?PHP include("header.php"); ?>
<?PHP include("sidebar.php"); ?>
<?PHP include("calcLabels.php"); ?>
      <div id=pointPageText>
      	   <form action="pointcalc.php" method="post">
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

	 if($_POST['totalPossible'] == ''){
	 	echo "<br><br>Enter the total points possible.";
		$error = 1;
	 }
	 if($_POST['yourPoints'] == ''){
		if($error != 1) echo "<br>";
		echo "<br>Enter your points.";
		$error = 1;
         }
	 if($_POST['finalPoints'] == ''){
		if($error != 1)	echo "<br>";
		echo "<br>Enter the total worth of the final exam in points.";
		$error = 1;
         }
	 if($_POST['desiredPercent'] == ''){
		if($error != 1)	echo "<br>";
		echo "<br>Enter the desired percentage grade in the class.";
		$error = 1;
         }

	 if($error == 1) return;

	 $totalPossible = (double)$_POST["totalPossible"];
	 $yourPoints = (double)$_POST["yourPoints"];
	 $finalPoints = (double)$_POST['finalPoints'];
	 $desiredPercent = (double)$_POST['desiredPercent'];

	 $result = ($desiredPercent/100)*($totalPossible+$finalPoints)-$yourPoints;

	 echo $result . " / " . $finalPoints . " ~ " . ($result/$finalPoints*100) . "%";
}

function setForm(){
	 echo 'Current Percent: <input type="text" value="'.$_POST['currentPercent'].'" name="currentPercent">%<br>';
	 echo 'Final Exam Percent: <input type="text" value="'.$_POST['fnalPercent'].'" name="finalPercent">%<br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent">%<br>';
	 echo '<hr>';
}

?>