<?php
session_start();
require_once('config.php');
?>
<?php

if(isset($_POST['message'])){
	$message 		= $_POST['message']; 
	$ownerid = $_SESSION['login'];  
	
		$sql = "INSERT INTO messages (message,ownerid) VALUES(?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$message,$ownerid]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}