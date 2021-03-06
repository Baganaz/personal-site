<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8"> 

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="style-main.css" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="JS.js"></script>

</head>


<body>

<nav id="navbar" class="navbar navbar-static-top">

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Samson Chung</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="projects">Projects</a></li>
      <li><a href="#">Resume</a></li>
    </ul>
  </div>

</nav>


<div class="container">
	<div class="row">

	<div class="col-md-8">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">

				<a data-toggle="collapse" href="#collapse1" data-parent="#accordion">
					<div class="panel-body panel-body-custom">
						<span class="glyphicon glyphicon-education"></span>
						4th year Computer Science Student @ UofT (St. George)
					</div>
				</a>
				<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-collapse collapse panel-body-custom">
							Computer Science Specialist<br>
							Interest in various fields of computer science, including software engineering, web technologies, and artifical intelligence
						</div>
				</div>

				<a data-toggle="collapse" href="#collapse2" data-parent="#accordion">
					<div class="panel-body panel-body-custom">
						<span class="glyphicon glyphicon-briefcase"></span>
						DevOps + SysAdmin Internship @ <a class="exLink" href=https://407etr.com>407ETR Concessions Company</a>
						</div>
				</a>
				<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-collapse collapse panel-body-custom">
						Customizing and maintaining DevOps stack<br>
						<div style="text-indent: 3em; color: grey">Rundeck, Jenkins, Nexus, and Sonar</div>
						Maintaining and monitoring of RHEL servers and other Linux servers<br>
						<div style="text-indent: 3em; color: grey">Nagios/Thruk, VMWare</div>
					</div>
				</div>
				

				<a data-toggle="collapse" href="#collapse3" data-parent="#accordion">
					<div class="panel-body panel-body-custom">
						<img id="dumbbell" src="dumbbell.png" width="24px" height="24px">
						Fitness and Exercise Enthusiast
						</div>
				</a>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-collapse collapse panel-body-custom">blahblahblah</div>
				</div>


			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body panel-body-custom" >
				<span id="email" class="glyphicon glyphicon-envelope"></span>
				samson.c.chung@gmail.com
			</div>
		</div>
	</div>

	</div>
</div>

</body>

</html>