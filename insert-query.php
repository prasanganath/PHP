<?php  require_once('inc/connection.php');?>

<?php 

$first_name = 'sheran';
$last_name = 'lihinika';
$email = 'sheran@gmail.com';
$password = 'ohghghg';
$is_deleted = 0;

$hashed_password=sha1($password);
$query = "INSERT INTO user (first_name,last_name,email,password,is_deleted) VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}',{$is_deleted})";

  $result = mysqli_query($connection,$query);
  if($result){
  	echo "1 recode added";
  }else{
  	echo "error";
  }



?>


<!DOCTYPE html>
<html>
<head>
	<title>insert query</title>
</head>
<body>

</body>
</html>

<?php mysqli_close($connection); ?>