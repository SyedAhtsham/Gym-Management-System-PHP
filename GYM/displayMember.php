 
<?php

include_once ('dbconnect1.php');
$query = "SELECT * FROM Member";
$result = mysqli_query($con, $query);

?>

<html>
<style type="text/css">
  
 

</style>

<body> 

 <table  align="center" border="5px" style="width: 800px; line-height: 40px; font-size: 22px;  ">

    <tr>
      <th colspan="5" style="background-color: #3d4043; color: yellow;"><h3>Members Record</h3></th>
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

    while ($rows=mysqli_fetch_row($result)) {
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

?>

</table>
</body>
</html> 

