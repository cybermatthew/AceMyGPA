// START OF COLLEGE CALCULATIONS
function calculateCollege(){
    var Apval=toFloat(document.getElementById("Apval").value);
    var Aval=toFloat(document.getElementById("Aval").value);
    var Amval=toFloat(document.getElementById("Amval").value);

    var Bpval=toFloat(document.getElementById("Bpval").value);
    var Bval=toFloat(document.getElementById("Bval").value);
    var Bmval=toFloat(document.getElementById("Bmval").value);

    var Cpval=toFloat(document.getElementById("Cpval").value);
    var Cval=toFloat(document.getElementById("Cval").value);
    var Cmval=toFloat(document.getElementById("Cmval").value);

    var Dpval=toFloat(document.getElementById("Dpval").value);
    var Dval=toFloat(document.getElementById("Dval").value);
    var Dmval=toFloat(document.getElementById("Dmval").value);
    
    var Fval=toFloat(document.getElementById("Fval").value);
    
    
    var Ap1 = toFloat(document.getElementById("Ap1").value); var Ap2 = toFloat(document.getElementById("Ap2").value); var Ap3 = toFloat(document.getElementById("Ap3").value); var Ap4 = toFloat(document.getElementById("Ap4").value); var Ap5 = toFloat(document.getElementById("Ap5").value);
    var A1 = toFloat(document.getElementById("A1").value); var A2 = toFloat(document.getElementById("A2").value); var A3 = toFloat(document.getElementById("A3").value); var A4 = toFloat(document.getElementById("A4").value); var A5 = toFloat(document.getElementById("A5").value);
    var Am1 = toFloat(document.getElementById("Am1").value); var Am2 = toFloat(document.getElementById("Am2").value); var Am3 = toFloat(document.getElementById("Am3").value); var Am4 = toFloat(document.getElementById("Am4").value); var Am5 = toFloat(document.getElementById("Am5").value);

    var Bp1 = toFloat(document.getElementById("Bp1").value); var Bp2 = toFloat(document.getElementById("Bp2").value); var Bp3 = toFloat(document.getElementById("Bp3").value); var Bp4 = toFloat(document.getElementById("Bp4").value); var Bp5 = toFloat(document.getElementById("Bp5").value);
    var B1 = toFloat(document.getElementById("B1").value); var B2 = toFloat(document.getElementById("B2").value); var B3 = toFloat(document.getElementById("B3").value); var B4 = toFloat(document.getElementById("B4").value); var B5 = toFloat(document.getElementById("B5").value);
    var Bm1 = toFloat(document.getElementById("Bm1").value); var Bm2 = toFloat(document.getElementById("Bm2").value); var Bm3 = toFloat(document.getElementById("Bm3").value); var Bm4 = toFloat(document.getElementById("Bm4").value); var Bm5 = toFloat(document.getElementById("Bm5").value);

    var Cp1 = toFloat(document.getElementById("Cp1").value); var Cp2 = toFloat(document.getElementById("Cp2").value); var Cp3 = toFloat(document.getElementById("Cp3").value); var Cp4 = toFloat(document.getElementById("Cp4").value); var Cp5 = toFloat(document.getElementById("Cp5").value);
    var C1 = toFloat(document.getElementById("C1").value); var C2 = toFloat(document.getElementById("C2").value); var C3 = toFloat(document.getElementById("C3").value); var C4 = toFloat(document.getElementById("C4").value); var C5 = toFloat(document.getElementById("C5").value);
    var Cm1 = toFloat(document.getElementById("Cm1").value); var Cm2 = toFloat(document.getElementById("Cm2").value); var Cm3 = toFloat(document.getElementById("Cm3").value); var Cm4 = toFloat(document.getElementById("Cm4").value); var Cm5 = toFloat(document.getElementById("Cm5").value);

    var Dp1 = toFloat(document.getElementById("Dp1").value); var Dp2 = toFloat(document.getElementById("Dp2").value); var Dp3 = toFloat(document.getElementById("Dp3").value); var Dp4 = toFloat(document.getElementById("Dp4").value); var Dp5 = toFloat(document.getElementById("Dp5").value);
    var D1 = toFloat(document.getElementById("D1").value); var D2 = toFloat(document.getElementById("D2").value); var D3 = toFloat(document.getElementById("D3").value); var D4 = toFloat(document.getElementById("D4").value); var D5 = toFloat(document.getElementById("D5").value);
    var Dm1 = toFloat(document.getElementById("Dm1").value); var Dm2 = toFloat(document.getElementById("Dm2").value); var Dm3 = toFloat(document.getElementById("Dm3").value); var Dm4 = toFloat(document.getElementById("Dm4").value); var Dm5 = toFloat(document.getElementById("Dm5").value);

    var F1 = toFloat(document.getElementById("F1").value); var F2 = toFloat(document.getElementById("F2").value); var F3 = toFloat(document.getElementById("F3").value); var F4 = toFloat(document.getElementById("F4").value); var F5 = toFloat(document.getElementById("F5").value);


    var PtsTimesUnits = (Apval*(Ap1+2*Ap2+3*Ap3+4*Ap4+5*Ap5))+(Aval*(A1+2*A2+3*A3+4*A4+5*A5))+(Amval*(Am1+2*Am2+3*Am3+4*Am4+5*Am5))+(Bpval*(Bp1+2*Bp2+3*Bp3+4*Bp4+5*Bp5))+(Bval*(B1+2*B2+3*B3+4*B4+5*B5))+(Bmval*(Bm1+2*Bm2+3*Bm3+4*Bm4+5*Bm5))+(Cpval*(Cp1+2*Cp2+3*Cp3+4*Cp4+5*Cp5))+(Cval*(C1+2*C2+3*C3+4*C4+5*C5))+(Cmval*(Cm1+2*Cm2+3*Cm3+4*Cm4+5*Cm5))+(Dpval*(Dp1+2*Dp2+3*Dp3+4*Dp4+5*Dp5))+(Dval*(D1+2*D2+3*D3+4*D4+5*D5))+(Dmval*(Dm1+2*Dm2+3*Dm3+4*Dm4+5*Dm5))+(Fval*(F1+2*F2+3*F3+4*F4+5*F5));
    var Unweighted_PtsTimesUnits = (4*(Ap1+(2*Ap2)+(3*Ap3)+(4*Ap4)+(5*Ap5)))+(4*(A1+(2*A2)+(3*A3)+(4*A4)+(5*A5)))+(4*(Am1+(2*Am2)+(3*Am3)+(4*Am4)+(5*Am5)))+(3*(Bp1+(2*Bp2)+(3*Bp3)+(4*Bp4)+(5*Bp5)))+(3*(B1+(2*B2)+(3*B3)+(4*B4)+(5*B5)))+(3*(Bm1+(2*Bm2)+(3*Bm3)+(4*Bm4)+(5*Bm5)))+(2*(Cp1+(2*Cp2)+(3*Cp3)+(4*Cp4)+(5*Cp5)))+(2*(C1+(2*C2)+(3*C3)+(4*C4)+(5*C5)))+(2*(Cm1+(2*Cm2)+(3*Cm3)+(4*Cm4)+(5*Cm5)))+(1*(Dp1+(2*Dp2)+(3*Dp3)+(4*Dp4)+(5*Dp5)))+(1*(D1+(2*D2)+(3*D3)+(4*D4)+(5*D5)))+(1*(Dm1+(2*Dm2)+(3*Dm3)+(4*Dm4)+(5*Dm5)))+(0*(F1+(2*F2)+(3*F3)+(4*F4)+(5*F5)));
    var SumUnits = (Ap1+2*Ap2+3*Ap3+4*Ap4+5*Ap5)+(A1+2*A2+3*A3+4*A4+5*A5)+(Am1+2*Am2+3*Am3+4*Am4+5*Am5)+(Bp1+2*Bp2+3*Bp3+4*Bp4+5*Bp5)+(B1+2*B2+3*B3+4*B4+5*B5)+(Bm1+2*Bm2+3*Bm3+4*Bm4+5*Bm5)+(Cp1+2*Cp2+3*Cp3+4*Cp4+5*Cp5)+(C1+2*C2+3*C3+4*C4+5*C5)+(Cm1+2*Cm2+3*Cm3+4*Cm4+5*Cm5)+(Dp1+2*Dp2+3*Dp3+4*Dp4+5*Dp5)+(D1+2*D2+3*D3+4*D4+5*D5)+(Dm1+2*Dm2+3*Dm3+4*Dm4+5*Dm5)+(F1+2*F2+3*F3+4*F4+5*F5);

    if(SumUnits == 0){
	document.getElementById("gpa").value="";
	document.getElementById("Unweighted_GPA").value="";
	document.getElementById("units").value="";
	return;
    }	

    var gpa = PtsTimesUnits/SumUnits;
    var Unweighted_gpa = Unweighted_PtsTimesUnits/SumUnits;
	
    gpa = Math.round(gpa*100)/100;
	Unweighted_gpa= Math.round(Unweighted_gpa*100)/100;
    document.getElementById("gpa").value=gpa;
    document.getElementById("Unweighted_gpa").value=Unweighted_gpa;
    document.getElementById("units").value=SumUnits;
}

function toFloat(strNum){
    if(strNum == "") return 0;
    else return parseFloat(strNum);
}


// START OF HIGH SCHOOL CALCULATIONS
function calculateHighSchool(){
//	var HonorsExtraPoint= '1'; // Honors extra point checkbox is checked

	var HonorsExtraPoint;

	if(document.getElementById("honorsBump").checked == true)
	{
	HonorsExtraPoint= 1; // Honors extra point checkbox is checked
	}
	else
	{
	HonorsExtraPoint= 0; // Honors extra point checkbox is not checked
	}
	  
	var HSApval=toFloat(document.getElementById("HSApval").value);
    var HSAval=toFloat(document.getElementById("HSAval").value);
    var HSAmval=toFloat(document.getElementById("HSAmval").value);

    var HSBpval=toFloat(document.getElementById("HSBpval").value);
    var HSBval=toFloat(document.getElementById("HSBval").value);
    var HSBmval=toFloat(document.getElementById("HSBmval").value);

    var HSCpval=toFloat(document.getElementById("HSCpval").value);
    var HSCval=toFloat(document.getElementById("HSCval").value);
    var HSCmval=toFloat(document.getElementById("HSCmval").value);

    var HSDpval=toFloat(document.getElementById("HSDpval").value);
    var HSDval=toFloat(document.getElementById("HSDval").value);
    var HSDmval=toFloat(document.getElementById("HSDmval").value);
    
    var HSFval=toFloat(document.getElementById("HSFval").value);
 
    var Apr = toFloat(document.getElementById("Apr").value); var Aph = toFloat(document.getElementById("Aph").value); var Apa = toFloat(document.getElementById("Apa").value);
    var Ar = toFloat(document.getElementById("Ar").value); var Ah = toFloat(document.getElementById("Ah").value); var Aa = toFloat(document.getElementById("Aa").value);
    var Amr = toFloat(document.getElementById("Amr").value); var Amh = toFloat(document.getElementById("Amh").value); var Ama = toFloat(document.getElementById("Ama").value);
   
    var Bpr = toFloat(document.getElementById("Bpr").value); var Bph = toFloat(document.getElementById("Bph").value); var Bpa = toFloat(document.getElementById("Bpa").value);
    var Br = toFloat(document.getElementById("Br").value); var Bh = toFloat(document.getElementById("Bh").value); var Ba = toFloat(document.getElementById("Ba").value);
    var Bmr = toFloat(document.getElementById("Bmr").value); var Bmh = toFloat(document.getElementById("Bmh").value); var Bma = toFloat(document.getElementById("Bma").value);

    var Cpr = toFloat(document.getElementById("Cpr").value); var Cph = toFloat(document.getElementById("Cph").value); var Cpa = toFloat(document.getElementById("Cpa").value);
    var Cr = toFloat(document.getElementById("Cr").value); var Ch = toFloat(document.getElementById("Ch").value); var Ca = toFloat(document.getElementById("Ca").value);
    var Cmr = toFloat(document.getElementById("Cmr").value); var Cmh = toFloat(document.getElementById("Cmh").value); var Cma = toFloat(document.getElementById("Cma").value);

    var Dpr = toFloat(document.getElementById("Dpr").value); var Dph = toFloat(document.getElementById("Dph").value); var Dpa = toFloat(document.getElementById("Dpa").value);
    var Dr = toFloat(document.getElementById("Dr").value); var Dh = toFloat(document.getElementById("Dh").value); var Da = toFloat(document.getElementById("Da").value);
    var Dmr = toFloat(document.getElementById("Dmr").value); var Dmh = toFloat(document.getElementById("Dmh").value); var Dma = toFloat(document.getElementById("Dma").value);

    var Fr = toFloat(document.getElementById("Fr").value); var Fh = toFloat(document.getElementById("Fh").value); var Fa = toFloat(document.getElementById("Fa").value);

	

    var HSPtsTimesUnits = ((HSApval*(Apr+Aph+Apa))+(Aph*HonorsExtraPoint)+(Apa))+((HSAval*(Ar+Ah+Aa))+(Ah*HonorsExtraPoint)+(Aa))+((HSAmval*(Amr+Amh+Ama))
		+(Amh*HonorsExtraPoint)+(Ama))+((HSBpval*(Bpr+Bph+Bpa))+(Bph*HonorsExtraPoint)+(Bpa))+((HSBval*(Br+Bh+Ba))+(Bh*HonorsExtraPoint)+(Ba))+((HSBmval*(Bmr+Bmh+Bma))
		+(Bmh*HonorsExtraPoint)+(Bma))+((HSCpval*(Cpr+Cph+Cpa))+(Cph*HonorsExtraPoint)+(Cpa))+((HSCval*(Cr+Ch+Ca))+(Ch*HonorsExtraPoint)+(Ca))+((HSCmval*(Cmr+Cmh+Cma))
		+(Cmh*HonorsExtraPoint)+(Cma))+((HSDpval*(Dpr+Dph+Dpa))+(Dph*HonorsExtraPoint)+(Dpa))+((HSDval*(Dr+Dh+Da))+(Dh*HonorsExtraPoint)+(Da))+((HSDmval*(Dmr+Dmh+Dma))+(Dmh*HonorsExtraPoint)+(Dma))+(HSFval*(Fr+Fh+Fa));


	var HSUnweighted_PtsTimesUnits = (4*(Apr+Aph+Apa))+(4*(Ar+Ah+Aa))+(4*(Amr+Amh+Ama))+(3*(Bpr+Bph+Bpa))+(3*(Br+Bh+Ba))+(3*(Bmr+Bmh+Bma))+(2*(Cpr+Cph+Cpa))
		+(2*(Cr+Ch+Ca))+(2*(Cmr+Cmh+Cma))+(1*(Dpr+Dph+Dpa))+(1*(Dr+Dh+Da))+(1*(Dmr+Dmh+Dma))+(0*(Fr+Fh+Fa));

    var HSSumUnits = (Apr+Aph+Apa)+(Ar+Ah+Aa)+(Amr+Amh+Ama)+(Bpr+Bph+Bpa)+(Br+Bh+Ba)+(Bmr+Bmh+Bma)+(Cpr+Cph+Cpa)+(Cr+Ch+Ca)+(Cmr+Cmh+Cma)
		+(Dpr+Dph+Dpa)+(Dr+Dh+Da)+(Dmr+Dmh+Dma)+(Fr+Fh+Fa);

    if(HSSumUnits == 0){
	document.getElementById("HS_gpa").value="";
	document.getElementById("HS_Unweighted_gpa").value="";
	document.getElementById("HS_units").value="";
	return;
    }	

	
    var HS_gpa = HSPtsTimesUnits/HSSumUnits;
    var HS_Unweighted_gpa = HSUnweighted_PtsTimesUnits/HSSumUnits;

    HS_gpa = Math.round(HS_gpa*100)/100;
	HS_Unweighted_gpa= Math.round(HS_Unweighted_gpa*100)/100;
    document.getElementById("HS_gpa").value=HS_gpa;
    document.getElementById("HS_Unweighted_gpa").value=HS_Unweighted_gpa;
    document.getElementById("HS_units").value=HSSumUnits;
//	alert ("OK");	
}