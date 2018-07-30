<?php include("DBConnection.php"); ?>
<?php header('X-XSS-Protection: 1'); ?>
<?php header('X-Content-Type-Options: nosniff'); ?>
<?php
/**
 * Author: Yonas Hailemariam
 * Date: 6/19/2016
 * Time: 8:54 AM
 * @Copywrite [2016]
 */

class Account {

	public function ValidateEmail(){
		global $pdo;

		if(isset($_POST['email'])){
			$email=$_POST['email'];

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "0";
			}
			else{
				$query="SELECT Email from account WHERE Email=:Email";
				$resultset=$pdo->prepare($query);
				$resultset->bindValue(":Email",htmlentities($email));
				$resultset->execute();

				$size=0;
				$size=$resultset->rowCount();

				if($size>0){
					echo "1";
				}
			}
		}

	}

	public function SignUp(){
		global $pdo;
		if(isset($_POST['firstname']) AND isset($_POST['middlename']) AND isset($_POST['lastname']) AND isset($_POST['gender'])
				AND isset($_POST['email']) AND isset($_POST['username']) AND isset($_POST['password'])){

			$query="INSERT into account(FirstName, MiddleName, LastName, Gender, Email, UserName, Password, Status)
			VALUES(:FirstName,:MiddleName,:LastName,:Gender,:Email,:UserName,:Password,:Status)";
			$ResultSet=$pdo->prepare($query);

			$ResultSet->bindValue(':FirstName', htmlentities($_POST['firstname']));
			$ResultSet->bindValue(':MiddleName', htmlentities($_POST['middlename']));
			$ResultSet->bindValue(':LastName', htmlentities($_POST['lastname']));
			$ResultSet->bindValue(':Gender', htmlentities($_POST['gender']));
			$ResultSet->bindValue(':Email', htmlentities($_POST['email']));
			$ResultSet->bindValue(':UserName',sha1(htmlentities($_POST['username'])));
			$ResultSet->bindValue(':Password', sha1(htmlentities($_POST['password'])));
			$ResultSet->bindValue(':Status', 'offline');

			if($ResultSet->execute()){
				echo "1";
			}
		}
	}

	public function Login(){
		global $pdo;
		if(isset($_POST['ModalUname']) AND isset($_POST['Modalpwd'])){

			$query1="SELECT * From account WHERE UserName=:UserName AND Password=:Password LIMIT 1";
			$resultset1=$pdo->prepare($query1);
			$resultset1->bindValue(':UserName', sha1(htmlentities($_POST['ModalUname'])));
			$resultset1->bindValue(':Password', sha1(htmlentities($_POST['Modalpwd'])));
			if($resultset1->execute()){
				$size=0;
				$size=$resultset1->rowCount();

				if($size>0){
					echo '1';//if it finds much
					$result=$resultset1->fetch();
					$_SESSION['ID']=$result['ID'];
					$_SESSION['UserName']=htmlentities($result['UserName']);
					$_SESSION['Password']=htmlentities($result['Password']);

					//Encrypt the Session
					ini_set('session.hash_function','sha512');
					ini_set('session.hash_bits_per_character', 6);
					ini_set('session.entropy_length', 128);

					//Update Online Status
					$query2="UPDATE account SET Status=:Status WHERE ID = :ID";
					$resultset2=$pdo->prepare($query2);
					$resultset2->bindValue(':Status', 'Online');
					$resultset2->bindValue(':ID', $result['ID']);
					$resultset2->execute();

					//Set the login attempt number to zero
					$query3="UPDATE account SET failed_login=:failed_login WHERE UserName=:UserName";
					$resultset3=$pdo->prepare($query3);
					$resultset3->bindValue(':failed_login', 0);
					$resultset3->bindValue(':UserName', sha1(htmlentities($_POST['ModalUname'])));
					$resultset3->execute();
				}
				else{
					echo "0";
					//Set failed login
					//Get the details of the account ..
					$query4="SELECT * FROM account WHERE UserName=:UserName";
					$resultset4=$pdo->prepare($query4);
					$resultset4->bindValue(':UserName', sha1(htmlentities($_POST['ModalUname'])));
					if($resultset4->execute()){
						$size2=0;
						$size2=$resultset4->rowCount();
						if($size2>0){
							$result=$resultset4->fetch();
							//Check failed login
							if($result['failed_login']<2) {
								$query3 = "UPDATE account SET failed_login=:failed_login WHERE UserName=:UserName";
								$resultset3 = $pdo->prepare($query3);
								$resultset3->bindValue(':failed_login', $result['failed_login'] + 1);
								$resultset3->bindValue(':UserName', $result['UserName']);
								$resultset3->execute();
							}

						}
					}
		        }
			}
		}
	}
	//Goes through every possible error that comes with uploading file to a server.
	public function File_Upload_Error_Message($Error_Code){
		switch($Error_Code){
			case UPLOAD_ERR_INI_SIZE:
				//return 'The uploaded file exceeds the upload_max_file size directive in php.ini';
				return '5';
			case UPLOAD_ERR_FORM_SIZE:
				//return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
				return '5';
			case UPLOAD_ERR_PARTIAL:
				//return 'The uploaded file was only partially uploaded';
				return '5';
			case UPLOAD_ERR_NO_FILE:
				//return 'No file was uploaded';
				return '5';
			case UPLOAD_ERR_NO_TMP_DIR:
				//return 'Missing a temporary folder';
				return '5';
			case UPLOAD_ERR_CANT_WRITE:
				//return 'Failed to write file to disk';
				return '5';
			case UPLOAD_ERR_EXTENSION:
				//return 'File upload stopped by extension';
				return '5';
			default:
				//return 'Unknown error occurred, Upload failed';
				return '5';
		}
	}

	public function CheckIfAlreadyExist($File){
		global $pdo;
		$Size=0;
		$query="SELECT * FROM images WHERE ImageName=:ImageName";
		$ResultSet=$pdo->prepare($query);
		$ResultSet->bindValue(':ImageName', htmlentities($File));
		$ResultSet->execute();
		$Size=$ResultSet->rowCount();
		if($Size>0){ return true; }
		else { return false;}
	}

	public function Upload(){
		global $pdo;
		$MaxSize=5000000;
		$Message='';

		if($this->CheckIfAlreadyExist($_FILES['ImageUploader']['name'])){
			//$Message="File already Exists";
			$Message='3';
		}
		else if((!getimagesize($_FILES['ImageUploader']['tmp_name']))){
			$Message='104';
		}
		else{
			//check associated error code
			if($_FILES['ImageUploader']['error']==UPLOAD_ERR_OK)
			{
				//check whether file is uploaded with HTTP POST
				if(is_uploaded_file($_FILES['ImageUploader']['tmp_name']))
				{
					//checks size of uploaded image on server side
					if( $_FILES['ImageUploader']['size'] < $MaxSize)
					{
						//checks whether uploaded file is of image data type
						$whitlist=array(".jpg",".png",".gif",".jpeg");

						foreach ($whitlist as $file)
						{
							if(preg_match("/$file\$/i", $_FILES['ImageUploader']['name']))
							{
								if($_FILES['ImageUploader']['type']=="image/gif" || $_FILES['ImageUploader']['type']== "image/png" ||
										$_FILES['ImageUploader']['type']== "image/jpg" || $_FILES['ImageUploader']['type']== "image/jpeg"
										|| $_FILES['ImageUploader']['type']== "image/JPEG" || $_FILES['ImageUploader']['type']== "image/JPG" ||
										$_FILES['ImageUploader']['type']== "image/PNG" || $_FILES['ImageUploader']['type']== "image/GIF") {
									// prepare the image for insertion
									$ImgData =addslashes (file_get_contents($_FILES['ImageUploader']['tmp_name']));
									$ImageProperties=getimagesize(htmlentities($_FILES['ImageUploader']['tmp_name']));

									// put the image in the db...
									$query="INSERT INTO images(ImageName ,ImageData, ImageType, UploadedBy) VALUES(:ImageName ,:ImageData, :ImageType, :UploadedBy)";
									$ResultSet=$pdo->prepare($query);
									$ResultSet->bindValue(':ImageName', htmlentities($_FILES['ImageUploader']['name']));
									$ResultSet->bindValue(':ImageData',$ImgData);
									$ResultSet->bindValue(':ImageType',htmlentities($ImageProperties['mime']));
									$ResultSet->bindValue(':UploadedBy',htmlentities($_SESSION['ID']));
									if($ResultSet->execute())
									{

										$Destination="/xampp/YonasH/MediaBox/Uploads/images/";
										if(move_uploaded_file($_FILES['ImageUploader']['tmp_name'],
												$Destination.$_FILES['ImageUploader']['name'])){

											//$Message="Image Uploaded Successfully";
										}
									}
									$Message='102';
								}
								else{
									$Message='104';
								}
							}
						}
					}
					else{
						//$Message="File exceeds the Maximum File limit";
						$Message='6';
					}
				}
				else{
					//$Message="File not uploaded successfully";
					$Message='7';
				}
			}
			else{
				$Message=$this->File_Upload_Error_Message($_FILES['ImageUploader']['error']);
			}
		}
		return $Message;
	}/* End of Upload Function*/

	public function FinishUpload(){
		if(isset($_POST['Uploadbtn'])){
			// check if a file was submitted
			if(!isset($_FILES['ImageUploader'])){
				return '4';
			}
			else{
				try{
					$Message= $this->Upload();
					return $Message;
				}
				catch(Exception $ex){
					//echo $ex->getMessage();
					//return 'Sorry, could not upload file';
					return '8';
				}
			}
		}
		else {
			//return 'POST Failed';
			return '9';
		}
	}
}



