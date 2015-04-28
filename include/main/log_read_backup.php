<?php

$logtime = gettime();
    $totalintake = 0;

?>


<!-- explanation -->
<p>
here is an overview of what you have eaten on <?php echo $logtime['formatteddate']; ?>
 query details: <br> user id 
<?php echo $_SESSION['userid'] ?>
</p>
<?php 
//output error message as plain text
if (isset($message)){
		echo "$message";
};
	?>

<br>

	<ul>
    	<?php
      
$logtimedb = dbdate($_SESSION['userid'], $logtime['utctimestamp']);
$logquery1 = mysqli_fetch_assoc($logtimedb);

  while ($logdata = mysqli_fetch_assoc($logtimedb)){

   		?>
        <li>
        	<?php 
          $totalcalories =  ($logdata["calories"] *  $logdata["amount"]);
          $totalintake = ($totalintake + $totalcalories);

        		echo 
        		$logdata["name"] . " " .
        		$totalcalories . " kcal" .
        		' change entry <a href="log/log_change.php?id=' . 
        		$logdata["id"] . 
        		'">  [change] </a> '
        		; 

        	?>
        </li>
     		<?php
           	};

           if (empty($logquery1["name"])) {
$message = "no log entries found";
$past =  $logtime['utctimestamp'];
 };
        	?>
	</ul>


    <?php
        mysqli_free_result($logtimedb);
    ?>

total amount of calories: <?php echo $totalintake; ?>
add new log entry: <a href="log/log_add.php<?php if(isset($past)){echo "?time=" . $past; }; ?>"> click here</a>
