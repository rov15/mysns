<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>profile</title>
<link rel="icon" href="./favicon.ico">
<link rel="stylesheet" href="stylesheets/style.css">
<style>
  	
       body {background-image:url('./bg.jpg');}
	
</style>
</head>
<body>
<div id="monda_font">
<center>
<table width="1200">
  <tr>
    <td width="290" height="38"><div align="left"><nav>
        <ul class="my_menu">
          <li><a href="wallwall.php">Wall</a></li>
          <li><a href="inbox.php">Inbox</a></li>
          <li><a href="#">Buddies</a></li>
          <li><a href="myprofile.php">Profile</a></li>
        </ul>
        </nav>
        </div>        </td>
    <td width="676"><font color="#3399CC" size="10px"><?php echo $_SESSION['login_name']; ?></font></td>
    <td width="212"> 
     <form name="form2" action="./include/logout.php">
     <input type="image" src="stylesheets/images/logoutbtn.png">
     </form>    </td>
  </tr>
  <tr>
    <td height="265"> <?php echo $_SESSION['my_dp']; ?></td>
    <td rowspan="2"><p><font color="#666666">Personal information</font></p>
    <p>Sex: <?php echo $_SESSION['my_sex']; ?></p>
    <p>MailID: <?php echo $_SESSION['my_mail']; ?></p>
    <p> edit profile...</p></td>
    <td rowspan="2">
    <div align="left">
    <font size="2px">
    <a href="#">Poke</a><br>
    <a href="#">Throw arrow</a><br>
    <a href="#">Add Friends</a><br>
    <a href="#">Send messages</a><br>
    <a href="#">Participate in contests</a>    </font>    </div>    </td>
  </tr>
  <tr>
    <td height="41"><a href="dp.php"> PHOTO</a></td>
  </tr>
  <tr>
    <td height="134">Polling Question<br>
    <font size="-1">
    <?php
	require("./include/config.php");
	$sql="SELECT question from polling";
	$result=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($result);
	$qstn=$row['question'];
	echo $qstn;
	?>
    </font>
    <br>
    <form action="./include/polling.php" method="post" name="form"> 
    <input type="radio" value="Yes" name="poll_a">Yes
    <input type="radio" value="No" name="poll_a">No
    <br>
    <input type="submit" name="polling_a" value="Ok">
    </td>
    <td>  
        <form action="./include/wall.php" method="post" name="form1">
        <input type="text" name="status" value="Update your status">
        <input type="submit" value="post" name="wall_post">
    </td>
    <td>
    Polling Result<br>
    <font size="-1">
    <?php
	     $sql="SELECT question,yes,no FROM polling";
		 $result=mysql_query($sql) or die(mysql_error());
		 $row=mysql_fetch_array($result);
		 $qstn=$row['question'];
		 $yes=$row['yes'];
		 $no=$row['no'];
		 echo $qstn;
		 ?>
         <br>Yes:
         <?php
		 echo $yes;
		 ?>
         &nbsp;&nbsp;&nbsp;&nbsp;No:
         <?php
		 echo $no;
	?>
    </font>    </td>
  </tr>
  <tr>
    <td height="130" colspan="2">
    <?php
	 $uid=$_SESSION['login_id'];
	 $sql="SELECT uid,name from users WHERE uid!='$uid'";
	 $result=mysql_query($sql)or die(mysql_error());
	 while ($row=mysql_fetch_array($result))
	 {
	  $users=$row['name'];
	  ?>
      <a href="#">
      <?php
	  echo $users; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a> <?php
	 }
	?>
    </td>
    <td>      </td>
  </tr>
</table>
</center>
</div>
<script type="text/javascript">

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
      
</body>
</html>
