<?php include 'database.php';
$stmt;
$id = -1;
if(isset($argv) && count($argv)>1) {
    printf("getting arguments:<br>\n");
    $argarr = array_values($argv);
    $id = $argarr[1];
} else if(!isset($argv)){
    printf("getting requests:<br>\n");
    $id = $_REQUEST['id'];
}
printf("partname:%s<br>\n", $id);
if($id<0) {
    $stmt = $mysqli->prepare("SELECT * FROM PartsEx");
} else {
    $stmt = $mysqli->prepare("SELECT * FROM PartsEx where partNo=?");

}
// Prepare an insert statement
$stmt->bind_param("i",  $param_id);

    // Set parameters
    $param_id = $id;

    /* execute prepared statement */
$stmt->execute();
$stmt->bind_result($partNo, $partName, $partDescription, $currentPrice);

while ($stmt->fetch()) {

  echo "<pre>";
  echo "partNo: $partNo\n";
  echo "partName: $partName\n";
  echo "partDescription: $partDescription\n";
  echo "currentPrice: $currentPrice\n";
  echo "</pre>";
}


/* close statement and connection */
$stmt->close();
$mysqli->close();

?>