<?php
include 'Functions.php';
include 'Link.php';

$dataType = $_POST['datatype'];
$city = $_POST['city'];

if (!($dataType === "" and $city === "")) {

	{
		for ($i = 1; $i <= 10; $i++) {
			$name[$i] = safeText($_POST['Name'.$i]);

			if(!($name[$i] === "")){

				$query = "DELETE FROM ".$dataType." WHERE hname = '";
                $query .= $name[$i]."' AND city = '";
                $query .= $city."'";
								
				If (mysqli_query($link,$query)){
				    echo "Data:".$i." deleted in ".$city." ".$dataType."<br />";
					}

			}

		}

	}	

}




mysqli_close($link);
?>