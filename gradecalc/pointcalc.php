<?PHP include("header.php"); ?>
<?PHP include("pointsCalcLabels.php"); ?>
      <div id=calcPageText>
      	   <form action="pointcalc.php" method="post">
	   	  <?php setForm(); ?>
	   	  <input type="submit" value="Calculate!">
	   </form>
	   <p>Necessary Grade on Final<br>
	   	Points: <?php calculate(); ?>
	  </p>
      </div>
<?PHP include("footer.php"); ?>

<?php
function calculate(){
	 $error = 0;

	 echo "<div id=errors>";

	 if($_POST['totalPossible'] == ''){
	 	echo "<div id=totalPossible>Enter the total points possible before the final.</div>";
		$error = 1;
	 }else{
                echo "<div id=invisibleTotalPossible></div>";
         }
	 if($_POST['yourPoints'] == ''){
		echo "<div id=yourPoints>Enter your points before the final.</div>";
		$error = 1;
         }else{
                echo "<div id=invisibleYourPoints></div>";
         }
	 if($_POST['finalPoints'] == ''){
		echo "<div id=finalPoints>Enter the total worth of the final exam in points.</div>";
		$error = 1;
         }else{
                echo "<div id=invisibleFinalPoints></div>";
         }
	 if($_POST['desiredPercent'] == ''){
		echo "<div id=desiredPts>Enter the desired percentage grade in the class.</div>";
		$error = 1;
         }else{
                echo "<div id=invisibleDesiredPts></div>";
         }

	 echo "</div>";

	 if($error == 1) return;

	 $totalPossible = (double)$_POST["totalPossible"];
	 $yourPoints = (double)$_POST["yourPoints"];
	 $finalPoints = (double)$_POST['finalPoints'];
	 $desiredPercent = (double)$_POST['desiredPercent'];

	 $result = ($desiredPercent/100)*($totalPossible+$finalPoints)-$yourPoints;

	 echo "<div id=pointMessage>";

	 if($result <= 0) echo "You got this nomatter what!";
	 else if($result > $finalPoints) echo "Not a chance! ~ " . $result . " / " . $finalPoints . " ~ " . ($result/$finalPoints*100) . "%";
	 else echo $result . " / " . $finalPoints . " ~ " . ($result/$finalPoints*100) . "%";
	 
	 echo "</div>";
}

function setForm(){
	 echo 'Total Possible: <input type="text" value="'.$_POST['totalPossible'].'" name="totalPossible"><br><br><br>';
	 echo 'Your Points: <input type="text" value="'.$_POST['yourPoints'].'" name="yourPoints"><br><br>';
	 echo '<hr>';
	 echo 'Final Exam Points: <input type="text" value="'.$_POST['finalPoints'].'" name="finalPoints"><br><br><br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent">%<br><br>';
	 echo '<hr>';
}

?>