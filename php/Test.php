<?php
$city = $_GET['city'];

?>

<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $city; ?> Covid Test Centre</title>
<style>
	body{
		color: cyan;
		text-align: center;
}
#corner{
	background-color: red;
}
a{
	background-color: rgb(214, 214, 247);
	text-decoration: none;
	border: 3px solid red;
}
#list{
	margin: auto;
}
p{
	color: black;
}
</style>
</head>
<body background="../images/back.jpg" style="background-repeat: no-repeat;background-size: 100% 100%;">
	<table id="corner" border="4px">
		<thead>
		<th><a href="../index.html">HOME</a></th>
		<th><a href="../php/volunteerRegister.php">JOIN US A VOLUNTEER</a></th>
		
		<th><a href="../html/FAQ.html">FAQ</a></th>
	</thead>
	<tr>
		<th><a href="https://www.who.int/news-room/feature-stories/detail/how-do-vaccines-work">RESEARCHES</a></th>
		<th><a href="../html/covid-19&symptoms.html">COVID-19 & SYMPTOMS</a></th>
		<th><a href="https://www.cdc.gov/vaccines/covid-19/index.html">RESOURCES</a></th>
	
</table>
<img src="../images/site logo.png" alt="image loading" width="350px" height="180px">
<h2>Welcome To Covid Help</h2>
<h1><?php echo $city; ?> Covid Test Centre</h1>
<div>
	<table border ="3p" id="list">
	<thead>
<th>CONTACT</th>
<th>NAME</th>
<th>AVAILABILITY</th>
<td>LAST VERIFIED</td>
</thead>

<?php 
include 'Link.php';

$query = "SELECT * FROM test WHERE city = '";
$query .= $city."'";


if($result = mysqli_query($link, $query)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row['contact']."</td>";
				echo "<td>".$row['hname']."</td>";
				echo "<td>".$row['bed']."</td>";
				echo "<td>".$row['updtime']."</td>";
			echo "</tr>";
		}
	}
} else {
	echo "Error ".mysqli_error($link);
}

mysqli_close($link);
?>



</table>
</div>
<h1>Important Link</h1>


<a href="https://www.cowin.gov.in/"> Vaccination Registration</a>
<p></p>
<a href="https://www.who.int/"> WHO Official Website</a>
	<p></p>
	<a href="https://www.mohfw.gov.in/"> Health Ministry Of India</a>
<p></p>
<a href="mailto:gby2304@gmail.com"> Contact Us</a>
<p></p>
<a href=""> About Us</a>
<p></p>

<p><span>DISCLAMER</span>:This site is hosted and governed by team tech-worrior and data displaced on this taken by various sites of helping authorities</p>


</body>
</html>