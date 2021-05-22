<?php
$city = $_GET['city'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $city; ?> Services</title>
    <style>
        body{
color: cyan;
text-align: center;
}
#corner{
    background-color: red;
}
a{
    background-color:rgb(214, 214, 247);
    text-decoration: none;
    border: 3px solid red; 
   }
   #list{
       margin: auto;
       background-color: red;
   }
   p{
       color: black;
   }
    </style>
</head>
<body background="../back.jpg" style="background-repeat: no-repeat; background-size: 100% 100%;" >
    <table id="corner" border="3px">
        <thead>
        <th><a href="../index.html">HOME</a></th>
        <th><a href="../php/volunteerRegister.php">JOIN US AS VOLUNTEER</a></th>
        <th><a href="../html/FAQ.html">FAQ</a></th>
    </thead>
    <tr>
        <th><a href="https://www.who.int/news-room/feature-stories/detail/how-do-vaccines-work">RESEARCHES</a></th>
        <th><a href="../html/covid-19&symptoms.html"> COVID-19 & SYMPTOMS</a></th>
        <th><a href="https://www.cdc.gov/vaccines/covid-19/index.html">RESOURCES</a></th>
    </tr>
</table>
    <img src="../images/site logo.png" alt="image loading" width="350px" height="180px">
    <h2>Welcome To CovidHelp</h2>
    <h1><?php echo $city; ?> SERVICES</h1>
<table ID="list" border="3px">
    <thead>
        <th><a href="Hospital.php?city=<?php echo $city; ?>">COVID HOSPITALS</a></th>
        <th><a href="Plasma.php?city=<?php echo $city; ?>">PLASMA DONARS</a></th>
        <th><a href="Oxygen.php?city=<?php echo $city; ?>">OXYGEN REFILING</a></th>
    </thead>
    <tr>
        <th><a href="Ambulance.php?city=<?php echo $city; ?>">AMBULENCE </a></th>
    <th><a href="Test.php?city=<?php echo $city; ?>">COVID TEST CENTRE</a></th>
    <th><a href="Medical.php?city=<?php echo $city; ?>">MEDICINES</a></th>
</tr>
</table>




<h1>Important link</h1>
<a href="https://www.cowin.gov.in/">Vaccination registration</a>
<p></p>
<a href="https://www.who.int/">WHO Official Website</a>
<p></p>
<a href="https://www.mohfw.gov.in/">Health Ministry Of INDIA</a>
<p></p>
    <a href="mailto:gby2304@gmail.com">Contact Us</a> 
    <P></P>
    <a href="./aboutus.html">About Us</a>
    

<p><span>DISCLAIMER</span> : This site is hosted and governed by team tech-worrior. and data displayed on this taken by various sites of helping authorities.</p>
</body>
</html>