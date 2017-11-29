<!DOCTYPE html>

<?php
    if(isset($_GET['username']) && isset($_GET['password1']) && isset($_GET['password2']) && isset($_GET['image'])){
        newUser($_GET['username'], $_GET['password1'], $_GET['password2'], $_GET['image']);
    }
    
    function newUser($user1, $pass1, $pass2, $pic){
        $host = "127.0.0.1";
        $user = "sneharams";                     //Your Cloud 9 username
        $pass = "";                                  //Remember, there is NO password by default!
        $db = "squad_db";                                  //Your database name you want to connect to
        $port = 3306;                                //The port #. It is always 3306
        
        if($pass1 == $pass2){
        	$connection = mysqli_connect($host, $user, $pass, $db, $port);
        	if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        	}
        	
        	$query = "SELECT * FROM users";
					$result = mysqli_query($connection, $query);
        	$currentID = 0;
        	while ($row = mysqli_fetch_assoc($result)) {
              if ($row['id'] > $currentID){
                $currentID = $row['id'];
              } 
          }
					$currentID = $currentID + 1;
		      $sql = "INSERT INTO users (id, username, password, status, image) VALUES (".$currentID.", '".$user1."', '".$pass1."', 'private', '".$pic."')";
		      if ($connection->query($sql) === TRUE) {
		      		echo "<script> window.location='https://squad-sneharams.c9users.io/sign_up_confirmation.php'</script>";
  						exit();
		        } else {
		            echo "Error: " . $sql . "<br>" . $conn->error;
		        }   
		        $connection -> close();
		    } else {
		    	echo "Passwords didn't match. Try again.";
		    }
    	}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Squad - Sign Up</title>

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
  </head>

  <body style="background-color:#f48071;">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="get">
		        <h2 class="form-login-heading">sign up now</h2>
		        <div class="login-wrap">
		            <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input name="password1" type="password" class="form-control" placeholder="Password">
		            <br>
		            <input name="password2" type="password" class="form-control" placeholder="Confirm Password">
		            <br>
		            <input name="image" type="text" class="form-control" placeholder="User Pic" autofocus>
		            <br>
		            <button class="btn btn-theme btn-block" type="submit" value="Submit"><i class="fa fa-lock"></i> SIGN UP</button>
		            <hr>
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
