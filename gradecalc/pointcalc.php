<?PHP include("header.php"); ?>
<?PHP include("sidebar.php"); ?>
<?PHP include("calcLabels.php"); ?>
      <div id=pointPageText>
      	   <form action="pointcalc.php" method="post">
	   	  Total Possible: <input type="text" name="totalPossible"><br>
	  	  Your Points: <input type="text" name="yourPoints"><br> 
		  <hr>
	   	  Final Exam Points: <input type="text" name="finalPoints"><br>
	   	  Desired Percent in Class: <input type="text" name="desiredPercent"><br>     	   
	   	  <hr>
	   	  <input type="submit" value="Calculate!">
	   </form>
	   <p>Necessary Grade on Final<br>
	   	Points: <?php calculate(); ?>
	  </p>
      </div>
<?PHP include("footer.php"); ?>

<?php
function calculate(){
	 echo "<br>";
	 if($_POST['totalPossible'] == ''){
	 	echo "<br>Enter the total points possible.";
	 }
	 if($_POST['yourPoints'] == ''){
                echo "<br>Enter your points.";
         }
	 if($_POST['finalPoints'] == ''){
                echo "<br>Enter the total worth of the final exam in points.";
         }
	 if($_POST['desiredPercent'] == ''){
                echo "<br>Enter the desired percentage grade in the class.";
         }
}