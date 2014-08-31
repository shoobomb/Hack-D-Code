<?php
	$username = "root";
	$password = "-------";
	$hostname = "-------";
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to the database");
	
	$selected = mysql_select_db("login", $dbhandle);
	
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
	
	$myusername= stripslashes($myusername);
	$mypassword= stripslashes($mypassword); 
	
	$query = "SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	mysql_close();
	
	if($count==1){
	    session_start();
		$_SESSION['username1']=$myusername;
		$seconds = 10 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:login_success.php");
	}
	else{
		echo "<html>";
                echo "<title>Oops!</title>";
                echo "<h1 style=\"font-size:50; font-family:Verdana; color:grey \"> :(  Oh, Crap!</h1>";
                echo "<p style=\"text-align:center; font-family:Courier; font-size:40 ; color: ;\">Invalid Login Credentials</p>";
                echo "</html>";
	}

?>


<html>
<style type=text/css>
.imgpos {
	position: absolute;
	top: 28%;
	left: 23%;
}


img, img.scale-with-grid { outline: 0; max-width: 100%; height: auto; }
</style>
	<body bgcolor="#F8F8F8 ">
                <span class="imgpos">
                <img src="404.png" width="750" height="450">
                </span>
		
	</body>
</html>





