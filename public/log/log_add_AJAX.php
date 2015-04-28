<?php require_once("../include/session.php"); ?>
<?php require_once("../include/db_connect.php"); ?>
<?php require_once("../include/functions.php"); ?>
<?php loggedin_check(); ?>

<?php
	$message = "";
// work with SET time, or create variable with current time.
	if (isset($_GET['time'])){
		if ($_GET['time'] !== ""){
			$timestamp = htmlspecialchars($_GET['time']); 
		}else{
			$timestamp = time();
		}
	}else{
		$timestamp = time();
	};

//check if the form is submitted
if (isset($_POST['submit'])) {
	//empty error message
	//load data from submitted form
	$name = htmlspecialchars($_POST['name']);
	$amount = htmlspecialchars($_POST['amount']);
	$calories = htmlspecialchars($_POST['calories']);
	$type = htmlspecialchars($_POST['type']);
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

		if ($result) {
			$message .= "input verwerkt<br>";
			} else {
			$message .= "invoer ging fout<br>";
			};
	};
};


?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Add items to database</title>
  <meta name="description" content="add items to database in php">
  <meta name="author" content="hansjan">

  <!-- <link rel="stylesheet" href="css/styles.css?v=1.0"> -->
</head>

<body>

<!-- instructions -->
<p>
Add item in log:
</p>
<?php 
echo $timestamp;

//output error message as plain text
if (isset($message)){
		echo "$message";
};
	?>
<br>

<!-- form -->

<form action="log_add.php?time=<?php echo $timestamp; ?>" method="post">
		what kind of input is it?<br>
	<input type="radio" name="type" value="1"> intake <br>
	<input type="radio" name="type" value="2"> excersize <br>
	product name:<br>
	<input type="text" name="name" value="<?php if(isset($name)){echo $name;}; ?>">(example: banana) <br><br>
	calories:<br>
	<input type="text" name="calories" value="<?php if(isset($calories)){echo $calories;}; ?>"> (example: 1 banana is 90 kcal)<br><br>
	amount:<br>
	<input type="text" name="amount" value="<?php if(isset($amount)){echo $amount;}; ?>">(example: Only half a banana, so 0.5)<br><br>
	<input type="submit" name="submit" value="submit">
</form>

</body>
</html>

<?php
  // Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	};
?>
