<?PHP include("header.php"); ?>
<?PHP include("sidebar.php"); ?>
<?PHP include("calcLabels.php"); ?>
      <div id=pointPageText>
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

	 if($_POST['totalPossible'] == ''){
	 	echo "<br>Enter the total points possible.";
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

	 $totalPossible = $_POST["totalPossible"];
	 $yourPoints = $_POST["yourPoints"];
	 $finalPoints = $_POST['finalPoints'];
	 $desiredPercent = $_POST['desiredPercent'];

	 echo $totalPossible;
}

function setForm(){
	 echo 'Total Possible: <input type="text" value="'.$_POST['totalPossible'].'" name="totalPossible"><br>';
	 echo 'Your Points: <input type="text" value="'.$_POST['yourPoints'].'" name="yourPoints"><br>';
	 echo '<hr>';
	 echo 'Final Exam Points: <input type="text" value="'.$_POST['finalPoints'].'" name="finalPoints"><br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent"><br>';
	 echo '<hr>';
}

?>