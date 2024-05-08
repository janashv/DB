<?php
$servername = "ns1-jana-shvets";
$username = "DBlietotajs";
$password = "Pa$$word1234";
$database = "UzvardsDB";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE VirtM (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    название_столбца VARCHAR(30) NOT NULL,
    еще_один_столбец VARCHAR(30) NOT NULL,
    и_так_далее VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Таблица VirtM успешно создана";
} else {
    echo "Ошибка при создании таблицы: " . $conn->error;
}

$conn->close();
?>