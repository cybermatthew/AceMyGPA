<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
  <head>
  
<!-- START OF UNIVERSITY JAVASCRIPTS -->  

<script language="JavaScript">

	// START OF EXAMPLE SECTION
	
	var CollegeDataArray = new Array();

	var clicked = 0;

	var Example_clicked = 0;

	function Store_Data(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1)
	{

		document.bgColor = "87CEEB";
		
		clicked = 1; // disable the calc button
		
		document.getElementById(TypePage).innerHTML='College Grade Calculator<br>- <u>EXAMPLE</u> -';
		
		document.getElementById(HiddenCollegeExample1).style.display = 'block';
		
		document.getElementById("Calculate").value = "Exit Example";

		document.getElementById("ExampleButton").value = "Exit Example";
		
		document.getElementById("CollegeTable").style.backgroundColor = "lightgray";
		
		CollegeDataArray[0] = document.getElementById(Ap1).value;
		CollegeDataArray[1] = document.getElementById(Ap2).value;
		CollegeDataArray[2] = document.getElementById(Ap3).value;
		CollegeDataArray[3] = document.getElementById(Ap4).value;
		CollegeDataArray[4] = document.getElementById(Ap5).value;
		CollegeDataArray[5] = document.getElementById(A1).value;
		CollegeDataArray[6] = document.getElementById(A2).value;
		CollegeDataArray[7] = document.getElementById(A3).value;
		CollegeDataArray[8] = document.getElementById(A4).value;
		CollegeDataArray[9] = document.getElementById(A5).value;
		CollegeDataArray[10] = document.getElementById(Am1).value;
		CollegeDataArray[11] = document.getElementById(Am2).value;
		CollegeDataArray[12] = document.getElementById(Am3).value;
		CollegeDataArray[13] = document.getElementById(Am4).value;
		CollegeDataArray[14] = document.getElementById(Am5).value;
		CollegeDataArray[15] = document.getElementById(Bp1).value;
		CollegeDataArray[16] = document.getElementById(Bp2).value;
		CollegeDataArray[17] = document.getElementById(Bp3).value;
		CollegeDataArray[18] = document.getElementById(Bp4).value;
		CollegeDataArray[19] = document.getElementById(Bp5).value;
		CollegeDataArray[20] = document.getElementById(B1).value;
		CollegeDataArray[21] = document.getElementById(B2).value;
		CollegeDataArray[22] = document.getElementById(B3).value;
		CollegeDataArray[23] = document.getElementById(B4).value;
		CollegeDataArray[24] = document.getElementById(B5).value;
		CollegeDataArray[25] = document.getElementById(Bm1).value;
		CollegeDataArray[26] = document.getElementById(Bm2).value;
		CollegeDataArray[27] = document.getElementById(Bm3).value;
		CollegeDataArray[28] = document.getElementById(Bm4).value;
		CollegeDataArray[29] = document.getElementById(Bm5).value;
		CollegeDataArray[30] = document.getElementById(Cp1).value;
		CollegeDataArray[31] = document.getElementById(Cp2).value;
		CollegeDataArray[32] = document.getElementById(Cp3).value;
		CollegeDataArray[33] = document.getElementById(Cp4).value;
		CollegeDataArray[34] = document.getElementById(Cp5).value;
		CollegeDataArray[35] = document.getElementById(C1).value;
		CollegeDataArray[36] = document.getElementById(C2).value;
		CollegeDataArray[37] = document.getElementById(C3).value;
		CollegeDataArray[38] = document.getElementById(C4).value;
		CollegeDataArray[39] = document.getElementById(C5).value;
		CollegeDataArray[40] = document.getElementById(Cm1).value;
		CollegeDataArray[41] = document.getElementById(Cm2).value;
		CollegeDataArray[42] = document.getElementById(Cm3).value;
		CollegeDataArray[43] = document.getElementById(Cm4).value;
		CollegeDataArray[44] = document.getElementById(Cm5).value;
		CollegeDataArray[45] = document.getElementById(Dp1).value;
		CollegeDataArray[46] = document.getElementById(Dp2).value;
		CollegeDataArray[47] = document.getElementById(Dp3).value;
		CollegeDataArray[48] = document.getElementById(Dp4).value;
		CollegeDataArray[49] = document.getElementById(Dp5).value;
		CollegeDataArray[50] = document.getElementById(D1).value;
		CollegeDataArray[51] = document.getElementById(D2).value;
		CollegeDataArray[52] = document.getElementById(D3).value;
		CollegeDataArray[53] = document.getElementById(D4).value;
		CollegeDataArray[54] = document.getElementById(D5).value;
		CollegeDataArray[55] = document.getElementById(Dm1).value;
		CollegeDataArray[56] = document.getElementById(Dm2).value;
		CollegeDataArray[57] = document.getElementById(Dm3).value;
		CollegeDataArray[58] = document.getElementById(Dm4).value;
		CollegeDataArray[59] = document.getElementById(Dm5).value;
		CollegeDataArray[60] = document.getElementById(F1).value;
		CollegeDataArray[61] = document.getElementById(F2).value;
		CollegeDataArray[62] = document.getElementById(F3).value;
		CollegeDataArray[63] = document.getElementById(F4).value;
		CollegeDataArray[64] = document.getElementById(F5).value;

		
		CollegeDataArray[65] = document.getElementById(Results1).value;
		CollegeDataArray[66] = document.getElementById(Results2).value;
		CollegeDataArray[67] = document.getElementById(Results3).value;
		CollegeDataArray[68] = document.getElementById(Apval).value;
		CollegeDataArray[69] = document.getElementById(Aval).value;
		CollegeDataArray[70] = document.getElementById(Amval).value;
		CollegeDataArray[71] = document.getElementById(Bpval).value;
		CollegeDataArray[72] = document.getElementById(Bval).value;
		CollegeDataArray[73] = document.getElementById(Bmval).value;
		CollegeDataArray[74] = document.getElementById(Cpval).value;
		CollegeDataArray[75] = document.getElementById(Cval).value;
		CollegeDataArray[76] = document.getElementById(Cmval).value;
		CollegeDataArray[77] = document.getElementById(Dpval).value;
		CollegeDataArray[78] = document.getElementById(Dval).value;
		CollegeDataArray[79] = document.getElementById(Dmval).value;
		CollegeDataArray[80] = document.getElementById(Fval).value;
		
		document.getElementById(Ap1).disabled = true;
		document.getElementById(Ap2).disabled = true;
		document.getElementById(Ap3).disabled = true;
		document.getElementById(Ap4).disabled = true;
		document.getElementById(Ap5).disabled = true;
		document.getElementById(A1).disabled = true;
		document.getElementById(A2).disabled = true;
		document.getElementById(A3).disabled = true;
		document.getElementById(A4).disabled = true;
		document.getElementById(A5).disabled = true;
		document.getElementById(Am1).disabled = true;
		document.getElementById(Am2).disabled = true;
		document.getElementById(Am3).disabled = true;
		document.getElementById(Am4).disabled = true;
		document.getElementById(Am5).disabled = true;
		document.getElementById(Bp1).disabled = true;
		document.getElementById(Bp2).disabled = true;
		document.getElementById(Bp3).disabled = true;
		document.getElementById(Bp4).disabled = true;
		document.getElementById(Bp5).disabled = true;
		document.getElementById(B1).disabled = true;
		document.getElementById(B2).disabled = true;
		document.getElementById(B3).disabled = true;
		document.getElementById(B4).disabled = true;
		document.getElementById(B5).disabled = true;
		document.getElementById(Bm1).disabled = true;
		document.getElementById(Bm2).disabled = true;
		document.getElementById(Bm3).disabled = true;
		document.getElementById(Bm4).disabled = true;
		document.getElementById(Bm5).disabled = true;
		document.getElementById(Cp1).disabled = true;
		document.getElementById(Cp2).disabled = true;
		document.getElementById(Cp3).disabled = true;
		document.getElementById(Cp4).disabled = true;
		document.getElementById(Cp5).disabled = true;
		document.getElementById(C1).disabled = true;
		document.getElementById(C2).disabled = true;
		document.getElementById(C3).disabled = true;
		document.getElementById(C4).disabled = true;
		document.getElementById(C5).disabled = true;
		document.getElementById(Cm1).disabled = true;
		document.getElementById(Cm2).disabled = true;
		document.getElementById(Cm3).disabled = true;
		document.getElementById(Cm4).disabled = true;
		document.getElementById(Cm5).disabled = true;
		document.getElementById(Dp1).disabled = true;
		document.getElementById(Dp2).disabled = true;
		document.getElementById(Dp3).disabled = true;
		document.getElementById(Dp4).disabled = true;
		document.getElementById(Dp5).disabled = true;
		document.getElementById(D1).disabled = true;
		document.getElementById(D2).disabled = true;
		document.getElementById(D3).disabled = true;
		document.getElementById(D4).disabled = true;
		document.getElementById(D5).disabled = true;
		document.getElementById(Dm1).disabled = true;
		document.getElementById(Dm2).disabled = true;
		document.getElementById(Dm3).disabled = true;
		document.getElementById(Dm4).disabled = true;
		document.getElementById(Dm5).disabled = true;
		document.getElementById(F1).disabled = true;
		document.getElementById(F2).disabled = true;
		document.getElementById(F3).disabled = true;
		document.getElementById(F4).disabled = true;
		document.getElementById(F5).disabled = true;
		document.getElementById(Results1).disabled = true;
		document.getElementById(Results2).disabled = true;
		document.getElementById(Results3).disabled = true;
		document.getElementById(Apval).disabled = true;
		document.getElementById(Aval).disabled = true;
		document.getElementById(Amval).disabled = true;
		document.getElementById(Bpval).disabled= true;
		document.getElementById(Bval).disabled = true;
		document.getElementById(Bmval).disabled = true;
		document.getElementById(Cpval).disabled = true;
		document.getElementById(Cval).disabled = true;
		document.getElementById(Cmval).disabled = true;
		document.getElementById(Dpval).disabled = true;
		document.getElementById(Dval).disabled = true;
		document.getElementById(Dmval).disabled = true;
		document.getElementById(Fval).disabled = true;
		
		document.getElementById(Ap1).value = "2";
		document.getElementById(Ap2).value =  "";
		document.getElementById(Ap3).value = "3";
		document.getElementById(Ap4).value =  "";
		document.getElementById(Ap5).value =  "";
		document.getElementById(A1).value =  "";
		document.getElementById(A2).value =  "";
		document.getElementById(A3).value =  "";
		document.getElementById(A4).value = "4";
		document.getElementById(A5).value = "1";
		document.getElementById(Am1).value =  "";
		document.getElementById(Am2).value = "1";
		document.getElementById(Am3).value =  "";
		document.getElementById(Am4).value =  "";
		document.getElementById(Am5).value =  "";
		document.getElementById(Bp1).value =  "";
		document.getElementById(Bp2).value =  "";
		document.getElementById(Bp3).value =  "";
		document.getElementById(Bp4).value = "2";
		document.getElementById(Bp5).value =  "";
		document.getElementById(B1).value =  "";
		document.getElementById(B2).value =  "";
		document.getElementById(B3).value = "5";
		document.getElementById(B4).value =  "";
		document.getElementById(B5).value = "5";
		document.getElementById(Bm1).value =  "";
		document.getElementById(Bm2).value =  "";
		document.getElementById(Bm3).value =  "";
		document.getElementById(Bm4).value =  "";
		document.getElementById(Bm5).value =  "";
		document.getElementById(Cp1).value =  "";
		document.getElementById(Cp2).value =  "";
		document.getElementById(Cp3).value =  "";
		document.getElementById(Cp4).value = "1";
		document.getElementById(Cp5).value =  "";
		document.getElementById(C1).value =  "";
		document.getElementById(C2).value =  "";
		document.getElementById(C3).value =  "";
		document.getElementById(C4).value =  "";
		document.getElementById(C5).value =  "";
		document.getElementById(Cm1).value =  "";
		document.getElementById(Cm2).value =  "";
		document.getElementById(Cm3).value =  "";
		document.getElementById(Cm4).value =  "";
		document.getElementById(Cm5).value =  "";
		document.getElementById(Dp1).value =  "";
		document.getElementById(Dp2).value =  "";
		document.getElementById(Dp3).value =  "";
		document.getElementById(Dp4).value =  "";
		document.getElementById(Dp5).value =  "";
		document.getElementById(D1).value =  "";
		document.getElementById(D2).value =  "";
		document.getElementById(D3).value =  "";
		document.getElementById(D4).value =  "";
		document.getElementById(D5).value =  "";
		document.getElementById(Dm1).value =  "";
		document.getElementById(Dm2).value =  "";
		document.getElementById(Dm3).value =  "";
		document.getElementById(Dm4).value =  "";
		document.getElementById(Dm5).value =  "";
		document.getElementById(F1).value =  "";
		document.getElementById(F2).value =  "";
		document.getElementById(F3).value =  "";
		document.getElementById(F4).value =  "";
		document.getElementById(F5).value =  "";
		document.getElementById(Results1).value = "3.42";
		document.getElementById(Results2).value = "3.35";
		document.getElementById(Results3).value = "86";

		document.getElementById(Apval).value = "4.3";
		document.getElementById(Aval).value = "4";
		document.getElementById(Amval).value = "3.7";
		document.getElementById(Bpval).value = "3.3";
		document.getElementById(Bval).value = "3";
		document.getElementById(Bmval).value = "2.7";
		document.getElementById(Cpval).value = "2.3";
		document.getElementById(Cval).value = "2";
		document.getElementById(Cmval).value = "1.7";
		document.getElementById(Dpval).value = "1.3";
		document.getElementById(Dval).value = "1";
		document.getElementById(Dmval).value = "0.7";
		document.getElementById(Fval).value = "0";
		
//		document.getElementById(PercentWarning1).innerHTML = '&nbsp';
//		document.getElementById(PercentWarning2).innerHTML = '&nbsp';
//		document.getElementById(PercentWarning3).innerHTML = '&nbsp';
//		document.getElementById(PercentWarning4).innerHTML = '&nbsp';
		
	}


	function Fill_Data(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1)
	{
		document.bgColor = "white";
		
		clicked = 0; // reset the calc button
		
		document.getElementById(TypePage).innerHTML='College Grade Calculator';
		
		document.getElementById("Calculate").value = "Calculate!";

		document.getElementById("ExampleButton").value = "Click to See An Example";

		document.getElementById("CollegeTable").style.backgroundColor = "white";

		document.getElementById(HiddenCollegeExample1).style.display = 'none';

		document.getElementById(Ap1).value = CollegeDataArray[0];
		document.getElementById(Ap2).value = CollegeDataArray[1];
		document.getElementById(Ap3).value = CollegeDataArray[2];
		document.getElementById(Ap4).value = CollegeDataArray[3];
		document.getElementById(Ap5).value = CollegeDataArray[4];
		document.getElementById(A1).value = CollegeDataArray[5];
		document.getElementById(A2).value = CollegeDataArray[6];
		document.getElementById(A3).value = CollegeDataArray[7];
		document.getElementById(A4).value = CollegeDataArray[8];
		document.getElementById(A5).value = CollegeDataArray[9];
		document.getElementById(Am1).value = CollegeDataArray[10];
		document.getElementById(Am2).value = CollegeDataArray[11];
		document.getElementById(Am3).value = CollegeDataArray[12];
		document.getElementById(Am4).value = CollegeDataArray[13];
		document.getElementById(Am5).value = CollegeDataArray[14];
		document.getElementById(Bp1).value = CollegeDataArray[15];
		document.getElementById(Bp2).value = CollegeDataArray[16];
		document.getElementById(Bp3).value = CollegeDataArray[17];
		document.getElementById(Bp4).value = CollegeDataArray[18];
		document.getElementById(Bp5).value = CollegeDataArray[19];
		document.getElementById(B1).value = CollegeDataArray[20];
		document.getElementById(B2).value = CollegeDataArray[21];
		document.getElementById(B3).value = CollegeDataArray[22];
		document.getElementById(B4).value = CollegeDataArray[23];
		document.getElementById(B5).value = CollegeDataArray[24];
		document.getElementById(Bm1).value = CollegeDataArray[25];
		document.getElementById(Bm2).value = CollegeDataArray[26];
		document.getElementById(Bm3).value = CollegeDataArray[27];
		document.getElementById(Bm4).value = CollegeDataArray[28];
		document.getElementById(Bm5).value = CollegeDataArray[29];
		document.getElementById(Cp1).value = CollegeDataArray[30];
		document.getElementById(Cp2).value = CollegeDataArray[31];
		document.getElementById(Cp3).value = CollegeDataArray[32];
		document.getElementById(Cp4).value = CollegeDataArray[33];
		document.getElementById(Cp5).value = CollegeDataArray[34];
		document.getElementById(C1).value = CollegeDataArray[35];
		document.getElementById(C2).value = CollegeDataArray[36];
		document.getElementById(C3).value = CollegeDataArray[37];
		document.getElementById(C4).value = CollegeDataArray[38];
		document.getElementById(C5).value = CollegeDataArray[39];
		document.getElementById(Cm1).value = CollegeDataArray[40];
		document.getElementById(Cm2).value = CollegeDataArray[41];
		document.getElementById(Cm3).value = CollegeDataArray[42];
		document.getElementById(Cm4).value = CollegeDataArray[43];
		document.getElementById(Cm5).value = CollegeDataArray[44];
		document.getElementById(Dp1).value = CollegeDataArray[45];
		document.getElementById(Dp2).value = CollegeDataArray[46];
		document.getElementById(Dp3).value = CollegeDataArray[47];
		document.getElementById(Dp4).value = CollegeDataArray[48];
		document.getElementById(Dp5).value = CollegeDataArray[49];
		document.getElementById(D1).value = CollegeDataArray[50];
		document.getElementById(D2).value = CollegeDataArray[51];
		document.getElementById(D3).value = CollegeDataArray[52];
		document.getElementById(D4).value = CollegeDataArray[53];
		document.getElementById(D5).value = CollegeDataArray[54];
		document.getElementById(Dm1).value = CollegeDataArray[55];
		document.getElementById(Dm2).value = CollegeDataArray[56];
		document.getElementById(Dm3).value = CollegeDataArray[57];
		document.getElementById(Dm4).value = CollegeDataArray[58];
		document.getElementById(Dm5).value = CollegeDataArray[59];
		document.getElementById(F1).value = CollegeDataArray[60];
		document.getElementById(F2).value = CollegeDataArray[61];
		document.getElementById(F3).value = CollegeDataArray[62];
		document.getElementById(F4).value = CollegeDataArray[63];
		document.getElementById(F5).value = CollegeDataArray[64];

		document.getElementById(Results1).value = CollegeDataArray[65];
		document.getElementById(Results2).value = CollegeDataArray[66];
		document.getElementById(Results3).value = CollegeDataArray[67];
		document.getElementById(Apval).value = CollegeDataArray[68];
		document.getElementById(Aval).value = CollegeDataArray[69];
		document.getElementById(Amval).value = CollegeDataArray[70];
		document.getElementById(Bpval).value = CollegeDataArray[71];
		document.getElementById(Bval).value = CollegeDataArray[72];
		document.getElementById(Bmval).value = CollegeDataArray[73];
		document.getElementById(Cpval).value = CollegeDataArray[74];
		document.getElementById(Cval).value = CollegeDataArray[75];
		document.getElementById(Cmval).value = CollegeDataArray[76];
		document.getElementById(Dpval).value = CollegeDataArray[77];
		document.getElementById(Dval).value = CollegeDataArray[78];
		document.getElementById(Dmval).value = CollegeDataArray[79];
		document.getElementById(Fval).value = CollegeDataArray[80];
		
		document.getElementById(Ap1).disabled = false;
		document.getElementById(Ap2).disabled = false;
		document.getElementById(Ap3).disabled = false;
		document.getElementById(Ap4).disabled = false;
		document.getElementById(Ap5).disabled = false;
		document.getElementById(A1).disabled = false;
		document.getElementById(A2).disabled = false;
		document.getElementById(A3).disabled = false;
		document.getElementById(A4).disabled = false;
		document.getElementById(A5).disabled = false;
		document.getElementById(Am1).disabled = false;
		document.getElementById(Am2).disabled = false;
		document.getElementById(Am3).disabled = false;
		document.getElementById(Am4).disabled = false;
		document.getElementById(Am5).disabled = false;
		document.getElementById(Bp1).disabled = false;
		document.getElementById(Bp2).disabled = false;
		document.getElementById(Bp3).disabled = false;
		document.getElementById(Bp4).disabled = false;
		document.getElementById(Bp5).disabled = false;
		document.getElementById(B1).disabled = false;
		document.getElementById(B2).disabled = false;
		document.getElementById(B3).disabled = false;
		document.getElementById(B4).disabled = false;
		document.getElementById(B5).disabled = false;
		document.getElementById(Bm1).disabled = false;
		document.getElementById(Bm2).disabled = false;
		document.getElementById(Bm3).disabled = false;
		document.getElementById(Bm4).disabled = false;
		document.getElementById(Bm5).disabled = false;
		document.getElementById(Cp1).disabled = false;
		document.getElementById(Cp2).disabled = false;
		document.getElementById(Cp3).disabled = false;
		document.getElementById(Cp4).disabled = false;
		document.getElementById(Cp5).disabled = false;
		document.getElementById(C1).disabled = false;
		document.getElementById(C2).disabled = false;
		document.getElementById(C3).disabled = false;
		document.getElementById(C4).disabled = false;
		document.getElementById(C5).disabled = false;
		document.getElementById(Cm1).disabled = false;
		document.getElementById(Cm2).disabled = false;
		document.getElementById(Cm3).disabled = false;
		document.getElementById(Cm4).disabled = false;
		document.getElementById(Cm5).disabled = false;
		document.getElementById(Dp1).disabled = false;
		document.getElementById(Dp2).disabled = false;
		document.getElementById(Dp3).disabled = false;
		document.getElementById(Dp4).disabled = false;
		document.getElementById(Dp5).disabled = false;
		document.getElementById(D1).disabled = false;
		document.getElementById(D2).disabled = false;
		document.getElementById(D3).disabled = false;
		document.getElementById(D4).disabled = false;
		document.getElementById(D5).disabled = false;
		document.getElementById(Dm1).disabled = false;
		document.getElementById(Dm2).disabled = false;
		document.getElementById(Dm3).disabled = false;
		document.getElementById(Dm4).disabled = false;
		document.getElementById(Dm5).disabled = false;
		document.getElementById(F1).disabled = false;
		document.getElementById(F2).disabled = false;
		document.getElementById(F3).disabled = false;
		document.getElementById(F4).disabled = false;
		document.getElementById(F5).disabled = false;
		document.getElementById(Results1).disabled = false;
		document.getElementById(Results2).disabled = false;
		document.getElementById(Results3).disabled = false;
        
        var CustomizeButton = document.getElementById("Customize");
        
        if(CustomizeButton.checked){
            document.getElementById(Apval).disabled = false;
            document.getElementById(Aval).disabled = false;
            document.getElementById(Amval).disabled = false;
            document.getElementById(Bpval).disabled = false;
            document.getElementById(Bval).disabled = false;
            document.getElementById(Bmval).disabled = false;
            document.getElementById(Cpval).disabled = false;
            document.getElementById(Cval).disabled = false;
            document.getElementById(Cmval).disabled = false;
            document.getElementById(Dpval).disabled = false;
            document.getElementById(Dval).disabled = false;
            document.getElementById(Dmval).disabled = false;
            document.getElementById(Fval).disabled = false;
        }
	}


	function Example_Switch(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1)

	
	{
	if (clicked == 0)
		{
			Store_Data(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1);
		}
		else
		{
			Fill_Data(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1); // Semi-Colon Added
		}
	}
	
	function toInt(number)
	{
		if (number == "")
			number = 0;
			
		return parseFloat(number);
	}

	// END OF EXAMPLE SECTION

	// COMPUTE THE COLLEGE GPA
	
	function Calculate_College_GPA(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1)
	{
// Error check to see if the Absolute Value of all inputs less the Actual Value of all inputs are equal or not.  That determines if an incorrect negative number was entered.

		if ((Math.abs(((document.getElementById(Ap1).value)))+Math.abs(((document.getElementById(Ap2).value)))+Math.abs(((document.getElementById(Ap3).value)))+Math.abs(((document.getElementById(Ap4).value)))+Math.abs(((document.getElementById(Ap5).value)))+Math.abs(((document.getElementById(A1).value)))+Math.abs(((document.getElementById(A2).value)))+Math.abs(((document.getElementById(A3).value)))+Math.abs(((document.getElementById(A4).value)))+Math.abs(((document.getElementById(A5).value)))+Math.abs(((document.getElementById(Am1).value)))+Math.abs(((document.getElementById(Am2).value)))+Math.abs(((document.getElementById(Am3).value)))+Math.abs(((document.getElementById(Am4).value)))+Math.abs(((document.getElementById(Am5).value)))+Math.abs(((document.getElementById(Bp1).value)))+Math.abs(((document.getElementById(Bp2).value)))+Math.abs(((document.getElementById(Bp3).value)))+Math.abs(((document.getElementById(Bp4).value)))+Math.abs(((document.getElementById(Bp5).value)))+Math.abs(((document.getElementById(B1).value)))+Math.abs(((document.getElementById(B2).value)))+Math.abs(((document.getElementById(B3).value)))+Math.abs(((document.getElementById(B4).value)))+Math.abs(((document.getElementById(B5).value)))+Math.abs(((document.getElementById(Bm1).value)))+Math.abs(((document.getElementById(Bm2).value)))+Math.abs(((document.getElementById(Bm3).value)))+Math.abs(((document.getElementById(Bm4).value)))+Math.abs(((document.getElementById(Bm5).value)))+Math.abs(((document.getElementById(Cp1).value)))+Math.abs(((document.getElementById(Cp2).value)))+Math.abs(((document.getElementById(Cp3).value)))+Math.abs(((document.getElementById(Cp4).value)))+Math.abs(((document.getElementById(Cp5).value)))+Math.abs(((document.getElementById(C1).value)))+Math.abs(((document.getElementById(C2).value)))+Math.abs(((document.getElementById(C3).value)))+Math.abs(((document.getElementById(C4).value)))+Math.abs(((document.getElementById(C5).value)))+Math.abs(((document.getElementById(Cm1).value)))+Math.abs(((document.getElementById(Cm2).value)))+Math.abs(((document.getElementById(Cm3).value)))+Math.abs(((document.getElementById(Cm4).value)))+Math.abs(((document.getElementById(Cm5).value)))+Math.abs(((document.getElementById(Dp1).value)))+Math.abs(((document.getElementById(Dp2).value)))+Math.abs(((document.getElementById(Dp3).value)))+Math.abs(((document.getElementById(Dp4).value)))+Math.abs(((document.getElementById(Dp5).value)))+Math.abs(((document.getElementById(D1).value)))+Math.abs(((document.getElementById(D2).value)))+Math.abs(((document.getElementById(D3).value)))+Math.abs(((document.getElementById(D4).value)))+Math.abs(((document.getElementById(D5).value)))+Math.abs(((document.getElementById(Dm1).value)))+Math.abs(((document.getElementById(Dm2).value)))+Math.abs(((document.getElementById(Dm3).value)))+Math.abs(((document.getElementById(Dm4).value)))+Math.abs(((document.getElementById(Dm5).value)))+Math.abs(((document.getElementById(F1).value)))+Math.abs(((document.getElementById(F2).value)))+Math.abs(((document.getElementById(F3).value)))+Math.abs(((document.getElementById(F4).value)))+Math.abs(((document.getElementById(F5).value)))+Math.abs(((document.getElementById(Apval).value)))+Math.abs(((document.getElementById(Aval).value)))+Math.abs(((document.getElementById(Amval).value)))+Math.abs(((document.getElementById(Bpval).value)))+Math.abs(((document.getElementById(Bval).value)))+Math.abs(((document.getElementById(Bmval).value)))+Math.abs(((document.getElementById(Cpval).value)))+Math.abs(((document.getElementById(Cval).value)))+Math.abs(((document.getElementById(Cmval).value)))+Math.abs(((document.getElementById(Dpval).value)))+Math.abs(((document.getElementById(Dval).value)))+Math.abs(((document.getElementById(Dmval).value)))+Math.abs(((document.getElementById(Fval).value))))
			!= (toInt(((document.getElementById(Ap1).value)))+toInt(((document.getElementById(Ap2).value)))+toInt(((document.getElementById(Ap3).value)))+toInt(((document.getElementById(Ap4).value)))+toInt(((document.getElementById(Ap5).value)))+toInt(((document.getElementById(A1).value)))+toInt(((document.getElementById(A2).value)))+toInt(((document.getElementById(A3).value)))+toInt(((document.getElementById(A4).value)))+toInt(((document.getElementById(A5).value)))+toInt(((document.getElementById(Am1).value)))+toInt(((document.getElementById(Am2).value)))+toInt(((document.getElementById(Am3).value)))+toInt(((document.getElementById(Am4).value)))+toInt(((document.getElementById(Am5).value)))+toInt(((document.getElementById(Bp1).value)))+toInt(((document.getElementById(Bp2).value)))+toInt(((document.getElementById(Bp3).value)))+toInt(((document.getElementById(Bp4).value)))+toInt(((document.getElementById(Bp5).value)))+toInt(((document.getElementById(B1).value)))+toInt(((document.getElementById(B2).value)))+toInt(((document.getElementById(B3).value)))+toInt(((document.getElementById(B4).value)))+toInt(((document.getElementById(B5).value)))+toInt(((document.getElementById(Bm1).value)))+toInt(((document.getElementById(Bm2).value)))+toInt(((document.getElementById(Bm3).value)))+toInt(((document.getElementById(Bm4).value)))+toInt(((document.getElementById(Bm5).value)))+toInt(((document.getElementById(Cp1).value)))+toInt(((document.getElementById(Cp2).value)))+toInt(((document.getElementById(Cp3).value)))+toInt(((document.getElementById(Cp4).value)))+toInt(((document.getElementById(Cp5).value)))+toInt(((document.getElementById(C1).value)))+toInt(((document.getElementById(C2).value)))+toInt(((document.getElementById(C3).value)))+toInt(((document.getElementById(C4).value)))+toInt(((document.getElementById(C5).value)))+toInt(((document.getElementById(Cm1).value)))+toInt(((document.getElementById(Cm2).value)))+toInt(((document.getElementById(Cm3).value)))+toInt(((document.getElementById(Cm4).value)))+toInt(((document.getElementById(Cm5).value)))+toInt(((document.getElementById(Dp1).value)))+toInt(((document.getElementById(Dp2).value)))+toInt(((document.getElementById(Dp3).value)))+toInt(((document.getElementById(Dp4).value)))+toInt(((document.getElementById(Dp5).value)))+toInt(((document.getElementById(D1).value)))+toInt(((document.getElementById(D2).value)))+toInt(((document.getElementById(D3).value)))+toInt(((document.getElementById(D4).value)))+toInt(((document.getElementById(D5).value)))+toInt(((document.getElementById(Dm1).value)))+toInt(((document.getElementById(Dm2).value)))+toInt(((document.getElementById(Dm3).value)))+toInt(((document.getElementById(Dm4).value)))+toInt(((document.getElementById(Dm5).value)))+toInt(((document.getElementById(F1).value)))+toInt(((document.getElementById(F2).value)))+toInt(((document.getElementById(F3).value)))+toInt(((document.getElementById(F4).value)))+toInt(((document.getElementById(F5).value)))+toInt(((document.getElementById(Apval).value)))+toInt(((document.getElementById(Aval).value)))+toInt(((document.getElementById(Amval).value)))+toInt(((document.getElementById(Bpval).value)))+toInt(((document.getElementById(Bval).value)))+toInt(((document.getElementById(Bmval).value)))+toInt(((document.getElementById(Cpval).value)))+toInt(((document.getElementById(Cval).value)))+toInt(((document.getElementById(Cmval).value)))+toInt(((document.getElementById(Dpval).value)))+toInt(((document.getElementById(Dval).value)))+toInt(((document.getElementById(Dmval).value)))+toInt(((document.getElementById(Fval).value)))))
			{
			document.getElementById(Results1).value="";
			document.getElementById(Results2).value="";
			document.getElementById(Results3).value="";
			alert ("At least one of the entries is negative or invalid and needs to be corrected before you can calculate a GPA !!!!");
			return;
			}

		if (clicked == 0)
		{		
			calculateCollege();
		}
		else
		{
			Fill_Data(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				TypePage,HiddenCollegeExample1)
		}
	}


	// END OF COMPUTE THE COLLEGE GPA

</script>


<script type = "text/javascript">
	function UniversityGPAWeights()
	{
		var StanfordButton = document.getElementById("Stanford");
		var HarvardButton = document.getElementById("Harvard");
		var YaleButton = document.getElementById("Yale");
		var UCLAButton = document.getElementById("UCLA");
		var CustomizeButton = document.getElementById("Customize");
			
		var Apval=0; var Aval=0; var Amval=0;
		var Bpval=0; var Bval=0; var Bmval=0;
		var Cpval=0; var Cval=0; var Cmval=0;
		var Dpval=0; var Dval=0; var Dmval=0;
					 var Fval=0;

		if(StanfordButton.checked)	{
			Apval = 4.3; Aval = 4.0; Amval = 3.7;
			Bpval = 3.3; Bval = 3.0; Bmval = 2.7;
			Cpval = 2.3; Cval = 2.0; Cmval = 1.7;	
			Dpval = 1.3; Dval = 1.0; Dmval = 0.7;
			Fval = 0.0;
									}
		else if(HarvardButton.checked){
			Apval = 4.0; Aval = 4.0; Amval = 3.67;
			Bpval = 3.33; Bval = 3.0; Bmval = 2.67;
			Cpval = 2.33; Cval = 2.0; Cmval = 1.67;
			Dpval = 1.33; Dval = 1.0; Dmval = 0.67;
			Fval = 0.0;
									}			
		else if(YaleButton.checked){
			Apval = 4.33; Aval = 4.0; Amval = 3.67;
			Bpval = 3.33; Bval = 3.0; Bmval = 2.67;
			Cpval = 2.33; Cval = 2.0; Cmval = 1.67;
			Dpval = 1.0; Dval = 1.0; Dmval = 1.0;
			Fval = 0.0;
									}
		else if(UCLAButton.checked){
			Apval = 4.0; Aval = 4.0; Amval = 3.7;
			Bpval = 3.3; Bval = 3.0; Bmval = 2.7;
			Cpval = 2.3; Cval = 2.0; Cmval = 1.7;
			Dpval = 3.7; Dval = 1.0; Dmval = 0.7;
			Fval = 0.0;
									}
		else if(CustomizeButton.checked){
			Apval = 4.3; Aval = 4.0; Amval = 3.7;
			Bpval = 3.3; Bval = 3.0; Bmval = 2.7;
			Cpval = 2.3; Cval = 2.0; Cmval = 1.7;	
			Dpval = 1.3; Dval = 1.0; Dmval = 0.7;
			Fval = 0.0;
            
            document.getElementById("Apval").disabled = false;
            document.getElementById("Aval").disabled = false;
            document.getElementById("Amval").disabled = false;
            document.getElementById("Bpval").disabled = false;
            document.getElementById("Bval").disabled = false;
            document.getElementById("Bmval").disabled = false;
            document.getElementById("Cpval").disabled = false;
            document.getElementById("Cval").disabled = false;
            document.getElementById("Cmval").disabled = false;
            document.getElementById("Dpval").disabled = false;
            document.getElementById("Dval").disabled = false;
            document.getElementById("Dmval").disabled = false;
            document.getElementById("Fval").disabled = false;
	}
        
        if(!CustomizeButton.checked){
            document.getElementById("Apval").disabled = true;
            document.getElementById("Aval").disabled = true;
            document.getElementById("Amval").disabled = true;
            document.getElementById("Bpval").disabled = true;
            document.getElementById("Bval").disabled = true;
            document.getElementById("Bmval").disabled = true;
            document.getElementById("Cpval").disabled = true;
            document.getElementById("Cval").disabled = true;
            document.getElementById("Cmval").disabled = true;
            document.getElementById("Dpval").disabled = true;
            document.getElementById("Dval").disabled = true;
            document.getElementById("Dmval").disabled = true;
            document.getElementById("Fval").disabled = true;
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
 
</script>


	 
<!-- END OF UNIVERSITY JAVASCRIPTS --> 






<!-- START OF HIGH SCHOOL JAVASCRIPT -->  

	<script type = "text/javascript">
		// START OF EXAMPLE SECTION

		var HighSchoolDataArray = new Array();

		var clicked = 0;

		function Store_Points_Data(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage, HiddenPointsExample1)
		{

			document.bgColor = "87CEEB";
			
			clicked = 1; // disable the calc button
			
			document.getElementById(TypePage).innerHTML='High School Grade Calculator<br>- <u>EXAMPLE</u> -';
		
			document.getElementById(HiddenPointsExample1).style.display = 'block';
	
			document.getElementById("Calculate_HS_GPA").value = "Exit Example";
	
			document.getElementById("ExampleHighSchoolButton").value = "Exit Example";

			document.getElementById("HighSchoolTable").style.backgroundColor = "lightgray";
			
			HighSchoolDataArray[0] = document.getElementById(Apr).value;
			HighSchoolDataArray[1] = document.getElementById(Aph).value;
			HighSchoolDataArray[2] = document.getElementById(Apa).value;
			HighSchoolDataArray[3] = document.getElementById(Ar).value;
			HighSchoolDataArray[4] = document.getElementById(Ah).value;
			HighSchoolDataArray[5] = document.getElementById(Aa).value;
			HighSchoolDataArray[6] = document.getElementById(Amr).value;
			HighSchoolDataArray[7] = document.getElementById(Amh).value;
			HighSchoolDataArray[8] = document.getElementById(Ama).value;
			HighSchoolDataArray[9] = document.getElementById(Bpr).value;
			HighSchoolDataArray[10] = document.getElementById(Bph).value;
			HighSchoolDataArray[11] = document.getElementById(Bpa).value;
			HighSchoolDataArray[12] = document.getElementById(Br).value;
			HighSchoolDataArray[13] = document.getElementById(Bh).value;
			HighSchoolDataArray[14] = document.getElementById(Ba).value;
			HighSchoolDataArray[15] = document.getElementById(Bmr).value;
			HighSchoolDataArray[16] = document.getElementById(Bmh).value;
			HighSchoolDataArray[17] = document.getElementById(Bma).value;
			HighSchoolDataArray[18] = document.getElementById(Cpr).value;
			HighSchoolDataArray[19] = document.getElementById(Cph).value;
			HighSchoolDataArray[20] = document.getElementById(Cpa).value;
			HighSchoolDataArray[21] = document.getElementById(Cr).value;
			HighSchoolDataArray[22] = document.getElementById(Ch).value;
			HighSchoolDataArray[23] = document.getElementById(Ca).value;
			HighSchoolDataArray[24] = document.getElementById(Cmr).value;
			HighSchoolDataArray[25] = document.getElementById(Cmh).value;
			HighSchoolDataArray[26] = document.getElementById(Cma).value;
			HighSchoolDataArray[27] = document.getElementById(Dpr).value;
			HighSchoolDataArray[28] = document.getElementById(Dph).value;
			HighSchoolDataArray[29] = document.getElementById(Dpa).value;
			HighSchoolDataArray[30] = document.getElementById(Dr).value;
			HighSchoolDataArray[31] = document.getElementById(Dh).value;
			HighSchoolDataArray[32] = document.getElementById(Da).value;
			HighSchoolDataArray[33] = document.getElementById(Dmr).value;
			HighSchoolDataArray[34] = document.getElementById(Dmh).value;
			HighSchoolDataArray[35] = document.getElementById(Dma).value;
			HighSchoolDataArray[36] = document.getElementById(Fr).value;
			HighSchoolDataArray[37] = document.getElementById(Fh).value;
			HighSchoolDataArray[38] = document.getElementById(Fa).value;
			HighSchoolDataArray[39] = document.getElementById(HS_gpa).value;
			HighSchoolDataArray[40] = document.getElementById(HS_Unweighted_gpa).value;
			HighSchoolDataArray[41] = document.getElementById(HS_units).value;
			HighSchoolDataArray[42] = document.getElementById(HSApval).value;
			HighSchoolDataArray[43] = document.getElementById(HSAval).value;
			HighSchoolDataArray[44] = document.getElementById(HSAmval).value;
			HighSchoolDataArray[45] = document.getElementById(HSBpval).value;
			HighSchoolDataArray[46] = document.getElementById(HSBval).value;
			HighSchoolDataArray[47] = document.getElementById(HSBmval).value;
			HighSchoolDataArray[48] = document.getElementById(HSCpval).value;
			HighSchoolDataArray[49] = document.getElementById(HSCval).value;
			HighSchoolDataArray[50] = document.getElementById(HSCmval).value;
			HighSchoolDataArray[51] = document.getElementById(HSDpval).value;
			HighSchoolDataArray[52] = document.getElementById(HSDval).value;
			HighSchoolDataArray[53] = document.getElementById(HSDmval).value;
			HighSchoolDataArray[54] = document.getElementById(HSFval).value;

			
			document.getElementById(Apr).disabled = true;
			document.getElementById(Aph).disabled = true;
			document.getElementById(Apa).disabled = true;
			document.getElementById(Ar).disabled = true;
			document.getElementById(Ah).disabled = true;
			document.getElementById(Aa).disabled = true;
			document.getElementById(Amr).disabled = true;
			document.getElementById(Amh).disabled = true;
			document.getElementById(Ama).disabled = true;
			document.getElementById(Bpr).disabled = true;
			document.getElementById(Bph).disabled = true;
			document.getElementById(Bpa).disabled = true;
			document.getElementById(Br).disabled = true;
			document.getElementById(Bh).disabled = true;
			document.getElementById(Ba).disabled = true;
			document.getElementById(Bmr).disabled = true;
			document.getElementById(Bmh).disabled = true;
			document.getElementById(Bma).disabled = true;
			document.getElementById(Cpr).disabled = true;
			document.getElementById(Cph).disabled = true;
			document.getElementById(Cpa).disabled = true;
			document.getElementById(Cr).disabled = true;
			document.getElementById(Ch).disabled = true;
			document.getElementById(Ca).disabled = true;
			document.getElementById(Cmr).disabled = true;
			document.getElementById(Cmh).disabled = true;
			document.getElementById(Cma).disabled = true;
			document.getElementById(Dpr).disabled = true;
			document.getElementById(Dph).disabled = true;
			document.getElementById(Dpa).disabled = true;
			document.getElementById(Dr).disabled = true;
			document.getElementById(Dh).disabled = true;
			document.getElementById(Da).disabled = true;
			document.getElementById(Dmr).disabled = true;
			document.getElementById(Dmh).disabled = true;
			document.getElementById(Dma).disabled = true;
			document.getElementById(Fr).disabled = true;
			document.getElementById(Fh).disabled = true;
			document.getElementById(Fa).disabled = true;
			document.getElementById(HS_gpa).disabled = true;
			document.getElementById(HS_Unweighted_gpa).disabled = true;
			document.getElementById(HS_units).disabled = true;
			document.getElementById(HSApval).disabled = true;
			document.getElementById(HSAval).disabled = true;
			document.getElementById(HSAmval).disabled = true;
			document.getElementById(HSBpval).disabled = true;
			document.getElementById(HSBval).disabled = true;
			document.getElementById(HSBmval).disabled = true;
			document.getElementById(HSCpval).disabled = true;
			document.getElementById(HSCval).disabled = true;
			document.getElementById(HSCmval).disabled = true;
			document.getElementById(HSDpval).disabled = true;
			document.getElementById(HSDval).disabled = true;
			document.getElementById(HSDmval).disabled = true;
			document.getElementById(HSFval).disabled = true;

			
			document.getElementById(Apr).value = "";
			document.getElementById(Aph).value =  ""
			document.getElementById(Apa).value = "5";
			document.getElementById(Ar).value =  "2"
			document.getElementById(Ah).value =  "3"
			document.getElementById(Aa).value =  ""
			document.getElementById(Amr).value =  ""
			document.getElementById(Amh).value =  ""
			document.getElementById(Ama).value = "";
			document.getElementById(Bpr).value = "1";
			document.getElementById(Bph).value =  ""
			document.getElementById(Bpa).value =  "1"
			document.getElementById(Br).value = "";
			document.getElementById(Bh).value =  ""
			document.getElementById(Ba).value =  ""
			document.getElementById(Bmr).value =  ""
			document.getElementById(Bmh).value =  ""
			document.getElementById(Bma).value =  ""
			document.getElementById(Cpr).value =  ""
			document.getElementById(Cph).value = "";
			document.getElementById(Cpa).value =  ""
			document.getElementById(Cr).value =  ""
			document.getElementById(Ch).value =  ""
			document.getElementById(Ca).value = "";
			document.getElementById(Cmr).value =  ""
			document.getElementById(Cmh).value = "";
			document.getElementById(Cma).value =  ""
			document.getElementById(Dpr).value =  ""
			document.getElementById(Dph).value =  ""
			document.getElementById(Dpa).value =  ""
			document.getElementById(Dr).value =  ""
			document.getElementById(Dh).value =  ""
			document.getElementById(Da).value =  ""
			document.getElementById(Dmr).value =  ""
			document.getElementById(Dmh).value = "";
			document.getElementById(Dma).value =  ""
			document.getElementById(Fr).value =  ""
			document.getElementById(Fh).value =  ""
			document.getElementById(Fa).value =  ""
			document.getElementById(HS_gpa).value =  "4.76"
			document.getElementById(HS_Unweighted_gpa).value =  "3.83"
			document.getElementById(HS_units).value =  "12"

			document.getElementById(HSApval).value = "4.3";
			document.getElementById(HSAval).value = "4";
			document.getElementById(HSAmval).value = "3.7";
			document.getElementById(HSBpval).value = "3.3";
			document.getElementById(HSBval).value = "3";
			document.getElementById(HSBmval).value = "2.7";
			document.getElementById(HSCpval).value = "2.3";
			document.getElementById(HSCval).value = "2";
			document.getElementById(HSCmval).value = "1.7";
			document.getElementById(HSDpval).value = "1.3";
			document.getElementById(HSDval).value = "1";
			document.getElementById(HSDmval).value = "0.7";
			document.getElementById(HSFval).value = "0";
			

//			document.getElementById(PointsWarning1).innerHTML = '&nbsp';
//			document.getElementById(PointsWarning2).innerHTML = '&nbsp';
//			document.getElementById(PointsWarning3).innerHTML = '&nbsp';
//			document.getElementById(PointsWarning4).innerHTML = '&nbsp';
//			document.getElementById(PointsWarning5).innerHTML = '&nbsp';
			
		}


		function Fill_Points_Data(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage, HiddenPointsExample1)
		{

			document.bgColor = "white";
			
			clicked = 0; // reset the calc button
			
			document.getElementById(TypePage).innerHTML='High School Grade Calculator';
			
			document.getElementById(HiddenPointsExample1).style.display = 'none';

			document.getElementById("Calculate_HS_GPA").value = "Calculate!";

			document.getElementById("ExampleHighSchoolButton").value = "Click to See An Example";

			document.getElementById("HighSchoolTable").style.backgroundColor = "white";
		
			document.getElementById(Apr).value = HighSchoolDataArray[0];
			document.getElementById(Aph).value = HighSchoolDataArray[1];
			document.getElementById(Apa).value = HighSchoolDataArray[2];
			document.getElementById(Ar).value = HighSchoolDataArray[3];
			document.getElementById(Ah).value = HighSchoolDataArray[4];
			document.getElementById(Aa).value = HighSchoolDataArray[5];
			document.getElementById(Amr).value = HighSchoolDataArray[6];
			document.getElementById(Amh).value = HighSchoolDataArray[7];
			document.getElementById(Ama).value = HighSchoolDataArray[8];
			document.getElementById(Bpr).value = HighSchoolDataArray[9];
			document.getElementById(Bph).value = HighSchoolDataArray[10];
			document.getElementById(Bpa).value = HighSchoolDataArray[11];
			document.getElementById(Br).value = HighSchoolDataArray[12];
			document.getElementById(Bh).value = HighSchoolDataArray[13];
			document.getElementById(Ba).value = HighSchoolDataArray[14];
			document.getElementById(Bmr).value = HighSchoolDataArray[15];
			document.getElementById(Bmh).value = HighSchoolDataArray[16];
			document.getElementById(Bma).value = HighSchoolDataArray[17];
			document.getElementById(Cpr).value = HighSchoolDataArray[18];
			document.getElementById(Cph).value = HighSchoolDataArray[19];
			document.getElementById(Cpa).value = HighSchoolDataArray[20];
			document.getElementById(Cr).value = HighSchoolDataArray[21];
			document.getElementById(Ch).value = HighSchoolDataArray[22];
			document.getElementById(Ca).value = HighSchoolDataArray[23];
			document.getElementById(Cmr).value = HighSchoolDataArray[24];
			document.getElementById(Cmh).value = HighSchoolDataArray[25];
			document.getElementById(Cma).value = HighSchoolDataArray[26];
			document.getElementById(Dpr).value = HighSchoolDataArray[27];
			document.getElementById(Dph).value = HighSchoolDataArray[28];
			document.getElementById(Dpa).value = HighSchoolDataArray[29];
			document.getElementById(Dr).value = HighSchoolDataArray[30];
			document.getElementById(Dh).value = HighSchoolDataArray[31];
			document.getElementById(Da).value = HighSchoolDataArray[32];
			document.getElementById(Dmr).value = HighSchoolDataArray[33];
			document.getElementById(Dmh).value = HighSchoolDataArray[34];
			document.getElementById(Dma).value = HighSchoolDataArray[35];
			document.getElementById(Fr).value = HighSchoolDataArray[36];
			document.getElementById(Fh).value = HighSchoolDataArray[37];
			document.getElementById(Fa).value = HighSchoolDataArray[38];
			document.getElementById(HS_gpa).value = HighSchoolDataArray[39];
			document.getElementById(HS_Unweighted_gpa).value = HighSchoolDataArray[40];
			document.getElementById(HS_units).value = HighSchoolDataArray[41];
			document.getElementById(HSApval).value = HighSchoolDataArray[42];
			document.getElementById(HSAval).value = HighSchoolDataArray[43];
			document.getElementById(HSAmval).value = HighSchoolDataArray[44];
			document.getElementById(HSBpval).value = HighSchoolDataArray[45];
			document.getElementById(HSBval).value = HighSchoolDataArray[46];
			document.getElementById(HSBmval).value = HighSchoolDataArray[47];
			document.getElementById(HSCpval).value = HighSchoolDataArray[48];
			document.getElementById(HSCval).value = HighSchoolDataArray[49];
			document.getElementById(HSCmval).value = HighSchoolDataArray[50];
			document.getElementById(HSDpval).value = HighSchoolDataArray[51];
			document.getElementById(HSDval).value = HighSchoolDataArray[52];
			document.getElementById(HSDmval).value = HighSchoolDataArray[53];
			document.getElementById(HSFval).value = HighSchoolDataArray[54];

			
			document.getElementById(Apr).disabled = false;
			document.getElementById(Aph).disabled = false;
			document.getElementById(Apa).disabled = false;
			document.getElementById(Ar).disabled = false;
			document.getElementById(Ah).disabled = false;
			document.getElementById(Aa).disabled = false;
			document.getElementById(Amr).disabled = false;
			document.getElementById(Amh).disabled = false;
			document.getElementById(Ama).disabled = false;
			document.getElementById(Bpr).disabled = false;
			document.getElementById(Bph).disabled = false;
			document.getElementById(Bpa).disabled = false;		
			document.getElementById(Br).disabled = false;
			document.getElementById(Bh).disabled = false;
			document.getElementById(Ba).disabled = false;
			document.getElementById(Bmr).disabled = false;
			document.getElementById(Bmh).disabled = false;
			document.getElementById(Bma).disabled = false;
			document.getElementById(Cpr).disabled = false;
			document.getElementById(Cph).disabled = false;
			document.getElementById(Cpa).disabled = false;
			document.getElementById(Cr).disabled = false;
			document.getElementById(Ch).disabled = false;
			document.getElementById(Ca).disabled = false;
			document.getElementById(Cmr).disabled = false;
			document.getElementById(Cmh).disabled = false;
			document.getElementById(Cma).disabled = false;
			document.getElementById(Dpr).disabled = false;
			document.getElementById(Dph).disabled = false;
			document.getElementById(Dpa).disabled = false;
			document.getElementById(Dr).disabled = false;
			document.getElementById(Dh).disabled = false;
			document.getElementById(Da).disabled = false;
			document.getElementById(Dmr).disabled = false;
			document.getElementById(Dmh).disabled = false;
			document.getElementById(Dma).disabled = false;
			document.getElementById(Fr).disabled = false;
			document.getElementById(Fh).disabled = false;
			document.getElementById(Fa).disabled = false;
			document.getElementById(HS_gpa).disabled = false;
			document.getElementById(HS_Unweighted_gpa).disabled = false;
			document.getElementById(HS_units).disabled = false;
			document.getElementById(HSApval).disabled = false;
			document.getElementById(HSAval).disabled = false;
			document.getElementById(HSAmval).disabled = false;
			document.getElementById(HSBpval).disabled = false;
			document.getElementById(HSBval).disabled = false;
			document.getElementById(HSBmval).disabled = false;
			document.getElementById(HSCpval).disabled = false;
			document.getElementById(HSCval).disabled = false;
			document.getElementById(HSCmval).disabled = false;
			document.getElementById(HSDpval).disabled = false;
			document.getElementById(HSDval).disabled = false;
			document.getElementById(HSDmval).disabled = false;
			document.getElementById(HSFval).disabled = false;			
		}
		

		function Example_High_School_Switch(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage, HiddenPointsExample1)
		{
		if (clicked == 0)
			{
				Store_Points_Data(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage, HiddenPointsExample1);
			}
			else
			{
				Fill_Points_Data(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage,HiddenPointsExample1);
			}
		}


	function Calculate_High_School_Grade(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage,HiddenPointsExample1)
	{

// Error check to see if the Absolute Value of all inputs less the Actual Value of all inputs are equal or not.  That determines if an incorrect negative number was entered.
		if ((Math.abs(((document.getElementById(Apr).value)))+Math.abs(((document.getElementById(Aph).value)))+Math.abs(((document.getElementById(Apa).value)))+Math.abs(((document.getElementById(Ar).value)))+Math.abs(((document.getElementById(Ah).value)))+Math.abs(((document.getElementById(Aa).value)))+Math.abs(((document.getElementById(Amr).value)))+Math.abs(((document.getElementById(Amh).value)))+Math.abs(((document.getElementById(Ama).value)))+Math.abs(((document.getElementById(Bpr).value)))+Math.abs(((document.getElementById(Bph).value)))+Math.abs(((document.getElementById(Bpa).value)))+Math.abs(((document.getElementById(Br).value)))+Math.abs(((document.getElementById(Bh).value)))+Math.abs(((document.getElementById(Ba).value)))+Math.abs(((document.getElementById(Bmr).value)))+Math.abs(((document.getElementById(Bmh).value)))+Math.abs(((document.getElementById(Bma).value)))+Math.abs(((document.getElementById(Cpr).value)))+Math.abs(((document.getElementById(Cph).value)))+Math.abs(((document.getElementById(Cpa).value)))+Math.abs(((document.getElementById(Cr).value)))+Math.abs(((document.getElementById(Ch).value)))+Math.abs(((document.getElementById(Ca).value)))+Math.abs(((document.getElementById(Cmr).value)))+Math.abs(((document.getElementById(Cmh).value)))+Math.abs(((document.getElementById(Cma).value)))+Math.abs(((document.getElementById(Dpr).value)))+Math.abs(((document.getElementById(Dph).value)))+Math.abs(((document.getElementById(Dpa).value)))+Math.abs(((document.getElementById(Dr).value)))+Math.abs(((document.getElementById(Dh).value)))+Math.abs(((document.getElementById(Da).value)))+Math.abs(((document.getElementById(Dmr).value)))+Math.abs(((document.getElementById(Dmh).value)))+Math.abs(((document.getElementById(Dma).value)))+Math.abs(((document.getElementById(Fr).value)))+Math.abs(((document.getElementById(Fh).value)))+Math.abs(((document.getElementById(Fa).value)))+Math.abs(((document.getElementById(HSApval).value)))+Math.abs(((document.getElementById(HSAval).value)))+Math.abs(((document.getElementById(HSAmval).value)))+Math.abs(((document.getElementById(HSBpval).value)))+Math.abs(((document.getElementById(HSBval).value)))+Math.abs(((document.getElementById(HSBmval).value)))+Math.abs(((document.getElementById(HSCpval).value)))+Math.abs(((document.getElementById(HSCval).value)))+Math.abs(((document.getElementById(HSCmval).value)))+Math.abs(((document.getElementById(HSDpval).value)))+Math.abs(((document.getElementById(HSDval).value)))+Math.abs(((document.getElementById(HSDmval).value)))+Math.abs(((document.getElementById(HSFval).value))))
		!= (toInt(((document.getElementById(Apr).value)))+toInt(((document.getElementById(Aph).value)))+toInt(((document.getElementById(Apa).value)))+toInt(((document.getElementById(Ar).value)))+toInt(((document.getElementById(Ah).value)))+toInt(((document.getElementById(Aa).value)))+toInt(((document.getElementById(Amr).value)))+toInt(((document.getElementById(Amh).value)))+toInt(((document.getElementById(Ama).value)))+toInt(((document.getElementById(Bpr).value)))+toInt(((document.getElementById(Bph).value)))+toInt(((document.getElementById(Bpa).value)))+toInt(((document.getElementById(Br).value)))+toInt(((document.getElementById(Bh).value)))+toInt(((document.getElementById(Ba).value)))+toInt(((document.getElementById(Bmr).value)))+toInt(((document.getElementById(Bmh).value)))+toInt(((document.getElementById(Bma).value)))+toInt(((document.getElementById(Cpr).value)))+toInt(((document.getElementById(Cph).value)))+toInt(((document.getElementById(Cpa).value)))+toInt(((document.getElementById(Cr).value)))+toInt(((document.getElementById(Ch).value)))+toInt(((document.getElementById(Ca).value)))+toInt(((document.getElementById(Cmr).value)))+toInt(((document.getElementById(Cmh).value)))+toInt(((document.getElementById(Cma).value)))+toInt(((document.getElementById(Dpr).value)))+toInt(((document.getElementById(Dph).value)))+toInt(((document.getElementById(Dpa).value)))+toInt(((document.getElementById(Dr).value)))+toInt(((document.getElementById(Dh).value)))+toInt(((document.getElementById(Da).value)))+toInt(((document.getElementById(Dmr).value)))+toInt(((document.getElementById(Dmh).value)))+toInt(((document.getElementById(Dma).value)))+toInt(((document.getElementById(Fr).value)))+toInt(((document.getElementById(Fh).value)))+toInt(((document.getElementById(Fa).value)))+toInt(((document.getElementById(HSApval).value)))+toInt(((document.getElementById(HSAval).value)))+toInt(((document.getElementById(HSAmval).value)))+toInt(((document.getElementById(HSBpval).value)))+toInt(((document.getElementById(HSBval).value)))+toInt(((document.getElementById(HSBmval).value)))+toInt(((document.getElementById(HSCpval).value)))+toInt(((document.getElementById(HSCval).value)))+toInt(((document.getElementById(HSCmval).value)))+toInt(((document.getElementById(HSDpval).value)))+toInt(((document.getElementById(HSDval).value)))+toInt(((document.getElementById(HSDmval).value)))+toInt(((document.getElementById(HSFval).value))))   )
			{
			document.getElementById(HS_gpa).value="";
			document.getElementById(HS_Unweighted_gpa).value="";
			document.getElementById(HS_units).value="";
			alert ("At least one of the entries is negative or invalid and needs to be corrected before you can calculate a GPA !!!!");
			return;
			}

		if (clicked == 0)
		{
				calculateHighSchool();		
		}
		else
		{
				Fill_Points_Data(Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				TypePage,HiddenPointsExample1);
		}
	}	

	
		// END OF EXAMPLE SECTION

	</script>





<script type = "text/javascript">

	function HighSchoolGPAWeights()
	{
		// var HADefaultsButton = document.getElementById("HSDefaults");
				
		var HSApval=4.3; var HSAval=4.0; var HSAmval=3.7;
		var HSBpval=3.3; var HSBval=3.0; var HSBmval=2.7;
		var HSCpval=2.3; var HSCval=2.0; var HSCmval=1.7;
		var HSDpval=1.3; var HSDval=1.0; var HSDmval=0.7;
					 var HSFval=0;

		
		document.getElementById("HSApval").value = HSApval;
		document.getElementById("HSAval").value = HSAval;
		document.getElementById("HSAmval").value = HSAmval;
		document.getElementById("HSBpval").value = HSBpval;
		document.getElementById("HSBval").value = HSBval;
		document.getElementById("HSBmval").value = HSBmval;
		document.getElementById("HSCpval").value = HSCpval;
		document.getElementById("HSCval").value = HSCval;
		document.getElementById("HSCmval").value = HSCmval;
		document.getElementById("HSDpval").value = HSDpval;
		document.getElementById("HSDval").value = HSDval;
		document.getElementById("HSDmval").value = HSDmval;	
		document.getElementById("HSFval").value = HSFval;	
	}
 
</script>

<!-- END OF HIGH SCHOOL JAVASCRIPTS --> 



<!-- START OF JAVASCRIPT USED BY BOTH COLLEGE AND HIGH SCHOOL TO SHOW AND HIDE SECTIONS -->  

	<script type = "text/javascript">


function ShowHide(buttonID,init_val,end_val, divId, divId2,TypePage, ExampleBtn, ExampleHighSchoolBtn,
				Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
				Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
				Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
				Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
				F1, F2, F3, F4, F5,
				Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
				HiddenCollegeExample1,
				Apr, Aph, Apa, Ar, Ah, Aa, Amr, Amh, Ama,
				Bpr, Bph, Bpa, Br, Bh, Ba, Bmr, Bmh, Bma,
				Cpr, Cph, Cpa, Cr, Ch, Ca, Cmr, Cmh, Cma,
				Dpr, Dph, Dpa, Dr, Dh, Da, Dmr, Dmh, Dma,
				Fr, Fh, Fa,
				HS_gpa,HS_Unweighted_gpa,HS_units, HSApval, HSAval, HSAmval, HSBpval, HSBval, HSBmval, HSCpval, HSCval, HSCmval, HSDpval, HSDval, HSDmval, HSFval,
				HiddenPointsExample)

		{
		if(clicked == 1)
			{
			
				if (document.getElementById("button1").value == "Change to College Calculator")
				{
					Example_High_School_Switch('Apr', 'Aph', 'Apa', 'Ar', 'Ah', 'Aa', 'Amr', 'Amh', 'Ama',
				'Bpr', 'Bph', 'Bpa', 'Br', 'Bh', 'Ba', 'Bmr', 'Bmh', 'Bma',
				'Cpr', 'Cph', 'Cpa', 'Cr', 'Ch', 'Ca', 'Cmr', 'Cmh', 'Cma',
				'Dpr', 'Dph', 'Dpa', 'Dr', 'Dh', 'Da', 'Dmr', 'Dmh', 'Dma',
				'Fr', 'Fh', 'Fa',
				'HS_gpa','HS_Unweighted_gpa','HS_units', 'HSApval', 'HSAval', 'HSAmval', 'HSBpval', 'HSBval', 'HSBmval', 'HSCpval', 'HSCval', 'HSCmval', 'HSDpval', 'HSDval', 'HSDmval', 'HSFval',
				'TypeOfPageDescription','HiddenPointsExample1');
					
				}
				else
				{
					Example_Switch(Ap1, Ap2, Ap3, Ap4, Ap5, A1, A2, A3, A4, A5, Am1, Am2, Am3, Am4, Am5,
					Bp1, Bp2, Bp3, Bp4, Bp5, B1, B2, B3, B4, B5, Bm1, Bm2, Bm3, Bm4, Bm5,
					Cp1, Cp2, Cp3, Cp4, Cp5, C1, C2, C3, C4, C5, Cm1, Cm2, Cm3, Cm4, Cm5,
					Dp1, Dp2, Dp3, Dp4, Dp5, D1, D2, D3, D4, D5, Dm1, Dm2, Dm3, Dm4, Dm5,
					F1, F2, F3, F4, F5,
					Results1, Results2, Results3, Apval, Aval, Amval, Bpval, Bval, Bmval, Cpval, Cval, Cmval, Dpval, Dval, Dmval, Fval,
					TypePage,HiddenCollegeExample1);
				}
			}	

			
			if(document.getElementById(divId).style.display == 'none')
			{
			document.getElementById(divId).style.display='block';
			
			document.getElementById(divId2).style.display='none';

			document.getElementById(TypePage).innerHTML='College Grade Calculator';
			
			buttonID.value=init_val;
			}
			else
			{
			document.getElementById(divId).style.display = 'none';
			
			document.getElementById(divId2).style.display='block';

			document.getElementById(TypePage).innerHTML='High School Grade Calculator';
			
			buttonID.value=end_val;
			}
		}
	</script>

<!-- END OF JAVASCRIPT USED BY BOTH COLLEGE AND HIGH SCHOOL TO SHOW AND HIDE SECTIONS -->  





<!-- START OF HTML CODING, FOR REMAINDER OF THE PAGE -->  

<script src="calculateCollegeAndHighSchool.js"></script>
<?PHP include("header.php"); ?>
      
<div id=calcLabels>
<hr>
<font size="6" color="red"><center><p id="TypeOfPageDescription">College Grade Calculator</p></center></font>
<hr>
</div>

<input type="button" name="button1" id="button1" value="Change to High School Calculator" style="font-size: 100%; height: 30px; width: 450px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px"
		onclick="ShowHide(this,'Change to High School Calculator','Change to College Calculator', 'HiddenDiv', 'HiddenDiv2', 'TypeOfPageDescription','ExampleButton','ExampleHighSchoolButton',
				'Ap1', 'Ap2', 'Ap3', 'Ap4', 'Ap5', 'A1', 'A2', 'A3', 'A4', 'A5', 'Am1', 'Am2', 'Am3', 'Am4', 'Am5',
				'Bp1', 'Bp2', 'Bp3', 'Bp4', 'Bp5', 'B1', 'B2', 'B3', 'B4', 'B5', 'Bm1', 'Bm2', 'Bm3', 'Bm4', 'Bm5',
				'Cp1', 'Cp2', 'Cp3', 'Cp4', 'Cp5', 'C1', 'C2', 'C3', 'C4', 'C5', 'Cm1', 'Cm2', 'Cm3', 'Cm4', 'Cm5',
				'Dp1', 'Dp2', 'Dp3', 'Dp4', 'Dp5', 'D1', 'D2', 'D3', 'D4', 'D5', 'Dm1', 'Dm2', 'Dm3', 'Dm4', 'Dm5',
				'F1', 'F2', 'F3', 'F4', 'F5',
				'gpa','Unweighted_gpa','units', 'Apval', 'Aval', 'Amval', 'Bpval', 'Bval', 'Bmval', 'Cpval', 'Cval', 'Cmval', 'Dpval', 'Dval', 'Dmval', 'Fval',
				'HiddenCollegeExample',
				'Apr', 'Aph', 'Apa', 'Ar', 'Ah', 'Aa', 'Amr', 'Amh', 'Ama',
				'Bpr', 'Bph', 'Bpa', 'Br', 'Bh', 'Ba', 'Bmr', 'Bmh', 'Bma',
				'Cpr', 'Cph', 'Cpa', 'Cr', 'Ch', 'Ca', 'Cmr', 'Cmh', 'Cma',
				'Dpr', 'Dph', 'Dpa', 'Dr', 'Dh', 'Da', 'Dmr', 'Dmh', 'Dma',
				'Fr', 'Fh', 'Fa',
				'HS_gpa','HS_Unweighted_gpa','HS_units', 'HSApval', 'HSAval', 'HSAmval', 'HSBpval', 'HSBval', 'HSBmval', 'HSCpval', 'HSCval', 'HSCmval', 'HSDpval', 'HSDval', 'HSDmval', 'HSFval',
				'HiddenPointsExample1')">


				
				
		<br><br>


	<div id = "HiddenDiv">
    <form method="post" action="college.php">


		   <p>Calculate your college GPA by entering the number of classes you received a certain grade in and the number of units they were worth.  Then click enter or the Calculate! button and it will display your GPA.</p>

		<!-- START OF HIDE/DISPLAY SECTION 1-->

		<p><input type="button" value="Click to See An Example" id="ExampleButton" style="height: 30px; width: 200px;"
			onClick="Example_Switch('Ap1', 'Ap2', 'Ap3', 'Ap4', 'Ap5', 'A1', 'A2', 'A3', 'A4', 'A5', 'Am1', 'Am2', 'Am3', 'Am4', 'Am5',
				'Bp1', 'Bp2', 'Bp3', 'Bp4', 'Bp5', 'B1', 'B2', 'B3', 'B4', 'B5', 'Bm1', 'Bm2', 'Bm3', 'Bm4', 'Bm5',
				'Cp1', 'Cp2', 'Cp3', 'Cp4', 'Cp5', 'C1', 'C2', 'C3', 'C4', 'C5', 'Cm1', 'Cm2', 'Cm3', 'Cm4', 'Cm5',
				'Dp1', 'Dp2', 'Dp3', 'Dp4', 'Dp5', 'D1', 'D2', 'D3', 'D4', 'D5', 'Dm1', 'Dm2', 'Dm3', 'Dm4', 'Dm5',
				'F1', 'F2', 'F3', 'F4', 'F5',
				'gpa','Unweighted_gpa','units', 'Apval', 'Aval', 'Amval', 'Bpval', 'Bval', 'Bmval', 'Cpval', 'Cval', 'Cmval', 'Dpval', 'Dval', 'Dmval', 'Fval',
				'TypeOfPageDescription','HiddenCollegeExample')"></p>

			<br>


<!-- START OF HIDDEN COLLEGE EXAMPLE SECTION-->

<div id = "HiddenCollegeExample" style="DISPLAY: none">

<font color="white">
<table border="0" bgcolor="#000033"	>
<tr>
<td align="center"><b>IN THE EXAMPLE, YOU HAVE RECEIVED</b></td>
</tr>
<tr>
<td align="center"><b><u>THE FOLLOWING GRADES THUS FAR:</u></b></td>
<tr>
<tr></tr><tr></tr><tr></tr>
<td align="left">1. (2) A+'s in (1) unit courses.</td>
</tr>
<tr>
<td align="left">2. (3) A+'s in (3) unit courses.</td>
</tr>
<tr>
<td align="left">3. (4) A's in (4) unit courses.</td>
</tr>
<tr>
<td align="left">4. (1) A in a (5) unit course.</td>
</tr>
<tr>
<td align="left">5. (1) A- in a (2) unit course.</td>
</tr>
<tr>
<td align="left">6. (2) B+'s in (4) unit courses.</td>
</tr>
<tr>
<td align="left">7. (5) B's in (3) unit courses.</td>
</tr>
<tr>
<td align="left">8. (5) B's in (5) unit courses.</td>
</tr>
<tr>
<td align="left">9. (1) C+ in a (4) unit course.</td>
</tr>
<tr> <td>&nbsp</td></tr>
<td align="left">Results: Your Weighted GPA is 3.42, Unweighted GPA is 3.35,</td>
</tr>
<tr>
</tr>
<tr>
<td align="left"> and total Units completed is 86.</td>
</tr>
</table>
</font>


<br><br>

</div>  <!-- END OF HIDDEN SECTION 1-->
<!-- END OF HIDDEN COLLEGE EXAMPLE SECTION-->


			
	<table border="1" id="CollegeTable">

		<div id=topLabels>
			<td></td>
			<td align="center">1 Unit</td>
			<td align="center">2 Units</td>
			<td align="center">3 Units</td>
			<td align="center">4 Units</td>
			<td align="center">5 Units</td>
			<tr>			
		</div>

		<div id=sideLabels>
			<td align="left">A+</td>
		</div>
			<td><input type="text" id="Ap1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Ap2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Ap3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Ap4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Ap5" size="9" style="text-align:center;"></td>		</tr>
			
		<div id=sideLabels>
			<td align="left">A</td>
		</div>
			<td><input type="text" id="A1" size="9" style="text-align:center;"></td>		<td><input type="text" id="A2" size="9" style="text-align:center;"></td>		<td><input type="text" id="A3" size="9" style="text-align:center;"></td>		<td><input type="text" id="A4" size="9" style="text-align:center;"></td>		<td><input type="text" id="A5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">A-</td>
		</div>
			<td><input type="text" id="Am1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Am2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Am3"  size="9" style="text-align:center;"></td>	<td><input type="text" id="Am4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Am5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">B+</td>
		</div>
			<td><input type="text" id="Bp1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bp2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bp3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bp4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bp5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">B</td>
		</div>
			<td><input type="text" id="B1" size="9" style="text-align:center;"></td>		<td><input type="text" id="B2" size="9" style="text-align:center;"></td>		<td><input type="text" id="B3" size="9" style="text-align:center;"></td>		<td><input type="text" id="B4" size="9" style="text-align:center;"></td>		<td><input type="text" id="B5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">B-</td>
		</div>
			<td><input type="text" id="Bm1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bm2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bm3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bm4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Bm5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">C+</td>
		</div>
			<td><input type="text" id="Cp1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cp2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cp3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cp4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cp5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>  
			<td align="left">C</td>			
		</div>
			<td><input type="text" id="C1" size="9" style="text-align:center;"></td>		<td><input type="text" id="C2" size="9" style="text-align:center;"></td>		<td><input type="text" id="C3" size="9" style="text-align:center;"></td>		<td><input type="text" id="C4" size="9" style="text-align:center;"></td>		<td><input type="text" id="C5" size="9" style="text-align:center;"></td>		</tr>
	
		<div id=sideLabels>
			<td align="left">C-</td>
		</div>
			<td><input type="text" id="Cm1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cm2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cm3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cm4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Cm5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">D+</td>
		</div>
			<td><input type="text" id="Dp1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dp2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dp3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dp4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dp5" size="9" style="text-align:center;"></td>		</tr>
	
		<div id=sideLabels>  
			<td align="left">D</td>
		</div>
			<td><input type="text" id="D1" size="9" style="text-align:center;"></td>		<td><input type="text" id="D2" size="9" style="text-align:center;"></td>		<td><input type="text" id="D3" size="9" style="text-align:center;"></td>		<td><input type="text" id="D4" size="9" style="text-align:center;"></td>		<td><input type="text" id="D5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">D-</td>
                </div>
			<td><input type="text" id="Dm1" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dm2" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dm3" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dm4" size="9" style="text-align:center;"></td>		<td><input type="text" id="Dm5" size="9" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">F</td>
		</div>
			<td><input type="text" id="F1" size="9" style="text-align:center;"></td>		<td><input type="text" id="F2" size="9" style="text-align:center;"></td>		<td><input type="text" id="F3" size="9" style="text-align:center;"></td>		<td><input type="text" id="F4" size="9" style="text-align:center;"></td>		<td><input type="text" id="F5" size="9" style="text-align:center;"></td>		</tr>

	</table>
	
	<br>

<br><input type="button" onClick="Calculate_College_GPA('Ap1', 'Ap2', 'Ap3', 'Ap4', 'Ap5', 'A1', 'A2', 'A3', 'A4', 'A5', 'Am1', 'Am2', 'Am3', 'Am4', 'Am5',
				'Bp1', 'Bp2', 'Bp3', 'Bp4', 'Bp5', 'B1', 'B2', 'B3', 'B4', 'B5', 'Bm1', 'Bm2', 'Bm3', 'Bm4', 'Bm5',
				'Cp1', 'Cp2', 'Cp3', 'Cp4', 'Cp5', 'C1', 'C2', 'C3', 'C4', 'C5', 'Cm1', 'Cm2', 'Cm3', 'Cm4', 'Cm5',
				'Dp1', 'Dp2', 'Dp3', 'Dp4', 'Dp5', 'D1', 'D2', 'D3', 'D4', 'D5', 'Dm1', 'Dm2', 'Dm3', 'Dm4', 'Dm5',
				'F1', 'F2', 'F3', 'F4', 'F5',
				'gpa','Unweighted_gpa','units', 'Apval', 'Aval', 'Amval', 'Bpval', 'Bval', 'Bmval', 'Cpval', 'Cval', 'Cmval', 'Dpval', 'Dval', 'Dmval', 'Fval',
				'TypeOfPageDescription','HiddenCollegeExample')" id="Calculate" value="Calculate!" style="font-size: 100%; height: 30px; width: 130px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px">

<br><br>



	<table border="0">
		<tr>
			<td align="left"> Weighted GPA: &nbsp </td>	<td><input type="text" name="gpa" id="gpa" size="4" style="text-align:center;" readonly=""></td>
		</tr>
		<tr>
			<td align="left"> Unweighted GPA: &nbsp </td>	<td><input type="text" name="Unweighted_gpa" id="Unweighted_gpa" size="4" style="text-align:center;" readonly=""></td>
		</tr>
		<tr>
			<td align="left"> Units: &nbsp </td>	<td><input type="text" name="units" id="units" size="4" style="text-align:center;" readonly=""></td>
        </tr>
	</table>

<br>


	   
<form name="PopulateUniversityDefaults">
	
	<hr>
    <h4>GPA Grade Weights</h4>

	<p>You can use our default GPA weights, select a specific university or customize one for your university.</p>

	<table border="1">
		<tr>
			<td> &nbsp A+ &nbsp <input type="text" id="Apval" value="4.3" size="3" style="text-align:center;"></td>
			<td> &nbsp A &nbsp  <input type="text" id="Aval"  value="4" size="3" style="text-align:center;"></td>
			<td> &nbsp A- &nbsp <input type="text" id="Amval" value="3.7" size="3" style="text-align:center;"></td>
        </tr><tr>
			<td> &nbsp B+ &nbsp <input type="text" id="Bpval" value="3.3" size="3" style="text-align:center;"></td>
			<td> &nbsp B  &nbsp <input type="text" id="Bval"  value="3" size="3" style="text-align:center;"></td>
			<td> &nbsp B- &nbsp <input type="text" id="Bmval" value="2.7" size="3" style="text-align:center;"></td>
        </tr><tr>
			<td> &nbsp C+ &nbsp <input type="text" id="Cpval" value="2.3" size="3" style="text-align:center;"></td>
			<td> &nbsp C  &nbsp <input type="text" id="Cval"  value="2" size="3" style="text-align:center;"></td>
			<td> &nbsp C- &nbsp <input type="text" id="Cmval" value="1.7" size="3" style="text-align:center;"></td>
        </tr><tr>
			<td> &nbsp D+ &nbsp <input type="text" id="Dpval" value="1.3" size="3" style="text-align:center;"></td>
			<td> &nbsp D  &nbsp <input type="text" id="Dval"  value="1" size="3" style="text-align:center;"></td>
			<td> &nbsp D- &nbsp <input type="text" id="Dmval" value="0.7" size="3" style="text-align:center;"></td>
        </tr><tr><td> &nbsp </td>
			<td> &nbsp F  &nbsp <input type="text" id="Fval"  value="0" size="3" style="text-align:center;"></td><td></td>
        </tr>
	</table>
</br></br>
<p>Click the button to select a specific UNIVERSITY.</p>
		<input type="radio" name="University" id="Stanford" value="Stanford" onclick="UniversityGPAWeights()">Stanford
		<input type="radio" name="University" id="Harvard" value="Harvard" onclick="UniversityGPAWeights()">Harvard
		<input type="radio" name="University" id="Yale" value="Yale" onclick="UniversityGPAWeights()">Yale
		<input type="radio" name="University" id="UCLA" value="UCLA" onclick="UniversityGPAWeights()">UCLA
		<input type="radio" name="University" id="Customize" value="Customize" onclick="UniversityGPAWeights()" checked="checked">Customize

</form>	   
<br><br>	   


		</form>
</div>



<!-- START OF HIDDEN SECTION 2-->

	<div id = "HiddenDiv2" style="DISPLAY: none">
      <form method="post" action="highSchool.php">

	   <p>Calculate your high school GPA by entering the number of classes you received a certain grade in and the number of units they were worth.  Then click enter or the Calculate! button and it will display your GPA.</p>

		<p><input type="button" value="Click to See An Example" id="ExampleHighSchoolButton" style="height: 30px; width: 200px;"
			onClick="Example_High_School_Switch('Apr', 'Aph', 'Apa', 'Ar', 'Ah', 'Aa', 'Amr', 'Amh', 'Ama',
				'Bpr', 'Bph', 'Bpa', 'Br', 'Bh', 'Ba', 'Bmr', 'Bmh', 'Bma',
				'Cpr', 'Cph', 'Cpa', 'Cr', 'Ch', 'Ca', 'Cmr', 'Cmh', 'Cma',
				'Dpr', 'Dph', 'Dpa', 'Dr', 'Dh', 'Da', 'Dmr', 'Dmh', 'Dma',
				'Fr', 'Fh', 'Fa',
				'HS_gpa','HS_Unweighted_gpa','HS_units', 'HSApval', 'HSAval', 'HSAmval', 'HSBpval', 'HSBval', 'HSBmval', 'HSCpval', 'HSCval', 'HSCmval', 'HSDpval', 'HSDval', 'HSDmval', 'HSFval',
				'TypeOfPageDescription','HiddenPointsExample1')"></p>
		<br>



<!-- START OF HIDDEN HIGH SCHOOL EXAMPLE SECTION-->

	<div id = "HiddenPointsExample1" style="DISPLAY: none">

					<font color="white">	
					<table border="0" bgcolor="#000033"	>
						 <tr>
						 <td align="center"><b>IN THE EXAMPLE, YOU HAVE RECEIVED</b></td>
						 </tr>
						 <tr>
						 <td align="center"><b><u>THE FOLLOWING GRADES THUS FAR:</u></b></td>
						 <tr>
						 <tr></tr><tr></tr><tr></tr>
						 <td align="left">1. (5) A+'s in AP courses.</td>
						 </tr>
						 <tr>
						 <td align="left">2. (2) A's in Regular courses.</td>
						 </tr>
						 <tr>
						 <td align="left">3. (3) A's in Honors courses.</td>
						 </tr>
						 <tr>
						 <td align="left">4. (1) B+ in a Regular course.</td>
						 </tr>
						 <tr>
						 <td align="left">5. (1) B+ in an AP course.</td>
						 </tr>
                         <tr>
                         <td align="left">Including an extra point for Honors courses.</td>
                         </tr>
						 <tr> <td>&nbsp</td></tr>
						 <td align="left">Results: Your Weighted GPA is 4.76, Unweighted GPA is 3.83.</td>
						 </tr>
					</table>
					</font>
<br><br	>

	</div>  <!-- END OF HIDDEN HIGH SCHOOL EXAMPLE SECTION-->

		
	<table border="1" id="HighSchoolTable">
		<tr>

		
		<div id=hsCalcTopLabels>
			<td></td>
			<td align="center">Regular</td>
			<td align="center">Honors</td>
			<td align="center">AP</td>
			</tr>
		</div>

		<div id=sideLabels>
			<td align="left">A+</td>
		</div>
			<td><input type="text" id="Apr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Aph" size="10" style="text-align:center;"></td>		<td><input type="text" id="Apa" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">A</td>
		</div>
			<td><input type="text" id="Ar" size="10" style="text-align:center;"></td>		<td><input type="text" id="Ah" size="10" style="text-align:center;"></td>		<td><input type="text" id="Aa" size="10" style="text-align:center;"></td>		</tr>
			
		<div id=sideLabels>
			<td align="left">A-</td>
		</div>
			<td><input type="text" id="Amr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Amh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Ama" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">B+</td>
		</div>
		<td><input type="text" id="Bpr" size="10" style="text-align:center;"></td>			<td><input type="text" id="Bph" size="10" style="text-align:center;"></td>		<td><input type="text" id="Bpa" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">B</td>
		</div>
			<td><input type="text" id="Br" size="10" style="text-align:center;"></td>		<td><input type="text" id="Bh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Ba" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">B-</td>
		</div>
			<td><input type="text" id="Bmr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Bmh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Bma" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">C+</td>
		</div>
			<td><input type="text" id="Cpr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Cph" size="10" style="text-align:center;"></td>		<td><input type="text" id="Cpa" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>  
			<td align="left">C</td>			
		</div>
			<td><input type="text" id="Cr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Ch" size="10" style="text-align:center;"></td>		<td><input type="text" id="Ca" size="10" style="text-align:center;"></td>		</tr>
	
		<div id=sideLabels>
			<td align="left">C-</td>
		</div>
			<td><input type="text" id="Cmr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Cmh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Cma" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">D+</td>
		</div>
			<td><input type="text" id="Dpr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Dph" size="10" style="text-align:center;"></td>		<td><input type="text" id="Dpa" size="10" style="text-align:center;"></td>		</tr>
		
		<div id=sideLabels>  
			<td align="left">D</td>
		</div>
			<td><input type="text" id="Dr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Dh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Da" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">D-</td>
		</div>
			<td><input type="text" id="Dmr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Dmh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Dma" size="10" style="text-align:center;"></td>		</tr>

		<div id=sideLabels>
			<td align="left">F</td>
		</div>
			<td><input type="text" id="Fr" size="10" style="text-align:center;"></td>		<td><input type="text" id="Fh" size="10" style="text-align:center;"></td>		<td><input type="text" id="Fa" size="10" style="text-align:center;"></td>		</tr>
		
	</table>
	
	<br>

	
	<input type="checkbox" id="honorsBump" value="True" checked>Check to include extra point in calculation for honors classes!<br>
	


<br><input type="button" id="Calculate_HS_GPA" value="Calculate!" style="font-size: 100%; height: 30px; width: 130px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px"
		onClick="Calculate_High_School_Grade('Apr', 'Aph', 'Apa', 'Ar', 'Ah', 'Aa', 'Amr', 'Amh', 'Ama',
				'Bpr', 'Bph', 'Bpa', 'Br', 'Bh', 'Ba', 'Bmr', 'Bmh', 'Bma',
				'Cpr', 'Cph', 'Cpa', 'Cr', 'Ch', 'Ca', 'Cmr', 'Cmh', 'Cma',
				'Dpr', 'Dph', 'Dpa', 'Dr', 'Dh', 'Da', 'Dmr', 'Dmh', 'Dma',
				'Fr', 'Fh', 'Fa',
				'HS_gpa','HS_Unweighted_gpa','HS_units', 'HSApval', 'HSAval', 'HSAmval', 'HSBpval', 'HSBval', 'HSBmval', 'HSCpval', 'HSCval', 'HSCmval', 'HSDpval', 'HSDval', 'HSDmval', 'HSFval',
				'TypeOfPageDescription','HiddenPointsExample1')">
				
<br><br>




	<table border="0">
		<tr>
			<td align="left"> Weighted GPA: &nbsp </td>	<td><input type="text" name="HS_gpa" id="HS_gpa" size="4" style="text-align:center;" readonly=""></td>
		</tr>
		<tr>
			<td align="left"> Unweighted GPA: &nbsp </td>	<td><input type="text" name="HS_Unweighted_gpa" id="HS_Unweighted_gpa" size="4" style="text-align:center;" readonly=""></td>
		</tr>
		<tr>
			<td align="left"> Total Courses: &nbsp </td>	<td><input type="text" name="HS_units" id="HS_units" size="4" style="text-align:center;" readonly=""></td>
        </tr>
	</table>

<br>

	

	   
<form name="PopulateHighSchoolDefaults">
	
	<hr>
    <h4>GPA Grade Weights</h4>

	<p>You can use our default GPA weights or change to represent your High School.</p>

	<table border="1">
		<tr>
			<td> &nbsp A+ &nbsp <input type="text" id="HSApval" value="4.3" size="3" style="text-align:center;"></td>
			<td> &nbsp A &nbsp  <input type="text" id="HSAval"  value="4" size="3" style="text-align:center;"></td>
			<td> &nbsp A- &nbsp <input type="text" id="HSAmval" value="3.7" size="3" style="text-align:center;"></td>
        </tr><tr>
			<td> &nbsp B+ &nbsp <input type="text" id="HSBpval" value="3.3" size="3" style="text-align:center;"></td>
			<td> &nbsp B  &nbsp <input type="text" id="HSBval"  value="3" size="3" style="text-align:center;"></td>
			<td> &nbsp B- &nbsp <input type="text" id="HSBmval" value="2.7" size="3" style="text-align:center;"></td>
        </tr><tr>
			<td> &nbsp C+ &nbsp <input type="text" id="HSCpval" value="2.3" size="3" style="text-align:center;"></td>
			<td> &nbsp C  &nbsp <input type="text" id="HSCval"  value="2" size="3" style="text-align:center;"></td>
			<td> &nbsp C- &nbsp <input type="text" id="HSCmval" value="1.7" size="3" style="text-align:center;"></td>
        </tr><tr>
			<td> &nbsp D+ &nbsp <input type="text" id="HSDpval" value="1.3" size="3" style="text-align:center;"></td>
			<td> &nbsp D  &nbsp <input type="text" id="HSDval"  value="1" size="3" style="text-align:center;"></td>
			<td> &nbsp D- &nbsp <input type="text" id="HSDmval" value="0.7" size="3" style="text-align:center;"></td>
        </tr><tr><td> &nbsp </td>
			<td> &nbsp F  &nbsp <input type="text" id="HSFval"  value="0" size="3" style="text-align:center;"></td><td></td>
        </tr>
	</table>
</br></br>
<p>Click the button to return to defaults.</p>
<input type="button" value="Return to Defaults" style="font-size: 100%; height: 30px; width: 165px; font-family:arial;color:darkred; font-weight:bold; border-radius:15px/56px" onclick="HighSchoolGPAWeights()">
<br>

</form>	   
<br><br>	   


				   </form>
		<br><br>

	</form>

</div>  <!-- END OF HIDDEN SECTION 2-->	 


<?PHP include("footer.php"); ?>
</div>
</div>
