<?PHP include("signupHeader.php"); ?>
      <h3>Thank you for joining FindMyGPA!</h3>
      <h3>Soon you will be able to record your grades and track your GPA and In-Major GPA.</h3>

      <div id=signupForm>
      	         <form action="signup.php" method="post">
		       <?php echo 'Email:<input type="text" value="'.$_POST['email'].'" name="email">'; ?>
		       <br>
		       <label for="password">Password:</password><input type="password" name="password">
		       <br>
		       <label>&nbsp</label><input type="submit" value="Sign Me Up!">
		 </form>


      </div>
<?php
	include("storeNewAccount.php");

	if($_POST['email'] != '' && $_POST['password'] != '') getAccount($_POST['email'], $POST['password']);
	else echo '<div id=error>Missing required field(s).</div>';
?>

<?PHP include("footer.php"); ?>