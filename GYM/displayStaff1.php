 
<?php


include_once ('dbconnect1.php');

$x = $_GET['var'];
echo $x;
$query = "SELECT * FROM Staff WHERE staffNo = ". $x;
$result = mysqli_query( $query);

?>

<html>
<style type="text/css">
  
 

</style>

<body> 

 <table  align="center" border="5px" style="width: 800px; line-height: 40px; font-size: 22px;  ">

    <tr>
      <th colspan="7" style="background-color: #3d4043; color: yellow;"><h3>Staff Records</h3></th>
    </tr>
    
    <t>

      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">ID</th>
       <th style="background-color: #3d4043; color: yellow; font-size: 20px;">First Name</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Last Name  </th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Position</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Gender</th>
           <th style="background-color: #3d4043; color: yellow; font-size: 20px;">DOB</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Salary</th>
    </t>
  

    <?php

if($result=mysqli_query($con,$query))
{

  $rows=mysqli_fetch_row($result);
      # code...
      ?>


<tr align="center" style="background-color: white;" >
  <td><?php echo $rows[0]; ?></td>
  <td><?php echo $rows[1]; ?></td>
  <td><?php echo $rows[2]; ?></td>
  <td><?php echo $rows[3]; ?></td>
  <td><?php echo $rows[4]; ?></td>
 <td><?php echo $rows[5]; ?></td>
  <td><?php echo $rows[6]; ?></td>
</tr>



<?php



    
  }
 

?>

</table>
</body>
</html> 

