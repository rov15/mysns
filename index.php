<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>frinds home</title>
<link rel="icon" href="./favicon.ico">
<link rel="stylesheet" href="stylesheets/style.css">
<style>
  	
       body {background-image:url('./bg.jpg');}
	
</style>
<script>
function fun(){
if(document.l.id.value.length<1)
{alert("You forget to enter ID"); return false;}
if(document.l.pwd.value.length<1)
{alert("Password is missing"); return false;}
return true;
}
</script>
</head>
<body>
<div id="container">
<div id="banner"></div>
<div class="container_1">
<form action="./include/dolog.php" method="post" name="l" onSubmit="return fun();">
<table>
<tr>
<th><font color="#3399FF">Login ID</font></th><td><input type="text" name="id" size="18"></td>
</tr>
<tr>
<th><font color="#3399FF">Password</font></th><td><input type="password" name="pwd" size="19"></td>
</tr>
<tr>
  <td colspan="2"><center><input name="login" type="submit" value="Go"></center></td>
</tr>
</table>
</form>
&nbsp;&nbsp;&nbsp;
<a href="register.php"><div id="register"></div></a>
<a href="forgetpassword.php"><div id="frgt"></div></a>
</div>
<div id="features"><a href="gal.php"><div id="pg"></div></a><a href="https://www.facebook.com/rovvv?ref=tn_tnmn"><div id="fb"></div></a>
<a href="http://www.twitter.com"><div id="twt"></div></a><a href="about.php"><div id="about"></div></a>
<a href="onfire.php"><div id="otf"></div></a>
</div>
<div class="container_2"><font size="-1" color="#339999">Developed by </font> <font color="#CCCCCC">ROV</font><br>
<font color="#cccccc">©2013</font> </div>
</div>
</body>
<html>
