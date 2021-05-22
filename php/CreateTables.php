<?php
include 'Link.php';

// $query = "CREATE TABLE fileLinks (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fileNumber VARCHAR(20) NOT NULL, link VARCHAR(100))";

// if (mysqli_query($link,$query)) {
// 	echo "table fileLinks created";
// }

// for ( $i = 1001; $i <= 10000; $i++) {
// 	$j = $i + 2731000;
// 	$fn = "File ".$i;
// 	$l = "../files/Stacked File ".$j;
// 	$l.= ".fsh";
	
// 	$query = "INSERT INTO fileLinks (fileNumber,link) VALUES ('$fn','$l')";
	
// 	if (mysqli_query($link,$query)) {
// 		echo "data inserted in row : ".$i."<br />";
// 	} else {
// 		echo "Error :".$i.mysqli_error($link)."<br />";
//, contact VARCHAR(20), hospitalname VARCHAR(100) NOT NULL, bed INT(5), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// 	}
	
	
// }

// $query = "CREATE TABLE hospitals (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, contact VARCHAR(20), hospitalname VARCHAR(100) NOT NULL, bed INT(5), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

// if (mysqli_query($link,$query)) {
// 	echo "table fileLinks created";
// }


$query = "CREATE TABLE hospital (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(30), contact VARCHAR(20), hname VARCHAR(100) NOT NULL, bed VARCHAR(30), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Hospital created";
} else {
	echo "error";
}

$query = "CREATE TABLE plasma (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(30), contact VARCHAR(20), hname VARCHAR(100) NOT NULL, updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Plasma created";
} else {
	echo "error";
}

$query = "CREATE TABLE oxygen (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(30), contact VARCHAR(20), hname VARCHAR(100) NOT NULL, bed VARCHAR(30), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Oxygen created";
} else {
	echo "error";
}

$query = "CREATE TABLE ambulance (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(30), contact VARCHAR(20), hname VARCHAR(100) NOT NULL, bed VARCHAR(30), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Ambulance created";
} else {
	echo "error";
}

$query = "CREATE TABLE test (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(30), contact VARCHAR(20), hname VARCHAR(100) NOT NULL, bed VARCHAR(30), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Test created";
} else {
	echo "error";
}

$query = "CREATE TABLE medical (Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, city VARCHAR(30), contact VARCHAR(20), hname VARCHAR(100) NOT NULL, bed VARCHAR(30), updtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($link,$query)) {
	echo "table Medical created";
} else {
	echo "error";
}





mysqli_close($link);
?>