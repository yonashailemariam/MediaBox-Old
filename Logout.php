<?php include("includes/DBConnection.php"); ?>
<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php
/**
 * Author: Yonas Hailemariam
 * Date: 8/7/2016
 * Time: 9:34 PM
 * @Copywrite [2016]
 */

global $pdo;

/*------------ Five Steps to logout ----------*/
//1.Find the Session
session_start();

//Update Online Status
$query2="UPDATE account SET Status=:Status WHERE ID=:ID";
$resultset2=$pdo->prepare($query2);
$resultset2->bindValue(':Status', 'offline');
$resultset2->bindValue(':ID', $_SESSION['ID']);
$resultset2->execute();

//2.Unset all session Variables
$_SESSION=array();

//3.Destroy Session Cookie
if(isset($_COOKIE[session_name()]))
{
	setcookie(session_name(),'',time()-4000000,'/');
}

//4.Destroy the Session
session_destroy();

//5.Redirect to login
header("location: index.php");