<!DOCTYPE html>
<html>
  <head>
  
<!-- START OF PERCENTAGE JAVASCRIPT -->  

<script language="JavaScript">

	// START OF EXAMPLE SECTION
	
	var PercentDataArray = new Array();
    var PercentFeasibilityMessage;
    var PointsFeasibilityMessage;

	var clicked = 0;

	var Example_clicked = 0;

	function Store_Data(percent_data1, percent_data2, percent_data3, percent_data4,PercentWarning1,PercentWarning2,PercentWarning3,PercentWarning4,TypePage,HiddenPercentageExample1)
	{
		clicked = 1; // disable the calc button
		
		document.getElementById(TypePage).innerHTML='Final Exam Calculator by Percentage - <u>EXAMPLE</u> -';
		
		document.getElementById(HiddenPercentageExample1).style.display = 'block';
		
		document.getElementById("Calculate").value = "Exit Example";

		document.getElementById("ExampleButton").value = "Exit Example";

		PercentDataArray[0] = document.getElementById(percent_data1).value;
		
		document.getElementById(percent_data1).disabled = true;
		
		PercentDataArray[1] = document.getElementById(percent_data2).value;
		
		document.getElementById(percent_data2).disabled = true;
		
		PercentDataArray[2] = document.getElementById(percent_data3).value;
		
		document.getElementById(percent_data3).disabled = true;
		
		PercentDataArray[3] = document.getElementById(percent_data4).value;
		
        PercentFeasibilityMessage = document.getElementById("DetermineFeasibilityPercentage").innerHTML;
        document.getElementById("DetermineFeasibilityPercentage").innerHTML = "";
        
		document.getElementById(percent_data4).disabled = true;

		
		document.getElementById(percent_data1).value = "92.75";
		document.getElementById(percent_data2).value = "30";
		document.getElementById(percent_data3).value = "90";
		document.getElementById(percent_data4).value = "83.58";

		document.getElementById(PercentWarning1).innerHTML = '&nbsp';
		document.getElementById(PercentWarning2).innerHTML = '&nbsp';
		document.getElementById(PercentWarning3).innerHTML = '&nbsp';
		document.getElementById(PercentWarning4).innerHTML = '&nbsp';
		
	}

	function Fill_Data(percent_data1, percent_data2, percent_data3, percent_data4,TypePage,HiddenPercentageExample1)
	{
		clicked = 0; // reset the calc button
		
		document.getElementById(TypePage).innerHTML='Final Exam Calculator by Percentage';
		
		document.getElementById(HiddenPercentageExample1).style.display = 'none';

		document.getElementById("Calculate").value = "Calculate!";

		document.getElementById("ExampleButton").value = "Click to See An Example";

		document.getElementById(percent_data1).value = PercentDataArray[0];
		
		document.getElementById(percent_data1).disabled = false;
		
		document.getElementById(percent_data2).value = PercentDataArray[1];
		
		document.getElementById(percent_data2).disabled = false;
		
		document.getElementById(percent_data3).value = PercentDataArray[2];
		
		document.getElementById(percent_data3).disabled = false;
		
		document.getElementById(percent_data4).value = PercentDataArray[3];
		
		document.getElementById(percent_data4).disabled = false;
        
        document.getElementById("DetermineFeasibilityPercentage").innerHTML = PercentFeasibilityMessage;

	}

	function Example_Switch(percent_data1, percent_data2, percent_data3, percent_data4,PercentWarning1,PercentWarning2,PercentWarning3,PercentWarning4,TypePage, HiddenPercentageExample1)
	{
		if (clicked == 0)
		{
			Store_Data(percent_data1, percent_data2, percent_data3, percent_data4, PercentWarning1, PercentWarning2, PercentWarning3, PercentWarning4, TypePage, HiddenPercentageExample1);
		}
		else
		{
			Fill_Data(percent_data1, percent_data2, percent_data3, percent_data4, TypePage, HiddenPercentageExample1);
		}
	}

	function Calculate_Necessary_Grade_On_Final_From_Percentages(CurrentPercentage, FinalExamPercentage, DesiredPercentage, NecessaryResultsFromPercentage, PercentFeasibility, PercentWarning1, PercentWarning2, PercentWarning3,TypePage,HiddenPercentageExample1)
	{
		if (clicked == 0)
		{
			Calculate_Grade(CurrentPercentage, FinalExamPercentage, DesiredPercentage, NecessaryResultsFromPercentage, PercentFeasibility, PercentWarning1, PercentWarning2, PercentWarning3,TypePage,HiddenPercentageExample1);
		}
		else
		{
			Fill_Data(CurrentPercentage, FinalExamPercentage, DesiredPercentage, NecessaryResultsFromPercentage,TypePage,HiddenPercentageExample1);
		}
	}
	// END OF EXAMPLE SECTION


	// COMPUTE THE GRADE ON FINAL EXAM
	function Calculate_Grade(CurrentPercentage, FinalExamPercentage, DesiredPercentage, NecessaryResultsFromPercentage, PercentFeasibility, PercentWarning1, PercentWarning2, PercentWarning3)
	  {
		var cell1 = document.getElementById(CurrentPercentage).value;
		
		var cell2 = document.getElementById(FinalExamPercentage).value;
		
		var cell3 = document.getElementById(DesiredPercentage).value;
		

		document.getElementById(PercentWarning1).innerHTML = '&nbsp';
		document.getElementById(PercentWarning2).innerHTML = '&nbsp';
		document.getElementById(PercentWarning3).innerHTML = '&nbsp';	

		
	// START OF ERROR CHECKING SECTION
		if( document.getElementById(CurrentPercentage).value <= 0  || document.getElementById(CurrentPercentage).value > 100 || document.getElementById(FinalExamPercentage).value <= 0  || document.getElementById(FinalExamPercentage).value > 100  || document.getElementById(DesiredPercentage).value <= 0 || document.getElementById(DesiredPercentage).value > 100 )
		{
			document.getElementById(NecessaryResultsFromPercentage).value = '';
			document.getElementById(PercentFeasibility).value = "";
		
					if( document.getElementById(CurrentPercentage).value < 0 )
						{
						document.getElementById(PercentWarning1).innerHTML = "WARNING: Current Percentage cannot be negative";
						}
					else if ( document.getElementById(CurrentPercentage).value ==  0 )
						{
						document.getElementById(PercentWarning1).innerHTML = "WARNING: Current Percentage cannot be zero or blank";
						}
					else if (document.getElementById(CurrentPercentage).value > 100)
						{
						document.getElementById(PercentWarning1).innerHTML = "WARNING: Current Percentage cannot greater than 100%";
						}
					else {document.getElementById(PercentWarning1).innerHTML = '&nbsp';}

					
					if( document.getElementById(FinalExamPercentage).value < 0 )
						{
						document.getElementById(PercentWarning2).innerHTML = "WARNING: Final Exam Percent cannot be negative";
						}
					else if (document.getElementById(FinalExamPercentage).value == 0)
						{
						document.getElementById(PercentWarning2).innerHTML = "WARNING: Final Exam Percent cannot zero or blank";
						}
					else if (document.getElementById(FinalExamPercentage).value > 100)
						{
						document.getElementById(PercentWarning2).innerHTML = "WARNING: Final Exam Percent cannot greater than 100%";
						}
					else {document.getElementById(PercentWarning2).innerHTML = '&nbsp';}

					
					if( document.getElementById(DesiredPercentage).value < 0 )
						{
						document.getElementById(PercentWarning3).innerHTML = "WARNING: Percent Desired cannot be negative";
						}
					else if ( document.getElementById(DesiredPercentage).value ==  0 )
						{
						document.getElementById(PercentWarning3).innerHTML = "WARNING: Percent Desired cannot be zero or blank";
						}
					else if (document.getElementById(DesiredPercentage).value > 100)
						{
						document.getElementById(PercentWarning3).innerHTML = "WARNING: Percent Desired cannot greater than 100%";
						}
					else {document.getElementById(PercentWarning3).innerHTML = '&nbsp';}

			document.getElementById(NecessaryResultsFromPercentage).value = '';
			return;
		}	
	// END OF ERROR CHECKING SECTION


	// ACTUAL COMPUTATION	
		document.getElementById(NecessaryResultsFromPercentage).value = ((Math.round(((( cell3 - ( cell1 *(100 - cell2 ))/100)/ cell2 ) * 100) *100))/100) ;

		if( ((Math.round(((( cell3 - ( cell1 * (100 - cell2 )) / 100)/ cell2 ) * 100) *100))/100) > 100 )
		{
		document.getElementById(PercentFeasibility).innerHTML = "Final Exam Grade is not feasible since it is greater than 100%!";
		}
        else if( ((Math.round(((( cell3 - ( cell1 * (100 - cell2 )) / 100)/ cell2 ) * 100) *100))/100) <= 0 ){
            document.getElementById(PercentFeasibility).innerHTML = "You can get a "+document.getElementById(DesiredPercentage).value+"% in the class no matter what!";
        }
		else
		{
		document.getElementById(PercentFeasibility).innerHTML = '&nbsp';
		}
	// END OF ACTUAL COMPUTATION	
		
	 }
	 
	// END OF COMPUTE THE GRADE ON FINAL EXAM
</script>
	 
<!-- END OF PERCENTAGE JAVASCRIPT --> 






<!-- START OF POINTS JAVASCRIPT -->  

	<script type = "text/javascript">
		// START OF EXAMPLE SECTION

		var PointsDataArray = new Array();

		var clicked = 0;

		function Store_Points_Data(points_data1, points_data2, points_data3, points_data4, points_data5, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, PointsWarning5, TypePage, HiddenPointsExample1)
		{
			clicked = 1; // disable the calc button
			
			document.getElementById(TypePage).innerHTML='Final Exam Calculator by Points - <u>EXAMPLE</u>';
			
			document.getElementById(HiddenPointsExample1).style.display = 'block';
			
			document.getElementById("CalculatePoints").value = "Exit Example";

			document.getElementById("ExamplePointsButton").value = "Exit Example";

			PointsDataArray[0] = document.getElementById(points_data1).value;
			
			document.getElementById(points_data1).disabled = true;
			
			PointsDataArray[1] = document.getElementById(points_data2).value;
			
			document.getElementById(points_data2).disabled = true;
			
			PointsDataArray[2] = document.getElementById(points_data3).value;
			
			document.getElementById(points_data3).disabled = true;
			
			PointsDataArray[3] = document.getElementById(points_data4).value;
			
			document.getElementById(points_data4).disabled = true;

			PointsDataArray[4] = document.getElementById(points_data5).value;
			
            PointsFeasibilityMessage = document.getElementById("DetermineFeasibilityPoints").innerHTML;
            document.getElementById("DetermineFeasibilityPoints").innerHTML = "";
            
			document.getElementById(points_data5).disabled = true;

			
			document.getElementById(points_data1).value = "800";
			document.getElementById(points_data2).value = "725";
			document.getElementById(points_data3).value = "200";
			document.getElementById(points_data4).value = "90";
			document.getElementById(points_data5).value = "175";

			document.getElementById(PointsWarning1).innerHTML = '&nbsp';
			document.getElementById(PointsWarning2).innerHTML = '&nbsp';
			document.getElementById(PointsWarning3).innerHTML = '&nbsp';
			document.getElementById(PointsWarning4).innerHTML = '&nbsp';
			document.getElementById(PointsWarning5).innerHTML = '&nbsp';
			
		}


		function Fill_Points_Data(points_data1, points_data2, points_data3, points_data4, points_data5, TypePage, HiddenPointsExample1)
		{
			document.bgColor = "white";
			
			clicked = 0; // reset the calc button
			
			document.getElementById(TypePage).innerHTML='Final Exam Calculator by Points';
			
			document.getElementById(HiddenPointsExample1).style.display = 'none';

			document.getElementById("CalculatePoints").value = "Calculate!";

			document.getElementById("ExamplePointsButton").value = "Click to See An Example";

			document.getElementById(points_data1).value = PointsDataArray[0];
			
			document.getElementById(points_data1).disabled = false;
			
			document.getElementById(points_data2).value = PointsDataArray[1];
			
			document.getElementById(points_data2).disabled = false;
			
			document.getElementById(points_data3).value = PointsDataArray[2];
			
			document.getElementById(points_data3).disabled = false;
			
			document.getElementById(points_data4).value = PointsDataArray[3];
			
			document.getElementById(points_data4).disabled = false;

			document.getElementById(points_data5).value = PointsDataArray[4];
			
			document.getElementById(points_data5).disabled = false;
            
            document.getElementById("DetermineFeasibilityPoints").innerHTML = PointsFeasibilityMessage;
		}



		function Example_Points_Switch(points_data1, points_data2, points_data3, points_data4, points_data5, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, PointsWarning5, TypePage, HiddenPointsExample1)
		{
			if (clicked == 0)
			{
				Store_Points_Data(points_data1, points_data2, points_data3, points_data4, points_data5, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, PointsWarning5, TypePage, HiddenPointsExample1);
			}
			else
			{
				Fill_Points_Data(points_data1, points_data2, points_data3, points_data4, points_data5, TypePage,HiddenPointsExample1);
			}
		}

		function Calculate_Necessary_Grade_On_Final_From_Points(TotalPointsPossible, YourPointsToDate, FinalExamPoints, DesiredPercentageInClass, NecessaryResultsFromPoints, PointsFeasibility, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, TypePage, HiddenPointsExample1)
		{
			if (clicked == 0)
			{
				Calculate_Points_Grade(TotalPointsPossible, YourPointsToDate, FinalExamPoints, DesiredPercentageInClass, NecessaryResultsFromPoints, PointsFeasibility, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, TypePage, HiddenPointsExample1);
			}
			else
			{
				Fill_Points_Data(TotalPointsPossible, YourPointsToDate, FinalExamPoints, DesiredPercentageInClass, NecessaryResultsFromPoints, TypePage, HiddenPointsExample1);
			}
		}
		// END OF EXAMPLE SECTION

	</script>



	<script type = "text/javascript">
		  function Calculate_Points_Grade(TotalPointsPossible, YourPointsToDate, FinalExamPoints, DesiredPercentageInClass, NecessaryResultsFromPoints, PointsFeasibility, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4)
		  {
			var cellA = document.getElementById(TotalPointsPossible).value;
			
			var cellB = document.getElementById(YourPointsToDate).value;
			
			var cellC = document.getElementById(FinalExamPoints).value;
			
			var cellD = document.getElementById(DesiredPercentageInClass).value;
			
			document.getElementById(PointsWarning1).innerHTML = '&nbsp';
			document.getElementById(PointsWarning2).innerHTML = '&nbsp';
			document.getElementById(PointsWarning3).innerHTML = '&nbsp';
			document.getElementById(PointsWarning4).innerHTML = '&nbsp';


		// START OF ERROR CHECKING SECTION
			if( document.getElementById(TotalPointsPossible).value <= 0 || document.getElementById(YourPointsToDate).value <= 0  || document.getElementById(YourPointsToDate).value > document.getElementById(TotalPointsPossible).value || document.getElementById(FinalExamPoints).value <= 0  || document.getElementById(DesiredPercentageInClass).value <= 0 || document.getElementById(DesiredPercentageInClass).value > 100 )
			{
				document.getElementById(NecessaryResultsFromPoints).value = '';
				document.getElementById(PointsFeasibility).innerHTML = "";
			
						if( document.getElementById(TotalPointsPossible).value < 0 )
							{
							document.getElementById(PointsWarning1).innerHTML = "WARNING: Total Points Possible cannot be negative";
							}
						else if ( document.getElementById(TotalPointsPossible).value ==  0 )
							{
							document.getElementById(PointsWarning1).innerHTML = "WARNING: Total Points Possible cannot be zero or blank";
							}
						else {document.getElementById(PointsWarning1).innerHTML = "";}

						
						if( document.getElementById(YourPointsToDate).value < 0 )
							{
							document.getElementById(PointsWarning2).innerHTML = "WARNING: Your Total Points cannot be negative";
							}
						else if (document.getElementById(YourPointsToDate).value == 0)
							{
							document.getElementById(PointsWarning2).innerHTML = "WARNING: Your Total Points cannot be zero or blank";
							}
					/*	else if (document.getElementById(YourPointsToDate).value > document.getElementById(TotalPointsPossible).value)
							{
							document.getElementById(PointsWarning2).innerHTML = "WARNING: Your Total Points Before Final cannot be greater than the Total Points Possible Before Final";
							}*/
						else {document.getElementById(PointsWarning2).value = "";}
						
						

						
						if( document.getElementById(FinalExamPoints).value < 0 )
							{
							document.getElementById(PointsWarning3).innerHTML = "WARNING: Final Exam Points cannot be negative";
							}
						else if ( document.getElementById(FinalExamPoints).value ==  0 )
							{
							document.getElementById(PointsWarning3).innerHTML = "WARNING: Final Exam Points cannot be zero or blank";
							}
						else {document.getElementById(PointsWarning3).innerHTML = "";}

						
						if( document.getElementById(DesiredPercentageInClass).value < 0 )
							{
							document.getElementById(PointsWarning4).innerHTML = "WARNING: Percent Desired cannot be negative";
							}
						else if ( document.getElementById(DesiredPercentageInClass).value ==  0 )
							{
							document.getElementById(PointsWarning4).innerHTML = "WARNING: Percent Desired cannot be zero or blank";
							}
						else if (document.getElementById(DesiredPercentageInClass).value > 100)
							{
							document.getElementById(PointsWarning4).innerHTML = "WARNING: Percent Desired cannot greater than 100%";
							}
							else {document.getElementById(PointsWarning4).innerHTML = "";}

				document.getElementById(NecessaryResultsFromPoints).value = '';
				return;
			}	
		// END OF ERROR CHECKING SECTION


		// ACTUAL COMPUTATION	
			document.getElementById(NecessaryResultsFromPoints).value  =  ((Math.round(((((parseFloat(cellA) + parseFloat(cellC)) * parseFloat(cellD)) / 100) - parseFloat(cellB)) *100))/100) ;

			if( ((Math.round(((((parseFloat(cellA) + parseFloat(cellC)) * parseFloat(cellD)) / 100) - parseFloat(cellB)) *100))/100) > document.getElementById(FinalExamPoints).value)
			{
			document.getElementById(PointsFeasibility).innerHTML = document.getElementById(NecessaryResultsFromPoints).value +" on the final exam is not feasible since it is greater than the Final Exam Points Value of " + document.getElementById(FinalExamPoints).value;
			}
			else if( ((Math.round(((((parseFloat(cellA) + parseFloat(cellC)) * parseFloat(cellD)) / 100) - parseFloat(cellB)) *100))/100) < 0)
			{
			document.getElementById(PointsFeasibility).innerHTML = "You can get a "+document.getElementById(DesiredPercentageInClass).value+"% in the class no matter what!";
			}
			else
			{
			document.getElementById(PointsFeasibility).innerHTML = "";
			}
		// END OF ACTUAL COMPUTATION	
			
		  }  
	  
	</script>

<!-- END OF POINTS JAVASCRIPTS --> 


<!-- START OF JAVASCRIPT USED BY BOTH PERCENTAGE AND POINTS TO SHOW AND HIDE SECTIONS -->  

	<script type = "text/javascript">
		function ShowHide(buttonID,init_val,end_val, divId, divId2, TypePage, ExampleBtn, ExamplePointsBtn, data1, data2, data3, data4,PerWarning1,PerWarning2,PerWarning3,PerWarning4,HiddenPercentageExample1,
							data1points, data2points, data3points, data4points, data5points, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, PointsWarning5, HiddenPointsExample1)
		{
			if(clicked == 1)
			{
				if(document.getElementById("button1").value == "Change to Final Exam Calculator by POINTS")
				{
					Example_Switch(data1, data2, data3, data4,PerWarning1,PerWarning2,PerWarning3,PerWarning4,TypePage,HiddenPercentageExample1);
				}
				else
				{
					Example_Points_Switch(data1points, data2points, data3points, data4points, data5points, PointsWarning1, PointsWarning2, PointsWarning3, PointsWarning4, PointsWarning5, TypePage, HiddenPointsExample1);
				}
			}	


			if(document.getElementById(divId).style.display == 'none')
			{
			document.getElementById(divId).style.display='block';
			
			document.getElementById(divId2).style.display='none';

			document.getElementById(TypePage).innerHTML='Final Exam Calculator by Percentage';
			
			buttonID.value=init_val;
			}
			else
			{
			document.getElementById(divId).style.display = 'none';
			
			document.getElementById(divId2).style.display='block';

			document.getElementById(TypePage).innerHTML='Final Exam Calculator by Points';
			
			buttonID.value=end_val;
            }
		}
	</script>

<!-- END OF JAVASCRIPT USED BY BOTH PERCENTAGE AND POINTS TO SHOW AND HIDE SECTIONS -->  





<!-- START OF HTML CODING, FOR REMAINDER OF THE PAGE -->  
  
<?PHP include("header.php"); ?>
<div id=calcLabels>
     <hr>
 
<font size="6" color="red"><center><p id="TypeOfPageDescription">Final Exam Calculator by Percentage</p></center></font>
     <hr>
</div>


<input type="button" name="button1" id="button1" value="Change to Final Exam Calculator by POINTS" style="font-size: 100%; height: 30px; width: 450px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px"
		onclick="ShowHide(this,'Change to Final Exam Calculator by POINTS','Change to Final Exam Calculator by PERCENTAGE', 'HiddenDiv', 'HiddenDiv2', 'TypeOfPageDescription','ExampleButton','ExamplePointsButton',
		'currentPercent','finalPercent','desiredPercentFromPercentages','PercentageNumber_tmp', 'PercentWarning1', 'PercentWarning2', 'PercentWarning3', 'DetermineFeasibilityPoints','HiddenPercentExample',
		'totalPossible','yourPoints','finalPoints','desiredPercentFromPoints','PointsNumber_tmp', 'PointsWarning1', 'PointsWarning2', 'PointsWarning3','PointsWarning4', 'DetermineFeasibilityPercent','HiddenPointsExample')">

		<br>

		
<div id = "HiddenDiv">

		<!-- START OF HIDE/DISPLAY SECTION 1-->

		<p><input type="button" value="Click to See An Example" id="ExampleButton" style="height: 30px; width: 200px;"
			onClick="Example_Switch('currentPercent','finalPercent','desiredPercentFromPercentages','PercentageNumber_tmp', 'PercentWarning1', 'PercentWarning2', 'PercentWarning3', 'DetermineFeasibilityPoints','TypeOfPageDescription','HiddenPercentExample')"></p>
		<br>


		<form>
            <div id=calcPageText>
			<b>Current Percent: </b><input type="number" title="Enter the current percentage you are averaging in the course before the final exam. (i.e.; Averaging 95% for the course out of 100% before the final exam)" id="currentPercent" size="4" style="text-align:center;">%<br>
            <div id=error>
			<p id="PercentWarning1"> &nbsp </p>
            </div>
					
			<br><b>Final Exam Percent: </b><input type="number" title="Enter the percentage value the final is of the entire total course. (i.e.; Final exam is worth 20% of the entire course value)." id="finalPercent" size="4" style="text-align:center;">%<br>
            <div id=error>
			<p id="PercentWarning2" size="100"> &nbsp </p>
            </div>

			<br><b>Percent Desired in Course (after the final): </b><input type="number" id="desiredPercentFromPercentages" title="Enter the eventual percentage grade you want to achieve for the course following the final exam. (i.e.; Want to achieve a 92% for the entire course following the final exam)." size="4" style="text-align:center;">%<br>
            <div id=error>
            <p id="PercentWarning3" size="100"> &nbsp </p>
            </div>
            <br>
			<hr>

			<br>
			<center><input type="button" id="Calculate" value="Calculate!" style="font-size: 100%; height: 30px; width: 130px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px"
					onclick="Calculate_Necessary_Grade_On_Final_From_Percentages('currentPercent', 'finalPercent', 'desiredPercentFromPercentages', 'PercentageNumber_tmp', 'DetermineFeasibilityPercentage', 'PercentWarning1', 'PercentWarning2', 'PercentWarning3','TypeOfPageDescription','HiddenPercentExample')"></center>
			<br>

			<b>Necessary Grade Needed on the Final as a Percentage:</b>&nbsp	

			<input type="text" name="DesiredPercentage1" id="PercentageNumber_tmp" size="4" style="text-align:center;" readonly="">%
            <br><center><p style="font-size: 20px"><i>Minimum "Percentage" needed on the final exam to achieve the "Percent Desired in Course".</i></p></center>
			<p id="DetermineFeasibilityPercentage" size="100" style="color:red;font-size:20px;text-align:center;"> &nbsp </p>


			<!-- START OF HIDDEN PERCENTAGE EXAMPLE SECTION-->	 

    <div id = "HiddenPercentExample" style="DISPLAY: none">
                    <font color="white">
					<table border="0" bgcolor="#000033"	>
						 <tr>
						 <td align="center"><b><u>IN THE EXAMPLE:</u></b></td>
						 <tr>
						 <tr></tr><tr></tr><tr></tr>
						 <td align="left">1. Thus far, you are averaging 92.75% in the course for everything you have done leading up to the final exam.</td>
						 </tr>
						 <tr>
						 <td align="left">2. The final exam is worth 30% of the course's overall value.</td>
						 </tr>
						 <tr>
						 <td align="left">3. You want to achieve an overall percentage for the course of 90% (after the final exam has been graded).</td>
						 </tr>
						 <tr></tr><tr></tr><tr></tr>
						 <td align="left">Results: From these three parameters, you would need to receive a minimum grade of 83.58% on the final exam to achieve the 90% grade you desire for the course.</td>
						 </tr>
					</table>
                    </font>
        </div>
		</form>
					<br><br>
			</div>  <!-- END OF HIDDEN PERCENTAGE EXAMPLE SECTION-->	


</div>  <!-- END OF HIDDEN SECTION 1-->



<!-- START OF HIDDEN SECTION 2-->	 

<div id = "HiddenDiv2" style="DISPLAY: none">

	<p><input type="button" value="Click to See An Example" id="ExamplePointsButton" style="height: 30px; width: 200px;"
		onClick="Example_Points_Switch('totalPossible','yourPoints','finalPoints','desiredPercentFromPoints','PointsNumber_tmp', 'PointsWarning1', 'PointsWarning2', 'PointsWarning3','PointsWarning4', 'DetermineFeasibilityPercent','TypeOfPageDescription','HiddenPointsExample')"></p>
    <br>
	
		<form action="pointcalc.php" method="post">
            <div id=calcPageText>
			<b>Total Points Possible Before Final: </b><input type="text" title="Enter the total points possible in the course before the final exam." id="totalPossible" size="8" style="text-align:center;"><br>
            <div id=error>
			<p id="PointsWarning1"> &nbsp </p>
            </div>
			
			<br><b>Your Total Points Before Final: </b><input type="text" title="Enter your total points achieved in the course before the final exam." id="yourPoints" size="8" style="text-align:center;"><br>
            <div id=error>
			<p id="PointsWarning2"> &nbsp </p>
            </div>

            <br>
            <hr>

			<br><b>Final Exam Points Value: </b><input type="text" title="Enter the total point value of the final exam." id="finalPoints" size="8" style="text-align:center;"><br>
            <div id=error>
			<p id="PointsWarning3"> &nbsp </p>
            </div>
			
			<br><br><b>Percent Desired to Achieve in Course (after the final): </b><input type="text" title="Enter the eventual percentage grade you want to achieve for the course following the final exam." id="desiredPercentFromPoints" size="8" style="text-align:center;">%<br>
            <div id=error>
			<p id="PointsWarning4"> &nbsp </p>
            </div>

			<br><hr>

			<br>
			<center><input type="button" id="CalculatePoints" value="Calculate!" style="font-size: 100%; height: 30px; width: 130px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px"
				onclick="Calculate_Necessary_Grade_On_Final_From_Points('totalPossible', 'yourPoints', 'finalPoints', 'desiredPercentFromPoints', 'PointsNumber_tmp', 'DetermineFeasibilityPoints', 'PointsWarning1', 'PointsWarning2', 'PointsWarning3', 'PointsWarning4','TypeOfPageDescription','HiddenPointsExample')"></center>
			<br>


			<b>Necessary Grade Needed on the Final in Points:</b>&nbsp
			<input type="text" name="DesiredPercentage2" id="PointsNumber_tmp" size="8	" style="text-align:center;" readonly="">
			<br><center><p style="font-size: 20px"><i>Minimum "Point Value" needed on the final exam to achieve the "Percent Desired to Achieve in Course".</i></p></center>
			<p id="DetermineFeasibilityPoints" size="150" style="color:red;font-size:20px;text-align:center;"> &nbsp </p>

	   </form>


<!-- START OF HIDDEN PERCENTAGE EXAMPLE SECTION-->	 

	<div id = "HiddenPointsExample" style="DISPLAY: none">

        <font color="white">
		<table border="0" bgcolor="#000033"	>
			 <tr>
			 <td align="center"><b><u>IN THE EXAMPLE:</u></b></td>
			 <tr>
			 <tr></tr><tr></tr><tr></tr>
			 <td align="left">1. There are a total of 800 points possible in the course before the final exam.</td>
			 </tr>
			 <tr>
			 <td align="left">2. You have received a total of 725 points out of the 800 possible before the final exam.</td>
			 </tr>
			 <tr>
			 <td align="left">3. The final exam is worth a total of 200 points.</td>
			 </tr>
			 <tr>
			 <td align="left">4. You want to achieve an overall percentage for the course of 90% (after the final exam has been graded).</td>
			 </tr>
			 <tr></tr><tr></tr><tr></tr>
			 <td align="left">Results: From these four parameters, you would need to receive a minimum grade of 175 on the final exam to achieve the 90% grade you desire for the course.</td>
			 </tr>
		</table>
        </font>
        </div>
			   </form>
		<br><br>
	</div>  <!-- END OF HIDDEN PERCENTAGE EXAMPLE SECTION-->	

</div>  <!-- END OF HIDDEN SECTION 2-->


   

<?PHP include("footer.php"); ?>
</div>