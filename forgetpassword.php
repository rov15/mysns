<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>frinds forget password</title>
<link rel="icon" href="./favicon.ico">
<link rel="stylesheet" href="stylesheets/style.css">
<style>
  	
       body {background-image:url('./bg.jpg');}
	
</style>
<script>
function fun(){
if(document.f.mailid.value.length<1)
{alert("enter mailid"); return false;}
if(document.f.sa.value.length<1)
{alert("enter security answer"); return false;}
return true;
}
</script>
</head>
<body>
<div id="forget"></div>
<br><br><br><br><br><br><br>
<center>
<font color="#669999">
<form action="./include/forgetpwd.php" method="post" name="f" onSubmit="return fun();">
<table>
<tr>
<th><div align="left">Enter Your Mail ID</div></th><td><div align="left">
  <input type="text" name="mailid">
</div></td>
</tr>
<tr>
<th><div align="left">Security Question</div></th>
<td><select name="sq">
<option value="0">................................</option>
<option value="nick name">Whats your Nick name?</option>
<option value="birth place">Whats your Birth place?</option>
</select>
</td>
</tr>
<tr>
<th><div align="left">Security Answer</div></th><td><div align="left">
  <input type="text" name="sa">
</div></td>
</tr>
<tr><th><br></th><td><br></td></tr>
<tr>
<td><input name="forget" type="submit" value="Submit"></td>
<td><input type="reset" value="Clear"></td>
</tr>
<tr><td colspan="2"><div align="left"><br>OR<br>Ask Admin for Password</div></td></tr>
</table>
</form>
</font>
<a href="index.php"><div id="bckbtn" ><br><br><font color="#999999">Back</font></div></a>
</center>
<script type="text/javascript">

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
