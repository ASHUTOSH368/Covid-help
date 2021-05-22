<?php
include 'Functions.php';
include 'Link.php';

$dataType = $_POST['datatype'];
$city = $_POST['city'];

if (!($dataType === "" and $city === "")) {

	{
		for ($i = 1; $i <= 100; $i++) {
			$name[$i] = safeText($_POST['Name'.$i]);
			$contact[$i] =safeText($_POST['Cont'.$i]);
			$prop[$i] = safeText($_POST['Prop'.$i]);

			if(!($name[$i] === "")){

				// $query = "SELECT * FROM '";
				// $query .= $dataType."' WHERE hname = '";
				// $query .= $name[$i]."'";

				$query = "SELECT Id FROM ".$dataType." WHERE hname = '";
				$query .= $name[$i]."'";

				$result = mysqli_query($link,$query);

				if (mysqli_num_rows($result) == 1){

					if (!($contact[$i] === ""))	{
				
						$query = "UPDATE $dataType SET contact = $contact[$i] WHERE hname = $name[$i] AND city = $city";
				
				
						If (mysqli_query($link,$query)){

							echo "Contact:".$i." updated in ".$city." ".$dataType."<br />";
						}

					}

					if ((!($prop[$i] === "")) and ($dataType === "hospital" or $dataType === "oxygen" or $dataType === "ambulance" or $dataType === "test" or $dataType === "medical"))	{
				
						$query = "UPDATE ".$dataType." SET bed = '";
						$query .= $prop[$i]."' WHERE hname = '";
						$query .= $name[$i]."'";
				
				
						If (mysqli_query($link,$query)){

							echo "Property:".$i." updated in ".$city." ".$dataType."<br />";
						}

					}
				} elseif (mysqli_num_rows($result) == 0) {
					if ((!($contact[$i] === "")) and $prop[$i] === "")	{
				
						$query = "INSERT INTO ".$dataType." (hname, contact, city) VALUES ('";
						$query .= $name[$i]."', '";
						$query .= $contact[$i]."', '";
						$query .= $city."')";
				
				
				
						If (mysqli_query($link,$query)){

							echo "Contact:".$i." created in ".$city." ".$dataType."<br />";
						}

					}

					if ((!($prop[$i] === "")) and $contact[$i] == "" and ($dataType === "hospital" or $dataType === "oxygen" or $dataType === "ambulance" or $dataType === "test" or $dataType === "medical"))	{
				
						$query = "INSERT INTO ".$dataType." (hname, bed, city) VALUES ('";
						$query .= $name[$i]."', '";
						$query .= $prop[$i]."', '";
						$query .= $city."')";
				
				
						If (mysqli_query($link,$query)){

							echo "Availability:".$i." created in ".$city." ".$dataType."<br />";
						}

					}

					if ((!($prop[$i] === "" and $contact[$i] ==="")) and ($dataType === "hospital" or $dataType === "oxygen" or $dataType === "ambulance" or $dataType === "test" or $dataType === "medical"))	{
				
						$query = "INSERT INTO ";
						$query .= $dataType." (hname, contact, bed, city) VALUES ('";
						$query .= $name[$i]."', '";
						$query .= $contact[$i]."', '";
						$query .= $prop[$i]."', '";
						$query .= $city."')";
				
				
						If (mysqli_query($link,$query)){

							echo "Property & Contact:".$i." created in ".$city." ".$dataType."<br />";
						}

					}
				
					

				}

			}

		}

	}	

}




mysqli_close($link);
?>