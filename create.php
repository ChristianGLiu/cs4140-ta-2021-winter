<?php include 'database.php';
$partName = '';
$partDesc = '';
$price = 0.00;
if(isset($argv)) {
    printf("getting arguments:<br>\n");
    $argarr = array_values($argv);
    $partName = $argarr[1];
    $partDesc = $argarr[2];
    $price = $argarr[3];

} else {
    printf("getting requests:<br>\n");
    $partName = $_REQUEST['partName'];
    $partDesc = $_REQUEST['partDescription'];
    $price = $_REQUEST['currentPrice'];
}
printf("partname:%s<br>\n", $partName);
printf("partDesc:%s<br>\n", $partDesc);
printf("price:%s<br>\n", $price);
// Prepare an insert statement
$stmt = $mysqli->prepare("INSERT INTO PartsEx (partName, partDescription, currentPrice) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $param_partName, $param_partDesc, $param_price);

    // Set parameters
    $param_partName = $partName;
    $param_partDesc = $partDesc;
    $param_price = $price;

    /* execute prepared statement */
$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/* close statement and connection */
$stmt->close();
$mysqli->close();

?>
