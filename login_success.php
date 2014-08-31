
<br> <br> <br>
<?php 
session_start();     
if (isset($_SESSION['username1'])) {
   echo 'Welcome, '.$_SESSION['username1']; 
} else {
echo 'Sorry, You are not logged in.';
  header("location:index.php");
}

?>


<!DOC
TYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        
		<title>Timeline - Crack The Code</title>
        
        
        
        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel=stylesheet media=screen>
        <link rel="stylesheet" href="/static/font-awesome/css/font-awesome.min.css">
        <link type="text/css" href="/static/css/errors.css" rel="stylesheet" />
        <link type="text/css" href="/static/css/styles.css" rel="stylesheet" />
        
        <link rel="shortcut icon" href="/static/images/favicon.ico" />
        <link rel="shortcut icon" href="/static/images/favicon.ico" />
        
        
    </head>

    <body background="111.jpg" class="" id="">
        <div id="wrap">
            <!-- NAVBAR BEGINS HERE -->
            
            <!-- NAVBAR
================================================== -->
<div class="navbar-sm">
    <div class="navbar-primary">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </button>
                <a class="navbar-brand">Crack The Code</a>
            </div><!--navbar-header-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" role="navigation" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/about">About</a></li>
                    
                    <li><a href="/register/teamlist">Team List</a></li>
                    <li><a href="/secondround/scoreboard">Scoreboard</a></li>
                    
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    
                    
                    <li><a href="logout.php"><i class="fa fa-user fa-fw"></i>Logout</a></li>
                     
                    
                    
                    
                    
                </ul>
            </div><!--collapse-->
        </div><!--container-->
        </nav> <!-- navbar navbar-inverse -->
    </div> <!--navbar-primary-->
</div> <!--navbar-sm -->

<!-- END NAVBAR 
=========================== -->

            
            <!-- end of NAVBAR -->
            <!-- HEADER -->
            
<div id="masthead">  
    <div class="container">
        <div class="row">
                
<h2><i class="fa fa-info-circle"></i>
    </h2>

        </div> <!--row-->
    </div><!-- container -->
</div><!--masthead-->

            <!-- END OF HEADER -->
            <!-- Content -->
            
<div id="content-col" class="container">
    

<div class="">
    <h1 style="font-size:55px;">Important Rules</h1>
</div><!--page-header-->
<h3 style="font-size:34px; color:black;">Play fair, have fun. Don't be a jerk.</h3>
<div class="well">
    <ul>
        <li style="font-size:20px; color:black;">The answers should be in small letters without any spaces. If this pattern is not followed your answers will not be accepted.</li>
        <li style="font-size:20px; color:black;">A member of one team is not allowed to share answers with another team. After all its a competition.</li>
        <li style="font-size:20px; color:black;">There's a hack to everything but don't ever try to hack the "CRACK THE CODE(CTC)" portal. We are not checking your hacking skills, play fair.  </li>
		<li style="font-size:20px; color:black;">If you find any other team trying to use any unfair means or trying to hack the CTC portal, do inform the admin immediately(+91-9719141628).</li>
        <li style="font-size:20px; color:black;">If any team once caught, using unfair means or doing something rubbish with the CTC portal, will directly be disqualified from the entire event TechnoSapien, without any clarifications.</li>
        <li style="font-size:20px; color:black;"> </li>
        <li style="font-size:20px; color:black;">Team TechnoSapien reserves the right to disqualify any team from the event and also decide the winner of the event.</li>
        <li style="font-size:20px; color:black;">The decision of the Team TechnoSapien is the final.</li>
    </ul>
</div><!--well-->

<br>
<div>
<h1 style="font-size:55px; text-align:; color:black; background-color: ; font-family:courier;">  </h1>
<form action="timeline.php">
<input type="submit" value="Let's Begin the CTC"  style="height: 50px; width: 400px; font-face: Verdana; font-size:30px; color:white; background-color:black; border: 3pt ridge lightgrey">
</form>
<br> <br> <br> <br>
</div>
</div><!-- container-->
<div class="push"></div>

            <!-- end of content -->
        </div> <!--wrap-->
       
        
        
		
		
        
        <script src="/static/js/jquery-1.9.0.js"></script>
        <script src="/static/sisyphus/sisyphus.min.js"></script>
        <script src="/static/datepicker/js/moment.min.js"></script>
        <script src="/static/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(function() { $("form").sisyphus(); } );
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-21201293-2']);
            _gaq.push(['_trackPageview']);

            (function() {
             var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
             ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
             var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
             })();
        </script>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" async></script>
    </body>
</html>

