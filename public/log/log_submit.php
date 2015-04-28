<?php require_once("../../include/session.php"); ?>
<?php require_once("../../include/db_connect.php"); ?>
<?php require_once("../../include/functions.php"); ?>

<?php
	$timestamp = $_POST['timestamp'];
	$message = "";
	//empty error message
	//load data from submitted form
	$name = htmlspecialchars($_POST['name']);
	$amount = htmlspecialchars($_POST['amount']);
	$calories = htmlspecialchars($_POST['calories']);
	$type = 1;
	//add additional data
	$userid = $_SESSION['userid'];
	//here I will add input check

	//when there are no errors, enter values in to database

	if (empty($message)){
		$query = "INSERT INTO log (";
		$query .= " timestamp, userid, name, amount, calories, type";
		$query .= ") VALUES (";
		$query .= "'{$timestamp}', '{$userid}', '{$name}', '{$amount}', '{$calories}', '{$type}'";
		$query .= ")";
		$result = mysqli_query($connection, $query);

		// if ($result) {
		// 	$message .= "input verwerkt<br>";
		// 	} else {
		// 	$message .= "invoer ging fout<br>";
		// 	};
	};

$posttime_ajax = $timestamp;
include("../../include/main/log_read.php");
?>
----
<?php

echo "calories: 2000";

?>
