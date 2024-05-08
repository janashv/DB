<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:ns1-jana-shvets.database.windows.net,1433; Database = ShvetsDB", "CloudSA26cf6cfb", "{Pa$$word1234}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSA26cf6cfb", "pwd" => "{Pa$$word1234}", "Database" => "ShvetsDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ns1-jana-shvets.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
