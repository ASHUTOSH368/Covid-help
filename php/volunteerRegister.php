<?php
include 'Functions.php';
include 'Link.php';

$msg = '<p>Already Registered? <a href="volunteerLogin.php">Log In</a>';

if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['contact']) and isset($_POST['adult']) and isset($_POST['address']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $adult = $_POST['adult'];
    $address = $_POST['address'];

    if(!($email === "")){
        $query = "SELECT * FROM volunteer WHERE email = '";
        $query .= $email."'";

        $result = mysqli_query($link,$query);

        if (mysqli_num_rows($result)){
            $msg = '<p>You are already Registered. <a href="volunteerLogin.php">Log In</a></p>';
        } else {
            $query = "INSERT INTO volunteer (vname, email, pass, contact, adult, city) VALUES ('";
            $query .= $name."', '";
            $query .= $email."', '";
            $query .= $password."', '";
            $query .= $contact."', '";
            $query .= $adult."', '";
            $query .= $address."')";

            if (mysqli_query($link,$query)){

                $msg = '<p>SignUp successful. <a href="volunteerLogin.php">Log In</a></p>';
            }

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
    <h1>JOIN US AS VOLUNTEER</h1>
   <form method="POST" action="volunteerRegister.php">
<label>
    VOLUNTEER's NAME : 
    <input type="text" name="name" placeholder="Enter Your Name" value="">
</label>
<p></p>
<label>
     EMAIL :
    <input type="email" name="email"placeholder="Enter Your Email" value="">
</label>
<p></p>
<label>
SET PASSWORD :
<input type="password" name="password" value="">
</label>
<p></p>
<label>
    CONTACT NO :
<input type="text" name="contact" placeholder="Enter your Contact No" value="">
</label>
<p></p>
<label>
   ARE YOU  18+ ? : 
   <label for="age">YES</label>
<input type="radio" id="age" name="adult" value="YES">
<label for="age">NO</label>
<input type="radio" id="age" name="adult" value="NO">


</label>
<p></p>
<label>
    PERMANENT ADDRESS: 
    <input type="text" name="address" placeholder="Enter your address" value="">
</label>
<p></p>
<input type="submit" value="Register">
<?php if(isset($msg)){ echo $msg; }?>

   </form>




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
