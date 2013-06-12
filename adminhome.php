<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>admin home</title>
<link rel="icon" href="./favicon.ico">
<link rel="stylesheet" href="stylesheets/style.css">
<style>
  	
       body {background-image:url('./bg.jpg');}
	
</style>
</head>
<body>
<div id="monda_font">
  <center><br>
<br><br>
    <table width="726" height="290" border="5">
       <tr>
         <td><div align="center"><font color="#666666" size="10px">WELCOME ADMIN</font></div></td>
         <td><div align="center"><form name="form2" action="./include/logout.php">
           <input type="image" src="stylesheets/images/logoutbtn.png"></form>
         </div></td>
       </tr>
       <tr>
         <td><div align="center" >Post Polling Question</br>
              <form action="./include/polling.php" method="post" name="f">
             <textarea name="ppoll"></textarea>
              <input name="poll" type="submit" value="Ok"> 
              </form>
              <br> <font size="-3">(Answer Will be in Yes and No)</font></div>
         </td>
         <td><div align="center">View result of poling</div></td>
       </tr>
       <tr>
         <td><div align="center" >Set Admin UserID and Password for Next Week<br>
          <form action="./include/setadd.php" method="post" name="form_b">
          <input type="text" name="puid" value="UserID">
          <input type="text" name="ppwd" value="Password">
          <input name="add" type="submit" value="Submit"></div>
          </form>
         </td>
         <td><div align="center">View Feedback</div></td>
       </tr>
     </table> 
</center>
</div>
</body>
</html>
