<?php require_once("../include/db_connect.php");
  $query = "SELECT DISTINCT name FROM log";
  $result = mysqli_query($connection, $query);
  $name = mysqli_fetch_assoc($result);
  while($log = mysqli_fetch_assoc($result)) {
        	$a[] = $log["name"]; 
          };
        mysqli_free_result($result);

  // Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	};
$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
