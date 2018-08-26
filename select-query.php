<?php  require_once('inc/connection.php');?>
<?php
$query = "SELECT first_name, last_name, email FROM user";
$result_set=mysqli_query($connection , $query);
if($result_set){
	echo mysqli_num_rows($result_set) . "<hr>";

	$table = '<table>'; 
	$table .= '<tr><th>FirstName</th><th>LastName</th><th>Email</th>';
	
	while($record = mysqli_fetch_assoc($result_set)){
		$table .= '<tr>';
		$table .= '<td>' . $record['first_name'] . '</td>';
		$table .= '<td>' . $record['last_name'] . '</td>';
		$table .= '<td>' . $record['email'] . '</td>';

		$table .= '</tr>';
    

	


    }

    $table .= '</table>';

}



?>


<!DOCTYPE html>
<html>
<head>
	<title>sandun</title>
	<style >

        table{border-collapse: collapse;}
		td,th{border: 1px solid black;padding: 10px;}
	</style>
</head>
<body>
	<?php echo $table; ?>

</body>
</html>

<?php mysqli_close($connection); ?>