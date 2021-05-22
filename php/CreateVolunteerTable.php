<?php
include 'Link.php';


$query = "CREATE TABLE volunteer (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(100), contact VARCHAR(15), vname VARCHAR(100) NOT NULL, email VARCHAR(50), pass VARCHAR(50),adult VARCHAR(10), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Volunteer created";
} else {
	echo "error";
}





mysqli_close($link);
?>