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
} else {
    echo "Need to input partNo!<br>\n";
}
printf("partname:%s<br>\n", $id);
$stmt = $mysqli->prepare("DELETE FROM PartsEx WHERE partNo= ?");

// Prepare an insert statement
$stmt->bind_param("i",  $param_id);

// Set parameters
$param_id = $id;

    /* execute prepared statement */
$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/* close statement and connection */
$stmt->close();
$mysqli->close();

?>