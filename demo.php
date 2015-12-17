<?php

// Connect
$database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Create Table
$query = "CREATE TABLE `Customers` (
                    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `Name` TEXT NOT NULL,
                    `Updated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    PRIMARY KEY (`CustomerID`)
                )
                COMMENT='Customer information'
";

$database->query($query);

// Insert data
$query = sprintf('INSERT INTO Customers(Name) VALUES("%s")', 'Person Person');
$database->query($query);

// Display Data
$query = 'SELECT * FROM Customers';
$result = $database->query($query);

while ($obj = $result->fetch_object()) {
    printf("%s %s %s\n", $obj->id, $obj->Name, $obj->Updated);
}

$result->close();
$mysqli->close();
?>
