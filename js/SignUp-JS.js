/**
 * Author: Yonas haileamriam
 Date: 6/18/2016.
 */

$(function () {
	//alert("Its Working..");

	//Hide all error labels and Illustrator Icons
	$('#firstname-error').hide();
	$('#middlename-error').hide();
	$('#lastname-error').hide();
	$('#gender-error').hide();
	$('#email-error').hide();
	$('#email-error-2').hide();
	$('#email-error-3').hide();
	$('#username-error').hide();
	$('#password-error').hide();
	$('#password-error-2').hide();
	$('#re-password-error').hide();
	$('#re-password-error-2').hide();
	$('#re-password').hide();
	/*$('#btngroup').hide();*/
	$('#Errorlabel').hide();
	$('#SuccessLabel').hide();
	$('#login-error-2').hide();
	$('#SignUpLoader').hide();
	$('#fnameOk').hide();
	$('#fnameRemove').hide();
	$('#mnameOk').hide();
	$('#mnameRemove').hide();
	$('#lnameOk').hide();
	$('#lnameRemove').hide();
	$('#emailOk').hide();
	$('#emailRemove').hide();
	$('#unameOk').hide();
	$('#unameRemove').hide();
	$('#pwdOk').hide();
	$('#pwdRemove').hide();
	$('#re-pwdOk').hide();
	$('#re-pwdRemove').hide();
	$('#genderRemove').hide();
	$('#genderOk').hide();
	$('#Modallogin-error').hide();
	$('#LoginLoader').hide();
	$('#abduniesAlert').hide();
	/*$('#ImageBoxCaret').hide();*/
	$('#UploadAlert').hide();
	$('#SmallUploadAlert').hide();

	//Declare the data holder variables
	var firstname = "";
	var middlename = "";
	var lastname = "";
	var gender = "";
	var email = "";
	var username = "";
	var password = "";
	var re_password = "";

	//Declare Login variables
	//Sign Up page Login data
	var loginuname = "";
	var loginpwd = "";
	//Index page's Modal Window Login data
	var ModalUname = "";
	var Modalpwd = "";

	$('#login').click(function () {
		$('#logintxt').focus();
	});

	$('#signupbtn').click(function () {
		$('#firstname').focus();
	});

	//$('#firstname').text(new Date().getTime());

	$('#firstname').blur(function () {
		var fname = $(this).val();
		if (fname == "") {
			$(this).css("border", "solid 1px red");
			$('#fnameRemove').show();
			$('#firstname-error').slideDown();
			firstname = "";
		}
		else {
			firstname = fname;
			$('#fnameOk').show();
		}
	});

	$('#firstname').keydown(function () {
		$(this).css("border", "solid 1px lightblue");
		$('#firstname-error').slideUp();
		$('#fnameOk').hide();
		$('#fnameRemove').hide();
	});

	$('#middlename').blur(function () {
		$('#mnameOk').show();
	});

	$('#lastname').blur(function () {
		var lname = $(this).val();
		if (lname == "") {
			$(this).css("border", "solid 1px red");
			$('#lastname-error').slideDown();
			$('#lnameRemove').show();
			lastname = "";
		}
		else {
			lastname = lname;
			$('#lnameOk').show();
		}
	});

	$('#lastname').keydown(function () {
		$(this).css("border", "solid 1px lightblue");
		$('#lastname-error').slideUp();
		$('#lnameRemove').hide();
		$('#lnameOk').hide();
	});

	$('#gender').blur(function () {
		var gendr = $(this).val();
		if (gendr == "-- Gender --") {
			$(this).css("border", "solid 1px red");
			$('#gender-error').slideDown();
			$('#genderOk').hide();
			$('#genderRemove').show();
			gender = "";
		}
		else if (gendr == 'Male' || gendr == 'Female') {
			$(this).css("border", "solid 1px lightblue");
			$('#gender-error').slideUp();

			gender = gendr;
			$('#genderRemove').hide();
			$('#genderOk').show();
		}
	});

	$('#email').blur(function () {
		var mail = $(this).val();
		if (mail == "") {
			$(this).css("border", "solid 1px red");
			$('#email-error').slideDown();
			$('#emailRemove').show();
			email = "";
		}
		else {
			$.ajax({
				type: 'POST',
				url: 'ValidateEmailLogic.php',
				data: {email: mail},
				success: function (response) {
					if (response == "0") {
						$(this).css("border", "solid 1px red");
						$('#email-error-2').slideDown();
						$('#emailRemove').show();
						email = "";
					}
					else if (response == "1") {
						$(this).css("border", "solid 1px red");
						$('#email-error-3').slideDown();
						$('#emailRemove').show();
						email = "";
					}
					else {
						email = mail;
						$('#emailOk').show();
					}
				}
			});
		}
	});

	$('#email').keydown(function () {
		$(this).css("border", "solid 1px lightblue");
		$('#email-error').slideUp();
		$('#email-error-2').slideUp();
		$('#email-error-3').slideUp();
		$('#emailRemove').hide();
		$('#emailOk').hide();
	});

	$('#username').blur(function () {
		var uname = $(this).val();
		if (uname == "") {
			$(this).css("border", "solid 1px red");
			$('#username-error').slideDown();
			$('#unameRemove').show();
			username = "";
		}
		else {
			username = uname;
			$('#unameOk').show();
		}
	});

	$('#username').keydown(function () {
		$(this).css("border", "solid 1px lightblue");
		$('#username-error').slideUp();
		$('#unameRemove').hide();
		$('#unameOk').hide();
	});

	$('#password').blur(function () {
		var pwd = $(this).val();
		if (pwd == "") {
			$(this).css("border", "solid 1px red");
			$('#password-error').slideDown();
			$('#pwdRemove').show();
			password = "";
		}
		else if (pwd.length < 8) {
			$(this).css("border", "solid 1px red");
			$('#password-error-2').slideDown();
			$('#pwdRemove').show();
			password = "";
		}
		else {
			password = pwd;
			$('#password-error-2').slideUp();
			$('#re-password').slideDown();
			$('#pwdOk').show();
		}
	});

	$('#password').keydown(function () {
		$(this).css("border", "solid 1px lightblue");
		$('#password-error-2').slideUp();
		$('#pwdRemove').hide();
		$('#pwdOk').hide();
	});

	$('#re-password').blur(function () {
		var re_pwd = $(this).val();
		if (re_pwd == "") {
			$(this).css("border", "solid 1px red");
			$('#re-password-error').slideDown();
			$('#re-pwdRemove').show();
			re_password = "";
		}
		else if (re_pwd != password) {
			$(this).css("border", "solid 1px red");
			$('#re-password-error-2').slideDown();
			$('#re-pwdRemove').show();
			re_password = "";
		}
		else {
			re_password = re_pwd;
			$('#re-password-error-2').slideUp();
			$('#btngroup').slideDown();
			$('#re-pwdOk').show();
		}
	});

	$('#re-password').keydown(function () {
		$(this).css("border", "solid 1px lightblue");
		$('#re-password-error').slideUp();
		$('#re-password-error-2').slideUp();
		$('#re-pwdRemove').hide();
		$('#re-pwdOk').hide();
	});

	$('#signupbtn').click(function () {
		if (firstname == '' || lastname == '' || gender == '' || email == '' || username == '' || password == '' || re_password == '') {
			$('#Errorlabel').slideDown().delay(4000).slideUp();
		}
		else {
			$('#SignUpLoader').slideDown().delay(500).slideUp();

			firstname = $('#firstname').val();
			middlename = $('#middlename').val();
			lastname = $('#lastname').val();
			gender = $('#gender').val();
			email = $('#email').val();
			username = $('#username').val();
			;
			password = $('#password').val();

			$.ajax ({
				type: 'POST',
				url: 'SignUpLogic.php',
				data: {
					firstname: firstname, middlename: middlename, lastname: lastname,
					gender: gender, email: email, username: username, password: password
				},
				success: function (response) {
					if (response == "1") {
						$('#SuccessLabel').delay(800).slideDown().delay(2000).slideUp();
						$('#ModalUname').val($('#username').val());
						$('#Modalpwd').val($('#password').val());
					}
					else {
						alert('Something Went Wrong');
					}
				}

			});
		}
	});

	$('#Addbtn').click(function () {
		$.button(function () {
			$(this).value("Test");
		});
	})

	/*$('#text').input(function(){
	 $(this).placeholder='Yonas';
	 });*/

	$('#resetbtn').click(function () {
		//Empty all data holders
		$('#SignUpLoader').show().delay(250).slideUp();
		//empty all data holder variables
		firstname = "";
		middlename = "";
		lastname = "";
		gender = "";
		email = "";
		username = "";
		password = "";
		re_password = "";

		//empty all controls
		$('#firstname').val("");
		$('#middlename').val("");
		$('#lastname').val("");
		$('#gender').val("-- Gender --");
		$('#email').val("");
		$('#username').val("");
		$('#password').val("");
		$('#re-password').val("");

		//Hide all error labels and Illustrator Icons
		$('#firstname-error').hide();
		$('#middlename-error').hide();
		$('#lastname-error').hide();
		$('#gender-error').hide();
		$('#email-error').hide();
		$('#email-error-2').hide();
		$('#email-error-3').hide();
		$('#username-error').hide();
		$('#password-error').hide();
		$('#password-error-2').hide();
		$('#re-password-error').hide();
		$('#re-password-error-2').hide();
		$('#re-password').hide();
		/*$('#btngroup').hide();*/
		$('#Errorlabel').hide();
		$('#SuccessLabel').hide();
		$('#login-error-2').hide();
		/*$('#SignUpLoader').hide();*/
		$('#fnameOk').hide();
		$('#fnameRemove').hide();
		$('#mnameOk').hide();
		$('#mnameRemove').hide();
		$('#lnameOk').hide();
		$('#lnameRemove').hide();
		$('#emailOk').hide();
		$('#emailRemove').hide();
		$('#unameOk').hide();
		$('#unameRemove').hide();
		$('#pwdOk').hide();
		$('#pwdRemove').hide();
		$('#re-pwdOk').hide();
		$('#re-pwdRemove').hide();
		$('#genderRemove').hide();
		$('#genderOk').hide();

		//Change the border colors of all controles to their native color.
		$('#firstname').css("border", "solid 1px lightblue");
		$('#middlename').css("border", "solid 1px lightblue");
		$('#lastname').css("border", "solid 1px lightblue");
		$('#gender').css("border", "solid 1px lightblue");
		$('#email').css("border", "solid 1px lightblue");
		$('#username').css("border", "solid 1px lightblue");
		$('#password').css("border", "solid 1px lightblue");
		$('#re-password').css("border", "solid 1px lightblue");
	});

	$('#loginbtn').click(function () {
		var uname = $('#logintxt').val();
		var pwd = $('#loginpwd').val();
		$.ajax({
			type: 'POST',
			url: 'includes/Functions.php',
			data: 'loginuname=' + uname + '&loginpwd=' + pwd,
			success: function (response) {
				if (response == "1") {
					alert('Welcome');
				}
				else {
					$('#logintxt').val(uname);
					$('#loginpwd').val(pwd);
					$('#login-error-2').slideDown();
				}
			}
		})
	});

	$('#ModalLoginbtn').click(function () {
		var uname = $('#ModalUname').val();
		var pwd = $('#Modalpwd').val();
		$.ajax({
			type: 'POST',
			url: 'LoginLogic.php',
			data: {ModalUname: uname, Modalpwd: pwd},
			success: function (response) {
				if (response == "1") {
					//alert('Welcome');
					$('#LoginLoader').show().delay(250).slideUp();
					//window.location.href='home.php';
					$(location).attr('href', 'home.php');
				}
				else {
					$('#LoginLoader').show().delay(250).slideUp();
					$('#ModalUname').val(uname);
					$('#Modalpwd').val(pwd);
					$('#Modallogin-error').slideDown();
					$('#ModalUname').css("border", "solid 1px red");
					$('#Modalpwd').css("border", "solid 1px red");
					//alert(response);
				}
			}
		})
	});

	$('#ModalUname').keydown(function () {
		$('#Modallogin-error').slideUp();
		$('#ModalUname').css("border", "solid 1px lightblue");
		$('#Modalpwd').css("border", "solid 1px lightblue");
	});

	$('#Modalpwd').keydown(function () {
		$('#Modallogin-error').slideUp();
		$('#ModalUname').css("border", "solid 1px lightblue");
		$('#Modalpwd').css("border", "solid 1px lightblue");
	});

	$('#ModalWinDisplaybtn').click(function () {
		$('#Modallogin-error').slideUp();
		$('#ModalUname').css("border", "solid 1px lightblue");
		$('#Modalpwd').css("border", "solid 1px lightblue");
	})

	$('#logintxt').keydown(function () {
		$('#login-error-2').slideUp();
	});

	$('#loginpwd').keydown(function () {
		$('#login-error-2').slideUp();
	});

	$('#abdunies').click(function () {
		$('#abduniesAlert').slideToggle();
	});

	$('#UploadBage').click(function () {
		$('#UploadAlert').slideToggle();
	});
	$('#SmallUploadBage').click(function () {
		$('#SmallUploadAlert').slideToggle();
	});

	$('#ImageBoxLink').click(function () {
		$(location).attr('href', 'ImageBox.php');
		$(this).css("color", "solid 1px white");
		/*$('#ImageBoxCaret').show();*/
	});

	$('#CloseAbduniesAlert').click(function () {
		$('#abduniesAlert').slideUp();
	});
	$('#CloseImageUploadAlert').click(function () {
		$('#UploadAlert').slideUp();
	});
	$('#CloseAudioUploadAlert').click(function () {
		$('#UploadAlert').slideUp();
	});
	$('#CloseVideoUploadAlert').click(function () {
		$('#UploadAlert').slideUp();
	});

	$('#ImageUploader').on('change', function (e) {
		var files = $(this)[0].files;
		if (files.length > 1) {
			$('#label_span').text(files.length + ' Files ready to upload');
		}
		else {
			var filename = e.target.value.split('\\').pop();
			$('#label_span').text(filename);
		}
	});

//End of Main function.
});

