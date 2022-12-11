 
<?php

include_once ('dbconnect1.php');
$query = "SELECT * FROM Staff";
$result = mysqli_query($query);

?>
<html>
<body> 


    <?php

if($result=mysqli_query($con,$query))
{

    while ($rows=mysqli_fetch_row($result)) {
      # code...
      ?>


    <input type="radio" id="staff" name="fName" value="<?php echo $rows[0]; ?>">
  <label for="staff"> <?php echo $rows[1]." "; echo $rows[2]; ?></label><br>
 

<?php



    }
  }

?>

</table>
</body>
</html>