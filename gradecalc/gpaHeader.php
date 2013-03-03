<!DOCTYPE html>
<html>
  <head>
    <title>F mygpa</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="calculateCollege.js"></script>
    <script type = "text/javascript">

      function UniversityGPAWeights()
      {
      var Apval=0; var Aval=0; var Amval=0;
      var Bpval=0; var Bval=0; var Bmval=0;
      var Cpval=0; var Cval=0; var Cmval=0;
      var Dpval=0; var Dval=0; var Dmval=0;
      var Fval=0;


      var StanfordButton = document.getElementById("Stanford");
      var HarvardButton = document.getElementById("Harvard");
      var YaleButton = document.getElementById("Yale");
      var UCLAButton = document.getElementById("UCLA");
      var DefaultsButton = document.getElementById("Defaults");
      
      if(StanfordButton.checked){
      Apval = 4.3; Aval = 4.0; Amval = 3.7;
      Bpval = 3.3; Bval = 3.0; Bmval = 2.7;
      Cpval = 2.3; Cval = 2.0; Cmval = 1.7;
      Dpval = 1.3; Dval = 1.0; Dmval = 0.7;
      Fval = 0.0;
      }
      else if(HarvardButton.checked){
      Apval = 11; Aval = 12; Amval = 13;
      Bpval = 14; Bval = 15; Bmval = 16;
      Cpval = 17; Cval = 18; Cmval = 19;
      Dpval = 17; Dval = 18; Dmval = 19;
      Fval = 0.0;
      }
      else if(YaleButton.checked){
      Apval = 21; Aval = 22; Amval = 23;
      Bpval = 24; Bval = 25; Bmval = 26;
      Cpval = 27; Cval = 28; Cmval = 29;
      Dpval = 27; Dval = 28; Dmval = 29;
      Fval = 0.0;
      }
      else if(UCLAButton.checked){
      Apval = 31; Aval = 32; Amval = 33;
      Bpval = 34; Bval = 35; Bmval = 36;
      Cpval = 37; Cval = 38; Cmval = 39;
      Dpval = 37; Dval = 38; Dmval = 39;
      Fval = 0.0;
      }
      else if(DefaultsButton.checked){
      Apval = 4.3; Aval = 4.0; Amval = 3.7;
      Bpval = 3.3; Bval = 3.0; Bmval = 2.7;
      Cpval = 2.3; Cval = 2.0; Cmval = 1.7;
      Dpval = 1.3; Dval = 1.0; Dmval = 0.7;
      Fval = 0.0;
      }
      
      document.getElementById("Apval").value = Apval;
      document.getElementById("Aval").value = Aval;
      document.getElementById("Amval").value = Amval;
      document.getElementById("Bpval").value = Bpval;
      document.getElementById("Bval").value = Bval;
      document.getElementById("Bmval").value = Bmval;
      document.getElementById("Cpval").value = Cpval;
      document.getElementById("Cval").value = Cval;
      document.getElementById("Cmval").value = Cmval;
      document.getElementById("Dpval").value = Dpval;
      document.getElementById("Dval").value = Dval;
      document.getElementById("Dmval").value = Dmval;
      document.getElementById("Fval").value = Fval;
      }

      function ShowHide(buttonID,init_val,end_val, divId, divId2)
      {
      if(document.getElementById(divId).style.display == 'none')
      {
      document.getElementById(divId).style.display='block';
      
      document.getElementById(divId2).style.display='none';
      
      buttonID.value=init_val;
      }
      else
      {
      document.getElementById(divId).style.display = 'none';
      
      document.getElementById(divId2).style.display='block';
      
      buttonID.value=end_val;
      }
      }
    </script>
    
  </head>
  <body>
    <center>
      <div id=siteTitle align=center><a href="index.php"><img src="images/F.png" style="border-style:none"></div>
    <div id=wrap>
      <?PHP include("topbar.php"); ?>
      <div id=topPane>
	<br><a href="help.php">Help</a>
	 | 
	<a href="about.php">About</a>
	 | 
	<a href="faq.php">FAQ</a>
      </div>
      
