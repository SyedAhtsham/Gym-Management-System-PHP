
<?php

include_once ('dbconnect1.php');

$x = $_POST['memberID'];
$query = "SELECT * FROM Member WHERE memberID = $x";
$result = mysqli_query($con, $query);
 $rows=mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html>
<head>
  <title>GYM MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">


<style>
.checked {
  color: orange;
}

input:focus::placeholder {
  color: transparent;
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  cursor: pointer;
  width: 200px;
  display: block;
  background-color: #4CAF50;
}



.center {
  position: absolute;
  left: 40%;
  justify-content: center;
  align-items: center;
  height: 300px;
padding-top: 100px;

}






</style>



<style type="text/css">
  
  
#mid
{
  width: 1650px;
  height: 900px;
  
}


#header
  {
    float: left;
    background-color: rgb(60,64,67);
    color: yellow;
    text-align: center;
    padding: 6px;
    width: 1650px;
    height: 145px;
float: left;

  }



  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 680px;
  width: 160px;

 /* position: fixed;
  z-index: 1;
  top: 0;
  left: 0;*/
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  float: left;

}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  padding-left: 0px;
  text-decoration: none;
  font-size: 20px;
  color: orange;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



#mid1
{
  width: 160px;
  height: 680px;
  background-color: yellow;
  float: left;
  font-size: 20px;
  text-decoration: none;
   color: black;
   text-indent: 15px;

}




#mid2{
  width: 1260px;
  height: 680px;
  background-color: grey;
  float: left;
}

#mid3{
  width: 230px;
  height: 680px;
  background-color: rgb(17,17,17);
  float: left;

  
}

  #footer
  {
    width: 1660px;
    background-color: rgb(60,64,67);
    color: yellow;
    text-align: center;
    padding: 1px;
    clear: both;
    height: 75px;
    float: left;
  }

  /*#left
  {
    line-height: 30px;
    background-color: yellow;
    height: 600px;
    width: 140px;
    flex-flow: right;
    padding: 5px;
  }
  */

</style>
</head>
<body>

<div id="mid">

<div id="header">

  

  <div style="width: 200px; height: 23px;" >
    <a href="index1.html"><img src="logo2.png" width="130px"> </a>
    
  </div>
  <div style="width: 1500px; height: 80px;">
  <a href="index1.html" style="text-decoration: none; color: orange;"><h2>GYM Management System</h2></a>
  
</div>
  
</div>



  <div id="mid1">




<div class="sidenav">
  <a href="index.html">Home</a>
   <a href="maintain.html">Maintain Data</a>
    <a href="generateReports.php">Generate Reports</a>
    <a href="membersRecord.php">Members</a>
 <a href="classesRecord.php">Classes</a>
  <a href="staffRecords.php">Instructors</a>
  <a href="equipRecords.php">Equipments</a>

  <a href="membershiprecords.php">Memberships</a>
 



 
</div>
</div>

<!-- Confirm Order -->
<!-- total amount :   Rs.400 -->





  <div id="mid2">


    
<body> 

<?php
if($rows>0)
{


?>

 <table  align="center" border="5px" style="width: 800px; line-height: 40px; font-size: 22px;  ">

    <tr>
      <th colspan="5" style="background-color: #3d4043; color: yellow;"><h3>Members Records</h3></th>
    </tr>
    
    <t>

      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">ID</th>
       <th style="background-color: #3d4043; color: yellow; font-size: 20px;">First Name</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Last Name  </th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Contact</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Gender</th>
 
    </t>
  

    <?php

if($result=mysqli_query($con,$query))
{
      # code...
  // $membershipID = $rows[5];
   
      ?>


<tr align="center" style="background-color: white;">
  <td><?php echo $rows[0]; ?></td>
  <td><?php echo $rows[1]; ?></td>
  <td><?php echo $rows[2]; ?></td>
  <td><?php echo $rows[3]; ?></td>
  <td><?php echo $rows[4]; ?></td>


</tr>



<?php
  

}
}

else{

?>
    <h2 style="color: red;">Record Not Found in the Database...</h2>
<?php
  }


?>

</table>
</body>

</div>


<br>





  <div id="mid3" style="font-size: 20px; text-decoration: none; color: white;"> 
 <pre><h3> <u>Class Ratings</u></h3></pre>
  <ul><li>Meditation  </li><b>5.0 </b>  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
    
    

    <li>Yoga </li><b>5.0 </b><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
    

    <li>Fitness and Workout </li><b>4.0 </b><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span> 
    
    <li>Stretching </li><b>4.0 </b><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span> 
    
    <li>Body building </li><b>3.0 </b><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
    
    <li>Strength building </li><b>4.0 </b><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span> 
    



</ul>

<img src="logo1.jpg" style="width: 180px; margin-left: 20px;">



</div>


<div id="footer" style="float: left; ">


  <div style="width: 700px; height: 75px; float: left; ">
  <a href="about.html" style="color: yellow;" ><br>About us!<br></a>
  <a href="cont.html" style="color: yellow;">Contact us!<br></a>
  <a href="email.html" style="color: yellow;">email: sham.qau@gmail.com</a>

</div>

<div style="width: 960px; height: 75px; float: left;">

<p style="text-align: left;">Copyright gym4u.org</p>
  <p style="text-align: left; text-indent: 40px;"> © 2018-2019 </p>



</div>
  
</div>



</div>




</body>
</html>

