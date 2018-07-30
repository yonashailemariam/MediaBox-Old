<?php require_once("includes/DBConnection.php"); ?>
<?php require_once("includes/Functions.php"); ?>
<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
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
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
	<!--
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMn//w64//9VtP//V7H6/1ix+v9Ysfr/WLH6/1ix+v9Ysfr/WLH6/1ix+v9Ysfr/WLH6/1i0//9XuP//Vcn//w5quv8BUqf/ZApIyt8DPsL6Az3B+gM9wfoCPcD6Aj3A+gI9wPoCPcD6Az3B+gM9wfoDPsL6CkjK31Kn/2Rruv8BAAAAAAAAAAAWU9nQADvC/wM9vv8DPb7/Az29/wA5vv8AOb7/Az29/wM9vv8DPb7/ADvC/xZT2dAAAAAAAAAAAAAAAAAAAAAAP3z0yUN/9f8/e/P/P3z0/z978/9Fgvf/RYL3/z978/8/fPT/P3vz/0N/9f8/fPTJAAAAAAAAAAAAAAAAAAAAAGik/8KHwv//mdP//5nT//+Z0///kcz//5HM//+Z0///mdP//5nT//+Hwv//aKT/wgAAAAAAAAAAAAAAAAAAAACRzP+9aJ72/yVPlf9mhrv/JU6T/1eK3f9Xit3/JU6T/2aGu/8lT5X/aJ72/5HM/70AAAAAAAAAAAAAAAAKL3QAZJv4ymOZ8f8YS6X/Omm9/xlMp/9XjeP/V43j/xlMp/86ab3/GEul/2OZ8f9km/jKBjB1AAAAAAAAAAAAJVKpAU6C3fUpVqH/KFWg/ylXo/8pV6P/aInE/2iJxP8pV6P/KVej/yhVoP8pVqH/ToLd9SVUqQEAAAAAAAAAAAAAAACCtvfoHEyT/xtLkf8eTpn/IVGf/5y55P+dueH/IVKf/x5NmP8bS5H/HEyT/4O29+gAAAAAAAAAAAAAAAAAAAAAvPT/rS1muMIqYbLCjsD9zZrJ/9QsZLfCLGS3wpvK/9SOv/3NKmGywi1muMK89P+tAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC1l2xI8c+JJJVjACyVYwAs8dOJJLWXaEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC06/8Ezf//zWug4PtsoOD7zf//zbPr/wQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wL///8T////E////wIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AAAAAAAAAAAAAMADAADAAwAAwAMAAMADAACAAQAAgAEAAMADAADAAwAA+B8AAPgfAAD8PwAA//8AAA==" rel="icon" type="image/x-icon">
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAATAAAAxAAAAG0AAABmAAAAZgAAAGYAAABmAAAAZgAAAGYAAABmAAAAZgAAAHUAAADtAAAAAAAAAAAAAAATAAAAjwAAAHoAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8AAACPAAAAdQAAAAAAAAATAAAAjwAAAAwAAABuAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8AAACPAAAADwAAAGYAAAATAAAAjwAAAAwAAAAAAAAAbgAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8AAACPAAAADwAAAAAAAABmAAAAxAAAAHoAAABuAAAAbgAAAK0AAAB1AAAAbgAAAG4AAABuAAAAbgAAAG4AAACSAAAADwAAAAAAAAAAAAAAZgAAAG0AAAAMAAAADAAAAAwAAAB1AAAAGAAAAAwAAAAMAAAADAAAAAwAAAAYAAAAbgAAAAAAAAAAAAAAAAAAAGYAAABmAAAAAAAAAAAAAAAAAAAAbgAAAAwAAAAAAAAAAAAAAAAAAAAAAAAADAAAAG4AAAAAAAAAAAAAAAAAAABmAAAAZgAAAAAAAAAAAAAAAAAAAG4AAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAwAAABuAAAAAAAAAAAAAAAAAAAAZgAAAGYAAAAAAAAAAAAAAAAAAABuAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAbgAAAAAAAAAAAAAAAAAAAGYAAABmAAAAAAAAAAAAAAAAAAAAbgAAAAwAAAAAAAAAAAAAAAAAAAAAAAAADAAAAG4AAAAAAAAAAAAAAAAAAABmAAAAZgAAAAAAAAAAAAAAAAAAAG4AAAAYAAAADAAAAAwAAAAMAAAADAAAABgAAAB1AAAADAAAAAwAAAAMAAAAbQAAAGYAAAAAAAAAAAAAAA8AAACSAAAAbgAAAG4AAABuAAAAbgAAAG4AAAB1AAAArQAAAG4AAABuAAAAegAAAMQAAABmAAAAAAAAAA8AAACPAAAADwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAAAAG4AAAAAAAAADAAAAI8AAAATAAAAZgAAAA8AAACPAAAADwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAABuAAAADAAAAI8AAAATAAAAAAAAAHUAAACPAAAADwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAegAAAI8AAAATAAAAAAAAAAAAAADtAAAAdQAAAGYAAABmAAAAZgAAAGYAAABmAAAAZgAAAGYAAABmAAAAbQAAAMQAAAATAAAAAAAAAAAAAAAA4AAAAMP4AACD8AAAE+IAAAAGAAAADgAAc84AAHPOAABzzgAAc84AAHAAAABgAAAAR8gAAA/BAAAfwwAAAAcAAA==" rel="icon" type="image/x-icon">
	-->
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/54uAf+fLQj/oC0N/58tB/+gLwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+jLgT/oy5a/6EusP+fLeX/oC36/58t/v+eLfj/ni3a/50tlf+dLSkAAAAAAAAAAAAAAAAAAAAAAAAAAP+kLxv/oy7N/6Iu//+gLf//oC7//58t//+eLf//nS3//50t//+dLP//nCz6/5wsZ/+mNgAAAAAAAAAAAP+mLwL/pS/H/6Mu//+hLv//oS7//6At//+fLf//ni3//50t//+dLP//nCz//5ws//+cLPz/myw9AAAAAAAAAAD/pi87/6Qv//+iLv//oi7//6Eu//+gLf//ni3//54t//+dLf//nCz//5ws//+ZLP//miz//5sssQAAAAAAAAAA/6YvZv+kL///pC///6Iu//+hLv//ny3//54t//+eLf//nS3//5os//+aLP//miz//5os//+ZLOwAAAAAAAAAAP+nMFj/pS///6Qv//+iLv//oS7//6At//+fLfX/nCzm/5ss7P+bLPr/miz//5cr//+ZK///miz6AAAAAAAAAAD/py8l/6Uv//+kL///oi7//6Eus/+gLS//nS0FAAAAAP+dKwD/mywL/5grKf+YK1b/mizb/5osxAAAAAAAAAAA/6cvAf+lL9j/pC///6Mu//+hLh8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/5osZ/+cLEoAAAAA/6kwGP+nMFj/pi/U/6Qv//+jLv//oC5DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+bLBX/mywA/6wxev+pMPr/qDD//6Yv//+lL///oi7//6EuxP+gLQIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+sMVf/qjBF/6gw9v+nL///pC///6Mu//+iLv//ny1JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/6sxAf+pMPX/qDD//6Uv//+kL///oS7//6EugQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/qjCy/6cw//+mL///pC///6Mu//+iLmgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/6oxGv+pMML/py/+/6Yv//+lL8H/pS8LAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/qjAB/6kwGf+oMB//qDABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/g8AAPADAADgAAAAwAAAAMAAAADAAAAAwAAAAMBAAADB/AAAgfwAAAD/AAAA/wAAgP8AAMD/AADA/wAA4f8AAA==" rel="icon" type="image/x-icon">
</head>
<body>
<div class="background visible-lg visible-md visible-sm">
	<img id="image" src="images/image-04.jpg" class="img-responsive" >
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
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-image fa-2x"></i> Image Box</span>
						<i class="fa fa-image visible-xs"></i>
					</a>
				</li>
				<li>
					<a href="AudioBox.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-music fa-2x"></i> Audio Box</span>
						<i class="fa fa-music visible-xs"></i>
					</a>
				</li>
				<li>
					<a href="VideoBox.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-video-camera fa-2x"></i> Video Box</span>
						<i class="fa fa-video-camera visible-xs"></i>
					</a>
				</li>
				<hr class="visible-lg visible-md visible-sm" id="hr">
				<li>
					<a href="SecurityDetails.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-lock fa-2x"></i> Security Details</span>
						<i class="fa fa-lock visible-xs"></i>
					</a>
				</li>
				<li>
					<a href="Developer.php">
						<span class="visible-sm visible-md visible-lg"><i class="fa fa-code fa-2x"></i> Developer</span>
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
								<label class="label label-info" style="padding-top: 1em;"><i class="fa fa-dropbox fa-2x"></i> MediaBox</label>
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
							<li><a href="home.php" style="color: black; font-size: larger;"><i class="fa fa-dashboard fa-2x"></i> DashBoard</a></li>
							<li><a href="About.php"><i class="fa fa-sitemap fa-2x"></i> About</a></li>
						</ul>

						<ul class="nav navbar-nav">
							<li class="dropdown visible-xs">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-user fa-2x" style="padding-top: 1em;"></i>
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
									<span class="caret"></span></a>
								<ul class="dropdown-menu" style="z-index: 10000;">
									<li><a href="Profile.php"><i class="fa fa-user"></i> Profile</a></li>
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