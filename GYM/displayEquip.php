 
<?php

include_once ('dbconnect1.php');
$query = "SELECT * FROM Equipment";
$result = mysqli_query($con, $query);

?>
<html>
<style type="text/css">
  
 

</style>

<body> 

 <table  align="center" border="5px" style="width: 700px; line-height: 40px; font-size: 22px;  ">

    <tr>
      <th colspan="4" style="background-color: #3d4043; color: yellow;"><h3>Equipment Records</h3></th>
    </tr>
    
    <t>

      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">ID</th>
       <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Equipment Name</th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Condition  </th>
      <th style="background-color: #3d4043; color: yellow; font-size: 20px;">Rent</th>
   

    </t>
  

    <?php

if($result=mysqli_query($con,$query))
{

    while ($rows=mysqli_fetch_row($result)) {
      # code...
      $condition = $rows[2];
      ?>


<tr align="center" style="background-color: white;">
  <td><?php echo $rows[0]; ?></td>
  <td><?php echo $rows[1]; ?></td>
  

<?php if($condition != "Need to be replaced")
  {
    ?>
   <td><?php echo $rows[2]; ?></td>
  
<?php 

}
else {
  ?>
    <td style="color: red;"><label>Need to be replaced</label></td>
<?php
}
?>
<td><?php echo $rows[3]; ?></td>
</tr>

<?php
}

}

?>

</table>
</body>
</html>