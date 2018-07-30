<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php
/**
 * Author: Yonas Hailemariam
 * Date: 6/19/2016
 * Time: 8:38 AM
 * @Copywrite [2016]
 */

try{
	//PDO, PHP Data Object, is OO way of interacting with MySQL Database, a 2012 edition.
	$pdo=new PDO("mysql: host=localhost; dbname=imagebox","root");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("SET NAMES 'utf8'");
}
catch (PDOException $ex){
	$ex->getMessage();
	echo $ex;
}
