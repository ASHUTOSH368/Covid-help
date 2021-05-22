<?php
include 'Functions.php';
include 'Link.php';

$msg = '<p>Dont have an account? <a href="volunteerRegister.php">Register</a></p>';

if (isset($_POST['email']) and isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!($email === "" and $password === "")){

        $query = "SELECT Id FROM volunteer WHERE email = '";
        $query .= $email."' AND pass = '";
        $query .= $password."'";

        $result = mysqli_query($link,$query);

        if(mysqli_num_rows($result)){
            $msg = '<p>You are Logged In. <a href = "VolunteerUpdate.php">Update Website</a></p>';
        } else {
            $msg = '<p>Invalid Email or Password. <a href="volunteerRegister.php">Register</a></p>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN US AS VOLUNTEER</title>
    <style>
        body{
            color: cyan;
            margin:auto;
        }
        
        a{
    background-color:rgb(214, 214, 247);
    text-decoration: none;
    border: 3px solid red; 
        }
        #corner{
            background-color: red;
        }
div{
    text-align: center;
}
#disc{
    color: black;
}
    </style>
</head>
<body background="../images/back.jpg" style="background-repeat: no-repeat; background-size: 100% 100%;" >
    <table id="corner" border="3px">
        <thead>
        <th><a href="../index.html">HOME</a></th>
        <th><a href="../html/covid-19&symptoms.html">COVID-19 & ITS SYMPTOMS</a></th>
        <th><a href="../html/FAQ.html">FAQ</a></th>
    </thead>
<tr>
    <th><a href="https://www.cdc.gov/vaccines/covid-19/index.html">RESOURCES</a></th>
    <th><a href="https://www.who.int/news-room/feature-stories/detail/how-do-vaccines-work">RESEARCHES</a></th>
</tr>
    </table>
    <div>
    <img src="../images/site logo.png" alt="image loading" width="350px" height="180px">
    <h1>Wecome To CovidHelp</h1>
    <h1>VOLUNTEER LOGIN</h1>
   <form method="POST" action="volunteerLogin.php">
<label>
     EMAIL :
    <input type="email" name="email" placeholder="Enter Your Email" value="">
</label>
<p></p>
<label>
ENTER PASSWORD :
<input type="password" name="password" value="">
</label>
<p></p>
<input type="submit" value="LOG IN">

   </form>

<?php if(isset($msg)){ echo $msg; } ?>


<h1>Important link</h1>
<a href="https://www.cowin.gov.in/">Vaccination registration</a>
<p></p>
<a href="https://www.who.int/">WHO Official Website</a>
<p></p>
<a href="https://www.mohfw.gov.in/">Health Ministry Of INDIA</a>
<p></p>
    <a href="mailto:gby2304@gmail.com">Contact Us</a> 
    <P></P>
    <a href="../html/aboutus.html">About Us</a>
    

</div>
<p id="disc">DISCLAIMER: This site is hosted and governed by team tech-worrior. and data displayed on this taken by various sites of helping authorities.</p>
</body>
</html>