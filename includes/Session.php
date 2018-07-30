<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php
/**
 * Author: Yonas Hailemariam
 * Date: 8/7/2016
 * Time: 9:17 PM
 * @Copywrite [2016]
 */
session_start();

//Authenticate the user
function Confirm_logged_in()
{
	if(!isset($_SESSION['UserName']) AND !isset($_SESSION['Password'])){
		header("location: index.php");
	}
}



