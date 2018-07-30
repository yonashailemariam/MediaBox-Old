<!--
	Author: Yonas Haileamriam
	@Copywrite [2016]
-->
<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MediaBox</title>
	<!-- Bootstrap and Custom CSS-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/54uAf+fLQj/oC0N/58tB/+gLwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+jLgT/oy5a/6EusP+fLeX/oC36/58t/v+eLfj/ni3a/50tlf+dLSkAAAAAAAAAAAAAAAAAAAAAAAAAAP+kLxv/oy7N/6Iu//+gLf//oC7//58t//+eLf//nS3//50t//+dLP//nCz6/5wsZ/+mNgAAAAAAAAAAAP+mLwL/pS/H/6Mu//+hLv//oS7//6At//+fLf//ni3//50t//+dLP//nCz//5ws//+cLPz/myw9AAAAAAAAAAD/pi87/6Qv//+iLv//oi7//6Eu//+gLf//ni3//54t//+dLf//nCz//5ws//+ZLP//miz//5sssQAAAAAAAAAA/6YvZv+kL///pC///6Iu//+hLv//ny3//54t//+eLf//nS3//5os//+aLP//miz//5os//+ZLOwAAAAAAAAAAP+nMFj/pS///6Qv//+iLv//oS7//6At//+fLfX/nCzm/5ss7P+bLPr/miz//5cr//+ZK///miz6AAAAAAAAAAD/py8l/6Uv//+kL///oi7//6Eus/+gLS//nS0FAAAAAP+dKwD/mywL/5grKf+YK1b/mizb/5osxAAAAAAAAAAA/6cvAf+lL9j/pC///6Mu//+hLh8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/5osZ/+cLEoAAAAA/6kwGP+nMFj/pi/U/6Qv//+jLv//oC5DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+bLBX/mywA/6wxev+pMPr/qDD//6Yv//+lL///oi7//6EuxP+gLQIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+sMVf/qjBF/6gw9v+nL///pC///6Mu//+iLv//ny1JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/6sxAf+pMPX/qDD//6Uv//+kL///oS7//6EugQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/qjCy/6cw//+mL///pC///6Mu//+iLmgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/6oxGv+pMML/py/+/6Yv//+lL8H/pS8LAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/qjAB/6kwGf+oMB//qDABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/g8AAPADAADgAAAAwAAAAMAAAADAAAAAwAAAAMBAAADB/AAAgfwAAAD/AAAA/wAAgP8AAMD/AADA/wAA4f8AAA==" rel="icon" type="image/x-icon"/>
</head>
<body onload="startTime()">
<div>
	<div class="background">
		<img id="image" src="images/bvs/2.jpg" class="" >
	</div>
	<!--Start of Developer info for Mobile sized devices -->
	<div class="container">
		<form class="modal fade developerinfomodalshower">
			<div class="modal-dialog modal-sm form-developerinfo">
				<div class="modal-content boxed boxed-transparent">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span class="fa fa-times"></span>
						</button>
						<img src="images/yonas.jpg" class="img-responsive img-thumbnail image-decoration">
					</div>
					<div class="modal-body">
						<div class="form-group">
							<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></button>
							<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></button>
							<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-google fa-2x"></i></a></button>
							<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></button>
						</div>
					</div>
					<div class="modal-footer">
						<span class="badge">GlassWindow Inc.</span>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- End of Developer info for Mobile sized devices -->
	<div class="content">
		<h2 class="text-success visible-lg visible-md visible-sm">
			Welcome to <label class="label label-info" style="padding-top: 1em;"><i class="fa fa-dropbox fa-2x"></i> Media Box</label></h2>
		<h2 class="text-success visible-xs"><label class="label label-info"><i class="fa fa-dropbox"></i> Media Box</label></h2>
		<h4 class="text-muted text-capitalize visible-lg visible-md visible-sm">Your Personal Media Repository</h4>
		<p style="font-size: 15px;" class="text-muted text-capitalize visible-xs">Your Personal Media Repository</p>
		<div class="btn-group btns">
			<button type="button" id="ModalWinDisplaybtn" class="btn btn-success btn-lg" data-toggle="modal" data-target=".target">
				<i class="glyphicon glyphicon-log-in"></i> Login</button>
			<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".target2">
				<i class="glyphicon glyphicon-ok-sign"></i> SignUp</button>
		</div>
		<!-- Start of Developer info for Large screened devices-->
		<p id="abdunies" class="text-info visible-lg visible-md visible-sm">
			<span class="badge" style="color: white;">Designed by <i class="fa fa-angle-double-right"></i>  Yonas Hailemariam</span></p>
		<div class="alert alert-info alert-dismissible text-center" id="abduniesAlert">
			<button id="CloseAbduniesAlert" type="button" class="close">
				<span class="fa fa-angle-up fa-2x"></span>
			</button>
			<img src="images/yonas.jpg" class="img-responsive img-thumbnail image-decoration">
			<hr>
			<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></button>
			<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></button>
			<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-google fa-2x"></i></a></button>
			<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></button>
			<hr>
			<label class="label label-info">GlassWindow Inc.</label>
		</div>
		<!-- End of Developer info for Large screened devices-->
		<div id="timebadge" class="badge">
		</div>
		<!-- Start of Developer info for Mobile sized devices -->
		<p id="yonas" class="text-info visible-xs" data-toggle="modal" data-target=".developerinfomodalshower">
			<span class="badge">Developed by <i class="fa fa-angle-right"></i>  Yonas Hailemariam</span></p>

	</div>

	<!--Start of Login Modal Window -->
	<div class="container">
		<form class="modal fade target" id="ModalWin">
			<div class="modal-dialog modal-lg form-signin">
				<!-- Loader or Spinner-->
				<div id="LoginLoader" style="z-index: 1000; padding: auto; color: white;
				           position: absolute; text-align: center;">
					<i class="fa fa-spinner fa-spin fa-2x"></i>
				</div>
				<div class="modal-content boxed boxed-transparent">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span class="fa fa-times"></span>
						</button>
						<label class="input-label">
							<h4 style="color: aqua"><span class="glyphicon glyphicon-user"></span> Login.</h4>
						</label>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" id="ModalUname" class="form-control" placeholder="User Name" required autofocus>
						</div>
						<div class="form-group">
							<input type="password" id="Modalpwd" class="form-control" placeholder="Password" required>
									<span id="Modallogin-error" class="label label-danger control-label">
									<i class="fa fa-warning"></i> Login Failed.</span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" id="ModalLoginbtn" class="btn btn-primary">
							<i class="glyphicon glyphicon-log-in"></i> Login
						</button>
						<button type="button" id="ModalCancelbtn" class="btn btn-danger " data-dismiss="modal">
							<i class="fa fa-close"></i> Cancel
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!--End of Login Modal Window -->

	<!--Start of Sign Up Modal Window -->
	<div class="container">
		<form class="modal fade target2 " id="SignUpModalWin">
			<div class="modal-dialog modal-lg form-signup">
				<!-- Loader or Spinner-->
				<div id="SignUpLoader" style="z-index: 1000; padding: auto; color: white;
				           position: absolute; text-align: center;">
					<i class="fa fa-spinner fa-spin fa-2x"></i>
				</div>
				<div class="modal-content boxed boxed-transparent">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span class="fa fa-times"></span>
						</button>
						<label class="">
							<h4 style="color: aqua"><span class="glyphicon glyphicon-user"></span> Sign Up Here.</h4>
						</label>
						<div class="alert alert-success alert-dismissible" id="SuccessLabel">
							<i class="fa fa-user-plus"></i>&nbsp;You have been successfully signed up, Please login to proceed.
						</div>
						<div class="alert alert-danger alert-dismissable" id="Errorlabel">
							<i class="fa fa-warning"></i>&nbsp;Please Correct Indicated Errors on the Form.
						</div>
					</div>
					<div class="modal-body">
						<form id="form">
							<!-- Feedback controls -->
							<div class="form-group has-feedback">
								<input autofocus id="firstname" type="text" class="form-control text-capitalize" placeholder="Fist Name">
								<span id="firstname-error" class="label label-danger control-label">
									<i class="fa fa-warning"></i> Please Enter Your First Name.</span>
								<span id="fnameOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="fnameRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input id="middlename" type="text" class="form-control text-capitalize" placeholder="Middle Name">
								<span id="mnameOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="mnameRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input id="lastname" type="text" class="form-control text-capitalize" placeholder="Last Name">
								<span id="lastname-error" class="label label-danger">
									<i class="fa fa-warning"></i> Please Enter Your Last Name.</span>
								<span id="lnameOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="lnameRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<!--<div class="radio">
								<label><input type="radio" name="radio"> Male</label>
								<label><input type="radio" name="radio"> Female</label>
							</div>-->
							<div class="form-group has-feedback">
								<select class="form-control" style="width: 190px" id="gender">
									<option class="active">-- Gender --</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
								<span id="gender-error" class="label label-danger">
									<i class="fa fa-warning"></i> Please Select Your Gender.</span>
								<span id="genderOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="genderRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<!--<div class="form-group" style="width: 120px;">
								<input type="number" class="form-control">
							</div>-->
							<div class="form-group has-feedback">
								<input id="email" type="email" class="form-control" placeholder="Email">
								<span id="email-error" class="label label-danger">
									<i class="fa fa-warning"></i> Please Enter Your Email.</span>
								<span id="email-error-2" class="label label-danger">
									<i class="fa fa-warning"></i> Invalid Email.</span>
								<span id="email-error-3" class="label label-danger">
									<i class="fa fa-warning"></i> Email Already Registered.</span>
								<span id="emailOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="emailRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input id="username" type="text" class="form-control" placeholder="User Name">
								<span id="username-error" class="label label-danger">
									<i class="fa fa-warning"></i> Please Enter Your User Name.</span>
								<span id="unameOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="unameRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input id="password" type="password" class="form-control" placeholder="Passowrd">
								<span id="password-error" class="label label-danger">
									<i class="fa fa-warning"></i> Please Enter Your Password.</span>
								<span id="password-error-2" class="label label-danger">
									<i class="fa fa-warning"></i> Password must be greater than 8 characters.</span>
								<span id="pwdOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="pwdRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input id="re-password" type="password" class="form-control" placeholder="Confirm Password">
								<span id="re-password-error" class="label label-danger">
									<i class="fa fa-warning"></i> Please Enter Your Password Again.</span>
								<span id="re-password-error-2" class="label label-danger">
									<i class="fa fa-warning"></i> Please Enter Your Password Again Correctly.</span>
								<span id="re-pwdOk" style="color: green" class="glyphicon glyphicon-ok form-control-feedback"></span>
								<span id="re-pwdRemove" style="color: red" class="glyphicon glyphicon-remove form-control-feedback"></span>
							</div>

							<div id="HomePage">
								<a href="index.php"></a>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="btn-group" id="btngroup">
							<button id="signupbtn" type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-ok-sign"></i>	Sign Up</button>
							<button id="resetbtn" type="button" class="btn btn-default" >
								<i class="glyphicon glyphicon-refresh"></i> Reset</button>
							<button type="button" id="ModalSignupCancelbtn" class="btn btn-danger visible-lg visible-md visible-sm" data-dismiss="modal">
								<i class="fa fa-close"></i> Cancel
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!--End of Sign up Modal Window -->
</div>
</body>
<!-- jQuery and Custom  jScript-->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-3.0.0.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/SignUp-JS.js" type="text/javascript"></script>
<script src="js/MyjScript.js" type="text/javascript"></script>
<script>
	function startTime() {
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();
		var date=today.getDate();
		var month=today.getMonth();
		var year=today.getFullYear();
		m = checkTime(m);
		s = checkTime(s);

		document.getElementById('timebadge').innerHTML = date + "/" + month + "/" + year + ", " + h + ":" + m + ":" + s;

		var t = setTimeout(startTime, 500);
	}
	function checkTime(i) {
		if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		return i;
	}
</script>
</html>