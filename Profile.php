<!-- /**
 * Author: Yonas Hailemariam
 * Date: 8/12/2016
 * Time: 8:05 PM
 * @Copywrite [2016]
 */ -->
<?php require_once("includes/Session.php") ?>
<?php Confirm_logged_in(); ?>
<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php require_once("includes/DBConnection.php"); ?>
<?php require_once("includes/Functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Media Box</title>
	<!-- Bootstarp -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/social-buttons.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/CustomStyles.css" />
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/54uAf+fLQj/oC0N/58tB/+gLwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+jLgT/oy5a/6EusP+fLeX/oC36/58t/v+eLfj/ni3a/50tlf+dLSkAAAAAAAAAAAAAAAAAAAAAAAAAAP+kLxv/oy7N/6Iu//+gLf//oC7//58t//+eLf//nS3//50t//+dLP//nCz6/5wsZ/+mNgAAAAAAAAAAAP+mLwL/pS/H/6Mu//+hLv//oS7//6At//+fLf//ni3//50t//+dLP//nCz//5ws//+cLPz/myw9AAAAAAAAAAD/pi87/6Qv//+iLv//oi7//6Eu//+gLf//ni3//54t//+dLf//nCz//5ws//+ZLP//miz//5sssQAAAAAAAAAA/6YvZv+kL///pC///6Iu//+hLv//ny3//54t//+eLf//nS3//5os//+aLP//miz//5os//+ZLOwAAAAAAAAAAP+nMFj/pS///6Qv//+iLv//oS7//6At//+fLfX/nCzm/5ss7P+bLPr/miz//5cr//+ZK///miz6AAAAAAAAAAD/py8l/6Uv//+kL///oi7//6Eus/+gLS//nS0FAAAAAP+dKwD/mywL/5grKf+YK1b/mizb/5osxAAAAAAAAAAA/6cvAf+lL9j/pC///6Mu//+hLh8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/5osZ/+cLEoAAAAA/6kwGP+nMFj/pi/U/6Qv//+jLv//oC5DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+bLBX/mywA/6wxev+pMPr/qDD//6Yv//+lL///oi7//6EuxP+gLQIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+sMVf/qjBF/6gw9v+nL///pC///6Mu//+iLv//ny1JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/6sxAf+pMPX/qDD//6Uv//+kL///oS7//6EugQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/qjCy/6cw//+mL///pC///6Mu//+iLmgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/6oxGv+pMML/py/+/6Yv//+lL8H/pS8LAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/qjAB/6kwGf+oMB//qDABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/g8AAPADAADgAAAAwAAAAMAAAADAAAAAwAAAAMBAAADB/AAAgfwAAAD/AAAA/wAAgP8AAMD/AADA/wAA4f8AAA==" rel="icon" type="image/x-icon">
</head>
<body>
<div class="background visible-lg visible-md visible-sm">
	<img id="image" src="images/bvs/6.jpg" class="img-responsive" >
</div>
<div class="background visible-xs">
	<img id="image" src="images/image-03.jpg" class="" >
</div>

<div class="row">
	<div class="col-md-2">
		<nav id="LeftSideNav" class="Left-Navigation-2">
		</nav> <!-- End of the left navigation bar -->
		<nav id="LeftSideNav" class="Left-Navigation">
			<ul>
				<li>
					<a href="ImageBox.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-image"></i> Image Box</span>
						<i class="fa fa-image visible-xs"></i>
					</a>
				</li>
				<li>
					<a href="AudioBox.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-music"></i> Audio Box
						<i class="fa fa-music visible-xs" style="color: white;"></i>
					</a>
				</li>
				<li>
					<a href="VideoBox.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-video-camera"></i> Video Box</span>
						<i class="fa fa-video-camera visible-xs"></i>
					</a>
				</li>
				<hr class="visible-lg visible-md visible-sm" id="hr">
				<li>
					<a href="SecurityDetails.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-lock"></i> Security Details</span>
						<i class="fa fa-lock visible-xs"></i>
					</a>
				</li>
				<li>
					<a href="Developer.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-code"></i> Developer</span>
						<i class="fa fa-code visible-xs"></i>
					</a>
				</li>
			</ul>
		</nav> <!-- End of the left navigation bar -->
	</div>

	<div class="container body-content">
		<div class="container-fluid">
			<nav class="navbar navbar-default" id="NavBar">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="#" class="navbar-brand" >
							<a id="a" href="#" class="navbar-brand">
								<label class="label label-info" style="padding-top: 1em;">
									<i class="fa fa-dropbox fa-2x"></i> MediaBox</label>
							</a>
						</a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".target">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse target">
						<ul class="nav navbar-nav">
							<li><a href="home.php"><i class="fa fa-dashboard fa-2x"></i> DashBoard</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li><a href="About.php"><i class="fa fa-sitemap fa-2x"></i> About</a></li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="dropdown visible-xs">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-user"></i>
									<?php
									$query="SELECT * FROM account WHERE UserName=:UserName LIMIT 1";
									$ResultSet=$pdo->prepare($query);
									$ResultSet->bindValue(':UserName', $_SESSION['UserName']);
									$ResultSet->execute();
									$Size=0;
									$Size=$ResultSet->rowCount();
									if($Size>0){
										$Result=$ResultSet->fetch();
										echo "<span class='text-capitalize'>".$Result['FirstName'].' '.$Result['MiddleName'].' '.$Result['LastName']."</span>";
									}
									?>
									<span class="caret"></span></a>
								<ul class="dropdown-menu" style="z-index: 10000;">
									<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
									<li><a href="Logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
								</ul>
							</li>
							<div class="btn-group visible-lg visible-md visible-sm">
								<button type="button" class="btn btn-default navbar-btn"><i class="fa fa-user fa-2x"></i>
									<?php
									$query="SELECT * FROM account WHERE UserName=:UserName LIMIT 1";
									$ResultSet=$pdo->prepare($query);
									$ResultSet->bindValue(':UserName', $_SESSION['UserName']);
									$ResultSet->execute();
									$Size=0;
									$Size=$ResultSet->rowCount();
									if($Size>0){
										$Result=$ResultSet->fetch();
										echo "<span class='text-capitalize'>".htmlentities($Result['FirstName']).' '.htmlentities($Result['MiddleName']).' '.htmlentities($Result['LastName'])."</span>";
									}
									?>
								</button>
								<button type="button" class="btn btn-warning navbar-btn dropdown-toggle" data-toggle="dropdown" style="padding: .74em;">
									<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="Profile.php"><i class="fa fa-user"></i> Profile</a></li>
									<li><a href="Logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
								</ul>
							</div> <!-- /btn-group -->
						</ul>
						<ul class="nav navbar-nav">
							<li><a href="Logout.php"><i class="fa fa-sign-out fa-2x"></i> Log Out</a></li>
						</ul>
					</div>
				</div>
			</nav> <!-- End of Upper Navigation -->
		</div>


<div class="col-xs-12 col-md-6">
	<div class="page-header">
		<h3><span class="label label-info" style="padding-top: 1em;"><i class="fa fa-user fa-2x"></i> Profile Details</span></h3>
	</div>
	<div class="jumbotron" id="Frontjumbotron">

	</div>

</div>

<?php include("includes/footer.php"); ?>