<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MOD</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="classification" content="Personal">
    <meta name="distribution" content="Global">
    <link href="https://www.divestock.com/calc/css/global_mm.css" rel="stylesheet" type="text/css">
	<link href="https://www.divestock.com/calc/mod/fonts/stylesheet.css" rel="stylesheet" type="text/css">



<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46 && !=8)
            return false;

         return true;
      }
      //-->
</SCRIPT>

<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
   if (document.calc.calc_fo2.value == "" || isNaN(document.calc.calc_fo2.value) || document.calc.calc_fo2.value <= 0)
   {
     alert( "Please provide positive value!" );
     document.calc.calc_fo2.focus() ;
     return false;
   }
   
   if (document.calc.calc_ppo2.value == "" || isNaN(document.calc.calc_ppo2.value) || document.calc.calc_ppo2.value <= 0)
   {
     alert( "Please provide positive value!" );
     document.calc.calc_ppo2.focus() ;
     return false;
   }
   
   return( true );
}
//-->
</script>
	
</head>

<body>

<table style="margin:0 auto;max-width: 81%;" summary="" border="0" cellpadding="0" cellspacing="0" >
  <tbody>

	<tr>
	  <td valign="top" width="415">
		<div class="calculator"><h1>Maximum Operating Depth (MOD) Calculator</h1></div>

	<form action="" method="post" name="calc" id="calc" class="f-wrap-1" onsubmit="return(validate());">
	<input type="hidden" name="form_complete" value="1">
	<div class="calcu_inn">
		<span class="calcu-subtitle"><small>Please fill in all the fields</small></span>
			<table summary="" border="0" cellpadding="3" cellspacing="3" width="100%">
					 <tbody>
					  <tr>
						<td valign="top" width="100%" align="right">
				<label for="calc_fo2"><b>Fraction of Oxygen (FO<sub>2</sub>)</b></label>
						</td>
						<td valign="top" align="left">
				<input id="calc_fo2" name="calc_fo2" maxlength="256" size="10" class="f-name" tabindex="1" value="0.32" type="text" required="required"  onkeypress="return isNumberKey(event)" ><br>
				<small>e.g. 0.21 (= 21%)</small><br>
						</td>
					  </tr>
					  <tr>
						<td valign="top" width="190" align="right">
				<label for="calc_ppo2"><b>Partial Pressure Oxygen (ppO<sub>2</sub>)</b></label>
						</td>
						<td valign="top" align="left">
				<input id="calc_ppo2" name="calc_ppo2" maxlength="256" size="10" class="f-name" tabindex="2" value="1.4" type="text" required="required"  onkeypress="return isNumberKey(event)" ><br>
				<small>1.2 to 1.6 bar</small><br>
						</td>
					  </tr>
					 </tbody>
			</table>
	<div class="f-submit-wrap">
	 <input name="send_calc" value="sent" type="hidden">
	<p align="center">
	 <div class="sub">
	 <input value="Submit" class="f-submit" onClick="document.getElementById('calc').submit()" src="images/button.png" alt="submit" name="imageField" tabindex="6" type="image"> 
	 </div>
	</p>
	</div>
	</div>
	</form>

<p>If your FO<sub>2</sub> is <b>32%</b>
and your ppO<sub>2</sub> is <b>1.4</b> bar then your Maximum Operating Depth is<br>
<strong class="result">33.75 metres</strong>
</p>


</td>
</tr>
</tbody>
</table>

</body>
</html>