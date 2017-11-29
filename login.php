<!DOCTYPE html>

<?php
		if(isset($_GET['username']) && isset($_GET['password1'])){
	        openUser($_GET['username'], $_GET['password1']);
	  }
    
    function openUser($user1, $pass1){
        $host = "127.0.0.1";
        
        $user = "sneharams";                     //Your Cloud 9 username
        $pass = "";                                  //Remember, there is NO password by default!
        $db = "squad_db";                                  //Your database name you want to connect to
        $port = 3306;                                //The port #. It is always 3306
        
        	$connection = mysqli_connect($host, $user, $pass, $db, $port);
        	if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        	}
        	
        	$query = "SELECT * FROM users";
					$result = mysqli_query($connection, $query);
        	while ($row = mysqli_fetch_assoc($result)) {
              if ($row['username'] == $user1 && $row['password'] == $pass1){
              		echo "<script> window.location='https://squad-sneharams.c9users.io/index.php?username=".$user1."&date=12/18/2016'</script>";
  								exit();
              	
              } 
          }
          echo "Incorrect values. Please retry.";
		     
		        
		      $connection -> close();

    	}
    

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Squad - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    img.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    }
    
    </style>
    
  </head>
  

  <body style="background-color:#f48071;">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
   
	  <div id="login-page">
	  	<div class="container">
	  	    <img src="/Captured.PNG" alt="Logo" style="width:200px;height:95px;" class="center">
		      <form class="form-login" method="get">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input name="password1" type="password" class="form-control" placeholder="Password">
		            <br>
		            <button class="btn btn-theme btn-block" href="index.php" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="sign_up.php#">
		                    Create an account
		                </a>
		            </div>
		
		        </div>

		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <!--<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>-->
    <!--<script>-->
    <!--    $.backstretch("assets/img/login-bg.jpg", {speed: 500});-->
    <!--</script>-->


  </body>
</html>
