<?php
set_time_limit(0);
include("data/dB.php");

$name="";
$message="";
$email="";
$subject="";
if(isset($_POST['name']) && isset($_POST['comment']) && isset($_POST['email']) && isset($_POST['subject'])){
$name=$_POST['name'];
$message=$_POST['comment'];
$email=$_POST['email'];
$subject=$_POST['subject'];





	$sql = "INSERT INTO `comment`(`name`,`message`,`email`,`subject`) VALUES ('{$name}','{$message}','{$email}','{$subject}')";
		$link->query ( $sql );
		
		
		
		
		
		
	echo '<script>window.alert("'.$subject.' enviada!");</script>';
		}else{
	echo '<script>window.alert("Error");</script>';

	}


dBUnlink($link);
	echo "<script>window.location.href='critSug.php'</script>";


?>