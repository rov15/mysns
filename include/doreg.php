<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>friends</title>
	<link rel="stylesheet" href="../stylesheets/style.css">
	<link rel="icon" href="../favicon.ico">
    <style>
		body {background-image:url(../bg.jpg);}
	</style>
</head>
<body>
<center>
<div id="monda_font">
<?php
require("./config.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
 {
   if(isset($_POST['register']))
     {
	   header("refresh:15; url:..index.php");
	   $mymailid=addslashes($_POST['mailid']);
	   $sql="SELECT email FROM users WHERE email='$mymailid'";
	   $result=mysql_query($sql) or die(mysql_error());
	   $row=mysql_fetch_array($result);
	   $count=mysql_num_rows($result);
	     if($count==false)
		   {
		     $myuserid=addslashes($_POST['id']);
			 $myname=addslashes($_POST['nme']);
			 $mypassword=addslashes($_POST['pwd']);
			 $myreg=addslashes($_POST['regi_no']);
			 $mysex=addslashes($_POST['sex']);
			 $mymob=addslashes($_POST['mob_no']);
			 $mysq=addslashes($_POST['sq']);
			 $mysa=addslashes($_POST['sa']);
			 mysql_query("INSERT INTO users(uid,name,pwd,reg,sex,email,mob,sq,sa) VALUES('$myuserid','$myname','$mypassword','$myreg','$mysex','$mymailid','$mymob','$mysq','$mysa')") or die(mysql_error());
			 ?>
             <br><br><br><br><br><br>
             <?php
			 header('location:../myinfo.php');
			}
		  else
		    {
			  header( "refresh:5;url=../register.php" );
			  ?>
              <br><br><br><br><br><br>
              <?php
			  $error="Incomplete: mailid or registration_no alrady exist";
			  echo $error;
			 }
			}
		 }
?>
</div>
</center>
<script>
  var count = 15, unit;

  var counter = setInterval(timer, 1000);

  function timer()
  {
    count = count - 1;
    if( count <= 0 )
      clearInterval(counter);
    if( count == 1 )
      unit = ' second';
    else
      unit = ' seconds';

    document.getElementById("timer").innerHTML = count + unit;
  }
</script>

<script type="text/javascript">

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
