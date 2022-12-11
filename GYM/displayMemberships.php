 
<?php

include_once ('dbconnect1.php');
$query = "SELECT * FROM Membership";
$result = mysqli_query($con, $query);

?>
<html>
<style type="text/css">
  
 

</style>

<body> 

 <table  align="center" border="5px" style="width: 800px; line-height: 40px; font-size: 22px;  ">

    <tr>
      <th colspan="5" style="background-color: #3d4043; color: yellow;"><h3>Memberships Record</h3></th>
    </tr>
    
    <t>

      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">ID</th>
       <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Date Created</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Expiry Date  </th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Type</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Owner</th>

    </t>
  

    <?php

if($result=mysqli_query($con,$query))
{

    while ($rows=mysqli_fetch_row($result)) {

      $memberID = $rows[4];
      $type = $rows[3];
      # code...
      ?>


<tr align="center" style="background-color: white;">
  <td><?php echo $rows[0]; ?></td>
  <td><?php echo $rows[1]; ?></td>
  <td><?php echo $rows[2]; ?></td>
  <td> <a style= "color:blue;" href = "memtype.php?var1=<?php echo $type; ?>"> <?php echo $rows[3]; ?> </a></td>
  <?php if($memberID != "")
  {
    ?>
   <td> <a style= "color:blue;" href = "memberAssigned.php?var=<?php echo $memberID; ?>"> <?php echo $rows[4]; ?> </a></td>
  
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