<?php include 'database.php';
$partName = '';
$partDesc = '';
$price = 0.00;
$id = 0;
if(isset($argv)) {
    printf("getting arguments:<br>\n");
    $argarr = array_values($argv);
    $id = $argarr[1];
    $partName = $argarr[2];
    $partDesc = $argarr[3];
    $price = $argarr[4];

} else {
    printf("getting requests:<br>\n");
    $id = $_REQUEST['id'];
    $partName = $_REQUEST['partName'];
    $partDesc = $_REQUEST['partDescription'];
    $price = $_REQUEST['currentPrice'];
}
printf("partname:%s<br>\n", $id);
printf("partname:%s<br>\n", $partName);
printf("partDesc:%s<br>\n", $partDesc);
printf("price:%s<br>\n", $price);
// Prepare an insert statement
$stmt = $mysqli->prepare("UPDATE PartsEx SET partName=?, partDescription=?, currentPrice=? WHERE partNo= ?");
$stmt->bind_param("ssdi", $param_partName, $param_partDesc, $param_price, $param_id);

    // Set parameters
    $param_partName = $partName;
    $param_partDesc = $partDesc;
    $param_price = $price;
    $param_id = $id;

    /* execute prepared statement */
$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/* close statement and connection */
$stmt->close();
$mysqli->close();

?>