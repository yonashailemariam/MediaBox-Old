<?php require_once("includes/Session.php") ?>
<?php Confirm_logged_in(); ?>
<?php include("includes/Functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
/**
 * Author: Yonas Hailemariam
 * Date: 8/8/2016
 * Time: 6:37 PM
 * @Copywrite [2016]
 */

$Account=new Account();
$Account->FinishUpload(); ?>

<div class="col-xs-12 col-md-6">
	<div class="page-header">
		<h4>Recently Added</h4>
		<h5 class="text-muted"><span class="label label-warning">Pictures</span></h5>
	</div>
	<div class="jumbotron" id="Frontjumbotron">
	Images Comes Here ....
	</div>
	<div class="page-header">
		<h4>Recently Added</h4>
		<h5 class="text-muted"><span class="label label-success">Sounds</span></h5>
	</div>
	<div class="jumbotron" id="Frontjumbotron">
	Audios Comes Here ....
	</div>
	<div class="page-header">
		<h4>Recently Added</h4>
		<h5 class="text-muted"><span class="label label-primary">Videos</span></h5>
	</div>
	<div class="jumbotron" id="Frontjumbotron">
	Videos Comes Here ....
	</div>
</div>
</div>
</div>

<?php include("includes/footer.php"); ?>