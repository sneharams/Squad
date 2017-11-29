<!DOCTYPE html>

<?php
    if($_GET['username'] == ""){
        echo "<script> window.location='https://squad-sneharams.c9users.io/login.php?username=".$user1."'</script>";
  	    exit();
    }
?>
<html lang="en">
    <style>
        ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
    padding: 20px 20px;
    width: 100%;
    background: #1abc9c;
}

/* Month list */
.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    border-width:0px;
}

.month ul li pre{
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    background: #1abc9c;
        border-width:0px;


}

/* Previous button inside month header */
.month .prev {
    float: left;
    padding-top: 9px;
}

/* Next button */
.month .next {
    float: right;
    padding-top: 9px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color:#ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

/* Days (1-31) */
.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color:#777;
}

/* Highlight the "current" day */
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
    </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Squad - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    
    <!-- Custom styles for main page -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- Custom styles for calendar template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    
    <!-- Styles for Chatbox -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/chatstyle.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
                          <script type="text/javascript">
                          function visible(){

                                var x = document.getElementsByClassName("ui");
                                if (x[0].style.visibility == "hidden"){
                                    x[0].style.visibility = "visible";       
                                }
                                else
                                {
                                    x[0].style.visibility = "hidden";
                                }
                                }
                          </script>
    
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
              
              	 <p class="centered"><a href="profile.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
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
              	                                                      ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php 
                                      	  echo $_GET['username']; 
                                       ?>
                  </h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>&date=12/18/2016">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="inactive" href="squads.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Squads</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="inactive" href="create_squad.php?username=<?php
                                                                  echo $_GET['username'];
                                                                  ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Create Squad</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="inactive" href="join_squad.php?username=<?php
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
                  
                  <!--<li class="sub-menu">-->
                  <!--    <a href="javascript:;" >-->
                  <!--        <i class="fa fa-desktop"></i>-->
                  <!--        <span>UI Elements</span>-->
                  <!--    </a>-->
                  <!--    <ul class="sub">-->
                  <!--        <li><a  href="general.php">General</a></li>-->
                  <!--        <li><a  href="buttons.php">Buttons</a></li>-->
                  <!--        <li><a  href="panels.php">Panels</a></li>-->
                  <!--    </ul>-->
                  <!--</li>-->

                  <!--<li class="sub-menu">-->
                  <!--    <a href="javascript:;" >-->
                  <!--        <i class="fa fa-cogs"></i>-->
                  <!--        <span>Components</span>-->
                  <!--    </a>-->
                  <!--    <ul class="sub">-->
                  <!--        <li><a  href="calendar.php">Calendar</a></li>-->
                  <!--        <li><a  href="gallery.php">Gallery</a></li>-->
                  <!--        <li><a  href="todo_list.php">Todo List</a></li>-->
                  <!--    </ul>-->
                  <!--</li>-->
                  <!--<li class="sub-menu">-->
                  <!--    <a href="javascript:;" >-->
                  <!--        <i class="fa fa-book"></i>-->
                  <!--        <span>Extra Pages</span>-->
                  <!--    </a>-->
                  <!--    <ul class="sub">-->
                  <!--        <li><a  href="blank.php">Blank Page</a></li>-->
                  <!--    </ul>-->
                  <!--</li>-->
                  <!--<li class="sub-menu">-->
                  <!--    <a href="javascript:;" >-->
                  <!--        <i class="fa fa-tasks"></i>-->
                  <!--        <span>Forms</span>-->
                  <!--    </a>-->
                  <!--    <ul class="sub">-->
                  <!--        <li><a  href="form_component.php">Form Components</a></li>-->
                  <!--    </ul>-->
                  <!--</li>-->

              </ul>
                                     <!-- squad groups -->
					
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
                      
                      <!--<div class="ds desc">-->
                       
                      <!--		<img class="img-circle" src="assets/img/squads/computer-off.png" width="35px" height="35px" align="">-->

                      <!--	<div class="details">-->
                      <!--		<p><a href="#">Hyland Hackathon</a><br/>-->
                      		   
                      <!--		</p>-->
                      <!--	</div>-->
                      <!--</div>-->
                      <!-- Second Member -->
                      <!--<div class="ds desc">-->
                      	
                      <!--		<img class="img-circle" src="assets/img/squads/westlake.jpg" width="35px" height="35px" align="">-->

                      <!--	<div class="details">-->
                      <!--		<p><a href="#">Westlake Cross Country</a><br/>-->
                      		   
                      <!--		</p>-->
                      <!--	</div>-->
                      <!--</div>-->
                      <!-- Third Member -->
                      <!--<div class="ds desc">-->

                      <!--		<img class="img-circle" src="assets/img/squads/bw.jpg" width="35px" height="35px" align="">-->
                      	
                      <!--	<div class="details">-->
                      <!--		<p><a href="#">Baldwin Wallace University</a><br/>-->
                      		   
                      <!--		</p>-->
                      <!--	</div>-->
                      <!--</div>-->
                      <!-- Fourth Member -->
                      <!--<div class="ds desc">-->

                      <!--		<img class="img-circle" src="assets/img/squads/memer.png" width="35px" height="35px" align="">-->
                      	
                      <!--	<div class="details">-->
                      <!--		<p><a href="#">Dank Memers</a><br/>-->
                      		   
                      <!--		</p>-->
                      <!--	</div>-->
                      <!--</div>-->
    
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

                
                  	
                      
    <div class="col-lg-9 main-chart">
                      <div class="month"> 
                          <br>
                          <ul>
                            <li class="prev"><a href="index.php?username=<?php echo $_GET['username'];?>&date=<?php 
                                                                                                                $current_date = explode( "/", $_GET['date']); 
                                                                                                                $day = intval($current_date[1]);  
                                                                                                                $current_date = $_GET['date'];                
                                                                                                                $newday = $day-1;
                                                                                                                echo "12/".$newday."/2016";
                                                                                                                ?>">&#10094;</a></li>
                            <li class="next"><a href="index.php?username=<?php echo $_GET['username'];?>&date=<?php 
                                                                                                                $current_date = explode( "/", $_GET['date']); 
                                                                                                                $day = intval($current_date[1]);                                                                                                                $current_date = $_GET['date'];                
                                                                                                                $newday = $day+1;
                                                                                                                echo "12/".$newday."/2016";
                                                                                                                ?>">&#10095;</a></li>
                            <li>
                                 <pre><img src='<?php 
                                  $host = "127.0.0.1";
                                $user = "sneharams";                     //Your Cloud 9 username
                                $pass = "";                                  //Remember, there is NO password by default!
                                $db = "squad_db";                              //Your database name you want to connect to
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
                                ?>' class='img-circle' width='60'/> <?php
                        echo "Local Events | ".$_GET['date'];
         ?></pre>
    </li>
  </ul>
</div>
                 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example5.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    
    dataTable.addColumn({ type: 'string', id: 'Room' });
    dataTable.addColumn({ type: 'string', id: 'Name'})
    dataTable.addColumn({ type: 'date', id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
      
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
                            	$query = "SELECT * FROM events";
                    			$result = mysqli_query($connection, $query);
                    			$num_events = 0;
                            	while ($row = mysqli_fetch_assoc($result)) {
                            	  
                                  if ($row['date'] == $_GET['date']){
                                      $squad = $row['squad'];
                                      $starttime = explode(":", $row['time']);
                                      $starthour = $starttime[0];
                                      $startminute = $starttime[1];
                                      $endtime = explode(":", $row['end_time']);
                                      $endhour = $endtime[0];
                                      $endminute = $endtime[1];
                                      $status = 'Rejected';
                                      if (strpos($row['accepted'], $_GET['username']) !== false){
                                          $status = 'Accepted';
                                      }
                                      echo "['".$row['event']."-".$squad."', '".$status."', new Date(0, 0,  0,".$starthour.",".$startminute."), new Date(0, 0, 0,".$endhour.",".$endminute.")],";
                                  }
                            	}
                                  
                                  
                              

                		  $connection -> close();
                              ?>
      ]);

    var options = {
        hAxis: {
            minValue: new Date(0, 0, 0, 0, 0),
            maxValue: new Date(0, 0, 0, 24, 0)
          },
        timeline: { showBarLabels: false },
        height:1000
}
    chart.draw(dataTable, options);

  }

</script>

<div id="example5.1"></div></div>

   <div class="ui">
                    <div class="chat">
                        <div class="top">
				            <div class="avatar">
					        <img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
				            </div>
				            <div class="info">
					            <div style="margin-top:27px;margin-left:10px;" class="name">Divya Manian</div>
					                <div class="count"></div>
				            </div>
				        <i class="fa fa-star"></i>
		            	</div>
			<ul class="messages">
				
			</ul>
			<div class="write-form">
				<textarea placeholder="Type your message" name="e" id="texxt"  rows="2"></textarea>
				<i class="fa fa-picture-o"></i>
				<i class="fa fa-file-o"></i>
				<span class="send">Send</span>
			</div>
	</div>


              </div>

</div>
                      
               

      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> accepted your invite<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> created a new squad<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> invited you to Friends<br/>
                      		</p>
                      	</div>
                      </div>

                         <!-- USERS ONLINE SECTION -->
					
              	<h3>SQUAD MEMBERS</h3>
                      <!-- First Member -->
                      <div class="desc" onclick="visible()">
                      	<div class="thumb">
                      		<span class="badge bg-success"><img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align=""></span>
                            
                      	</div>
                      	<div class="details2">
                      		<p><a href="#">DIVYA MANIAN</a><br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc" onclick="visible()">
                      	<div class="thumb">
                      		<span class="badge bg-success"><img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align=""></span>
                      	</div>
                      	<div class="details2">
                      		<p><a href="#">DJ SHERMAN</a><br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc" onclick="visible()">
                      	<div class="thumb">
                      		<span class="badge bg-warning"><img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align=""></span>
                      	</div>
                      	<div class="details2">
                      		<p><a href="#">DAN ROGERS</a><br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc" onclick="visible()">
                      	<div class="thumb">
                      		<span class="badge bg-important"><img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align=""></span>
                      	</div>
                      	<div class="details2">
                      		<p><a href="#">Zac Sniders</a><br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Member -->
                      <div class="desc" onclick="visible()">
                      	<div class="thumb">
                      		<span class="badge bg-important"><img class="img-circle" src="assets/img/ui-sam.jpg" width="35px" height="35px" align=""></span>
                      	</div>
                      	<div class="details2">
                      		<p><a href="#">Nick Irwin</a><br/>
                      		</p>
                      	</div>
                      </div>
                      
                      

                  </div><!-- /col-lg-3 -->

                                  
                  
                  
                  
                  
                  
 	<! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->

      <!--footer end-->
  </section>




    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    




    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	<script src="assets/js/index.js"></script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

  

  </body>
</html>
