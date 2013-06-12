<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>frinds gallery</title>
<link rel="icon" href="./favicon.ico">
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/nivo-slider.css">
<style>
  	
       body {background-image:url('./bg.jpg');}
	
</style>
</head>
<body>
<div id="gallery"></div>
<br><br><br><br>
<center>
  <table width="949" border="10" bordercolor="#191919">
    <tr>
      <td width="939" height="280">
           
            <div id="slider" class="nivoSlider">
                <img src="stylesheets/images/1.jpg" alt="" />
                <img src="stylesheets/images/2.jpg" alt=""/>
                <img src="stylesheets/images/3.jpg" alt="" />
                <img src="stylesheets/images/4.jpg" alt="" />
                
                            </div>        

<script type="text/javascript" src="javascript/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
      </td>
    </tr>
  </table>
<a href="index.php"><div id="bckbtn" ><br><br><font color="#999999">Back</font></div></a>
</center>
</body>
</html>
