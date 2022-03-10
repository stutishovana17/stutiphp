<?php
$conn = mysqli_connect("localhost:3308","root","");
$db=mysqli_select_db($conn,'register');
if(isset($_POST['submit']))
{


//$fullname = $studentID=$mobile=$course= $email = $password = $cpassword = '';

$fullname = $_POST['fullname'];
$studentID =$_POST['studentID'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$target_dir="imageupload/";
$target_file=$target_dir.
basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//$cpassword =MD5($cpassword);

$sql = "INSERT INTO register ('fullname','studentID','mobile','course','email','password','cpassword','image')
 VALUES ('$fullname','$studentID','$mobile','$course','$email','$password','$cpassword','$target_dir')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: student_login.php");
}
else
{
	echo '<script type="text/javascript"> alert("Not saved")</script>';
}

}
?>
