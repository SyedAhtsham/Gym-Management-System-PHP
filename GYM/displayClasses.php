 
<?php

include_once ('dbconnect1.php');
$query = "SELECT * FROM Class";
$result = mysqli_query($con,$query);

?>
<html>
<style type="text/css">
  
 

</style>

<body> 

 <table  align="center" border="5px" style="width: 800px; line-height: 40px; font-size: 22px;  ">

    <tr>
      <th colspan="5" style="background-color: #3d4043; color: yellow;"><h3>Classes Records</h3></th>
    </tr>
    
    <t>

      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">ID</th>
       <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Class Name</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Size  </th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Fee ($)</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Instructor ID</th>

    </t>
  

    <?php

if($result=mysqli_query($con,$query))
{

    while ($rows=mysqli_fetch_row($result)) {
      $staffID = $rows[4];
      # code...
      ?>


<tr align="center" style="background-color: white;">
  <td><?php echo $rows[0]; ?></td>
  <td><?php echo $rows[1]; ?></td>
  <td><?php echo $rows[2]; ?></td>
  <td><?php echo $rows[3]; ?></td>
  <?php if($staffID != "")
  {
    ?>
   <td> <a style= "color:blue;" href = "staffAssigned.php?var=<?php echo $staffID; ?>"> <?php echo $rows[4]; ?> </a></td>
  
<?php 

}
else {
  ?>
    <td><?php echo "Not Assigned"; ?></td>
<?php
}
?>
</tr>



<?php



    }
  }

?>

</table>
</body>
</html>