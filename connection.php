<?php

 $connection=mysqli_connect('localhost','root','','userdb');
 if(mysqli_connect_errno()){
 	die('database connection faild' . mysqli_connect_error());
 }else{
 	  //  echo " connection successful";
 }


?>