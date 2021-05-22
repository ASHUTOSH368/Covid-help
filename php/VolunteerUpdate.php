<?php
include 'Functions.php';
include 'Link.php';

if (isset($_POST['city']) and isset($_POST['datatype']))
{
    $dataType = $_POST['datatype'];
    $city = $_POST['city'];

    if (!($dataType === "" and $city === "")){
		for ($i = 1; $i <= 10; $i++) {
			$name[$i] = safeText($_POST['Name'.$i]);
			$contact[$i] =safeText($_POST['Cont'.$i]);
			$prop[$i] = safeText($_POST['Prop'.$i]);

			if(!($name[$i] === "")){
				$query = "SELECT Id FROM ".$dataType." WHERE hname = '";
				$query .= $name[$i]."'";

				$result = mysqli_query($link,$query);

				if (mysqli_num_rows($result)){

					if (!($contact[$i] === ""))	{
				
						$query = "UPDATE $dataType SET contact = $contact[$i] WHERE hname = $name[$i] AND city = $city";
				
				
						if (mysqli_query($link,$query)){

							echo "Contact:".$i." updated in ".$city." ".$dataType."<br />";
						}

					}

					if ((!($prop[$i] === "")) and ($dataType === "hospital" or $dataType === "oxygen" or $dataType === "ambulance" or $dataType === "test" or $dataType === "medical"))	{
				
						$query = "UPDATE ".$dataType." SET bed = '";
						$query .= $prop[$i]."' WHERE hname = '";
						$query .= $name[$i]."'";
				
				
						if (mysqli_query($link,$query)){

							echo "Property:".$i." updated in ".$city." ".$dataType."<br />";
						}

					} else {
                        echo "Error";
                    }
                }
            }
        }
    }

}



?>


<!DOCTYPE HTML>

<html>

<head>

    <title>Data Update</title>

    <style>
        .textlabel {
            display: block;
            float: left;
            clear: left;
            width: 70px;
        }

        .textbox {
            display: block;
            float: left;
        }

        .text {
            height: 30px;
        }

        .col {
            display: block;
            float: left;
            width: 20px;
        }
    </style>

</head>


<body>

    <form name="files" method="POST" action="VolunteerUpdate.php">


        <fieldset>
            <legend>Select City</legend>

            <input type="radio" name="city" value="Agra" id="Agra" class="radiobutton" />
            <label for="Agra" class="radio label">Agra</label><br />
            <input type="radio" name="city" value="Prayagraj" id="Prayagraj" class="radiobutton" />
            <label for="Prayagraj" class="radio label">Prayagraj</label><br />
            <input type="radio" name="city" value="Varanasi" id="Varanasi" class="radiobutton" />
            <label for="Varanasi" class="radio label">Varanasi</label><br />
            <input type="radio" name="city" value="Lucknow" id="Lucknow" class="radiobutton" />
            <label for="Lucknow" class="radio label">Lucknow</label><br />
            <input type="radio" name="city" value="Patna" id="Patna" class="radiobutton" />
            <label for="Patna" class="radio label">Patna</label><br />
            <input type="radio" name="city" value="Kanpur" id="Kanpur" class="radiobutton" />
            <label for="Kanpur" class="radio label">Kanpur</label><br />
            <input type="radio" name="city" value="Delhi" id="Delhi" class="radiobutton" />
            <label for="Delhi" class="radio label">Delhi</label><br />
            <input type="radio" name="city" value="Ayodhya" id="Ayodhya" class="radiobutton" />
            <label for="Ayodhya" class="radio label">Ayodhya</label><br />
            <input type="radio" name="city" value="Mathura" id="Mathura" class="radiobutton" />
            <label for="Mathura" class="radio label">Mathura</label><br />
            <input type="radio" name="city" value="Chennai" id="Chennai" class="radiobutton" />
            <label for="Chennai" class="radio label">Chennai</label><br />
            <input type="radio" name="city" value="Mumbai" id="Mumbai" class="radiobutton" />
            <label for="Mumbai" class="radio label">Mumbai</label><br />
            <input type="radio" name="city" value="Ahmedabad" id="Ahmedabad" class="radiobutton" />
            <label for="Ahmedabad" class="radio label">Ahmedabad</label><br />


        </fieldset>

        <fieldset>
            <legend>Entry Type</legend>

            <input type="radio" name="datatype" value="hospital" id="Hospital" class="radiobutton" />
            <label for="Hospital" class="radio label">Covid Hospital Detail</label><br />
            <input type="radio" name="datatype" value="plasma" id="Plasma" class="radiobutton" />
            <label for="Plasma" class="radio label">Plasma Donor Details</label><br />
            <input type="radio" name="datatype" value="oxygen" id="Oxygen" class="radiobutton" />
            <label for="Oxygen" class="radio label">Oxygen Refilling Center Details</label><br />
            <input type="radio" name="datatype" value="ambulance" id="Ambulance" class="radiobutton" />
            <label for="Ambulance" class="radio label">Ambulance Servise Details</label><br />
            <input type="radio" name="datatype" value="test" id="Test" class="radiobutton" />
            <label for="Test" class="radio label">Covid Test Center Details</label><br />
            <input type="radio" name="datatype" value="medical" id="Medical" class="radiobutton" />
            <label for="Medical" class="radio label">Medical Store Details</label><br />

        </fieldset>



        <fieldset>
            <legend>Upload Data</legend>

            <div class="text"><label><span class="textlabel">Name 1</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name1" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 1</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont1" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 1</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop1" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 2</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name2" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 2</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont2" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 2</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop2" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 3</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name3" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 3</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont3" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 3</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop3" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 4</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name4" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 4</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont4" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 4</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop4" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 5</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name5" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 5</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont5" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 5</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop5" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 6</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name6" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 6</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont6" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 6</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop6" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 7</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name7" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 7</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont7" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 7</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop7" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 8</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name8" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 8</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont8" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 8</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop8" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 9</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name9" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 9</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont9" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 9</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop9" size="50" />
                </label>
            </div>

            <div class="text"><label><span class="textlabel">Name 10</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Name10" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Contact 10</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Cont10" size="50" />
                </label>
            </div>
            <div class="text"><label><span class="textlabel">Property 10</span><span class="col"> : </span>
                    <input type="text" class="textbox" name="Prop10" size="50" />
                </label>
            </div>
        </fieldset>
        <input type = "submit" class = "sub" value = "Update" />
        <input type = "reset" />
    </form>
</body>

</html>