<?php require_once("includes/Session.php") ?>
<?php Confirm_logged_in(); ?>
<!-- /**
 * Author: Yonas Hailemariam
 * Date: 8/12/2016
 * Time: 8:05 PM
 * @Copywrite [2016]
 */ -->

<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php require_once("includes/DBConnection.php"); ?>
<?php require_once("includes/Functions.php"); ?>
<?php include("includes/header.php"); ?>

<div class="col-xs-12 col-md-6" style="margin-top: 2em;">
	<a id="ImageActivity" href="ImageBox.php" style="text-decoration: none;">
		<span id="HomeBadge" class="label label-default" style="padding: 1em; margin-top: 2em; font-size: 14px;">
		<?php
		$query="SELECT * FROM images WHERE 	UploadedBy=:UploadedBy";
		$ResultSet=$pdo->prepare($query);
		$ResultSet->bindValue(':UploadedBy', htmlentities($_SESSION['ID']));
		$ResultSet->execute();
		$Size=0;
		$Size=$ResultSet->rowCount();
		echo $Size;
		?>
	</span><span id="HomeLabel" class="label label-success" style="padding: 1em;margin-top: 2em; font-size: 14px;">
		<i class="fa fa-image fa-2x"></i> in Gallery
	</span>
	</a>
	&nbsp;&nbsp;
	<a id="AudioActivity" href="AudioBox.php" style="text-decoration: none;">
		<span id="HomeBadge" class="label label-default" style="padding: 1em; margin-top: 2em; font-size: 14px;">0
		</span><span id="HomeLabel" class="label label-success" style="padding: 1em;margin-top: 2em; font-size: 14px;">
		<i class="fa fa-music fa-2x"></i> in Gallery
		</span>
	</a>
	&nbsp;&nbsp;
	<a id="VideoActivity" href="VideoBox.php" style="text-decoration: none;">
		<span id="HomeBadge" class="label label-default" style="padding: 1em;margin-top: 2em; font-size: 14px;">0
	</span><span id="HomeLabel" class="label label-success" style="padding: 1em;margin-top: 2em; font-size: 14px;">
		<i class="fa fa-video-camera fa-2x"></i> in Gallery</span>
	</a>
	<div class="page-header" style="margin-top: 4em;">
		<h3><span class="label label-danger">Recently Added</span></h3>
		<h5 class="text-muted"><span class="label label-warning">Pictures</span></h5>
	</div>
	<div class="jumbotron" id="Frontjumbotron">
		<?php
		global $pdo;
		$Destination="./Uploads/images";
		$query="SELECT * FROM images WHERE 	UploadedBy=:UploadedBy ORDER BY UploadTime DESC LIMIT 6";
		$ResultSet=$pdo->prepare($query);
		$ResultSet->bindValue(':UploadedBy', htmlentities($_SESSION['ID']));
		$ResultSet->execute();
		$Size=0;
		$Size=$ResultSet->rowCount();
		if($Size > 0){
			while($Result= $ResultSet->fetch()){
				$ImageName=htmlentities($Result['ImageName']);
				?>
				<a href="<?php echo $Destination."/".$ImageName; ?>" data-lightbox="ImageGallery" data-title="<?php echo $ImageName; ?>">
					<img id="UploadedImage"  class="img-thumbnail img-responsive"
						 src="<?php echo $Destination."/".$ImageName; ?>" width=250 height=170/>
				</a>
				<?php
			}
		}
		?>
	</div>
	<div class="page-header">
		<h3><span class="label label-danger">Recently Added</span></h3>
		<h5 class="text-muted"><span class="label label-success">Sounds</span></h5>
	</div>
	<div class="jumbotron" id="Frontjumbotron">
		Audios Comes Here ....
	</div>
	<div class="page-header">
		<h3><span class="label label-danger">Recently Added</span></h3>
		<h5 class="text-muted"><span class="label label-primary">Videos</span></h5>
	</div>
	<div class="jumbotron" id="Frontjumbotron">
		Videos Comes Here ....
	</div>
</div>
</div>
</div>

<?php include("includes/footer.php"); ?>