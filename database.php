<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'db.cs.dal.ca');
define('DB_USERNAME', 'gang');
define('DB_PASSWORD', '780309vY');
define('DB_NAME', 'gang');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    echo "Successfully connected to database.";
}
?>