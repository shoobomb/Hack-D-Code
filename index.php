<?php 
session_start();     
if (isset($_SESSION['username1'])) {
   header("location:login_success.php");
} else {

 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Welcome to TechnoSapien!</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

</HEAD>
<BODY width="auto" bgcolor="black">
<span class="imgpos">

<img src="" width="250" height="250">
</span>
<span class="imgpos1">

<img src="hacker.gif" width="250" height="300">

</span>

<div align="Center">
<FONT  face="Courier" align="Center "Size="45"  Color="White"><br>&nbsp;_CraCk tHe C0dE_ </FONT><br>
</div>          <br> <br> <br> <br> <br>
                <form action="login.php" method="POST">
                <p style="color:blue; text-align:center; font-family:Verdana; font-size:28px;"> Members Login</p>
		<div><p style="text-align:center; color:White; font-family:Arial; font-size:18px;">Username &nbsp;<input style="width:200px; margin-left: 10px" type="text" name="user" /></div>
		<p style="text-align:center; color:white; font-family:Arial; font-size:18px;">Password &nbsp;<input style="width:200px; margin-left: 10px" type="password" name="pass" />
		<br /> <br />
		&nbsp;&nbsp;<input type="submit" value="LOGIN" />
		</form>
<br>
<br><br><br><br><br><br><br><br>
<Font face=="Calibri" size="5" color="Red"><marquee align="bottom" width="" behavior="scroll" direction="left" scrollamount="4" color="Red">UNDER PROCESS...DEVELOPERS AT WORK!!!</marquee></Font>



<style type=text/css>
.imgpo {
     max-width:80%;
     height:auto;
	position:absolute ;
	top: 24%;
	left: 16%;
}
</style>
<style type=text/css>
.imgpos1 {
     max-width:80%;
     height:auto;
	position:absolute ;
	top: 32%;
	left: 67%;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

</BODY>
</HTML>
