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

	 if($_POST['totalPossible'] == ''){
		$error = 1;
         }
	 if($_POST['yourPoints'] == ''){
		$error = 1;
         }
	 if($_POST['finalPoints'] == ''){
		$error = 1;
         }
	 if($_POST['desiredPercent'] == ''){
		$error = 1;
         }

	 if($error == 1) return;

	 $totalPossible = (double)$_POST["totalPossible"];
	 $yourPoints = (double)$_POST["yourPoints"];
	 $finalPoints = (double)$_POST['finalPoints'];
	 $desiredPercent = (double)$_POST['desiredPercent'];

	 $result = ($desiredPercent/100)*($totalPossible+$finalPoints)-$yourPoints;



	 if($result <= 0) echo "You got this no matter what!";
	 else if($result > $finalPoints) echo "Not a chance! ~ " . round($result,2) . " / " . $finalPoints . " ~ " . round($result/$finalPoints*100,2) . "%";
	 else echo $result . " / " . $finalPoints . " ~ " . round($result/$finalPoints*100,2) . "%";
	 
}

function setForm(){
	 echo '<br>Total Possible: <input type="text" value="'.$_POST['totalPossible'].'" name="totalPossible"><br><br><div id=error>'.setValue('totalPossible').'</div><br>';
	 echo 'Your Points: <input type="text" value="'.$_POST['yourPoints'].'" name="yourPoints"><br><br><div id=error>'.setValue('yourPoints').'</div><br>';
	 echo '<hr>';
	 echo '<br>Final Exam Points: <input type="text" value="'.$_POST['finalPoints'].'" name="finalPoints"><br><br><div id=error>'.setValue('finalPoints').'</div><br>';
	 echo 'Desired Percent in Class: <input type="text" value="'.$_POST['desiredPercent'].'" name="desiredPercent">%<br><br><div id=error>'.setValue('desiredPercent').'</div><br>';
	 echo '<hr>';
}

function setValue($type){
	 if($type == 'totalPossible')
                  if($_POST['totalPossible'] == '') return 'Enter the total points possible before the final.';
        if($type == 'yourPoints')
                 if($_POST['yourPoints'] == '') return 'Enter your points before the final.';
        if($type == 'finalPoints')
                 if($_POST['yourPoints'] == '') return 'Enter the total worth of the final exam in points.';
	if($type == 'desiredPercent')
                 if($_POST['desiredPercent'] == '') return 'Enter the desired percentage grade in the class.';

}

?>