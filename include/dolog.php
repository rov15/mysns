<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>friends</title>
	<link rel="stylesheet" href="../stylesheets/style.css">
	<link rel="icon" href="../favicon.ico">
    <style>
		body {background-image:url('../bg.jpg');}
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
   if(isset($_POST['login']))
     {
			$myuserid = addslashes($_POST['id']);
			$mypassword = addslashes($_POST['pwd']);
			$sql="SELECT uid, name, sex, email, dp FROM users WHERE uid='$myuserid' and pwd='$mypassword'";
		    $result = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($result);
			$myusername = $row['name'];
			$mysex= $row['sex'];
			$mymail=$row['email'];
			$mydp=$row['dp'];
			$count = mysql_num_rows($result);
			
			if($count == true)
			  { 
			    $_SESSION['login_id']=$myuserid;
				$_SESSION['login_name']=$myusername;
				$_SESSION['my_sex']=$mysex;
				$_SESSION['my_mail']=$mymail;
				$_SESSION['my_dp']=$mydp;
				header('location:../myprofile.php');
			  }
			 else
			  {
			    header( "refresh:5;url=../index.php" );
				?>
                 <br><br><br><br><br><br><br><br>
                <?php
			    $error="Incorrect UserID or Password";
			    echo $error;
				?>
                <a href="../index.php"><div id="bckbtn" ><br><br><font color="#999999">Back</font></div></a>
                <?php
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
