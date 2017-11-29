<!DOCTYPE html>

<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Squad - Profile</title>

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

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
           <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>" class="logo"><b>squad</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">squad Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="<?php 
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
                                                                              if ($row['username'] == $_GET['username']){
                                                                                  echo $row['image'];
                                                                              }
                                                                        	}
              	                                                      ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php 
                                      	  echo $_GET['username']; 
                                       ?>
                  </h5>
              	  	
                  <li class="mt">
                      <a class="inactive" href="index.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>&date=12/18/2016">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="squads.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Squads</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="ininactive" href="create_squad.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Create Squad</span>
                      </a>
                  </li>
                
                <li class="sub-menu">
                      <a class="ininactive" href="join_squad.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Join Squad</span>
                      </a>
                  </li>
                   <li class="sub-menu">
                      <a class="inactive" href="create_event.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Create Event</span>
                      </a>
                  </li>

             

              </ul>
                                     <!-- USERS ONLINE SECTION -->
					
                  	<div  class="ds1">
              	        <h3>SQUADS</h3>
                  	</div>
                       <?php 
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
                                  if ($row['username'] == $_GET['username']){
                                      $squads = str_split($row['squads']);
                                  }
                            	}
                                  $temp = "";
                                  for ($i = 0; $i < sizeof($squads); $i++){
                                      if($squads[$i] != "+"){
                                          $temp .= $squads[$i];
                                      } else {
                                        $query = "SELECT * FROM squads";
                    					$result = mysqli_query($connection, $query);
                                    	while ($row = mysqli_fetch_assoc($result)) {
                                          if ($row['squad'] == $temp){
                                              $pic = $row['image'];
                                          }
                                    	}
                                            echo "<a href='view_squad.php?username=".$_GET['username']."&squad=".$temp."' ><div class='ds desc'>
                                              		<img class='img-circle' src='".$pic."' width='35px' height='35px'>
                                                  	<div class='details'>
                                                  		<p>".$temp."<br/>
                                                  		</p></div>
                                              	</div></a>";
                                          	$temp = "";
                                  }
                              }

                		  $connection -> close();
                      ?>
    
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <style>body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  
  margin: 100px 0;

}

/* Profile sidebar */
.profile-sidebar {
  padding: 80px 0 80px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}



.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color:  #93a3b5;
  background-color: #f6f9fb;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 70px;
  background: #fff;
  min-height: 460px;
}</style>  
   <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				<img src="<?php 
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
                                                                              if ($row['username'] == $_GET['username']){
                                                                                  echo $row['image'];
                                                                              }
                                                                        	}
              	                                                      ?>" width="60" class="img-responsive">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
				    <!--put in name variable -->
					<div class="profile-usertitle-name"><?php 
                                                echo $_GET['username']; 
                                                ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Public</button>
					<button type="button" class="btn btn-danger btn-sm">Private</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Home</a>
						</li>
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Date of Birth </a>
						</li>
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-th-large"></i>
							Squads </a>
						</li>
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-pencil"></i>
							Settings </a>
						</li>
					</ul>
				</div>
